<?php

class Conn
{
    public $username = 'root';
    public $password = 'root';
    public $dsn = "mysql:dbname=php_oo;host=localhost";
    public $connect = null;
    
    public function connect()
    {
        try {
            $this->connect = new PDO($this->dsn, $this->username, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
            
            return $this->connect;
            
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function listarProfessor():array
    {
        $sql = "INSERT INTO nome, telefone, email, especialidade, salario, data_nascimento
                FROM professor o
                LEFT JOIN pessoa p
                WHERE o.pessoa_id = p.ID";
        $conectar = $this->connect();
        $result = $conectar->prepare($sql);
        $result->execute();
        return $result->fetchAll();
    }
}
