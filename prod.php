<?php
    include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href = "css/styles.css" rel = "stylesheet"></a>
</head>
<body>
    <section class = "wrapper">
        <h1>Book Page</h1>
       <?php
        echo "<h2>" . $row['name'] . "</h2>";
        echo "<img src = '" .$row['image1_url'] . "' alt=bookimg>";
        echo "<img src = '" . $row['image2_url'] . "' alt =bookImg>";
        echo "<p>Price =" . $row['price'] . "$</p>";
        echo '<h6>Category: <label id="bookCat"></label></h6>';
        ?>
      
    </section>

    <?php
        if($result) mysqli_free_result($result);
    ?>
    <script src="include/prods.js"></script>
</body>
</html>

<?php
    mysqli_close($connection);
?>
