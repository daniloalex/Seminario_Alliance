<?php
class Palestra extends appModel{
	//Cada palestra é dada por um palestrante.
	public $hasOne = array('Palestrante');
	
	//Regras de validação:
	public $validate = array(
		'Nome' => array(
			'rule' => 'notEmpty',
			'message' => 'Preencha o Nome.'
		),
		'Descricao' => array(
			'rule' => 'notEmpty',
			'message' => 'Preencha a Descricao.'
		),
		'Inicio' => array(
			'rule' => 'date', 	// ALTERAR PARA FORMATO HH:MM.................
			'message' => 'Preencha uma data valida.',
			'allowEmpty' => true
		)
		'Fim' => array(
			'rule' => 'date',	// ALTERAR PARA FORMATO HH:MM.................
			'message' => 'Preencha uma data valida.',
			'allowEmpty' => true
		)
	);
}
?>