<?php require_once("mail.php");

?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Login</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
      <link rel="stylesheet" href="assets/css/fonts.css">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://use.fontawesome.com/ca5a33b919.js"></script> 
</head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <!--nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
          <div class="container"><a class="navbar-brand d-flex align-items-center fw-bold fs-2" width=50%; href="#"><img
                class="d-inline-block me-3" src="assets/img/icons/logo1.png" height="35px" width="100px" alt="" /></a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
                <!--li class="nav-item"><a class="nav-link" style="color: gold;" href="#">Upgrade to premium</a></li-->
                <!--li class="nav-item"><a class="nav-link " aria-current="page"
                    href="index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link " href="about.html">About us</a></li>
                <li class="nav-item"><a class="nav-link" href="https://app.bridgingspace.co/" target="_blank">Services</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="https://doctor.bridgingspace.co/#/signin">Rent</a></li>
                <!--li class="nav-item"><a class="nav-link" href="#">Apps</a></li-->


              <!--/ul> 
              <a class="btn btn-sm  hover-top fw-bold"
                style="padding-left: 50px;background-color: #E5C53F; color: #272222; padding-right: 50px;"
                href="contact.html" role="button">Get Started</a>
            </div>
          </div>
        </nav>
        <section class="py-0">
      <br> <br> <br> <br>
      <!-- <section> close ============================-->
      <!-- ============================================-->

            <div id="menu-bar-container">
                
                <div id="menu-bar"><br><br>
                     <div class="container-lg">
          <div class="row justify-content-center">
            <div class="col-12 text-left">
                <a href="index.html">
              <h6 class="fw-bold" style="color:  #E5C53F"><i class="fa-solid fa-chevron-left"></i>Home</h6>
                    </a>
                
                    <!--p id="first- mx-auto mx-md-0" style= "border:250px" >The <b style="color: #689F84">Dwellar</b> team understands how overwhelming it is to get good accomodation or apartments that suits your taste; Therefore, our services allow you to find roommates for a shared space apartment in Nigeria, all located in a choice location.</p-->
                </div>
        </div></div>
                </div>
        </div><br><br>
        <style>
        #menu-bar-container{
            background-color:#DFEEE7;
            width: 100%;
            height:150px
            }
           
            #first{
                text-align: left;
                 color: white;
                padding: 40px;
                
                
            }
           
        </style>
       
        <br> <br>
        <div class="container">
          <div class="row g-xl-0 align-items-center">
             
         <div class="col-md-6 text-center text-md-start order-md-0">
              <a href="index.html">
           <img src="assets/img/icons/logo1.png" height="35px" width="100px" alt="" /></a>
              <h4 class="fw-semi-bold lh-base" style="color:  #E5C53F"> Welcome</h4>
              <!--hr class="text-dark mx-auto mx-md-0" style="height:2px;width:50px" /-->
              <p >Fill out the form for us to know you better</p>
             
              </div></div>
           
                 <!--div class="">
                  <button class="btn btn-lg btn-outline-primary  z-index-2 hover-top"text-align="left" type="submit">Next</button>
                </div-->
                 <form action="#" class="form">
     
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div
          class="progress-step progress-step-active" ></div>
        <div class="progress-step" ></div>
       
        
      </div>

      <!-- Steps -->
                     <form  action="login.php" method="post">
      <div class="form-step form-step-active">
           <div class="input-group">
             <!--label for="firstname">First Name</label-->
            <input type="text" placeholder="Firstname" name="firstname" id="firstname"/>
            </div>
               <div class="input-group">
                   <!--label for="lastname">Last Name</label-->
                 <input type="text" placeholder="Lastname" name="lastname" id="lastname"/>
             </div>

             <div class="input-group">
                <!--label for="Email">Email</label-->
                 <input type="email" placeholder="Email" name="email" id="email"/>
            </div>

          <div class="input-group">
                 <!--label for="number">Phone Number</label-->
                <input type="phone" placeholder="Phone" name="phone" id="phone"/>
         </div>
            
        <div class="">
          <a href="#" class="btn btn-next btn-outline-primary width-100 ml-auto">Next</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          <!--label for="password">Password</label-->
          <input type="password"  placeholder="password" name="password" id="password" />
        </div>
        <div class="input-group">
          <!--label for="confirmPassword">Confirm Password</label-->
          <input
            type="password" placeholder="Confirm Password" name="confirmPassword" id="confirmPassword"/>
        </div>
          <select  class="grow" name="grow" style="color: #ccc">
            <option class="draw">Male</option>
              <option  class="draw">Female</option>
          
          </select>
          <style>
              .grow{
                     display: block;
    width: 96%;
    padding: 0.35rem;
    border: 1px solid #ccc;
    margin: 0.4rem;
              }
              .draw{
                   display: block;
    width: 100%;
    padding: 0.35rem;
    border: 1px solid #ccc;
              }
          </style>
          <!--div class="form-select">
             
          </div-->
           <div class="input-group">
                 <!--label for="number">Phone Number</label-->
                <input type="number" placeholder="Age" name="age" id="age"/>
         </div>
          
           <div class="input-group">
                 <!--label for="number">Phone Number</label-->
                <input type="text" placeholder="Monthly Income" name="income" id="income"/>
         </div>
         
          <p>By clicking Submit you agree to our <strong style="color:#689F84 "> Terms of Service</strong> and <strong style="color:#689F84 ">Privacy Policy.</strong></p>
      
       <style>
           .oppo{
               display: inline;
           }
           input{
               margin: .4rem;
           }
        
          </style>

        <div class="btns-group">
          <a href="#" class="btn btn-prev btn-outline-primary">Previous</a>
             
                  <button class="btn btn-lg btn-outline-primary  z-index-2 hover-top"text-align="left" name="submit_user" type="submit">Submit</button>
              
          <!--input type="submit" value="Submit" class="btn btn-primary" style="color: #689F84 !important" /-->
        </div>
      </div>
     
        
      <!--div class="form-step">
        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" />
        </div>
        <div class="input-group">
          <label for="confirmPassword">Confirm Password</label>
          <input
            type="password" name="confirmPassword" id="confirmPassword"/>
        </div>
          
        <div class="btns-group">
          <a href="#" class="btn btn-prev btn-outline-primary">Previous</a>
          <input type="submit" value="Submit" class="btn" />
        </div>
          </div-->
    </form> 
            
            
            <!--form action="”mailto:support@bridgingspace.co " method=”POST” enctype=”multipart/form-data”>
             <div class="info">
                 <div class="row">
                     
                      <div class="col-md-6">
                 <p><b>NAME</b></p>
          <input class="fname" type="text" name="name" placeholder="First & last name" style="width: 100%">
                     </div>
                      <div class="col-md-6" style="float: right">
                 <p><b>DESCRIPTION</b></p> 
                          
          <input  type="text" name="name" placeholder="A couple of sentence why you are getting in touch"style="width: 100%">
                     </div>
                 <p><b>EMAIL</b></p>
          <input type="email" name="name" placeholder="Email address" style="width: 50%">
                 </div></div>
                 <!--div class="text-left pt-4 z-index-2"-->
              <!--button class="btn btn-lg btn-outline-primary  z-index-2 hover-top"text-align="left" type="submit">Next</button-->
                     
                 <style>
                 *,
*::before,
*::after {
  box-sizing: border-box;
}


/* Global Stylings */
input {
  display: block;
  width: 100%;
  padding: 0.35rem;
  border: 1px solid #ccc;
 
}

.width-50 {
  width: 50%;
}

.ml-auto {
  margin-left: auto;
}

.text-center {
  text-align: center;
}

/* Progressbar */
.progressbar {
  position: relative;
  display: flex;
  justify-content: space-between;
  counter-reset: step;
  margin: 2rem 0 4rem;
}

.progressbar::before,
.progress {
  content: "";
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  height: 4px;
  width: 100%;
  background-color: #dcdcdc;
  z-index: -1;
}

.progress {
  background-color: #689F84;;
  width: 0%;
  transition: 0.3s;
}

.progress-step {
  width: 1.1875rem;
  height: 1.1875rem;
  background-color: #dcdcdc;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.progress-step::before {
  counter-increment: step;
  content: counter(step);
}

.progress-step::after {
  content: attr(data-title);
  position: absolute;
  top: calc(100% + 0.5rem);
  font-size: 0.75rem;
  color: #666;
}

.progress-step-active {
  background-color: #689F84;
  color: #fff;
}

/* Form */
.form {
  width: clamp(320px, 30%, 430px);
  margin: 0 auto;
  border-radius: 0.35rem;
 
}

.form-step {
  display: none;
  transform-origin: top;
  animation: animate 0.5s;
}

.form-step-active {
  display: block;
}

.input-group {
  margin: 1.5rem 0;
}

@keyframes animate {
  from {
    transform: scale(1, 0);
    opacity: 0;
  }
  to {
    transform: scale(1, 1);
    opacity: 1;
  }
}

/* Button */
.btns-group {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 1.5rem;
}

.btn {
  padding: 0.75rem;
  display: block;
  text-decoration: none;
  background-color: var(--primary-color);
  text-align: center;
  border-radius: 0.25rem;
  cursor: pointer;
  transition: 0.3s;
}
.btn:hover {
  box-shadow: 0 0 0 2px #fff, 0 0 0 3px var(--primary-color);
}

                 </style>
             
                </div>
        </div>
            
      <!--section class="py-8" id="testimonial">
        <div class="container">
          <div class="bg-holder z-index-1" style="background-image:url(assets/img/illustrations/dot.png);background-position:right top;background-size:auto;margin-left:-30px;margin-top:10px;filter:contrast(1.5);">
          </div> -->
          <!--/.bg-holder-->

          <!-- <div class="bg-holder z-index-1" style="background-image:url(assets/img/illustrations/dot-2.png);background-position:left bottom;background-size:auto;margin-left:-35px;margin-top:-65px;filter:contrast(1.5);">
          </div> -->
          <!--/.bg-holder-->

          <!--div class="carousel slide" id="carouselExampleDark" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <div class="row h-100">
                  <div class="col-12">
                    <div class="card text-white bg-primary-gradient">
                      <div class="card-body p-4 p-md-4 p-lg-7">
                        <h2 class="fw-bold text-white text-center">What our customer are saying</h2>
                        <hr class="mx-auto" style="height:2px;width:50px" />
                        <div class="d-md-flex align-items-md-center mt-5 text-center text-md-start"><img class="img-fluid me-4 me-md-3 me-lg-4" src="assets/img/gallery/user-1.png" width="100" alt="" />
                          <div class="w-md-25 my-3">
                            <h5 class="mb-0 fw-medium text-white">Edward Newgate</h5>
                            <p class="fw-normal mb-0">Founder Circle</p>
                          </div>
                          <div class="w-md-75">
                            <p class="card-text ms-md-5">“Our dedicated patient engagement app and web portal allow you to access information instantaneously (no tedeous form, long calls, or administrative hassle) and securely”</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <div class="row h-100">
                  <div class="col-12">
                    <div class="card text-white bg-primary-gradient">
                      <div class="card-body p-4 p-md-4 p-lg-7">
                        <h2 class="fw-bold text-white text-center">Our dear customers said about us</h2>
                        <hr class="mx-auto" style="height:2px;width:50px" />
                        <div class="d-md-flex align-items-md-center mt-5 text-center text-md-start"><img class="img-fluid me-4 me-md-3 me-lg-4" src="assets/img/gallery/user-2.png" width="100" alt="" />
                          <div class="w-md-25 my-3">
                            <h5 class="mb-0 fw-medium text-white">Meshach Philips</h5>
                            <p class="fw-normal mb-0">UI/UX Designer</p>
                          </div>
                          <div class="w-md-75">
                            <p class="card-text ms-md-5">“Our dedicated patient engagement app and web portal allow you to access information instantaneously (no tedeous form, long calls, or administrative hassle) and securely”</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row h-100">
                  <div class="col-12">
                    <div class="card text-white bg-primary-gradient">
                      <div class="card-body p-4 p-md-4 p-lg-7">
                        <h2 class="fw-bold text-white text-center">Our dear customers said about us</h2>
                        <hr class="mx-auto" style="height:2px;width:50px" />
                        <div class="d-md-flex align-items-md-center mt-5 text-center text-md-start"><img class="img-fluid me-4 me-md-3 me-lg-4" src="assets/img/gallery/user-3.png" width="100" alt="" />
                          <div class="w-md-25 my-3">
                            <h5 class="mb-0 fw-medium text-white">Jeny Doe</h5>
                            <p class="fw-normal mb-0">Web Designer</p>
                          </div>
                          <div class="w-md-75">
                            <p class="card-text ms-md-5">“Our dedicated patient engagement app and web portal allow you to access information instantaneously (no tedeous form, long calls, or administrative hassle) and securely”</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-4 flex-center">
              <div class="col-4 col-sm-5 text-end position-relative z-index-2"><a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a></div>
              <div class="col-auto position-relative z-index-2">
                <ol class="carousel-indicators">
                  <li class="active" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"></li>
                  <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                  <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                </ol>
              </div>
              <div class="col-4 col-sm-5 position-relative z-index-2"><a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a></div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="bg-holder" style="background-image:url(assets/img/illustrations/article-bg.png);background-position:right center;background-size:auto;">
        </div> -->
        <!--/.bg-holder-->

        <!--div class="container-lg">
          <div class="bg-holder" style="background-image:url(assets/img/illustrations/dot-2.png);background-position:left top;background-size:initial;margin-top:120px;margin-left:-35px;">
          </div> 
          <!--/.bg-holder-->

          <!--div class="row flex-center">
            <div class="col-auto text-center">
              <h2 class="fw-bold">Check out our latest article</h2>
              <hr class="mx-auto text-dark" style="height:2px;width:50px" />
            </div>
          </div>
          <div class="row h-100 justify-content-center pt-6">
            <div class="col-12 col-sm-9 col-md-4 mt-4">
              <div class="card h-100 rounded-3 shadow"><img src="assets/img/gallery/article-1.jpg" alt="" />
                <div class="card-body p-4 text-center text-md-start">
                  <h5 class="fw-bold">Physical and Mental Health</h5>
                  <p class="card-text">To most people, physical health and mental health are two very different things. But that...</p><a class="stretched-link text-decoration-none" href="https://www.goodtherapy.org/blog/whats-the-connection-between-physical-health-and-mental-health/" role="button">Read more
                    <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                    </svg></a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-9 col-md-4 mt-4">
              <div class="card h-100 rounded-3 shadow"><img src="assets/img/gallery/article-2.jpg" alt="" />
                <div class="card-body p-4 text-center text-md-start">
                  <h5 class="fw-bold">Youth from Suicide  </h5>
                  <p class="card-text">Suicide has a tremendous impact on the lives of countless individuals...</p><a class="stretched-link text-decoration-none" href="https://www.goodtherapy.org/blog/Let%27s-Protect-Youth-from-Suicide%3Fp%3D41867" role="button">Read more
                    <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                    </svg></a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-9 col-md-4 mt-4">
              <div class="card h-100 rounded-3 shadow"><img src="assets/img/gallery/article-3.jpg" alt="" />
                <div class="card-body p-4 text-center text-md-start">
                  <h5 class="fw-bold">Therapy Practice in 2022  </h5>
                  <p class="card-text">The beginning of a new year is as good a time as any to take a step back and assess your private...</p><a class="stretched-link text-decoration-none" href="https://www.goodtherapy.org/blog/Level-Up-Your-Private-Therapy-Practice-2022" role="button">Read more
                    <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                    </svg></a>
                </div>
              </div>
            </div>
            <div class="text-center pt-4 z-index-2">
              <button class="btn btn-lg btn-outline-primary rounded-pill z-index-2 hover-top" type="submit">View all</button>
            </div>
          </div--> 
            </div>
<br><br><br>
     <footer class="site-footer">
                <div class="container">
                     
              <a href="index.html">
                  <img
                class="d-inline-block me-3" src="assets/img/icons/logo1.png" height="50%" width="100px" alt="" /></a>
               <br><br>
               
                  <div class="row">
                    <div class="col-md pr-md-4 mb-5 mb-md-0">
                         <p class="text-left" style="color: #7d7987;">Our services allow you to  find<br> roommates for a shared apartment in<br> Nigeria, all located in a choice location.</p>
                      <!--h6 style="color: white">FAQ</h6><br>
                      <h6 style="color: white">SERVICES</h6>
                      <br>
                      <a href="https://doctor.bridgingspace.co/">
                        <h6 style="color: white">THERAPIST JOBS</h6>
                      </a><br>
                      <div class="sun" style="display: inline-block">
                        <table>
                          <tr>
                            <td> <a href="terms.html">
                                <h6 style="color: white"> Terms of Use |</h6>
                              </a> </td>

                            <td> <a href="policy.html">
                                <h6 style="color: white">Privacy Policy</h6></a>
                            </td>
                          </tr>
                        </table--><br><br>

                                <p>&copy; 2022 <b style="color: #689F84">Dwellar</b>
                          All rights reserved.</p>
                           
                      </div>
                   

                    <div class="col-md mb-2 mb-md-0">
                      <a href="about.html">
                        <h6 style="color:#E5C53F;"><b>Company</b></h6>
                      </a>
                        <a href="about.html">
                            <h6 style="color: #7d7987;">About Us</h6></a>
                      <a href="mailto:support@bridgingspace.co">
                        <h6 style="color: #7d7987;">Partner with us</h6>
                      </a><br>

                    </div><br>
                       <div class="col-md mb-3 mb-md-0">
                      <a href="about.html">
                     <h6 style="color:#E5C53F;"><b>Legal</b></h6>
                      </a>
                      <h6 style="color: #7d7987;"> Privacy Policy</h6>
                      <a href="mailto:support@bridgingspace.co">
                        <h6 style="color: #7d7987;">Terms and Conditions</h6>
                      </a>
                    

                    </div>
                      
                    <div class="col-md mb-2 mb-md-0">
                      <h6 style="color:#E5C53F;"><b>Contact Us</b></h6>
                        <h6 style="color: #7d7987;">Support@dwellar.com</h6><br>
                      <div class="row gallery">
                        <div class="col-3">
                          <a href="#"><img src="assets/img/icons/twitter1_031906.png" width="30px " alt="Image"  ></a>
                        </div>
                          <div class="col-3">
                          <a href="#"><img src="assets/img/icons/faceook1_031902.png" height="30px"   alt="Image"></a>
                        </div>
                        <div class="col-3">
                          <a href="#"><img src="assets/img/icons/linked%20in1_031906.png"  width="30px" alt="Image" ></a>
                        </div>
                       
                             <div class="col-3">
                          
                        </div>
                          
                      </div>
                         <h6 style="color:#689F84" "align-items: flex-end">www.dwellar.com</h6>
                    </div>


                    <style>
                      .site-footer {
                        background-color:  #DFEEE7;
                        padding: 45px 0 20px;
                        font-size: 15px;
                        line-height: 24px;
                        color: #7d7987;
                      }

                      .mdi-36px {
                        font-size: 39px;
                        margin-right: 0px;
                        display: inline-block;
                      }
                    </style>
                  </div>
                </div>
            </div>
        </section>
        <style>
          .fl-wrap {
            float: left;
            width: 100%;
            position: relative;

          }

          .bbb-wrapper .subcribe-form p {
            color: #fff;
            font-size: 14px
          }

          .bbb-wrapper .subcribe-form form {
            max-width: 450px;
            margin: 15px auto;
            position: relative
          }

          .bbb-wrapper .subcribe-form #subscribe input {
            width: 100%;
            height: 48px;
            background: #fff;
            border: none;
            outline: none;
            border-radius: 1px;
            padding: 0 10px;
            /* box-shadow: 0px 0px 0px 7px rgba(255, 255, 255, 0.2) */
          }

          .bbb-wrapper .subcribe-form #subscribe #subscribe-button {
            height: 38px;
            padding: 0 30px;
            border-radius: 3px;
            border: none;
            position: absolute;
            right: 6px;
            top: 6px;
            font-size: 11px;
            color: #fff;
            cursor: pointer
          }

          .subscribe-message {
            color: #fff;
            float: left;
            margin-top: 10px;
            text-align: left;
            font-weight: 500;
            line-height: 19px
          }

          .color-bg {
            background: #54A494
          }

          #subscribe-button:hover {
            background: #2C3B5A;
            color: #fff
          }
        </style>

        <!-- ============================================-->
        <!-- <section> begin ============================-->

        <!-- <section> close ============================-->
        <!-- ============================================-->


      </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="assets/js/theme.js"></script>

   

    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500&amp;display=swap" rel="stylesheet">
  </body>

</html>
