$(document).ready(() => {

    $("#loginButton").click(() => {

        var options = {excludeAvailableScreenResolution: true, excludeScreenResolution: true}
        new Fingerprint2(options).get(function(fingerprint){
            $.ajax({
                type: 'POST',
                url: 'Auth/loginrequest',
                data: {
                    email: $('#email_form').val(),
                    password: $('#passwd_form').val(),
                    fingerprint: fingerprint,
                    lalo: '---;---',
                    keepmeloggedin: $('#keepmeloggedin_form')[0].checked
                },
                success: function (result) {

                    result = JSON.parse(result)

                    $("#notification-message").html(result.message)

                    if(!result.success) {
                        $("#notification-title").html("Hiba: ")
                        $("#notification-top").slideToggle("fast").css({"display": "flex"}).addClass(" notification-error")
                        setTimeout(() => {
                            $("#notification-top").slideToggle("fast")
                            $("#notification-top").slideToggle("fast")
                            if(result.message == "m2"){
                              window.location = "http://www.graphed.hu/Registration/fingerprint/?email=" + $('#email_form').val() + "&appid=" + result.app + "&redirect=http://www.sinalisal.hu/Login"
                            }
                        }, 3500)
                    }
                    else {
                       $("#notification-title").html("")
                       $("#notification-top").slideToggle("fast").css({"display": "flex"}).addClass(" notification-success")
                        setTimeout(() => {
                            window.location = "../Admin"
                        }, 1000)

                    }
                },
                error: function (xhr, status, error) {}})

        })

    })
})
