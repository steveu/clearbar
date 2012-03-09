<?php
	s::start();
	s::set('fuse8', true);
?>
<?php snippet('header') ?>

<div id="page">
	
	<h1 class="hello"><span><?php echo $page->title() ?></span></h1>

	<div class="text">
		
		<?php echo kirbytext($page->text()) ?>
	</div>

</div>

<?php snippet('footer') ?>