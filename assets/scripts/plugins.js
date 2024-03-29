/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
    var doc = w.document;

    if( !doc.querySelector ){ return; }

    var meta = doc.querySelector( "meta[name=viewport]" ),
        initialContent = meta && meta.getAttribute( "content" ),
        disabledZoom = initialContent + ",maximum-scale=1",
        enabledZoom = initialContent + ",maximum-scale=10",
        enabled = true,
    x, y, z, aig;

    if( !meta ){ return; }

    function restoreZoom(){
        meta.setAttribute( "content", enabledZoom );
        enabled = true;
    }

    function disableZoom(){
        meta.setAttribute( "content", disabledZoom );
        enabled = false;
    }
  
    function checkTilt( e ){
    aig = e.accelerationIncludingGravity;
    x = Math.abs( aig.x );
    y = Math.abs( aig.y );
    z = Math.abs( aig.z );
        
    // If portrait orientation and in one of the danger zones
        if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
      if( enabled ){
        disableZoom();
      }         
        }
    else if( !enabled ){
      restoreZoom();
        }
    }
  
    w.addEventListener( "orientationchange", restoreZoom, false );
  w.addEventListener( "devicemotion", checkTilt, false );

})( this );


/*
 * ScaleRaphael 0.8 by Zevan Rosser 2010 
 * For use with Raphael library : www.raphaeljs.com
 * Licensed under the MIT license.
 *
 * www.shapevent.com/scaleraphael/
 */
(function(){
  window.ScaleRaphael = function(container, width, height){
    var wrapper = document.getElementById(container);
    if (!wrapper.style.position) wrapper.style.position = "relative";
    wrapper.style.width = width + "px";
    wrapper.style.height = height + "px";
    wrapper.style.overflow = "hidden";
    
    var nestedWrapper;
      
    if (Raphael.type == "VML"){
      wrapper.innerHTML = "<rvml:group style='position : absolute; width: 1000px; height: 1000px; top: 0px; left: 0px' coordsize='1000,1000' class='rvml' id='vmlgroup'><\/rvml:group>";
      nestedWrapper = document.getElementById("vmlgroup");
    }else{
      wrapper.innerHTML = "<div id='svggroup'><\/div>";
      nestedWrapper = document.getElementById("svggroup");
    }
 
    var paper = new Raphael(nestedWrapper, width, height);
    var vmlDiv;
    
    if (Raphael.type == "SVG"){
      paper.canvas.setAttribute("viewBox", "0 0 "+width+" "+height);
    }else{
      vmlDiv = wrapper.getElementsByTagName("div")[0];
    }
    
    paper.changeSize = function(w, h, center, clipping){
      clipping = !clipping;
      
      var ratioW = w / width;
      var ratioH = h / height;
      var scale = ratioW < ratioH ? ratioW : ratioH;
      
      var newHeight = parseInt(height * scale);
      var newWidth = parseInt(width * scale);
      
      if (Raphael.type == "VML"){
         // scale the textpaths
       var txt = document.getElementsByTagName("textpath");
        for (var i in txt){
          var curr = txt[i];
          if (curr.style){
            if(!curr._fontSize){
              var mod = curr.style.font.split("px");
              curr._fontSize = parseInt(mod[0]);
              curr._font = mod[1];
            }
            curr.style.font = curr._fontSize * scale + "px" + curr._font;
          }
        }
        var newSize; 
        if (newWidth < newHeight){
         newSize = newWidth * 1000 / width;
        }else{
         newSize = newHeight * 1000 / height;
        }
        newSize = parseInt(newSize);
        nestedWrapper.style.width = newSize + "px";
        nestedWrapper.style.height = newSize + "px";
        if (clipping){
          nestedWrapper.style.left = parseInt((w - newWidth) / 2) + "px";
          nestedWrapper.style.top = parseInt((h - newHeight) / 2) + "px";
        }
        vmlDiv.style.overflow = "visible";
      }
      
      if (clipping){
        newWidth = w;
        newHeight = h;
      }
      
      wrapper.style.width = newWidth + "px";
      wrapper.style.height = newHeight + "px";
      paper.setSize(newWidth, newHeight);
      
      if (center){
        wrapper.style.position = "absolute";
        wrapper.style.left = parseInt((w - newWidth) / 2) + "px";
        wrapper.style.top = parseInt((h - newHeight) / 2) + "px";
      }
    }
    
    paper.scaleAll = function(amount){
      paper.changeSize(width * amount, height * amount);
    }
    
    paper.changeSize(width, height);
    
    paper.w = width;
    paper.h = height;
    
    return paper;
  }
})();


/*global jQuery */
/*! 
* FitText.js 1.0
*
* Copyright 2011, Dave Rupert http://daverupert.com
* Released under the WTFPL license 
* http://sam.zoy.org/wtfpl/
*
* Date: Thu May 05 14:23:00 2011 -0600
*/

(function( $ ){
  
  $.fn.fitText = function( kompressor, options ) {
      
      var settings = {
        'minFontSize' : Number.NEGATIVE_INFINITY,
        'maxFontSize' : Number.POSITIVE_INFINITY
      };
  
      return this.each(function(){
        var $this = $(this);              // store the object
        var compressor = kompressor || 1; // set the compressor
        
        if ( options ) { 
          $.extend( settings, options );
        }
        
        // Resizer() resizes items based on the object width divided by the compressor * 10
        var resizer = function () {
          $this.css('font-size', Math.max(Math.min($this.width() / (compressor*10), parseFloat(settings.maxFontSize)), parseFloat(settings.minFontSize)));
        };

        // Call once to set.
        resizer();
        
        // Call on resize. Opera debounces their resize by default. 
        $(window).resize(resizer);
        
      });

  };

})( jQuery );


/* Noise Generator */
(function($) {
	$.fn.extend({
		noisy : function(params) {
			return $.extend({
				noiseMaker : $.extend({
					opacity : .05,
					width : 20,
					amount : 70,
					color: function() {
						return this.caller.css("background-color");
					},
					bringNoise : function() {
						var x, y,
			            	canvas = $("<canvas>", {width: this.width, height:this.width })[0],
			            	ctx = canvas.getContext("2d"),
			            	colorArr = (typeof(this.color) == "function" ?  this.color() : this.color).split(","),
			            	r = colorArr[0].replace("rgb(","").trim(), g = colorArr[1].trim(), b = colorArr[2].replace(")","").trim();
						for (x=0; x<canvas.width; x += 1) {
							for (y=0; y<canvas.height; y += 1) {
								ctx.fillStyle = "rgba(" + [
									Math.floor(Math.random() * r + this.amount), Math.floor(Math.random() * g + this.amount), Math.floor(Math.random() * b + this.amount),
									this.opacity
								].join(",") + ")";
								ctx.fillRect(x, y, 1, 1);
							}
			            }
			            return canvas.toDataURL("image/png");
					},
					go : function(caller) {
						this.caller = caller;
			            var noise = this.bringNoise();
			            return caller.css("background-image", function(i, val) {
			            	return "url("+noise+")" + ", " + val;
			            });
					}
				}, params)
			}).noiseMaker.go(this);
		}
	});
})(jQuery);