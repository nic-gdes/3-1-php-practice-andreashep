<!DOCTYPE html>
<html lang="en">

<?php include('./components/head.php')
?>

<?php $page_title = "Home";
?>

<body>
    <!---include header------->
    <?php include('./components/nav.php')
    ?>

    <!---grid-items 6+title------->
    <main>
        <h1>My Favorite Things</h1>
        <div class="grid-item">
            <h3>My Family</h3>
            <img src="./assets/images/family_rbg.png" alt="My family">
        </div>

        <div class="grid-item">
            <h3>Hildegun</h3>
            <img src="./assets/images/Hilde_rgb.png" alt="my dog, hildegun">
        </div>

        <div class="grid-item">
            <h3></h3>
            <img src="./assets/images/atomic_digital_rgb.png" alt="atomic era digital design, green and copper">
        </div>

        <div class="grid-item">
            <h3></h3>
            <img src="./assets/images/music_rgb.png" alt="explosion of music notes">
        </div>

        <div class="grid-item">
            <h3></h3>
            <img src="./assets/images/Soccer_rgb.png" alt="my soccer photo in goalie gear, 1992">
        </div>

        <div class="grid-item">
            <h3></h3>
            <img src="./assets/images/book_rgb.png" alt="book with pages folded into the shape of a heart">
        </div>
    </main>


    <!---include footer------->
    <?php include('./components/footer.php')
    ?>
</body>

</html>