<?php 
if (isset($_POST['sumbit'])){
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

    $age = filter_input(INPUT_POST, "age",FILTER_SANITIZE_SPECIAL_CHARS);



    echo $name;
}

?>

<!-- <a href="<?php //echo $_SERVER['PHP_SELF']; ?>?name=JaleedKhan&age=25">click </a> -->

<form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name">
    </div>

    <div>
        <label for="age">Age</label>
        <input type="text" name="age">
    </div>

    <input type="submit" value="Submit" name="submit">

</form>