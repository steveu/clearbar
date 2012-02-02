<?php snippet('header') ?>


<div id="page">

<div class="home_slideshow">
	<div>

		<?php
		$words = array(
			'welcome',
			'cliché',
			'websites',
			'hello there',
			'@steveu'
		);

		?>
	

		<h1>hello there</h1>

	<!--
		<h1>
			This is <a href="/about">my</a> website.
			It&#8217;s not finished, but is here anyway.
			I make <a href="/work">others</a>, and have for a <a href="/cv">while</a>.
			I sometimes <a href="/notes">write</a>.
			Send me an <a class="email">email</a> &hellip; if you want.
		</h1>
-->
	</div>
</div>


<?php echo kirbytext($page->text()) ?>

</div>

<?php snippet('footer') ?>