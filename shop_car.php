<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>連結</title>
        <style type="text/css">
            html{
                 height: 100%;
            }
            body{
                background-image: url(image/bg.jpg);
                background-repeat: no-repeat;
                background-size: 100% 100%;
                background-attachment: fixed;
                height: 100%;
            }
        </style>
    </head>
    <body>
        
        <table align="center" width="800" border="0" cellspacing="2">
            
            <tr bgcolor="#BABA76" height="30" align="center">
                <td>書號</td>
                <td>書名</td>
                <td>定價</td>
                <td>數量</td>
                <td>小計</td>
                <td>變更數量</td>
                
            </tr>
            <?php
                if(empty($_COOKIE["book_id_list"])){
                    echo "<tr align='center' >";
                    echo "<td colspan='6' >目前沒商品加入購物車</td>";
                    echo "</tr>";
                    
                }    
                else{
                    
                    $book_id_array = explode(",",$_COOKIE["book_id_list"]);
                    $book_name_array = explode(",",$_COOKIE["book_name_list"]);
                    $price_array = explode(",",$_COOKIE["price_list"]);
                    $book_count_array = explode(",",$_COOKIE["book_count_list"]);
                
                    $total = 0;
                    for($i = 0;$i < count($book_id_array);$i++){
                        $sub_total = $price_array[$i] * $book_count_array[$i];
                        $total += $sub_total;
                        
                        /*echo $book_id_array[$i];
                        echo $book_name_array[$i];
                        echo $price_array[$i];
                        echo $book_count_array[$i];*/
                        echo "<form method='post' action='change_order.php?book_id=".$book_id_array[$i]."' >";
                        echo "<tr>";
                        echo "<td>".$book_id_array[$i]."</td>";
                        echo "<td>".$book_name_array[$i]."</td>";
                        echo "<td>".$price_array[$i]."</td>";
                        echo "<td><input type='text' name='book_count' value='".$book_count_array[$i]."' size='5'></td>";
                        echo "<td>".$sub_total."</td>";
                         echo "<td><input type='submit' value='修改'></td>";
                        echo "</tr></form>";
                        
                        
                        

                    }
                    echo "<tr align='right' bgcolor='#EDEAB1'>";
                    echo "<td colspan='6'> 總金額 = ".$total."</td>";
                    echo "</tr>";
                    echo "<tr align='center' bgcolor='#EDEAB1'>";
                    /*echo "<td colspan='6'><br><input type='submit' value='退回商品' ></td>";*/
                   echo "<td colspan='6'><br><input type='button' value='退回商品' onClick=\"javascript:window.open('delete_order.php','_self')\"></td>"; 
                    echo "</tr>";
                    
                }
            
                
                
            ?>
        </table>
        
    </body>
    
</html>