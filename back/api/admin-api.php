<?php
    require_once 'abstract-api.php';
    require_once 'api.php';
    // require_once '../controllers/AdminController.php';

    class AdminApi extends Api{
        private $controller;
        

        function __construct() {
            $this->controller = new AdminController();
        }


        // // Create a new Admins
        // function Create($params) {
        //     return $this->S_controller->CreateAdmins($params);
        // }
        

        //  // Get all Adminss or check if a id exists
        // function Read($params) {

        //     if (array_key_exists("id", $params)) {
        //         $Admins = $c->getById($params);
        //         return $Admins;
        //     }

        //     else {
        //         return $this->S_controller->getAll();
        //     }
        // } 


        // // Update a Admins
        // function Update($params) {
        //     $Admins =$this->S_controller->UpdateById($params);
        //     return $Admins;
        //     }

            
        // //  Delete 1 Admins   
        //  function Delete($params) {
        //     $Admins = $this->S_controller->DeleteById($params);
        //     return $Admins;
            
        // }

    }
?>