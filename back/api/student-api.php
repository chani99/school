<?php
    require_once 'abstract-api.php';
    require_once 'api.php';
    // require_once '../controllers/StudentController.php';

    class StudentApi extends Api{
        private $controller;
        

        function __construct() {
            $this->controller = new StudentController();
        }


        // // Create a new Students
        // function Create($params) {
        //     return $this->S_controller->CreateStudents($params);
        // }
        

        //  // Get all Studentss or check if a id exists
        // function Read($params) {

        //     if (array_key_exists("id", $params)) {
        //         $Students = $c->getById($params);
        //         return $Students;
        //     }

        //     else {
        //         return $this->S_controller->getAll();
        //     }
        // } 


        // // Update a Students
        // function Update($params) {
        //     $Students =$this->S_controller->UpdateById($params);
        //     return $Students;
        //     }

            
        // //  Delete 1 Students   
        //  function Delete($params) {
        //     $Students = $this->S_controller->DeleteById($params);
        //     return $Students;
            
        // }

    }
?>
