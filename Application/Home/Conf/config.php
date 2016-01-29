<?php
return array(
    //'配置项'=>'配置值'
    'DATA_CACHE_PREFIX' => 'Redis_',//缓存前缀
    'DATA_CACHE_TYPE'=>'Redis',//默认动态缓存为Redis
    'REDIS_HOST'=>'localhost', //redis服务器ip，多台用逗号隔开；读写分离开启时，第一台负责写，其它[随机]负责读；
    'REDIS_PORT'=>'6379',//端口号
    'DATA_EXPIRE'=>0,//超时时间
    'REDIS_PERSISTENT'=>false,//是否长连接 false=短连接
    //'REDIS_AUTH'=>'',//AUTH认证密码

    'DB_TYPE' => 'mongo', // 数据库类型
    'DB_HOST' => 'localhost', // 服务器地址
    'DB_NAME' => 'local', // 数据库名
    'DB_USER' => '', // 用户名
    'DB_PWD' => '', // 密码
    'DB_PORT' => '27017', // 端口
    'LAYOUT_ON'=>false,
    'LAYOUT_NAME'=>'Layout',
    'SESSION_AUTO_START' =>true,
    'SESSION_TYPE'=>'Redis',
    'SESSION_PERSISTENT'    =>  1,        //是否长连接(对于php来说0和1都一样)
    'SESSION_CACHE_TIME'    =>  1,        //连接超时时间(秒)
    'SESSION_EXPIRE'        =>  0,        //session有效期(单位:秒) 0表示永久缓存
    'SESSION_PREFIX'        =>  'sess_',        //session前缀
    'SESSION_REDIS_HOST'    =>  '127.0.0.1', //分布式Redis,默认第一个为主服务器
    'SESSION_REDIS_PORT'    =>  '6379',           //端口,如果相同只填一个,用英文逗号分隔
    'SESSION_DBNAME'=>'session'
    //'SESSION_REDIS_AUTH'    =>  'redis',    //Redis auth认证(密钥中不能有逗号),如果相同只填一个,用英文逗号分隔
);