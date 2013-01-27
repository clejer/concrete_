<?php $this->inc('elements/header.php'); ?>
<div class="row">    
	<div class="span4">
		<?php $a=new Area('gauche'); 
		$a->display($c);?>
	</div>	      	
	<div class="span4">
		<?php $a=new Area('centre'); 
		$a->display($c);?>
	</div>
	<div class="span4">
		<?php $a=new Area('droit'); 
		$a->display($c);?>
	</div>
</div>

<?php $this->inc('elements/footer.php'); ?>