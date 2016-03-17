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
            var xhr = $.ajax({
                url: 'api.php',
                method: 'POST',
                data: {input: $input, candidate: candidate, command: 'phrase'}
            });

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
    $("form :input").prop('readonly', true);

    var fullPhrases = [];

    /* substitute with actual files */
    $.each(sentence, function (key, phrase) {
        fullPhrases.push('samples/' + candidate + '_' + phrase + '.mp4');
    });
    playableSentence = fullPhrases;

    loop();
}

function loop() {
    preload();
    playNumber(0);
}

function preload() {
    var player;

    $.each(playableSentence, function (key, phrase) {
        player = $("<video/>", {
            id: 'vp_' + key,
            class: "video-js",
            preload: "auto",
            width: "640",
            height: "320",
            type: "video/mp4",
            src: phrase
        }).hide();
        $('.players').append(player);

        player.on('ended', function () {
            $(this).remove();
            if ((key + 1) in playableSentence) {
                playNumber(key + 1);
            } else {
                videojs('vp_' + key).dispose();
                loop();
            }
        })
    })
}

function playNumber(num) {
    if (num > 0) {
        videojs('vp_' + (num - 1)).dispose();
    }
    $('#vp_' + num).show();
    videojs('vp_' + num).play();
}

function playFirst() {
    var myPlayer = videojs('my-video');

    if (Object.keys(playableSentence).length == 0) {
        return;
    }
    var fullPhrase = playableSentence[0];
    playableSentence.splice(0, 1);
    myPlayer.src({"type": "video/mp4", "src": fullPhrase});
    myPlayer.play();
}

function shareIt() {
    var xhr = $.ajax({
        url: 'api.php',
        method: 'POST',
        data: {input: sentence, candidate: candidate, command: 'share'}
    });

    xhr.done(function (data) {
        $('#share').val('http://146.185.186.82/?share=' + data.key);
    });
}

function load(key) {
    var xhr = $.ajax({
        url: 'api.php',
        method: 'POST',
        data: {input: key, command: 'find'}
    });

    xhr.done(function (data) {
        candidate = data.candidate;
        sentence = data.sentence;
        updatePhrase();
        play();
    });
}