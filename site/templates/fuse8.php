<?php snippet('header') ?>

<div id="page">
	
	<form id="view_process">
		<label>See the process -></label>
		<input type="range" id="fuse8_stage" min="0" max="5" step="1" value="4" />
	</form>

	<h1 class="hello"><span><?php echo $page->title() ?></span></h1>

	<div class="text">

		
		
		<?php echo kirbytext($page->text()) ?>
	</div>

</div>

<?php snippet('footer') ?>