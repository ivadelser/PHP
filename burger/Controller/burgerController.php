<?php
    require_once "Model/burger.php";
    
    class burgerController{

        private $burgerModel;

        public function __construct(){
            $this->burgerModel = new Burger();
        }

        public function index(){
            $burger = $this->burgerModel->getAll();
            require "View/listar.php";
        }

        public function create(){
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $name = $_POST["name"];
                $description = $_POST["description"];
                $price = $_POST["price"];
                $image = $_POST["image"];
                $category = $_POST["category"];
                $this->burgerModel->save($name, $description, $price, $image, $category);
                header("Location: index.php");
            } else{
                require "View/create.php";
            }
        }

        public function edit($id){
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $name = $_POST["name"];
                $description = $_POST["description"];
                $price = $_POST["price"];
                $image = $_POST["image"];
                $category = $_POST["category"];
                $this->burgerModel->update($id, $name, $description, $price, $image, $category);
                header("Location: index.php");
            } else {
                $burger = $this->burgerModel->getById($id);
              
                require "View/edit.php";
            }
        }

        public function delete($id){
            $this->taskModel->delete($id);
            header("Location: index.php");
        }
    }
?>