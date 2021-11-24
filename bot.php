<?php
/////php  coder   Abdukhalilov Azim   t.me/Abdukhalilov_Azim
const API = "2125487517:AAEYFnuNQVB9om9Z6fQc1GBXP6GqOUGf_b0"; // bot tokeni

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API."/".$method;
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

/* Botni ishlatish uchun faqat gina token uzgartiring bot 100% ishlaydi @SmirkingBot */
mkdir("flood");
mkdir("ball");
$admin = "1946132115";// admin id  
$update = json_decode(file_get_contents('php://input'));
$message = $update->message ?? null;
$callbackquery = $update->callback_query ?? null;
$text = $message->text ?? null;
$data = $update->callback_query->data ?? null;
$call_id = $update->callback_query->id ?? null;
$name = $message->from->first_name ?? null;

if(isset($callbackquery)){
    $text = 
    $cid = $update->callback_query->message->chat->id ?? null;  
    $type = $update->callback_query->message->chat->type ?? null;
    $mid = $update->callback_query->message->message_id ?? null;
    $from_id = $update->callback_query->from->id ?? null;
}
elseif(isset($message)){
    $from_id = $message->from->id ?? null;
    $cid = $message->chat->id ?? null;
    $type = $message->chat->type ?? null;
    $mid = $message->message_id ?? null;
}
/////php  coder   Abdukhalilov Azim   t.me/Abdukhalilov_Azim
$userflood = file_get_contents("flood/$cid.txt") ?? null;
$userlar = file_get_contents("user.txt");
$users = substr_count($userlar,"\n"); 

$ball= file_get_contents("ball/$cid.txt");
if($type=="group" or $type == "supergroup"){
    exit();
}
$key1 = json_encode(['inline_keyboard' => [
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]],
  [['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"], ['text'=>'☹️', 'callback_data' => "no"]], ]
]);

$rand = rand(0,2); $rand2 = rand(0,2);
$key1 = json_decode($key1, true);
$key1['inline_keyboard'][$rand][$rand2]['text'] = '☺️';
$key1['inline_keyboard'][$rand][$rand2]['callback_data'] = 'go';
$key1 = json_encode($key1);

$level2 = $key1;
$level22 = $key1;
/////php  coder   Abdukhalilov Azim   t.me/Abdukhalilov_Azim
$main = json_encode(['inline_keyboard'=>[
  [['text'=>'Boshidan boshlash⚡', 'callback_data' => "start"]], 
  [['text'=>'Top rekordchilar 🔝', 'callback_data' => "top"]], 
  [['text'=>'🌝O‘yin haqida', 'callback_data'=>'about']],
  ]
]);
/////php  coder   Abdukhalilov Azim   t.me/Abdukhalilov_Azim
$res = json_encode (['inline_keyboard'=>[
   [['text'=>'Boshidan boshlash⚡', 'callback_data' => "start"]], 
  [['text'=>'Top rekordchilar 🔝', 'callback_data' => "top"]], 
  [['text'=>'🌝O‘yin haqida', 'callback_data'=>'about']],
    ]
]);
$rest = json_encode (['inline_keyboard'=>[
    [['text'=>"🎉 O'yinni boshlash",'callback_data'=>'start']], 
  [['text'=>"⤵️Do'stlarga yuborish", 'url' => "https://telegram.me/share/url?url=t.me/smirkingsbot da kulgili yuzni top o'yinini o'ynab ko'ring.🔖"],  ['text'=>'⭐ Dasturchi','url'=>'t.me/oddiy_telba']],
    ]
]);
/////php  coder   Abdukhalilov Azim   t.me/Abdukhalilov_Azim
$help = "🔶  Men Kulib turgan yuzni top o'yiniman. Men sizga   xafa☹️ va kulib turgan☺️ emoji yuboraman siz esa kulib turgan☺️ emojini topasiz.
Ko'p ball yig'gan ishtirokchilar top 10 taligini bo'limi ham bor.

⁉️<b>O'yin qoidalari:</b>
O'yin boshlangandan so'ng sizga 5 soniya  beriladi. Shu 5  soniya ichida o'sha kulib turgan☺️ emojini topishingiz kerak. Kulib turgan☺️ emoji topsangiz, sizga 1 ball beriladi agar topolmasangiz o'yin tugaydi va ballingiz 0 dan boshlanadi. O'yinni boshlash uchun O'yinni boshlash tugmasini bosing.
👨‍💻 Bot dasturchisi: @oDDiy_TeLBa";
$keys = array($key1, $key2, $key3, $key4, $key5, $key6, $key7, $key8, $key9);
$rand = array_rand($keys);
$key = $keys[$rand];

$kays = array($key11, $key12, $key13, $key14, $key15, $key16, $key17, $key18, $key19);
$randd = array_rand($kays);
$kay = $kays[$randd];
/////php  coder   Abdukhalilov Azim   t.me/Abdukhalilov_Azim
$motivarray = array("Yaxshi 👍","Barakalla👏","Tasanno 🤗","Ofarin🤩","Ajoyib 🤓","Bravo 👍","Qoileee🙂");
$randarray = array_rand($motivarray);
$motiv = $motivarray[$randarray];

   if(stripos($userlar,"$cid")!==false){
    }else{
    file_put_contents("user.txt","$userlar\n$cid");
   }
function edit($cid,$mid,$text,$menu){
    bot('editMessageText',[
    'chat_id'=>$cid,
     'message_id'=>$mid,
    'text'=>$text,
    'parse_mode'=>'html',
    'reply_markup'=>$menu
  ]);
}
/////php  coder   Abdukhalilov Azim   t.me/Abdukhalilov_Azim
function send($cid,$text,$menu){
    bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>$text,
    'parse_mode'=>'html',
    'reply_markup'=>$menu
  ]);
  exit();
}

//////////loyiha boshlandi//////

$dir = 'ball'; 
$files = scandir($dir);
unset($files[0], $files[1]);
$result = [];

foreach($files as $file){
    $count = file_get_contents($dir.'/'.$file);  
    $userid = str_replace(".txt","",$file);//
    $result[$userid] = $count;
}
    arsort($result);
    $top = '';

$num = 1;
foreach($result as $userid => $count){
     if($num < 11){
        $top .= "$num) <a href='tg://user?id=$userid'>$userid</a> -- $count ta ball 🌝\n";
        $num++;
     }
     else{
         break;
     }
}

if(isset($message)){
if(stripos($userlar,"$cid")!==false){
}else{
    file_put_contents("statistika/user.txt","$userlar\n$cid");
}
if($text=="/start"){
    send($cid,"👋Salom $name  men kulib turgan yuzni top o'yiniman.\n❗O'ynashdan oldin bot haqida bo'limi orqali botning strukturasi bilan tanishib chiqing",$res);
}
elseif($text=="/top"){
    send($cid,"➖➖➖🏆TOP 10🏆➖➖➖\n\n$top",$res);
}
elseif($text=="/help"){
   send($cid,$help,$res);
}
elseif($text=="/my"){
if($ball== ""){
    send($cid,"Sizda ball mavjud emas😣",$res);
    
}else{
    send($cid,"Siz botdan jami <b>$ball</b> ball yigdingiz🎗",$res);
}
}
elseif($text=="/stats"){
    send($cid,"<b>👥 Jami oyinchilar $users ta 🤼‍♂️</b>",null);
}else{
    send($cid,"Bunday buyruqga javob kiritilmagan!",$res);
}
}
/////php  coder   Abdukhalilov Azim   t.me/Abdukhalilov_Azim
if($data=="start"){
    $text = "Emoji topish uchun sizga 5 soniya beriladi. Vaqt qancha qolganini bot o'zi hisoblaydi va vaqtingiz tugamagan bo'lsa o'yin davom etadi agar vaqtingiz tugagan bo'lsa shu zahoti o'yin to'xtaydi.\nO'yinni boshlashga tayyormisiz🤔?";
    $menu = json_encode (['inline_keyboard'=>[
    [['text'=>"Tayyorman ⚡",'callback_data'=>'startgo']], 
    ]
    ]);
    edit($cid,$mid,$text,$menu);
    exit();
}

if($data=="startgo"){
    unlink("ball/$cid.txt");
    edit($cid,$mid,"3️⃣...️",null);
    edit($cid,$mid,"2️⃣...",null);
    edit($cid,$mid,"1️⃣...️",null);
    edit($cid,$mid,"Boshladik✈️",null);
    edit($cid,$mid,"Emojilar ichidan kulib turganini toping🕛",$key);
    file_put_contents("flood/$cid.txt",time() + 5);
    exit();
}


if($data=="goo"){
    bot('answerCallbackQuery',[
    'callback_query_id'=>$call_id,
    'text'=>''
    ]);
    if($userflood == null or 0 <= (time() - $userflood)){  
        edit($cid,$mid,"Vaqt tugadi, Tezro o'yna sudralmasdan😁",$main);
        exit();
    }else{
        file_put_contents("ball/$cid.txt",$ball + 1);
        edit($cid,$mid,"$motiv\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖ \n<b>Sizga +1 ball berildi</b>",$key);
        unlink("flood/$cid.txt");
        file_put_contents("flood/$cid.txt",time() + 5);
        exit();
    }
}
/////php  coder   Abdukhalilov Azim   t.me/Abdukhalilov_Azim
if($data=="go"){
    bot('answerCallbackQuery',[
    'callback_query_id'=>$call_id,
    'text'=>''
    ]);
    if($userflood == null or 0 <= (time() - $userflood)){  
        edit($cid,$mid,"Vaqt tugadi, Tezro o'yna sudralmasdan😁",$main);
        exit();
    }else{
    if($ball<25 or $ball==25){
        file_put_contents("ball/$cid.txt",$ball + 1);
        edit($cid,$mid,"<b>Qoil, Sizga +1 ball berildi🆙️</b>\n➖➖➖➖➖➖➖➖➖➖➖\n$motiv",$kay);
         unlink("flood/$cid.txt");
        file_put_contents("flood/$cid.txt",time() + 5);
        exit();
    }else{
        edit($cid,$mid,"$motiv \n➖➖➖➖➖➖➖➖➖➖➖ \n<b>Qoil, Sizga +1 ball berildi</b>",$level2);
         unlink("flood/$cid.txt");
        file_put_contents("flood/$cid.txt",time() + 5);
        exit();
    }
    }
}
/////php  coder   Abdukhalilov Azim   t.me/Abdukhalilov_Azim
if($data=="lvl2"){
    bot('answerCallbackQuery',[
    'callback_query_id'=>$call_id,
    'text'=>''
]);
if($userflood == null or 0 <= (time() - $userflood)){  
    edit($cid,$mid,"Vaqt tugadi, Tezro o'yna sudralmasdan😁",$main);
    exit();
}else{
    file_put_contents("ball/$cid.txt",$ball + 1);
    edit($cid,$mid,"<b>Sizga +1 ball berildi</b>\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖ \n$motiv",$level22);
     unlink("flood/$cid.txt");
    file_put_contents("flood/$cid.txt",time() + 5);
    exit();

}
}
if($data=="lvl22"){
    bot('answerCallbackQuery',[
    'callback_query_id'=>$call_id,
    'text'=>''
    ]);
    if($userflood == null or 0 <= (time() - $userflood)){  
        edit($cid,$mid,"Vaqt tugadi, Tezro o'yna sudralmasdan😁",$main);
        exit();
    }else{
        file_put_contents("ball/$cid.txt",$ball + 1);
        edit($cid,$mid,"$motiv\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖ \n<b>Sizga +1 ball berildi</b>",$level2);
         unlink("flood/$cid.txt");
        file_put_contents("flood/$cid.txt",time() + 5);
        exit();
    }
}
/////php  coder   Abdukhalilov Azim   t.me/Abdukhalilov_Azim
if($data=="about"){
    edit($cid,$mid,$help,$rest);
    exit();
}if($data=="top"){
    edit($cid,$mid,$top,$rest);
}
if($data=="no"){
    edit($cid,$mid,"Eee shu kulib turganmi ahmoq? Topolmading😔",$main);
     unlink("flood/$cid.txt");
    exit();
}
