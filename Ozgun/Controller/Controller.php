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

    public function searchPage(){

        $shoe = new shoe();
        $shoes = $shoe->getAll();

        if(isset($_GET['search'])){

            $searchBar = filter_input(INPUT_GET, 'searchBar');
            $year = filter_input(INPUT_GET, 'year');

            if(!empty($searchBar))
                $shoes = $shoe->getByName($searchBar);
            if(!empty($year))
                $shoes = $shoe->getByYear($year);
        }

        require VIEW_PATH . 'search.php';

    }



}