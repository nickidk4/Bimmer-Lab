/**
 * Created by Nicki on 04-05-2017.
 */

$(document).ready(function () {
    getPrimaryArticle();
});

function getPrimaryArticle() {
    $.get("php/readPrimary.php", function (data){
        var result = JSON.parse(data);

        var article = result[0];
        $("#titleWrapper").append(article.title);
        $("#content").append(article.content);

        var tallerken = article.image;
        document.getElementById("imgId").src=tallerken;
    });
}