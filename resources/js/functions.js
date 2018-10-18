jQuery(function($) {
    $('#fight_button').click(function() {

        var data = {id: "tere"};
        alert("Console log ajax...");
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
                    return false;
                }
            })
            .fail(function(data) {
                console.log(data);
            });

    });
});