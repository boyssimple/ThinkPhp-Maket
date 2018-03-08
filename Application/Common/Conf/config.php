<?php
return array(
    'TMPL_PARSE_STRING'=>array(
        '__ADMIN__' => __ROOT__.'/Public/Admin/',
        '__HOME__' => __ROOT__.'/Public/Home/',
        '__UI__' => __ROOT__.'/Public/Vendor/gentelella',
        '__JS__' => __ROOT__.'/Public/Vendor/',
    ),
    //数据库配置信息
    'DB_TYPE'   => 'mysqli', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'supermarket', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'root', // 密码
    'DB_PORT'   => 8889, // 端口
    'DB_PREFIX' => 's_', // 数据库表前缀
);