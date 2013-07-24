<?php
	echo $this->Form->create('Inscricao', array('action' => 'inscrever')); //Inicia o Form 
		echo $this->Form->input('nome', array('label' => 'Nome completo:'));
		echo $this->Form->input('email', array('label' => 'Email válido:', 'type' => 'email')); 
		echo $this->Form->input('telefone', array('label' => 'Telefone fixo:'));
		echo $this->Form->input('endereco', array('label' => 'Endereço:'));
	echo $this->Form->end('Enviar');	//Fim o Form 
?>
