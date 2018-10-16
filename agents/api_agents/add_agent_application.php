<?php
include ('../../site_utilities_v2/config.inc.php');

if (!empty($_POST['email']) && $_POST['key'] == AJAX_API_KEY) {

  $first_name = filter_input(INPUT_POST, 'first_name');
  $last_name = filter_input(INPUT_POST, 'last_name');
  $email = filter_input(INPUT_POST, 'email');
} else {
  echo 'error';
  die();
}

require_once ('../../includes_2/database_ajax.php');

//add contact to db
$q = "INSERT INTO `agent_applications`(`first_name`, `last_name`, `email`)
VALUES (:first_name, :last_name, :email)";

$statement_add = $dba -> prepare($q);
$statement_add -> bindValue(':first_name', $first_name);
$statement_add -> bindValue(':last_name', $last_name);
$statement_add -> bindValue(':email', $email);

$statement_add -> execute();
$statement_add -> closeCursor();

if (!empty($statement_add)):
  echo '200';
  //send me a notification email

endif;
