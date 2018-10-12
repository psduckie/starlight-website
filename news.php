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
        <?php include('topbar.php') ?>
        <h1 class="center display-1">News</h1>
        <?php
            try {
                $link = new \PDO("mysql:host=162.241.218.136;dbname=psduckie_starlight;charset=utf8mb4", "psduckie_strlt", "2d/sX;pVf:$*H?K&fxq4B<}U'mg}cU@m[Rr", array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION, \PDO::ATTR_PERSISTENT => false));
                
                $handle = $link->prepare("SELECT title, newsDate, author, article FROM news ORDER BY newsDate DESC");

                $handle->execute();

                $result = $handle->fetchAll(\PDO::FETCH_OBJ);

                foreach($result as $row) {
                    print("<div class=\"newsarticle\"><h3 class=\"bolder\">");
                    print($row->title);
                    print("</h3><br><h5 class=\"italic\">Written on ");
                    print($row->newsDate);
                    print(" by ");
                    print($row->author);
                    print("</h5><br>");
                    print($row->article);
                    print("</div>");
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