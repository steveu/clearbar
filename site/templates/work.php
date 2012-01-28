<?php snippet('header') ?>

<div id="page">

	<section class="work">

		<?php foreach($page->children()->visible() as $item): ?>

		<article>

			<div class="meta">
				<h1><?php echo html($item->title()) ?></h1>
				<?php echo markdown($item->text()) ?>


				<table class="breakdown">
					<caption>My involvement</caption>
				<?php
				foreach(c::get('breakdowns') AS $key => $title)  {
					if ($item->$key() != '') {
				?>
				<tr>
					<th><?php echo $title ?>:</th>
					<td>
						<span>
							<span class="percent<?php echo $item->$key() ?>"><?php echo $item->$key() ?>%</span>
						</span>
					</td>
				</tr>
				<?php
					}
				}
				?>
				</table>

			</div>

			<? if ($item->type()) : ?>
					
				<aside class="slideshow">

				<iframe src="http://www.slideshare.net/slideshow/embed_code/7852875?rel=0" height="auto" width="100%" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>

				</aside>
		
			<? else : ?>

			<figure class="">
				
				<a class="chrome" href="http://<?php echo $item->link() ?>/">
					
					<em>Vist Site</em>
					
					<figcaption>
						<img src="http://<?php echo $item->link() ?>/favicon.ico" width="16" height="16" />
						<?php echo $item->link() ?>
					</figcaption>

					<?php $image = $item->images()->find('screenshot.png') ?>

					<img src="<?php echo $image->url() ?>" />

				</a>

				
			</figure>

			<? endif ?>

		</article>

		<?php endforeach ?>

	</section>

</div>

<?php snippet('footer') ?>