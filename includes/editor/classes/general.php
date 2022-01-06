<?php 
	
class General{
	function __construct(){
		add_filter('tiny_mce_before_init', array($this, 'fonts'));
		add_filter('mce_buttons_2', array($this, 'tiny_mce_2'));
	}
	
	public function tiny_mce_2($buttons){
		array_unshift($buttons, 'fontselect');
		return $buttons;
	}
	
	public function formats($settings){
		
	}
	
	public function fonts($init){
		if(empty($init['content_css'])){
			 $init['content_css'] = 'https://fonts.googleapis.com/css?family=Cormorant+Garamond';
		}else{
			$init['content_css'] =  $init['content_css'] . ',' . 'https://fonts.googleapis.com/css?family=Cormorant+Garamond';
		}
		
		$init['font_formats'] = 'Andale Mono=andale mono,times;' . 'Arial=arial,helvetica,sans-serif;' . 'Arial Black=arial black,avant garde;' . 'Book Antiqua=book antiqua,palatino;' . 'Comic Sans MS=comic sans ms,sans-serif;'  . 'Cormorant Garamond=Cormorant Garamond;' . 'Courier New=courier new,courier;' . 'Georgia=georgia,palatino;' . 'Helvetica=helvetica;' . 'Impact=impact,chicago;' . 'Symbol=symbol;' . 'Tahoma=tahoma,arial,helvetica,sans-serif;' . 'Terminal=terminal,monaco;' . 'Times New Roman=times new roman,times;' . 'Trebuchet MS=trebuchet ms,geneva;' . 'Verdana=verdana,geneva;' . 'Webdings=webdings;' . 'Wingdings=wingdings,zapf dingbats;';
		
		return $init;
	}
} new General();

