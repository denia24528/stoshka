<?
if(!empty($_POST['phone'])){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'mega.stoshka@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Заказ запчасти'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['phone'].'</p>
						<p>Марка и модель: '.$_POST['model'].'</p>
						<p>Год выпуска: '.$_POST['year'].'</p>
						<p>Объем двигателя: '.$_POST['volume'].'</p>
						<p>Название запчасти: '.$_POST['partName'].'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <email@stoshka.net>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
else{
	alert("Введите Ваш номер телефона, пожалуйста.");
}
?>