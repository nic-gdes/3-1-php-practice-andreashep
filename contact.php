<?php
if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST(['name']));
    $email = htmlspecialchars($_POST(['email']));
    $message = htmlspecialchars($_POST(['message']));

    echo $name . ", " . $email . ", " . $message;
}
?>

<!DOCTYPE html>
<html lang="en">

<!---------page title------->
<?php
$page_title = "Contact";
include('./components/head.php');
?>

<!---------body------->
<body>

    <!---include header------->
    <?php include('./components/nav.php')
    ?>

<h1>Contact Us!</h1>

<!---------contact form------->
 
<form action="./contact.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <br>

    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" required>

    <br>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="6" required></textarea>

    <br>

    <input type="submit" value="Submit">
</form>

    <!---include footer------->
    <?php include('./components/footer.php')
    ?>
</body>

</html>