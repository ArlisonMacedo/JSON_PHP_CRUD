<?php




// JSON POST

// $tool = [
//   "title" => "PHP",
//   "link" => "www.linknet.php.com",
//   "description" => "The best",
//   "tags" => [
//     "PHP",
//     "Laravel",
//     "Zend"
//   ]
// ];


// $request = json_encode($tool);
// $ch = curl_init($url);
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST ,"POST");
// curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//   'Content-Type: application/json',
//   'Content-length' . strlen($request)
// ));




// echo "<pre>";

// JSON GET

// $ch = curl_init($url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $json = json_decode(curl_exec($ch));
// curl_close($ch);


// foreach($json as $tool){
//   echo $tool->id . PHP_EOL ;
//   echo $tool->title . PHP_EOL;
//   echo $tool->link . PHP_EOL;
//   echo $tool->description . PHP_EOL;
//   foreach($tool->tags as $tag){
//     echo $tag . PHP_EOL;
//   }

//   echo PHP_EOL;
// }

// JSON DELETE

// $id = 14;

// $url = "http://localhost:3333/tools/{$id}";

// $request = json_encode($id);
// $ch = curl_init($url);
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
// curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $response = curl_exec($ch);
// curl_close($ch);

// echo "<pre>";
// print_r($response);

// JSON QUERY GET 

// $tags = "PHP";

// $url = "http://localhost:3333/tools?tag={$tags}";
// // var_dump($url);

// $request = json_encode($tags);
// $ch = curl_init($url);
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
// curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $response = curl_exec($ch);
// curl_close($ch);

// echo "<pre>";
// print_r($response);