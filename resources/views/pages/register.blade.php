@extends('layouts.base')
<div style="display: none">
    {{ $_register = true }}
</div>
@section('base.content')
    <!--================ Start Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_content">
                            <div class="w-100 d-flex justify-content-center bg-transparent registration_area">
                                <div class="align-items-center w-75">
                                    <div class="row w-100 align-items-center">
                                        <div class="offset-lg-1">
                                            <div class="register_form" style="margin-top:180px">
                                                <h2>Créer un compte</h2>
                                                <form action="{{ route('user.store') }}" method="post" class="form_area">
                                                    @csrf
                                                    @if (count($errors) > 0)
                                                        <div class="p-0" style="color:red">
                                                            <ul>
                                                                @foreach ($errors->all() as $error)
                                                                    <li>{{ $error }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif
                                                    <div class="row">
                                                        <div class="col-lg-12 form_group">
                                                            <input name="last_name" placeholder="Nom"
                                                                required="" type="text" />
                                                            <input name="first_name"  placeholder="Prénom"
                                                                required="" type="text" />
                                                            <input name="email"
                                                                placeholder="Email"
                                                                pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                                                required="" type="email" />
                                                            <input name="password"
                                                                placeholder="Mot de Passe" required="" type="password" />
                                                            <input name="birth_date"
                                                                placeholder="Date de naissance" required=""
                                                                type="text" />
                                                            <input name="number"  placeholder="Téléphone"
                                                                required="" type="text" />
                                                            <input name="institut"  placeholder="Institut"
                                                                required="" type="text" />
                                                        </div>
                                                        <div class="col-lg-12 text-center">
                                                            <button class="primary-btn" type="submit">Créer un
                                                                compte</button>
                                                        </div>
                                                        <span class="text-center w-100 pt-4">Vous êtes déjà inscrit ?
                                                            <a href="{{ route('app.login') }}" style="color: #fdc632">Se
                                                                connecter</a>
                                                        </span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================ Start Feature Area =================-->
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
                            <h4 class="mt-3 mb-2">Centre/h4>
                                <p>
                                    One make creepeth, man bearing theira firmament won't great
                                    heaven
                                </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="icon"><span class="flaticon-book"></span></div>
                        <div class="desc">
                            <h4 class="mt-3 mb-2">Sell Online Course</h4>
                            <p>
                                One make creepeth, man bearing theira firmament won't great
                                heaven
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="icon"><span class="flaticon-earth"></span></div>
                        <div class="desc">
                            <h4 class="mt-3 mb-2">Global Certification</h4>
                            <p>
                                One make creepeth, man bearing theira firmament won't great
                                heaven
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Feature Area =================-->

@endsection
