<?php 

	$database="resort_house";
	$user='root';
	$password=''; 


	try {

	$con=new PDO('mysql:host=localhost;dbname='.$database,$user,$password);

	} catch (PDOException $e) {
	echo "Error".$e->getMessage();
	}


	if(isset($_GET['id'])){
		$id=(int) $_GET['id'];
		$delete=$con->prepare('DELETE FROM cliente WHERE id=:id');
		$delete->execute(array(
			':id'=>$id
		));
		header('Location: clientesHistorial.php');
	}else{
		header('Location: clientesHistorial.php');
    }

 ?>