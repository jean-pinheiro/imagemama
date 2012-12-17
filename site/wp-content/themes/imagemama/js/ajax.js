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
			var frame = '<iframe width="293" height="165" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=+&amp;q=r+coronel+linhares,+950+aldeota&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Cel.+Linhares,+950+-+Aldeota,+Fortaleza+-+Cear%C3%A1,+60170-241&amp;ll=-3.742006,-38.495895&amp;spn=0.002907,0.005252&amp;t=m&amp;z=14&amp;output=embed"></iframe>';
			jQuery("#map").append(frame);	
		});
	});
});