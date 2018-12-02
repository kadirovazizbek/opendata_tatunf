<form>
<div id="chat_window">
</div>
<input type="text" id="message_field"><button type="button" id="send">Send</button>
</form>
<script>
$(document).ready(function(){
    $("#send").click(function(){
        $text = $("#message_field").val();
        $.ajax('/uz/bot/chatbot',{
            'data': JSON.stringify({"update_id":0,"message":{"message_id":0,"from":{"id":0,"is_bot":false,"first_name":"Web","last_name":"Site","username":"WebSite","language_code":"en-US"},"chat":{"id":0,"first_name":"Web","last_name":"Site","username":"WebSite","type":"private"},"date":<?php echo time();?>,"text":$text}}),
            'type': 'POST',
            'processData': false,
            'contentType': 'application/json',
            success:function(data){
                $("#chat_window").html($("#chat_window").text() + data);
            }
        });
    });
});
</script>