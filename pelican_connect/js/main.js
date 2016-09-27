window.onload = function() 
{

function get_selected_text(elementId) {
    var elt = document.getElementById(elementId);

    if (elt.selectedIndex == -1)
        return null;

    return elt.options[elt.selectedIndex].text;
}

function get_options() 
{
	if(window.XMLHttpRequest) {
		// Code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {
		// Code for IE5 and 6
		xmlhttp = ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange = function() {
			document.getElementById("dropdown").innerHTML = xmlhttp.responseText;
	}

	xmlhttp.open("GET", "get_options.php", true);
	xmlhttp.send();
	// document.getElementById("results").innerHTML = "xmlhttp.responseText";
}

function get_results() 
{
	var selected_school = get_selected_text("dropdown");

	if(window.XMLHttpRequest) {
		// Code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {
		// Code for IE5 and 6
		xmlhttp = ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange = function() {
			document.getElementById("results").innerHTML = xmlhttp.responseText;
	}

	xmlhttp.open("GET", "get_data.php?school=" + selected_school, true);
	xmlhttp.send();
}

get_options();
document.getElementsByClassName("button")[0].onclick = get_results;

} // end of onload