<?php
	echo $this->Form->create('Palestrante', array('action' => 'inscrever'));
		echo $this->Form->input('nome');
		echo $this->Form->input('descricao');
		echo $this->Form->input('site');
	echo $this->Form->end('Enviar');
?>