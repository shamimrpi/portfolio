

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>responsive personal portfolio website design tutorail</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend')}}/assets/css/style.css">



</head>
<body>
    
<!-- header section starts  -->

<header>

    <div class="user">
        <img src="{{(!empty($about->image))?url('upload/portfolio/'.$about->image):''}}" alt="">
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

        <h3> <span> name : </span>{{$about->name}}</h3>
        <h3> <span> age : </span> {{$about->age}} </h3>
        <h3> <span> qualification : </span>{{$about->qualification}} </h3>
        <h3> <span> post : </span> {{$about->post}} </h3>
        <h3> <span> language : </span> {{$about->lang}} </h3>
        <a href="{{$about->cv_link}}" target="_blankl"><button class="btn"> download CV <i class="fas fa-download"></i> </button></a>
    </div>

    <div class="counter">

        <div class="box">
            <span>{{$about->experience}}</span>
            <h3>years of experience</h3>
        </div>

        <div class="box">
            <span>{{$about->project}}</span>
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
    @foreach($educations as $education)
    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>{{$education->year}}</span>
        <h3>{{$education->exam_name}}</h3>
        <p><strong>School Name: </strong>{{$education->institute_name}}</p>
        <p><strong>Result: </strong>{{$education->result}}</p>
    </div>
    @endforeach

    
</div>

</section>

<!-- education section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

<h1 class="heading"> my <span>portfolio</span> </h1>

<div class="box-container">
    @foreach($portfolios as $portfolio)
    <div class="box">
        <h3>{{$portfolio->heading}}</h3>
        <br>
        <a href="{{$portfolio->link}}"><img src="{{(!empty($portfolio->image))?url('upload/portfolio/'.$portfolio->image):''}}" alt=""></a>
    </div>
    @endforeach

    

  

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
            @foreach($skills as $skill)
            <h3> {!!$skill->fonts!!}{{$skill->name}} </h3>
            @endforeach
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
            @foreach($contacts as $contact)
            <h3> {!!$contact->fonts!!}</i> {{$contact->name}}  </h3>
            @endforeach
        </div>

    </div>
       
    <form action="" method="GET" id="SMS">
         <h3 id="message" style="text-align: center;font-size: 30px;color:green"></h3>
        <input type="text" name="name" placeholder="name" class="box" required="1">
        <input type="email" name="email" placeholder="email" class="box" required="1">
        <input type="text" name="phone" placeholder="phone" class="box" required="1">
        <textarea name="description" id="" cols="30" rows="10" class="box message" placeholder="message" required=""></textarea>
        <button  class="btn"  id="sms"> send <i class="fas fa-paper-plane" ></i> </button>

    </form>

</div>

</section>

<!-- contact section ends -->


<!-- scroll top button  -->

<a href="#home" class="top">
    <img src="images/scroll-top-img.png" alt="">
</a>













<!-- jquery cdn link  -->
<script src="{{asset('public/frontend')}}/assets/js/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="{{asset('public/frontend')}}/assets/js/custome.js"></script>

<script type="text/javascript">
    $(document).on('submit','#SMS',function(e){
        e.preventDefault();
       
        $.ajax({
        method:"GET",
         url:"{{route('sms.store')}}",
        data:$(this).serialize(),
        success: function(data){
        $('#message').html('Your Message Sent successfully !');
      

    }});
    

});
</script>

</body>
</html>