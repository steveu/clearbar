<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>

    <meta name="description" content="<?= ($page->description()) ? html($page->description()) : html($site->description()) ?>" />
    <meta name="author" content="<?= $site->author() ?>">

    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <?php echo js('assets/scripts/libs/modernizr-2.0.6.min.js') ?>

    <script type="text/javascript" src="http://use.typekit.com/fbd2arb.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <?php echo css('assets/styles/screen.css') ?>

</head>

<body class="<?php echo $page->uri ?>">

    <span id="stripe"></span>

    <div id="wrapper">

        <header class="clearfix" id="top">

            <h1>
                <a href="/"<?php if ($page->uri == 'home') echo ' class="active"'; ?>>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%">
                        <ellipse cx="91%" cy="16%" rx="12%" ry="29%" style="fill:#ffffff;fill-opacity:0.7;" transform="rotate(32)" />
                        <ellipse cx="5%" cy="64%" rx="17%" ry="42%" style="fill:#ffffff;fill-opacity:0.95;" transform="rotate(-35)" />
                    </svg>
                    clearbar
                </a>
            </h1>

            <nav>
                <ul>
                <?php foreach($pages->visible() AS $p): ?>
                <li><a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
                <?php endforeach ?>
                </ul>
            </nav>

        </header>