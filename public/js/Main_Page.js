
$(document).ready(function(){
    $("#Notifications").click(function(){
		if($('#notifications-container').css('display') == 'none'){
        $("#notifications-container").css('display','block');
		}
		else{
			$("#notifications-container").css('display','none');
		}
    });
	
	$(".comment_button").click(function(){
		if($('#comments_section').css('display') == 'none'){
        $("#comments_section").css('display','block');
		}
		else{
			$("#comments_section").css('display','none');
		}
	});
    
	
	(function() {
  var cx = '017643444788069204610:4gvhea_mvga'; // Insert your own Custom Search Engine ID here
  var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
  gcse.src = (document.location.protocol == 'https' ? 'https:' : 'http:') +
      '//www.google.com/cse/cse.js?cx=' + cx;
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
})();
});