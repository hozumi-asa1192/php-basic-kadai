<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
        
       $nums = '';
        
        function sort_2way($array,$order){

             $nums = [15,4,18,23,10];

           if($order === true) {
            echo '昇順にソートします。<br>';
             sort($nums);
        foreach ($nums as $val) {
            echo $val."<br>";}
           }
           else
           {
            echo '降順にソートします。<br>';
            rsort($nums);
        foreach ($nums as $val) {
            echo $val."<br>";}
         } 
         }

         sort_2way($nums,true);
         sort_2way($nums,false);
        ?>
    </p>
</body>
</html>