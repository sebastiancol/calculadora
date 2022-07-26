<?php
    include('database.php');

    Class Calculadora {

        public $numero1;
        public $numero2;
        public $operacion;
        public $data;


        $data= $_POST['datos'];
        
        switch($data->$operaciones){

            case "sumar":
                function sumar($a,$b){
                    $numero1=$a;        
                    $numero2=$b;        
                    $operacion= $numero1+$numero2;
                    return $operacion;
                };
                break;
            case "restar":    
                function restar($a,$b){

                    $numero1=$a;
                    $numero2=$b;
                    $operacion = $numero1-$numero2;
                    return $operacion;
                };
                break;
            case "multiplicar":    
                function multiplicar($a,$b){

                    $numero1=$a;        
                    $numero2=$b;        
                    $operacion= $numero1*$numero2;
                    return $operacion;
                };
                break;
                    
            case "dividir":    
                function dividir($a,$b){

                    $numero1=$a;        
                    $numero2=$b;        
                    $operacion= $numero1%$numero2;
                    return $operacion;
                };        
                break;        
        }


    }

    
  

  

   

   

?>