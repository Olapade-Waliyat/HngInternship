<htm></<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<style type="text/css">
    #wrapper{
        position: absolute;
        width: 398px;
        height: 169px;
        left: 47px;
        top: 80px;
        background: #EF4CF2;
        text-align: center;
    }
</style>
<body>
    <div id="wrapper">
        <h3><em>HNG Internship Time Display</em></h3>
        <h3><em>The time says 
            <?php 
        echo date('l jS \of F Y h:i:s A'); 
        ?>
        </em></h3>
        <h3><em>Time wait for no man </em></h3>
    </div>
</body>
</html>