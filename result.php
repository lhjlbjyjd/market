<?php
require_once 'include/database.php';
require_once 'include/functions.php';
require_once 'search.php'
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />

    <title>Results</title>

    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="Bootstrap/css/bootstrap.css" rel="stylesheet">


    <script src="js/jquery.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/jquery.tipsy.js"></script>
    <script src="js/template.js"></script>


</head>
<body>
<div class="wrapper">
    <div class="headmenu">
        <a href="#" class="logotype">Test Search!</a>
        <div class="menus">
            <ul>
                <li><a href="#">About this site</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-md-8" style="padding-bottom: 10px;">
                <div id="custom-search-input">
                    <div class="input-group col-md-12">
                        <form class="form-wrapper" action="result.php" name="search" method="get" >
                            <input type="text" name="query" class="form-control input-lg" placeholder="Поиск" value="<?=$_GET['query']?>" required=""/>
                            <span class="input-group-btn">
                                <button class="btn btn-info btn-lg" type="submit">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
            <?php
            $result = search();

            for($i=0; $i<mysqli_num_rows($result); $i++){
                $product=mysqli_fetch_assoc($result);    ?>



                <div class="col-md-8">
                    <div class="panel panel-default  panel--styled">
                        <div class="panel-body">
                            <div class="col-md-12 panelTop">
                                <div class="col-md-4">
                                    <img class="img-responsive" src="http://placehold.it/350x350" alt=""/>
                                </div>
                                <div class="col-md-8">
                                    <h2><?=$product['model']?></h2>
                                    <h3><?=$product['type']?>  </h3>
                                    <p><?=$product['manufacturer']?></p>
                                    <p>Процессор:
                                        <? $array = json_decode($product['specs'], true);
                                        echo $array['CPU']; ?>
                                    </p>
                                    <p>Объём ОЗУ:
                                        <? $array = json_decode($product['specs'], true);
                                        echo $array['RAM']; ?>
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-12 panelBottom">
                                <div class="col-md-4 text-left">
                                    <h5>Цена: <span class="itemPrice"><?=get_price($product['price'])?></span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="Bootstrap/js/bootstrap.js"></script>
</body>
</html>