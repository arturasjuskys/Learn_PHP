<!DOCTYPE html>
<html>

    <body>
        <!-- PHP not dispaying HTML content -->

        <!-- ------------------------------ -->
        
        $_REQUEST:
        <!-- #Print REQUEST data here -->
        <?php print_r($_REQUEST); ?>
        <br>
        $_GET:
        <!-- #Print GET data here -->
        <?php print_r($_GET); ?>
        <br>
        $_POST:
        <!-- #Print POST data here -->
        <?php print_r($_POST); ?>
        <form method="get">
            GET Form: <input type="text" name="get_name">
            <input type="submit" value="Submit GET">
        </form>
        <form method="post">
            POST Form: <input type="text" name="post_name">
            <input type="submit" value="Submit POST">
        </form>
        <a href="index.php">Reset</a>

        <!-- ---------------------------------- -->
        
        <form method="get">
        Country:
        <input type="text" name="country">
        <br>
        Language:
        <input type="text" name="language">
        <br>
        <input type="submit" value="Submit">
        </form>
        <br>
        <p>Your language is: <?= $_GET['language'] ?><!--Add step 3 code here--></p>
        <p>Your country is: <?= $_GET['country'] ?><!--Add step 3 code here--></p>
        <a href="index.php">Reset</a>

        <!-- ------------------------------- -->

        <form method="post">
        Favorite Color:
        <input type="text" name="color">
        <br>
        Favorite Food:
        <input type="text" name="food">
        <br>
        <input type="submit" value="Submit">
        </form>
        <br>
        <p>Best food is: <?=$_POST['food'];?></p>
        <p>Best color is: <?=$_POST['color'];?></p>
        <a href="index.php">Reset</a>
        
    </body>

</html>