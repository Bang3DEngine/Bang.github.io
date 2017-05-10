function markCurrentPage()
{
	var href = document.location.href;
	var pageName = href.substr(href.lastIndexOf('/') + 1);
	if (pageName == "index.html") { $('#homeButton').addClass('active'); }
	else if (pageName == "download.html") { $('#downloadButton').addClass('active'); }
	else if (pageName == "Bang") { $('#repoButton').addClass('active'); }
	else if (pageName == "faq.html") { $('#faqButton').addClass('active'); }
	else if (pageName == "contact.html") { $('#contactButton').addClass('active'); }
}

$(document).ready(function() 
{ 
	$("#menuBar").load("menuBar.html", markCurrentPage);
});
