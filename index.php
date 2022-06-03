<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>購物車</title>
        
        <style type="text/css">
            html{
                 height: 100%;
            }
            body{
                background-image: url(index_background.jpg);
                background-repeat: no-repeat;
                background-size: 100% 100%;
                background-attachment: fixed;
                height: 100%;
            }
            .centerblock {
                float: none;
                display: block;
                margin-left: auto;
                margin-right: auto;
                margin-top: 20%;
                text-align: center;
                max-width: 340px;
            }
        </style>
    </head>
    <body>
        <form method="post" action="main.php" >
            <p align="center" >
                <input type="text" name="name" size="20" placeholder="請輸入名字" >
                <input type="submit" value="登入">
                <input type="reset" value="重新輸入">
                
            </p>
            
            
        </form>
    </body>
    
</html>


