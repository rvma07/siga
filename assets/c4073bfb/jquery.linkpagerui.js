;(function($) {
	$.fn.linkPagerUI = function() {
		return this.each(function(){
			var $this = $(this);
			var id = $this.attr('id');
		
			$('#'+id+' > li > a.fg-button:not(.ui-state-disabled)').live('mouseover',
				function(){
					$(this).removeClass('ui-state-default').addClass('ui-state-focus');
					return false;
				}
			);

			$('#'+id+' > li > a.fg-button:not(.ui-state-active)').live('mouseout',
				function() {
					$(this).removeClass('ui-state-focus ui-state-active').addClass('ui-state-default');
					return false;
				}
			);
		});
	};
})(jQuery);
