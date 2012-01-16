<?php snippet('header') ?>

<?php
if ($page->intro()) {
?>
	<section class="intro">
		<h1>
			<?php echo $page->intro() ?>
		</h1>
	</section>
<?php
}
?>

<div id="page">

<?php echo kirbytext($page->text()) ?>

</div>

<?php snippet('footer') ?>