<?php
include ('../../site_utilities_v2/config.inc.php');

if (empty($_GET['a']) && $_GET['a'] !== 'get_applications' && empty($_GET['x']) && $_GET['x'] !== AJAX_API_KEY) {
	die();
}

$active = 1;
require_once ('../../includes_2/database_ajax.php');

$query = "SELECT * FROM  agent_applications WHERE active = :active";

$statement = $dba -> prepare($query);
$statement -> bindValue(':active', $active);
$statement -> execute();
$found = $statement -> fetchall();
$statement -> closeCursor();

if (empty($found)) :
	die();
endif;

echo json_encode($found);
