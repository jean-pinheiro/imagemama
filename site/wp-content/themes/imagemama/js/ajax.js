$(document).ready(function(){
	$("#menu a, #menu-rodape a").each(function(){
		var url = $(this).attr("href");
		$(this).attr("rel", url);
		var urlString = url.toString();
		var urlArray = urlString.split("/");
		if (urlArray.pop()==""){
			var campo = urlArray.length-1;
			var urlFinish = urlArray[campo]}
			else {
				var urlFinish = urlArray.pop();
		}
		$(this).attr("href", "#"+urlFinish);
	});
	var urlf = $("#menu-item-82 a").attr("rel");
	$("#menu-item-82 a").attr("href", urlf);
})
$(document).ready(function(){
	$("#menu a, #menu-rodape a").on("click", function(){
		$("#content").text("").addClass("load");
		var link = $(this).attr("rel");
		$("#content").load(link + " #refcontent", function(){
			$("#content").removeClass("load");	
		});
	});
});