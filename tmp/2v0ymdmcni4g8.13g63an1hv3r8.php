<!--
An input form for the survey related to art therapy.
Each question has a score, which will be stored at 'quizForm' in database.
The total score will be calculated within the 'quizForm' using SQL query.
A scoreBand will be assigned for the user by the SQL query.
 -->


<body>

<div class="row gradient-banner" style="margin-top: -40px;">
  <div class="one-column">
    <h2>“To grow yourself, you must know yourself.” <br> — <label class="pink-text">John C. Maxwell</label></h2>
  </div>
</div>

<<<<<<< HEAD
<form id="form1" name="form1" method="post" action="<?= ($BASE) ?>/quizForm">
  <!-- MBTI SECTION -->
  <div class="row">
    <div class="two-column left">
      <img src="img/MBTI/INTJ.png" id="mbti-image"
          style="width:100%; margin-top: auto; margin-bottom: auto; vertical-align: baseline;">
    </div>
    <div class="two-column right" style="padding-left: 3%;">
      <h2>How much you know about <br><label class="pink-text">yourself</label> ?</h2>
      <h4>Help us to know more about your personality.</h4>

      <input name="name" type="text" placeholder="Your name" class="textbox" id="name" size="50" />
      <h4>Your MBTI type is:</h4>
      <select id="MBTI-type" name="MBTI" onchange="mbtichange()">
        <option value="INTJ" selected="selected">INTJ - Architect</option>
        <option value="INTP">INTP - Logician</option>
        <option value="ENTJ">ENTJ - Commander</option>
        <option value="ENTP">ENTP - Debater</option>
        <option value="INFJ">INFJ - Advocate</option>
        <option value="INFP">INFP - Mediator</option>
        <option value="ENFJ">ENFJ - Protagonist</option>
        <option value="ENFP">ENFP - Campaigner</option>
        <option value="ISTJ">ISTJ - Logistician</option>
        <option value="ISFJ">ISFJ - Defender</option>
        <option value="ESTJ">ESTJ - Executive</option>
        <option value="ESFJ">ESFJ - Consul</option>
        <option value="ISTP">ISTP - Virtuoso</option>
        <option value="ISFP">ISFP - Adventurer</option>
        <option value="ESTP">ESTP - Entrepreneur</option>
        <option value="ENFP">ESFP - Entertainer</option>
      </select>

      <h4>Don't know your personality yet? <label class="pink-text"><a target="_blank"
                                                                       href="https://www.16personalities.com/free-personality-test">Get
        yourself tested</a></label></h4>
    </div>
  </div>

  <div class="row">
    <div class="one-column">

      <!-- TITLE -->
      <h4 style="font-size: 24px; font-weight:700;">
        How often have you are bothered by <label class="pink-text">any</label> of these problems?
      </h4>
      <br>
      <h4 style="font-size: 20px; margin-top: -25px;">
        Please rate from <label class="pink-text">1-10.</label>
      </h4>


      <!-- QUESTION 1 -->
      <br>
      <h4>
        <label class="label-question">1</label>
        <br>
        Little interest or pleasure in doing things.
      </h4>
      <div class="slidecontainer">
        <h4 style="font-size: 12px;">
          Never &nbsp;
          <input type="range" min="0" max="10" value="5" class="slider" name="ratingQ1" id="ratingQ1" onchange="onSliderValChange(this)">
          &nbsp; Most
        </h4>
      </div>

      <!-- QUESTION 2 -->
      <br>
      <h4>
        <label class="label-question">2</label>
        <br>
        Feeling down, depressed, or hopeless.
      </h4>
      <div class="slidecontainer">
        <h4 style="font-size: 12px;">
          Never &nbsp;
          <input type="range" min="0" max="10" value="5" class="slider" name="ratingQ2" id="ratingQ2" onchange="onSliderValChange(this)">
          &nbsp; Most
        </h4>
      </div>

      <!-- QUESTION 3 -->
      <br>
      <h4>
        <label class="label-question">3</label>
        <br>
        Have trouble on relaxing or falling or staying asleep, or the opposite - sleeping too much.
      </h4>
      <div class="slidecontainer">
        <h4 style="font-size: 12px;">
          Never &nbsp;
          <input type="range" min="0" max="10" value="5" class="slider" name="ratingQ3" id="ratingQ3" onchange="onSliderValChange(this)">
          &nbsp; Most
        </h4>
      </div>

      <!-- QUESTION 4 -->
      <br>
      <h4>
        <label class="label-question">4</label>
        <br>
        Feeling tired or having little energy.
      </h4>
      <div class="slidecontainer">
        <h4 style="font-size: 12px;">
          Never &nbsp;
          <input type="range" min="0" max="10" value="5" class="slider" name="ratingQ4" id="ratingQ4" onchange="onSliderValChange(this)">
          &nbsp; Most
        </h4>
      </div>

      <!-- QUESTION 5 -->
      <br>
      <h4>
        <label class="label-question">5</label>
        <br>
        Poor appetite or overeating.
      </h4>
      <div class="slidecontainer">
        <h4 style="font-size: 12px;">
          Never &nbsp;
          <input type="range" min="0" max="10" value="5" class="slider" name="ratingQ5" id="ratingQ5" onchange="onSliderValChange(this)">
          &nbsp; Most
        </h4>
      </div>

      <!-- QUESTION 6 -->
      <br>
      <h4>
        <label class="label-question">6</label>
        <br>
        Feeling bad about yourself or feel like you are a failure.
      </h4>
      <div class="slidecontainer">
        <h4 style="font-size: 12px;">
          Never &nbsp;
          <input type="range" min="0" max="10" value="5" class="slider" name="ratingQ6" id="ratingQ6" onchange="onSliderValChange(this)">
          &nbsp; Most
        </h4>
      </div>

      <!-- QUESTION 7 -->
      <br>
      <h4>
        <label class="label-question">7</label>
        <br>
        Trouble concentrating on things, such as reading newspaper or watching television.
      </h4>
      <div class="slidecontainer">
        <h4 style="font-size: 12px;">
          Never &nbsp;
          <input type="range" min="0" max="10" value="5" class="slider" name="ratingQ7" id="ratingQ7" onchange="onSliderValChange(this)">
          &nbsp; Most
        </h4>
      </div>

      <!-- QUESTION 8 -->
      <br>
      <h4>
        <label class="label-question">8</label>
        <br>
        Moving or speaking so slowly, or the opposite - being so restless that it is hard to sit still.
      </h4>
      <div class="slidecontainer">
        <h4 style="font-size: 12px;">
          Never &nbsp;
          <input type="range" min="0" max="10" value="5" class="slider" name="ratingQ8" id="ratingQ8" onchange="onSliderValChange(this)">
          &nbsp; Most
        </h4>
      </div>

      <!-- QUESTION 9 -->
      <br>
      <h4>
        <label class="label-question">9</label>
        <br>
        Thoughts that you would be better off dead, or of hurting yourself.
      </h4>
      <div class="slidecontainer">
        <h4 style="font-size: 12px;">
          Never &nbsp;
          <input type="range" min="0" max="10" value="5" class="slider" name="ratingQ9" id="ratingQ9" onchange="onSliderValChange(this)">
          &nbsp; Most
        </h4>
      </div>

      <!-- QUESTION 10 -->
      <br>
      <h4>
        <label class="label-question">10</label>
        <br>
        Feeling nervous, anxious, or on edge.
      </h4>
      <div class="slidecontainer">
        <h4 style="font-size: 12px;">
          Never &nbsp;
          <input type="range" min="0" max="10" value="5" class="slider" name="ratingQ10" id="ratingQ10" onchange="onSliderValChange(this)">
          &nbsp; Most
        </h4>
      </div>

    </div>
  </div>

  <div class="row">
    <div class="one-column">
      <!-- QUESTIONNAIRE TITLE -->
      <h4 style="font-size: 24px; font-weight:700;">
        Tell us <label class="pink-text">more</label>...
      </h4>

      <!-- QUESTIONNAIRE 1 -->
      <h4>How much do you know about Art Therapy?</h4>
      <div class="questionnaire-radio">
        <ul class="questionnaire-radio-ul">
          <li>
            <input type="radio" id="never" name="questionnaire1" value="Never" checked />
            <label for="never">Never</label>
          </li>
          <li>
            <input type="radio" id="little" name="questionnaire1" value="Little"/>
            <label for="little">Little</label>
          </li>
          <li>
            <input type="radio" id="some" name="questionnaire1" value="Some"/>
            <label for="some">Some</label>
          </li>
          <li>
            <input type="radio" id="much" name="questionnaire1" value="Much"/>
            <label for="much">Much</label>
          </li>
        </ul>
      </div>

      <!-- QUESTIONNAIRE 2 -->
      <br>
      <br>
      <h4>Have you ever tried Art Therapy before?</h4>
      <div class="questionnaire-radio">
        <ul class="questionnaire-radio-ul">
          <li>
            <input type="radio" id="yes" name="questionnaire2" value="yes" checked />
            <label for="yes">Yes</label>
          </li>
          <li>
            <input type="radio" id="no" name="questionnaire2" value="no"/>
            <label for="no">No</label>
          </li>
        </ul>
      </div>

      <!-- QUESTIONNAIRE 3 -->
      <br>
      <br>
      <h4>If not, can you tell the reason?</h4>
      <input name="questionnaire3" type="text" placeholder="Tell us your reason" class="textbox" id="questionnaire3" size="70" />

      <!-- QUESTIONNAIRE 4 -->
      <br>
      <br>
      <h4>Which way do you prefer to deal with mental health problems?</h4>
      <div class="questionnaire-radio">
        <ul class="questionnaire-radio-ul">
          <li>
            <input type="radio" id="selfhealing" name="questionnaire4" value="selfhealing" checked />
            <label for="selfhealing">Self-healing</label>
          </li>
          <li>
            <input type="radio" id="therapy" name="questionnaire4" value="therapy"/>
            <label for="therapy">Therapy</label>
          </li>
          <li>
            <input type="radio" id="familyfriend" name="questionnaire4" value="familyfriend"/>
            <label for="familyfriend">Family & Friend</label>
          </li>
          <li>
            <input type="radio" id="neglect" name="questionnaire4" value="neglect"/>
            <label for="neglect">Neglect</label>
          </li>
        </ul>
      </div>

      <br>
      <br>
      <br>
      <br>

      <input type="submit" name="Submit" value="Submit" class="button-style-1" />

    </div>
  </div>
</form>

<script>
  $('input[type="range"]').change(function () {
    var val = $(this).val() / 10;
    $(this).css('background-image',
            '-webkit-gradient(linear, left top, right top, '
            + 'color-stop(' + val + ', #FF8A9F), '
            + 'color-stop(' + val + ', #393939)'
            + ')'
    );
  });

  function onSliderValChange(currentslider) {
    //alert ("!");
    var id = "#" + currentslider.id;
    var val = $(currentslider).val() / 10;
    $(id).css('background-image',
            '-webkit-gradient(linear, left top, right top, '
            + 'color-stop(' + val + ', #FF8A9F), '
            + 'color-stop(' + val + ', #393939)'
            + ')'
    );
    // alert ($(this).val());
  }
  
   function mbtichange() {
      if ($('#MBTI-type option:selected').text() == "INTJ - Architect") {
        $('#mbti-image').attr('src', '../img/MBTI/INTJ.png');
      }
      else if ($('#MBTI-type option:selected').text() == "INTP - Logician") {
        $('#mbti-image').attr('src', '../img/MBTI/INTP.png');
      }
      else if ($('#MBTI-type option:selected').text() == "ENTJ - Commander") {
        $('#mbti-image').attr('src', '../img/MBTI/ENTJ.png');
      }
      else if ($('#MBTI-type option:selected').text() == "ENTP - Debater") {
        $('#mbti-image').attr('src', '../img/MBTI/ENTP.png');
      }
      else if ($('#MBTI-type option:selected').text() == "INFJ - Advocate") {
        $('#mbti-image').attr('src', '../img/MBTI/INFJ.png');
      }
      else if ($('#MBTI-type option:selected').text() == "INFP - Mediator") {
        $('#mbti-image').attr('src', '../img/MBTI/INFP.png');
      }
      else if ($('#MBTI-type option:selected').text() == "ENFJ - Protagonist") {
        $('#mbti-image').attr('src', '../img/MBTI/ENFJ.png');
      }
      else if ($('#MBTI-type option:selected').text() == "ENFP - Campaigner") {
        $('#mbti-image').attr('src', '../img/MBTI/ENFP.png');
      }
      else if ($('#MBTI-type option:selected').text() == "ISTJ - Logistician") {
        $('#mbti-image').attr('src', '../img/MBTI/ISTJ.png');
      }
      else if ($('#MBTI-type option:selected').text() == "ISFJ - Defender") {
        $('#mbti-image').attr('src', '../img/MBTI/ISFJ.png');
      }
      else if ($('#MBTI-type option:selected').text() == "ESTJ - Executive") {
        $('#mbti-image').attr('src', '../img/MBTI/ESTJ.png');
      }
      else if ($('#MBTI-type option:selected').text() == "ESFJ - Consul") {
        $('#mbti-image').attr('src', '../img/MBTI/ESFJ.png');
      }
      else if ($('#MBTI-type option:selected').text() == "ISTP - Virtuoso") {
        $('#mbti-image').attr('src', '../img/MBTI/ISTP.png');
      }
      else if ($('#MBTI-type option:selected').text() == "ISFP - Adventurer") {
        $('#mbti-image').attr('src', '../img/MBTI/ISFP.png');
      }
      else if ($('#MBTI-type option:selected').text() == "ESTP - Entrepreneur") {
        $('#mbti-image').attr('src', '../img/MBTI/ESTP.png');
      }
      else if ($('#MBTI-type option:selected').text() == "ESFP - Entertainer") {
        $('#mbti-image').attr('src', '../img/MBTI/ESFP.png');
      }
    }
    
</script>

</body>

