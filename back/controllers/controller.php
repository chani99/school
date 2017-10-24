<?php  
    class Controller {

//  function that chaeks if the sql returnd a true or false resulte
 function checkIsWasGood($update) {
    $isOK = ($update == true ? true : false);
    return $isOK;

}
        


        // Creates a new line in a table
        function CreateNewRow($param) {
            $rows = $this->model->getRows();
            $column="";
            $values="";
            $exicute = array();

            for($i=0; $i<count($rows); $i++) {
                if (count($rows) != $i+1) {
                $column .= $rows[$i] . ", ";
                $values .= ":" .$rows[$i] . ", ";
                $get = 'get' . $rows[$i];
                $putit = $this->model->{$get}();
                $exicute[$rows[$i]] = $putit;
                }
                else {
                $column .= $rows[$i];
                $values .= ":" . $rows[$i];
                $get = 'get' . $rows[$i];
                $putit = $this->model->{$get}();
                $exicute[$rows[$i]] = $putit;
            }
            }    
                
            $update = $this->db->create_new_row($this->table_name, $column, $values, $exicute);

            return $this->checkIsWasGood($update);
       
        }

    }