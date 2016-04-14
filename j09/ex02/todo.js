var x = getCookie('all');
var res = x.replace(/-/g, "<div id=\"todo\" onclick=\"if (confirm('sur?') == true) {remove();suppr()} else false\" class=\"all\">");
var res = res.replace(/\//g, "</div>");
document.getElementById('ft_list').innerHTML = res;


function test()
{
	var all = document.getElementsByClassName('all');
	var str = "";
	var rechCount = all.length;
	for(i = 0; i < rechCount; i++)	{
		str += "-" +all[i].innerHTML + "/";
	}
	return str;
}

function suppr()
{
	setCookie('all', test(), 1);
}

function AddTodo() {
	var person = prompt("Please enter a To do", "");
	var who = document.createElement('div');
	who.setAttribute("id", "todo");
	who.setAttribute("onclick", "if (confirm('sur?') == true) {remove();suppr()} else false");
	who.setAttribute("class", "all");
	var where = document.getElementById('ft_list');
	who.innerHTML = person;
	if (person) {
		where.insertBefore(who, where.firstChild);
	}
	setCookie('all', test(), 1);
}

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
