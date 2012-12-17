jQuery(document).ready(function(){
	jQuery("#menu a, #menu-rodape a").each(function(){
		var url = jQuery(this).attr("href");
		jQuery(this).attr("rel", url);
		var urlString = url.toString();
		var urlArray = urlString.split("/");
		if (urlArray.pop()==""){
			var campo = urlArray.length-1;
			var urlFinish = urlArray[campo]}
			else {
				var urlFinish = urlArray.pop();
		}
		jQuery(this).attr("href", "#"+urlFinish);
	});

})
jQuery(document).ready(function(){
	jQuery("#menu a, #menu-rodape a").on("click", function(){
		jQuery("#content").text("").addClass("load");
		var link = jQuery(this).attr("rel");
		jQuery("#content").load(link + " #refcontent", function(){
			jQuery("#content").removeClass("load");
			jQuery('#col-1 ul').cycle({ 
				fx:    'fade', 
				speed:  2000
			});	
		});
	});
});