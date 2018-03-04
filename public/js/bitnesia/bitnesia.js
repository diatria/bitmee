(function(){
	if ($('#scroll-left').data('scroll') == $('#scroll-right').data('scroll')) {
		$('#scroll-left').hide();
		var scroll = $('.store-list-bank').scrollLeft();
		$('#scroll-right').click(function(){
			scroll = scroll + $(this).data('scroll');
			$('.store-list-bank').scrollLeft($('.store-list-bank').scrollLeft() + $(this).data('scroll'));
			if (scroll != $('.store-list-bank').scrollLeft()) {
				$(this).hide();
				$('#scroll-left').show();
				scroll = $('.store-list-bank').scrollLeft();
			}
			console.log('a'+scroll);
			console.log($('.store-list-bank').scrollLeft());
		});

		$('#scroll-left').click(function(){
			scroll = scroll - $(this).data('scroll');
			$('.store-list-bank').scrollLeft($('.store-list-bank').scrollLeft() - $(this).data('scroll'));
			if (scroll != $('.store-list-bank').scrollLeft()) {
				$(this).hide();
				$('#scroll-right').show();
				scroll = $('.store-list-bank').scrollLeft();
			}
			console.log('b'+scroll);
			console.log($('.store-list-bank').scrollLeft());
		});
	} else {
		console.log("%cError (slide-click-js): %cdata attribute 'scroll-left' and 'scroll-right' not same", "color:#F44336", "color:black");
		$('#scroll-left').hide();
		$('#scroll-right').hide();
	}

})();
