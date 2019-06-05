
<?php 
include 'db_connection.php';
session_start();
$conn = OpenCon();
?>
<!DOCTYPE HTML>
<html>
	<head>
	 <!-- Bootstrap -->

     <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


    <!--Custom css-->
    <link rel="stylesheet" href="/assets/css/main.css" />
	</head>

	<body class="subpage">
    <div id="throbber" style="display:none; min-height:120px;"></div>
			<div id="noty-holder"></div>
			<div id="wrapper" class="sub-margin">
            <div class="flex flex-2">
                <section id="main">
                    <?php
                    $tema=3;
                    $largo=0;
                    $numero=0;
                    //$random=rand(1,$largo);

                    if ($tema==1){
                        $largo=11;
                    }elseif($tema==2){
                        $largo=24;
                    }else{
                        $largo=10;
                    }

                    $idT = 'T'. $tema;
                    $sql = "SELECT question, answer FROM exams WHERE clave LIKE '$idT%'";
                    $topic_questions_sql = $conn->query($sql) or die($conn->error);
                    //$clave= 'T'. $tema. 'C' .$numero;

                    $topic_questions = [];
                    if ($topic_questions_sql->num_rows > 0) {
                        // output data of each row
                        while($row = $topic_questions_sql->fetch_assoc()) {
                            array_push($topic_questions, $row);
                        }
                    }
                    shuffle($topic_questions);
                    $questions = array_slice($topic_questions, 0, 5);

                    $numero_pregunta=1;
                    $data_value=1;
                    foreach($questions as $item) {
                        $numero= rand(1,$largo);
                        $parte2="";
                        $parte2_completa="";

                        
                        $pregunta=$item['question']; 
                        $respuesta=$item['answer'];

                        $url="../assets/img/"; 
                        $partes=explode($url, $pregunta);
                        $parte1=$partes[0];

                        if (!empty($partes[1])) {
                            $parte2=$partes[1];
                        }


                        $parte2_completa=$url.$parte2;

                        // Wrong answer assinment 
                        $r1= 0;
                        while ($r1 == 0 || $r1 == $numero) {
                            $r1=rand(1,$largo);
                        }
                        //Wrong answer assinment 
                        $r2= 0;
                        while ($r2 == 0 || $r2 == $numero || $r2 == $r1) {
                            $r2=rand(1,$largo);
                        }
                        //Wrong answer assinment 
                        $r3= 0;
                        while ($r3 == 0 || $r3 == $numero || $r3 == $r1 || $r3 == $r2) {
                            $r3=rand(1,$largo);
                        }

                        $img1=$url.'T'.$tema.'A'.$r1;
                        $img2=$url.'T'.$tema.'A'.$r2;
                        $img3=$url.'T'.$tema.'A'.$r3;

                        $html_image1='<div class="4u$"><span class="image"><img src="'.$img1.'.gif" data-value="0" onclick="setInputValue'.$data_value.'()"></span></div>';
                        $hmtl_image2='<div class="4u$"><span class="image"><img src="'.$img2.'.gif" data-value="0" onclick="setInputValue'.$data_value.'()"></span></div>';
                        $html_image3='<div class="4u$"><span class="image"><img src="'.$img3.'.gif" data-value="0" onclick="setInputValue'.$data_value.'()"></span></div>';
                        $html_response='<div class="4u$"><span class="image"><img src="'.$respuesta.'" data-value="1" onclick="setInputValue'.$data_value.'()"></span></div>';

                                        
                        $sortable=array($html_image1,$hmtl_image2,$html_image3,$html_response);
                        shuffle($sortable);
                        
                        echo '<div class="box alt">
                                <p><strong>Pregunta '.$numero_pregunta.'.</strong>'.$parte1.'<img src='.$parte2_completa.'></p>
                                <div class="row 50% uniform">';?>
                                <?php
                                foreach($sortable as $item) {
                                    echo $item . "\n";
                                } 
                                echo  '</div>
                                </div>';
                                
                                
                        $numero_pregunta++;
                        $data_value++;
                    }

                    //$conn->close();


                    ?>
                </section>
            </div>
           
            <form name="form" action="validate_exam3.php" method="post">
            <div class="inputs hidden">
                <input type="text" name="respuesta1" id="respuesta1">
                <input type="text" name="respuesta2" id="respuesta2">
                <input type="text" name="respuesta3" id="respuesta3">
                <input type="text" name="respuesta4" id="respuesta4"> 
                <input type="text" name="respuesta5" id="respuesta5"> 
            </div>
            <div class="12u$ modal-footer">
                    <ul class="actions">
                        <li><input type="submit" value="Validar respuestas"></li>
                    </ul>
                </div>
            </form>         
        </div>
        
        <!-- Scripts -->
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
	</body>
</html>





