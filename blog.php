<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>jQuery Mobile Web Apps</title>

    <script src="js/jquery.js"></script>
    <script src="js/jquerymobile.js"></script>

    <!-- stylesheets -->
    <link rel="stylesheet" href="css/jquerymobile.css">
    <link rel="stylesheet" href="css/blog.css">

</head>
<body>
<section data-role="page" id="home">
    <article data-role="content">
        <img src="./images/logo3.png" width="400" height="200" alt="View Source Logo">

        
            
        </div>
    </article><!-- content -->
</section><!-- home -->


<!-- page: blog -->
<section id="blog" data-role="page" data-title="Blog">
    <header data-theme="b" data-role="header">


    </header><!-- header -->
    <div data-role="content" id="postlist"></div><!-- content -->

</section><!-- blog page -->

<!-- page: blogposts -->
<section data-role="page" id="blogpost">
    <div data-role="content">
        <div id="mypost"></div>
    </div>
</section>


<script src="js/script.js"></script>
<script src="http://sante.net23.net/wordpress/api/get_recent_posts/?json=1&count=10&callback=listPosts"></script>
</body>
</html>
