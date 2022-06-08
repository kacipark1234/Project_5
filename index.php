<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
        <title>購物車</title>
        
        <style type="text/css">
            html{
                 height: 100%;
            }
            body{
                background-image: url(image/loginbg.jpg);
                background-repeat: no-repeat;
                background-size: 100% 100%;
                background-attachment: fixed;
                height: 100%;
            }
            .mid_div {
                float: none;
                display: block;
                margin-left: auto;
                margin-right: auto;
                text-align: left;
                max-width: 300px;
            }
            .title{
                height: 200px;
                width: 100%;
                
            }
        </style>
    </head>
    <body>
        <form method="post" action="main.php" >
            
            <div class="title"></div><br><br>
            
            
            <div width="500px" class="panel panel-info mid_div">
                <div class="panel-heading">
                    <h3 class="panel-title">登入系統</h3>
                </div>
                <div class="panel-body">
                    
                    名字:<br><input type="text" name="name" size="20" placeholder="請輸入名字" ><br><br>
                    <input class='btn btn-primary' type="submit" value="登入">
                    <input class='btn btn-primary' type="reset" value="重新輸入">
                    
                </div>
            </div>
            
        </form>
    </body>
    
</html>


