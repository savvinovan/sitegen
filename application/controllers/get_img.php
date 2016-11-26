<?
class get_img {
	public $urls;
	function __construct($req) {
		$this->getJSON($req);
	}
    public function getJSON ($req) {
        $data=file_get_contents('https://api.unsplash.com/search/photos?page=1&query='.$req.'&client_id=8cc66c0a3a8f651fec9ad092868115b9b55843b113e78200ed3c94768af95b1a');
        $json=json_decode($data,true);
        $imgArr=array();
        foreach ($json['results'] as $key ) {
        	array_push($imgArr,$key['urls']) ;
        }
        $this->urls=$imgArr;
        return $imgArr;
    }
}