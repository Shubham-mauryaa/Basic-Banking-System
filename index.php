<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@600&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/bank logo.jpg " class="bd-placeholder-img rounded-circle" width="40" height="40" class="d-inline-block align-top" alt="">
                The Sparks Foundation
              </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end " id="navbarSupportedContent">
                <ul class="nav nav-pills justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-expanded="false">Banking</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="transfermoney.php">Send Money</a></li>
                            <li><a class="dropdown-item" href="transactionhistory.php">Transaction History</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-expanded="false">Customer Services</a>
                        <ul class="dropdown-menu">
                            <li><button class="btn " data-bs-toggle="modal" data-bs-target="#signupModal">Create Account</button></li>
                            <li><button class="btn " data-bs-toggle="modal" data-bs-target="#loginModal">Login To Account</button></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Get Loan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success btn-lg " type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login to your account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Account Number</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">IFSC Code</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Signup Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupModalLabel">Become a Valuable Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="createuser.php" method="POST">
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="name" required>
                            </div>
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="email" required>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Enter Balance</label>
                            <input type="number" class="form-control" id="exampleInputPassword1" name="balance" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Create Account</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/bank_caraousel_1.jpg" class="d-block w-100" alt="..." height="500px">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/bank_caraousel 2.jpg" class="d-block w-100" alt="..." height="500px">
                <div class="carousel-caption d-none d-md-block">
                    <h2 style="    font-family: 'Baloo Tammudu 2', cursive;
            ">Save Money For Your Future Generation</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/bank_caraousel 3.jpg" class="d-block w-100" alt="..." height="500px">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/bank_caraousel 4.jpg" class="d-block w-100" alt="..." height="500px">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <p class="text-justify " id="title">Welcome To The Sparks Foundation Bank</p>

    <hr id="line">

    <div class="container middle">
        <div class="row">
            <div class="col-lg-4">
                <img src="images/services1.jpg" alt="" class="bd-placeholder-img rounded-circle" width="240"
                    height="240">
                <h2>Investment</h2>
                <p>An investment bank is a financial services company or corporate division that engages in
                    advisory-based financial transactions on behalf of individuals, corporations, and governments.
                    Traditionally associated with corporate finance, such a bank might assist in raising financial
                    capital by underwriting or acting as the client's agent in the issuance of securities. </p>
                <p><a class="btn btn-primary" href="https://en.wikipedia.org/wiki/Investment_banking"
                        target="_blank">View details »</a></p>
            </div>

            <div class="col-lg-4">
                <img src="images/financial service.jpg" alt="" class="bd-placeholder-img rounded-circle" width="240"
                    height="240">
                <h2>Financial Services</h2>
                <p>The financial services sector provides financial services to people and corporations. This segment of
                    the economy is made up of a variety of financial firms including banks, investment houses, real
                    estate brokers, and insurance companies. As noted above, the financial services industry is probably
                    the most important sector of the economy, leading the world in terms of earnings and capitalisation.
                </p>
                <p><a class="btn btn-warning" href="https://en.wikipedia.org/wiki/Financial_services"
                        target="_blank">View details »</a></p>
            </div>

            <div class="col-lg-4">
                <img src="images/online banking.jpg" alt="" class="bd-placeholder-img rounded-circle" width="240"
                    height="240">
                <h2>Net Banking</h2>
                <p>Net Banking, also known as online banking or Internet Banking, is an electronic payment system. It
                    allows you to conduct many different types of transactions through the internet from the comfort of
                    your home. Be it transferring funds to another bank account or checking the transaction statements,
                    you can do them all and much more with the help of Internet Banking.</p>
                <p><a class="btn btn-danger" href="https://en.wikipedia.org/wiki/Online_banking" target="_blank">View
                        details »</a></p>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="card text-center">
        <div class="card-footer text-muted bg-dark">
            Copyright @The Sparks Foundation <br> Made by Shubham Maurya
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>