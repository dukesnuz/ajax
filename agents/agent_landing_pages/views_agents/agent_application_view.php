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
  <meta name="description" content =" "
  <meta name="keywords" content="">
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

<script type="text/javascript" src = "http://www.dukesnuz.com/js_libs/dukes.javascript.js"></script>


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
      <form action="agent_application.php" method="post" name="form" id="form">
       <input type="text" name="key" value="">

        <p><label for="email">Email:</label>
          <input type="email" name="email" id="email" placeholder="Your Email" value = "<?php
          if (isset($email)) {
            echo htmlspecialchars($email);
          };
          ?>" ></p>
          <span class="errorMessage">
            <?php
            if (isset($errors['email'])) {
              //echo $errors['email'];
            }
            ?>
          </span>


          <p><label for="emailVerify">Re-enter Email:</label>
            <input type ="email" name ="emailVerify" id ="emailVerify" placeholder="Verify Your Email" value = "<?php
            if (isset($emailVerify)) {
              echo htmlspecialchars($emailVerify);
            };
            ?>"></p>
            <span class="errorMessage">
              <?php
              if (isset($errors['emailVerify'])) {
                //echo $errors['emailVerify'];
              }
              ?>
            </span>

            <p><input type ="submit" value ="Submit"></p>

          </form>
          <p class ='ip'>Your ip address is : <?php echo htmlspecialchars($ip); ?></p>
        </div>
      </div>
    </section>

    <script>

    function submitForm(e) {
      "use strict";
      e.preventDefault();
      console.log('submit');
      //$('formResponse').innerHTML = 'Processing ... This may take 2 minutes.';

      var form = document.forms['form'];

      var fn = 'david';
      var ln = 'pet';
      var email = form.querySelector('[name="email"]').value;
      var emailVerify = form.querySelector('[name="emailVerify"]').value;
      var key = form.querySelector('[name="key"]').value;
      console.log(key);
      console.log(email);

      //create ajax object from my library
      var ajax = getXmlHttpRequest();

      ajax.addEventListener("readystatechange", function () {

        if (ajax.readyState === 4) {
          console.log(this.response);
          if ((this.response !== "error") && (ajax.status >= 200 && ajax.status < 300) || (ajax.status == 304)) {
            // clear error if one was previosuly printed
            // errorPrint('formResponse', '');

            var response = this.response;

            // check for errors
            //if (this.response == true) {

            if (response.substring(0, 6) === 'succes') {
              //location.reload();
              $('formResponse').innerHTML = '<h3>Found: ' + response.substring(6) +'</h3>';
              $('form').style.display = 'none';
              //$('show').style.display = 'inline-block';
              $('proceed').style.display = 'inline-block';

            } else if (response == 'The email addresses do not match.') {
              $('formResponse').innerHTML = '<p>' + response + '</p>';
            } else if (response == 'Please enter your email.') {
              $('formResponse').innerHTML = '<p>' + response + '</p>';

            } else {
              $('formResponse').innerHTML = '<p>' + response + '</p>';
              errorPrint('formResponse', '<p>Error. Did you fill in all the fields?</p>');
            }

          } else {
            //  errorPrint('formResponse', '<br>Your email was not recieved.');
          } //END if ((this.response !== "error")
        } // END if (ajax.readyState === 4)
      }, false);

      var data = ['first_name=' + fn, 'last_name=' + ln, 'email=' + email, 'key=' + key];
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
