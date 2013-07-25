<?php
	class PalestrasController extends AppController{
		//public $uses = array('palestra');

		public function inscrever(){
			//Exibe automaticamente a view: /View/Palestrantes/inscrever.ctp

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

		public function sucesso(){
			//Exibe automaticamente a view: /View/Palestras/sucesso.ctp
		}
		
		public function confirme(){
			//Exibe automaticamente a view: /View/Palestras/confirme.ctp
		}
	}
?>