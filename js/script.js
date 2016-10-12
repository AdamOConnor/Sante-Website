function listPosts(data) {
var output = '<?php $pageTitle = "Contact"; include_once("include/header.php"); ?>';
  output += '<form class="ui-filterable"><input id="searchposts" data-type="search"></form>';
  output += '<ul data-role="listview" data-filter="true" data-input="#searchposts">';
  $.each(data.posts, function(key, val) {

    var tempDiv = document.createElement("tempDiv");
    tempDiv.innerHTML = val.excerpt;
    $("a", tempDiv).remove();
    var excerpt = tempDiv.innerHTML;

    output += '<li>';
    output += '<a href="#blogpost" onclick = "showPost(' + val.id + ')">';
    output += (val.thumbnail) ?
      '<img src="' + val.thumbnail + '" alt="' + val.title + '">':
      '<img src="../images/logo3.png" width="200" height="100" alt="View Source Logo">';
    output += '<h3>' + val.title + "</h3>";
    output += '<p>' + excerpt + "</p>";
    output += '</a>';
    output += '</li>';
  }); //go through each post
  output += "</ul>";
  $('#postlist').html(output);
} //listPosts

function showPost(id) {
  $.getJSON('http://sante.net23.net/wordpress/api/get_recent_posts/?json=get_post&post_id=' + id + '&callback=?', function(data) {
    var output = '<h3>' + data.post.title + '</h3>';
    output += data.post.content;
    $('#mypost').html(output);
  });
}