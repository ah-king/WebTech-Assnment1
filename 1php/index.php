
<?php
	require('common.php');
    
     // readz();
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
        <?php 
  
            // Words and thier frequency of appearance 
            // makeList(uneeqFreeqSansCommon());
            
           // table of said frequencies
           makeTabel(uneeqForm());
        ?>
   
    </body>
</html>
