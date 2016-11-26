<?
class getImg {
	private $urls;
	function __construct($req) {
		$this->getJSON($req);
	}
    public function getJSON ($req) {
        $data=file_get_contents('https://api.unsplash.com/search/photos?page=1&query='.$req.'&client_id=8cc66c0a3a8f651fec9ad092868115b9b55843b113e78200ed3c94768af95b1a');
        $json=json_decode($data,true);
        $this->urls=$json['results'];
        return $json['results'];
    }
}