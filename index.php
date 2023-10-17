<html lang="en">
  <head>
      <title>BBC</title>
      <link rel="icon" href="Images\logo3.png"  type="image/png">

      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      

      <link
       rel="stylesheet"
       href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    

   
      <link rel="stylesheet" href="footer.css" />
      <link rel="stylesheet" href="HomePage.css" />
      <script src="HomePage.js"></script>

  </head>
  <body>
    <main>
      <div class="b-example-divider"></div>

      <header class="p-3 bg-dark text-white">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <!-- <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                  <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
              </a> -->

              <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                  <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
                  <li><a href="Doctor/doctor.php" class="nav-link px-2 text-white">Doctors</a></li>
                  <li><a href="feedback/feedback.html" class="nav-link px-2 text-white">Feedback</a></li>
                  <li><a href="#aboutus" class="nav-link px-2 text-white">About</a></li>
              </ul>

              <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
              <address>
   
                <a href="mailto:BBC@gmail.com">BBC@gmail.com</a><br>
                <a href="tel:+0766037332">(076) 603-7332</a>
              </address>
              </form>

              <div class="text-end">
                  <button type="button" onclick="window.location.href='login/login.html';" class="btn btn-outline-light me-2">Login</button>
                  <!-- <button type="button" class="btn btn-warning">Sign-up</button> -->
              </div>
          </div>
        </div>
      </header>
    </main>

    <br />
    <h1 class="headingHome">Welcome to BBC Hospital</h1>
    <br />

    <div class="container">
      <div class="mySlides">
        <div class="numbertext">1 / 6</div>
        <img src="images/1.jpg" style="width: 100%" />
      </div>
        
      <div class="mySlides">
        <div class="numbertext">2 / 6</div>
        <img src="images/2.jpg" style="width: 100%" />
      </div>
        
      <div class="mySlides">
        <div class="numbertext">3 / 6</div>
        <img src="images/3.jpg" style="width: 100%" />
      </div>

      <div class="mySlides">
        <div class="numbertext">4 / 6</div>
        <img src="images/4.jpg" style="width: 100%" />
      </div>
        
      <div class="mySlides">
        <div class="numbertext">5 / 6</div>
        <img src="images/5.jpg" style="width: 100%" />
      </div>
      
      <div class="mySlides">
        <div class="numbertext">5 / 6</div>
        <img src="images/6.jpg" style="width: 100%" />
      </div>
        
      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>

      <div class="caption-container">
        <p id="caption"></p>
      </div>

      <div class="row">
        <div class="column">
          <img
            class="demo cursor"
            src="images/1.jpg"
            style="width: 100%"
            onclick="currentSlide(1)"
            alt="Best Surgeon"
          />
        </div>
        <div class="column">
          <img
            class="demo cursor"
            src="images/2.jpg"
            style="width: 100%"
            onclick="currentSlide(2)"
            alt="Best Doctors"
          />
        </div>
        <div class="column">
          <img
            class="demo cursor"
            src="images/3.jpg"
            style="width: 100%"
            onclick="currentSlide(3)"
            alt="Best Laboraties"
          />
        </div>
        <div class="column">
          <img
            class="demo cursor"
            src="images/4.jpg"
            style="width: 100%"
            onclick="currentSlide(4)"
            alt="Modern ICU"
          />
        </div>
        <div class="column">
          <img
              class="demo cursor"
              src="images/5.jpg"
              style="width: 100%"
              onclick="currentSlide(5)"
              alt="Online Patient Portal"
            />
        </div>
        <div class="column">
          <img
              class="demo cursor"
              src="images/6.jpg"
              style="width: 100%"
              onclick="currentSlide(6)"
              alt="Full fuctional new machines"
            />
        </div>
      </div>
    </div>

    <br />
    <br />
    <br />
    <div align="center">
      <iframe
        width="800"
        height="400"
          frameborder="0"
        src="https://www.bing.com/maps/embed?h=400&w=800&cp=7.607132057241714~80.63434792741282&lvl=14.334465991071443&typ=d&sty=r&src=SHELL&FORM=MBEDV8"
        scrolling="no"
      >
      </iframe>
    </div>
    <br />
    <br />
    <table class="table table-light text-center"> 
      <thead>
        <tr>
          <th scope="col">Day</th>
          <th scope="col">Open Hours</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Sunday</th>
          <td>Open 24 Hours</td>
        </tr>
        <tr>
          <th scope="row">Monday</th>
          <td>Open 24 Hours</td>
        </tr>
        <tr>
          <th scope="row">Tuesday</th>
          <td>Open 24 Hours</td>
        </tr>
        <tr>
          <th scope="row">Wednsday</th>
          <td>Open 24 Hours</td>
        </tr>
        <tr>
          <th scope="row">Thursday</th>
          <td>Open 24 Hours</td>
        </tr>
        <tr>
          <th scope="row">Friday</th>
          <td>Open 24 Hours</td>
        </tr>
        <tr>
          <th scope="row">Saturday</th>
          <td>Open 24 Hours</td>
        </tr>
      </tbody>
    </table>


    <script>
      let slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides((slideIndex += n));
      }

      function currentSlide(n) {
        showSlides((slideIndex = n));
      }

      function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("demo");
        let captionText = document.getElementById("caption");
        if (n > slides.length) {
          slideIndex = 1;
        }
        if (n < 1) {
          slideIndex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
      }
    </script>




  <footer class="footer-distributed">
    <div class="footer-left">
      <h3><span>BBC Hospital</span></h3>

      <p class="footer-links">
        <a href="index.php">Home</a>
        <br />
        <a href="#"
          >Contact Us <br />
          For Clinicians:</a
        >
        If you have specific questions about the guidelines,<br />
        please email us: BBC@gmail.com <br /><br />
        Other Inquiries: For other questions or contact information,
        <br />please contact 0766037332
      </p>

      <p class="footer-company-name">BBC Hospital &copy; 2023</p>
    </div>
      

    <div class="footer-center">
      <div>
        <i class="fa fa-map-marker"></i>
        <p><span>Madawala Ulphatha,</span> <br>Mathale</p>
      </div>

      <br /><br /><br />
      <address>
   
      &ensp;&ensp;&ensp;&ensp;<a href="mailto:BBC@gmail.com">BBC@gmail.com</a><br><br /><br />
      &ensp;&ensp;&ensp;&ensp;<a href="tel:+0766037332">(076) 603-7332</a>
      </address>
      <br />
      
    </div>

      <div class="footer-right">
        <p class="footer-company-about" id="aboutus">
          <span>About BBC Hospital</span>
          
          <br />
          <br />
          Our Aim: Our main objective is to provide an excellent service for an
          affordable price and take Services BBC of you and your loved ones.
        </p>
      </div>
  </footer>

        


    

  </body>
</html>