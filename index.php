<?php
    include_once("config.php");
    
    $id = $_GET['id'];

    $to = "";
    $from = "";
    if (array_key_exists($id, $recipients)) {
        $to = $recipients[$id]["To"];
        $from = $recipients[$id]["From"];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <title>2020</title>
        <style>
            html {
                padding: 0;
            }
            body {
                background-color: #000000;
                color: #EEE;
                padding: 0;
                margin: 0;
                font-family: 'Times New Roman', Times, serif;
                font-style: italic;
                text-align: center;
            }
            #cerdyn {
                background-color: rgb(45, 35, 35);
                margin: 1em;
                margin-left: auto;
                margin-right: auto;
                display: block;
                width: 90%;
                height: 90%;
                padding: 0;
                max-width: 800px;
            }
            #snowflake {
                font-style: normal;
            }
        </style>
    </head>
    <body>
        <h1><span lang="cy">Nadolig Llawen</span><br /><span id="snowflake">❄</span><br /><span lang="en">Merry Christmas</span></h1>
        <img id="cerdyn" src="img/Cerdyn_Nadolig_2020_gwe.svg" />
        <p><span lang="cy">I</span> / <span lang="en">To</span></p>
        <p><?=$to ?></p>
        <p><span lang="cy">Oddiwth</span> / <span lang="en">From</span></p>
        <p><?=$from ?></p>
    </body>
</html>