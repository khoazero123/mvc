$(document).ready(function() {
	var loadmore = true;
	var win = $(window);
	// Each time the user scrolls
	win.scroll(function() {
		// End of the document reached?
		if ($(document).height() - win.height() == win.scrollTop()) {
			$('#loading').show();
			var num_post = $('.container div[id^="post-"]').length;
			console.log(num_post);
			if(loadmore===true) {
				$.ajax({
					url: 'index.php?c=home&a=loadmore&start='+num_post,
					dataType: 'html',
					success: function(html) {
						if(html && html.length > 2) {
							console.log('Have data');
							$('#posts').append(html);
							$('#loading').hide();
						} else {
							console.log('No more data');
							loadmore = false;
							$('#loading').html('Đã hết bài viết');
						}
						
					}
				});
			} else {
				//$('#loading').hide();
			}
		}
	});
});