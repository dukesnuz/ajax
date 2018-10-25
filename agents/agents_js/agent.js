/*
*this file is used in agents
* coded October 2018
*/
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
          $('formResponse').style.margin = "0";
          $('form').style.display = 'none';
          //hide ip address
          var ip = document.getElementsByClassName('ip');
          ip[0].style.visibility='hidden';

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
        } else {
          errorPrint('formResponse', 'Agent application');
        }

      } else {
        errorPrint('formResponse', 'Agent application');
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
function countWords(){
  $('essay_count').innerHTML = '';
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
  //('formResponse').innerHTML = '<p>' + response + '</p>';

  //make invisible form response
  //$('formResponse').style.backgroundColor = "#fff";
  //$('formResponse').style.margin = "0";
  $('essay').addEventListener('keyup', countWords, true);

  $('form').addEventListener('submit', function (e) {
    e.preventDefault();
    submitForm(e);
  }, true);
};
