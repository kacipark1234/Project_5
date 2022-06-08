<?php
    
    
    $book_id = $_GET["book_id"];
    $book_name = $_GET["book_name"];
    $price = $_GET["price"];
    $book_count = $_POST["book_count"];
    
    if(empty($_COOKIE["book_id_list"])){
        setcookie("book_id_list",$book_id);
        setcookie("book_name_list",$book_name);  
        setcookie("price_list",$price);    
        setcookie("book_count_list",$book_count);    
        //echo "111";    
    }
    else{ 
        $book_id_array = explode(",",$_COOKIE["book_id_list"]);
        $book_name_array = explode(",",$_COOKIE["book_name_list"]);
        $price_array = explode(",",$_COOKIE["price_list"]);
        $book_count_array = explode(",",$_COOKIE["book_count_list"]);
        
        if(in_array($book_id,$book_id_array)){
            $key = array_search($book_id,$book_id_array);
            $book_count_array[$key] += $book_count;

        }
        else{
            $book_id_array[] = $book_id;
            $book_name_array[] = $book_name;
            $price_array[] = $price;
            $book_count_array[] = $book_count;

        }
        setcookie("book_id_list",implode(",",$book_id_array));
        setcookie("book_name_list",implode(",",$book_name_array)); 
        setcookie("price_list",implode(",",$price_array));    
        setcookie("book_count_list",implode(",",$book_count_array)); 
    
    }  

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <a href="log.php" >繼續購物</a>
        
    </body>
    
</html>















