@extends('master.user.master')

@section('content')



    <div class="slide-item overlay" style="background-image: url('{{asset('UserSide/images/hero_1.jpg')}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center text-center mx-auto">
                    <h1 class="heading mb-5">About Us</h1>
                    <p><a href="#" class="btn btn-primary">Get started</a></p>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p><img src="{{asset('UserSide/images/about.png')}}" alt="Image" class="img-fluid"></p>
                </div>
                <div class="col-lg-5 ml-auto">
                    <span class="subheading">About Us</span>
                    <h2 class="heading"><strong class="text-primary">We Are Happy To Serve You!</strong></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, neque, dolorem. Iusto dolore omnis ex vero consequatur et deserunt officia incidunt at illum corrupti adipisci consectetur, veniam veritatis? Neque, cupiditate.</p>
                    <p><a href="#" class="btn btn-primary">Contact Us</a> <a href="#" class="btn btn-secondary">Read More</a></p>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mr-auto">
                    <span class="subheading">Our Mission</span>
                    <h2 class="heading">We Provide <strong class="text-primary">High Solutions</strong> for Your Health</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, neque, dolorem. Iusto dolore omnis ex vero consequatur et deserunt officia incidunt.</p>

                </div>
                <div class="col-lg-6">
                    <figure class="video-image">
                        <a href="https://www.youtube.com/watch?v=vSndrIBTDUw" data-fancybox class="btn-play"><span class="icon-play"></span></a>
                        <img src="{{asset('UserSide/images/img_3.jpg')}}" alt="Image" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-light title-wrap-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <span class="subheading">Our Team</span>
                    <h2 class="heading"><strong class="text-primary">Our Dedicated</strong> Doctors</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section overlap-section">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <a href="#" class="team">
                        <img src="{{asset('UserSide/images/person_1.jpg')}}" alt="Image" class="img-fluid">
                        <div class="team-inner">
                            <h3>Dr. Jade Guzman</h3>
                            <span>Cardiologist</span>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <a href="#" class="team">
                        <img src="{{asset('UserSide/images/person_2.jpg')}}" alt="Image" class="img-fluid">
                        <div class="team-inner">
                            <h3>Dr. Hannah Ford</h3>
                            <span>Dermatologist</span>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <a href="#" class="team">
                        <img src="{{asset('UserSide/images/person_3.jpg')}}" alt="Image" class="img-fluid">
                        <div class="team-inner">
                            <h3>Dr. James Wilson</h3>
                            <span>Surgeon</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p><img src="{{asset('UserSide/images/lab-2.svg')}}" alt="Image" class="img-fluid"></p>
                </div>
                <div class="col-lg-5 ml-auto">
                    <span class="subheading">Children</span>
                    <h2 class="heading"><strong class="text-primary">Children Care</strong></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, neque, dolorem. Iusto dolore omnis ex vero consequatur et deserunt officia incidunt at illum corrupti adipisci consectetur, veniam veritatis? Neque, cupiditate.</p>
                    <p><a href="#" class="btn btn-primary">Contact Us</a> <a href="#" class="btn btn-secondary">Read More</a></p>
                </div>
            </div>
        </div>
    </div>



@endsection
