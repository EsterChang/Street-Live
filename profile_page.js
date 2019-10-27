$(document).ready(function() {
    $.get("/hustle/libs/db-test.php", function(data) {
        console.log('data');
        console.log(data);
        let profileInfo = JSON.parse(data);
        console.log(profileInfo);
        populateProfile(profileInfo);
    }).fail(function(err) {
        console.log('error');
        console.log(err);
    });
    // $,ajax({
    //     url: "/hustle/libs/db-test.php",
    //     success: function(data) {
    //         console.log('data', data);
    //     },
    //     error: function(err) {
    //         console.log('err', err);
    //     }
    // });
});

function populateProfile(profileInfo) {
    console.log('testing');
    console.log(profileInfo['name']);

    $("#name").text(profileInfo['name']);

    $("#bio").text(profileInfo['bio']);

    $("#city").text(profileInfo['city']);

    $("#type").text(profileInfo['type']);
}