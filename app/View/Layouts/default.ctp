<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $title_for_layout." - Seminário Alliance JiuJitsu"; ?></title>
	<?php echo $this->Html->css('style'); ?>	<!-- Inserindo o estilo -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="container">
		<header class="sixteen columns alpha omega row">
			<!-- inserindo o logo -->
			<?php echo $this->Html->image('logo.png', array('class'=>'logo' , 'alt'=> 'logo')); ?> 
			<!-- Insindo o Elemento menu -->
			<?php echo $this->Element('menu-nav'); ?>
		</header>
		
		<div id="content" class="sixteen columns row">
			<div class="heading row">
				<!-- Titulo da view  -->
				<h2><?php echo $title_for_layout ?></h2>
			</div>
			<!-- Especificação de onde o CakePHP irá inserir o conteúdo da view -->
			<?php echo $this->fetch('content'); ?>
		</div>
		
		<footer class="sixteen columns omega bordas">
			<h4>&copy; 2013 Todos os Direitos Reservados</h4><br />
			<h3>Curso de CakePHP - <a href="http://assando-sites.com.br">assando-sites</a></h3>
		</footer>
	</div>
<!-- JS do Analytics -->
<?php echo $this->Html->script(array('analytics.js')); ?>
</body>
</html>