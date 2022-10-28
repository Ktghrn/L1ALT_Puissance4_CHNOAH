<head>
    <?php
    include ("../include/og_header.inc.php");
    ?>
    <link rel="stylesheet" href="chatstyle.css">
</head>

<div class="container-chatbox">
    <?php
    require_once("log.php");
    if(!isset($_SESSION['name'])){
        loginForm();
    }
    else{
    ?>
    <?php
    include ("../include/header.inc.php");
    ?>
    <div id="container">
        <div id="menu">
            <p class="welcome">Welcome, <b><?php echo $_SESSION['name']; ?></b></p>
            <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
            <div style="clear:both"></div>
        </div>
        <div id="chatbox"><?php //delete
            if(file_exists("log.html") && filesize("log.html") > 0){
                $handle = fopen("log.html", "r");
                $contents = fread($handle, filesize("log.html"));
                fclose($handle);
                
                echo $contents;
            }//-------------------
        ?></div>
        <form name="message" action="">
            <input name="usermsg" type="text" id="usermsg" size="63" />
            <input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
        </form>
    </div>
    <?php
    include ("../include/footer.inc.php");
    ?>
    <?php
    //delete
    if(isset($_GET['logout'])){      
        //Simple exit message
        $fp = fopen("log.html", 'a');
        fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['name'] ." has left the chat session.</i><br></div>");
        fclose($fp);
        
        session_destroy();
        header("Location: chat.php"); //Redirect the user
    }
    //-----------
    ?>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript" src="function.js"></script>
<?php
}
?>
