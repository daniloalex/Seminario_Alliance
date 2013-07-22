<?php
class Inscricao extends AppModel{
	//public $useTable = 'inscricoes';	// Usei Inflections
	//public $primaryKey = 'id';	// O Cake pega o campo id automaticamente como PK.
	//public $cacheQueries = true;
	
	// Regra de validação:
	public $validate = array(
		'Nome' => array(
			'rule' => 'notEmpty',
			'message' => 'Preencha o Nome'
		),
		'Email' => array(
			'preenchido' => array(
				'rule' => 'notEmpty',
				'message' => 'Preencha o Email'
			),
			'emailValido' => array(
				'rule' => 'url',
				'message' => 'Email inválido'
			)
		),
		'Telefone' => array(
			'preenchido' => array(
				'rule' => 'notEmpty',
				'message' => 'Preencha o Telefone'
			),
			'somenteNumeros' => array(
				'rule' => 'numeric',
				'message'=> 'São permitidos apenas números'
			)
		),
		'Endereco' => array(
			'preenchido' => array(
				'rule' => 'notEmpty',
				'message' => 'Preencha o Endereço'
			),
			'minimo10' => array(
				'rule' => 'minLength(10)',
				'message' => 'Mínimo 10 caracteres'
			)
		)
	);
}
?>