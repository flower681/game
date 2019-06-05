<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// $Id$

return [

    // 默认模块名
	'default_module'	=> 'home',
    'url_route_on' => true,
    //各模块公用配置
    'extra_config_list' => ['database', 'route', 'validate'],
    //临时关闭日志写入
    'log' => [
        'type' => 'test',
    ],
	'url_html_suffix' => true,
    'app_debug' => true,
    'default_filter' => ['strip_tags', 'htmlspecialchars'],

    // +----------------------------------------------------------------------
    // | 缓存设置
    // +----------------------------------------------------------------------
    'cache' => [
        // 驱动方式
        'type' => 'file',
        // 缓存保存目录
        'path' => CACHE_PATH,
        // 缓存前缀
        'prefix' => '',
        // 缓存有效期 0表示永久缓存
        'expire' => 0,
    ],

	//默认错误跳转对应的模板文件
	'dispatch_error_tmpl' => APP_PATH . 'jump.html',
	//默认成功跳转对应的模板文件
	'dispatch_success_tmpl' => APP_PATH . 'jump.html',

    //备份数据地址
    'back_path' => APP_PATH .'../mysql/',
    'paginate'               => [
        'type'      => 'bootstrap',
        'var_page'  => 'page',
        'list_rows' => 120,
    ],
    'url_convert' => false,
	'auto_timestamp' => false,

    'exception_ignore_type' => E_WARNING|E_USER_WARNING|E_NOTICE|E_USER_NOTICE,
];