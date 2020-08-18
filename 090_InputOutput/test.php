<?php
    function cobra($a , $b){
        return $b - $a;
    }
    $scoreList = array(100,98,50,30,70,88,91,95);
    usort($scoreList, "cobra");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .fail{
            color: red;
        }
        .pass{
            color: purple;
        }
    </style>
</head>
<body>
    
    <ul>
        
        <?php foreach($scoreList as $score){ ?>
            <?php if ($score >= 60){?>
                <li class = "pass"><?= $score ?></li>
            <?php } else{  ?>
                <li class = "fail"><?= $score?></li>
        <?php }} ?>
    </ul>
    <hr>
    <ul>
        <?php foreach($scoreList as $score){ ?>
            <li class = "<?= (($score < 60 ) ? "fail" : "pass") ?>">
                <?= $score; ?>
            </li>
            
        <?php } ?>
    </ul>

</body>
</html>