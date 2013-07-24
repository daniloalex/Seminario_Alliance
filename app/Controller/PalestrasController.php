<?php
	class PalestrasController extends AppController{
		//public $uses = array('palestra');

		public function inscrever(){
			$isPost = $this->request->is('post');
			if($isPost && !empty($this->request->data)){
				if($this->Palestra->save($this->request->data)){
					echo $this->redirect(array('controller' => 'Palestras', 'action' => 'sucesso'));
				}else{
					echo $this->redirect(array('controller' => 'Palestras', 'action' => 'confirme'));
				}
			}
		}

		public function listar(){
			//Exibe automaticamente a view: /View/Palestras/listar.ctp
		}

		public function sucesso(){}
		
		public function confirme(){}
	}
?>