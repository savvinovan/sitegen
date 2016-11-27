<?php
class get_img {
	public $urls;
	function __construct($req) {
		$this->getJSON($req);
	}
    public function getJSON ($req) {
        $client_id = array('8cc66c0a3a8f651fec9ad092868115b9b55843b113e78200ed3c94768af95b1a', '15a571d684e293a1d54d5672ecc471a3c00b2dc64930a10349ce1c7ede8ad7a2','5bb71cc5b196c85792ce6497fcb6b45e734cedc08c5d4fef84539ece6d500e8e','100278ec06d0d6d09bd7294c00c274ee44a1dfe4e689d91aaa486512c4d937c5','5bded42a6dac9443aa69245361de9bd1191a8436ec32ec76014f1f9a0c8c4526');
        $i=rand(1,4);
        $data=file_get_contents('https://api.unsplash.com/search/photos?page=1&query='.$req.'&client_id='.$client_id[$i]);
        $json=json_decode($data,true);
        $imgArr=array();
        foreach ($json['results'] as $key ) {
        	array_push($imgArr,$key['urls']) ;
        }
        $this->urls=$imgArr;
        return $imgArr;
    }
}