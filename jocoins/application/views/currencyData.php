<?php

$ETH=file_get_contents('https://api.coinmarketcap.com/v1/ticker/?limit=10');

$urlETH="https://api.coinmarketcap.com/v1/ticker/?limit=10";

$fgcETH=file_get_contents($urlETH);
$json=json_encode($fgcETH);


 
/*
{
    "id": "bitcoin",
		"name": "Bitcoin",
		"symbol": "BTC",
		"rank": "1",
		"price_usd": "573.137",
		"price_btc": "1.0",
		"24h_volume_usd": "72855700.0",
		"market_cap_usd": "9080883500.0",
		"available_supply": "15844176.0",
		"total_supply": "15844176.0",
		"percent_change_1h": "0.04",
		"percent_change_24h": "-0.3",
		"percent_change_7d": "-0.57",
		"last_updated": "1472762067"
	},

*/

$url ="https://www.bitstamp.net/api/ticker/";
$fgc=file_get_contents($url);
$json=json_decode($fgc,true);

$price=$json["last"];

$high=$json["high"];
$low=$json["low"];
//$date=$json["m-d-Y - h:i:sa"];
$open=$json["open"];


if($open < $price){

    $indicator = "+";
    $change= $price - $open;
    $percent= $change / $open;
    $percent = $percent * 100;
    $percentChange= $indicator. number_format($percent,2);
    $color="green";
}


if($open > $price){

    $indicator = "-";
    $change= $open - $price;
    $percent= $change / $open;
    $percent = $percent * 100;
    $percentChange= $indicator. number_format($percent,2);
    $color="red";
}

$data= <<<EOT
<div class="row main-center">

         <div class="row">
         <h3>Bitcoin</h3>
<h4>Price: $$price</h4>
</div>
<div class="row">
 <h4>Percent change:  $percentChange%</h4>
</div>
<div class="row">
   <h4> High: $$high</h4>
</div>

<div class="row">
    <h4>Low: $$low</h4>
</div>

 


</div>
EOT;
echo $data;
?>