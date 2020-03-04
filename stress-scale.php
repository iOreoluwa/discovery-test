<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Perceived Stress Scale</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Changa+One" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <!-- <link rel="stylesheet" href="css/responsive.css">  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
    /********************************
    COPIED from W3schools (modified)
    *********************************/
      h4 {
        color: #000;
         font-family: 'Changa One' , sans-serif;
         font-weight: 200;
         font-size: 20px;
         padding: 2%;
      }
            /* The container */
      .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        /*font-size: 15px;*/
        font-size: 1.05em;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      /* Hide the browser's default radio button */
      .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
      }

      /* Create a custom radio button */
      .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
        border-radius: 50%;
      }

      /* On mouse-over, add a grey background color */
      .container:hover input ~ .checkmark {
        background-color: #ccc;
      }

      /* When the radio button is checked, add a blue background */
      .container input:checked ~ .checkmark {
        background-color: #2196F3;
      }

      /* Create the indicator (the dot/circle - hidden when not checked) */
      .checkmark:after {
        content: "";
        position: absolute;
        display: none;
      }

      /* Show the indicator (dot/circle) when checked */
      .container input:checked ~ .checkmark:after {
        display: block;
      }

      /* Style the indicator (dot/circle) */
      .container .checkmark:after {
        top: 9px;
        left: 9px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: white;
      }
    </style>
  </head>
  <body>
    <header>
      <a href="index.php" id="logo">
        <h1>WellnesswithArinola</h1>
      </a>
     <nav>
        <!-- <ul>
          <li><a href="index.php" class="selected">Big 5</a></li> 
           <li><a href="holland.php">Holland</a></li>
           <li><a href="career.php">Career</a></li>  
        </ul> -->
      </nav>
    </header>
    <div id="wrapper">
     <div id="sheader">
     <h4>Perceived Stress Scale</h4>
     <h5>Instruction:</h5>
     <p>
     The Perceived Stress Scale (PSS) helps us to understand how different situations 
     affect our feelings and our perceived stress. This is an adapted instrument from assessment
     developed in 1983 by Sheldon Cohen. the Perceived Stress Scale (PSS) is the most widely used
     psychological instrument for measuring the perception of stress. It is a measure of the degree
     to which situations in one's life are appraised as stressful. It is a classic stress assessment instrument. :

     <p></p>
    <br>
    <h5>Introduction</h5> 
    <p></p>
    <p>The items i.e. the questions in this scale are about your feelings and thoughts during the last month. 
    In each case, you will be asked to indicate how often you felt or thought a certain way. Although some of 
    the questions are similar, there are differences between them and you should treat each one as a separate question.
    The best approach is to answer fairly quickly and don’t second guess yourself. For each situation think about your
    predominant reaction. 

    For each question choose from the following alternatives:

        <ul>
          <li>never</li>
          <li>almost never</li>
          <li>sometimes </li>
          <li>fairly often</li>
          <li>very often</li>
        </ul>
     </p>
     <p></p>
     </div>
     <section id="form-section">
        <form name="iForm" action="stress-scale.php" method="post" enctype="multipart/form-data">
         <p>
          <h4>1. In the last month how often have you been upset because of something that happened unexpectedly?</h4>
          <label class="container">never
            <input type="radio" name="q1" value="0" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">almost never
            <input type="radio" name="q1" value="1">
            <span class="checkmark"></span>
          </label>
          <label class="container">sometimes
            <input type="radio" name="q1" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container"> fairly often
            <input type="radio" name="q1" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container">very often
            <input type="radio" name="q1" value="4">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>2. In the last month how often have you felt that you were unable to control the important things in your life?</h4>
          <label class="container">never
            <input type="radio" name="q2" value="0" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">almost never
            <input type="radio" name="q2" value="1">
            <span class="checkmark"></span>
          </label>
          <label class="container">sometimes
            <input type="radio" name="q2" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container"> fairly often
            <input type="radio" name="q2" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container">very often
            <input type="radio" name="q2" value="4">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>3. In the last month how often have you felt nervous and stressed?</h4>
          <label class="container">never
            <input type="radio" name="q3" value="0" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">almost never
            <input type="radio" name="q3" value="1">
            <span class="checkmark"></span>
          </label>
          <label class="container">sometimes
            <input type="radio" name="q3" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container"> fairly often
            <input type="radio" name="q3" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container">very often
            <input type="radio" name="q3" value="4">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>4. In the last month how often have you felt confident about your ability to handle your personal problems?</h4>
          <label class="container">never
            <input type="radio" name="q4" value="0" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">almost never
            <input type="radio" name="q4" value="1">
            <span class="checkmark"></span>
          </label>
          <label class="container">sometimes
            <input type="radio" name="q4" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container"> fairly often
            <input type="radio" name="q4" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container">very often
            <input type="radio" name="q4" value="4">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>5. How  often have you felt that things were going your way in the last one month?</h4>
          <label class="container">never
            <input type="radio" name="q5" value="0" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">almost never
            <input type="radio" name="q5" value="1">
            <span class="checkmark"></span>
          </label>
          <label class="container">sometimes
            <input type="radio" name="q5" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container"> fairly often
            <input type="radio" name="q5" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container">very often
            <input type="radio" name="q5" value="4">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>6. In the last month how often have you found that you could not cope with all the things that you had to do?</h4>
          <label class="container">never
            <input type="radio" name="q6" value="0" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">almost never
            <input type="radio" name="q6" value="1">
            <span class="checkmark"></span>
          </label>
          <label class="container">sometimes
            <input type="radio" name="q6" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container"> fairly often
            <input type="radio" name="q6" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container">very often
            <input type="radio" name="q6" value="4">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>7. In the last month how often have you been able to control things that irritate you?</h4>
          <label class="container">never
            <input type="radio" name="q7" value="0" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">almost never
            <input type="radio" name="q7" value="1">
            <span class="checkmark"></span>
          </label>
          <label class="container">sometimes
            <input type="radio" name="q7" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container"> fairly often
            <input type="radio" name="q7" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container">very often
            <input type="radio" name="q7" value="4">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>8. In the last month how often have you felt that you were on top of things?</h4>
          <label class="container">never
            <input type="radio" name="q8" value="0" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">almost never
            <input type="radio" name="q8" value="1">
            <span class="checkmark"></span>
          </label>
          <label class="container">sometimes
            <input type="radio" name="q8" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container"> fairly often
            <input type="radio" name="q8" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container">very often
            <input type="radio" name="q8" value="4">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>9. In the last month how often have you been angered because of things that happened that were outside of your control?</h4>
          <label class="container">never
            <input type="radio" name="q9" value="0" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">almost never
            <input type="radio" name="q9" value="1">
            <span class="checkmark"></span>
          </label>
          <label class="container">sometimes
            <input type="radio" name="q9" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container"> fairly often
            <input type="radio" name="q9" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container">very often
            <input type="radio" name="q9" value="4">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>10. In the last month how often have you felt difficulties were piling up so high that you could not overcome them?</h4>
          <label class="container">never
            <input type="radio" name="q10" value="0" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">almost never
            <input type="radio" name="q10" value="1">
            <span class="checkmark"></span>
          </label>
          <label class="container">sometimes
            <input type="radio" name="q10" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container"> fairly often
            <input type="radio" name="q10" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container">very often
            <input type="radio" name="q10" value="4">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <input type="submit" name="submit" value="submit">
        </p>
        </form>
      </section>
    </div>
    <footer>
      <p><!--<script> document.write(new Date().getFullYear())</script>--> Discovery</p>
    </footer> 
      <?php

          if(isset($_POST['submit'])) {  
          $q1 = $_POST['q1']; $q2 = $_POST['q2']; $q3 = $_POST['q3']; $q4 = $_POST['q4']; $q5 = $_POST['q5']; 
          $q6 = $_POST['q6']; $q7 = $_POST['q7']; $q8 = $_POST['q8']; $q9 = $_POST['q9']; $q10 = $_POST['q10']; 

          // Extract the response from the form and store them in arrays 

        //   $a_col = [$q1, $q11, $q21, $q31, $q41];
        //   $b_col = [$q2, $q12, $q22, $q32, $q42];
        //   $c_col = [$q3, $q13, $q23, $q33, $q43];
        //   $d_col = [$q4, $q14, $q24, $q34, $q44];
        //   $e_col = [$q5, $q15, $q25, $q35, $q45];
        //   $f_col = [$q6, $q16, $q26, $q36, $q46];
        //   $g_col = [$q7, $q17, $q27, $q37, $q47];
        //   $h_col = [$q8, $q18, $q28, $q38, $q48];
        //   $i_col = [$q9, $q19, $q29, $q39, $q49];
        //   $j_col = [$q10, $q20, $q30, $q40, $q50];

          // Use rand(1,5) for debegging purpose
          /*$a_col = [rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5)];
          $b_col = [rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5)];
          $c_col = [rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5)];
          $d_col = [rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5)];
          $e_col = [rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5)];
          $f_col = [rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5)];
          $g_col = [rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5)];
          $h_col = [rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5)];
          $i_col = [rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5)];
          $j_col = [rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5)];*/



        //   // Store all response columns in another array
        //   $cols = [$a_col,$b_col,$c_col,$d_col,$e_col,$f_col,$g_col,$h_col,$i_col,$j_col];

        //   // Store the column arrays in another array
        //   $col_totals = [0,0,0,0,0,0,0,0,0,0];

        //   // Use a loop to determine each column total and store in the $col_total array
        //   for ($i=0; $i < 10; $i++) {
            
        //     $c_total = 0;
            
        //     foreach ($cols[$i] as $value) {
        //       $c_total = $c_total + $value;
        //     }
        //     //Store the total for each column in the $col_total array
        //     $col_totals[$i] = $c_total;
        //   }

        //   // Evaluate using the given formula
        //   $open = 30 + $col_totals[0] - $col_totals[9];
        //   $cons = 30 + $col_totals[1] - $col_totals[8];
        //   $extro = 30 + $col_totals[2] - $col_totals[7];
        //   $fairly= 30 + $col_totals[3] - $col_totals[6];
        //   $neuro = 30 + $col_totals[4] - $col_totals[5];

        //   function rating($score) {
        //     // Calculate rating based on threshold given

        //     $res = array("Very High", "High", "Average", "Low", "Very Low");

        //     if ($score >= 5 && $score <= 15) { return $res[4]. ", " .$score; } 
        //     else if ($score >= 16 && $score <= 24) { return $res[3]. ", " .$score; } 
        //     else if ($score >= 25 && $score <= 34) { return $res[2]. ", " .$score; } 
        //     else if ($score >= 35 && $score <= 42) { return $res[1]. ", " .$score; } 
        //     else if ($score >= 43 && $score <= 50) { return $res[0]. ", " .$score; } 
        //     else { echo "An error occured while rating"; } 
        //   }

          /*function arrayPrinter($ar) {
            // A custom function to output the contents of the array
            echo "\n";

            if (sizeof($ar[0]) == 1) {
              // For the 1-dimensional array
              foreach ($ar as $key => $value) {
                echo $value . " ";
              }
            }

            else {
              // For the 2-dimensional array
              foreach ($ar as $col) {
                foreach ($col as $row) {
                  echo $row . " ";
                }
                echo "\n";
              } 
            }
            echo "\n\n";
          }*/

          /*echo "COLUMNS A-J vertically:";
          arrayPrinter($cols);

          echo "COLUMNS totals:";
          arrayPrinter($col_totals);*/


          /*echo "\nRESULTS \n";
          echo "Openness: " . rating($open) . "\n"; 
          echo "Conscientiousness: " . rating($cons) . "\n";
          echo "Extroversion: " . rating($extro) . "\n";
          echo "Aggreeableness: " . rating($fairly often) . "\n";
          echo "Neuroticism: " . rating($neuro) . "\n";*/

        
        function numberSwitch($no) {
          switch($no) {
                    case 0:
                        return 4;
                    break;

                    case 1:
                        return 3;
                    break;

                    case 2:
                        return 2;
                    break;

                    case 3:
                        return 1;
                    break;

                    case 4:
                        return 0;
                    break;
         }
        }


        $qq4 = numberSwitch($q4);
        $qq5 = numberSwitch($q5);
        $qq7 = numberSwitch($q7);
        $qq8 = numberSwitch($q8);
         
        $total = $q1 + $q2 + $q3 + $qq4 + $qq5 + $qq7 + $qq8;
        
        echo"<script>window.location.hash='alert'</script>";

        echo"<div class='alert-successful' id='alert'>
        <h1>YOUR RESULTS</h1>
        <hr/>";
            if($total > 0 && $total <= 13) {
                echo "Low Percieved Stress (Score '$total')
                <p>Perceived stress is the feelings or thoughts that an individual has about how much stress they are under at a given point in time or over a given time period.
                Perceived stress incorporates feelings about the uncontrollability and unpredictability of one’s life, how often one has to deal with irritating hassles, how much change is occurring in one’s life, and confidence in one’s ability to deal with problems or difficulties. It is not measuring the types or frequencies of stressful events which have happened to a person, but rather how an individual feel about the general stressfulness of their life and their ability to handle such stress. Individuals may suffer similar negative life events but appraise the impact or severity of these to different extents as a result of factors such as personality, coping resources, and support. In this way, perceived stress reflects the interaction between an individual and their environment which they appraise as...
                The Perceived Stress Scale is interesting and important because your perception of what is happening
                in your life is most important. Consider the idea that two individuals could have the exact same events
                and experiences in their lives for the past month. Depending on their perception, total score could put
                one of those individuals in the low stress category and the total score could put the second person in
                the high stress category.
                You have a perception that you are on top of the situations in your space. It may also mean that you have let things run on their own and you are not bothered at all. Your low PSS score is not the same as the events in the last one month. It is shows that you chosen to see yourself not stressed. Hope this perception is not a carefree attitude.
                <p></p> 
                Disclaimer: The scores on the following self-assessment do not reflect any particular diagnosis or course of treatment.</p>";
            } elseif ($total >= 14 && $total <= 26) {
                echo "Moderate Percieved Stress  (Score '$total')
                <p>Perceived stress is the feelings or thoughts that an individual has about how much stress they are under at a given point in time or over a given time period.

                Perceived stress incorporates feelings about the uncontrollability and unpredictability of one’s life, how often one has to deal with irritating hassles, how much change is occurring in one’s life, and confidence in one’s ability to deal with problems or difficulties. It is not measuring the types or frequencies of stressful events which have happened to a person, but rather how an individual feels about the general stressfulness of their life and their ability to handle such stress. Individuals may suffer similar negative life events but appraise the impact or severity of these to different extents as a result of factors such as personality, coping resources, and support. In this way, perceived stress reflects the interaction between an individual and their environment which they appraise as...
                
                The Perceived Stress Scale is interesting and important because your perception of what is happening
                in your life is most important. Consider the idea that two individuals could have the exact same events
                and experiences in their lives for the past month. Depending on their perception, total score could put
                one of those individuals in the low stress category and the total score could put the second person in
                the high stress category.
                However, you think you are moderately stressed . You are not overwhelmed by the activities and events of your life in the last one month. You have done well to manage the stress, but you can do better. You think life is unpredictable and  overloading yet controllable. You need to watch critical factors that make things becoming unbearable. 
                
                <p></p>
                Disclaimer: The scores on the following self-assessment do not reflect any particular diagnosis or course of treatment.</p>";
            } elseif($total >= 27 && $total <=40 ) {
                echo "High Percieved Stress  (Score '$total')
                <p>Perceived stress is the feelings or thoughts that an individual has about how much stress they are under at a given point in time or over a given time period.

                Perceived stress incorporates feelings about the uncontrollability and unpredictability of one’s life, how often one has to deal with irritating hassles, how much change is occurring in one’s life, and confidence in one’s ability to deal with problems or difficulties. It is not measuring the types or frequencies of stressful events which have happened to a person, but rather how an individual feels about the general stressfulness of their life and their ability to handle such stress. Individuals may suffer similar negative life events but appraise the impact or severity of these to different extents as a result of factors such as personality, coping resources, and support. In this way, perceived stress reflects the interaction between an individual and their environment which they appraise as...
                
                The Perceived Stress Scale is interesting and important because your perception of what is happening
                in your life is most important. Consider the idea that two individuals could have the exact same events
                and experiences in their lives for the past month. Depending on their perception, total score could put
                one of those individuals in the low stress category and the total score could put the second person in
                the high stress category.
                However, your score indicates you perceive to have high stress, and if you are truly, you might consider learning new stress reduction techniques as well as increasing your exercise to at least three times a week.  High psychological stress is associated with high blood pressure, higher BMI, larger waist to hip ratio, shorter telomere length, higher cortisol levels, suppressed immune function, decreased sleep, and increased alcohol consumption. These are all important risk factors for cardiovascular disease.
                You also think events around you are uncontrollable and going out of hands. You think life is  unpredictable, uncontrollable, and overloading. You may need to get help in area of self-management. You think you are overwhelmed by the happenings in your space. It is important to have a feeling in your mind that you are in control. Control is first internal.  You may seek coaching to help you put things in proper perspective. 
                
                <p></p>
               Disclaimer: The scores on the following self-assessment do not reflect any particular diagnosis or course of treatment.</p>";
            }
      
           echo "</div>";
          
          
          
          
         

          //0nclick='this.parentElement.style.display='none';'>&times;
          }



?>
      
   
  </body>
  </html>

  <!-- <script type="text/javascript" src="js/fadeOut.js"></script> -->
  <!-- <script type="text/javascript" src="js/validation.js"></script> -->
        
    

      
        
    
  
  
  
  
  


