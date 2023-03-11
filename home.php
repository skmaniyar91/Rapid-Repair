<?php
    session_start();
    if(!isset($_SESSION['username'])){
    header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rapid Repair</title>
    <link rel="stylesheet" href="style.css"/>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
  <header class="text-gray-600 body-font">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl"><h2 class = log-name>Welcome <?php echo $_SESSION['username']; ?></h2></span>
    </a>
    <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
    <ul>
          <li><a href="#" class="Home">Home</a></li>
          <li><a href="#" class="About">About</a></li>
          <li><a href="#" class="Service">Service</a></li>
          <li><a href="#" class="Contect">Contact</a></li>
        </ul>
    </nav>
    <li><a href="logout.php" class="logout">LOGOUT</a></li>
    
  </div>
</header>
    <main>
      <section class="section sec1">
        <div class="con container1">
          <div class="container1-data">
            <p>welcome to</p>
            <h1>rapid repair</h1>
            <p>here is the first online automobile management system</p>
            <div>
              <br />
              <a href="#" class="btn learn">learn more</a>
            </div>
          </div>
          <div class="container1-img">
            <img src="img/con1.jpg" alt="" />
          </div>
        </div>
      </section>
      <section class="section sec2">
        <div class="con container2">
          <div class="container2-img">
            <img src="img/workexperience.jpg" alt="" />
          </div>
          <div class="container2-data">
            <h2 class="heading">our work experience</h2>
            <p>
              <br />
              We have many experienced employee related with different car
              services. click on following botton to know more about our work
              and our achivements.
            </p>
            <div>
              <br />
              <a href="#" class="btn our-achivements">our achivements</a>
            </div>
          </div>
        </div>
      </section>
      <section class="section sec3">
        <div class="container3">
          <h2 class="heading">services</h2>
          <p><br />we are providing following types of services <br /><br /></p>
        </div>
        <div class="container4">
          <div class="item i1"><a href="#" class="btn">Vehical service</a></div>
          <div class="item i2">
            <img src="img/lessmaintenence.jpg" alt="" class="serv" />
          </div>
          <div class="item i3"><a href="#" class="btn">home service</a></div>
          <div class="item i4">
            <img src="img/mehanicalwork.jpg" alt="" class="serv" />
          </div>
          <div class="item i5">
            <a href="#" class="btn">Less maintainence</a>
          </div>
          <div class="item i6">
            <img src="img/homeservice.jpg" alt="" class="serv" />
          </div>
        </div>
      </section>
      <section class="section counter">
        <div class="container5">
          <div>
            <h2 class="counter-number">2000+</h2>
            <p>work done</p>
          </div>
          <div>
            <h2 class="counter-number">5000+</h2>
            <p>happy clients</p>
          </div>
          <div>
            <h2 class="counter-number">6000+</h2>
            <p>experienced workers</p>
          </div>
          <div>
            <h2 class="counter-number">3000+</h2>
            <p>4.5 star review</p>
          </div>
        </div>
      </section>
      <section class="section swiper">
        <div class="container6">
          <h2 class="heading">happy clients</h2>

          <!-- Swiper -->
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="slider-container">
                  <div class="slider-container-msg">
                    Always available to answer any questions. Very knowledgeable
                    about the services they provide. Would recommend to anyone!
                  </div>
                  <div class="client-data">
                    <div class="client-img">
                      <img src="img/alex.jpg" alt="" />
                    </div>
                    <div class="client-name">
                      <h4>Alex</h4>
                      <p>Enterprenure and invester</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slider-container">
                  <div class="slider-container-msg">
                    It's always a pleasure to work with your team. They are
                    personable, responsive, and results-oriented!
                  </div>
                  <div class="client-data">
                    <div class="client-img">
                      <img src="img/harry.jpg" alt="" />
                    </div>
                    <div class="client-name">
                      <h4>harry</h4>
                      <p>Mechanical Enginner</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slider-container">
                  <div class="slider-container-msg">
                    Your services are really fast and Qiuck i hope you will
                    continue this type of service.by the way thanks a lot for
                    this kind of service.
                  </div>
                  <div class="client-data">
                    <div class="client-img">
                      <img src="img/john.jpg" alt="" />
                    </div>
                    <div class="client-name">
                      <h4>john</h4>
                      <p>Mechanical manager</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slider-container">
                  <div class="slider-container-msg">
                    Workers are very cooperative they are ready to do possible
                    helps our car is now smooth and the estimate cost is also
                    optimal.
                  </div>
                  <div class="client-data">
                    <div class="client-img">
                      <img src="img/kartik.jpg" alt="" />
                    </div>
                    <div class="client-name">
                      <h4>kartik</h4>
                      <p>Car electrician</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slider-container">
                  <div class="slider-container-msg">
                    You are providing such a greate services and offers for
                    interprenure.i will suggest this website to every one.
                  </div>
                  <div class="client-data">
                    <div class="client-img">
                      <img src="img/lana.jpg" alt="" />
                    </div>
                    <div class="client-name">
                      <h4>lana</h4>
                      <p>Enterprenure and invester</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slider-container">
                  <div class="slider-container-msg">
                    Due to my bussy schedule i cant maintaine my vehicle but
                    with you home service i dont have to go any where.
                  </div>
                  <div class="client-data">
                    <div class="client-img">
                      <img src="img/luise.jpg" alt="" />
                    </div>
                    <div class="client-name">
                      <h4>luise</h4>
                      <p>experienced Worker</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <section class="section register">
        <div class="overlay"></div>
        <div class="container7">
          <h2><span>Register</span> your shop on our website</h2>
          <p>
            Register your Shop on our website and get more cliets.To register click on below button. 
          </p>
          <a href="Register_Garage.php" target="_blank" class="btn">Register</a>
        </div>
      </section>
      <section class="section contact">
        <div class="container8">
          <h2 class="heading">Contact Us</h2>
          <div class="contect-main">
            <form action="#">
              <div class="grid-name-email">
                <div>
                  <label for="username"></label>
                  <input
                    type="text"
                    name="username"
                    id="username"
                    placeholder="Name"
                  />
                </div>
                <div>
                  <label for="email"></label>
                  <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Email"
                  />
                </div>
              </div>
              <div>
                <label for="subject"></label>
                <input
                  type="text"
                  name="subject"
                  id="subject"
                  placeholder="Subject"
                />
              </div>
              <div>
                <label for="textarea"></label>
                <textarea
                  name="message"
                  id="message"
                  cols="30"
                  rows="10"
                  placeholder="Type a message or Query"
                ></textarea>
              </div>
              <div>
                <a href="#" class="btn">Submit</a>
              </div>
            </form>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <div class="container9">
        <div class="f-about">
          <h3>about</h3>
          <p>Rapid Repair will halp you to manage and maintain your vehicle.
            it provide the optimal estimate cost.So just register you vehicle on @RapidRepapir and dont worry about your vehicle
          </p>
        </div>
        <div class="f-links">
          <h3>links</h3>
          <ul>
            <li><a href="#" class="foot-link">home</a></li>
            <li><a href="#" class="foot-link">about</a></li>
            <li><a href="#" class="foot-link">service</a></li>
            <li><a href="#" class="foot-link">help</a></li>
          </ul>
        </div>
        <div class="f-service">
          <h3>service</h3>
          <ul>
            <li><a href="#" class="foot-link">home service</a></li>
            <li><a href="#" class="foot-link">Car washing</a></li>
            <li><a href="#" class="foot-link">vehicle painting</a></li>
            <li><a href="#" class="foot-link">Vehicle maintainace</a></li>
          </ul>
        </div>
        <div class="f-question">
          <h3>Have a Question</h3>
          <address>
            <div>
              <p>
              Navsari, india <br>396424 <br> +91 9737861199 <br>samirkhamaniyar@gmail.com
              <br>tailoranup071@gmail.com
              <br>jogiavinash96@gmail.com
              <br>vinitsarang486@gmail.com
            </p>
            </div>
          </address>
        </div>
      </div>
      <div class="social">
        <img src="img/facebook-icon.png" alt="#" class="social face">
        <img src="img/twitter-icon.png" alt="#" class="social twitter">
        <img src="img/linkedin-icon.png" alt="#" class="social link">
      </div>
      <div class="copy">
          <p>Copyright &copy;2022 All rights reserved | Automobile Management System</p>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="index.js"></script>
  </body>
</html>
