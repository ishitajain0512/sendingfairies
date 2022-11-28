<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="script.js"></script>
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Sending Fairies</label>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#a">About</a></li>
            <li><a href="#b1">Services</a></li>
            <li><a href="#foot">Contact</a></li>
            <!-- <li><a href="register.php">Register</a></li> -->
            <li><a href="login.php">Login</a></li>
            <li><a href="logout.php">Logout</a></li>
            <!-- <li><a href='cartcheck.php'><img src="cart.png" width="35rem" height="35rem"></a></li> -->
            <li><a href='session.php'><img src="cart.png" width="35rem" height="35rem"></a></li>
        </ul>
    </nav>
    <section>
        <video autoplay muted loop id="myVideo">
            <source src="oldpeople.mp4" type="video/mp4">
        </video>
    </section>
    <div class="container1">
        <div class="c1">
            <h1>Live</h1>
            <h1>Laugh</h1>
            <h1>Love.</h1>
            <p>We keep families healthy and connected.</p>
        </div>
    </div>
    <div class="container2">
        <div class="c2">

            <ul>
                <li>MEDICINE</li>
                <li>PRIMARY CARE</li>
                <li>PERSONAL CARE</li>
            </ul>

        </div>
    </div>
    <div class="circle1-p1">

        <div class="image-box1">
            <img src="old2.jpg">
        </div>
        <div class="p1-h1" id="a">
            <h1>Our Aim</h1>
            <h2>We care for you</h2>
            <p>Sending Fairies aims to help all the senior citizens within the country who live alone and do not have
                easy access to healthcare facilities.</p>
        </div>
    </div>
    <div class="circle2-p2">
        <div class="p2-h2">
            <h1>Ageing is inevitable</h1>
            <p>We started sending fairies with an aim to provide help and aid to the senior members of our society.
                When we have played our part in the society it's time to give break to our health and focus on our own
                well being, sadly many of us are not fortunate enough to always have help at hand in times of need.
            </p>
        </div>
        <div class="image-box2">
            <img src="old.jpg">
        </div>
    </div>
    <div class="i-want-to">
        <h1>I Want to ...</h1>
        <div class="row1">
            <div class="inner-b1">
                <div class="text">
                    <img src="https://cdn-icons-png.flaticon.com/512/2869/2869658.png">
                    Talk to a doctor now
                </div>
                <a href="contact-form-02/f1.php">
                    <span class="link1"></span>
                </a>
            </div>
            <div class="inner-b2">
                <div class="text">
                    <img src="https://cdn-icons-png.flaticon.com/512/4148/4148500.png">
                    Get a flu shot
                </div>
                <a href="contact-form-02/f2.php">
                    <span class="link1"></span>
                </a>
            </div>
        </div>
        <div class="row2">
            <div class="inner-b3">
                <div class="text">
                    <img src="https://cdn-icons-png.flaticon.com/512/6746/6746294.png">
                    Get a Covid-19 test
                </div>
                <a href="contact-form-02/f3.php">
                    <span class="link1"></span>
                </a>
            </div>
            <div class="inner-b4">
                <div class="text">
                    <img src="https://cdn-icons-png.flaticon.com/512/6592/6592963.png">
                    Log into my details
                </div>
                <a href="session4.php">
                    <span class="link1"></span>
                </a>
            </div>
        </div>
    </div>

    <div class="b1" id="b1">
        <div class="zoom">
            <img src="https://images.pexels.com/photos/139398/thermometer-headache-pain-pills-139398.jpeg?auto=compress&cs=tinysrgb&w=600"
                alt="p2">
        </div>
        <h2>Need medicines</h2>
        <p>
            Get all medicines within 2 hours across India.
        </p>

        <button onclick="window.location.href='b2.html';">
            Read here
        </button>
    </div>
    <div class="b2">
        <div class="zoom">
            <img src="https://images.pexels.com/photos/4021779/pexels-photo-4021779.jpeg?auto=compress&cs=tinysrgb&w=600"
                alt="p2">
        </div>
        <h2>Primary Care</h2>
        <p>
            A primary care provider is the best first point of contact for all of your health needs.
        </p>
        <button onclick="window.location.href='b1.html';">
            Read here
        </button>
    </div>
    <div class="b3">
        <div class="zoom">
            <img src="https://images.pexels.com/photos/7551686/pexels-photo-7551686.jpeg?auto=compress&cs=tinysrgb&w=600"
                alt="p2">
        </div>
        <h2>Personal care</h2>
        <p>
            A personal care will be sent to your house for 24-7 needs.
        </p>
        <button onclick="window.location.href='b3.html';">
            Read here
        </button>
    </div>
    <footer class="footer" id="foot">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#a">about us</a></li>
                        <li><a href="#b1">our services</a></li>
                        <li><a>Sending Fairies</a></li>
                        <li><a>sendingfairies@gmail.com</a></li>
                        <li><a>198 West 21th Street, Suite 721 New Delhi</a></li>
                        <li><a>+ 1235 2355 98</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="admin/login.php">Admin</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online shop</h4>
                    <ul>
                        <li><a href="cart/index.html">Medicines</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="credit">Copyright @ 2022 by Ishita Jain & Swasti Tyagi </div>


</body>

</html>