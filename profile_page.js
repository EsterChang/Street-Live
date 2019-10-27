$(document).ready(function() {
    let id = getUrlParameters()['id']
    if (!id)
        throw new Error("No id in url");

    $.get("/hustle/libs/profile_info.php", {id: id}, function(data) {
        console.log('data');
        console.log(data);
        let profileInfo = JSON.parse(data);
        console.log(profileInfo);
        populateProfile(profileInfo);
    }).fail(function(err) {
        console.log('error');
        console.log(err);
    });
   

    $.get("/hustle/libs/docs_in_collection.php", function(data) {
        console.log('data');
        console.log(data);
    });
});

function populateProfile(profileInfo) {
    console.log('testing');
    console.log(profileInfo['name']);

    $("#name").text(profileInfo['name']);

    $("#bio").text(profileInfo['bio']);

    $("#city").text(profileInfo['city']);

    $("#type").text(profileInfo['type']);

    $("#profile_picture").attr("src", profileInfo['profile_picture_url']);
}

function getUrlParameters() {
    let vars = {};
    let hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for (let i = 0; i < hashes.length; i++) {
        let currVars = hashes[i].split("=");
        vars[currVars[0]] = currVars[1];
    }
    return vars;
}