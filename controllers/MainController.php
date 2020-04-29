<?php

/**
 * 
 */
class MainController extends BaseController
{
	public function index()
	{
		if (isset($_SESSION['registrado']) && $_SESSION['registrado']) {
				return $this->redirect('adviser','index');
		}


		$this->redirect('main','login');
	}

	public function login()
	{
		if (count($_POST) > 0) {
			$UserModel = new User();
			$user = $UserModel->getByCampo("usuario", $_POST["usuario"]);
			if ($user && $user->estado == 'activo' &&  password_verify($_POST["clave"], $user->clave)) {
				$_SESSION['registrado'] = true;
				$this->redirect('adviser','index');
			} else {
				$this->view('main/login', ["error" => "Credenciales incorrectas!"]);
			}

		} else {
			$this->view('main/login');
		}

	}
}