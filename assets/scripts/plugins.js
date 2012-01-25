/*
 * jQuery Reveal Plugin 1.0
 * www.ZURB.com
 * Copyright 2010, ZURB
 * Free to use under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
*/


(function($) {

/*---------------------------
 Defaults for Reveal
----------------------------*/
   
/*---------------------------
 Listener for data-reveal-id attributes
----------------------------*/

  $('a[data-reveal-id]').live('click', function(e) {
    e.preventDefault();
    var modalLocation = $(this).attr('data-reveal-id');
    $('#'+modalLocation).reveal($(this).data());
  });

/*---------------------------
 Extend and Execute
----------------------------*/

    $.fn.reveal = function(options) {
        
        
        var defaults = {  
        animation: 'fadeAndPop', //fade, fadeAndPop, none
        animationspeed: 300, //how fast animtions are
        closeonbackgroundclick: true, //if you click background will modal close?
        dismissmodalclass: 'close-reveal-modal' //the class of a button or element that will close an open modal
      }; 
      
        //Extend dem' options
        var options = $.extend({}, defaults, options); 
  
        return this.each(function() {
        
/*---------------------------
 Global Variables
----------------------------*/
          var modal = $(this),
            topMeasure  = parseInt(modal.css('top')),
        topOffset = modal.height() + topMeasure,
              locked = false,
        modalBG = $('.reveal-modal-bg');

/*---------------------------
 Create Modal BG
----------------------------*/
      if(modalBG.length == 0) {
        modalBG = $('<div class="reveal-modal-bg" />').insertAfter(modal);
      }       
     
/*---------------------------
 Open & Close Animations
----------------------------*/
      //Entrance Animations
      modal.bind('reveal:open', function () {
        modalBG.unbind('click.modalEvent');
        $('.' + options.dismissmodalclass).unbind('click.modalEvent');
        if(!locked) {
          lockModal();
          if(options.animation == "fadeAndPop") {
            modal.css({'top': $(document).scrollTop()-topOffset, 'opacity' : 0, 'visibility' : 'visible'});
            modalBG.fadeIn(options.animationspeed/2);
            modal.delay(options.animationspeed/2).animate({
              "top": $(document).scrollTop()+topMeasure + 'px',
              "opacity" : 1
            }, options.animationspeed,unlockModal());         
          }
          if(options.animation == "fade") {
            modal.css({'opacity' : 0, 'visibility' : 'visible', 'top': $(document).scrollTop()+topMeasure});
            modalBG.fadeIn(options.animationspeed/2);
            modal.delay(options.animationspeed/2).animate({
              "opacity" : 1
            }, options.animationspeed,unlockModal());         
          } 
          if(options.animation == "none") {
            modal.css({'visibility' : 'visible', 'top':$(document).scrollTop()+topMeasure});
            modalBG.css({"display":"block"}); 
            unlockModal()       
          }
        }
        modal.unbind('reveal:open');
      });   

      //Closing Animation
      modal.bind('reveal:close', function () {
        if(!locked) {
          lockModal();
          if(options.animation == "fadeAndPop") {
            modalBG.delay(options.animationspeed).fadeOut(options.animationspeed);
            modal.animate({
              "top":  $(document).scrollTop()-topOffset + 'px',
              "opacity" : 0
            }, options.animationspeed/2, function() {
              modal.css({'top':topMeasure, 'opacity' : 1, 'visibility' : 'hidden'});
              unlockModal();
            });         
          }   
          if(options.animation == "fade") {
            modalBG.delay(options.animationspeed).fadeOut(options.animationspeed);
            modal.animate({
              "opacity" : 0
            }, options.animationspeed, function() {
              modal.css({'opacity' : 1, 'visibility' : 'hidden', 'top' : topMeasure});
              unlockModal();
            });         
          }   
          if(options.animation == "none") {
            modal.css({'visibility' : 'hidden', 'top' : topMeasure});
            modalBG.css({'display' : 'none'});  
          }   
        }
        modal.unbind('reveal:close');
      });     
    
/*---------------------------
 Open and add Closing Listeners
----------------------------*/
          //Open Modal Immediately
      modal.trigger('reveal:open')
      
      //Close Modal Listeners
      var closeButton = $('.' + options.dismissmodalclass).bind('click.modalEvent', function () {
        modal.trigger('reveal:close')
      });
      
      if(options.closeonbackgroundclick) {
        modalBG.css({"cursor":"pointer"})
        modalBG.bind('click.modalEvent', function () {
          modal.trigger('reveal:close')
        });
      }
      $('body').keyup(function(e) {
            if(e.which===27){ modal.trigger('reveal:close'); } // 27 is the keycode for the Escape key
      });
      
      
/*---------------------------
 Animations Locks
----------------------------*/
      function unlockModal() { 
        locked = false;
      }
      function lockModal() {
        locked = true;
      } 
      
        });//each call
    }//orbit plugin call
})(jQuery);
        


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