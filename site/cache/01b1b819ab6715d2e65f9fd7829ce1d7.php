<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>clearbar - About</title>

    <meta name="description" content="The personal website of interaction designer and web developer Steven Urmston" />
    <meta name="author" content="Steven Urmston">

    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <script src="http://dev.clearbar/assets/scripts/libs/modernizr-2.0.6.min.js"></script>

    <script type="text/javascript" src="http://use.typekit.com/fbd2arb.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
 
    <link rel="stylesheet" href="http://dev.clearbar/assets/styles/screen.css" />

</head>

<body class="about">

    <span id="stripe"></span>

    <div id="wrapper">

        <header class="clearfix" id="top">

            <h1>
                <a href="/">
                    <!--
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%">
                        <ellipse cx="91%" cy="16%" rx="12%" ry="29%" style="fill:#ffffff;fill-opacity:0.7;" transform="rotate(32)" />
                        <ellipse cx="5%" cy="64%" rx="17%" ry="42%" style="fill:#ffffff;fill-opacity:0.95;" transform="rotate(-35)" />
                    </svg>
                    -->
                    clearbar
                </a>
            </h1>

            <nav>
                <ul>
                                <li><a href="http://dev.clearbar/work">Work</a></li>
                                <li><a class="active" href="http://dev.clearbar/about">About</a></li>
                                <li><a href="http://dev.clearbar/notes">Notes</a></li>
                                <li><a href="http://dev.clearbar/cv">CV</a></li>
                                </ul>
            </nav>

        </header>

<figure class="full">
	<img src="http://dev.clearbar/content/02-about/steve_urmston.jpg" />
	<div>
	<figcaption>
		Horizontal in <a href="http://www.watchthegardengrow.eu/the-garden-zadar">The Garden</a> in Zadar
	</figcaption>
	</div>
</figure>

<div id="page">

	<section class="content">
		<h1>Hiya, I'm Steve.</h1>

<p>I&rsquo;m a (early) thirty-something interactive designer and web developer from York, where I live in Acomb with my beautiful <del>fiancé</del> <ins>wife</ins> Sarah.</p>

<p>I love my music, particularly deep house, funk &amp; disco (occasional techno). I sometimes DJ in my living room.</p>

<p>I enjoy sports, both watching and playing. I'm a season ticket holder at the mighty Bolton Wanderers.</p>

<h2>What the heck is Clearbar?</h2>

<p>It used to be my web design business, but is now my personal website where I keep my portfolio of <a href="http://dev.clearbar/work">work</a>, and sporadically post <a href="http://dev.clearbar/notes">notes</a>.</p>

<p>The website was helped by; <a href="http://getkirby.com/">Kirby</a>, <a href="http://sass-lang.com/">Sass</a>, <a href="http://jquery.com/">jQuery</a>, <a href="http://compass-style.org/">Compass</a>, <a href="http://raphaeljs.com/">Rapha&euml;l</a>, and was made with love.</p>

<h2>Should we talk?</h2>

<p>I agree, try me at any of the following;</p>

<ul>
<li>Email: steve @ my domain</li>
<li>Twitter: <a href="http://twitter.com/steveu">@steveu</a></li>
<li>Google Talk: stevechamp</li>
<li>GitHub: <a href="https://github.com/clearbar">github.com/clearbar</a></li>
<li>LinkedIn: <a href="http://www.linkedin.com/in/steveurmston">linkedin.com/in/steveurmston</a></li>
</ul>
	</section>

	<aside class="blank">

		<h3>I got skills in&hellip; <i>(Sadly no sweet bike or mustache)</i><!--<a href="/about/skills" class="btn grey">Full version</a>--></h3>
		<div id="skills_matrix">
			<table>
				<thead>
					<tr>
						<th>Skill:</th>
						<th>Ability:</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Graphic Design:</th>
						<td>50%</td>
					</tr>
					<tr>
						<th>Interaction Design:</th>
						<td>70%</td>
					</tr>
					<tr>
						<th><abbr>IA</abbr>:</th>
						<td>60%</td>
					</tr>
					<tr>
						<th>Research:</th>
						<td>30%</td>
					</tr>
					<tr>
						<th>PHP:</th>
						<td>90%</td>
					</tr>
					<tr>
						<th>Javascript:</th>
						<td>80%</td>
					</tr>
					<tr>
						<th>CSS:</th>
						<td>100%</td>
					</tr>
					<tr>
						<th>HTML:</th>
						<td>100%</td>
					</tr>
				</tbody>		
			</table>
		</div>
	</aside>

</div>

        	<footer id="bottom">
                
                <p class="contact">
                    I am <a href="http://twitter.com/#!/steveu">Twitter</a>. I read <a class="email" href="">email</a>. <!--Grab my <a href="">vCard</a><span> for your address book.</span>-->
                </p>

                <p class="copyright">
                    <a class="cc" rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/">
                    <img alt="Creative Commons License" src="/assets/images/cc_licence.png" width="88" height="31" /></a>
                </p>

			</footer>

		</div>
		
		<script>
            yepnope([
                {
                    load: 'http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js',
                    complete: function () {
                        if (!window.jQuery) {
                            yepnope('/assets/scripts/libs/jquery-1.6.4.min.js');
                        }
                    }
                },
				{
                    load: [
						'/assets/scripts/libs/raphael.js'
					]
                },
                {
                    load: ['/assets/scripts/plugins.js', '/assets/scripts/master.js']
                }
            ]);
        </script>

        <!--
        <script>
            window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
                Modernizr.load({
                load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
            });
        </script>
        -->
    </body>
</html>