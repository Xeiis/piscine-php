$(document).ready(function() {
	$.ajax({
			method: "GET",
			url: "select.php"
		})
		.done(function( msg ) {
			var array = msg.split(';');
			var i = 0;
			var res = '';
			while(array[i])
			{i++;}
			while(i > 0)
			{
				if (i % 2 == 1) {
					array[i] = array[i].replace(/-/g, "<div id=\"todo\" name=\""+array[i-1]+"\" onclick=\"if (confirm('sur?') == true) {remove():suppr("+array[i-1]+")}\" class=\"all\">");
					array[i] = array[i].replace(/\//g, "</div>");
					res += array[i];
				}
				i--;
			}
			var res = res.replace(/:/g, ";");
			$('#ft_list').html(res);
		});
});

function suppr(id){
	$.ajax({
			method: "POST",
			url: "delete.php",
			data: {id: id}
		})
		.done(function (msg) {
			if (msg == 'Done')
				alert('To do supprimer');
		});
}

$('#new').click(function(){
	var person = prompt("Please enter a To do", "");
	var x = $('.all').attr('onclick');
	/([0-9]+)/.exec(x);
	var n = parseInt(RegExp.$1) + 1;
	if (isNaN(n))
		n = 0;
	html = "<div id=\"todo\" onclick=\"if (confirm('sur?') == true) {remove();suppr("+n+")}\" class=\"all\">"+person+"</div>";
	if (person) {
		$('#ft_list').prepend(html);
		person = "-"+person+"/";
		$.ajax({
				method: "POST",
				url: "insert.php",
				data: {id: n, value : person}
			})
			.done(function (msg) {
				if (msg == 'Done')
					alert('Ajout Effectue');
			});
	}
});
