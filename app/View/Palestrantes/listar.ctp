<h2> Lista de Palestrantes</h2>

<table>
	<tr>
		<td>Nome</td>
		<td>Descricao</td>
	</tr>

	<?php foreach ($palestrantes as $var): ?>
		<tr>
			<td><?php echo $var['Palestrante']['nome']; ?></td>
			<td><?php echo $var['Palestrante']['descricao']; ?></td>
		</tr>
	<?php endforeach; ?>
</table>
<br>
<?php echo $this->Html->link('Novo Palestrante', array(
		'controller' => 'palestrantes' ,
		'action' => 'inscrever')
); ?>