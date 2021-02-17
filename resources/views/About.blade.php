@extends('layout')
@section('title')
    About Us
@endsection
@section('content')
    <br>
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

        <style>
            .about{
                cursor: pointer;
                background-color: white;
                color: black;
                padding-top: 30px;
                padding-bottom: 80px;
            }
            .about h2 {
                padding: 10px 0;
                margin-bottom: 30px;
            }
            .about h4 {
                opacity: .8;
            }
            .about span {
                display: block;
                width: 100px;
                height: 100px;
                line-height: 100px;
                margin:auto;
                border-radius:50%;
                font-size: 40px;
                color: #FFFFFF;
                opacity: 0.7;
                background-color: #4C0822;
                border: 2px solid #4C0822;
                margin-bottom: 20px;


                webkit-transition:all .5s ease;
                moz-transition:all .5s ease;
                os-transition:all .5s ease;
                transition:all .5s ease;

            }
            .about-item:hover span{
                opacity: 1;
                border: 2px solid #CC0039;
                font-size: 20px;
                -webkit-transform: scale(1.1,1.1) rotate(360deg) ;
                -moz-transform: scale(1.1,1.1) rotate(360deg) ;
                -o-transform: scale(1.1,1.1) rotate(360deg) ;
                transform: scale(1.1,1.1) rotate(360deg) ;
            }
            .about-item:hover h2{
                opacity: 1;
                -webkit-transform: scale(1.1,1.1)  ;
                -moz-transform: scale(1.1,1.1)  ;
                -o-transform: scale(1.1,1.1)  ;
                transform: scale(1.1,1.1) ;
            }
            .about .lead{
                color: #808080;
                font-size: 14px;
            }

        </style>
    </head>
    <body>
    <section class="text-center about">
        <h2>About US</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-ex-12 about-item wow lightSpeedIn" data-wow-offset="200" >
                    <span class="fa fa-group"></span>
                    <h4>Successful Implementation</h4>
                    <p class="lead">More than 7 years of Experience in building successful Web, Mobile Apps and Software Implementations.</p>
                </div>
                <div class="col-lg-4 col-sm-6 col-ex-12 about-item wow lightSpeedIn" data-wow-offset="200">
                    <span class="fa fa-info"></span>
                    <h4>Technology Specialist</h4>
                    <p class="lead">ReformedTech Technical Specialists work with your vision, draw the roadmap and implement your expectation above and beyond.</p>
                </div>
                <div class="col-lg-4 col-sm-6 col-ex-12 about-item wow lightSpeedIn" data-wow-offset="200">
                    <span class="fa fa-file"></span>
                    <h4>Awesome Support</h4>
                    <p class="lead">ReformedTech Supports your Web Application & Software to help improve your Client Satisfaction in a strategically programmed way.</p>
                </div>
            </div>
        </div>
    </section>
    </body>
    @endsection
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </html>


