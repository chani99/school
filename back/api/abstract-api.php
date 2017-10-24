<?php
    abstract class Api {
        // abstract function Create($params);
        // abstract function Read($params);
        // abstract function Update($params);
        // abstract function Delete($params);




                // Create a new result
                function Create($params) {
                    return $this->controller->CreateNewRow($params);
                }
                
        
                 // Get all results or check if a id exists
                function Read($params) {
        
                    if (array_key_exists("id", $params)) {
                        $result = $c->getById($params);
                        return $result;
                    }
        
                    else {
                        return $this->controller->getAll();
                    }
                } 
        
        
                // Update a result
                function Update($params) {
                    $result =$this->controller->UpdateById($params);
                    return $result;
                    }
        
                    
                //  Delete 1 result   
                 function Delete($params) {
                    $result = $this->controller->DeleteById($params);
                    return $result;
                    
                }

                public function gateway($method, $params) {
                    switch ($method) {
                        case "POST":
                            return $this->Create($params);
                        case "GET":
                            return  $this->Read($params);
                        case "PUT":
                            return $this->Update($params);
                        case "DELETE":
                            return $this->Delete($params);
                    }
        
        }
    }
?>