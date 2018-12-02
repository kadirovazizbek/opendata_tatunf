<div class="chat">
<div class="chat_title"><?php echo lang('smart_chat');?></div>
<div id="chat_window">
</div>
<table width="100%">
<tr><td>
<input type="text" id="message_field" class="form-control" placeholder="Введите ваш запрос"></td><td><button type="button" id="send" class="btn btn-primary">Send</button></td></tr>
</table>
</div>
<script>
$(document).ready(function(){
    $("#chat_window").toggle('fast');
    $('#message_field').keypress(function (e) {
    if (e.which == 13) {
        $("#send").click();
    }
    });
    $("#send").click(function(){
        $text = $("#message_field").val();
        $("#message_field").val("");
        $("#chat_window").html($("#chat_window").html() + "<div class='message message-user'>"+$text+"</div>");
        $.ajax('/uz/bot/chatbot',{
            'data': JSON.stringify({"update_id":0,"message":{"message_id":0,"from":{"id":0,"is_bot":false,"first_name":"Web","last_name":"Site","username":"WebSite","language_code":"en-US"},"chat":{"id":0,"first_name":"Web","last_name":"Site","username":"WebSite","type":"private"},"date":<?php echo time();?>,"text":$text}}),
            'type': 'POST',
            'processData': false,
            'contentType': 'application/json',
            success:function(data){
                data = "<div class='message message-bot'>"+data+"</div>";
                $("#chat_window").html($("#chat_window").html() + data);
            }
        });
    });
    $(".chat_title").click(function(){
        $("#chat_window").toggle('fast');
        return false;
    });
    $(".chat_title_link").click(function(){
        $("#chat_window").toggle('fast');
        return false;
    });
    $("#message_field").focus(function(){
        $("#chat_window").slideDown('fast');
        return false;
    });
});
</script>
<style>
.chat{
    box-shadow:inset 2px 2px 5px #ccc;
    border:1px solid #666;
    border-radius:5px;
    background:#fff;
    width:100%;
    max-width:500px;
    position:fixed;
    bottom:0px;
    right:0px;
}
#chat_window{
    width:100%;
    max-height:400px;
    min-height:400px;
    max-width:500px;
    padding:8px;
    overflow:scroll;
}
.chat_title{
    width:100%;
    max-width:500px;
    padding:4px 4px;
    background:blue;
    color:white;
    text-align:center;
    cursor:pointer;
}
.message{
    border:1px solid #666;
    border-radius:3px;
    min-width:60%;
    max-width:80%;
    padding:2px 4px;
}
.message.message-bot{
    float:left;
    background:#ccf;
}
.message.message-user{
    float:right;
    background:#cfc;
}
#message_field{
    width:100%;
    max-width:100%!important;
}
#send{
    width:100%!important;
}
</style>