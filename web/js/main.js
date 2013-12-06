$(function(){

	var requete = "";
	
	$.ajax({
		beforeSend: function(xhrObj){
			xhrObj.setRequestHeader("Accept","application/json");
        },
		url: "http://82.239.36.10:82/nuitInfo/web/app_dev.php/famille/robe",
		cache : false,
		dataType : "json",
		error : function(request, error) {
			alert("Erreur : responseText: " + request.reponseText);
		},
		success : function(data) {
			for (var i=0;i<data.concepts.length;i++) {
				$("#icones").append("<div class=\"icone\"><img src=\"" + data.concepts[i].url + "\" alt=\"" + data.concepts[i].name + "\"></div>");
			}
		}
	});
		
	$(".icone").draggable();
	
	$("#workarea").droppable({
		drop:function(event, ui){
			var imageAlt = ui.draggable.children("img").attr("alt");
			alert(imageAlt);
			if( requete == "" ) {
				requete += imageAlt;
			}
			else {
				requete += " " + imageAlt;
			}
		}
	});
	
	/*$("#searchbutton").click(function() {
		$.ajax({
			url: "" + requete,
			cache : false,
			dataType : "json",
			error : function(request, error) {
				alert("Erreur : responseText: " + request.reponseText);
			},
			success : function(data) {
				alert("REQUETE REUSSIE");
				alert(data);
			}
		});
	});*/
	
});