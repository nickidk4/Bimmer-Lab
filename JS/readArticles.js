/**
 * Created by rasmu on 03-04-2017.
 */

$(document).ready(function () {
    getArticles();
});



function getArticles() {
    $.get("php/read.php", function (data) {
        console.log(data);
    });
}
