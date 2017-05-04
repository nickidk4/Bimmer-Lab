/**
 * Created by rasmu on 03-04-2017.
 */

$(document).ready(function () {
    getArticles();
});


function deleteArticles(id) {
    if(confirm("Are you sure you want to delete Article?")) {
        $.post("php/delete.php", {id: id}).done(function(data) {
            alert("deleted article with id: " + id);
        });
    }
    location.reload();
}

function getArticles() {
    $.get("php/read.php", function (data){
        result = JSON.parse(data);
        $("#articles").clear;
        for(i = 0; i < result.length; i++){
            article = result[i];
            $("#articles").append(
                '<tr>' +
                '<td>' + article.id + '</td>' +
                '<td>' + article.title + '</td>' +

                '<td>' +
                '   <a href="updateArticlePage.php?id=' + article.id+ '&title='+ article.title+'&content='+article.content+'&image='+article.image+'">' +
                '       <button class="btn btn-success">Update</button>' +
                    '</a></td>' +
                '<td><button class="btn btn-danger" onclick="deleteArticles(' + article.id + ')">Delete</button></td>' +
                '<td><a href="php/primary.php?id='+article.id+'"><button class="btn btn-primary">Primary</button></a></td>' +
                '</tr>'
            )
        }
    });

    // Update primary articles
    $.get("php/readPrimary.php", function (data){
        result = JSON.parse(data);
        $("#articles").clear;
        for(i = 0; i < result.length; i++){
            article = result[i];
            $("#primaryArticle").append(
                '<tr>' +
                '<td>' + article.id + '</td>' +
                '<td>' + article.title + '</td>' +

                '<td>' +
                '   <a href="updateArticlePage.php?id=' + article.id+ '&title='+ article.title+'&content='+article.content+'&image='+article.image+'">' +
                '       <button class="btn btn-success">Update</button>' +
                '</a></td>' +
                '<td><button class="btn btn-danger" onclick="deleteArticles(' + article.id + ')">Delete</button></td>' +
                '</tr>'
            )
        }
    });




}