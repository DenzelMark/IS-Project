<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/_.jpeg" type="image/x-icon">
    <title>forum</title>
    <!-- style css link -->
    <link rel="stylesheet" href="style.css">
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    
<!-- header section start -->


    <header>
        <div class="header-container">
            <div class="header-wrapper">
                <div class="logoBox">
                    <img src="images/_.jpeg" alt="logo">
                </div>
                <div class="searchBox">
                    <input type="search">
                    <i class="fas fa-search"></i>
                </div>
                <div class="iconBox1">
                    <i class="fa-solid fa-house"></i>
                    <i class="fa-solid fa-user-group"></i>
                    <i class="fa-solid fa-video"></i>
                    <i class="fa-solid fa-gamepad"></i>
                </div>
                <div class="iconBox2">
                    <i class="fa-solid fa-circle-plus"></i>
                    <i class="fa-brands fa-facebook-messenger"></i>
                    <i class="fa-solid fa-bell"></i>
                    <label><img src="images/user.jpg" alt="user"></label>
                    <i class="fa-solid fa-caret-down"></i>
                </div>
            </div>
        </div>
    </header>


<!-- header section end -->
<!-- home section start -->


<div class="home">
    <div class="container">
        <div class="home-weapper">

            <!-- home left start here -->
            <div class="home-left">

                <div class="profile">
                    <img src="images/user.jpg" alt="user">
                    <h3>Zahidul hossain</h3>
                </div>
               
                <div class="pages">
                    <h4 class="mini-headign">Pages</h4>
                    <label>
                        <img src="images/messenger.png" alt="messenger">
                        <a href="Home.html"><span>Home</span></a>
                    </label>
                    <label>
                        <img src="images/instagram.png" alt="instagram">
                        <a href="Feed.html"><span>Feedback</span></a>
                    </label>
                    <button class="see-more-btn">See more <i class="fa-solid fa-angle-down"></i></button>
                </div>

                <div class="group">
                    <h4 class="mini-headign">Group</h4>
                    <label>
                        <img src="images/gg.png" alt="group01">
                        <span>Graphic design</span>
                    </label>
                    
                    <label>
                        <img src="images/gg2.png" alt="group02">
                        <span>website design</span>
                    </label>

                    <label>
                        <img src="images/gg3.png" alt="group03">
                        <span>ZED.zahidul</span>
                    </label>

                    <button class="see-more-btn">See more <i class="fa-solid fa-angle-down"></i></button>
                </div>

                <div class="games">
                    <h4 class="mini-headign">Games</h4>
                    <label>
                        <img src="images/game.png" alt="game01">
                        <span>Facebook games</span>
                    </label>
                    <label>
                        <img src="images/game2.png" alt="game02">
                        <span>Free Play Games</span>
                    </label>
                    <button class="see-more-btn">See more <i class="fa-solid fa-angle-down"></i></button>
                </div>

                <div class="explore">
                    <h4 class="mini-headign">Explore</h4>
                   
                    <a href="#"><i class="fa-solid fa-user-group"></i> Group</a>
                    <a href="#"><i class="fa-solid fa-star"></i></i> Favorites</a>
                    <a href="#"><i class="fa-solid fa-bookmark"></i></i> Saves</a>
                    <a href="events.html"><i class="fa-solid fa-clock"></i> Events</a>
                    <a href="#"><i class="fa-solid fa-flag"></i> Pages</a>

                    <div><label class="darkTheme"> <span></span></label> Apply Dark Theme</div>

                    <button class="see-more-btn">See more <i class="fa-solid fa-angle-down"></i></button>
                </div>
                
            </div><!-- home left end here -->

            <!-- home center start here -->

            <div class="home-center">
                <div class="home-center-wrapper">    
                    <div class="createPost">

                        <h3 class="mini-headign"> Post something to share with others</h3>
                        <div class="post-text">
                            <form action="db.php" method="post">
                            <img src="images/user.jpg" alt="user">
                            <input type="text-area" placeholder="What's on your mind, zahidul" name="message">
                            </form>
                        </div>


                    </div>

                    <!-- users can create an event here -->
                    <div class="createPost">
                   <h3 class="mini-headign">create an event</h3>
                    <div class="post-text">
                        <form action="conn.php" method="post">
                            <label>Title</label>
                            <input type="text" name="title" placeholder="Add a Title">
                            <br><br>
                            <label>Time & Date</label>
                            <input type="datetime-local" name="date" placeholder="Add a Date">
                            <br><br>
                            <label>location</label>
                            <input type="text" name="location" placeholder="Add a location">
                            <br><br>
                            <label>Content</label>
                            <input type="text-area" name="content" placeholder="Add a content">
                            <br><br>
                            <label>Event Link</label>
                            <input type="url" name="link" placeholder="Add a link">
                            <br><br>
                            <button>Submit</button>

                        </form>
  
                    </div>


</div>

<!-- create an article here -->
<div class="createPost">

<h3 class="mini-headign"> Post something to share with others</h3>
<div class="post-text">
    <form action="db.php" method="post">
    <img src="images/user.jpg" alt="user">
    <input type="text-area" placeholder="What's on your mind, zahidul" name="message">
    </form>
</div>


</div>

<!-- create an old discussion here -->
<div class="createPost">

<h3 class="mini-headign"> Post something to share with others</h3>
<div class="post-text">
    <form action="db.php" method="post">
    <img src="images/user.jpg" alt="user">
    <input type="text-area" placeholder="What's on your mind, zahidul" name="message">
    </form>
</div>


</div>

                    

                   
               

                </div> <!-- home center wrapper end -->
            </div> <!-- home center end -->

            <div class="home-right">
                <div class="home-right-wrapper">

                    <div class="event-friend">
                        <div class="event">
                            <h3 class="heading">Upcoming Events <a href="events.html"><span>see all</span></a></h3>
                            <img src="images/eve.jpg" alt="event-img">
                            <div class="event-date">
                                <h3>21 <b>july</b></h3>
                                <h4>United state of America <span>New York City</span></h4>
                            </div>
                            <button><a href="events.html"><i class="fa-regular fa-star"></i> interested</a></button>
                        </div>

                        <hr>

                    </div>


                </div><!-- home right wrapper end -->
            </div><!-- home right end -->






        </div>
    </div>
</div>




<!-- home section end -->

<script>
    var darkButton = document.querySelector(".darkTheme");

    darkButton.onclick = function(){
        darkButton.classList.toggle("button-Active");
        document.body.classList.toggle("dark-color")
    }

</script>

</body>
</html>