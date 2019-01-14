<?php
interface Ajax{
    const user_token = '10086';
    public function getFriendInfo($uuid);
}
interface Friend{
    function getFriendList();
}
class User implements Ajax,Friend{
    public $name;
    public $uuid;
    function __construct($uuid = '10000'){
        $this->uuid = $uuid;
    }
    function getFriendInfo($arg = '10000'){
       echo $arg . ':' . $this->uuid; 
    }
    function getFriendList(){
        echo 'friend-list';
    }
}
$ming = new User('10010');
$ming->getFriendInfo();
$ming->getFriendList();