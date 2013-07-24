<?php
class Inscricao extends AppModel{
	//public $useTable = 'inscricoes';	// Usei Inflections
	//public $primaryKey = 'id';	// O Cake pega o campo id automaticamente como PK.
	//public $cacheQueries = true;
	
	// Regra de validação:
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
				'message' => 'Email inválido'
			)
		),
		'telefone' => array(
			'preenchido' => array(
				'rule' => 'notEmpty',
				'message' => 'Preencha o Telefone'
			),
			'somenteNumeros' => array(
				'rule' => 'numeric',
				'message'=> 'São permitidos apenas números'
			)
		),
		'endereco' => array(
			'preenchido' => array(
				'rule' => 'notEmpty',
				'message' => 'Preencha o Endereço'
			),
			'minimo10' => array(
				'rule' => array('minLength', 10),
				'message' => 'Digite no mínimo 10 caracteres'
			)
		)
	);
}
?>