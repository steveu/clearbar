        	<footer id="bottom">

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
                            yepnope('/incs/js/libs/jquery-1.6.4.min.js');
                        }
                    }
                },
				{
                    //  Raphael
                    load: [
						'/incs/js/libs/raphael.js'
						
					]
                },
                {
                    //  Get all other local scripts
                    load: ['/incs/js/plugins.js', '/incs/js/master.js']
                }

            ]);
        </script>
    </body>
</html>