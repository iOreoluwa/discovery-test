<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>DISC PERSONALITY ASSESSMENT</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Changa+One" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <!-- <link rel="stylesheet" href="css/responsive.css">  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
    /********************************
    COPIED from W3schools (modified)
      *********************************/
    input[type=submit] {
    background-color: #35a0ff;
    width:94%;
    border: none;
    color: #fff;
    font-weight: bold;
    padding: 1.9%;
    margin: 3%;
    cursor: pointer;
  }


    h1 {
        /* padding-left:1%; */
        margin-top: 2.9em;
        display: block;
        color: #000;
         font-family: 'Changa One' , sans-serif;
         font-weight: 100;
         font-size: 20px;
         /* padding: 2%; */
      }
      h4 {
        padding-left:1%;
        display: block;
        color: #000;
         font-family: sans-serif;
         font-weight: bold;
         font-size: 20px;
         /* padding: 2%; */
      }
            /* The container */
      .container {
        padding-left:1%;
        /* display: block; */
        position: relative;
        padding-left: 35px;
        margin-bottom: 15px;
        margin-left:1%;
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


      .boxed {
        border : 2px solid #ccc;
        padding-bottom: 1.5%;
        padding-left: 1%;
        width : 250px;
        background-color : #B0C4DE;
    
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
     <h4>DISC PERSONALITY ASSESSMENT </h4>
     <h5>Instruction:</h5>
     <p>
     There are 24 boxes, in each box, choose one MOST and one LEAST description of you.
      Circle or tick the MOST and the LEAST descriptions of you. You have been provided with the meaning
      of some words that may seem difficult (The descriptive words adapted from the research book of the DISC inventor,
      Emotions of Normal People by William Moulton Marston, 1928)
     </p>
     <p></p>
     </div>
  <section id="form-section">
    <form name="iForm" action="disc.php" method="post" enctype="multipart/form-data">
      <p>
      <div class="boxed">
          <h1>1</h1>
          <h4>Forceful</h4>
          <label class="container">Most
            <input type="radio" name="a1" value="1" required= "required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Least
            <input type="radio" name="a2" value="2" required = "required">
            <span class="checkmark"></span>
          </label>
        <h4>Expressive</h4>
        <label class="container">Most
            <input type="radio" name="a1" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="a2" value="4">
            <span class="checkmark"></span>
          </label>
        <h4>Even Tempered</h4>
        <label class="container">Most
            <input type="radio" name="a1" value="5">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="a2" value="6">
            <span class="checkmark"></span>
          </label>
          <h4>Compliant</h4>
        <label class="container">Most
            <input type="radio" name="a1" value="7">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="a2" value="8">
            <span class="checkmark"></span>
          </label>
        </div>
      </p>
    
      <p>
      <div class="boxed">
          <h1>2</h1>
          <h4>Assertive</h4>
          <label class="container">Most
            <input type="radio" name="b1" value="1" required= "required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Least
            <input type="radio" name="b1" value="2" required = "required">
            <span class="checkmark"></span>
          </label>
        <h4>Playful</h4>
        <label class="container">Most
            <input type="radio" name="b1" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="b2" value="4">
            <span class="checkmark"></span>
          </label>
        <h4>Reserved</h4>
        <label class="container">Most
            <input type="radio" name="b1" value="5">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="b2" value="6">
            <span class="checkmark"></span>
          </label>
          <h4>Agreable</h4>
        <label class="container">Most
            <input type="radio" name="b1" value="7">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="b2" value="8">
            <span class="checkmark"></span>
          </label>
        </div>
      </p>
      
      <p>
      <div class="boxed">
          <h1>3</h1>
          <h4>Bold</h4>
          <label class="container">Most
            <input type="radio" name="c1" value="1" required= "required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Least
            <input type="radio" name="c2" value="2" required = "required">
            <span class="checkmark"></span>
          </label>
        <h4>Optimistic</h4>
        <label class="container">Most
            <input type="radio" name="c1" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="c2" value="4">
            <span class="checkmark"></span>
          </label>
        <h4>Moderate</h4>
        <label class="container">Most
            <input type="radio" name="c1" value="5">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="c2" value="6">
            <span class="checkmark"></span>
          </label>
          <h4>Perfectionist</h4>
        <label class="container">Most
            <input type="radio" name="c1" value="7">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="c2" value="8">
            <span class="checkmark"></span>
          </label>
        </div>
      </p>

      <p>
      <div class="boxed">
          <h1>4</h1>
          <h4>Competitive</h4>
          <label class="container">Most
            <input type="radio" name="d1" value="1" required= "required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Least
            <input type="radio" name="d2" value="2" required = "required">
            <span class="checkmark"></span>
          </label>
        <h4>Sociable</h4>
        <label class="container">Most
            <input type="radio" name="d1" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="d2" value="4">
            <span class="checkmark"></span>
          </label>
        <h4>Gentle</h4>
        <label class="container">Most
            <input type="radio" name="d1" value="5">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="d2" value="6">
            <span class="checkmark"></span>
          </label>
          <h4>Introspective</h4>
        <label class="container">Most
            <input type="radio" name="d1" value="7">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="d2" value="8">
            <span class="checkmark"></span>
          </label>
        </div>
      </p>

      
      <p>
      <div class="boxed">
          <h1>5</h1>
          <h4>Will-Power</h4>
          <label class="container">Most
            <input type="radio" name="e1" value="1" required= "required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Least
            <input type="radio" name="e2" value="2" required = "required">
            <span class="checkmark"></span>
          </label>
        <h4>Entertaining</h4>
        <label class="container">Most
            <input type="radio" name="e1" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="e2" value="4">
            <span class="checkmark"></span>
          </label>
        <h4>Considerate</h4>
        <label class="container">Most
            <input type="radio" name="e1" value="5">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="e2" value="6">
            <span class="checkmark"></span>
          </label>
          <h4>Cautious</h4>
        <label class="container">Most
            <input type="radio" name="e1" value="7">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="e2" value="8">
            <span class="checkmark"></span>
          </label>
        </div>
      </p>

      
      <p>
      <div class="boxed">
          <h1>6</h1>
          <h4>Courageous</h4>
          <label class="container">Most
            <input type="radio" name="f1" value="1" required= "required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Least
            <input type="radio" name="f2" value="2" required = "required">
            <span class="checkmark"></span>
          </label>
        <h4>Inspiring</h4>
        <label class="container">Most
            <input type="radio" name="f1" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="f2" value="4">
            <span class="checkmark"></span>
          </label>
        <h4>Loyal</h4>
        <label class="container">Most
            <input type="radio" name="f1" value="5">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="f2" value="6">
            <span class="checkmark"></span>
          </label>
          <h4>Adaptable</h4>
        <label class="container">Most
            <input type="radio" name="f1" value="7">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="f2" value="8">
            <span class="checkmark"></span>
          </label>
        </div>
      </p>

      
      <p>
      <div class="boxed">
          <h1>7</h1>
          <h4>Adventurous</h4>
          <label class="container">Most
            <input type="radio" name="g1" value="1" required= "required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Least
            <input type="radio" name="g2" value="2" required = "required">
            <span class="checkmark"></span>
          </label>
        <h4>Good Mixer</h4>
        <label class="container">Most
            <input type="radio" name="g1" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="g2" value="4">
            <span class="checkmark"></span>
          </label>
        <h4>Gentle</h4>
        <label class="container">Most
            <input type="radio" name="g1" value="5">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="g2" value="6">
            <span class="checkmark"></span>
          </label>
          <h4>Careful</h4>
        <label class="container">Most
            <input type="radio" name="g1" value="7">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="g2" value="8">
            <span class="checkmark"></span>
          </label>
        </div>
      </p>

            
      <p>
      <div class="boxed">
          <h1>8</h1>
          <h4>Domineering</h4>
          <label class="container">Most
            <input type="radio" name="h1" value="1" required= "required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Least
            <input type="radio" name="h2" value="2" required = "required">
            <span class="checkmark"></span>
          </label>
        <h4>Enthusiastic</h4>
        <label class="container">Most
            <input type="radio" name="h1" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="h2" value="4">
            <span class="checkmark"></span>
          </label>
        <h4>Relaxed</h4>
        <label class="container">Most
            <input type="radio" name="h1" value="5">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="h2" value="6">
            <span class="checkmark"></span>
          </label>
          <h4>Correct</h4>
        <label class="container">Most
            <input type="radio" name="h1" value="7">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="h2" value="8">
            <span class="checkmark"></span>
          </label>
        </div>
      </p>

            
      <p>
      <div class="boxed">
          <h1>9</h1>
          <h4>Pioneering</h4>
          <label class="container">Most
            <input type="radio" name="i1" value="1" required= "required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Least
            <input type="radio" name="i2" value="2" required = "required">
            <span class="checkmark"></span>
          </label>
        <h4>Persuasive</h4>
        <label class="container">Most
            <input type="radio" name="i1" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="i2" value="4">
            <span class="checkmark"></span>
          </label>
        <h4>Good Natured</h4>
        <label class="container">Most
            <input type="radio" name="i1" value="5">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="i2" value="6">
            <span class="checkmark"></span>
          </label>
          <h4>Precise</h4>
        <label class="container">Most
            <input type="radio" name="i1" value="7">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="i2" value="8">
            <span class="checkmark"></span>
          </label>
        </div>
      </p>

      <p>
      <div class="boxed">
          <h1>10</h1>
          <h4>Strong Minded</h4>
          <label class="container">Most
            <input type="radio" name="j1" value="1" required= "required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Least
            <input type="radio" name="j2" value="2" required = "required">
            <span class="checkmark"></span>
          </label>
        <h4>Outgoing</h4>
        <label class="container">Most
            <input type="radio" name="j1" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="j2" value="4">
            <span class="checkmark"></span>
          </label>
        <h4>Cautious</h4>
        <label class="container">Most
            <input type="radio" name="j1" value="5">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="j2" value="6">
            <span class="checkmark"></span>
          </label>
          <h4>Accurate</h4>
        <label class="container">Most
            <input type="radio" name="j1" value="7">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="j2" value="8">
            <span class="checkmark"></span>
          </label>
        </div>
      </p>

      <p>
      <div class="boxed">
          <h1>11</h1>
          <h4>Persistent</h4>
          <label class="container">Most
            <input type="radio" name="k1" value="1" required= "required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Least
            <input type="radio" name="k2" value="2" required = "required">
            <span class="checkmark"></span>
          </label>
        <h4>Emotional</h4>
        <label class="container">Most
            <input type="radio" name="k1" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="k2" value="4">
            <span class="checkmark"></span>
          </label>
        <h4>Submissive</h4>
        <label class="container">Most
            <input type="radio" name="k1" value="5">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="k2" value="6">
            <span class="checkmark"></span>
          </label>
          <h4>Receptive</h4>
        <label class="container">Most
            <input type="radio" name="k1" value="7">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="k2" value="8">
            <span class="checkmark"></span>
          </label>
        </div>
      </p>

      <p>
      <div class="boxed">
          <h1>12</h1>
          <h4>Vigorous</h4>
          <label class="container">Most
            <input type="radio" name="l1" value="1" required= "required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Least
            <input type="radio" name="l2" value="2" required = "required">
            <span class="checkmark"></span>
          </label>
        <h4>Influential</h4>
        <label class="container">Most
            <input type="radio" name="l1" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="l2" value="4">
            <span class="checkmark"></span>
          </label>
        <h4>Neighbourly</h4>
        <label class="container">Most
            <input type="radio" name="l1" value="5">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="l2" value="6">
            <span class="checkmark"></span>
          </label>
          <h4>Resigned</h4>
        <label class="container">Most
            <input type="radio" name="l1" value="7">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="l2" value="8">
            <span class="checkmark"></span>
          </label>
        </div>
      </p>
      <!-- STOP/START -->
      <p>
      <div class="boxed">
          <h1>13</h1>
          <h4>Dogged</h4>
          <label class="container">Most
            <input type="radio" name="m1" value="1" required= "required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Least
            <input type="radio" name="m2" value="2" required = "required">
            <span class="checkmark"></span>
          </label>
        <h4>Open-minded</h4>
        <label class="container">Most
            <input type="radio" name="m1" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="m2" value="4">
            <span class="checkmark"></span>
          </label>
        <h4>Accomodating</h4>
        <label class="container">Most
            <input type="radio" name="m1" value="5">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="m2" value="6">
            <span class="checkmark"></span>
          </label>
          <h4>Respectful</h4>
        <label class="container">Most
            <input type="radio" name="m1" value="7">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="m2" value="8">
            <span class="checkmark"></span>
          </label>
        </div>
      </p>

      <p>
      <div class="boxed">
          <h1>14</h1>
          <h4>Self-Reliant</h4>
          <label class="container">Most
            <input type="radio" name="n1" value="1" required= "required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Least
            <input type="radio" name="n2" value="2" required = "required">
            <span class="checkmark"></span>
          </label>
        <h4>Persuasive</h4>
        <label class="container">Most
            <input type="radio" name="n1" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="n2" value="4">
            <span class="checkmark"></span>
          </label>
        <h4>Sweet</h4>
        <label class="container">Most
            <input type="radio" name="n1" value="5">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="n2" value="6">
            <span class="checkmark"></span>
          </label>
          <h4>Well Disciplined</h4>
        <label class="container">Most
            <input type="radio" name="n1" value="7">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="n2" value="8">
            <span class="checkmark"></span>
          </label>
        </div>
      </p>


      <p>
      <div class="boxed">
          <h1>15</h1>
          <h4>Determined</h4>
          <label class="container">Most
            <input type="radio" name="o1" value="1" required= "required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Least
            <input type="radio" name="o2" value="2" required = "required">
            <span class="checkmark"></span>
          </label>
        <h4>Trusting</h4>
        <label class="container">Most
            <input type="radio" name="o1" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="o2" value="4">
            <span class="checkmark"></span>
          </label>
        <h4>Patient</h4>
        <label class="container">Most
            <input type="radio" name="o1" value="5">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="o2" value="6">
            <span class="checkmark"></span>
          </label>
          <h4>Conventional</h4>
        <label class="container">Most
            <input type="radio" name="o1" value="7">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="o2" value="8">
            <span class="checkmark"></span>
          </label>
        </div>
      </p>

      <p>
      <div class="boxed">
          <h1>16</h1>
          <h4>Demanding</h4>
          <label class="container">Most
            <input type="radio" name="p1" value="1" required= "required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Least
            <input type="radio" name="p2" value="2" required = "required">
            <span class="checkmark"></span>
          </label>
        <h4>Animated</h4>
        <label class="container">Most
            <input type="radio" name="p1" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="p2" value="4">
            <span class="checkmark"></span>
          </label>
        <h4>Self-Controlled</h4>
        <label class="container">Most
            <input type="radio" name="p1" value="5">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="p2" value="6">
            <span class="checkmark"></span>
          </label>
          <h4>Humble</h4>
        <label class="container">Most
            <input type="radio" name="p1" value="7">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="p2" value="8">
            <span class="checkmark"></span>
          </label>
        </div>
      </p>

      <p>
      <div class="boxed">
          <h1>17</h1>
          <h4>Impatient</h4>
          <label class="container">Most
            <input type="radio" name="q1" value="1" required= "required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Least
            <input type="radio" name="q2" value="2" required = "required">
            <span class="checkmark"></span>
          </label>
        <h4>Attractive</h4>
        <label class="container">Most
            <input type="radio" name="q1" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="q2" value="4">
            <span class="checkmark"></span>
          </label>
        <h4>Satisfied</h4>
        <label class="container">Most
            <input type="radio" name="q1" value="5">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="q2" value="6">
            <span class="checkmark"></span>
          </label>
          <h4>Restrained</h4>
        <label class="container">Most
            <input type="radio" name="q1" value="7">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="q2" value="8">
            <span class="checkmark"></span>
          </label>
        </div>
      </p>


      <p>
      <div class="boxed">
          <h1>18</h1>
          <h4>Outspoken</h4>
          <label class="container">Most
            <input type="radio" name="r1" value="1" required= "required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Least
            <input type="radio" name="r2" value="2" required = "required">
            <span class="checkmark"></span>
          </label>
        <h4>Extroverted</h4>
        <label class="container">Most
            <input type="radio" name="r1" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="r2" value="4">
            <span class="checkmark"></span>
          </label>
        <h4>Amiable</h4>
        <label class="container">Most
            <input type="radio" name="r1" value="5">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="r2" value="6">
            <span class="checkmark"></span>
          </label>
          <h4>Fearful</h4>
        <label class="container">Most
            <input type="radio" name="r1" value="7">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="r2" value="8">
            <span class="checkmark"></span>
          </label>
        </div>
      </p>

      <p>
      <div class="boxed">
          <h1>19</h1>
          <h4>Stubborn</h4>
          <label class="container">Most
            <input type="radio" name="s1" value="1" required= "required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Least
            <input type="radio" name="s2" value="2" required = "required">
            <span class="checkmark"></span>
          </label>
        <h4>Companionable</h4>
        <label class="container">Most
            <input type="radio" name="s1" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="s2" value="4">
            <span class="checkmark"></span>
          </label>
        <h4>Good Listener</h4>
        <label class="container">Most
            <input type="radio" name="s1" value="5">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="s2" value="6">
            <span class="checkmark"></span>
          </label>
          <h4>Diplomatic</h4>
        <label class="container">Most
            <input type="radio" name="s1" value="7">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="s2" value="8">
            <span class="checkmark"></span>
          </label>
        </div>
      </p>

      <p>
      <div class="boxed">
          <h1>20</h1>
          <h4>Positive</h4>
          <label class="container">Most
            <input type="radio" name="t1" value="1" required= "required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Least
            <input type="radio" name="t2" value="2" required = "required">
            <span class="checkmark"></span>
          </label>
        <h4>Joyful</h4>
        <label class="container">Most
            <input type="radio" name="t1" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="t2" value="4">
            <span class="checkmark"></span>
          </label>
        <h4>Obedient</h4>
        <label class="container">Most
            <input type="radio" name="t1" value="5">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="t2" value="6">
            <span class="checkmark"></span>
          </label>
          <h4>Timid</h4>
        <label class="container">Most
            <input type="radio" name="t1" value="7">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="t2" value="8">
            <span class="checkmark"></span>
          </label>
        </div>
      </p>


      <p>
      <div class="boxed">
          <h1>21</h1>
          <h4>High Spirited</h4>
          <label class="container">Most
            <input type="radio" name="u1" value="1" required= "required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Least
            <input type="radio" name="u2" value="2" required = "required">
            <span class="checkmark"></span>
          </label>
        <h4>Talkative</h4>
        <label class="container">Most
            <input type="radio" name="u1" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="u2" value="4">
            <span class="checkmark"></span>
          </label>
        <h4>Kind</h4>
        <label class="container">Most
            <input type="radio" name="u1" value="5">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="u2" value="6">
            <span class="checkmark"></span>
          </label>
          <h4>Hard To Please</h4>
        <label class="container">Most
            <input type="radio" name="u1" value="7">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="u2" value="8">
            <span class="checkmark"></span>
          </label>
        </div>
      </p>

      <p>
      <div class="boxed">
          <h1>22</h1>
          <h4>Aggresive</h4>
          <label class="container">Most
            <input type="radio" name="v1" value="1" required= "required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Least
            <input type="radio" name="v2" value="2" required = "required">
            <span class="checkmark"></span>
          </label>
        <h4>Popular</h4>
        <label class="container">Most
            <input type="radio" name="v1" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="v2" value="4">
            <span class="checkmark"></span>
          </label>
        <h4>Lenient</h4>
        <label class="container">Most
            <input type="radio" name="v1" value="5">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="v2" value="6">
            <span class="checkmark"></span>
          </label>
          <h4>Devout</h4>
        <label class="container">Most
            <input type="radio" name="v1" value="7">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="v2" value="8">
            <span class="checkmark"></span>
          </label>
        </div>
      </p>

      <p>
      <div class="boxed">
          <h1>23</h1>
          <h4>Daring</h4>
          <label class="container">Most
            <input type="radio" name="w1" value="1" required= "required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Least
            <input type="radio" name="w2" value="2" required = "required">
            <span class="checkmark"></span>
          </label>
        <h4>Eager</h4>
        <label class="container">Most
            <input type="radio" name="w1" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="w2" value="4">
            <span class="checkmark"></span>
          </label>
        <h4>Sympathetic</h4>
        <label class="container">Most
            <input type="radio" name="w1" value="5">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="w2" value="6">
            <span class="checkmark"></span>
          </label>
          <h4>Cautious</h4>
        <label class="container">Most
            <input type="radio" name="w1" value="7">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="w2" value="8">
            <span class="checkmark"></span>
          </label>
        </div>
      </p>

      <p>
      <div class="boxed">
          <h1>24</h1>
          <h4>Restless</h4>
          <label class="container">Most
            <input type="radio" name="x1" value="1" required= "required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Least
            <input type="radio" name="x2" value="2" required = "required">
            <span class="checkmark"></span>
          </label>
        <h4>Charming</h4>
        <label class="container">Most
            <input type="radio" name="x1" value="3">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="x2" value="4">
            <span class="checkmark"></span>
          </label>
        <h4>Peaceful</h4>
        <label class="container">Most
            <input type="radio" name="x1" value="5">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="x2" value="6">
            <span class="checkmark"></span>
          </label>
          <h4>Strict</h4>
        <label class="container">Most
            <input type="radio" name="x1" value="7">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Least
            <input type="radio" name="x2" value="8">
            <span class="checkmark"></span>
          </label>
        </div>
      </p>

     <p>
       <input type="submit" name="submit" value="submit">
      </p>
    </form>
</section>

<?php
if (isset($_POST['submit'])) {
  $a1 = $_POST['a1'];   $f1 = $_POST['f1'];
  $a2 = $_POST['a2'];   $f2 = $_POST['f2'];
  $b1 = $_POST['b1'];   $g1 = $_POST['g1'];
  $b2 = $_POST['b2'];   $g2 = $_POST['g2'];
  $c1 = $_POST['c1'];   $h1 = $_POST['h1'];
  $c2 = $_POST['c2'];   $h2 = $_POST['h2'];
  $d1 = $_POST['d1'];   $i1 = $_POST['i1'];
  $d2 = $_POST['d2'];   $i2 = $_POST['i2'];
  $e1 = $_POST['e1'];   $j1 = $_POST['j1'];
  $e2 = $_POST['e2'];   $j2 = $_POST['j2'];
  

  $k1 = $_POST['k1'];   $p1 = $_POST['p1'];
  $k2 = $_POST['k2'];   $p2 = $_POST['p2'];
  $l1 = $_POST['l1'];   $q1 = $_POST['q1'];
  $l2 = $_POST['l2'];   $q2 = $_POST['q2'];
  $m1 = $_POST['m1'];   $r1 = $_POST['r1'];
  $m2 = $_POST['m2'];   $r2 = $_POST['r2'];
  $n1 = $_POST['n1'];   $s1 = $_POST['s1'];
  $n2 = $_POST['n2'];   $s2 = $_POST['s2'];
  $o1 = $_POST['o1'];   $t1 = $_POST['t1'];
  $o2 = $_POST['o2'];   $t2 = $_POST['t2'];

  $u1 = $_POST['u1'];   $w1 = $_POST['w1'];
  $u2 = $_POST['u2'];   $w2 = $_POST['w2'];
  $v1 = $_POST['v1'];   $x1 = $_POST['x1'];
  $v2 = $_POST['v2'];   $x2 = $_POST['x2'];
  
  
  
  $arr = [$a1, $a2, $b1, $b2, $c1, $c2, $d1, $d2, $e1, $e2, $f1, $f2, $g1, $g2, $h1, $h2, $i1, $i2, $j1, $j2, $k1, $k2,
          $l1, $l2, $m1, $m2, $n1, $n2, $o1, $o2, $p1, $p2, $q1, $q2, $r1, $r2, $s1, $s2, $t1, $t2, $u1, $u2, $v1, $v2,
          $w1, $w2, $x1, $x2];
  $y = count($arr);
  //echo $n;
  $res = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];

  for($z = 0; $z < $y; $z++){
    $res[$arr[$z]]++;

  }

  $dom = $res[1] - $res[2];
  $inf = $res[3] - $res[4];
  $ste = $res[5] - $res[6];
  $com = $res[7] - $res[8];

  /*echo $dom;
  echo"<p>";
  echo $inf;
  echo"<p>";
  echo $ste;
  echo"<p>";
  echo $com;*/

  $total = array('Dominace'=>$dom, 'Influence'=>$inf, 'Steady'=>$ste,'Compliance'=>$com);

  echo"<div class='alert-successful' id='alert'>
    <h1 style='color:white;'>YOUR RESULTS</h1>";
    
    echo"<script>window.location.hash='alert'</script>

    <hr/>";


    echo'<br/>';
    $max = array_search(max($total), $total);

    echo 'First : ' . $max;
    echo '<br/>';
    unset($total[$max]);
    //print_r($colss);
    echo '<br/>';

    $max2 = array_search(max($total), $total);
    echo 'Second : ' . $max2;

    //echo 'This is the min: ' . array_search(max($colss), $colss);
    echo'<p></p>';
    echo'</div>';
 
  


  //echo $a1, $a2, $b1, $b2;

  


}

// PHP program to count occurrences 
// of an element 
// Returns number of times x 
// occurs in arr[0..n-1] 
// This code is contributed by Sam007 

/*function countOccurrences($arr, $n, $x) 
{ 
	$res = 0; 
	for ($i = 0; $i < $n; $i++) 
		if ($x == $arr[$i]) 
		$res++; 
	return $res; 
} 
// Driver code 
  //$arr = array(1, 2, 2, 2, 2, 3, 4, 7 ,8 ,8 ); 

	$n = count($total); 
  
  $aa1 = countOccurrences($total, $n, 1); 

  
  echo  $aa1;
*/







?>


</body>
</html>