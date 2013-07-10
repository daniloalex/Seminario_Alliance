<?php
	class InscricoesController extends AppController {
		//public $uses = array('Inscricao');	//Usei Inflections
		public function inscrever() {
			// Exibe automaticamente a view:
			// /View/Inscricoes/inscrever.ctp
			$isPost = $this->request->is('post');

			// Se é um POST e dados do formulário não vazio
			if ($isPost && !empty($this->request->data)) {
				// Tente salvar os dados da inscricao
				if ($this->Inscricao->save($this->request->data)) {
					// Registro inserido com sucesso!
					$this->redirect(array('controller' => 'inscricoes', 'action' => 'obrigado'));
				}else{
					$this->redirect(array('controller' => 'inscricoes', 'action' => 'confirme'));
				}

			}
		}
		public function obrigado() {
			// Exibe automaticamente a view:
			// /View/Inscricoes/obrigado.ctp
		}
		public function confirme(){
			// Exibe automaticamente a view: 
			// /View/Inscricoes/confirme.ctp
		}
	}
?>