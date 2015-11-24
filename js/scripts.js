function scrollNav() {
  $('.nav a').click(function(){
    $('html, body').stop().animate({
        scrollTop: $( $(this).attr('href') ).offset().top - 50
    }, 400);
    return false;
  });
  $('.scrollTop a').scrollTop();
}
scrollNav();

$(document).ready(function(){
			$("#send-mail").submit(function() { //устанавливаем событие отправки для формы с id=form
					var form_data = $(this).serialize(); //собераем все данные из формы
					$.ajax({
					type: "POST", //Метод отправки
					url: "callback.php", //путь до php фаила отправителя
					data: form_data,
					success: function() {
						   alert("Ваше сообщение отпрвлено!");
						   }
					});

			});
		});

		$(document).ready(function(){
			$("#callRequest").submit(function() { //устанавливаем событие отправки для формы с id=form
					var form_data = $(this).serialize(); //собераем все данные из формы
					$.ajax({
					type: "POST", //Метод отправки
					url: "callRequest.php", //путь до php фаила отправителя
					data: form_data,
					success: function() {
						   alert("Ваше сообщение отпрвлено!");
						   }
					});

			});
		});