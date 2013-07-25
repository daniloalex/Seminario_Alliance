<?php
class Palestra extends AppModel{
	//Cada palestra é dada por um palestrante.
	public $hasOne = array('Palestrante');	
	
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
		),
		'palestrante_id' => array(
			'rule' => 'notEmpty',
			'required' => true
		)
	);
}
?>