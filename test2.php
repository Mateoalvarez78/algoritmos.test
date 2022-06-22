<?php


if(isset($_REQUEST['calcular'])){
    $n1 =$_REQUEST["numero1"];
    $n2 =$_REQUEST["numero2"];
    $op=$_REQUEST["opciones"];

}

class matematica {

    public static function sumar ($n1, $n2){
        $suma = $n1 + $n2;
        return $suma;
    }

    public static function restar ($n1, $n2){
        $resta = $n1 - $n2;
        return $resta;
    }

    public static function multiplicar ($n1, $n2){
        $multi = $n1 * $n2;
        return $multi;
    }

    public static function dividir ($n1, $n2){

        if($n2 !== 0) {
        $divi = $n1 / $n2; 
     } else {
        echo "Denegado"
     }
        return $divi;
    }



}


switch($op){
    case 0: echo "$n1 + $n2 = " .matematica::sumar($n1, $n2); break;
    case 1: echo "$n1 - $n2 = " .matematica::restar($n1, $n2); break;
    case 2: echo "$n1 x $n2 = " .matematica::multiplicar($n1, $n2); break;
    case 3: echo "$n1 / $n2 = " .matematica::dividir($n1, $n2); break;
}



?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="test2.php" method="post">

    <input type="text" name="numero1">
    <input type="text" name="numero2">
    <select name="opciones" id="">
        <option value="0" >Sumar</option>
        <option value="1" >Restar</option>
        <option value="2" >Multiplicar</option>
        <option value="3" >Dividir</option>
    </select>
    <input type="submit" value="Calcular" name="calcular">

</form>
   
</body>
</html>
