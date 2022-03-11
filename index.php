<?php
class ApiSuma{

    public $Variable1;
    public $Variable2;

    function sumar(){
   
    $Var1= $this->Variable1;
    $Var2= $this->Variable2;
    $SumResp=$Var1+$Var2;
    $Rspt=array(

        'Valor1'=>strval($Var1),
        'Valor2'=>strval($Var2),
        'Respuesta'=>strval($SumResp)
    );
       
    return json_encode($Rspt);

    }
}
$ClsSuma= new ApiSuma;
$ClsSuma->Variable1=htmlspecialchars($_GET["Variable1"]);
$ClsSuma->Variable2=htmlspecialchars($_GET["Variable2"]);
$RsptaAcceso=$ClsSuma->sumar();

echo $RsptaAcceso;

?>