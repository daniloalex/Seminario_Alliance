<?php
	class palestrante extends appModel{
		//Um palestrante pode realizar várias palestras:
		public $hasMany = array('Palestra');

		//Regras de validação:
		public $validate = array(
			'Nome' => array(
				'rule' => 'notEmpty',	//Não vazio.
				'message' => 'Preencha o Nome.'
			),
			'Descricao' => array(
				'rule' => 'notEmpty',	//Não vazio.
				'message' => 'Preencha a Descricao.'
			),
			'Site' => array(
				'rule' => 'url',	// url válida.
				'message' => 'Preencha uma url valida.'
			)
		);
	}
?>