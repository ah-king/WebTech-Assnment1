
<?php
	require('common.php');
    
    //   readz();
?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
        <title><?php echo $mySiteName; ?></title>
		
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <h1>Assignment ONE</h1>
        
        <?php 
        
        $wordList = uneeq_freeq_sans_common();
        # Words and thier frequency of appearance
        // make_list(uneeq_freeq());
        
        # table of said frequencies
        echo "<h2> Word List and Frequency</h2>";
        make_table($wordList);
        echo "<br> <br>";
        
        #Upload to databse
        // db_setup();

        # calculate the median of the words
        // $da_median = fnd_median($wordList);
        echo "The median vaule is... ";
        // $meddy = calculateMedian($wordList);
        // print_r($meddy); 
        echo "<br> <br>";
        echo "The mode vaule is... ";   
        calc_mode($wordList);



            
        ?>
   
    </body>
</html>
