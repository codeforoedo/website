var gmapContentHtml = '<div id="mapbox">';
	gmapContentHtml += '<h4><a href="http://www.vacancy.jp/" target="_blank">VACANCY OFFICE GOTANDA</a></h4>' +
	'<table>' +
		'<tr>' +
			'<th>OPENING HOURS' +
			'<td>月-金 : 9:30-21:30<br>土日祝 : 適宜 (10:30-18:00)' +
		'</tr>' +
		'<tr>' +
			'<th>ADDRESS' +
			'<td>〒141-0032<br>東京都品川区大崎 4-1-7 1F-2F' +
		'</tr>' +
		'<tr>' +
			'<th>TEL' +
			'<td>080-7000-0129' +
		'</tr>' +
		'<tr>' +
			'<th>HP' +
			'<td><a href="http://www.vacancy.jp/" target="_blank">http://www.vacancy.jp/</a>' +
		'</tr>' +
	'</table>' +
'</div>';

$(function() {
//	$key = $('#key');
//	$key.find('img').css({opacity:'0'});
//	$('#key img:first').stop().animate({opacity:'1',zIndex:'20'},1000);

//	setInterval(function(){
//		$('#key img:first').animate({opacity:'0'}, 1000).next('img').animate({opacity:'1'}, 1000).end().appendTo($key);
//	}, 5000);

	$('.gmap-area').gmap3({
		latitude: 35.6241,
		longitude: 139.7227,
		zoom: 17,
		navigationControl: true,
		mapTypeControl: true,
		scaleControl: true,
		scrollwheel: false,
		draggable: false,
		markers: [
			{
			latitude: 35.622177,
			longitude: 139.722711,
			title: "VACANCY OFFICE GOTANDA",
			content: gmapContentHtml,
			openInfo: true
			}
		]
	});
	$('a[href^=#]').on('click', function(){
		var speed = 500;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;
		$("html, body").animate({scrollTop:position}, speed, "swing");
		return false;
	});
});