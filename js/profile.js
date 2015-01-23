window.onload = function() {
    loadPesonalInformation("mimi62500@free.fr", "5 avenue Patis", 62500, "Cognac");
};

function loadPesonalInformation(mail, adress, code, ville) {
	var d = document.getElementById("personalInformation");
	d.innerHTML = "<h4>\
						Mail: <mail>" + mail + "</mail></br>\
						Adress: <adresse>" + adress + "</adresse><br>\
						Code: <codep>" + code + "</codep><br>\
						Ville: <ville>" + ville + "</ville>\
				</h4>"
}

function loadFormulaire() {
	var d = document.getElementById("personalInformation");
	d.onclick = null;
	var mail = document.getElementsByTagName("mail")[0];	

	d.innerHTML = "<div class=\"input-group\">\
					  <span class=\"input-group-addon\" id=\"basic-addon1\">@</span>\
					  <input type=\"text\" class=\"form-control\" placeholder=\"e-Mail\" aria-describedby=\"basic-addon1\" text=\"" + mail + "\">\
					</div>\
					<div class=\"input-group\">\
					  <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-map-marker\"></span></span>\
					  <input type=\"text\" class=\"form-control\" placeholder=\"Adresse postale\" aria-describedby=\"basic-addon1\">\
					</div>\
					<div class=\"input-group\">\
					  <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-map-marker\"></span></span>\
					  <input type=\"text\" class=\"form-control\" placeholder=\"Code postale\" aria-describedby=\"basic-addon1\">\
					</div>\
					<div class=\"input-group\">\
					  <span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-map-marker\"></span></span>\
					  <input type=\"text\" class=\"form-control\" placeholder=\"Ville\" aria-describedby=\"basic-addon1\">\
					</div>\
					<button type=\"button\" class=\"btn btn-default\">Save</button>";
}