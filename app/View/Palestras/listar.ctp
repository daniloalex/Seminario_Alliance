<h2>Lista de Palestras</h2>

<table>
	<tr>
		<td>Nome</td>
		<td>Inicio</td>
		<td>Fim</td>
		<td>Descricao</td>
	</tr>

	<?php foreach($palestras as $var): ?>
		<tr>
			<td><?php echo $var['Palestra']['nome']; ?></td>

			<td><?php $slug = Inflector::slug(strtolower($var['Palestra']['nome']), '-');
				echo $this->Html->link($var['Palestrante']['nome'],'/palestrante/'.$slug.'/'.$var['Palestra']['palestrante_id']);
				?>
			</td>

			<td><?php echo $var['Palestra']['inicio']; ?></td>
			<td><?php echo $var['Palestra']['fim']; ?></td>
			<td><?php echo $var['Palestra']['descricao']; ?></td>
		</tr>
	<?php endforeach; ?>
</table>
<br>
<?php echo $this->Html->link('Nova Palestra',array(
	'controller' => 'palestras',
	'action' => 'inscrever')
); ?>