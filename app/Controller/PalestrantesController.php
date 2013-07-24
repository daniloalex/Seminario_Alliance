<?php
	class PalestrantesController extends AppController{
		//public $uses = array('palestrante');

		public function inscrever(){
			//Exibe automaticamente a view: /View/Palestrantes/inscrever.ctp

			$isPost = $this->request->is('post');
			if($isPost && !empty($this->request->data)){
				if($this->Palestrante->save($this->request->data)){
					echo $this->redirect(array('controller' => 'Palestrantes', 'action' => 'sucesso'));
				}else{
					echo $this->redirect(array('controller' => 'Palestrantes', 'action' => 'confirme'));
				}
			}
		}

		public function listar(){
			//Exibe automaticamente a view: /View/Palestrantes/listar.ctp
		}

		public function sucesso(){}
		
		public function confirme(){}
	}
?>