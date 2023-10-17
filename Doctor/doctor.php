<html>
    <head>
      <title>BBC</title>
      <link rel="icon" href="../Images\logo3.png"  type="image/png">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      
      <link rel="stylesheet" href="../footer.css" />

        <script>
            window.onload = function() {
                const urlParams = new URLSearchParams(window.location.search);
                const alertMessage = urlParams.get('alert');
                if (alertMessage) {
                    alert(alertMessage);
                }
            }
        </script>

        <style>
          .doctor .box-container{
            display: grid;
            grid-template-columns: repeat(auto-fit, 35rem);
            gap:1.5rem;
            justify-content: center;
            }
            .doctor .box-container .box{
                text-align: center;
                padding:2rem;
                box-shadow: var(--box-shadow);
                border:var(--border);
                border-radius: .5rem;
            }


            .doctor .box-container .box h3{
                margin:1rem 0;
                font-size: 2.5rem;
                color:var(--black);
            }

            .doctor .box-container .box .price{
                font-size: 2rem;
                color:var(--black);
            }


        </style>
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
                        <li><a href="../index.php" class="nav-link px-2 text-white">Home</a></li>
                        <li><a href="#" class="nav-link px-2 text-secondary">Doctors</a></li>
                        <li><a href="../feedback/feedback.html" class="nav-link px-2 text-white">Feedback</a></li>
                        <li><a href="#aboutus" class="nav-link px-2 text-white">About</a></li>
                    </ul>
      
                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                        <address>
   
                            <a href="mailto:BBC@gmail.com">BBC@gmail.com</a><br>
                            <a href="tel:+0766037332">(076) 603-7332</a>
                          </address>
                    </form>
      
                    <div class="text-end">
                        <button type="button" onclick="window.location.href='../login/login.html';" class="btn btn-outline-light me-2">Login</button>
                        <!-- <button type="button" class="btn btn-warning">Sign-up</button> -->
                    </div>
                </div>
              </div>
            </header>
        </main>
        </div>

        
        <section class="doctor"><br>
            <h1 class="heading"><center>Doctors</center></h1>
            <div class="box-container">
                <?php
                                  @include'../config.php';

                ?>
                    <?php
                        
                        $select_doctor = mysqli_query($conn, "SELECT * FROM `doctor`");
                        if(mysqli_num_rows($select_doctor) > 0){
                        while($fetch_doctor = mysqli_fetch_assoc($select_doctor)){
                    ?>
            
                <!-- <form action="add.php" method="post"> -->
                <form action="add.php?name=<?php echo $fetch_doctor['name']; ?>&time=<?php echo $fetch_doctor['time']; ?>" method="post">

                <div class="box">
                    <img src="uploaded_img/<?php echo $fetch_doctor['image']; ?>" alt="">
                    <div class="price">Name :<?php echo $fetch_doctor['name']; ?></div>
                    <div class="price">Time :<?php echo $fetch_doctor['time']; ?></div>
                    <div class="price"><?php echo $fetch_doctor['type']; ?></div><br>
                    <a href="add.php"><input type="submit" class="btn btn-info" value=" Add Appointment" name="submit"></a>
                </div>
                </form>
        
                <?php
                };
                };
                ?>
        
            </div>
        </section>
        </br></br></br></br></br></br>
        <footer class="footer-distributed">
            <div class="footer-left">
                <h3><span>BBC Hospital</span></h3>
        
                <p class="footer-links">
                <a href="../index.php">Home</a>
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
                <p><span>Madawala Ulphatha,</span> Mathale</p>
                </div><br>
        
                <div>
                    <address>
    
                        &ensp;&ensp;&ensp;&ensp;<a href="mailto:BBC@gmail.com">BBC@gmail.com</a><br><br /><br />
                        &ensp;&ensp;&ensp;&ensp;<a href="tel:+0766037332">(076) 603-7332</a>
                    </address>
                </div>
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