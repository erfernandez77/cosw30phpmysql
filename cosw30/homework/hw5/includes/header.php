<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Home Page</title>
        <link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Display|Rock+Salt&display=swap" rel="stylesheet">
        <style>
            #page-container {
                position: relative;
                min-height: 100vh;
            }
            #content-wrap {
                padding-bottom: 5em;    /* Footer height */
            }
            #nav ul {
               list-style-type: none;
                 margin: 1.5em 0;
                 padding: 1em 30%;
                  overflow: hidden;
                  background-color: #000;
                  color: #FE8000;
                  /*
                  border-style: solid;
                 border-width: 0 0.1em 0.1em 0.1em;
                 border-color: darkgray;*/
            }
            #nav ul .menu {
            float: right;
            }
            #navTitle {
                float: left;
                font-size: 1.5em;
                font-family: 'Rock Salt', cursive;
            }
            .menu a {
                 color: #FE8000;
            }
            #nav li a {
                display: block;
                text-align: center;
                padding: 5px 8px 5px 8px;
                text-decoration: none;
                font-family: 'Rock Salt', cursive;
            }
            #nav li menu a:hover {
                background-color: burlywood;
            }
            body {
                text-align: center;
                background-color: #EFBD76;
                font-family: 'Big Shoulders Display', cursive;
            }
            main {
                font-family: 'Big Shoulders Display', cursive;
                font-size: 1.5em;
            }
            #headingHome {
                font-family: 'Rock Salt', cursive;
            }
            #regBtn, #loginBtn {
                background-color: #000;
                color: #FE8000;
                font-size: 0.8em;
                border: none;
                padding: 0.5em;
                border-radius: 0.5em;
                font-family: 'Rock Salt', cursive;
                text-decoration: underline;
            }
            #loginBtn {
                background-color: #000;
                color: #FE8000;
                font-size: 0.6em;
                border: none;
                margin: 0.5em;
                padding-left: 1.5em;
                padding-right: 1.5em;
                border-radius: 0.5em;
                font-family: 'Rock Salt', cursive;
                text-decoration: underline;
            }
            .error {
                color: red;
                font-weight: bold;
            }
            footer {
                text-align: center;
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 3em;
                background-color: #000;
                color: #FE8000;
            }
        </style>
    </head>
    <body>
        <div id="page-container">
        <div id="content-wrap">
        <header>
            <nav id="nav">
                 <ul>
                     <li id="navTitle">Costumes R Us</li>
                     <li class="menu"><a href="register.php">Register</a></li>
                     <li class="menu"><a href="login.php">Login</a></li>
                     <li class="menu"><a href="index.php">Home</a></li>
                 </ul>
            </nav>
        </header>
        <!-- END OF HEADER -->