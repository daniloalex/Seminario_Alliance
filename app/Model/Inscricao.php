<?php
class Inscricao extends AppModel{
	//public $useTable = 'inscricoes';	// Usei Inflections
	//public $primaryKey = 'id';	// O Cake pega o campo id automaticamente como PK.
	//public $cacheQueries = true;
	
	// Regra de valida��o:
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
				'message' => 'Email inv�lido'
			)
		),
		'Telefone' => array(
			'preenchido' => array(
				'rule' => 'notEmpty',
				'message' => 'Preencha o Telefone'
			),
			'somenteNumeros' => array(
				'rule' => 'numeric',
				'message'=> 'S�o permitidos apenas n�meros'
			)
		),
		'Endereco' => array(
			'preenchido' => array(
				'rule' => 'notEmpty',
				'message' => 'Preencha o Endere�o'
			),
			'minimo10' => array(
				'rule' => 'minLength(10)',
				'message' => 'M�nimo 10 caracteres'
			)
		)
	);
}
?>