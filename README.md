- Yiippod 1.2
____________________________________________________________________________________

Flash and HTML5 video player without any copyright on screen. Playlists support. Few styles. Based on free
version of Uppod player(http://uppod.ru/). Support: FLV, MP4, AVI, MOV, RTMP, HTTP

//Флэш и ХТМЛ5 видео плеер без каких-либо копирайтов на экране. Поддержка плейлистов. Несколько стилей. Основан на
бесплатной версии Uppod плеера (http://uppod.ru/). Поддерживает: FLV, MP4, AVI, MOV, RTMP, HTTP
____________________________________________________________________________________

New in 1.2 version:
- Autostart as option

//Новое в версии 1.2:
- Возможность автозапуска

New in 1.1 version:

- Add playlists support
- Add six styles
- Support Open Source Media Framework, and Open Source Media Framework with HLS

//Новое в версии 1.1:
- Добавлена поддержка плейлистов
- Добавлены шесть стилей
- Поддержка Open Source Media Framework, и Open Source Media Framework with HLS

Usage:
Download and extract in: yii_web_root/protected/extensions

//Использование:
Скачайте и распакуйте в: yii_корневая_директория/protected/extensions

Add this code in your view:

//Добавьте данный код к Вашему представлению:

<?php  
 
	$this->widget('ext.Yiippod.Yiippod', array(
	'video'=>"http://www.youtube.com/watch?v=qD2olIdUGd8", //if you don't use playlist
	//'video'=>"http://www.youtube.com/watch?v=qD2olIdUGd8", //if you use playlist
	'id' => 'yiippodplayer',
	'autoplay'=>true,
	'width'=>640,
	'view'=>6, 
	'height'=>480,
	'bgcolor'=>'#000'
	));

?>

Where: 

'video' => address to media file or video stream,
'id' => player id,
'width' => player width,
'height' => player height,
'autoplay'=> autostrat (true/false),
'bgcolor' => player background color before player loading
'view'=> player styles integer form 1 to 6

//Где: 

'video' => адрес да медиа файла либо потока видео,
'id' => идентификатор плеера,
'width' => ширина плеера,
'height' => высота плеера,
'autoplay'=> автопроигрывание (true/false),
'bgcolor' => задний фон плеера перед его полной загрузкой
'view'=> стиль плеера целочисленные значения от 1 до 6


Open Source Media Framework:
If you want to use version with Open Source Media Framework or Open Source Media Framework with HLS 
please rename ext/Yiippod/assets/uppod-osmf.swf to ext/Yiippod/assets/uppod.swf or ext/Yiippod/assets/uppod-osmfhls.swf to ext/Yiippod/assets/uppod.swf

//Open Source Media Framework:
Если Вы хотите использовать версию с Open Source Media Framework или Open Source Media Framework и HLS 
пожалуйста переименуйте ext/Yiippod/assets/uppod-osmf.swf в ext/Yiippod/assets/uppod.swf либо ext/Yiippod/assets/uppod-osmfhls.swf в ext/Yiippod/assets/uppod.swf

Playlist usage:
If you want to add few video files in player, please edit this file: ext/Yiippod/assets/playlist.txt

{"playlist":[
{"comment":"First_file_or_stream_name","file":"URL_to_first_file_or_stream","poster":"some_img1.jpg"},
{"comment":"Second_file_or_stream_name","file":"URL_to_second_file_or_stream","poster":"some_img2.jpg"} ...
 
]}
And then you must delete 'video'=>"", or comment it in your view:

<?php  

$this->widget('ext.Yiippod.Yiippod', array(
	'id' => 'yiippodplayer',
	'width'=>640,
	'view'=>6, 
	'autoplay'=>true,
	'height'=>480,
	'bgcolor'=>'#000'
	));
	
?>

//Использование плейлистов:
Если Вы хотите добавить несколько видео в плеер, пожалуйста оредактируйте файл: ext/Yiippod/assets/playlist.txt

{"playlist":[
{"comment":"First_file_or_stream_name","file":"URL_to_first_file_or_stream","poster":"some_img1.jpg"},
{"comment":"Second_file_or_stream_name","file":"URL_to_second_file_or_stream","poster":"some_img2.jpg"} ...
 
]}

И затем вы должны удалить 'video'=>"", или закомментировать его в представлении:

<?php  

$this->widget('ext.Yiippod.Yiippod', array(
	'id' => 'yiippodplayer',
	'width'=>640,
	'view'=>6, 
	'autoplay'=>true,
	'height'=>480,
	'bgcolor'=>'#000'
	));
	
?>



author Alexander Shapovalov <mail@shapovalov.org>

//автор Александр Шаповалов <mail@shapovalov.org>
