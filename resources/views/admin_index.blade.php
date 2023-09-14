@extends('layouts.app')

@section('content')
    
    <div class="resume section">
    <div class="container">
    <div class="resume-inner">
    <div class="row">
    
    <div class="col-lg-4 col-12">
    <div class="dashbord-sidebar">
    <ul>
    <li class="heading">Manage Account</li>
    <li><a class="active" href="{{ route('admin_home') }}"><i class="lni lni-clipboard"></i> My Resume</a>
    </li>
    <li><a href="{{ route('blog.index') }}"><i class="lni lni-bookmark"></i> Gestion des blogs</a></li>
    <li><a href="{{ route('categorie.index') }}"><i class="lni lni-lock"></i> Gestion des categories</a></li>
    <li><a href="index-2.html"><i class="lni lni-upload"></i> Sign Out</a></li>
    </ul>
    </div>
    </div>



    
    <div class="col-lg-8 col-12">
    <div class="manage-content mt-4" style="background-color: white;">
        <button type="submit" class="btn btn-success mt-4 float-right">AJOUTER</button>
        <div class="row align-items-center justify-content-center clearfix">
         <div class="col-lg-2 col-md-2 col-12">
        <div class="title-img">
        <div class="can-img">
        <img src="assets/images/jobs/manage-job3.png" alt="#">
        </div>
        </div>
        </div>
        <div class="col-lg-7 col-md-7 col-12">
        <p class="description">Your Bookmarked job "Web designer needed" from Banana
        Inc, has expired.</p>
        </div>
        <div class="col-lg-3 col-md-3 col-12">
        <div class="time">
        <p><i class="lni lni-timer"></i>3 Hours ago</p>
        </div>
        </div>
        </div>
        </div>
    </div>




    </div>
    </div>
    </div>
    </div>
    
    
    <div class="modal fade form-modal" id="login" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog max-width-px-840 position-relative">
    <button type="button" class="circle-32 btn-reset bg-white pos-abs-tr mt-md-n6 mr-lg-n6 focus-reset z-index-supper" data-dismiss="modal"><i class="lni lni-close"></i></button>
    <div class="login-modal-main">
    <div class="row no-gutters">
    <div class="col-12">
    <div class="row">
    <div class="heading">
    <h3>Login From Here</h3>
    <p>Log in to continue your account <br> and explore new jobs.</p>
    </div>
    <div class="social-login">
    <ul>
    <li><a class="linkedin" href="#"><i class="lni lni-linkedin-original"></i> Log in
    with LinkedIn</a></li>
    <li><a class="google" href="#"><i class="lni lni-google"></i> Log in with
    Google</a></li>
    <li><a class="facebook" href="#"><i class="lni lni-facebook-original"></i> Log in
    with Facebook</a></li>
    </ul>
    </div>
    <div class="or-devider">
    <span>Or</span>
    </div>
    <form action="https://demo.graygrids.com/">
    <div class="form-group">
    <label for="email" class="label">E-mail</label>
    <input type="email" class="form-control" placeholder="example@gmail.com" id="email">
    </div>
    <div class="form-group">
        <label for="password" class="label">Password</label>
        <div class="position-relative">
            <input type="password" class="form-control" id="password" placeholder="Enter password">
        </div>
    </div>
    <div class="form-group d-flex flex-wrap justify-content-between">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
            <label class="form-check-label" for="flexCheckDefault">Remember password</label>
        </div>
        <a href="#" class="font-size-3 text-dodger line-height-reset">Forget Password</a>
    </div>
    <div class="form-group mb-8 button">
        <button class="btn ">Log in
        </button>
    </div>
    <p class="text-center create-new-account">Don’t have an account? <a href="#">Create a free account</a></p>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    <div class="modal fade form-modal" id="signup" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog max-width-px-840 position-relative">
            <button type="button" class="circle-32 btn-reset bg-white pos-abs-tr mt-md-n6 mr-lg-n6 focus-reset z-index-supper" data-dismiss="modal"><i class="lni lni-close"></i></button>
            <div class="login-modal-main">
                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="row">
                            <div class="heading">
                                <h3>Create a free Account <br> Today</h3>
                                <p>Create your account to continue <br> and explore new jobs.</p>
                            </div>
                            <div class="social-login">
                                <ul>
                                    <li><a class="linkedin" href="#"><i class="lni lni-linkedin-original"></i> Import from LinkedIn</a></li>
                                    <li><a class="google" href="#"><i class="lni lni-google"></i> Import from
                                    Google</a></li>
                                    <li><a class="facebook" href="#"><i class="lni lni-facebook-original"></i> Import from Facebook</a></li>
                                </ul>
                            </div>
                            <div class="or-devider">
                                <span>Or</span>
                            </div>
                            <form action="https://demo.graygrids.com/">
                                <div class="form-group">
                                    <label for="email" class="label">E-mail</label>
                                    <input type="email" class="form-control" placeholder="example@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="label">Password</label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control" placeholder="Enter password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="label">Confirm Password</label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control" placeholder="Enter password">
                                    </div>
                                </div>
                                <div class="form-group d-flex flex-wrap justify-content-between">
                                
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <label class="form-check-label" for="flexCheckDefault">Agree to the <a href="#">Terms & Conditions</a></label>
                                    </div>
                                </div>
                                <div class="form-group mb-8 button">
                                    <button class="btn ">Sign Up
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection