@extends('layout')
@section('title')
    Contact Us
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
            @import url("https://rsms.me/inter/inter.css");

            .about{
                 cursor: pointer;
                 background-color: white;
                 color: black;
                 padding-top: 50px;
                 padding-bottom: 50px;
                        }
            :root {
                --color-gray: #737888;
                --color-lighter-gray: #e3e5ed;
                --color-light-gray: #f7f7fa;
            }

            *,
            *:before,
            *:after {
                box-sizing: inherit;
            }

            html {

                box-sizing: border-box;
            }

            @supports (font-variation-settings: normal) {
                html {
                    font-family: "Inter var", sans-serif;
                }
            }

            body {
                margin: 0;
                margin-top: 100px;
            }

            h2 {
                margin-bottom: 1rem;
            }

            p {
                color: var(--color-gray);
            }

            hr {
                height: 1px;
                width: 100%;
                background-color: var(--color-light-gray);
                border: 0;
                margin: 2rem 0;
            }

            .form {
                display: grid;
                grid-gap: 1rem;
            }

            .field {
                width: 100%;
                display: flex;
                flex-direction: column;
                border: 1px solid var(--color-lighter-gray);
                padding: .5rem;
                border-radius: .25rem;
            }

            .field__label {
                color: var(--color-gray);
                font-size: 0.6rem;
                font-weight: 300;
                text-transform: uppercase;
                margin-bottom: 0.25rem
            }

            .field__input {
                padding: 0;
                margin: 0;
                border: 0;
                outline: 0;
                font-weight: bold;
                font-size: 1rem;
                width: 100%;
                -webkit-appearance: none;
                appearance: none;
                background-color: transparent;
            }
            .field:focus-within {
                border-color: #000;
            }

            .fields {
                display: grid;
                grid-gap: 1rem;
            }
            .fields--2 {
                grid-template-columns: 1fr 1fr;
            }
            .fields--3 {
                grid-template-columns: 1fr 1fr 1fr;
            }

            .button {
                background-color: #000;
                text-transform: uppercase;
                font-size: 0.8rem;
                font-weight: 600;
                display: block;
                color: #fff;
                width: 100%;
                padding: 1rem;
                border-radius: 0.25rem;
                border: 0;
                cursor: pointer;
                outline: 0;
            }
            .button:focus-visible {
                background-color: #333;
            }
            .address-property{
                margin-top: 20px;
                margin-bottom: 50px;
                color: grey;
                font-size:14px;
            }

        </style>
    </head>
    <body>
    <section class="text-center about">
        <h2>Contact US</h2>
        <p style="font-size:12px !important; font-weight:normal;">Please enter your shipping details.</p>
        <hr />
        <div class="form">
            <div class="fields fields--2">
                <label class="field">
                    <span class="field__label" for="firstname">First name</span>
                    <input class="field__input" type="text" id="firstname" value="John" />
                </label>
                <label class="field">
                    <span class="field__label" for="lastname">Last name</span>
                    <input class="field__input" type="text" id="lastname" value="Doe" />
                </label>
            </div>
            <label class="field">
                <span class="field__label" for="address">Address</span>
                <input class="field__input" type="text" id="address" />
            </label>
            <label class="field">
                <span class="field__label" for="country">Country</span>
                <select class="field__input" id="country">
                    <option value=""></option>
                    <option value="unitedstates">United States</option>
                </select>
            </label>
            <div class="fields fields--3">
                <label class="field">
                    <span class="field__label" for="zipcode">Zip code</span>
                    <input class="field__input" type="text" id="zipcode" />
                </label>
                <label class="field">
                    <span class="field__label" for="city">City</span>
                    <input class="field__input" type="text" id="city" />
                </label>
                <label class="field">
                    <span class="field__label" for="state">State</span>
                    <select class="field__input" id="state">
                        <option value=""></option>
                    </select>
                </label>
            </div>
        </div>
        <hr>
        <button class="button">Continue</button>
        </div>
        <div class="container address-property">
            <address>
                ADDRESS<br>
                32/1, Road: 3, Shyamoli, Dhaka 1207, Bangladesh<br>
                E: support@reformedtech.org<br>
                P: +(880) 1303094897
            </address>
        </div>
    </section>
    </body>
    @endsection
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </html>
