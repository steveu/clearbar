<?php


/*
$config = array(
	'title' => 'Setup your account',
	'buttonTitle' =>  'Register',
	'redirect' => '/thanks/',
	'showShortErrors' => true,
	'dbTable' => 'users',
	'onlyInsert' => true,

	'fieldsets' => array(
		'example' => array(
			'legend' => false,
			'fields' => array(
				'name' => array(
					'type'=>'text', 'label'=>'Name',
					'req'=>true,
				),
				'email' => array(
					'type'=>'text', 'label'=>'Email',
					'req'=>true, 'regex'=>'email',
					'unique' => array(
						'field' => 'email',
						'match' => array(
							'active' => 'Y',
						),
					),
				),
			),
		),
	),
);

$registerForm = new FormBuilder_Database($config, $formDefaults);
$registerForm->autoProcess();

echo $registerForm->build();
*/

$breakdowns = array(
    0 => 'Wireframes / <abbr title="User Experience">UX</abbr>',
    1 => 'Graphic Design',
    2 => 'HTML / CSS',
    3 => 'JavaScript',
    4 => 'PHP',
    5 => 'E-Commerce',
);


$portfolio = array(
    'glassescomplete' => array(
        'title' =>  'Glasses Complete',
        'url' => 'glassescomplete.co.uk',
        'query' => 'glassescomplete',
        'favicon' => 'http://glassescomplete.co.uk/favicon.ico',
        'date'  =>  '2010-12-01',
		'html'  =>  '<p>I was involved throughout this custom E-commerce project; from initial meetings and specification to
					wireframes and architecture, through to singlehandedly developing the entire front end.</p>
					<p>I\' personally very proud of making a complicated buying process as smooth and error free as possible.</p>',
        'break' =>  array(
            0 => 60,
            1 => 10,
            2 => 80,
            3 => 80,
            4 => 100,
            5 => 100,
        ),
    ),
    'spicebox' => array(
        'title' =>  'Rafi&rsquo;s Spicebox',
        'date'  =>  '2010-08-01',
        'desc'  =>  'As well as initial UX work, I designed and developed the
                    e-commerce system and trade only site for this curry mix producer. 
                    Sales have been fantastic!',
        'break' =>  array(
            0 => 60,
            1 => 10,
            2 => 30,
            3 => 30,
            4 => 30,
            5 => 100,
        ),
    ),

	'formclass' => array(
	    'title' =>  'PHP Form Classes',
	    'date'  =>  '2010-10-01',
	    'html'  =>  '<p>I developed a set of PHP5 classes to enable the rapid production of form-based web applications.</p>
					<p><em>Features include&hellip;</em></p>
					<ul>
						<li>Read/Write database scaffolding</li>
						<li>Optional (<em>but sexy</em>) AJAX processing</li>
						<li>Step based session forms</li>
						
						<li>Sensible defaults + powerful config</li>
						<li>Individual field and global error messages</li>
						<li>Payment gateway integration for checkout forms</li>
					</ul>
					<p class="notes">There is a impoverished version of these classes on Github. I\'m working on
					full featured code, but much is heavily integrated with a private codebase.</p>',
		'gist' => '<script src="https://gist.github.com/957913.js?file=gistfile1.php"></script>',
	),
	/*
	'dissertation' => array(
	    'title' =>  'MSc Dissertation',
	    'date'  =>  '2009-9-15',
	    'html'  =>  '<p>As part of my Masters in Human Centred Interactive Technologies I built a custom <abbr title="Virtual Learning Environment">VLE</abbr> and ran an experiment with a real university module to test how the addition of game mechanics would affect student participation and experience.</p>
					<p>I had a lot of fun developing what I believe to be an excellent VLE system, and remain convinced that with tuning the gamification would be of benefit to similar systems.</p> 
					<p>My slides from a 5 minute presentation are shown here, and you can all download my complete dissertation if such things float your boat!</p>
					<a href="steve_urmston_vle_game.pdf" class="btn grey">Download Dissertation<em class="pdf">PDF</em></a>',
		'gist' => '<object id="__sse7852875" width="630" height="500"><param name="movie" value="http://static.slidesharecdn.com/swf/ssplayer2.swf?doc=presentation-110505165534-phpapp01&stripped_title=the-application-of-game-mechanics-to-a-vle&userName=clearbar" /><param name="allowFullScreen" value="true"/><param name="allowScriptAccess" value="always"/><embed name="__sse7852875" src="http://static.slidesharecdn.com/swf/ssplayer2.swf?doc=presentation-110505165534-phpapp01&stripped_title=the-application-of-game-mechanics-to-a-vle&userName=clearbar" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="630" height="500"></embed></object>',
	),
	*/
	
    'arclight' => array(
        'title' =>  'York Arclight',
        'date'  =>  '2008-09-01',
        'desc'  =>  'I designed and developed an innovative JavaScript driven site for a homeless shelter in York.',
        'break' =>  array(
            0 => 100,
            1 => 100,
            2 => 100,
            3 => 100,
            4 => 100,
            5 => 100,
        ),
    ),
    
    
    'selfdirect' => array(
        'title' =>  'Self Direct',
        'date'  =>  '2008-09-01',
        'desc'  =>  'My design and frontend build.',
        'break' =>  array(
            0 => false,
            1 => 100,
            2 => 100,
            3 => 100,
            4 => 50,
            5 => false,
        ),
    ),
    'royle' => array(
        'title' =>  'Royle Recruitment',
        'date'  =>  '2008-07-01',
        'desc'  =>  'I designed and developed the frontend for this York based recruitment agency.',
        'break' =>  array(
            0 => 100,
            1 => 100,
            2 => 100,
            3 => 100,
            4 => 100,
            5 => false,
        ),
    ),
    
    'optical' => array(
        'title' =>  'Optical Marketplace',
        'date'  =>  '2007-01-01',
        'desc'  =>  'I designed this e-commerce marketplace for opticians. I also integrated the payment gateway.',
        'break' =>  array(
            0 => 100,
            1 => 100,
            2 => 30,
            3 => 0,
            4 => 0,
            5 => 30,
        ),
    ),
    'scottroad' => array(
        'title' =>  'Scott Road Medical Centre',
        'date'  =>  '2006-05-01',
        'desc'  =>  'My design and frontend build.',
        'break' =>  array(
            0 => false,
            1 => 100,
            2 => 100,
            3 => 100,
            4 => 20,
            5 => false,
        ),
    ),

);

$bclass = 'portfolio';
require('incs/template/header.php');

?>

<div id="page">
<!--
    <section class="intro grey">
                <h1>

                    This is the portfolio of Steven Urmston

                </h1>
                

            </section>
-->
            <section class="work">

                <?php

                foreach($portfolio AS $key => $details) {
                    echo "\n\t\t\t\t" . '<article class="clearfix">';
                    echo "\n\t\t\t\t\t" . '<div class="meta">';
                    echo "\n\t\t\t\t\t\t" . '<h2>' . $details['title'] . '</h2>';
                    echo "\n\t\t\t\t\t\t" . '<time datetime="' . $details['date'] . '">' . date('F Y', strtotime($details['date'])) . '</time>';
					if (isset($details['desc'])) {
                    	echo "\n\t\t\t\t\t\t" . '<p>' . $details['desc'] . '</p>';
					}
					else if($details['html']) {
						echo "\n\t\t\t\t\t\t" . $details['html'];
					}
                    echo "\n\t\t\t\t\t\t" . '<table class="breakdown">';
                    foreach($details['break'] AS $num => $percent) {
                        if ($percent) {
                            echo "\n\t\t\t\t\t\t\t" . '<tr><th>' . $breakdowns[$num] . ':</th>';
                            echo '<td><span><span class="percent' . $percent . '"></span></span></td></tr>';
                        }
                    }
                    echo "\n\t\t\t\t\t\t" . '</table>';
                    echo "\n\t\t\t\t\t" . '</div>';
					
                    echo '<figure class="' . $details['query'] . '">';
					if (isset($details['gist'])) {
						echo "\n\t\t\t\t\t" . '<div class="gist_block">' . $details['gist'] . '</div>';
					}
					else {
                    	echo "\n\t\t\t\t\t" . '<div class="chrome">';
                        echo '<a class="fullscreen" href="">open</a>';
                        if (isset($details['url'])) {
                            echo '<p class="url">';
                            echo  $details['url'];
                            echo '</p>';
                        }
                        echo '<img src="img/' . $key . '.jpg" />';
                        echo '</div>';
                    }
                    echo '</figure>';
					echo "\n\t\t\t\t" . '</article>';

                }

                ?>
                

               

                
            </section>
</div>
<?php
require('incs/template/footer.php');


