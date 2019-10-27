$(document).ready(function() {
    $.get("http://127.0.0.1:5000/profile_info", function(response) {
        console.log(response)
    })
})