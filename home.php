<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pixel photography</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <div class="logo-wrapper">
                <a class="logo" href="index.html"> <strong>JV</strong> pixel photography </a>
            </div>

            <ul class="navbar-links">
                <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#works">Works</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="header">
        <div class="container">
            <div class="box">
                <?php
include 'connection.php';
$query = "SELECT Description FROM home";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $description = $row['Description'];
} else {
    $description = "Default description"; // Provide a default if no description is found
}
mysqli_close($conn);
?>


<div class="col-12 col-lg-8 col-xl-6">
    <div class="welcome-text">
        <br>
                <h1 class="">I'm Sohan kc</h1>
                
                <p data-animation="bounceInUp" data-delay="500ms"><?php echo $description; ?></p>
                <a href="#" class="btn">My works</a>
                <a href="#" class="btn">Contact me</a>
            </div>

        </div>
    </div>


    <!-- About section -->
    <section class="about bg-light" id="about">
        <div class="container">

            <div class="box">
                <h2 class="title">
                    Sohan kc, a professional photographer
                </h2>
                <p>
                    Photography is more than just a profession for me; it's a way to connect with people and the world
                    around us. I strive to bring out the beauty in the ordinary and the extraordinary, ensuring each
                    shot tells a unique story. Join me on my journey as I explore new perspectives and create timeless
                    memories, one click at a time.
                </p>
                <ul>
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <span>Over 15 years of experience</span>
                    </li>
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <span>200+ successfully executed projects</span>

                    </li>
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <span>Exceptional work quality</span>
                    </li>
                </ul>

                <div class="about-bottom">
                    <img src="./images/signature.svg" alt="" class="signature">
                    <div class="about-name-wrapper">
                        <div class="about-name-dark">Sohan kc</div>
                        <div class="about-rol">Founder of Photography</div>
                    </div>
                </div>
            </div>

            <div class="about-img">
                <div class="img">
                    <img src="./images/pexels-alexis-caso-2944191.jpg" alt="">
                </div>
            </div>

        </div>
    </section>
    <!-- About section -->


    <!-- Services section -->
    <section class="services bg-dark" id="services">
        <div class="heading">
            <h2 class="section-title"><span>My Services</span></h2>
            <p class="section-title2">I specialize in portrait, event, lifestyle, landscape, and commercial photography.
                I also offer professional photo editing and custom packages to meet your needs. For bookings, visit
                www.sohankcphotography.com or contact me at sohan@example.com or (123) 456-7890. Let's create stunning
                visual memories together!</p>
        </div>
        <div class="container">

            <div class="box border-01">
                <div class="item">
                    <img src="./images/icons/icon-1.svg" alt="">
                    <a href="services-page.html">
                        <h6>Photography</h6>
                        <p>Photography bibendum eros amet vacun the vulputate in the vitae miss.</p>
                    </a>
                </div>
            </div>
            <div class="box border-02">
                <div class="item">
                    <img src="./images/icons/icon-2.svg" alt="">
                    <a href="services-page.html">
                        <h6>Videography</h6>
                        <p>Videography bibendum eros amen vacun the vulputate in the vitae miss.</p>
                    </a>
                </div>
            </div>

            <div class="box border-03">
                <div class="item">
                    <img src="./images/icons/icon-3.svg" alt="">

                    <a href="services-page.html">
                        <h6>Photo Retouching</h6>
                        <p>Photo Retouching bibenum eros amen vacun the vulputate the vitae miss.</p>
                    </a>
                </div>
            </div>


            <div class="box border-04">
                <div class="item">
                    <img src="./images/icons/icon-4.svg" alt="">
                    <a href="services-page.html">
                        <h6>Aerial Photography</h6>
                        <p>Aerial Photography bibendum eros amen vacun the vulputate in the miss.</p>
                    </a>
                </div>
            </div>




            <div class="box border-05">
                <div class="item">
                    <img src="./images/icons/icon-5.svg" alt="">
                    <a href="services-page.html">
                        <h6>Lightning Setup</h6>
                        <p>Lightning Setup bibendum eros amen vacus duru in the vitae miss.</p>
                    </a>
                </div>
            </div>
            <div class="box border-06">
                <div class="item">
                    <img src="./images/icons/icon-6.svg" alt="">
                    <a href="services-page.html">
                        <h6>Video Color Grading</h6>
                        <p>Video Color Grading bibendum amen vacus the vulputate in the vitae.</p>
                    </a>
                </div>
            </div>

        </div>
    </section>
    <!-- Services section -->



    <!-- Works Gallery -->
    <section class="gallery bg-dark" id="works">
        <div class="heading">
            <h2 class="title">My Works</h2>
        </div>
        <div class="container">
            <ul>
                <li class="active" data-filter="*">All</li>
                <li data-filter=".personal">Personal</li>
                <li data-filter=".wedding">Wedding</li>
                <li data-filter=".event">Event</li>
                <li data-filter=".fashion">Fashion</li>
                <li data-filter=".product">Product</li>
            </ul>

            <div class="image-container">
            <?php
include 'connection.php';
$query = "SELECT img_name FROM image";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo '<div style="display: flex; flex-wrap: wrap; justify-content: space-around;">'; // Container with flexbox
    $count = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        if ($count % 3 == 0 && $count != 0) {
            echo '</div><div style="display: flex; flex-wrap: wrap; justify-content: space-around;">'; // Start a new row every 3 images
        }
        echo '<div style="margin: 10px; text-align: center;">'; // Centered and with margin for spacing
        echo '<img src="images/' . $row['img_name'] . '" alt="Image" style="max-width: 300px; height: 300px; object-fit: cover;">'; // Image sizing
        echo '</div>';
        $count++;
    }
    echo '</div>'; // End of container
} else {
    echo '<p>No images found in the database.</p>';
}
?>
                </div>
            </div>
    </section>
    <!--  Works Gallery -->

    <!-- Contact section -->
    <section class="contact bg-light" id="contact">
        <div class="container">

            <div class="box">
                <h2 class="title">
                    Need help with professional photography? Let's work together!
                </h2>
                <ul>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>+912 098 345 765</span>
                    </li>
                    <li>
                        <i class="fa fa-at" aria-hidden="true"></i>
                        <span>sohankc56@gmail.com</span>

                    </li>
                   
                </ul>

            </div>

            <div class="box">
                <div class="box-r">
                    <div class="form-box">
                        <div class="form-title">
                            <h2>Get in touch</h2>
                            <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all fields are filled
    if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['comments'])) {
        include 'connection.php';
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $comments = $_POST['comments'];
        $query = "INSERT INTO contact (First_name, Last_name, Email, Comments) VALUES ('$first_name', '$last_name', '$email', '$comments')";
        if (mysqli_query($conn, $query)) {
            echo "Thank you for contacting us.";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
        // Close connection
        mysqli_close($conn);
    } else {
        echo "Please fill in all fields.";
    }
}
?>
<form action="#" method="post">
<h3 class="contact-heading">Get in touch</h3>
    <div class="form-floating my-3">
        <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First name" aria-label="First name" required />
        <label for="first_name">First name</label>
    </div>
    <div class="form-floating my-3">
        <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last name" aria-label="Last name" required />
        <label for="last_name">Last name</label>
    </div>
    <div class="form-floating my-3">
        <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required />
        <label for="email">Email address</label>
    </div>
    <div class="form-floating my-3">
        <textarea class="form-control" id="comments" name="comments" placeholder="Comments" rows="3" required></textarea>
        <label for="comments">Comments</label>
    </div>
    <br />
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

                    </div>


                </div>

            </div>

        </div>
    </section>
    <!-- Contact section -->



    <!-- Footer -->
    <footer class="footer">
        <div class="newsletter">
            <div class="container">
                <div class="box">
                    <h2>Sign up to get latest update</h2>
                    <p>Sign up for our monthly newsletter for the latest news &amp; articles</p>
                </div>
                <div class="form">
                    <form>
                        <input type="email" name="email" placeholder="Enter Email Address" required="">
                        <button>Subscribe Now</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="second-footer">
            <div class="container">
                <div class="box">
                    <div class="logo-wrapper">
                        <a class="logo" href="index.html"> <strong>JV</strong> Sohan KC </a>
                    </div>
                    <div class="text">
                        <p>Photography is more than a medium for factual communication of ideas.</p>
                    </div>
                </div>
                <div class="box">
                    <h3 class="title">Quick Links</h3>
                    <ul>
                        <li><a href="about.html">About</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="works.html">Works</a></li>
                        <li><a href="blog.html">Blog</a></li>
                    </ul>
                </div>

                <div class="box">
                    <h3 class="title">Contact</h3>
                    <ul>
                        <li>
                            <i class="fa fa-phone"></i>
                            <span>
                                +1 123-090-4040
                            </span>
                        </li>
                        <li>
                            <i class="fa fa-at"></i>
                            <span>
                                Sohankc56@gmail.com
                            </span>
                        </li>
                        
                    </ul>
                </div>

            </div>
        </div>

        <div class=" copyright">
            <div class="box">
                <p class="">Copyright © 2023 by <a href="#">sohankc</a>. All rights reserved.</p>
            </div>
            <div class="box">
                <ul class="social-icons">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
            </div>
        </div>
        </div>
    </footer>

</body>

</html>