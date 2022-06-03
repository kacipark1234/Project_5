<?php

    //echo "1111";
    $book_id = $_GET["book_id"];
    $book_count = $_POST["book_count"];
    echo $book_id;
    echo $book_name;
    
    $book_id_array = explode(",",$_COOKIE["book_id_list"]);
    $book_name_array = explode(",",$_COOKIE["book_name_list"]);
    $price_array = explode(",",$_COOKIE["price_list"]);
    $book_count_array = explode(",",$_COOKIE["book_count_list"]);
    
    $key = array_search($book_id,$book_id_array);

    if($book_count == 0 || empty($book_count)){
        unset($book_id_array[$key]);
        unset($book_name_array[$key]);
        unset($price_array[$key]);
        unset($book_count_array[$key]);
        
    }
    else{
        $book_count_array[$key] = $book_count;
    }
    
    setcookie("book_id_list",implode(",",$book_id_array));
    setcookie("book_name_list",implode(",",$book_name_array));  
    setcookie("price_list",implode(",",$price_array));    
    setcookie("book_count_list",implode(",",$book_count_array)); 
    
    header("location:shop_car.php");
    
    
        
    
    
    
    
    
    
    
?>