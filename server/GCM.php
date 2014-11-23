<?php
$regID=$_GET['regID'];
$registatoin_ids=array($regID);
$msg=array("message"=>'HI Manish');
$url='https://android.googleapis.com/gcm/send';
$fields=array
 (
  'registration_ids'=>$registatoin_ids,
  'data'=>$msg
 );
$headers=array
 (
  'Authorization: key=insertKeyhere', // you have to insert the key from the developer-console here
  'Content-Type: application/json'
 );
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
$result=curl_exec($ch);
curl_close($ch);
echo $result;
?>
