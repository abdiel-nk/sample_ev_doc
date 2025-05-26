<?php




//$unserialized_array = unserialize($serialized_array); 
//var_dump($serialized_array);
//var_dump($unserialized_array);

//$string = implode("", $_POST);
echo json_encode($_POST);

// $_Programa = $string('programa');
// echo $string;
//$arrayValues = explode(",",$_POST);
//print_r($arrayValues);
$_Programa = $_POST["programa"];
$_Ciclo = $_POST["ciclo"];



// print_r($_Programa);
// print_r($_Ciclo);
?>