<?php 
/* 関数の定義はfunctions/function-[name].php として設置してください*/

foreach (glob(get_template_directory() . "/functions/*.php") as $filename) {
    require_once $filename;
}