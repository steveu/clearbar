<?php snippet('header') ?>

<div id="page">

	<section class="notes">


		<article>

			<aside class="meta">
				<time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate"><?php echo $page->date('l j<\s\up>S</\s\up> F, Y') ?></time>
				<p class="comments">0 Responses</p>
			</aside>

			<div class="post">
				<h1><?php echo html($page->title()) ?></h1>
    			<?php echo kirbytext($page->text()) ?>

    			<?php snippet('disqus', array('disqus_shortname' => 'clearbar', 'disqus_developer' => true)) ?>
			</div>
			
		</article>


	</section>

</div>

<?php snippet('footer') ?>