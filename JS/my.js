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
        $("#titleWrapper").set(article.title);
        $("#content").set(article.content);
        $("#imageWrapper").set(article.image);

    });
    console.log(article);
}