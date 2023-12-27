<?php
set_time_limit(0);

$forwardM=json_decode(file_get_contents("forwardM.json"),1);
$Js=json_decode(file_get_contents("Js.json"),1);
$Ds=json_decode(file_get_contents("Ds.json"),1);
$dxx=json_decode(file_get_contents("dxx.json"),1);
$Vs=json_decode(file_get_contents("Users/Vs.json"),1);
if($Js['sudo']==null){	
$sudo=5561152568;//ايدي المطور
}else{
$sudo=$Js['sudo'];
}
$sudos=[$sudo]; 
if($Js['start']==null){
$TART="
• اهلا بك ، 
";
$Js['start']=$TART; 
SV("Js.json", $Js); 
}else{
$START=$Js['start'];
}

function Add($path, $content)
{
	$file = fopen("$path", "a") or die("Unable to open file!");
	fwrite($file, "$content");
	fclose($file);
}
function GetUpdates($offset = null, $limit = 1, $timeout = null, $allowed_updates = [])
{
	return bot('getUpdates', [
		'offset' => $offset,
		'limit' => $limit,
		'timeout' => $timeout,
		'allowed_updates' => $allowed_updates
	]);
}
function SetWebhook($url, $certificate = null, $max_connections = 1, $allowed_updates = [])
{
	return bot('setWebhook', [
		'url' => $url,
		'certificate' => $certificate,
		'max_connections' => $max_connections,
		'allowed_updates' => $allowed_updates,
	]);
}
function DeleteWebhook()
{
	return bot('deleteWebhook');
}
function GetWebhookInfo()
{
	return bot('getWebhookInfo');
}
function SendChatAction($chat_id, $action)
{
	bot('sendChatAction', [
		'chat_id' => $chat_id,
		'action' => $action
	]);
}
function SendMessage($chat_id, $text, $parse_mode = "MARKDOWN", $disable_web_page_preview = true, $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendMessage', [
		'chat_id' => $chat_id,
		'text' => $text,
		'parse_mode' => $parse_mode,
		'disable_web_page_preview' => $disable_web_page_preview,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function ForwardMessage($chat_id, $from_chat_id, $message_id)
{
	return bot('forwardMessage', [
		'chat_id' => $chat_id,
		'from_chat_id' => $from_chat_id,
		'disable_notification' => false,
		'message_id' => $message_id
	]);
}
function SendPhoto($chat_id, $photo, $caption = null, $parse_mode = "MARKDOWN", $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendPhoto', [
		'chat_id' => $chat_id,
		'photo' => $photo,
		'caption' => $caption,
		'parse_mode' => $parse_mode,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function SendAudio($chat_id, $audio, $caption = null, $parse_mode = "MARKDOWN", $duration = null, $performer = null, $title = null, $thumb = null, $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendAudio', [
		'chat_id' => $chat_id,
		'audio' => $audio,
		'caption' => $caption,
		'parse_mode' => $parse_mode,
		'duration' => $duration,
		'performer' => $performer,
		'title' => $title,
		'thumb' => $thumb,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function SendDocument($chat_id, $document, $thumb = null, $caption = null, $parse_mode = "MARKDOWN", $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendDocument', [
		'chat_id' => $chat_id,
		'document' => $document,
		'thumb' => $thumb,
		'caption' => $caption,
		'parse_mode' => $parse_mode,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function SendVideo($chat_id, $video, $duration = null, $width = null, $height = null, $thumb = null, $caption = null, $parse_mode = "MARKDOWN", $reply_to_message_id = null, $reply_markup = null, $supports_streaming = null)
{
	return bot('sendVideo', [
		'chat_id' => $chat_id,
		'video' => $video,
		'duration' => $duration,
		'width' => $width,
		'height' => $height,
		'thumb' => $thumb,
		'caption' => $caption,
		'parse_mode' => $parse_mode,
		'supports_streaming' => $supports_streaming,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function SendAnimation($chat_id, $animation, $duration = null, $width = null, $height = null, $thumb = null, $caption = null, $parse_mode = "MARKDOWN", $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendAnimation', [
		'chat_id' => $chat_id,
		'animation' => $animation,
		'duration' => $duration,
		'width' => $width,
		'height' => $height,
		'thumb' => $thumb,
		'caption' => $caption,
		'parse_mode' => $parse_mode,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function SendVoice($chat_id, $voice, $caption = null, $parse_mode = "MARKDOWN", $duration = null, $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendVoice', [
		'chat_id' => $chat_id,
		'voice' => $voice,
		'caption' => $caption,
		'parse_mode' => $parse_mode,
		'duration' => $duration,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function SendVideoNote($chat_id, $video_note, $duration = null, $length = null, $width = null, $height = null, $thumb = null, $caption = null, $parse_mode = "MARKDOWN", $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendVideoNote', [
		'chat_id' => $chat_id,
		'video_note' => $video_note,
		'duration' => $duration,
		'length' => $length,
		'thumb' => $thumb,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function SendMediaGroup($chat_id, $media, $reply_to_message_id = null)
{
	return bot('sendMediaGroup', [
		'chat_id' => $chat_id,
		'media' => $media,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id
	]);
}
function SendLocation($chat_id, $latitude, $longitude, $live_period = null, $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendLocation', [
		'chat_id' => $chat_id,
		'latitude' => $latitude,
		'longitude' => $longitude,
		'live_period' => $live_period,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function SendContact($chat_id, $phone_number, $first_name, $last_name = null, $reply_to_message_id = null, $reply_markup = null, $vcard = null)
{
	return bot('sendContact', [
		'chat_id' => $chat_id,
		'phone_number' => $phone_number,
		'first_name' => $first_name,
		'last_name' => $last_name,
		'vcard' => $vcard,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function SendPoll($chat_id, $question, $options, $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendPoll', [
		'chat_id' => $chat_id,
		'question' => $question,
		'options' => $options,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function GetUserProfilePhotos($user_id, $offset = null, $limit = null)
{
	return bot('getUserProfilePhotos', [
		'user_id' => $user_id,
		'offset' => $offset,
		'limit' => $limit
	]);
}
function GetFile($file_id)
{
	return bot('getFile', [
		'file_id' => $file_id
	]);
}
function File_path($file_path)
{
	$info = file_get_contents("https://api.telegram.org/file/bot" . TOKEN . "/" . $file_path);
	return $info;
}
function KickChatMember($chat_id, $user_id, $until_date = null)
{
	return bot('kickChatMember', [
		'chat_id' => $chat_id,
		'user_id' => $user_id,
		'until_date' => $until_date
	]);
}
function UnKickChatMember($chat_id, $user_id)
{
	return bot('promoteChatMember', [
		'chat_id' => $chat_id,
		'user_id' => $user_id,
		'can_send_messages' => true,
	]);
}
function PromoteChatMember($chat_id, $user_id)
{
	return bot('promoteChatMember', [
		'chat_id' => $chat_id,
		'user_id' => $user_id,
		'can_send_messages' => true,
		'can_delete_messages' => true,
		'can_invite_users' => true,
		'can_restrict_members' => true,
		'can_pin_messages' => true,
	]);
}
function RestrictChatMember($chat_id, $user_id)
{
	return bot('restrictChatMember', [
		'chat_id' => $chat_id,
		'user_id' => $user_id,
		'can_send_messages' => false,
		'can_send_media_messages' => false,
		'can_invite_users' => false,
		'can_send_other_messages' => false,
	]);
}
function UnRestrictChatMember($chat_id, $user_id)
{
	return bot('promoteChatMember', [
		'chat_id' => $chat_id,
		'user_id' => $user_id,
		'can_send_messages' => true,
		'can_send_media_messages' => true,
		'can_send_other_messages' => true,
	]);
}
function DemoteChatMember($chat_id, $user_id)
{
	return bot('promoteChatMember', [
		'chat_id' => $chat_id,
		'user_id' => $user_id,
		'can_change_info' => false,
		'can_post_messages' => false,
		'can_edit_messages' => false,
		'can_delete_messages' => false,
		'can_invite_users' => false,
		'can_restrict_members' => false,
		'can_pin_messages' => false,
		'can_promote_members' => false
	]);
}
function ExportChatInviteLink($chat_id)
{
	return bot('exportChatInviteLink', [
		'chat_id' => $chat_id
	]);
}
function SetChatPhoto($chat_id, $photo)
{
	return bot('setChatPhoto', [
		'chat_id' => $chat_id,
		'photo' => $photo
	]);
}
function DeleteChatPhoto($chat_id)
{
	return bot('deleteChatPhoto', [
		'chat_id' => $chat_id
	]);
}
function SetChatTitle($chat_id, $title)
{
	return bot('setChatTitle', [
		'chat_id' => $chat_id,
		'title' => $title
	]);
}
function SetChatDescription($chat_id, $description)
{
	return bot('setChatDescription', [
		'chat_id' => $chat_id,
		'description' => $description
	]);
}
function PinChatMessage($chat_id, $message_id)
{
	return bot('pinChatMessage', [
		'chat_id' => $chat_id,
		'message_id' => $message_id,
		'disable_notification' => false
	]);
}
function UnpinChatMessage($chat_id)
{
	return bot('unpinChatMessage', [
		'chat_id' => $chat_id,
	]);
}
function LeaveChat($chat_id)
{
	return bot('LeaveChat', [
		'chat_id' => $chat_id
	]);
}
function GetChat($chat_id)
{
	return bot('getChat', [
		'chat_id' => $chat_id
	]);
}
function GetChatAdministrators($chat_id)
{
	return bot('getChatAdministrators', [
		'chat_id' => $chat_id
	]);
}
function GetChatMembersCount($chat_id)
{
	return bot('getChatMembersCount', [
		'chat_id' => $chat_id
	]);
}
function GetChatMember($chat_id, $user_id)
{
	return bot('getChatMember', [
		'chat_id' => $chat_id,
		'user_id' => $user_id
	]);
}
function AnswerCallbackQuery($callback_query_id, $text, $show_alert = false, $url = null, $cache_time = 0)
{
	return bot('answerCallbackQuery', [
		'callback_query_id' => $callback_query_id,
		'text' => $text,
		'show_alert' => $show_alert,
		'url' => $url,
		'cache_time' => $cache_time
	]);
}
function EditMessageText($chat_id, $message_id, $text, $inline_message_id = null, $parse_mode = "MARKDOWN", $disable_web_page_preview = true, $reply_markup = null)
{
	return bot('editMessageText', [
		'chat_id' => $chat_id,
		'message_id' => $message_id,
		'inline_message_id' => $inline_message_id,
		'text' => $text,
		'parse_mode' => $parse_mode,
		'disable_web_page_preview' => $disable_web_page_preview,
		'reply_markup' => $reply_markup
	]);
}
function EditMessageCaption($chat_id, $message_id, $caption, $inline_message_id = null, $parse_mode = "MARKDOWN", $reply_markup = null)
{
	return bot('editMessageCaption', [
		'chat_id' => $chat_id,
		'message_id' => $message_id,
		'inline_message_id' => $inline_message_id,
		'caption' => $caption,
		'parse_mode' => $parse_mode,
		'reply_markup' => $reply_markup
	]);
}
function EditMessageMedia($chat_id, $message_id, $media, $inline_message_id = null, $parse_mode = "MARKDOWN", $reply_markup = null)
{
	return bot('editMessageMedia', [
		'chat_id' => $chat_id,
		'message_id' => $message_id,
		'inline_message_id' => $inline_message_id,
		'media' => $media,
		'reply_markup' => $reply_markup
	]);
}
function EditMessageReplyMarkup($chat_id, $message_id, $reply_markup, $inline_message_id = null)
{
	return bot('editMessageReplyMarkup', [
		'chat_id' => $chat_id,
		'message_id' => $message_id,
		'inline_message_id' => $inline_message_id,
		'reply_markup' => $reply_markup
	]);
}
function StopPoll($chat_id, $message_id, $reply_markup = null)
{
	return bot('stopPoll', [
		'chat_id' => $chat_id,
		'message_id' => $message_id,
		'reply_markup' => $reply_markup
	]);
}
function DeleteMessage($chat_id, $message_id)
{
	return bot('deletemessage', [
		'chat_id' => $chat_id,
		'message_id' => $message_id
	]);
}
function SendSticker($chat_id, $sticker, $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendSticker', [
		'chat_id' => $chat_id,
		'sticker' => $sticker,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function AnswerInlineQuery($inline_query_id, $results, $cache_time = 0, $is_personal = false, $next_offset = null, $switch_pm_text = null, $switch_pm_parameter = null)
{
	return bot('answerInlineQuery', [
		'inline_query_id' => $inline_query_id,
		'results' => $results,
		'cache_time' => $cache_time,
		'is_personal' => $is_personal,
		'next_offset' => $next_offset,
		'switch_pm_text' => $switch_pm_text,
		'switch_pm_parameter' => $switch_pm_parameter
	]);
}
function SendGame($chat_id, $game_short_name, $reply_to_message_id = null, $reply_markup = null)
{
	return bot('sendGame', [
		'chat_id' => $chat_id,
		'game_short_name' => $game_short_name,
		'disable_notification' => false,
		'reply_to_message_id' => $reply_to_message_id,
		'reply_markup' => $reply_markup
	]);
}
function InlineKeyBoard($inlinetext = [], $type, $contents = [], $standar = "column", $count = 1)
{
	for ($i = 0; $i < $count; $i++) {

		$text     = $inlinetext[$i];
		$content = $contents[$i];

		if ($standar == "column") {
			$keyboard['inline_keyboard'][] = [['text' => $text, $type => $content]];
		}
		if ($standar == "row") {
			$keyboard['inline_keyboard'][] = [['text' => $inlinetext[$i], $type => $contents[$i]], ['text' => $inlinetext[++$i], $type => $contents[$i]]];
		}
	}
	$inline = json_encode($keyboard);
	return $inline;
}
function KeyBoard($keytext = [], $standar = "column", $count = 1)
{
	for ($i = 0; $i < $count; $i++) {

		$text = $keytext[$i];

		if ($standar == "column") {
			$keyboard['keyboard'][] = [['text' => $text]];
		}
		if ($standar == "row") {
			$keyboard['keyboard'][] = [['text' => $keytext[$i]], ['text' => $keytext[++$i]]];
		}
	}
	$resize_keyboard = json_encode($keyboard);
	return $resize_keyboard;
}
function myZip($myZip1, $myZip2)
{
	$myZip4 = realpath($myZip1);
	$myZip = new ZipArchive();
	$myZip->open($myZip2, ZipArchive::CREATE | ZipArchive::OVERWRITE);
	$myZip3 = new RecursiveIteratorIterator(
		new RecursiveDirectoryIterator($myZip4),
		RecursiveIteratorIterator::LEAVES_ONLY
	);
	foreach ($myZip3 as $myZip5 => $myZip6) {
		if (!$myZip6->isDir()) {
			$myZip7 = $myZip6->getRealPath();
			$myZip8 = substr($myZip7, strlen($myZip4) + 1);
			$myZip->addFile($myZip7, $myZip8);
		}
	}
	$myZip->close();
}

function myZip1($myZip9, $myZip10 = 2)
{
	$myZip11 = array(' B', ' KB', ' MB', ' GB', ' TB', ' PB', ' EB', ' ZB', ' YB');
	$myZip12 = floor((strlen($myZip9) - 1) / 3);
	return sprintf("%.{$myZip10}f", $myZip9 / pow(1024, $myZip12)) . @$myZip11[$myZip12];
}

function GetMe()
{
	return bot('getMe');
}

function Slin($a){
$P=GetChat($a)->result;
if($P->username==null){
if($P->invite_link!=null){
$d=$P->invite_link;$tc="خاصه";
}else{
$d=ExportChatInviteLink($a)->result;$tc="خاصه";
}
}else{$d="t.me/".$P->username;$tc="عامه";} 
return $d;}


if (!is_dir("Users")) { // used to make dir
mkdir("Users");
}
function isthere($path) // check member.txt & chat.txt
{
$ex = explode("\n", file_get_contents($path));
return $ex;
}

$update     = json_decode(file_get_contents('php://input'));

if (isset($update)) {

	$bot = GetMe()->result;
	$botid = $bot->id;
	$botname = $bot->first_name;
	$botusername = $bot->username;

	$message      = $update->message;
	$data         = $update->callback_query->data;
	$edit         = $update->edited_message;
	$inline_query = $update->inline_query->query;

	if ($message) {

		$date                  = $message->date;
		$message_id            = $message->message_id;
		$text                  = $message->text;
		$chat_id               = $message->chat->id;
		$from_id               = $message->from->id;
		$reply                 = $message->reply_to_message;
		$reply_id              = $message->reply_to_message->from->id;
		$reply_user            = $message->reply_to_message->from->username;
		$reply_message_id      = $message->reply_to_message->message_id;
		$reply_caption         = $message->reply_to_message->caption;
		$reply_audio           = $message->reply_to_message->audio;
		$reply_audio_file_id   = $message->reply_to_message->audio->file_id;
		$reply_audio_size      = $message->reply_to_message->audio->file_size;
		$forward               = $message->forward_from;
		$forward_id            = $forward->id;
		$forward_username      = $forward->username;
		$chat_forward          = $message->forward_from_chat;
		$chat_forward_id       = $chat_forward->id;
		$chat_forward_username = $chat_forward->username;
		$chat_forward_title    = $chat_forward->title;
		$chat_forward_type     = $chat_forward->type;
		$username              = $message->from->username;
		$type                  = $message->chat->type;
		$itprivate             = $type == "private";
		$itchannel             = $type == "channel";
		$itsupergroup          = $type == "supergroup";
		$itgroup               = $type == "group";
		$group_title           = $message->chat->title;
		$name                  = $message->from->first_name;
		$name_tag              = "[ • $name • ](tg://user?id=$from_id)";
		$name_reply            = $message->reply_to_message->from->first_name;
		$name_tag_reply        =  "[$name_reply](tg://user?id=$reply_id)";
		$audio                 = $message->audio;
		$audio_file_id         = $message->audio->file_id;
		$video                 = $message->video;
		$video_file_id         = $message->video->file_id;
		$voice                 = $message->voice;
		$voice_file_id         = $message->voice->file_id;
		$photo                 = $message->photo;
		$photo_file_id         = $message->photo[0]->file_id;
		$sticker               = $message->sticker;
		$sticker_file_id       = $message->sticker->file_id;
		$contact               = $message->contact;
		$contact_number        = $message->contact->phone_number;
		$contact_name          = $message->contact->first_name;
		$video_note            = $message->video_note;
		$video_note_file_id    = $message->video_note->file_id;
		$document              = $message->document;
		$document_name         = $document->file_name;
		$document_file_id      = $document->file_id;
		$gif                   = $message->animation;
		$gif_file_id           = $message->animation->file_id;
		$pin                   = $message->pinned_message;
		$pin_id                = $message->pinned_message->from->id;
		$pin_first_name        = $message->pinned_message->from->first_name;
		$pin_tag               = "[$pin_first_name](tg://user?id=$pin_id)";
		$inline                = $message->reply_markup->inline_keyboard;
		$entities              = $message->entities;
		$location              = $message->location;
		$location_file_id      = $message->location->file_id;
		$new_chat              = $message->new_chat_member;
		$left_chat             = $message->left_chat_member;
		$new_id                = $new_chat->id;
		$left_id               = $left_chat->id;
		$left_name             = $left_chat->first_name;
		$checkbots             = GetChatMember($chat_id, $new_id)->result->user->is_bot;
	} elseif ($data) {
                $username =             $update->callback_query->from->username;
		$date                  = $update->callback_query->date;
		$chat_id               = $update->callback_query->message->chat->id;
		$from_id               = $update->callback_query->message->reply_to_message->from->id;
		$message_id            = $update->callback_query->message->message_id;
		$from_id               = $update->callback_query->from->id;
		$name                  = $update->callback_query->from->first_name;
		$name_tag              = "[$name](tg://user?id=$from_id)";
	} elseif ($edit) {

		$from_id               = $update->edited_message->from->id;
		$chat_id               = $update->edited_message->chat->id;
		$message_id            = $update->edited_message->message_id;
		$name                  = $update->edited_message->from->first_name;
		$name_tag              = "[$name_edit](tg://user?id=$edit_from_id)";
	} elseif ($inline_query) {
		$inline_query_id = $update->inline_query->id;
	}
} #End of $update isset

function SV($a,$b){file_put_contents($a,json_encode($b,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));}
$webhost = "https://" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']; //مسار ملفك من الاستضافه
$path= "Users"; # مسار مجلد الخزن 
$Ty=$Js['type'][$chat_id];
$Ch=$Js['ch'];
if($Js['Jp']==null){
$Js['Jp']="on";
$Js['Forward']="❌";
$Js['Notices']="❌";
$Js['TSF']="❌";
$Js['backp']="❌";
$Vs['TBr']="❌";
$Js['MNT']="❌";
$Js['SubC']="✅";
$Js['BotS']="✅";
SV("Js.json",$Js);
SV("$path/Vs.json",$Vs);
}

$Members = count(isthere("$path/member.txt")) - 1;
$Groups= count(isthere("$path/chat.txt")) - 1;
if($data=="Aban"){
$button = ['رجوع']; $keys = ['band']; $keyboard2 = InlineKeyBoard($button, 'callback_data', $keys, 'column', 1);
}elseif($data=="Admin"){
$button = ['رجوع']; $keys = ['Admins']; $keyboard2 = InlineKeyBoard($button, 'callback_data', $keys, 'column', 1);
}elseif($data=="Aban"){
$button = ['رجوع']; $keys = ['band']; $keyboard2 = InlineKeyBoard($button, 'callback_data', $keys, 'column', 1);
}elseif(in_array($data,['FGbroadcast','Fbroadcast','Gbroadcast','Pbroadcast'])){
$button =['رجوع']; $keys = ['broDa']; $keyboard2 = InlineKeyBoard($button, 'callback_data', $keys, 'column', 1);
}elseif(in_array($data,['addch','Dch','Dfake','addfake','SubK'])){
$button = ['رجوع']; $keys = ['ChaneLL']; $keyboard2 = InlineKeyBoard($button, 'callback_data', $keys, 'column', 1);
}elseif(in_array($data,['DTT','AddT1'])){
$button = ['رجوع']; $keys = ['ET']; $keyboard2 = InlineKeyBoard($button, 'callback_data', $keys, 'column', 1);
}elseif(in_array($data,['AddV1','DelV1'])){
$button = ['رجوع']; $keys = ['EV1']; $keyboard2 = InlineKeyBoard($button, 'callback_data', $keys, 'column', 1);
}elseif(in_array($data,['uBK','rebackup', 'uBKg'])){
$button = ['رجوع']; $keys = ['Bckup']; $keyboard2 = InlineKeyBoard($button, 'callback_data', $keys, 'column', 1);
}elseif(!$data or !in_array($data,['DelV1','AddT1','DTT','Pbroadcast','Gbroadcast','Fbroadcast','FGbroadcast','Aban','Admin','SubK','addfake','Dfake','addch','Dch'])){
$button = ['رجوع']; $keys = ['cancel']; $keyboard2 = InlineKeyBoard($button, 'callback_data', $keys, 'column', 1);
}
$buttn = ['الغاء الاذاعه','رجوع']; $kes = ['caBr','broDa']; $keyboar2 = InlineKeyBoard($buttn, 'callback_data', $kes, 'column', 2);
//****
$keyboard=json_encode(['inline_keyboard'=>[
[['text'=>"الاشعارات: ".$Js['Notices'],'callback_data'=>"Notices"],['text'=>"التواصل: ".$Js['Forward'],'callback_data'=>"Forward"],['text'=>"البوت: ".$Js['BotS'],'callback_data'=>"BotS"]], 
[['text'=>"التصفيه التلقائيه : ".$Js['TSF'],'callback_data'=>"TSF"]], 
[['text'=>"منع التكرار : ".$Js['MNT'],'callback_data'=>"MNT"]], 
[['text'=>"رساله الترحيب (start) ",'callback_data'=>"startM"]], 
[['text'=>"قسم النسخه الاحتياطيه",'callback_data'=>"nusxa"]], 
[['text'=>"قسم الاشتراك الاجباري ",'callback_data'=>"ChaneLL"],['text'=>"قسم الاذاعه ",'callback_data'=>"broDa"]], 
[['text'=>"قسم الادمنيه ",'callback_data'=>"Admins"],['text'=>"قسم الحظر ",'callback_data'=>"band"]], 
[['text'=>"قسم الأحصائيات",'callback_data'=>"count"]], 
[['text'=>"قسم الاعلانات ",'callback_data'=>"EV1"], ['text'=>"قسم التمويل ",'callback_data'=>"ET"]], 
[['text'=>"نقل ملكيه البوت",'callback_data'=>"sudo"]],]]);
//****
$keyboardBa=json_encode(['inline_keyboard'=>[
[['text'=>"حظر عضو ➕",'callback_data'=>"Aban"]], 
[['text'=>"المحظورين 🚫",'callback_data'=>"AllB"]], 
[['text'=>"رجوع",'callback_data'=>"cancel"]]]]);
//****
$keyboardBackup=json_encode(['inline_keyboard'=>[
[['text'=>"نسخه يوميه: ".$Js['backp'],'callback_data'=>"backp"], ['text'=>"جلب نسخه احتياطيه",'callback_data'=>"gBK"]],
[['text'=>"استعاده الخزن",'callback_data'=>"rebackup"]], 
[['text'=>"رفع نسخه اعضاء",'callback_data'=>"uBK"], ['text'=>"رفع نسخه كروبات",'callback_data'=>"uBKg"]], 
[['text'=>"رجوع",'callback_data'=>"cancel"]]]]);
//****
$keyboardAd=json_encode(['inline_keyboard'=>[
[['text'=>"رفع ادمن ➕",'callback_data'=>"Admin"]], 
[['text'=>"الادمنيه 📑",'callback_data'=>"Allad"]], 
[['text'=>"رجوع",'callback_data'=>"cancel"]]]]);
//****
$keyboardB=json_encode(['inline_keyboard'=>[
[['text'=>"تثبيت الاذاعه : ".$Vs['TBr'],'callback_data'=>"TBr"]], 
[['text'=>"اذاعه خاص 📢",'callback_data'=>"Pbroadcast"],['text'=>"توجيه خاص 🔄",'callback_data'=>"Fbroadcast"]], 
[['text'=>"اذاعه كروبات 📢",'callback_data'=>"Gbroadcast"],['text'=>"توجيه كروبات 🔄",'callback_data'=>"FGbroadcast"]], 
[['text'=>"الاحصائيات 📊",'callback_data'=>"count"]], 
[['text'=>"رجوع",'callback_data'=>"cancel"]]]]);
//****
$KeyboardCH=json_encode(['inline_keyboard'=>[
[['text'=>"كليشه واحده : ".$Js['SubC'],'callback_data'=>"SubC"],['text'=>"اضافه قناة ➕",'callback_data'=>"addch"]], 
[['text'=>"عرض القنوات 📋",'callback_data'=>"Vch"],['text'=>"حذف القنوات 🗑",'callback_data'=>"Dch"]], 
[['text'=>"تغيير كليشه الاشتراك 📃",'callback_data'=>"SubK"]], 
[['text'=>"اضف اشتراك وهمي 🔢",'callback_data'=>"addfake"],['text'=>"حذف الاشتراك الوهمي 🗑",'callback_data'=>"Dfake"]], 
[['text'=>"رجوع",'callback_data'=>"cancel"]],]]); 
//****
$KeyboardT=json_encode(['inline_keyboard'=>[
[['text'=>"التمويلات الجاريه 🗄",'callback_data'=>"TT1"],['text'=>"اضف تمويل ➕",'callback_data'=>"AddT1"]], 
[['text'=>"سجل التمويلات 📑",'callback_data'=>"ETM"]], 
[['text'=>"حذف التمويلات 🗑",'callback_data'=>"DTT"]], 
[['text'=>"رجوع",'callback_data'=>"cancel"]]]]); 
//****
$KeyboardV=json_encode(['inline_keyboard'=>[
[['text'=>"عرض الاعلان ⚙️",'callback_data'=>"VV1"]], 
[['text'=>"ضع اعلان 🎁",'callback_data'=>"AddV1"], ['text'=>"حذف الاعلان 🗑",'callback_data'=>"DelV1"]], 
[['text'=>"رجوع",'callback_data'=>"cancel"]]]]); 
//****
if($Js['SubK']==null){
$SubK="انت غير مشترك بقناه البوت ◽
اشترك ثم ارسل /start 
"; 
}else{
$SubK=$Js['SubK']; 
} 
if(!$username){$Suser="لايوجد";}else{$Suser="@$username";}
//----------------

if (file_exists($path . "/counter.txt")) {
$get_c = get($path . "/counter.txt");
$get_t = get($path . "/type.txt");
$get_i = get($path . "/index.txt");
$get_m = get($path . "/msg.txt");
$get_s = get($path . "/sender.txt");
$get_a = get($path . "/caption.txt");
}
function txt($path, $contents, $options = null)
{
file_put_contents($path, $contents, $options);
}
function get($path)
{
return file_get_contents($path);
}
function CurlGetContents($url){
$header = array('Accept-Language: en');
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$data = curl_exec($curl);
curl_close($curl);
return $data;
}

echo ini_get('memory_limit');

function broadcast($Vs, $index, $caption) // set broadcast
{
txt("C/".USR_BOT."/". $GLOBALS['path']. "/index.txt", $index);
$exmem= isthere("C/".USR_BOT."/". $GLOBALS['path']. "/$index.txt");
$mm=get("C/".USR_BOT."/". $GLOBALS['path']. "/m.txt");
$get_s = get("C/".USR_BOT."/". $GLOBALS['path']. "/sender.txt");
$get_c = get("C/".USR_BOT."/". $GLOBALS['path']. "/counter.txt");
 
if ($GLOBALS['text']) {
$x = 20;
txt("C/".USR_BOT."/". $GLOBALS['path']. "/counter.txt", $x);
txt("C/".USR_BOT."/". $GLOBALS['path']. "/a.txt",count(explode("\n",get("C/".USR_BOT."/". $GLOBALS['path']. "/$index.txt")))-1);
txt("C/".USR_BOT."/". $GLOBALS['path']. "/type.txt", "text");
txt("C/".USR_BOT."/". $GLOBALS['path']. "/sender.txt", $GLOBALS['from_id']);
txt("C/".USR_BOT."/". $GLOBALS['path']. "/msg.txt", $GLOBALS['text']);
for ($i = 0; $i <= $x; $i++) {
$y=SendMessage($exmem[$i], $GLOBALS['text'], "MARKDOWN", true)->result->message_id;
EditMessageText($get_s,$mm,"تم الارسال الى *$i* ",null,"markdown",true,json_encode(['inline_keyboard'=>[[['text'=>"- الغاء الاذاعه",'callback_data'=>"caBr"]]]])); 
if($Vs['TBr']=="✅"){
bot('pinchatMessage', [
'chat_id'=>$exmem[$i],
'message_id'=>$y,
]);
} 
}
}
if ($GLOBALS['photo']) {
$x = 20;
txt("C/".USR_BOT."/". $GLOBALS['path']. "/counter.txt", $x);
txt("C/".USR_BOT."/". $GLOBALS['path']. "/type.txt", "photo");
txt("C/".USR_BOT."/". $GLOBALS['path']. "/sender.txt", $GLOBALS['from_id']);
txt("C/".USR_BOT."/". $GLOBALS['path']. "/msg.txt", $GLOBALS['photo_file_id']);
txt("C/".USR_BOT."/". $GLOBALS['path']. "/caption.txt", $caption);
for ($i = 0; $i <= $x; $i++) {
$y=SendPhoto($exmem[$i], $GLOBALS['photo_file_id'], $caption, "MARKDOWN")->result->message_id;
EditMessageText($get_s,$mm,"تم الارسال الى *$i* ",null,"markdown",true,json_encode(['inline_keyboard'=>[[['text'=>"- الغاء الاذاعه",'callback_data'=>"caBr"]]]])); 
if($Vs['TBr']=="✅"){
bot('pinchatMessage', [
'chat_id'=>$exmem[$i],
'message_id'=>$y,
]);
} }
}
if ($GLOBALS['video']) {
$x = 20;
txt("C/".USR_BOT."/". $GLOBALS['path']. "/counter.txt", $x);
txt("C/".USR_BOT."/". $GLOBALS['path']. "/type.txt", "video");
txt("C/".USR_BOT."/". $GLOBALS['path']. "/sender.txt", $GLOBALS['from_id']);
txt("C/".USR_BOT."/". $GLOBALS['path']. "/msg.txt", $GLOBALS['video_file_id']);
txt("C/".USR_BOT."/". $GLOBALS['path']. "/caption.txt", $caption);
for ($i = 0; $i <= $x; $i++) {
$y=SendVideo($exmem[$i], $GLOBALS['video_file_id'], null, null, null, null, $caption, "MARKDOWN")->result->message_id;
EditMessageText($get_s,$mm,"تم الارسال الى *$i* ",null,"markdown",true,json_encode(['inline_keyboard'=>[[['text'=>"- الغاء الاذاعه",'callback_data'=>"caBr"]]]])); 
if($Vs['TBr']=="✅"){
bot('pinchatMessage', [
'chat_id'=>$exmem[$i],
'message_id'=>$y,
]);
} }
}
if ($GLOBALS['video_note']) {
$x = 20;
txt("C/".USR_BOT."/". $GLOBALS['path']. "/counter.txt", $x);
txt("C/".USR_BOT."/". $GLOBALS['path']. "/type.txt", "video_note");
txt("C/".USR_BOT."/". $GLOBALS['path']. "/sender.txt", $GLOBALS['from_id']);
txt("C/".USR_BOT."/". $GLOBALS['path']. "/msg.txt", $GLOBALS['video_note_file_id']);
txt("C/".USR_BOT."/". $GLOBALS['path']. "/caption.txt", $caption);
for ($i = 0; $i <= $x; $i++) {
$y=SendVideoNote($exmem[$i], $GLOBALS['video_note_file_id'], null, null, null, null, null, $caption, "MARKDOWN")->result->message_id;
EditMessageText($get_s,$mm,"تم الارسال الى *$i* ",null,"markdown",true,json_encode(['inline_keyboard'=>[[['text'=>"- الغاء الاذاعه",'callback_data'=>"caBr"]]]])); 
if($Vs['TBr']=="✅"){
bot('pinchatMessage', [
'chat_id'=>$exmem[$i],
'message_id'=>$y,
]);
} }
}
if ($GLOBALS['audio']) {
$x = 20;
txt("C/".USR_BOT."/". $GLOBALS['path']. "/counter.txt", $x);
txt("C/".USR_BOT."/". $GLOBALS['path']. "/type.txt", "audio");
txt("C/".USR_BOT."/". $GLOBALS['path']. "/sender.txt", $GLOBALS['from_id']);
txt("C/".USR_BOT."/". $GLOBALS['path']. "/msg.txt", $GLOBALS['audio_file_id']);
for ($i = 0; $i <= $x; $i++) {
$y=SendAudio($exmem[$i], $GLOBALS['audio_file_id'], $caption, "MARKDOWN")->result->message_id;
EditMessageText($get_s,$mm,"تم الارسال الى *$i* ",null,"markdown",true,json_encode(['inline_keyboard'=>[[['text'=>"- الغاء الاذاعه",'callback_data'=>"caBr"]]]])); 
if($Vs['TBr']=="✅"){
bot('pinchatMessage', [
'chat_id'=>$exmem[$i],
'message_id'=>$y,
]);
} }
}
if ($GLOBALS['voice']) {
$x = 20;
txt("C/".USR_BOT."/". $GLOBALS['path']. "/counter.txt", $x);
txt("C/".USR_BOT."/". $GLOBALS['path']. "/type.txt", "voice");
txt("C/".USR_BOT."/". $GLOBALS['path']. "/sender.txt", $GLOBALS['from_id']);
txt("C/".USR_BOT."/". $GLOBALS['path']. "/msg.txt", $GLOBALS['voice_file_id']);
for ($i = 0; $i <= $x; $i++) {
$y=SendVoice($exmem[$i], $GLOBALS['voice_file_id'], $caption, "MARKDOWN")->result->message_id;
EditMessageText($get_s,$mm,"تم الارسال الى *$i* ",null,"markdown",true,json_encode(['inline_keyboard'=>[[['text'=>"- الغاء الاذاعه",'callback_data'=>"caBr"]]]])); 
if($Vs['TBr']=="✅"){
bot('pinchatMessage', [
'chat_id'=>$exmem[$i],
'message_id'=>$y,
]);
} }
}
if ($GLOBALS['sticker']) {
$x = 20;
txt("C/".USR_BOT."/". $GLOBALS['path']. "/counter.txt", $x);
txt("C/".USR_BOT."/". $GLOBALS['path']. "/type.txt", "sticker");
txt("C/".USR_BOT."/". $GLOBALS['path']. "/sender.txt", $GLOBALS['from_id']);
txt("C/".USR_BOT."/". $GLOBALS['path']. "/msg.txt", $GLOBALS['sticker_file_id']);
for ($i = 0; $i <= $x; $i++) {
$y=SendSticker($exmem[$i], $GLOBALS['sticker_file_id'])->result->message_id;
EditMessageText($get_s,$mm,"تم الارسال الى *$i* ",null,"markdown",true,json_encode(['inline_keyboard'=>[[['text'=>"- الغاء الاذاعه",'callback_data'=>"caBr"]]]])); 
if($Vs['TBr']=="✅"){
bot('pinchatMessage', [
'chat_id'=>$exmem[$i],
'message_id'=>$y,
]);
} }
}
file_get_contents("https://" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
}

function myheaders($Vs, $msg, $index, $caption = null) // run broadcast
{
$abs= $GLOBALS['path'];
$get_c= get($abs . "/counter.txt");
$get_t= get($abs . "/type.txt");
$get_i= get($abs . "/index.txt");
$get_m= get($abs . "/msg.txt");
$get_s= get($abs . "/sender.txt");
 
$mm=get("C/".USR_BOT."/". $GLOBALS['path']. "/m.txt");
$exmem= isthere("C/".USR_BOT."/". $GLOBALS['path']. "/$index.txt");
$count= count($exmem);
if (file_exists($abs . "/counter.txt")) {
$x = $get_c + 20;
if ($get_c + 20 >= $count + 20) {
echo "done!";
SendMessage($get_s, "
تم الاذاعه لـ*$count* عضو
", "MARKDOWN", true,null,json_encode(['inline_keyboard'=>[[['text'=>"الصفحه الرئيسيه",'callback_data'=>"cancel"]]]]));
unlink($abs . "/counter.txt");
unlink($abs . "/type.txt");
unlink($abs . "/index.txt");
unlink($abs . "/m.txt");
unlink($abs . "/msg.txt");
unlink($abs . "/sender.txt");
exit;
} elseif ($get_t == "text") {
for ($i = $get_c; $i <= $x; $i++) {
$y=SendMessage($exmem[$i], $msg, "MARKDOWN", true)->result->message_id;
EditMessageText($get_s,$mm,"تم الارسال الى *$i* ",null,"markdown",true,json_encode(['inline_keyboard'=>[[['text'=>"- الغاء الاذاعه",'callback_data'=>"caBr"]]]])); 
if($Vs['TBr']=="✅"){
bot('pinchatMessage', [
'chat_id'=>$exmem[$i],
'message_id'=>$y,
]);
} }
} elseif ($get_t == "photo") {
for ($i = $get_c; $i <= $x; $i++) {
$y=SendPhoto($exmem[$i], $msg, $caption, "MARKDOWN")->result->message_id;
EditMessageText($get_s,$mm,"تم الارسال الى *$i* ",null,"markdown",true,json_encode(['inline_keyboard'=>[[['text'=>"- الغاء الاذاعه",'callback_data'=>"caBr"]]]])); 
if($Vs['TBr']=="✅"){
bot('pinchatMessage', [
'chat_id'=>$exmem[$i],
'message_id'=>$y,
]);
}  }
} elseif ($get_t == "video") {
for ($i = $get_c; $i <= $x; $i++) {
$y=SendVideo($exmem[$i], $msg, null, null, null, null, $caption, "MARKDOWN")->result->message_id;
EditMessageText($get_s,$mm,"تم الارسال الى *$i* ",null,"markdown",true,json_encode(['inline_keyboard'=>[[['text'=>"- الغاء الاذاعه",'callback_data'=>"caBr"]]]])); 
if($Vs['TBr']=="✅"){
bot('pinchatMessage', [
'chat_id'=>$exmem[$i],
'message_id'=>$y,
]);
}  }
} elseif ($get_t == "video_note") {
for ($i = $get_c; $i <= $x; $i++) {
$y=SendVideoNote($exmem[$i], $msg, null, null, null, null, null, $caption, "MARKDOWN")->result->message_id;
EditMessageText($get_s,$mm,"تم الارسال الى *$i* ",null,"markdown",true,json_encode(['inline_keyboard'=>[[['text'=>"- الغاء الاذاعه",'callback_data'=>"caBr"]]]])); 
if($Vs['TBr']=="✅"){
bot('pinchatMessage', [
'chat_id'=>$exmem[$i],
'message_id'=>$y,
]);
} }
} elseif ($get_t == "audio") {
for ($i = $get_c; $i <= $x; $i++) {
$y=SendAudio($exmem[$i], $msg, $caption, "MARKDOWN")->result->message_id;
EditMessageText($get_s,$mm,"تم الارسال الى *$i* ",null,"markdown",true,json_encode(['inline_keyboard'=>[[['text'=>"- الغاء الاذاعه",'callback_data'=>"caBr"]]]])); 
if($Vs['TBr']=="✅"){
bot('pinchatMessage', [
'chat_id'=>$exmem[$i],
'message_id'=>$y,
]);
}  }
} elseif ($get_t == "voice") {
for ($i = $get_c; $i <= $x; $i++) {
$y=SendVoice($exmem[$i], $msg, $caption, "MARKDOWN")->result->message_id;
EditMessageText($get_s,$mm,"تم الارسال الى *$i* ",null,"markdown",true,json_encode(['inline_keyboard'=>[[['text'=>"- الغاء الاذاعه",'callback_data'=>"caBr"]]]])); 
if($Vs['TBr']=="✅"){
bot('pinchatMessage', [
'chat_id'=>$exmem[$i],
'message_id'=>$y,
]);
}  }
} elseif ($get_t == "sticker") {
for ($i = $get_c; $i <= $x; $i++) {
$y=SendSticker($exmem[$i], $msg)->result->message_id;
EditMessageText($get_s,$mm,"تم الارسال الى *$i* ",null,"markdown",true,json_encode(['inline_keyboard'=>[[['text'=>"- الغاء الاذاعه",'callback_data'=>"caBr"]]]])); 
if($Vs['TBr']=="✅"){
bot('pinchatMessage', [
'chat_id'=>$exmem[$i],
'message_id'=>$y,
]);
}  }
}
txt("C/".USR_BOT."/". $GLOBALS['path']. "/counter.txt", $x);
header("Refresh:2");
echo "<strong>sending to ..." . $get_c . "</strong><br>";
file_get_contents("https://" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
}
}

function forward($Vs,$index) // set broadcast Forward
{
txt("C/".USR_BOT."/". $GLOBALS['path']. "/index.txt", $index);
$exmem= isthere("C/".USR_BOT."/". $GLOBALS['path']. "/$index.txt");
$mm=get("C/".USR_BOT."/". $GLOBALS['path']. "/m.txt");
$get_s = get("C/".USR_BOT."/". $GLOBALS['path']. "/sender.txt");
$get_c = get("C/".USR_BOT."/". $GLOBALS['path']. "/counter.txt");
 
if ($GLOBALS['forward'] || $GLOBALS['chat_forward']) {
$x = 20;
txt("C/".USR_BOT."/". $GLOBALS['path']. "/counter.txt", $x);
txt("C/".USR_BOT."/". $GLOBALS['path']. "/type.txt", "forward");
txt("C/".USR_BOT."/". $GLOBALS['path']. "/sender.txt", $GLOBALS['from_id']);
txt("C/".USR_BOT."/". $GLOBALS['path']. "/msg.txt", $GLOBALS['message_id']);
txt("C/".USR_BOT."/". $GLOBALS['path']. "/a.txt",count(explode("\n",get("C/".USR_BOT."/". $GLOBALS['path']. "/$index.txt")))-1);
for ($i = 0; $i <= $x; $i++) {
$y=ForwardMessage($exmem[$i], $GLOBALS['chat_id'], $GLOBALS['message_id'])->result->message_id;
EditMessageText($get_s,$mm,"تم الارسال الى *$i* ",null,"markdown",true,json_encode(['inline_keyboard'=>[[['text'=>"- الغاء الاذاعه",'callback_data'=>"caBr"]]]]));  
if($Vs['TBr']=="✅"){
bot('pinchatMessage', [
'chat_id'=>$exmem[$i],
'message_id'=>$y,
]);
} 
}
}
file_get_contents("https://" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
}

function myheaders_forward($Vs, $chat_id, $message_id, $index) // run broadcast Forward
{
$abs= $GLOBALS['path'];
$get_c= get($abs . "/counter.txt");
$get_t= get($abs . "/type.txt");
$get_i= get($abs . "/index.txt");
$get_m= get($abs . "/msg.txt");
$get_s= get($abs . "/sender.txt");
 
$mm=get("C/".USR_BOT."/". $GLOBALS['path']. "/m.txt");
$exmem= isthere("C/".USR_BOT."/". $GLOBALS['path']. "/$index.txt");
$count= count($exmem);
if (file_exists($abs . "/counter.txt")) {
$x = $get_c + 20;
if ($get_c + 20 >= $count + 20) {
echo "done!";
SendMessage($get_s, "
تم الاذاعه لـ*$count* عضو
", "MARKDOWN", true,null,json_encode(['inline_keyboard'=>[[['text'=>"الصفحه الرئيسيه",'callback_data'=>"cancel"]]]]));
unlink($abs . "/counter.txt");
unlink($abs . "/type.txt");
unlink($abs . "/index.txt");
unlink($abs . "/msg.txt");
unlink($abs . "/sender.txt");
unlink($abs . "/m.txt");
exit;
} elseif ($get_t == "forward") {
for ($i = $get_c; $i <= $x; $i++) {
$y=ForwardMessage($exmem[$i], $chat_id, $message_id)->result->message_id;
EditMessageText($get_s,$mm,"تم الارسال الى *$i* ",null,"markdown",true,json_encode(['inline_keyboard'=>[[['text'=>"- الغاء الاذاعه",'callback_data'=>"caBr"]]]]));  
if($Vs['TBr']=="✅"){
bot('pinchatMessage', [
'chat_id'=>$exmem[$i],
'message_id'=>$y,
]);
} 
}
}
txt("C/".USR_BOT."/". $GLOBALS['path']. "/counter.txt", $x);
header("Refresh:2");
echo "<strong>sending to ..." . $get_c . "</strong><br>";
get("https://" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
}
}

if (!$update) {// set the headers for bradcasting
if ($get_t == "text") {
myheaders($Vs,$get_m, $get_i);
}
if ($Info["type"][0] == "photo") {
myheaders($Vs,$get_m, $get_i, $get_a);
}
if ($Info["type"][0] == "video") {
myheaders($Vs,$get_m, $get_i, $get_a);
}
if ($Info["type"][0] == "video_note") {
myheaders($Vs,$get_m, $get_i, $get_a);
}
if ($Info["type"][0] == "audio") {
myheaders($Vs,$get_m, $get_i, $get_a);
}
if ($Info["type"][0] == "voice") {
myheaders($Vs,$get_m, $get_i, $get_a);
}
if ($Info["type"][0] == "sticker") {
myheaders($Vs,$get_m, $get_i);
}

# forward ... 

if ($get_t == "forward") {
myheaders_forward($Vs,$get_s, $get_m, $get_i);
}
}
if($message and $chat_id!=$sudo and !in_array($chat_id, $Js['admin']) and $itprivate){
if(!in_array($chat_id,$dxx['new'])){
if(count($dxx['new'])<5){
$dxx['new'][]=$chat_id; 
SV("dxx.json",$dxx);
}else{
unset($dxx['new'][0]); 
SV("dxx.json",$dxx);
$dxx['new']=array_values($dxx['new']);
SV("dxx.json",$dxx); 
$dxx['new'][]=$chat_id; 
SV("dxx.json",$dxx);
}} 
if(!in_array($chat_id,$dxx['endm'])){
$dxx['endm'][]=$chat_id; 
SV("dxx.json",$dxx);
} 
if($Js['MNT']=="✅"){
if($Ds[$from_id]==null){
$Ds[$from_id][]=$text;
SV("Ds.json",$Ds);
}elseif($Ds[$from_id]!=null and $text==$Ds[$from_id][0]){
$Ds[$from_id][]=$text;
SV("Ds.json",$Ds);
}elseif($Ds[$from_id]!=null and $text!=$Ds[$from_id][0]){
unset($Ds[$from_id]);
SV("Ds.json",$Ds);
}
$sudoo="[$sudo](tg://user?id=".$sudo.")"; 
if($text==$Ds[$from_id][15] and $from_id!=$botid){
SendMessage($chat_id,"- تم حظرك من البوت بسبب التكرار \n لفك الحظر راسل المطور $sudoo ","markdown",true,$message_id);
$Js['band'][]=$from_id;
SV("Js.json",$Js);
unset($Ds[$from_id]);
SV("Ds.json",$Ds);
SendMessage($sudo,"
- تم حظر هذا الشخص بسبب التكرار 

• معلوماته

اسمه: $name_tag
معرفه: [$Suser]
ايديه: `$from_id`
","markdown",true,null,json_encode(['inline_keyboard'=>[[['text'=>"الغاء حظر",'callback_data'=>"unban_".$from_id]],]]));
}
} 
} 

if($Js['d']!=date("d")){
if($Js['backp']=="✅" and !$data){
bot('senddocument',['chat_id'=>$sudo,'document'=>new CURLFile("Users/member.txt"),]);
bot('senddocument',['chat_id'=>$sudo,'document'=>new CURLFile("Users/chat.txt"),]);
txt("$path/Js.txt",file_get_contents("Js.json")); 
} 
unset($dxx['new']); 
unset($dxx['endm']); 
$Js['d']=date("d"); 
SV("Js.json",$Js); 
} 

if($chat_id==$sudo or in_array($from_id, $Js['admin'])){

if ($text == '/start') { // start message
SendMessage($chat_id, "• اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖\n\n- يمكنك التحكم في البوت الخاص بك من هنا\n\n~~~~~~~~~~~~~~~~~","markdown", true, null, $keyboard);
}

if ($data == 'cancel') { // cancel 
$inf= "• اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖\n\n- يمكنك التحكم في البوت الخاص بك من هنا\n\n~~~~~~~~~~~~~~~~~";
EditMessageText($chat_id, $message_id, $inf, null, "MARKDOWN", true, $keyboard);if($Ty!=null){unset($Js['type'][$chat_id]);SV("Js.json",$Js);} 
if (file_exists("$path/broadcast$chat_id.txt")) :
unlink("$path/broadcast$chat_id.txt");
unlink("$path/type$chat_id.txt");
endif;
}
//الاحصائيات
function format_number($number) {
    $suffixes = array('', 'k', 'm', 'b', 't');
    $suffix_index = 0;

    while ($number >= 1000) {
        $number /= 1000;
        $suffix_index++;
    }

    return round($number, 1) . $suffixes[$suffix_index];
}

$Allcount=$Groups + $Members;
$BERO = json_decode(file_get_contents("BERO.json"),1);
$sc = count(explode("\n", file_get_contents("https://".$_SERVER['SERVER_NAME'] . "" . str_replace("/nn.php","", $_SERVER['SCRIPT_NAME'])."/MAKERBOTS/almm"))) + 43000;
$scs = format_number($sc);
$countbot = $BERO["CBOTS"] + 9653;
$endM=count($dxx['endm']);
$band=count($Js['band']); 
if($data=="count"){
for($i=0;$i<count($dxx['new']);$i++){
$p=$i+1;
$uy="$uy $p - [".$dxx['new'][$i]."](tg://user?id=".$dxx['new'][$i].")\n"; 
} 
$url = "https://".$_SERVER['SERVER_NAME'] . "" . str_replace("/nn.php","", $_SERVER['SCRIPT_NAME'])."/MAKERBOTS/almm";
EditMessageText($chat_id,$message_id,"
مرحبا بك في قسم الاحصائيات 📊

• عدد المسخدمين الكلي : *$Allcount* 
• عدد المستخدمين في الخاص : *$Members*
• عدد الكروبات والقنوات : *$Groups*
• عدد المحظورين : *$band*
• عدد المتفاعلين اليوم : *$endM*

قائمة اخر الاعضاء الذين استخدموا البوت
-------------- 
$uy

• عدد البوتات المصنوعه : $countbot
- عدد مستخدمين البوتات المصنوعه : $sc | $scs
",null,"markdown",true,$keyboard2);
}
//الاحصائيات

//رفع وجلب نسخه
if($data=="Bckup"  ){
if($Ty!=null){unset($Js['type'][$chat_id]);SV("Js.json",$Js);} 
EditMessageText($chat_id,$message_id,"اهلا بك في قسم النسخ الاحتياطيه",null,"markdown",true,$keyboardBackup);
}

if($data=="gBK"){
bot('senddocument',['chat_id'=>$chat_id,'document'=>new CURLFile("Users/member.txt"),]);
bot('senddocument',['chat_id'=>$chat_id,'document'=>new CURLFile("Users/chat.txt"),]);
}

if($data=="uBK"){
$k="قم بأرسال ملف الاعضاء بصيغه txt";
EditMessageText($chat_id,$message_id,$k,null,"markdown",true,$keyboard2);
$Js['type'][$chat_id]=$data;SV("Js.json",$Js);
}
if($data=="rebackup" ){
if(get("$path/Js.txt")!=null){
EditMessageText($chat_id,$message_id,"تم تجديد البيانات ✅",null,"markdown",true,$keyboard2);
$Js=json_decode(file_get_contents("$path/Js.txt")); 
SV("Js.json",$Js);
}else{
EditMessageText($chat_id,$message_id,"لا توجد بيانات لأستعادتها",null,"markdown",true,$keyboard2);
}}
if($Ty=="uBK"){
if($document ){
if(preg_match("/(.*).txt/",$document_name)){unset($Js['type'][$chat_id]);SV("Js.json",$Js);
$url = json_decode(file_get_contents('https://api.telegram.org/bot'.TOKEN.'/getFile?file_id='.$document_file_id),true);
$pth = $url['result']['file_path'];
$f = file_get_contents('https://api.telegram.org/file/bot'.TOKEN.'/'.$pth);
file_put_contents("Users/member.txt","$f");
SendMessage($chat_id,"تم رفع النسخه","markdown",true,$message_id,$keyboard2);
}else{SendMessage($chat_id,"عذرا هذا الملف ليس بصيغه txt","markdown",true,$message_id,$keyboard2);}}}
if($data=="uBKg"){
$k="قم بأرسال ملف الاعضاء بصيغه txt";
EditMessageText($chat_id,$message_id,$k,null,"markdown",true,$keyboard2);
$Js['type'][$chat_id]=$data;SV("Js.json",$Js);
}
if($Ty=="uBKg"){
if($document ){
if(preg_match("/(.*).txt/",$document_name)){unset($Js['type'][$chat_id]);SV("Js.json",$Js);
$url = json_decode(file_get_contents('https://api.telegram.org/bot'.TOKEN.'/getFile?file_id='.$document_file_id),true);
$pth = $url['result']['file_path'];
$f = file_get_contents('https://api.telegram.org/file/bot'.TOKEN.'/'.$pth);
file_put_contents("Users/chat.txt","$f");
SendMessage($chat_id,"تم رفع النسخه","markdown",true,$message_id,$keyboard2);
}else{SendMessage($chat_id,"عذرا هذا الملف ليس بصيغه txt","markdown",true,$message_id,$keyboard2);}}}
//رفع وجلب نسخه

//قسم الاشتراك الاجباري
if($data=="ChaneLL" ){if($Ty!=null){unset($Js['type'][$chat_id]);SV("Js.json",$Js);} 
EditMessageText($chat_id,$message_id,"اهلا بك في قسم الاشتراك الاجباري",null,"markdown",true,$KeyboardCH);
}
if($data=="addch"){
$k="قم بتوجيه رساله من القناه";
EditMessageText($chat_id,$message_id,$k,null,"markdown",true,$keyboard2);
$Js['type'][$chat_id]=$data;SV("Js.json",$Js);
}
if($chat_forward ){
if($Ty=="addch"){
if(!in_array($chat_forward_id,$Ch)){
if(GetChatMember($chat_forward_id, $botid)->result->status=="administrator"){
$Js['ch'][]=$chat_forward_id;
SV("Js.json",$Js);
$k="تم حفظ القناة";
SendMessage($chat_id,$k,"markdown",true,$message_id,$keyboard2);
}else{SendMessage($chat_id,"البوت ليس ادمن","markdown",true,$message_id,null);}
}else{SendMessage($chat_id,"هذه القناة مضافه بالفعل","markdown",true,$message_id,null);}
}}
$channel=$Js['chs'];
if($data=="Vch"){
if(count($Ch)!=0){
$k="اليك القنوات";
$reply_markup = [];
foreach($Js['ch'] as $T){
$o=Slin($T);
$P=GetChat($T)->result->title;
$reply_markup['inline_keyboard'][] =[['text'=>trim($P),'url'=>"$o"],['text'=>"🗑",'callback_data'=>"Del_$T"]];}
$reply_markup['inline_keyboard'][] =[['text'=>"➕",'callback_data'=>"addch"]];
$reply_markup['inline_keyboard'][] =[['text'=>"رجوع",'callback_data'=>"cancel"]];
$K=json_encode($reply_markup); 
EditMessageText($chat_id,$message_id,$k,null,"markdown",true,$K);
}else{EditMessageText($chat_id,$message_id,"لم تقم بأضافه اي قناه",null,"markdown",true,$keyboard2);}
}

if(preg_match("/(Del_)(.*?)/",$data)){
$st=str_replace("Del_","",$data);
$st=array_search($st,$Js['ch']);
unset($Js['ch'][$st]);
SV("Js.json",$Js);
$Js['ch']=array_values($Js['ch']);
SV("Js.json",$Js); $k="تم حذف القناة";
$reply_markup = [];
foreach($Js['ch'] as $T){
if($T!=$st){
$o=Slin($T);
$P=GetChat($T)->result->title;
$reply_markup['inline_keyboard'][] =[['text'=>trim($P),'url'=>"$o"],['text'=>"🗑",'callback_data'=>"Del_$T"]];}}
$reply_markup['inline_keyboard'][] =[['text'=>"➕",'callback_data'=>"addch"]];
$reply_markup['inline_keyboard'][] =[['text'=>"رجوع",'callback_data'=>"cancel"]];
$K=json_encode($reply_markup); 
EditMessageText($chat_id,$message_id,$k,null,"markdown",true,$K);
}
if($data=="Dch"){
if(count($Ch)!=0){
EditMessageText($chat_id,$message_id,"تم حذف القنوات",null,"markdown",true,$keyboard2);
unset($Js['ch']);SV("Js.json",$Js);
}else{EditMessageText($chat_id,$message_id,"لم تقم بأضافه اي قناه",null,"markdown",true,$keyboard2);}
}
if($data=="SubK"){
$k="- حسنا عزيزي ارسل رساله الاشتراك الجديده 
";
EditMessageText($chat_id,$message_id,$k,null,"markdown",true,$keyboard2);
$Js['type'][$chat_id]=$data;SV("Js.json",$Js);
}
if($Ty=="SubK" and !$data){
if($text!="/start"){
unset($Js['type'][$chat_id]);
$Js['SubK']=$text;
SV("Js.json",$Js);
SendMessage($chat_id,"تم الحفظ بنجاح ✅","markdown",true,$message_id,$keyboard2);
}
} 

if($Ty=="addfake" and preg_match("/(.com)|(www)|(http)|(.me)|(@)|(t.me)|(+)/",$text)){
if($Js['fakesub']!=$text ){
SendMessage($chat_id,"تم الحفظ ✅","markdown",true,$message_id,$keyboard2);
$Js['fakesub']=$text;
SV("Js.json",$Js);unset($Js['type'][$chat_id]);SV("Js.json",$Js);
}else{SendMessage($chat_id,"هذا الاشتراك مضاف بالفعل","markdown",true,$message_id,$keyboard2);
}}
if($data=="addfake"){
$k="- حسنا عزيزي قم بأرسال كليشه لوضعها ك أشتراك وهمي
مثل


`يجب عليك دخول هذا البوت اول @H7JBOT`
";
EditMessageText($chat_id,$message_id,$k,null,"markdown",true,$keyboard2);
$Js['type'][$chat_id]=$data;SV("Js.json",$Js);
}

if($data=="Dfake"){
if($Js['fakesub']!=null){
EditMessageText($chat_id,$message_id,"تم حذف الاشتراك الوهمي \n [". $Js['fakesub']."] ",null,"markdown",true,$keyboard2);
unset($Js['fakesub']);
SV("Js.json",$Js);
unset($Ds['fakesub']);
SV("Ds.json",$Ds);
}else{EditMessageText($chat_id,$message_id,"انت لم تقم بأضافه اشتراك وهمي ",null,"markdown",true,$keyboard2);}
}

//قسم الاشتراك الاجباري

//قسم الاعلانات
if($data=="EV1" ){if($Ty!=null){unset($Js['type'][$chat_id]);SV("Js.json",$Js);} 
EditMessageText($chat_id,$message_id,"اهلا بك في قسم الاعلانات",null,"markdown",true,$KeyboardV);
}
if($Ty=="AddV1"){
if(preg_match("/([A-Z])|([a-z])|([ا-ي])/",$text)){
SendMessage($chat_id,"تم وضع الاعلان في بوت ✅","markdown",true,$message_id,$keyboard2);
$Js['ads']=json_encode($update); unset($Js['type'][$chat_id]);SV("Js.json",$Js);
}}
if($data=="AddV1"){
$k="قم بأرسال اعلان جديد";
EditMessageText($chat_id,$message_id,$k,null,"markdown",true,$keyboard2);
$Js['type'][$chat_id]=$data;SV("Js.json",$Js);
}
if($data=="VV1"){
if($Js['ads']!=null){
$u=json_decode($Js['ads']);
if(!isset($u->message->reply_markup)){
SendMessage($chat_id,$u->message->text,null,null);
}else{SendMessage($chat_id,$u->message->text,null,null,null,json_encode($u->message->reply_markup));}
}else{EditMessageText($chat_id,$message_id,"انت لم تقم بأضافه اعلان لعرضه",null,"markdown",true,$keyboard2);}
}
if($data=="DelV1"){
if($Js['ads']!=null){
EditMessageText($chat_id,$message_id,"تم حذف الاعلان بنجاح ✅",null,"markdown",true,$keyboard2);
unset($Js['ads']);
unset($Js['adss']);
SV("Js.json",$Js);
}else{EditMessageText($chat_id,$message_id,"انت لم تقم بأضافه اعلان لتحذفه",null,"markdown",true,$keyboard2);}
}
//قسم الاعلانات

//قسم التمويل
if($data=="ET" ){if($Ty!=null){unset($Js['type'][$chat_id]);SV("Js.json",$Js);} 
EditMessageText($chat_id,$message_id,"اهلا بك في قسم التمويلات",null,"markdown",true,$KeyboardT);
}
if($data=="nusxa" ){
EditMessageText($chat_id,$message_id,"اهلا بك في قسم النسخه التلقائيه",null,"markdown",true,$keyboardBackup);
}
if(!preg_match("/([A-Z])|([a-z])|([ا-ي])/",$text) and preg_match("/([0-9])/",$text) and $text!=0){
$yt=explode("+", $Ty); 
if($yt[1]=="AddT1"){
SendMessage($chat_id,"تم اضافه التمويل ","markdown",true,$message_id,$keyboard2);
$Js['TMM'][]=$yt[0];
$Ds['TMo'][$yt[0]]=['count'=>[],'C'=>$text]; 
SV("Ds.json", $Ds); 
unset($Ty); 
SV("Js.json", $Js); 
}} 
if($chat_forward ){
if($Ty=="AddT1"){
if(!in_array($chat_forward_id,$Js['TMM'])){
if(GetChatMember($chat_forward_id, $botid)->result->status=="administrator"){
$Js['type'][$chat_id]=$chat_forward_id."+AddT1";SV("Js.json",$Js);
$k="حسنا ارسل عدد الاعضاء الذي تريد  اضافتهم لهذه القناه -";
SendMessage($chat_id,$k,"markdown",true,$message_id,$keyboard2);
}else{SendMessage($chat_id,"البوت ليس ادمن","markdown",true,$message_id,null);}
}else{SendMessage($chat_id,"هذه القناة تحت التمويل بالفعل","markdown",true,$message_id,null);}
}
}

if($data=="AddT1"){
$k="قم بتوجيه رساله من القناه";
EditMessageText($chat_id,$message_id,$k,null,"markdown",true,$keyboard2);
$Js['type'][$chat_id]=$data;SV("Js.json",$Js);
}
$channel=$Js['TMM'];
if($data=="TT1"){
if(count($channel)!=0){
$k="اليك التمويلات الجاريه";
$reply_markup = [];
for($i=0;$i<count($channel);$i++){
$T=$channel[$i]; 
$o=Slin($T);
$P=GetChat($T)->result->title;
$cc=count($Ds['TMo'][$T]['count']); 
$co=$Ds['TMo'][$T]['C']; 
$reply_markup['inline_keyboard'][] =[['text'=>trim($P),'url'=>"$o"],['text'=>$co."/".$cc,'url'=>$o],['text'=>"🗑",'callback_data'=>"DelT1_$T"]];}
$reply_markup['inline_keyboard'][] =[['text'=>"➕",'callback_data'=>"AddT1"]];
$reply_markup['inline_keyboard'][] =[['text'=>"رجوع",'callback_data'=>"ET"]];
$K=json_encode($reply_markup); 
EditMessageText($chat_id,$message_id,$k,null,"markdown",true,$K);
}else{EditMessageText($chat_id,$message_id,"لم تقم بأضافه اي تمويل",null,"markdown",true,$keyboard2);}
}

if(preg_match("/(DelT1_)(.*?)/",$data)){
$st=str_replace("DelT1_","",$data);
$st=array_search($st,$Js['TMM']);
unset($Js['TMM'][$st]);
SV("Js.json",$Js);
$Js['TMM']=array_values($Js['TMM']);SV("Js.json",$Js); 
unset($Ds['TMo'][$st]); 
unset($Ds['X'][$st]); 
SV("Ds.json", $Ds); 
$k="تم حذف التمويل";
$reply_markup = [];
for($i=0;$i<count($channel);$i++){
$T=$channel[$i]; 
if($T!=$st){
$o=Slin($T);
$P=GetChat($T)->result->title;
$cc=count($Ds['TMo'][$T]['count']); 
$co=$Ds['TMo'][$T]['C']; 
$reply_markup['inline_keyboard'][] =[['text'=>trim($P),'url'=>"$o"],['text'=>$co."/".$cc,'url'=>$o],['text'=>"🗑",'callback_data'=>"DelT1_$T"]];}} 
$reply_markup['inline_keyboard'][] =[['text'=>"➕",'callback_data'=>"AddT1"]];
$reply_markup['inline_keyboard'][] =[['text'=>"رجوع",'callback_data'=>"ET"]];
$K=json_encode($reply_markup); 
EditMessageText($chat_id,$message_id,$k,null,"markdown",true,$K);
}
if($data=="ETM"){
for($i=0;$i<count($Js['ETM']);$i++){
$t=$i+1;
$io=explode("+",$Js['ETM'][$i]); 
$io1=$io[0]; $io2=$io[1]; 
$u="$u $t - القناه:  [$io1] 
عدد الاعضاء المضافين:  *$io2*

--------------------
 "; 
} 
EditMessageText($chat_id,$message_id," 
- اليك سجل التمويلات

$u
",null,"markdown",true,$keyboard2);
} 
if($data=="DTT"){
if(count($Js['TMM'])!=0){
EditMessageText($chat_id,$message_id,"تم حذف التمويلات ",null,"markdown",true,$keyboard2);
unset($Js['TMM']); unset($Ds['TMo']);unset($Ds['X']);SV("Ds.json", $Ds); SV("Js.json",$Js);
}else{EditMessageText($chat_id,$message_id,"انت لم تقم بأضافه اي تمويل",null,"markdown",true,$keyboard2);}
}
//قسم التمويل



//الازرار
if($data=="MNT" or $data=="TSF"or $data =="Forward" or $data=="BotS" or $data=="Notices"){
if($Js[$data]=="✅"){
$Js[$data]="❌";SV("Js.json",$Js);
$Xd="تم القفل بنجاح 🔒";
}else{
$Js[$data]="✅";SV("Js.json",$Js);
$Xd="تم الفتح بنجاح 🔓";
}
AnswerCallbackQuery($update->callback_query->id,$Xd, false);
EditMessageReplyMarkup($chat_id, $message_id,json_encode(['inline_keyboard'=>[[['text'=>"الاشعارات: ".$Js['Notices'],'callback_data'=>"Notices"],['text'=>"التواصل: ".$Js['Forward'],'callback_data'=>"Forward"],['text'=>"البوت: ".$Js['BotS'],'callback_data'=>"BotS"]], [['text'=>"التصفيه التلقائيه : ".$Js['TSF'],'callback_data'=>"TSF"]], [['text'=>"منع التكرار : ".$Js['MNT'],'callback_data'=>"MNT"]], [['text'=>"رساله الترحيب (start) ",'callback_data'=>"startM"]], [['text'=>"قسم الاشتراك الاجباري ",'callback_data'=>"ChaneLL"],['text'=>"قسم الاذاعه ",'callback_data'=>"broDa"]], [['text'=>"قسم الادمنيه ",'callback_data'=>"Admins"],['text'=>"قسم الحظر ",'callback_data'=>"band"]], [['text'=>"قسم الأحصائيات",'callback_data'=>"count"]], [['text'=>"قسم الاعلانات ",'callback_data'=>"EV1"], ['text'=>"قسم التمويل ",'callback_data'=>"ET"]], [['text'=>"نقل ملكيه البوت",'callback_data'=>"sudo"]],]]));
}
if($data=="SubC" or $data=="TBr" or $data=="backp"){
if($data=="SubC"){
if($Js[$data]=="✅"){
$Js[$data]="❌";SV("Js.json",$Js);
}else{
$Js[$data]="✅";SV("Js.json",$Js);
}
$kk=json_encode(['inline_keyboard'=>[[['text'=>"كليشه واحده : ".$Js['SubC'],'callback_data'=>"SubC"],['text'=>"اضافه قناة ➕",'callback_data'=>"addch"]], [['text'=>"عرض القنوات 📋",'callback_data'=>"Vch"],['text'=>"حذف القنوات 🗑",'callback_data'=>"Dch"]], [['text'=>"تغيير كليشه الاشتراك 📃",'callback_data'=>"SubK"]], [['text'=>"اضف اشتراك وهمي 🔢",'callback_data'=>"addfake"],['text'=>"حذف الاشتراك الوهمي 🗑",'callback_data'=>"Dfake"]], [['text'=>"رجوع",'callback_data'=>"cancel"]],]]); 
}elseif($data=="TBr"){
if($Vs[$data]=="✅"){
$Vs[$data]="❌";SV("$path/Vs.json",$Vs);
}else{
$Vs[$data]="✅";SV("$path/Vs.json",$Vs);
}
$kk=json_encode(['inline_keyboard'=>[[['text'=>"تثبيت الاذاعه : ".$Vs['TBr'],'callback_data'=>"TBr"]], [['text'=>"اذاعه خاص 📢",'callback_data'=>"Pbroadcast"],['text'=>"توجيه خاص 🔄",'callback_data'=>"Fbroadcast"]], [['text'=>"اذاعه كروبات 📢",'callback_data'=>"Gbroadcast"],['text'=>"توجيه كروبات 🔄",'callback_data'=>"FGbroadcast"]], [['text'=>"الاحصائيات 📊",'callback_data'=>"count"]], [['text'=>"رجوع",'callback_data'=>"cancel"]]]]); 
}elseif($data=="backp"){
if($Js[$data]=="✅"){
$Js[$data]="❌";SV("Js.json",$Js);
}else{
$Js[$data]="✅";SV("Js.json",$Js);
}
$kk=json_encode(['inline_keyboard'=>[[['text'=>"نسخه يوميه: ".$Js['backp'],'callback_data'=>"backp"], ['text'=>"جلب نسخه احتياطيه",'callback_data'=>"gBK"]],[['text'=>"استعاده الخزن",'callback_data'=>"rebackup"]], [['text'=>"رفع نسخه اعضاء",'callback_data'=>"uBK"], ['text'=>"رفع نسخه كروبات",'callback_data'=>"uBKg"]], [['text'=>"رجوع",'callback_data'=>"cancel"]]]]); 
}
EditMessageReplyMarkup($chat_id, $message_id,$kk); 
}

//الازرار


//رساله الستارت
if($data=="Olstart"){
$k="- تم العوده الى رساله البدأ الافتراضيه";
EditMessageText($chat_id,$message_id,$k,null,"markdown",true,$keyboard2);
unset($Js['start']);SV("Js.json",$Js);
}
if($data=="startM"){
$io=json_encode(['inline_keyboard'=>[
[['text'=>"العوده الى الافتراضي",'callback_data'=>"Olstart"]],
[['text'=>"رجوع",'callback_data'=>"cancel"]],
]]);
$k="- حسنا عزيزي ارسل رساله البدأ الجديده
رساله البدأ الحاليه: 


`$START`

";
EditMessageText($chat_id,$message_id,$k,null,"markdown",true,$io);
$Js['type'][$chat_id]=$data;SV("Js.json",$Js);
}
if($Ty=="startM" and !$data){
if($text){
unset($Js['type'][$chat_id]);
$Js['start']=$text;
SV("Js.json",$Js);
SendMessage($chat_id,"تم الحفظ بنجاح ✅","markdown",true,$message_id,$keyboard2);
}
} 
//رساله الستارت

//نقل الملكيه
if($chat_id==$sudo){
if($data=="sudo"){
$ssa=md5(rand(82828,188888));
$k="قم بأرسال هذا الرابط للشخص الذي تريد نقل الملكيه له\n https://t.me/$botusername?start=$ssa";
EditMessageText($chat_id,$message_id,$k,null,"markdown",true,$keyboard2);
$Js['type'][$chat_id]=$data;
$Js['sudoF']=$ssa;
SV("Js.json",$Js);
}}

//نقل الملكيه


//قسم الحظر
if($data=="band"){if($Ty!=null){unset($Js['type'][$chat_id]);SV("Js.json",$Js);} 
EditMessageText($chat_id,$message_id,'اهلا بك في قسم الحظر',null,"markdown",true,$keyboardBa);
}

if($data=="Aban"){
$k="حسنا عزيزي ارسل ايدي العضو لحظره ⛔";
EditMessageText($chat_id,$message_id,$k,null,"markdown",true,$keyboard2);
$Js['type'][$chat_id]=$data;SV("Js.json",$Js);
}
if($Ty=="Aban"){
if(preg_match("/([0-9])/",$text)){
if(!preg_match("/([A-Z])|([a-z])|([ا-ي])/",$text)){
if(!in_array($text, $Js['band'])){
SendMessage($chat_id,"تم حظر العضو بنجاح","markdown",true,$message_id,$keyboard2);
$Js['band'][]="$text";unset($Js['type'][$chat_id]);SV("Js.json",$Js);
}else{SendMessage($chat_id,"العضو محظور من قبل","markdown",true,$message_id,$keyboard2);
}}}}
if($data=="AllB"){
if(count($Js['band'])!=0){
$reply_markup = [];
foreach($Js['band'] as $T){
$P=GetChat($T)->result;
if($P->username==null){
$o="tg://openmessage?user_id=$T";}else{$o="t.me/".$P->username;}$reply_markup['inline_keyboard'][] =[['text'=>$T,'url'=>"$o"],['text'=>"🗑",'callback_data'=>"unban_$T"]];}$reply_markup['inline_keyboard'][] =[['text'=>"رجوع",'callback_data'=>"band"]];
$K=json_encode($reply_markup); 
EditMessageText($chat_id,$message_id,'اليك قائمه المحظورين ',null,"markdown",true,$K);
}else{
EditMessageText($chat_id,$message_id,"لايوجد محظورين",null,"markdown",true,$keyboard2);
}}
if(preg_match("/(unban_)(.*?)/",$data)){
$st=str_replace("unban_","",$data);
$st=array_search($st,$Js['band']);
unset($Js['band'][$st]);
SV("Js.json",$Js);
$Js['band']=array_values($Js['band']);
SV("Js.json",$Js);
$k="تم الغاء حظر العضو";
$reply_markup = [];
foreach($Js['band'] as $T){
if($T!=$st){
$P=GetChat($T)->result;
if($P->username==null){
$o="tg://openmessage?user_id=$T";}else{$o="t.me/".$P->username;}$reply_markup['inline_keyboard'][] =[['text'=>$T,'url'=>"$o"],['text'=>"🗑",'callback_data'=>"unban_$T"]];}}$reply_markup['inline_keyboard'][] =[['text'=>"رجوع",'callback_data'=>"band"]];
$K=json_encode($reply_markup); 
EditMessageText($chat_id,$message_id,$k,null,"markdown",true,$K);
}
//قسم الحظر

//قسم الادمنيه
if($data=="Admins"){
if($from_id==$sudo){if($Ty!=null){unset($Js['type'][$chat_id]);SV("Js.json",$Js);} 
EditMessageText($chat_id,$message_id,'اهلا بك في قسم الادمنيه',null,"markdown",true,$keyboardAd);
}else{AnswerCallbackQuery($update->callback_query->id,"عذرا عزيزي هذا القسم مخصص للمطور الاساسي فقط 🚫",true);}}

if($data=="Admin"){
$k="حسنا عزيزي ارسل ايدي العضو لرفعه ادمن⛔";
EditMessageText($chat_id,$message_id,$k,null,"markdown",true,$keyboard2);
$Js['type'][$chat_id]=$data;SV("Js.json",$Js);
}if($Ty=="Admin"){
if(preg_match("/([0-9])/",$text) and $from_id==$sudo){
if(!preg_match("/([A-Z])|([a-z])|([ا-ي])/",$text)){
if(!in_array($text, $Js['admin'])){
SendMessage($chat_id,"تم رفع العضو بنجاح","markdown",true,$message_id,$keyboard2);
$Js['admin'][]=$text;unset($Js['type'][$chat_id]);SV("Js.json",$Js);
}else{SendMessage($chat_id,"العضو ادمن من قبل","markdown",true,$message_id,$keyboard2);
}}}}if($data=="Allad"){
if(count($Js['admin'])!=0){
$reply_markup = [];
foreach($Js['admin'] as $T){
$P=GetChat($T)->result;
if($P->username==null){
$o="tg://openmessage?user_id=$T";}else{$o="t.me/".$P->username;}$reply_markup['inline_keyboard'][] =[['text'=>$T,'url'=>"$o"],['text'=>"🗑",'callback_data'=>"delAd_$T"]];}$reply_markup['inline_keyboard'][] =[['text'=>"رجوع",'callback_data'=>"Admins"]];
$K=json_encode($reply_markup); 
EditMessageText($chat_id,$message_id,'اليك قائمه الادمنيه ',null,"markdown",true,$K);
}else{
EditMessageText($chat_id,$message_id,"لايوجد ادمنيه",null,"markdown",true,$keyboard2);
}}if(preg_match("/(delAd_)(.*?)/",$data)){
$st=str_replace("delAd_","",$data);
$st=array_search($st,$Js['admin']);
unset($Js['admin'][$st]);
SV("Js.json",$Js);
$Js['admin']=array_values($Js['admin']);
SV("Js.json",$Js);
$k="تم تنزيله من الادمنيه";
$reply_markup = [];
foreach($Js['admin'] as $T){
if($T!=$st){
$P=GetChat($T)->result;
if($P->username==null){
$o="tg://openmessage?user_id=$T";}else{$o="t.me/".$P->username;}$reply_markup['inline_keyboard'][] =[['text'=>$T,'url'=>"$o"],['text'=>"🗑",'callback_data'=>"delAd_$T"]];}}$reply_markup['inline_keyboard'][] =[['text'=>"رجوع",'callback_data'=>"Admins"]];
$K=json_encode($reply_markup); 
EditMessageText($chat_id,$message_id,$k,null,"markdown",true,$K);
}
//قسم الادمنيه

//قسم الاذاعه
if($data=="broDa"){
if (file_exists("$path/broadcast$chat_id.txt")) :
unlink("$path/broadcast$chat_id.txt");
unlink("$path/type$chat_id.txt");
endif;
EditMessageText($chat_id,$message_id,"اهلا بك في قسم الاذاعه",null,"markdown",true,$keyboardB);
}
if($data=="caBr"){
unlink($path . "/counter.txt");
unlink($path . "/type.txt");
unlink($path . "/index.txt");
unlink($path . "/m.txt");
unlink($path . "/msg.txt");
unlink($path . "/sender.txt");
EditMessageText($chat_id,$message_id,"تم الغاء الاذاعه ✅",null,"markdown",true,$keyboard2);
} 
if ($data == "Pbroadcast") { // broadcast
file_put_contents("$path/broadcast$chat_id.txt", $chat_id);
file_put_contents("$path/type$chat_id.txt", $data);
$inf = "حسنا عزيزي ارسل رسالتك 📢";
EditMessageText($chat_id, $message_id, $inf, null, "MARKDOWN", true, $keyboard2);
}

if ($data == "Gbroadcast") { // broadcast Group
file_put_contents("$path/broadcast$chat_id.txt", $chat_id);
file_put_contents("$path/type$chat_id.txt", $data);
$inf = "حسنا عزيزي ارسل رسالتك 📢";
EditMessageText($chat_id, $message_id, $inf, null, "MARKDOWN", true, $keyboard2);
}
if ($data == "Fbroadcast") { // broadcast forward
file_put_contents("$path/broadcast$chat_id.txt", $chat_id);
file_put_contents("$path/type$chat_id.txt", $data);
$inf = "حسنا عزيزي وجه الرساله 📢";
EditMessageText($chat_id, $message_id, $inf, null, "MARKDOWN", true, $keyboard2);
}
if ($data == "FGbroadcast") { // broadcast forward Group
file_put_contents("$path/broadcast$chat_id.txt", $chat_id);
file_put_contents("$path/type$chat_id.txt", $data);
$inf = "حسنا عزيزي وجه الرساله 📢";
EditMessageText($chat_id, $message_id, $inf, null, "MARKDOWN", true, $keyboard2);
}
if ($message && file_get_contents("$path/broadcast$chat_id.txt") == $chat_id) { // brodcast for members
txt("$path/m.txt", $message_id+1);
if (file_get_contents("$path/type$chat_id.txt") == "Pbroadcast") {
$count = count(isthere("$path/member.txt")) - 1;
$inf = "جاري الارسال الى $Members عضو";
SendMessage($chat_id, $inf, "MARKDOWN", true, $message_id, $keyboar2);
broadcast($Vs,"member", $caption);
}
if (file_get_contents("$path/type$chat_id.txt") == "Gbroadcast") {
$count = count(isthere("$path/chat.txt")) - 1;
$inf = "جاري الارسال الى $Groups كروب";
SendMessage($chat_id, $inf, "MARKDOWN", true, $message_id, $keyboar2);
broadcast($Vs,"chat", $caption);
}
if (file_get_contents("$path/type$chat_id.txt") == "Fbroadcast") {
$inf = "جاري التوجيه الى $Members عضو";
SendMessage($chat_id, $inf, "MARKDOWN", true, $message_id, $keyboar2);
forward($Vs,"member");
}
if (file_get_contents("$path/type$chat_id.txt") == "FGbroadcast") {
$count = count(isthere("$path/chat.txt")) - 1;
$inf = "جاري التوجيه الى $Groups كروب";
SendMessage($chat_id, $inf, "MARKDOWN", true, $message_id, $keyboar2);
forward($Vs,"chat");
}
if (file_exists("$path/broadcast$chat_id.txt")) : unlink("$path/broadcast$chat_id.txt");
unlink("$path/type$chat_id.txt");
endif;
}
//قسم الاذاعه



//-------------
} 


if($text=="/start ".$Js['sudoF']){
SendMessage($sudo,"- تم نقل البوت لـ$name_tag","markdown",true);
SendMessage($chat_id,"- تم نقل الملكيه لك ارسل /start","markdown",true,$message_id);
$Js['sudo']=$from_id;
unset($Js['sudoF']);
SV("Js.json",$Js);
}
//التصفيه والتوجيه
if($Js['Forward']=="✅"){
if($message and $from_id!=$sudo and !in_array($from_id, $Js['admin'])){
$ss=ForwardMessage($sudo, $from_id, $message_id)->result->message_id;
$forwardM[$ss]=$from_id;
file_put_contents("forwardM.json",json_encode($forwardM));
}
if($forwardM[$reply_message_id]!=null and $from_id==$sudo){
SendMessage($forwardM[$reply_message_id],$text,"markdown",true,null,null);
}
}
if($Js['TSF']=="✅"){
if($update->my_chat_member->new_chat_member->status=="kicked"){
file_put_contents("$path/member.txt",str_replace($update->my_chat_member->from->id."\n","",file_get_contents("$path/member.txt")));
}
} 
//التصفيه والتوجيه

if($update and in_array($from_id, $Js['band'])){exit;}if($update and $Js['BotS']=="❌" and $from_id!=$sudo and !in_array($from_id, $Js['admin'])){
SendMessage($chat_id,"البوت تحت الصيانه ⚙️","markdown",true,$message_id,null);exit;}
function Slink($a){
$P=GetChat($a)->result;
if($P->username==null){
if($P->invite_link!=null){
$d=$P->invite_link;$tc="خاصه";
}else{
$d=ExportChatInviteLink($a)->result;$tc="خاصه";
}
}else{$d="t.me/".$P->username;$tc="عامه";} 
return $d;}
if($update and count($Js['TMM'])!=0 and $type=="private"){
for($i=0;$i<count($Js['TMM']);$i++){
$c6=GetChatMember($Js['TMM'][$i],$from_id)->result->status;
$tl=Slink($Js['TMM'][$i]);
if(strpos($tl,"+")!==false){
$tll=$tl;
}else{
$tll=str_replace("t.me/","@",$tl);
}
$c66=GetChat($Js['TMM'][$i])->result->title;
if(!in_array($from_id, $Js['admin']) and $message){
if($c6=="left" or $c6=="kicked"){
if(!in_array($chat_id,$Ds['TMo'][$Js['TMM'][$i]]['count'])){
$Ds['X'][$Js['TMM'][$i]][]=$from_id;SV("Ds.json", $Ds);  
} 
SendMessage($chat_id,"انت غير مشترك بقناه البوت △\nاشترك ثم ارسل /start \n \n [$tll] ","markdown",true,$message_id,json_encode(['inline_keyboard'=>[[['text'=>"$c66",'url'=>$tl]]]]));
exit();
break;
}else{
if(count($Ds['TMo'][$Js['TMM'][$i]]['count'])<$Ds['TMo'][$Js['TMM'][$i]]['C']){
if(!in_array($chat_id,$Ds['TMo'][$Js['TMM'][$i]]['count']) and in_array($from_id,$Ds['X'][$Js['TMM'][$i]])){
$Ds['TMo'][$Js['TMM'][$i]]['count'][]=$chat_id;
$a=array_search($chat_id,$Ds['X'][$Js['TMM'][$i]]); 
unset($Ds['X'][$Js['TMM'][$i]][$a]); 
SV("Ds.json",$Ds);
$Ds['X'][$Js['TMM'][$i]]=array_values($Ds['X'][$Js['TMM'][$i]]); 
SV("Ds.json", $Ds); 
} 
}elseif(count($Ds['TMo'][$Js['TMM'][$i]]['count'])>=$Ds['TMo'][$Js['TMM'][$i]]['C']){
$y=$Ds['TMo'][$Js['TMM'][$i]]['C']; 
$z=GetChatMembersCount($Js['TMM'][$i])->result; 
SendMessage($sudo,"
انتهى تمويل القناه 

- القناه: [$tl] 

- العدد المطلوب: *$y*

- عدد اعضاء القناه الان: *$z*

","markdown",true); 
if(count($Js['ETM'])!=3){
$Js['ETM'][]=$tl."+".$y; 
SV("Js.json",$Js);
}else{
unset($Js['ETM'][0]); 
SV("Js.json",$Js);
$Js['ETM']=array_values($Js['ETM']);
SV("Js.json",$Js); 
$Js['ETM'][]=$tl."+".$y; 
SV("Js.json",$Js);
} 
unset($Ds['TMo'][$Js['TMM'][$i]]); 
unset($Ds['X'][$Js['TMM'][$i]]); 
SV("Ds.json", $Ds); 
unset($Js['TMM'][$i]);
SV("Js.json",$Js);
$Js['TMM']=array_values($Js['TMM']);
SV("Js.json",$Js); 
} 
} 
}
} 
} 
if($update and $Ch!=null and $type=="private"){
if($Js['SubC']=="✅"){
for($i=0;$i<count($Ch);$i++){
$c6=GetChatMember($Ch[$i],$from_id)->result->status;
$tl=Slink($Ch[$i]);
if(strpos($tl,"+")!==false){$tl=$tl;}else{$tl=str_replace("t.me/","@",$tl);}
$c66=GetChat($Ch[$i])->result->title;
if($c6=="left" or $c6=="kicked"){
$Y="$Y - [$tl]($tl) \n\n";
}
}
if($Y!=null and !in_array($from_id, $Js['admin']) and $message){
SendMessage($chat_id,"[$SubK] \n\n $Y","markdown",true,$message_id);exit();
}
}
if($Js['SubC']=="❌"){
for($i=0;$i<count($Ch);$i++){
$c6=GetChatMember($Ch[$i],$from_id)->result->status;
$tl=Slink($Ch[$i]);
if(strpos($tl,"+")!==false){
$tll=$tl;
}else{
$tll=str_replace("t.me/","@",$tl);
}
$c66=GetChat($Ch[$i])->result->title;
if($c6=="left" or $c6=="kicked"){
if(!in_array($from_id, $Js['admin']) and $message){
SendMessage($chat_id,"[$SubK] \n \n - [$tll] ","markdown",true,$message_id,json_encode(['inline_keyboard'=>[[['text'=>"$c66",'url'=>$tl]]]]));
exit();
break;
}
}
}
} 
}
if($Js['fakesub']!=null and $chat_id!=$sudo and!in_array($chat_id,$Js['admin'])){
if($Ds['fakesub'][$from_id]!=2){
$Ds['fakesub'][$from_id]=$Ds['fakesub'][$from_id]+1;
SV("Ds.json",$Ds);
SendMessage($chat_id,$Js['fakesub'],null,true,$message_id);exit;
}} 
if($Js['Notices']=="✅" and $text=="/start" and $from_id!=$sudo and !in_array($from_id, $Js['admin']) and !in_array($from_id,isthere("$path/member.txt"))){
$m="
دخل شخص للبوت 
اسمه: $name_tag
معرفه: [$Suser]
ايديه: `$from_id`
";
SendMessage($sudo,$m,"markdown",true,null,null);
}
if ($message) { // used to check members and save them
if (!in_array($from_id, isthere("$path/member.txt"))) {
if ($itprivate) {
file_put_contents("$path/member.txt", "$from_id\n", FILE_APPEND);
}}}
if (!in_array($chat_id, isthere("$path/chat.txt"))) {
if($itgroup or $itsupergroup ){
file_put_contents("$path/chat.txt","$chat_id\n", FILE_APPEND);}
}
if ($update->channel_post and !in_array($update->channel_post->chat->id, explode("\n",file_get_contents("Users/chat.txt")))) {
if($update->channel_post->sender_chat->type=="channel"){
file_put_contents("Users/chat.txt",$update->channel_post->chat->id."\n", FILE_APPEND);}
}

