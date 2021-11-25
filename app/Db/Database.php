<?php

namespace App\Db;

use \PDO;
use PDOException;

class Database{

    const HOST = 'localhost:3306';
    const USER = 'root';
    const PASSWORD = '';
    const DBNAME = 'allblacks_db';

    private $table;

    /**
     * instancia de conexão com o banco de dados
     * @var PDO
     */
    private $connection;

    public function __construct($table = null)
    {
        $this->table = $table;
        $this->setConnection();
    }

    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::DBNAME,self::USER,self::PASSWORD);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }
    }

    public function execute($query, $params = []){
        try{
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        }catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }
    }

    public function insert($values){
        //Dados a serem inseridos
        $fields = array_keys($values);
        $binds = array_pad([], count($fields), '?');

    
        //Query do DB
        $query = 'INSERT INTO '.$this->table.' ('.implode(',', $fields).') VALUES ('.implode(',',$binds).')';

        //Executa o insert
        $this->execute($query, array_values($values));

        //retorna o ID inserido
        return $this->connection->lastInsertId();
    }

    public function select($where = null, $order = null, $limit = null, $fields = '*'){
        
        $where = strlen($where) ? 'WHERE '.$where : '';
        $order = strlen($order) ? 'ORDER BY '.$order : '';
        $limit = strlen($limit) ? 'LIMIT '.$limit : '';
        
        $query = 'SELECT '.$fields.' FROM '.$this->table.' '.$where.' '.$order.' '.$limit;
        
        return $this->execute($query);
    }

    public function selectEmail($where = null, $order = null, $limit = null, $fields = 'email'){

        $where = strlen($where) ? 'WHERE '.$where : '';
        $order = strlen($order) ? 'ORDER BY '.$order : '';
        $limit = strlen($limit) ? 'LIMIT '.$limit : '';
        
        $query = 'SELECT '.$fields.' FROM '.$this->table.' '.$where.' '.$order.' '.$limit;

       // echo "<pre>"; echo "Estou na query"; print_r($query);echo "</pre>";exit;

        return $this->execute($query);
    }

    public function update($where, $values){
        $fields = array_keys($values);

        $query = 'UPDATE '.$this->table.' SET '.implode('=?,',$fields).'=? WHERE '.$where;

        $this->execute($query, array_values($values));

        return true;
    }

    public function delete($where){

        $query = 'DELETE FROM '.$this->table.' WHERE ' .$where;

        $this->execute($query);

        return true; 
    }

}