<!DOCTYPE html>
<html lang="en">
<head>
  <title>
    <?php
    $page_title = isset($page_title) ? $page_title : "Ajax Transport";
    echo $page_title;
    ?>
  </title>
  <meta charset="UTF-8" />
  <meta name="description" content ="Agent application">
  <meta name="keywords" content="freight agents">
  <meta name="author" content="David Petringa, Coded October 2018">
  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <link rel = "stylesheet" href = "http://www.dukesnuz.com/css_libs/dukes_normalize.css"/>
  <!--
  <link href="http://www.ajaxtransport.com/css/general_mobile.css" rel="stylesheet" type="text/css" />
  <link href="http://www.ajaxtransport.com/css/general_desktop.css" rel="stylesheet" type="text/css" />
  <link href="http://www.ajaxtransport.com/css/home_page_mobile.css" rel="stylesheet" type="text/css" />
  <link href="http://www.ajaxtransport.com/css/home_page_desktop.css" rel="stylesheet" type="text/css" />
  <link href="http://www.ajaxtransport.com/css/navigation.css" rel="stylesheet" type="text/css" />
-->

<link href="../../css/general_mobile.css" rel="stylesheet" type="text/css" />
<link href="../../css/general_desktop.css" rel="stylesheet" type="text/css" />
<link href="../../css/home_page_mobile.css" rel="stylesheet" type="text/css" />
<link href="../../css/home_page_desktop.css" rel="stylesheet" type="text/css" />
<link href="../../css/navigation.css" rel="stylesheet" type="text/css" />

<script src = "http://www.dukesnuz.com/js_libs/dukes.javascript.js"></script>

<!--create external style sheet-->
<style>
body {
  cursor: pointer;
}
.errorMessage {
    display: block;
}
div#form_center p {
  color: #454341;
}
div#form_center {
  width: 500px;
}
fieldset {
  margin-top: 25px;
}
legend {
  font-size: 1.25em;
  letter-spacing: 5px;
  font-weight: bold;
}
.errorMessage {
  font-size: .85em;
  font-weight: bold;
  color: #ff0000;
}
label:before, select:before {
  content: '* ';
  color: #ff0000;
  margin-left: -15px;
}
div#form_center input[type="tel"]{
  border-radius: 3px;
  width: 100%;
  border: 1px solid #454341;
  background-color: #ffffff;
  padding: 5px 0;
  padding-left: 0px;
  padding-left: 2px;
}
.radio_toolbar label {
  display: inline-block;
  padding: 4px 11px;
  font-family: Arial;
  font-size: 16px;
}
.radio_toolbar input[type="radio"] {
  margin-left: 100px;
  margin-top: 10px;
}
.radio_toolbar input[type="radio"]:checked+label {
  background-color: #bbb;
}
.application header h2{
  margin-left: 5%;
}
.formResponse {
  color: #FF7400 !important;
  letter-spacing: 3px;
  font-size: 1.5em;
  margin-left: 5%;
  background-color: #454341;
  padding: 10px;
  margin-right: 5%;
  text-align: center;
  margin-top: 75px;
  margin-bottom: 250px;
}
</style>
<body>

  <main class = "bg_color">

    <?php
    include('../../headers/header_utilities.inc.php');
    ?>

    <div class ="slogan"><h2>freight broker agents</h2></div>

    <div id ="displayArea">
<!--
      <section class = "wd_box">
      <header>
      <h2>Why</h2>
    </header>

    <h4>Reason #1 - xxxx</h4>
    <p>yyyyy</p>

  </section>

  <section class = "wd_box">
  <header>
  <h2>What you get</h2>
</header>
<p>zzzzzz</p>
</section>

<section class = "wd_box">
<header>
<h2>What you need</h2>
</header>
<p>All you need to do is complete these three simple steps.</p>
<ol>
<li>
xxxxxx
</li>
<li>
xxxxxx
</li>
<li>
xxxxxx
</li>
<li>
zzzzzz
</li>
</ol>
</section>

<section class = "wd_box">
<header>
<h2>Who we are</h2>
</header>
<p>vvvvv</p>
</section>
-->
</div>


<!--lower section-->

<section class="application">
  <header>
    <h2>Ajax Transport Freight Broker Agent Application</h2>
  </header>
  <div>

    <div id ="form_center">
      <div id ='formResponse'></div>
      <a href="http://localhost/ajax/ajax_transport/agents/agent_landing_pages/agent_application.php">refresh for dev</a>
      <form action="agent_application.php" method="post" name="form" id="form">

        <fieldset>
          <legend>Your Contact Information</legend>

          <input type="text" name="key" value="<?php echo AJAX_API_KEY; ?>">

          <p><label for="first_name">First Name:</label>
            <input type="text" name="first_name" id="first_name" placeholder="Your first name" value = "<?php
            if (isset($first_name)) {
              echo htmlspecialchars($first_name);
            };
            ?>" >
            <span class="errorMessage" id="error_first_name"></span></p>

            <p><label for="last_name">Last Name:</label>
              <input type="text" name="last_name" id="last_name" placeholder="Your last name" value = "<?php
              if (isset($last_name)) {
                echo htmlspecialchars($last_name);
              };
              ?>" >
              <span class="errorMessage" id="error_last_name"></span></p>

              <p><label for="address">Address:</label>
                <input type="text" name="address" id="address" placeholder="Your address" value = "<?php
                if (isset($address)) {
                  echo htmlspecialchars($address);
                };
                ?>" >
                <span class="errorMessage" id="error_address"></span></p>

                <p><label for="suite">Suite:</label>
                  <input type="text" name="suite" id="suite" placeholder="Your suite" value = "<?php
                  if (isset($suite)) {
                    echo htmlspecialchars($suite);
                  };
                  ?>" >
                  <span class="errorMessage" id="error_suite"></span></p>

                  <p><label for="city">City:</label>
                    <input type="text" name="city" id="city" placeholder="Your city" value = "<?php
                    if (isset($city)) {
                      echo htmlspecialchars($city);
                    };
                    ?>" >
                    <span class="errorMessage" id="error_city"></span></p>

                    <p><label for="state">State:</label>
                      <input type="text" name="state" id="state" placeholder="Your state" value = "<?php
                      if (isset($state)) {
                        echo htmlspecialchars($state);
                      };
                      ?>" >
                      <span class="errorMessage" id="error_state"></span></p>

                      <p><label for="zip">Zip code:</label>
                        <input type="text" name="zip" id="zip" placeholder="Your zip code" value = "<?php
                        if (isset($zip)) {
                          echo htmlspecialchars($zip);
                        };
                        ?>" >
                        <span class="errorMessage" id="error_zip"></span></p>

                        <p><label for="telephone">telephone:</label>
                          <input type="tel" name="telephone" id="telephone" placeholder="Your telephone" value = "<?php
                          if (isset($telephone)) {
                            echo htmlspecialchars($telephone);
                          };
                          ?>" >
                          <span class="errorMessage" id="error_telephone"></span></p>

                          <p><label for="email">Email:</label>
                            <input type="email" name="email" id="email" placeholder="Your Email" value = "<?php
                            if (isset($email)) {
                              echo htmlspecialchars($email);
                            };
                            ?>" >
                            <span class="errorMessage" id="error_email"></span></p>

                            <p><label for="emailVerify">Re-enter Email:</label>
                              <input type ="email" name ="emailVerify" id ="emailVerify" placeholder="Verify Your Email" value = "<?php
                              if (isset($emailVerify)) {
                                echo htmlspecialchars($emailVerify);
                              };
                              ?>">
                              <span class="errorMessage"></span></p>

                            </fieldset>


                            <fieldset>
                              <legend>About You</legend>

                              <div class="radio_toolbar">
                                <p>
                                  <label>Can you pass a mandatory background check?</label><br />
                                  <input type="radio" name="backgrounds" value="true"
                                  <?php if (isset($_POST['backgrounds']) && $_POST['backgrounds'] == "true") echo 'checked="checked"';?>>Yes
                                  <input type="radio" name="backgrounds" value="false"
                                  <?php if (isset($_POST['backgrounds']) && $_POST['backgrounds'] == "false") echo 'checked="checked"';?>>No
                                  <span class="errorMessage" id="error_background"></span>
                                </p>

                                <p>
                                  <label>Can you show proof of your legal rigt to work in the United States?</label><br />
                                  <input type="radio" name="right_works" value="true"
                                  <?php if (isset($_POST['right_works']) && $_POST['right_works'] == "true") echo 'checked="checked"';?>>Yes
                                  <input type="radio" name="right_works" value="false"
                                  <?php if (isset($_POST['right_works']) && $_POST['right_works'] == "false") echo 'checked="checked"';?>>No
                                  <span class="errorMessage" id="error_right_work"></span>
                                </p>

                                <p>
                                  <label>Do you have previous experiences as a freight broker?</label><br />
                                  <input type="radio" name="experiences" value="true"
                                  <?php if (isset($_POST['experiences']) && $_POST['experiences'] == "true") echo 'checked="checked"';?>>Yes
                                  <input type="radio" name="experiences" value="false"
                                  <?php if (isset($_POST['experiences']) && $_POST['experiences'] == "false") echo 'checked="checked"';?>>No
                                  <span class="errorMessage" id="error_experience"></span>
                                </p>

                                <p>
                                  <label>Do you currently have a book of business that you would be able to maintain in a transition?</label><br />
                                  <input type="radio" name="business_books" value="true"
                                  <?php if (isset($_POST['business_books']) && $_POST['business_books'] == "true") echo 'checked="checked"';?>>Yes
                                  <input type="radio" name="business_books" value="false"
                                  <?php if (isset($_POST['business_books']) && $_POST['business_books'] == "false") echo 'checked="checked"';?>>No
                                  <span class="errorMessage" id="error_business_book"></span>
                                </p>

                                <p>
                                  <label>Do you have a non-compete in place with a current or former employer?</label><br />
                                  <input type="radio" name="non_competes" value="true"
                                  <?php if (isset($_POST['non_competes']) && $_POST['non_competes'] == "true") echo 'checked="checked"';?>>Yes
                                  <input type="radio" name="non_competes" value="false"
                                  <?php if (isset($_POST['non_competes']) && $_POST['non_competes'] == "false") echo 'checked="checked"';?>>No
                                  <span class="errorMessage" id="error_non_compete"></span>
                                </p>

                                <p>
                                  How did you hear about this position?
                                  <select name="hear_about">
                                    <option value="">Select...</option>
                                    <option value="indeed<?php if(isset($_POST['hearAbout']) && $_POST['hearAbout'] == 'indeed'){echo 'selected="selected"';}?>">Indeed</option>
                                    <option value="internet search<?php if(isset($_POST['hearAbout']) && $_POST['hearAbout'] == 'internet search'){echo 'selected="selected"';}?>">Internet search</option>
                                    <option value="email<?php if(isset($_POST['hearAbout']) && $_POST['hearAbout'] == 'email'){echo 'selected="selected"';}?>">Email from Ajax</option>
                                    <option value="linkedin<?php if(isset($_POST['hearAbout']) && $_POST['hearAbout'] == 'linkedin'){echo 'selected="selected"';}?>">LinkedIn</option>
                                    <option value="other<?php if(isset($_POST['hearAbout']) && $_POST['hearAbout'] == 'other'){echo 'selected="selected"';}?>">Other</option>
                                  </select>
                                  <span class="errorMessage" id="error_hear_about"></span>
                                </p>

                                <p>
                                  What is your current employment status?
                                  <select name="employment_status">
                                    <option value="">Select...</option>
                                    <option value="employed<?php if(isset($_POST['employmentStatus']) && $_POST['employmentStatus'] == 'employed'){echo 'selected="selected"';}?>">Employed</option>
                                    <option value="part time<?php if(isset($_POST['employmentStatus']) && $_POST['employmentStatus'] == 'part_time'){echo 'selected="selected"';}?>">Part time employed</option>
                                    <option value="unemployed<?php if(isset($_POST['employmentStatus']) && $_POST['employmentStatus'] == 'unemployed'){echo 'selected="selected"';}?>">Unemployed</option>
                                    <option value="self employed<?php if(isset($_POST['employmentStatus']) && $_POST['employmentStatus'] == 'self_employed'){echo 'selected="selected"';}?>">Self employed</option>
                                    <option value="student<?php if(isset($_POST['employmentStatus']) && $_POST['employmentStatus'] == 'student'){echo 'selected="selected"';}?>">Student</option>
                                    <option value="other<?php if(isset($_POST['employmentStatus']) && $_POST['employmentStatus'] == 'other'){echo 'selected="selected"';}?>">Other</option>
                                  </select>
                                  <span class="errorMessage" id="error_employment_status"></span>
                                </p>

                                <p>
                                  How many years of sales experience do you have?
                                  <select name="sales_experience">
                                    <option value="">Select...</option>
                                    <option value="0-1<?php if(isset($_POST['salesExperience']) && $_POST['salesExperience'] == '0-1'){echo 'selected="selected"';}?>">0-1 years</option>
                                    <option value="2-3<?php if(isset($_POST['salesExperience']) && $_POST['salesExperience'] == '2-3'){echo 'selected="selected"';}?>">2-3 years</option>
                                    <option value="3-4<?php if(isset($_POST['salesExperience']) && $_POST['salesExperience'] == '3-4'){echo 'selected="selected"';}?>">3-4 years</option>
                                    <option value="4-5<?php if(isset($_POST['salesExperience']) && $_POST['salesExperience'] == '5-6'){echo 'selected="selected"';}?>">5-6 years</option>
                                    <option value="6-plus<?php if(isset($_POST['salesExperience']) && $_POST['salesExperience'] == '6-plus'){echo 'selected="selected"';}?>">6 plus years</option>
                                  </select>
                                  <span class="errorMessage" id="error_sales_experience"></span>
                                </p>

                                <p>
                                  How many years have you been a freight broker?
                                  <select name="years_broker">
                                    <option value="">Select...</option>
                                    <option value="0-1<?php if(isset($_POST['yearsBroker']) && $_POST['yearsBroker'] == '0-1'){echo 'selected="selected"';}?>">0-1 years</option>
                                    <option value="2-3<?php if(isset($_POST['yearsBroker']) && $_POST['yearsBroker'] == '2-3'){echo 'selected="selected"';}?>">2-3 years</option>
                                    <option value="3-4<?php if(isset($_POST['yearsBroker']) && $_POST['yearsBroker'] == '3-4'){echo 'selected="selected"';}?>">3-4 years</option>
                                    <option value="4-5<?php if(isset($_POST['yearsBroker']) && $_POST['yearsBroker'] == '5-6'){echo 'selected="selected"';}?>">5-6 years</option>
                                    <option value="6-plus<?php if(isset($_POST['yearsBroker']) && $_POST['yearsBroker'] == '6-plus'){echo 'selected="selected"';}?>">6 plus years</option>
                                  </select>
                                  <span class="errorMessage" id="error_years_broker"></span>
                                </p>

                              </div>

                            </fieldset>

                            <fieldset>
                              <legend>In a Few Words</legend>
                              <p>
                                <label for="essay">What attracted you to Ajax Transport? (max 250 words)</label>
                                <textarea name="essay" id="essay" rows="10" cols="60" minlength="15" maxlength="250" wrap="hard" value = "<?php
                                if (isset($essay)) {
                                  echo htmlspecialchars($essay);
                                };
                                ?>"></textarea>
                                <span class="errorMessage" id="error_essay"></span><div id="essay_count"></div>
                              </p>
                            </fieldset>

                            <p><input type ="submit" value ="Submit"></p>

                          </form>
                          <p class ='ip'>Your ip address is : <?php echo htmlspecialchars($ip); ?></p>
                        </div>
                      </div>
                    </section>

                    <script>
                    /* create external js sheet*/
                    function submitForm(e) {
                      "use strict";
                      e.preventDefault();
                      console.log('submit');
                      // clear error messages
                      $('formResponse').innerHTML = '';
                      $('error_first_name').innerHTML = '';
                      $('error_last_name').innerHTML = '';
                      $('error_telephone').innerHTML = '';
                      $('error_email').innerHTML = '';
                      $('error_address').innerHTML = '';
                      $('error_suite').innerHTML = '';
                      $('error_city').innerHTML = '';
                      $('error_state').innerHTML = '';
                      $('error_zip').innerHTML = '';
                      $('error_background').innerHTML = '';
                      $('error_right_work').innerHTML = '';
                      $('error_experience').innerHTML = '';
                      $('error_business_book').innerHTML = '';
                      $('error_non_compete').innerHTML = '';
                      $('error_hear_about').innerHTML = '';
                      $('error_employment_status').innerHTML = '';
                      $('error_sales_experience').innerHTML = '';
                      $('error_years_broker').innerHTML = '';
                      $('error_essay').innerHTML = '';

                      var form = document.forms['form'];

                      var key = form.querySelector('[name="key"]').value;
                      var first_name = form.querySelector('[name="first_name"]').value;
                      var last_name = form.querySelector('[name="last_name"]').value;
                      var telephone = form.querySelector('[name="telephone"]').value;
                      var address = form.querySelector('[name="address"]').value;
                      var suite = form.querySelector('[name="suite"]').value;
                      var city = form.querySelector('[name="city"]').value;
                      var state = form.querySelector('[name="state"]').value;
                      var zip = form.querySelector('[name="zip"]').value;
                      var email = form.querySelector('[name="email"]').value;
                      var emailVerify = form.querySelector('[name="emailVerify"]').value;
                      // get value of radio backgrounds button
                      var backgrounds = document.getElementsByName("backgrounds");
                      var length = backgrounds.length;
                      for(var i = 0;  i < length; i++)
                      {
                        if(backgrounds[i].checked)
                        {
                          var background = backgrounds[i].value;
                          break;
                        }
                      }

                      // get value of radio right_works button
                      var right_works = document.getElementsByName("right_works");
                      var length = right_works.length;
                      for(var i = 0;  i < length; i++)
                      {
                        if(right_works[i].checked)
                        {
                          var right_work = right_works[i].value;
                          break;
                        }
                      }

                      // get value of radio experiences button
                      var experiences = document.getElementsByName("experiences");
                      var length = experiences.length;
                      for(var i = 0;  i < length; i++)
                      {
                        if(experiences[i].checked)
                        {
                          var experience = experiences[i].value;
                          break;
                        }
                      }

                      // get value of radio business_book button
                      var business_books = document.getElementsByName("business_books");
                      var length = business_books.length;
                      for(var i = 0;  i < length; i++)
                      {
                        if(business_books[i].checked)
                        {
                          var business_book = business_books[i].value;
                          break;
                        }
                      }

                      // get value of radio non_compete button
                      var non_competes = document.getElementsByName("non_competes");
                      var length = non_competes.length;
                      for(var i = 0;  i < length; i++)
                      {
                        if(non_competes[i].checked)
                        {
                          var non_compete = non_competes[i].value;
                          break;
                        }
                      }

                      var hear_about = form.querySelector('[name="hear_about"]').value;
                      var employment_status = form.querySelector('[name="employment_status"]').value;
                      var sales_experience = form.querySelector('[name="sales_experience"]').value;
                      var years_broker = form.querySelector('[name="years_broker"]').value;
                      var essay = form.querySelector('[name="essay"]').value;


                      //create ajax object from my library
                      var ajax = getXmlHttpRequest();

                      ajax.addEventListener("readystatechange", function () {

                        if (ajax.readyState === 4) {
                          console.log(this.response);
                          if ((this.response !== "error") && (ajax.status >= 200 && ajax.status < 300) || (ajax.status == 304)) {

                            var response = this.response;
                            // check for errors
                            if (response.substring(0, 6) === 200) {

                            } else if (response == 200) {
                              // on form submission success
                              $('formResponse').innerHTML = 'Thank you for submitting your freight broker agent application.';
                              $('formResponse').classList.add("formResponse");
                              $('form').style.display = 'none';
                              //hide ip address
                              var ip = document.getElementsByClassName('ip');
                              ip[0].style.visibility='hidden';
                            //  $('formResponse').style.margin = "0";

                            } else if (response == 'no_first_name') {
                              $('error_first_name').innerHTML = 'Please enter your first name.';
                            } else if (response == 'no_last_name') {
                              $('error_last_name').innerHTML = 'Please enter your last name.';
                            } else if (response == 'no_address') {
                              $('error_address').innerHTML = 'Please enter your address.';
                            } else if (response == 'no_city') {
                              $('error_city').innerHTML = 'Please enter your city.';
                            } else if (response == 'no_state') {
                              $('error_state').innerHTML = 'Please enter your state.';
                            } else if (response == 'no_zip') {
                              $('error_zip').innerHTML = 'Please enter your zip.';
                            } else if (response == 'no_match') {
                              $('error_email').innerHTML = 'The email addresses do not match.';
                            } else if (response == 'no_email') {
                              $('error_email').innerHTML = 'Please enter an email address.';
                            } else if (response == 'no_telephone') {
                              $('error_telephone').innerHTML = 'Please enter your telephone as 123-456-7899';
                            } else if (response == 'no_background') {
                              $('error_background').innerHTML = 'Please answer this question.';
                            } else if (response == 'no_right_work') {
                              $('error_right_work').innerHTML = 'Please answer this question.';
                            } else if (response == 'no_experience') {
                              $('error_experience').innerHTML = 'Please answer this question.';
                            } else if (response == 'no_business_book') {
                              $('error_business_book').innerHTML = 'Please answer this question.';
                            } else if (response == 'no_non_compete') {
                              $('error_non_compete').innerHTML = 'Please answer this question.';
                            } else if (response == 'no_hear_about') {
                              $('error_hear_about').innerHTML = 'Please make a selection.';
                            } else if (response == 'no_employment_status') {
                              $('error_employment_status').innerHTML = 'Please make a selection.';
                            } else if (response == 'no_sales_experience') {
                              $('error_sales_experience').innerHTML = 'Please make a selection.';
                            } else if (response == 'no_years_broker') {
                              $('error_years_broker').innerHTML = 'Please make a selection.';
                            } else if (response == 'no_essay') {
                              $('error_essay').innerHTML = 'Please complete this information.';
                            } else if (response == 'essay_short') {
                              $('error_essay').innerHTML = 'Please complete this information.';
                            } else if (response == 'error') {
                              errorPrint('formResponse', 'Agent application');
                            } else {
                              errorPrint('formResponse', 'Agent application');
                            }

                          } else {
                            //  errorPrint('formResponse', '<br>Your email was not recieved.');
                          } //END if ((this.response !== "error")
                        } // END if (ajax.readyState === 4)
                      }, false);

                      var data = [
                        'key=' + key,
                        'first_name=' + first_name,
                        'last_name=' + last_name,
                        'address=' + address,
                        'suite=' + suite,
                        'city=' + city,
                        'state=' + state,
                        'zip=' + zip,
                        'email=' + email,
                        'emailVerify=' + emailVerify,
                        'telephone=' + telephone,
                        'background=' + background,
                        'right_work=' + right_work,
                        'experience=' + experience,
                        'business_book=' + business_book,
                        'non_compete=' + non_compete,
                        'hear_about=' + hear_about,
                        'employment_status=' + employment_status,
                        'sales_experience=' + sales_experience,
                        'years_broker=' + years_broker,
                        'essay=' + essay,

                      ];

                      ajax.open('POST', '../api_agents/add_agent_application.php', true);
                      ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                      ajax.send(data.join('&'));
                    };// END ajax request

                    // count words in essay
                    essay.onkeyup = function countWords(){
                      $('essay_count').innerHTML = '';
                      var essay = $('essay');
                      var words = essay.value.split(" ");
                      var count = words.length;
                      $('error_essay').innerHTML = '';
                      $('essay_count').innerHTML = '<p>Words:' + count + '</p>';
                    }

                    window.onload = function () {
                      //$('formResponse').innerHTML = 'Thank you for submitting your freight broker agent application.';
                      //$('form').style.display = 'none';
                      //var ip = document.getElementsByClassName('ip');
                      //ip[0].style.visibility='hidden';
                      //$('formResponse').classList.add("formResponse");
                    //  $('formResponse').innerHTML = '<p>' + response + '</p>';

                      //make invisible form response
                      //$('formResponse').style.backgroundColor = "#fff";
                    //  $('formResponse').style.margin = "0";
                      $('form').addEventListener('submit', function (e) {
                        e.preventDefault();
                        submitForm(e);
                      }, true);
                    };
                    </script>

                    <?php
                    include('../../footers/footer_utilities.inc.php');
                    ?>
                  </main>
                  <?php
                  //  include('../../site_utilities/page_history.inc.php');
                  //  include('../../site_utilities/stats.html');
                  ?>
</body>
</html>
