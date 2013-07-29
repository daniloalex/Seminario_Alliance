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

			//Parametros para a busca de todos os Palestrantes
			$params = array(
				'fields' => array('Palestrante.nome', 'Palestrante.descricao'),
				'order' => array('Palestrante.nome', 'ASC')
				);
			//Busca todos os Palestrantes
			$allPalestrantes = $this->Palestrante->find('all');

			//Manda para a View
			$this->set('palestrantes', $allPalestrantes);
		}

		public function sucesso(){
			//Exibe automaticamente a view: /View/Palestrantes/sucesso.ctp
		}
		
		public function confirme(){
			//Exibe automaticamente a view: /View/Palestrantes/confirme.ctp
		}

		public function view($id){
			$this->Palestrante->id = $id;
			$dados = $this->Palestrante->read();

			$this->set('palestrante', $dados);
		}
	}
?>