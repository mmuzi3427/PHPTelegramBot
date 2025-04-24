<?php
ob_start();
define('API_KEY','1796069925:AAGJM8hRq-MM8dzh3W6l6k9gkKFaF0UNuXk'); //BOTIZ TOKENINI YOZASIZ
$admin = "1289353103"; //1- ADMIN ID RAQAMI
$admin2 = "596062806"; // 2- ADMIN ID RAQAMI
$channel = "@BOTLAR_SAVDOSIuz_bot"; //O`ZIZNI KANALIZNI YOZASIZ ALBATTA @ BELGISI BILAN

/*
Kod muallfligi : @UZB_HACKER7777 ga tegishli
Kanal : @SARDORBEK_BLOGS1
Hamkor : @SARDORBEK_BLOGS1 va @SARDORBEK_OFFICIALuz
*/


function ty($ch){ 
return bot('sendChatAction', [
'chat_id' => $ch,
'action' => 'typing',
]);
}

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
//KODNI MANBA BILAN OL
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$name = $message->from->first_name;
$message_id=$message->message_id;
$cid = $message->chat->id;
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$user = $message->from->username;
$chat_id = $message->chat->id;
$text = $m essage->text;
$cid = $message->chat->id;
$uid= $message->from->id;
$cqid = $update->callback_query->id;
$ccid = $update->callback_query->message->chat->id;
$cuid = $update->callback_query->message->from->id;
$mid = $message->message_id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$cuseri = $update->callback_query->message->chat->username;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$ci = $message->username;
$fromid = $message->from->id;
$cid = $message->chat->id;
$user = $message->chat->username;
$cidtyp = $message->chat->type;
$miid = $message->message_id;
$tx = $message->text;
$callback = $update->callback_query;
$mmid = $callback->inline_message_id;
$mes = $callback->message;
$mid = $mes->message_id;
$ctext = $mes->text;
$data = $update->callback_query->data;
$ci = $message->username;
$from_id = $message->from->id;
$tx = $message->text;
$photo_id=$message->photo[1]->file_id;
mkdir("base");
mkdir("step");
$null = "null";
$joy = file_get_contents("$cid/$cid.joy");
if(file_exists("base/$cid.elon.dat")){
file_get_contents("base/$cid.elon.dat");
}else{
file_put_contents("base/$cid.elon.dat",$null);
}
if(file_exists("base/$cid.dat")){
file_get_contents("base/$cid.dat");
}else{
file_put_contents("base/$cid.dat",$null);
}
if(file_exists("base/holat.dat")){
file_get_contents("base/holat.dat");
}else{
file_put_contents("base/holat.dat","on");
}
$step = file_get_contents("step/$cid.step");
$first = "E鈥榣on berish";
$otmen = "馃毇 Bekor qilish 馃毇";
$second = "馃泹 Mening e鈥榣onlarim 馃泹";
$third = "馃暪 Yordam 馃暪";
$fife = "馃搳 Statistika 馃搳";
$stat = file_get_contents("base/bot-holati.dat");
$six = "馃摛 Buyurtma berish 馃摛";
$main = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$first"]],
[['text'=>"$second"],['text'=>"$six"],],
[['text'=>"$third"],['text'=>"$fife"],],
]
]);

$services = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Web sayt"],['text'=>"Telegram bot"],],
[['text'=>"Mobil ilova"],['text'=>"Proyekt davom ettirish"],],
[['text'=>"馃毇 Bekor qilish"]],
]
]);

$admins = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Xabar yuborish"],['text'=>"Forward yuborish"]],
[['text'=>"Barcha e'lonlar"],['text'=>"Bajarilgan e'lonlar"]],
[['text'=>"O鈥榗hirish | $stat"],['text'=>"Statistika"]],[['text'=>"馃毇 Bekor qilish"]],
]
]);

$status = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"馃敀 O'chirish"],
['text'=>"馃敁 Yoqish"]],
]
]); 

$admo = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Bosh menyu"]],
]
]);

$cancel = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"馃毇 Bekor qilish"]],
]
]);

$kick = json_encode([
'remove_keyboard'=>true,
]);

$accept = json_encode([   
'inline_keyboard'=>[   
[['text'=>'鉁� Ha', 'callback_data' => "yes"],     
['text'=>'馃毇 Yo鈥榪', 'callback_data' => "no"]]
]   
]);

$page = json_encode([   
'inline_keyboard'=>[   
[['text'=>'Next page', 'callback_data' => "next"],     
['text'=>'Previous page', 'callback_data' => "null"]],
[['text'=>'Back', 'callback_data' => "back"],
]]
]);

$page3 = json_encode([   
'inline_keyboard'=>[   
[['text'=>'Next page', 'callback_data' => "next-3"],     
['text'=>'Previous page', 'callback_data' => "next"]],
[['text'=>'Back', 'callback_data' => "back"],
]]
]);

$page4 = json_encode([   
'inline_keyboard'=>[   
[['text'=>'Next page', 'callback_data' => "next-4"],     
['text'=>'Previous page', 'callback_data' => "next-2"]],
[['text'=>'Back', 'callback_data' => "back"],
]]
]);

$page5 = json_encode([   
'inline_keyboard'=>[   
[['text'=>'Next page', 'callback_data' => "null"],     
['text'=>'Previous page', 'callback_data' => "next-3"]],
[['text'=>'Back', 'callback_data' => "back"],
]]
]);

$comments = json_encode([   
'inline_keyboard'=>[   
[['text'=>'Add comments', 'url' => "https://www.tg-bots.tk"]],     
]   
]);

$acc = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"鉁� Ha"],
['text'=>"馃毇 Yo鈥榪"]],
]
]); 

$webs = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"鉁� Ha albatta"],
['text'=>"馃毇 Yo鈥榪"]],
]
]); 

$step2 = file_get_contents("step/$ccid.step");
$from_id = $message->from->id;
$ch = "@Botlar_savdosi";
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*鈿� To use this bot, first subscribe to the channels below and then you can use the bot!*",
      'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>"Go to channel",'url'=>"https://t.me/softicon"]],
[['text'=>"Go to channel",'url'=>"https://t.me/joinchat/AAAAAEmItagO8a4cioRVXw"]],    
[['text'=>"鉁� Check status",'url'=>"https://t.me/Tg_Elonbot?start="]]    
        ]
    ])
]);return false;
}
if($tx=="/start" or $tx==$otmen){
unlink("step/$cid.step");
unlink("step/$cid.step");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"馃憢 <b>Assalomu alaykum $name botimizga xush kelibsiz!</b>",
      'parse_mode'=>"html",
      'reply_markup'=>$main,
]);
}
if($tx==$first){
$holat = file_get_contents("base/holat.dat");
if($holat=="on"){
file_put_contents("step/$cid.step","username");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"馃搩 <i>E鈥榣on berish uchun botingizni USERNAMEsini yozing:</i>",
      'parse_mode'=>"html",
      'reply_markup'=>$cancel,
]);
}else{
bot('sendMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"<i>馃毇 Xatolik!</i>
馃槙 <b>Bazaga ulanish bilan muammo yuzaga keldi. Yoxud bot ta鈥榤irlash jarayonida!</b>
<b>Warning:</b> mysqli_connect(): (HY000/2002): Connection refused in聽/www/var/data/x_trading/script-of-trading/3719179.php聽on line聽8
Could not connect:",
      'parse_mode'=>"html",
      'reply_markup'=>$main,
]);
sleep(1);
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
unlink("step/$cid.step");
}
}
if($tx==$six){
file_put_contents("step/$cid.step","xizmat");
$holat = file_get_contents("base/holat.dat");
if($holat=="on"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"馃搩 <i>Buyurtma berish uchun kerakli xizmat turini tanlang:</i>",
      'parse_mode'=>"html",
      'reply_markup'=>$services,
]);
}else{
bot('sendMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"<i>馃毇 Xatolik!</i>
馃槙 <b>Bazaga ulanish bilan muammo yuzaga keldi. Yoxud bot ta鈥榤irlash jarayonida!</b>
<b>Warning:</b> mysqli_connect(): (HY000/2002): Connection refused in聽/www/var/data/x_trading/script-of-trading/3719179.php聽on line聽8
Could not connect:",
      'parse_mode'=>"html",
      'reply_markup'=>$main,
]);
sleep(1);
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
}
}
if($tx=="Web sayt" and $step=="xizmat"){unlink("base/for-channel.dat");
file_put_contents("step/$cid.step","web");
bot('sendMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"馃審 Qanday web sayt kerak batafsil yozing:

馃搩 Masalan : Savdo-sotiq web sayti, Job Portali kerak sayt Pythonda tuzilishi kerak va hk...",
      'parse_mode'=>"html",
      'reply_markup'=>$cancel,
]);
}
if($step=="web" or $step == "web"){
if($tx=="馃毇 Bekor qilish"){}else{
bot('sendMessage',[
'chat_id'=>$admin,
'message_id'=>$mid,
]);
file_put_contents("base/xizmat-turi.$cid.dat",$tx);
unlink("step/$cid.step");
file_put_contents("step/$cid.step","cost");
bot('sendMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"<b>鉁� Yaxshi qabul qilindi!</b>

馃捀 <i>Endi buyurtma uchun ajratgan mablag'ingizni yozing!</i>
馃挵 Masalan : 300 ming so'm yoki kelishamiz!",
'parse_mode'=>"html",
'reply_markup'=>$cancel,
]);
}
}
if($step=="cost" or $step == "cost"){
if($tx=="馃毇 Bekor qilish"){}else{
bot('sendMessage',[
'chat_id'=>$admin,
'message_id'=>$mid,
]);
file_put_contents("base/xizmat-narxi.$cid.dat",$tx);
unlink("step/$cid.step");
file_put_contents("step/$cid.step","hodim");
bot('sendMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"<b>鉁� Yaxshi qabul qilindi!</b>

<i> 馃懆鈥嶐煉� Kerakli ishchi tajribasini yozing:</i>

<i>鈴� Masalan : 2 yillik tajribaga ega bo'lishi zarur, Python va boshqa dasturlash tillarini bilishi kerak!</i>",
'parse_mode'=>"html",
'reply_markup'=>$cancel,
]);
}
}
if($step=="hodim" or $step == "hodim"){
if($tx=="馃毇 Bekor qilish"){}else{
bot('sendMessage',[
'chat_id'=>$admin,
'message_id'=>$mid,
]);
file_put_contents("base/xizmat-hodimi.$cid.dat",$tx);
unlink("step/$cid.step");
file_put_contents("step/$cid.step","talab");
bot('sendMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"<b>鉁� Yaxshi qabul qilindi!</b>

馃摏 <i> Agar qo'shimcha talablaringiz bo'lsa yozib yuboring, agar yo'q bo'lsa shunchaki ''YO'Q'' so'zini yuboring!</i>",
'parse_mode'=>"html",
'reply_markup'=>$cancel,
]);
}
}
if($step=="talab" or $step == "talab"){
if($tx=="馃毇 Bekor qilish"){}else{
bot('sendMessage',[
'chat_id'=>$admin,
'message_id'=>$mid,
]);
file_put_contents("base/xizmat-talabi.$cid.dat",$tx);
unlink("step/$cid.step");
$turi = file_get_contents("base/xizmat-turi.$cid.dat");
$costi = file_get_contents("base/xizmat-narxi.$cid.dat");
$hodimi = file_get_contents("base/xizmat-hodimi.$cid.dat");
$talabi = file_get_contents("base/xizmat-talabi.$cid.dat");
bot('sendMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"鉁� <b>Buyurtmangiz deyarli tayyor bo'ldi:</b>

<b>馃審 Web sayt buyurtmasi : </b>$turi

<b>馃挵 Xizmati uchun ajratilgan budjet : </b>$costi

<b> 馃懆鈥嶐煉� Dasturchi bilishi kerak : </b>$hodimi

<b>馃搵 Qo'shimcha talablar : </b>$talabi

<i>馃搩 Agar barchasi to'g'ri bo'lsa ''鉁� Ha'' tugmasini bosing, muammo topgan bo'lsangiz qayta yozish uchun ''馃毇 Yo'q'' tugmasiga bosing!</i>",
'parse_mode'=>"html",
'reply_markup'=>$acc2,
]);
bot('sendMessage',[
'chat_id'=>$admin,
'message_id'=>$mid,
'text'=>"馃搩 <b> Buyurtma berishdi 鉁�</b>

<b>馃懁 Buyurtmachi : $name</b>

<b>馃審 Web sayt buyurtmasi : </b>$turi

<b>馃挵 Xizmati uchun ajratilgan budjet : </b>$costi

<b> 馃懆鈥嶐煉� Dasturchi bilishi kerak : </b>$hodimi

<b>馃搵 Qo'shimcha talablar : </b>$talabi

<i>鈴� Kanalga yuboramizmi?</i>",
'parse_mode'=>"html",
'reply_markup'=>$webs,
]);
file_put_contents("base/for-channel.dat","
<b>馃審 Web sayt buyurtmasi : </b>$turi

<b>馃挵 Xizmati uchun ajratilgan budjet : </b>$costi

<b> 馃懆鈥嶐煉� Dasturchi bilishi kerak : </b>$hodimi

<b>馃搵 Qo'shimcha talablar : </b>$talabi

<b>馃懁 Buyurtmachi : </b>@$user

#web #sayt #verstka #sozlash #zakas #sorov

<u>鈥� Powered By :</u> $channel");
file_put_contents("base/for-web.$cid.dat","
<b>馃審 Web sayt buyurtmasi : </b>$turi

<b>馃挵 Xizmati uchun ajratilgan budjet : </b>$costi

<b> 馃懆鈥嶐煉� Dasturchi bilishi kerak : </b>$hodimi

<b>馃搵 Qo'shimcha talablar : </b>$talabi

<b>馃懁 Buyurtmachi : </b>@$user

#web #sayt #verstka #sozlash #zakas #sorov

<u>鈥� Powered By :</u> $channel");
}
}
if($tx=="Mobil ilova" and $step=="xizmat"){unlink("base/for-channel.dat");
file_put_contents("step/$cid.step","ilova");
bot('sendMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"<b>馃摫 Qanday ilova kerak batafsil yozing:</b>

<i>馃搩 Masalan : Saytning rasmiy ilovasi yoki mobil o'yin ilovasi va hk...</i>",
      'parse_mode'=>"html",
      'reply_markup'=>$cancel,
]);
}
if($step=="ilova" or $step == "ilova"){
if($tx=="馃毇 Bekor qilish"){}else{
bot('sendMessage',[
'chat_id'=>$admin,
'message_id'=>$mid,
]);
file_put_contents("base/xizmat-turi.$cid.dat",$tx);
unlink("step/$cid.step");
file_put_contents("step/$cid.step","cost2");
bot('sendMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"<b>鉁� Yaxshi qabul qilindi!</b>

馃捀 <i>Endi buyurtma uchun ajratgan mablag'ingizni yozing!</i>
馃挵 Masalan : 100 ming so'm yoki kelishamiz!",
'parse_mode'=>"html",
'reply_markup'=>$cancel,
]);
}
}
if($step=="cost2" or $step == "cost2"){
if($tx=="馃毇 Bekor qilish"){}else{
bot('sendMessage',[
'chat_id'=>$admin,
'message_id'=>$mid,
]);
file_put_contents("base/xizmat-narxi.$cid.dat",$tx);
unlink("step/$cid.step");
file_put_contents("step/$cid.step","languages");
bot('sendMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"<b>鉁� Yaxshi qabul qilindi!</b>

<i>馃摑 Yaxshi mobil ilovangiz qaysi dasturlash tilida yozilishini belgilang:</i>

<i>鈴� Masalan : CSharp, Kotlin, C++, Java ...</i>",
'parse_mode'=>"html",
'reply_markup'=>$cancel,
]);
}
}
if($step=="languages" or $step == "languages"){
if($tx=="馃毇 Bekor qilish"){}else{
bot('sendMessage',[
'chat_id'=>$admin,
'message_id'=>$mid,
]);
file_put_contents("base/xizmat-hodimi.$cid.dat",$tx);
unlink("step/$cid.step");
file_put_contents("step/$cid.step","talab2");
bot('sendMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"<b>鉁� Yaxshi qabul qilindi!</b>

馃摏 <i> Agar qo'shimcha talablaringiz bo'lsa yozib yuboring, agar yo'q bo'lsa shunchaki ''YO'Q'' so'zini yuboring!</i>",
'parse_mode'=>"html",
'reply_markup'=>$cancel,
]);
}
}
if($step=="talab2" or $step == "talab2"){
if($tx=="馃毇 Bekor qilish"){}else{
bot('sendMessage',[
'chat_id'=>$admin,
'message_id'=>$mid,
]);
file_put_contents("base/xizmat-talabi.$cid.dat",$tx);
unlink("step/$cid.step");
$turi = file_get_contents("base/xizmat-turi.$cid.dat");
$costi = file_get_contents("base/xizmat-narxi.$cid.dat");
$hodimi = file_get_contents("base/xizmat-hodimi.$cid.dat");
$talabi = file_get_contents("base/xizmat-talabi.$cid.dat");
bot('sendMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"鉁� <b>Buyurtmangiz deyarli tayyor bo'ldi:</b>

<b>馃摫 Mobil ilova buyurtmasi : </b>$turi

<b>馃挵 Xizmati uchun ajratilgan budjet : </b>$costi

<b> 馃懆鈥嶐煉� Ilova dasturlanishi kerak : </b>$hodimi

<b>馃搵 Qo'shimcha talablar : </b>$talabi

<i>馃搩 Agar barchasi to'g'ri bo'lsa ''鉁� Ha'' tugmasini bosing, muammo topgan bo'lsangiz qayta yozish uchun ''馃毇 Yo'q'' tugmasiga bosing!</i>",
'parse_mode'=>"html",
'reply_markup'=>$acc2,
]);
bot('sendMessage',[
'chat_id'=>$admin,
'message_id'=>$mid,
'text'=>"馃搩 <b> Buyurtma berishdi 鉁�</b>

<b>馃懁 Buyurtmachi : $name</b>

<b>馃摫 Mobil ilova buyurtmasi : </b>$turi

<b>馃挵 Xizmati uchun ajratilgan budjet : </b>$costi

<b> 馃懆鈥嶐煉� Mobil ilova dasturlanishi kerak  : </b>$hodimi

<b>馃搵 Qo'shimcha talablar : </b>$talabi

<i>鈴� Kanalga yuboramizmi?</i>",
'parse_mode'=>"html",
'reply_markup'=>$webs,
]);
file_put_contents("base/for-channel.dat","
#Mobil ilova kerak !!!

<b>馃摫 Mobil ilova buyurtmasi : </b>$turi

<b>馃挵 Xizmati uchun ajratilgan budjet : </b>$costi

<b> 馃懆鈥嶐煉� Mobil ilova dasturlanishi kerak : </b>$hodimi

<b>馃搵 Qo'shimcha talablar : </b>$talabi

<b>馃懁 Buyurtmachi : </b>@$user

#mobil #ilova #csharp #java #zakas #sorov

<u>鈥� Powered By :</u> $channel");
file_put_contents("base/for-ilova.$cid.dat","<b>馃摫 Mobil ilova buyurtmasi : </b>$turi

<b>馃挵 Xizmati uchun ajratilgan budjet : </b>$costi

<b> 馃懆鈥嶐煉� Ilova dasturlanishi kerak : </b>$hodimi

<b>馃搵 Qo'shimcha talablar : </b>$talabi

<b>馃懁 Buyurtmachi : </b>@$user

#mobil #ilova #csharp #java #zakas #sorov

<u>鈥� Powered By :</u> $channel");
}
}
if($tx=="Telegram bot" and $step=="xizmat"){unlink("base/for-channel.dat");
file_put_contents("step/$cid.step","bot");
bot('sendMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"<b>馃憖 Qanday telegram bot kerak batafsil yozing:</b>

<i>馃搩 Masalan : Pul ishlash boti, sayt rasmiy boti, Guruh boshqaruvchi bot va hk...</i>",
      'parse_mode'=>"html",
      'reply_markup'=>$cancel,
]);
}
if($step=="bot" or $step == "bot"){
if($tx=="馃毇 Bekor qilish"){}else{
bot('sendMessage',[
'chat_id'=>$admin,
'message_id'=>$mid,
]);
file_put_contents("base/xizmat-turi.$cid.dat",$tx);
unlink("step/$cid.step");
file_put_contents("step/$cid.step","cost1");
bot('sendMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"<b>鉁� Yaxshi qabul qilindi!</b>

馃捀 <i>Endi buyurtma uchun ajratgan mablag'ingizni yozing!</i>
馃挵 Masalan : 300 ming so'm yoki kelishamiz!",
'parse_mode'=>"html",
'reply_markup'=>$cancel,
]);
}
}
if($step=="cost1" or $step == "cost1"){
if($tx=="馃毇 Bekor qilish"){}else{
bot('sendMessage',[
'chat_id'=>$admin,
'message_id'=>$mid,
]);
file_put_contents("base/xizmat-narxi.$cid.dat",$tx);
unlink("step/$cid.step");
file_put_contents("step/$cid.step","language");
bot('sendMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"<b>鉁� Yaxshi qabul qilindi!</b>

<i>馃摑 Yaxshi telegram bot qaysi dasturlash tilida yozilishini belgilang:</i>

<i>鈴� Masalan : PHP, NODEJS, PYTHON...</i>",
'parse_mode'=>"html",
'reply_markup'=>$cancel,
]);
}
}
if($step=="language" or $step == "language"){
if($tx=="馃毇 Bekor qilish"){}else{
bot('sendMessage',[
'chat_id'=>$admin,
'message_id'=>$mid,
]);
file_put_contents("base/xizmat-hodimi.$cid.dat",$tx);
unlink("step/$cid.step");
file_put_contents("step/$cid.step","talab1");
bot('sendMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"<b>鉁� Yaxshi qabul qilindi!</b>

馃摏 <i> Agar qo'shimcha talablaringiz bo'lsa yozib yuboring, agar yo'q bo'lsa shunchaki ''YO'Q'' so'zini yuboring!</i>",
'parse_mode'=>"html",
'reply_markup'=>$cancel,
]);
}
}
if($step=="talab1" or $step == "talab1"){
if($tx=="馃毇 Bekor qilish"){}else{
bot('sendMessage',[
'chat_id'=>$admin,
'message_id'=>$mid,
]);
file_put_contents("base/xizmat-talabi.$cid.dat",$tx);
unlink("step/$cid.step");
$turi = file_get_contents("base/xizmat-turi.$cid.dat");
$costi = file_get_contents("base/xizmat-narxi.$cid.dat");
$hodimi = file_get_contents("base/xizmat-hodimi.$cid.dat");
$talabi = file_get_contents("base/xizmat-talabi.$cid.dat");
bot('sendMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"鉁� <b>Buyurtmangiz deyarli tayyor bo'ldi:</b>

<b>馃摑 Telegram-bot buyurtmasi : </b>$turi

<b>馃挵 Xizmati uchun ajratilgan budjet : </b>$costi

<b> 馃懆鈥嶐煉� Bot dasturlanishi kerak : </b>$hodimi

<b>馃搵 Qo'shimcha talablar : </b>$talabi

<i>馃搩 Agar barchasi to'g'ri bo'lsa ''鉁� Ha'' tugmasini bosing, muammo topgan bo'lsangiz qayta yozish uchun ''馃毇 Yo'q'' tugmasiga bosing!</i>",
'parse_mode'=>"html",
'reply_markup'=>$acc2,
]);
bot('sendMessage',[
'chat_id'=>$admin,
'message_id'=>$mid,
'text'=>"馃搩 <b> Buyurtma berishdi 鉁�</b>

<b>馃懁 Buyurtmachi : $name</b>

<b>馃摑 Telegram-bot buyurtmasi : </b>$turi

<b>馃挵 Xizmati uchun ajratilgan budjet : </b>$costi

<b> 馃懆鈥嶐煉� Dasturlanishi kerak  : </b>$hodimi

<b>馃搵 Qo'shimcha talablar : </b>$talabi

<i>鈴� Kanalga yuboramizmi?</i>",
'parse_mode'=>"html",
'reply_markup'=>$webs,
]);
file_put_contents("base/for-channel.dat","
#Telegram-bot kerak !!!

<b>馃摑 Telegram-bot buyurtmasi : </b>$turi

<b>馃挵 Xizmati uchun ajratilgan budjet : </b>$costi

<b> 馃懆鈥嶐煉� Dasturlanishi kerak : </b>$hodimi

<b>馃搵 Qo'shimcha talablar : </b>$talabi

<b>馃懁 Buyurtmachi : </b>@$user

#telegram #bot #php #python #zakas #sorov

<u>鈥� Powered By :</u> $channel");
file_put_contents("base/for-bot.$cid.dat","<b>馃摑 Telegram-bot buyurtmasi : </b>$turi

<b>馃挵 Xizmati uchun ajratilgan budjet : </b>$costi

<b> 馃懆鈥嶐煉� Dasturlanishi kerak : </b>$hodimi

<b>馃搵 Qo'shimcha talablar : </b>$talabi

<b>馃懁 Buyurtmachi : </b>@$user

#telegram #bot #php #python #zakas #sorov

<u>鈥� Powered By :</u> $channel");
}
}
if($tx=="Proyekt davom ettirish" and $step=="xizmat"){
unlink("base/for-channel.dat");
file_put_contents("step/$cid.step","continue");
bot('sendMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"<b>馃搩 Qanday proyektga qiynalyabsiz yoki qanday loyihani davom ettirish kerak:</b>

<i>馃搩 Masalan : Web saytimni davom ettirishga sherik kerak... yoki Mobil ilova tuzyabman shunga yordam kerak...</i>",
      'parse_mode'=>"html",
      'reply_markup'=>$cancel,
]);
}
if($step=="continue" or $step == "continue"){
if($tx=="馃毇 Bekor qilish"){}else{
bot('sendMessage',[
'chat_id'=>$admin,
'message_id'=>$mid,
]);
file_put_contents("base/xizmat-turi.$cid.dat",$tx);
unlink("step/$cid.step");
file_put_contents("step/$cid.step","cost3");
bot('sendMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"<b>鉁� Yaxshi qabul qilindi!</b>

馃捀 <i>Endi sheriklik uchun ajratgan mablag'ingizni yozing!</i>
馃挵 Masalan : oldindan 80 ming so'm qolganini pulni olgach bo'lishaman!",
'parse_mode'=>"html",
'reply_markup'=>$cancel,
]);
}
}
if($step=="cost3" or $step == "cost3"){
if($tx=="馃毇 Bekor qilish"){}else{
bot('sendMessage',[
'chat_id'=>$admin,
'message_id'=>$mid,
]);
file_put_contents("base/xizmat-narxi.$cid.dat",$tx);
unlink("step/$cid.step");
file_put_contents("step/$cid.step","langu");
bot('sendMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"<b>鉁� Yaxshi qabul qilindi!</b>

<i>馃摑 Yaxshi loyihangizni qaysi dasturlash tilida yozayotganingizni belgilang:</i>

<i>鈴� Masalan : Javascript, Python, PHP ...</i>",
'parse_mode'=>"html",
'reply_markup'=>$cancel,
]);
}
}
if($step=="langu" or $step == "langu"){
if($tx=="馃毇 Bekor qilish"){}else{
bot('sendMessage',[
'chat_id'=>$admin,
'message_id'=>$mid,
]);
file_put_contents("base/xizmat-hodimi.$cid.dat",$tx);
unlink("step/$cid.step");
file_put_contents("step/$cid.step","talab3");
bot('sendMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"<b>鉁� Yaxshi qabul qilindi!</b>

<b>馃搵 Endi sherigingizni tajribasi va ma'lumotini yozing: Masalan - Oliy ma'lumotli bo'lishi kerak, Javascriptdan 2 yillik tajribaga ega bo'lishi kerak...</b>

馃摏 <i> Agar qo'shimcha talablaringiz yoki takliflaringiz bo'lsa yozib yuboring, agar yo'q bo'lsa shunchaki ''YO'Q'' so'zini yuboring!</i>",
'parse_mode'=>"html",
'reply_markup'=>$cancel,
]);
}
}
if($step=="talab3" or $step == "talab3"){
if($tx=="馃毇 Bekor qilish"){}else{
bot('sendMessage',[
'chat_id'=>$admin,
'message_id'=>$mid,
]);
file_put_contents("base/xizmat-talabi.$cid.dat",$tx);
unlink("step/$cid.step");
$turi = file_get_contents("base/xizmat-turi.$cid.dat");
$costi = file_get_contents("base/xizmat-narxi.$cid.dat");
$hodimi = file_get_contents("base/xizmat-hodimi.$cid.dat");
$talabi = file_get_contents("base/xizmat-talabi.$cid.dat");
bot('sendMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"鉁� <b>E'loningiz deyarli tayyor bo'ldi:</b>

馃懆鈥嶐煉� <b>Birga ishlash taklifi bayonoti : </b>$turi

<b>馃挵 Xizmati uchun ajratilgan budjet : </b>$costi

<b> 馃懆鈥嶐煉� Yordamchi sherik haqida : </b>$hodimi

<b>馃搵 Qo'shimcha talablar va takliflar : </b>$talabi

<i>馃搩 Agar barchasi to'g'ri bo'lsa ''鉁� Ha'' tugmasini bosing, muammo topgan bo'lsangiz qayta yozish uchun ''馃毇 Yo'q'' tugmasiga bosing!</i>",
'parse_mode'=>"html",
'reply_markup'=>$acc2,
]);
bot('sendMessage',[
'chat_id'=>$admin,
'message_id'=>$mid,
'text'=>"馃搩 <b> Buyurtma berishdi 鉁�</b>

<b>馃懁 Buyurtmachi : $name</b>

<b>馃帗 Yordamchi sherik kerak : </b>$turi

<b>馃挵 Oldindan beriladigan pul mablag' : </b>$costi

<b> 馃懁 Sherigimni tajribasi : </b>$hodimi

<b>馃搵 Qo'shimcha talablar va takliflar : </b>$talabi

<i>鈴� Kanalga yuboramizmi?</i>",
'parse_mode'=>"html",
'reply_markup'=>$webs,
]);
file_put_contents("base/for-channel.dat","

<code>馃帗 Loyiha davom ettirishga sherik kerak !!!</code>

<b>馃懁 Buyurtmachi : $name</b>

<b> 馃帗 Usernamesi :</b> @$user

<b>馃帗 Yordamchi sherik kerak : </b>$turi

<b>馃挵 Oldindan beriladigan pul mablag' : </b>$costi

<b> 馃懁 Sherigimni tajribasi : </b>$hodimi

<b>馃搵 Qo'shimcha talablar va takliflar : </b>$talabi

#sherik #kerak #dasturchi #oliy #zakas #sorov

<u>鈥� Powered By :</u> $channel");
file_put_contents("base/for-sherik.$cid.dat","<b>馃帗 Sherik yordami kerak </b>$turi

<b>馃挵 Xizmati uchun oldindan beriladigan budjet : </b>$costi

<b> 馃懁 Sherigimni tajribasi : </b>$hodimi

<b>馃搵 Qo'shimcha talablar va takliflar : </b>$talabi

<b>馃懁 Buyurtmachi : </b>@$user

#sherik #kerak #dasturchi #oliy #zakas #sorov

<u>鈥� Powered By :</u> $channel");
}
}
if($tx=="鉁� Ha albatta" and $cid==$admin){
$sorov = file_get_contents("base/for-channel.dat");
if($sorov=="null"){
bot('sendMessage',[
'chat_id'=>$admin,
'message_id'=>$mid,
'text'=>"<b>馃摏 Yuborish uchun hech qanday e'lon mavjud emas!</b>",
'parse_mode'=>"html",
]);
}else{
bot('sendMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"<b>鉁� Yubordim</b>",
'parse_mode'=>"html",
'reply_markup'=>$kick,
]);
$zakas = file_get_contents("base/for-channel.dat");
bot('sendMessage',[
'chat_id'=>$channel,
'message_id'=>$mid,
'text'=>$zakas,
'parse_mode'=>"html",
'reply_markup'=>$comments,
]);
file_put_contents("base/for-channel.dat","null");
}
}
if($step == "username"){
if($tx==$otmen){
}else{
bot('sendMessage',[
'chat_id'=>$admin,
]);
file_put_contents("base/$cid.user.dat",$tx);
unlink("step/$cid.step");
file_put_contents("step/$cid.step","vazifasi");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"<b>鉁� Yaxshi qabul qilindi</b>

馃搩 <i>Endi esa botingizni Vazifasini yozing:
Masalan: Pul ishlash boti</i>",
      'parse_mode'=>"html",
      'reply_markup'=>$cancel,
]);
}
}
if($step == "vazifasi"){
if($tx==$otmen){
}else{
bot('sendMessage',[
'chat_id'=>$admin,
]);
file_put_contents("base/$cid.vazifasi.dat",$tx);
unlink("step/$cid.step");
file_put_contents("step/$cid.step","dasturlangan");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"<b>鉁� Yaxshi qabul qilindi</b>

馃搩 <i>Endi esa botingizni Dasturlangan tilini yozing:
Masalan: Python yoki NodeJS</i>",
      'parse_mode'=>"html",
      'reply_markup'=>$cancel,
]);
}
}
if($step == "dasturlangan"){
if($tx==$otmen){
}else{
bot('sendMessage',[
'chat_id'=>$admin,
]);
file_put_contents("base/$cid.dasturlangan.dat",$tx);
unlink("step/$cid.step");
file_put_contents("step/$cid.step","narxi");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"<b>鉁� Yaxshi qabul qilindi</b>

馃搩 <i>Endi esa botingizni Narxini yozing:
Masalan: 100 ming so鈥榤 kelishamiz yoki kami bor</i>",
      'parse_mode'=>"html",
      'reply_markup'=>$cancel,
]);
}
}
if($step == "narxi"){
if($tx==$otmen){
}else{
bot('sendMessage',[
'chat_id'=>$admin,
]);
bot('sendMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"鈴�",
'reply_markup'=>$kick,
]);
  bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
file_put_contents("base/$cid.narxi.dat",$tx);
unlink("step/$cid.step");
$buser = file_get_contents("base/$cid.user.dat");
$bvazifa = file_get_contents("base/$cid.vazifasi.dat");
$bdast = file_get_contents("base/$cid.dasturlangan.dat");
$bnarxi = file_get_contents("base/$cid.narxi.dat");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"<b>馃 Bot usernamesi :</b> $buser

<b>馃 Bot vazifasi :</b> $bvazifa

<b>馃 Bot Dasturlangan tili :</b> $bdast

<b>馃 Bot Narxi :</b> $bnarxi

<b>馃懆鈥嶐煉� Bot Dasturchisi :</b> @$user

<i>鈱涳笍 Barcha ma鈥榣umotlar to鈥榞鈥榬i ekanini tasdiqlay olasizmi?</i>",
      'parse_mode'=>"html",
      'reply_markup'=>$accept,
]);
$all = "<b>馃 Bot usernamesi :</b> $buser

<b>馃 Bot vazifasi :</b> $bvazifa

<b>馃 Bot Dasturlangan tili :</b> $bdast

<b>馃 Bot Narxi :</b> $bnarxi";
      $base = file_get_contents("base/$cid.dat");
      $order = "n $all";
      $handle = fopen($base, 'a+');
      fwrite($handle, $order);
      fclose($handle);
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"<i>馃搩 Yangi e鈥榣on !!! Hurmatli admin!</i>

<b>馃攷 Foydalanuvchi :</b> $name

 <b>馃 Bot usernamesi :</b> $buser

<b>馃 Bot vazifasi :</b> $bvazifa

<b>馃 Bot Dasturlangan tili :</b> $bdast

<b>馃 Bot Narxi :</b> $bnarxi

<b>馃懆鈥嶐煉� Bot Dasturchisi :</b> @$user

<i>鈱涳笍 E鈥榣on kanalga yuborilaversinmi</i>",
      'parse_mode'=>"html",
      'reply_markup'=>$acc,
]);
$all = "<b>馃 Bot usernamesi :</b> $buser

<b>馃 Bot vazifasi :</b> $bvazifa

<b>馃 Bot Dasturlangan tili :</b> $bdast

<b>馃 Bot Narxi :</b> $bnarxi

<b>馃懆鈥嶐煉� Bot Dasturchisi :</b> @$user

#bot #boteloni #dasturchi #botlar #savdosi

<u>鈥� Powered By :</u> $channel";
      $base = file_get_contents("base/$cid.dat");
      $order = "n $all";
      $handle = fopen($base, 'a+');
      fwrite($handle, $order);
      fclose($handle);
      $rand = rand(1,700);
      file_put_contents("base/randoms.dat",$rand);
     $cloud = file_get_contents("base/randoms.dat");
     file_put_contents("base/$cloud.dat",$all);
    file_put_contents("base/$cid.dat",$all);
    file_put_contents("base/cloud.$cloud.dat",$name);
    file_put_contents("base/cloud-id.$cloud.dat",$cid);
    file_put_contents("base/$cloud.user.dat",$user);
}
}
if($x==$second or $tx=="Mening e鈥榣onlarim"){
$results = file_get_contents("base/$cid.dat");
if($results=="" or $results=="null"){
 bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<i>馃槙 Sizda hali berilgan e鈥榣onlar mavjud emas!</i>",
    'parse_mode'=>"html",
'reply_markup'=>$main,
]);
}else{
$results = file_get_contents("base/$cid.dat");
bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"馃摏 <i>Bergan eng so鈥榥gi e鈥榣oningiz :</i>

鉃栤灃鉃栤灃鉃栤灃鉃栤灃鉃栤灃
$results
鉃栤灃鉃栤灃鉃栤灃鉃栤灃鉃栤灃",
    'parse_mode'=>"html",
'reply_markup'=>$page,
]);
}
}
if($data=="main"){
$results = file_get_contents("base/$ccid.dat");
bot('EditMessageText',[
'chat_id'=>$ccid,
'message_id'=>$message_id2,
'parse_mode'=>"html",
'text'=>"馃摏 <i>Bergan eng so鈥榥gi e鈥榣oningiz :</i>

鉃栤灃鉃栤灃鉃栤灃鉃栤灃鉃栤灃
$results
鉃栤灃鉃栤灃鉃栤灃鉃栤灃鉃栤灃",
'reply_markup'=>$page,
]);
}
if($data=="back"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$message_id2,
]);
bot('sendMessage',[
'chat_id'=>$ccid,
'message_id'=>$message_id2,
'parse_mode'=>"html",
'text'=>"<i>Bosh sahifa</i>",
'reply_markup'=>$main,
]);
}
if($data=="next"){
$results = file_get_contents("base/for-bot.$ccid.dat");
bot('EditMessageText',[
'chat_id'=>$ccid,
'message_id'=>$message_id2,
'parse_mode'=>"html",
'text'=>"馃摏 <i>Bergan eng so鈥榥gi telegram-bot buyurtmangiz :</i>

鉃栤灃鉃栤灃鉃栤灃鉃栤灃鉃栤灃
$results
鉃栤灃鉃栤灃鉃栤灃鉃栤灃鉃栤灃",
'reply_markup'=>$page2,
]);
}
if($data=="next-2"){
$results = file_get_contents("base/for-web.$ccid.dat");
bot('EditMessageText',[
'chat_id'=>$ccid,
'message_id'=>$message_id2,
'parse_mode'=>"html",
'text'=>"馃摏 <i>Bergan eng so鈥榥gi web sayt buyurtmangiz :</i>

鉃栤灃鉃栤灃鉃栤灃鉃栤灃鉃栤灃
$results
鉃栤灃鉃栤灃鉃栤灃鉃栤灃鉃栤灃",
'reply_markup'=>$page3,
]);
}
if($data=="next-3"){
$results = file_get_contents("base/for-sherik.$ccid.dat");
bot('EditMessageText',[
'chat_id'=>$ccid,
'message_id'=>$message_id2,
'parse_mode'=>"html",
'text'=>"馃摏 <i>Bergan eng so鈥榥gi sheriklik buyurtmangiz :</i>

鉃栤灃鉃栤灃鉃栤灃鉃栤灃鉃栤灃
$results
鉃栤灃鉃栤灃鉃栤灃鉃栤灃鉃栤灃",
'reply_markup'=>$page4,
]);
}
if($data=="next-4"){
$results = file_get_contents("base/for-ilova.$ccid.dat");
bot('EditMessageText',[
'chat_id'=>$ccid,
'message_id'=>$message_id2,
'parse_mode'=>"html",
'text'=>"馃摏 <i>Bergan eng so鈥榥gi mobil ilova buyurtmangiz :</i>

鉃栤灃鉃栤灃鉃栤灃鉃栤灃鉃栤灃
$results
鉃栤灃鉃栤灃鉃栤灃鉃栤灃鉃栤灃",
'reply_markup'=>$page5,
]);
}
if($data=="yes"){
bot('EditMessageText',[
'chat_id'=>$ccid,
'message_id'=>$message_id2,
'parse_mode'=>"html",
'text'=>"<i>鈾� So'rovingiz Moderatorlarga yuborildi 鉁�
Tez orada ko鈥榬ib chiqiladi agar moderatorlarimiz sizni e鈥榣oningizni kanalga yuborish uchun yaroqli deb topsa kanalga yuboriladi aks holda yuborilmaydi va sizning buyrug鈥榠ngiz bekor qilinadi!</i>",
]);
sleep(3);
bot('DeleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$message_id2,
]);
bot('sendMessage',[
    'chat_id'=>$ccid,
    'text'=>"Bosh sahifa",
   'parse_mode'=>"html",
'reply_markup'=>$main,
]);
}
if($data=="null"){
bot('AnswerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"馃毇 Boshqa sahifa yo鈥榪",
'show_alert'=>false,
]);
}
if($data=="no"){
bot('AnswerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"鈾� Qayta urinib ko'ring!",
'show_alert'=>false,
]);
bot('DeleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$message_id2,
]);
bot('sendMessage',[
    'chat_id'=>$ccid,
    'text'=>"Bosh sahifa",
   'parse_mode'=>"html",
'reply_markup'=>$main,
]);
$rom = file_get_contents("base/randoms.dat");
$fr = file_get_contents("base/$rom.dat");
$cloud = file_get_contents("base/cloud.$rom.dat");
$clid = file_get_contents("base/cloud-id.$rom.dat");
$felons = file_get_contents("base/$rom.dat");
bot('sendMessage',[
    'chat_id'=>$admin,
    'text'=>"馃槙 Afsuski $cloud, o鈥榸 e鈥榣onini keraksiz deb topdi va bekor qildi 鉁�

<i>馃搩 Uning e鈥榣oni :</i> $felons

<b>馃搲 Status :</b> <i>Noaniq</i>",
   'parse_mode'=>"html",
'reply_markup'=>$admins,
]);
}
if($tx=="鉁� Ha" and $cid==$admin or $tx=="鉁� Ha"  and $cid==$admin2){$rom = file_get_contents("base/randoms.dat");
$fr = file_get_contents("base/$rom.dat");
$cloud = file_get_contents("base/cloud.$rom.dat");
$clid = file_get_contents("base/cloud-id.$rom.dat");
$felons = file_get_contents("base/$rom.dat");
bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<i>Yuborildi 鉁�</i>",
   'parse_mode'=>"html",
'reply_markup'=>$admins,
]);
sleep(1);
$rom = file_get_contents("base/randoms.dat");
$cloud = file_get_contents("base/cloud.$rom.dat");
$damp = file_get_contents("base/$rom.user.dat");
$dasturchi = str_replace("$dasturchi","","$damp");
bot('sendMessage',[
    'chat_id'=>$channel,
    'text'=>$felons,
   'parse_mode'=>"html",
'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>"Sotib olish",'url'=> "https://t.me/$dasturchi"]],
[['text'=>"Add comments",'url'=>"https://www.tg-bots.tk"]],
        ]
    ])
]);
}
if($tx=="馃毇 Yo鈥榪" and $cid==$admin or $tx=="馃毇 Yo鈥榪"  and $cid==$admin2){
bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<i>馃毇 Bekor qilindi</i>",
   'parse_mode'=>"html",
'reply_markup'=>$admins,
]);
sleep(1);
bot('deleteMessage',[
    'chat_id'=>$cid,
   'message_id'=>$mid,
]);
}
$gruppa = file_get_contents("gruppa.db");
$lichka = file_get_contents("lichka.db");
$xabar = file_get_contents("xabarlar.txt");
$type = $message->chat->type;
$reks = file_get_contents("data/reklama.txt");
if($type==$channel){
if(strpos($gruppa,"$channel_id") !==false){
}else{
file_put_contents("gruppa.db","$gruppan$channel_id");
}
}
if($type=="private"){
if(strpos($lichka,"$cid") !==false){
}else{
file_put_contents("lichka.db","$lichkan$cid");
}
} 
$reply = $message->reply_to_message->text;
$rpl = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);

	if($tx=="/send" and $cid == $admin or $tx=="Xabar yuborish" and $cid==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"Userlarga yuboriladigan xabar matnini kiriting! Bekor qilish uchun /cancel ni bosing.",
    'parse_mode'=>"html",
'reply_markup'=>$rpl,
]);
    file_put_contents("xabarlar.txt","user");
}
if($xabar=="user" and $cid == $admin){
if($tx=="/cancel"){
   bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"<i>馃毇 Bekor qilindi!</i>",
    'parse_mode'=>"html",
]);
  file_put_contents("xabarlar.txt","");
}else{
  $lich = file_get_contents("lichka.db");
  $lichka = explode("n",$lich);
  foreach($lichka as $lichkalar){
  $okuser=bot("sendmessage",[
    'chat_id'=>$lichkalar,
    'text'=>$tx,
    'parse_mode'=>'markdown'
]);
}
if($okuser){
  bot("sendmessage",[
    'chat_id'=>$admin,
    'text'=>"<i>馃搵 Barcha foydalanuvchilarga yetib bordi 鉁�</i>",
    'parse_mode'=>'html',
]);
  file_put_contents("xabarlar.txt","");
}
}
}

	if($tx=="/forsend" and $cid==$admin or $tx=="Forward yuborish" and $cid==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"馃搲 <b>Foydalanuvchilarga yuborish kerak bo鈥榣gan xabarni menga yuboring men foydalanuvchilarga FORWARD tarzda yuboraman!</b>",
    'parse_mode'=>"html",
'reply_markup'=>$rpl,
]);
    file_put_contents("xabarlar.txt","forw");
}
if($xabar=="forw" and $cid == $admin){
if($tx=="/no"){
   bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"Bekor qilindi!",
    'parse_mode'=>"html",
]);
  file_put_contents("xabarlar.txt","");
}else{
  $lich = file_get_contents("lichka.db");
  $lichka = explode("n",$lich);
  foreach($lichka as $lichkalar){
  $oks=bot("forwardmessage",[
    'from_chat_id'=>$admin,
    'chat_id'=>$lichkalar,
    'message_id'=>$mid,
]);
}
if($oks){
  bot("sendmessage",[
    'chat_id'=>$admin,
    'text'=>"<i>馃搩 Barcha foydalanuvchilarga yuborildi</i> 鉁�",
    'parse_mode'=>'html',
]);
  file_put_contents("xabarlar.txt","");
}
}
}
if(mb_stripos($tx,"/msg")!==false and $cid=="$admin" or $cid=="$admin2"){
$ex = explode("=",$tx);
$res = bot('sendmessage',[
'chat_id'=>$ex[1],
'text'=>"<b>馃挰 小芯芯斜褖械薪懈械 袗写屑懈薪邪 #msg
鉃栤灃鉃栤灃鉃栤灃鉃栤灃鉃栤灃鉃�</b>
<i>$ex[2]</i>",
'parse_mode'=>'html',
]);
if($res->ok){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>鉁� Xabaringiz Yuborildi!</b>",
'parse_mode'=>'html',
]);
}else{
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<i>鉂� Yuborilmadi!</i>",
'parse_mode'=>'html',
]);
}
}
if($tx=="Yordam"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"馃搩 <i>Botdan foydalanish tartibi juda oddiy:</i>

馃 <b>Bot sotish</b>
<b>馃攷 Agar sizda telegram-botingiz bo'lsayu ammo unga haridor qidirayotgan bo'lsangiz bu aynan siz uchun!..
Demak ''E鈥榣on berish'' tugmachasiga bosasiz so'ralgan ma鈥榣umotlaringizni kiritasiz va qarabsizki tez orada sizning e鈥榣oningiz </b>$channel <b>kanaliga borib tushadi!</b>

<b>馃洅 Buyurtma berish</b>
<i>馃挵 Agar sizga web-sayt yoki telegram botlar kerak bo'lsa ushbu istagingizni bemalol botimiz orqali qondirishingiz mumkin!
馃え Qanday deysizmi?
Juda oddiy shunchaki ''Buyurtma berish'' buyrug'ini botga yuborasiz kerakli ma'lumotlarni kiritasiz va bo'ldi tez orada</i> $channel <i>kanalimizdagi a'zolardan biri (dasturchilar) albatta siz bilan bog'lanishadi va talabingiz qondiriladi 鉁�</i>
<b>馃帺 Batafsil :</b> tg-bots.tk rasmiy web sahifasida",
'parse_mode'=>'html',
]);
}
if($tx=="Statistika"){
$group = file_get_contents("gruppa.db");
$privates = file_get_contents("lichka.db");
$lich = substr_count($privates,"n");
$guruh = substr_count($group,"n");
$obshiy = $lich + $guruh;
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>馃懁 Lichkalar : </b><code>$lich</code><b> ta
馃懃 Guruhlar : </b><code>$guruh</code><b> ta
馃 Jami : </b><code>$obshiy</code><b> ta</b>",
'parse_mode'=>'html',
'reply_markup'=>$none,
]);
}
if($tx=="/admin" and $cid=="$admin" or $tx=="/admin" and $cid=="$admin2"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"馃憢 <b>Assalomu alaykum $name adminlar paneliga xush kelibsiz!</b>",
'parse_mode'=>'html',
'reply_markup'=>$admins,
]);
}
if($tx=="O鈥榗hirish | $stat" and $cid=="$admin" or $tx=="O鈥榗hirish | $stat" and $cid=="$admin2"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"馃憞 <b>Kerakli bo鈥榣imni tanlang:</b>",
'parse_mode'=>'html',
'reply_markup'=>$status,
]);
}
if($tx=="馃敀 O'chirish" and $cid=="$admin" or $tx=="馃敀 O'chirish" and $cid=="$admin2"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"鉁� <b>O鈥榗hirildi:</b>",
'parse_mode'=>'html',
'reply_markup'=>$admins,
]);
file_put_contents("base/bot-holati.dat","OFF");
file_put_contents("base/holat.dat","OFF");
}
if($tx=="馃敁 Yoqish" and $cid=="$admin" or $tx=="馃敁 Yoqish" and $cid=="$admin2"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"鉁� <b>Yoqildi:</b>",
'parse_mode'=>'html',
'reply_markup'=>$admins,
]);
file_put_contents("base/bot-holati.dat","ON");
file_put_contents("base/holat.dat","on");
}
