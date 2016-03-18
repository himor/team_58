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
        #description {
            padding-top: 25px;
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
        <a href="hillary.php" id="main-icon"><img src="images/hillary_page.png"/></a>
        <a href="trump.php" class="small-icon"><img id="donald-icon" src="images/donald_BW.png"/></a>
        <a href="bernie.php" class="small-icon"><img id="bernie-icon" src="images/bernie_BW.png"/></a>
    </div>

    <div id="main-block">
        <div id="right-block">
            <div id="head">
                <div id="title">Hillary<br/>Clinton</div>
                <div id="description">
                    Hillary is wound pretty tight. What would she say after a few white wine spritzers? You tell us.
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
            <div id="popular-title">Recently searches</div>
            <div class="popular">
            </div>
            <div id="all">
                <div class="category">
                    <div class="category-title">Verbs</div>
                    <div class="list">
                        <button type="button" class="btn btn-primary clickable">appreciate</button>
                        <button type="button" class="btn btn-primary clickable">are</button>
                        <button type="button" class="btn btn-primary clickable">aware</button>
                        <button type="button" class="btn btn-primary clickable">belongs</button>
                        <button type="button" class="btn btn-primary clickable">bring</button>
                        <button type="button" class="btn btn-primary clickable">cant</button>
                        <button type="button" class="btn btn-primary clickable">chuckle</button>
                        <button type="button" class="btn btn-primary clickable">coloring</button>
                        <button type="button" class="btn btn-primary clickable">comes</button>
                        <button type="button" class="btn btn-primary clickable">doing</button>
                        <button type="button" class="btn btn-primary clickable">faster</button>
                        <button type="button" class="btn btn-primary clickable">get</button>
                        <button type="button" class="btn btn-primary clickable">going</button>
                        <button type="button" class="btn btn-primary clickable">handle</button>
                        <button type="button" class="btn btn-primary clickable">have</button>
                        <button type="button" class="btn btn-primary clickable">hear</button>
                        <button type="button" class="btn btn-primary clickable">keep</button>
                        <button type="button" class="btn btn-primary clickable">keep up</button>
                        <button type="button" class="btn btn-primary clickable">love</button>
                        <button type="button" class="btn btn-primary clickable">make NG</button>
                        <button type="button" class="btn btn-primary clickable">making</button>
                        <button type="button" class="btn btn-primary clickable">need</button>
                        <button type="button" class="btn btn-primary clickable">needs</button>
                        <button type="button" class="btn btn-primary clickable">overcharge</button>
                        <button type="button" class="btn btn-primary clickable">paying</button>
                        <button type="button" class="btn btn-primary clickable">power</button>
                        <button type="button" class="btn btn-primary clickable">remember</button>
                        <button type="button" class="btn btn-primary clickable">share</button>
                        <button type="button" class="btn btn-primary clickable">standing</button>
                        <button type="button" class="btn btn-primary clickable">talking</button>
                        <button type="button" class="btn btn-primary clickable">thrown</button>
                        <button type="button" class="btn btn-primary clickable">up NG</button>
                    </div>
                </div>
                <div class="category">
                    <div class="category-title">Nouns</div>
                    <div class="list">
                        <button type="button" class="btn btn-primary clickable">america</button>
                        <button type="button" class="btn btn-primary clickable">attention</button>
                        <button type="button" class="btn btn-primary clickable">back</button>
                        <button type="button" class="btn btn-primary clickable">candidate</button>
                        <button type="button" class="btn btn-primary clickable">choice</button>
                        <button type="button" class="btn btn-primary clickable">corporations</button>
                        <button type="button" class="btn btn-primary clickable">country</button>
                        <button type="button" class="btn btn-primary clickable">donald trump</button>
                        <button type="button" class="btn btn-primary clickable">durg</button>
                        <button type="button" class="btn btn-primary clickable">energy</button>
                        <button type="button" class="btn btn-primary clickable">fact</button>
                        <button type="button" class="btn btn-primary clickable">first</button>
                        <button type="button" class="btn btn-primary clickable">handle</button>
                        <button type="button" class="btn btn-primary clickable">he</button>
                        <button type="button" class="btn btn-primary clickable">healthcare</button>
                        <button type="button" class="btn btn-primary clickable">hiv aids</button>
                        <button type="button" class="btn btn-primary clickable">i</button>
                        <button type="button" class="btn btn-primary clickable">im</button>
                        <button type="button" class="btn btn-primary clickable">key</button>
                        <button type="button" class="btn btn-primary clickable">kind</button>
                        <button type="button" class="btn btn-primary clickable">life</button>
                        <button type="button" class="btn btn-primary clickable">loan</button>
                        <button type="button" class="btn btn-primary clickable">love</button>
                        <button type="button" class="btn btn-primary clickable">me</button>
                        <button type="button" class="btn btn-primary clickable">middle class</button>
                        <button type="button" class="btn btn-primary clickable">my</button>
                        <button type="button" class="btn btn-primary clickable">my hair</button>
                        <button type="button" class="btn btn-primary clickable">needs</button>
                        <button type="button" class="btn btn-primary clickable">need</button>
                        <button type="button" class="btn btn-primary clickable">one</button>
                        <button type="button" class="btn btn-primary clickable">opponent</button>
                        <button type="button" class="btn btn-primary clickable">people</button>
                        <button type="button" class="btn btn-primary clickable">policy</button>
                        <button type="button" class="btn btn-primary clickable">politics</button>
                        <button type="button" class="btn btn-primary clickable">power</button>
                        <button type="button" class="btn btn-primary clickable">question</button>
                        <button type="button" class="btn btn-primary clickable">questions</button>
                        <button type="button" class="btn btn-primary clickable">responsibility</button>
                        <button type="button" class="btn btn-primary clickable">retrospect</button>
                        <button type="button" class="btn btn-primary clickable">sanders</button>
                        <button type="button" class="btn btn-primary clickable">that</button>
                        <button type="button" class="btn btn-primary clickable">time</button>
                        <button type="button" class="btn btn-primary clickable">today</button>
                        <button type="button" class="btn btn-primary clickable">trump</button>
                        <button type="button" class="btn btn-primary clickable">truth</button>
                        <button type="button" class="btn btn-primary clickable">two accounts</button>
                        <button type="button" class="btn btn-primary clickable">we</button>
                        <button type="button" class="btn btn-primary clickable">wealth</button>
                        <button type="button" class="btn btn-primary clickable">when</button>
                        <button type="button" class="btn btn-primary clickable">win</button>
                        <button type="button" class="btn btn-primary clickable">you</button>
                        <button type="button" class="btn btn-primary clickable">a mistake</button>
                        <button type="button" class="btn btn-primary clickable">challenges</button>
                        <button type="button" class="btn btn-primary clickable">marriage</button>
                        <button type="button" class="btn btn-primary clickable">questions</button>
                        <button type="button" class="btn btn-primary clickable">situation</button>
                    </div>
                </div>
                <div class="category">
                    <div class="category-title">Adjective</div>
                    <div class="list">
                        <button type="button" class="btn btn-primary clickable">a little</button>
                        <button type="button" class="btn btn-primary clickable">all</button>
                        <button type="button" class="btn btn-primary clickable">basic</button>
                        <button type="button" class="btn btn-primary clickable">better</button>
                        <button type="button" class="btn btn-primary clickable">big advantage</button>
                        <button type="button" class="btn btn-primary clickable">both</button>
                        <button type="button" class="btn btn-primary clickable">difficult</button>
                        <button type="button" class="btn btn-primary clickable">economic</button>
                        <button type="button" class="btn btn-primary clickable">first</button>
                        <button type="button" class="btn btn-primary clickable">forward</button>
                        <button type="button" class="btn btn-primary clickable">great</button>
                        <button type="button" class="btn btn-primary clickable">hard</button>
                        <button type="button" class="btn btn-primary clickable">kind</button>
                        <button type="button" class="btn btn-primary clickable">long time</button>
                        <button type="button" class="btn btn-primary clickable">middle class</button>
                        <button type="button" class="btn btn-primary clickable">more</button>
                        <button type="button" class="btn btn-primary clickable">one</button>
                        <button type="button" class="btn btn-primary clickable">personal</button>
                        <button type="button" class="btn btn-primary clickable">super</button>
                        <button type="button" class="btn btn-primary clickable">that</button>
                        <button type="button" class="btn btn-primary clickable">up NG</button>
                        <button type="button" class="btn btn-primary clickable">very</button>
                        <button type="button" class="btn btn-primary clickable">very much</button>
                        <button type="button" class="btn btn-primary clickable">youngest</button>
                        <button type="button" class="btn btn-primary clickable">difficult</button>
                        <button type="button" class="btn btn-primary clickable">past</button>
                        <button type="button" class="btn btn-primary clickable">ultimately</button>

                    </div>
                </div>
                <div class="category">
                    <div class="category-title">Adverbs</div>
                    <div class="list">
                        <button type="button" class="btn btn-primary clickable">again</button>
                        <button type="button" class="btn btn-primary clickable">always</button>
                        <button type="button" class="btn btn-primary clickable">as</button>
                        <button type="button" class="btn btn-primary clickable">back</button>
                        <button type="button" class="btn btn-primary clickable">first</button>
                        <button type="button" class="btn btn-primary clickable">forward</button>
                        <button type="button" class="btn btn-primary clickable">not</button>
                        <button type="button" class="btn btn-primary clickable">not be</button>
                        <button type="button" class="btn btn-primary clickable">really</button>
                        <button type="button" class="btn btn-primary clickable">that</button>
                        <button type="button" class="btn btn-primary clickable">today</button>
                        <button type="button" class="btn btn-primary clickable">up NG</button>
                        <button type="button" class="btn btn-primary clickable">well</button>
                        <button type="button" class="btn btn-primary clickable">when</button>
                        <button type="button" class="btn btn-primary clickable">where</button>
                    </div>
                </div>
                <div class="category">
                    <div class="category-title">Articles</div>
                    <div class="list">
                        <button type="button" class="btn btn-primary clickable">a</button>
                        <button type="button" class="btn btn-primary clickable">that</button>
                        <button type="button" class="btn btn-primary clickable">the NG</button>
                        <button type="button" class="btn btn-primary clickable">this</button>
                        <button type="button" class="btn btn-primary clickable">those</button>
                    </div>
                </div>
                <div class="category">
                    <div class="category-title">Leftovers</div>
                    <div class="list">
                        <button type="button" class="btn btn-primary clickable">I certainly</button>
                        <button type="button" class="btn btn-primary clickable">and</button>
                        <button type="button" class="btn btn-primary clickable">because</button>
                        <button type="button" class="btn btn-primary clickable">big advantage</button>
                        <button type="button" class="btn btn-primary clickable">both</button>
                        <button type="button" class="btn btn-primary clickable">for</button>
                        <button type="button" class="btn btn-primary clickable">for years</button>
                        <button type="button" class="btn btn-primary clickable">kinds</button>
                        <button type="button" class="btn btn-primary clickable">long time</button>
                        <button type="button" class="btn btn-primary clickable">low key advocacy</button>
                        <button type="button" class="btn btn-primary clickable">oh my gosh</button>
                        <button type="button" class="btn btn-primary clickable">out of business</button>
                        <button type="button" class="btn btn-primary clickable">the only</button>
                        <button type="button" class="btn btn-primary clickable">to say that</button>
                        <button type="button" class="btn btn-primary clickable">two accounts</button>
                        <button type="button" class="btn btn-primary clickable">plain and simple</button>
                        <button type="button" class="btn btn-primary clickable">very different</button>
                        <button type="button" class="btn btn-primary clickable">very dangerous</button>

                    </div>
                </div>
                <div class="category">
                    <div class="category-title">Prepositions</div>
                    <div class="list">
                        <button type="button" class="btn btn-primary clickable">as</button>
                        <button type="button" class="btn btn-primary clickable">back</button>
                        <button type="button" class="btn btn-primary clickable">to</button>
                        <button type="button" class="btn btn-primary clickable">up NG</button>
                        <button type="button" class="btn btn-primary clickable">with</button>
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
    var candidate = 'hillary';
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