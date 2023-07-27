<!DOCTYPE html>
<html>
<head>
    <title>My blog</title>
    <meta charset="utf-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="icon" href="img/favicon1.ico">  
    <link rel="stylesheet" href="font/css/fontello.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ysabeau+Infant:ital,wght@0,400;0,600;0,900;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">

</head>
<body>

    <div class="container">

        <header>
        <div class="top"> <img class="top-image"  src="img/top-image.jpg"  alt="top image">
            <h1>* My blog *</h1></div>
        </header>

        <nav>
            <ul class="nav">
                <li class="nav-item"><button type="button" class="btn btn-outline-info"><a class="nav-link" href="/">Home</a></button></li>

                <?php if (Auth::isLoggedIn()) : ?>
                    
                    <li class="nav-item"><button type="button" class="btn btn-outline-info"><a class="nav-link" href="/admin/">Admin</a></button></li>
                    <li class="nav-item"><button type="button" class="btn btn-outline-info"><a class="nav-link" href="/logout.php">Log out</a></button></li>

                <?php else : ?>
                    
                    <li class="nav-item"><button type="button" class="btn btn-outline-info"><a class="nav-link" href="/login.php">Log in</a></button></li>

                <?php endif; ?>

                <li class="nav-item"><button type="button" class="btn btn-outline-info"><a class="nav-link" href="/contact.php">Contact</a></button></li>
            </ul>
        </nav>

        <main>
