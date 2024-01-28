<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    echo $name . ", " . $email . ", " . $message;
}
?>

<!DOCTYPE html>
<html lang="en">

<?php
$page_title = "Contact";
include('./components/head.php');
?>

<body>
    <!---include header------->
    <?php include('./components/nav.php')
    ?>

    <!DOCTYPE html>
<html lang="en">
    <?php
    /*
    if (isset($_POST['submit'])) {
        $name = htmlspecialchars($_POST['name']);
        $email + htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
    }

    PHP.NET
    <form action="action.php" method="post">
    <label for="name">Your name:</label>
    <input name="name" id="name" type="text">

    <label for="age">Your age:</label>
    <input name="age" id="age" type="number">

    <button type="submit">Submit</button>
</form>

*/
?>
 
    <body>
        
            <form action="./contact.php" method="POST">

            <div class="input-fields">
                <label for="name">Name</label><input type="text" name="name">

                <label for="email">email</label><input type="email" name="email"  placeholder="Your email address">

                <label for="message">Your message</label><textarea name="message" id="message" aria-label="message"></textarea>

                <label for="submit">Submit</label><input type="submit" value="Send form">

            </form>
        </div>


    </body>

    </html>


    <!---w3 schools  
 <form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
    --->
    <!---include footer------->
    <?php include('./components/footer.php')
    ?>
</body>

</html>