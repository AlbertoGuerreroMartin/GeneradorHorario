<?php
	if ($_POST) 
	{
		if($_POST['username'] == 'test@test' && $_POST['password'] == 'test')
		{
			$data['success'] = true;
			$data['redirect'] = '/dashboard.php';
		}
		else
		{
			$data['success'] = false;
			$data['message'] = "Información de inicio de sesión incorrecta.";
		}

		echo json_encode($data);
	}
?>