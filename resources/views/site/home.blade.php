@extends('layouts.site_layout')
@section('content')
    <style>
        .bg_div {
            position: relative;
            background-size: cover;
            background-position: center center;
            min-height: 600px;
            padding: 0;
        }

        .background-fix {
            background-color: #00000063;
        }

        * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        html,
        body {
            background: #121212;
            height: 100%;
            font-family: "Playfair Display", serif;
            font-size: 16px;
        }

        .contain {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        ul li {
            margin: 0 0 24px;
        }

        .the-arrow {
            width: 64px;
            transition: all 0.2s;
        }

        .the-arrow.-left {
            position: absolute;
            top: 60%;
            left: 0;
        }

        .the-arrow.-left > .shaft {
            width: 0;
            background-color: #999;
        }

        .the-arrow.-left > .shaft:before, .the-arrow.-left > .shaft:after {
            width: 0;
            background-color: #999;
        }

        .the-arrow.-left > .shaft:before {
            -webkit-transform: rotate(0);
            transform: rotate(0);
        }

        .the-arrow.-left > .shaft:after {
            -webkit-transform: rotate(0);
            transform: rotate(0);
        }

        .the-arrow.-right {
            top: 3px;
        }

        .the-arrow.-right > .shaft {
            width: 64px;
            transition-delay: 0.2s;
        }

        .the-arrow.-right > .shaft:before, .the-arrow.-right > .shaft:after {
            width: 8px;
            transition-delay: 0.3s;
            transition: all 0.5s;
        }

        .the-arrow.-right > .shaft:before {
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
        }

        .the-arrow.-right > .shaft:after {
            -webkit-transform: rotate(-40deg);
            transform: rotate(-40deg);
        }

        .the-arrow > .shaft {
            background-color: #999;
            display: block;
            height: 1px;
            position: relative;
            transition: all 0.2s;
            transition-delay: 0;
            will-change: transform;
        }

        .the-arrow > .shaft:before, .the-arrow > .shaft:after {
            background-color: #999;
            content: "";
            display: block;
            height: 1px;
            position: absolute;
            top: 0;
            right: 0;
            transition: all 0.2s;
            transition-delay: 0;
        }

        .the-arrow > .shaft:before {
            -webkit-transform-origin: top right;
            transform-origin: top right;
        }

        .the-arrow > .shaft:after {
            -webkit-transform-origin: bottom right;
            transform-origin: bottom right;
        }

        .animated-arrow {
            display: inline-block;
            color: #999;
            font-size: 1.25em;
            font-style: italic;
            text-decoration: none;
            position: relative;
            transition: all 0.2s;
        }

        .animated-arrow:hover {
            color: #eaeaea;
        }

        .animated-arrow:hover > .the-arrow.-left > .shaft {
            width: 64px;
            transition-delay: 0.1s;
            background-color: #eaeaea;
        }

        .animated-arrow:hover > .the-arrow.-left > .shaft:before, .animated-arrow:hover > .the-arrow.-left > .shaft:after {
            width: 8px;
            transition-delay: 0.1s;
            background-color: #eaeaea;
        }

        .animated-arrow:hover > .the-arrow.-left > .shaft:before {
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
        }

        .animated-arrow:hover > .the-arrow.-left > .shaft:after {
            -webkit-transform: rotate(-40deg);
            transform: rotate(-40deg);
        }

        .animated-arrow:hover > .main {
            -webkit-transform: translateX(80px);
            transform: translateX(80px);
        }

        .animated-arrow:hover > .main > .the-arrow.-right > .shaft {
            width: 0;
            -webkit-transform: translateX(200%);
            transform: translateX(200%);
            transition-delay: 0;
        }

        .animated-arrow:hover > .main > .the-arrow.-right > .shaft:before, .animated-arrow:hover > .main > .the-arrow.-right > .shaft:after {
            width: 0;
            transition-delay: 0;
            transition: all 0.1s;
        }

        .animated-arrow:hover > .main > .the-arrow.-right > .shaft:before {
            -webkit-transform: rotate(0);
            transform: rotate(0);
        }

        .animated-arrow:hover > .main > .the-arrow.-right > .shaft:after {
            -webkit-transform: rotate(0);
            transform: rotate(0);
        }

        .animated-arrow > .main {
            display: flex;
            align-items: center;
            transition: all 0.2s;
        }

        .animated-arrow > .main > .text {
            margin: 0 16px 0 0;
            line-height: 1;
        }

        .animated-arrow > .main > .the-arrow {
            position: relative;
        }

    </style>
    <div class="col-md-12 bg_div"
         style="height: 100vh; background-image:url('{{ url('public/bg.jpg') }} '); position: relative; ">
        <div class="background-fix"></div>
        <div class="container-fluid">
            <div class="row">
                <div class='contain'>
                    <ul>
                        <li>
                            <a class='animated-arrow' href='https://google.com'>
                                <span class='the-arrow -left'>
                                    <span class='shaft'></span>
                                </span>
                                <span class='main'>
                                    <span class='text'>Discover the Agency</span>
                                    <span class='the-arrow -right'>
                                        <span class='shaft'></span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class='animated-arrow' href='https://google.com'>
                                <span class='the-arrow -left'>
                                    <span class='shaft'></span>
                                </span>
                                <span class='main'>
                                    <span class='text'>View Projects</span>
                                    <span class='the-arrow -right'>
                                        <span class='shaft'></span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class='animated-arrow' href='https://google.com'>
                                <span class='the-arrow -left'>
                                    <span class='shaft'></span>
                                </span>
                                <span class='main'>
                                    <span class='text'>Get in Touch</span>
                                    <span class='the-arrow -right'>
                                        <span class='shaft'></span>
                                    </span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
@endsection