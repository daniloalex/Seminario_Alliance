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
			
			//Regra para exibir os id dos palestrantes em /View/Palestras/inscrever.ctp 
			$palestrantes = $this->Palestra->Palestrante->find('list');
			$this->set(compact('palestrantes'));
		}

		public function listar(){
			//Exibe automaticamente a view: /View/Palestras/listar.ctp

			//Parametros para a busca de todas as Palestras
			$params = array(
				'fields' => array('Palestra.nome', 'Palestra.inicio', 'Palestra.fim', 'Palestra.descricao'),
				'order' => array('Palestra.inicio' => 'ASC')
				);
			//Busca todas as Palestras
			$allPalestras = $this->Palestra->find('all',$params);

			//Manda para a View
			$this->set('palestras', $allPalestras);
		}

		public function sucesso(){
			//Exibe automaticamente a view: /View/Palestras/sucesso.ctp
		}
		
		public function confirme(){
			//Exibe automaticamente a view: /View/Palestras/confirme.ctp
		}
	}
?>