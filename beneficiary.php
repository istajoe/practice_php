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
    <div class="container-fluid">
        <div class="row text-center">
            <h1 class="text-success"> Welcome To<br><span class="text-danger">The Credo Peace Initiative
                    Foundation</span></h1>
            <p>
                we are dedicated to fostering peace, unity, and resilience in communities worldwide. Through dialogue,
                education, and empowerment, we strive to create a future where harmony prevails. Join us in building a
                world where peace is not just a dream, but a reality.
            </p>
        </div>
        <div class="row d-flex justify-content-center">
            <input type="text" class="p-3 bg-danger text-center  justify-content-center text-light fw-1 fs-3 border-0"
                name="membership" href="#" value="Join Credo Movement Now">
        </div>

    </div>

    <!-- Carousel -->
    <div class="container-fluid" style="background-image: url('/image/nigeria unity.jpg');">
        <div class="carousel-container">
            <div class="carousel-slides">
                <div class="carousel-slide">
                    <img src="/image/feeding.jpg" alt="Slide 1" style="width:100%">
                    <h2>Lets feed the vulnerable</h2>
                </div>
                <div class="carousel-slide">
                    <img src="/image/children_paly.jpg" alt="Slide 2" style="width:100%">
                </div>
                <div class="carousel-slide">
                    <img src="/image/northen_children.jpg" alt="Slide 3" style="width:100%">
                </div>
                <div class="carousel-slide">
                    <img src="/image/school_children.jpg" alt="Slide 4" style="width:100%">
                </div>
            </div>
            <button class="carousel-button prev" onclick="changeSlide(-1)">❮</button>
            <button class="carousel-button next" onclick="changeSlide(1)">❯</button>
        </div>
    </div>

    <!-- How to become a beneficiary -->

    <div class="row mt-5">
        <h1 class="text-danger text-center fw-5 fs-3"> HOW TO BECOME A BENEFICIARY </h1>
        <div class="col">
            <ul>
                <li> Economic Status<br>
                ✅ Must be from a low-income or marginalized background.<br>
                ✅  Proof of financial hardship (e.g., income statements, community verification)
                </li>

                <li> Vulnerability & Special Needs<br>
                ✅ Orphans and vulnerable children (OVCs).<br>
                ✅ People with disabilities (PWDs).<br>
                ✅ Widows, elderly, or displaced individuals.<br>
                ✅ Survivors of domestic violence, human trafficking, or war.
                </li>

                <li>Geographic Location<br>
                ✅  Must reside in the specific area or region the NGO serves.<br>
                ✅  Preference may be given to rural or underserved communities.
                </li>

                <li> Other Specific Requirements<br>
                 ✅ Single parents needing childcare assistance.<br>
                 ✅ Small business owners needing financial aid or microloans.<br>
                 ✅ Farmers needing agricultural support.
                </li>
            </ul>

        </div>

        <div class="col border-dark">
            <ul>
                <li> Health Status<br>
                    ✅ Individuals with chronic illnesses, malnutrition, or medical emergencies.<br>
                    ✅ HIV/AIDS-affected persons needing medical or nutritional support.<br>
                    ✅ Pregnant women and newborns requiring maternal healthcare</li>

                <li> Educational Background<br>
                    ✅ Children from poor backgrounds who lack access to quality education.<br>
                    ✅ Youth who need scholarships, vocational training, or mentorship.<br>
                    ✅ Individuals willing to commit to completing their studies or training </li>

                <li> Commitment to Self-Improvement<br>
                    ✅ Willingness to participate in empowerment programs (e.g., skills training, business
                    mentoring).<br>
                    ✅ Readiness to follow the rules and guidelines of the NGO’s support program. </li>

                <li> Commitment to Self-Improvement<br>
                    ✅ Willingness to participate in empowerment programs (e.g., skills training, business
                    mentoring).<br>
                    ✅ Readiness to follow the rules and guidelines of the NGO’s support program. </li>
            </ul>

        </div>

        <div class="row-12 text-center bg-success">
            <h1 class="text-light fw-5 fs-5"> Our Criteria </h1>
            <p class="text-light fw-3 fs-3">
                Proof of Identity & Need<br>
                Must provide identification (National ID, birth certificate, or community attestation).
                Referral letter from a local leader, school, or health center.
            </p>
            <a class="text-danger fs-5 fw-5" href="beneficiary_register.php">Register Here</a>
        </div>
    </div>

    <!-- help section -->

    <div class="container-lg mt-5 mb-5">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Help Today</h5>
                        <p class="card-text">Your $1 can change life. Nigerians needs your help</p>
                        <a href="#" class="btn btn-primary">DONATE NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Help Monthly</h5>
                        <p class="card-text">Support our cause Monthly. Nigeria needs your help</p>
                        <a href="#" class="btn btn-primary">DONATE NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Fundraise</h5>
                        <p class="card-text"> Start a fundraiser and inspire others to Help.</p>
                        <a href="#" class="btn btn-primary">LEARN MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Volunteer</h5>
                        <p class="card-text">Give your time and help others.</p>
                        <a href="#" class="btn btn-primary">GET STARTED</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

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
                        <img src="/image/vulnerable family.png">
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



