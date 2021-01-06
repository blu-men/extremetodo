<?php
namespace App\Controller;

class TaskController extends AppController {

	public $name = 'Task';
	public $autoRender = true; 
	
	public function index(){
		$this->viewBuilder()->autoLayout(false);
	}
	
}