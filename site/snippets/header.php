<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>

    <meta name="description" content="<?= ($page->description()) ? html($page->description()) : html($site->description()) ?>" />
    <meta name="author" content="<?= $site->author() ?>">

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="icon shortcut" href="/favicon.ico" type="image/vnd.microsoft.com" />
    
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