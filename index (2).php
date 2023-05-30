<?php
//page=$_GET['page'];
if (isset($_GET['page'])){
            include 'header.php';
            echo '<br/>';
            include $_GET['page'];
            echo '<br/>';
            include 'footer.php';
} else {
            include 'header.php'; 
            echo '<br/>';
            echo '<p>welcome to index page</p>'; 
            echo '<br/>';
            include 'footer.php';
}
