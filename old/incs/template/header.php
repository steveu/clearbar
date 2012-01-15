<!DOCTYPE html>

<html lang="en">

    <head>

        <title>clearbar - the online portfolio of Steve Urmston</title>

		<script src="/incs/js/libs/modernizr-2.0.6.min.js"></script>
		
		<script type="text/javascript" src="http://use.typekit.com/fbd2arb.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		
        <link rel="stylesheet" href="/incs/css/screen.css" media="screen" />

    </head>

    <body class="<?php echo $bclass; ?>">
		
		<span id="stripe"></span>
		
        <div id="wrapper">

            <header class="clearfix" id="top">
                <h1>
                    <a href="/"<?php if ($bclass == 'home') echo ' class="active"'; ?>>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%">
							<ellipse cx="91%" cy="16%" rx="12%" ry="29%" style="fill:#ffffff;fill-opacity:0.7;" transform="rotate(32)" />
							<ellipse cx="5%" cy="64%" rx="17%" ry="42%" style="fill:#ffffff;fill-opacity:0.95;" transform="rotate(-35)" />
                        </svg>
                        clearbar
                    </a>
                </h1>

                <nav>
                    <ul>
                        <li<?php if ($bclass == 'portfolio') echo ' class="active"'; ?>><a href="/portfolio">Portfolio</a></li>
                        <li<?php if ($bclass == 'about') echo ' class="active"'; ?>><a href="/about">About</a></li>
                        <li<?php if ($bclass == 'journal') echo ' class="active"'; ?>><a href="/journal">Notes</a></li>
                        <li<?php if ($bclass == 'contact') echo ' class="active"'; ?>><a href="/contact">Contact</a></li>
                    </ul>
                </nav>
            </header>