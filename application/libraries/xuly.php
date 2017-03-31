<?php 
	/**
	* 
	*/
	class Xuly 
	{	
		//protected $CI;
        // We'll use a constructor, as you can't directly call a function
        // from a property definition.
        public function __construct()
        {
                // Assign the CodeIgniter super-object
               // $this->CI =& get_instance();
        }
		//ham lay link day du cua trang hien tai
		public function fullurl(){
			$ssl = (isset($_SERVER['HTTPS'])&& !empty($_SERVER['HTTPS'])&& $_SERVER['HTTPS']=='ON')?TRUE:FALSE;
			$sp = strtolower($_SERVER['SERVER_PROTOCOL']);
			$protocol = substr($sp, 0, strpos($sp,'/')).(($ssl)?'s':'');
			$port = $_SERVER['SERVER_PORT'];
			$port = ((!$ssl && $port =='80')||($ssl && $port =='443'))?'':':'.$port;
			$host = (isset($use_forwarded_host)&& isset($_SERVER['HTTP_X_FORWARDED_HOST']))? $_SERVER['HTTP_X_FORWARDED_HOST']:( isset( $s['HTTP_HOST'] ) ? $s['HTTP_HOST'] : null );
			$host = isset( $host ) ? $host : $_SERVER['SERVER_NAME'] . $port;
	    	return $protocol . '://' . $host.$_SERVER['REQUEST_URI'];
			}
			public function time($a){
	        $d = getdate(strtotime($a));
	        $hours= $d['hours'];
	        $minutes = $d['minutes'];
	        
	        if ($hours > 12) {
	            $buoi = "PM";
	            $hours = $hours - 12;
	        }elseif ($hours > 12 && $minutes>0) {
	            $buoi = "PM";
	        }
	        else{
	            $buoi = "AM";
	        }
	        if($d['mday']<10){
	            $d['mday'] = '0'.$d['mday'];
	        }
	        if($d['mon']<10){
	            $d['mon'] = '0'.$d['mon'];
	        }
	        if($hours<10){
	            $hours = "0$hours";
	        }
	        if($minutes<10){
	            $minutes = "0$minutes";
	        }
	            return $d['mday'].'/'.$d['mon'].'/'.$d['year'];
	    }
	    public function slug($str){
	    	$str = trim(mb_strtolower($str));
		    $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
		    $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
		    $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
		    $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
		    $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
		    $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
		    $str = preg_replace('/(đ)/', 'd', $str);
		    $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
		    $str = preg_replace('/([\s]+)/', '-', $str);
		    return $str;
	    }
	    public function tenbv($ten){
 	 	$a = $ten;
 	 	if (strlen($ten) > 40) {
			$a= '';
			for ($i=0; $i < 40 ; $i++) { 
				$a = $a . $ten[$i];
			}
			$i = strlen($a);
	 	 	while ($a[strlen($a)-1] != " ") {
	 	 		$a = $a.$ten[$i];
	 	 		$i = $i + 1;
	 	 	}
	 	 	$a = $a."...";
 	 	}
		return $a;
	} 
	    
	}
 ?>