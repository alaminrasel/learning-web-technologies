
<?php
	if(isset($_POST['submit'])){

		$name 		=  $_POST['myname'];

		if($name == ""){
			echo "Null submission...";
		}else{
			echo "Name: ".$_POST['myname'];
		}

	}else{
		echo 'invalid request...';
	}


?>
