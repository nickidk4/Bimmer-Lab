/**
 * Created by rasmu on 03-04-2017.
 */

$(document).ready(function () {
    getArticles();
});



function getArticles() {
    $.get("php/read.php", function (data){
        result = JSON.parse(data);
        console.log
        $("#articles").clear;
        for(i = 0; i < result.length; i++){
            article = result[i];
            $("#articles").append(
                '<tr>' +
                '<td>' + article.id + '</td>' +
                '<td>' + article.title + '</td>' +
                '<td>' + article.image + '</td>' +
                '<td>' + article.content + '</td>' +
                '<td>' +
                '   <a href="updateArticlePage.php?id=' + article.id+ '&title='+ article.title+'&content='+article.content+'&image='+article.image+'">' +
                '       <button class="btn btn-success">Update</button>' +
                    '</a>' +
                '</td>' +
                '<td><button class="btn btn-danger">Delete</button></td>' +
                '<td><button class="btn btn-primary">Primary</button></td>' +
                '</tr>'
            )
        }
    });
}
