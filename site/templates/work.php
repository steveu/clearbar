<?php snippet('header') ?>

<div id="page">

	<section class="work">

		<?php foreach($page->children()->visible() as $item): ?>

		<article>

			<div class="meta">
				<h1><?php echo html($item->title()) ?></h1>

				<time datetime="<?php echo $item->date('c') ?>" pubdate="pubdate">
					<?php echo $item->date('F Y') ?>
				</time>

				<?php echo markdown($item->text()) ?>

				
				<? if ($item->type() == 'Slideshare') : ?>

					<a href="/assets/documents/game_mechanics_vle.pdf">Download the PDF</a>

				<? else : ?>

					<table class="breakdown">
						<caption>My Involvement</caption>
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

				<? endif ?>

			</div>

			<? if ($item->type()) : ?>
					
				<aside class="slideshow">

				<iframe src="http://www.slideshare.net/slideshow/embed_code/7852875?rel=0" frameborder="0" marginwidth="0" marginheight="0" scrolling="no">></iframe>

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