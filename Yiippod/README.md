- Yiippod 1.0
_______________________________________________________________________________________

Flash and HTML5 video player without any logos or copyright on screen. Based on free
version of Uppod player(http://uppod.ru/). Support: FLV, MP4, AVI, MOV, RTMP, HTTP

//Флэш и ХТМЛ5 видео плеер без каких-либо логотипов и копирайтов на экране. Основан на
бесплатной версии Uppod плеера (http://uppod.ru/). Поддерживает: FLV, MP4, AVI, MOV, RTMP, HTTP
_______________________________________________________________________________________

author Alexander Shapovalov <mail@shapovalov.org>

//автор Александр Шаповалов <mail@shapovalov.org>

Usage:

//Использование:

Download and extract in: yii_web_root/protected/extensions

//Скачайте и распакуйте в: yii_корневая_директория/protected/extensions

Add this code in your view:

//Добавьте данный код к Вашему представлению:

<?php  
 
	$this->widget('ext.Yiippod.Yiippod', array(
	'video'=>"http://www.youtube.com/watch?v=qD2olIdUGd8",
	'id' => 'yiippodplayer',
	'width'=>640,
	'height'=>480,
	'bgcolor'=>'#000'
	));

?>

Where: 

'video' => address to media file or video stream,
'id' => player id,
'width' => player width,
'height' => player height,
'bgcolor' => player background color before player loading


//Где: 

'video' => адрес да медиа файла либо потока видео,
'id' => идентификатор плеера,
'width' => ширина плеера,
'height' => высота плеера,
'bgcolor' => задний фон плеера перед его полной загрузкой
