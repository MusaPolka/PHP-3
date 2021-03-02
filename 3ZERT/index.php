<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 5;
        $b = 3;
        if($a > 2 && $a < 11 || $b > 6 || $b < 14){
            echo "True" . "<br>";
        }
        else echo "False" . "<br>";

        $month = 6;

        switch($month){
            case 1:
                echo "Қыс";
                break;
            case 2:
                echo "Қыс";
                break;
            case 3:
                echo "Көктем";
                break;
            case 4:
                echo "Көктем";
                break;
            case 5:
                echo "Көктем";
                break;
            case 6:
                echo "Жаз";
                break;
            case 7:
                echo "Жаз";
                break;
            case 8:
                echo "Жаз";
                break;
            case 9:
                echo "Күз";
                break;
            case 10:
                echo "Күз";
                break;
            case 11:
                echo "Күз";
                break;
            case 12:
                echo "Қыс";
                break;
        }
    ?>
</body>
</html>