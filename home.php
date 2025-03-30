<?php
include("header.php");
?>

<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
<a href="logout.php">Logout</a>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Carousel with 4 Slides</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/home.css">
</head>

<body>
    <!-- welcome div -->
    <div class="row mb-5">
        <div class="col text-center">
            <h1 class="text-success"> Welcome To<br><span class="text-danger">The Credo Peace Initiative
                    Foundation</span></h1>
            <p>
                we are dedicated to fostering peace, unity, and resilience in communities worldwide. Through dialogue,
                education, and empowerment, we strive to create a future where harmony prevails. Join us in building a
                world where peace is not just a dream, but a reality.
            </p>
            <a class="text-decoration-none" href="member_register.php">
                <button
                    class="slide-button p-3 fw-5 fs-5 bg-danger text-light text-center border-none rounded-pill">Join
                    Credo Movement Today</button>
            </a>
        </div>




    </div>

    <!-- Carousel -->
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/image/feeding.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/image/freedom_hand.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/image/health-care.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Our services -->

    <div class="container">
        <div class="card">
            <div class="img-container">
                <img src="/image/sharing food.jpg" alt="" />
            </div>
            <div class="card-details">
                <h2> Food Distribution </h2>
                <p>
                    <b>No One Should Go to Bed Hungry</b>

                    Millions of nigerians struggle daily without enough food to eat. A small act of kindness can
                    make a
                    big difference. Your support can provide meals, hope, and a chance at a better tomorrow. Join us
                    in the fight against hunger—because everyone deserves a full plate.
                </p>
            </div>
        </div>
        <div class="card">
            <div class="img-container">
                <img src="/image/school_children.jpg" alt="" />
            </div>
            <div class="card-details">
                <h2> Free Education </h2>
                <p>
                    <b>Give Every Child a Chance to Learn</b>

                    Millions of children are out of school, missing the opportunity for a brighter future. Your
                    support can provide education, hope, and a path to a better life. Join us in making a
                    difference—donate, volunteer, or spread the word today!
                </p>
            </div>
        </div>
        <div class="card">
            <div class="img-container">
                <img src="/image/homeless-people.jpg" alt="" />
            </div>
            <div class="card-details">
                <h2>Free Accomodation</h2>
                <p>
                    Thousands sleep in the cold every night, without a roof, warmth, or security. Together, we can
                    change that. Your support can provide shelter, dignity, and hope to those in need. Help us give
                    them a place to call home—because everyone deserves safety and comfort.
                </p>
            </div>
        </div>
        <div class="card">
            <div class="img-container">
                <img src="/image/health-care.png" alt="" />
            </div>
            <div class="card-details">
                <h2>Free Health care!!!</h2>
                <p>
                    Millions of impoverished people lack access to basic medical care, suffering from treatable
                    diseases
                    due to financial hardship. Your support can provide life-saving treatment, medicine, and hope.
                    Join
                    us in making healthcare accessible for all—because no one should suffer simply because they are
                    poor.
                </p>
            </div>
        </div>
        <div class="card">
            <div class="img-container">
                <img src="/image/job-creation.jpg" alt="" />
            </div>
            <div class="card-details">
                <h2> Job Opportunity </h2>
                <p>
                    <b> Empower Lives Through Employment </b>

                    Unemployment leaves millions without hope or opportunity. As a business owner, you have the
                    power to change lives. By offering jobs, skills training, or mentorship, you can help
                    individuals build a better future for themselves and their families.

                </p>
            </div>
        </div>
        <div class="card">
            <div class="img-container">
                <img src="/image/loan.jpg" alt="" />
            </div>
            <div class="card-details">
                <h2>Access To Loan No Interest</h2>
                <p>
                    <b>A Little Support, A Brighter Future</b>

                    Many hardworking individuals lack the financial means to start or grow their small businesses. A
                    small loan can empower them to break the cycle of poverty and build a sustainable future.
                    because a helping hand today can create lasting change for
                    tomorrow.
                </p>
            </div>
        </div>
    </div>

    <!-- Our Vision section-->
    <div class="container-lg mt-5 py-3">
        <div class="row">
            <div class="col">
                <h1> Our Vision: A <br>
                    Nigeria without Voilence
                </h1>
                <p>
                    Credo peace is one of the largest Ngo
                    working to end voilence and Terrorism
                    in Nigeria and African. We partner with
                    corperate ventures, government agencies
                    and individual citizens to bring safety
                    to vulnerable individuals.
                </p>

                <input class="p-3 bg-danger text-center text-light rounded-pill border-0" style="width: 300px;" href=""
                    value="LEARN MORE ABOUT CREDO PEACE">
            </div>
            <div class="col">
                <video controls width="600">
                    <source src="/image/credo-peace-interview.mpeg.mp4" type="video/mp4">
                </video>
            </div>
        </div>
        <div class="row">
            <div class="col image-container float-start bg-success">
                <img src="/image/freedom_hand.jpg" alt="Sliding Image" class="slide-image">
            </div>

            <div class="col">
                <h1> Our Motto: Changing <br>
                    Lives To Save Life!!!
                </h1>
                <p>
                    <b>
                        We are emphasizing on the transformative power of positive change in people's lives to
                        ultimately
                        protect and preserve life. It reflects a commitment to empowerment, education, support, and
                        humanitarian efforts that uplift individuals and communities, leading to a greater impact on
                        society. Whether in healthcare, social work, education, or charity, the idea is that by
                        improving lives, we create a ripple effect that saves and sustains others.
                    </b>
                </p>

                <input class="p-3 bg-danger text-center text-light rounded-pill border-0" style="width: 400px;" href=""
                    value="LEARN MORE ABOUT OUR WORK">
            </div>
        </div>
    </div>
    <br>
    <hr>

    <!-- HELP TODAT SECTION -->
    <div class="container-lg mt-5 mb-5">
        <div class="row d-flex gap-5 justify-content-center">
            <div class="col-sm-2 border d-flex justify-content-center text-center">
                <div class="card1">
                    <div class="card-body1">
                        <h5 class="card-title">Help Today</h5>
                        <p class="card-text">Your $1 can change life. Nigerians needs your help</p>
                        <a href="#" class="btn btn-primary">DONATE NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 border d-flex justify-content-cenetr text-center">
                <div class="card1">
                    <div class="card-body1">
                        <h5 class="card-title">Help Monthly</h5>
                        <p class="card-text">Support our cause Monthly. Nigeria needs your help</p>
                        <a href="#" class="btn btn-primary">DONATE NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 border d-flex justify-content-center text-center">
                <div class="card1">
                    <div class="card-body1">
                        <h5 class="card-title">Fundraise</h5>
                        <p class="card-text"> Start a fundraiser and inspire others to Help.</p>
                        <a href="#" class="btn btn-primary">LEARN MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 border d-flex justify-content-center text-center">
                <div class="card1">
                    <div class="card-body1">
                        <h5 class="card-title">Volunteer</h5>
                        <p class="card-text">Give your time and help others.</p>
                        <a href="#" class="btn btn-primary">GET STARTED</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Testimonial section -->
    <section class="testimonial">
        <div class="container-fluid">
            <div class="row text-center fw-5 p-5 border-top border-down bg-light text-danger">
                <h4> TESTIMONIALS</h4>
                <br>
                <h1> WHAT OUR BENEFICIARIES ARE SAYING </h1>
                <br>
                <p>
                    <b>
                        Be a part of some thing big and create a peaceful and abundance
                        environment for your kids and future kids. Through helping atleast
                        one family from hunger and bad health.
                    </b>

                </p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row border p-3 grid gap-5 align-item-center justify-content-md-center">
                <div class="col-3 border p-3 rounded">
                    <div class="col">
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus laborum doloremque eos?
                            Maiores
                            esse at nihil officia natus voluptates itaque!
                        </p>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="/image/Peace_ambassador.jpg" alt="" class=" rounded-circle"
                                style="width: 50px; height: 50px;">
                        </div>
                        <div class="col">
                            <p><b> Emmanuel Kadira </b></p>
                            <p> Beneficiary</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 border p-3 rounded">
                    <div class="col">
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus laborum doloremque eos?
                            Maiores
                            esse at nihil officia natus voluptates itaque!
                        </p>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="/image/Peace_ambassador.jpg" alt="" class=" rounded-circle"
                                style="width: 50px; height: 50px;">
                        </div>
                        <div class="col">
                            <p><b> okonkwo Daniel</b></p>
                            <p> Beneficiary</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 border p-3 rounded">
                    <div class="col">
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus laborum doloremque eos?
                            Maiores
                            esse at nihil officia natus voluptates itaque!
                        </p>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="/image/Peace_ambassador.jpg" alt="" class=" rounded-circle"
                                style="width: 50px; height: 50px;">
                        </div>
                        <div class="col">
                            <p><b> Ayodele Mubarak </b></p>
                            <p> Beneficiary</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>

    <!-- GET UPDATE SECTION -->
    <div class="container-fluid p-5 bg-success">
        <div class="row">
            <div class="col-6 fw-bolder fs-1 text-light">
                <h3>Join Us: Get Updates & Get Involved</h3>
            </div>
            <div class="col-3">
                <input class="p-2" type="text" name="email" placeholder="Email*">
            </div>
            <div class="col-3">
                <input class="bg-warning border-0 py-2 px-2" href="" value="JOIN THE MOVEMENT">
            </div>
        </div>
    </div>

    <div class="container-lg">
        <div class="row">
            <div class="col">
                <h1> Our Partners</h1>
                <br>
                <br>
                <p>
                    With the support of Our
                    genereous partners, The
                    credo peace initiative
                    foundation is meeting
                    the needs of vulnerable
                    and poor nigeria citizens
                    across all tribes and religions,
                    helping them build a brighter
                    future.
                </p>
                <br>
                <a href="#">Learn more about our
                    partners >
                </a>

            </div>

            <div class="col">
                <h1>As seen in the News</h1>
                <br>
                <br>
                <div class="row">
                    <div class="col">
                        <p>
                            Family like this needs all kind
                            of human support<b>(food, health-care,
                                shelter, education, skills
                                and empowerment)</b> to thrive, your
                            monthly support means family like this
                            can still survive...
                        </p>
                    </div>
                    <div class="col">
                        <img src="/image/vulnerable family.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>















    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="/js/home.js"></script>

    <!-- jQuery (required for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Popper.js (required for Bootstrap dropdowns) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>

    <!-- Bootstrap's JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Bootstrap's CSS (optional but recommended) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

</body>

</html>
<?php
include 'footer.php';








