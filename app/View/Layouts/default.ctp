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
			<?php echo $this->Element('topo'); ?>	<!-- Inserindo o Elemento topo -->
			<?php echo $this->Element('menu-nav'); ?>	<!-- Insindo o Elemento menu -->
		</header>
		
		<div id="content" class="sixteen columns row">
			<div class="heading row">
				<h2><?php echo $title_for_layout ?></h2>	<!-- Titulo da view  -->
			</div>
			<?php echo $this->fetch('content'); ?>	<!-- Especificação de onde o CakePHP irá inserir o conteúdo da view -->
		</div>
		
		<footer class="sixteen columns omega bordas">
			<h4>&copy; 2013 Todos os Direitos Reservados</h4><br />
			<h3>Curso de CakePHP - <a href="http://assando-sites.com.br">assando-sites</a></h3>
		</footer>
	</div>

<!-- JS do Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-42226941-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>