$(document).ready(function() {
    console.log('test');
    $.get("/libs/docs_in_collection.php", {collection: "Users"}, function(data) {
        console.log('data');
        console.log(data);
        populateUsers(JSON.parse(data));
    }).fail(function(err) {
        console.log('error');
        console.log(err);
    });
    
});

function populateUsers(userInfo) {
    for (user of userInfo) {
        $("#cards").append(
            `<div class="user-card col-md-3 col-lg-3">
            <a href="frontend/profile_page.html?id=${user["id"]}">
                <img class="card-img-top" alt="" src="${user["profile_picture_url"]}" >
            </a>
            <div class="card-body">
                    <h5 class="card-title"> ${user["name"]} </h5>
            </div>
        </div>`
        )
        console.log(user["profile_picture_url"]);
    }
}


// var maxFollowers = 4;
// for (var i = 0; i < maxFollowers; i++) {
//     $('<div class="carousel-item active"><a href="frontend/profile_page.html"><img class="card-img-top" alt="" src="https://i.imgur.com/lMHGHYt.jpg" data-holder-rendered="true"></a><div class="card-body"> <h5 class="card-title"> test </h5> </div></div>)')
//     .appendTo("#carousel-inner");
// }

// <div class="carousel-item active">
//                         <a href="frontend/profile_page.html">
//                             <img class="card-img-top" alt="" src="https://i.imgur.com/lMHGHYt.jpg" data-holder-rendered="true">
//                         </a>
//                         <div class="card-body">
//                                 <h5 class="card-title"> test </h5>
//                         </div>
//                     </div>

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
