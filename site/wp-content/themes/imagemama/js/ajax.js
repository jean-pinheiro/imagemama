(function($){
	$(document).ready(function(){
		$("#menu a, #menu-rodape a").on("click", function(p){
			p.preventDefault();
			$("#content").text("").addClass("load");
			var link = $(this).attr("href");
			$("#content").load(link + " #refcontent", function(){
				$("#content").removeClass("load");
				/* Maps */
				var frame = '<iframe width="293" height="165" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=+&amp;q=r+coronel+linhares,+950+aldeota&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Cel.+Linhares,+950+-+Aldeota,+Fortaleza+-+Cear%C3%A1,+60170-241&amp;ll=-3.742006,-38.495895&amp;spn=0.002907,0.005252&amp;t=m&amp;z=14&amp;output=embed"></iframe>';
				$("#map").append(frame);
				/* Banner */
				if ($("#col-1 ul").hasClass('refbanner')) {
					$('#col-1 ul').cycle({ 
						fx:    'fade', 
						speed:  2000
					});
				}
				/* PLUSONE */
				(function() {
			    var po = document.createElement("script"); po.type = "text/javascript";
			    po.src = "https://apis.google.com/js/plusone.js";
			    var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);
			  	})();
			});
		});
	});
})(jQuery);