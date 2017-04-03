/**
 * Created by rasmu on 03-04-2017.
 */

$(document).ready(function () {
    getArticles()
});



function getArticles() {
    $.GET("../php/read.php", function (data) {
        console.log(data)
    })
}