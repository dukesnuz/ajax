<?php
include ('../../site_utilities_v2/config.inc.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST'):
    //print_r($_POST);
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
  } elseif (empty($_POST['email']) || filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == FALSE) {
    echo 'no_email';
    die();
  } elseif (empty($_POST['telephone'])) {
    echo 'no_telephone';
    die();
  } elseif ($_POST['email'] !== $_POST['emailVerify']) {
    echo 'no_match';
    die();
  } else {

  }

else:
  echo 'error';
  die();
endif;

$first_name = filter_input(INPUT_POST, 'first_name');
$last_name = filter_input(INPUT_POST, 'last_name');
$email = filter_input(INPUT_POST, 'email');
$emailVerify = filter_input(INPUT_POST, 'emailVerify');
//	$p = str_replace(array('', '-', '(', ')'), '', $p);
$telephone = filter_input(INPUT_POST, 'telephone');
$telephone_stripped = str_replace(array(' ', '-', '(', ')'), '', $telephone);

require_once ('../../includes_2/database_ajax.php');

//add contact to db
$q = "INSERT INTO `agent_applications`(`first_name`, `last_name`, `email`, `telephone`)
                                VALUES (:first_name, :last_name, :email, :telephone_stripped)";

$statement_add = $dba -> prepare($q);
$statement_add -> bindValue(':first_name', $first_name);
$statement_add -> bindValue(':last_name', $last_name);
$statement_add -> bindValue(':email', $email);
$statement_add -> bindValue(':telephone_stripped', $telephone_stripped);


$statement_add -> execute();
$statement_add -> closeCursor();

if (!empty($statement_add)):
  echo '200';
  //send me a notification email

endif;
