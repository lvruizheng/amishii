<?php

//这个不需要改*** 因为这个是自动加载当前项目的类
require __DIR__.'/../vendor/autoload.php';
//这个修改为引入框架的自动加载类，加载框架核心和第三方类库
require LARAVEL_DIR.'/bootstrap/autoload.php';
