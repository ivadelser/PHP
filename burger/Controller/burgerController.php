<?php
    require_once "Model/burger.php";
    require_once "Model/categories.php";
    
    class burgerController{

        private $burgerModel;
        private $categoriesModel;

        public function __construct(){
            $this->burgerModel = new Burger();
            $this->categoriesModel = new Categories();
        }

        public function indexAdmin(){
            $burger = $this->burgerModel->getAll();
            require "View/listarAdmin.php";
        }

        public function indexUser(){
            $categories = $this->categoriesModel->getAll();
            require "View/listarUser.php";
        }

        public function listarProductos($id){
            $idCategory = $id;
            $burger = $this->burgerModel->getAll();
            require "View/listarProductos.php";
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
            $this->burgerModel->delete($id);
            header("Location: index.php");
        }
    }
?>