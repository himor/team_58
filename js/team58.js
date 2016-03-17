var sentence = [],
    candidate = 'trump';

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

    $.each(sentence, function (key, phrase) {
        var fullPhrase = 'samples/' + candidate + '_' + phrase + '.mp4';

        //var myPlayer = videojs('my-video');
        myPlayer.src({"type": "video/mp4", "src": fullPhrase});
        myPlayer.play()
    });
}

