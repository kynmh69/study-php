<?php
class User
{
    public string $username;
    public bool $status = false;
    public function __construct($user, $status)
    {
        $this->username = $user;
        $this->status = $status;
    }
    public function printUsername()
    {
        echo $this->username;
    }

    public function printStatus()
    {
        if ($this->status) {
            echo "$this->username ログイン中";
        } else {
            echo "ログアウト";
        }
    }
}

$user = new User("Taro", true);

$user->printUsername();
$user->printStatus();
