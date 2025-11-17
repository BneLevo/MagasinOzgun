<?php

require_once __DIR__ . '/../Model/Shoe.php';

class Controller{

    public function HomePage(){
        
        $shoe = new Shoe();
        $shoes = $shoe->getAll();

        require VIEW_PATH . 'homepage.php';

    }

    public function shoePage($id){

        $shoe = new Shoe();
        $shoes = $shoe->getById($id);

        if ($id) {
            require VIEW_PATH . 'chaussures.php';
        } else {
            include VIEW_PATH . '404.php';
        }


    }



}