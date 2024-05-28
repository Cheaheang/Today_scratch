<?php 

    class Functions{
        private $InputStatus = 'ok';
        function getStatus(){
           return $this->InputStatus; 
        }
        function setStatus($value){
            $this->InputStatus = $value;
        }
    }


?>