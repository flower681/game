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
    //模板参数替换
    'view_replace_str'       => array(
        '__CSS__'    => '/static/admin/css',
        '__JS__'     => '/static/admin/js',
        '__IMG__' => '/static/admin/images',
        '__STATIC__' => '/static',
    ),
    //管理员状态
    'user_status' => [
        '1' => '正常',
        '2' => '禁止登录'
    ],
    //角色状态
    'role_status' => [
        '1' => '启用',
        '2' => '禁用'
    ],
    //用户性别
    'sex_status' => [
        '1' => '男',
        '2' => '女'
    ],
    //出库入库
    'token_status' => [
        '0' => '已经过期',
        '1' => '正常使用',
        '2' => '用户重置'
    ],
    'phone_status' => [
        '0' => '禁用设备',
        '1' => '正常使用',
    ],
    //账户充值
    'money_status' => [
        '1' => '等待审核',
        '2' => '审核通过',
        '3' => '审核已拒'
    ],
    //账户充值
    'money_type' => [
        '1' => '充值',
        '2' => '提现'
    ],
    //日志类型
    'log_status' => [
        '1' => '账户充值',
        '2' => '账户提现',
        '3' => '交易增加',
        '4' => '交易减少',
        '5' => '扣手续费',
        '6' => '提现冻结',
        '7' => '充值被拒',
        '8' => '提现被拒',
    ],
    //库存状态
    'stock_status' => [
        '0' => '已被删除',
        '1' => '正常有效(可以交易)',
        '2' => '已被使用',
        '3' => '已经过期',
        '4' => '使用失败',
        '5' => '可以出库(不可交易)',
        '6' => '手机端已经获取',
        '7' => '后台已经导出',
    ],
    //库存状态
    'stock_goods' => [
        '0' => '否',
        '1' => '是',
    ],
    //库存导入状态
    'import_status' => [
        '0' => '导入成功',
        '1' => '等待导入',
        '2' => '导入失败',
    ],
    //交易状态
    'trans_status' => [
        '1' => '正常挂单',
        '2' => '部分交易',
        '3' => '已经过期',
        '4' => '订单下架',
    ],
    //图片上传地址
    'upload_file_dir' => [
    	'img'=> '/uploads/img/'
	],
    //游戏凭证
    'receipt_type' => [
        '0'=> '普通凭证',
        '1'=> '新型凭证',
    ],
	
];
