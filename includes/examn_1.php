
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
                <div class="container-fluid">
                    <section id="main">
                        <?php
                        $subject=1;
                        $length=0;
                        $numero=0;
                        //validate subject
                        if ($subject==1){
                            $length=11;
                        }elseif($subject==2){
                            $length=24;
                        }else{
                            $length=10;
                        }

                        $idT = 'T'. $subject;
                        $sql = "SELECT question, answer FROM exams WHERE clave LIKE '$idT%'";
                        $topic_questions_sql = $conn->query($sql) or die($conn->error);

                        $topic_questions = [];
                        if ($topic_questions_sql->num_rows > 0) {
                            // output data of each row
                            while($row = $topic_questions_sql->fetch_assoc()) {
                                array_push($topic_questions, $row);
                            }
                        }
                        shuffle($topic_questions);
                        $questions = array_slice($topic_questions, 0, 5);

                        $question_number=1;
                        $data_value=1;
                        foreach($questions as $item) {
                            $numero= rand(1,$length);
                            $part2="";
                            $part2_complete="";

                            
                            $question=$item['question']; 
                            $anwser=$item['answer'];

                            $url="../assets/img/"; 
                            $parts=explode($url, $question);
                            $part1=$parts[0];

                            if (!empty($parts[1])) {
                                $part2=$parts[1];
                            }


                            $parte2_complete=$url.$part2;

                            // Wrong answer assingment 
                            $r1= 0;
                            while ($r1 == 0 || $r1 == $numero) {
                                $r1=rand(1,$length);
                            }
                            //Wrong answer assingment 
                            $r2= 0;
                            while ($r2 == 0 || $r2 == $numero || $r2 == $r1) {
                                $r2=rand(1,$length);
                            }
                            //Wrong answer assinmgent 
                            $r3= 0;
                            while ($r3 == 0 || $r3 == $numero || $r3 == $r1 || $r3 == $r2) {
                                $r3=rand(1,$length);
                            }

                            //Generate image structure

                            $img1=$url.'T'.$subject.'A'.$r1;
                            $img2=$url.'T'.$subject.'A'.$r2;
                            $img3=$url.'T'.$subject.'A'.$r3;

                            $html_image1='<div class="4u$"><span class="image"><img src="'.$img1.'.gif" data-value="0" onclick="setInputValue'.$data_value.'()"></span></div>';
                            $hmtl_image2='<div class="4u$"><span class="image"><img src="'.$img2.'.gif" data-value="0" onclick="setInputValue'.$data_value.'()"></span></div>';
                            $html_image3='<div class="4u$"><span class="image"><img src="'.$img3.'.gif" data-value="0" onclick="setInputValue'.$data_value.'()"></span></div>';
                            $html_response='<div class="4u$"><span class="image"><img src="'.$anwser.'" data-value="1" onclick="setInputValue'.$data_value.'()"></span></div>';

                                            
                            $sortable=array($html_image1,$hmtl_image2,$html_image3,$html_response);
                            shuffle($sortable);
                
                            if($part2!='' ||$part2!=null){
                                
                                echo '<div class="box alt">
                                <p><strong>Pregunta '.$question_number.'.</strong>'.$part1.'<img src='.$part2_complete.'></p>
                                <div class="row 50% uniform">';?>
                                <?php
                                    foreach($sortable as $item) {
                                        echo $item . "\n";
                                    } 
                                    echo  '</div>
                                    </div>';
                                    
                                    $question_number++;
                                    $data_value++;
                            }else 
                            
                            if($part2=='' ||$part2==null){
                                    echo '<div class="box alt">
                                    <p><strong>Pregunta '.$question_number.'.</strong>'.$part1.'</p>
                                    <div class="row 50% uniform">';?>
                                    <?php
                                        foreach($sortable as $item) {
                                            echo $item . "\n";
                                        } 
                                        echo  '</div>
                                        </div>';
                                        
                                        $question_number++;
                                        $data_value++;                         
                            }
                        }
                        //$conn->close();


                        ?>
                    </section>
                </div>
           
                <form name="form" action="validate_exam.php" method="post">
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





