<?php 
include 'db_connection.php';
session_start();
$conn = OpenCon();

$tema=1;
$largo=0;
$numero=0;
$parte2="";
$random=rand(1,$largo);

if ($tema==1){
    $largo=11;
}elseif($tema==2){
    $largo=24;
}else{
    $largo=10;
}

$numero= rand(1,$largo);
$clave= 'T'. $tema. 'C' .$numero;
$sql = "SELECT question,answer FROM exams WHERE clave='$clave'";
$valores=$conn->query($sql) or die($conn->error);


if ($valores->num_rows > 0) {
    // output data of each row
    while($row = $valores->fetch_assoc()) {
        //echo "pregunta: <br>" . $row["question"]. "<br> - respuesta: <br>" . $row["answer"]. "<br>";
        $pregunta=$row["question"];
        $respuesta=$row["answer"];
    }
} else {
    echo "0 results";
}
//$conn->close();
$url="../assets/img";
$partes=explode($url, $pregunta);
$parte1=$partes[0];

if (!empty($partes[1])) {
    $parte2=$partes[1];
}

$r1= $random!=$numero;
$r2= $random!=$numero && !$r1;
//$r3= $random!=$numero && !=$r1 && !=$r2;

$img1=$url.'T'.$tema.'A'.$r1;

echo '<br>';
echo 'Numero: '.$numero.'<br>';
echo 'Clave: '.$clave.'<br>';
echo 'Pregunta: '.$pregunta.'<br>';
echo 'Respuesta: '.$respuesta.'<br>';
echo '<br>';
echo 'Respuesta: <br>';
var_dump(explode($url,$pregunta));
echo '<br>';
echo 'Parte1: '.$parte1.'<br>';
echo 'Parte2: '.$parte2.'<br>';
echo '<br>';
echo 'Pregunta: '.$parte1.$parte2.'<br>';
echo 'r1: '.$r1.'<br>';
echo 'r2: '.$r2.'<br>';

?>
