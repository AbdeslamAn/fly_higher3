<?php 

if (isset($fakeTok) && $fakeTok = "562random") {
	include "conix.php";
	$sql = "SELECT id_pig_sq,n_bage,date_naiss,strains,n_father,n_mother,not_info,ped_father,ped_mother,user_email FROM pigeon_squab where id_pig_sq='$id_pig_sq' ";
	$result = mysqli_query($connection, $sql);
}else {
	echo "404!";
	exit;
}