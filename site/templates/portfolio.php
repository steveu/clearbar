<?php snippet('header') ?>

<div id="page">

	<section class="work">

		<?php foreach($page->children()->visible() as $item): ?>

		<article>

			<div class="meta">
				<h1><?php echo html($item->title()) ?></h1>
				<?php echo markdown($item->text()) ?>
			</div>

			<figure class="">
				<div class="chrome">
					<a class="visit" href="http://">visit</a>
					<p class="url"><?php echo $item->link() ?></p>

					<?php $image = $item->images()->find('screenshot.png') ?>

					<img src="<?php echo $image->url() ?>" />
				</div>
			</figure>

		</article>

		<?php endforeach ?>

	</section>

</div>

<?php snippet('footer') ?>