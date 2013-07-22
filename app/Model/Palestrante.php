<?php
class Palestrante extends appModel{
	//Um palestrante pode realizar várias palestras:
	public $hasMany = array('Palestra');

	//Regras de validação:
	public $validate = array(
		'Nome' => array(
			'rule' => 'notEmpty',
			'message' => 'Preencha o Nome'
		),
		'Descricao' => array(
			'rule' => 'notEmpty',
			'message' => 'Preencha a Descricao'
		),
		'Site' => array(
			'rule' => 'url',
			'message' => 'URL inválida',
			'allowEmpty' = true	//Permite vazio. Ignora a validação se campo estiver vazio.
		)
	);
}
?>