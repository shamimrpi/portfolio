

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>responsive personal portfolio website design tutorail</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{asset('public/frontend/assets/css/style.css)}}">


</head>
<body>
    
<!-- header section starts  -->

<header>

    <div class="user">
        <img src="frontend/assets/img/shamim.jpg" alt="">
        <h3 class="name">
    
 </h3>
        <p class="post">Web developer</p>
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#education">education</a></li>
            <li><a href="#portfolio">portfolio</a></li>
            <li><a href="#skills">skills</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<div id="menu" class="fas fa-bars"></div>

<!-- home section starts  -->

<section class="home" id="home">

    <h3>HI THERE !</h3>
    <h1>I am <span>Md. Shamim Miah</span></h1>
    <p>

    </p>
    <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> <span>about</span> me </h1>

<div class="row">

    <div class="info">
        <h3> <span> name : </span>Md. Shamim Miah </h3>
        <h3> <span> age : </span> 26 </h3>
        <h3> <span> qualification : </span> Diploman In Computer </h3>
        <h3> <span> post : </span> web developer </h3>
        <h3> <span> language : </span> English/Bangla </h3>
        <a href="#"><button class="btn"> download CV <i class="fas fa-download"></i> </button></a>
    </div>

    <div class="counter">

        <div class="box">
            <span>2+</span>
            <h3>years of experience</h3>
        </div>

        <div class="box">
            <span>10+</span>
            <h3>porject completed</h3>
        </div>


    </div>

</div>

</section>

<!-- about section ends -->

<!-- education section starts  -->

<section class="education" id="education">

<h1 class="heading"> my <span>education</span> </h1>

<div class="box-container">

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2011</span>
        <h3>Secondary School Certificate</h3>
        <p><strong>School Name: </strong>Daradi High School</p>
        <p><strong>Result: </strong>4.75 out of 5.00</p>
    </div>
    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2015</span>
        <h3>Diploma In Computer</h3>
        <p><strong>School Name: </strong>Rangpur Polytechnic Institute</p>
        <p><strong>Result: </strong>3.32 out of 4.00</p>
    </div>

    
</div>

</section>

<!-- education section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

<h1 class="heading"> my <span>portfolio</span> </h1>

<div class="box-container">

    <div class="box">
        <h3>Blog</h3>
        <br>
        <a href="http://shamimit.com"><img src="frontend/assets/img/blog.png" alt=""></a>
    </div>

    <div class="box">
         <h3>Simple Laravel Project</h3>
          <br>
        <a href="http://laravel.shamimit.com"><img src="frontend/assets/img/simple.png" alt=""></a>
    </div>

    <div class="box">
         <h3>School Management System </h3>
          <br>
        <a href="http://sms.shamimit.com"><img src="frontend/assets/img/sms.png" alt=""></a>
    </div>

  

</div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="skills">

<h1 class="heading"> <span>My</span> Skills </h1>

<div class="row">

    <div class="content">

        <h3 class="title">Skills Info</h3>

        <div class="info" id="my_skills">
            <h3> <i class="fab fa-html5"></i> Html/Html5 </h3>
            <h3> <i class="fab fa-css3-alt"></i> CSS/CSS3 </h3>
            <h3> <i class="fab fa-bootstrap"></i> Bootstrap3/Bootstrap4 </h3>
            <h3> <i class="fab fa-js"></i> Javscript </h3>
            <h3> <i class="fab fa-php"></i> PHP </h3>
            <h3> <i class="fab fa-laravel"></i> Laravel </h3>
            <h3> <i class="fab fa-wordpress"></i> Wordpress </h3>
            <h3> <i class="fab fa-js"></i> Ajax </h3>
        </div>

    </div>

  

</div>

</section>
<section class="contact" id="contact">

<h1 class="heading"> <span>contact</span> me </h1>

<div class="row">

    <div class="content">

        <h3 class="title">contact info</h3>

        <div class="info">
            <h3> <i class="fas fa-envelope"></i> shamim520386@gmail.com </h3>
            <h3> <i class="fas fa-phone"></i> +8801774266791 </h3>
            <h3> <i class="fas fa-phone"></i> +8801732393949 </h3>
            <h3> <i class="fas fa-map-marker-alt"></i> Rangpur </h3>
        </div>

    </div>

    <form action="">

        <input type="text" placeholder="name" class="box">
        <input type="email" placeholder="email" class="box">
        <input type="text" placeholder="project" class="box">
        <textarea name="" id="" cols="30" rows="10" class="box message" placeholder="message"></textarea>
        <button type="submit" class="btn"> send <i class="fas fa-paper-plane"></i> </button>

    </form>

</div>

</section>

<!-- contact section ends -->


<!-- scroll top button  -->

<a href="#home" class="top">
    <img src="images/scroll-top-img.png" alt="">
</a>













<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="{{asset('public')}}/frontend/assets/js/custome.js"></script>



</body>
</html>