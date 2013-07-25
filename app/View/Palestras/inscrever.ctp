<?php 
	echo $this->Form->create('Palestra', array('action' => 'inscrever'));
		echo $this->Form->input('nome');
		echo $this->Form->input('descricao');
		echo $this->Form->input('inicio');
		echo $this->Form->input('fim');
		echo $this->Form->input('palestrante_id');
	echo $this->Form->end('Enviar');
?>