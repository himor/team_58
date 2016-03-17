var sentence = [],
    playableSentence = [],
    candidate = 'trump',
    manyPlayers = [];

$(window).on('load', function () {
    $('#input').keyup(function (event) {
        if (event.which == 27 || event.keyCode == 27) {
            $(this).val('');
            cleanup();
        } else {
            var $input = $(this).val();
            var xhr = $.ajax({url: 'api.php', method: 'POST', data: {input: $input, candidate: candidate}});

            xhr.done(function (data) {
                if (Object.keys(data).length == 0) {
                    return;
                }
                var $container = $('#results');
                cleanup();
                $.each(data, function (key, phrase) {
                    $container.append('<button type="button" class="btn btn-primary clickable">' + phrase + "</span>");
                });
                bindClickable();
            });
        }
    });
});

function cleanup() {
    unbindClickable();
    $('#results').empty();
}

function unbindClickable() {
    $('.clickable').unbind('click');
}

function updatePhrase() {
    $('#phrase').empty();
    $.each(sentence, function (key, phrase) {
        $('#phrase').append("<span class='part' id='id_" + key + "' onclick='erasePart(" + key + ");'>" + phrase + "</span>");
    });
}

function bindClickable() {
    $('.clickable').on('click', function () {
        var $this = $(this);
        sentence.push($this.html());
        $('#input').val('').focus();
        cleanup();
        updatePhrase();
    });
}

function erasePart(num) {
    sentence.splice(num, 1);
    updatePhrase();
}

function play() {
    var myPlayer = videojs('my-video');
    var fullPhrases = [];

    /* substitute with actual files */
    $.each(sentence, function (key, phrase) {
        fullPhrases.push('samples/' + candidate + '_' + phrase + '.mp4');
    });
    playableSentence = fullPhrases;

    preload();

    playFirst();

    myPlayer.on('ended', function () {
        playFirst();
    });
}

function preload() {
    var player;

    $.each(playableSentence, function (key, phrase) {
        player = $("<video/>", {
            id: 'vp_' + key,
            class: "video-js",
            preload: "auto",
            width: "640",
            height: "380",
            type: "video/mp4",
            src: phrase
        }).hide();
        $('#invisible').append(player);
        manyPlayers.push(player);
    });
}

function playFirst() {
    if (Object.keys(playableSentence).length == 0) {
        //videojs('my-video').dispose();
        return;
    }
    var myPlayer = videojs('my-video');
    var fullPhrase = playableSentence[0];
    playableSentence.splice(0, 1);
    myPlayer.src({"type": "video/mp4", "src": fullPhrase});
    myPlayer.play();
}

