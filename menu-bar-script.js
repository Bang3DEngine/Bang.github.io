function markCurrentPage()
{
	var href = document.location.href;
	var pageName = href.substr(href.lastIndexOf('/') + 1);
	if (pageName == "download.html") { $('#download-button').addClass('active'); }
	else if (pageName == "index.html") { $('#home-button').addClass('active'); }
	else if (pageName == "faq.html") { $('#faq-button').addClass('active'); }
	else if (pageName == "contact.html") { $('#contact-button').addClass('active'); }
	else { $('#home-button').addClass('active'); }
}

$(document).ready(function() 
{ 
	$("#menu-bar").load("menu-bar.html", markCurrentPage);
});
