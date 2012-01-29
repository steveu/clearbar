<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>clearbar - Notes</title>

    <meta name="description" content="The personal website of interaction designer and web developer Steven Urmston" />
    <meta name="author" content="Steven Urmston">

    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <script src="http://dev.clearbar/assets/scripts/libs/modernizr-2.0.6.min.js"></script>

    <script type="text/javascript" src="http://use.typekit.com/fbd2arb.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
 
    <link rel="stylesheet" href="http://dev.clearbar/assets/styles/screen.css" />

</head>

<body class="notes">

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
                                <li><a href="http://dev.clearbar/about">About</a></li>
                                <li><a class="active" href="http://dev.clearbar/notes">Notes</a></li>
                                <li><a href="http://dev.clearbar/cv">CV</a></li>
                                </ul>
            </nav>

        </header>
<!--
<div class="notes_search">

	<p>This is the personal blog of Steve Urmston</p>

	<form action="">

		<fieldset>
			<label>Search content:</label>
			<input type="text" name="q" id="q" />
		</fieldset>
	</form>

</div>
-->
<div id="page">

	<section class="notes">

		
		<article>

			<aside class="meta">
				<time datetime="2012-01-02T00:00:00+00:00" pubdate="pubdate">Monday 2<sup>nd</sup> January, 2012</time>
				<p class="comments"><a href="">0 Responses</a></p>
			</aside>

			<div class="post">
				<h1><a href="http://dev.clearbar/notes/bacon-in-the-sky">Bacon In The Sky ... With Diamonds.</a></h1>
				<p>Hot damn I&apos;ve only launched a personal website! As something of a serial scrapper, I&apos;ve burnt through my fair share of designs, all preferable to the fat nothing my domain has worn for the last 5 years.</p>

<p>Recently I&apos;ve begun to consider why I even want a website, and I believe this thought process has tipped me over the edge. Thus as an eternal reminder of my own personal solution to scrapping, I shall now <em>scratch my reasons into this HTML</em>.</p>

<h2>Learn by doing</h2>

<p>I want to experiment with the bleeding edge techniques which I love about my job. I shall also improve something I feel is a weakness; <em>my writing</em>, which whilst not a disaster, needs the polish which only consistently doing can bring.</p>

<h2>Make waves</h2>

<p>No, not <a href="https://wave.google.com/wave/?pli=1">that kind</a>. The Web is constantly shifting. I will use Clearbar to document the work I am proud of, before it's inevitable demise.</p>

<h2>Give something back</h2>

<p>I&apos;ve been making websites for about a decade, during which time I've consumed vast quantities of content, created by supremely talented people. Yet I never contribute, I don't even leave comments.</p>

<p>This will change. Hold me to it.</p>
			</div>
			
		</article>

		
	</section>

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