$(document).ready(function() {
	$("#logo").click(function() {
		window.location.href = "index.php";
	});

	$('#slides').slides({
		preload: true,
		preloadImage: 'images/loading.gif',
		play: 5000,
		pause: 2500,
		hoverPause: true,
		pagination: false,
		generatePagination: false
	});
	
	$("#tbMenu img").hover(
		function() {
			var s = $(this).attr("src");
			s = s.replace('.', '_over.');
			$(this).attr("src", s);
		},
		function() {
			var s = $(this).attr("src");
			s = s.replace('_over.', '.');
			$(this).attr("src", s);
		}
	);
});

function hideNewsletterMsg() {
	$("#action").css('display', 'none');
}

function howto() {
    $("#localizationTitle").html("Como chegar");
	$('#howto').css("display", "block");
	$('#map').css("display", "none");
}

function showmap() {
    $("#localizationTitle").html("Mapa do Consult&oacute;rio AudioClick");
	$('#howto').css("display", "none");
	$('#map').css("display", "block");
}

function openInfo(o) {
	$('#pub').css("display", "none");
	$('#art').css("display", "none");
	$('#mov').css("display", "none");
	$('#' + o).css("display", "block");    
}