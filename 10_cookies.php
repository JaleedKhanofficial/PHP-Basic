<?php
/*Cookies are a mechanism for storing data in the remote brower and thus tracking or identiftying return users. You can set specific data to be stored in the browser, and then retrive it when the user visits the site again.*/



setcookie('name','jaleed',time() + 86400*30);

if (isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}


setcookie('name',' ',time() - 84600);

?>