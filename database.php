<?php 

function getAllItems() {

	$pdo = new PDO('mysql:host=localhost;dbname=checking_list;charset=utf8mb4', 'root', 'root');

	$sql = "SELECT * FROM items";
	$stmt = $pdo->query($sql);


	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

	return $result;
}

function insertAItem($name, $deadline) {

	$pdo = new PDO('mysql:host=localhost;dbname=checking_list;charset=utf8mb4', 'root', 'root');


	$stmt = $pdo->prepare("INSERT INTO items(name,deadline) VALUES (:name, :deadline)");
	
	$stmt->execute(
		array(
			':name'=>$name,
			':deadline'=>$deadline
		)
	);


	$affected_rows = $stmt->rowCount();

	return $affected_rows;
}

function deleteAItem(){
	$pdo = new PDO('mysql:host=localhost;dbname=checking_list;charset=utf8mb4', 'root', 'root');

	$stmt = $pdo->prepare("DELETE FROM items WHERE $(this).val() == True");

	$stmt->execute();
}



?>