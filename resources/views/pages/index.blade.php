@extends('layouts.base')

<div style="display: none">
    {{ $_index = true }}
</div>

@section('base.content')

    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_content text-center">
                            <h2 class="text-uppercase mt-5 mb-5">
                                Bienvenue
                            </h2>
                            <p>sur des D_ZIDEES</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature_area section_gap_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3">A Propos de Nous</h2>
                        <p>
                            L’UCAO (Université Catholique de l’Afrique de L’Ouest) est créée en 1967. C’est un ensemble de
                            huit unités universitaires implantées dans sept
                            pays de la sous-région ouest- africaine. Elle a été créée pour répondre aux besoins en éducation
                            et en instruction supérieure de qualité de la
                            sous-région. Seule Université Privée du Togo, l’UCAO-UUT est une école d’excellence qui
                            s’inscrit dans une triple trajectoire....
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="icon"><span class="flaticon-student"></span></div>
                        <div class="desc">
                            <h4 class="mt-3 mb-2">Diplome</h4>
                            <p>
                                Nous offrons des Diplômes qui sont reconnus dans tout le pays. Nous avons des partenariatsa travers le monde
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="icon"><span class="flaticon-book"></span></div>
                        <div class="desc">
                            <h4 class="mt-3 mb-2">Questions en ligne</h4>
                            <p>
                                Si vous avez des difficultés dans vos cours, vous povez poser des questions ici
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="icon"><span class="flaticon-earth"></span></div>
                        <div class="desc">
                            <h4 class="mt-3 mb-2">Articles</h4>
                            <p>
                                Nous avons des articles sur notre campus publier regulierement sur cette plateforme
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if ($numposts == 0)
        <div class="popular_courses">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="">
                            <h2 class="mb-3">- Pas de Posts pour l'instant -</h2>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="main_title">
                            <h2 class="mb-3">Liste des Posts</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- single course -->
                    <div class="col-lg-12">
                        <div class="owl-carousel d-flex">
                            @foreach ($posts as $post)
                                @include('modules.post-small', ['post' => $post])
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
<br>
    <div class="section_gap registration_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="row clock_sec clockdiv" id="clockdiv">
                        <div class="col-lg-12">
                            <h1 class="mb-3">Inscrivez-vous maintenant</h1>
                            <p>
                                Avec D_IDEES, vous pouvez poser des questions à d'autres utilisateurs pour avoir
                                des reponses et chosir celle qui vous convient.
                                Cela vous permettra de trouver des solutions à des problèmes dans votre parcours.
                            </p>
                        </div>
                        <div class="col clockinner1 clockinner">
                            <h1 class="days">{{ $numposts }}</h1>
                            <br>
                            <span class="smalltext">Posts</span>
                        </div>
                        <div class="col clockinner clockinner1">
                            <h1 class="hours">{{ $numcomentaires }}</h1>
                            <br>
                            <span class="smalltext">Commentaires</span>
                        </div>
                        <div class="col clockinner clockinner1">
                            <h1 class="minutes">{{ $numusers }}</h1>
                            <br>
                            <span class="smalltext">Inscrits</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="register_form">
                        <h2>Login</h2>
                        <form class="form_area" id="myForm" action="mail.html" method="post">
                            <div class="row">
                                <div class="col-lg-12 form_group">
                                    <input name="name" placeholder="Your Name" required="" type="text" />
                                    <input name="name" placeholder="Your Phone Number" required="" type="tel" />
                                    <input name="email" placeholder="Your Email Address"
                                        pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required=""
                                        type="email" />
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button class="primary-btn">Connexion</button>
                                </div>
                                <br>
                                <br>
                                <span class="text-center w-100">vous etes déja inscrits ? </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if ($numposts == 0)
        <div class="popular_courses section_gap_top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="">
                            @foreach ($users as $user)
                                @include('modules.user-medium', ['user' => $user])
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <section class="trainer_area section_gap_top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="main_title">
                            <h2 class="mb-3">Liste des Inscrits</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center d-flex align-items-center">
                    @foreach ($users as $user)
                        @include('modules.user-medium')
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
