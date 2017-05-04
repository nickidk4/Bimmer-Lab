/**
 * Created by rasmu on 03-04-2017.
 */

$(document).ready(function () {
    getArticles();
});


function deleteArticles(id) {

    $.post("php/delete.php", {id: id}).done(function(data) {
        alert("deleted article with id: " + id);
    });
}

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
                '<td><a href="php/primary.php?id='+article.id+'"><button class="btn btn-primary">Primary</button></a></td>' +
                '<td><button class="btn btn-danger" onclick="deleteArticles(' + article.id + ')">Delete</button></td>' +
                '<td><button class="btn btn-primary" onclick="togglePrimary(article.id)">Primary</button></td>' +
                '</tr>'
            )
        }
    });
}