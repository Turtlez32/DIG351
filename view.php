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

<?php generateNavigation("VIEW"); ?>

<?php 
    $id = 0;
    session_start();     

    if (isset($_POST['submit']) && (($_POST['playerID']) != "")) {
        $_SESSION['playerID'] = $_POST['playerID'];
        header("Location: " . $_SERVER['REQUEST_URI']);
        exit;
    } else {
        if (isset($_SESSION['playerID'])) {
            $id = $_SESSION['playerID'];
            unset($_SESSION['playerID']);
        }
    }
?>

<?php 
    if ($id != "") {
        GetCurrentPlayerData($id);
    } else {
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="col-md-12">
                <div class="table-responsive">
                    <form method="post">
                        PlayerID : <input type="text" name="playerID">
                        <input type="submit" name="submit" value="Find Player"/>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Gungahlin Eagles Established in 1967</p>
                </div>
            </div>
    </footer>
</div>

    <?php } ?>
</body>
</html>