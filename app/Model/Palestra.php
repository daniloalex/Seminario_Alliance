<?php
class Palestra extends AppModel{
	
	public $hasOne = array('Palestrante');	//Cada palestra é dada por um palestrante.
	
	//Regras de validação:
	public $validate = array(
		'nome' => array(
			'rule' => 'notEmpty',
			'message' => 'Preencha o Nome.'
		),
		'descricao' => array(
			'rule' => 'notEmpty',
			'message' => 'Preencha a Descricao.'
		),
		'inicio' => array(
			'rule' => 'time',	//HH:MM
			'message' => 'Preencha uma data valida.',
			'allowEmpty' => true
		),
		'fim' => array(
			'rule' => 'time',	//HH:MM
			'message' => 'Preencha uma data valida.',
			'allowEmpty' => true
		)
	);
}
?>