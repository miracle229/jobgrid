@extends('layouts.app')

@section('content')
    
    <section id="contact-us" class="contact-us section">
        <div class="container">
            <div class="contact-head col-lg-6 col-12 mx-auto wow fadeInUp" data-wow-delay=".4s">
                <div class="row">
                    <div class="form-main">
                        <form class="form" method="post" action="{{ route('categorie.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-11 col-12">
                                    <div class="form-group">
                                        <input name="title" type="text" placeholder="Title" value="{{ old('title') }}">
                                        @error('title')
                                            <span class="text-danger mb-2">{{ $errors->first('title') }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group button">
                                    <button type="submit" class="btn ">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
    </section>
@endsection