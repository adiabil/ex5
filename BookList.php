<?php
    include "config.php";
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if(mysqli_connect_errno()) {
        die("DB Connection Failed:" . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
    }

?>
<?php
    $query = "SELECT * FROM tbl_13_books";
    $result = mysqli_query($connection,$query);

    if(!$result){
        die("DB Query failed.");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href = "styles.css" rel = "stylesheet"></a>
    <title>Document</title>
</head>
<body>
    
    <section class="wrapper" id="dataServices">
        <h1>Books list</h1>
        <select id="categoryDropdown" class="form-select">
            <option value="">All Categories</option>
            <option value="fantasy">fantasy</option>
            <option value="Romance">Romance</option>
        </select>
        <?php
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='book' data-category='" . $row['category'] . "'>";
        echo "<h3><a href='prod.php?bookId=" . $row['id'] . "'>" . $row['name'] . "</a></h3>";
        echo "<img src='" . $row['image1_url'] . "' alt='bookImg'>";
        echo "<img src='" . $row['image2_url'] . "' alt='bookImg'>";
        echo "<br>";
        echo "<p>Price: " . $row['price'] . "$</p>";
        echo "</div>";
    }
        ?>
    </section>
    <script src="include/booksL.js"></script>
</body>
</html>

<?php

    mysqli_close($connection);
?>