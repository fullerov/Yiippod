<?php
/*
 * @author -\- автор  Alexander Shapovalov <mail@shapovalov.org>
 * 
 * usage -\- использование
<?php  
 
$this->widget('ext.Yiippod.Yiippod', array(
'video'=>"http://www.youtube.com/watch?v=qD2olIdUGd8", //or comment this string if you use playlist
'id' => 'yiippodplayer',
'width'=>640,
'height'=>480,
'autoplay'=>true,
'bgcolor'=>'#000'
'view'=>6,
));

?>
 */

class Yiippod extends CWidget
{
	 /** The uppod.swf url -\- Ссылка на .swf файл uppod'а
     * @var string 
     */
    public $swfUrl;
	  /** The media file or stream video URL -\- Адрес медиа файла или потока (RTMP, mov, mp4, flv, avi)
     * The media file must be a string -\- Адрес к файлу\потоку должен иметь строковой тип данных
     *
     * @var string
     */
    public $video;
    /** Player width -\- Ширина плеера
     * @var integer
     */
    public $width;
    /** Player height. -\- Высота плеера
     * @var integer
     */
    public $height;
	 /** Player background color -\- Цвет заднего фона плеера
     * @var string
     */
	public $bgcolor;
	 /** Player view - style (1-6). -\- Стиль плеера от 1 до 6
     * @var integer
     */
	public $view; 
	 /** Player id. -\- Идентификатор ИД плеера
     * @var string
     */
	public $id;
	 /** autopaly  - true \ false
     * @var bool
     */
	public $autoplay;
    /** The js scripts to register  -\- Путь до скрипта uppod'a
     * @var array
     */
    private $js = array(
        'uppod.js'
    );
    /** The asset folder after published  -\- Папка со скриптами после публикации
     * @var string
     */
    private $assets; 
	/** The path to playlist 
     * @var string
     */
	protected $playlist;
    /** 
     * Publishing the assets  -\- Публикация скриптов
     **/
    private function publishAssets() 
    {
        $assets = dirname(__FILE__).DIRECTORY_SEPARATOR."assets".DIRECTORY_SEPARATOR;
        $this->assets = Yii::app()->getAssetManager()->publish($assets);
    }
    /** 
     * Register the core uppod js lib -\- Регистрация скрипта плеера библиотека js
     *
     */
    private function registerScripts()
    {
        $url = $this->publishAssets();

        Yii::app()->clientScript->registerScriptFile($url.'/swfobject.js');
		Yii::app()->clientScript->registerScriptFile($url.'/uppod.js');

    }
    /** 
     * Initialize the widget and necessary properties -\- Инициализация виджета и необходимых свойств
     * 
     */
    public function init()
    {
        $this->publishAssets();
        $this->registerScripts();
		$this->playlist=$this->assets.'/playlist.txt';
        if(!isset($this->width)) $this->width = 320;
		if(!isset($this->height)) $this->height = 240;
		if(!isset($this->bgcolor)) $this->bgcolor = '#FFF';
		if(!isset($this->id)) $this->id = 'yiippodplayer';
		if(!isset($this->autoplay))$this->autoplay=false;
		if(empty($this->view)) $this->view = 6;
        if(!isset($this->swfUrl)) $this->swfUrl = $this->assets."/uppod.swf";
    }
    /** 
     * Render uppod player -\- Отображение плеера
     * 
     */
    public function run()
    {
        	$this->render('yiippod');
    }
}