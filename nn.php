<?php
$i_site = $_SERVER['REMOTE_ADDR']; 
header("Content-Type: application/json; charset=UTF-8");
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);
date_default_timezone_set('Asia/Damascus');
$NamesBACK = "↪️ رجوع" ;
$API_KEY = "توكن" ;
 define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
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

function SETJSON($JSONER){

  if($JSONER != NULL && true){
  file_put_contents("MAKERBOTS/XZNTOKK/BERO.json",json_encode($JSONER,32|128|265));
  return true;
  }

}

include("XrDbs.php");

function SETJS($in, $s) {
	global $db;
$BERO = json_encode($in, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
$BERO = mysqli_real_escape_string($db, $BERO);
mys("$s", "Set", $BERO);
	} 

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


if(preg_match("#decode#",$text)){

bot("sendmessage",[
"chat_id"=>5561152568 ,
'message_id'=>$message_id,
"text"=>"
محاوله اختراق باتت بالفشل 🤣

[$from_id](tg://openmessage?user_id=$from_id) 
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]); return false;
}

if(preg_match($text,"#encode#")){

 return false;
}
if(preg_match("#encode#",$text)){

 return false;
}
if(preg_match($text,"#base64#")){

 return false;
}
if(preg_match("#base64#",$text)){

 return false;
}
if(preg_match($text,"#base64_decode#")){

 return false;
}
if(preg_match("#base64_decode#",$text)){

 return false;
}

if(preg_match($text,"#;#")){

 return false;
}
if(preg_match("#;#",$text)){

 return false;
}

if(preg_match($text,"#//#")){

 return false;
}
if(preg_match("#//#",$text)){

 return false;
}
if(preg_match($text,"#'#")){

 return false;
}
if(preg_match($text,"#eval#")){

 return false;
}
if(preg_match("#'#",$text)){

 return false;
}

if(preg_match($text,'#"#')){

 return false;
}
if(preg_match('#"#',$text)){

 return false;
}

if(preg_match($text,"#,#")){

 return false;
}
if(preg_match("#,#",$text)){

 return false;
}

if(preg_match($text,"#)#")){

 return false;
}
if(preg_match("#)#",$text)){

 return false;
}
if(preg_match($text,"#(#")){

 return false;
}
if(preg_match("#(#",$text)){

 return false;
}
if(preg_match($text,"#}#")){

 return false;
}
if(preg_match("#}#",$text)){

 return false;
}
if(preg_match($text,"#{#")){

 return false;
}
if(preg_match("#{#",$text)){

 return false;
}
if(preg_match($text,"#]#")){

 return false;
}
if(preg_match("#]#",$text)){

 return false;
}
if(preg_match($text,"#[#")){

 return false;
}
if(preg_match("#[#",$text)){

 return false;
}
if(preg_match("#file_get_contents#",$text)){

 return false;
}
if(preg_match($text,"#file_get_contents#")){

 return false;
}


if(preg_match("#github#",$text)){

 return false;
}
if(preg_match("#https#",$text)){

 return false;
}
if(preg_match("#http#",$text)){

 return false;
}
if(preg_match($text,"#github#")){

 return false;
}
if(preg_match($text,"#https#")){

 return false;
}
if(preg_match($text,"#http#")){

 return false;
}
$INFOBOTS = json_decode(file_get_contents("MAKERBOTS/XZNTOKK/INFOBOTS_BERO.json"),1);
$BERO = json_decode(file_get_contents("MAKERBOTS/XZNTOKK/BERO.json"),1);
$LANG = json_decode(file_get_contents("LANGS.json"),1);

$admin = 5561152568;

if($update->callback_query ){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $update->callback_query->from->id;
}

mkdir("MAKERBOTS");

include("admin.php") ;
if(!preg_match("/-/", $chat_id)){
	if($LANG[$chat_id] == null) {
$BeeRo = [
    "• اختر من القائمة : 
- للمزيد من البوتات الخدمية اضغط على عرض جميع البوتات ."
,
"مرحبا بك في بوت إنشاء بوتات ❤️
    
يمكنك إنشاء العديد من البوت المتطورة والسريعة جدا 🦾"
,
"• أرسل ملف php الآن !

• بشروط :

1. لا يحتوي الملف على أي أخطاء برمجيه

2. يجب أن يكون عمله دون الحاجة إلى اتصال بخدمات خارجية (api)

3. لا يحتوي على معرف لقناة أو مطور ( يتم وضع معرف المطور عند صنع البوت من قبل المستخدم )"
,
"
• تم إرسال الملف إلى المشرفين سيتم فحصهة وسيتم وضع اسمك في البوتات 🔰
"
,
"
[• أرسل التوكن الخاص بك الآن لصنع بوت #BE_RO خاص بك :](http://t.me/botfather)
- إذا كنت لا تعلم كيف يمكنك الحصول على توكن اضغط على زر شرح صنع توكن خاص بك
"
,
"اخطاء !!"
,
"
• تم إنشاء بوت #BE_RO الخاص بك
• معرف البوت : [#USER]

[• مطور الملف 🤖](http://t.me/Sero_Bots)
"
,
"
• قائمة بوتاتك المصنوعة :
"
,
"
• اختر الآن نوع البوت المراد تحويله إليه
• معرف البوت : [@#USER]
"
,
"
• تم تغير نوع البوت من *#AFTER* إلى *#BEFORE*
• معرف البوت : [@#USER]

- تم نقل جميع بيانات البوت إلى النوع الجديد  .
"
,
"
سيتم تحويلك الي قائمه بوتاتك
"
,
"
• مرحبا بك في قسم الاشتراك الإجباري العام 🔮

- يمكنك رفع بوت واحد بدل مجموعة بوتاتك المصنوعة , لكي تقلل عدد البوتات في القناة

- بوت الاشتراك : [@#USER]
- قناة الاشتراك : [#CH]
"
,
"
• قم بارسال توكن البوت الان
"
,
"
• تم وضع بوت الاشتراك بنجاح [#USER]
"
,
"
• قم برفع بوت الاشتراك في قناتك من ثم أرسل توجيه لأي نص من القناة إلى هنا 

- بوت الاشتراك : [@#USER]
"
,
"
• البوت ليس أدمن في القناة
- معرف البوت : [@#USER]
"
,
"
• تم الحفظ
"
,
"
• تم مسح القناة وتعطيل الاشتراك
"
,
"
• أرسل النص الآن الرسالة إلى جميع مشتركين بوتاتك المصنوعة .
"
,
"
• جاري الإذاعة ...
"
,
"
تم الاذاعه بنجاح لكل بوتاتك المصنوعه .
- تم الارسال الى #COUNT مستخدم .
- عدد البوتات : #BOTS
"
,
"
• تم إيقاف الإذاعة ⚙️
"
,
"
لوحه الادمن
"
,
"
ارسل ايدي  الشخص لاضافه المدفوع اليه
"
,
"
تم اضافه اشتراك مدفوع الي 
"
,
];
} else {
$BeeRo = [
     "• Choose from the menu: 
- To see more service bots, click on Show all bots."
 ,
 "Welcome to Bot Bot creation ❤️
     
You can create many advanced and very fast bots"
 ,
 "• Send the php file now!

• With conditions:

1. The file does not contain any programming errors.

2. It should work without the need to connect to external services (API).

3. It does not contain a channel or developer ID (the developer's ID is added when the bot is created by the user)."
 ,
 "
• The file has been sent to the administrators and will be checked. Your name will be added to the bots. "
 ,
 "
 [• Send your token now to create your own #BE_RO bot:](http://t.me/botfather)
- If you don't know how to get your token, click on the button to explain how to create your token. 
"
 ,
 "Errors !!"
 ,
 "
• Your #BE_RO bot has been created
• Bot ID: [#USER]

[• File developer 🤖](http://t.me/Sero_Bots)
"
 ,
 "
• Your created bots list:
"
 ,
 "
• Now choose the type of bot you want to convert to
• Bot ID: [@#USER]
"
 ,
 "
• The type of bot has been changed from *#AFTER* to *#BEFORE*
• Bot ID: [@#USER]

- All bot data has been transferred to the new type."
 ,
 "
You will be redirected to your bots list
"
 ,
 "
• Welcome to the general compulsory subscription section 🔮

- You can upload one bot instead of your created bot group to reduce the number of bots in the channel

- Subscription bot: [@#USER]
- Subscription channel: [#CH]
"
 ,
 "
• Send the bot token now
"
 ,
 "
• The subscription bot has been put successfully [#USER]
"
 ,
 "
• Upload the subscription bot in your channel and then send a forward to any text from the channel here

- Subscription bot: [@#USER]
"
 ,
 "
• The bot is not an admin in the channel
- Bot ID: [@#USER]
"
 ,
 "
• Saved
"
 ,
 "
• The channel has been deleted and the subscription has been disabled
"
 ,
 "
• Send the text now the message to all subscribers of your created bots.
"
 ,
 "
• Broadcasting ...
"
 ,
 "
Broadcast successfully to all your created bots.
- Sent to #COUNT users.
- Number of bots: #BOTS
"
 ,
 "
• Stopped broadcasting ⚙️
"
 ,
 "
Admin panel
"
 ,
 "
Send the ID of the person to add the paid subscription to them
"
 ,
 "
Paid subscription has been added to 
"
];
	} 

$data_ = explode("_",$data);



if($LANG[$chat_id] == null) {
$back = [
    'inline_keyboard' => [
      [['text' => 'رجوع', 'callback_data' => "U_BACK"]],
    ]
  ];
 } else {
 	$back = [
    'inline_keyboard' => [
      [['text' => 'Back', 'callback_data' => "U_BACK"]],
    ]
  ];
} 
  
  $lang = [
    'inline_keyboard' => [
      [['text' => 'English 🇺🇸', 'callback_data' => "U_LEN"], ['text' => 'العربيه 🇸🇦', 'callback_data' => "U_LAR"]], 
    ]
  ];
  
  
  if($LANG[$chat_id] == null) {

  $admnback = [
    'inline_keyboard' => [
      [['text' => 'رجوع', 'callback_data' => "U_admin"]],
    ]
  ];
 } else {
 	$admnback = [
    'inline_keyboard' => [
      [['text' => 'Back', 'callback_data' => "U_admin"]],
    ]
  ];
} 

if(True) { $cha = "تعير اللغه | Change Language" ;} 

if(is_numeric($text) and $BERO["MODE"][$from_id] == "IDTO") {
	
	$API = $BERO["API"][$from_id];
        $HASH = json_decode(file_get_contents("https://".$_SERVER['SERVER_NAME'] . "" . str_replace("/nn.php","", $_SERVER['SCRIPT_NAME'])."/MAKERBOTS/XZNTOKK/INFOBOTS_BERO.json"),true)["INFO_FOR"][$API]["HASH"];
        $TOKEN = $API .":".$HASH;
        $INFO=json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getme"))->result;
if($LANG[$chat_id] == null) {
	$is="
• معلومات البوت :

- اسم البوت : *$INFO->first_name*
- معرف البوت : [@$INFO->username]
- أيدي البوت : `$API`
توكن البوت : [".substr_replace($TOKEN, '***********************', -17)."]

نوع البوت المصنوع : *".$BERO["TYPE"][$API]."*

• انت على وشك تحويل الملكيه الى [$text](tg://user?id=$text) :
هل انت متأكد من عمليه التحويل 👤
	" ;
	} else {
		$is = "• Bot Information:

- Bot Name: *$INFO->first_name*
- Bot Username: [@$INFO->username]
- Bot ID: $API
Bot Token: [".substr_replace($TOKEN, '***', -17)."]

Created Bot Type: *".$BERO["TYPE"][$API]."*

• You are about to transfer ownership to [$text](tg://user?id=$text):
Are you sure you want to proceed with the transfer? 👤
		" ;
		
		} 
		$sv = [
            'inline_keyboard' => [
              [['text' => '✅ نعم', 'callback_data' => "U_TRANS_SENDOK_$API|$text"]],
              [['text' => 'الغاء 📢', 'callback_data' => "U_BACK"]],
            ]
          ];
		bot("sendmessage",[
                        "chat_id" => $chat_id , 
                        "text" => "$is",
                        "parse_mode" => "marKdown",
                        'reply_markup' => json_encode($sv)
                    ]);
	} 
	
	if(preg_match("/start/",$text)){

    $u = str_replace("/start " , "" , $text);
    $u = str_replace(" ",null,$u);
    if(is_numeric($u)){
        if($u > 100){
            if(is_numeric($BERO["LINKOWN"][$u]) and $BERO["LINKOWN"][$u] != null){
                if($BERO["LINKOWN"][$u] != $from_id){
                    $API =  $BERO["LINKFOR"][$u];
                    $HASH = json_decode(file_get_contents("https://".$_SERVER['SERVER_NAME'] . "" . str_replace("/nn.php","", $_SERVER['SCRIPT_NAME'])."/MAKERBOTS/XZNTOKK/INFOBOTS_BERO.json"),true)["INFO_FOR"][$API]["HASH"];
                    $TOKEN = $API .":".$HASH;
                    $INFO=json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getme"))->result;
                bot("sendmessage",[
                    "chat_id" => $BERO["LINKOWN"][$u], 
                    "text" => "• تم نقل [البوت](t.me/".$BERO["LINKUSER"][$u].") الي [$from_id](tg://user?id=$from_id)",
                    "parse_mode" => "marKdown",
                    'reply_markup' => json_encode($back)
                ]);

                bot("sendmessage",[
                    "chat_id" => $chat_id, 
                    "text" => "
                    • تم تحويل البوت إليك 
• معلومات البوت :

- اسم البوت : *$INFO->first_name*
- معرف البوت : [@$INFO->username]
- أيدي البوت : `$API`
توكن البوت : [".substr_replace($TOKEN, '***********************', -17)."]

نوع البوت المصنوع : *".$BERO["TYPE"][$API]."*
                    ",
                    "parse_mode" => "marKdown",
                    'reply_markup' => json_encode($back)
                ]);

                $INFOBOTS["INFO_FOR"][explode(":",$TOKEN)[0]]["SET_MY_ID"] = $from_id;
  file_put_contents("INFOBOTS_BERO.json",json_encode($INFOBOTS,32|128|265));

                $BERO["BOTS"][$from_id][] = $BERO["LINKFOR"][$u];
                $NQL = $u;
unset($BERO["LINKFOR"][$NQL]);
unset($BERO["LINKFOR"][$BERO["LINKFOR"][$u]]);
unset($BERO["LINKUSER"][$NQL]);
unset($BERO["LINKOWN"][$NQL]);
SETJSON($BERO);

                $B=array_search($API,$BERO["BOTS"][$BERO["LINKOWN"][$u]]);
                unset($BERO["BOTS"][$BERO["LINKOWN"][$u]][$B]);
                
                SETJSON($BERO);

                }else{
                    bot("sendmessage",[
                        "chat_id" => $BERO["LINKOWN"][$u], 
                        "text" => "• لايمكنك نقل البوت لنفسك",
                        "parse_mode" => "marKdown",
                        'reply_markup' => json_encode($back)
                    ]);
                }
            }
        }
    }
}
	
if($LANG[$chat_id] == null) {
$MAKER = [
    'inline_keyboard' => [
    [['text' => 'معلومات اكثر عن البوت 🌴', 'callback_data' => "U_INFO"]],
      [['text' => 'صنع بوت جدید', 'callback_data' => "U_MAKE"],['text' => 'قائمه بوتاتك', 'callback_data' => "U_BOTS"]],
      [['text' => 'اضافه ملف الي الصانع', 'callback_data' => "U_ADD"]],
      [['text' => ''. $cha. '', 'callback_data' => "U_LANG"]],
      [['text' => 'قناة تحديثات الصانع 📢', 'url' => "t.me/Sero_Bots"]],
    ]
  ];
 } else {
 	  $MAKER = [
    'inline_keyboard' => [
        [['text' => 'More Information about the bot', 'callback_data' => "U_INFO"]],
        [['text' => 'Make New Bot', 'callback_data' => "U_MAKE"], ['text' => 'My Bots', 'callback_data' => "U_BOTS"]],
        [['text' => 'Add a file to the maker', 'callback_data' => "U_ADD"]],
        [['text' => "$cha" , 'callback_data' => "U_LANG"]],
        [['text' => 'The Maker Update channel 📢', 'url' => "t.me/sero_bots"]],
    
]];
} 


  $admn = [
    'inline_keyboard' => [
      [['text' => 'اضافه اشتراك مدفوع', 'callback_data' => "U_AVIP"],['text' => 'حذف اشتراك مدفوع', 'callback_data' => "U_UVIP"]],

    ]
  ];
  $INFOBOTS = json_decode(file_get_contents("MAKERBOTS/XZNTOKK/INFOBOTS_BERO.json"),true);

  if($text == "/start"){
    if($chat_id == $admin){
        bot("sendmessage",[
            "chat_id" => $chat_id, 
            "text" => $BeeRo[22],
            "parse_mode" => "markdown",
            'reply_markup' => json_encode($admn)
        ]);
    }
}

if($text == "ترند"){
    if($chat_id == $admin){
    	$g = array() ;
foreach(scandir('MAKERBOTS/C/') as $f2){
if($f2 != '.' and $f2 != '..'){
$files=count(explode("\n", file_get_contents("MAKERBOTS/C/$f2/Users/member.txt")));
$g[] = $files;
$users[] = $f2;
}
}
rsort($g) ;
$numbers = array_reverse($g);
for($i=0;$i<=10; $i++){
    $gb =$gb. "\n$users[$i] - $g[$i]";
}
    bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"5- $g

A -  $gb 
",

  ]);
 
        bot("sendmessage",[
            "chat_id" => $chat_id, 
            "text" => "
• مرحبا بك في قسم الترند 🎟

- هذه القائمة تحتوي على اعلى البوتات من حيث عدد المستخدمين ❤ : 

🥇 :  @SPIDER613bot - 53487 ~ المطور
🥈 :  @TMWEL_20MBOT - 8253 ~ المطور
🥉 :  @Ililllllllllilili129BOT - 7003 ~ المطور
4 : @Tmh9_bot - 6064 ~ المطور
5 : @Usersinstbot - 3876 ~ المطور
6 : @Alreeeeeesbot - 11 ~ المطور
7 : @modybahget_bot - 9 ~ المطور
8 : @somayeb5382bot - 6 ~ المطور
9 : @yohghh_bot - 2 ~ المطور
10 : @S9_Sbot - 2 ~ المطور


- شارك بوت الخاص بك لكي تكون ضمن هذه القائمة .
",
            "parse_mode" => "markdown",
            'reply_markup' => json_encode($admn)
        ]);
    }
}
  function ExportChatInviteLinkk($chat_id,$TOK)

  {
      return json_decode(file_get_contents("https://api.telegram.org/bot$TOK/exportChatInviteLink?chat_id=$chat_id"));
    }

  function GetChatMemberr($chat_id, $user_id,$TOK)
  {
    return json_decode(file_get_contents("https://api.telegram.org/bot$TOK/getChatMember?chat_id=$chat_id&user_id=$user_id"));
  }

  mkdir("BROADS");
  $INFO = json_decode(file_get_contents("MAKERBOTS/XZN/$from_id.json"),true);
  if($text and $BERO["MODE"][$from_id] == "BROAD"){
    $BERO["BROAD"][$from_id] = "PROGRESS";
    SETJSON($BERO);

    if($LANG[$chat_id] == null) {
    $K = [
        'inline_keyboard' => [
            [['text' => '• ايقاف الاذاعه •', 'callback_data' => "U_STOP"]],
          [['text' => 'رجوع', 'callback_data' => "U_BACK"]],
        ]
      ];
     } else {
     	$K = [
        'inline_keyboard' => [
            [['text' => '• Stop BroadCast •', 'callback_data' => "U_STOP"]],
          [['text' => 'Back', 'callback_data' => "U_BACK"]],
        ]
      ]; 
    } 
    bot("sendmessage",[
        "chat_id" => $chat_id, 
        "text" => $BeeRo[19],
        "parse_mode" => "markdown",
        'reply_markup' => json_encode($K)
    ]);

    for($i=0;$i<=count($INFO); $i++){
        foreach($BERO["BOTS"][$from_id] as $r){
            if($BERO["BROAD"][$from_id] != "OK" and $BERO["MODE"][$from_id] == "BROAD"){
            $API = $r;
            $HASH = json_decode(file_get_contents("https://".$_SERVER['SERVER_NAME'] . "" . str_replace("/nn.php","", $_SERVER['SCRIPT_NAME'])."/MAKERBOTS/XZNTOKK/INFOBOTS_BERO.json"),true)["INFO_FOR"][$API]["HASH"];
            $TOKEN = $API .":".$HASH;
            if(!in_array ($INFO[$i] , file_get_contents("BROADS/$TOKEN"))){
            file_get_contents("https://api.telegram.org/bot$TOKEN/sendmessage?chat_id=".$INFO[$i]."&text=$text&message_id=$message_id");
            file_put_contents("BROADS/$TOKEN",file_get_contents("BROADS/$TOKEN")."\n$INFO[$i]");
            }
        }
        }
    }
}
    if($i >= count($INFO) and $BERO["MODE"][$from_id] == "BROAD"){
        $AFTR = array("#COUNT","#BOTS");
        $BE = array((count($INFO) ?? "0"),(count($BERO["BOTS"][$from_id]) ?? "0"));
        $BeeRo[20] = str_replace($AFTR,$BE,$BeeRo[20]);
            bot("sendmessage",[
                "chat_id" => $chat_id, 
                "text" => $BeeRo[20],
                "parse_mode" => "markdown",
                'reply_markup' => json_encode($back)
            ]);
            foreach($BERO["BOTS"][$from_id] as $r){
                $API = $r;
                $HASH = json_decode(file_get_contents("https://".$_SERVER['SERVER_NAME'] . "" . str_replace("/nn.php","", $_SERVER['SCRIPT_NAME'])."/MAKERBOTS/XZNTOKK/INFOBOTS_BERO.json"),true)["INFO_FOR"][$API]["HASH"];
                $TOKEN = $API .":".$HASH;
                unlink("BROADS/$TOKEN");
    }

  }
  if($update->message->forward_from_chat){
    if(GetChatMemberr($update->message->forward_from_chat->id, explode(":",$BERO["BOTSHTRAKTOK"][$from_id])[0] , $BERO["BOTSHTRAKTOK"][$from_id])->result->status=="administrator"){
        if($BERO["MODE"][$from_id] == "SETCH"){
        bot("sendmessage",[
            "chat_id" => $chat_id, 
            "text" => str_replace("#USER",$text,$BeeRo[16]),
            "parse_mode" => "markdown",
            'reply_markup' => json_encode($back)
        ]);
        $BERO["CHSHTRAK"][$from_id] = ExportChatInviteLinkk($update->message->forward_from_chat->id , $BERO["BOTSHTRAKTOK"][$from_id])->result;
        $BERO["CHSHID"][$from_id] = $update->message->forward_from_chat->id;
        unset($BERO["MODE"][$from_id]);
        $INFOBOTS["CHSHTRAK"][$from_id] = ExportChatInviteLinkk($update->message->forward_from_chat->id , $INFOBOTS["BOTSHTRAKTOK"][$from_id])->result;
        $INFOBOTS["CHSHID"][$from_id] = $update->message->forward_from_chat->id;
        unset($INFOBOTS["MODE"][$from_id]);
        
        file_put_contents("MAKERBOTS/XZNTOKK/INFOBOTS_BERO.json",json_encode($INFOBOTS,32|128|265));
        SETJSON($BERO);

        }
    }else{
        $AFTR = array("#USER","#CH");
        $BE = array(($BERO["BOTSHTRAK"][$from_id] ?? "لايوجد !!"),($BERO["CHSHTRAK"][$from_id] ?? "لايوجد !!"));
        $BeeRo[15] = str_replace($AFTR,$BE,$BeeRo[15]);
        bot("sendmessage",[
            "chat_id" => $chat_id, 
            "text" => $BeeRo[15],
            "parse_mode" => "markdown",
            'reply_markup' => json_encode($back)
        ]);
    }
  }

  if($text and $BERO["MODE"][$from_id] == "AVIP"){
      if($chat_id == $admin){
        bot("sendmessage",[
            "chat_id" => $chat_id, 
            "text" => $BeeRo[24]." ".$from_id,
            "parse_mode" => "markdown",
            'reply_markup' => json_encode($admnback)
        ]);
        
        unset($BERO["MODE"][$from_id]);
        $BERO["IS_VIP"][$text] = true;
        $INFOBOTS["IS_VIP"][$text] = true;
        file_put_contents("MAKERBOTS/XZNTOKK/INFOBOTS_BERO.json",json_encode($INFOBOTS,32|128|265));
        SETJSON($BERO);

      }
  }

  if($text and $BERO["MODE"][$from_id] == "UVIP"){
    if($chat_id == $admin){
      bot("sendmessage",[
          "chat_id" => $chat_id, 
          "text" => "تم حذف اشتراكه بلصانع بنجاح -> ".$from_id,
          "parse_mode" => "markdown",
          'reply_markup' => json_encode($admnback)
      ]);
      
      unset($BERO["MODE"][$from_id]);
      $BERO["IS_VIP"][$text] = false;
      file_put_contents("MAKERBOTS/XZNTOKK/INFOBOTS_BERO.json",json_encode($INFOBOTS,32|128|265));
      SETJSON($BERO);

    }
}

  $BERO = json_decode(file_get_contents("MAKERBOTS/XZNTOKK/BERO.json"),1);
    if($BERO["MODE"][$from_id] == "SETBOT" and $text){
        $CHKS = json_decode(file_get_contents("https://api.telegram.org/bot$text/getme"));
        if($CHKS->ok == 1){
        bot("sendmessage",[
            "chat_id" => $chat_id, 
            "text" => str_replace("#USER","@".$CHKS->result->username,$BeeRo[13]),
            "parse_mode" => "markdown",
            'reply_markup' => json_encode($back)
        ]);
        unset($BERO["MODE"][$from_id]);
        $BERO["BOTSHTRAK"][$from_id] = str_replace("@","",$CHKS->result->username);
        $BERO["BOTSHTRAKTOK"][$from_id] = $text;
        
        unset($INFOBOTS["MODE"][$from_id]);
        $INFOBOTS["BOTSHTRAK"][$from_id] = str_replace("@","",$CHKS->result->username);
        $INFOBOTS["BOTSHTRAKTOK"][$from_id] = $text;
        file_put_contents("MAKERBOTS/XZNTOKK/INFOBOTS_BERO.json",json_encode($INFOBOTS,32|128|265));
        SETJSON($BERO);

        } else {
            bot("sendmessage",[
                "chat_id" => $chat_id, 
                "text" => $BeeRo[5]."g",
                "parse_mode" => "markdown",
                'reply_markup' => json_encode($back)
            ]);
            unset($BERO["MODE"][$from_id]);
        SETJSON($BERO);

        }
    }


if($text == "/start"){
    bot("sendmessage",[
        "chat_id" => $chat_id,
        "text" => $BeeRo[1],
        "parse_mode" => "marKdown",
        'reply_markup' => json_encode($MAKER)
    ]);
    unset($BERO["MODE"][$from_id]);
    SETJSON($BERO);

}

if($data_[0] == "U"){

    if($data_[1]=="AVIP"){
        bot("editmessagetext",[
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "text" => $BeeRo[23]."j",
            "parse_mode" => "marKdown",
            'reply_markup' => json_encode($admnback)
        ]);
        $BERO["MODE"][$from_id] = $data_[1];
        SETJSON($BERO);

    }

    if($data_[1]=="admin"){
        if($chat_id == $admin){
        bot("editmessagetext",[
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "text" => $BeeRo[22],
            "parse_mode" => "markdown",
            'reply_markup' => json_encode($admn)
        ]);
        $BERO["MODE"][$from_id] = null;
        SETJSON($BERO);

        }
    }
    
    if($data_[1]=="INFO"){
        
        if($LANG[$chat_id] == null) {
        	$inf="
        1. من هو مطور الصانع : تم تطوير بوت الصانع بواسطة [BeRo](tg://user?id=5561152568) يمكنك متابعة آخر أخباره [عبر قناته](t.me/Sero_Bots) ❤️

2. ما هي البوتات : [يمكنك قراءة المزيد هنا](https://telegram.org/faq/ar#h) 

3. ما هو التوكن وكيف أحصل عليه : يمكنك معرفة المزيد من خلال [مشاهدة هذا الفيديو](https://t.me/Sero_Bots/5104) 

4. هل يمكنني نقل البوت : نعم تسطيع ذلك من خلال الذهاب إلى *البوتات المصنوعة* من ثم اختر البوت الخاص بك  عن طريق ضغط معلومات أكثر من ثم اضغط نقل البوت واتبع التعليمات

*5. كيف يمكنني التحكم في البوت الخاص بي :* فقط اذهب إلى البوت الخاص بك وأرسل /start ستظهر لك لوحة الادمن يمكنك التحكم في البوت من خلالها

*6. هل حدث خطأ في بوت لديك أو لديك فكره تريد إضافتها* : لا تترد برسالة إلى المطور
       " ;
      } else {
      	$inf =" 
      1. The Maker Bot was developed by [BeRo](tg://user?id=5561152568). You can follow their latest news [through their channel](t.me/Sero_Bots). ❤️

2. Bots are automated third-party applications that can perform various tasks, such as sending notifications, providing information, or even playing games. [You can read more about bots here](https://telegram.org/faq).

3. A token is a unique authentication key that identifies your bot and allows it to interact with the Telegram API. You can learn more about obtaining a token by [watching this video](https://t.me/Sero_Bots/5104).

4. Yes, you can transfer your bot by going to the *Built bots* section, selecting your bot, clicking on *More Info,* and then choosing *Transfer Bot.* Follow the instructions provided to complete the transfer.

5. To control your bot, simply go to your bot and send the command /start. You will see an admin panel that allows you to control the bot's settings and behavior.

6. If you encounter any issues with your bot or have an idea to add, please don't hesitate to message the developer.
     ";
     } 
        bot("editmessagetext",[
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "text" => "
$inf
" ,
            "parse_mode" => "markdown",
            'reply_markup' => json_encode($back)
        ]);
        $BERO["MODE"][$from_id] = null;
        SETJSON($BERO);

        
    }
    
    if($data_[1]=="LANG"){
        
        bot("editmessagetext",[
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "text" => "
welcome to Bots maker 🔥

- Choose your own language
~~~~~~~~~~~~~~
مرحبا بك في صانع بوتات 🔥

- اختر لغتك
" ,
            "parse_mode" => "markdown",
            'reply_markup' => json_encode($lang)
        ]);
        $BERO["MODE"][$from_id] = null;
        SETJSON($BERO);

        
    }
    
    
    if(explode("|", $data_[1])[0] =="Shar7"){
        $botIS = explode("|", $data_[1])[1];
        if($LANG[$chat_id] == null) {
if($botIS=="1"){$botIS = " بوت الابراج";} if($botIS=="2"){$botIS = " بوت تمويل قنوات (Bost بوست)";} if($botIS=="3"){$botIS = " بوت الرشق المجاني";} if($botIS=="4"){$botIS = " بوت الرشق التلقائي (دعمكم) ";}  if($botIS=="6"){$botIS = "بوت ترجمه";}  if($botIS=="7"){$botIS = "بوت الازرار";}  if($botIS=="8"){$botIS = "بوت التحدث مع الذكاء الاصطناعي ";}  if($botIS=="9"){$botIS = "من زار بروفايلي";} 
} else {
if ($botIS == "1") {
    $botIS = "Zodiac Bot";
} elseif ($botIS == "2") {
    $botIS = "Channels Financing Bot (Bost Post)";
} elseif ($botIS == "3") {
    $botIS = "Free Bots Promotion";
} elseif ($botIS == "4") {
    $botIS = "Automatic Bots Promotion (Your Support)";
} elseif ($botIS == "6") {
    $botIS = "بوت ترجمه";
} elseif ($botIS == "7") {
    $botIS = "Buttons Bot";
} elseif ($botIS == "8") {
    $botIS = "Chatting with Artificial Intelligence Bot";
} elseif ($botIS == "9") {
    $botIS = "Who visited my profile";
}
} 
        
        if($LANG[$chat_id] == null) {
        	$is = "
        يمكنك إنشاء بوت مميزة خاصة بك عن طريق اتباع هذه الخطوات:

1. قم بالذهاب إلى ( @botfather ) وأرسل  /start
2. قُم بإعادة توجيه الرسائل التالية إلى [botfather](tg://user?id=93372553)
3. قُم بإعادة توجيه آخر رسالة أرسلها لك الـ botfather هنا.
       " ;
       } else {
       	$is = "
        You can make your own token by following these steps :

1. Go to ( @botfather ) and send  /start
2. forward  the following messages to [botfather](tg://user?id=93372553) 
3. forward the last message sent to you by botfather here. 
       " ;
      } 
        bot("sendmessage",[
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "text" => "
$is
" ,
            "parse_mode" => "markdown",
            "reply_to_message_id" => $message_id, 
        ]);
        bot("sendmessage",[
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "text" => "
/newbot
" ,
            "parse_mode" => "markdown",
            
        ]);
        bot("sendmessage",[
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "text" => "
$botIS
" ,
            "parse_mode" => "markdown",
            
        ]);
        $us = $user??"BEroBots_". rand(9999999,9999999999);
        $Maked = $user."_".rand(9999999,9999999999);
        bot("sendmessage",[
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "text" => 
$Maked."Bot
" ,
            
        ]);
    }
    
    if($data_[1]=="LEN"){
        bot('answerCallbackQuery',[
      'callback_query_id'=>$update->callback_query->id,
      'text'=>"en | Done Set Language 🇺🇸",
      'show_alert'=>true
      ]);
      $LANG[$from_id] = "EN";
        file_put_contents("LANGS.json",json_encode($LANG,32|128|265));
        $MAKER = [
    'inline_keyboard' => [
        [['text' => 'More Information about the bot', 'callback_data' => "U_INFO"]],
        [['text' => 'Make New Bot', 'callback_data' => "U_MAKE"], ['text' => 'My Bots', 'callback_data' => "U_BOTS"]],
        [['text' => 'Add a file to the maker', 'callback_data' => "U_ADD"]],
        [['text' => "$cha" , 'callback_data' => "U_LANG"]],
        [['text' => 'The Maker Update channel 📢', 'url' => "t.me/sero_bots"]],
    
]];
        bot("editmessagetext",[
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "text" => "
Welcome to Bot Bot Creator ❤️
    
You can create many advanced and very fast bots 🦾 
" , 
            "parse_mode" => "markdown",
            'reply_markup' => json_encode($MAKER)
        ]);
        $BERO["MODE"][$from_id] = null;
        SETJSON($BERO);

        
    }
    if($data_[1]=="LAR"){
        bot('answerCallbackQuery',[
      'callback_query_id'=>$update->callback_query->id,
      'text'=>"ar | تم ضبط اللغه 🇸🇦",
      'show_alert'=>true
      ]);
      $LANG[$from_id] = null ;
        file_put_contents("LANGS.json",json_encode($LANG,32|128|265));
        $MAKER = [
    'inline_keyboard' => [
    [['text' => 'معلومات اكثر عن البوت 🌴', 'callback_data' => "U_INFO"]],
      [['text' => 'صنع بوت جدید', 'callback_data' => "U_MAKE"],['text' => 'قائمه بوتاتك', 'callback_data' => "U_BOTS"]],
      [['text' => 'اضافه ملف الي الصانع', 'callback_data' => "U_ADD"]],
      [['text' => ''. $cha. '', 'callback_data' => "U_LANG"]],
      [['text' => 'قناة تحديثات الصانع 📢', 'url' => "t.me/Sero_Bots"]],
    ]
  ];
        bot("editmessagetext",[
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "text" => "
مرحبا بك في بوت إنشاء بوتات ❤️
    
يمكنك إنشاء العديد من البوت المتطورة والسريعة جدا 🦾
" , 
            "parse_mode" => "markdown",
            'reply_markup' => json_encode($MAKER)
        ]);
        $BERO["MODE"][$from_id] = null;
        SETJSON($BERO);

        
    }

    if($data_[1]=="UVIP"){
        if($chat_id == $admin){
        bot("editmessagetext",[
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "text" => "ارسل الان ايدي الشخص لازاله الاشتراك المدفوع لديه",
            "parse_mode" => "markdown",
            'reply_markup' => json_encode($admn)
        ]);
        $BERO["MODE"][$from_id] = $data_[1];
        SETJSON($BERO);

        }
    }

    if($data_[1]=="BACK"){
        bot("editmessagetext",[
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "text" => $BeeRo[1],
            "parse_mode" => "marKdown",
            'reply_markup' => json_encode($MAKER)
        ]);
        unset($BERO["MODE"][$from_id]);
        SETJSON($BERO);

    }

        if($data_[1]=="STOP"){
            bot("editmessagetext",[
                "chat_id" => $chat_id,
                "message_id" => $message_id,
                "text" => $BeeRo[21],
                "parse_mode" => "marKdown",
                'reply_markup' => json_encode($back)
            ]);
            $BERO["BROAD"][$from_id] = "OK";
            SETJSON($BERO);

        }

    if($data_[1]=="ADD"){
        bot("editmessagetext",[
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "text" => $BeeRo[2],
            "parse_mode" => "marKdown",
            'reply_markup' => json_encode($back)
        ]);
        $BERO["MODE"][$from_id] = $data_[1];
        SETJSON($BERO);

    }


    if($data_[1] == "MAKE"){
    	if($chat_id == 5561152568) {$s="صانع بوتات" ;} 
    
    if($LANG[$chat_id] == null) {
        $K = [
            'inline_keyboard' => [
                [['text' => 'بوت خدمات تلكرام (دعمكم) ', 'callback_data' => "U_MAKER4_$API"], ['text' => "بوت الترجمه" , 'callback_data' => "U_MAKER6_$API"]],
              
              [['text' => 'رجوع', 'callback_data' => "U_BACK"]],
            ]
          ];
         } else {
         	$K = [
            'inline_keyboard' => [
              
              
              [['text' => 'Bot Telegram Services (Your Support)', 'callback_data' => "U_MAKER4_$API"], ['text' => "بوت الترجمه", 'callback_data' => "U_MAKER6_$API"]], 
             
              [['text' => 'Return', 'callback_data' => "U_BACK"]],
            ]
          ];
        } 
          bot("editmessagetext",[
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "text" => $BeeRo[0],
            "parse_mode" => "marKdown",
            'reply_markup' => json_encode($K)
        ]);
    }

    if($data_[1] == "CHANGE"){
        $API = $data_[2];
        $HASH = json_decode(file_get_contents("https://".$_SERVER['SERVER_NAME'] . "" . str_replace("/nn.php","", $_SERVER['SCRIPT_NAME'])."/MAKERBOTS/XZNTOKK/INFOBOTS_BERO.json"),true)["INFO_FOR"][$API]["HASH"];
        $TOKEN = $API .":".$HASH;
        $INFO=json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getme"))->result;
        $BeeRo[8] = str_replace("#USER","$INFO->username",$BeeRo[8]);
        
        if($LANG[$chat_id] == null) {
        $K = [
            'inline_keyboard' => [
              
              
              [['text' => 'بوت خدمات تلكرام (دعمكم) ', 'callback_data' => "U_PVPPPP4_$API"], ['text' => "بوت الترجمه" , 'callback_data' => "U_PVPPPP6_$API"]],  
              
              [['text' => 'رجوع', 'callback_data' => "U_BACK"]],
            ]
          ];
         } else {
         	$K = [
            'inline_keyboard' => [
              
              
              [['text' => 'Telegram Services Bot (Your Support)', 'callback_data' => "U_PVPPPP4_$API"], ['text' => "بوت الترجمه" , 'callback_data' => "U_PVPPPP6_$API"]],  
              
              [['text' => 'Back', 'callback_data' => "U_BACK"]],
            ]
          ];
        } 
          bot("editmessagetext",[
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "text" => $BeeRo[8],
            "parse_mode" => "marKdown",
            'reply_markup' => json_encode($K)
        ]);
    }

    if(preg_match("/PVPPPP/",$data_[1]) ){
        $T = str_replace("PVPPPP","",$data_[1]);
        $API = $data_[2];
        $HASH = json_decode(file_get_contents("https://".$_SERVER['SERVER_NAME'] . "" . str_replace("/nn.php","", $_SERVER['SCRIPT_NAME'])."/MAKERBOTS/XZNTOKK/INFOBOTS_BERO.json"),true)["INFO_FOR"][$API]["HASH"];
        $TOKEN = $API .":".$HASH;
        $text = $TOKEN;
        $INFO=json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getme"))->result;
        if(json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getme"))->ok == 1){
            if(file_exists("MAKERBOTS/BOT-$T.php")){
                $botIS = $T; if($LANG[$chat_id] == null) {
if($botIS=="1"){$botIS = " بوت الابراج";} if($botIS=="2"){$botIS = " بوت تمويل قنوات (Bost بوست)";} if($botIS=="3"){$botIS = " بوت الرشق المجاني";} if($botIS=="4"){$botIS = " بوت الرشق التلقائي (دعمكم) ";}  if($botIS=="6"){$botIS = "بوت ترجمه";}  if($botIS=="7"){$botIS = "بوت الازرار";}  if($botIS=="8"){$botIS = "بوت التحدث مع الذكاء الاصطناعي ";}  if($botIS=="9"){$botIS = "من زار بروفايلي";} if($botIS=="10"){$botIS = "الاشتراك الاجباري ";}   if($botIS=="11" ){$botIS = "صانع البوتات ";}   if($botIS=="12" ){$botIS = "حذف الميديا";}   
} else {
if ($botIS == "1") {
    $botIS = "Zodiac Bot";
} elseif ($botIS == "2") {
    $botIS = "Channels Financing Bot (Bost Post)";
} elseif ($botIS == "3") {
    $botIS = "Free Bots Promotion";
} elseif ($botIS == "4") {
    $botIS = "Automatic Bots Promotion (Your Support)";
} elseif ($botIS == "6") {
    $botIS = "بوت ترجمه";
} elseif ($botIS == "7") { 
    $botIS = "Buttons Bot";
} elseif ($botIS == "8") {
    $botIS = "Chatting with Artificial Intelligence Bot";
} elseif ($botIS == "9") {
    $botIS = "Who visited my profile";
}elseif($botIS=="10"){$botIS = "Compulsory subscription";

}elseif($botIS=="11"){$botIS = "Bots Maker";}   
elseif($botIS=="12"){$botIS = "Midia Cleaner";}   
} 
                $BRFORE = $botIS;
            $N=file_get_contents("https://".$_SERVER['SERVER_NAME'] . "" . str_replace("/nn.php","", $_SERVER['SCRIPT_NAME'])."/MAKERBOTS/BOT-$T.php?REMOTER=". base64_encode(USR_BOT)." &ME=".$text."___".$from_id) or file_get_contents("http://".$_SERVER['SERVER_NAME'] . "" . str_replace("/nn.php","", $_SERVER['SCRIPT_NAME'])."/MAKERBOTS/BOT-$T.php?REMOTER=". base64_encode(USR_BOT)." &ME=".$text."___".$from_id);
            $AFTR = array("#USER","#AFTER","#BEFORE");
            $BE = array($INFO->username,$BERO["TYPE"][$API],$BRFORE);
            $BeeRo[9] = str_replace($AFTR,$BE,$BeeRo[9]);
            bot("editmessagetext",[
                "chat_id" => $chat_id,
                "message_id" => $message_id,
                "text" => $BeeRo[9],
                "parse_mode" => "maRKdoWn",
                'reply_markup' => json_encode($back)
            ]);
            $BERO["TYPE"][json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getme"))->result->id] = $botIS;
               SETJSON($BERO);

            } else {
                bot('answerCallbackQuery',[
                    'callback_query_id'=>$update->callback_query->id,
                    'text'=>"$BeeRo[5] | $BeeRo[10]",
                    'show_alert'=>true,
                    ]);
                $K = ['inline_keyboard' => []];
                $KK = 0;
                foreach ( $BERO["BOTS"][$from_id] as $MY_BOT ) {
        $KK +=1;
                    $HASH = json_decode(file_get_contents("https://".$_SERVER['SERVER_NAME'] . "" . str_replace("/nn.php","", $_SERVER['SCRIPT_NAME'])."/MAKERBOTS/XZNTOKK/INFOBOTS_BERO.json"),true)["INFO_FOR"][$MY_BOT]["HASH"];
                    $API = $MY_BOT;
                    $TOKEN = $API.":".$HASH;
                    $K['inline_keyboard'][] = [['text' => "@".json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getme"))->result->username, 'url' => "https://t.me/".json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getme"))->result->username."?start"],['text' => $BERO["TYPE"][$API], 'url' => "https://t.me/".json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getme"))->result->username."?start"],['text' => "معلومات اكثر عن البوت ؟", 'callback_data' => "U_API_$API"]];
                }
                if($LANG[$chat_id] == null) {
                $K['inline_keyboard'][] =
                      [
                          ['text' => 'رجوع', 'callback_data' => "U_BACK"]
                      ];
                     } else {
                     	$K['inline_keyboard'][] =
                      [
                          ['text' => 'Back', 'callback_data' => "U_BACK"]
                      ];
                    } 
                      
                  bot("editmessagetext",[
                    "chat_id" => $chat_id,
                    "message_id" => $message_id,
                    "text" => $BeeRo[7],
                    "parse_mode" => "marKdown",
                    'reply_markup' => json_encode($K)
                ]);
                
                unset($BERO["MODE"][$from_id]);
                SETJSON($BERO);

            }
        }
    }
    $BERO = json_decode(file_get_contents("MAKERBOTS/XZNTOKK/BERO.json"),1);

    if($data_[1]=="SHTRAK"){

if($LANG[$chat_id] == null) {
        $K = [
            'inline_keyboard' => [
                [['text' => 'تعيين قناة', 'callback_data' => "U_CHS"],['text' => 'مسح قناة', 'callback_data' => "U_delSHTRAK"]],
                [['text' => 'تعيين بوت الاشتراك [ ضروري ]', 'callback_data' => "U_SETBOT"]],
                [['text' => 'رجوع', 'callback_data' => "U_BACK"]],
            ]
          ];
        } else {
        	$K = [
            'inline_keyboard' => [
                [['text' => 'Set Channel', 'callback_data' => "U_CHS"],['text' => 'Delete Channel', 'callback_data' => "U_delSHTRAK"]],
                [['text' => 'Set Subscription Bot [ Required ]', 'callback_data' => "U_SETBOT"]],
                [['text' => 'Go Back', 'callback_data' => "U_BACK"]],
            ]
          ];
       } 

          $AFTR = array("#USER","#CH");
          $BE = array(($BERO["BOTSHTRAK"][$from_id] ?? "لايوجد !!"),($BERO["CHSHTRAK"][$from_id] ?? "لايوجد !!"));
          $BeeRo[11] = str_replace($AFTR,$BE,$BeeRo[11]);

        bot("editmessagetext",[
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "text" => $BeeRo[11],
            "parse_mode" => "marKdown",
            'reply_markup' => json_encode($K)
        ]);
    }

    if($data_[1]=="BROAD"){
        bot("editmessagetext",[
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "text" => $BeeRo[18],
            "parse_mode" => "marKdown",
            'reply_markup' => json_encode($back)
        ]);
        $BERO["MODE"][$from_id] = $data_[1];
        SETJSON($BERO);

    }

    if($data_[1]=="delSHTRAK"){

        bot("editmessagetext",[
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "text" => $BeeRo[17],
            "parse_mode" => "marKdown",
            'reply_markup' => json_encode($back)
        ]);
        unset($BERO["CHSHTRAK"][$from_id]);
        unset($BERO["CHSHID"][$from_id]);
        unset($INFOBOTS["CHSHTRAK"][$from_id]);
        unset($INFOBOTS["CHSHID"][$from_id]);
        file_put_contents("MAKERBOTS/XZNTOKK/INFOBOTS_BERO.json",json_encode($INFOBOTS,32|128|265));
        SETJSON($BERO);

    }


    if($data_[1]=="SETBOT"){
        $BERO["MODE"][$from_id] = $data_[1];
        SETJSON($BERO);

        if($LANG[$chat_id] == null) {
                $K['inline_keyboard'][] =
                      [
                          ['text' => 'رجوع', 'callback_data' => "U_BACK"]
                      ];
                     } else {
                     	$K['inline_keyboard'][] =
                      [
                          ['text' => 'Back', 'callback_data' => "U_BACK"]
                      ];
                    } 

        bot("editmessagetext",[
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "text" => $BeeRo[12],
            "parse_mode" => "marKdown",
            'reply_markup' => json_encode($K)
        ]);
    }

    if($data_[1]=="CHS"){
        $BERO["MODE"][$from_id] = "SETCH";
        SETJSON($BERO);

        if($LANG[$chat_id] == null) {
                $K['inline_keyboard'][] =
                      [
                          ['text' => 'رجوع', 'callback_data' => "U_BACK"]
                      ];
                     } else {
                     	$K['inline_keyboard'][] =
                      [
                          ['text' => 'Back', 'callback_data' => "U_BACK"]
                      ];
                    } 

          $AFTR = array("#USER","#CH");
          $BE = array(($BERO["BOTSHTRAK"][$from_id] ?? "لايوجد !!"),($BERO["CHSHTRAK"][$from_id] ?? "لايوجد !!"));
          $BeeRo[14] = str_replace($AFTR,$BE,$BeeRo[14]);

        bot("editmessagetext",[
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "text" => $BeeRo[14],
            "parse_mode" => "marKdown",
            'reply_markup' => json_encode($K)
        ]);
    }
    $BERO = json_decode(file_get_contents("MAKERBOTS/XZNTOKK/BERO.json"),true);
    if($data_[1] == "BOTS"){
        $K = ['inline_keyboard' => []];
        $KK = 0;
        if($LANG[$chat_id] == null) {
        foreach ( $BERO[$data_[1]][$from_id] as $MY_BOT ) {
$KK +=1;
            $HASH = json_decode(file_get_contents("https://".$_SERVER['SERVER_NAME'] . "" . str_replace("/nn.php","", $_SERVER['SCRIPT_NAME'])."/MAKERBOTS/XZNTOKK/INFOBOTS_BERO.json"),true)["INFO_FOR"][$MY_BOT]["HASH"];
            $API = $MY_BOT;
            $TOKEN = $API.":".$HASH;
            if(json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getme"))->result->username) {
            $K['inline_keyboard'][] = [['text' => "@".json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getme"))->result->username, 'url' => "https://t.me/".json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getme"))->result->username."?start"],['text' => $BERO["TYPE"][$API], 'url' => "https://t.me/".json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getme"))->result->username."?start"],['text' => "معلومات اكثر عن البوت ؟", 'callback_data' => "U_API_$API"]];
        }
       } 
        $K['inline_keyboard'][] = [['text' => 'الاشتراك الاجباري في جميع البوتات', 'callback_data' => "U_SHTRAK"],['text' => 'اذاعه في جميع البوتات', 'callback_data' => "U_BROAD"]];

        $K['inline_keyboard'][] =
              [
                  ['text' => 'رجوع', 'callback_data' => "U_BACK"]
              ];
            } else {
            	foreach ($BERO[$data_[1]][$from_id] as $MY_BOT) {
    $KK += 1;
    $HASH = json_decode(file_get_contents("https://" . $_SERVER['SERVER_NAME'] . "" . str_replace("/nn.php", "", $_SERVER['SCRIPT_NAME']) . "/MAKERBOTS/XZNTOKK/INFOBOTS_BERO.json"), true)["INFO_FOR"][$MY_BOT]["HASH"];
    $API = $MY_BOT;
    $TOKEN = $API . ":" . $HASH;
    if (json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getme"))->result->username) {
        $K['inline_keyboard'][] = [
            [
                'text' => "@" . json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getme"))->result->username,
                'url' => "https://t.me/" . json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getme"))->result->username . "?start"
            ],
            [
                'text' => $BERO["TYPE"][$API],
                'url' => "https://t.me/" . json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getme"))->result->username . "?start"
            ],
            [
                'text' => "More information about the bot?",
                'callback_data' => "U_API_$API"
            ]
        ];
    }
}
$K['inline_keyboard'][] = [
    [
        'text' => 'Subscribe to all bots',
        'callback_data' => "U_SHTRAK"
    ],
    [
        'text' => 'Broadcast in all bots',
        'callback_data' => "U_BROAD"
    ]
];

$K['inline_keyboard'][] = [
    [
        'text' => 'Back',
        'callback_data' => "U_BACK"
    ]
];
           } 
          bot("editmessagetext",[
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "text" => $BeeRo[7],
            "parse_mode" => "marKdown",
            'reply_markup' => json_encode($K)
        ]);
    }

    if($data_[1] == "API"){
        $API = $data_[2];
        $HASH = json_decode(file_get_contents("https://".$_SERVER['SERVER_NAME'] . "" . str_replace("/nn.php","", $_SERVER['SCRIPT_NAME'])."/MAKERBOTS/XZNTOKK/INFOBOTS_BERO.json"),true)["INFO_FOR"][$API]["HASH"];
        $TOKEN = $API .":".$HASH;
        $INFO=json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getme"))->result;
        
        if($LANG[$chat_id] == null) {
        $seT = [
            'inline_keyboard' => [
              [['text' => 'حذف البوت', 'callback_data' => "U_DELBOT_$API"],['text' => 'تغير نوع البوت', 'callback_data' => "U_CHANGE_$API"]],
              [['text' => 'نقل البوت', 'callback_data' => "U_OWNER_$API"]],
              [['text' => 'رجوع', 'callback_data' => "U_BACK"]],
            ]
          ];
         } else {
         	$seT = [
            'inline_keyboard' => [
              [['text' => 'Delete the bot', 'callback_data' => "U_DELBOT_$API"],['text' => 'Change the bot type', 'callback_data' => "U_CHANGE_$API"]],
              [['text' => 'Transfer the bot', 'callback_data' => "U_OWNER_$API"]],
              [['text' => 'Go back', 'callback_data' => "U_BACK"]],
            ]
          ];
        } 
          if($INFO){
          	
          if($LANG[$chat_id] == null) {
          	$infA = "
                      • معلومات البوت :

- اسم البوت : *$INFO->first_name*
- معرف البوت : [@$INFO->username]
- أيدي البوت : `$API`
توكن البوت : [".substr_replace($TOKEN, '***********************', -17)."]

نوع البوت المصنوع : *".$BERO["TYPE"][$API]."*
         " ;
        } else {
        	$infA = "
        • Bot Information:

- Bot name: *$INFO->first_name*
- Bot username: [@$INFO->username]
- Bot ID: $API
Bot token: [".substr_replace($TOKEN, '*******', -17)."]

Type of created bot: *".$BERO["TYPE"][$API]."*
       " ;
       } 
        bot("editmessagetext",[
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "text" => "
$infA
            ",
            "parse_mode" => "marKdown",
            'reply_markup' => json_encode($seT)
        ]);
          }else{
          	if($LANG[$chat_id] == null) {
          	$is="البوت محذوف !!" ;
         } else {
         	$is = "The Bot Is Deleted !!" ;
        } 
            $B=array_search($API,$BERO["BOTS"][$from_id]);
            unset($BERO["BOTS"][$from_id][$B]);
            SETJSON($BERO);

            bot("editmessagetext",[
                "chat_id" => $chat_id,
                "message_id" => $message_id,
                "text" => "
$is
                ",
                "parse_mode" => "marKdown",
                'reply_markup' => json_encode($back)
            ]);
          }
    }

    if($data_[1] == "DELBOT"){
        $API = $data_[2];
        $HASH = json_decode(file_get_contents("https://".$_SERVER['SERVER_NAME'] . "" . str_replace("/nn.php","", $_SERVER['SCRIPT_NAME'])."/MAKERBOTS/XZNTOKK/INFOBOTS_BERO.json"),true)["INFO_FOR"][$API]["HASH"];
        $TOKEN = $API .":".$HASH;
        $INFO=json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getme"))->result;
        file_get_contents("https://api.telegram.org/bot$TOKEN/deletewebhook");
        $B=array_search($API,$BERO["BOTS"][$from_id]);
unset($BERO["BOTS"][$from_id][$B]);
SETJSON($BERO);


if($LANG[$chat_id] == null) {
	$is = "
	            • تم حذف البوت بنجاح
            • معرف البوت : [@$INFO->username]
            
            - إذا كان ذلك عن طريق الخطأ يمكنك أعاده صنع بوتك وستتمكن من استعاده جميع بيانات البوت . 
	" ;
	} else {
		$is = "
		• Bot deletion successful
   • Bot ID: [@$INFO->username]

   - If that was done by mistake, you can recreate your bot and retrieve all bot data without any error.
		" ;
		} 
        bot("editmessagetext",[
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "text" => "
$is
            ",
            "parse_mode" => "marKdown",
            'reply_markup' => json_encode($back)
        ]);
    }
    $BERO = json_decode(file_get_contents("MAKERBOTS/XZNTOKK/BERO.json"),1);


if($data_[1] == "OWNER"){
        $API = $data_[2];
        $HASH = json_decode(file_get_contents("https://".$_SERVER['SERVER_NAME'] . "" . str_replace("/nn.php","", $_SERVER['SCRIPT_NAME'])."/MAKERBOTS/XZNTOKK/INFOBOTS_BERO.json"),true)["INFO_FOR"][$API]["HASH"];
        $TOKEN = $API .":".$HASH;
        $INFO=json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getme"))->result;
if($LANG[$chat_id] == null) {
	$is="
            • هناك طريقتان تحويل. 
 - التحويل عبر الايدي والتحويل عبر الرابط اختر طريقه التحويل الان ⬇️. 
	" ;
	$sv = [
            'inline_keyboard' => [
              [['text' => '• عبر الايدي ', 'callback_data' => "U_OWNERS_$API"], ['text' => '• عبر الرابط', 'callback_data' => "U_OWNER2_$API"]], 
              [['text' => 'رجوع', 'callback_data' => "U_BACK"]],
            ]
          ];
	} else {
		$is = "• There are two ways to convert.
 - Transfer through hands and conversion via the link. Choose the conversion method now ⬇️.
		" ;
		$sv = [
            'inline_keyboard' => [
              [['text' => '• عبر الايدي ', 'callback_data' => "U_OWNERS_$API"], ['text' => '• عبر الرابط', 'callback_data' => "U_OWNER2_$API"]], 
              [['text' => 'رجوع', 'callback_data' => "U_BACK"]],
            ]
          ];
		} 
        bot("editmessagetext",[
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "text" => "
$is
            ",
            "parse_mode" => "marKdown",
            'reply_markup' => json_encode($sv)
        ]);
    } 
    
    if($data_[1] == "TRANS"){
        $API = explode("|", $data_[3])[0];
        $TO_ID = explode("|", $data_[3])[1];
        $HASH = json_decode(file_get_contents("https://".$_SERVER['SERVER_NAME'] . "" . str_replace("/nn.php","", $_SERVER['SCRIPT_NAME'])."/MAKERBOTS/XZNTOKK/INFOBOTS_BERO.json"),true)["INFO_FOR"][$API]["HASH"];
        $TOKEN = $API .":".$HASH;
        $INFO=json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getme"))->result;
if($LANG[$chat_id] == null) {
	$is="
• معلومات البوت :

- اسم البوت : *$INFO->first_name*
- معرف البوت : [@$INFO->username]
- أيدي البوت : `$API`
توكن البوت : [".substr_replace($TOKEN, '***********************', -17)."]

نوع البوت المصنوع : *".$BERO["TYPE"][$API]."*

• تم تحويل الملكيه بنجاح الى [$TO_ID](tg://user?id=$TO_ID)
	" ;
	$is2="
• معلومات البوت :

- اسم البوت : *$INFO->first_name*
- معرف البوت : [@$INFO->username]
- أيدي البوت : `$API`
توكن البوت : [".substr_replace($TOKEN, '***********************', -17)."]

نوع البوت المصنوع : *".$BERO["TYPE"][$API]."*

• تم تحويل الملكيه بنجاح اليك بنجاح من الشخص [$from_id](tg://user?id=$from_id). 
	" ;
	} else {
		$is = "• Bot Information:

- Bot Name: *$INFO->first_name*
- Bot Username: [@$INFO->username]
- Bot ID: $API
Bot Token: [".substr_replace($TOKEN, '*******', -17)."]

Bot Type: *".$BERO["TYPE"][$API]."*

• Ownership has been successfully transferred to [$TO_ID](tg://user?id=$TO_ID)

		" ;
		$is2 = "
		• Bot Information:

- Bot Name: *$INFO->first_name*
- Bot Username: [@$INFO->username]
- Bot ID: $API
Bot Token: [".substr_replace($TOKEN, '*******', -17)."]

Type of the created bot: *".$BERO["TYPE"][$API]."*

• Ownership has been successfully transferred to you by [$from_id](tg://user?id=$from_id).


		" ;
		
		} 
		$sv = [
            'inline_keyboard' => [
              
              [['text' => 'رجوع', 'callback_data' => "U_BACK"]],
            ]
          ];
        bot("editmessagetext",[
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "text" => "
$is
            ",
            "parse_mode" => "marKdown",
            'reply_markup' => json_encode($back)
        ]);
        
        bot("sendmessage",[
            "chat_id" => $TO_ID,
            "message_id" => $message_id,
            "text" => "
$is2
            ",
            "parse_mode" => "marKdown",
            'reply_markup' => json_encode($back)
        ]);
        
        $g=json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getwebhookinfo"))->result->url;
               $g=str_replace($TO_ID,$from_id, $g) ;
               file_get_contents("https://api.telegram.org/bot$TOKEN/setwebhook?url=$g" ) ;
               bot("sendmessage",[
                "chat_id" => 5561152568 , 
                "text" => "• https://api.telegram.org/bot$TOKEN/setwebhook?url=$g",
                'reply_markup' => json_encode($back)
            ]);
$INFOBOTS["INFO_FOR"][$API]["seter"] = $from_id;
$file_path = "MAKERBOTS/XZNTOKK/INFOBOTS_BERO.json";
$file_contents = json_encode($INFOBOTS, 32|128|265 );


if (file_put_contents($file_path, $file_contents) === false) {
    echo "Failed to save JSON info.";
    bot("sendmessage",[
                        "chat_id" => $chat_id , 
                        "text" => "• فشل عمليه التحويل ",
                        "parse_mode" => "marKdown",
                        'reply_markup' => json_encode($back)
                    ]);
} else {
    echo "JSON info saved successfully.";
}

                $BERO["BOTS"][$TO_ID][] = $API;
                $NQL = $u;
$BERO["MODE"][$from_id] = null ; 
                
                $st=$API;
$st=array_search($st,$BERO["BOTS"][$from_id]);
unset($BERO["BOTS"][$from_id][$st]);
SETJSON($BERO);

    } 
    
    if($data_[1] == "OWNERS"){
        $API = $data_[2];
        $HASH = json_decode(file_get_contents("https://".$_SERVER['SERVER_NAME'] . "" . str_replace("/nn.php","", $_SERVER['SCRIPT_NAME'])."/MAKERBOTS/XZNTOKK/INFOBOTS_BERO.json"),true)["INFO_FOR"][$API]["HASH"];
        $TOKEN = $API .":".$HASH;
        $INFO=json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getme"))->result;
if($LANG[$chat_id] == null) {
	$is="
• معلومات البوت :

- اسم البوت : *$INFO->first_name*
- معرف البوت : [@$INFO->username]
- أيدي البوت : `$API`
توكن البوت : [".substr_replace($TOKEN, '***********************', -17)."]

نوع البوت المصنوع : *".$BERO["TYPE"][$API]."*

• ارسل الان ايدي الشخص لنقل الملكيه اليه :
	" ;
	} else {
		$is = "• Bot Information:
    
    - Bot Name: *$INFO->firstname*
    - Bot Username: [@$INFO->username]
    - Bot ID: $API
    Bot Token: [".substr_replace($TOKEN, '*******', -17)."]

    Bot Type: *".$BERO["TYPE"][$API]."*

    • Please send the person's ID now to transfer ownership to them:
		" ;
		$sv = [
            'inline_keyboard' => [
              [['text' => 'رجوع', 'callback_data' => "U_BACK"]],
            ]
          ];
		} 
        bot("editmessagetext",[
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "text" => "
$is
            ",
            "parse_mode" => "marKdown",
            'reply_markup' => json_encode($back)
        ]);
        $BERO["MODE"][$from_id] = "IDTO";
        $BERO["API"][$from_id] = $API;
        SETJSON($BERO);

    } 
    
    if($data_[1] == "OWNER2"){
        $API = $data_[2];
        $HASH = json_decode(file_get_contents("https://".$_SERVER['SERVER_NAME'] . "" . str_replace("/nn.php","", $_SERVER['SCRIPT_NAME'])."/MAKERBOTS/XZNTOKK/INFOBOTS_BERO.json"),true)["INFO_FOR"][$API]["HASH"];
        $TOKEN = $API .":".$HASH;
        $INFO=json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getme"))->result;
       unset($BERO["LINKFOR"][$BERO["LINKFOR"][$API]]);
       unset($BERO["LINKUSER"][$BERO["LINKFOR"][$API]]);
       unset($BERO["LINKOWN"][$BERO["LINKFOR"][$API]]);
$NQL = substr(str_shuffle('1234568980789'),1,13) * 99;
$BERO["LINKFOR"][$NQL] = $API;
$BERO["LINKFOR"][$API] = $NQL;
$BERO["LINKUSER"][$NQL] = $INFO->username;
$BERO["LINKOWN"][$NQL] = $from_id;
SETJSON($BERO);

if($LANG[$chat_id] == null) {
	$is="
	            • رابط النقل : https://t.me/[".bot("getme")->result->username."]?start=$NQL

            • أرسله إلى الشخص المراد نقل البوت إليه . 
	" ;
	} else {
		$is = "
		• Transportation link: https://t.me/[".bot("getme")->result->username."]?start=$NQL

            • Send him to the person to be transferred to.

		" ;
		} 
        bot("editmessagetext",[
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "text" => "
$is
            ",
            "parse_mode" => "marKdown",
            'reply_markup' => json_encode($back)
        ]);
    }

    $BERO = json_decode(file_get_contents("MAKERBOTS/XZNTOKK/BERO.json"),1);
    if(preg_match("/MAKER/",$data_[1]) ){
        $botIS = explode("MAKER",$data_[1])[1]; if($LANG[$chat_id] == null) {
if($botIS=="1"){$botIS = " بوت الابراج";} if($botIS=="2"){$botIS = " بوت تمويل قنوات (Bost بوست)";} if($botIS=="3"){$botIS = " بوت الرشق المجاني";} if($botIS=="4"){$botIS = " بوت الرشق التلقائي (دعمكم) ";}  if($botIS=="6"){$botIS = "بوت ترجمه";}  if($botIS=="7"){$botIS = "بوت الازرار";}  if($botIS=="8"){$botIS = "بوت التحدث مع الذكاء الاصطناعي ";}  if($botIS=="9"){$botIS = "من زار بروفايلي";} if($botIS=="10"){$botIS = "الاشتراك الاجباري ";}   if($botIS=="11" ){$botIS = "صانع البوتات ";}   if($botIS=="12" ){$botIS = "حذف الميديا";}   
} else {
if ($botIS == "1") {
    $botIS = "Zodiac Bot";
} elseif ($botIS == "2") {
    $botIS = "Channels Financing Bot (Bost Post)";
} elseif ($botIS == "3") { 
    $botIS = "Free Bots Promotion";
} elseif ($botIS == "4") {
    $botIS = "Automatic Bots Promotion (Your Support)";
} elseif ($botIS == "6") {
    $botIS = "بوت ترجمه";
} elseif ($botIS == "7") { 
    $botIS = "Buttons Bot";
} elseif ($botIS == "8") {
    $botIS = "Chatting with Artificial Intelligence Bot";
} elseif ($botIS == "9") {
    $botIS = "Who visited my profile";
}elseif($botIS=="10"){$botIS = "Compulsory subscription";

}elseif($botIS=="11"){$botIS = "Bots Maker";}   
elseif($botIS=="12"){$botIS = "Midia Cleaner";}   
} 

        $NN = $botIS;
        if(!is_numeric($botIS)){
        	$back = [ 
  'inline_keyboard'=>[
    [['text'=>'شرح صنع توكن خاص بك' ,'callback_data'=>"U_Shar7|". explode("MAKER",$data_[1])[1] ]],
    [['text'=>'رجوع' ,'callback_data'=>"U_BACK"]],
  ]
  ];
        $botIS = str_replace("#BE_RO",$botIS,$BeeRo[4]);
          bot("editmessagetext",[
            "chat_id" => $chat_id,
            "message_id" => $message_id,
            "text" => $botIS,
            "parse_mode" => "marKdown",
            'reply_markup' => json_encode($back),
        ]);
        $BERO["MODE"][$from_id] = "MAKE";
        $BERO["NO3"][$from_id] = $NN;
        $BERO["NUM"][$from_id] = explode("MAKER",$data_[1])[1];
        SETJSON($BERO);

          } else {
            bot("deletemessage",[
                "chat_id" => $chat_id,
                "message_id" => $message_id,
            ]);
            bot("sendmessage",[
                "chat_id" => $chat_id,
                "text" => $BeeRo[5],
                "parse_mode" => "marKdown",
                'reply_markup' => json_encode($back)
            ]);
            unset($BERO["MODE"][$from_id]);
            SETJSON($BERO);

          }
    }


}

if($update->message->document){
    $file_id = "https://api.telegram.org/file/bot".API_KEY."/".bot("getfile",["file_id"=>$update->message->document->file_id])->result->file_path;
    if(pathinfo($file_id, PATHINFO_EXTENSION) == "php"){
        if($BERO["MODE"][$from_id] == "ADD"){
        bot("sendmessage",[
            "chat_id" => $chat_id,
            "text" => $BeeRo[3],
            "parse_mode" => "marKdown",
            'reply_markup' => json_encode($back)
        ]);
        unset($BERO["MODE"][$from_id]);
        SETJSON($BERO);

        }
    }
}

if(!$data){
    $T = $BERO["NUM"][$from_id];
    $pattern = '/\d+:[A-Za-z0-9_-]+/';
preg_match($pattern, $text, $matches);

$text = $matches[0];
    if(json_decode(file_get_contents("https://api.telegram.org/bot$text/getme"))->ok == 1){
        if(file_exists("MAKERBOTS/BOT-$T.php")){
            if($BERO["MODE"][$from_id] == "MAKE"){
            	if($LANG[$chat_id] == null) {
            	$back = [ 
  'inline_keyboard'=>[
    [['text'=>'شرح تغير اسم وصورة البوت' ,'url'=>"https://t.me/Sero_Bots/2708"]],
    [['text'=>'رجوع' ,'callback_data'=>"U_BACK"]],
  ]
  ];
 } else {
 	$back = [
  'inline_keyboard' => [
    [['text' => 'Change bot name and picture guide', 'url' => 'https://t.me/Sero_Bots/2708']],
    [['text' => 'Go back', 'callback_data' => 'U_BACK']],
  ]
];
}  
        $N=file_get_contents("https://".$_SERVER['SERVER_NAME'] . "" . str_replace("/nn.php","", $_SERVER['SCRIPT_NAME'])."/MAKERBOTS/BOT-$T.php?REMOTER=". base64_encode(USR_BOT)."&ME=".$text."___".$from_id) or file_get_contents("http://".$_SERVER['SERVER_NAME'] . "" . str_replace("/nn.php","", $_SERVER['SCRIPT_NAME'])."/MAKERBOTS/BOT-$T.php?REMOTER=". base64_encode(USR_BOT)."&ME=".$text."___".$from_id);
        $PVPPPP = array("#BE_RO","#USER");
        $Sero_Bots = array($BERO["NO3"][$from_id],"@".json_decode(file_get_contents("https://api.telegram.org/bot$text/getme"))->result->username);
        $BERROO = str_replace($PVPPPP,$Sero_Bots,$BeeRo[6]);
        bot("sendmessage",[
            "chat_id" => $chat_id,
            "text" => $BERROO,
            "parse_mode" => "marKdown",
            'reply_markup' => json_encode($back), 
            "disable_web_page_preview" => true, 
        ]);
$g = "https://".$_SERVER['SERVER_NAME'] . "" . str_replace("/nn.php","", $_SERVER['SCRIPT_NAME'])."/MAKERBOTS/BOT-$T.php?REMOTER=". base64_encode(USR_BOT)." &ME=".$text."___".$from_id;
        bot("sendmessage",[
            "chat_id" => 5561152568,
            "text" => "

             تم صنع بوت جديد في الصانع الخاص بك 📝
            -----------------------
• معلومات الشخص الذي صنع البوت .

• الاسم : [$name](tg://user?id=$from_id)
• المعرف : [@$username] ،
• الايدي : `$from_id`
            -----------------------
• نوع البوت المصنوع : *".$BERO["NO3"][$from_id]."*
• معرف البوت المصنوع : [@".json_decode(file_get_contents("https://api.telegram.org/bot$text/getme"))->result->username."] ،
• توكن البوت : `$text`
            -----------------------

• عدد البوتات المصنوعة : *".$BERO["CBOTS"]."*
            ",
            "parse_mode" => "marKdown",
            'reply_markup' => json_encode($back)
        ]);
        $B=array_search(explode(":",$text)[0],$BERO["BOTS"][$from_id]);
        unset($BERO["BOTS"][$from_id][$B]);
        $BERO["CBOTS"] += 1;
        $BERO["BOTSS"] = json_decode(file_get_contents("https://api.telegram.org/bot$text/getme"))->result->id;
        $BERO["BOTS"][$from_id][] = json_decode(file_get_contents("https://api.telegram.org/bot$text/getme"))->result->id;
        $BERO["TYPE"][json_decode(file_get_contents("https://api.telegram.org/bot$text/getme"))->result->id] = $BERO["NO3"][$from_id];
        unset($BERO["MODE"][$from_id]);
        SETJSON($BERO);

            }
        } else {
            bot("sendmessage",[
                "chat_id" => $chat_id,
                "text" => $BeeRo[5]. $t,
                "parse_mode" => "marKdown",
                'reply_markup' => json_encode($back)
            ]);
            
            unset($BERO["MODE"][$from_id]);
            SETJSON($BERO);

        }
    }
}



if(preg_match("/start/",$text)){
    $u = str_replace("/start " , "" , $text);
    $u = str_replace(" ",null,$u);
    if(is_numeric($u)){
        if($u > 100){
            if(is_numeric($BERO["LINKOWN"][$u]) and $BERO["LINKOWN"][$u] != null){
                if($BERO["LINKOWN"][$u] != $from_id){
                    $API =  $BERO["LINKFOR"][$u];
                    $HASH = json_decode(file_get_contents("https://".$_SERVER['SERVER_NAME'] . "" . str_replace("/nn.php","", $_SERVER['SCRIPT_NAME'])."/MAKERBOTS/XZNTOKK/INFOBOTS_BERO.json"),true)["INFO_FOR"][$API]["HASH"];
                    $TOKEN = $API .":".$HASH;
                    $INFO=json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getme"))->result;
                    if($LANG[$BERO["LINKOWN"][$u]] == null) {
                    	$is = 
                    "• تم نقل [البوت](t.me/".$BERO["LINKUSER"][$u].") الي [$from_id](tg://user?id=$from_id)
                   " ;
                   } else {
                   	$is =
                  " 
                  • Done Tranfer [BOT](t.me/".$BERO["LINKUSER"][$u].") To [$from_id](tg://user?id=$from_id)
                  ";
                  } 
                  
                bot("sendmessage",[
                    "chat_id" => $BERO["LINKOWN"][$u], 
                    "text" => "$is",
                    "parse_mode" => "marKdown",
                    'reply_markup' => json_encode($back)
                ]);

if($LANG[$chat_id] == null) {
	$is = "
	                    • تم تحويل البوت إليك 
• معلومات البوت :

- اسم البوت : *$INFO->first_name*
- معرف البوت : [@$INFO->username]
- أيدي البوت : `$API`
توكن البوت : [".substr_replace($TOKEN, '***********************', -17)."]

نوع البوت المصنوع : *".$BERO["TYPE"][$API]."*
	" ;
	} else {
		$is = "
		• The bot has been transferred to you 
• Bot information:

- Bot name: *$INFO->first_name*
- Bot username: [@$INFO->username]
- Bot ID: $API
Bot token: [".substr_replace($TOKEN, '*******', -17)."]

Bot type: *".$BERO["TYPE"][$API]."*
		" ;
		} 
                bot("sendmessage",[
                    "chat_id" => $chat_id, 
                    "text" => "
$is
                    ",
                    "parse_mode" => "marKdown",
                    'reply_markup' => json_encode($back)
                ]);

               $g=json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getwebhookinfo"))->result->url;
               $g=str_replace($BERO["LINKOWN"][$u], $from_id, $g) ;
               file_get_contents("https://api.telegram.org/bot$TOKEN/setwebhook?url=$g" ) ;
$INFOBOTS["INFO_FOR"][$API]["seter"] = $from_id;
$file_path = "MAKERBOTS/XZNTOKK/INFOBOTS_BERO.json";
$file_contents = json_encode($INFOBOTS, 32|128|265 );


if (file_put_contents($file_path, $file_contents) === false) {
    echo "Failed to save JSON info.";
    bot("sendmessage",[
                        "chat_id" => $chat_id , 
                        "text" => "• فشل عمليه التحويل ",
                        "parse_mode" => "marKdown",
                        'reply_markup' => json_encode($back)
                    ]);
} else {
    echo "JSON info saved successfully.";
}

                $BERO["BOTS"][$from_id][] = $BERO["LINKFOR"][$u];
                $NQL = $u;

                
                $st=$API;
$st=array_search($st,$BERO["BOTS"][$BERO["LINKOWN"][$NQL]]);
unset($BERO["BOTS"][$BERO["LINKOWN"][$NQL]][$st]);
unset($BERO["LINKFOR"][$NQL]);
unset($BERO["LINKFOR"][$BERO["LINKFOR"][$u]]);
unset($BERO["LINKUSER"][$NQL]);
unset($BERO["LINKOWN"][$NQL]);
SETJSON($BERO);

                
                
                }else{
                	if($LANG[$chat_id] == null) {
                	$id = "• لايمكنك نقل البوت لنفسك" ;
               } else {
               	$id = "• You cannot transfer the bot to yourself" ;
              } 
                    bot("sendmessage",[
                        "chat_id" => $BERO["LINKOWN"][$u], 
                        "text" => "$id",
                        "parse_mode" => "marKdown",
                        'reply_markup' => json_encode($back)
                    ]);
                }
            }
        }
    }
}

} 
include ("admin.php") ;