<?php

if(isset($_POST['btn-send']))
{
	$Name = $_POST['Uname'];
	$Email = $_POST['Email'];
	$Subject = $_POST['Subject'];
	$Msg = $_POST['msg'];

	if(empty($Name) || empty($Email) || empty($Subject) || empty($Msg))
	{
		header('location:index.php?error');
	}

	else
	{
		$to = "mukti.mr1996@gmail.com";

		if(mail($to,$Subject,$Msg,$Email))
		{

		header('location:index.php?Success');
		
		}

	}
}

else
{
	header('location:index.php');
}

?>