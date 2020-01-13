<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BIG 5 FACTORS</title>
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
        <h1>DISCOVERY</h1>
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
     <h4>Big 5 Personality Test</h4>
     <h5>Instruction:</h5>
     <p>
        The following statements concern how you see yourself in different situations. Your task is to indicate the strength of your agreement with each statement as it concerns you, using a scale, in which 1 represents Strong Disagreement, 5 represents Strong Agreement, and 2, 3, and 4 represent intermediate judgments. For each statement, tick the number that represents the strength of your agreement using the scale below:
        <ul>
          <li>Strongly Disagree</li>
          <li>Strongly Disagree</li>
          <li>Strongly Disagree</li>
          <li>Strongly Disagree</li>
          <li>Strongly Disagree</li>
        </ul>
     </p>
     <p></p>
     </div>
     <section id="form-section">
        <form name="iForm" action="index.php" method="post" enctype="multipart/form-data">
         <p>
          <h4>1. I am very original, I see myself as very imaginative and creative</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q1" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q1" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q1" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q1" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q1" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>2. I always do a thorough job</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q2" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q2" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q2" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q2" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q2" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>3. I always love to engage people in conversations at social gatherings</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q3" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q3" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q3" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q3" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q3" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>4. People around me see me as very open, forgiving and understanding</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q4" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q4" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q4" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q4" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q4" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>5. I always look into the future with so much anxiety</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q5" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q5" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q5" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q5" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q5" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>6. I see myself as someone who is relaxed and composed even under stress</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q6" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q6" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q6" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q6" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q6" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>7. I tend to find fault in others easily</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q7" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q7" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q7" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q7" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q7" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>8. I am a reserved person</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q8" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q8" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q8" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q8" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q8" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>9. I can be somewhat careless</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q9" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q9" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q9" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q9" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q9" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>10. I prefer jobs and tasks that are predictable and routine in nature</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q10" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q10" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q10" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q10" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q10" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>11. I always love to challenge preconceived notions, traditions and norms</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q11" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q11" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q11" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q11" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q11" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>12. I am always punctual for my meetings, appointments and classes</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q12" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q12" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q12" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q12" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q12" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>13. I think I am always enthusiastic and full of energy</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q13" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q13" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q13" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q13" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q13" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>14. I am more likely to listen to others than myself</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q14" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q14" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q14" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q14" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q14" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>15. I am a very sensitive and reactive person &#40;e.g. to criticism and opposition&#41;</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q15" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q15" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q15" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q15" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q15" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>16. I tend to be emotionally stable and strong in the face of troubles</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q16" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q16" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q16" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q16" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q16" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>17. It is not difficult for me to start a quarrel with people</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q17" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q17" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q17" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q17" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q17" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>18. I am a laid back and quiet person</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q18" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q18" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q18" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q18" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q18" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>19. I can be a little bit messy and unorganized</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q19" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q19" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q19" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q19" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q19" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>20. I am somewhat conservative</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q20" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q20" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q20" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q20" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q20" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>21. I am curious and very imaginative about different things</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q21" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q21" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q21" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q21" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q21" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>22. I persevere until a job at hand is timely completed</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q22" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q22" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q22" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q22" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q22" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>23. I see myself as an outgoing and sociable person</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q23" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q23" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q23" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q23" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q23" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>24. I am inclined to get involved in helping others</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q24" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q24" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q24" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q24" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q24" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>25. I get easily depressed and immersed in depressive thinking</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q25" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q25" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q25" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q25" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q25" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>26. I can handle stress well, it does not show in my emotions</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q26" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q26" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q26" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q26" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q26" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>27. I am not afraid of confrontation and conflict</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q27" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q27" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q27" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q27" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q27" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>28. I tend to keep to my few friends or people I know well in social gatherings</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q28" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q28" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q28" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q28" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q28" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>29. I can easily be distracted</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q29" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q29" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q29" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q29" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q29" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>30. I love things to be done in established manners, I do not like exploring too many alternatives</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q30" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q30" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q30" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q30" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q30" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>31. I am very creative, inventive and open minded</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q31" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q31" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q31" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q31" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q31" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>32. I can be criticized for over planning, being meticulous and monitoring things making sure they go as planned</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q32" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q32" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q32" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q32" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q32" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>33. I am lively and very approachable</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q33" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q33" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q33" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q33" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q33" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>34. I am inclined to support and encourage others even at my detriment</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q34" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q34" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q34" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q34" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q34" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>35. My mood changes easily and can be very obvious</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q35" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q35" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q35" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q35" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q35" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>36. I do not lose my temper unnecessarily, I control my emotions well</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q36" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q36" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q36" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q36" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q36" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>37. I can be criticized for being rude sometimes</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q37" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q37" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q37" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q37" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q37" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>38. In group chats and discussions, I do not actively participate and contribute, I love to just listen.</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q38" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q38" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q38" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q38" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q38" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>39. I do not go about tasks and work in a systematic and methodical way</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q39" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q39" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q39" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q39" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q39" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>40. I love what is established , familiar and practical</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q40" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q40" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q40" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q40" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q40" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>41. I really value arts, aesthetics and I’m open to new experiences always</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q41" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q41" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q41" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q41" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q41" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>42. I am orderly and organized and people find me reliable in this wise that I follow through on my plan</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q42" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q42" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q42" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q42" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q42" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>43. I always look forward to developing new relationships</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q43" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q43" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q43" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q43" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q43" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>44. I tend to be very considerate and kind to almost everyone</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q44" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q44" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q44" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q44" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q44" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>45. I get nervous and things can be too tense and easily overwhelming for me</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q45" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q45" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q45" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q45" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q45" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>46. I am generally level- headed and undisturbed, I do not worry about situations I can’t control</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q46" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q46" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q46" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q46" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q46" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>47. I do not always listen and empathize with people</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q47" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q47" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q47" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q47" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q47" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>48. I am not an outgoing person, I am an introvert</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q48" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q48" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q48" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q48" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q48" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>49. I do not think paying attention to details is one of my strengths</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q49" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q49" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q49" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q49" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q49" value="5">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>50. I do not fancy too many changes</h4>
          <label class="container">Strongly Disagree
            <input type="radio" name="q50" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Disagree
            <input type="radio" name="q50" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Neither Agree nor Disagree
            <input type="radio" name="q50" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Agree
            <input type="radio" name="q50" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">Strongly Agree
            <input type="radio" name="q50" value="5">
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
          $q49 = $_POST['q49']; $q50 = $_POST['q50'];

          // Extract the response from the form and store them in arrays 

          $a_col = [$q1, $q11, $q21, $q31, $q41];
          $b_col = [$q2, $q12, $q22, $q32, $q42];
          $c_col = [$q3, $q13, $q23, $q33, $q43];
          $d_col = [$q4, $q14, $q24, $q34, $q44];
          $e_col = [$q5, $q15, $q25, $q35, $q45];
          $f_col = [$q6, $q16, $q26, $q36, $q46];
          $g_col = [$q7, $q17, $q27, $q37, $q47];
          $h_col = [$q8, $q18, $q28, $q38, $q48];
          $i_col = [$q9, $q19, $q29, $q39, $q49];
          $j_col = [$q10, $q20, $q30, $q40, $q50];

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


          // Store all response columns in another array
          $cols = [$a_col,$b_col,$c_col,$d_col,$e_col,$f_col,$g_col,$h_col,$i_col,$j_col];

          // Store the column arrays in another array
          $col_totals = [0,0,0,0,0,0,0,0,0,0];

          // Use a loop to determine each column total and store in the $col_total array
          for ($i=0; $i < 10; $i++) {
            
            $c_total = 0;
            
            foreach ($cols[$i] as $value) {
              $c_total = $c_total + $value;
            }
            //Store the total for each column in the $col_total array
            $col_totals[$i] = $c_total;
          }

          // Evaluate using the given formula
          $open = 30 + $col_totals[0] - $col_totals[9];
          $cons = 30 + $col_totals[1] - $col_totals[8];
          $extro = 30 + $col_totals[2] - $col_totals[7];
          $agree = 30 + $col_totals[3] - $col_totals[6];
          $neuro = 30 + $col_totals[4] - $col_totals[5];

          function rating($score) {
            // Calculate rating based on threshold given

            $res = array("Very High", "High", "Average", "Low", "Very Low");

            if ($score >= 5 && $score <= 15) { return $res[4]. ", " .$score; } 
            else if ($score >= 16 && $score <= 24) { return $res[3]. ", " .$score; } 
            else if ($score >= 25 && $score <= 34) { return $res[2]. ", " .$score; } 
            else if ($score >= 35 && $score <= 42) { return $res[1]. ", " .$score; } 
            else if ($score >= 43 && $score <= 50) { return $res[0]. ", " .$score; } 
            else { echo "An error occured while rating"; } 
          }

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
          echo "Aggreeableness: " . rating($agree) . "\n";
          echo "Neuroticism: " . rating($neuro) . "\n";*/

          echo"<script>window.location.hash='alert'</script>";

          echo"<div class='alert-successful' id='alert'>
          <h1>YOUR RESULTS</h1>
          <hr/>
                   'Openness' = " . rating($open); " 
                </div>";
          echo"<p></p>";

          echo"
                   'Conscientiousness' = " . rating($cons);" 
                ";
          echo"<p></p>";
          echo"
                   'Extroversion' = " . rating($extro);" 
                ";
          echo"<p></p>";
          echo"
                   'Aggreeableness' = " . rating($agree);" 
                ";
          echo"<p></p>";
          echo"
                   'Neuroticism' = " . rating($neuro);" 
                   <p></p>
               ";
          echo '</div>';

          //0nclick='this.parentElement.style.display='none';'>&times;
          }



?>
      
   
  </body>
  </html>

  <!-- <script type="text/javascript" src="js/fadeOut.js"></script> -->
  <!-- <script type="text/javascript" src="js/validation.js"></script> -->
        
    

      
        
    
  
  
  
  
  


