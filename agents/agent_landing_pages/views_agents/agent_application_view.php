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

<!-- add input type tel to style sheet-->
<style>
div#form_center input[type="tel"]{
  border-radius: 3px;
  width: 100%;
  border: 1px solid #454341;
  background-color: #ffffff;
  padding: 5px 0;
  padding-left: 0px;
  padding-left: 2px;
}
.radio-toolbar label {
  display: inline-block;
  background-color: #ddd;
  padding: 4px 11px;
  font-family: Arial;
  font-size: 16px;
  cursor: pointer;
}

.radio-toolbar input[type="radio"]:checked+label {
  background-color: #bbb;
}
</style>
<body>

  <main class = "bg_color">

    <?php
    include('../../headers/header_utilities.inc.php');
    ?>
    <!--
    <div class ="slogan"><h2>freight broker agents</h2></div>

    <div id ="displayArea">

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

<section class = "wd_box">
<header>
<h2>Talk to us today</h2>
</header>
<p>ppppp</p>
</section>

</div>
-->

<!--lower section-->

<section>
  <header>
    <h3>form</h3>
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

                            <fieldset style = "width: 500px;">

                              <legend>About You</legend>
                              <p>
                                <div class="radio-toolbar">
                                <label>Can you pass a mandatory background check?</label><br />
                                <input type="radio" name="backgrounds" value="true"
                                <?php if (isset($_POST['backgrounds']) && $_POST['backgrounds'] == "true") echo 'checked="checked"';?>>Yes
                                <input type="radio" name="backgrounds" value="false"
                                <?php if (isset($_POST['backgrounds']) && $_POST['backgrounds'] == "false") echo 'checked="checked"';?>>No
                                <span class="errorMessage" id="error_background"></span>
                              </p>
                            </div>
                            
                            </fieldset>
                            <p><input type ="submit" value ="Submit"></p>

                          </form>
                          <a href="http://localhost/ajax/ajax_transport/agents/agent_landing_pages/agent_application.php">refresh for dev</a>
                          <p class ='ip'>Your ip address is : <?php echo htmlspecialchars($ip); ?></p>
                        </div>
                      </div>
                    </section>

                    <script>

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
                      $('address').innerHTML = '';
                      $('suite').innerHTML = '';
                      $('city').innerHTML = '';
                      $('state').innerHTML = '';
                      $('zip').innerHTML = '';
                      //$('background').innerHTML = '';

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
                      // get value of radio background button
                      var backgrounds = document.getElementsByName("backgrounds");
                      console.log(backgrounds);
                      var length = backgrounds.length;
                      for(var i = 0;  i < length; i++)
                      {
                        if(backgrounds[i].checked)
                        {
                          // alert(backgrounds[i].value);
                          var background = backgrounds[i].value;
                          console.log(background);
                          break;
                        }
                      }

                      /*
                      console.log(key);
                      console.log(first_name);
                      console.log(last_name);
                      console.log(email);
                      console.log(telephone);
                      console.log(address);
                      */

                      //create ajax object from my library
                      var ajax = getXmlHttpRequest();

                      ajax.addEventListener("readystatechange", function () {

                        if (ajax.readyState === 4) {
                          console.log(this.response);
                          if ((this.response !== "error") && (ajax.status >= 200 && ajax.status < 300) || (ajax.status == 304)) {

                            var response = this.response;
                            // check for errors
                            if (response.substring(0, 6) === 200) {
                              //location.reload();
                              //$('formResponse').innerHTML = '<h3>ok</h3>';

                              //$('show').style.display = 'inline-block';
                              //$('proceed').style.display = 'inline-block';
                            } else if (response == 200) {
                              $('formResponse').innerHTML = 'Thank you for submitting your application.';
                              $('form').style.display = 'none';
                              document.getElementsByClassName('ip')[0].style.display = 'none';
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
                              $('error_telephone').innerHTML = 'Please enter your telephone as<br>123-456-7899';
                            } else if (response == 'no_background') {
                              $('error_background').innerHTML = 'Please answer the background question.';
                            } else {
                              $('formResponse').innerHTML = '<p>' + response + '</p>';
                              errorPrint('formResponse', '<p>OOppss. System error.</p>');
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
                        'background=' + background
                      ];

                      ajax.open('POST', 'http://localhost/ajax/ajax_transport/agents/api_agents/add_agent_application.php', true);
                      ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                      ajax.send(data.join('&'));


                    }
                    ;// END ajax request
                    window.onload = function () {
                      //$('show').style.display = 'none';
                      //  $('proceed').style.display = 'none';
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
