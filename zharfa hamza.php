<?php 
ob_start();
$API_KEY = "1383099672:AAEZZGl3CjApEEQBrQoV2AT9m2_bncCJoTI"; 
define('API_KEY',$API_KEY);
echo "<a href='https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."'>setwebhook</a>";
echo file_get_contents("https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{return json_decode($res);}}
#         iKETO BOOS         #
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$name = $message->from->first_name;
$user = $message->from->username;
$from_id = $message->from->id;
$tws = file_get_contents("tw.txt");
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message = $update->message;
$chat_id = $message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$fromid  = $update->callback_query->from->id;
$data_name = $update->callback_query->from->first_name;
$datatag_name = "[$data_name](tg://user?id=$fromid";
$name = $update->message->from->first_name;
$from_id = $message->from->id;
$u = explode("\n",file_get_contents("memb.txt"));
$c = count($u)-1;
$modxe = file_get_contents("usr.txt");
$username = $update->message->from->username;
$reply = $message->reply_to_message->message_id;
$list = file_get_contents("blocklist.txt");
$rep = $message->reply_to_message->forward_from; 
$id = $rep->id; 
$K5 = file_get_contents("k.txt");
$K6 = file_get_contents("k1.txt");
$admin = 1372613645;
$message = $update->message;
$chat_id = $message->chat->id;
$textmsg = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$for = $message->from->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message = $update->message;
$chat_id = $message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$name = $update->message->from->first_name;
$from_id = $message->from->id;
$k5 = file_get_contents("k5.txt");
$k6 = file_get_contents("k6.txt");
$k7 = file_get_contents("k7.txt");
$k99 = file_get_contents("k99.txt");
$admin2 = file_get_contents("admin2.txt");
$ad = array("$admin","$admin2");
$list = file_get_contents("blocklist.txt");
$ebu = explode("\n",$list);
if(in_array($from_id,$ebu)){
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⛳| عزيزي انت محظور من البوت",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);    
}
$from_id = $message->from->id;
$from_id = $message->from->id;
mkdir("alsh");
if(isset($message)){
$al = file_get_contents('memb.txt');
$alo = explode("\n",$al);
if(!in_array($from_id,$alo)){
$alsh2 = fopen("memb.txt", "a") or die("Unable to open file!");
fwrite($alsh2, "$from_id\n");
fclose($alsh2);}}
$first_name = $message->from->first_name;
$username = $message->from->username;
$from_id = $message->from->id;
$marcus = explode("\n",file_get_contents("memb.txt"));
$hassan = count($marcus)-1;
if ($message && !in_array($from_id, $marcus)) {
    file_put_contents("memb.txt", $from_id."\n",FILE_APPEND);
  }
  if($data == "at" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
𝟏 𝟐 𝟑 𝟒 𝟓 𝟔 𝟕 𝟖 𝟗 𝟎
 🇮🇶 ﷼ ﷻ ﷽ ✞ 
ッ ッ 彡 Ω ۞ ۩ ✟
 『』۝ Ξ 道 凸 父 
个 ¤ 品 〠 ๛ 𖤍 
ᶠᶸᶜᵏᵧₒᵤ ࿐ ⍆ ⍅ 
⇭ ༒   𖠃 
𖠅 𖠆 𖠊 𖡒 𖡗 
𖣩 ꧁ ꧂
〰 𖥓 𖥏 𖥎 
𖥌 𖥋 𖥊 𖥈 
𖥅 𖥃 𖥂 
𖥀 𖤼 𖤹
 𖤸 𖤷 
𖤶 
𖤭 𖤫 
𖤪 𖤨 𖤧 
𖤥 𖤤 𖤣 𖤢 𖤡
 𖤟 𖤞 𖤝 𖤜 𖤛 𖤚 
𖤘 𖤙 𖤗 𖤕 𖤓 𖤒 𖤐 
ဏ ࿘ ࿗ ࿖ ࿕ ࿑ ࿌ ࿋ ࿊ 
࿉ ࿈ ࿇ ࿅ ࿄ ࿃ ࿂ ༼ ༽ ༺ ༻
༗ ༖ ༕ ⏝ ⏜ ⏎ ၄ ߷ ܛ ׀𖠀 
𖠁 𖠂 𖠅 𖠆 𖠇 𖠈 𖠉 𖠍 𖠎 𖠏 𖠐 
𖠑 𖠒 𖠓 𖠔 𖠕 𖠖 𖠗 𖠘 𖠙 
𖠚 𖠛 𖠜 𖠝 𖠞 𖠟 𖠠
 𖠡 𖠢 𖠣 𖠤 𖠥 
𖠦 𖠧 𖠨 ??
 𖠪 𖠫 𖠬 𖠭 
𖠮 𖠯 𖠰 
𖠱 𖠲 
𖠳 
𖠴 𖠵 𖠶 
𖠷 𖠸 𖠹 𖠺
 𖠻 𖠼 𖠽 𖠾 𖠿
 𖡀 𖡁 𖡂 𖡃 𖡄
 𖡅 𖡆 𖡇 𖡈 𖡉 𖡊 𖡋 
𖡌 𖡍 𖡎 𖡏 𖡐 𖡑 𖡒 𖡓 𖡔 
𖡕 𖡖 𖡗 𖡘 𖡙 𖡚 𖡛 𖡜 𖡝 
𖡞 𖡟 𖡠 𖡡 𖡢 𖡣 𖡤 𖡥 𖡦 𖡧 𖡨 
𖡩 𖡪 𖡫 𖡬 𖡭 𖡮 𖡯 𖡰 𖡱 𖡲 𖡳 𖡴 𖡵 𖡶
 𖡷 𖡸 𖡹 𖡺 𖡻 𖡼 𖡽 𖡾 𖡿 𖢀 𖢁 𖢂 𖢃 𖢄 𖢅 𖢆 
𖢇 ?? 𖢉 𖢊 𖢋 𖢌 𖢍 𖢎 𖢏 𖢐 𖢑 𖢒 𖢓 𖢔
 𖢕 𖢖 𖢗 𖢘 𖢙 𖢚 𖢛 𖢜 𖢝 𖢞 𖢟 𖢠 
𖢡 𖢢 𖢣 𖢤 𖢥 𖢦 𖢧 𖢨 𖢩 𖢪 𖢫 𖢬
 𖢭 𖢮 𖢯 𖢰 𖢱 𖢲 𖢳 𖢴 𖢵 𖢶 
𖢷 𖢸 𖢹 𖢺 𖢻 𖢼 𖢽 𖢾 
𖢿 𖣀 𖣁 𖣂 𖣃 𖣄 𖣅 
𖣆 𖣇 𖣈 𖣉 𖣊 
𖣋 𖣌 𖣍 𖣎 𖣏
 𖣐 𖣑 𖣒 
𖣓 𖣔 
𖣕 
𖣖 𖣗 
𖣘 𖣙 𖣚 𖣛 𖣜
 𖣝 𖣞 𖣟 𖣠 𖣡 𖣢 
𖣣 𖣤 𖣥 𖣦 𖣧 𖣨 𖣩 𖣪 
𖣫 𖣬 𖣭 𖣮 𖣯 𖣰 𖣱 𖣲 𖣳 
𖣴 𖣵 𖣶 𖣷 𖣸 𖣹 𖣺 𖣻 𖣼 𖣽 𖣾 𖣿
☽︎☾︎➪︎㋛︎✔︎𑁍︎𓆉︎☏︎☻︎ᴥ︎𓁹︎𓂀︎ꨄ︎
᪥︎✯︎߷︎༆︎༄︎Ꙭ︎⁂︎⌘︎᯾︎❁︎✰︎✫︎★︎
𐂃︎⚣︎𐂊︎␈︎𓄁︎𓃰︎𓆏︎𓅿︎𓀡︎
𓂺︎𓂸︎⌫︎✯︎⁂︎᯽︎
☼︎𓂉︎⚣︎𓀿︎𓀿︎𓃠︎
𓀡︎𐂊︎𓀬︎𓂻︎
𓃗︎♔︎♕︎
𓆏︎
",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'- ألرجـوع . 🦄💸' ,'callback_data'=>"home"]],
]])
]);   
}
  if($data == "home" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
• اهلا بك، $datatag_name

- في بوت الزخرفةالشامل  ؛)

- يمكنك الزخرفه اسمك باللغه الانكليزيه 🧸💕

- بطريقتين الاولى برموز تمبلر 💘🌈 

- والثانيه بدون رموز زخرفه فقط .  🦄💘

- وايضا زخرفه  اسمك باللغه العربيه 🧸💕

- و صنع بايو قناة تليجرام  💕🧸

- و صنع بايو انستكرام  🧸💕
-- -- -- -- - -- -- -- -- -- -- -- -- -- 
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'- عـربي . 🦄💸','callback_data'=>'ii'],['text'=>'- ENGLISH . 🦄💸','callback_data'=>'ww']],
                       
[['text'=>'- زخرفه انكلش برموز تمبلر ! 🦄💸','callback_data'=>'eeen']],
    
[['text'=>'- بايـو  أنسـتا . 🦄💸','callback_data'=>'mikbio'],['text'=>'- بايـو قناة تـلي . 🦄💸','callback_data'=>'mikbioch']],

[['text'=>'- أسم ببجـي . 🦄💸' ,'callback_data'=>"bupg"]],

[['text'=>'- أسـماء ججـاهزة . 🦄💸','callback_data'=>'asm'],['text'=>'- نبـذ ججـاهزة . 🦄💸','callback_data'=>'nb']],
]])
]);   
unlink("bu.txt");
 unlink("k6.txt");
 unlink("k7.txt");
 unlink("k5.txt");
 unlink("bio.txt");
 unlink("k99.txt");
 unlink("bioch.txt");
}
$sta = file_get_contents("start.txt");
$all = file_get_contents("id.txt");
$rabt = file_get_contents("rabt.txt");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$all&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
-  عَليڪ ﺄلاشتراك بقناة ﺂلبوت الخاصة .💛.
لأستخدام البوت بشڪل صَحيح 💚.
اشترك ثم اضغط /start من جديد 💘.",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
          'inline_keyboard'=>[
[['text'=>"- اضغط ۿنا للأشتراك",'url'=>"$rabt"]],
]])]);return false;}
#شتراك 
$op = file_get_contents("ch.txt");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$op&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"- عَليڪ ﺄلاشتراك بقناة ﺂلبوت الاولى 💛.
لأستخدام البوت بشڪل صَحيح 💚.
اشترك ثم اضغط /start من جديد 💘. * @$op * ؛
",
'reply_to_message_id'=>$message->message_id,
]);return false;}
#شتراك اجباري2
$oop = file_get_contents("chc.txt");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$oop&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"- عَليڪ ﺄلاشتراك بقناة ﺂلبوت الثانيه 💛.
لأستخدام البوت بشڪل صَحيح 💚.
اشترك ثم اضغط /start من جديد 💘.  * @$oop * ؛",
'reply_to_message_id'=>$message->message_id,
]);return false;}
if($text == "/start" and !in_array($from_id,$ebu) and !in_array($from_id,$ebu) and !in_array($chat_id,$ad) and $sta == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• اهلا بك، $name

- في بوت الزخرفةالشامل  ؛)

- يمكنك الزخرفه اسمك باللغه الانكليزيه 🧸💕

- بطريقتين الاولى برموز تمبلر 💘🌈 

- والثانيه بدون رموز زخرفه فقط .  🦄💘

- وايضا زخرفه  اسمك باللغه العربيه 🧸💕

- و صنع بايو قناة تليجرام  💕🧸

- و صنع بايو انستكرام  🧸💕
-- -- -- -- - -- -- -- -- -- -- -- -- -- 
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'- عـربي . 🦄💸','callback_data'=>'ii'],['text'=>'- ENGLISH . 🦄💸','callback_data'=>'ww']],
                       
[['text'=>'- زخرفه انكلش برموز تمبلر ! 🦄💸','callback_data'=>'eeen']],
    
[['text'=>'- بايـو  أنسـتا . 🦄💸','callback_data'=>'mikbio'],['text'=>'- بايـو قناة تـلي . 🦄💸','callback_data'=>'mikbioch']],

[['text'=>'- أسم ببجـي . 🦄💸' ,'callback_data'=>"bupg"]],

[['text'=>'- أسـماء ججـاهزة . 🦄💸','callback_data'=>'asm'],['text'=>'- نبـذ ججـاهزة . 🦄💸','callback_data'=>'nb']],
]
])
]);
unlink("bu.txt");
 unlink("k6.txt");
 unlink("k7.txt");
 unlink("k5.txt");
 unlink("bio.txt");
 unlink("k99.txt");
 unlink("bioch.txt");
}
if($text == "/start" and !in_array($from_id,$ebu) and !in_array($from_id,$ebu) and !in_array($chat_id,$ad) and $sta != null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>
"$sta
\n@LiRfeN",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- عـربي . 🦄💸','callback_data'=>'ii'],['text'=>'- ENGLISH . 🦄💸','callback_data'=>'ww']],
                       
[['text'=>'- زخرفه انكلش برموز تمبلر ! 🦄💸','callback_data'=>'eeen']],
    
[['text'=>'- بايـو  أنسـتا . 🦄💸','callback_data'=>'mikbio'],['text'=>'- بايـو قناة تـلي . 🦄💸','callback_data'=>'mikbioch']],

[['text'=>'- أسم ببجـي . 🦄💸' ,'callback_data'=>"bupg"]],

[['text'=>'- أسـماء ججـاهزة . 🦄💸','callback_data'=>'asm'],['text'=>'- نبـذ ججـاهزة . 🦄💸','callback_data'=>'nb']],
]])
]);
}
if($data == "ww" ){
file_put_contents("k5.txt","k5");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'- حسنا قم بأرسال اسمك بلغة الانكليزية فقط !🦄💸',
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'- ألرجـوع . 🦄💸' ,'callback_data'=>"home"]],
]])
]);   
}
if($data == "ii" ){
file_put_contents("k6.txt","k6");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'- حسنا قم بأرسال اسمك بلغة العربيةة فقط ! 🦄💸',
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'- ألرجـوع . 🦄💸' ,'callback_data'=>"home"]],
]])
]);   
}
#زخرفه انكلش
  if($text != "/start"   and $k5 == "k5" and $chat_id !=  $k6 and $chat_id != $k7 and $chat_id != $bio and $chat_id != $bioch and $chat_id != $bu and $chat_id != $k99){
      file_put_contents("k5.txt","none");
      bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"",
  ]);
$items = $items = [' 𖤐'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$marcus = str_replace('a','𝐴',$text); 
 $marcus = str_replace('b','b',$marcus); 
 $marcus = str_replace('c','𝐶',$marcus); 
 $marcus = str_replace('d','𝐷',$marcus); 
 $marcus = str_replace('e','𝐸',$marcus); 
 $marcus = str_replace('f','𝐹',$marcus); 
 $marcus = str_replace('g','𝐺',$marcus); 
 $marcus = str_replace('h','𝐻',$marcus); 
 $marcus = str_replace('i','𝐼',$marcus); 
 $marcus = str_replace('j','𝐽',$marcus); 
 $marcus = str_replace('k','𝐾',$marcus); 
 $marcus = str_replace('l','𝐿',$marcus); 
 $marcus = str_replace('m','𝑀',$marcus); 
 $marcus = str_replace('n','𝑁',$marcus); 
 $marcus = str_replace('o','𝑂',$marcus); 
 $marcus = str_replace('p','𝑃',$marcus); 
 $marcus = str_replace('q','𝑄',$marcus); 
 $marcus = str_replace('r','𝑅',$marcus); 
 $marcus = str_replace('s','𝑆',$marcus); 
 $marcus = str_replace('t','𝑇',$marcus); 
 $marcus = str_replace('u','𝐔',$marcus); 
 $marcus = str_replace('v','𝑉',$marcus); 
 $marcus = str_replace('w','𝑊',$marcus); 
 $marcus = str_replace('x','𝑋',$marcus); 
 $marcus = str_replace('y','𝑌',$marcus); 
 $marcus = str_replace('z','𝑍',$marcus);
 bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'*'.''.$marcus."".$smile.''.'*',
'parse_mode'=>'MarkDown',
]);
$items = ['  𖠞']; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$marcus = str_replace('a',"𝓪",$text);
$marcus = str_replace('A',"𝓐",$marcus);
$marcus = str_replace("b","𝓫",$marcus);
$marcus = str_replace("B","𝓑",$marcus);
$marcus = str_replace("c","𝓬",$marcus);
$marcus = str_replace("C","𝓒",$marcus);
$marcus = str_replace("d","𝓭",$marcus);
$marcus = str_replace("D","𝓓",$marcus);
$marcus = str_replace("e","𝓮",$marcus);
$marcus = str_replace("E","𝓔",$marcus);
$marcus = str_replace("f","𝓯",$marcus);
$marcus = str_replace("F","𝓕",$marcus);
$marcus = str_replace("g","𝓰",$marcus);
$marcus = str_replace("G","𝓖",$marcus);
$marcus = str_replace("h","𝓱",$marcus);
$marcus = str_replace("H","𝓗",$marcus);
$marcus = str_replace("i","𝓲",$marcus);
$marcus = str_replace("I","𝓘",$marcus);
$marcus = str_replace("j","𝓳",$marcus);
$marcus = str_replace("J","𝓙",$marcus);
$marcus = str_replace("k","𝓴",$marcus);
$marcus = str_replace("K","𝓚",$marcus);
$marcus = str_replace("l","𝓵",$marcus);
$marcus = str_replace("L","𝓛",$marcus);
$marcus = str_replace("m","𝓶",$marcus);
$marcus = str_replace("M","𝓜",$marcus);
$marcus = str_replace("n","𝓷",$marcus);
$marcus = str_replace("N","𝓝",$marcus);
$marcus = str_replace("o","𝓸",$marcus);
$marcus = str_replace("O","𝓞",$marcus);
$marcus = str_replace("p","𝓹",$marcus);
$marcus = str_replace("P","𝓟",$marcus);
$marcus = str_replace("q","𝓺",$marcus);
$marcus = str_replace("Q","𝓠",$marcus);
$marcus = str_replace("r","𝓻",$marcus);
$marcus = str_replace("R","𝓡",$marcus);
$marcus = str_replace("s","𝓼",$marcus);
$marcus = str_replace("S","𝓢",$marcus);
$marcus = str_replace("t","𝓽",$marcus);
$marcus = str_replace("T","𝓣",$marcus);
$marcus = str_replace("u","𝓾",$marcus);
$marcus = str_replace("U","𝓤",$marcus);
$marcus = str_replace("v","𝓿",$marcus);
$marcus = str_replace("V","𝓥",$marcus);
$marcus = str_replace("w","𝔀",$marcus);
$marcus = str_replace("W","𝓦",$marcus);
$marcus = str_replace("x","𝔁",$marcus);
$marcus = str_replace("X","𝓧",$marcus);
$marcus = str_replace("y","𝔂",$marcus);
$marcus = str_replace("Y","𝓨",$marcus);
$marcus = str_replace("z","𝔃",$marcus);
$marcus = str_replace("Z","𝓩",$marcus);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.$marcus.''.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = $items = [' 𖠲'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$marcus = str_replace('a','𝙰',$text);
$marcus = str_replace("b","𝙱",$marcus);
$marcus = str_replace("c","𝙲",$marcus);
$marcus = str_replace("d","𝙳",$marcus);
$marcus = str_replace("e","𝙴",$marcus);
$marcus = str_replace("E","𝙵",$marcus);
$marcus = str_replace("g","𝙶",$marcus);
$marcus = str_replace("h","𝙷",$marcus);
$marcus = str_replace("i","𝙸",$marcus);
$marcus = str_replace("j","𝙹",$marcus);
$marcus = str_replace("k","𝙺",$marcus);
$marcus = str_replace("l","𝙻",$marcus);
$marcus = str_replace("m","𝙼",$marcus);
$marcus = str_replace("n","𝙽",$marcus);
$marcus = str_replace("o","𝙾",$marcus);
$marcus = str_replace("p","𝙿",$marcus);
$marcus = str_replace("q","𝚀",$marcus);
$marcus = str_replace("r","𝚁",$marcus);
$marcus = str_replace("s","𝚂",$marcus);
$marcus = str_replace("t","𝚃",$marcus);
$marcus = str_replace("u","𝚄",$marcus);
$marcus = str_replace("v","𝚅",$marcus);
$marcus = str_replace("w","𝚆",$marcus);
$marcus = str_replace("x","𝚇",$marcus);
$marcus = str_replace("y","𝚈",$marcus);
$marcus = str_replace("z","𝚉",$marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.''.$marcus.''.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = $items = [' 𖠗'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$marcus = str_replace('a','ᴀ',$text); 
 $marcus = str_replace('b','ʙ',$marcus); 
 $marcus = str_replace('c','ᴄ',$marcus); 
 $marcus = str_replace('d','ᴅ',$marcus); 
 $marcus = str_replace('e','ᴇ',$marcus); 
 $marcus = str_replace('f','ғ',$marcus); 
 $marcus = str_replace('g','ɢ',$marcus); 
 $marcus = str_replace('h','ʜ',$marcus); 
 $marcus = str_replace('i','ɪ',$marcus); 
 $marcus = str_replace('j','ᴊ',$marcus); 
 $marcus = str_replace('k','ᴋ',$marcus); 
 $marcus = str_replace('l','ʟ',$marcus); 
 $marcus = str_replace('m','ᴍ',$marcus); 
 $marcus = str_replace('n','ɴ',$marcus); 
 $marcus = str_replace('o','ᴏ',$marcus); 
 $marcus = str_replace('p','ᴘ',$marcus); 
 $marcus = str_replace('q','ǫ',$marcus); 
 $marcus = str_replace('r','ʀ',$marcus); 
 $marcus = str_replace('s','s',$marcus); 
 $marcus = str_replace('t','ᴛ',$marcus); 
 $marcus = str_replace('u','ᴜ',$marcus); 
 $marcus = str_replace('v','ᴠ',$marcus); 
 $marcus = str_replace('w','ᴡ',$marcus); 
 $marcus = str_replace('x','x',$marcus); 
 $marcus = str_replace('y','ʏ',$marcus); 
 $marcus = str_replace('z','ᴢ',$marcus);
 bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'*'.''.$marcus."".$smile.''.'*',
'parse_mode'=>'MarkDown',
]);
$items = $items = [' 𖠪'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$marcus = str_replace('a','𝘼',$text); 
 $marcus = str_replace('b','𝘽',$marcus); 
 $marcus = str_replace('c','𝘾',$marcus); 
 $marcus = str_replace('d','𝘿',$marcus); 
 $marcus = str_replace('e','𝙀',$marcus); 
 $marcus = str_replace('f','𝙁',$marcus); 
 $marcus = str_replace('g','𝙂',$marcus); 
 $marcus = str_replace('h','𝙃',$marcus); 
 $marcus = str_replace('i','𝙄',$marcus); 
 $marcus = str_replace('j','𝙅',$marcus); 
 $marcus = str_replace('k','𝙆',$marcus); 
 $marcus = str_replace('l','𝙇',$marcus); 
 $marcus = str_replace('m','𝙈',$marcus); 
 $marcus = str_replace('n','𝙉',$marcus); 
 $marcus = str_replace('o','𝙊',$marcus); 
 $marcus = str_replace('p','𝙋',$marcus); 
 $marcus = str_replace('q','𝙌',$marcus); 
 $marcus = str_replace('r','𝙍',$marcus); 
 $marcus = str_replace('s','𝙎',$marcus); 
 $marcus = str_replace('t','𝙏',$marcus); 
 $marcus = str_replace('u','𝙐',$marcus); 
 $marcus = str_replace('v','𝙑',$marcus); 
 $marcus = str_replace('w','𝙒',$marcus); 
 $marcus = str_replace('x','𝙓',$marcus); 
 $marcus = str_replace('y','𝙔',$marcus); 
 $marcus = str_replace('z','𝙕',$marcus);
 bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'*'.''.$marcus.''.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = $items = [' 𖠚'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$marcus = str_replace('a','𝒂',$text); 
 $marcus = str_replace('b','𝒃',$marcus); 
 $marcus = str_replace('c','𝒄',$marcus); 
 $marcus = str_replace('d','𝒅',$marcus); 
 $marcus = str_replace('e','𝒆',$marcus); 
 $marcus = str_replace('f','𝒇',$marcus); 
 $marcus = str_replace('g','𝒈',$marcus); 
 $marcus = str_replace('h','𝒉',$marcus); 
 $marcus = str_replace('i','𝒊',$marcus); 
 $marcus = str_replace('j','𝒋',$marcus); 
 $marcus = str_replace('k','𝒌',$marcus); 
 $marcus = str_replace('l','𝒍',$marcus); 
 $marcus = str_replace('m','𝒎',$marcus); 
 $marcus = str_replace('n','𝒏',$marcus); 
 $marcus = str_replace('o','𝒐',$marcus); 
 $marcus = str_replace('p','𝒑',$marcus); 
 $marcus = str_replace('q','𝒒',$marcus); 
 $marcus = str_replace('r','𝒓',$marcus); 
 $marcus = str_replace('s','𝒔',$marcus); 
 $marcus = str_replace('t','𝒕',$marcus); 
 $marcus = str_replace('u','𝒖',$marcus); 
 $marcus = str_replace('v','𝒗',$marcus); 
 $marcus = str_replace('w','𝒘',$marcus); 
 $marcus = str_replace('x','𝒙',$marcus); 
 $marcus = str_replace('y','𝒚',$marcus); 
 $marcus = str_replace('z','𝒛',$marcus);
 bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'*'.''.$marcus.'˼'.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = $items = [' 𓃠'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$marcus = str_replace('a','𝐀',$text);
$marcus = str_replace("b","𝐁",$marcus);
$marcus = str_replace("c","𝐂",$marcus);
$marcus = str_replace("d","𝐃",$marcus);
$marcus = str_replace("e","𝐄",$marcus);
$marcus = str_replace("E","𝐅",$marcus);
$marcus = str_replace("g","𝐆",$marcus);
$marcus = str_replace("h","𝐇",$marcus);
$marcus = str_replace("i","𝐈",$marcus);
$marcus = str_replace("j","𝐉",$marcus);
$marcus = str_replace("k","𝐊",$marcus);
$marcus = str_replace("l","𝑳",$marcus);
$marcus = str_replace("m","𝐌",$marcus);
$marcus = str_replace("n","𝐍",$marcus);
$marcus = str_replace("o","𝐎",$marcus);
$marcus = str_replace("p","𝐏",$marcus);
$marcus = str_replace("q","𝐐",$marcus);
$marcus = str_replace("r","𝐑",$marcus);
$marcus = str_replace("s","𝐒",$marcus);
$marcus = str_replace("t","𝐓",$marcus);
$marcus = str_replace("u","𝐔",$marcus);
$marcus = str_replace("v","𝐕",$marcus);
$marcus = str_replace("w","𝐖",$marcus);
$marcus = str_replace("x","𝐗",$marcus);
$marcus = str_replace("y","𝐘",$marcus);
$marcus = str_replace("z","𝐙",$marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.''.$marcus.''.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = $items = [' 𖠛'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$marcus = str_replace('a','𝗔',$text);
$marcus = str_replace("b","𝗕",$marcus);
$marcus = str_replace("c","𝗖",$marcus);
$marcus = str_replace("d","𝗗",$marcus);
$marcus = str_replace("e","𝗘",$marcus);
$marcus = str_replace("E","𝗙",$marcus);
$marcus = str_replace("g","𝗚",$marcus);
$marcus = str_replace("h","𝗛",$marcus);
$marcus = str_replace("i","𝗜",$marcus);
$marcus = str_replace("j","𝗝",$marcus);
$marcus = str_replace("k","𝗞",$marcus);
$marcus = str_replace("l","𝗟",$marcus);
$marcus = str_replace("m","𝗠",$marcus);
$marcus = str_replace("n","𝗡",$marcus);
$marcus = str_replace("o","𝗢",$marcus);
$marcus = str_replace("p","𝗣",$marcus);
$marcus = str_replace("q","𝗤",$marcus);
$marcus = str_replace("r","𝗥",$marcus);
$marcus = str_replace("s","𝗦",$marcus);
$marcus = str_replace("t","𝗧",$marcus);
$marcus = str_replace("u","𝗨",$marcus);
$marcus = str_replace("v","𝗩",$marcus);
$marcus = str_replace("w","𝗪",$marcus);
$marcus = str_replace("x","𝗫",$marcus);
$marcus = str_replace("y","𝗬",$marcus);
$marcus = str_replace("z","𝗭",$marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.''.$marcus.''.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = $items = [' ♱'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$marcus = str_replace('a','𝐚',$text);
$marcus = str_replace("b","𝐛",$marcus);
$marcus = str_replace("c","𝐜",$marcus);
$marcus = str_replace("d","𝐝",$marcus);
$marcus = str_replace("e","𝐞",$marcus);
$marcus = str_replace("E","𝐟",$marcus);
$marcus = str_replace("g","𝐠",$marcus);
$marcus = str_replace("h","𝐡",$marcus);
$marcus = str_replace("i","𝐢",$marcus);
$marcus = str_replace("j","𝐣",$marcus);
$marcus = str_replace("k","𝐤",$marcus);
$marcus = str_replace("l","𝐥",$marcus);
$marcus = str_replace("m","𝐦",$marcus);
$marcus = str_replace("n","𝐧",$marcus);
$marcus = str_replace("o","𝐨",$marcus);
$marcus = str_replace("p","𝐩",$marcus);
$marcus = str_replace("q","𝐪",$marcus);
$marcus = str_replace("r","𝐫",$marcus);
$marcus = str_replace("s","𝐬",$marcus);
$marcus = str_replace("t","𝐭",$marcus);
$marcus = str_replace("u","𝐮",$marcus);
$marcus = str_replace("v","𝐯",$marcus);
$marcus = str_replace("w","𝐰",$marcus);
$marcus = str_replace("x","𝐱",$marcus);
$marcus = str_replace("y","𝐲",$marcus);
$marcus = str_replace("z","𝐳",$marcus);
 bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.''.$marcus.''.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = $items = [' ☆'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$marcus = str_replace('a','𝑎',$text);
$marcus = str_replace("b","𝑏",$marcus);
$marcus = str_replace("c","𝑐",$marcus);
$marcus = str_replace("d","𝑑",$marcus);
$marcus = str_replace("e","𝑒",$marcus);
$marcus = str_replace("E","𝑓",$marcus);
$marcus = str_replace("g","𝑔",$marcus);
$marcus = str_replace("h","ℎ",$marcus);
$marcus = str_replace("i","𝑖",$marcus);
$marcus = str_replace("j","𝑗",$marcus);
$marcus = str_replace("k","𝑘",$marcus);
$marcus = str_replace("l","𝑙",$marcus);
$marcus = str_replace("m","𝑚",$marcus);
$marcus = str_replace("n","𝑛",$marcus);
$marcus = str_replace("o","𝑜",$marcus);
$marcus = str_replace("p","𝑝",$marcus);
$marcus = str_replace("q","𝑞",$marcus);
$marcus = str_replace("r","𝑟",$marcus);
$marcus = str_replace("s","𝑠",$marcus);
$marcus = str_replace("t","𝑡",$marcus);
$marcus = str_replace("u","𝑢",$marcus);
$marcus = str_replace("v","𝑣",$marcus);
$marcus = str_replace("w","𝑤",$marcus);
$marcus = str_replace("x","𝑥",$marcus);
$marcus = str_replace("y","𝑦",$marcus);
$marcus = str_replace("z","𝑧",$marcus);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.''.$marcus.''.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = $items = [' 𖣂'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$marcus = str_replace('a','ᥲ️',$text);
$marcus = str_replace("b","Ⴆ",$marcus);
$marcus = str_replace("c","ᥴ",$marcus);
$marcus = str_replace("d","ძ",$marcus);
$marcus = str_replace("e","ᥱ",$marcus);
$marcus = str_replace("E","ƒ",$marcus);
$marcus = str_replace("g","ᧁ",$marcus);
$marcus = str_replace("h","Ꮒ",$marcus);
$marcus = str_replace("i","Ꭵ",$marcus);
$marcus = str_replace("j","᧒",$marcus);
$marcus = str_replace("k","𝚔",$marcus);
$marcus = str_replace("l","ᥣ",$marcus);
$marcus = str_replace("m","꧑",$marcus);
$marcus = str_replace("n","ꪀ",$marcus);
$marcus = str_replace("o","᥆",$marcus);
$marcus = str_replace("p","ρ",$marcus);
$marcus = str_replace("q","ǫ",$marcus);
$marcus = str_replace("r","ℛ",$marcus);
$marcus = str_replace("s","᥉",$marcus);
$marcus = str_replace("t","ƚ",$marcus);
$marcus = str_replace("u","ᥙ",$marcus);
$marcus = str_replace("v","᥎",$marcus);
$marcus = str_replace("w","ꪝ",$marcus);
$marcus = str_replace("x","᥊",$marcus);
$marcus = str_replace("y","ꪗ",$marcus);
$marcus = str_replace("z","ᤁ",$marcus);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.''.$marcus.''.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = $items = [' 𖠜'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$marcus = str_replace('a','𝗮',$text);
$marcus = str_replace("b","𝗯",$marcus);
$marcus = str_replace("c","𝗰",$marcus);
$marcus = str_replace("d","𝗱",$marcus);
$marcus = str_replace("e","𝗲",$marcus);
$marcus = str_replace("f","𝗳",$marcus);
$marcus = str_replace("g","𝗴",$marcus);
$marcus = str_replace("h","𝗵",$marcus);
$marcus = str_replace("i","𝗶",$marcus);
$marcus = str_replace("j","𝗴",$marcus);
$marcus = str_replace("k","𝗸",$marcus);
$marcus = str_replace("l","𝗹",$marcus);
$marcus = str_replace("m","𝗺",$marcus);
$marcus = str_replace("n","𝗻",$marcus);
$marcus = str_replace("o","𝗼",$marcus);
$marcus = str_replace("p","𝗽",$marcus);
$marcus = str_replace("q","𝗾",$marcus);
$marcus = str_replace("r","𝗿",$marcus);
$marcus = str_replace("s","𝘀",$marcus);
$marcus = str_replace("t","𝘁",$marcus);
$marcus = str_replace("u","𝘂",$marcus);
$marcus = str_replace("v","𝘃",$marcus);
$marcus = str_replace("w","𝘄",$marcus);
$marcus = str_replace("x","𝘅",$marcus);
$marcus = str_replace("y","𝘆",$marcus);
$marcus = str_replace("z","𝘇",$marcus);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.''.$marcus.''.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = $items = [' 〄'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$marcus = str_replace('a','𝕬',$text);
$marcus = str_replace("b","𝕭",$marcus);
$marcus = str_replace("c","𝕮",$marcus);
$marcus = str_replace("d","𝕯",$marcus);
$marcus = str_replace("e","𝕰",$marcus);
$marcus = str_replace("E","𝕱",$marcus);
$marcus = str_replace("g","𝕲",$marcus);
$marcus = str_replace("h","𝕳",$marcus);
$marcus = str_replace("i","𝕴",$marcus);
$marcus = str_replace("j","𝕵",$marcus);
$marcus = str_replace("k","𝕶",$marcus);
$marcus = str_replace("l","𝕷",$marcus);
$marcus = str_replace("m","𝕸",$marcus);
$marcus = str_replace("n","𝕹",$marcus);
$marcus = str_replace("o","𝕺",$marcus);
$marcus = str_replace("p","𝕻",$marcus);
$marcus = str_replace("q","𝕼",$marcus);
$marcus = str_replace("r","𝕽",$marcus);
$marcus = str_replace("s","𝕾",$marcus);
$marcus = str_replace("t","𝕿",$marcus);
$marcus = str_replace("u","𝖀",$marcus);
$marcus = str_replace("v","𝖁",$marcus);
$marcus = str_replace("w","𝖂",$marcus);
$marcus = str_replace("x","𝖃",$marcus);
$marcus = str_replace("y","𝖄",$marcus);
$marcus = str_replace("z","𝖅",$marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.''.$marcus.''.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = $items = [' 𓌺'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$marcus = str_replace('a', 'Ａ', $text);
$marcus = str_replace('b', 'Ｂ', $marcus);
$marcus = str_replace('c', 'Ｃ', $marcus);
$marcus = str_replace('d', 'Ｄ', $marcus);
$marcus = str_replace('e', 'Ｅ', $marcus);
$marcus = str_replace('f', 'Ｆ', $marcus);
$marcus = str_replace('g', 'Ｇ', $marcus);
$marcus = str_replace('h', 'Ｈ', $marcus);
$marcus = str_replace('i', 'Ｉ', $marcus);
$marcus = str_replace('j', 'Ｊ', $marcus);
$marcus = str_replace('k', 'Ｋ', $marcus);
$marcus = str_replace('l', 'Ｌ', $marcus);
$marcus = str_replace('m', 'Ｍ', $marcus);
$marcus = str_replace('n', 'Ｎ', $marcus);
$marcus = str_replace('o', 'Ｏ', $marcus);
$marcus = str_replace('p', 'Ｐ', $marcus);
$marcus = str_replace('q', 'Ｑ', $marcus);
$marcus = str_replace('r', 'Ｒ', $marcus);
$marcus = str_replace('s', 'Ｓ', $marcus);
$marcus = str_replace('t', 'Ｔ', $marcus);
$marcus = str_replace('u', 'Ｕ', $marcus);
$marcus = str_replace('v', 'Ｖ', $marcus);
$marcus = str_replace('w', 'Ｗ', $marcus);
$marcus = str_replace('x', 'Ｘ', $marcus);
$marcus = str_replace('y', 'Ｙ', $marcus);
$marcus = str_replace('z', 'Ｚ', $marcus);
 bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.''.$marcus.''.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = $items = [' 𓃭'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$marcus = str_replace('a', 'Ȃ̈', $text);
$marcus = str_replace('b', 'B̑̈', $marcus);
$marcus = str_replace('c', 'C̑̈', $marcus);
$marcus = str_replace('d', 'D̑̈', $marcus);
$marcus = str_replace('e', 'Ȇ̈', $marcus);
$marcus = str_replace('f', 'F̑̈', $marcus);
$marcus = str_replace('g', 'G̑̈', $marcus);
$marcus = str_replace('h', 'H̑̈', $marcus);
$marcus = str_replace('i', 'Ȋ̈', $marcus);
$marcus = str_replace('j', 'J̑̈', $marcus);
$marcus = str_replace('k', 'K̑̈', $marcus);
$marcus = str_replace('l', 'L̑̈', $marcus);
$marcus = str_replace('m', 'M̑̈', $marcus);
$marcus = str_replace('n', 'N̑̈', $marcus);
$marcus = str_replace('o', 'Ȏ̈', $marcus);
$marcus = str_replace('p', 'P̑̈', $marcus);
$marcus = str_replace('q', 'Q̑̈', $marcus);
$marcus = str_replace('r', 'Ȓ̈', $marcus);
$marcus = str_replace('s', 'S̑̈', $marcus);
$marcus = str_replace('t', 'T̑̈', $marcus);
$marcus = str_replace('u', 'Ȗ̈', $marcus);
$marcus = str_replace('v', 'V̑̈', $marcus);
$marcus = str_replace('w', 'W̑̈', $marcus);
$marcus = str_replace('x', 'X̑̈', $marcus);
$marcus = str_replace('y', 'Y̑̈', $marcus);
$marcus = str_replace('z', 'Z̑̈‌‌', $marcus);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.''.$marcus.''.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = [' 𖤇']; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$MA10 = str_replace('a','𝔸',$text);
$MA10 = str_replace("b","𝔹",$MA10);
$MA10 = str_replace("c","ℂ",$MA10);
$MA10 = str_replace("d","𝔻",$MA10);
$MA10 = str_replace("e","𝔼",$MA10);
$MA10 = str_replace("E","𝔽",$MA10);
$MA10 = str_replace("g","𝔾",$MA10);
$MA10 = str_replace("h","ℍ",$MA10);
$MA10 = str_replace("i","𝕀",$MA10);
$MA10 = str_replace("j","𝕁",$MA10);
$MA10 = str_replace("k","𝕂",$MA10);
$MA10 = str_replace("l","𝕃",$MA10);
$MA10 = str_replace("m","𝕄",$MA10);
$MA10 = str_replace("n","ℕ",$MA10);
$MA10 = str_replace("o","𝕆",$MA10);
$MA10 = str_replace("p","ℙ",$MA10);
$MA10 = str_replace("q","ℚ",$MA10);
$MA10 = str_replace("r","ℝ",$MA10);
$MA10 = str_replace("s","𝕊",$MA10);
$MA10 = str_replace("t","𝕋",$MA10);
$MA10 = str_replace("u","𝕌",$MA10);
$MA10 = str_replace("v","𝕍",$MA10);
$MA10 = str_replace("w","𝕎",$MA10);
$MA10 = str_replace("x","𝕏",$MA10);
$MA10 = str_replace("y","Ý",$MA10);
$MA10 = str_replace("z","ℤ",$MA10);
 bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'*'.$MA10.' '.$smile.'*',
'parse_mode'=>'MarkDown',
]);
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
- تم زخرفة الاسم $text . 🦄💸
- ويمكنك رؤية الرموز ايضاً بالضغط على رموز  .🦄💸
- يرجى الضغط على زر عوده في الاسفل . 🦄💸"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'- زخرفة مرة اخرى ! 🦄💸' ,'callback_data'=>"ww"],['text'=>'- ألرمـوز . 🦄💸' ,'callback_data'=>"at"]],
[['text'=>'- ألرجـوع . 🦄💸' ,'callback_data'=>"hoome"]],
]])
]);
unlink("bu.txt");
 unlink("k6.txt");
 unlink("k7.txt");
 unlink("k5.txt");
 unlink("bio.txt");
 unlink("k99.txt");
 unlink("bioch.txt");
}

if($data == "at"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>"
𝟏 𝟐 𝟑 𝟒 𝟓 𝟔 𝟕 𝟖 𝟗 𝟎
 🇮🇶 ﷼ ﷻ ﷽ ✞ 
ッ ッ 彡 Ω ۞ ۩ ✟
 『』۝ Ξ 道 凸 父 
个 ¤ 品 〠 ๛ 𖤍 
ᶠᶸᶜᵏᵧₒᵤ ࿐ ⍆ ⍅ 
⇭ ༒   𖠃 
𖠅 𖠆 𖠊 𖡒 𖡗 
𖣩 ꧁ ꧂
〰 𖥓 𖥏 𖥎 
𖥌 𖥋 𖥊 𖥈 
𖥅 𖥃 𖥂 
𖥀 𖤼 𖤹
 𖤸 𖤷 
𖤶 
𖤭 𖤫 
𖤪 𖤨 𖤧 
𖤥 𖤤 𖤣 𖤢 𖤡
 𖤟 𖤞 𖤝 𖤜 𖤛 𖤚 
𖤘 𖤙 𖤗 𖤕 𖤓 𖤒 𖤐 
ဏ ࿘ ࿗ ࿖ ࿕ ࿑ ࿌ ࿋ ࿊ 
࿉ ࿈ ࿇ ࿅ ࿄ ࿃ ࿂ ༼ ༽ ༺ ༻
༗ ༖ ༕ ⏝ ⏜ ⏎ ၄ ߷ ܛ ׀𖠀 
𖠁 𖠂 𖠅 𖠆 𖠇 𖠈 𖠉 𖠍 𖠎 𖠏 𖠐 
𖠑 𖠒 𖠓 𖠔 𖠕 𖠖 𖠗 𖠘 𖠙 
𖠚 𖠛 𖠜 𖠝 𖠞 𖠟 𖠠
 𖠡 𖠢 𖠣 𖠤 𖠥 
𖠦 𖠧 𖠨 𖠩
 𖠪 𖠫 𖠬 𖠭 
𖠮 𖠯 𖠰 
𖠱 𖠲 
𖠳 
𖠴 𖠵 𖠶 
𖠷 𖠸 𖠹 𖠺
 𖠻 𖠼 𖠽 𖠾 𖠿
 𖡀 𖡁 𖡂 𖡃 𖡄
 𖡅 𖡆 𖡇 𖡈 𖡉 𖡊 𖡋 
𖡌 𖡍 𖡎 𖡏 𖡐 𖡑 𖡒 𖡓 𖡔 
𖡕 𖡖 𖡗 𖡘 𖡙 𖡚 𖡛 𖡜 𖡝 
𖡞 𖡟 𖡠 𖡡 𖡢 𖡣 𖡤 𖡥 𖡦 𖡧 𖡨 
𖡩 𖡪 𖡫 𖡬 𖡭 𖡮 𖡯 𖡰 𖡱 𖡲 𖡳 𖡴 𖡵 𖡶
 𖡷 𖡸 𖡹 𖡺 𖡻 𖡼 𖡽 𖡾 𖡿 𖢀 𖢁 𖢂 𖢃 𖢄 𖢅 𖢆 
𖢇 𖢈 𖢉 𖢊 𖢋 𖢌 𖢍 𖢎 𖢏 𖢐 𖢑 𖢒 𖢓 𖢔
 𖢕 𖢖 𖢗 𖢘 𖢙 𖢚 𖢛 𖢜 𖢝 𖢞 𖢟 𖢠 
𖢡 𖢢 𖢣 𖢤 𖢥 𖢦 𖢧 𖢨 𖢩 𖢪 𖢫 𖢬
 𖢭 𖢮 𖢯 𖢰 𖢱 𖢲 𖢳 𖢴 𖢵 𖢶 
𖢷 𖢸 𖢹 𖢺 𖢻 𖢼 𖢽 𖢾 
𖢿 𖣀 𖣁 𖣂 𖣃 𖣄 𖣅 
𖣆 𖣇 𖣈 𖣉 𖣊 
𖣋 𖣌 𖣍 𖣎 𖣏
 𖣐 𖣑 𖣒 
𖣓 𖣔 
𖣕 
𖣖 𖣗 
𖣘 𖣙 𖣚 𖣛 𖣜
 𖣝 𖣞 𖣟 𖣠 𖣡 𖣢 
𖣣 𖣤 𖣥 𖣦 𖣧 𖣨 𖣩 𖣪 
𖣫 𖣬 𖣭 𖣮 𖣯 𖣰 𖣱 𖣲 𖣳 
𖣴 𖣵 𖣶 𖣷 𖣸 𖣹 𖣺 𖣻 𖣼 𖣽 𖣾 𖣿
☽︎☾︎➪︎㋛︎✔︎𑁍︎𓆉︎☏︎☻︎ᴥ︎𓁹︎𓂀︎ꨄ︎
᪥︎✯︎߷︎༆︎༄︎Ꙭ︎⁂︎⌘︎᯾︎❁︎✰︎✫︎★︎
𐂃︎⚣︎𐂊︎␈︎𓄁︎𓃰︎𓆏︎𓅿︎𓀡︎
𓂺︎𓂸︎⌫︎✯︎⁂︎᯽︎
☼︎𓂉︎⚣︎𓀿︎𓀿︎𓃠︎
𓀡︎𐂊︎𓀬︎𓂻︎
𓃗︎♔︎♕︎
𓆏︎
 ",'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"home"]],
]])
]);
unlink("bu.txt");
 unlink("k6.txt");
 unlink("k7.txt");
 unlink("k5.txt");
 unlink("bio.txt");
 unlink("k99.txt");
 unlink("bioch.txt");
}

#زخرفه عربي
      if($text != "/start"  and  $k6 == "k6" and $chat_id !=  $k99 and $chat_id != $k7 and $chat_id != $bio and $chat_id != $bioch and $chat_id != $bu and $chat_id != $k5){
      file_put_contents("k6.txt","none");
            bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"",
  ]);
$items = $items = ['࿅ ','𝆳𝆺','𝄮','𝆯𝆴','𖠜','࿅','ၹ',];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$marcus = str_replace('ض','ض֮',$text);
$marcus = str_replace('ص','ص֓',$marcus); 
$marcus = str_replace('ث','ثֻ',$marcus); 
$marcus = str_replace('ق','ق֯',$marcus); 
$marcus = str_replace('ف','ف֛',$marcus); 
$marcus = str_replace('غ','غؒ',$marcus); 
$marcus = str_replace('ع','عٌ',$marcus); 
$marcus = str_replace('ه','هٞ',$marcus); 
$marcus = str_replace('خ','خ٘٘٘٘٘٘٘٘٘٘',$marcus); 
$marcus = str_replace('ح','حٟ',$marcus); 
$marcus = str_replace('ج','جۤ',$marcus); 
$marcus = str_replace('ش','شۨ',$marcus);
$marcus = str_replace('س','سܱܰ',$marcus); 
$marcus = str_replace('ي','يަ',$marcus); 
$marcus = str_replace('ب','ب߬',$marcus); 
$marcus = str_replace('ل','ل',$marcus); 
$marcus = str_replace('ا','اࠗ',$marcus); 
$marcus = str_replace('ت','ت',$marcus); 
$marcus = str_replace('ن','نۨۨۨۨۨۨۨۨ',$marcus); 
$marcus = str_replace('م','مࣩ',$marcus); 
$marcus = str_replace('ك','ك๊',$marcus); 
$marcus = str_replace('ظ','ظ້',$marcus); 
$marcus = str_replace('ط','ط็',$marcus); 
$marcus = str_replace('ذ','ذྃ',$marcus); 
$marcus = str_replace('ء','ء',$marcus); 
$marcus = str_replace('ؤ','ؤ',$marcus); 
$marcus = str_replace('ر','ر',$marcus); 
$marcus = str_replace('ى','ى',$marcus); 
$marcus = str_replace('ة','ة',$marcus); 
$marcus = str_replace('و','୨و',$marcus); 
$marcus = str_replace('ز','ز',$marcus); 
$marcus = str_replace('ظ',' ظ',$marcus); 
$marcus = str_replace('د','د',$marcus); 
 bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'*'.'𓆩'.$marcus."".$smile.'𓆪'.'*',
'parse_mode'=>'MarkDown',
]);
$items = $items = ['࿅ ','𝆳𝆺','𝄮','𝆯𝆴','𖠜','࿅','ၹ',];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$marcus = str_replace('ض','ضّ',$text);
$marcus = str_replace('ص','صٌ',$marcus); 
$marcus = str_replace('ث','ثّ',$marcus); 
$marcus = str_replace('ق','قِ',$marcus); 
$marcus = str_replace('ف','فِّ',$marcus); 
$marcus = str_replace('غ','غٌ',$marcus); 
$marcus = str_replace('ع','عٌ',$marcus); 
$marcus = str_replace('ه','هِ',$marcus); 
$marcus = str_replace('خ','خَ',$marcus); 
$marcus = str_replace('ح','حٌ',$marcus); 
$marcus = str_replace('ج','جِ',$marcus); 
$marcus = str_replace('ش','شٍ',$marcus); 
$marcus = str_replace('س',' س',$marcus); 
$marcus = str_replace('ي','يِّ',$marcus); 
$marcus = str_replace('ب','بِ',$marcus);
$marcus = str_replace('ل','لَ',$marcus); 
$marcus = str_replace('ا','أّ',$marcus); 
$marcus = str_replace('ت','تّ',$marcus); 
$marcus = str_replace('ن','نِ',$marcus); 
$marcus = str_replace('ك','ګ',$marcus); 
$marcus = str_replace('م','مَ',$marcus); 
$marcus = str_replace('ة',' ةّ',$marcus); 
$marcus = str_replace('ء','ء',$marcus); 
$marcus = str_replace('ظ','ظّ',$marcus); 
$marcus = str_replace('ط','طّ',$marcus); 
 $marcus = str_replace('ذ','ذّ',$marcus); 
$marcus = str_replace('د','دِ',$marcus); 
$marcus = str_replace('ز','زِّ',$marcus); 
$marcus = str_replace('ر','ڒٍ',$marcus); 
$marcus = str_replace('و','وِ',$marcus); 
$marcus = str_replace('ى','ىّ',$marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.''.$marcus.''.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = $items = ['࿅ ','𝆳𝆺','𝄮','𝆯𝆴','𖠜','࿅','ၹ',];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$marcus = str_replace('ض','ضّ',$text);
$marcus = str_replace('ص','صٌ',$marcus); 
$marcus = str_replace('ث','ثّ',$marcus); 
$marcus = str_replace('ق','قᮭ',$marcus); 
$marcus = str_replace('ف','ف᭫ᮥ',$marcus); 
$marcus = str_replace('غ','غٌ',$marcus); 
$marcus = str_replace('ع','عٌ',$marcus); 
$marcus = str_replace('ه','هِ',$marcus); 
$marcus = str_replace('خ','خ᪳᪲',$marcus); 
$marcus = str_replace('ح','ح᪽',$marcus); 
$marcus = str_replace('ج','ج᪷᪹',$marcus); 
$marcus = str_replace('ش','شٍ',$marcus); 
$marcus = str_replace('س',' َّس',$marcus); 
$marcus = str_replace('ي','ي᪸᪰',$marcus); 
$marcus = str_replace('ب','بᤠ',$marcus);
$marcus = str_replace('ل','لཻ',$marcus); 
$marcus = str_replace('ا','اི',$marcus); 
$marcus = str_replace('ت','تّ',$marcus); 
$marcus = str_replace('ن','ن྄༹',$marcus); 
$marcus = str_replace('ك','كิ',$marcus); 
$marcus = str_replace('م','مຼ',$marcus); 
$marcus = str_replace('ة',' ةّ',$marcus); 
$marcus = str_replace('ء','ء',$marcus); 
$marcus = str_replace('ظ','ظܱܰ',$marcus); 
$marcus = str_replace('ط','ط์',$marcus); 
 $marcus = str_replace('ذ','ذٍُ',$marcus); 
$marcus = str_replace('د','دّ',$marcus); 
$marcus = str_replace('ز','زٌِ',$marcus); 
$marcus = str_replace('ر','رٰ',$marcus); 
$marcus = str_replace('و','وٰ໑ٰ',$marcus); 
$marcus = str_replace('ى','ىّ',$marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.''.$marcus.''.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = $items = ['࿅ ','𝆳𝆺','𝄮','𝆯𝆴','𖠜','࿅','ၹ',];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$marcus = str_replace('ض','ضُ',$text);
$marcus = str_replace('ص','صّ',$marcus); 
$marcus = str_replace('ث','ثُ',$marcus); 
$marcus = str_replace('ق','قً',$marcus); 
$marcus = str_replace('ف','فَ',$marcus); 
$marcus = str_replace('غ','غً',$marcus); 
$marcus = str_replace('ع','ْع ',$marcus); 
$marcus = str_replace('ه','هہ',$marcus); 
$marcus = str_replace('خ','خہ',$marcus); 
$marcus = str_replace('ح','حہ',$marcus); 
$marcus = str_replace('ج','جہ',$marcus); 
$marcus = str_replace('ش','شہ',$marcus); 
$marcus = str_replace('س',' سہ',$marcus); 
$marcus = str_replace('ي','يہ',$marcus); 
$marcus = str_replace('ب','بہ',$marcus);
$marcus = str_replace('ل','لَ',$marcus); 
$marcus = str_replace('ا','آ',$marcus); 
$marcus = str_replace('ت','تہ',$marcus); 
$marcus = str_replace('ن','نہ',$marcus); 
$marcus = str_replace('ك','كہ',$marcus); 
$marcus = str_replace('م','مہ',$marcus); 
$marcus = str_replace('ة',' ةّ',$marcus); 
$marcus = str_replace('ء','ء',$marcus); 
$marcus = str_replace('ظ','ظہ',$marcus); 
$marcus = str_replace('ط','طہ',$marcus); 
 $marcus = str_replace('ذ','ذّ',$marcus); 
$marcus = str_replace('د','دِ',$marcus); 
$marcus = str_replace('ز','زِّ',$marcus); 
$marcus = str_replace('ر','ڒٍ',$marcus); 
$marcus = str_replace('و','وِ',$marcus); 
$marcus = str_replace('ى','ىّ',$marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.''.$marcus.''.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = $items = ['࿅ ','𝆳𝆺','𝄮','𝆯𝆴','𖠜','࿅','ၹ',];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$marcus = str_replace('ض','᎗ᘞ̇',$text);
$marcus = str_replace('ص',' ᎗ᘗ',$marcus); 
$marcus = str_replace('ث','᎗̇̈ɹ ',$marcus); 
$marcus = str_replace('ق','',$marcus); 
$marcus = str_replace('ف','',$marcus); 
$marcus = str_replace('غ','᎗ϛ',$marcus); 
$marcus = str_replace('ع','᎗ჺ',$marcus); 
$marcus = str_replace('ه','᎗බ',$marcus); 
$marcus = str_replace('خ','ᓘ',$marcus); 
$marcus = str_replace('ح','ᓗ',$marcus); 
$marcus = str_replace('ج','ᓗฺ',$marcus); 
$marcus = str_replace('س',' ᎗ɹɹɹ',$marcus); 
$marcus = str_replace('ش','᎗ɹ̇̈ɹɹ',$marcus); 
$marcus = str_replace('ي',' ᎗̤ɹ',$marcus); 
$marcus = str_replace('ب','᎗̣ɹ ',$marcus);
$marcus = str_replace('ل','⅃',$marcus); 
$marcus = str_replace('ا','Ȋ',$marcus); 
$marcus = str_replace('ت','᎗̈ɹ',$marcus); 
$marcus = str_replace('ن','᎗̇ɹ',$marcus); 
$marcus = str_replace('ك','ܭ',$marcus); 
$marcus = str_replace('م','ᓄ',$marcus); 
$marcus = str_replace('ة',' ᎗Ꭷ',$marcus); 
$marcus = str_replace('ء','ء',$marcus); 
$marcus = str_replace('ظ','᎗̇Ь',$marcus); 
$marcus = str_replace('ط','᎗Ь',$marcus); 
 $marcus = str_replace('ذ','ذّ',$marcus); 
$marcus = str_replace('د','ↄ',$marcus); 
$marcus = str_replace('ز','j',$marcus); 
$marcus = str_replace('ر','ڒٍ',$marcus); 
$marcus = str_replace('و','g',$marcus); 
$marcus = str_replace('ى','ىّ',$marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.''.$marcus.''.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = $items = ['࿅ ','𝆳𝆺','𝄮','𝆯𝆴','𖠜','࿅','ၹ',];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$marcus = str_replace('ا','ا',$text);
$marcus = str_replace('ص','صـٌٍ๋ۤ͜ﮧْ',$marcus); 
$marcus = str_replace('ث','ث̲ꫭـﮧ',$marcus); 
$marcus = str_replace('ق','قٰٰྀ̲ـِٰ̲ﮧْ',$marcus); 
$marcus = str_replace('ف','فـٌٍ๋ۤ͜ﮧ',$marcus); 
$marcus = str_replace('غ','غـّٰ̐ہٰٰ',$marcus); 
$marcus = str_replace('ع','عٌ',$marcus); 
$marcus = str_replace('ه','ھہ',$marcus); 
$marcus = str_replace('خ','خ̲ﮧ',$marcus); 
$marcus = str_replace('ح','ح̲ꪳـﮧ',$marcus); 
$marcus = str_replace('ج','ج̲ꪸـﮧ',$marcus); 
$marcus = str_replace('ش','ش̲ꪾـﮧ',$marcus); 
$marcus = str_replace('س','سـ̷ٰٰﮧْ',$marcus); 
$marcus = str_replace('ي','يـِٰ̲ﮧ',$marcus); 
$marcus = str_replace('ب','ب̲ꪰـﮧْ',$marcus);
$marcus = str_replace('ل','لٍُـّٰ̐ہ',$marcus); 
$marcus = str_replace('ا','أّ',$marcus); 
$marcus = str_replace('ت','تـٰۧﮧ',$marcus); 
$marcus = str_replace('ن','نٰ̲̐ـﮧْ',$marcus); 
$marcus = str_replace('ك','كـِّﮧْٰٖ',$marcus); 
$marcus = str_replace('م','مٰٰྀ̲ـِٰ̲ﮧْ',$marcus); 
$marcus = str_replace('ة',' ةً',$marcus); 
$marcus = str_replace('ء','ء',$marcus); 
$marcus = str_replace('ظ','ظَـ๋͜ﮧْ',$marcus); 
$marcus = str_replace('ط','ط̲꫁ـﮧ',$marcus); 
 $marcus = str_replace('ذ','ذٖ',$marcus); 
$marcus = str_replace('د','دُ',$marcus); 
$marcus = str_replace('ز','ژٰ',$marcus); 
$marcus = str_replace('ر','ڒٍ',$marcus); 
$marcus = str_replace('و','ﯛ૭',$marcus); 
$marcus = str_replace('ى','ىّ',$marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.''.$marcus.''.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = []; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
 $marcus = str_replace('ض','ضــٰـُ͢ـًُــ ',$text); 
$marcus = str_replace('ص','صــٰـُ͢ـُٰཻــ͒͜ـًـــ',$marcus); 
$marcus = str_replace('ث','ث',$marcus); 
$marcus = str_replace('ق','قٰཻ͚͆ـــــ͒͜ـً',$marcus); 
$marcus = str_replace('ف','ف',$marcus); 
$marcus = str_replace('غ','غــٰـُ͢ـُـ̷ِْــٰــ',$marcus); 
$marcus = str_replace('ع','ع',$marcus); 
$marcus = str_replace('ه','هہ',$marcus); 
$marcus = str_replace('خ','خـٰٰٰٖٖٖۧـ๋͜ــ۫͜ـــ',$marcus); 
$marcus = str_replace('ح','حـ̷ِْــٰــ۫͜ـــ',$marcus); 
$marcus = str_replace('ج','جـ',$marcus); 
$marcus = str_replace('ش','شـ๋๋͜͜͡‏ــٰـُ͢ـُٰཻـــ',$marcus); 
$marcus = str_replace('س','سـٰٰٰٖٖٖۧـ๋͜ــــ',$marcus); 
$marcus = str_replace('ي','ي',$marcus); 
$marcus = str_replace('ب','بــ',$marcus);
$marcus = str_replace('ل','ݪ',$marcus); 
$marcus = str_replace('ا','آ',$marcus); 
$marcus = str_replace('ت','تـَٰــۘ❀ـَٰـ',$marcus); 
$marcus = str_replace('ن','ن',$marcus); 
$marcus = str_replace('م','مـ',$marcus); 
$marcus = str_replace('ك','ڪ',$marcus); 
$marcus = str_replace('ة','ةً',$marcus); 
$marcus = str_replace('ء','ء',$marcus); 
$marcus = str_replace('ظ','ظــٰـُ͢ـًُــ',$marcus); 
$marcus = str_replace('ط','طــ',$marcus); 
 $marcus = str_replace('ذ','ذِ',$marcus); 
$marcus = str_replace('د','دٰ',$marcus); 
$marcus = str_replace('ز','زً',$marcus); 
$marcus = str_replace('ر','ر',$marcus); 
$marcus = str_replace('و','و',$marcus); 
 $marcus = str_replace('ى','ىٰ',$marcus);
 bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'*'.'𓆩'.$marcus."".$smile.'𓆪'.'*',
'parse_mode'=>'MarkDown',
]);
$items = $items = [];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
 $marcus = str_replace('ض','ضـ',$text); 
$marcus = str_replace('ض','ضــً',$marcus); 
$marcus = str_replace('ص','صـــ͒͜ـً',$marcus); 
$marcus = str_replace('ث','ثــہ',$marcus); 
$marcus = str_replace('ق','ق',$marcus); 
$marcus = str_replace('ف','ف',$marcus); 
$marcus = str_replace('غ','غــ۫͜ـ',$marcus); 
$marcus = str_replace('ع','عــُ',$marcus); 
$marcus = str_replace('ه','هہ',$marcus); 
$marcus = str_replace('خ','خــ۫͜ـ',$marcus); 
$marcus = str_replace('ح','حــ۫͜ـ',$marcus); 
$marcus = str_replace('ج','جـ',$marcus); 
$marcus = str_replace('ش','شـٰཻــ',$marcus); 
$marcus = str_replace('س','ســ',$marcus); 
$marcus = str_replace('ي','ي',$marcus); 
$marcus = str_replace('ب','بـ',$marcus);
$marcus = str_replace('ل','لـ',$marcus); 
$marcus = str_replace('ا','آ',$marcus); 
$marcus = str_replace('ت','تـٰཻــ',$marcus); 
$marcus = str_replace('ن','ن',$marcus); 
$marcus = str_replace('ك','ڪ',$marcus); 
$marcus = str_replace('م','مـٰ',$marcus); 
$marcus = str_replace('ة','ةً',$marcus); 
$marcus = str_replace('ء','ء',$marcus); 
$marcus = str_replace('ظ','ظً',$marcus); 
$marcus = str_replace('ط','طُ',$marcus); 
 $marcus = str_replace('ذ','ذً',$marcus); 
$marcus = str_replace('د','دِ',$marcus); 
$marcus = str_replace('ز','زً',$marcus); 
$marcus = str_replace('ر','ڒٍ',$marcus); 
$marcus = str_replace('و','ﻭ',$marcus); 
$marcus = str_replace('ى','ىّ',$marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.''.$marcus.''.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = $items = [];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
 $marcus = str_replace('ض','ضــٰـُ͢ـًُ',$text); 
$marcus = str_replace('ص','صـ͒͜ـً',$marcus); 
$marcus = str_replace('ث','ثـَٰـَٰـ',$marcus); 
$marcus = str_replace('ق','قٰཻ͚͆ــ͒͜ـً',$marcus); 
$marcus = str_replace('ف','فــ͡ـ',$marcus); 
$marcus = str_replace('غ','غــ̷ِْــٰ',$marcus); 
$marcus = str_replace('ع','عـ๋๋͜͜͡‏ـۂ',$marcus); 
$marcus = str_replace('هہ','ه',$marcus); 
$marcus = str_replace('خ','خــ۫͜ـ',$marcus); 
$marcus = str_replace('ح','حــ۫͜ـ',$marcus); 
$marcus = str_replace('ج','جـ',$marcus); 
$marcus = str_replace('ش','شـٰـُ͢ـُٰཻـ',$marcus); 
$marcus = str_replace('س','سـٰٰٰٖٖٖۧـ๋͜ــ',$marcus); 
$marcus = str_replace('ي','ي',$marcus); 
$marcus = str_replace('ب','بـ',$marcus);
$marcus = str_replace('ل','ݪ',$marcus); 
$marcus = str_replace('ٰٖۧـৡ๋͜ت','تـ',$marcus); 
$marcus = str_replace('ن','ن',$marcus); 
$marcus = str_replace('ك','ڪ',$marcus); 
$marcus = str_replace('م','مـٰ',$marcus); 
$marcus = str_replace('ة','ةً',$marcus); 
$marcus = str_replace('ء','ء',$marcus); 
$marcus = str_replace('ظ','ظـَٰـًَٰ',$marcus); 
$marcus = str_replace('ط','طُ',$marcus); 
 $marcus = str_replace('ذ','ذً',$marcus); 
$marcus = str_replace('د','دِ',$marcus); 
$marcus = str_replace('ز','زً',$marcus); 
$marcus = str_replace('ر','ࢪ',$marcus); 
$marcus = str_replace('و','وُ',$marcus); 
$marcus = str_replace('ى','ىّ',$marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.''.$marcus.''.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = $items = [];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
 $marcus = str_replace('ض','ض',$text); 
$marcus = str_replace('ص','صـٰـَہ',$marcus); 
$marcus = str_replace('ق','قـٰـَہ',$marcus); 
$marcus = str_replace('ف','فـٰـَہ',$marcus); 
$marcus = str_replace('غ','غ',$marcus); 
$marcus = str_replace('ع','ع',$marcus); 
$marcus = str_replace('ه','هہ',$marcus); 
$marcus = str_replace('خ','خـٰـَہ',$marcus); 
$marcus = str_replace('ح','حـٰـَہ',$marcus); 
$marcus = str_replace('ج','ج',$marcus); 
$marcus = str_replace('ش','شـٰـَہ',$marcus); 
$marcus = str_replace('س','سـٰـَہ',$marcus); 
$marcus = str_replace('ي','يـٰـَہ',$marcus); 
$marcus = str_replace('ب','بـٰـَہ',$marcus); 
$marcus = str_replace('ل','لـٰـَہ',$marcus); 
$marcus = str_replace('ا','ا',$marcus); 
$marcus = str_replace('ت','تـٰـَہ',$marcus); 
$marcus = str_replace('ن','ن',$marcus); 
$marcus = str_replace('م','مـٰـَہ',$marcus); 
$marcus = str_replace('ك','كـٰـَہ',$marcus); 
$marcus = str_replace('ظ','ظ',$marcus); 
$marcus = str_replace('ط','ط',$marcus); 
$marcus = str_replace('ذ','ذ',$marcus); 
$marcus = str_replace('د','د',$marcus); 
$marcus = str_replace('ز','ز',$marcus); 
$marcus = str_replace('ر','ر',$marcus); 
$marcus = str_replace('͟໑໑','و',$marcus); 
$marcus = str_replace('ث',' ث',$marcus); 
$marcus = str_replace('ة','ة',$marcus); 
$marcus = str_replace('ى','ى',$marcus); 
$marcus = str_replace('ء','ء',$marcus); 
 bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.''.$marcus.''.$smile.'*',
'parse_mode'=>'MarkDown',
]);
$items = $items = [];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
 $marcus = str_replace('ض','ضــٰཻــ ',$text); 
$marcus = str_replace('ص','صــًـًًًًٍٍـًٍـًًٍ',$marcus); 
$marcus = str_replace('ث','ث',$marcus); 
$marcus = str_replace('ق','قـﮧ̯͡ــ̷ـــ',$marcus); 
$marcus = str_replace('ف','فـﮧ̯͡ــ̷ـــ',$marcus); 
$marcus = str_replace('غ','غـٰཻـــًـًًٍـًٍـًًٍ',$marcus); 
$marcus = str_replace('ع','ع',$marcus); 
$marcus = str_replace('ه','ههہ',$marcus); 
$marcus = str_replace('خ','خــ ',$marcus); 
$marcus = str_replace('ح','حٰཻ͚͆ـــــ͒͜ــًـًًًًٍٍـًٍـًًٍ',$marcus); 
$marcus = str_replace('ج','جـ',$marcus); 
$marcus = str_replace('ش','شــ͒͜ـًﮧ̯͡ــ̷ــــ',$marcus); 
$marcus = str_replace('س','سـٰٰٰٖٖٖۧـ๋͜ــًـًًًًٍٍـًٍـًًٍـــ',$marcus); 
$marcus = str_replace('ي','ي',$marcus); 
$marcus = str_replace('ب','بــٰٰٰ๋ٖٖٖۧ͜ــ۫͜ــــ',$marcus);
$marcus = str_replace('ل','ݪ',$marcus); 
$marcus = str_replace('ا','آ',$marcus); 
$marcus = str_replace('تٰཻ͚͆','تـَٰﮧ̯͡ــ̷ـــ',$marcus); 
$marcus = str_replace('ن','ن',$marcus); 
$marcus = str_replace('م','م',$marcus); 
$marcus = str_replace('ك','ڪ',$marcus); 
$marcus = str_replace('ة','ةً',$marcus); 
$marcus = str_replace('ء','ء',$marcus); 
$marcus = str_replace('ظ','ظــٰـُ͢ـًُــ',$marcus); 
$marcus = str_replace('ط','طــ',$marcus); 
 $marcus = str_replace('ذ','ذِ',$marcus); 
$marcus = str_replace('د','دٰ',$marcus); 
$marcus = str_replace('ز','زً',$marcus); 
$marcus = str_replace('ر','ر',$marcus); 
$marcus = str_replace('ཻ͟و','و',$marcus); 
 $marcus = str_replace('ى','ىٰ',$marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id,
'text'=>'*'.$marcus.' '.$smile.'*',
'parse_mode'=>'MarkDown',
]);
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
- تم زخرفة الاسم $text . 🦄💸
- ويمكنك رؤية الرموز ايضاً بالضغط على رموز  .🦄💸
- يرجى الضغط على زر عوده في الاسفل . 🦄💸"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'- زخرفة مرة اخرى ! 🦄💸' ,'callback_data'=>"ii"],['text'=>'- ألرمـوز . 🦄💸' ,'callback_data'=>"at"]],
[['text'=>'- ألرجـوع . 🦄💸' ,'callback_data'=>"hoome"]],
]])
]);
unlink("bu.txt");
 unlink("k6.txt");
 unlink("k7.txt");
 unlink("k5.txt");
 unlink("bio.txt");
 unlink("k99.txt");
 unlink("bioch.txt");
}
if($data == "nb" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎

`اعـﹻٰـدآئي يمتلكون اجـﹻٰـمل خوات✗ْٰ̯⃕͡”㋡`

`ﻋيـﻧيۦثڪۑلهہۦﻣاټـﺸﯢڣۦٵڜڪالڮم✗ْٰ̯⃕͡”㋡`

`ۦﻣـ؏ـتڒڵۦٲڵـ؏ـڵاقـاﭢۦٲﻟـﻐـږﺍﻣـيہ✗ْٰ̯⃕͡”㋡`

`الي علمتهَم ؏ الحجـﮧٰۑ صـارو برآسي شيـوخ،✗ْٰ̯⃕͡”㋡`

`- ٱنـهہَ لجابتنـۑِ زلمـةهَ ولابسـةهَ ؏ـكال،✗ْٰ̯⃕͡”㋡`


`‏أقرأ كل يوم ، لا تنام بنفس العقل الذي أستيقظت به.`

`ترا شما خسرنا ، نعيش`

`ليحترق قلبك وانا لســــت اســف .`

`سنسمع الشيطان يستعيذ بالله منكم ذات يوم🖤،`

`الله موجود انتو شنو🤤🖤`

`: مَينزل رآسي ادوس فُوك رآسچ وارجع #عـاليةهَ .`

`• ۿناك قوة في كونك ۿادئاً 💗💧*.`

`آ̀ن̀ـآ̀ آ̀لـش̀́ـيـط̀́ـآ̀ن̀ـة آ̀لـتـي م̀ـيـزه̀ـآ̀ آ̀لـر̀ب ع̀́ن̀ آ̀لـكـل`

`• الشخـص المناسب لك لايرحل لاتقلقً💜`

`ֆ☺ فــقدت الــكثير ولازلــت أبتــسم`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'- التالي ! 🦄💸' ,'callback_data'=>"nb1"]],
[['text'=>'- ألرجـوع . 🦄💸' ,'callback_data'=>"home"]],
]])
]);   
}

if($data == "nb1" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎

`اصـيـله وتـكشـخ بخـيالـههاا🐎👑`

`الزلمهَ الشال العرآق بگلبه يشيلچ بروحه .♡،`

`لاتخبرني انهم تحدثُ عنِ بسوء 🙂اخبرني لماذا رتاحوا بالحديث امامك😏`

`اتعبني العالم مجدداً اين اذهب ♱`

`كـــان عــلى احــدنـا ان يـكـون بهــذه الـقسـوة لـيكمـل الاخــر طــريقـه`

`حتة من اريد اقبل عذر ماشوف ترضه جروحي ساعتهه راح ادخل حرب ما بين روحي وروحي`

`‏ان استطعت ان تبتعد يوما عني، فلا تعود ∝.`

`نحن نعيش في أرض تُدعى أرض ألسافلين.`

`كأنـي شيطان،وقَـع من السماء ليُلوث الارض .`

‏`لايحق لي أن أكتب عن الحُزن وأنتَ هنا .`

`◄يــٰٰٖــٰـا مــٰٰٖــٰـن ينتظــٰٰٖــٰـر سقوطــٰٰٖــٰـي ليتشفــٰٰٖــٰـى`

`-لن اهزم لانني اؤمن بنفسي دائما 🖤،`

`ءنــي ححـمـار ءنتـهه ششـنـو؟ حـمــار.،ڪك تشـرفـتت😹🌝`

`أقـسم لڪم بأني إتألم لڪن بأ ؏ـصاب جداً هادئة👋🏿🖤`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'- التالي ! 🦄💸' ,'callback_data'=>"nb2"]],
[['text'=>'- الى الخلف ! 🦄💸' ,'callback_data'=>"nb"]],
[['text'=>'- ألرجـوع . 🦄💸' ,'callback_data'=>"home"]],
]])
]);   
}
if($data == "nb2" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎

`- أ‏حـب نظــراتڪ ، وضحڪتك واحـب الأسـود عليڪ`

`ٱࢦيـتݛڪنـﯥ ٱتـݛڪھٰـہ ﯛ ٱتـفࢦ ؏ ﯛ جـهـﭑ ✗ ❭`

`مرات أحـسك عـدو بـــس!! أخـتل بسده 🙂♥️`

`سهولةه إلتڪلم معي ، لا تعني سهولةه ٲمتلٱڪي !‘✗ْٰ̯⃕͡㋡`

`-لا تُهمل وردتك حتي لا يسقيها غيرَك🙇🏿‍♂🖤`

`- زلـمۿ ومحد يڪـسرلي ڪـلمـۿ ، وحيد وقـوي وبـألف زلمـۿ 🙇🏿‍♀🖤.`

`ﺇﻥّ ﺍﻟﺤﻴﺎﺓ ﻻ ﺗﺘﻮﻗﻒ ﺃﺑﺪﺍً, ﻭﻣﻴﺎﻩ ﺍﻟﻨﻬﺮ ﻻ ﺗﻜﻒ ﻋﻦ ﺍﻟﺠﺮﻳﺎﻥ.`

`ﭑنـُﭑ لـۧسـِٰ̲ت مثڵٰهـِمʾ ﺂﻧـٰﺂ ﺂﻋٰ̲ـضـﮧم  ☻ ᴖ̈ ♩`

`- من يفكر في خسارتك ، ساعِده ،😹🙂`

`- فوَڪـٓۦ ءآنـٖيَ واآلٍڪًـٓلۦ جُؤآيٍ - ءسَطﭑ وٍڪـٓلۿا ) رﭑضﭑيًۦ ۦ 💗.`

`_ ولتـربو ؏ جتـآفـي بصيتيِ ڪبرِ رـآسسهم ، 🙇‍♀🖤.`

`ترهۂ ة ﺂﺂني ححلم ععشيرتـج ⁽♪̮͒₎🇺🇸`

`التاريخ لا يعيد نفسه بل الانسان يكرر غبائه .`

`ﭑنـُﭑ لـۧسـِٰ̲ت مثڵٰهـِمʾ ﺂﻧـٰﺂ ﺂﻋٰ̲ـضـﮧم  ☻ ᴖ̈ ♩`

`- تخوض حرباً لأجل احدهم فيقتلك هوه..𖤐`

`أنـآ أكذب .. لـآ شَـٰيٓء بخير يـآ صدِيقِـٰيٓ،🖤❕.`

`‏لا تستسلم لكلام الناس أسكتهم بنجاحك 🖤`

`‏آنه الحـــرگولي گلبي، بدون جــدحــة نار !`

﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'- التالي ! 🦄💸' ,'callback_data'=>"nb3"]],
[['text'=>'- الى الخلف ! 🦄💸' ,'callback_data'=>"nb1"]],
[['text'=>'- ألرجـوع . 🦄💸' ,'callback_data'=>"home"]],
]])
]);   
}
if($data == "nb3" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎

`نبذة :-  ‏ע تحٰحن لـ شِخصٰء ﺄسٰتغنۍ ٰعٰنڪٰك ،`

`• مَ فــآد ڪـثر ألتوآجد ﻧججرب ألغــيآب ء ֆ #☻`

`• ﭑﻧﻧﭑ ملاڪك مـٰن. ﭑلـٰسمـﭑ وطـآحت ❥ 🍂.🖤

`ـآنــا ـآلسلطآن اﺑن ذآك لمآ نزلِ رـآسه🌝🖖🏾،`

`نَْبـْۦٰــذْھ•||• ﻣﺂﺂﺿېۦﯠﭤڕڪتهہۦۄطژۦﺑﻟﺨﺳڕتهہۦ`

`نَْبـْۦٰــذْھ•|| ؏ـرضك ﯛنـعـاﭑل ﯛثـنـيـنـهن ﯛصـخـات ،﴿`

`لاتغرڪ ضحٍڪتي شُمآيعٍلُِهـ صيتڪم بَلُِقٌندِرآ) ⁵⁶`

`أزيـن شاربڪك يلععفت اخوڪك بـضيـچ𓆩`

`ﻧـ؏ـثڕۙ ﺑس ﻧّڕډ ڼڪﯞ۾ ﯝ ﻣـٵ تهزنهہ همـﯢ۾ ✗ْٰ̯⃕͡”㋡`

`- ‏خسـارة البعـض ، مڪسب لصحتـكك النفـسـيـہۦة 🐸🖕`

`تــڕآ ڪﻟڪــﻡ تتعــﯛضـﯗن ! ﻟحــد يســﯛي ﻧفســهہ آخــړ ﻗطعــه ›!💔🐸`

`ﻋقلڪ برٱﺳڪ ونـﻋالڪ برﺟلڪ لاتبـدل بينهم بارڪ الله بيڪ?️☻🖕 ـٰ`

`•قويةه وححݪوھﮧ ومو بحاجةه لاي ﺂحد يلة دﯾﯿﮧ͡ـي☻🖕🏿،`

`ݥاِخخِذۿُ خـۧﺂاوۿ ؏ ؋ـٰرۏخ ﺗـﻠﻲٍ ᴖ̈ )`

`عـقلـــي بعـآالـم وَ ﭑنـا بعـآالـم وَ ﭑلعـآلـم بعـآالــم 💔☻`

`لقد ضا؏ ﺣذٱئي أتسمحون لي أن أرتـدي ﻋقـﯛلكم .‏ֆ ☻`

`•‏¦‹ﺂﺻْﺒّْﺣت ݛجـﯡݪتٌٍّْكّْم بٌّضْحّْكٌّْــﺈٌﺕٌ آݪحَْںݛيّمٌ هْــﮥ㋡!!   ۦ`

`ـآليترسِ ظهِريٓ حچيٖ مِ ردَ عليهِ، ـآلچلبِ يكبر صيتهِ من تعآركهِ`

`ٱࢦيـتݛڪنـﯥ ٱتـݛڪھٰـہ ﯛ ٱتـفࢦ ؏ ﯛ جـهـﭑ ✗ ❭`

﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'- الى الخلف ! 🦄💸' ,'callback_data'=>"nb2"]],
[['text'=>'- ألرجـوع . 🦄💸' ,'callback_data'=>"home"]],
]])
]);   
}

if($data == "asm" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎

`『 ﺂيَۈﺷۿ』`

`『مَݪۈڪۿ』`

`『بَنۈڼـۿ』`

`『ﺂﺳۈﺷۿ』`

`『تَبۈﺷۿ』`

`『𝚂𝙾𝚂𝙰𝙷』`

`『𝙱𝙰𝙽𝙾𝚂𝙰𝙷』`

`『𝚏𝚊𝚝𝚘𝚜𝚊𝚑』`

`『𝙼𝙰𝙽𝙾𝚂𝙰𝙷』`

`『𝚉𝙰𝙷𝙾𝚂𝙰𝙷』`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'- التالي ! 🦄💸' ,'callback_data'=>"asm1"]],
[['text'=>'- ألرجـوع . 🦄💸' ,'callback_data'=>"home"]],
]])
]);   
}
if($data == "asm1" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎

`داملاﭑ ఌ︎`

`ديلارﭑ ꨄ︎`

`نارفين ❥︎`

`ۿازال ♔︎`

`نيلۉفر ᴥ︎`

` ‏ٖ ٖتبوٰ ༗ 𖨆︎`

`ٖ ٖړنوٰ ༗ ㋛︎`

`ٖ ٖتبآركہٰ ✞︎༗`

`ٖ ٖآيمانہٰ ༗␈︎`

`ٖ ٖ␈︎ملآكہٰ ༗.`

`ٖ ٖنډى␈︎༗.`

`ٖ ٖطيبۿہٰ𓄁︎༗.`

`『𝙻𝙾𝚂𝙶』`

`『𝚉𝙴𝙴𝙽』`

`『𝙵𝚃𝙾𝚂𝙷𝙰』`

`『𝙼𝙽𝚃𝙰𝚉』`

`『𝙺𝙾𝙰𝙺𝙿』`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'- التالي ! 🦄💸' ,'callback_data'=>"asm2"]],
[['text'=>'- الى الخلف ! 🦄💸' ,'callback_data'=>"asm"]],
[['text'=>'- ألرجـوع . 🦄💸' ,'callback_data'=>"home"]],
]])
]);   
}
if($data == "asm2" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎

`⌯﮼ڪـمَـَٰـَُٰٰٰيـل𖤍༿`

`⌯﮼ ذوٰ୭‏ فقـَٰـَُٰٰٰـاﺂࢪ𖤍༿`

`⌯﮼ مـٛڵوڪـهہ𖤍༿`

`⌯﮼‌‏ ࢪضــاﺂويــۂ𖤍༿`

`⌯﮼‌‏ تبـٱࢪڪۂ𖤍༿`

`⌯﮼‌‏ نيـࢪمـﺂن𖤍༿`

`⌯﮼ ࢪ࣪ۿـࢪا۽𖤍༿`

• `ﭼـٰ̲ٱﺳـۧيڪَآ ،`

• `ـٱﻣـۧٱڹـڊـآ `

• `ﻟﮧۅڕيـۧڹ ؛`

• `ـٱﻣـۧيڵي ،`

`ΔᗰᗨNᗪΔ`

`Ꮮ𝑎𝑢𝑟𝑒𝑛  `

` 𝐄𝐌𝐄𝐋𝐘`

` 𝐉𝒂𝒔𝒔𝒊𝒄𝒂`

﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'- التالي ! 🦄💸' ,'callback_data'=>"asm3"]],
[['text'=>'- الى الخلف ! 🦄💸' ,'callback_data'=>"asm1"]],
[['text'=>'- ألرجـوع . 🦄💸' ,'callback_data'=>"home"]],
]])
]);   
}
if($data == "asm3" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎

`• ﭑسٰـيݪ ⁽️. ⁽𝒂𝒔𝒆𝒆𝒍`

`• ݪـمٰـﭑࢪ ⁽️. ⁽𝒍𝒂𝒎𝒂??`

`• فٰـࢪحَ ⁽️. ⁽𝒇𝒂𝒓𝒂𝒉`

`• مٰيـﭑمٰيـטּ ⁽️. ⁽𝒎𝒚𝒂𝒎𝒚𝒏`

`• مٰـيࢪﭑ ⁽️. ⁽𝒎𝒊𝒓𝒂`

`• مٰـﭑࢪۉݪا ⁽️. ⁽𝒎𝒂𝒓𝒖𝒍𝒂`

`• مٰـﭑࢪݪـي ⁽️. ⁽𝒎𝒂𝒓𝒍𝒆𝒚`

`• جٰـۉدي ⁽️. ⁽𝒋𝒖𝒅𝒚`

`• مٰـﭑيـٰﭑ ⁽️. ⁽𝒎𝒂𝒚𝒂`

`• ڪـﭑتيـﭑ ⁽️. ⁽𝒌𝒂𝒕𝒊𝒂`

`• مٰـيݪا ⁽️. ⁽𝒎𝒆𝒍𝒂`

`• ࢪنٰـۉۉ ⁽️. ⁽𝒓𝒏??`

`• ٰﺂيٰـۉۉ ⁽️. ⁽𝒂𝒚𝒐`

`• ٰۿۿـِدﯛ ⁽️. ⁽𝒉𝒅𝒐`

`• سٓـࢪۉۉ ⁽️. ⁽𝒔𝒓𝒐𝒐`

`• سٓـجۉۉ ⁽️. ⁽𝒔𝒋𝒐𝒐`

`• حنٰـۉۉ ⁽️. ⁽𝒉𝒏𝒐`

`• ٰﺂسٓـۉۉ ⁽️. ⁽𝒂𝒔𝒐`
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'- الى الخلف ! 🦄💸' ,'callback_data'=>"asm2"]],
[['text'=>'- ألرجـوع . 🦄💸' ,'callback_data'=>"home"]],
]])
]);   
}
if($data == "eeen" ){
file_put_contents("k99.txt","k99");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'- حسنا قم بأرسال اسمك بلغة الانكليزية فقط !🦄💸',
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'- ألرجـوع . 🦄💸' ,'callback_data'=>"home"]],
]])
]);   
}
if($text != "/start" and $k99 == "k99" and $chat_id !=  $k6 and $chat_id != $k7 and $chat_id != $bio and $chat_id != $bioch and $chat_id != $bu and $chat_id != $k5){
if (preg_match('/[a-z]/', $text) and !in_array($chat_id,$ad)){    
file_put_contents("k99.txt","none");
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"", ]);
$items = $items = ['࿅ 𓆙','࿅ 𓆈','࿅ 𓀌','࿅ 𓀎','࿅ 𓅻','࿅ 𓉀','࿅ 𓈪','࿅ 𓌬','࿅ 𓃼','࿅ 𓅉','࿅ 𓈯','࿅ 𓀎',];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$marcus = str_replace('a','𝗔',$text);
$marcus = str_replace("b","𝗕",$marcus);
$marcus = str_replace("c","𝗖",$marcus);
$marcus = str_replace("d","𝗗",$marcus);
$marcus = str_replace("e","𝗘",$marcus);
$marcus = str_replace("E","𝗙",$marcus);
$marcus = str_replace("g","𝗚",$marcus);
$marcus = str_replace("h","𝗛",$marcus);
$marcus = str_replace("i","𝗜",$marcus);
$marcus = str_replace("j","𝗝",$marcus);
$marcus = str_replace("k","𝗞",$marcus);
$marcus = str_replace("l","𝗟",$marcus);
$marcus = str_replace("m","𝗠",$marcus);
$marcus = str_replace("n","𝗡",$marcus);
$marcus = str_replace("o","𝗢",$marcus);
$marcus = str_replace("p","𝗣",$marcus);
$marcus = str_replace("q","𝗤",$marcus);
$marcus = str_replace("r","𝗥",$marcus);
$marcus = str_replace("s","𝗦",$marcus);
$marcus = str_replace("t","𝗧",$marcus);
$marcus = str_replace("u","𝗨",$marcus);
$marcus = str_replace("v","𝗩",$marcus);
$marcus = str_replace("w","𝗪",$marcus);
$marcus = str_replace("x","𝗫",$marcus);
$marcus = str_replace("y","𝗬",$marcus);
$marcus = str_replace("z","𝗭",$marcus);bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'*'.'〞'.$marcus.'༒𓄹〝'.$smile.'*',
'parse_mode'=>'MarkDown', ]);
$items = $items = ['࿅ 𓆙','࿅ 𓆈','࿅ 𓀌','࿅ 𓀎','࿅ 𓅻','࿅ 𓉀','࿅ 𓈪','࿅ 𓌬','࿅ 𓃼','࿅ 𓅉','࿅ 𓈯','࿅ 𓀎',];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);  
$marcus = str_replace('a','𝐀',$text);
$marcus = str_replace("b","𝐁",$marcus);
$marcus = str_replace("c","𝐂",$marcus);
$marcus = str_replace("d","𝐃",$marcus);
$marcus = str_replace("e","𝐄",$marcus);
$marcus = str_replace("E","𝐅",$marcus);
$marcus = str_replace("g","𝐆",$marcus);
$marcus = str_replace("h","𝐇",$marcus);
$marcus = str_replace("i","𝐈",$marcus);
$marcus = str_replace("j","𝐉",$marcus);
$marcus = str_replace("k","𝐊",$marcus);
$marcus = str_replace("l","𝑳",$marcus);
$marcus = str_replace("m","𝐌",$marcus);
$marcus = str_replace("n","𝐍",$marcus);
$marcus = str_replace("o","𝐎",$marcus);
$marcus = str_replace("p","𝐏",$marcus);
$marcus = str_replace("q","𝐐",$marcus);
$marcus = str_replace("r","𝐑",$marcus);
$marcus = str_replace("s","𝐒",$marcus);
$marcus = str_replace("t","𝐓",$marcus);
$marcus = str_replace("u","𝐔",$marcus);
$marcus = str_replace("v","𝐕",$marcus);
$marcus = str_replace("w","𝐖",$marcus);
$marcus = str_replace("x","𝐗",$marcus);
$marcus = str_replace("y","𝐘",$marcus);
$marcus = str_replace("z","𝐙",$marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'*'.'- 𝑰𝑻𝑺 »'.$marcus.'»'.$smile.'*',
'parse_mode'=>'MarkDown',]);
$items = $items = ['࿅ 𓆙','࿅ 𓆈','࿅ 𓀌','࿅ 𓀎','࿅ 𓅻','࿅ 𓉀','࿅ 𓈪','࿅ 𓌬','࿅ 𓃼','࿅ 𓅉','࿅ 𓈯','࿅ 𓀎',];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);  
$marcus = str_replace('a','𝔸',$text);
$marcus = str_replace("b","𝔹",$marcus);
$marcus = str_replace("c","ℂ",$marcus);
$marcus = str_replace("d","𝔻",$marcus);
$marcus = str_replace("e","𝔼",$marcus);
$marcus = str_replace("E","𝔽",$marcus);
$marcus = str_replace("g","𝔾",$marcus);
$marcus = str_replace("h","ℍ",$marcus);
$marcus = str_replace("i","𝕀",$marcus);
$marcus = str_replace("j","𝕁",$marcus);
$marcus = str_replace("k","𝕂",$marcus);
$marcus = str_replace("l","𝕃",$marcus);
$marcus = str_replace("m","𝕄",$marcus);
$marcus = str_replace("n","ℕ",$marcus);
$marcus = str_replace("o","𝕆",$marcus);
$marcus = str_replace("p","ℙ",$marcus);
$marcus = str_replace("q","ℚ",$marcus);
$marcus = str_replace("r","ℝ",$marcus);
$marcus = str_replace("s","𝕊",$marcus);
$marcus = str_replace("t","𝕋",$marcus);
$marcus = str_replace("u","𝕌",$marcus);
$marcus = str_replace("v","𝕍",$marcus);
$marcus = str_replace("w","𝕎",$marcus);
$marcus = str_replace("x","𝕏",$marcus);
$marcus = str_replace("y","𝕪",$marcus);
$marcus = str_replace("z","ℤ",$marcus);bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'*'.'• ﴾'.$marcus.'﴿ ✬'.$smile.'*',
'parse_mode'=>'MarkDown',]); $items = $items = ['࿅ 𓆙','࿅ 𓆈','࿅ 𓀌','࿅ 𓀎','࿅ 𓅻','࿅ 𓉀','࿅ 𓈪','࿅ 𓌬','࿅ 𓃼','࿅ 𓅉','࿅ 𓈯','࿅ 𓀎',];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);  
$marcus = str_replace('a','𝑨',$text); $marcus = str_replace('b','𝑩',$marcus); $marcus = str_replace('c','𝑪',$marcus); $marcus = str_replace('d','𝑫',$marcus); $marcus = str_replace('e','𝑬',$marcus); $marcus = str_replace('f','𝑭',$marcus); $marcus = str_replace('g','𝑮',$marcus); $marcus = str_replace('h','𝑯',$marcus); $marcus = str_replace('i','𝑰',$marcus); $marcus = str_replace('j','𝑱',$marcus); $marcus = str_replace('k','𝑲',$marcus); $marcus = str_replace('l','𝑳',$marcus); $marcus = str_replace('m','𝑴',$marcus); $marcus = str_replace('n','𝑵',$marcus); $marcus = str_replace('o','𝑶',$marcus); $marcus = str_replace('p','𝑷',$marcus); $marcus = str_replace('q','𝑸',$marcus); $marcus = str_replace('r','𝑹',$marcus); $marcus = str_replace('s','𝑺',$marcus); $marcus = str_replace('t','𝑻',$marcus); $marcus = str_replace('u','𝑽',$marcus); $marcus = str_replace('v','𝑽',$marcus); $marcus = str_replace('w','𝑾',$marcus); $marcus = str_replace('x','𝑿',$marcus); $marcus = str_replace('y','𝒀',$marcus); $marcus = str_replace('z','𝒁',$marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id,  
'text'=>'*'.'- 𓊆'.$marcus.'𓊇✞'.$smile.'*',
'parse_mode'=>'MarkDown',]);
$items = $items = ['࿅ 𓆙','࿅ 𓆈','࿅ 𓀌','࿅ 𓀎','࿅ 𓅻','࿅ 𓉀','࿅ 𓈪','࿅ 𓌬','࿅ 𓃼','࿅ 𓅉','࿅ 𓈯','࿅ 𓀎',];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);  
$marcus = str_replace('a','𝙰',$text); $marcus = str_replace('b','𝙱',$marcus); $marcus = str_replace('c','𝙲',$marcus); $marcus = str_replace('d','𝙳',$marcus); $marcus = str_replace('e','𝙴',$marcus); $marcus = str_replace('f','𝙵',$marcus); $marcus = str_replace('g','𝙶',$marcus); $marcus = str_replace('h','𝙷',$marcus); $marcus = str_replace('i','𝙸',$marcus); $marcus = str_replace('j','𝚓',$marcus); $marcus = str_replace('k','𝙺',$marcus); $marcus = str_replace('l','𝙻',$marcus); $marcus = str_replace('m','𝙼',$marcus); $marcus = str_replace('n','𝙽',$marcus); $marcus = str_replace('o','𝙾',$marcus); $marcus = str_replace('p','𝙿',$marcus); $marcus = str_replace('q','𝚀',$marcus); $marcus = str_replace('r','𝚁',$marcus); $marcus = str_replace('s','𝚂',$marcus); $marcus = str_replace('t','𝚃',$marcus); $marcus = str_replace('u','𝚞',$marcus); $marcus = str_replace('v','𝚅',$marcus); $marcus = str_replace('w','𝚆',$marcus); $marcus = str_replace('x','𝚇',$marcus); $marcus = str_replace('y','𝚈',$marcus); $marcus = str_replace('z','𝚉',$marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id,  
'text'=>'*'.'ᯓ 𓆩'.$marcus.'𓆪 🇮??,'.$smile.'*',
'parse_mode'=>'MarkDown',]);     
$items = $items = ['࿅ 𓆙','࿅ 𓆈','࿅ 𓀌','࿅ 𓀎','࿅ 𓅻','࿅ 𓉀','࿅ 𓈪','࿅ 𓌬','࿅ 𓃼','࿅ 𓅉','࿅ 𓈯','࿅ 𓀎',];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$marcus = str_replace('a', '𝐴', $text);
$marcus = str_replace('b', 'b', $marcus);
$marcus = str_replace('c', '𝐶', $marcus);
$marcus = str_replace('d', '𝐷', $marcus);
$marcus = str_replace('e', '𝐸', $marcus);
$marcus = str_replace('f', '𝐹', $marcus);
$marcus = str_replace('g', '𝐺', $marcus);
$marcus = str_replace('h', '𝐻', $marcus);
$marcus = str_replace('i', '𝐼', $marcus);
$marcus = str_replace('j', '𝐽', $marcus);
$marcus = str_replace('k', '𝐾', $marcus);
$marcus = str_replace('l', '𝐿', $marcus);
$marcus = str_replace('m', '𝑀', $marcus);
$marcus = str_replace('n', '𝑁', $marcus);
$marcus = str_replace('o', '𝑂', $marcus);
$marcus = str_replace('p', '𝑃', $marcus);
$marcus = str_replace('q', '𝑄', $marcus);
$marcus = str_replace('r', '𝑅', $marcus);
$marcus = str_replace('s', '𝑆', $marcus);
$marcus = str_replace('t', '𝑇', $marcus);
$marcus = str_replace('u', '𝑉', $marcus);
$marcus = str_replace('v', '𝑊', $marcus);
$marcus = str_replace('w', '𝑊', $marcus);
$marcus = str_replace('x', '𝑋', $marcus);
$marcus = str_replace('y', '𝑌', $marcus);
$marcus = str_replace('z', '𝒖', $marcus);bot('sendMessage',[ 
'chat_id'=>$chat_id,  
'text'=>'*'.'«「'.$marcus.'༗」»'.$smile.'*',
'parse_mode'=>'MarkDown',]);  $items = $items = ['࿅ 𓆙','࿅ 𓆈','࿅ 𓀌','࿅ 𓀎','࿅ 𓅻','࿅ 𓉀','࿅ 𓈪','࿅ 𓌬','࿅ 𓃼','࿅ 𓅉','࿅ 𓈯','࿅ 𓀎',]; $_smile = array_rand($items,1); $smile = $items[$_smile];  $count = count($text);   $marcus = str_replace('a',"ꪖ",$text);
$marcus = str_replace('A',"ꪖ",$marcus);
$marcus = str_replace("b","᥇",$marcus);
$marcus = str_replace("c","ᥴ",$marcus);
$marcus = str_replace("d","ᦔ",$marcus);
$marcus = str_replace("e","ꫀ",$marcus);
$marcus = str_replace("f","ᠻ",$marcus);
$marcus = str_replace("g","ᧁ",$marcus);
$marcus = str_replace("h","ꫝ",$marcus);
$marcus = str_replace("i","𝓲",$marcus);
$marcus = str_replace("j","𝓳",$marcus);
$marcus = str_replace("k","𝘬",$marcus);
$marcus = str_replace("l","ꪶ",$marcus);
$marcus = str_replace("m","ꪑ",$marcus);
$marcus = str_replace("n","ꪀ",$marcus);
$marcus = str_replace("o","ꪮ",$marcus);
$marcus = str_replace("p","ρ",$marcus);
$marcus = str_replace("q","𝘲",$marcus);
$marcus = str_replace("r","𝘳",$marcus);
$marcus = str_replace("s","𝘴",$marcus);
$marcus = str_replace("t","𝓽",$marcus);
$marcus = str_replace("u","ꪊ",$marcus);
$marcus = str_replace("v","ꪜ",$marcus);
$marcus = str_replace("w","᭙",$marcus);
$marcus = str_replace("x","᥊",$marcus);
$marcus = str_replace("y","ꪗ",$marcus);
$marcus = str_replace("z","ɀ",$marcus);
bot('sendMessage',[  
'chat_id'=>$chat_id, 
'text'=>'*'.'˹'.$marcus.'˼༒'.$smile.'*',
'parse_mode'=>'MarkDown',]);$items = $items = ['࿅ 𓆙','࿅ 𓆈','࿅ 𓀌','࿅ ??','࿅ 𓅻','࿅ 𓉀','࿅ 𓈪','࿅ 𓌬','࿅ 𓃼','࿅ 𓅉','࿅ 𓈯','࿅ 𓀎',]; $_smile = array_rand($items,1); $smile = $items[$_smile];  $count = count(`$text`);  $marcus = str_replace('a', 'ᴀ', $text);
$marcus = str_replace('b', 'ʙ', $marcus);
$marcus = str_replace('c', 'ᴄ', $marcus);
$marcus = str_replace('d', 'ᴅ', $marcus);
$marcus = str_replace('e', 'ᴇ', $marcus);
$marcus = str_replace('f', 'ᴈ', $marcus);
$marcus = str_replace('g', 'ɢ', $marcus);
$marcus = str_replace('h', 'ʜ', $marcus);
$marcus = str_replace('i', 'ɪ', $marcus);
$marcus = str_replace('j', 'ᴊ', $marcus);
$marcus = str_replace('k', 'ᴋ', $marcus);
$marcus = str_replace('l', 'ʟ', $marcus);
$marcus = str_replace('m', 'ᴍ', $marcus);
$marcus = str_replace('n', 'ɴ', $marcus);
$marcus = str_replace('o', 'ᴏ', $marcus);
$marcus = str_replace('p', 'ᴘ', $marcus);
$marcus = str_replace('q', 'ᴓ', $marcus);
$marcus = str_replace('r', 'ʀ', $marcus);
$marcus = str_replace('s', 'ᴤ', $marcus);
$marcus = str_replace('t', 'ᴛ', $marcus);
$marcus = str_replace('u', 'ᴜ', $marcus);
$marcus = str_replace('v', 'ᴠ', $marcus);
$marcus = str_replace('w', 'ᴡ', $marcus);
$marcus = str_replace('x', 'ᴥ', $marcus);
$marcus = str_replace('y', 'ʏ', $marcus);
$marcus = str_replace('z', 'ᴢ', $marcus);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.' 『'.$marcus.'𖠛 』𖨬'.$smile.'*',
'parse_mode'=>'MarkDown',]);$items = $items = ['࿅ 𓆙','࿅ 𓆈','࿅ 𓀌','࿅ 𓀎','࿅ 𓅻','࿅ 𓉀','࿅ 𓈪','࿅ 𓌬','࿅ 𓃼','࿅ 𓅉','࿅ 𓈯','࿅ 𓀎',];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);  
$marcus = str_replace('a','ᗩ',$text);
$marcus = str_replace("b","ᗷ",$marcus);
$marcus = str_replace("c","ᑕ",$marcus);
$marcus = str_replace("d","ᗪ",$marcus);
$marcus = str_replace("e","E",$marcus);
$marcus = str_replace("E","E",$marcus);
$marcus = str_replace("g","G",$marcus);
$marcus = str_replace("h","ᕼ",$marcus);
$marcus = str_replace("i","I",$marcus);
$marcus = str_replace("j","ᒍ",$marcus);
$marcus = str_replace("k","K",$marcus);
$marcus = str_replace("l","ᒪ",$marcus);
$marcus = str_replace("m","ᗰ",$marcus);
$marcus = str_replace("n","ᑎ",$marcus);
$marcus = str_replace("o","O",$marcus);
$marcus = str_replace("p","ᑭ",$marcus);
$marcus = str_replace("q","ᑫ",$marcus);
$marcus = str_replace("r","ᖇ",$marcus);
$marcus = str_replace("s","ᔕ",$marcus);
$marcus = str_replace("t","T",$marcus);
$marcus = str_replace("u","ᑌ",$marcus);
$marcus = str_replace("v","ᐯ",$marcus);
$marcus = str_replace("w","ᗯ",$marcus);
$marcus = str_replace("x","᙭",$marcus);
$marcus = str_replace("y","Y",$marcus);
$marcus = str_replace("z","ᘔ",$marcus);bot('sendMessage',[ 
'chat_id'=>$chat_id,   
'text'=>'*'.'- 𓆪˹'.$marcus.'˼𓆩 𐂂”'.$smile.'*',
'parse_mode'=>'MarkDown',]); 
$items = $items = ['࿅ 𓆙','࿅ 𓆈','࿅ 𓀌','࿅ 𓀎','࿅ 𓅻','࿅ 𓉀','࿅ 𓈪','࿅ 𓌬','࿅ 𓃼','࿅ 𓅉','࿅ 𓈯','࿅ 𓀎',];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);  
$marcus = str_replace('a','Ꭿ',$text);
$marcus = str_replace("b","Ᏸ",$marcus);
$marcus = str_replace("c","Ꮸ",$marcus);
$marcus = str_replace("d","Ꮷ",$marcus);
$marcus = str_replace("e","Ꮛ",$marcus);
$marcus = str_replace("f","Ꭶ",$marcus);
$marcus = str_replace("g","Ᏻ",$marcus);
$marcus = str_replace("h","Ᏺ",$marcus);
$marcus = str_replace("i","Ꭸ",$marcus);
$marcus = str_replace("j","Ꮰ",$marcus);
$marcus = str_replace("k","Ꮵ",$marcus);
$marcus = str_replace("l","Ꮭ",$marcus);
$marcus = str_replace("m","ᗰ",$marcus);
$marcus = str_replace("n","Ꮑ",$marcus);
$marcus = str_replace("o","Ꭷ",$marcus);
$marcus = str_replace("p","Ꭾ",$marcus);
$marcus = str_replace("q","Ꮕ",$marcus);
$marcus = str_replace("r","ᖇ",$marcus);
$marcus = str_replace("s","Ꮥ",$marcus);
$marcus = str_replace("t","Ꮱ",$marcus);
$marcus = str_replace("u","Ꮼ",$marcus);
$marcus = str_replace("v","Ꮙ",$marcus);
$marcus = str_replace("w","Ꮗ",$marcus);
$marcus = str_replace("x","Ꮂ",$marcus);
$marcus = str_replace("y","Ꮍ",$marcus);
$marcus = str_replace("z","ᔓ",$marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'*'.'• ﴾'.$marcus.'﴿ ✬'.$smile.'*',
'parse_mode'=>'MarkDown',]);$items = $items = ['࿅ 𓆙','࿅ 𓆈','࿅ 𓀌','࿅ 𓀎','࿅ 𓅻','࿅ 𓉀','࿅ 𓈪','࿅ 𓌬','࿅ 𓃼','࿅ 𓅉','࿅ 𓈯','࿅ 𓀎',];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);  
$marcus = str_replace('a', 'Ꭿ', $text);
$marcus = str_replace('b', 'ℬ', $marcus);
$marcus = str_replace('c', 'Ꮯ', $marcus);
$marcus = str_replace('d', 'Ꭰ', $marcus);
$marcus = str_replace('e', 'ℰ', $marcus);
$marcus = str_replace('f', 'ℱ', $marcus);
$marcus = str_replace('g', 'Ꮆ', $marcus);
$marcus = str_replace('h', 'ℋ', $marcus);
$marcus = str_replace('i', 'ℐ', $marcus);
$marcus = str_replace('j', 'Ꭻ', $marcus);
$marcus = str_replace('k', 'Ꮶ', $marcus);
$marcus = str_replace('l', 'ℒ', $marcus);
$marcus = str_replace('m', 'ℳ', $marcus);
$marcus = str_replace('n', 'Ꮑ', $marcus);
$marcus = str_replace('o', 'Ꮎ', $marcus);
$marcus = str_replace('p', 'Ꮲ', $marcus);
$marcus = str_replace('q', 'ℚ', $marcus);
$marcus = str_replace('r', 'ℛ', $marcus);
$marcus = str_replace('s', 'Ѕ', $marcus);
$marcus = str_replace('t', 'Ꮖ', $marcus);
$marcus = str_replace('u', 'U', $marcus);
$marcus = str_replace('v', 'Ꮙ', $marcus);
$marcus = str_replace('w', 'Ꮗ', $marcus);
$marcus = str_replace('x', 'Ж', $marcus);
$marcus = str_replace('y', '‏ϒ', $marcus);
$marcus = str_replace('z', 'Ž', $marcus); bot('sendMessage',[       'chat_id'=>$chat_id,       'text'=>'*'.'𖣂 -'.$marcus.'༆”'.$smile.'*',
'parse_mode'=>'MarkDown',]);$items = $items = ['࿅ 𓆙','࿅ 𓆈','࿅ 𓀌','࿅ 𓀎','࿅ 𓅻','࿅ 𓉀','࿅ 𓈪','࿅ 𓌬','࿅ 𓃼','࿅ 𓅉','࿅ 𓈯','࿅ 𓀎',];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);  
$marcus = str_replace('a','𝙰',$text); $marcus = str_replace('b','𝙱',$marcus); $marcus = str_replace('c','𝙲',$marcus); $marcus = str_replace('d','𝙳',$marcus); $marcus = str_replace('e','𝙴',$marcus); $marcus = str_replace('f','𝙵',$marcus); $marcus = str_replace('g','𝙶',$marcus); $marcus = str_replace('h','𝙷',$marcus); $marcus = str_replace('i','𝙸',$marcus); $marcus = str_replace('j','𝚓',$marcus); $marcus = str_replace('k','𝙺',$marcus); $marcus = str_replace('l','𝙻',$marcus); $marcus = str_replace('m','𝙼',$marcus); $marcus = str_replace('n','𝙽',$marcus); $marcus = str_replace('o','𝙾',$marcus); $marcus = str_replace('p','𝙿',$marcus); $marcus = str_replace('q','𝚀',$marcus); $marcus = str_replace('r','𝚁',$marcus); $marcus = str_replace('s','𝚂',$marcus); $marcus = str_replace('t','𝚃',$marcus); $marcus = str_replace('u','𝚞',$marcus); $marcus = str_replace('v','𝚅',$marcus); $marcus = str_replace('w','𝚆',$marcus); $marcus = str_replace('x','𝚇',$marcus); $marcus = str_replace('y','𝚈',$marcus); $marcus = str_replace('z','𝚉',$marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id,    
'text'=>'*'.'ᯓ 「'.$marcus.'」، ⦃'.$smile.'*',
'parse_mode'=>'MarkDown',]);
$items = $items = ['࿅ 𓆙','࿅ 𓆈','࿅ 𓀌','࿅ 𓀎','࿅ 𓅻','࿅ 𓉀','࿅ 𓈪','࿅ 𓌬','࿅ 𓃼','࿅ 𓅉','࿅ 𓈯','࿅ 𓀎',]; $_smile = array_rand($items,1); $smile = $items[$_smile];  $count = count($text); 
$marcus = str_replace('a', 'A҉', $text);
$marcus = str_replace('b', 'B҉', $marcus);
$marcus = str_replace('c', 'C҉', $marcus);
$marcus = str_replace('d', 'D҉', $marcus);
$marcus = str_replace('e', 'E҉', $marcus);
$marcus = str_replace('f', 'F҉', $marcus);
$marcus = str_replace('g', 'G҉', $marcus);
$marcus = str_replace('h', 'H҉', $marcus);
$marcus = str_replace('i', ' I҉ ', $marcus);
$marcus = str_replace('j', 'J҉', $marcus);
$marcus = str_replace('k', 'K҉', $marcus);
$marcus = str_replace('l', 'L҉', $marcus);
$marcus = str_replace('m', 'M҉', $marcus);
$marcus = str_replace('n', 'N҉', $marcus);
$marcus = str_replace('o', 'O҉', $marcus);
$marcus = str_replace('p', 'P҉', $marcus);
$marcus = str_replace('q', 'Q҉', $marcus);
$marcus = str_replace('r', 'R҉', $marcus);
$marcus = str_replace('s', 'S҉', $marcus);
$marcus = str_replace('t', 'T҉', $marcus);
$marcus = str_replace('u', 'U҉', $marcus);
$marcus = str_replace('v', 'V҉', $marcus);
$marcus = str_replace('w', 'W҉', $marcus);
$marcus = str_replace('x', 'X҉', $marcus);
$marcus = str_replace('y', 'Y҉', $marcus);
$marcus = str_replace('z', 'Z҉', $marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id,   
'text'=>'*'.'ᯓ 𓆩 ˹'.$marcus.'˼ 𓆪 '.$smile.'*',
'parse_mode'=>'MarkDown',]); $items = $items = ['࿅ 𓆙','࿅ 𓆈','࿅ 𓀌','࿅ 𓀎','࿅ 𓅻','࿅ 𓉀','࿅ 𓈪','࿅ 𓌬','࿅ 𓃼','࿅ 𓅉','࿅ 𓈯','࿅ 𓀎',]; $_smile = array_rand($items,1); $smile = $items[$_smile];  $count = count($text); 
$marcus = str_replace('a','𝙰',$text); $marcus = str_replace('b','𝙱',$marcus); $marcus = str_replace('c','𝙲',$marcus); $marcus = str_replace('d','𝙳',$marcus); $marcus = str_replace('e','𝙴',$marcus); $marcus = str_replace('f','𝙵',$marcus); $marcus = str_replace('g','𝙶',$marcus); $marcus = str_replace('h','𝙷',$marcus); $marcus = str_replace('i','𝙸',$marcus); $marcus = str_replace('j','𝚓',$marcus); $marcus = str_replace('k','𝙺',$marcus); $marcus = str_replace('l','𝙻',$marcus); $marcus = str_replace('m','𝙼',$marcus); $marcus = str_replace('n','𝙽',$marcus); $marcus = str_replace('o','𝙾',$marcus); $marcus = str_replace('p','𝙿',$marcus); $marcus = str_replace('q','𝚀',$marcus); $marcus = str_replace('r','𝚁',$marcus); $marcus = str_replace('s','𝚂',$marcus); $marcus = str_replace('t','𝚃',$marcus); $marcus = str_replace('u','𝚞',$marcus); $marcus = str_replace('v','𝚅',$marcus); $marcus = str_replace('w','𝚆',$marcus); $marcus = str_replace('x','𝚇',$marcus); $marcus = str_replace('y','𝚈',$marcus); $marcus = str_replace('z','𝚉',$marcus);bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>'*'.'#1🇮🇶𖨤𓆩'.$marcus.'𓆪'.$smile.'*',
'parse_mode'=>'MarkDown',]);$items = $items = ['࿅ 𓆙','࿅ 𓆈','࿅ 𓀌','࿅ 𓀎','࿅ 𓅻','࿅ 𓉀','࿅ 𓈪','࿅ 𓌬','࿅ 𓃼','࿅ 𓅉','࿅ 𓈯','࿅ 𓀎',]; $_smile = array_rand($items,1); $smile = $items[$_smile];  $count = count($text); 
$marcus = str_replace('a','𝗔',$text); $marcus = str_replace('b','𝗕',$marcus); $marcus = str_replace('c','𝗖',$marcus); $marcus = str_replace('d','𝗗',$marcus); $marcus = str_replace('e','𝗘',$marcus); $marcus = str_replace('f','𝗙',$marcus); $marcus = str_replace('g','𝗚',$marcus); $marcus = str_replace('h','𝗛',$marcus); $marcus = str_replace('i','𝗜',$marcus); $marcus = str_replace('j','𝗝',$marcus); $marcus = str_replace('k','𝗞',$marcus); $marcus = str_replace('l','𝗟',$marcus); $marcus = str_replace('m','𝗠',$marcus); $marcus = str_replace('n','𝗡',$marcus); $marcus = str_replace('o','𝗢',$marcus); $marcus = str_replace('p','𝗣',$marcus); $marcus = str_replace('q','𝗤',$marcus); $marcus = str_replace('r','𝗥',$marcus); $marcus = str_replace('s','𝗦',$marcus); $marcus = str_replace('t','𝗧',$marcus); $marcus = str_replace('u','𝗨',$marcus); $marcus = str_replace('v','𝗩',$marcus); $marcus = str_replace('w','𝗪',$marcus); $marcus = str_replace('x','𝗫',$marcus); $marcus = str_replace('y','𝗬',$marcus); $marcus = str_replace('z','𝗭',$marcus);bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'*'.'𓂐『 𝒊𝒕’𝒔 ⌯'.$marcus.'』♱..'.$smile.'*',
'parse_mode'=>'MarkDown',]);
$items = $items = ['࿅ 𓆙','࿅ 𓆈','࿅ 𓀌','࿅ 𓀎','࿅ 𓅻','࿅ 𓉀','࿅ 𓈪','࿅ 𓌬','࿅ 𓃼','࿅ 𓅉','࿅ 𓈯','࿅ 𓀎',]; $_smile = array_rand($items,1); $smile = $items[$_smile];  $count = count($text);   $marcus = str_replace('a', '𝘢', $text);
$marcus = str_replace('b', '𝘣', $marcus);
$marcus = str_replace('c', '𝘤', $marcus);
$marcus = str_replace('d', '𝘥', $marcus);
$marcus = str_replace('e', '𝘦', $marcus);
$marcus = str_replace('f', '𝘧', $marcus);
$marcus = str_replace('g', '𝘨', $marcus);
$marcus = str_replace('h', '𝘩', $marcus);
$marcus = str_replace('i', '𝘪', $marcus);
$marcus = str_replace('j', '𝘫', $marcus);
$marcus = str_replace('k', '𝘬', $marcus);
$marcus = str_replace('l', '𝘭', $marcus);
$marcus = str_replace('m', '𝘮', $marcus);
$marcus = str_replace('n', '𝘯', $marcus);
$marcus = str_replace('o', '𝘰', $marcus);
$marcus = str_replace('p', '𝘱', $marcus);
$marcus = str_replace('q', '𝘲', $marcus);
$marcus = str_replace('r', '𝘳', $marcus);
$marcus = str_replace('s', '𝘴', $marcus);
$marcus = str_replace('t', '𝘵', $marcus);
$marcus = str_replace('u', '𝘶', $marcus);
$marcus = str_replace('v', '𝘷', $marcus);
$marcus = str_replace('w', '𝘸', $marcus);
$marcus = str_replace('x', '𝘹', $marcus);
$marcus = str_replace('y', '𝘺', $marcus);
$marcus = str_replace('z', '𝘻', $marcus);bot('sendMessage',[
'chat_id'=>$chat_id,  
'text'=>'*'.'ᯓ『'.$marcus.' 𖠛 』𖨬 🇮🇶'.$smile.'*',
'parse_mode'=>'MarkDown',]);
$items = $items = ['࿅ 𓆙','࿅ 𓆈','࿅ 𓀌','࿅ 𓀎','࿅ 𓅻','࿅ 𓉀','࿅ 𓈪','࿅ 𓌬','࿅ 𓃼','࿅ 𓅉','࿅ 𓈯','࿅ 𓀎',];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$marcus = str_replace('a', 'Ａ', $text);
$marcus = str_replace('b', 'Ｂ', $marcus);
$marcus = str_replace('c', 'Ｃ', $marcus);
$marcus = str_replace('d', 'Ｄ', $marcus);
$marcus = str_replace('e', 'Ｅ', $marcus);
$marcus = str_replace('f', 'Ｆ', $marcus);
$marcus = str_replace('g', 'Ｇ', $marcus);
$marcus = str_replace('h', 'Ｈ', $marcus);
$marcus = str_replace('i', 'Ｉ', $marcus);
$marcus = str_replace('j', 'Ｊ', $marcus);
$marcus = str_replace('k', 'Ｋ', $marcus);
$marcus = str_replace('l', 'Ｌ', $marcus);
$marcus = str_replace('m', 'Ｍ', $marcus);
$marcus = str_replace('n', 'Ｎ', $marcus);
$marcus = str_replace('o', 'Ｏ', $marcus);
$marcus = str_replace('p', 'Ｐ', $marcus);
$marcus = str_replace('q', 'Ｑ', $marcus);
$marcus = str_replace('r', 'Ｒ', $marcus);
$marcus = str_replace('s', 'Ｓ', $marcus);
$marcus = str_replace('t', 'Ｔ', $marcus);
$marcus = str_replace('u', 'Ｕ', $marcus);
$marcus = str_replace('v', 'Ｖ', $marcus);
$marcus = str_replace('w', 'Ｗ', $marcus);
$marcus = str_replace('x', 'Ｘ', $marcus);
$marcus = str_replace('y', 'Ｙ', $marcus);
$marcus = str_replace('z', 'Ｚ', $marcus);
bot('sendMessage',[ 
'chat_id'=>$chat_id,  
'text'=>'*'.'«「'.$marcus.'༗」»'.$smile.'*',
'parse_mode'=>'MarkDown',]);   
$items = $items = ['࿅ 𓆙','࿅ 𓆈','࿅ 𓀌','࿅ 𓀎','࿅ 𓅻','࿅ 𓉀','࿅ 𓈪','࿅ 𓌬','࿅ 𓃼','࿅ 𓅉','࿅ 𓈯','࿅ 𓀎',];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$marcus = str_replace('a', '۰۪۫A۪۫۰', $text);
$marcus = str_replace('b', '۰۪۫B۪۫۰', $marcus);
$marcus = str_replace('c', '۰۪۫C۪۫۰', $marcus);
$marcus = str_replace('d', '۰۪۫D۪۫۰', $marcus);
$marcus = str_replace('e', '۰۪۫E۪۫۰', $marcus);
$marcus = str_replace('f', '۰۪۫F۪۫۰', $marcus);
$marcus = str_replace('g', '۰۪۫G۪۫۰', $marcus);
$marcus = str_replace('h', '۰۪۫H۪۫۰', $marcus);
$marcus = str_replace('i', '۰۪۫I۪۫۰', $marcus);
$marcus = str_replace('j', '۰۪۫J۪۫۰', $marcus);
$marcus = str_replace('k', '۰۪۫K۪۫۰', $marcus);
$marcus = str_replace('l', '۰۪۫L۪۫۰', $marcus);
$marcus = str_replace('m', '۰۪۫M۪۫۰', $marcus);
$marcus = str_replace('n', '۰۪۫N۪۫۰', $marcus);
$marcus = str_replace('o', '۰۪۫O۪۫۰', $marcus);
$marcus = str_replace('p', '۰۪۫P۪۫۰', $marcus);
$marcus = str_replace('q', '۰۪۫Q۪۫۰', $marcus);
$marcus = str_replace('r', '۰۪۫R۪۫۰', $marcus);
$marcus = str_replace('s', '۰۪۫S۪۫۰', $marcus);
$marcus = str_replace('t', '۰۪۫T۪۫۰', $marcus);
$marcus = str_replace('u', '۰۪۫U۪۫۰', $marcus);
$marcus = str_replace('v', '۰۪۫V۪۫۰', $marcus);
$marcus = str_replace('w', '۰۪۫W۪۫۰', $marcus);
$marcus = str_replace('x', '۰۪۫X۪۫۰', $marcus);
$marcus = str_replace('y', '۰۪۫Y۪۫۰', $marcus);
$marcus = str_replace('z', '۰۪۫Z۪۫۰', $marcus);bot('sendMessage',[ 
'chat_id'=>$chat_id,   
'text'=>'*'.'｟'.$marcus.'｠'.$smile.'*',
'parse_mode'=>'MarkDown',]);$items = $items = ['࿅ 𓆙','࿅ 𓆈','࿅ 𓀌','࿅ 𓀎','࿅ 𓅻','࿅ 𓉀','࿅ 𓈪','࿅ 𓌬','࿅ 𓃼','࿅ 𓅉','࿅ 𓈯','࿅ 𓀎',]; $_smile = array_rand($items,1); $smile = $items[$_smile];  $count = count($text); 
$marcus = str_replace('a','𝙰',$text); $marcus = str_replace('b','𝙱',$marcus); $marcus = str_replace('c','𝙲',$marcus); $marcus = str_replace('d','𝙳',$marcus); $marcus = str_replace('e','𝙴',$marcus); $marcus = str_replace('f','𝙵',$marcus); $marcus = str_replace('g','𝙶',$marcus); $marcus = str_replace('h','𝙷',$marcus); $marcus = str_replace('i','𝙸',$marcus); $marcus = str_replace('j','𝚓',$marcus); $marcus = str_replace('k','𝙺',$marcus); $marcus = str_replace('l','𝙻',$marcus); $marcus = str_replace('m','𝙼',$marcus); $marcus = str_replace('n','𝙽',$marcus); $marcus = str_replace('o','𝙾',$marcus); $marcus = str_replace('p','𝙿',$marcus); $marcus = str_replace('q','𝚀',$marcus); $marcus = str_replace('r','𝚁',$marcus); $marcus = str_replace('s','𝚂',$marcus); $marcus = str_replace('t','𝚃',$marcus); $marcus = str_replace('u','𝚞',$marcus); $marcus = str_replace('v','𝚅',$marcus); $marcus = str_replace('w','𝚆',$marcus); $marcus = str_replace('x','𝚇',$marcus); $marcus = str_replace('y','𝚈',$marcus); $marcus = str_replace('z','𝚉',$marcus);bot('sendMessage',[ 
'chat_id'=>$chat_id,   
'text'=>'*'.'ᯓ 𓆩 ˹'.$marcus.'˼ 𓆪  ☬,'.$smile.'*',
'parse_mode'=>'MarkDown',]);   
bot('sendMessage',[
'chat_id'=>$chat_id,   
   'text'=>"
- تم زخرفة الاسم $text . 🦄💸
- ويمكنك رؤية الرموز ايضاً بالضغط على رموز  .🦄💸
- يرجى الضغط على زر عوده في الاسفل . 🦄💸
"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- زخرفة مرة اخرى ! 🦄💸' ,'callback_data'=>"eeen"],['text'=>'- ألرمـوز . 🦄💸' ,'callback_data'=>"at"]],
[['text'=>'- ألرجـوع . 🦄💸' ,'callback_data'=>"home"]],
]])
]);
unlink("bu.txt");
 unlink("k6.txt");
 unlink("k7.txt");
 unlink("k5.txt");
 unlink("bio.txt");
 unlink("k99.txt");
 unlink("bioch.txt");
}}

$bu = file_get_contents("bu.txt");
$bioch = file_get_contents("bioch.txt");
$bio = file_get_contents("bio.txt");
$quotech3 = ["⌯ 𝗡𝗼𝘁 𝗲𝘃𝗲𝗿𝘆𝗼𝗻𝗲 𝘆𝗼𝘂 𝗹𝗼𝘀𝗲 𝗶𝘀 𝗮 𝗹𝗼𝘀𝘀  ༯",
"↬ 𝑖 𝑗𝑢𝑠𝑡 𝑤𝑎𝑛𝑡 𝑠𝑘𝑖𝑝 𝑚𝑦 𝑙𝑖𝑓𝑒 .",
"- 𝚗𝚘𝚋𝚘𝚍𝚊𝚢 𝚞𝚗𝚍𝚎𝚛𝚜𝚝𝚊𝚗𝚍𝚜 𝚢𝚘𝚞𝚛 𝚍𝚒𝚏𝚏𝚎𝚛𝚎𝚗𝚌𝚎 .  ོ",
"- 𝙄‘𝙈 𝘽𝘼𝘿 𝘿𝙊𝙉𝙏 𝘾𝙊𝙈𝙀 𝘾𝙇𝙊𝙎𝙀  ༒ ٫",
"- 𓆰 𝙸𝙵 𝚆𝙴 𝙳𝙾𝙽 𝚃 𝙴𝙽𝙳 𝚆𝙰𝚁, 𝚆𝙰𝚁 𝚆𝙸𝙻𝙻 𝙴𝙽𝙳 𝚄𝚂 . ♰",
"- 𝖨 𝖺𝗆 𝗀𝗈𝗈𝖽 𝖺𝗍 𝗉𝗋𝖾𝗍𝖾𝗇𝖽𝗂𝗇𝗀 𝗍𝗁𝖺𝗍 𝗂 𝖺𝗆 𝖿𝗂𝗇𝖾 . 𓆩༒𓆪",
"⌁ 𝒊 𝒎 𝒕𝒉𝒆 𝒐𝒏𝒆 𝒚𝒐𝒖 𝒔𝒉𝒐𝒖𝒍𝒅 𝒍𝒐𝒗𝒆 𖠲",
"⌯ Don t Try To Fix Me ٫ i'm Not Broken 𖣂",
"𓄼 𝑱𝒖𝒔𝒕 𝑴𝒆 𓄹",]; 
$quotech2 = array_rand($quotech3,1);
$quotech = $quotech3[$quotech2];
$ex = explode("\n",$text);
$byy = $ex[0];
$linkk = $ex[1];
if($data == "mikbioch" ){
file_put_contents("bioch.txt","bioch");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
- حسنا أرسال معلومات قناتك
- رجاءا المعلومات حسب  التالي :
- معرف المنشئ
- معرف او رابط القناة ',
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'- ألرجـوع . 🦄💸' ,'callback_data'=>"home"]],
]])
]);
}
  if($text != "/start"   and $bioch == "bioch" and $chat_id !=  $k6 and $chat_id != $k7 and $chat_id != $bio and $chat_id != $k5 and $chat_id != $bu){
      file_put_contents("bioch.txt","none");
 bot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"

 $quotech
__________
𝙱𝚈 ➤ : $byy
𝙻𝙸𝙽𝙺 ➤ : $linkk 𖢒
",
]);
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
- تم صنع بايو قناة الى المعلومات التاليه 
- المنشئ : [$byy]
- القناة : [$linkk]
- ويمكنك رؤية الرموز ايضاً بالضغط على رموز 
- يرجى الضغط على زر عوده في الاسفل"
,'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- ألرمـوز . 🦄💸' ,'callback_data'=>"at"],['text'=>'- ألرجـوع . 🦄💸' ,'callback_data'=>"home"]],
[['text'=>'- صنع مرة أخرى ! 🦄💸' ,'callback_data'=>"mikbioch"]],
]])
]);
unlink("bu.txt");
 unlink("k6.txt");
 unlink("k7.txt");
 unlink("k5.txt");
 unlink("bio.txt");
 unlink("k99.txt");
 unlink("bioch.txt");
}
 $quote3 = [
"I 𝘀𝘁𝗶𝗹𝗹 𝗳𝗮𝗹𝗹 𝗶𝗻 𝗹𝗼𝘃𝗲 𝘄𝗶𝘁𝗵 𝘆𝗼𝘂, 𝗲𝘃𝗲𝗿𝘆 𝗱𝗮𝘆",
"𝒀𝑶𝑼 𝑭𝑶𝑹𝑮𝑶𝑻 𝑯𝑶𝑾 𝑻𝑶 𝑳𝑶𝑽𝑬. 𝑨𝑮𝑨𝑰𝑵",
"𝗠𝘂𝘀𝗶𝗰 𝗱𝗶𝗱𝗻'𝘁 𝗸𝗶𝗹𝗹 𝗮𝗻𝘆𝗼𝗻𝗲",
"< 𝙄’𝙈 𝙏𝙃𝙀 𝙊𝙉𝙀 𝙔𝙊𝙐 𝙎𝙃𝙊𝙐𝙇𝘿 𝙇𝙊𝙑𝙀 >",
"- 𝕹𝖔𝖙𝖍𝖎𝖓𝖌 𝕳𝖊𝖆𝖑𝖘,𝕿𝖍𝖊 𝕻𝖆𝖘𝖙 𝕷𝖎𝖐𝖊 𝕿𝖎𝖒𝖊..",
"𝗟𝗲𝘁𝘀 𝗳𝗼𝗿𝗴𝗲𝘁 𝘁𝗵𝗲 𝗽𝗮𝘀𝘁 𝗮𝗻𝗱 𝗺𝗼𝘃𝗲 𝗼𝗻",
"٠〈 .𝘪 𝘴𝘦𝘦 𝘺𝘰𝘶 𝘪𝘯 𝘢𝘭𝘭 𝘮𝘺 𝘧𝘢𝘷𝘰𝘳𝘪𝘵𝘦. 〉٠—",
"𝗜 𝘄𝗮𝘀 𝗮 𝗴𝗼𝗼𝗱 𝗳𝗿𝗶𝗲𝗻𝗱 𝘁𝗼 𝗲𝘃𝗲𝗿𝘆𝗼𝗻𝗲 𝗯𝘂𝘁 𝗺𝘆𝘀𝗲𝗹𝗳.",
"𝗜 𝘄𝗮𝗻𝘁𝗲𝗱 𝘁𝗼 𝘁𝗲𝗹𝗹 𝘆𝗼𝘂 𝗮 𝗹𝗼𝘁.",
"< 𝘛𝘏𝘌 𝘍𝘜𝘛𝘜𝘙𝘌 𝘐𝘚 𝘕𝘖𝘛 𝘛𝘏𝘌 𝘚𝘈𝘔?? >",
"𝗗?? 𝗡𝗢𝗧 𝗧𝗘𝗠𝗣𝗧 𝗠𝗘 𝗣𝗥𝗔𝗜𝗦𝗘 𝗢𝗥 𝗖𝗥𝗜𝗧𝗜𝗖𝗜𝗦𝗠",]; 
$quote2 = array_rand($quote3,1);
$quote = $quote3[$quote2];
$count = count($text);
$textbio = str_replace('a','𝗮',$text);
$textbio = str_replace("b","𝗯",$textbio);
$textbio = str_replace("c","𝗰",$textbio);
$textbio = str_replace("d","𝗱",$textbio);
$textbio = str_replace("e","𝗲",$textbio);
$textbio = str_replace("E","𝗳",$textbio);
$textbio = str_replace("g","𝗴",$textbio);
$textbio = str_replace("h","𝗵",$textbio);
$textbio = str_replace("i","𝗶",$textbio);
$textbio = str_replace("j","𝗷",$textbio);
$textbio = str_replace("k","𝗸",$textbio);
$textbio = str_replace("l","𝗹",$textbio);
$textbio = str_replace("m","𝗺",$textbio);
$textbio = str_replace("n","𝗻",$textbio);
$textbio = str_replace("o","𝗼",$textbio);
$textbio = str_replace("p","𝗽",$textbio);
$textbio = str_replace("q","𝗾",$textbio);
$textbio = str_replace("r","𝗿",$textbio);
$textbio = str_replace("s","𝘀",$textbio);
$textbio = str_replace("t","𝘁",$textbio);
$textbio = str_replace("u","𝘂",$textbio);
$textbio = str_replace("v","𝘃",$textbio);
$textbio = str_replace("w","𝘄",$textbio);
$textbio = str_replace("x","𝘅",$textbio);
$textbio = str_replace("y","𝘆",$textbio);
$textbio = str_replace("z","𝘇",$textbio);
$textbio = str_replace('A','𝗔',$textbio);
$textbio = str_replace("B","𝗕",$textbio);
$textbio = str_replace("C","𝗖",$textbio);
$textbio = str_replace("D","𝗗",$textbio);
$textbio = str_replace("E","𝗘",$textbio);
$textbio = str_replace("F","𝗙",$textbio);
$textbio = str_replace("G","𝗚",$textbio);
$textbio = str_replace("H","𝗛",$textbio);
$textbio = str_replace("I","𝗜",$textbio);
$textbio = str_replace("J","𝗝",$textbio);
$textbio = str_replace("K","𝗞",$textbio);
$textbio = str_replace("L","𝗟",$textbio);
$textbio = str_replace("M","𝗠",$textbio);
$textbio = str_replace("N","𝗡",$textbio);
$textbio = str_replace("O","𝗢",$textbio);
$textbio = str_replace("P","𝗣",$textbio);
$textbio = str_replace("Q","𝗤",$textbio);
$textbio = str_replace("R","𝗥",$textbio);
$textbio = str_replace("S","𝗦",$textbio);
$textbio = str_replace("T","𝗧",$textbio);
$textbio = str_replace("U","𝗨",$textbio);
$textbio = str_replace("V","𝗩",$textbio);
$textbio = str_replace("W","𝗪",$textbio);
$textbio = str_replace("X","𝗫",$textbio);
$textbio = str_replace("Y","𝗬",$textbio);
$textbio = str_replace("Z","𝙕",$textbio);
$textbio = str_replace("0","𝟎",$textbio);
$textbio = str_replace("1","𝟏",$textbio);
$textbio = str_replace("2","𝟐",$textbio);
$textbio = str_replace("3","𝟑",$textbio);
$textbio = str_replace("4","𝟒",$textbio);
$textbio = str_replace("5","𝟓",$textbio);
$textbio = str_replace("6","𝟔",$textbio);
$textbio = str_replace("7","𝟕",$textbio);
$textbio = str_replace("8","𝟖",$textbio);
$textbio = str_replace("9","𝟗",$textbio);
$ex = explode("\n",$textbio);
$name = $ex[0];
$age = $ex[1];
$frrom = $ex[2];
if($data == "mikbio" ){
file_put_contents("bio.txt","bio");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
- حسنا أرسال  معلوماتك لصنع بايو لك 
- رجاءا المعلومات حسب  التالي :
اسمك
عمرك
بلدك 
#ملاحضه / باللغه الانكليزيه فقط ، ',
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'- ألرجـوع . 🦄💸' ,'callback_data'=>"home"]],
]])
]);
}
$sme3 = ["🌼","🔱","📩","🧿","🐼","🧸","🌈",];
$sme2 = array_rand($sme3);
$sme = $sme3[$sme2];
  if($text != "/start"   and $bio == "bio" and $chat_id !=  $k6 and $chat_id != $k7 and $chat_id != $k5 and $chat_id != $bioch and $chat_id != $bu){
      file_put_contents("bio.txt","none");
 bot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$sme | 𝗻𝗮𝗺𝗲 : $name
$sme | 𝗳𝗿𝗼𝗺 : $frrom
$sme | 𝗮𝗴𝗲 : $age
$sme | 𝗤𝘂𝗼𝘁𝗲 :
 $quote
",
]);
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
- تم صنع بايو الى المعلومات التاليه 
- الاسم : [$name]
- العمر : [$age]
- البلد :  [$frrom]
- ويمكنك رؤية الرموز ايضاً بالضغط على رموز 
- يرجى الضغط على زر عوده في الاسفل"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'- ألرمـوز . 🦄💸' ,'callback_data'=>"at"],['text'=>'- صنع مرة أخرى ! 🦄💸' ,'callback_data'=>"mikbio"]],
[['text'=>'- ألرجـوع . 🦄💸' ,'callback_data'=>"home"]],
]])
]);
unlink("bu.txt");
 unlink("k6.txt");
 unlink("k7.txt");
 unlink("k5.txt");
 unlink("bio.txt");
 unlink("k99.txt");
 unlink("bioch.txt");
}

 if($data == "bupg" ){
file_put_contents("bu.txt","bu");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'- حسنا قم بأرسال الاسم  ! 🦄💸',
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'- ألرجـوع . 🦄💸' ,'callback_data'=>"home"]],
]])
]);
}
$pu = ['ㄨ' , '卍' , 'ヾ' , 'ヽ' , 'ゞ' , '⁦ゝ' , '⁦᥊' , '⁦〃' , 'チ' , '⁦艾' , '𖡏' , '𖡊' , '𝄋' , '𖠛' , '𖠛' , ' ㇱ' , '⁦𖡘' , '⁦⁦ㇱ' , 'メ' , 'メ', '彡' , '仚' , '𖡞',]; 
$pg= array_rand($pu,1);
$bupg= $pu[$pg];
$pui = ['ㄨ' , '卍' , 'ヾ' , 'ヽ' , 'ゞ' , '⁦ゝ' , '⁦᥊' , '⁦〃' , 'チ' , '⁦艾' , '𖡏' , '𖡊' , '𝄋' , '𖠛' , '𖠛' , ' ㇱ' , '⁦𖡘' , '⁦⁦ㇱ' , 'メ' , 'メ', '彡' , '仚' , '𖡞',]; 
$pgi = array_rand($pui,1);
$bupgi = $pui[$pgi];
  if($text != "/start"   and $bu == "bu" and $chat_id !=  $k6 and $chat_id != $k7 and $chat_id != $bio and $chat_id != $bioch and $chat_id != $k5){
      file_put_contents("bu.txt","none");
      bot('sendmessage',[
  'chat_id'=>$chat_id,
'text'=>"`".$bupgi.$text.$bupg."`"
,'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id
]);
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
- تم صنع اسم الى لعبه ببجي
- الاسم : [$text]
- ويمكنك رؤية الرموز ايضاً بالضغط على رموز 
- يرجى الضغط على زر عوده في الاسفل"
,'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- صنع مرة أخرى ! 🦄💸' ,'callback_data'=>"bupg"],['text'=>'- ألرمـوز . 🦄💸' ,'callback_data'=>"at"]],
[['text'=>'- ألرجـوع . 🦄💸' ,'callback_data'=>"home"]],
]])
]);
unlink("bu.txt");
 unlink("k6.txt");
 unlink("k7.txt");
 unlink("k5.txt");
 unlink("bio.txt");
 unlink("k99.txt");
 unlink("bioch.txt");
}
$bot = file_get_contents("com.txt");
if($text == "/start" and in_array($chat_id,$ad)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
اهلا بك مطوري $name
",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"تغيير /start🎗","callback_data"=>"start"]],
[["text"=>"تفعيل التواصل🎫","callback_data"=>"utws"],["text"=>"تعطيل التواصل💫","callback_data"=>"ntws"]],
[["text"=>"حظر عضو💔","callback_data"=>"bn"],["text"=>"الغاء حظر عضو💥","callback_data"=>"unbn"]],
[["text"=>"اضافه ادمن🎟","callback_data"=>"admin"]],
[["text"=>"احصائيات الاعضاء🕳","callback_data"=>"mem"]],
[["text"=>"معلومات عضو بالايدي🧧","callback_data"=>"info"]],
[["text"=>"الاشتراك الاجباري🎴","callback_data"=>"chh"],["text"=>"الااذاعه💌","callback_data"=>"bcc"]],
[["text"=>"حذف كل الاحصائيات🃏","callback_data"=>"delbot"]],
]])
]);   
unlink("com.txt");
}
#رجوع
if($data == "bk" and in_array($chat_id2,$ad)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
اهلا بك مطوري $name
",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"تغيير /start🎗","callback_data"=>"start"]],
[["text"=>"تفعيل التواصل🎫","callback_data"=>"utws"],["text"=>"تعطيل التواصل💫","callback_data"=>"ntws"]],
[["text"=>"حظر عضو💔","callback_data"=>"bn"],["text"=>"الغاء حظر عضو💥","callback_data"=>"unbn"]],
[["text"=>"اضافه ادمن🎟","callback_data"=>"admin"]],
[["text"=>"اعضاء البوت ⚛","callback_data"=>"mempers"]],
[["text"=>"احصائيات الاعضاء🕳","callback_data"=>"mem"]],
[["text"=>"معلومات عضو بالايدي🧧","callback_data"=>"info"]],
[["text"=>"الاشتراك الاجباري🎴","callback_data"=>"chh"],["text"=>"الااذاعه💌","callback_data"=>"bcc"]],
[["text"=>"حذف كل الاحصائيات🃏","callback_data"=>"delbot"]],
]])
]);   
unlink("com.txt");
}
mkdir("users");
$user = $message->from->username;
$id   = $message->from->id;
$user_fi = file_get_contents("users/users.txt");
$ex_user = explode("\n@",$user_fi);
if ( $text =="/start" and !in_array($user,$ex_user)){
file_put_contents("users/users.txt","\n@$user",FILE_APPEND);
}

if($data == "mempers" and in_array($chat_id2,$ad)){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📋¦قائمه الاعضاء :
$user_fi",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🌻.","callback_data"=>"bk"]],
]])
]);   
}
#قسم حذف كل
if($data == "delbot" and in_array($chat_id2,$ad)){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📮| عزيزي هل انت متاكد من انك تريد حذف جميع احصائيات البوت،
🎄| #مـلآحظـهہ‏‏ سيتم حذف جميع ايديات الاعضا،الاشتراك الاجباري،اعضا المحظورين،عدد زخارف و....،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"نعم ،📌.","callback_data"=>"dell"],["text"=>"لآ ،📌.","callback_data"=>"bk"]],
]])
]);   
}
if($data == "dell" and in_array($chat_id2,$ad)){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📮| تم حذف جميع احصائيات البوت اصبح الان جديد",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،📌.","callback_data"=>"bk"]],
]])
]);   
unlink("start.txt");
unlink("tw.txt");
unlink("blocklist.txt");
unlink("admin2.txt");
unlink("memb.txt");
unlink("rabt.txt");
unlink("id.txt");
unlink("ch.txt");
unlink("chc.txt");
unlink("zkf.txt");
}
#قسم الاذاعه
if($data == "bcc" and in_array($chat_id2,$ad)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"💛| حسننا الان قم بختيار الاذاعه من فضلك،",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"آذآعهہ‏‏ رسـآلهہ‏‏ ،🌻.","callback_data"=>"bc"],["text"=>"آذآعهہ‏‏ بآلتوجيهہ‏‏ ،🌻.","callback_data"=>"for"]],
[["text"=>"آذآعهہ‏‏ شـفآف ،🌻.","callback_data"=>"inln"],["text"=>"آذآعهہ‏‏ بآلمـيديآ ،🌻.","callback_data"=>"med"]],
[["text"=>"رجوع ،🌻.","callback_data"=>"bk"]],
]])
]);   
}
#قسم شتراك اجباري
if($data == "chh" and in_array($chat_id2,$ad)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🌻| حسننا عزيزي قم بلختيار من الاسفل لوضع شتراك اجباري،",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"قناة عامه 1 ،🎺.","callback_data"=>"add2"],["text"=>"قناة عامه 2 ،🎺.","callback_data"=>"add1"]],
[["text"=>"قناة خاصه ،🎺.","callback_data"=>"add"]],
[["text"=>"حذف جميع القنوات من شتراك ،🎺.","callback_data"=>"remch"]],
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
}
$meb = explode("\n",file_get_contents("memb.txt"));
$band = explode("\n",file_get_contents("blocklist.txt"));
$mem = count($meb)-1;
$bnn = count($band)-1;
if($data == "mem" and in_array($chat_id2,$ad)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
💌--< $mem >-- عدد الاعضاء

💟-- < $bnn >-- المحضورين
",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
}
#رساله ستارت
if($data == "start" and in_array($chat_id2,$ad)){
file_put_contents("com.txt","start");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🌻| حسننا الان قم برسال النص،
🐞| يمكنك ايضا استخدام الماركدوان كمثال،
[اضغط هنا وتابع جديدنا](t.me/alshh)",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
}
if($bot == "start" and $text != "/h" and $text != "/start" and in_array($chat_id,$ad)){
file_put_contents("start.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🎯| تم حفظ نص الاستارت،",
'reply_to_message_id'=>$message->message_id,
]);
unlink("com.txt");
}
#تفعيل تواصل
if($data == "utws" and in_array($chat_id2,$ad)){
file_put_contents("tw.txt","on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📦|تم تفعيل التواصل ،",
]); 
}
#تعطيل تواصل
if($data == "ntws" and in_array($chat_id2,$ad)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📮|تم تعطيل التواصل ،",
]); 
unlink("tw.txt");
}
if($text and !in_array($from_id,$ebu) and !in_array($chat_id,$ad) and $tws == "on"){
bot('forwardMessage',[
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$update->message->message_id,
'text'=>$text,
]);
}
if($text and $message->reply_to_message && $text!="/info" && $text!="/ban" && $text!="/unban" && $text!="/forward" and !$data ){
bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
'text'=>$text,
]);
}
#اضافه ادمن
if($data == "admin" and $chat_id2 == $admin){
file_put_contents("com.txt","ad");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📮| حسننا الان قم برسال ايدي العضو،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
}
if($bot == "ad" and $text != "/start" and $chat_id == $admin){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📮| تم حفظ ايدي العضو،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
bot('sendMessage',[
'chat_id'=>$text,
'text'=>"🌻| تم رفعك ادمن بواسط صاحب البوت،",
'parse_mode'=>'MarkDown',
]);
unlink("com.txt");
file_put_contents("admin2.txt","$text");
}
#مـآيخصـك
if($data == "admin" and $chat_id2 == $admin2){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🌻| هاذ الامر لايخصك،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
}
#حظر
if($data == "bn" and in_array($chat_id2,$ad)){
file_put_contents("com.txt","bn");
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"💘| حسننا الان قم برسال ايدي العضو،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
}
if($bot == "bn" and $text != "/start" and in_array($chat_id,$ad)){
$myfile2 = fopen("blocklist.txt", "a") or die("Unable to open file!");	
fwrite($myfile2, "$text\n");
fclose($myfile2);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📨| تم حظر العضو بنجاح،",
]);
bot('sendmessage',[
'chat_id'=>$text,
'text'=>"📨| عذرا عزيزي تم حظرك،",
]);
unlink("com.txt");
}
#الغاء حظر
$listt = file_get_contents("blocklist.txt");
if($data == "unbn" and in_array($chat_id2,$ad)){
file_put_contents("com.txt","unbn");
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📮| حسننا الان قم برسال ايدي العضو،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
}
if($bot == "unbn" and $text != "/start" and in_array($chat_id,$ad)){
$newlist = str_replace($text,"",$listt);
file_put_contents("blocklist.txt",$newlist);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🌻| تم آلغآء حظر العضو بنجاح،",
]);
bot('sendmessage',[
'chat_id'=>$text,
'text'=>"🌻| عزيزي تم آلغآء آلحظر عنك،",
]);
unlink("com.txt");
}
#معلومات
if($data == "info" and in_array($chat_id2,$ad)){
file_put_contents("com.txt","info");
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🎁| حسننا الان قم برسال ايدي العضو،
🌻| #ملاحظه يجب العضو يكون مشترك في لبوت مسبقا،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
}
if($bot == "info" and $text != "/start"and in_array($chat_id,$ad)){
$ine = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$text"));
$infe4 =$ine->result->first_name;
$infe2 =$ine->result->id;
$infe3 =$ine->result->username;
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"*🎯| INFO MEMBER*
🔖| Name 💬 : *$infe4* \n 🎧| User 💌 : [@$infe3] \n 📚| Id 🎄 : `$infe2`",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>'MarkDown', 
]);
unlink("com.txt");
}
#شتراك اجباري1
if($data == "add2" and in_array($chat_id2,$ad)){
file_put_contents("com.txt","ab");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📦| حسـننا عزيزي قم برسال معرف قناتك مـندون ل @
📥| كمثال : `I8F8I`",
'parse_mode'=>"Markdown",
]);
}
if($bot == "ab" and $text != "/h" and $text != "/start" and in_array($chat_id,$ad)){
file_put_contents("chc.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🎯| حسننا عزيزي تم حفظ قناتك الان قم برفعي مشرف في قناتك .
📮| قناتك : @$text.
لرجوع اضغط /start.",
'reply_to_message_id'=>$message->message_id,
]);
unlink("com.txt");
}
#شـترآك اجباري1
if($data == "add1" and in_array($chat_id2,$ad)){
file_put_contents("com.txt","al");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📦| حسـننا عزيزي قم برسال معرف قناتك مـندون ل @
📚| كمثال : `I8F8I`",
'parse_mode'=>"Markdown",
]);
}

if($bot == "al" and $text != "/h" and $text != "/start" and in_array($chat_id,$ad)){
file_put_contents("ch.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🎯| حسننا عزيزي تم حفظ قناتك الان قم برفعي مشرف في قناتك .
📮| قناتك : @$text.
لرجوع اضغط /start.",
'reply_to_message_id'=>$message->message_id,
]);
unlink("com.txt");
}
#شتراك خاص
if($data == "add"  and in_array($chat_id2,$ad)){
file_put_contents("com.txt","vv");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📌| حسننا عزيزي قم برسال ايدي قناتك !
📮| كمثال : `-1001416392355` !
📎| آن لم تعرف كيفه استخراج ايدي قناتك كل ماعليك قم برسال توجيه من قناتك لهاذ البوت ! @X59BoT !
لرجوع اضغط /start.",
'parse_mode'=>"Markdown",
]);
}

if($bot == "vv" and $text != "/o" and $text != "/start" and in_array($chat_id,$ad)){
file_put_contents("com.txt","alo");
file_put_contents("id.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✂| تم حفظ ايدي قناتك !
📛| حسننا الان قم برسال رابط قناتك !
لرجوع اضغط /start.",
'reply_to_message_id'=>$message->message_id,
]);
}
if($bot == "alo" and $text != "/o" and $text != "/start" and in_array($chat_id,$ad)){
file_put_contents("rabt.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"💛| تم حفظ رابط القناة .
📚| رابط قناتك : `[$text]`
🔖| آيدي قناتك : `$al`
🔖| آلآن قم برفع لبوت مشرفي في قناتك
لرجوع اضغط /start.",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
unlink("com.txt");
}
#حذف قنوات
if($data == "remch" and in_array($chat_id2,$ad)){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📦| تم حذف جميع القنوات،",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);   
unlink("rabt.txt");
unlink("id.txt");
unlink("ch.txt");
unlink("chc.txt");
}
#اذاعه
if($data == "bc" and in_array($chat_id2,$ad)){
file_put_contents("com.txt","send");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>" ارسل رسالتك الان عزيزي 🎯. #يمكنك استخدام الماركدان ايضا",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);
}
$ali = fopen( "memb.txt", 'r');
while(!feof( $ali)){
$alshh3 = fgets($ali);
if($bot == "send" and in_array($chat_id,$ad)){
bot('sendMessage', [
'chat_id' =>$alshh3,
'text'=>$text,
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>"true"
]);
unlink("com.txt");
}
}
$tx = file_get_contents("alh.txt");
if($data == "inln" and in_array($chat_id2,$ad)){
file_put_contents("com.txt","sn");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"حسـننآ آلآن ارسل نص تريد نشرة ك منشور شفاف 🎁. #ملاحظه يمكنك استخدام الماركدوان ايضا",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);
}
if($bot == "sn" and $text != "/start" and in_array($chat_id,$ad)){
file_put_contents("alh.txt","$text");
file_put_contents("com.txt","snn");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"حسننا الان استخدم🎄.
text = link
text = link + text = link
نص = رابط
نص = رابط + نص = رابط",
'reply_to_message_id'=>$message->message_id,
]);
}
$i=0;
$keyboard = [];
$keyboard["inline_keyboard"] = [];
$rows = explode("\n",$text);
foreach($rows as $row){
$j=0;
$keyboard["inline_keyboard"][$i]=[];
$bottons = explode("+",$row);
foreach($bottons as $botton){
$alsh = explode("=",$botton."=");
$Ibotton = ["text" => trim($alsh[0]), "url" => trim($alsh[1])];
$keyboard["inline_keyboard"][$i][$j] = $Ibotton;
$j++;                }                $i++;            }
$reply_markup=json_encode($keyboard);
if($bot == "snn" and $text != "/start" and in_array($chat_id,$ad)){
$ali = fopen( "memb.txt", 'r');
while(!feof( $ali)){
$alshh = fgets($ali);
bot('sendmessage',[
'chat_id'=>$alshh,
'text'=>$tx,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>($reply_markup)
]);
}
unlink("com.txt");
unlink("alh.txt");
}
if($data == "for" and in_array($chat_id2,$ad)){
file_put_contents("com.txt","fd");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>" ارسل توجيهك الان عزيزي 📌.",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);
}
if($bot == "fd" and $text != "/start" and in_array($chat_id,$ad)){
$ali = fopen( "memb.txt", 'r');
while(!feof( $ali)){
$ali2 = fgets($ali);
bot('forwardMessage',[
 'chat_id'=>$ali2,
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("com.txt");
 }
 }
 if($data == "med" and in_array($chat_id2,$ad)){
file_put_contents("com.txt","mide");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🔖| حسـننآ الان ارسل احد ميديا،
📌| مثلا : صور،فيديو،ملف،اغنيه،ملصق،ملف صوتي،",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ،🎺.","callback_data"=>"bk"]],
]])
]);
}
#اذاعه ب ميديا
 if($message->video and $bot == "mide" and in_array($chat_id,$ad) and $text != "/start"){
 $ali = fopen( "memb.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
bot('sendvideo',['chat_id'=>$aly,'video'=>$message->video->file_id,'caption'=>$message->caption,'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,]);
bot('sendmessage',[ 
'chat_id'=>$chat_id, 'text'=>"تم نشر الفيديو '📚!",]); }unlink("com.txt"); }
if($message->document and $bot == "mide" and in_array($chat_id,$ad) and $text != "/start"){
$ali = fopen( "memb.txt", 'r');
while(!feof( $ali)){ 
$aly = fgets($ali);
bot('Senddocument',['chat_id'=>$aly,'document'=>$message->document->file_id,'caption'=>$message->caption,'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
]);bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"تم نشر الملف او متحركه '🎻!", ]); } unlink("com.txt");}
 if($message->audio and $bot == "mide" and in_array($chat_id,$ad) and $text != "/start"){
 	$ali = fopen( "memb.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
 bot('sendaudio',[    'chat_id'=>$aly,    'audio'=>$message->audio->file_id,    'caption'=>$message->caption,'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
 ]); bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"تم نشر الاغنيه '🎺!", ]); } unlink("com.txt");}
if($message->photo and $bot == "mide" and in_array($chat_id,$ad) and $text != "/start"){
	$ali = fopen( "memb.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
    bot('sendPhoto',[      'chat_id'=>$aly,      'photo'=>$message->photo[0]->file_id,      'caption'=>$message->caption,      'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
    ]);bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"تم نشر الصورة '📇!", ]); } unlink("com.txt");}
if($message->voice and $bot == "mide" and in_array($chat_id,$ad) and $text != "/start"){
	$ali = fopen( "memb.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
    bot('sendvoice',[     'chat_id'=>$aly,      'voice'=>$message->voice->file_id,     'caption'=>$message->caption,'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
      ]);      bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"تم نشر الاغنيه '📜!", ]); } unlink("com.txt");}
      if($message->sticker and $bot == "mide" and in_array($chat_id,$ad) and $text != "/start"){
      	$ali = fopen( "memb.txt", 'r');
while(!feof( $ali)){
$aly = fgets($ali);
bot('sendsticker',['chat_id'=>$aly,'sticker'=>$message->sticker->file_id
]);bot('sendmessage',['chat_id'=>$chat_id, 'text'=>"تم نشر الملصق '📂!", ]); }unlink("com.txt"); }