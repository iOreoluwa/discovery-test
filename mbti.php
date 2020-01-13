<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MBTI Test &#40;Finding Your Style&#41;</title>
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
           <li><a href="holland.php">Holland</a></li>
           <li><a href="career.php">Career</a></li>  
           <li><a href="mbti.php">Mbti</a></li>   -->
        </ul>
      </nav>
    </header>
    <div id="wrapper">
     <div id="sheader">
     <h4>MBTI Test<br/> &#40;Finding Your Style&#41; </h4>
     <h5>Instruction:</h5>
     <p>
        The Assessment below has been adapted to throw up your own Preferred Style. 
        This Test has been seriously adapted and applied so do not try to copy and use it outside its
        purpose because this test has been professionally and skillfully adapted for this book only.
        Even if you are a Professional Psychometric Analyst, this is not your everyday MBTI. 
      </p>
      <p>
        This instrument &#40;test&#41; has been designed to help you discover and identify your natural preferences,
        and how you deal with both your inner and outer worlds when you are at work or in a learning environment that 
        is task oriented. This instrument is designed for young upwardly mobile individuals. Professionals of every fields,
        graduates and undergraduates can take the test.  
      </p>
      <p>
        It is very important that you answer the questions from the point of view of how you really behave
        in the work situation described and in some cases how you will behave normally and naturally.
      </p>
       <p>
        <strong>
          Avoid thinking about the way you wish you preferred to behave, think or act in the situation.<br/>
          Only think “…this is the way I actually behave, this is how I think, act, decide, and choose in this situation”.
        </strong> 
       </p>
       <p>
       Answer the questions as honestly and as objectively as possible. 
       Please note that there is no correct or wrong answer. 
       </p>
       <p>
       The closer you come to the truth about how you actually behave, 
       the more useful the information will be to you. 
       </p>
       <p>
       Tick letter &#40;a&#41; or &#40;b&#41; for the answer that is a more accurate description of how you most often think or feel. 
       In cases where you have the two options correct for you, you then have to rate which of the options is more correct. 
       </p>
       <p>
       Please help us by answering ALL the questions
       </p>

     <p></p>
     </div>
     <section id="form-section">
        <form name="iForm" action="mbti.php" method="post" enctype="multipart/form-data">
         <p>
          <h4>1. When I want to write a story, a project or a report, I usually think first of </h4>
          <label class="container">The little details that will make up the content or,
            <input type="radio" name="q1" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">The big picture
            <input type="radio" name="q1" value="2">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>2. When I have to submit homework and assignments, I am usually </h4>
          <label class="container"> One of the people that submit late, or 
            <input type="radio" name="q2" value="a" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Submit early
            <input type="radio" name="q2" value="b">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>3. Would you prefer to work in a company where</h4>
          <label class="container">People work independently in their own spaces with less interaction, or
            <input type="radio" name="q3" value="x" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Everyone works together in an open, 
          interactive and active environment where ideas   are exchanged?  
            <input type="radio" name="q3" value="l">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>4. When people ask you to advise them on a matter that is career related, do you more often?</h4>
          <label class="container"> Help them make logical decisions based on common sense or
            <input type="radio" name="q4" value="i" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Help them explore the values and policies in the situation based on possibilities?
            <input type="radio" name="q4" value="o">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>5. In a performance assessment, would it be more accurate if your boss/lecturer said</h4>
          <label class="container">You are practical, or
            <input type="radio" name="q5" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are imaginative?
            <input type="radio" name="q5" value="2">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>6. When I work on a project or a task, like painting or writing, I usually</h4>
          <label class="container">Do not do anything for several days and then do a lot in one day, or 
            <input type="radio" name="q6" value="a" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Work steadily on the assignment until it is completed to meet up with the deadline.
            <input type="radio" name="q6" value="b">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>7. I would describe myself as </h4>
          <label class="container">Calm and quiet, or 
            <input type="radio" name="q7" value="x" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Full of energy
            <input type="radio" name="q7" value="l">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>8. In situations when you have to listen to people reporting 
          issues or telling you what they have done, do you always</h4>
          <label class="container">Focus on the facts, and common sense in it above all, or
            <input type="radio" name="q8" value="i" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Give careful attention to people’s feeling and reasons beyond the common sense?
            <input type="radio" name="q8" value="o">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>9. When you listen to colleagues’ present ideas to you, do you tend to be more interested in?</h4>
          <label class="container">How practicable the ideas are or
            <input type="radio" name="q9" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Innovative and revolutionary approaches to the ideas?
            <input type="radio" name="q9" value="2">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>10. Do you prefer projects that</h4>
          <label class="container">May remain open – ended to ensure that all bases are covered, or
            <input type="radio" name="q10" value="a" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Have a clear ending date when you know they will be finished?
            <input type="radio" name="q10" value="b">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>11. This describes me better</h4>
          <label class="container">I am a more quiet and calm person 
            <input type="radio" name="q11" value="x" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">I always seem to be a talking and outgoing person
            <input type="radio" name="q11" value="l">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>12. When there is a heated argument as to what needs to be done, you always </h4>
          <label class="container">Do not consider sentiments, but the issues at hand, or
            <input type="radio" name="q12" value="i" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Give careful attention to people’s feeling?
            <input type="radio" name="q12" value="o">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>13. If you were asked to prepare a plan, would you be more likely to</h4>
          <label class="container">Emphasize what is practical and realistic now, or
            <input type="radio" name="q13" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Orient the plan towards future possibilities?
            <input type="radio" name="q13" value="2">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>14. Do you seem more often to</h4>
          <label class="container">Be unable to decide fast because you want to see all the angles or 
            <input type="radio" name="q14" value="a" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Make decisions quickly?
            <input type="radio" name="q14" value="b">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>When you have a decision to make at work, you more often</h4>
          <label class="container">Talk to very few selected people and spend most of your
           time working it out in your own head, or you are
            <input type="radio" name="q15" value="x" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Comfortable to talk it over with a number of people before you decide?
            <input type="radio" name="q15" value="l">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>16. When your friends talk to you about what they want to do, you more often want </h4>
          <label class="container">To think about what they say and consider it critically or want
            <input type="radio" name="q16" value="i" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">To feel if it is right for them and make them happy
            <input type="radio" name="q16" value="o">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>17.In one-on-one meetings, are you more likely to?</h4>
          <label class="container">Listen quietly and absorb details, or 
            <input type="radio" name="q17" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Anticipate the speaker’s words and interrupt?
            <input type="radio" name="q17" value="2">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>18. Would you prefer what you do every day to</h4>
          <label class="container">Have frequent changes in activities and schedules or
            <input type="radio" name="q18" value="a" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">be more of an ongoing routine, things that are done regularly as part of series of things?
            <input type="radio" name="q18" value="b">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>19. When you attend a training session, are you more likely to </h4>
          <label class="container">Watch and let others take the active role or 
            <input type="radio" name="q19" value="x" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Participate openly and actively?
            <input type="radio" name="q19" value="l">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>20. When you hear a presentation from a colleague, are you more likely to be</h4>
          <label class="container">Open and intellectual in criticizing, or
            <input type="radio" name="q20" value="i" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Careful in voicing your opinion, especially when you disagree?
            <input type="radio" name="q20" value="o">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>21.Do you prefer a job where you can</h4>
          <label class="container">Use your experience to work at familiar tasks, or
            <input type="radio" name="q21" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Confront ideas and problems that are new to you?
            <input type="radio" name="q21" value="2">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>22. Do you usually prefer to</h4>
          <label class="container">Let the day progress and see how things turn out, or   
            <input type="radio" name="q22" value="a" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Plan your day carefully in advance?
            <input type="radio" name="q22" value="b">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>23. Would you rather have a supervisor with whom you have</h4>
          <label class="container">Only infrequent or minimum level of interaction or
            <input type="radio" name="q23" value="x" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">A lot of day-by-day interaction and communication?
            <input type="radio" name="q23" value="l">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>24. When you have to make a decision at work, are you more likely to</h4>
          <label class="container">Analyze the situation logically, using a thinking process
             in which facts and ideas are connected in a correct way or
            <input type="radio" name="q24" value="i" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Put a strong emphasis on applying your values to the solution
            <input type="radio" name="q24" value="o">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>25. If your boss/lecturer gives you a difficult task, do you usually</h4>
          <label class="container">Collect as much information as possible before working things out, or
            <input type="radio" name="q25" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Dive in and rely on your ability to?
            <input type="radio" name="q25" value="2">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>26. Do you prefer the work you do every day to</h4>
          <label class="container">have frequent changes in activities, schedules and don’t have to do the same things every,  or
            <input type="radio" name="q26" value="a" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">be more of an ongoing routine, things that are done regularly as part of series of things?
            <input type="radio" name="q26" value="b">
            <span class="checkmark"></span>
          </label>
        </p>
         <p>
          <h4>27. When you have to organize and run a meeting, do you more often</h4>
          <label class="container">Prefer that someone else had the responsibility, or
            <input type="radio" name="q27" value="x" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Feel satisfied that you have the opportunity to take lead?
            <input type="radio" name="q27" value="l">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>28. When faced with a decision at work/school, do you usually</h4>
          <label class="container">Focus on the facts and figures above all, or 
            <input type="radio" name="q28" value="i" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Give careful attention to people’s feeling?
            <input type="radio" name="q28" value="o">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>29.Do you more often seek out work that applies your</h4>
          <label class="container">Practical skills and nature, or
            <input type="radio" name="q29" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Your ability to create new ideas and things?  
            <input type="radio" name="q29" value="2">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>30. When your boss gives you a new project, do you usually prefer</h4>
          <label class="container">To be left to work it out the way you want, or
            <input type="radio" name="q30" value="a" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Be given a clear statement of what is expected?
            <input type="radio" name="q30" value="b">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>31. Would your colleagues at work most likely describe you as a</h4>
          <label class="container">Quiet and thoughtful employee/student, or a
            <input type="radio" name="q31" value="x" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Lively team player bursting with energy? 
            <input type="radio" name="q31" value="l">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>32. If you have to confront colleagues or subordinates, are you usually</h4>
          <label class="container">Interested in making sure you give them the facts accurately, or
            <input type="radio" name="q32" value="i" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">More interest in making sure you do not hurt feelings?
            <input type="radio" name="q32" value="o">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>33. In appraising you, would it be more accurate if it states that </h4>
          <label class="container">You are practical and realistic, or
            <input type="radio" name="q33" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">You are imaginative and full of fantasies?
            <input type="radio" name="q33" value="2">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>34. Do you prefer your own office to be one in which</h4>
          <label class="container">There is a creative array of projects, papers, and books, or
            <input type="radio" name="q34" value="a" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Things are orderly, organized, and systematic? 
            <input type="radio" name="q34" value="b">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>35. When you are interrupted in the middle of a tough job, do you usually</h4>
          <label class="container">Prefer to be left alone with your thoughts, or
            <input type="radio" name="q35" value="x" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Welcome the opportunity to talk to someone?
            <input type="radio" name="q35" value="l">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>36. When you have to make a decision at work, are you more likely to</h4>
          <label class="container">Analyze the situation logically, using a thinking process in which facts and ideas are
               connected in a correct way or
            <input type="radio" name="q36" value="i" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Put strong emphasis on applying your values to the solution?  
            <input type="radio" name="q36" value="o">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>37. When you solve problems, are you more likely to </h4>
          <label class="container">Give most weight to the facts in front of you, or
            <input type="radio" name="q37" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Explore the full range of possibilities?
            <input type="radio" name="q37" value="2">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>38. I get things done always e.g. my assignments, designated tasks by</h4>
          <label class="container">Waiting till the last minute, or 
            <input type="radio" name="q38" value="a" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Doing it early enough
            <input type="radio" name="q38" value="b">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>39. Do you dress for work in a way that</h4>
          <label class="container">Blends in with the norm, or
            <input type="radio" name="q39" value="x" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Other people notice and admire your clothing?
            <input type="radio" name="q39" value="l">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>40. If you have to confront colleagues or subordinates, are you usually</h4>
          <label class="container">Interested in making sure you set the record straight and give them the facts accurately, or
            <input type="radio" name="q40" value="i" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">More interested in making sure you do not hurt their feelings while trying to tactfully tell     them?
            <input type="radio" name="q40" value="o">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>41. When you think of your most important work assets, are they</h4>
          <label class="container">More in the realm of the practical, or
            <input type="radio" name="q41" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">More inclined towards the realm of ideas?
            <input type="radio" name="q41" value="2">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>42. When coordinating a meeting, are you usually</h4>
          <label class="container">Disciplined about following your prepared agenda, or 
            <input type="radio" name="q42" value="a" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Flexible and open to whatever comes up?
            <input type="radio" name="q42" value="b">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>43. When you are in a meeting and someone tells a joke, do you</h4>
          <label class="container">Sit and listen more or less passively, or
            <input type="radio" name="q43" value="x" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Laugh and maybe think of one to tell?
            <input type="radio" name="q43" value="l">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>44. When you are putting forward a new ideal at work, do you more often</h4>
          <label class="container">Remain firm about the correctness of it, or
            <input type="radio" name="q44" value="i" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Try to persuade others by appealing to their sense of value?
            <input type="radio" name="q44" value="o">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>45. Do you prefer meetings where most time is spent on</h4>
          <label class="container">the application of the ideas discussed, or
            <input type="radio" name="q45" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">the ideas themselves?
            <input type="radio" name="q45" value="2">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>46. When you have made a rough choice, do you</h4>
          <label class="container"> Wish that you could remain open to other alternatives, or are
            <input type="radio" name="q46" value="a" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Satisfied that it is done?
            <input type="radio" name="q46" value="b">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>47. When you attend a company/school outing, do you usually</h4>
          <label class="container">hang out with the colleagues you know best, or
            <input type="radio" name="q47" value="x" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">walk around and meet people you may not know well ?
            <input type="radio" name="q47" value="l">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>48. When you have a long and complex report to read, are you more likely to </h4>
          <label class="container">be patient and study the details, or
            <input type="radio" name="q48" value="i" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">try to get the general ideas and how you feel about them?
            <input type="radio" name="q48" value="o">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>49. When a new idea flashes into your mind, do you usually</h4>
          <label class="container">Like to test it carefully before you get excited, or
            <input type="radio" name="q49" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Get excited and want to follow through quickly?
            <input type="radio" name="q49" value="2">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
        <p>
          <h4>50. When you are given a project or an assignment, do you usually prefer</h4>
          <label class="container">To be left to work it out the way you want, or
            <input type="radio" name="q50" value="a" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Get a clear statement of what is expected?
            <input type="radio" name="q50" value="b">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>51. Would you prefer to work in a company where</h4>
          <label class="container">People work independently in their own spaces with less interaction, or
            <input type="radio" name="q51" value="x" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Everyone works together in an open, interactive and active environment where ideas are exchanged? 
            <input type="radio" name="q51" value="l">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>52. When faced with a decision at work/school, do you prefer to</h4>
          <label class="container">Think things through, or
            <input type="radio" name="q52" value="i" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Trust your gut feelings? 
            <input type="radio" name="q52" value="o">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>53. Do you prefer meetings where most time is spent on</h4>
          <label class="container">The application and the practicalities of the ideas discussed, or
          <input type="radio" name="q53" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">The ideas and the innovations themselves?
            <input type="radio" name="q53" value="2">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>54. Do you prefer your work environment to be</h4>
          <label class="container">flexible and changing, or 
            <input type="radio" name="q54" value="a" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">comfortable, predictable, and stable?
            <input type="radio" name="q54" value="b">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>55.  Do you prefer to spend your lunch hour</h4>
          <label class="container">Eating alone or with one close colleague, or
            <input type="radio" name="q55" value="x" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Eating with a group?
            <input type="radio" name="q55" value="l">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>56. When you have a decision to make at work/school, do you usually</h4>
          <label class="container">Reason it through regardless of your feelings, or
            <input type="radio" name="q56" value="i" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container"> Consider how you feel to be very important?  
            <input type="radio" name="q56" value="o">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>57. When you pick up a report to read, do you usually go first to</h4>
          <label class="container">Understand the body of detailed information, or
            <input type="radio" name="q57" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Grasp the summary or the overall theme?   
            <input type="radio" name="q57" value="2">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
        <p>
          <h4>58. How do you get things done always e.g. my assignments, designated tasks</h4>
          <label class="container">Wait till the last minute, or 
            <input type="radio" name="q58" value="a" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Early enough 
            <input type="radio" name="q58" value="b">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>59. Do you enjoy more of</h4>
          <label class="container">Working without or less interaction with others for periods of time, or
            <input type="radio" name="q59" value="x" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">A day filled with variety and interactions with others?
            <input type="radio" name="q59" value="l">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>60. If you have to deal with a colleague’s feeling, do you prefer to be</h4>
          <label class="container">Truthful even if you can’t be tactful, or
            <input type="radio" name="q60" value="i" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Tactful, even if you can’t tell the truth?
            <input type="radio" name="q60" value="o">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>61. Is your leadership style more</h4>
          <label class="container">Practical, relating to real situation and events rather than ideas and emotions, or
            <input type="radio" name="q61" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Visionary: having a clear picture of what the world should be like in the future?  
            <input type="radio" name="q61" value="2">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>62. When you present your views in a meeting or a group discussion, are you usually</h4>
          <label class="container">Open to having others suggest changes and other views, or you are
            <input type="radio" name="q62" value="a" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Clear and decisive?  
            <input type="radio" name="q62" value="b">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>63.Do your best ideas at work or in school come from</h4>
          <label class="container">Quiet thought on your own, or 
            <input type="radio" name="q63" value="x" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">An interchange of ideas and sharing with others maybe your team members?
            <input type="radio" name="q63" value="l">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>64. When you are at a meeting or group discussion and a difference of opinion gets heated, do you usually</h4>
          <label class="container">Defend the side you think is most logical and reasonable or
            <input type="radio" name="q64" value="i" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Try or create a harmonious atmosphere and solution?
            <input type="radio" name="q64" value="o">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>65. Would you rather your supervisor/lecturer trusts you with</h4>
          <label class="container">Practical and real problems to solve, or 
            <input type="radio" name="q65" value="1" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Policy problems, plan and strategy to sort out?  
            <input type="radio" name="q65" value="2">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>66. Would you rather your projects </h4>
          <label class="container"> Allow for your flexible interpretation, or
            <input type="radio" name="q66" value="a" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Be well defined and planned out?
            <input type="radio" name="q66" value="b">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>67. Do you prefer most things you do at work to be</h4>
          <label class="container">A continuing series of short tasks, or
            <input type="radio" name="q67" value="x" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">Long projects on which you can concentrate your efforts ?
            <input type="radio" name="q67" value="l">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>
          <h4>68.  In appraising your performance, would you prefer your boss to write that</h4>
          <label class="container">You are intelligent, brilliant and reasonable, or
            <input type="radio" name="q68" value="i" required="required">
            <span class="checkmark"></span>
          </label>
          <label class="container">That you are warm, pleasant and make people feel relaxed and comfortable?
            <input type="radio" name="q68" value="o">
            <span class="checkmark"></span>
          </label>
        </p>
        <p>

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
  $q65 = $_POST['q65']; $q66 = $_POST['q66']; $q67 = $_POST['q67'];  $q68 = $_POST['q68'];    

  
  $a_col = [$q1, $q5, $q9, $q13, $q17, $q21, $q25, $q29, $q33, $q37, $q41, $q45, $q49, $q53, $q57, $q61, $q65];
  $b_col = [$q2, $q6, $q10, $q14, $q18, $q22, $q26, $q30, $q34, $q38, $q42, $q46, $q50, $q54, $q58, $q62, $q66];
  $c_col = [$q3, $q7, $q11, $q15, $q19, $q23, $q27, $q31, $q35, $q39, $q43, $q47, $q51, $q55, $q59, $q63, $q67];
  $d_col = [$q4, $q8, $q12, $q16, $q20, $q24, $q28, $q32, $q36, $q40, $q44, $q48, $q52, $q56, $q60, $q64, $q68];

  //print_r($a_col);
  //print_r($b_col);
  //print_r($c_col);
  //print_r($d_col);

// PHP program to find the  most frequent element  in an array. 
//CR=>NITIN MITTAL  
function mostFrequent( $arr, $n) 
{ 
    // Sort the array 
    sort($arr); 
    sort($arr , $n); 
  
    // find the max frequency using linear traversal 
    $max_count = 1;  
    $res = $arr[0];  
    $curr_count = 1; 
    for ($i = 1; $i < $n; $i++)  
    { 
        if ($arr[$i] == $arr[$i - 1]) 
            $curr_count++; 
        else 
        { 
            if ($curr_count > $max_count) 
            { 
                $max_count = $curr_count; 
                $res = $arr[$i - 1]; 
            } 
            $curr_count = 1; 
        } 
    } 
  
    // If last element is most frequent 
    if ($curr_count > $max_count) 
    { 
        $max_count = $curr_count; 
        $res = $arr[$n - 1]; 
    } 
  
    return $res; 
} 

$col_1 = mostFrequent($a_col, 17);
$col_2 = mostFrequent($b_col, 17);
$col_3 = mostFrequent($c_col, 17);
$col_4 = mostFrequent($d_col, 17);

$total = $col_1 . $col_2 . $col_3 . $col_4;

$value = $total;
  
// Driver Code 
/*{ 
    $arr = $a_col; 
    $n = sizeof($arr) / sizeof($arr[0]); 
    echo mostFrequent($arr, $n); 
    return 0; 
} */
  
/*$array1 = [1];
  $array2 = ['a'];
  $array3 = ['x'];
  $array4 = ['i'];
  $arraym = array_merge($array1, $array2, $array3, $array4);

  print_r ($arraym); 

  $array1V = $array1[0];
  $array2V = $array2[0];
  $array3V = $array3[0];
  $array4V = $array4[0];

  $sum = $array1V . $array2V . $array3V . $array4V;
  echo $sum;*/

  echo"<script>window.location.hash='alert'</script>";

  echo"<div class='alert-successful' id='alert'>
  <h1>YOUR RESULTS</h1>
  <hr/>";

  switch($value) {
      case '1bxi':
          echo '<h1>THE INSPECTOR</h1><br>Analytical Manager of Facts and Details';
          break;
      case '1bxo':
          echo '<strong>THE NURTURER</strong><p>Sympathetic Manager of Facts and Details';
          break;
      case '2bxo':
          echo '<strong>THE COUNSELOR</strong><p>People Oriented Innovator of Ideas';
          break;
      case '2bxi':
          echo '<strong>THE MASTERMIND</strong><p>P Logical, Critical, Decisive Innovator of Ideas';
          break;
      case '1axi':
          echo '<strong>THE OPERATOR</strong><p>Practical Analyzer';
          break;
      case '1axo':
          echo '<strong>THE ARTIST</strong><p>Observant Loyal Helper';
          break;
      case '2axo':
          echo '<strong>THE IDEALIST</strong><p>Imaginative, Independent Helper';
          break;
      case '2axi':
          echo '<strong>THE THINKER</strong><p>Inquisitive Analyzer';
          break;
      case '1ali':
          echo '<strong>THE DYNAMO</strong><p>Realistic Adapter in the world of Material Things';
          break;
      case '1alo':
          echo '<strong>THE PERFORMER</strong><p>Realistic Adapter in Human Relationships';
          break;
      case '2alo':
          echo '<strong>THE INSPIRER</strong><br>Warmly Enthusiastic Planner of change';
          break;
      case '2ali':
          echo '<strong>THE INVENTOR</strong><br>Inventive Planner of Planner of Change ';
          break;
      case '1bli':
          echo '<strong>THE SUPERVISOR</strong><br>Fact-minded, Practical Organizer ';
          break;
      case '1blo':
          echo '<strong>THE PROVIDER</strong><br>Practical Harmonizer and Worker with People';
          break;
      case '2blo':
          echo '<strong>THE TEACHER</strong><br>Imaginative Harmonizer and Worker with People';
          break;
      case '2bli':
          echo '<strong>THE FIELD MARSHALL</strong><br>Intuitive Innovative Organizer';
          break;
      default:
      echo 'Please, take the test again!';
  }

}

echo "</div>";

?>