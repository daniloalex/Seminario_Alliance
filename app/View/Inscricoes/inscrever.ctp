<div class="container sixteen columns row">
<h3> Faça já sua inscrição </h3>

	<?php echo $this->Form->create('Inscricao', array('action' => 'inscricao' )) ?> <!-- Inicia o Form -->
	<?php echo $this->Form->input('Nome: ') ?>
	<?php echo $this->Form->input('Email: ') ?>
	<?php echo $this->Form->input('Telefone: ') ?>
	<?php echo $this->Form->input('Endereco: ') ?>
	<?php echo $this->Form->submit('Enviar: ') ?>
	<?php echo $this->Form->end() ?> 	<!-- Fim do Form -->

</div>