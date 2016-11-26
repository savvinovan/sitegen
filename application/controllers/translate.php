<?
class ytranslate {
	private $ru;
        $data=file_get_contents('https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20161126T153744Z.f9875c0a9f6d2f0b.53742959965ce159ceacfce62767b60365b6aa85&text='.$req.'&lang=ru-en');
        $json=json_decode($data,true);
        $this->ru=$json['text'][0];
    }
}
