<?php 
    require_once 'controller.php';
    require_once '../models/CourseModel.php';
    require_once '../data/bl.php';
    require_once '../common/validation.php';
    
    

    class CourseController extends Controller {
        public $db;
        public $model;
        public $validation;        
        public $table_name = "course";
        

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
        

        // // Creates a new line in a table
        // function CreateNewRow($param) {
        //     $rows = $this->model->tableRows();
        //     $column="'";
        //     $values="'";
        //     $exicute = array();

        //     for($i=0; $i<count($rows); $i++) {
        //         if (count($rows) != $i+1) {
        //         $column += $rows[$i] . ", ";
        //         $values += ":" . $rows[$i], . ", ";
        //         array_push($exicute, $model->get.$rows[$i]()); 
        //         }
        //         else {
        //         $column += $rows[$i] . "'";
        //         $values += ":" . $rows[$i], . "'";
        //         array_push($exicute, $model->get.$rows[$i]()); 
        //         }
        //     }    
                
        //     $update = $this->db->create_new_row($this->table_name, $column, $values, $exicute);
        //     return $this->checkIsWasGood($update);
        //     }else{
        //         return $c->getName(); //לבדוק למה החזרתי את זה
        //     }
        // }


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
            $allCourses = array();
            $getall = $this->db->SelectAllFromTable($this->table_name, $this->classneame);
            
            for($i=0; $i<count($getall); $i++) {
                $c = new CourseModel($getall[$i]);
                array_push($allCourses, $c->jsonSerialize());
            }
            return $allCourses;   
        }



        // Checks if a id exists
         function getDirecotrById($param){
            $c = new CourseModel($param);
                if($c->getId() != 'null' || $c->getId() != 'NaN'){
                $check =  $this->db->Check_if_id_exists($this->table_name, $c->getId());
                return $this->checkIsWasGood($check);
                }else{
                    return $c->getId();
                }

            }




        // Deletes a line from Courses table
        function DeleteDirecotrById($param) {
            $c = new CourseModel($param);
                if($c->getId() != false){
                $deleted =  $this->db->DeleteRow($this->table_name, $c->getId());
                return $this->checkIsWasGood($deleted);
                }else{
                    return "error";
                }

    
        }



        // Updates a line in directos table
        function UpdateDirecotrById($param) {
            $c = new CourseModel($param);
                if($c->getId() != false || $c->getId() != false){
                    if($c->getName() != false) {
                    $updateValues= "name =  '".$c->getName()."'";
                    $update =  $this->db->update_table($this->table_name, $c->getId(), $updateValues);
                    return $this->checkIsWasGood($update);
                }else{
                    return "error";
                }
            }

        }


        




}