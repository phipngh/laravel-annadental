@extends('master.user.master')

@section('content')


    <div class="slide-item overlay" style="background-image: url('{{asset('UserSide/images/hero_1.jpg')}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center text-center mx-auto">
                    <h1 class="heading mb-5">Contact Us</h1>
                    <p><a href="#" class="btn btn-primary">Get started</a></p>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section pb-0">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-7 pr-md-7 mb-5">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary py-3 px-5" value="Send Message">
                        </div>
                    </form>
                </div>
                <div class="col-md-5">
                    <div class="media block-icon-1 d-block text-center">
                        <div class="icon mb-3"><span class="icon-room text-primary"></span></div>
                        <div class="media-body">
                            <h3 class="h5 mb-4">Arthur Bldg flr, New York City, USA</h3>
                        </div>
                    </div> <!-- .block-icon-1 -->

                    <div class="media block-icon-1 d-block text-center">
                        <div class="icon mb-3"><span class="icon-phone text-primary"></span></div>
                        <div class="media-body">
                            <h3 class="h5 mb-4">+1 209 923 2302</h3>
                        </div>
                    </div> <!-- .block-icon-1 -->

                    <div class="media block-icon-1 d-block text-center">
                        <div class="icon mb-3"><span class="icon-envelope text-primary"></span></div>
                        <div class="media-body">
                            <h3 class="h5 mb-4">info@templateux.com</h3>
                        </div>
                    </div> <!-- .block-icon-1 -->

                </div>
            </div> <!-- .row -->

        </div>
    </div> <!-- .templateux-section -->

    <div class="site-section bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-7 mx-auto text-center mb-5">
                    <span class="subheading">What Client Says</span>
                    <h2 class="heading"><strong class="text-primary">Happy</strong> Patients</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial text-center">
                        <img src="{{asset('UserSide/images/patient_1.jpg')}}" alt="Image" class="img-fluid">
                        <blockquote>
                            <p class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo repellendus nihil qui iure animi maxime consequuntur aliquid sed tempore, amet!</p>
                            <cite class="author">Elizabeth Anderson, Hostpital Patients</cite>
                        </blockquote>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial text-center">
                        <img src="{{asset('UserSide/images/person_2.jpg')}}" alt="Image" class="img-fluid">
                        <blockquote>
                            <p class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo repellendus nihil qui iure animi maxime consequuntur aliquid sed tempore, amet!</p>
                            <cite class="author">Elizabeth Anderson, Hostpital Patients</cite>
                        </blockquote>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial text-center">
                        <img src="{{asset('UserSide/images/person_3.jpg')}}" alt="Image" class="img-fluid">
                        <blockquote>
                            <p class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo repellendus nihil qui iure animi maxime consequuntur aliquid sed tempore, amet!</p>
                            <cite class="author">Elizabeth Anderson, Hostpital Patients</cite>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
