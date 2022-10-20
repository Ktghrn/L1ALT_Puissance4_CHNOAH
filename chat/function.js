// jQuery Document
$(document).ready(function(){
    //If user wants to end session
    $("#exit").click(function(){
        let exit = confirm("Are you sure you want to end the session?");
        if(exit==true){window.location = 'chat.php?logout=true';}		
    });
    //If user submits the form
    $("#submitmsg").click(function(){	
        let clientmsg = $("#usermsg").val();
        $.post("post.php", {text: clientmsg});				
        $("#usermsg").attr("value", "");
        return false;
    });
    //Load the file containing the chat log
    function loadLog(){		
    let oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height before the request
    $.ajax({
        url: "log.html",
        cache: false,
        success: function(html){		
            $("#chatbox").html(html); //Insert chat log into the #chatbox div
            
            //Auto-scroll			
            let newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height after the request
            if(newscrollHeight > oldscrollHeight){
                $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
            }				
        },
    });
}
setInterval (loadLog);
});