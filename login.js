$(document).ready(function() {
        $('form[name=loginForm]').submit(function() {

            $.post('/ajax.php', {username: $('[name=username]').val(),
                    password: $('[name=password]').val()}, 
                function(data) {
                    if(data.success)
                    {
                        location.href = data.redirect;
                    }
                    else
                    {
                        alert(data.message);
                        //$('#errorConsole').html(data.message);
                    }
                }, 'json');

            return false;
        });
    });