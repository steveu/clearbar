        	<footer id="bottom">
                
                <p class="copyright">
                    
                    <a class="cc" rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc/3.0/88x31.png" /></a>
                </p>

                <p class="contact">
                    <a href="">Should we talk?</a>
                    
                </p>

			</footer>

		</div>
		
		
		<script>
            yepnope([
                {
                    //  Get jQuery from Google CDN
                    load: 'http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js',
                    complete: function () {
                        //  If the CDN loading failed, load a local fallback
                        if (!window.jQuery) {
                            yepnope('/assets/scripts/libs/jquery-1.6.4.min.js');
                        }
                    }
                },
				{
                    //  Raphael
                    load: [
						'/assets/scripts/libs/raphael.js'
					]
                },
                {
                    //  Get all other local scripts
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