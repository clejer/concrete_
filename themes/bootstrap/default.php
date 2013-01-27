<?php $this->inc('elements/header.php'); ?>

<div class="row">
		    <div class="span10">
				  <?php $a=new Area('Contenu'); 
				  $a->display($c);?>
		    </div>
		    <div class="span2">
					<?php $a=new Area('Latéral'); 
				  $a->display($c);?>
		    </div>
	    </div>
<?php $this->inc('elements/footer.php'); ?>