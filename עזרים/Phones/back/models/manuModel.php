<?php
    require_once 'model.php';
    // require_once '../common/validation.php';
    
    
    class manuModel extends Model implements JsonSerializable {
        private $id;
        private $name;
        private $validation;

        function __construct($params) {
            $this->tableName ='manu';
            if (array_key_exists("id", $params)) $this->id = $params["id"];  
            if (array_key_exists("name", $params)) $this->name = $params["name"];

        
    }

        public function getName(){
            $this->validation = new validation;
            if ($this->validation->NotNull($this->name) == false){
            return false;
             }
            else
            {
            return $this->name;
            }
        }
    

        public function getId(){
            $this->validation = new validation;            
            if ($this->validation->NotNull($this->id) == false) {
                return false;
            }
            elseif ($this->validation->isNumber($this->id) == false) {
                return false;
            }
            else {
            return $this->id;
            }
        }
            
        public function jsonSerialize() {
            return [
                "Manufacturer id" => $this->id,
                "Manufacturer name" => $this->name
            ];
        }
    }

?>
