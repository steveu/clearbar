<?php snippet('header') ?>


<div id="page">

<div class="home_slideshow">
	<div>
		<h1>
			This is <a href="/about">my</a> website.
			It's not finished, but is here anyway.
			I make <a href="/work">others</a>, and have for a <a href="/cv">while</a>.
			I sometimes <a href="/notes">write</a>.
			Contact me via <a class="email">email</a> &hellip; if you want.
		</h1>
	</div>
</div>


<?php echo kirbytext($page->text()) ?>

</div>

<?php snippet('footer') ?>