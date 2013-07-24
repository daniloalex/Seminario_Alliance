<?php
class Inscricao extends AppModel{
	//public $useTable = 'inscricoes';	// Usei Inflections
	//public $primaryKey = 'id';	// O Cake pega o campo id automaticamente como PK.
	//public $cacheQueries = true;
	
	// Regra de valida��o:
	public $validate = array(
		'nome' => array(
			'preenchido' => array(
				'rule' => 'notEmpty',
				'message' => 'Preencha o Nome',
				'require' => true
			)
		),
		'email' => array(
			'preenchido' => array(
				'rule' => 'notEmpty',
				'message' => 'Preencha o Email',
				'require' => true
			),
			'emailValido' => array(
				'rule' => 'email',
				'message' => 'Email inv�lido'
			)
		),
		'telefone' => array(
			'preenchido' => array(
				'rule' => 'notEmpty',
				'message' => 'Preencha o Telefone'
			),
			'somenteNumeros' => array(
				'rule' => 'numeric',
				'message'=> 'S�o permitidos apenas n�meros'
			)
		),
		'endereco' => array(
			'preenchido' => array(
				'rule' => 'notEmpty',
				'message' => 'Preencha o Endere�o'
			),
			'minimo10' => array(
				'rule' => array('minLength', 10),
				'message' => 'Digite no m�nimo 10 caracteres'
			)
		)
	);
}
?>