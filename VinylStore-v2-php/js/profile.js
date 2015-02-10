
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
	document.getElementById("personalInformation").removeEventListener("click", loadFormulaire);
	var d = document.getElementById("personalInformation");
	d.onclick = null;
	var mail = document.getElementsByTagName("mail")[0].innerHTML;
	var adresse = document.getElementsByTagName("adresse")[0].innerHTML;
	var code = document.getElementsByTagName("codep")[0].innerHTML;
	var ville = document.getElementsByTagName("ville")[0].innerHTML;

	d.innerHTML = "<div class=\"input-group\">\
	<span class=\"input-group-addon\" id=\"basic-addon1\">@</span>\
	<mail><input type=\"text\" class=\"form-control\" placeholder=\"e-Mail\" aria-describedby=\"basic-addon1\" value=\"" + mail + "\"></mail>\
	</div>\
	<div class=\"input-group\">\
	<span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-map-marker\"></span></span>\
	<adresse><input type=\"text\" class=\"form-control\" placeholder=\"Adresse postale\" aria-describedby=\"basic-addon1\" value=\"" + adresse + "\"></adresse>\
	</div>\
	<div class=\"input-group\">\
	<span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-map-marker\"></span></span>\
	<codep><input type=\"text\" class=\"form-control\" placeholder=\"Code postale\" aria-describedby=\"basic-addon1\" value=\"" + code + "\"></codep>\
	</div>\
	<div class=\"input-group\">\
	<span class=\"input-group-addon\" id=\"basic-addon1\"><span class=\"glyphicon glyphicon-map-marker\"></span></span>\
	<ville><input type=\"text\" class=\"form-control\" placeholder=\"Ville\" aria-describedby=\"basic-addon1\" value=\"" + ville + "\"></ville>\
	</div>\
	<button type=\"button\" class=\"btn btn-default\" onclick=\"saveChange()\">Save</button>";
}

function saveChange() {
	var d = document.getElementById("personalInformation");

	var spanMail = document.getElementsByTagName("mail")[0].previousElementSibling;
	var inputMail = document.getElementsByTagName("mail")[0].getElementsByTagName("input")[0];
	var spanAdresse = document.getElementsByTagName("adresse")[0].previousElementSibling;
	var inputAdresse = document.getElementsByTagName("adresse")[0].getElementsByTagName("input")[0];
	var spanCodep = document.getElementsByTagName("codep")[0].previousElementSibling;
	var inputCodep = document.getElementsByTagName("codep")[0].getElementsByTagName("input")[0];
	var spanVille = document.getElementsByTagName("ville")[0].previousElementSibling;
	var inputVille = document.getElementsByTagName("ville")[0].getElementsByTagName("input")[0];

	var mail = document.getElementsByTagName("mail")[0].getElementsByTagName("input")[0].value;
	var adresse = document.getElementsByTagName("adresse")[0].getElementsByTagName("input")[0].value;
	var codep = document.getElementsByTagName("codep")[0].getElementsByTagName("input")[0].value;
	var ville = document.getElementsByTagName("ville")[0].getElementsByTagName("input")[0].value;

	ajaxRecordDB(mail, adresse, codep, ville);
}

function ajaxRecordDB(mail, adresse, codep, ville) {

    var xhr;
    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    }
    else if (window.ActiveXObject) {
        xhr = new ActiveXObject("Msxml2.XMLHTTP");
    }
    else {
        throw new Error("Ajax is not supported by this browser");
    }
    
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status == 200 && xhr.status < 300) {
            	var obj = JSON.parse(xhr.responseText);
                if (obj.error == 0) {
                	loadPesonalInformation(mail, adresse, codep, ville);
                	document.getElementById("personalInformation").addEventListener("click", loadFormulaire);
                } else {
                	setInputTextError(obj);
                }
            }
        }
    }

    xhr.open('POST', 'profile/SaveProfileInformation.php');
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	var d = "mail="+mail+"&adresse="+adresse+"&codep="+codep+"&ville="+ville;  
	xhr.send(d);
}

function setInputTextError(obj) {
	var spanMail = document.getElementsByTagName("mail")[0].previousElementSibling;
	var spanAdresse = document.getElementsByTagName("adresse")[0].previousElementSibling;
	var spanCodep = document.getElementsByTagName("codep")[0].previousElementSibling;
	var spanVille = document.getElementsByTagName("ville")[0].previousElementSibling;

	if (obj.mail == 1) {
		spanMail.style.backgroundColor="#ea5959";
	}
	if (obj.adresse == 1) {
		spanAdresse.style.backgroundColor="#ea5959";
	}
	if (obj.codep == 1) {
		spanCodep.style.backgroundColor="#ea5959";
	}
	if (obj.ville == 1) {
		spanVille.style.backgroundColor="#ea5959";
	}
}