# Project_5

專案名稱 : 購物車

功能 :
1. 登入記錄名字
2. 商品加入購物車功能
3. (修改/刪除)購物車
4. 顯示表單


## 登入畫面(index.php)
輸入名字，將名字用post傳送至main.php
![image](https://user-images.githubusercontent.com/93324400/172620430-3d474976-f73e-47b4-96f5-f6bbc1ffecda.png)

## 框架頁面(main.php)

用來指定上方框架來源網頁是(link.php)下方框架來源為(log.php)
用COOKIE來記錄瀏覽者名字

### 上方框架頁面(link.php)下方框架頁面(log.php)

從資料庫內搜尋並顯示出商品資訊
加入購物車時，把產品編號、數量等資訊紀錄在 COOKIE 的陣列裡
![image](https://user-images.githubusercontent.com/93324400/172621797-f7127f5a-7590-49cc-8556-da5b5d3c45dd.png)

### 購物車(shop_car.php)
設定數量並直接更新 COOKIE ，刪除購物車會把 COOKIE 紀錄的資訊清除掉
![image](https://user-images.githubusercontent.com/93324400/172622189-0c41415b-ebf5-4c3e-a43f-cf2a6cbb568f.png)

### 顯示表單(print_order.php)
利用 COOKIE 來計算出購物單總價錢等資訊 
![image](https://user-images.githubusercontent.com/93324400/172623113-8c0debd5-c676-4192-b859-6c1a86c9fb73.png)

## MySQL
```sql
CREATE DATABASE `Portfolio_5`;                /*創建名稱為 Portfolio_5 的資料庫*/
USE `Portfolio_5`;                            /*使用 Portfolio_5 資料庫*/
CREATE TABLE `book`(                          /*創建名稱為 book 的表單*/
    `book_number` VARCHAR(20)  primary key,  
    `book_name` VARCHAR(30),  
    `price` int
);
```

