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
            color: #000;
        }
        #input:focus {
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
            <div id="all">
                <div class="category">
                    <div class="category-title">Verbs</div>
                    <div class="list">
                        <button type="button" class="btn btn-primary clickable">be</button>
                        <button type="button" class="btn btn-primary clickable">became</button>
                        <button type="button" class="btn btn-primary clickable">bothers</button>
                        <button type="button" class="btn btn-primary clickable">calling</button>
                        <button type="button" class="btn btn-primary clickable">came</button>
                        <button type="button" class="btn btn-primary clickable">cant</button>
                        <button type="button" class="btn btn-primary clickable">control 1</button>
                        <button type="button" class="btn btn-primary clickable">dealing</button>
                        <button type="button" class="btn btn-primary clickable">decided</button>
                        <button type="button" class="btn btn-primary clickable">do</button>
                        <button type="button" class="btn btn-primary clickable">doing</button>
                        <button type="button" class="btn btn-primary clickable">dont</button>
                        <button type="button" class="btn btn-primary clickable">entering</button>
                        <button type="button" class="btn btn-primary clickable">fighting</button>
                        <button type="button" class="btn btn-primary clickable">gave</button>
                        <button type="button" class="btn btn-primary clickable">going</button>
                        <button type="button" class="btn btn-primary clickable">gonna be</button>
                        <button type="button" class="btn btn-primary clickable">got</button>
                        <button type="button" class="btn btn-primary clickable">guess</button>
                        <button type="button" class="btn btn-primary clickable">happened</button>
                        <button type="button" class="btn btn-primary clickable">happens</button>
                        <button type="button" class="btn btn-primary clickable">harassed</button>
                        <button type="button" class="btn btn-primary clickable">have</button>
                        <button type="button" class="btn btn-primary clickable">i am</button>
                        <button type="button" class="btn btn-primary clickable">i want to</button>
                        <button type="button" class="btn btn-primary clickable">im</button>
                        <button type="button" class="btn btn-primary clickable">is</button>
                        <button type="button" class="btn btn-primary clickable">joking</button>
                        <button type="button" class="btn btn-primary clickable">know</button>
                        <button type="button" class="btn btn-primary clickable">laughed</button>
                        <button type="button" class="btn btn-primary clickable">leave</button>
                        <button type="button" class="btn btn-primary clickable">left</button>
                        <button type="button" class="btn btn-primary clickable">lost</button>
                        <button type="button" class="btn btn-primary clickable">love</button>
                        <button type="button" class="btn btn-primary clickable">make</button>
                        <button type="button" class="btn btn-primary clickable">making</button>
                        <button type="button" class="btn btn-primary clickable">need</button>
                        <button type="button" class="btn btn-primary clickable">lost</button>
                        <button type="button" class="btn btn-primary clickable">lost</button>
                    </div>
                </div>
                <div class="category">
                    <div class="category-title">Nouns</div>
                    <div class="list">
                        <button type="button" class="btn btn-primary clickable">bernie</button>
                        <button type="button" class="btn btn-primary clickable">blowout</button>
                        <button type="button" class="btn btn-primary clickable">businessman</button>
                        <button type="button" class="btn btn-primary clickable">campaign</button>
                        <button type="button" class="btn btn-primary clickable">cards</button>
                        <button type="button" class="btn btn-primary clickable">companies</button>
                        <button type="button" class="btn btn-primary clickable">control 1</button>
                        <button type="button" class="btn btn-primary clickable">control</button>
                        <button type="button" class="btn btn-primary clickable">convention</button>
                        <button type="button" class="btn btn-primary clickable">country</button>
                        <button type="button" class="btn btn-primary clickable">daughter</button>
                        <button type="button" class="btn btn-primary clickable">daughters</button>
                        <button type="button" class="btn btn-primary clickable">day</button>
                        <button type="button" class="btn btn-primary clickable">deals</button>
                        <button type="button" class="btn btn-primary clickable">deficits</button>
                        <button type="button" class="btn btn-primary clickable">delegate</button>
                    </div>
                </div>

                <div class="category">
                    <div class="category-title">Adjectives</div>
                    <div class="list">
                        <button type="button" class="btn btn-primary clickable">abd</button>
                        <button type="button" class="btn btn-primary clickable">better</button>
                        <button type="button" class="btn btn-primary clickable">big</button>
                        <button type="button" class="btn btn-primary clickable">close_1</button>
                        <button type="button" class="btn btn-primary clickable">close</button>
                        <button type="button" class="btn btn-primary clickable">controled</button>
                        <button type="button" class="btn btn-primary clickable">crazy</button>
                        <button type="button" class="btn btn-primary clickable">cute</button>
                        <button type="button" class="btn btn-primary clickable">even</button>
                        <button type="button" class="btn btn-primary clickable">fair</button>
                        <button type="button" class="btn btn-primary clickable">far</button>
                        <button type="button" class="btn btn-primary clickable">favorite</button>
                        <button type="button" class="btn btn-primary clickable">good</button>
                        <button type="button" class="btn btn-primary clickable">great</button>
                        <button type="button" class="btn btn-primary clickable">its</button>
                        <button type="button" class="btn btn-primary clickable">less</button>
                    </div>
                </div>

                <div class="category">
                    <div class="category-title">Leftovers</div>
                    <div class="list">
                        <button type="button" class="btn btn-primary clickable">a beatuful young woman</button>
                        <button type="button" class="btn btn-primary clickable">by the way</button>
                        <button type="button" class="btn btn-primary clickable">cracked up</button>
                        <button type="button" class="btn btn-primary clickable">etc</button>
                        <button type="button" class="btn btn-primary clickable">ever</button>
                        <button type="button" class="btn btn-primary clickable">hes</button>
                        <button type="button" class="btn btn-primary clickable">little while ago</button>
                        <button type="button" class="btn btn-primary clickable">no_problem</button>
                        <button type="button" class="btn btn-primary clickable">nobodys</button>
                        <button type="button" class="btn btn-primary clickable">so beautiful</button>
                        <button type="button" class="btn btn-primary clickable">so i sad</button>
                        <button type="button" class="btn btn-primary clickable">thats</button>
                        <button type="button" class="btn btn-primary clickable">theyre</button>
                        <button type="button" class="btn btn-primary clickable">thousands and thousands</button>
                        <button type="button" class="btn btn-primary clickable">uh</button>
                        <button type="button" class="btn btn-primary clickable">well</button>
                    </div>
                </div>
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