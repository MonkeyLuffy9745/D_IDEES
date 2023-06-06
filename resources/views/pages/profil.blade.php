@extends('layouts.base')

@section('base.content')
<br>
<br>
<br>
<br>
<br>
<br>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Mes Posts</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <br>
                                    <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nom</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ auth()->user()->name }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ auth()->user()->email }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Téléphone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ auth()->user()->number }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Date de naissance</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ auth()->user()->birth_date }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Institut</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ auth()->user()->institut }}</p>
                                            </div>
                                        </div>

                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        @foreach ($posts as $post)
                                            <div class="single_course">
                                                <div class="course_head">
                                                    {{-- <img class="img-fluid" src="img/courses/c2.jpg" alt="" /> --}}
                                                </div>
                                                <div class="course_content">

                                                    <span class="tag mb-4 d-inline-block">{{ $post->created_at }}</span>
                                                    <h4 class="mb-3">
                                                        <a href="{{ route('forum.show', $post) }}">{{ $post->title }}</a>
                                                    </h4>
                                                    <p>
                                                        {{ $post->content }}
                                                    </p>
                                                    <div
                                                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                        <div class="authr_meta">
                                                            <i class="ti-user mr-2"></i>
                                                            <span class="d-inline-block ml-2">{{ $post->user->name() }}</span>
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
            </form>
        </div>
        <br>
<br>
<br>
<br>
<br>
<br>

    @endsection
