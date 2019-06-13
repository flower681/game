<?php

namespace app\admin\controller;
use think\Db;
use app\admin\model\ChatUserModel;
use think\Request;

class Chat extends Base
{
	public function send(Request $request)
	{
		$client_id = $request->post('client_id');
		$client_name= $request->post('client_name');
		$user_id= session('id');
		$data = ['user_id'=>$user_id,'name'=>$client_name,'client_id'=>$client_id];
//		将数据入库
//		return $data;
		$chatuser = new ChatUserModel();
		$user = $chatuser->selectUser($client_id);
		return $user;
		if(!$user)
		{
			$ret = $chatuser->insertUser($data);
			if ($ret['code'] == 1){

				return json(['code' => 1, 'data' => array(), 'msg' => '成功']);

			}

			return json(['code' => -1, 'data' => array(), 'msg' => '失败']);
		}

//		return $ret;
		//返回值判断


	}
}