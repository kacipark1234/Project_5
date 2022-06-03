<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>連結</title>
    </head>
    <body>
        
        <table align="center" width="800" border="0" cellspacing="2">
            
            <tr bgcolor="#BABA76" height="30" align="center">
                <td>書號</td>
                <td>書名</td>
                <td>定價</td>
                <td>輸入數量</td>
                <td>進行訂購</td>
                
            </tr>
            <?php
                
                require_once("dbtools.inc.php");
                $link = create_connection();
                $sql = "SELECT * FROM book";
                $result = execute_sql($link,"Portfolio_5",$sql);
                $bg[0]="#F7ED8E";
                $bg[1]="#FDA37C";
                $bg[2]="#7CFDC9";
                $bg[3]="#7CD2FD";
                $j=0;
                while($row = mysqli_fetch_assoc($result)){
                    //echo "123";
                    echo "<form method='post' action='add_list.php?book_id=".$row["book_number"]."&book_name=".urlencode($row["book_name"])."&price=".$row["price"]."' >";
                    
                    echo "<tr bgcolor=".$bg[$j%4]."><td>";
                    echo $row["book_number"]."<br></td><td>";
                    echo $row["book_name"]."<br></td><td>";
                    echo $row["price"]."<br></td><td>";
                    echo "<input type='text' name='book_count' size='5' value='1'>"."<br></td><td>";
                    echo"<input type='submit' value='放入購物車' >"."<br></td>";
                    echo "</tr></form>";
                    $j++;
                }
                
                mysqli_free_result($result);    
                mysqli_close($link);
                
            ?>
        </table>
        
    </body>
    
</html>