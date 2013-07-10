<nav class="menu-nav sixteen columns">
	<ul class="eleven columns">
		<li><?php echo $this->Html->link("Home", array('controller'=>'paginas', 'action'=>'home'));?></li>
		<li><?php echo $this->Html->link("Sobre o Evento", array('controller'=>'paginas', 'action'=>'sobre-o-evento'));?></li>
		<li><?php echo $this->Html->link("Como Chegar", array('controller'=>'paginas', 'action'=>'como-chegar'));?></li>
		<li><?php echo $this->Html->link("Inscrição", array('controller'=>'inscricoes','action'=>'inscrever'));?></li>
	</ul>
	<div class="social alpha omega">
		<a href="https://twitter.com/daniloalex" alt="Twitter"></a>
		<a href="https://www.facebook.com/ddanilo.alex" alt="Facebook"></a>
	</div> <!--Close Social Div-->
</nav>