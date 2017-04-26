<?php
class Controller {
	function view($viewname,$data_views=array(),$uselayout=true) {
		global $cfg;
		if(!empty($data_views)) {
			foreach ($data_views as $key => $value) {
				$$key=$value;
			}
			unset($data_views);
		}
		if($uselayout) {
			require($cfg['path']['views'].'/header.php');
		}

		require($cfg['path']['views'].'/'.$viewname.'.php');
		if($uselayout) {
			require($cfg['path']['views'].'/footer.php');
		}
	}
}
?>