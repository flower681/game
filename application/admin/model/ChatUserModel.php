<?php

namespace app\admin\model;
use think\Model;

class ChatUserModel extends Model
{
	protected $name = 'chatuser';


	/**
	 * 插入聊天人员信息
	 * @param $param
	 * @return array
	 */
	public function insertUser($param)
	{
		try{
			$result =  $this->save($param);
			if(false === $result){
				// 验证失败 输出错误信息
				return ['code' => -1, 'data' => '', 'msg' => $this->getError()];
			}else{

				return ['code' => 1, 'data' => '', 'msg' => '添加人员成功'];
			}
		}catch( \PDOException $e){

			return ['code' => -2, 'data' => '', 'msg' => $e->getMessage()];
		}
	}

	/**
	 * 查询数据库是否存在用户
	 */

	public function selectUser($user_id)
	{
		return $this->where('user_id',$user_id)->select();
	}

	/**
	 * 获取chatuser表中的所有用户
	 */
	public function getUser()
	{
		return $this->select();
	}


}