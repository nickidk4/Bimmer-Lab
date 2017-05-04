/**
 * Created by Nicki on 04-05-2017.
 */

$(document).ready(function () {
    getPrimaryArticle();
});

function getPrimaryArticle() {
    $.get("php/homepage.php", function (data){
        result = JSON.parse(data);
        $("#titleWrapper").clear;
        $("#article").clear;
        $("#imageWrapper").clear;

        for(i = 0; i < result.length; i++){
            article = result[i];
            $("#titleWrapper").set(article.title);
            $("#article").set(article.content);
            $("#imageWrapper").set(article.image);
        }
    });
}