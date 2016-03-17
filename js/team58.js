var sentence = [];

$(window).on('load', function () {
    $('#input').keyup(function (event) {
        if (event.which == 27 || event.keyCode == 27) {
            $(this).val('');
            cleanup();
        } else {
            var $input = $(this).val();
            var xhr = $.ajax({url: 'api.php', method: 'POST', data: {input: $input}});

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

function bindClickable() {
    $('.clickable').on('click', function () {
        var $this = $(this);
        sentence.push($this.html());
        $('#input').val('').focus();
        cleanup();
    });
}