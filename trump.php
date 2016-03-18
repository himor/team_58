<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mixer</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/team58.css" rel="stylesheet">
    <link href="http://vjs.zencdn.net/5.8.0/video-js.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        #input {
            width: 635px;
            height: 73px;
            font-size: 33px;
            border: 1px solid #707070;
            border-radius: 10px;
            margin-right: 10px;
            font-family:'Gotham Medium';
            font-style: italic;
            color: #dcdcdc;
        }
        #control-block {
            width: 850px;

        }
        #play_button {
            cursor: pointer;
            width: 152px;
            height: 73px;
            background-color: #707070;
            font-size: 25px;
            color: #fff;
            border-radius: 10px;
            text-transform: uppercase;
            background-color: #060A5B;
            border-color: #060A5B;
        }
    </style>
</head>
<body>
<div style="display:none">
    <img src="images/hillary_BW.png"/>
    <img src="images/bernie_BW.png"/>
    <img src="images/donald_BW.png"/>
    <img src="images/hillary_page.png"/>
    <img src="images/donald_page.png"/>
    <img src="images/bernie_page.png"/>
</div>
<div id="content">
    <div id="left-block">
        <a href="trump.php" id="main-icon"><img src="images/donald_page.png"/></a>
        <a href="hillary.php" class="small-icon"><img id="hillary-icon" src="images/hillary_BW.png"/></a>
        <a href="bernie.php" class="small-icon"><img id="bernie-icon" src="images/bernie_BW.png"/></a>
    </div>

    <div id="main-block">
        <div id="right-block">
            <div id="head">
                <div id="title">Donald<br/>Trump</div>
                <div id="description">
                    Famously shy, Donald Trump can be tight-lipped about his plans for the presidency. You can change that. Go ahead, make that tiny fingered idiot say something.
                </div>
            </div>
        </div>

        <div class="content-block">
            <form>
                <div id="results" class="form-group"></div>
                <div id="control-block" class="form-group form-inline">
                    <input title="Input text" placeholder="Start typing here" class="form-control" type="text" id="input">
                    <button type="button" class="btn btn-success" id="play_button" onclick="play()">play</button>
                </div>
                <div id="phrase" class="form-group"></div>
                <div class="form-group form-inline">
                    <input title="share" readonly class="form-control" type="text" id="share">
                </div>
                <br><br>
            </form>
            <div class="players">
            </div>
            <div class="popular">
            </div>
        </div>

    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script>
    var candidate = 'trump';
</script>
<script src="js/team58.js"></script>
<script src="http://vjs.zencdn.net/5.8.0/video.js"></script>
<?php
if (isset($_GET['share'])) {
    ?>
    <script>
        load(<?php echo "\"" . $_GET['share'] . "\""; ?>);
    </script>
    <?php
}
?>

</body>
</html>