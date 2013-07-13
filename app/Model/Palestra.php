<?php
	class palestra extends appModel{
		//Cada palestra é dada por um palestrante.
		public $hasOne = array('Palestrante');

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
			'Inicio' => array(
				'rule' => 'date',	//Data válida.
				'message' => 'Preencha uma data valida.',
				'allowEmpty' => true 	//Permite vazio
			)
		);
	}
?>