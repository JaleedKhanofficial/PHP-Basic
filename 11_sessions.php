<?php 
/*
Sessions are the a way to store information (in variable) to be used across multiple pages.
unlike cookies, sessions are stored on the server.
*/

session_start();



if (isset($_POST['submit'])){
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);

    $password = $_POST['password'];

    if ($username == "jaleed" && $password =='password'){
        $_SESSION['username'] = $username;
        header('Location: dashboard.php');
    }else{
        echo "Incorrect Login";
    }
    
}

?>

<form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for="username">Username</label>
        <input type="text" name="username">
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password">
    </div>

    <input type="submit" value="Submit" name="submit">

</form>


