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
                
            </tr>
            <?php
                //echo $_COOKIE["name"];
                if(empty($_COOKIE["book_id_list"])){
                    echo "<tr align='center' >";
                    echo "<td colspan='6' >目前沒商品</td>";
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
                        
                        echo "<tr>";
                        echo "<td>".$book_id_array[$i]."</td>";
                        echo "<td>".$book_name_array[$i]."</td>";
                        echo "<td>".$price_array[$i]."</td>";
                        echo "<td>".$book_count_array[$i]."</td>";
                        echo "<td>".$sub_total."</td>";
                        echo "</tr>";
                        
                        
                        

                    }
                    echo "<tr align='right' bgcolor='#EDEAB1'>";
                    echo "<td colspan='6'> 總金額 = ".$total."</td>";
                    echo "</tr>";
                    
                    
                }
            
                
                
            ?>
        </table>
    </body>
    
</html>