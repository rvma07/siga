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
(function(a){a.fn.museMenu=function(){return this.each(function(){var b=a(),c=!1,d=a(this).find(".MenuItemContainer"),e=a(this).find(".MenuItem");e.bind("mouseenter",function(){c=!0});e.bind("mouseleave",function(){c=!1;setTimeout(function(){c===!1&&(d.each(function(){a(this).data("hideSubmenu")()}),b=a())},300)});e.each(function(){var c=a(this),d=c.siblings(".SubMenu"),e=c.closest(".MenuItemContainer"),i=e.parentsUntil(".MenuBar").filter(".MenuItemContainer").length===0;if(i&&d.length>0){var j=a("<div style='position:absolute' class='MenuBar popup_element'></div>").hide().appendTo("body");
d.show();d.offset();c.offset();d.hide()}e.data("$parentMenuItemContainer",e.parent().closest(".MenuItemContainer")).data("showSubmenuOnly",function(){if(i&&d.length>0){var a=e.offset();j.appendTo("body").css({left:a.left,top:a.top}).append(d).show()}d.show();d.find(".SubMenu").hide()}).data("hideSubmenu",function(){d.hide()}).data("isDescendentOf",function(a){for(var b=e.data("$parentMenuItemContainer");b.length>0;){if(a.index(b)>=0)return!0;b=b.data("$parentMenuItemContainer")}return!1});var k=function(){var c=
b;c.length==0?e.data("showSubmenuOnly")():e.data("$parentMenuItemContainer").index(c)>=0?e.data("showSubmenuOnly")():e.siblings().index(c)>=0?(c.data("hideSubmenu")(),e.data("showSubmenuOnly")()):c.data("isDescendentOf")(e)?e.data("showSubmenuOnly")():c.data("isDescendentOf")(e.siblings(".MenuItemContainer"))?(e.siblings(".MenuItemContainer").each(function(){a(this).data("hideSubmenu")()}),e.data("showSubmenuOnly")()):(c.get(0),e.get(0));b=e},l=null;c.bind("mouseenter",function(){l=setTimeout(function(){k()},
200);c.one("mouseleave",function(){clearTimeout(l)})})})})}})(jQuery);
