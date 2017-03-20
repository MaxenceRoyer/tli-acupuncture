<?php
	include_once(dirname( __FILE__ ) . "/../../models/RssItem.php");

	$urlRss = "http://www.allodocteurs.fr/rss.xml"; 
	$rssLoaded = simplexml_load_file($urlRss);

	$arrayRss = array();
	foreach ($rssLoaded->channel->item as $item) {
		$dateTime = date_create($item->pubDate);
		$rssItem = new RssItem(utf8_decode($item->title), $item->link, utf8_decode($item->description), date_format($dateTime, 'd M Y, H\hi'));
		
		array_push($arrayRss, $rssItem);
	}
?>