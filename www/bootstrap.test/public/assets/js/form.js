$(document).ready(function() {
	$('form').submit(function(event) {
		var json;
		event.preventDefault();
		$.ajax({
			type: $(this).attr('method'),
			url: $(this).attr('action'),
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			success: function(result) {
				json = jQuery.parseJSON(result);
				if (json.url) {
					window.location.href = '/' + json.url;
				} else {
					alert(json.status + ' - ' + json.message);
				}
			},
		});
	});

	// Обработка активации и деактивации таблиц пользователя
	$('a.btn').on('click', function(event) {
		var json;
		event.preventDefault();

		$.ajax({
			type: "POST",
			url: $(this).attr('href'),
			contentType: false,
			cache: false,
			processData: false,
			success: function(result) {
				console.log(result);
				json = jQuery.parseJSON(result);
					if (json.status) {
						alert(json.status + ' - ' + json.message);
				} 	if (json.url) {
						window.location.href = json.url;
				}
			},
		});
	});


	$('a.bind').on('click', function() {
		//var formID = $('.form_js').attr('id');
		// Добавление решётки к имени ID
		//var formNm = $('#' + formID);
		//console.log(formNm);
		$.ajax({
		type: "POST",
		url: 'get.php',
		success: function (data) {
		// Вывод текста результата отправки
		console.log(data);
		//$(formNm).html(data);
		},
		
		});
		return false;
		});



});


