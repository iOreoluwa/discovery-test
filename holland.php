<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Holland</title>
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
        <ul>
          <!-- <li><a href="index.php" class="selected">Big 5</a></li> 
           <li><a href="holland.php">Holland</a></li>  -->
           <!-- <li><a href="career.php">Career</a></li>  -->
        </ul>
      </nav>
    </header>
    <div id="wrapper">
     <div id="sheader">
     <h4>Holland</h4>
     <h5>Instruction:</h5>
     <p>
     The Assessment  below has 60 questions; there is no right or wrong answer. 
     This questionnaire assesses you based on your interests. 
     The questions asked are activities based and you have to show your degree of interest for each statement. 
     Decide whether you think you might like to do the activity, dislike doing it, or feel neutral about it. 
     It could also mean how true the statement is for you. 
     Do not think about whether you have the skills or training to do the activity, or how much money you might make. 
     Simply think about whether you would enjoy it or not<br>
     For each activity or question indicate your degree of interest from 5 to 1

        <ul>
          <li>5 :You really like it &#40;the statement is really much like me&#41;</li>
          <li>4 :You Like it &#40;the statement is like me&#41;  </li>
          <li>3 :You are neutral about it &#40;the statement is a neutral one to me&#41; </li>
          <li>2 :Dislike it &#40;the statement is not like me&#41; </li>
          <li>1 :Really Dislike &#40;the statement is not like me at all&#41; </li>
        </ul>
     </p>
     <p></p>
     </div>
     <section id="form-section">
        <form name="iForm" action="holland.php" method="post" enctype="multipart/form-data">
         <p>
          <h4>1. I would rather want  people around me appreciate me more for my practical nature 
            and approach than my creative and intuitive nature</h4>
          <label class="container">You really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q1" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You Like it &#40;the statement is like me&#41;
            <input type="radio" name="q1" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q1" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container">Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q1" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q1" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>2. If I find myself in a garden 
              I would rather paint and sketch a flower than arrange 
              the flowers and pick the leaves
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q2" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q2" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q2" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q2" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q2" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>3.	Working  at an archeological site, 
            I am the one who inspects the artifacts rather than excavates the artifacts.
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q3" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q3" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q3" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q3" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q3" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>4.	I prefer my job description to be that of helping others than being outdoors most of the time.</h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q4" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q4" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q4" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q4" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q4" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>5. I would prefer a job that involves convincing and 
              persuading others than the one that involves physical activity and movement
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q5" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q5" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q5" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q5" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q5" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>6.Participating in a garage sales in the neighborhood, I will rather
           be the one to index the prices and take account rather than be 
           the one to offload the boxes and set the stage.
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q6" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q6" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q6" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q6" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q6" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>7. I am good at keeping records in appropriate ways that they can 
            be easily retrieved by any other person or me
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q7" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q7" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q7" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q7" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q7" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>8.	Love to start different things even if I do not get to personally finish or run them.</h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q8" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q8" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q8" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q8" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q8" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>9. I like trying to help people solve their problems.</h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q9" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q9" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q9" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q9" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q9" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>10.	I am very analytically inquisitive about some concepts that are not easily understood.</h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q10" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q10" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q10" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q10" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q10" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>11.	I enjoy trying to figure out how things work.</h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q11" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q11" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q11" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q11" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q11" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>12.	I can put together and repair gadgets.</h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q12" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q12" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q12" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q12" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q12" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>13.	In committment to the protection of endangered species 
            I would rather study the impact of global warming than build 
            shelters to protect them.
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q13" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q13" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q13" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q13" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q13" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>14.	 Watching a TV programme, 
            it is more likely to be a Fashion and Artistic trend than 
            the latest Discoveries programme. 
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q14" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q14" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q14" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q14" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q14" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>My best friend is about to participate in a baking contest,
             my contribution would be to search for an innovative recipe rather than 
             offer tips on decoration and presentation.
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q15" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q15" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q15" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q15" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q15" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>16.	Volunteering at an orphanage, 
            I rather spend time listening and talking to 
            them than participating in a theatre activity for the kids.
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q16" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q16" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q16" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q16" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q16" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>17.	I would like to become famous for a business venture rather than an artistic venture.</h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q17" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q17" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q17" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q17" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q17" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>18. When taking note at a conference or a class I always make sure I have 
            neatly hand-written and systematically organized notes and not several diagrammatic 
            representations illustrating the content.
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q18" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q18" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q18" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q18" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q18" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>19.	I pay attention to details and I would not  have any issues computing large data.</h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q19" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q19" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q19" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q19" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q19" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>20.	I can conveniently persuade people to see my own point of view.</h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q20" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q20" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q20" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q20" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q20" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>21.	I interact with people freely without inhibitions.</h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q21" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q21" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q21" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q21" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q21" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>22.	I love to research deeply into a topic that interests me.</h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q22" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q22" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q22" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q22" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q22" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>23.	Someday, I would love to put songs, poem or fictions together.</h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q23" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q23" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q23" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q23" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q23" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>24.	To use my hand to build things comes naturally easy to me.</h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q24" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q24" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q24" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q24" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q24" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>25.	It is easier for me to use baking, 
            cooking or repairing to supplement my income than childcare or social work, 
            childcare or tutoring.
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q25" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q25" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q25" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q25" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q25" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>26.	As a member of a musical troop. 
          I am more interested in playing music and performing to a large audience than facilitating
           relationships among members.
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q26" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q26" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q26" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q26" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q26" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>27. Working in a pet store, I would enjoy observing animal behavior than Interacting with customers.</h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q27" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q27" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q27" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q27" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q27" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>28.	I am more uncomfortable when I lack access to people to connect with than when
           I lack resources to gather information.</h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q28" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q28" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q28" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q28" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q28" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>Assuming equal pay and conditions, in a pharmaceutical laboratory, 
            I would rather be a director of Operation
             than a Director of Research on autoimmune diseases.
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q29" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q29" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q29" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q29" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q29" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>30.	 I would rather conduct a financial trends analysis than a critical and scientific inquiry.</h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q30" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q30" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q30" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q30" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q30" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>31.	I am good at organizing things like folders, files and desks in an office</h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q31" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q31" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q31" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q31" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q31" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>32.	I love to motivate sales people to perform.</h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q32" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q32" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q32" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q32" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q32" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>33.	I connect with people easily and I like to teach and train others.</h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q33" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q33" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q33" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q33" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q33" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>34.	I love to research, analyze problems and situations.</h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q34" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q34" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q34" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q34" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q34" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>35.	Someday if there is an opportunity I would love to direct a stage play. </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q35" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q35" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q35" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q35" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q35" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>36.	I like to work on cars and any other machines I use. </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q36" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q36" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q36" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q36" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q36" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>37.	Seeing a new object for the first time, 
            my immediate response is to touch and feel 
            it to see how it works rather than to think of ways to market it.
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q37" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q37" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q37" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q37" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q37" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>38.	With equal pay and benefits in an advertising company 
            I would prefer to be the one   creating new concepts than leading the design team.
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q38" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q38" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q38" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q38" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q38" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>39.	A laboratory where I work has discovered a cure for cancer. 
            I was the Scientist who analyzed and verified the findings and not the fundraiser
            who initiated the research project.
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q39" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q39" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q39" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q39" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q39" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>40.	I am more comfortable in the role of serving and helping my colleagues solve their problems 
                than guiding and motivating them to sell.
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q40" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q40" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q40" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q40" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q40" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>41.	I am more comfortable in the role of guiding and
             motivating my colleagues to sell than serving and helping them to solve their problems.
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q41" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q41" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q41" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q41" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q41" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>42.	In creating an Association with some friends, I prefer to be 
              the one in charge of looking through applications and filing them 
              appropriately and not the one to welcome people looking forward to joining the Association. 
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q42" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q42" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q42" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q42" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q42" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>43.	I neatly keep records of other people in a form that can easily be retrieved.</h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q43" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q43" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q43" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q43" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q43" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>44.	I love to negotiate terms of a contract and business deals.</h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q44" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q44" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q44" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q44" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q44" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>45. I love to teach a group of young people social skills conveniently.</h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q45" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q45" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q45" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q45" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q45" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>46. I am generally level- headed and undisturbed, I do not worry about situations I can’t control</h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q46" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q46" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q46" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q46" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q46" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>47.	Designing the cover of a magazine is something I would love to do if the opportunity shows up.</h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q47" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q47" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q47" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q47" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q47" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>48.	I am comfortable working with my hands either to build or repair.</h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q48" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q48" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q48" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q48" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q48" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>49.	People recognize me for my ability
            to work with my hands more than the ability to organize information in a methodical way.
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q49" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q49" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q49" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q49" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q49" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>50.	With equal pay, condition and benefits I would choose to be the
           Head of Advertising Department than be the Head of Accounting Department 
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q50" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q50" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q50" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q50" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q50" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>51. If I receive a prestigious award from the Museum. I would like it to be for Research on the Origin 
            of certain exhibits than for the compilation of donations and book keeping.
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q51" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q51" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q51" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q51" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q51" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>52.	In a business, I prefer people management to account management.
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q52" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q52" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q52" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q52" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q52" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>53.	In a team, I would rather choose to ensure and take up responsibility for the team's success
             than choose the role of carefully following and recording the team's progress.
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q53" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q53" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q53" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q53" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q53" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>54.	Supporting a candidate in a political campaign, I will rather take a job role that makes me 
            analyze polls and calculate statistics than participate in neighbourhood meetings.
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q54" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q54" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q54" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q54" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q54" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>55.	I love to track the financial expenses of a large company.
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q55" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q55" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q55" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q55" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q55" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>56.	I love to design the marketing plan for a product.
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q56" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q56" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q56" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q56" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q56" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>57.	I can conveniently lead a structured group discussion.
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q57" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q57" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q57" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q57" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q57" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>58.	I always find myself drawn into the rigour of intellectual activities.
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q58" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q58" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q58" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q58" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q58" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>59.	I am very expressive, creative and intuitive.
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q59" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q59" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q59" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q59" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q59" value="1">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>60.	Without any stress I can engage in Technical and manual activities.
          </h4>
          <label class="container">You Really like it &#40;the statement is really much like me&#41;
            <input type="radio" name="q60" value="5" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You like it &#40;the statement is like me&#41;
            <input type="radio" name="q60" value="4">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are neutral about it &#40;the statement is a neutral one to me&#41;
            <input type="radio" name="q60" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dislike it &#40; The statement is not like me &#41;
            <input type="radio" name="q60" value="2">
            <span class="checkmark"></span>
          </label>
          <label class="container">Really Dislike &#40;the statement is not like me at all&#41;
            <input type="radio" name="q60" value="1">
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
// Extract the response from the form and store them in arrays 
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



  // Use rand(1,5) for debegging purpose
  /*$a_col = [rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5)];
  $ii = [rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5)];
  $a = [rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5)];
  $s = [rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5)];
  $e = [rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5)];
  $c = [rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5),rand(1,5)];*/


  $a_col = [$q1, $q12, $q13, $q24, $q25, $q36, $q37, $q48, $q49, $q60];
  $b_col = [$q2, $q11, $q14, $q23, $q26, $q35, $q38, $q47, $q50, $q59];
  $c_col = [$q3, $q10, $q15, $q22, $q27, $q34, $q39, $q46, $q51, $q58 ];
  $d_col = [$q4, $q9, $q16, $q21, $q28, $q33, $q40, $q45, $q52, $q57];
  $e_col = [$q5, $q8, $q17, $q20, $q29, $q32, $q41, $q44, $q53, $q56];
  $f_col = [$q6, $q7, $q18, $q19, $q30, $q31, $q42, $q43, $q54, $q55];



  // Store all response columns in another array
  $cols = [$a_col, $b_col, $c_col, $d_col,$e_col, $f_col];

  // Store the column arrays in another array
  $col_totals = [0,0,0,0,0,0];

  // Use a loop to determine each column total and store in the $col_total array
  for ($i=0; $i < 6; $i++) {
    
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
           'Realistic' = " . $col_totals[0];" 
        </div>";
  echo"<p></p>";

  echo"
           'Investigative' = " .$col_totals[1];" 
        ";
  echo"<p></p>";
  echo"
           'Artistic' = " . $col_totals[2];" 
        ";
  echo"<p></p>";
  echo"
           'Social' = " . $col_totals[3];" 
        ";
  echo"<p></p>";
  echo"
           'Enterprising' = " .$col_totals[4];" 
           <p></p>
       ";
  echo" <p></p> 
       'Conventional' = " . $col_totals[5];"
      
    ";
  echo '</div>';

  //0nclick='this.parentElement.style.display='none';'>&times;

}

?>
  
   
  </body>
  </html>

  <!-- <script type="text/javascript" src="js/fadeOut.js"></script> -->
  <!-- <script type="text/javascript" src="js/validation.js"></script> -->
        
    

      
        
    
  
  
  
  
  






