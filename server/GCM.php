<?php
$regID=$_GET['regID'];
$registatoin_ids=array($regID);
$msg=array("message"=>'{"registration_id": "APA91bHun4MxP5egoKMwt2KZFBaFUHRYqx","data": {"v": "1.0.0","ct": "2013-10-06T09:30:10-02:00","msg": "New operation on Cpt Holidays : 1000"}}');
$url='https://android.googleapis.com/gcm/send';
$fields=array
 (
  'registration_ids'=>$registatoin_ids,
  'data'=>$msg
 );
$headers=array
 (
  'Authorization: key=AIzaSyCSn1oarL6TKt4vfdZn2A-k6aS9-tnGuzc',
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
