var sentence = [],
    playableSentence = [],
    manyPlayers = [],
    dontShareIt = false,
    base = 'http://mixer.quacks.org/' + candidate + '.php?share=';

$(window).on('load', function () {
    $('#input').keyup(function (event) {
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
            unbindClickable();
            cleanup();
            $.each(data, function (key, phrase) {
                $container.append('<button type="button" class="btn btn-primary clickable">' +
                    phrase.replace(/_/g, " ") +
                    "</button>");
            });
            bindClickable();
        });
    });

    var xhr = $.ajax({
        url: 'api.php',
        method: 'POST',
        data: {candidate: candidate, command: 'recent'}
    });

    xhr.done(function (data) {
        $.each(data, function (key, block) {
            $('.popular').append(
                '<a href="' + base + key.toString() + '">' +
                gluePhrase(block, false) +
                '</a>'
            );
        })
    })
});

function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

function cleanup() {
    //unbindClickable();
    $('#results').empty();
}

function unbindClickable() {
    $('.clickable').unbind('click');
}

function gluePhrase(parts, canErase) {
    var phrases = [];
    $.each(parts, function (key, phrase) {
        phrases.push("<span class='part' id='id_" + key + "'");
        if (canErase) {
            phrases.push(" onclick='erasePart(" + key + ");'");
        }
        if (key == 0) {
            phrases.push(">" + capitalizeFirstLetter(phrase.replace(/_/g, " ")) + "</span>");
        } else {
            phrases.push(">" + phrase.replace(/_/g, " ") + "</span>");
        }
    });
    return phrases.join('');
}

function updatePhrase() {
    $('#phrase').html(gluePhrase(sentence, true));
}

function bindClickable() {
    $('.clickable').on('click', function () {
        var $this = $(this);
        sentence.push($this.html().replace(/ /g, "_"));
        $('#input').val('').focus();
        cleanup();
        updatePhrase();
    })
}

function erasePart(num) {
    sentence.splice(num, 1);
    updatePhrase();
}

function play() {
    $("form :input").prop('readonly', true);
    $("#play_button").prop('disabled', true);

    var fullPhrases = [];

    /* substitute with actual files */
    $.each(sentence, function (key, phrase) {
        fullPhrases.push('samples/' + candidate + '_' + phrase + '.mp4');
    });
    playableSentence = fullPhrases;

    loop();
    shareIt();
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
            sleepFor(50);
            $(this).remove();
            if ((key + 1) in playableSentence) {
                playNumber(key + 1);
            } else {
                sleepFor(500);
                videojs('vp_' + key).dispose();
                $("#play_button").prop('disabled', false);
                dontShareIt = true;
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
    if (dontShareIt) {
        return;
    }

    var xhr = $.ajax({
        url: 'api.php',
        method: 'POST',
        data: {input: sentence, candidate: candidate, command: 'share'}
    });

    xhr.done(function (data) {
        $('#share').val(base + data.key).show();
    })
}

function load(key) {
    dontShareIt = true;

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

function sleepFor(sleepDuration) {
    var now = new Date().getTime();
    while (new Date().getTime() < now + sleepDuration) { /* do nothing */
    }
}