$(document).ready(function() {
    let id = getUrlParameters()['id'];
    if (!id)
        throw new Error("No id in url");

    $.get("/hustle/libs/profile_info.php", {id: id}, function(data) {
        populateProfile(JSON.parse(data));
    }).fail(function(err) {
        console.log('error');
        console.log(err);
    });

   $.get("/hustle/libs/posts_per_person.php", {id: id}, function(data) {
       console.log("success", data);
       populatePosts(JSON.parse(data));
   });
});

/**
 * populates DOM elements with information from firebase
 * 
 * @param {*} profileInfo 
 */
function populateProfile(profileInfo) {
    $("#name").text(profileInfo['name']);

    $("#bio").text(profileInfo['bio']);

    $("#city").text(profileInfo['city']);

    $("#type").text(profileInfo['type']);

    $("#profile_picture").attr("src", profileInfo['profile_picture_url']);
}

function populatePosts(postsInfo) {
    console.log(postsInfo);
    for (post of postsInfo) {
        let date = new Date(post['time_posted']);
        $(".newsfeed").append(
            `<div class="card container">
                <p class="subtext">${date.toLocaleString()}<p>
                <p>${post['text_content']}</p>
            </div>`
        );
    }
}

/**
 * Get query parameters from url
 * 
 */
function getUrlParameters() {
    let vars = {};
    let hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for (let i = 0; i < hashes.length; i++) {
        let currVars = hashes[i].split("=");
        vars[currVars[0]] = currVars[1];
    }
    return vars;
}