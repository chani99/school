<?php 
    require_once 'controller.php';
    require_once '../models/CourseModel.php';
    require_once '../data/bl.php';
    require_once '../common/validation.php';
    
    

    class CourseController extends Controller {
        private $db;
        private $model;
        private $validation;        
        private $table_name = "course";
        private $classneame = "CourseController";
        

        function __construct($param) {
            $this->db = new BL();
            $this->validation = new validation;
            // $validate_result =$this->validation->validations($param);
            // if ($validate_result == true) {
            $this->model = new CourseModel($param);
            // }
            // else (
            //     return $validate_result;
            // )
            
        }
        

        // Creates a new line in a table
        function CreateNewRow($param) {
            $rows = $this->model->getRows();
            $sql_data = $this->CreateRow($rows, $this->model);
            $update = $this->db->create_new_row($this->table_name, $sql_data[0], $sql_data[1],  $sql_data[2]);
            return $this->checkIsWasGood($update);
       
        }



        // Updates a line in directos table
        function ReturnSelect() {
            $List =  $this->db->SelectAllFromTable($this->table_name, $this->classneame);
            $CourseSelect="<option value='Select a Course'>Select a Course</option>";
                for ($i = 0; $i < count($List); $i++) {
                $CourseSelect .= "<option value=" . $List[$i]["id"] . ">" . $List[$i]["name"] . "</option>";
                }
        
            return $CourseSelect; 
        }
    


        // Selects all from Courses table and returns a object array
        function getAllCourses() {
            $getall = $this->db->SelectAllFromTable($this->table_name, $this->classneame);
            $allCourses = array();            
            for($i=0; $i<count($getall); $i++) {
                $c = new CourseModel($getall[$i]);
                array_push($allCourses, $c->jsonSerialize());
            }
            return $allCourses;   
        }



        // Checks if a id exists
         function getCourseById($param){
                if($this->model->getId() != 'null' || $this->model->getId() != 'NaN'){
                $check =  $this->db->Check_if_id_exists($this->table_name, $c->getId());
                return $this->checkIsWasGood($check);
                }else{
                    return false;
                }

            }




        // Deletes a line from Courses table
        function DeleteCourseById($param) {
                if($this->model->getId() != false){
                $deleted =  $this->db->DeleteRow($this->table_name, $c->getId());
                return $this->checkIsWasGood($deleted);
                }else{
                    return false;
                }

    
        }



        // Updates a line in directos table
        function UpdateById($param) {
                if($this->model->getId() != false || $this->model->getId() != false){
                    if($this->model->getName() != false) {
                        $updateValues= "name =  '".$this->model->getName()."', description = '" .$this->model->getdescription(). "', image = '". $this->model->getimage()."'";
                        $update =  $this->db->update_table($this->table_name, $this->model->getId(), $updateValues);
                    return $this->checkIsWasGood($update);
                }else{
                    return false;
                }
            }

        }


        




}