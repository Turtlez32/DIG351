<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<?php include_once 'functions.php'; ?>
<?php generateNavigation("INDEX"); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table">
                    <thead>
                        <tr>
                            <th>Player ID</th>
                            <th>Player Name</th>
                            <th>Position</th>
                            <th>Games Played</th>
                            <th>Player Image</th>
                            <th>Player Profile</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php GetAllPlayerData(); ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <p>Gungahlin Eagles Established in 1967</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>