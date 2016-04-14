var x = getCookie('all');
var res = x.replace(/-/g, "<div id=\"todo\" onclick=\"remove();suppr()\" class=\"all\">");
var res = res.replace(/\//g, "</div>");
$('#ft_list').html(res);

function test()
{
	var all = $('.all');
	var str = "";
	var rechCount = all.length;
	for(i = 0; i < rechCount; i++)	{
		str += "-" +all[i].innerHTML + "/";
	}
	return str;
}

$('#todo').click(function(){
	setCookie('all', test(), 1);
});

$('#new').click(function(){
	var person = prompt("Please enter a To do", "");
	html = "<div id=\"todo\" onclick=\"remove()\" class=\"all\">"+person+"</div>";
	if (person) {
		$('#ft_list').prepend(html);
	}
	setCookie('all', test(), 1);
});

function setCookie(cname, cvalue, exdays) {
	var d = new Date();
	d.setTime(d.getTime() + (exdays*24*60*60*1000));
	var expires = "expires="+d.toUTCString();
	document.cookie = cname + "=" + cvalue + "; " + expires;
}
function getCookie(cname) {
	var name = cname + "=";
	var ca = document.cookie.split(';');
	for(var i=0; i<ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1);
		if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
	}
	return "";
}
