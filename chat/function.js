// jQuery Document
$(document).ready(function(){
    //Pour quitter la session ; delete
    $("#exit").click(function(){
        let exit = confirm("Are you sure you want to end the session?");
        if(exit==true){window.location = 'chat.php?logout=true';}		
    });
    //Envoyer le message
    $("#submitmsg").click(function(){	
        let clientmsg = $("#usermsg").val();
        $.post("post.php", {text: clientmsg});				
        $("#usermsg").attr("value", "");
        return false;
    });
    //Chargez le fichier contenant le journal du chat
    function loadLog(){		
    let oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Hauteur de défilement avant la requête
    $.ajax({
        url: "log.html",
        cache: false,
        success: function(html){		
            $("#chatbox").html(html); //Insérez le journal de chat dans la div #chatbox
            
            //Auto-scroll			
            let newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Hauteur de défilement après la requête
            if(newscrollHeight > oldscrollHeight){
                $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Défilement automatique jusqu'au bas de la div
            }				
        },
    });
}
setInterval (loadLog);
});