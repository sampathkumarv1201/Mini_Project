<?php
session_start();
//fetch_comment.php

$connect = new PDO('mysql:host=localhost;dbname=Forum', 'root', '');



$query = "
    SELECT * FROM  request_domain
    ";

    $statement = $connect->prepare($query);

    $statement->execute();

    $result = $statement->fetchAll();
    $output = '
    <!DOCTYPE html>
        <html>
        <head>
        <style>
        .grid-container {
        display: grid;
        grid-template-columns: auto auto auto;
        background-color: green;
        margin: auto;
            width: 45%;
            border: 3px solid green;
            padding: 10px;
        
        }
        .grid-item {
        background-color: rgba(255, 255, 255, 0.8);
        border: 1px solid rgba(0, 0, 0, 0.8);
        padding: 20px;
        font-size: 30px;
        text-align: center;
        }


        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        
        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        
        #customers tr:nth-child(even){background-color: #f2f2f2;}
        
        #customers tr:hover {background-color: #ddd;}
        
        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }


        </style>
        </head>
        <body bgcolor="#E6E6FA">

        <h1><center>Events</center></h1>

        <table id="customers">
        <tr>
            <th>Request Domain</th>
            <th>Description</th>
        </tr>
    ';
    foreach($result as $row)
    {
     $output .= '

        <tr>
            <td>'.$row["requestdomainname"].'</td>
            <td>'.$row["discription"].'</td>
        </tr>
    
    
    
    
    ';
     
    }
    $output.='
    
    </table>

    </body>
</html>

    ';
    echo $output;7