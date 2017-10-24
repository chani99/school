<?php
    require_once 'abstract-api.php';
    require_once 'api.php';
    require_once '../controllers/CourseController.php';

    class CourseApi extends Api{
        public $controller;
        

        function __construct($param) {
            $this->controller = new CourseController($param);
        }


        // // Create a new Courses
        // function Create($params) {
        //     return $this->C_controller->CreateCourses($params);
        // }
        

        //  // Get all Coursess or check if a id exists
        // function Read($params) {

        //     if (array_key_exists("id", $params)) {
        //         $Courses = $c->getById($params);
        //         return $Courses;
        //     }

        //     else {
        //         return $this->C_controller->getAll();
        //     }
        // } 


        // // Update a Courses
        // function Update($params) {
        //     $Courses =$this->C_controller->UpdateById($params);
        //     return $Courses;
        //     }

            
        // //  Delete 1 Courses   
        //  function Delete($params) {
        //     $Courses = $this->C_controller->DeleteById($params);
        //     return $Courses;
            
        // }

    }
?>
