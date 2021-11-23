<html>
 
<head>
 <meta charset=UTF-8" />
 
 <title>PHP Quiz</title>
 
 <link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body>
 
 <div id="page-wrap">
 
 <h1>Résultat</h1>
 
        <?php
            
            $answer1 = $_POST['reponse-question-1'];
            $answer2 = $_POST['reponse-question-2'];
            $answer3 = $_POST['reponse-question-3'];
            $answer4 = $_POST['reponse-question-4'];
            $answer5 = $_POST['reponse-question-5'];
            $answer6 = $_POST['reponse-question-6'];
            $answer7 = $_POST['reponse-question-7'];
            $answer8 = $_POST['reponse-question-8'];
            $answer9 = $_POST['reponse-question-9'];
            $answer10 = $_POST['reponse-question-10'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "4") { $totalCorrect++; }
            if ($answer2 == "4") { $totalCorrect++; }
            if ($answer3 == "3") { $totalCorrect++; }
            if ($answer4 == "1") { $totalCorrect++; }
            if ($answer5 == "2") { $totalCorrect++; }
            if ($answer6 == "1") { $totalCorrect++; }
            if ($answer7 == "3") { $totalCorrect++; }
            if ($answer8 == "1") { $totalCorrect++; }
            if ($answer9 == "3") { $totalCorrect++; }
            if ($answer10 == "1") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 10 </div>";
            
        ?>
 
 </div>
 
</body>
 
</html>