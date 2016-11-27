<?php
class view {
	public $rcount;
	public $dir;
	function __construct ($req){
		$this->get_template($req);
	}
	public function get_template($req) {
		if (strlen($req)>0 && ctype_digit($req)) {
			$dir='../application/templates/template'.$req.'/index.php';
			if (file_exists($dir)) {
				$this->dir=$dir;
			} else {
				$this->rand();
			}
		} 
		else {
			$this->rand();
		}

	}
	private	function rand () {
			$files = preg_grep('/^([^.])/', scandir('../application/templates/'));
			$nc=count($files); 
			$nr=rand(1,$nc);
			$this->rcount=$nr;
			$this->dir='../application/templates/template'.$nr.'/index.php';		
		}
}