<?php
header('Access-Control-Allow-Origin: *');
$url = 'http://www.startalkradio.net/?page_id=354'; // replace with the url for your podcast
$rss = simplexml_load_file($url);

$items = $rss->channel->item;


$i = 0;
$data = array();
foreach ($items as $item) {  //loop over elements you want to return
    $data[] = array(
        'title' => (string) $item->title,
        'mp3'   => (string) $item->enclosure['url'],//replace this with the XML elements you want to get
		
    );
	if (++$i == 3) break;// change this to the number of elements you want to get
}




$jsdata = ($_GET['callback'].'('.json_encode($data).');');  //encode the XML into jason and wrap it in the JSONP callback using a GET request


echo htmlspecialchars($jsdata, ENT_NOQUOTES, 'utf-8'); // return JSON wrapped in callback
?>