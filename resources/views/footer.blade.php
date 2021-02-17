<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <title>@yield('title')</title>
    <style type="text/css">

        body {
            font-family: 'Signika', sans-serif;
        }
        .bg-grey {
            background: #292929;
        }
        .logo-footer {
            margin-bottom: 40px;
        }
        footer {
            color: grey;
        }
        .footer-ap {
            font-size: 12px;
            font-family: 'Roboto', sans-serif;
        }
        footer h6 {
            font-family: 'Playfair Display', serif;
            margin-bottom: 40px;
            position: relative;
        }
        footer h6:after {
            position: absolute;
            content: "";
            background: grey;
            width: 12%;
            height: 1px;
            left: 0;
            bottom: -20px;
        }
        .btn-footer {
            color: grey;

            text-decoration: none;
            border: 1px solid;
            border-radius: 43px;
            font-size: 13px;
            padding: 7px 30px;
            line-height: 47px;
        }
        .btn-footer:hover {

            text-decoration: none;

        }
        .form-footer input[type="text"] {
            border: none;
            border-radius: 16px 0 0 16px;
            outline: none;
            padding-left: 10px;

        }
        ::placeholder {
            font-size: 10px;
            padding-left: 10px;
            font-style: italic;
        }
        .form-footer input[type="button"] {
            border: none;
            background:#232323;
            margin-left: -5px;
            color: #fff;
            outline: none;
            border-radius: 0 16px 16px 0;
            padding: 2px 12px;
        }
        .social .fa {
            color: grey;
            font-size: 22px;
            padding: 10px 15px;
            background: #3c3c3c;
        }
        footer ul li {
            list-style: none;
            display: block;
        }
        footer ul  {
            padding-left: 0;
        }
        footer ul  li a{
            text-decoration: none;
            color: grey;
            text-decoration:none;
        }
        a:hover {
            text-decoration: none;
            color: #FF8C00 !important;

        }
        .logo-part {
            border-right: 1px solid grey;
            height: 100%;
        }

        #about-reformed-tech{

            margin-right: 9px;
        }

    </style>
</head>

<footer class="container-fluid bg-grey py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="logo-part">
                            <img src="https://1.bp.blogspot.com/-ZugNTvFIsJs/YCt9rxi0rBI/AAAAAAAArqY/rQp9X8tmdzsEk6xCT2Rqvw6rWsQ5tDiAwCLcBGAsYHQ/s823/output-onlinepngtools.png" class="w-50 logo-footer" >
                            <p class="footer-ap">32/1, Road: 3, Shyamoli, Dhaka 1207,Bangladesh</p>
                            <p class="footer-ap" id="about-reformed-tech">Thinking about updating your Web Application & Software to expand your business and attract ideal customers. Contact ReformedTech & take Control of our business.</p>
                        </div>
                    </div>
                    <div class="col-md-6 px-4">
                        <h6> About Reformed Tech</h6>
                        <p class="footer-ap">ReformedTech Supports your Web Application & Software to help improve your Client Satisfaction in a strategically programmed way.</p>
                        <a href="About" class="btn-footer"> More Info </a><br>
                        <a href="Contact" class="btn-footer"> Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 px-4">
                        <h6> Help us</h6>
                        <div class="row ">
                            <div class="col-md-6">
                                <ul>
                                    <li> <a class="footer-ap" href="/"> Home</a> </li>
                                    <li> <a class="footer-ap" href="About"> About</a> </li>
                                    <li> <a class="footer-ap" href="#"> Service</a> </li>
                                    <li> <a class="footer-ap" href="#"> Team</a> </li>
                                    <li> <a class="footer-ap" href="#"> Help</a> </li>
                                    <li> <a class="footer-ap" href="Contact"> Contact</a> </li>
                                </ul>
                            </div>
                            <div class="col-md-6 px-4">
                                <ul>
                                    <li> <a class="footer-ap" href="#"> Cab Faciliy</a> </li>
                                    <li> <a class="footer-ap" href="#"> Fax</a> </li>
                                    <li> <a class="footer-ap" href="#"> Terms</a> </li>
                                    <li> <a class="footer-ap" href="#"> Policy</a> </li>
                                    <li> <a class="footer-ap" href="#"> Refunds</a> </li>
                                    <li> <a class="footer-ap" href="#"> Paypal</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <h6> Newsletter</h6>
                        <div class="social">
                            <a class="footer-ap" href="https://www.facebook.com/reformedtech"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a class="footer-ap" href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                        <form class="form-footer my-3">
                            <input type="text"  placeholder="search here...." name="search">
                            <input type="button" value="Go" >
                        </form>
                        <p class="footer-ap">ReformedTech Technical Specialists work with your vision, draw the roadmap and implement your expectation above and beyond.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>
