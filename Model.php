<?php

include_once 'DataBase/DataBase.php';

class Model{
    
    protected $db ;
    private $table;
    private $sql;
    private $result;
    
    public function __construct(){
        $this->db = DBConnection::getConnection();
        
    }
    
    
    
   /* public function getAll() {
        $result = $this->db->query('SELECT * FROM products');

            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                yield $row;
            }

    }
    
    public function getOne(){
        
        
        
    }*/


}