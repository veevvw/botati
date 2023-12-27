<?php

error_reporting(0);
ob_start();
header("Content-Type: application/json; charset=UTF-8");
ob_start();
date_default_timezone_set('Asia/Baghdad');

$INFOBOTS = json_decode(file_get_contents("XZNTOKK/INFOBOTS_BERO.json"), true);
$_SERVER['SERVER_NAME'] = 'dev-ser-o.pantheonsite.io';
$API_KEY = explode("___", $_GET["ME"])[0];
define('API_KEY', $API_KEY);
define("IDBot", explode(":", $API_KEY)[0]);

// Separate the explode calls for better readability
$explodedAPI = explode("___", $_GET["ME"]);
if ($explodedAPI[0] && $explodedAPI[1]) {
    $IDBot = explode(":", $explodedAPI[0])[0];
    $INFOBOTS["INFO_FOR"][$IDBot]["HASH"] = explode(":", $explodedAPI[0])[1];
    $INFOBOTS["INFO_FOR"][$IDBot]["SET_MY_ID"] = $explodedAPI[1];
    $INFOBOTS["INFO_FOR"][$IDBot]["REMOTE"] = $explodedAPI[2];
    file_put_contents("XZNTOKK/INFOBOTS_BERO.json", json_encode($INFOBOTS, 32 | 128 | 265));
    echo file_get_contents("https://api.telegram.org/bot" . $API_KEY . "/setwebhook?url=dev-ser-o.pantheonsite.io" . $_SERVER['SCRIPT_NAME'] . "?ME=" . $explodedAPI[0] . "___" . $explodedAPI[1] . "___" . $explodedAPI[2]);
}


function encrypt($data, $key, $iv) {
  $cipher = "aes-256-cbc";
  $options = 0;

  $encrypted = openssl_encrypt($data, $cipher, $key, $options, $iv);

  return base64_encode($iv . $encrypted);
}

function decrypt($data, $key) {
  $cipher = "aes-256-cbc";
  $options = 0;

  $data = base64_decode($data);
  $iv = substr($data, 0, 16);
  $data = substr($data, 16); 

  $decrypted = openssl_decrypt($data, $cipher, $key, $options, $iv);

  return $decrypted;
}

function bot($method, $datas=[]){
$Saied_Botate = "https://api.telegram.org/bot".API_KEY."/".$method;
$saied_botate = null;
if(!empty($datas)){
$boundary = uniqid();
$saied_botate = buildMultipartData($datas,$boundary);
$Saied = ['http'=>[
'header'=>"Content-Type: multipart/form-data; boundary=$boundary\r\n",
'method'=>'POST',
'content'=>$saied_botate,
],];
}
if($saied_botate !== null){
$saied = stream_context_create($Saied);
$saied_result = file_get_contents($Saied_Botate, false, $saied);
}else{
$saied_result = file_get_contents($Saied_Botate);
}
if($saied_result === false){
return "Error: ".error_get_last()['message'];
}else{
return json_decode($saied_result);
}
}
// فكشن الاتصال كتابة { @LSaied }
// تابع جديدنا { @Botate }
function buildMultipartData($data,$boundary){
$SaiedData = '';
foreach($data as $key => $value){
if($value instanceof CURLFile){
$fileContents = file_get_contents($value->getFilename());
$fileName = basename($value->getFilename());
$fileMimeType = $value->getMimeType();
$SaiedData .= "--" . $boundary . "\r\n";
$SaiedData .= 'Content-Disposition: form-data; name="' . $key . '"; filename="' . $fileName . '"' . "\r\n";
$SaiedData .= 'Content-Type: ' . $fileMimeType . "\r\n\r\n";
$SaiedData .= $fileContents . "\r\n";
}else{
$SaiedData .= "--" . $boundary . "\r\n";
$SaiedData .= 'Content-Disposition: form-data; name="' . $key . '"' . "\r\n\r\n";
$SaiedData .= $value . "\r\n";
}
}
$SaiedData .= "--" . $boundary . "--\r\n";
return $SaiedData;
}





$usrbot = bot("getme")->result->username;
define("USR_BOT",$usrbot); #يابه لحد يلعب بهاذه
$emoji = 
"➡️
🎟️
↪️
🔘
🏠
" ;
$emoji = explode ("\n", $emoji) ;
$b = $emoji[rand(0,4)];
$NamesBACK = "رجوع ➡️" ;


include("admin-6.php") ;

mkdir("RSHQ/ALLS/". USR_BOT) ;


$update = json_decode(file_get_contents('php://input'));
if($update->message){
	$message = $update->message;
$message_id = $update->message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$title = $message->chat->title;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
}


if($update->callback_query ){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $update->callback_query->from->id;
}



$settingMaker = json_decode(file_get_contents("MakersNt/". base64_decode(explode("___",$_GET["ME"])[2]). "/R.json"),1);
	mkdir("AdsInfo/". USR_BOT) ;
	$thead = $settingMaker["setads"];
        $idad=$settingMaker["idad"][$thead];
	
	mkdir("AdsF/". USR_BOT) ;
	$pc = "AdsF/". USR_BOT. "/". $idad. ".txt";
	$cp = file_get_contents($pc);
	if(!in_array($from_id, explode("\n",$cp))) {
		bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
$thead
", 
'disable_web_page_preview'=>true, 
]);
file_put_contents($pc, $cp. "\n$from_id") ;
		file_put_contents("AdsInfo/".base64_decode(explode("___",$_GET["ME"])[2])."_". explode("___",$_GET["ME"])[1]. ".txt", file_get_contents("AdsInfo/".base64_decode(explode("___",$_GET["ME"])[2])."_". explode("___",$_GET["ME"])[1]. ".txt")+1) ;
		} 

    $fj = json_decode(file_get_contents('XCVVC'),1);
if(true){
	if(true) {
	$hui = "@SeroMaker";
	$t = "5599377703:AAHbH6NIC9VmTshWaUuFNw2djamzxJDMLSA";
$ch2 = file_get_contents("https://api.telegram.org/bot".$t."/getChatMember?chat_id=".$hui."&user_id=".$from_id);
$getch2 = json_decode(file_get_contents("http://api.telegram.org/bot".$t."/getChat?chat_id=".$hui))->result;
$Namech2 = $getch2->title;
$getch2li = str_replace("@","",$hui);
   
if($message && (strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
*
📣 عزيزي مطور البوت يجب عليك الاشتراك في قناة الصانع
- حتى تتمكن من استخدام البوت بشكل صحيح
° تم اضهار الاشعار لدي مطورين البوتات فقط 
*
- [$hui] 

", 
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true, 

]); 
$fj[$from_id] = true;
file_put_contents('XCVVC',json_encode($fj));
die();
}

} 
	
	} 

  if($fj[$from_id] == true){
    unset($fj[$from_id]);
    file_put_contents('XCVVC',json_encode($fj));
    bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
*
📣 تم تسجيل عضويتك في قاعده البيانات مجددا 
° بسبب الانضمام لقناة تحديثات الصانع شكرا لك
*
- انتضر قليلا ليتم التفعيل ...

", 
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true, 

]); 
sleep(1.5);
  }

  
  
  $update = json_decode(file_get_contents('php://input'));
  
  $message = $update->message;
  $text = $message->text;
  $chat_id = $message->chat->id;
  $name = $message->from->first_name;
  $from_id = $message->from->id;
  $data = $update->callback_query->data;
  
    if(isset($update->callback_query)){
  $up = $update->callback_query;
  $chat_id = $up->message->chat->id;
  $from_id = $up->from->id;
  $user = $up->from->username;
  $name = $up->from->first_name;
  $message_id = $up->message->message_id;
  $data = $up->data;
  }
  
  $Translate = json_decode(file_get_contents("transers/".USR_BOT."_Translatee.json"),true);
  
  $at = explode("/",$text);
  $txt = explode('|',$data);
  $re = $update->message->reply_to_message;
  $re_text = $message->reply_to_message->text;
  

  if(!$start_msg){
    $starts = $config['start_msg'];
  }else{
    $starts = $start_msg;
  }


  mkdir("FCZR/". bot("getme")->result->username) ;
$zr = json_decode(file_get_contents("FCZR/". bot("getme")->result->username. "/zr.json"),true);


if(explode(":",$data)[0] == "enter"){
    if($zr['infonam'][explode(":",$data)[1]]){
    
    if($zr['infosect'][explode(":",$data)[1]] == "edit"){
    	$fic = "editmessagetext";
    
    
    }
    
    if($zr['infosect'][explode(":",$data)[1]] == "send"){
    	$fic = "sendMessage";
    
    }
    
    if($zr['infosect'][explode(":",$data)[1]] == "hmsa"){
    	$fic = "answerCallbackQuery";
    
    }
   
    
    
    
    
    
    $k15[inline_keyboard][]=[[text=>"• رجوع •",callback_data=>"tobot"]];
    bot($fic,[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$message_id,
    'text'=>$zr['infodesc'][explode(":",$data)[1]],
    'parse_mode'=>"MARKDOWN",
    'callback_query_id'=>$update->callback_query->id,
    'reply_markup'=>json_encode($k15),
    'show_alert'=>true,
	]);
} 
	}
	
	$key=[];
  $key[inline_keyboard][]=[['text'=>"المطور",'url'=>"tg://user?id=$admin"]];
   
    
    foreach ($zr['id'] as $i){
    $namem = $zr['infonam'][$i];
    $biozr = $zr['infodesc'][$i];
    if(preg_match("#http#",$biozr)) {
    	
    $key[inline_keyboard][]=[[text=>"$namem",url=>$biozr]];
   } else {
   	
   $key[inline_keyboard][]=[[text=>"$namem",callback_data=>"enter:$i" ]];
  } 
  
    
} 

$RBEROO = $key;

  if($text == "/start"){
  bot('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"
$starts
  ",
  'parse_mode' => 'markdown',
  'reply_markup'=>json_encode($RBEROO),
  ]);
  }
  
  
  $Translate = json_decode(file_get_contents("transers/".USR_BOT."_Translatee.json"),true);
  
  $at = explode("/",$text);
  $txt = explode('|',$data);
  $re = $update->message->reply_to_message;
  $re_text = $message->reply_to_message->text;
  $re = $update->message->reply_to_message;

  $transing = json_decode(file_get_contents("https://translate.googleapis.com/translate_a/single?client=gtx&dt=t&sl=auto&tl=$at[1]&q=".urlencode($re_text)),ture)[0][0][0];
  
  if($at[1] == "uk") {
  $tfd= "الأوكرانية🇺🇦" ;
  } 
  if($at[1] == "en") {
  $tfd= "الأنجليزيه 🇺🇲" ;
  } 
  if($at[1] == "ru") {
  $tfd= "الروسية 🇸🇮" ;
  } 
  if($at[1] == "de") {
  $tfd= "الالمانية 🇩🇪" ;
  } 
  if($at[1] == "tr") {
  $tfd= "التركية🇹🇷" ;
  } 
  if($at[1] == "ar") {
  $tfd= "العربيه 🇮🇶" ;
  } 
  if($at[1] == "ja") {
  $tfd= "اليابانية🇰🇷" ;
  } 
  if($at[1] == "zh") {
  $tfd= "الصينية 🇨🇳" ;
  } 
  if($at[1] == "es") {
  $tfd= "الاسبانية 🇪🇦" ;
  } 
  if($at[1] == "fa") {
  $tfd= "الفارسية🇮🇷" ;
  } 
  if($at[1] == "it") {
  $tfd= "الفرنسية 🇫🇷" ;
  } 
  if($at[1] == "hi") {
  $tfd= "الهندية 🇮🇳" ;
  } 
  
  if($re and $text =="/$at[1]"){
  bot('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"
  ♦️ تم الترجمة الى : *$tfd*
  ♦️ الترجمة : 
   `$transing`

  
  ",
'parse_mode'=>'markdown',
'disable_web_page_preview' => true,
  ]);return false;
  }
  if($text != "/start"){
  if(!$data) {
  bot('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"اختر اللغة التي ترجمة النص الخاص بك اليها .. ⚡️",
  'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  'reply_markup'=>json_encode([
  'inline_keyboard'=>[
  [['text'=>'الأنجليزيه 🇺🇲','callback_data' =>"en|ok"],['text'=>'العربيه 🇮🇶','callback_data' =>"ar|ok"],['text'=>'الفارسية🇮🇷','callback_data' =>"fa|ok"]],
  [['text'=>'الروسية 🇸🇮','callback_data' =>"ru|ok"],['text'=>'اليابانية🇰🇷','callback_data' =>"ja|ok"],['text'=>'الايطالية🇨🇮','callback_data' =>"it|ok"]],
  [['text'=>'الالمانية 🇩🇪','callback_data' =>"de|ok"],['text'=>'الصينية 🇨🇳','callback_data' =>"zh|ok"],['text'=>'الفرنسية🇫🇷','callback_data' =>"fr|ok"]],
  [['text'=>'التركية🇹🇷','callback_data' =>"tr|ok"],['text'=>'الاسبانية 🇪🇦','callback_data' =>"es|ok"],['text'=>'الهندية🇮🇳','callback_data' =>"hi|ok"]],
  [['text'=>'الأوكرانية🇺🇦','callback_data' =>"uk|ok"]],
  ]])
  ]);
  $Translate['text'][$from_id] = $text;
  file_put_contents("transers/".USR_BOT."_Translatee.json",json_encode($Translate,32|128|265));
  }
  } 
  
  mkdir("transers");
  $textme = $Translate['text'][$from_id];
 
  
  $transing = json_decode(file_get_contents("https://translate.googleapis.com/translate_a/single?client=gtx&dt=t&sl=auto&tl=$txt[0]&q=".urlencode($textme)),ture)[0][0][0];
  
  
  if($txt[0] == "uk") {
  $tfd= "الأوكرانية🇺🇦" ;
  } 
  if($txt[0] == "en") {
  $tfd= "الأنجليزيه 🇺🇲" ;
  } 
  if($txt[0] == "ru") {
  $tfd= "الروسية 🇸🇮" ;
  } 
  if($txt[0] == "de") {
  $tfd= "الالمانية 🇩🇪" ;
  } 
  if($txt[0] == "tr") {
  $tfd= "التركية🇹🇷" ;
  } 
  if($txt[0] == "ar") {
  $tfd= "العربيه 🇮🇶" ;
  } 
  if($txt[0] == "ja") {
  $tfd= "اليابانية🇰🇷" ;
  } 
  if($txt[0] == "zh") {
  $tfd= "الصينية 🇨🇳" ;
  } 
  if($txt[0] == "es") {
  $tfd= "الاسبانية 🇪🇦" ;
  } 
  if($txt[0] == "fa") {
  $tfd= "الفارسية🇮🇷" ;
  } 
  if($txt[0] == "it") {
  $tfd= "الفرنسية 🇫🇷" ;
  } 
  if($txt[0] == "hi") {
  $tfd= "الهندية 🇮🇳" ;
  } 
  
  
  
  
  if($txt[0] == 'ar' or $txt[0] == 'en' or $txt[0] == 'ru' or $txt[0] == 'de' or $txt[0] == 'tr' or $txt[0] == 'uk' or $txt[0] == 'ja' or $txt[0] == 'zh' or $txt[0] == 'es' or $txt[0] == 'fa' or $txt[0] == 'it' or $txt[0] == 'fr' or $txt[0] == 'hi'){
  
  bot('EditMessageText',[
  'chat_id'=>$chat_id,
  'message_id'=>$message_id,
  'text'=>"
  ♦️ تم الترجمة الى : *$tfd*
  ♦️ الترجمة : 
`$transing`

  ",
  'disable_web_page_preview'=>'true',
  'parse_mode'=>'Markdown',
  'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
  [['text'=>'الأنجليزيه 🇺🇲','callback_data' =>"en|ok"],['text'=>'العربيه 🇮🇶','callback_data' =>"ar|ok"],['text'=>'الفارسية🇮🇷','callback_data' =>"fa|ok"]],
  [['text'=>'الروسية 🇸🇮','callback_data' =>"ru|ok"],['text'=>'اليابانية🇰🇷','callback_data' =>"ja|ok"],['text'=>'الايطالية🇨🇮','callback_data' =>"it|ok"]],
  [['text'=>'الالمانية 🇩🇪','callback_data' =>"de|ok"],['text'=>'الصينية 🇨🇳','callback_data' =>"zh|ok"],['text'=>'الفرنسية🇫🇷','callback_data' =>"fr|ok"]],
  [['text'=>'التركية🇹🇷','callback_data' =>"tr|ok"],['text'=>'الاسبانية 🇪🇦','callback_data' =>"es|ok"],['text'=>'الهندية🇮🇳','callback_data' =>"hi|ok"]],
  [['text'=>'الأوكرانية🇺🇦','callback_data' =>"uk|ok"]],
  ]
  ])
  ]);
  bot("sendvoice",[
  "chat_id"=>$chat_id,
  "voice"=>"http://tts.baidu.com/text2audio?lan=$txt[0]&ie=UTF-8&text=".str_replace(' ','%20',$textme)."" ,
  "caption"=>" لفظ لغه $tfd"
  ]);
  
  }
  