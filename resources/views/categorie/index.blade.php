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
                                <li><a href="{{ route('admin_home') }}"><i class="lni lni-clipboard"></i> My Resume</a>
                                </li>
                                <li><a href="{{ route('blog.index') }}"><i class="lni lni-bookmark"></i> Gestion des blogs</a></li>
                                <li><a class="active" href="{{ route('categorie.index') }}"><i class="lni lni-lock"></i> Gestion des categories</a></li>
                                <li><a href="index-2.html"><i class="lni lni-upload"></i> Sign Out</a></li>
                            </ul>
                        </div>
                    </div>
                
                    <div class="col-lg-8 col-12">
                        <div>
                            <h4 class="mt-4 float-left ml-4">Liste des categories</h4>
                            <button type="submit" class="btn btn-success mt-4 float-right mr-4">
                                <a href="{{ route('categorie.create') }}" style="color:white">AJOUTER</a>
                            </button>
                        </div>
                        <div class="inner-content">
                            <div class="single-section exprerience">
                               @foreach ($categories as $categ)
                                    <div class="single-exp mb-30">
                                        <div class="d-flex align-items-center pr-11 mb-9 flex-wrap flex-sm-nowrap">
                                            <div class="w-100 mt-n2">
                                                <div class="d-flex align-items-center justify-content-md-between flex-wrap">
                                                    <h3 class="mb-0">
                                                        <a href="#">{{ $categ->title }}</a>
                                                    </h3>
                                                    <div>
                                                        <button type="submit" class="btn btn-primary">
                                                            <a href="" class="font-size-3 text-gray" style="color:white">Modifier</a>
                                                        </button>
                                                        <form action="{{ route('categorie.destroy') }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-danger">
                                                                <a href="{{ route('categorie.destroy', ['categorie'=>$categ->id]) }}" class="font-size-3 text-gray" style="color:white">Supprimer</a>
                                                            </button>
                                                        </form>
                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                               @endforeach
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