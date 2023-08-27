<?php 
$conn = mysqli_connect("localhost", "root", "", "mila");
function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ){
		$rows[] = $row;
	}
	return $rows;
}

function cari($keyword){
	$query = "SELECT * FROM gros 
				WHERE 
				kota LIKE '$keyword%' OR rdc LIKE '$keyword%'
				";
	return query($query);			
}



 ?>
