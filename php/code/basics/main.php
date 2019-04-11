<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Table</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        table, td, th{
            border: solid 1px black;
        }
        th{
            background-color: #999999;
            color:white;
        }
        td, th{
            padding:15px;
        }
    </style>
</head>
<body>
    <table>
        <?php 
            $maxNum = 9;
            for ($i=1; $i <= $maxNum; $i++) { 
                echo "<tr>";
                for ($j=1; $j <= $maxNum; $j++) { 
                    $product = $i*$j;
                    if($i == 1 || $j == 1){
                        echo "<th>$product</th>";
                    }else{
                        echo "<td>$product</td>";
                    }
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>