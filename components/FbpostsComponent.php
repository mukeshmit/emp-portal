<?php
namespace app\components;

use yii\base\Component;

class FbpostsComponent extends Component{
	public $content;
	
	public function init(){
		parent::init();
		
		$data  = file_get_contents("https://www.facebook.com/CriticalContent/feed?access_token=YOUR_ACCESS_TOKEN");
		$data = json_decode($data, true);
		$this->content= 'Hello Yii 2.0';
	}
	
	public function display($content=null){
		if($content!=null){
			$this->content= $content;
		}
		echo Html::encode($this->content);
	}
	
}
?>