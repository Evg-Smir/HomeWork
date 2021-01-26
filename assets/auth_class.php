<?php

class User {
    public $login;
    public $password;
    public $db_host;
    public $db_user;
    public $db_password;
    public $db_name;
    public $db_table;
    public $connect;

    public function __construct ()
    {
        $this->login = $this->$_POST["login"];
        $this->password = $this->$_POST["password"];

        $this->db_host = 'localhost';
        $this->db_user = 'Evgeny';
        $this->db_password = 'kiloman';
        $this->db_name = 'auth';
        $this->db_table = 'users';
        $this->connect = new mysqli($this->db_host,$this->db_user,$this->db_password,$this->db_name);
    }

    public function login()
    {
        $qry = "SELECT login, password FROM `users` WHERE login = '{$this->login}' AND password = '{$this->password}'";
        $result = mysqli_query($this->connect, $qry) or die(mysqli_error($this->connect));
        $num_rows = mysqli_num_rows($result);
        var_dump(mysqli_error($this->connect));

        if($num_rows!=0) {
            header('Location: https://fact.digital/');
        } else echo "<p style='color: red; font-size: 20px'>Проблемы со входом!!</p><hr>";
    }
}
