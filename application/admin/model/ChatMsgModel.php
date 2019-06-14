<?php

namespace app\admin\model;
use think\Model;
use app\admin\model\ChatUserModel;
use think\Db;
use think\process\Builder;

class ChatMsgModel extends Model
{
	protected $name = 'chatmsg';


	/**
	 * 插入聊天信息
	 * @param $param
	 * @return array
	 */
	public function insertMsg($param)
	{
		try{
			$result =  $this->save($param);
			if(false === $result){
				// 验证失败 输出错误信息
				return ['code' => -1, 'data' => '', 'msg' => $this->getError()];
			}else{

				return ['code' => 1, 'data' => '', 'msg' => '添加消息成功'];
			}
		}catch( \PDOException $e){

			return ['code' => -2, 'data' => '', 'msg' => $e->getMessage()];
		}
	}

	/**
 * 获取所有群聊消息
 */
	public function getAllMsg()
	{

		$result =  $this->where('tuid','all')->order('send_time',asc)->limit(20)->select();

		return $result;
	}

	/**
	 * 获取所有单聊消息
	 */
	public function getOneMsg($select_client_id,$from_client_id)
	{

		$result =  $this->where(function($query) use ($select_client_id,$from_client_id){
			$query->where(['tuid'=>$select_client_id,'fuid'=>$from_client_id]);})
			->whereOr(function($query) use ($select_client_id,$from_client_id){
			$query->where(['fuid'=>$select_client_id,'tuid'=>$from_client_id]);
		})->order('send_time',asc)->limit(20)->select();



//		where(['tuid'=>$select_client_id,'fuid'=>$from_client_id])->whereOr(['fuid'=>$select_client_id,'tuid'=>$from_client_id])->order('send_time',asc)->limit(20)->select();
//	return db('chatuser')->getLastSql();
		return $result;
	}



}