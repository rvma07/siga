/*
 ADOBE CONFIDENTIAL
 ___________________

 Copyright 2011 Adobe Systems Incorporated
 All Rights Reserved.

 NOTICE:  All information contained herein is, and remains
 the property of Adobe Systems Incorporated and its suppliers,
 if any.  The intellectual and technical concepts contained
 herein are proprietary to Adobe Systems Incorporated and its
 suppliers and may be covered by U.S. and Foreign Patents,
 patents in process, and are protected by trade secret or copyright law.
 Dissemination of this information or reproduction of this material
 is strictly forbidden unless prior written permission is obtained
 from Adobe Systems Incorporated.
*/
(function(a){a.fn.museOverlay=function(b){var c=a.extend({autoOpen:!0,offsetLeft:0,offsetTop:0,$overlaySlice:a(),$overlayWedge:a(),duration:300,overlayExtraWidth:0,overlayExtraHeight:0},b);return this.each(function(){var d=a(this).data("museOverlay");if(d&&d[b]!==void 0)return d[b].apply(this,Array.prototype.slice.call(arguments,1));var e=a("<div></div>").appendTo("body").css({position:"absolute",top:0,left:0,zIndex:100001}).hide(),f=a("<div></div>").append(c.$overlaySlice).appendTo(e).css({position:"absolute",
top:0,left:0}),g=a(this).css({position:"fixed",left:"50%",top:"50%",marginLeft:c.offsetLeft,marginTop:c.offsetTop}).appendTo(e),i="visible",h={isOpen:!1,open:function(){if(!h.isOpen){e.show();f.bind("click",h.close);f.css({opacity:0}).stop(!0);g.css({opacity:0}).stop(!0);f.bind("click",h.close).animate({opacity:0.99},{queue:!1,duration:c.duration,complete:function(){f.css({opacity:""});g.animate({opacity:1},{queue:!1,duration:c.duration,complete:function(){g.css({opacity:""})}})}});a(document).bind("keydown",
h.onKeyDown);i=a("html").css("overflow");a("html").css("overflow","hidden");h.doLayout();h.isOpen=!0;var b=a(window).width(),d=a(window).height(),l=null;a(window).bind("resize",function(){var c=a(window).width(),e=a(window).height();if((b!=c||d!=e)&&l==null)clearTimeout(l),l=setTimeout(function(){h.doLayout();b=a(window).width();d=a(window).height();l=null},10)})}},close:function(){Muse.Utils.refreshIframesAndObjectsToPauseMedia(a(".Container",g));f.unbind("click",h.close);a(window).unbind("resize",
h.doLayout);a(document).unbind("keydown",h.onKeyDown);f.css({opacity:0.99}).stop(!0);g.css({opacity:0.99}).stop(!0);g.animate({opacity:0},{queue:!1,duration:c.duration,complete:function(){f.animate({opacity:0},{queue:!1,duration:c.duration,complete:function(){e.hide();g.css({opacity:""});f.css({opacity:""})}})}});a("html").css("overflow",i);h.isOpen=!1},onKeyDown:function(a){a.keyCode===27&&h.close()},doLayout:function(){e.css({width:0,height:0});c.$overlayWedge.css({width:0,height:0});e.css({width:a(document).width()+
5,height:a(document).height()});c.$overlayWedge.css({width:a(document).width()-c.overlayExtraWidth+5,height:a(document).height()-c.overlayExtraHeight})}};g.data("museOverlay",h);c.autoShow&&h.open()})}})(jQuery);
