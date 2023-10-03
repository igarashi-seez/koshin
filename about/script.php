<script type="text/javascript">
 //$('.nav-tabs .nav-item .nav-link').attr('class', 'active');
	//$('.nav-item .nav-link').eq(0).addClass('active');
	// $('.tab-pane').eq(0).addClass('active show');
  
		// padStart polyfill for ie11
	if (!String.prototype.padStart) {
		String.prototype.padStart = function padStart(targetLength, padString) {
			targetLength = targetLength >> 0; //truncate if number, or convert non-number to 0;
			padString = String(typeof padString !== 'undefined' ? padString : ' ');
			if (this.length >= targetLength) {
				return String(this);
			} else {
				targetLength = targetLength - this.length;
			if (targetLength > padString.length) {
				padString += padString.repeat(targetLength / padString.length); //append to original to ensure we are longer than needed
			}
			return padString.slice(0, targetLength) + String(this);
			}
		};
	}
	
	$('.section02 .section-inner .container .h3-type04').each(function(index, element) {
			$(element).prepend('<i>' + (index + 1).toString().padStart(2, '0') + '</i>');
	});	
</script>


<script>
$(document).ready(function(){
	(function(){
	    var ans; //1つ前のページが同一ドメインかどうか
	    var bs  = false; //unloadイベントが発生したかどうか
	    var ref = document.referrer;
	    $(window).bind("unload beforeunload",function(){
	        bs = true;
	    });
	    re = new RegExp(location.hostname,"i");
	    if(ref.match(re)){
	        ans = true;
	    }else{
	        ans = false;
	    }
	    $('.historyback').bind("click",function(){
                var that = this;
	        if(ans){
	            history.back();
	            setTimeout(function(){
	                if(!bs){
	                    location.href = $(that).attr("href");
	                }
	            },100);
	        }else{
                    location.href = $(this).attr("href");
                }
	        return false;
	    });
	})();
});
</script>







