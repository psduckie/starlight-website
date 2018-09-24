<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

    <!-- Custom styles-->
    <link rel="stylesheet" href="styles/styles.css">

    <title>Starlight Clan News</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1">
                <a href="index.html"><img src="images/emblem.png" class="center"></a>
            </div>
            <div class="col-lg-1">
                <a href="news.php">
                    <nav>News</nav>
                </a>
            </div>
            <div class="col-lg-1">
                <nav>Roster</nav>
            </div>
            <div class="col-lg-1">
                <nav>Forums</nav>
            </div>
            <div class="col-lg-1">
                <nav>Calendar</nav>
            </div>
            <div class="col-lg-1">
                <nav>Raiding</nav>
            </div>
            <div class="col-lg-1">
                <nav>Contact</nav>
            </div>
        </div>
        <h1 class="center bolder">Welcome to the Starlight website!</h1>
        <img src="images/emblem.png" class="center">
        <h2 class="center">This page is currently under construction.</h2>
        <?php
            try {
                $link = new \PDO("mysql:host=162.241.218.136;dbname=psduckie_starlight;charset=utf8mb4", "psduckie_strlt", "2d/sX;pVf:$*H?K&fxq4B<}U'mg}cU@m[Rr", array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION, \PDO::ATTR_PERSISTENT => false));
                
                $handle = $link->prepare("SELECT title, newsDate, author, article FROM news");

                $handle->execute();

                $result = $handle->fetchAll(\PDO::FETCH_OBJ);

                foreach($result as $row) {
                    print($row->article);
                }
            }
            catch(\PDOException $ex) {
                print($ex->getMessage());
            }
        ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>