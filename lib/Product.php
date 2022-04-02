<?php
    abstract class Product{
        protected $data = array();
        protected $db;
        public function __construct($data)
        {
            $this->db=new Database;
            $this->data=$data;
        }
        abstract protected function create();  
    }
?>