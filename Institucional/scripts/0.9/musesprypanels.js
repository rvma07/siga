/*
 MuseSpryPanels.js - version 0.6 - Spry Pre-Release 1.7

 Copyright (c) 2010. Adobe Systems Incorporated.
 All rights reserved.

 Redistribution and use in source and binary forms, with or without
 modification, are permitted provided that the following conditions are met:

 Redistributions of source code must retain the above copyright notice,
 this list of conditions and the following disclaimer.
 Redistributions in binary form must reproduce the above copyright notice,
 this list of conditions and the following disclaimer in the documentation
 and/or other materials provided with the distribution.
 Neither the name of Adobe Systems Incorporated nor the names of its
 contributors may be used to endorse or promote products derived from this
 software without specific prior written permission.

 THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
 ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE
 LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
 CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 POSSIBILITY OF SUCH DAMAGE.
*/
(function(){typeof Spry=="undefined"||!Spry.Widget||!Spry.Widget.Base||!Spry.Widget.PanelSet?alert("MuseSpryPanels.js requires MuseSpryCommon.js!"):(Spry.Widget.FadingPanels=function(a,b){var c=this.setOptions(this.setOptions({},Spry.Widget.FadingPanels.config),b);Spry.Widget.PanelSet.call(this,Spry.$$(a),c)},Spry.Widget.FadingPanels.prototype=new Spry.Widget.PanelSet,Spry.Widget.FadingPanels.prototype.constructor=Spry.Widget.FadingPanels,Spry.Widget.FadingPanels.config={defaultPanel:0,minOpacity:0,
maxOpacity:1,minDuration:500,maxDuration:500,stoppedMinDuration:200,stoppedMaxDuration:200,visibleClass:"FadingPanelVisible",hiddenClass:"FadingPanelHidden",autoPlay:!1,displayInterval:4E3,parallelTransition:!0},Spry.Widget.FadingPanels.prototype.initialize=function(){var a=new Spry.Widget.Event(this);this.notifyObservers("onPreInitialize",a);if(a.performDefaultAction){this.disableNotifications();Spry.Widget.PanelSet.prototype.initialize.call(this);for(var b=this.getPanels(),c=this.currentPanel,d=
0;d<b.length;d++){var e=b[d];this.setOpacity(e,e==c?this.maxOpacity:this.minOpacity)}this.enableNotifications();this.notifyObservers("onPostInitialize",a)}},Spry.Widget.FadingPanels.prototype.showPanel=function(a){var b=this.indexToElement(a);if(b&&b!=this.currentPanel){var c=this.createEvent(b,{currentPanel:this.currentPanel});this.notifyObservers("onPreShowPanel",c);if(c.performDefaultAction){this.showEffect&&!this.parallelTransition&&this.showEffect.stop();this.hideEffect&&!this.parallelTransition&&
this.hideEffect.stop();this.isPlaying()&&this.stopTimer();a=this.currentPanel;this.currentPanel=b;var d=this,e=function(){d.currentPanel=b;d.addClassName(b,d.visibleClass);d.removeClassName(b,d.hiddenClass);d.notifyObservers("onPreShowPanelEffect",c);d.showEffect=new Spry.Effect.CSSAnimator(b,"opacity: "+d.maxOpacity,{duration:d.isPlaying()?d.maxDuration:d.stoppedMaxDuration});d.showEffect.addObserver({onAnimationComplete:function(){d.showEffect=null;d.notifyObservers("onPostShowPanelEffect",c);d.isPlaying()&&
d.startTimer()}});d.showEffect.start();d.notifyObservers("onPostShowPanel",c)};a?this.hidePanel(a,e):e()}}},Spry.Widget.FadingPanels.prototype.hidePanel=function(a,b){var c=this.indexToElement(a);if(c){var d=this.createEvent(c);this.notifyObservers("onPreHidePanel",d);if(d.performDefaultAction){this.currentPanel=null;var e=this,f=function(){e.addClassName(c,e.hiddenClass);e.removeClassName(c,e.visibleClass);e.notifyObservers("onPostHidePanel",d);b&&b()};this.notifyObservers("onPreHidePanelEffect",
d);this.hideEffect=new Spry.Effect.CSSAnimator(c,"opacity: "+this.minOpacity,{duration:this.isPlaying()?this.minDuration:this.stoppedMinDuration});this.hideEffect.addObserver({onAnimationComplete:function(){e.hideEffect=null;e.notifyObservers("onPostHidePanelEffect",d);e.parallelTransition||f()}});this.hideEffect.start();this.parallelTransition&&f()}}},Spry.Widget.SliderPanels=function(a,b){this.element=Spry.$$(a)[0];this.currentPage=0;var c=$.map($(this.element).find(".SSSlide"),function(a){return a});
this.hasClassName(c[c.length-1],"wrap")&&c.pop();var d=this.setOptions(this.setOptions({},Spry.Widget.SliderPanels.config),b);Spry.Widget.PanelSet.call(this,c,d)},Spry.Widget.SliderPanels.prototype=new Spry.Widget.PanelSet,Spry.Widget.SliderPanels.prototype.constructor=Spry.Widget.SliderPanels,Spry.Widget.SliderPanels.config={defaultPanel:0,pageIncrement:1,enableAnimation:!0,duration:500,autoPlay:!1,displayInterval:4E3,currentPanelClass:"SliderPanelsCurrentPanel",focusedClass:"SliderPanelsFocused",
animatingClass:"SliderPanelsAnimating"},Spry.Widget.SliderPanels.prototype.initialize=function(){var a=new Spry.Widget.Event(this);this.notifyObservers("onPreInitialize",a);if(a.performDefaultAction){this.defaultPanel=this.indexToElement(this.defaultPanel);this.element.style.overflow="hidden";if(a=this.getSlidingContainer())a.style.overflow="hidden",a.style.top="0",a.style.left="0";for(var a=this.getPanels(),b=0;b<a.length;b++){var c=a[b];this.removeClassName(c,this.currentPanelClass);this.removeClassName(c,
this.SlidingPanelsAnimating);this.removeClassName(c,this.focusedClass)}this.triggerCallbackAfterOnLoad(this.initState,this)}},Spry.Widget.SliderPanels.prototype.initState=function(){this.showPanel(this.defaultPanel);this.autoPlay&&this.play();this.notifyObservers("onPostInitialize",new Spry.Widget.Event(this))},Spry.Widget.SliderPanels.prototype.getSlidingContainer=function(){return this.getElementChildren(this.element)[0]},Spry.Widget.SliderPanels.prototype.getPageIndex=function(a){return Math.floor(this.getPanelIndex(a)/
this.pageIncrement)},Spry.Widget.SliderPanels.prototype.getCurrentPageIndex=function(){return this.currentPage},Spry.Widget.SliderPanels.prototype.getPageCount=function(){return Math.floor((this.getPanels().length+this.pageIncrement)/this.pageIncrement)},Spry.Widget.SliderPanels.prototype.scrollToPage=function(a){var b=this.indexToElement(a*this.pageIncrement);if(b){var c=this.getSlidingContainer(),d=-b.offsetTop,e=-b.offsetLeft;if(this.enableAnimation){var f=this;this.addClassName(this.element,this.animatingClass);
b=new Spry.Effect.CSSAnimator(c,"top: "+d+"px; left: "+e+"px;",{duration:this.duration});b.addObserver({onAnimationComplete:function(){f.removeClassName(f.element,f.animatingClass)}});b.start()}else c.style.top=b.offsetTop+"px",c.style.left=b.offsetLeft+"px";this.currentPage=a}},Spry.Widget.SliderPanels.prototype.previousPage=function(){var a=this.getCurrentPageIndex();this.scrollToPage((a<1?this.getPageCount():a)-1)},Spry.Widget.SliderPanels.prototype.nextPage=function(){this.scrollToPage((this.getCurrentPageIndex()+
1)%this.getPageCount())},Spry.Widget.SliderPanels.prototype.firstPage=function(){this.scrollToPage(0)},Spry.Widget.SliderPanels.prototype.lastPage=function(){var a=this.getPageCount();this.scrollToPage(a>0?a-1:0)},Spry.Widget.SliderPanels.prototype.showPanel=function(a){if((a=this.indexToElement(a))&&a!=this.currentPanel){var b=this.createEvent(a,{currentPanel:this.currentPanel});this.notifyObservers("onPreShowPanel",b);if(b.performDefaultAction){this.removeClassName(this.currentPanel,this.currentPanelClass);
this.addClassName(a,this.currentPanelClass);this.scrollToPage(this.getPageIndex(a));var c=this.currentPanel;this.currentPanel=a;this.notifyObservers("onPostShowPanel",b);this.hidePanel(c)}}},Spry.Widget.SliderPanels.prototype.hidePanel=function(a){(a=this.indexToElement(a))&&a!=this.currentPanel&&this.notifyObservers("onPostHidePanel",this.createEvent(a,{currentPanel:this.currentPanel}))})})();
