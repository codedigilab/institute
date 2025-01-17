<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('include/head')
    @livewireStyles
</head>

<body>
    @include('include/header')

    <section class="banner v1">
        <div class="container container-fluid-sm">
            <div class="banner-content v1">
                <div class="row">
                    <div class="col-xl-7 col-lg-12">
                        <div class="section-title">
                            <div class="section-title-inner">
                                <h4 class="sub-titlev2" data-aos="fade-down" data-aos-duration="1000"><span>35%
                                        Off</span>Learn from today</h4>
                                <h2 class="big-title s-color-white" data-aos="fade-up" data-aos-duration="1000">
                                    Accelerate
                                    your learning</h2>
                                <p class="title-para sp-color-white" data-aos="fade-up" data-aos-duration="1000">Take
                                    your career further. Discover 1400+ courses from top universities and master
                                    in-demand skills across marketing, tech, business, cybersecurity and more.
                                </p>
                            </div>
                        </div>
                        <div class="play-data v1" data-aos="fade-up" data-aos-duration="1000">
                            <div class="all-btn">
                                <a href="contact" wire:navigate class="btn-p v1 btn-blue2 rounded icon-v1">Make
                                    Appointment</a>
                            </div>
                            <a href="#" class="youtube">
                                <div class="play-content">
                                    <div class="play-icon v1">
                                        <i class="my-icon icon-play"></i>
                                    </div>
                                    <h4 class="title">Play Now</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="banner-right-content">
                            <div class="banner-img">
                                <img src="assets/img/banner/banner-img.png" alt="banner-img">
                            </div>
                            <div class="banner-img-bg-circle" id="banner-img-bg-circle">
                                <img src="assets/img/banner/banner-img-bg-circle.png" alt="banner-img-bg-circle">
                            </div>
                            <div class="banner-congratulations">
                                <div class="congratulations-icon">
                                    <img src="assets/img/banner/congratulations.svg" alt="congratulations-icon">
                                </div>
                                <div class="congratulations-content">
                                    <h4 class="title text">Congratulations</h4>
                                    <p class="para text">You have successfully completed this Course</p>
                                </div>
                            </div>
                            <div class="interactive-courses">
                                <div class="courses-icon">
                                    <img src="assets/img/banner/banner-interactive-courses.svg"
                                        alt="banner-interactive-courses-icon">
                                </div>
                                <div class="courses-content">
                                    <h4 class="title"><span class="counter">10,000</span>+</h4>
                                    <p class="para text">Interactive Courses</p>
                                </div>
                            </div>
                            <div class="students" data-aos="fade-up" data-aos-duration="1000">
                                <div class="students-icon">
                                    <h5 class="text title"><span class="counter">40</span>k Students</h5>
                                    <img src="assets/img/banner/students.svg" alt="banner-interactive-courses-icon">
                                </div>
                                <ul class="students-imgages">
                                    <li>
                                        <a href="team-details.html"><img src="assets/img/banner/student-img-1.png"
                                                alt="student-img"></a>
                                    </li>
                                    <li>
                                        <a href="team-details.html"><img src="assets/img/banner/student-img-2.png"
                                                alt="student-img"></a>
                                    </li>
                                    <li>
                                        <a href="team-details.html"><img src="assets/img/banner/student-img-3.png"
                                                alt="student-img"></a>
                                    </li>
                                    <li>
                                        <a href="team-details.html"><img src="assets/img/banner/student-img-4.png"
                                                alt="student-img"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-bg-left">
            <img src="assets/img/banner/banner-bg-left.png" alt="banner-bg-left">
        </div>
        <div class="banner-bg-right">
            <img src="assets/img/banner/banner-bg-right.png" alt="banner-bg-right">
        </div>
        <div class="messenger-icon">
            <i class="my-icon icon-messenger-icon"></i>
        </div>
    </section>
    <section class="how-it-work v1 @ py-120">
        <div class="container">
            <div class="section-title center">
                <div class="section-title-inner center w-v3">
                    <h4 class="sub-title" data-aos="fade-down" data-aos-duration="2000">hOW it wORK</h4>
                    <h2 class="big-title s-color-black" data-aos="fade-up" data-aos-duration="2000">We the focus and
                        offerin
                        your education platform.</h2>
                </div>
            </div>
            <div class="how-it-work-content v1">
                <div class="work-content-1">
                    <h4 class="work-title">Programs and Courses</h4>
                    <p class="work-para">Engage with a vibrant community of learners, and professionals</p>
                    <div class="work-icon">
                        <i class="my-icon icon-programs-courses"></i>
                    </div>
                </div>
                <div class="work-content-2">
                    <h4 class="work-title text">Educational Resources</h4>
                    <p class="work-para text">Engage with a vibrant community of learners, and professionals</p>
                    <div class="work-icon">
                        <i class="my-icon icon-education-resources"></i>
                    </div>
                </div>
                <div class="work-content-3">
                    <h4 class="work-title text">Skill Development for IT</h4>
                    <p class="work-para text">Engage with a vibrant community of learners, and professionals</p>
                    <div class="work-icon">
                        <i class="my-icon icon-skill-dev-for-it"></i>
                    </div>
                </div>
                <div class="work-content-4">
                    <h4 class="work-title text">Technology and IT</h4>
                    <p class="work-para text">Engage with a vibrant community of learners, and professionals</p>
                    <div class="work-icon">
                        <i class="my-icon icon-technology-and-it"></i>
                    </div>
                </div>
                <div class="work-content-1">
                    <h4 class="work-title text">Career Development</h4>
                    <p class="work-para text">Engage with a vibrant community of learners, and professionals</p>
                    <div class="work-icon">
                        <i class="my-icon icon-career-dev"></i>
                    </div>
                </div>
                <div class="work-content-2">
                    <h4 class="work-title text">Community and Events</h4>
                    <p class="work-para text">Engage with a vibrant community of learners, and professionals</p>
                    <div class="work-icon">
                        <i class="my-icon icon-community-and-events"></i>
                    </div>
                </div>

                <div class="middle-img-circle">
                    <img src="assets/img/how-it-work/middle-image-circle.png" alt="middle-img-circle">
                </div>
                <div class="middle-img">
                    <img src="assets/img/how-it-work/middle-image.png" alt="middle-img">
                </div>
            </div>
        </div>
    </section>

    <section class="make-an-appointment">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="appointment-left-content" data-aos="zoom-in-up" data-aos-duration="1000">
                        <img src="assets/img/make-an-appointment/big-img.png" alt="big-img">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="appointment-right-content">
                        <div class="section-title">
                            <div class="section-title-inner">
                                <h4 class="sub-title" data-aos="fade-down" data-aos-duration="1000">Make An Appointment
                                </h4>
                                <h2 class="big-title s-color-white" data-aos="fade-up" data-aos-duration="1000">Get a
                                    Free Consultancy Right Now Here!</h2>
                            </div>
                        </div>
                        <div class="contact-info v2" data-aos="fade-up" data-aos-duration="1000">
                            <div class="all-btn">
                                <a href="contact.html" class="btn-p v1 btn-blue2 icon-v1 rounded">Make Appointment</a>
                            </div>
                            <div class="contact-icon">
                                <i class="my-icon icon-call"></i>
                            </div>
                            <div class="info-data">
                                <p class="para">Call Us 24/7</p>
                                <h4 class="title">(+258) 2569 2582</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="skill-section @ py-100">
        <div class="container">
            <ul class="skill-items">
                <li class="skill-item">
                    <div class="item-icon">
                        <i class="my-icon icon-courses-completed"></i>
                    </div>
                    <div class="item-content">
                        <h5 class="title"><span class="counter">4.8</span>K</h5>
                        <p class="para">courses COMPLETED</p>
                    </div>
                </li>
                <li class="skill-item">
                    <div class="item-icon">
                        <i class="my-icon icon-media-activities"></i>
                    </div>
                    <div class="item-content">
                        <h5 class="title"><span class="counter">325</span></h5>
                        <p class="para">MEDIA ACTIVITIES</p>
                    </div>
                </li>
                <li class="skill-item">
                    <div class="item-icon">
                        <i class="my-icon icon-skill-expert"></i>
                    </div>
                    <div class="item-content">
                        <h5 class="title"><span class="counter">598</span></h5>
                        <p class="para">SKILLED EXPERTS</p>
                    </div>
                </li>
                <li class="skill-item">
                    <div class="item-icon">
                        <i class="my-icon icon-happy-students"></i>
                    </div>
                    <div class="item-content">
                        <h5 class="title"><span class="counter">36</span>K</h5>
                        <p class="para">HAPPY Students</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="skill-left-img">
            <img src="assets/img/skill-section/skill-left-img.png" alt="skill-left-img">
        </div>
        <div class="skill-right-img">
            <img src="assets/img/skill-section/skill-right-img.png" alt="skill-right-img">
        </div>
    </section>
    <section class="case-studies v1 @ pt-120">
        <div class="container-lg">
            <div class="section-title center">
                <div class="section-title-inner center w-v2">
                    <h4 class="sub-title" data-aos="fade-down" data-aos-duration="1000">Case studies</h4>
                    <h2 class="big-title s-color-black" data-aos="fade-up" data-aos-duration="1000">Why People Choose
                        Us?
                    </h2>
                    <p class="title-para sp-color-black" data-aos="fade-up" data-aos-duration="1000">Access a wealth of
                        educational resources including e book study guide
                        and multimedia content.our respositorey</p>
                </div>
            </div>
            <div class="case-studies-cards v1">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="case-studies-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                            <div class="card-img">
                                <a href="#"><img src="assets/img/case-studies/case-img-1.png" alt="case-img"></a>
                            </div>
                            <div class="middle-design">
                                <img src="assets/img/case-studies/case-middle-design.png" alt="middle-design">
                            </div>
                            <div class="card-content">
                                <p class="para">Feature-01</p>
                                <h3 class="title"><a href="event-details.html">Highly Expert Team Member line</a></h3>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="case-studies-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                            <div class="card-img">
                                <a href="#"><img src="assets/img/case-studies/case-img-2.png" alt="case-img"></a>

                            </div>
                            <div class="middle-design">
                                <img src="assets/img/case-studies/case-middle-design.png" alt="middle-design">
                            </div>
                            <div class="card-content">
                                <p class="para">Feature-02</p>
                                <h3 class="title"><a href="event-details.html">Educational Trends and Insights</a></h3>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="case-studies-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                            <div class="card-img">
                                <a href="#"><img src="assets/img/case-studies/case-img-3.png" alt="case-img"></a>
                            </div>
                            <div class="middle-design">
                                <img src="assets/img/case-studies/case-middle-design.png" alt="middle-design">
                            </div>
                            <div class="card-content">
                                <p class="para">Feature-03</p>
                                <h3 class="title"><a href="event-details.html">Teacher Training and Professional Man</a>
                                </h3>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <section class="about-us v1 my-120 @">
        <div class="container-lg">
            <div class="about-us-content v1">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <ul class="about-left-content">
                            <li class="content-img-1" data-aos="fade-up" data-aos-duration="1500">
                                <img src="assets/img/about-us/img-1.jpg" alt="about-img" />
                            </li>
                            <li class="content-box-1">
                                <div class="box-icon">
                                    <i class="my-icon icon-user-star"></i>
                                </div>
                                <h4 class="title">25+ Years Working Experience</h4>
                            </li>
                            <li class="content-box-2">
                                <div class="box-icon">
                                    <i class="my-icon icon-user-star"></i>
                                </div>
                                <h4 class="title">25+ Years Working Experience</h4>
                            </li>
                            <li class="content-img-2" data-aos="fade-up" data-aos-duration="1500">
                                <img src="assets/img/about-us/img-2.jpg" alt="about-img" />
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="about-right-content">
                            <div class="section-title start">
                                <div class="section-title-inner start">
                                    <h4 class="sub-title" data-aos="fade-down" data-aos-duration="1000">More About Us
                                    </h4>
                                    <h2 class="big-title s-color-black" data-aos="fade-up" data-aos-duration="1000">
                                        We the focus and offerin your education platform.
                                    </h2>
                                </div>
                            </div>
                            <ul class="awards">
                                <li data-aos="fade-left" data-aos-duration="1000">
                                    <div class="award-img">
                                        <img src="assets/img/about-us/award-img-1.jpg" alt="award-img" />
                                    </div>
                                    <div class="award-content">
                                        <h3 class="award-data"><span class="counter">1958</span></h3>
                                        <h4 class="award-title">World Education Award</h4>
                                        <p class="award-para text">
                                            Teachers play a critical role in education by instructing
                                            and guiding students,
                                        </p>
                                    </div>
                                </li>
                                <li data-aos="fade-left" data-aos-duration="1000">
                                    <div class="award-img">
                                        <img src="assets/img/about-us/award-img-2.jpg" alt="award-img" />
                                    </div>
                                    <div class="award-content">
                                        <h3 class="award-data"><span class="counter">1999</span></h3>
                                        <h4 class="award-title">Global Luminary Award</h4>
                                        <p class="award-para text">
                                            Teachers play a critical role in education by instructing
                                            and guiding students,
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <div class="play-data v2" data-aos="fade-left" data-aos-duration="1000">
                                <div class="all-btn">
                                    <a href="contact.html" class="btn-p v1 btn-blue icon-v1 rounded">MORE ABOUT US</a>
                                </div>
                                <a href="https://www.youtube.com/watch?v=pCuanWbgUt8" class="youtube">
                                    <div class="play-content">
                                        <div class="play-icon">
                                            <i class="my-icon icon-play"></i>
                                        </div>
                                        <h4 class="title">Intro Video</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="left-vector-img">
            <img src="assets/img/about-us/bg-vactor-left.png" alt="bg-vactor-left" />
        </div>
        <div class="right-vector-img">
            <img src="assets/img/about-us/bg-vacator-right.png" alt="bg-vactor-right" />
        </div>
    </section>

    <section class="courses-plan v1 @ py-120">
        <div class="container-lg">
            <div class="section-title center">
                <div class="section-title-inner center">
                    <h4 class="sub-title" data-aos="fade-down" data-aos-duration="1000">Courses plan</h4>
                    <h2 class="big-title s-color-white" data-aos="fade-up" data-aos-duration="1000">Our Most popular
                        Courses</h2>
                </div>
            </div>
            <div class="courses-cards v1">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#nav-all"
                            type="button" role="tab" aria-controls="nav-all" aria-selected="true">
                            All
                        </button>
                        <button class="nav-link" id="nav-marketing-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-marketing" type="button" role="tab" aria-controls="nav-marketing"
                            aria-selected="false">
                            Marketing
                        </button>
                        <button class="nav-link" id="nav-design-tab" data-bs-toggle="tab" data-bs-target="#nav-design"
                            type="button" role="tab" aria-controls="nav-design" aria-selected="false">
                            Design
                        </button>
                        <button class="nav-link" id="nav-seo-tab" data-bs-toggle="tab" data-bs-target="#nav-seo"
                            type="button" role="tab" aria-controls="nav-seo" aria-selected="false">
                            Seo
                        </button>
                        <button class="nav-link" id="nav-marketing2-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-marketing2" type="button" role="tab" aria-controls="nav-marketing2"
                            aria-selected="false">
                            Marketing
                        </button>

                        <button class="nav-link" id="nav-agency-tab" data-bs-toggle="tab" data-bs-target="#nav-agency"
                            type="button" role="tab" aria-controls="nav-agency" aria-selected="false">
                            Agency
                        </button>
                        <button class="nav-link" id="nav-creative-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-creative" type="button" role="tab" aria-controls="nav-creative"
                            aria-selected="false">
                            Creative
                        </button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="800"
                                data-aos-delay="100">
                                <div class="courses-cards-content" data-name="marketing">
                                    <div class="courses-img">
                                        <a href="courses-details.html">
                                            <img src="assets/img/courses/courses-img-1.jpg" alt="courses-img" />
                                        </a>
                                        <div class="category">Technology</div>
                                    </div>
                                    <div class="courses-content">
                                        <div class="price-and-review">
                                            <h2 class="price">Rs 250.00</h2>
                                            <div class="review">
                                                <p class="rating">5.0</p>
                                                <ul class="star">
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                </ul>
                                                <p class="review-text">(40)</p>
                                            </div>
                                        </div>
                                        <h4 class="courses-title">
                                            <a href="courses-details.html">Mastering Foreign Languages Spanish, Business
                                                and
                                                Communication
                                            </a>
                                        </h4>
                                        <div class="time-leson">
                                            <div class="time">
                                                <div class="time-icon"><i class="my-icon icon-time-hour"></i></div>4
                                                hour 31min
                                            </div>
                                            <div class="leson">
                                                <div class="leson-icon"><i class="my-icon icon-lesson"></i></div>20
                                                Lesson
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin">
                                        <div class="admin-data">
                                            <div class="admin-img">
                                                <img src="assets/img/courses/admin-img-1.png" alt="admin-img" />
                                            </div>
                                            <h5 class="admin-name">Alexander</h5>
                                        </div>
                                        <div class="all-btn">
                                            <div class="all-btn">
                                                <a href="login.html" class="btn-p v2 btn-blue rounded">Enroll Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="800"
                                data-aos-delay="300">
                                <div class="courses-cards-content" data-name="design">
                                    <div class="courses-img">
                                        <a href="courses-details.html">
                                            <img src="assets/img/courses/courses-img-2.jpg" alt="courses-img" />
                                        </a>
                                        <div class="category">Chemistry</div>
                                    </div>
                                    <div class="courses-content">
                                        <div class="price-and-review">
                                            <h2 class="price">Rs 250.00</h2>
                                            <div class="review">
                                                <p class="text rating">5.0</p>
                                                <ul class="star">
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                </ul>
                                                <p class="review-text">(40)</p>
                                            </div>
                                        </div>
                                        <h4 class="courses-title">
                                            <a href="courses-details.html">Navigating the World of Chemistry are
                                                Education Through
                                                Elements</a>
                                        </h4>
                                        <div class="time-leson">
                                            <div class="time">
                                                <div class="time-icon"><i class="my-icon icon-time-hour"></i></div>4
                                                hour 31min
                                            </div>
                                            <div class="leson">
                                                <div class="leson-icon"><i class="my-icon icon-lesson"></i></div>20
                                                Lesson
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin">
                                        <div class="admin-data">
                                            <div class="admin-img">
                                                <img src="assets/img/courses/admin-img-2.png" alt="admin-img" />
                                            </div>
                                            <h5 class="admin-name">Gqadb Magel</h5>
                                        </div>
                                        <div class="all-btn">
                                            <div class="all-btn">
                                                <a href="login.html" class="btn-p v2 btn-blue rounded">Enroll Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="800"
                                data-aos-delay="500">
                                <div class="courses-cards-content" data-name="Seo">
                                    <div class="courses-img">
                                        <a href="courses-details.html">
                                            <img src="assets/img/courses/courses-img-3.jpg" alt="courses-img" />
                                        </a>
                                        <div class="category">Mathematics</div>
                                    </div>
                                    <div class="courses-content">
                                        <div class="price-and-review">
                                            <h2 class="price">Rs 250.00</h2>
                                            <div class="review">
                                                <p class="text rating">5.0</p>
                                                <ul class="star">
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                </ul>
                                                <p class="review-text">(40)</p>
                                            </div>
                                        </div>
                                        <h4 class="courses-title">
                                            <a href="courses-details.html">A Comprehensive Guide to Unleashing the Power
                                                of
                                                Mathematics Learning</a>
                                        </h4>
                                        <div class="time-leson">
                                            <div class="time">
                                                <div class="time-icon"><i class="my-icon icon-time-hour"></i></div>4
                                                hour 31min
                                            </div>
                                            <div class="leson">
                                                <div class="leson-icon"><i class="my-icon icon-lesson"></i></div>20
                                                Lesson
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin">
                                        <div class="admin-data">
                                            <div class="admin-img">
                                                <img src="assets/img/courses/admin-img-3.png" alt="admin-img" />
                                            </div>
                                            <h5 class="admin-name">Benjamin</h5>
                                        </div>
                                        <div class="all-btn">
                                            <div class="all-btn">
                                                <a href="login.html" class="btn-p v2 btn-blue rounded">Enroll Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="800"
                                data-aos-delay="100">
                                <div class="courses-cards-content" data-name="marketing">
                                    <div class="courses-img">
                                        <a href="courses-details.html">
                                            <img src="assets/img/courses/courses-img-4.jpg" alt="courses-img" />
                                        </a>
                                        <div class="category">Biology</div>
                                    </div>
                                    <div class="courses-content">
                                        <div class="price-and-review">
                                            <h2 class="price">Rs 250.00</h2>
                                            <div class="review">
                                                <p class="text rating">5.0</p>
                                                <ul class="star">
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                </ul>
                                                <p class="review-text">(40)</p>
                                            </div>
                                        </div>
                                        <h4 class="courses-title">
                                            <a href="courses-details.html">Charting the Landscape of Biology Hub for
                                                Learning Life
                                                Sciences etc</a>
                                        </h4>
                                        <div class="time-leson">
                                            <div class="time">
                                                <div class="time-icon"><i class="my-icon icon-time-hour"></i></div>4
                                                hour 31min
                                            </div>
                                            <div class="leson">
                                                <div class="leson-icon"><i class="my-icon icon-lesson"></i></div>20
                                                Lesson
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin">
                                        <div class="admin-data">
                                            <div class="admin-img">
                                                <img src="assets/img/courses/admin-img-4.png" alt="admin-img" />
                                            </div>
                                            <h5 class="admin-name">Mr.Olivia</h5>
                                        </div>
                                        <div class="all-btn">
                                            <div class="all-btn">
                                                <a href="login.html" class="btn-p v2 btn-blue rounded">Enroll Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="800"
                                data-aos-delay="300">
                                <div class="courses-cards-content" data-name="design">
                                    <div class="courses-img">
                                        <a href="courses-details.html">
                                            <img src="assets/img/courses/courses-img-5.jpg" alt="courses-img" />
                                        </a>
                                        <div class="category">Physics</div>
                                    </div>
                                    <div class="courses-content">
                                        <div class="price-and-review">
                                            <h2 class="price">Rs 250.00</h2>
                                            <div class="review">
                                                <p class="text rating">5.0</p>
                                                <ul class="star">
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                </ul>
                                                <p class="review-text">(40)</p>
                                            </div>
                                        </div>
                                        <h4 class="courses-title">
                                            <a href="courses-details.html">Riding the Currents of Physics Education
                                                Through Physics
                                                Excellence</a>
                                        </h4>
                                        <div class="time-leson">
                                            <div class="time">
                                                <div class="time-icon"><i class="my-icon icon-time-hour"></i></div>4
                                                hour 31min
                                            </div>
                                            <div class="leson">
                                                <div class="leson-icon"><i class="my-icon icon-lesson"></i></div>20
                                                Lesson
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin">
                                        <div class="admin-data">
                                            <div class="admin-img">
                                                <img src="assets/img/courses/admin-img-5.png" alt="admin-img" />
                                            </div>
                                            <h5 class="admin-name">Harper Rea</h5>
                                        </div>
                                        <div class="all-btn">
                                            <div class="all-btn">
                                                <a href="login.html" class="btn-p v2 btn-blue rounded">Enroll Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="800"
                                data-aos-delay="500">
                                <div class="courses-cards-content" data-name="Seo">
                                    <div class="courses-img">
                                        <a href="courses-details.html">
                                            <img src="assets/img/courses/courses-img-6.jpg" alt="courses-img" />
                                        </a>
                                        <div class="category">Technology</div>
                                    </div>
                                    <div class="courses-content">
                                        <div class="price-and-review">
                                            <h2 class="price">Rs 250.00</h2>
                                            <div class="review">
                                                <p class="text rating">5.0</p>
                                                <ul class="star">
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                </ul>
                                                <p class="review-text">(40)</p>
                                            </div>
                                        </div>
                                        <h4 class="courses-title">
                                            <a href="courses-details.html">Mastering Foreign Languages Spanish, Business
                                                and
                                                Communication
                                            </a>
                                        </h4>
                                        <div class="time-leson">
                                            <div class="time">
                                                <div class="time-icon"><i class="my-icon icon-time-hour"></i></div>4
                                                hour 31min
                                            </div>
                                            <div class="leson">
                                                <div class="leson-icon"><i class="my-icon icon-lesson"></i></div>20
                                                Lesson
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin">
                                        <div class="admin-data">
                                            <div class="admin-img">
                                                <img src="assets/img/courses/admin-img-6.png" alt="admin-img" />
                                            </div>
                                            <h5 class="admin-name">Abigail Hgaw</h5>
                                        </div>
                                        <div class="all-btn">
                                            <a href="login.html" class="btn-p v2 btn-blue rounded">Enroll Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-marketing" role="tabpanel" aria-labelledby="nav-marketing-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="courses-cards-content" data-name="Seo">
                                    <div class="courses-img">
                                        <a href="courses-details.html">
                                            <img src="assets/img/courses/courses-img-3.jpg" alt="courses-img" />
                                        </a>
                                        <div class="category">Mathematics</div>
                                    </div>
                                    <div class="courses-content">
                                        <div class="price-and-review">
                                            <h2 class="price">Rs 250.00</h2>
                                            <div class="review">
                                                <p class="text rating">5.0</p>
                                                <ul class="star">
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                </ul>
                                                <p class="review-text">(40)</p>
                                            </div>
                                        </div>
                                        <h4 class="courses-title">
                                            <a href="courses-details.html">A Comprehensive Guide to Unleashing the Power
                                                of
                                                Mathematics Learning</a>
                                        </h4>
                                        <div class="time-leson">
                                            <div class="time">
                                                <div class="time-icon"><i class="my-icon icon-time-hour"></i></div>4
                                                hour 31min
                                            </div>
                                            <div class="leson">
                                                <div class="leson-icon"><i class="my-icon icon-lesson"></i></div>20
                                                Lesson
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin">
                                        <div class="admin-data">
                                            <div class="admin-img">
                                                <img src="assets/img/courses/admin-img-3.png" alt="admin-img" />
                                            </div>
                                            <h5 class="admin-name">Benjamin</h5>
                                        </div>
                                        <div class="all-btn">
                                            <a href="login.html" class="btn-p v2 btn-blue rounded">Enroll Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="courses-cards-content" data-name="design">
                                    <div class="courses-img">
                                        <a href="courses-details.html">
                                            <img src="assets/img/courses/courses-img-5.jpg" alt="courses-img" />
                                        </a>
                                        <div class="category">Physics</div>
                                    </div>
                                    <div class="courses-content">
                                        <div class="price-and-review">
                                            <h2 class="price">Rs 250.00</h2>
                                            <div class="review">
                                                <p class="text rating">5.0</p>
                                                <ul class="star">
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                </ul>
                                                <p class="review-text">(40)</p>
                                            </div>
                                        </div>
                                        <h4 class="courses-title">
                                            <a href="courses-details.html">Riding the Currents of Physics Education
                                                Through Physics
                                                Excellence</a>
                                        </h4>
                                        <div class="time-leson">
                                            <div class="time">
                                                <div class="time-icon"><i class="my-icon icon-time-hour"></i></div>4
                                                hour 31min
                                            </div>
                                            <div class="leson">
                                                <div class="leson-icon"><i class="my-icon icon-lesson"></i></div>20
                                                Lesson
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin">
                                        <div class="admin-data">
                                            <div class="admin-img">
                                                <img src="assets/img/courses/admin-img-5.png" alt="admin-img" />
                                            </div>
                                            <h5 class="admin-name">Harper Rea</h5>
                                        </div>
                                        <div class="all-btn">
                                            <a href="login.html" class="btn-p v2 btn-blue rounded">Enroll Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-design" role="tabpanel" aria-labelledby="nav-design-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="courses-cards-content" data-name="design">
                                    <div class="courses-img">
                                        <a href="courses-details.html">
                                            <img src="assets/img/courses/courses-img-2.jpg" alt="courses-img" />
                                        </a>
                                        <div class="category">Chemistry</div>
                                    </div>
                                    <div class="courses-content">
                                        <div class="price-and-review">
                                            <h2 class="price">Rs 250.00</h2>
                                            <div class="review">
                                                <p class="text rating">5.0</p>
                                                <ul class="star">
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                </ul>
                                                <p class="review-text">(40)</p>
                                            </div>
                                        </div>
                                        <h4 class="courses-title">
                                            <a href="courses-details.html">Navigating the World of Chemistry are
                                                Education Through
                                                Elements</a>
                                        </h4>
                                        <div class="time-leson">
                                            <div class="time">
                                                <div class="time-icon"><i class="my-icon icon-time-hour"></i></div>4
                                                hour 31min
                                            </div>
                                            <div class="leson">
                                                <div class="leson-icon"><i class="my-icon icon-lesson"></i></div>20
                                                Lesson
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin">
                                        <div class="admin-data">
                                            <div class="admin-img">
                                                <img src="assets/img/courses/admin-img-2.png" alt="admin-img" />
                                            </div>
                                            <h5 class="admin-name">Gqadb Magel</h5>
                                        </div>
                                        <div class="all-btn">
                                            <a href="login.html" class="btn-p v2 btn-blue rounded">Enroll Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="courses-cards-content" data-name="marketing">
                                    <div class="courses-img">
                                        <a href="courses-details.html">
                                            <img src="assets/img/courses/courses-img-4.jpg" alt="courses-img" />
                                        </a>
                                        <div class="category">Biology</div>
                                    </div>
                                    <div class="courses-content">
                                        <div class="price-and-review">
                                            <h2 class="price">Rs 250.00</h2>
                                            <div class="review">
                                                <p class="text rating">5.0</p>
                                                <ul class="star">
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                </ul>
                                                <p class="review-text">(40)</p>
                                            </div>
                                        </div>
                                        <h4 class="courses-title">
                                            <a href="courses-details.html">Charting the Landscape of Biology Hub for
                                                Learning Life
                                                Sciences etc</a>
                                        </h4>
                                        <div class="time-leson">
                                            <div class="time">
                                                <div class="time-icon"><i class="my-icon icon-time-hour"></i></div>4
                                                hour 31min
                                            </div>
                                            <div class="leson">
                                                <div class="leson-icon"><i class="my-icon icon-lesson"></i></div>20
                                                Lesson
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin">
                                        <div class="admin-data">
                                            <div class="admin-img">
                                                <img src="assets/img/courses/admin-img-4.png" alt="admin-img" />
                                            </div>
                                            <h5 class="admin-name">Mr.Olivia</h5>
                                        </div>
                                        <div class="all-btn">
                                            <a href="login.html" class="btn-p v2 btn-blue rounded">Enroll Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-seo" role="tabpanel" aria-labelledby="nav-seo-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="courses-cards-content" data-name="marketing">
                                    <div class="courses-img">
                                        <a href="courses-details.html">
                                            <img src="assets/img/courses/courses-img-1.jpg" alt="courses-img" />
                                        </a>
                                        <div class="category">Technology</div>
                                    </div>
                                    <div class="courses-content">
                                        <div class="price-and-review">
                                            <h2 class="price">Rs 250.00</h2>
                                            <div class="review">
                                                <p class="text rating">5.0</p>
                                                <ul class="star">
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                </ul>
                                                <p class="review-text">(40)</p>
                                            </div>
                                        </div>
                                        <h4 class="courses-title">
                                            <a href="courses-details.html">Mastering Foreign Languages Spanish, Business
                                                and
                                                Communication
                                            </a>
                                        </h4>
                                        <div class="time-leson">
                                            <div class="time">
                                                <div class="time-icon"><i class="my-icon icon-time-hour"></i></div>4
                                                hour 31min
                                            </div>
                                            <div class="leson">
                                                <div class="leson-icon"><i class="my-icon icon-lesson"></i></div>20
                                                Lesson
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin">
                                        <div class="admin-data">
                                            <div class="admin-img">
                                                <img src="assets/img/courses/admin-img-1.png" alt="admin-img" />
                                            </div>
                                            <h5 class="admin-name">Alexander</h5>
                                        </div>
                                        <div class="all-btn">
                                            <a href="login.html" class="btn-p v2 btn-blue rounded">Enroll Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="courses-cards-content" data-name="design">
                                    <div class="courses-img">
                                        <a href="courses-details.html">
                                            <img src="assets/img/courses/courses-img-2.jpg" alt="courses-img" />
                                        </a>
                                        <div class="category">Chemistry</div>
                                    </div>
                                    <div class="courses-content">
                                        <div class="price-and-review">
                                            <h2 class="price">Rs 250.00</h2>
                                            <div class="review">
                                                <p class="text rating">5.0</p>
                                                <ul class="star">
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                </ul>
                                                <p class="review-text">(40)</p>
                                            </div>
                                        </div>
                                        <h4 class="courses-title">
                                            <a href="courses-details.html">Navigating the World of Chemistry are
                                                Education Through
                                                Elements</a>
                                        </h4>
                                        <div class="time-leson">
                                            <div class="time">
                                                <div class="time-icon"><i class="my-icon icon-time-hour"></i></div>4
                                                hour 31min
                                            </div>
                                            <div class="leson">
                                                <div class="leson-icon"><i class="my-icon icon-lesson"></i></div>20
                                                Lesson
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin">
                                        <div class="admin-data">
                                            <div class="admin-img">
                                                <img src="assets/img/courses/admin-img-2.png" alt="admin-img" />
                                            </div>
                                            <h5 class="admin-name">Gqadb Magel</h5>
                                        </div>
                                        <div class="all-btn">
                                            <a href="login.html" class="btn-p v2 btn-blue rounded">Enroll Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-marketing2" role="tabpanel" aria-labelledby="nav-marketing2-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="courses-cards-content" data-name="Seo">
                                    <div class="courses-img">
                                        <a href="courses-details.html">
                                            <img src="assets/img/courses/courses-img-3.jpg" alt="courses-img" />
                                        </a>
                                        <div class="category">Mathematics</div>
                                    </div>
                                    <div class="courses-content">
                                        <div class="price-and-review">
                                            <h2 class="price">Rs 250.00</h2>
                                            <div class="review">
                                                <p class="text rating">5.0</p>
                                                <ul class="star">
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                </ul>
                                                <p class="review-text">(40)</p>
                                            </div>
                                        </div>
                                        <h4 class="courses-title">
                                            <a href="courses-details.html">A Comprehensive Guide to Unleashing the Power
                                                of
                                                Mathematics Learning</a>
                                        </h4>
                                        <div class="time-leson">
                                            <div class="time">
                                                <div class="time-icon"><i class="my-icon icon-time-hour"></i></div>4
                                                hour 31min
                                            </div>
                                            <div class="leson">
                                                <div class="leson-icon"><i class="my-icon icon-lesson"></i></div>20
                                                Lesson
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin">
                                        <div class="admin-data">
                                            <div class="admin-img">
                                                <img src="assets/img/courses/admin-img-3.png" alt="admin-img" />
                                            </div>
                                            <h5 class="admin-name">Benjamin</h5>
                                        </div>
                                        <div class="all-btn">
                                            <a href="login.html" class="btn-p v2 btn-blue rounded">Enroll Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="courses-cards-content" data-name="design">
                                    <div class="courses-img">
                                        <a href="courses-details.html">
                                            <img src="assets/img/courses/courses-img-5.jpg" alt="courses-img" />
                                        </a>
                                        <div class="category">Physics</div>
                                    </div>
                                    <div class="courses-content">
                                        <div class="price-and-review">
                                            <h2 class="price">Rs 250.00</h2>
                                            <div class="review">
                                                <p class="text rating">5.0</p>
                                                <ul class="star">
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                </ul>
                                                <p class="review-text">(40)</p>
                                            </div>
                                        </div>
                                        <h4 class="courses-title">
                                            <a href="courses-details.html">Riding the Currents of Physics Education
                                                Through Physics
                                                Excellence</a>
                                        </h4>
                                        <div class="time-leson">
                                            <div class="time">
                                                <div class="time-icon"><i class="my-icon icon-time-hour"></i></div>4
                                                hour 31min
                                            </div>
                                            <div class="leson">
                                                <div class="leson-icon"><i class="my-icon icon-lesson"></i></div>20
                                                Lesson
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin">
                                        <div class="admin-data">
                                            <div class="admin-img">
                                                <img src="assets/img/courses/admin-img-5.png" alt="admin-img" />
                                            </div>
                                            <h5 class="admin-name">Harper Rea</h5>
                                        </div>
                                        <div class="all-btn">
                                            <a href="login.html" class="btn-p v2 btn-blue rounded">Enroll Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-agency" role="tabpanel" aria-labelledby="nav-agency-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6" style="display: block">
                                <div class="courses-cards-content" data-name="marketing">
                                    <div class="courses-img">
                                        <a href="courses-details.html">
                                            <img src="assets/img/courses/courses-img-4.jpg" alt="courses-img" />
                                        </a>
                                        <div class="category">Biology</div>
                                    </div>
                                    <div class="courses-content">
                                        <div class="price-and-review">
                                            <h2 class="price">Rs 250.00</h2>
                                            <div class="review">
                                                <p class="text rating">5.0</p>
                                                <ul class="star">
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                </ul>
                                                <p class="review-text">(40)</p>
                                            </div>
                                        </div>
                                        <h4 class="courses-title">
                                            <a href="courses-details.html">Charting the Landscape of Biology Hub for
                                                Learning Life
                                                Sciences etc</a>
                                        </h4>
                                        <div class="time-leson">
                                            <div class="time">
                                                <div class="time-icon"><i class="my-icon icon-time-hour"></i></div>4
                                                hour 31min
                                            </div>
                                            <div class="leson">
                                                <div class="leson-icon"><i class="my-icon icon-lesson"></i></div>20
                                                Lesson
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin">
                                        <div class="admin-data">
                                            <div class="admin-img">
                                                <img src="assets/img/courses/admin-img-4.png" alt="admin-img" />
                                            </div>
                                            <h5 class="admin-name">Mr.Olivia</h5>
                                        </div>
                                        <div class="all-btn">
                                            <a href="login.html" class="btn-p v2 btn-blue rounded">Enroll Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6" style="display: block">
                                <div class="courses-cards-content" data-name="design">
                                    <div class="courses-img">
                                        <a href="courses-details.html">
                                            <img src="assets/img/courses/courses-img-2.jpg" alt="courses-img" />
                                        </a>
                                        <div class="category">Chemistry</div>
                                    </div>
                                    <div class="courses-content">
                                        <div class="price-and-review">
                                            <h2 class="price">Rs 250.00</h2>
                                            <div class="review">
                                                <p class="text rating">5.0</p>
                                                <ul class="star">
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                </ul>
                                                <p class="review-text">(40)</p>
                                            </div>
                                        </div>
                                        <h4 class="courses-title">
                                            <a href="courses-details.html">Navigating the World of Chemistry are
                                                Education Through
                                                Elements</a>
                                        </h4>
                                        <div class="time-leson">
                                            <div class="time">
                                                <div class="time-icon"><i class="my-icon icon-time-hour"></i></div>4
                                                hour 31min
                                            </div>
                                            <div class="leson">
                                                <div class="leson-icon"><i class="my-icon icon-lesson"></i></div>20
                                                Lesson
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin">
                                        <div class="admin-data">
                                            <div class="admin-img">
                                                <img src="assets/img/courses/admin-img-2.png" alt="admin-img" />
                                            </div>
                                            <h5 class="admin-name">Gqadb Magel</h5>
                                        </div>
                                        <div class="all-btn">
                                            <a href="login.html" class="btn-p v2 btn-blue rounded">Enroll Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-creative" role="tabpanel" aria-labelledby="nav-creative-tab">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6" style="display: block">
                                <div class="courses-cards-content" data-name="design">
                                    <div class="courses-img">
                                        <a href="courses-details.html">
                                            <img src="assets/img/courses/courses-img-5.jpg" alt="courses-img" />
                                        </a>
                                        <div class="category">Physics</div>
                                    </div>
                                    <div class="courses-content">
                                        <div class="price-and-review">
                                            <h2 class="price">Rs 250.00</h2>
                                            <div class="review">
                                                <p class="text rating">5.0</p>
                                                <ul class="star">
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                </ul>
                                                <p class="review-text">(40)</p>
                                            </div>
                                        </div>
                                        <h4 class="courses-title">
                                            <a href="courses-details.html">Riding the Currents of Physics Education
                                                Through Physics
                                                Excellence</a>
                                        </h4>
                                        <div class="time-leson">
                                            <div class="time">
                                                <div class="time-icon"><i class="my-icon icon-time-hour"></i></div>4
                                                hour 31min
                                            </div>
                                            <div class="leson">
                                                <div class="leson-icon"><i class="my-icon icon-lesson"></i></div>20
                                                Lesson
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin">
                                        <div class="admin-data">
                                            <div class="admin-img">
                                                <img src="assets/img/courses/admin-img-5.png" alt="admin-img" />
                                            </div>
                                            <h5 class="admin-name">Harper Rea</h5>
                                        </div>
                                        <div class="all-btn">
                                            <a href="login.html" class="btn-p v2 btn-blue rounded">Enroll Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6" style="display: block">
                                <div class="courses-cards-content" data-name="Seo">
                                    <div class="courses-img">
                                        <a href="courses-details.html">
                                            <img src="assets/img/courses/courses-img-6.jpg" alt="courses-img" />
                                        </a>
                                        <div class="category">Technology</div>
                                    </div>
                                    <div class="courses-content">
                                        <div class="price-and-review">
                                            <h2 class="price">Rs 250.00</h2>
                                            <div class="review">
                                                <p class="text rating">5.0</p>
                                                <ul class="star">
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                    <li><i class="my-icon icon-star"></i></li>
                                                </ul>
                                                <p class="review-text">(40)</p>
                                            </div>
                                        </div>
                                        <h4 class="courses-title">
                                            <a href="courses-details.html">Mastering Foreign Languages Spanish, Business
                                                and
                                                Communication
                                            </a>
                                        </h4>
                                        <div class="time-leson">
                                            <div class="time">
                                                <div class="time-icon"><i class="my-icon icon-time-hour"></i></div>4
                                                hour 31min
                                            </div>
                                            <div class="leson">
                                                <div class="leson-icon"><i class="my-icon icon-lesson"></i></div>20
                                                Lesson
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin">
                                        <div class="admin-data">
                                            <div class="admin-img">
                                                <img src="assets/img/courses/admin-img-6.png" alt="admin-img" />
                                            </div>
                                            <h5 class="admin-name">Abigail Hgaw</h5>
                                        </div>
                                        <div class="all-btn">
                                            <a href="login.html" class="btn-p v2 btn-blue rounded">Enroll Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="courses-bg-left">
            <img src="assets/img/courses/courses-bg-left.png" alt="courses-bg-left">
        </div>
        <div class="courses-bg-right">
            <img src="assets/img/courses/courses-bg-right.png" alt="courses-bg-left">
        </div>
    </section>

    <section class="banner v2 hidden-mobile">
        <div class="banner-content v2">
            <div class="swiper swiper-banner">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="banner-img" style="background-image: url('assets/img/banner/v2/banner-img-1.jpg');">
                            <div class="banner-data">
                                <div class="container">


                                    <ul class="catagoey animate__fadeInUp" style="animation-duration: 2s;">
                                        <li class="catagoey-data">
                                            <div class="category-icon">
                                                <i class="my-icon icon-academic-enrichment"></i>
                                            </div>
                                            <a href="#" class="title">Academic Enrichment</a>
                                        </li>
                                        <li class="catagoey-data">
                                            <div class="category-icon">
                                                <i class="my-icon icon-academic-enrichment"></i>
                                            </div>
                                            <a href="#" class="title">Academic Enrichment</a>
                                        </li>
                                        <li class="catagoey-data">
                                            <div class="category-icon">
                                                <i class="my-icon icon-academic-enrichment"></i>
                                            </div>
                                            <a href="#" class="title">Academic Enrichment</a>
                                        </li>
                                        <li class="catagoey-data">
                                            <div class="category-icon">
                                                <i class="my-icon icon-academic-enrichment"></i>
                                            </div>
                                            <a href="#" class="title">Academic Enrichment</a>
                                        </li>
                                        <li class="catagoey-data">
                                            <div class="category-icon">
                                                <i class="my-icon icon-academic-enrichment"></i>
                                            </div>
                                            <a href="#" class="title">Academic Enrichment</a>
                                        </li>
                                        <li class="catagoey-data">
                                            <div class="category-icon">
                                                <i class="my-icon icon-academic-enrichment"></i>
                                            </div>
                                            <a href="#" class="title">Academic Enrichment</a>
                                        </li>
                                        <li class="catagoey-data">
                                            <div class="category-icon">
                                                <i class="my-icon icon-academic-enrichment"></i>
                                            </div>
                                            <a href="#" class="title">Best Online Learning</a>
                                        </li>
                                        <li class="catagoey-data">
                                            <div class="category-icon">
                                                <i class="my-icon icon-academic-enrichment"></i>
                                            </div>
                                            <a href="#" class="title">Personalized Learning</a>
                                        </li>
                                        <li class="catagoey-data">
                                            <div class="category-icon">
                                                <i class="my-icon icon-academic-enrichment"></i>
                                            </div>
                                            <a href="#" class="title">Yet Student Support</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>
    <section class="why-choose-us v1 my-120 @">
        <div class="container">
            <div class="choose-us-content">
                <div class="row">
                    <div class="col-lg-6 col-xl-6">
                        <div class="choose-us-left-content">
                            <div class="choose-us-big-img">
                                <img src="assets/img/why-choose-us/big-img.jpg" alt="choose-us-big-img">
                            </div>
                            <div class="choose-us-small-img">
                                <a href="https://www.youtube.com/watch?v=pCuanWbgUt8" class="youtube play-icon">
                                    <i class="fa-solid fa-play"></i>
                                </a>
                            </div>
                            <div class="online-support">
                                <div class="support-icon">
                                    <i class="my-icon icon-online-support"></i>
                                </div>
                                <div class="support-content">
                                    <h4 class="title text">28 / 3 online support</h4>
                                    <p class="support-number text">+ 65 365 365 256</p>
                                    <div class="all-btn">
                                        <a href="#" class="btn-p v2 btn-white rounded icon-v1">Send Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="choose-us-right-content">
                            <div class="section-title">
                                <div class="section-title-inner">
                                    <h4 class="sub-title" data-aos="fade-down" data-aos-duration="1500">Why Choose Us?
                                    </h4>
                                    <h2 class="big-title" data-aos="fade-up" data-aos-duration="1500">Frequently Ask
                                        Question?</h2>
                                    <p class="title-para sp-color-black" data-aos="fade-up" data-aos-duration="1500">
                                        Teachers play a
                                        critical role in education by instructing and guiding for students,
                                        facilitating learning, providing support and encouragement, and fostering a
                                        positive</p>
                                </div>
                            </div>
                            <ul class="why-choose-us-accordion" id="accordionExample">
                                <li class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <span class="button-number">01</span>What are the different levels of
                                            education?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Education is important for personal and societal growth, enhancing critical
                                            thinking, expanding
                                            knowledge and skills, improving career prospects, and promoting social and
                                            best Scholl &amp;
                                            collage
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            <span class="button-number">02</span> What is the importance of education?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Education is important for personal and societal growth, enhancing critical
                                            thinking, expanding
                                            knowledge and skills, improving career prospects, and promoting social and
                                            best Scholl &amp;
                                            collage
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            <span class="button-number">03</span>How can I choose the educational
                                            institution or program?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Education is important for personal and societal growth, enhancing critical
                                            thinking, expanding
                                            knowledge and skills, improving career prospects, and promoting social and
                                            best Scholl &amp;
                                            collage
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="choose-us-slide">
            <h2 class="choose-us-slide-text v1 text">ONLINE CLASS </h2>
            <h2 class="choose-us-slide-text text">Courses CLASS</h2>
            <h2 class="choose-us-slide-text v2 text">ONLINE CLASS </h2>
            <h2 class="choose-us-slide-text v1 text">ONLINE CLASS </h2>
            <h2 class="choose-us-slide-text text">Courses CLASS</h2>
            <h2 class="choose-us-slide-text v2 text">ONLINE CLASS </h2>
            <h2 class="choose-us-slide-text v1 text">ONLINE CLASS </h2>
            <h2 class="choose-us-slide-text text">Courses CLASS</h2>
            <h2 class="choose-us-slide-text v2 text">ONLINE CLASS </h2>
        </div>
        <div class="why-choose-us-background-img">
            <img src="assets/img/why-choose-us/background-img.png" alt="background-img">
        </div>
    </section>
    <section class="our-best-team v1 @ py-120">
        <div class="container">
            <div class="section-title">
                <div class="section-title-inner">
                    <h4 class="sub-title" data-aos="fade-down" data-aos-duration="1500">our best team</h4>
                    <h2 class="big-title s-color-white" data-aos="fade-up" data-aos-duration="1500">Our Most Popular
                        Instructor</h2>
                </div>
            </div>
            <div class="our-best-team-content v1">
                <div class="row">
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <div class="team-img">
                            <img src="assets/img/our-best-team/team-member-img-1.jpg" alt="team-member-img">
                            <div class="team-content">
                                <div class="left-data">
                                    <h4 class="team-title"><a href="team-details.html">kmane usman</a></h4>
                                    <p class="team-para">Head of physics</p>
                                </div>
                                <div class="team-share-box">
                                    <div class="share">
                                        <a href="#">
                                            <i class="my-icon icon-share"></i>
                                        </a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="#" class="social">
                                                <i class="my-icon icon-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="social">
                                                <i class="my-icon icon-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="social">
                                                <i class="my-icon icon-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="social">
                                                <i class="my-icon icon-skype"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                        <div class="team-img">
                            <img src="assets/img/our-best-team/team-member-img-2.jpg" alt="team-member-img">
                            <div class="team-content">
                                <div class="left-data">
                                    <h4 class="team-title"><a href="team-details.html">kman usman</a></h4>
                                    <p class="team-para">Head of physics</p>
                                </div>
                                <div class="team-share-box">
                                    <div class="share">
                                        <a href="#">
                                            <i class="my-icon icon-share"></i>
                                        </a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="#" class="social">
                                                <i class="my-icon icon-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="social">
                                                <i class="my-icon icon-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="social">
                                                <i class="my-icon icon-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="social">
                                                <i class="my-icon icon-skype"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                        <div class="team-img">
                            <img src="assets/img/our-best-team/team-member-img-3.jpg" alt="team-member-img">
                            <div class="team-content">
                                <div class="left-data">
                                    <h4 class="team-title"><a href="team-details.html">kman usman</a></h4>
                                    <p class="team-para">Head of physics</p>
                                </div>
                                <div class="team-share-box">
                                    <div class="share">
                                        <a href="#">
                                            <i class="my-icon icon-share"></i>
                                        </a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="#" class="social">
                                                <i class="my-icon icon-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="social">
                                                <i class="my-icon icon-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="social">
                                                <i class="my-icon icon-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="social">
                                                <i class="my-icon icon-skype"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-120 @">
        <div class="container">
            <div class="student-feedback-content">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="feedback-left-content">
                            <div class="feedback-left-img" data-aos="zoom-in-up" data-aos-duration="2000">
                                <img src="assets/img/student-feedback/feedback-big-img.png" alt="feedback-big-img">
                            </div>
                            <div class="feedback-right-bg-img">
                                <img src="assets/img/student-feedback/feedback-left-bg.png" alt="feedback-left-bg-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="feedback-right-content">
                            <div class="section-title">
                                <div class="section-title-inner">
                                    <h4 class="sub-title" data-aos="fade-down" data-aos-duration="1500">Student Feedback
                                    </h4>
                                    <h2 class="big-title s-color-black" data-aos="fade-up" data-aos-duration="1500">Our
                                        Student feedback</h2>
                                </div>
                            </div>
                            <div class="swiper my-swiper-student-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="student-feedback-info">
                                            <div class="student-profile">
                                                <div class="student-img">
                                                    <img src="assets/img/student-feedback/student-img-1.jpg"
                                                        alt="student-img">
                                                </div>
                                                <div class="student-content">
                                                    <h4 class="content-title">By David Smith</h4>
                                                    <p class="content-para">Chemistry Student</p>
                                                </div>
                                            </div>
                                            <p class="info-para">"I found the education website incredibly helpful and
                                                user-friendly. The content is well-organized, making it easy to navigate
                                                and
                                                locate relevant resources quickly. The interactive quizzes and video
                                                tutorials
                                                greatly enhanced my understanding of the subjects. Overall, it's a
                                                fantastic
                                                platform for enhancing my learning experience."</p>
                                            <ul class="star">
                                                <li class="color-blue"><i class="my-icon icon-star"></i></li>
                                                <li class="color-blue"><i class="my-icon icon-star"></i></li>
                                                <li class="color-blue"><i class="my-icon icon-star"></i></li>
                                                <li class="color-grey"><i class="my-icon icon-star"></i></li>
                                                <li class="color-grey"><i class="my-icon icon-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="student-feedback-info">
                                            <div class="student-profile">
                                                <div class="student-img">
                                                    <img src="assets/img/student-feedback/student-img-1.jpg"
                                                        alt="student-img">
                                                </div>
                                                <div class="student-content">
                                                    <h4 class="content-title">By David Smith</h4>
                                                    <p class="content-para">Chemistry Student</p>
                                                </div>
                                            </div>
                                            <p class="info-para">"I found the education website incredibly helpful and
                                                user-friendly. The content is well-organized, making it easy to navigate
                                                and
                                                locate relevant resources quickly. The interactive quizzes and video
                                                tutorials
                                                greatly enhanced my understanding of the subjects. Overall, it's a
                                                fantastic
                                                platform for enhancing my learning experience."</p>
                                            <ul class="star">
                                                <li class="color-blue"><i class="my-icon icon-star"></i></li>
                                                <li class="color-blue"><i class="my-icon icon-star"></i></li>
                                                <li class="color-blue"><i class="my-icon icon-star"></i></li>
                                                <li class="color-grey"><i class="my-icon icon-star"></i></li>
                                                <li class="color-grey"><i class="my-icon icon-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <div class="feedback-right-bg">
                                <img src="assets/img/student-feedback/feedback-right-bg.png" alt="feedback-right-img">
                            </div>
                            <div class="quat-big-icon">
                                <i class="my-icon icon-quote"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="register-now">
        <div class="container">
            <div class="section-title center">
                <div class="section-title-inner center">
                    <h4 class="sub-title" data-aos="fade-down" data-aos-duration="1500">Register Now</h4>
                    <h2 class="big-title s-color-white" data-aos="fade-up" data-aos-duration="1500">Register Now & Get
                        Free
                        Courses Online</h2>
                </div>
            </div>
            <div class="getting-started">
                <div class="single-countdown">
                    <h2 class="count-title">50</h2><span class="count-para">Days</span>
                </div>
                <div class="single-countdown">
                    <h2 class="count-title">11</h2><span class="count-para">hour</span>
                </div>
                <div class="single-countdown">
                    <h2 class="count-title">46</h2><span class="count-para">min</span>
                </div>
                <div class="single-countdown">
                    <h2 class="count-title">54</h2><span class="count-para">second</span>
                </div>
            </div>
            <div class="get-free-now v1">
                <div class="get-free-content">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="get-free-left-content" data-aos="zoom-in-up" data-aos-duration="2500">
                                <img src="assets/img/get-free-now/student-img.png" alt="student-img" />
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="get-free-right-content">
                                <div class="section-title">
                                    <div class="section-title-inner">
                                        <h4 class="sub-title" data-aos="fade-down" data-aos-duration="1500">Get Free Now
                                        </h4>
                                        <h2 class="big-title s-color-black" data-aos="fade-up" data-aos-duration="1500">
                                            Register Now & Get
                                            Free
                                            Courses Online</h2>
                                        <p class="title-para sp-color-black" data-aos="fade-up"
                                            data-aos-duration="1500">
                                            Education for sit amet, consectetur adipiscing elit. Morbi
                                            obortis ligula euismod sededesty am augue nisl.is very kind
                                            off corn
                                        </p>
                                    </div>
                                </div>
                                <form class="get-free-form-content">
                                    <div class="group-form-box">
                                        <div class="form-box">
                                            <input type="text" placeholder="Your Name" />
                                        </div>
                                        <div class="form-box">
                                            <input type="email" placeholder="Email Address" />
                                        </div>
                                    </div>
                                    <div class="form-box">
                                        <input type="text" placeholder="Select Subject" />
                                    </div>
                                    <div class="form-box-last">
                                        <textarea cols="30" rows="10" placeholder="Type Your Message"></textarea>
                                    </div>
                                    <div class="check-box">
                                        <div class="all-btn">
                                            <button class="btn-p v1 rounded btn-blue" type="submit">
                                                Send Here
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background-big-img">
            <img src="assets/img/register-now/background-img.png" alt="background-img">
        </div>
    </section>
    <section class="my-120 @">
        <div class="container">
            <div class="case-studies-content">
                <div class="row align-items-end">
                    <div class="col-lg-7">
                        <div class="case-studies-left-content">
                            <div class="section-title">
                                <div class="section-title-inner">
                                    <h4 class="sub-title" data-aos="fade-down" data-aos-duration="1500">Case study</h4>
                                    <h2 class="big-title s-color-black" data-aos="fade-up" data-aos-duration="1500">
                                        Periodically follow up
                                        scholl demonstrate progress,</h2>
                                </div>
                            </div>
                            <ul class="case-studies-contents">
                                <li class="case-content" data-aos="fade-up" data-aos-duration="1500">
                                    <div class="case-icon">
                                        <i class="my-icon icon-embark-empowerment"></i>
                                    </div>
                                    <div class="content-data">
                                        <h3 class="title"><a href="event-details.html">Embark empowerment<span
                                                    class="my-icon icon-arrow-right-top"></span></a></h3>
                                        <p class="para">These refined sub-menu options offer a comprehensive breakdown
                                            of various
                                            educational areas students
                                        </p>
                                    </div>
                                </li>
                                <li class="case-content" data-aos="fade-up" data-aos-duration="1500">
                                    <div class="case-icon">
                                        <i class="my-icon icon-education-empowering-learne"></i>
                                    </div>
                                    <div class="content-data">
                                        <h3 class="title"><a href="event-details.html">Education empowering learne<span
                                                    class="my-icon icon-arrow-right-top"></span></a></h3>
                                        <p class="para">These refined sub-menu options offer a comprehensive breakdown
                                            of various
                                            educational areas students
                                        </p>
                                    </div>
                                </li>
                                <li class="case-content" data-aos="fade-up" data-aos-duration="1500">
                                    <div class="case-icon">
                                        <i class="my-icon icon-our-platform-caters-need"></i>
                                    </div>
                                    <div class="content-data">
                                        <h3 class="title"><a href="event-details.html">Our platform caters to need<span
                                                    class="my-icon icon-arrow-right-top"></span></a></h3>
                                        <p class="para">These refined sub-menu options offer a comprehensive breakdown
                                            of various
                                            educational areas students
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="case-studies-right-content">
                            <h2 class="big-title"><span class="counter">40</span>+ <sup class="wining-award"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="182" height="27" viewBox="0 0 182 27"
                                        fill="none">
                                        <path
                                            d="M169.659 21.0863L169.659 21.0864L169.665 21.0888C170.701 21.5448 171.866 21.77 173.155 21.77C174.176 21.77 175.066 21.6375 175.82 21.3651L175.82 21.3652L175.824 21.3638C176.461 21.1226 177.055 20.7886 177.605 20.363L177.769 21.2647L177.807 21.47H178.015H181.495H181.745V21.22V1V0.75H181.495H177.445H177.195V1V7.33689C176.128 6.74277 174.879 6.45 173.455 6.45C172.173 6.45 170.99 6.7608 169.91 7.38345C168.826 8.00899 167.965 8.92505 167.325 10.1222C166.681 11.3275 166.365 12.8006 166.365 14.53C166.365 16.2544 166.649 17.6696 167.235 18.7585L167.236 18.7603C167.82 19.823 168.627 20.6021 169.659 21.0863ZM177.195 10.8947V17.1549C176.398 17.9184 175.426 18.3 174.265 18.3C173.188 18.3 172.386 18.0217 171.826 17.4974C171.284 16.9907 170.975 16.0314 170.975 14.53C170.975 12.9355 171.286 11.7856 171.868 11.0385C172.439 10.3033 173.303 9.92 174.505 9.92C175.527 9.92 176.42 10.2437 177.195 10.8947Z"
                                            stroke="#DDDDDD" stroke-width="0.5" />
                                        <path
                                            d="M156.359 21.22V21.47H156.609H160.659H160.909V21.22V11.4398C161.269 11.253 161.703 11.0716 162.211 10.8963C162.784 10.6988 163.387 10.5209 164.02 10.3625C164.654 10.2041 165.236 10.0858 165.766 10.0073L165.979 9.97564V9.75995V6.69995V6.41522L165.697 6.45205C164.758 6.57447 163.802 6.80876 162.827 7.15378C162.03 7.42525 161.334 7.7269 160.741 8.06003L160.608 6.96957L160.581 6.74995H160.359H156.609H156.359V6.99995V21.22Z"
                                            stroke="#DDDDDD" stroke-width="0.5" />
                                        <path
                                            d="M141.846 21.2682L141.846 21.2683L141.854 21.2712C142.666 21.6044 143.538 21.77 144.468 21.77C145.725 21.77 146.785 21.6283 147.639 21.3365C148.328 21.1014 148.933 20.7893 149.451 20.3983L149.592 21.2601L149.626 21.47H149.838H153.348H153.598V21.22V12.19C153.598 10.2186 152.99 8.74065 151.728 7.81933C150.508 6.89505 148.797 6.44995 146.628 6.44995C145.496 6.44995 144.441 6.54088 143.464 6.72385C142.514 6.88578 141.697 7.09949 141.017 7.36735L140.858 7.42974V7.59995V10.45V10.7968L141.188 10.6871C142.661 10.1958 144.195 9.94995 145.788 9.94995C146.52 9.94995 147.118 9.99455 147.588 10.0808C148.062 10.1679 148.383 10.2936 148.578 10.44L148.578 10.44L148.582 10.4428C148.992 10.7379 149.228 11.2637 149.228 12.1V12.24H145.278C143.307 12.24 141.77 12.6661 140.708 13.5585L140.708 13.5585L140.706 13.5601C139.665 14.452 139.148 15.644 139.148 17.11C139.148 18.1298 139.388 19.0025 139.883 19.7129L139.883 19.713L139.888 19.72C140.395 20.3953 141.049 20.9116 141.846 21.2682ZM147.815 18.1724C147.194 18.4545 146.451 18.6 145.578 18.6C144.742 18.6 144.159 18.4454 143.791 18.1758C143.438 17.9168 143.248 17.5267 143.248 16.96C143.248 16.3627 143.428 15.9556 143.75 15.6905C144.081 15.4177 144.606 15.26 145.368 15.26H149.228V17.1681C148.882 17.5639 148.414 17.9001 147.815 18.1724Z"
                                            stroke="#DDDDDD" stroke-width="0.5" />
                                        <path
                                            d="M121.549 21.2837L121.598 21.47H121.791H125.571H125.751L125.808 21.2996L128.358 13.7032L130.854 21.298L130.91 21.47H131.091H134.811H135.004L135.053 21.2833L138.773 7.06327L138.855 6.75H138.531H134.511H134.311L134.267 6.94459L132.381 15.2451L129.951 6.92988L129.898 6.75H129.711H126.621H126.371V7V8.79099L124.289 15.3021L122.334 6.94309L122.289 6.75H122.091H118.041H117.717L117.799 7.06375L121.549 21.2837Z"
                                            stroke="#DDDDDD" stroke-width="0.5" />
                                        <path
                                            d="M104.639 21.2682L104.639 21.2683L104.647 21.2712C105.459 21.6044 106.331 21.77 107.261 21.77C108.518 21.77 109.578 21.6283 110.432 21.3365C111.121 21.1014 111.726 20.7893 112.244 20.3983L112.385 21.2601L112.419 21.47H112.631H116.141H116.391V21.22V12.19C116.391 10.2186 115.783 8.74066 114.521 7.81933C113.301 6.89505 111.59 6.44995 109.421 6.44995C108.289 6.44995 107.234 6.54088 106.257 6.72385C105.307 6.88578 104.49 7.09949 103.81 7.36735L103.651 7.42974V7.59995V10.45V10.7968L103.98 10.6871C105.454 10.1958 106.988 9.94995 108.581 9.94995C109.313 9.94995 109.911 9.99455 110.381 10.0808C110.855 10.1679 111.176 10.2936 111.371 10.44L111.371 10.44L111.375 10.4428C111.785 10.7379 112.021 11.2637 112.021 12.1V12.24H108.071C106.1 12.24 104.563 12.6661 103.501 13.5585L103.501 13.5585L103.499 13.5601C102.458 14.452 101.941 15.644 101.941 17.11C101.941 18.1298 102.181 19.0025 102.676 19.7129L102.676 19.713L102.681 19.72C103.188 20.3953 103.842 20.9116 104.639 21.2682ZM110.608 18.1724C109.987 18.4545 109.244 18.6 108.371 18.6C107.535 18.6 106.952 18.4454 106.584 18.1758C106.231 17.9168 106.041 17.5267 106.041 16.96C106.041 16.3627 106.221 15.9556 106.543 15.6905C106.874 15.4177 107.399 15.26 108.161 15.26H112.021V17.1681C111.675 17.5639 111.207 17.9001 110.608 18.1724Z"
                                            stroke="#DDDDDD" stroke-width="0.5" />
                                        <path
                                            d="M82.0525 26.538L82.053 26.538C83.1826 26.6792 84.283 26.75 85.354 26.75C87.7512 26.75 89.6197 26.4086 90.9328 25.7C91.5949 25.3426 92.1035 24.8839 92.4453 24.3195C92.7874 23.7548 92.954 23.0986 92.954 22.36C92.954 21.0647 92.5441 20.0461 91.6941 19.3479C90.8536 18.6375 89.6784 18.3 88.204 18.3H84.184C83.7892 18.3 83.5331 18.2432 83.3838 18.1594C83.313 18.1197 83.2711 18.0766 83.2458 18.0341C83.2207 17.9919 83.204 17.9367 83.204 17.86C83.204 17.6457 83.3187 17.4477 83.6637 17.2746C84.0466 17.0927 84.5184 16.9602 85.0843 16.8822C85.3717 16.9206 85.6499 16.959 85.9187 16.9974L85.928 16.9988L85.9374 16.9994C86.2433 17.0198 86.5588 17.03 86.884 17.03C88.7203 17.03 90.1518 16.5914 91.1347 15.6726L91.1348 15.6726L91.1368 15.6706C92.1135 14.7364 92.594 13.4972 92.594 11.98C92.594 11.1163 92.3893 10.3839 91.9668 9.79995H93.664H93.9054L93.9139 9.55877L94.0039 7.00877L94.013 6.74995H93.754H88.4401C88.1487 6.68927 87.7287 6.63018 87.1857 6.57191C86.6376 6.49093 86.1269 6.44995 85.654 6.44995C83.3902 6.44995 81.6383 6.87312 80.4369 7.75784C79.2129 8.63889 78.624 10.0576 78.624 11.95C78.624 12.955 78.8341 13.8307 79.2659 14.5665C79.6207 15.171 80.1192 15.6707 80.7545 16.0674C80.2438 16.3356 79.8435 16.675 79.566 17.0913C79.2185 17.6126 79.044 18.1909 79.044 18.82C79.044 19.8222 79.3866 20.6095 80.0978 21.1359C80.7949 21.6519 81.8105 21.89 83.104 21.89H86.974C87.3992 21.89 87.7445 21.9048 88.0124 21.9335C88.2862 21.9629 88.4577 22.0047 88.5493 22.0469L88.5492 22.047L88.5555 22.0497C88.6573 22.0933 88.7194 22.1484 88.7581 22.2092C88.7973 22.2708 88.824 22.3567 88.824 22.48C88.824 22.5907 88.7834 22.6824 88.6809 22.7684C88.569 22.8623 88.3801 22.9504 88.089 23.0161L88.0889 23.016L88.0816 23.0179C87.4943 23.1694 86.5214 23.25 85.144 23.25C84.2181 23.25 83.2204 23.1711 82.1507 23.0127L82.1507 23.0126L82.1462 23.012C81.0773 22.8735 80.153 22.6763 79.3713 22.4222L79.044 22.3158V22.66V25.69V25.8686L79.2131 25.9265C79.9939 26.1936 80.9415 26.3966 82.0525 26.538ZM88.0012 9.85061L88.0012 9.85065L88.0051 9.85424C88.4121 10.2273 88.644 10.8546 88.644 11.8C88.644 12.7463 88.4117 13.3596 88.0097 13.7116C87.6223 14.0482 86.8735 14.25 85.684 14.25C84.5014 14.25 83.7435 14.0305 83.3349 13.6574C82.9439 13.2821 82.724 12.6809 82.724 11.8C82.724 10.8343 82.9659 10.2133 83.3848 9.86138L83.3849 9.86143L83.3892 9.85763C83.8206 9.47795 84.5651 9.25995 85.684 9.25995C86.8702 9.25995 87.6146 9.48081 88.0012 9.85061Z"
                                            stroke="#DDDDDD" stroke-width="0.5" />
                                        <path
                                            d="M61.4961 21.22V21.47H61.7461H65.7961H66.0461V21.22V11.2453C66.4287 10.8809 66.898 10.5713 67.4576 10.3184C68.0696 10.0509 68.6651 9.91995 69.2461 9.91995C70.2939 9.91995 70.9203 10.1216 71.2248 10.4421L71.2248 10.4422L71.2293 10.4467C71.5588 10.7762 71.7561 11.3729 71.7561 12.31V21.22V21.47H72.0061H76.0561H76.3061V21.22V12.1C76.3061 10.2265 75.8688 8.79063 74.9449 7.84522C74.018 6.8968 72.5684 6.44995 70.6561 6.44995C69.647 6.44995 68.6775 6.62503 67.7492 6.97554C67.0195 7.24099 66.3847 7.54913 65.8478 7.90184L65.7446 6.97234L65.7199 6.74995H65.4961H61.7461H61.4961V6.99995V21.22Z"
                                            stroke="#DDDDDD" stroke-width="0.5" />
                                        <path
                                            d="M53.6682 4.38996V4.63996H53.9182H58.3282H58.5782V4.38996V1.20996V0.959961H58.3282H53.9182H53.6682V1.20996V4.38996ZM53.9982 21.22V21.47H54.2482H58.2982H58.5482V21.22V6.99996V6.74996H58.2982H52.4782H52.2564L52.2299 6.97018L51.8699 9.97018L51.8364 10.25H52.1182H53.9982V21.22Z"
                                            stroke="#DDDDDD" stroke-width="0.5" />
                                        <path
                                            d="M35.0703 21.22V21.47H35.3203H39.3703H39.6203V21.22V11.2453C40.003 10.8809 40.4722 10.5713 41.0319 10.3184C41.6438 10.0509 42.2393 9.91995 42.8203 9.91995C43.8681 9.91995 44.4945 10.1216 44.7991 10.4421L44.799 10.4422L44.8035 10.4467C45.133 10.7762 45.3303 11.3729 45.3303 12.31V21.22V21.47H45.5803H49.6303H49.8803V21.22V12.1C49.8803 10.2265 49.443 8.79063 48.5191 7.84522C47.5922 6.8968 46.1426 6.44995 44.2303 6.44995C43.2212 6.44995 42.2517 6.62503 41.3234 6.97554C40.5937 7.24099 39.9589 7.54913 39.4221 7.90184L39.3188 6.97234L39.2941 6.74995H39.0703H35.3203H35.0703V6.99995V21.22Z"
                                            stroke="#DDDDDD" stroke-width="0.5" />
                                        <path
                                            d="M27.2424 4.38996V4.63996H27.4924H31.9024H32.1524V4.38996V1.20996V0.959961H31.9024H27.4924H27.2424V1.20996V4.38996ZM27.5724 21.22V21.47H27.8224H31.8724H32.1224V21.22V6.99996V6.74996H31.8724H26.0524H25.8306L25.8042 6.97017L25.4442 9.97018L25.4106 10.25H25.6924H27.5724V21.22Z"
                                            stroke="#DDDDDD" stroke-width="0.5" />
                                        <path
                                            d="M5.25652 21.2766L5.30154 21.4699H5.5H9.37H9.55455L9.60891 21.2935L13.1712 9.73714L16.4797 21.2887L16.5316 21.4699H16.72H20.56H20.7588L20.8036 21.2763L25.2736 1.95626L25.3444 1.6499H25.03H21.07H20.8708L20.8263 1.84401L18.044 13.9748L14.5905 1.83151L14.5388 1.6499H14.35H11.05H10.8V1.8999V4.38331L7.93531 13.9596L5.23401 1.84549L5.19039 1.6499H4.99H1H0.685078L0.756517 1.95661L5.25652 21.2766Z"
                                            stroke="#DDDDDD" stroke-width="0.5" />
                                    </svg></sup></h2>
                            <div class="case-studies-right-img">
                                <img src="assets/img/case-studies/v2/right-img.jpg" alt="case-studies-img">
                                <div class="discover-more">
                                    <h3 class="title">Based on the analysis, pinpoint areas is education point</h3>
                                    <div class="all-btn">
                                        <a href="contact.html" class="btn-p v2 rounded-full btn-white">Discover More</a>
                                    </div>
                                    <div class="right-img-bg">
                                        <img src="assets/img/case-studies/v2/right-img-bg.png" alt="right-img-bg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-blog v1 @ py-120">
        <div class="container">
            <div class="section-title v2">
                <div class="section-title-inner w-v2">
                    <h4 class="sub-title" data-aos="fade-down" data-aos-duration="1500">Our Blog</h4>
                    <h2 class="big-title s-color-black" data-aos="fade-up" data-aos-duration="1500">Our Lest News & Blog
                        education
                        Details</h2>
                </div>
                <div class="all-btn mt-15" data-aos="fade-up" data-aos-duration="1500">
                    <a href="blog.html" class="btn-p v1 btn-blue rounded icon-v1">VIEW ALL BLOG</a>
                </div>
            </div>
            <div class="blog-cards v1">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-xl-5" data-aos="fade-right" data-aos-duration="1500">
                        <div class="card-content-1">
                            <div class="card-img-1">
                                <img src="assets/img/our-blog/blog-img-1.jpg" alt="blog-img">
                            </div>
                            <div class="content-data">
                                <div class="admin-data">
                                    <div class="date-content">
                                        <div class="content-icon">
                                            <i class="my-icon icon-calander"></i>
                                        </div>
                                        <p class="date-para">15 may 2024</p>
                                    </div>
                                    <div class="user-content">
                                        <div class="content-icon">
                                            <i class="my-icon icon-user-3"></i>
                                        </div>
                                        <p class="user-para">by Themepul</p>

                                    </div>
                                </div>
                                <h3 class="big-title">Uncover Your True Potential at Edupls We can time for many.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-7">
                        <div data-aos="fade-left" data-aos-duration="1500">
                            <div class="card-content-2">
                                <div class="card-img-2">
                                    <img src="assets/img/our-blog/blog-img-2.jpg" alt="blog-img">
                                </div>
                                <div class="content-data">
                                    <div class="admin-data">
                                        <div class="date-content">
                                            <i class="my-icon icon-calander"></i>
                                            <p class="date-para">15 may 2024</p>
                                        </div>
                                        <div class="user-content">
                                            <i class="my-icon icon-user-3"></i>
                                            <p class="user-para">by Themepul</p>
                                        </div>
                                    </div>
                                    <h3 class="big-title"><a href="blog-details.html">Beyond the Classroom Explorin for
                                            Educational
                                            Horizons</a></h3>
                                    <p class="para">Education is a crucial field of study, as it helps us understand the
                                        impact of human
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-left" data-aos-duration="1500">
                            <div class="card-content-3">
                                <div class="card-img-3">
                                    <img src="assets/img/our-blog/blog-img-3.jpg" alt="blog-img">
                                </div>
                                <div class="content-data">
                                    <div class="admin-data">
                                        <div class="date-content">
                                            <i class="my-icon icon-calander"></i>
                                            <p class="date-para">15 may 2024</p>
                                        </div>
                                        <div class="user-content">
                                            <i class="my-icon icon-user-3"></i>
                                            <p class="user-para">by Themepul</p>

                                        </div>
                                    </div>
                                    <h3 class="big-title"><a href="blog-details.html">Empowering Minds Navigating the
                                            Landscape of
                                            Education</a></h3>
                                    <p class="para">Education is a crucial field of study, as it helps us understand the
                                        impact of human
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="my-120">
        <div class="container">
            <div class="swiper mySwiper-logo">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#">
                            <img src="assets/img/brands-logo/logo-1.svg" alt="brand-logo" />
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#">
                            <img src="assets/img/brands-logo/logo-2.svg" alt="brand-logo" />
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#">
                            <img src="assets/img/brands-logo/logo-3.svg" alt="brand-logo" />
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#">
                            <img src="assets/img/brands-logo/logo-4.svg" alt="brand-logo" />
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#">
                            <img src="assets/img/brands-logo/logo-4.svg" alt="brand-logo" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-to-top">
        <a href="#" class="to-top"><span class="fa-solid fa-arrow-up to-top-icon"></span></a>
    </div>
    @include('include/footer')
    @livewireScripts

</body>

</html>