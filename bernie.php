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
        .small-icon {
            margin: 10px 65px 25px 85px !important;
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
        <a href="bernie.php" id="main-icon"><img src="images/bernie_page.png"/></a>
        <a href="hillary.php" class="small-icon"><img id="hillary-icon" src="images/hillary_BW.png"/></a>
        <a href="trump.php" class="small-icon"><img id="donald-icon" src="images/donald_BW.png"/></a>
    </div>

    <div id="main-block">
        <div id="right-block">
            <div id="head">
                <div id="title">Bernie<br/>Sanders</div>
                <div id="description">
                    Crazy Jewish grandpa Bernie only talks about two things: Wall Street and Flint Michigan. How about you make Bubbee say literally anything else?
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
            <div id="popular-title">Recent searches</div>
            <div class="popular">
            </div>
            <div id="all">
                <div class="category">
                    <div class="category-title">Verbs</div>
                    <div class="list">
                        <button type="button" class="btn btn-primary clickable">be</button>
                        <button type="button" class="btn btn-primary clickable">born</button>
                        <button type="button" class="btn btn-primary clickable">called</button>
                        <button type="button" class="btn btn-primary clickable">cannot</button>
                        <button type="button" class="btn btn-primary clickable">cause</button>
                        <button type="button" class="btn btn-primary clickable">come</button>
                        <button type="button" class="btn btn-primary clickable">cutting</button>
                        <button type="button" class="btn btn-primary clickable">decimated</button>
                        <button type="button" class="btn btn-primary clickable">do</button>
                        <button type="button" class="btn btn-primary clickable">do</button>
                        <button type="button" class="btn btn-primary clickable">establish</button>
                        <button type="button" class="btn btn-primary clickable">expand</button>
                        <button type="button" class="btn btn-primary clickable">fail</button>
                        <button type="button" class="btn btn-primary clickable">focused</button>
                        <button type="button" class="btn btn-primary clickable">free</button>
                        <button type="button" class="btn btn-primary clickable">going</button>
                        <button type="button" class="btn btn-primary clickable">got</button>
                        <button type="button" class="btn btn-primary clickable">have</button>
                        <button type="button" class="btn btn-primary clickable">hurting</button>
                        <button type="button" class="btn btn-primary clickable">killed</button>
                        <button type="button" class="btn btn-primary clickable">knows</button>
                        <button type="button" class="btn btn-primary clickable">like</button>
                        <button type="button" class="btn btn-primary clickable">look</button>
                        <button type="button" class="btn btn-primary clickable">lying</button>
                        <button type="button" class="btn btn-primary clickable">meeting</button>
                        <button type="button" class="btn btn-primary clickable">need</button>
                        <button type="button" class="btn btn-primary clickable">pleasure</button>
                        <button type="button" class="btn btn-primary clickable">say NG</button>
                        <button type="button" class="btn btn-primary clickable">schlong</button>
                        <button type="button" class="btn btn-primary clickable">stop</button>
                        <button type="button" class="btn btn-primary clickable">talk</button>
                        <button type="button" class="btn btn-primary clickable">trump</button>
                        <button type="button" class="btn btn-primary clickable">trumps</button>
                        <button type="button" class="btn btn-primary clickable">understand</button>
                        <button type="button" class="btn btn-primary clickable">vote</button>
                        <button type="button" class="btn btn-primary clickable">wage</button>
                        <button type="button" class="btn btn-primary clickable">will NG</button>
                        <button type="button" class="btn btn-primary clickable">frighten</button>
                        <button type="button" class="btn btn-primary clickable">laugh</button>
                        <button type="button" class="btn btn-primary clickable">rejected</button>

                    </div>
                </div>
                <div class="category">
                    <div class="category-title">Nouns</div>
                    <div class="list">
                        <button type="button" class="btn btn-primary clickable">a communist</button>
                        <button type="button" class="btn btn-primary clickable">a lie</button>
                        <button type="button" class="btn btn-primary clickable">america</button>
                        <button type="button" class="btn btn-primary clickable">anything</button>
                        <button type="button" class="btn btn-primary clickable">athlete</button>
                        <button type="button" class="btn btn-primary clickable">bank</button>
                        <button type="button" class="btn btn-primary clickable">bar</button>
                        <button type="button" class="btn btn-primary clickable">basketball</button>
                        <button type="button" class="btn btn-primary clickable">bathroom</button>
                        <button type="button" class="btn btn-primary clickable">ben and jerry</button>
                        <button type="button" class="btn btn-primary clickable">benefit</button>
                        <button type="button" class="btn btn-primary clickable">brooklyn</button>
                        <button type="button" class="btn btn-primary clickable">benefit</button>
                        <button type="button" class="btn btn-primary clickable">campaign</button>
                        <button type="button" class="btn btn-primary clickable">chicken</button>
                        <button type="button" class="btn btn-primary clickable">colleges</button>
                        <button type="button" class="btn btn-primary clickable">deal</button>
                        <button type="button" class="btn btn-primary clickable">egg</button>
                        <button type="button" class="btn btn-primary clickable">end</button>
                        <button type="button" class="btn btn-primary clickable">enemies</button>
                        <button type="button" class="btn btn-primary clickable">everybody</button>
                        <button type="button" class="btn btn-primary clickable">everything</button>
                        <button type="button" class="btn btn-primary clickable">expression</button>
                        <button type="button" class="btn btn-primary clickable">healthcare</button>
                        <button type="button" class="btn btn-primary clickable">his</button>
                        <button type="button" class="btn btn-primary clickable">i</button>
                        <button type="button" class="btn btn-primary clickable">issues</button>
                        <button type="button" class="btn btn-primary clickable">jobs</button>
                        <button type="button" class="btn btn-primary clickable">kids</button>
                        <button type="button" class="btn btn-primary clickable">latinos</button>
                        <button type="button" class="btn btn-primary clickable">life</button>
                        <button type="button" class="btn btn-primary clickable">man</button>
                        <button type="button" class="btn btn-primary clickable">me</button>
                        <button type="button" class="btn btn-primary clickable">meeting</button>
                        <button type="button" class="btn btn-primary clickable">millions</button>
                        <button type="button" class="btn btn-primary clickable">mine</button>
                        <button type="button" class="btn btn-primary clickable">moms</button>
                        <button type="button" class="btn btn-primary clickable">money</button>
                        <button type="button" class="btn btn-primary clickable">my</button>
                        <button type="button" class="btn btn-primary clickable">nothing</button>
                        <button type="button" class="btn btn-primary clickable">organization</button>
                        <button type="button" class="btn btn-primary clickable">our</button>
                        <button type="button" class="btn btn-primary clickable">people</button>
                        <button type="button" class="btn btn-primary clickable">player</button>
                        <button type="button" class="btn btn-primary clickable">pleasure</button>
                        <button type="button" class="btn btn-primary clickable">president</button>
                        <button type="button" class="btn btn-primary clickable">problems</button>
                        <button type="button" class="btn btn-primary clickable">racism</button>
                        <button type="button" class="btn btn-primary clickable">social security</button>
                        <button type="button" class="btn btn-primary clickable">some</button>
                        <button type="button" class="btn btn-primary clickable">somebody</button>
                        <button type="button" class="btn btn-primary clickable">stop</button>
                        <button type="button" class="btn btn-primary clickable">supporters</button>
                        <button type="button" class="btn btn-primary clickable">that</button>
                        <button type="button" class="btn btn-primary clickable">thats</button>
                        <button type="button" class="btn btn-primary clickable">the establishment</button>
                        <button type="button" class="btn btn-primary clickable">them</button>
                        <button type="button" class="btn btn-primary clickable">this</button>
                        <button type="button" class="btn btn-primary clickable">those</button>
                        <button type="button" class="btn btn-primary clickable">thousands</button>
                        <button type="button" class="btn btn-primary clickable">trump</button>
                        <button type="button" class="btn btn-primary clickable">trumps</button>
                        <button type="button" class="btn btn-primary clickable">tuition</button>
                        <button type="button" class="btn btn-primary clickable">vote</button>
                        <button type="button" class="btn btn-primary clickable">voting</button>
                        <button type="button" class="btn btn-primary clickable">wage</button>
                        <button type="button" class="btn btn-primary clickable">we</button>
                        <button type="button" class="btn btn-primary clickable">wealth</button>
                        <button type="button" class="btn btn-primary clickable">well</button>
                        <button type="button" class="btn btn-primary clickable">white people</button>
                        <button type="button" class="btn btn-primary clickable">who</button>
                        <button type="button" class="btn btn-primary clickable">will NG</button>
                        <button type="button" class="btn btn-primary clickable">women</button>
                        <button type="button" class="btn btn-primary clickable">workers</button>
                        <button type="button" class="btn btn-primary clickable">billionaire</button>
                        <button type="button" class="btn btn-primary clickable">the money</button>

                    </div>
                </div>
                <div class="category">
                    <div class="category-title">Adjectives</div>
                    <div class="list">
                        <button type="button" class="btn btn-primary clickable">angry</button>
                        <button type="button" class="btn btn-primary clickable">better</button>
                        <button type="button" class="btn btn-primary clickable">big</button>
                        <button type="button" class="btn btn-primary clickable">confused</button>
                        <button type="button" class="btn btn-primary clickable">disrupting</button>
                        <button type="button" class="btn btn-primary clickable">dumb</button>
                        <button type="button" class="btn btn-primary clickable">elementary</button>
                        <button type="button" class="btn btn-primary clickable">free</button>
                        <button type="button" class="btn btn-primary clickable">good</button>
                        <button type="button" class="btn btn-primary clickable">great</button>
                        <button type="button" class="btn btn-primary clickable">massive</button>
                        <button type="button" class="btn btn-primary clickable">mine</button>
                        <button type="button" class="btn btn-primary clickable">must</button>
                        <button type="button" class="btn btn-primary clickable">real</button>
                        <button type="button" class="btn btn-primary clickable">single</button>
                        <button type="button" class="btn btn-primary clickable">up</button>
                        <button type="button" class="btn btn-primary clickable">very</button>
                        <button type="button" class="btn btn-primary clickable">pretty</button>
                        <button type="button" class="btn btn-primary clickable">unlimited</button>
                    </div>
                </div>
                <div class="category">
                    <div class="category-title">Adverbs</div>
                    <div class="list">
                        <button type="button" class="btn btn-primary clickable">absolutely</button>
                        <button type="button" class="btn btn-primary clickable">almost</button>
                        <button type="button" class="btn btn-primary clickable">badly</button>
                        <button type="button" class="btn btn-primary clickable">certainly</button>
                        <button type="button" class="btn btn-primary clickable">instead</button>
                        <button type="button" class="btn btn-primary clickable">some</button>
                        <button type="button" class="btn btn-primary clickable">hopefully</button>
                    </div>
                </div>
                <div class="category">
                    <div class="category-title">Leftovers</div>
                    <div class="list">
                        <button type="button" class="btn btn-primary clickable">actually dances</button>
                        <button type="button" class="btn btn-primary clickable">and</button>
                        <button type="button" class="btn btn-primary clickable">and more</button>
                        <button type="button" class="btn btn-primary clickable">as i understand it</button>
                        <button type="button" class="btn btn-primary clickable">because</button>
                        <button type="button" class="btn btn-primary clickable">but</button>
                        <button type="button" class="btn btn-primary clickable">democratic socialism</button>
                        <button type="button" class="btn btn-primary clickable">five million bucks</button>
                        <button type="button" class="btn btn-primary clickable">good news</button>
                        <button type="button" class="btn btn-primary clickable">hows that</button>
                        <button type="button" class="btn btn-primary clickable">i am</button>
                        <button type="button" class="btn btn-primary clickable">i think</button>
                        <button type="button" class="btn btn-primary clickable">if</button>
                        <button type="button" class="btn btn-primary clickable">in</button>
                        <button type="button" class="btn btn-primary clickable">is</button>
                        <button type="button" class="btn btn-primary clickable">its</button>
                        <button type="button" class="btn btn-primary clickable">on fleed</button>
                        <button type="button" class="btn btn-primary clickable">proud of it</button>
                        <button type="button" class="btn btn-primary clickable">that is it</button>
                        <button type="button" class="btn btn-primary clickable">theyre</button>
                        <button type="button" class="btn btn-primary clickable">top 1 10th of 1 percent</button>
                        <button type="button" class="btn btn-primary clickable">um</button>
                        <button type="button" class="btn btn-primary clickable">wasnt</button>
                        <button type="button" class="btn btn-primary clickable">we are</button>
                        <button type="button" class="btn btn-primary clickable">were gonna</button>
                        <button type="button" class="btn btn-primary clickable">were there</button>
                        <button type="button" class="btn btn-primary clickable">with a grain of salt</button>
                        <button type="button" class="btn btn-primary clickable">you know</button>
                        <button type="button" class="btn btn-primary clickable">you see</button>
                        <button type="button" class="btn btn-primary clickable">actually laughing</button>

                    </div>
                </div>

                <div class="category">
                    <div class="category-title">Prepositions</div>
                    <div class="list">
                        <button type="button" class="btn btn-primary clickable">about</button>
                        <button type="button" class="btn btn-primary clickable">of</button>
                        <button type="button" class="btn btn-primary clickable">or</button>
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
    var candidate = 'bernie';
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