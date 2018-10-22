jQuery(function($) {
    $('#fight_button').click(function() {
        var data = {id: "tere"};
        $.ajax({
            type: 'POST',
            url: location.href,
            data: data,
            dataType: 'json',
            encode: true
        })
            .done(function(data) {
                if (!data.success) {
                    console.log(data);
                } else {
                    console.log(data);
                    $('.gold').text(data.gold);
                    return false;
                }
            })
            .fail(function(data) {
                console.log(data);
            });

    });
    var form = $('#player_login');
    $(form).submit(function(event) {
        event.preventDefault();
        var formData = $(form);
        formData.find('noscript').remove();
        var serializedForm = formData.serialize();
        console.log(serializedForm);
        $.ajax({
            type: 'POST',
            url: location.href,
            data: serializedForm,
            dataType: 'json',
            encode: true
        })
            .done(function(data) {
                if (!data.success) {
                    console.log(data);
                } else {
                    location.reload();
                }
            })
            .fail(function(data) {
                console.log(data);
            });
    });
});