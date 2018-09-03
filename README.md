# Zubora Frame Work

## 概要

なるべく楽にロジックとデザインを切り分けてサイトを構築するための Wordpress フレームワーク．

## ディレクトリ構成

### index.php

index.php は一般的なフレームワークにおけるルーティングの機能を担っています．
具体的には URL に応じて controller を読み込みます．
アクセス先が固定ページの場合は controller-[post_name].php を，投稿ページの場合は controller-[post_type].php を読み込みます．

### controllers/controller-[name].php

出力するデータに対する操作を行った後に template を読み込みます．
template で読み込ませるデータは WP Query によって取得することを推奨します．
データに対する操作のうち，複数の controller で共通するものは function に定義して呼び出します．
アクセス先ページ単体のデータは$post にあらかじめ読み込まれているため，取得しなおす必要はありません．

### functions/function-[name].php

controller で利用する共通関数を定義します．
各ファイルに定義したものはテーマディレクトリのルートにある functions.php によってすべて自動的に読み込まれます．
そのため，controller ではファイルを require することなく，標準関数のように呼び出すことができます．

### templates/template-[name].php

ヘッダー，コンテンツ，フッターといったページのレイアウトを定義します．
ここではデータに対する操作はしないものとします．

### parts/part-[name].php

ページ内の最小単位のパーツを読み込みます．パーツは html で定義され，controller で定義したデータを php タグによって埋め込みます．

### assets/js/, assets/css/, assets/img/

フロントエンドで利用するファイル群を設置します．
