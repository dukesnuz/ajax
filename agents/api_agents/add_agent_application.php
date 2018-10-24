<?php
include ('../../site_utilities_v2/config.inc.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST'):
  //print_r($_POST) ;
  //die();
  if (empty($_POST['key']) || $_POST['key'] !== AJAX_API_KEY) {
    echo 'OOppss. System error.';
    die();
  } elseif (empty($_POST['first_name'])) {
    echo 'no_first_name';
    die();
  } elseif (empty($_POST['last_name'])) {
    echo 'no_last_name';
    die();
  } elseif (empty($_POST['address'])) {
    echo 'no_address';
    die();
  } elseif (empty($_POST['city'])) {
    echo 'no_city';
    die();
  } elseif (empty($_POST['state'])) {
    echo 'no_state';
    die();
  } elseif (empty($_POST['zip'])) {
    echo 'no_zip';
    die();
  } elseif (empty($_POST['email']) || filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == FALSE) {
    echo 'no_email';
    die();
  } elseif (empty($_POST['telephone'])) {
    echo 'no_telephone';
    die();
  } elseif ($_POST['email'] !== $_POST['emailVerify']) {
    echo 'no_match';
    die();
  } elseif ($_POST['background'] == 'undefined') {
    echo 'no_background';
    die();
  } elseif ($_POST['right_work'] == 'undefined') {
    echo 'no_right_work';
    die();
  } elseif ($_POST['experience'] == 'undefined') {
    echo 'no_experience';
    die();
  } elseif ($_POST['business_book'] == 'undefined') {
    echo 'no_business_book';
    die();
  } elseif ($_POST['non_compete'] == 'undefined') {
    echo 'no_non_compete';
    die();
  } elseif (empty($_POST['hear_about'])) {
    echo 'no_hear_about';
    die();
  } elseif (empty($_POST['employment_status'])) {
    echo 'no_employment_status';
    die();
  } elseif (empty($_POST['sales_experience'])) {
    echo 'no_sales_experience';
    die();
  } elseif (empty($_POST['years_broker'])) {
    echo 'no_years_broker';
    die();
  } elseif (empty($_POST['essay'])) {
    echo 'no_essay';
    die();
  } else {
    echo '';
  }

else:
  echo 'error';
  die();
endif;

$first_name = filter_input(INPUT_POST, 'first_name');
$last_name = filter_input(INPUT_POST, 'last_name');
$address = filter_input(INPUT_POST, 'address');
$suite = filter_input(INPUT_POST, 'suite');
$suite = (empty($suite))? 'NULL': $suite;
$city = filter_input(INPUT_POST, 'city');
$state = filter_input(INPUT_POST, 'state');
$zip = filter_input(INPUT_POST, 'zip');
$email = filter_input(INPUT_POST, 'email');
$emailVerify = filter_input(INPUT_POST, 'emailVerify');
//	$p = str_replace(array('', '-', '(', ')'), '', $p);
$telephone = filter_input(INPUT_POST, 'telephone');
$telephone_stripped = str_replace(array(' ', '-', '(', ')'), '', $telephone);
// check if numbers entered for telephone number
if(is_numeric($telephone_stripped) == FALSE || strlen($telephone_stripped) !== 10) {
  echo 'no_telephone';
  die();
}
$background = filter_input(INPUT_POST, 'background');
$right_work= filter_input(INPUT_POST, 'right_work');
$experience = filter_input(INPUT_POST, 'experience');

$business_book = filter_input(INPUT_POST, 'business_book');
$non_compete = filter_input(INPUT_POST, 'non_compete');

$hear_about = filter_input(INPUT_POST, 'hear_about');
$employment_status = filter_input(INPUT_POST, 'employment_status');
$sales_esperience = filter_input(INPUT_POST, 'sales_experience');
$years_broker = filter_input(INPUT_POST, 'years_broker');
$essay = filter_input(INPUT_POST, 'essay');

require_once ('../../includes_2/database_ajax.php');

//add contact to db below query using backticks
$q = "INSERT INTO `agent_applications`(`first_name`, `last_name`, `email`, `telephone`, `address`, `suite`, `city`, `state`, `zip`, `background`, `right_work`, `experience`, `business_book`, `non_compete`, `hear_about`, `employment_status`, `sales_esperience`, `years_broker`, `essay`)
VALUES (:first_name, :last_name, :email, :telephone_stripped, :address, :suite, :city, :state, :zip, :background, :right_work, :experience, :business_book, :non_compete, :hear_about, :employment_status, :sales_esperience, :years_broker, :essay)";

$statement_add = $dba -> prepare($q);
$statement_add -> bindValue(':first_name', $first_name);
$statement_add -> bindValue(':last_name', $last_name);
$statement_add -> bindValue(':email', $email);
$statement_add -> bindValue(':telephone_stripped', $telephone_stripped);
$statement_add -> bindValue(':address', $address);
$statement_add -> bindValue(':suite', $suite);
$statement_add -> bindValue(':city', $city);
$statement_add -> bindValue(':state', $state);
$statement_add -> bindValue(':zip', $zip);
$statement_add -> bindValue(':background', $background);
$statement_add -> bindValue(':right_work', $right_work);
$statement_add -> bindValue(':experience', $experience);
$statement_add -> bindValue(':business_book', $business_book);
$statement_add -> bindValue(':non_compete', $non_compete);
$statement_add -> bindValue(':hear_about', $hear_about);
$statement_add -> bindValue(':employment_status', $employment_status);
$statement_add -> bindValue(':sales_esperience', $sales_esperience);
$statement_add -> bindValue(':years_broker', $years_broker);
$statement_add -> bindValue(':essay', $essay);

$statement_add -> execute();
$statement_add -> closeCursor();

if (!empty($statement_add)):
  echo '200';
  //send me a notification email
endif;
