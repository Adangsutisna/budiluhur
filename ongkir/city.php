<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.rajaongkir.com/starter/city",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "key:eab10ac6566d5e9233eeb37dd6ce88e3"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
  
} else {
   $json = json_decode($response, true);
	
	$data = array();
            foreach($json['rajaongkir']['results'] as $res){
                $data[] = array("id"=>$res['city_id'],"provinsi"=>$res['city_name']);
            }
			echo $data[0]['id']."";
			echo $data[0]['provinsi']."<hr>";
	
for($i=0; $i<count($data); $i++){
	  echo $data[$i]['id']."";
    echo $data[$i]['provinsi']."";
    
    echo "<br/>";
}

 
}
?>