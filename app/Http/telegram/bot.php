<?php
    ini_set('display_errors', 1);
    require_once("./config.php");
    #variables
    $upd = json_decode(file_get_contents("php://input"));
    #variable of message
    $message = $upd->message;
    $channel_post = $upd->channel_post;
    $text = html($message->text);
    $chat_id = $message->chat->id;
    $chat_type = $message->chat->type;
    $from_id = $message->from->id;
    $message_id = $message->message_id;
    $first_name = $message->from->first_name;
    $last_name = $message->from->last_name;
    $full_name = html($first_name . " " . $last_name);
    $caption = $message->caption;
    $username = $message->chat->username;
    #reply_to_message
    $reply_message = $message->reply_to_message;
    #files
    $document = $message->document;
    $photo = $message->photo;
    $audio = $message->audio;
    $video = $message->video;
    # files  id variable
    $docId = $document->file_id;
    $docName = $document->file_name;
    $docSize = $document->file_size;
    #callback
    $call = $upd->callback_query;
    $chat_idCB = $call->message->chat->id;
    $chat_typeCB = $call->message->chat->type;
    $message_idCB = $call->message->message_id;
    $call_from_id = $call->from->id;
    $call_id = $call->id;
    $call_data = $call->data;
    $call_message_id = $call->message->message_id;
    #my log
    file_put_contents("log.json",file_get_contents('php://input'));

    if($text == "/start"){
        bot("sendMessage", [
            'chat_id'=>$chat_id,
            'text'=>"Assalomu alaykum   ",
            'parse_mode'=>"html"
        ]);
    }
?>
