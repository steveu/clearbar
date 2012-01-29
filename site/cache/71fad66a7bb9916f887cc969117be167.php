<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>clearbar - Home</title>

    <meta name="description" content="The personal website of interaction designer and web developer Steven Urmston" />
    <meta name="author" content="Steven Urmston">

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="icon shortcut" href="/favicon.ico" type="image/vnd.microsoft.com" />
    
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
                    I am <a href="http://twitter.com/#!/steveu">Twitter</a>. I also read <a class="email" href="">email</a>.
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

        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-366835-5']);
            _gaq.push(['_setDomainName', 'clearbar.com']);
            _gaq.push(['_setAllowLinker', true]);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </body>
</html>