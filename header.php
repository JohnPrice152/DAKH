<?php
    include_once 'includes/dbh.inc.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" type="text/css" href="main.css?v=<?php echo time(); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<header>
    <nav class="container-fluid p-1 bg-dark text-white">
        <a href="index.php" class="header-logo">
            <img src="img/logo-1.png" alt="logo">
        </a>
        
        <?php
            if (isset($_SESSION['userId'])) {
                echo '<a><a href="page.php" class="text-info">Home</a></a>';
            }
            else {
                echo '';
            }
        ?>
        
        <div class="header-login">

            <?php
                if (isset($_SESSION['userId'])) {
                    echo '<form action="includes/logout.inc.php" method="POST">
                    <button class="col" type="submit" name="logout-submit">Logout</button>
                </form>';
                }
                else {
                    echo '<form action="signin.php">
                    <button type="submit">Log in</button> or 
                    <button type="submit" formaction="signup.php">Sign up</button>
                </form>';
                }
            ?>
        </div>
    </nav>
</header>

<body>

