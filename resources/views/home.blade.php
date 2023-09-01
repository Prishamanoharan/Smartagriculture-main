<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Smart Farming with Vivasayam Voice</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    width: 100%;
    position: relative;
    font-family: 'poppins', sans-serif;
    background: #fafafa;
}

.navbar{
    width: 100%;
    height: 60px;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 9;
    background: #fff;
    border-bottom: 1px solid #999;
    padding: 10px 5vw;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.logo{
    height: 30px;
}

.search-box{
    width: 300px;
    height: 40px;
    display: flex;
}

#search-input{
    width: 260px;
    height: 100%;
    background: #fafafa;
    border: 1px solid #999;
    padding: 10px;
    text-transform: capitalize;
}

.search-btn{
    background: #fff;
    cursor: pointer;
    border: 1px solid #999;
    border-left: none;
    padding: 10px;
}

.search-icon{
    width: 20px;
    height: 20px;
}

.nav-links{
    display: flex;
    align-items: center;
    gap: 30px;
}

.nav-icon{
    width: 35px;
    height: 35px;
    cursor: pointer;
}

.user-profile{
    width: 30px;
    height: 30px;
    border-radius: 50%;
}

.activity-log{
    position: relative;
    height: 25px;
}

.activity-container{
    width: 350px;
    height: auto;
    max-height: 300px;
    position: absolute;
    top: 200%;
    right: 0;
    background: #fff;
    border: 1px solid #999;
}

.activity-card{
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    padding-bottom: 0;
    margin-bottom: 10px;
    cursor: pointer;
}

.activity-card:hover{
    background: #fafafa;
}

.activity-container.hide{
    pointer-events: none;
    opacity: 0;
}

.user-img{
    width: 50px;
    height: 50px;
    border-radius: 50%;
}

.activity{
    width: 200px;
    font-size: 1rem;
}

.activity-post{
    width: 50px;
    height: 50px;
    object-fit: cover;
}
/* main section */

.main{
    width: 100%;
    position: relative;
    margin-top: 100px;
    display: flex;
    padding: 0 10vw 100px;
    gap: 50px;
}

/* post section */

.post-container{
    width: 60%;
}

.post{
    width: 100%;
    border: 1px solid #999;
    background: #fff;
    margin-bottom: 30px;
}

.post-header{
    display: flex;
    align-items: center;
    padding: 1.2rem;
    gap: 10px;
}

.post-header .user-icon{
    width: 30px;
    height: 30px;
    border-radius: 50%;
}

.post-header .username{
    font-size: .9rem;
    font-weight: 600;
}

.post-feed{
    width: 100%;
    height: 500px;
    position: relative;
}

.post-img-container{
    width: 100%;
    height: 100%;
    display: flex;
    overflow: hidden;
}

.post-img-container img{
    min-width: 100%;
    height: 100%;
    object-fit: cover;
    transition: .5s;
}

.post-detail{
    padding: 1.2rem;
}

.detail-intracables{
    display: flex;
    gap: 10px;
}

.detail-intracables img{
    width: 30px;
    height: 30px;
    cursor: pointer;
}

.likes{
    color: #a0a0a0;
    display: flex;
    margin: 10px 0;
}

.post .username{
    font-weight: 600;
}

.post-des{
    margin: 20px 0;
    font-size: .9rem;
    line-height: 1.5rem;
    opacity: 0.7;
}

.comment-box{
    width: 100%;
    height: 42px;
    display: flex;
    border: 1px solid #999;
}

#comment-input{
    width: 100%;
    height: 40px;
    background: #fafafa;
    border: none;
    padding: 10px;
    line-height: 40px;
    z-index: 2;
    font-size: 1rem;
}

#comment-input::placeholder{
    color: #bbb;
}

#comment-input:focus{
    outline: 1px solid #2f2f2f;
}

.add-comment-btn{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 60px;
    height: 40px;
    cursor: pointer;
    border: none;
    outline: none;
    background: #fff;
}

.add-comment-btn img{
    width: 30px;
    height: 30px;
}

.comment-count{
    font-weight: 600;
    color: #a0a0a0;
    font-size: .8rem;
    display: flex;
    margin-top: 10px;
    opacity: 0.7;
}

.post-overlays{
    position: absolute;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    pointer-events: none;
}

.like-icon{
    width: 200px;
    opacity: 0;
    transition: .5s;
}

.like-icon.show{
    opacity: 1;
    animation: popup 2s forwards 1;
}

@keyframes popup{
    0%{
        transform: scale(0);
    }
    20%{
        transform: scale(1.1);
    }
    80%{
        transform: scale(.9);
    }
    90%{
        transform: scale(.95);
    }
    100%{
        transform: scale(1);
    }
}

.share-window{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #fff;
    padding: 20px;
    width: 70%;
    transition: .5s;
    opacity: 0;
}

.share-window.active{
    opacity: 1;
    pointer-events: all;
}

.share-window .title{
    font-size: 1rem;
    font-weight: 500;
    text-transform: capitalize;
    margin-bottom: 20px;
}

.share-link-container{
    width: 100%;
    display: flex;
    border: 1px solid #999;
}

#share-link{
    height: 40px;
    padding: 10px;
    background: #fafafa;
    border: none;
    color: #999;
    width: 100%;
}

.copy-btn{
    background: #80c2ff88;
    border: none;
    outline: none;
    cursor: pointer;
    color: #80c2ff;
    text-transform: capitalize;
    width: 100px;
}
        </style>
    <body>
        <!--navbar-->
        <nav class="navbar">
            <img src="img/logo.png" class="logo" alt="">
            <form class="search-box">
                <input type="text" placeholder="search" name="search-query" id="search-input">
                <button class="search-btn" type="submit"><img src="{{ asset('images/search.png') }}" class="search-icon" alt=""></button>
            </form>
            <div class="nav-links">
                <a href="#" class="nav-links"><img src="{{ asset('images/home.png') }}" class="nav-icon" alt=""></a>
                <div class="activity-log">
                    <img src="{{ asset('images/heart.png') }}" class="nav-icon" alt="">
                    <div class="activity-container hide">
                        <div class="activity-card">
                            <img src="{{ asset('images/agri img.jpg') }}" class="user-img" alt="">
                            <p class="activity"><b>@siri</b> liked your post</p>
                            <img src="{{ asset('images/agri img.jpg') }}" class="activity-post" alt="">
                        </div>
                        <div class="activity-card">
                            <img src="{{ asset('images/agri img.jpg') }}" class="user-img" alt="">
                            <p class="activity"><b>@siri</b> liked your post</p>
                            <img src="{{ asset('images/agri img.jpg') }}" class="activity-post" alt="">
                        </div>
                        <div class="activity-card">
                            <img src="{{ asset('images/agri img.jpg') }}" class="user-img" alt="">
                            <p class="activity"><b>@siri</b> liked your post</p>
                            <img src="{{ asset('images/agri img.jpg') }}" class="activity-post" alt="">
                        </div>
                        <div class="activity-card">
                            <img src="{{ asset('images/agri img.jpg') }}" class="user-img" alt="">
                            <p class="activity"><b>@siri</b> liked your post</p>
                            <img src="{{ asset('images/agri img.jpg') }}" class="activity-post" alt="">
                        </div>
                    </div>
                </div>
                <a href="#" class="nav-links"><img src="{{ asset('images/addpost.png') }}" class="nav-icon" alt=""></a>
                <a href="#" class="nav-links"><img src="{{ asset('images/profile.png') }}" class="nav-icon user-profile" alt=""></a>
                <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}" style="color: white;">Login</a></li>
                            <li><a href="{{ route('register') }}" style="color: white;">Register</a></li>
                        @else
                            <li class="dropdown">
                                <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="color: white;">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a> -->

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
            </div>
        </nav>
        <!-- main section -->
<section class="main">
    <!-- post section -->
    <div class="post-container">
        <div class="post">
            <div class="post-header">
                <img src="img/user2.png" class="user-icon" alt="">
                <p class="username">@modernweb</p>
            </div>
            <div class="post-feed">
                <div class="post-overlays">
                    <img src="{{ asset('images/heart.png') }}" class="like-icon" alt="">
                    <div class="share-window">
                        <h1 class="title">share the post with others</h1>
                        <div class="share-link-container">
                            <input type="text" id="share-link" value="https://www.socialize.com/post/234234234234" disabled>
                            <button class="copy-btn">copy</button>
                        </div>
                    </div>
                </div>
                <div class="post-img-container">
                    <img src="img/posts/post1.png" alt="">
                    <img src="img/posts/post2.png" alt="">
                    <img src="img/posts/post3.png" alt="">
                    <img src="img/posts/post4.png" alt="">
                    <img src="img/posts/post5.png" alt="">
                </div>
            </div>
            <div class="post-detail">
                <div class="detail-intracables">
                    <img src="img/icon/heart-nofill.png" class="like-btn" alt="">
                    <img src="img/icon/send-nofill.png" class="send-btn" alt="">
                    <img src="img/icon/comment-nofill.png" class="comment-btn" alt="">
                </div>
                <span class="likes">2.7k likes</span>
                <p class="username">@keerti</p>
                <p class="post-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ipsa incidunt obcaecati esse illo voluptates libero debitis nisi. Id tempora vel illum vitae temporibus commodi non cupiditate atque voluptas. Ipsam.</p>

                <div class="comment-box">
                    <input type="text" id="comment-input" placeholder="Add a comment">
                    <button class="add-comment-btn"><img src="img/icon/comment-nofill.png" alt=""></button>
                </div>

                <span class="comment-count">300 comments</span>
            </div>
        </div>
        +2 more posts
    </div>
</section>
        <script src="js/post.js"></script>

            </body>
<script>
     var botmanWidget = {
         introMessage: "Welcome To Agriculture"
     };
    </script>
  
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
