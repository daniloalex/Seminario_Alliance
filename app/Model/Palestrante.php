<?php
class Palestrante extends AppModel{
	//Um palestrante pode realizar uma ou várias palestras:
	public $hasMany = array('Palestra');
	
	//Regras de validação:
	public $validate = array(
		'nome' => array(
			'rule' => 'notEmpty',
			'message' => 'Preencha o Nome'
		),
		'descricao' => array(
			'rule' => 'notEmpty',
			'message' => 'Preencha a Descricao'
		),
		'site' => array(
			'rule' => 'url',
			'message' => 'URL inválida',
			'allowEmpty' => true	//Permite vazio. Ignora a validação se campo estiver vazio.
		)
	);
}
?>