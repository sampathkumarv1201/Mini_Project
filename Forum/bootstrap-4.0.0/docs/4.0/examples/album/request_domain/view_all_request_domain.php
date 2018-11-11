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
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <style>
            * {
            box-sizing: border-box;
            }

            #myInput {
            background-image: url("/css/searchicon.png");
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
            }

            #myTable {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
            font-size: 18px;
            }

            #myTable th, #myTable td {
            text-align: left;
            padding: 12px;
            }

            #myTable tr {
            border-bottom: 1px solid #ddd;
            }

            #myTable tr.header, #myTable tr:hover {
            background-color: #f1f1f1;
            }
            </style>
            </head>
            <body>
            <div>
            <h1><b><center onclick="history.back()">Requested Domains</center></b></h1>&nbsp;&nbsp;&nbsp;
            <form method="post" action="../community.php"> &nbsp;&nbsp;&nbsp;
            <button type="submit" class="btn btn-success" style="float: left;" >Home</button> 
            </form>
            <form method="post" action="request_domain.php">
            <button type="submit" class="btn btn-success" style="float: right;" >Request Domain</button>
            </form>
            </div>

            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Domain names.." title="Type in a name">

            <table id="myTable">
            <tr class="header">
                <th style="width:60%;">Request Domain Name</th>
                <th style="width:40%;">Description</th>
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

    <script>
    function myFunction() {
    var input, filter, table, tr, td, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
        }       
    }
    }
    </script>

    </body>
    </html>

    ';
    echo $output;