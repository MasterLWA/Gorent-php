<?php
    // --Functions to validate inputs--

    // Check if register inputs are empty

    function inputsEmptyRegister( $vehicle-brand,$vehicle-type,$vehicle-year ,$vehicle-seats,$vehicle-color ,$vehicle-number ,
        $vehicle-contact-number ,$vehicle-address ,$vehicle-email ,$vehicle-gear-type ,$vehicle-model){

            $value;
            if(empty($vehicle-brand)  || empty ($vehicle-type )|| empty($vehicle-year) || empty($vehicle-seats) || 
            empty($vehicle-color) || empty($vehicle-number) || empty($vehicle-contact-number) || empty($vehicle-address) || 
            empty($vehicle-email) || empty($vehicle-gear-type) || empty($vehicle-model))
            {
                $value = true;
            }else{
                $value = false;
            }
            return $value;
        }
            
            
        function brandInvalid($vehicle-brand){
            $value;
            if(!preg_match("/^[a-zA-Z]+$/", $vehicle-brand)){
                $value = true;
            }
            else{
                $value = false;
            }
            return $value;
        }

        function typeInvalid($vehicle-type){
            $value;
            if(!preg_match("/^[a-zA-Z]+$/", $vehicle-type)){
                $value = true;
            }
            else{
                $value = false;
            }
            return $value;
        }


        function yearInvalid($vehicle-year){
            $value;
            if(!preg_match("/^[0][\d]{9}$/", $vehicle-year)){
                $value = true; 
            }
            else{
                $value = false;
            }
            return $value;
        }

        function typeInvalid($vehicle-type){
            $value;
            if(!preg_match("/^[a-zA-Z]+$/", $vehicle-type)){
                $value = true;
            }
            else{
                $value = false;
            }
            return $value;
        }

        function colorInvalid($vehicle-color){
            $value;
            if(!preg_match("/^[a-zA-Z]+$/", $vehicle-color)){
                $value = true;
            }
            else{
                $value = false;
            }
            return $value;
        }

        function numberInvalid($vehicle-number){
            $value;
            if(!preg_match("/^[0-9a-zA-Z]+$/", $vehicle-number)){
                $value = true;
            }
            else{
                $value = false;
            }
            return $value;
        }

        function contactnumberInvalid($vehicle-contact-number){
            $value;
            if(!preg_match("/^[0][\d]{9}$/", $vehicle-contact-number)){
                $value = true; 
            }
            else{
                $value = false;
            }
            return $value;
        }

        function addressInvalid($vehicle-address){
            $value;
            if(!preg_match("/^[^@]{1,63}@[^@]{1,255}$/", $vehicle-address)){
                $value = true; 
            }
            else{
                $value = false;
            }
            return $value;
        }

        function emailInvalid($email){
            $value;
            if(!preg_match("/^[a-zA-Z\d\._-]+@[a-zA-Z\d_-]+\.[a-zA-Z\d\.]{2,}$/", $vehicle-email)){
                $value = true; 
            }
            else{
                $value = false;
            }
            return $value;

        }

        



        





 ?>   