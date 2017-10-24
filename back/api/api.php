<?php
    require_once 'course-api.php';
    require_once 'student-api.php';
    require_once 'admin-api.php';
    

    // $method = $_SERVER['REQUEST_METHOD']; 
    $method =  "POST";
    $params = array(
        "ctrl" => 'Course',
        "name" => 'Photoshop',
        "description" => 'This course is the culmination of the Graphic Ds into a single projectfor.',
        "image" => 'photoshop.jpg');

    // if($method==  'PUT' || $method == 'DELETE') {
        // parse_str(file_get_contents("php://input"),$post_vars);
        // $params = $post_vars['activitiesArray']; 
    // }

    // else{
    // $params = $_REQUEST['activitiesArray'];

    // }
    

    switch ($params['ctrl']) {
        
            case 'Course':
            $capi = new CourseApi($params);
            $result  = $capi->gateway($method, $params, "CourseController");
            echo json_encode($result);
            break;

            case 'Student':
            $capi = new StudentApi();
            $result = $capi->gateway($method, $params);
            echo json_encode($result);
            break;

            case 'Admin':
            $capi = new AdminApi();
            $result = $capi->gateway($method, $params);
            echo json_encode($result);
            break;

    }


?>
