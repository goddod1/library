<?php session_start();?>
<?php $connect = new MySQLi('localhost:3306','root', 'root', 'thuvien');?>
<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <link rel="stylesheet" type="text/css" href="css/person.css">
    <link rel="stylesheet" type="text/css" href="css/book.css">
    <link rel="stylesheet" type="text/css" href="css/history.css">
    <link rel="stylesheet" type="text/css" href="css/setting.css">
    <link rel="stylesheet" type="text/css" href="css/infor.css">

    <style>
        table, th, td {
           
  border: 1px solid black;
  border-collapse: collapse;

}
th, td {
    height: 60px;
  padding-top: 10px;
  padding-bottom: 20px;
  padding-left: 30px;
  padding-right: 40px;
}
    .popup-wrapper {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 999;
    }

    .popup {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
        height: 200px;
        background-color: #fff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        z-index: 1000;
    }

    .close {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }
    .popup-wrapper1 {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 999;
    }

    .popup1 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
        height: 200px;
        background-color: #fff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        z-index: 1000;
    }

    .close1 {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }
    </style>
    <script>
    function openPopup() {
        document.getElementById("popup-wrapper").style.display = "block";
    }

    function closePopup() {
        document.getElementById("popup-wrapper").style.display = "none";
    }
    function openPopup1() {
        document.getElementById("popup-wrapper1").style.display = "block";
    }

    function closePopup1() {
        document.getElementById("popup-wrapper1").style.display = "none";
    }
    </script>

</head>

<body>
    <header></header>
    <nav></nav>
   
<section class="body">
<aside class="vertical-menu">
  <a href="?option=home" class="active"><img src="home-alt-svgrepo-com.png" width="40" height="40"></a>
  <a href="?option=person"><img src="person-team-svgrepo-com.png" width="40" height="40"></a>
  <a href="?option=book"><img src="book-svgrepo-com.png" width="40" height="40"></a>
  <a href="?option=history"><img src="book-history-library-svgrepo-com.png" width="40" height="40"></a>
  <a href="?option=setting"><img src="setting-svgrepo-com.png" width="40" height="40"></a>
  <a href="?option=infor"><img src="information-circle-svgrepo-com.png" width="40" height="40"></a>
</aside>
        <article style="border: none; ">
            <?php
           if(isset($_GET['option'])){
            switch($_GET['option']){
                case 'home':
                    include "view/history.php";
                case 'person':
                    include "view/person.php";
                    break;
                case 'book':
                    include "view/book.php";
                    break;
                case 'history':
                    include "view/history.php";
                    break;
                case 'setting':
                    include "view/setting.php";
                    break;
                case 'infor':
                    include "view/infor.php";
                    break;
                case 'bookupdate':
                    include "view/update.php";
                    break;
                    
                }
            }
        ?>

        </article>
        </section>
        
    

</body>

</html>