<?php
include('connexion.php');

$sql_supr = "DELETE FROM local WHERE IdLocal =  id ";
			//Execute the statement and delete our values.
			$delete = $conn->exec($sql_supr);

?>