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
  <meta name="description" content ="Freight broker agent application">
  <meta name="keywords" content="freight, broker, agents, truck, sales">
  <meta name="author" content="David Petringa, Coded October 2018">
  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <link rel = "stylesheet" href = "http://www.dukesnuz.com/css_libs/dukes_normalize.css"/>
  <link href="../../css/general_mobile.css" rel="stylesheet" type="text/css" />
  <link href="../../css/general_desktop.css" rel="stylesheet" type="text/css" />
  <link href="../../css/home_page_mobile.css" rel="stylesheet" type="text/css" />
  <link href="../../css/home_page_desktop.css" rel="stylesheet" type="text/css" />
  <link href="../../css/navigation.css" rel="stylesheet" type="text/css" />
  <?php if (LIVE): ?>
    <link href="../agents/agents_css/agent.css" rel="stylesheet" type="text/css" />
  <?php else: ?>
    <link href="../agents_css/agent.css" rel="stylesheet" type="text/css" />
  <?php endif; ?>

  <script src = "http://www.dukesnuz.com/js_libs/dukes_states_object.js"></script>
  <script src = "http://www.dukesnuz.com/js_libs/dukes.javascript.js?<?php echo rand(1, 1000000); ?>"></script>

  <?php if (LIVE): ?>
    <script src = "../agents/agents_js/agent.js?<?php echo rand(1, 1000000); ?>"></script>
  <?php else: ?>
    <script src = "../agents_js/agent.js?<?php echo rand(1, 1000000); ?>"></script>
  <?php endif; ?>

</head>
<body>

  <main class = "bg_color">

    <?php
    include('../../headers/header_utilities.inc.php');
    ?>

    <div class ="slogan"><h2>Freight Broker Agents</h2></div>
    <!--
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

</div>
-->


<!--lower section-->

<section class="application">
  <header>
    <h2>Ajax Transport Freight Broker Agent Application</h2>
  </header>
  <div>

    <div id ="form_center">
      <div id ='formResponse'></div>

      <form action="./agent_application.php" method="post" name="form" id="form">

        <fieldset>
          <legend>Your Contact Information</legend>

          <input type="hidden" name="key" value="<?php echo AJAX_API_KEY; ?>">

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

                    <p>
                      State
                      <select name="state" id = 'selectState'>
                      </select>
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
                                <?php if (isset($_POST['backgrounds']) && $_POST['backgrounds'] == "true") {
                                echo 'checked="checked"';
                            }?>>Yes
                                <input type="radio" name="backgrounds" value="false"
                                <?php if (isset($_POST['backgrounds']) && $_POST['backgrounds'] == "false") {
                                echo 'checked="checked"';
                            }?>>No
                                <span class="errorMessage" id="error_background"></span>
                              </p>

                              <p>
                                <label>Can you show proof of your legal rigt to work in the United States?</label><br />
                                <input type="radio" name="right_works" value="true"
                                <?php if (isset($_POST['right_works']) && $_POST['right_works'] == "true") {
                                echo 'checked="checked"';
                            }?>>Yes
                                <input type="radio" name="right_works" value="false"
                                <?php if (isset($_POST['right_works']) && $_POST['right_works'] == "false") {
                                echo 'checked="checked"';
                            }?>>No
                                <span class="errorMessage" id="error_right_work"></span>
                              </p>

                              <p>
                                <label>Do you have previous experiences as a freight broker?</label><br />
                                <input type="radio" name="experiences" value="true"
                                <?php if (isset($_POST['experiences']) && $_POST['experiences'] == "true") {
                                echo 'checked="checked"';
                            }?>>Yes
                                <input type="radio" name="experiences" value="false"
                                <?php if (isset($_POST['experiences']) && $_POST['experiences'] == "false") {
                                echo 'checked="checked"';
                            }?>>No
                                <span class="errorMessage" id="error_experience"></span>
                              </p>

                              <p>
                                <label>Do you currently have a book of business that you would be able to maintain in a transition?</label><br />
                                <input type="radio" name="business_books" value="true"
                                <?php if (isset($_POST['business_books']) && $_POST['business_books'] == "true") {
                                echo 'checked="checked"';
                            }?>>Yes
                                <input type="radio" name="business_books" value="false"
                                <?php if (isset($_POST['business_books']) && $_POST['business_books'] == "false") {
                                echo 'checked="checked"';
                            }?>>No
                                <span class="errorMessage" id="error_business_book"></span>
                              </p>

                              <p>
                                <label>Do you have a non-compete in place with a current or former employer?</label><br />
                                <input type="radio" name="non_competes" value="true"
                                <?php if (isset($_POST['non_competes']) && $_POST['non_competes'] == "true") {
                                echo 'checked="checked"';
                            }?>>Yes
                                <input type="radio" name="non_competes" value="false"
                                <?php if (isset($_POST['non_competes']) && $_POST['non_competes'] == "false") {
                                echo 'checked="checked"';
                            }?>>No
                                <span class="errorMessage" id="error_non_compete"></span>
                              </p>

                              <p>
                                How did you hear about this position?
                                <select name="hear_about">
                                  <option value="">Select...</option>
                                  <option value="indeed<?php if (isset($_POST['hearAbout']) && $_POST['hearAbout'] == 'indeed') {
                                echo 'selected="selected"';
                            }?>">Indeed</option>
                                  <option value="internet search<?php if (isset($_POST['hearAbout']) && $_POST['hearAbout'] == 'internet search') {
                                echo 'selected="selected"';
                            }?>">Internet search</option>
                                  <option value="email<?php if (isset($_POST['hearAbout']) && $_POST['hearAbout'] == 'email') {
                                echo 'selected="selected"';
                            }?>">Email from Ajax</option>
                                  <option value="linkedin<?php if (isset($_POST['hearAbout']) && $_POST['hearAbout'] == 'linkedin') {
                                echo 'selected="selected"';
                            }?>">LinkedIn</option>
                                  <option value="other<?php if (isset($_POST['hearAbout']) && $_POST['hearAbout'] == 'other') {
                                echo 'selected="selected"';
                            }?>">Other</option>
                                </select>
                                <span class="errorMessage" id="error_hear_about"></span>
                              </p>

                              <p>
                                What is your current employment status?
                                <select name="employment_status">
                                  <option value="">Select...</option>
                                  <option value="employed<?php if (isset($_POST['employmentStatus']) && $_POST['employmentStatus'] == 'employed') {
                                echo 'selected="selected"';
                            }?>">Employed</option>
                                  <option value="part time<?php if (isset($_POST['employmentStatus']) && $_POST['employmentStatus'] == 'part_time') {
                                echo 'selected="selected"';
                            }?>">Part time employed</option>
                                  <option value="unemployed<?php if (isset($_POST['employmentStatus']) && $_POST['employmentStatus'] == 'unemployed') {
                                echo 'selected="selected"';
                            }?>">Unemployed</option>
                                  <option value="self employed<?php if (isset($_POST['employmentStatus']) && $_POST['employmentStatus'] == 'self_employed') {
                                echo 'selected="selected"';
                            }?>">Self employed</option>
                                  <option value="student<?php if (isset($_POST['employmentStatus']) && $_POST['employmentStatus'] == 'student') {
                                echo 'selected="selected"';
                            }?>">Student</option>
                                  <option value="other<?php if (isset($_POST['employmentStatus']) && $_POST['employmentStatus'] == 'other') {
                                echo 'selected="selected"';
                            }?>">Other</option>
                                </select>
                                <span class="errorMessage" id="error_employment_status"></span>
                              </p>

                              <p>
                                How many years of sales experience do you have?
                                <select name="sales_experience">
                                  <option value="">Select...</option>
                                  <option value="0-1<?php if (isset($_POST['salesExperience']) && $_POST['salesExperience'] == '0-1') {
                                echo 'selected="selected"';
                            }?>">0-1 years</option>
                                  <option value="2-3<?php if (isset($_POST['salesExperience']) && $_POST['salesExperience'] == '2-3') {
                                echo 'selected="selected"';
                            }?>">2-3 years</option>
                                  <option value="3-4<?php if (isset($_POST['salesExperience']) && $_POST['salesExperience'] == '3-4') {
                                echo 'selected="selected"';
                            }?>">3-4 years</option>
                                  <option value="4-5<?php if (isset($_POST['salesExperience']) && $_POST['salesExperience'] == '5-6') {
                                echo 'selected="selected"';
                            }?>">5-6 years</option>
                                  <option value="6-plus<?php if (isset($_POST['salesExperience']) && $_POST['salesExperience'] == '6-plus') {
                                echo 'selected="selected"';
                            }?>">6 plus years</option>
                                </select>
                                <span class="errorMessage" id="error_sales_experience"></span>
                              </p>

                              <p>
                                How many years have you been a freight broker?
                                <select name="years_broker">
                                  <option value="">Select...</option>
                                  <option value="0-1<?php if (isset($_POST['yearsBroker']) && $_POST['yearsBroker'] == '0-1') {
                                echo 'selected="selected"';
                            }?>">0-1 years</option>
                                  <option value="2-3<?php if (isset($_POST['yearsBroker']) && $_POST['yearsBroker'] == '2-3') {
                                echo 'selected="selected"';
                            }?>">2-3 years</option>
                                  <option value="3-4<?php if (isset($_POST['yearsBroker']) && $_POST['yearsBroker'] == '3-4') {
                                echo 'selected="selected"';
                            }?>">3-4 years</option>
                                  <option value="4-5<?php if (isset($_POST['yearsBroker']) && $_POST['yearsBroker'] == '5-6') {
                                echo 'selected="selected"';
                            }?>">5-6 years</option>
                                  <option value="6-plus<?php if (isset($_POST['yearsBroker']) && $_POST['yearsBroker'] == '6-plus') {
                                echo 'selected="selected"';
                            }?>">6 plus years</option>
                                </select>
                                <span class="errorMessage" id="error_years_broker"></span>
                              </p>

                            </div>

                          </fieldset>

                          <fieldset>
                            <legend>In a Few Words</legend>
                            <p>
                              <label for="essay">What attracted you to Ajax Transport? (max 250 words)</label>
                              <textarea name="essay" id="essay" rows="10" cols="60" minlength="15" maxlength="250" wrap="hard"></textarea>
                              <span class="errorMessage" id="error_essay"></span>
                            </p>
                            <div id="essay_count"></div>
                          </fieldset>

                          <p><input type ="submit" value ="Submit"></p>

                        </form>
                        <p class ='ip'>Your ip address is : <?php echo htmlspecialchars($ip); ?></p>
                      </div>
                    </div>
                  </section>

                  <?php
                  include('../../footers/footer_utilities.inc.php');
                  ?>
                </main>
                <?php
                include('../../site_utilities/page_history.inc.php');
                include('../../site_utilities/stats.html');
                ?>
              </body>
              </html>
