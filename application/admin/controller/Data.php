<?php
namespace app\admin\controller;

class Data extends Base
{
    //备份首页列表
    public function index()
    {
        $tables = db()->query('show tables'); 
        
        foreach($tables as $key=>$vo){
            $sql = "select count(0) as alls from ".$vo['Tables_in_'.config('database.database')];
            $tables[$key]['alls'] = db()->query($sql)['0']['alls'];
            $operate = [
                '备份' => "javascript:importData('".$vo['Tables_in_'.config('database.database')]."', ".$tables[$key]['alls'].")",
                '还原' => "javascript:backData('".$vo['Tables_in_'.config('database.database')]."')"
            ];
            $tables[$key]['operate'] = showOperate($operate);
            if(file_exists(config('back_path') . $vo['Tables_in_'.config('database.database')] . ".sql")){
                $tables[$key]['ctime'] = date('Y-m-d H:i:s', filemtime(config('back_path') . $vo['Tables_in_'.config('database.database')] . ".sql"));
            }else{
                $tables[$key]['ctime'] = '无';
            }

        }
        $this->assign([
           'tables' => $tables
        ]);
        return $this->fetch();
    }

    //备份数据
    public function importData()
    {
        set_time_limit(0);
        $table = input('param.table');

        $sqlStr = "SET FOREIGN_KEY_CHECKS=0;\r\n";
        $sqlStr .= "DROP TABLE IF EXISTS `$table`;\r\n";
        $create = db()->query('show create table ' . $table);
        $sqlStr .= $create['0']['Create Table'] . ";\r\n";
        $sqlStr .= "\r\n";

        $result = db()->query('select * from ' . $table);
        foreach($result as $key=>$vo){
            $keys = array_keys($vo);
            $keys = array_map('addslashes', $keys);
            $keys = join('`,`', $keys);
            $keys = "`" . $keys . "`";
            $vals = array_values($vo);
            $vals = array_map('addslashes', $vals);
            $vals = join("','", $vals);
            $vals = "'" . $vals . "'";
            $sqlStr .= "insert into `$table`($keys) values($vals);\r\n";
        }

        $filename = config('back_path') . $table . ".sql";
        $fp = fopen($filename, 'w');
        fputs($fp, $sqlStr);
        fclose($fp);

        return json(['code' => 1, 'data' => '', 'msg' => '备份成功']);
    }

    //还原数据
    public function backData()
    {
        set_time_limit(0);
        $table = input('param.table');

        if(!file_exists(config('back_path') . $table . ".sql")){
            return json(['code' => -1, 'data' => '', 'msg' => '备份数据不存在!']);
        }

        $sqls = analysisSql(config('back_path') . $table . ".sql");
        foreach($sqls as $key=>$sql){
            db()->query($sql);
        }
        return json(['code' => 1, 'data' => '', 'msg' => '还原成功']);
    }

}