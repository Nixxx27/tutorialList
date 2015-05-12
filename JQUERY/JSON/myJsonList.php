<?php
//header("content-type: text/xml");// trick the browser that it is a xml file not php
header("content-type: application/json");// trick the browser and the target application that it is a json file not php
$john = "nikkodeep";
/*$jsonData='{
  "u1": { "user": "'.$john.'", "age":22, "country":"united states"},
  "u2": { "user": "Peter", "age":23, "country":"Philippines"},
  "u3": { "user": "Moses", "age":24, "country":"Iran"}

}';*/

$jsonData = file_get_contents("myList.json");

echo $jsonData;
?>