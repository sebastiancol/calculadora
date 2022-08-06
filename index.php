<?php
    include('database.php');

    require('/assets/includes/footer');

    
    Class Calculadora {

      

        public $numero1=0;
        public $numero2=0;
        public $operacion;
        

        function operation($data){

            $data= $_POST['datos'];
        
            switch($data){

                case "1":
                    function sumar($a,$b){
                        $numero1=$a;        
                        $numero2=$b;        
                        $operacion= $numero1+$numero2;
                        return $operacion;
                    };
                    break;
                case "2":    
                    function restar($a,$b){
    
                        $numero1=$a;
                        $numero2=$b;
                        $operacion = $numero1-$numero2;
                        return $operacion;
                    };
                    break;
                case "3":    
                    function multiplicar($a,$b){
    
                        $numero1=$a;        
                        $numero2=$b;        
                        $operacion= $numero1*$numero2;
                        return $operacion;
                    };
                    break;
                        
                case "4":    
                    function dividir($a,$b){
    
                        $numero1=$a;        
                        $numero2=$b;        
                        $operacion= $numero1%$numero2;
                        return $operacion;
                    };        
                    break;        
            }

        }
    
    
      

    
       

    }
?>    

<div class="container">
    <div class="card">   
        <div class="card-header">
            <h1 class="modal-title h1">Prueba Calculadora</h1>
        </div>
        <div class="card-body">
            <div class="col md-12">
                <form action="get" id="datos">
                    <div class="row mt-2">
                        <!-- <label for="">Numero 1</label> -->
                        <input type="text" name="numero1" id="numero1" placeholder="INGRESE NUMERO 1" required >
                    </div>     
                    <div class="row mt-2">  
                        <!-- <label for="">Numero 2</label> -->
                        <input type="text" name="numero2" id="numero2" placeholder="INGRESE NUMERO 2" required>
                    </div>   
                    <div class="row  mt-2">  
                        <select class="form-select" aria-label="Default multiple select" id="operaciones">Elija Operacion
                            <option selected>seleccione operacion</option>
                            <option value=1>suma +</option>
                            <option value=2>resta -</option> 
                            <option value=3>multiplicacion *</option>
                            <option value=4>division /</option>
                        </select>
                    </div>
                    <div class="row  mt-2">       
                        <input type="text" name="" id="" disabled placeholder="RESULTADO">
                    </div>    
                    <div class="row  mt-2"> 
                        <button class="btn btn-secondary" name="calcular" id="calcular" type="submit">CALCULAR</button>
                        <button class="btn btn-danger" name="limpiar" id="limpiar" type="reset">LIMPIAR</button>
                    </div>
                
                </form>
                <br>
                <br>
                <br>
            </div>         
            <div class="col md-12">
                <table class="table table-bordered border-opacity-10" id="table-resultado">
                    <thead>
                        <tr>
                            <td>numero1</td>
                            <td>numero2</td>
                            <td>operacion</td>
                            <td>resultado</td>
                        </tr>
                    </thead>
                    
                </table>
            </div>
        </div>
    </div>
</div>

<?php
    require('/assets/includes/footer');
?>     
