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

    <title>Starlight Clan Free Company Roster</title>
</head>

<body>
    <div class="container-fluid">
        <?php include('topbar.php') ?>
        <h1 class="center display-1">Free Company Roster</h1>
        <div class="row">
        <div class="col-12 col-lg-4">
        <h2 class="center display-4">The Leader</h2>
        <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Rank</th>
            </tr>
            </thead><tbody>
        <?php
            $response = file_get_contents('https://xivapi.com/freecompany/9228579323924009502?data=FCM');
//            echo($response);
            $response = json_decode($response);
            foreach($response->FreeCompanyMembers as $value) {
                if ($value->Rank == "Leader" or $value->Rank == "Leader Alt") {
                    echo("<tr><td><img src=\"$value->Avatar\"></td><td>$value->Name</td><td>$value->Rank</td></tr>");
                }
            }
        ?>
        </tbody>
        </table>
        </div>
        <div class="col-12 col-lg-4">
        <h2 class="center display-4">The Council</h2>
        <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Rank</th>
            </tr>
            </thead><tbody>
        <?php
            $response = file_get_contents('https://xivapi.com/freecompany/9228579323924009502?data=FCM');
//            echo($response);
            $response = json_decode($response);
            foreach($response->FreeCompanyMembers as $value) {
                if ($value->Rank == "Starlit Council" or $value->Rank == "Council Alt") {
                    echo("<tr><td><img src=\"$value->Avatar\"></td><td>$value->Name</td><td>$value->Rank</td></tr>");
                }
            }
        ?>
        </tbody>
        </table>
        </div>
        <div class="col-12 col-lg-4">
        <h2 class="center display-4">The Starlit</h2>
        <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Rank</th>
            </tr>
            </thead><tbody>
        <?php
            $response = file_get_contents('https://xivapi.com/freecompany/9228579323924009502?data=FCM');
//            echo($response);
            $response = json_decode($response);
            foreach($response->FreeCompanyMembers as $value) {
                if ($value->Rank == "Starlit" or $value->Rank == "Starlit Alt" or $value->Rank == "Newly Starlit") {
                    echo("<tr><td><img src=\"$value->Avatar\"></td><td>$value->Name</td><td>$value->Rank</td></tr>");
                }
            }
        ?>
        </tbody>
        </table>
        </div>
        </div>
        <h2 class="center display-4">The Inactive</h2>
        <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Rank</th>
            </tr>
            </thead><tbody>
        <?php
            $response = file_get_contents('https://xivapi.com/freecompany/9228579323924009502?data=FCM');
//            echo($response);
            $response = json_decode($response);
            foreach($response->FreeCompanyMembers as $value) {
                if ($value->Rank == "Inactive") {
                    echo("<tr><td><img src=\"$value->Avatar\"></td><td>$value->Name</td><td>$value->Rank</td></tr>");
                }
            }
        ?>
        </tbody>
        </table>
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