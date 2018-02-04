<?php

/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 22.01.2018
 * Time: 23:19
 */
class game_model extends core_model
{
    public  $mysqli;
    public  $coinCont;
    public  $result;

    public function dbCconnect()
    {
        $this->mysqli = new mysqli("localhost", "root", "", "DCTame");
        if ($this->mysqli->connect_errno) {
            printf("Не удалось подключиться: %s\n", $this->mysqli->connect_error);
            exit();
        }
    }

    public function getCoinCount()
    {
        $this->dbCconnect();
        $this->result = $this->mysqli->query("SELECT coin FROM gold where name like 'username1'");
            $this->result->data_seek(0);
            $row = $this->result->fetch_assoc();
            echo "coin count =" . $row['coin'] . "\n";


        print  " <br> " . $this->coinCont[gold];
        return $this->coinCont;
    }
}
