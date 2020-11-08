<?php


namespace App\Services\Swoole\Table;


class UserTable extends AbstractTable
{
    public function __construct($tableName = 'user')
    {
        parent::__construct($tableName);
    }

    //登陆
    public  function  login($uid,$fd){
        $this->set('uid:' . $uid,  ['value' => $fd]);// 绑定uid到fd的映射
        $this->set('fd:' . $fd, ['value' => $uid]);// 绑定fd到uid的映射
    }

    //退出
    public  function  logout($fd){

        $uid = $this->get('fd:' . $fd);
        \Log::info('uid del =',[$uid]);
        if ($uid !== false) {
            $this->del('uid:' . $uid['value']); // 解绑uid映射
        }
        $this->del('fd:' . $fd);// 解绑fd映射

    }
}
