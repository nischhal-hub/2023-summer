
<html>

<head>
    <title> Gwitter </title>
    <link rel="stylesheet" type="text/css" href="../styles/root.css">
</head>

<body>
    <header>
        <nav>
            <div class="nav-left">
            Welcome to <a href="../index.php">Gwitter</a>
            <?php echo " ".$_SESSION["username"]; ?>
            </div>
               <div>
                <ul>
                <li>
                    <a href="../pages/home.php">Home</a>
                </li>
                <li>
                    <a href="../pages/profile.php">Profile</a>
                </li>
                <li>
                    <a href="../utils/logout.php">Logout</a>
                </li>
            </ul>
               </div>
            
        </nav>
    </header>