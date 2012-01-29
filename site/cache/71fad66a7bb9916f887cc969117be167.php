<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>clearbar - Home</title>

    <meta name="description" content="The personal website of interaction designer and web developer Steven Urmston" />
    <meta name="author" content="Steven Urmston">

    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <script src="http://dev.clearbar/assets/scripts/libs/modernizr-2.0.6.min.js"></script>

    <script type="text/javascript" src="http://use.typekit.com/fbd2arb.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
 
    <link rel="stylesheet" href="http://dev.clearbar/assets/styles/screen.css" />

</head>

<body class="home">

    <span id="stripe"></span>

    <div id="wrapper">

        <header class="clearfix" id="top">

            <h1>
                <a href="/" class="active">
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
                                <li><a href="http://dev.clearbar/notes">Notes</a></li>
                                <li><a href="http://dev.clearbar/cv">CV</a></li>
                                </ul>
            </nav>

        </header>

<div id="page">

<div class="home_slideshow">
	<div>
		<h1>
			This is <a href="/about">my</a> website.
			It's not finished, but is here anyway.
			I make <a href="/work">others</a>, and have for a <a href="/cv">while</a>.
			I sometimes <a href="/notes">write</a>.
			Send me an <a class="email">email</a> &hellip; if you want.
		</h1>
	</div>
</div>




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