<?php
class AdviserController extends BaseController
{
	function __construct($foo = null)
	{
		if (!isset($_SESSION['registrado']) || !$_SESSION['registrado']) {
			return $this->redirect('main','index');
		}	
	}
	public function crear() {
		if (count($_POST) > 0) {
			$adviserModel = new Adviser();
			$edad = $adviserModel->calculaedad($_POST['fecha']);
			$adviserModel->create($_POST+['edad' => $edad]);

			$this->redirect('adviser','index');
		}

		$this->view('pruebaf/form');
	}	
	public function index() {
		$model = new Adviser();
		$data = $model->getAll();

		$this->view('pruebaf/listar', ['data' => $data ]);
	}
	

	public function mostrarUno() {
		$model = new Producto();
		$data = $model->getById($_GET['id']);

		$this->view('mostrarUno', ['titulo' => $titulo, 'data' => $data ]);
	}

	public function delete() {
		$id = $_GET['id'];
		$prueba = new Adviser();
		$prueba->deleteById($id);
		$this->redirect('adviser','index');
	}
	public function update(){
		$model = new Adviser();
		
		if (count($_POST) > 0) {
			$edad = $model->calculaedad($_POST['fecha']);
			$model->updateById($_POST+['edad' => $edad], $_GET['id']);
			$this->redirect('adviser','index');
		}

		$row = $model->getById($_GET['id']);
		$this->view('pruebaf/form', ['row' => $row]);
	}
}
