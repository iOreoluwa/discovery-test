
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Assessing Your Career Anchor</title>
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
      input[type=number] {
        width: 30%;
        margin-left: 0%  ;
      }

      h4{
        margin:0;
        padding-bottom :3%;
      }
      label {
        margin-left :2%;
      }
    </style>
    
  </head>
  <body>
    <header>
      <a href="index.php" id="logo">
        <h1>DISCOVERY</h1>
      </a>
     <nav>
        <!-- <ul>
           <li><a href="index.php" class="selected">Big 5</a></li> 
           <li><a href="holland.php">Holland</a></li>
           <li><a href="career.php">Career</a></li>  
           <li><a href="mbti.php">Mbti</a></li> 
           <li><a href="anchor.php">Anchor</a></li>   
        </ul> -->
      </nav>
    </header>
    <div id="wrapper">
     <div id="sheader">
     <h4>Assessing Your Career Anchor</h4>
     <h5>Instruction:</h5>
     <p>
      The items in this inventory are designed to help you identify the Career Anchor or self-concept that is most important to you in your work life.
      As you answer the questions, think in terms of what it is you really want in your work life.
      Reflect on the questions from the point of view of your ideal career or job-the one you would have if you had completely free choice with no constraints. 
      You are attempting here to dig deep into what really matters to you. Remember, there are no right or wrong answers-only your answers. 
      If you have not worked before, you can imagine how important each statement is to your future job. 
     </p>
     <p>
      For each statement, write the number that best rates how important it is for you to have this factor in your work life and how critical is it for you to retain it? 
      The rating is on the scale of 10 to 0, 10 9 8 7 6 5 4 3 2 1 0. 10 being the highest rating that is very important to you, while 0 is the least rating which means it not important at all,
      5 is the middle of the scale, rate each statement on this scale based on how important you think it is important to your job, or career. 
     </p> 

     <p></p>
     </div>
     <section id="form-section">
        <form name="iForm" action="anchor.php" method="post" enctype="multipart/form-data">
         <strong>It is important to me…</strong>
         <p>
          <h4 class="questions"> 1. To belong to an organization and have a secure, long-term position is </h4>
          <label> Answer
          <!-- <input id="rs-range-line" class="rs-range" type="range" value="0" min="0" max="200">   -->
            <input type="range" min="0" max="10" required="required">
            <input type="number" name="q1" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 2. To have a strong sense of freedom and independence in my work is... </h4>
          <label> Answer
            <input type="number" name="q2" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 3. To be able to work in the state of-the –art organization where my technical skills are needed is... </h4>
          <label> Answer
            <input type="number" name="q3" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 4. To have a group of people that report to me is… </h4>
          <label> Answer
            <input type="number" name="q4" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 5. To run my own business is…. </h4>
          <label> Answer
            <input type="number" name="q5" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 6. To dedicate my time to others is…. </h4>
          <label> Answer
            <input type="number" name="q6" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 7. To solve difficult problems of any kind is… </h4>
          <label> Answer
            <input type="number" name="q7" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 8. To include my family in my work life is… </h4>
          <label> Answer
            <input type="number" name="q8" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 9. Good benefits, guaranteed work and a retirement program are… </h4>
          <label> Answer
            <input type="number" name="q9" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 10. Being able to follow my own way without rigid rules imposed by an organization is…  </h4>
          <label> Answer
            <input type="number" name="q10" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 11. Doing the work I was trained for and interested in rather than being promoted out of my field of interest is…  </h4>
          <label> Answer
            <input type="number" name="q11" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 12. To have influence on others is… </h4>
          <label> Answer
            <input type="number" name="q12" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 13. Building a new business is…</h4>
          <label> Answer
            <input type="number" name="q13" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 14.Being excited about a worthwhile cause is….</h4>
          <label> Answer
            <input type="number" name="q14" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 15.Having tough problems to solve is…</h4>
          <label> Answer
            <input type="number" name="q15" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 16. Integrating other parts of my life with my work life is….</h4>
          <label> Answer
            <input type="number" name="q16" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 17. To have my work place remain in the same location is…</h4>
          <label> Answer
            <input type="number" name="q17" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 18. To be able to choose my own work is…</h4>
          <label> Answer
            <input type="number" name="q18" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 19. Learning new technical skills is…</h4>
          <label> Answer
            <input type="number" name="q19" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 20. To work my way up on my own work hours is…</h4>
          <label> Answer
            <input type="number" name="q20" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 21. To start from the scratch and create something new and original is….</h4>
          <label> Answer
            <input type="number" name="q21" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 22. Being of service to others in a meaningful way is….</h4>
          <label> Answer
            <input type="number" name="q22" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 23. Reaching and growing beyond my current level is…</h4>
          <label> Answer
            <input type="number" name="q23" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 24. Flexibility in location, work and hours is…</h4>
          <label> Answer
            <input type="number" name="q24" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 25. Knowing where I will be working and what I will be doing year after year is…</h4>
          <label> Answer
            <input type="number" name="q25" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 26. The freedom to choose the direction of my career path is…</h4>
          <label> Answer
            <input type="number" name="q26" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 27. The ability to use technical skills or knowledge to complete a clearly defined project is…</h4>
          <label> Answer
            <input type="number" name="q27" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 28. Supervising, leading, and influencing others is…</h4>
          <label> Answer
            <input type="number" name="q28" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 29. Having the challenge of creating something new is…</h4>
          <label> Answer
            <input type="number" name="q29" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 30. Knowing that my work is contributing to the well-being of others is…</h4>
          <label> Answer
            <input type="number" name="q30" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 31. Having projects that stretch my abilities is…</h4>
          <label> Answer
            <input type="number" name="q31" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 32. Having sabbaticals or other leaves to pursue activities outside of work is...</h4>
          <label> Answer
            <input type="number" name="q32" min="0" max="10" required="required">
          </label>
         </p>
         <p>&nbsp;</p>
         <p>
         <strong>How true is each of the following statements for you?</strong>
         </p>
         <p>&nbsp;</p>
         <p>
          <h4 class="questions"> 33. I would be more interested in remaining in my present location rather than moving even if offered a promotion.</h4>
          <label> Answer
            <input type="number" name="q33" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 34. I am more concerned with my own freedom and autonomy than with any other factor in my work life.</h4>
          <label> Answer
            <input type="number" name="q34" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 35. I am very proud of my technical and functional competence.</h4>
          <label> Answer
            <input type="number" name="q35" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 36. Managing other people gives me a strong sense of achievement.</h4>
          <label> Answer
            <input type="number" name="q36" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 37. Owning my own business is very important to me.</h4>
          <label> Answer
            <input type="number" name="q37" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 38. I am turned on by my being dedicated to a worthwhile cause.</h4>
          <label> Answer
            <input type="number" name="q38" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 39. Projects are interesting to me only when they are really challenging...</h4>
          <label> Answer
            <input type="number" name="q39" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 40. I am more interested in an integrated lifestyle than in career promotion.</h4>
          <label> Answer
            <input type="number" name="q40" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 41. I need to belong to an organization to feel satisfied in my work life.</h4>
          <label> Answer
            <input type="number" name="q41" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 42. The more freedom I have to do what I want, the happier I am at work.</h4>
          <label> Answer
            <input type="number" name="q42" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 43. I would be interested in being a manager only if I could continue working in my area of expertise.</h4>
          <label> Answer
            <input type="number" name="q43" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 44. It gives me great satisfaction to be promoted to positions where I can exercise greater management authority.</h4>
          <label> Answer
            <input type="number" name="q44" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 45. Creating new business ideas and turning them into reality has been something I have wanted to do for a long time.</h4>
          <label> Answer
            <input type="number" name="q45" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 46. I enjoy volunteering with dedication to a cause even when there is little or no compensation.</h4>
          <label> Answer
            <input type="number" name="q46" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 47. I would live or work almost anywhere if the job had some real challenges</h4>
          <label> Answer
            <input type="number" name="q47" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 48. My family, my hobbies, my friends, and my recreation are just as important to me as my work.</h4>
          <label> Answer
            <input type="number" name="q48" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 49.I would be unhappy working without job security.</h4>
          <label> Answer
            <input type="number" name="q49" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 50. I have a difficulty dealing with organizational constraints.</h4>
          <label> Answer
            <input type="number" name="q50" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 51. Becoming more knowledgeable in my field is a great source of pride and satisfaction.</h4>
          <label> Answer
            <input type="number" name="q51" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 52. Supervising others and leading them to the achievement of targets and results is very important to me.</h4>
          <label> Answer
            <input type="number" name="q52" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 53. The thrill and tension of being on the edge in my own business is a strong motivator for me.</h4>
          <label> Answer
            <input type="number" name="q53" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 54. I think I have a contribution to make towards improving the world and helping people.</h4>
          <label> Answer
            <input type="number" name="q54" min="0" max="10" required="required">
          </label>
         </p>

         <p>
          <h4 class="questions"> 55. The challenge of competition turns me on to produce my best work.</h4>
          <label> Answer
            <input type="number" name="q55" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 56. I am only satisfied at work when my family life gets adequate attention.</h4>
          <label> Answer
            <input type="number" name="q56" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 57. I like being part of a large organization where I can be certain that my job and salary are relatively secure..</h4>
          <label> Answer
            <input type="number" name="q57" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 58. I like working in a position that allows freedom and latitude.</h4>
          <label> Answer
            <input type="number" name="q58" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 59. I feel best when I can solve technical problems in my area of expertise.</h4>
          <label> Answer
            <input type="number" name="q59" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 60. I feel best when others come to me for advice about how to get their jobs done most effectively.</h4>
          <label> Answer
            <input type="number" name="q60" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 61. I want to own my ideas, turn them into reality, and benefit from the money earned by creating something new.</h4>
          <label> Answer
            <input type="number" name="q61" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 62. I care more about people, the environment, peace and other critical issues than I do about promotions and success.</h4>
          <label> Answer
            <input type="number" name="q62" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 63. No pain no gain!</h4>
          <label> Answer
            <input type="number" name="q63" min="0" max="10" required="required">
          </label>
         </p>
         <p>
          <h4 class="questions"> 64.Happiness is a function of a balanced and integrated lifestyle.</h4>
          <label> Answer
            <input type="number" name="q64" min="0" max="10" required="required">
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
  $q1 = $_POST['q1']; $q2 = $_POST['q2']; $q3 = $_POST['q3']; $q4 = $_POST['q4'];
  $q5 = $_POST['q5']; $q6 = $_POST['q6']; $q7 = $_POST['q7']; $q8 = $_POST['q8'];
  $q9 = $_POST['q9']; $q10 = $_POST['q10']; $q11 = $_POST['q11']; $q12 = $_POST['q12'];
  $q13 = $_POST['q13']; $q14 = $_POST['q14']; $q15 = $_POST['q15']; $q16 = $_POST['q16'];
  $q17 = $_POST['q17']; $q18 = $_POST['q18']; $q19 = $_POST['q19']; $q20 = $_POST['q20'];
  $q21 = $_POST['q21']; $q22 = $_POST['q22']; $q23 = $_POST['q23']; $q24 = $_POST['q24'];
  $q25 = $_POST['q25']; $q26 = $_POST['q26']; $q27 = $_POST['q27']; $q28 = $_POST['q28'];
  $q29 = $_POST['q29']; $q30 = $_POST['q30']; $q31 = $_POST['q31']; $q32 = $_POST['q32'];
  $q33 = $_POST['q33']; $q34 = $_POST['q34']; $q35 = $_POST['q35']; $q36 = $_POST['q36'];
  $q37 = $_POST['q37']; $q38 = $_POST['q38']; $q39 = $_POST['q39']; $q40 = $_POST['q40']; 
  $q41 = $_POST['q41']; $q42 = $_POST['q42']; $q43 = $_POST['q43']; $q44 = $_POST['q44']; 
  $q45 = $_POST['q45']; $q46 = $_POST['q46']; $q47 = $_POST['q47']; $q48 = $_POST['q48']; 
  $q49 = $_POST['q49']; $q50 = $_POST['q50']; $q51 = $_POST['q51'];  $q52 = $_POST['q52']; 
  $q53 = $_POST['q53']; $q54 = $_POST['q54']; $q55 = $_POST['q55'];  $q56 = $_POST['q56'];
  $q57 = $_POST['q57']; $q58 = $_POST['q58']; $q59 = $_POST['q59'];  $q60 = $_POST['q60'];   
  $q61 = $_POST['q61']; $q62 = $_POST['q62']; $q63 = $_POST['q63'];  $q64 = $_POST['q64'];  

  // Extract the response from the form and store them in arrays 

$a_col = [$q1, $q9, $q17, $q25, $q33, $q41, $q49, $q57];
$b_col = [$q2, $q10, $q18, $q26, $q34, $q42, $q50, $q58];
$c_col = [$q3, $q11, $q19, $q27, $q35, $q43, $q51, $q59];
$d_col = [$q4, $q12, $q20, $q28, $q36, $q44, $q52, $q60];
$e_col = [$q5, $q13, $q21, $q29, $q37, $q45, $q53, $q61];
$f_col = [$q6, $q14, $q22, $q30, $q38, $q46, $q54, $q62];
$g_col = [$q7, $q15, $q23, $q31, $q39, $q47, $q55, $q63];
$h_col = [$q8, $q15, $q24, $q32, $q40, $q48, $q56, $q64];

// Store all response columns in another array
  $cols = [$a_col, $b_col, $c_col, $d_col, $e_col, $f_col, $g_col, $h_col];

  // Store the column arrays in another array
  $col_totals = [0,0,0,0,0,0,0];

  // Use a loop to determine each column total and store in the $col_total array
    for ($i=0; $i < 8; $i++) {
      
      $c_total = 0;
      
      foreach ($cols[$i] as $value) {
        $c_total = $c_total + $value;
      }
      //Store the total for each column in the $col_total array
      $col_totals[$i] = $c_total;

          
    }

    echo"<script>window.location.hash='alert'</script>";

    echo"<div class='alert-successful' id='alert'>
    <h1>YOUR RESULTS</h1>
    <hr/>
            'Security, Stability & Organization' = " . $col_totals[0];" 
          </div>";
    echo"<p></p>";

    echo"
            'Autonomy/Independence ' = " .$col_totals[1];" 
          ";
    echo"<p></p>";
    echo"
            'Technical/Functional Competence
            ' = " . $col_totals[2];" 
          ";
    echo"<p></p>";
    echo"
            'Managerial Competence' = " . $col_totals[3];" 
          ";
    echo"<p></p>";
    echo"
            'Entrepreneurial Creativity' = " .$col_totals[4];" 
            <p></p>
        ";
    echo"<p></p>
        'Sense of Dedication to a' = " . $col_totals[5];" 
      ";
      echo"<p></p>";
    

    echo"
        'Pure Challenge' = " . $col_totals[6];" 
      ";
      echo"<p></p>";

  
    echo" <p></p> 
        'Life-Style Integration' = " . $col_totals[7];"
        
      ";
    echo '</div>';





}



?>