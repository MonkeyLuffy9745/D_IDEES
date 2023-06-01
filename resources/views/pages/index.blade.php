@extends("layouts.base")

@section('base.content')

    <!--================ Start Home Banner Area =================-->
    <section class="home_banner_area">
      <div class="banner_inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner_content text-center">
                <h2 class="text-uppercase mt-5 mb-5">
                  Bienvenue !!!
                </h2>
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
                L’UCAO (Université Catholique de l’Afrique de L’Ouest) est créée en 1967. C’est un ensemble de huit unités universitaires implantées dans sept
                pays de la sous-région ouest- africaine. Elle a été créée pour répondre aux besoins en éducation et en instruction supérieure de qualité de la
                sous-région. Seule Université Privée du Togo, l’UCAO-UUT est une école d’excellence qui s’inscrit dans une triple trajectoire....
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

    <!--================ Start Popular Courses Area =================-->
    <div class="popular_courses">
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
            <div class="owl-carousel active_course">
                @include('modules.post-small')
                @include('modules.post-small')
                @include('modules.post-small')
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================ End Popular Courses Area =================-->

    <!--================ Start Registration Area =================-->
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
                <h1 class="days">20</h1>
                <br>
                <span class="smalltext">Posts</span>
              </div>
              <div class="col clockinner clockinner1">
                <h1 class="hours">1025</h1>
                <span class="smalltext">commentaires</span>
              </div>
              <div class="col clockinner clockinner1">
                <h1 class="minutes">47</h1>
                <br>
                <span class="smalltext">inscrits</span>
              </div>
              <div class="col clockinner clockinner1">
                <h1 class="seconds">59</h1>
                <br>
                <span class="smalltext">articles</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 offset-lg-1">
            <div class="register_form">
              <h2>Login</h2>
              <form
                class="form_area"
                id="myForm"
                action="mail.html"
                method="post"
              >
                <div class="row">
                  <div class="col-lg-12 form_group">
                    <input
                      name="name"
                      placeholder="Your Name"
                      required=""
                      type="text"
                    />
                    <input
                      name="name"
                      placeholder="Your Phone Number"
                      required=""
                      type="tel"
                    />
                    <input
                      name="email"
                      placeholder="Your Email Address"
                      pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                      required=""
                      type="email"
                    />
                  </div>
                  <div class="col-lg-12 text-center">
                    <button class="primary-btn">Connexion</button>
                  </div>
                  <br>
                  <br>
                  <span class="text-center w-100">vous etes déja inscrits ?  </span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================ End Registration Area =================-->

    <!--================ Start Trainers Area =================-->
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
            @include('modules.user-medium')
            @include('modules.user-medium')
            @include('modules.user-medium')
            @include('modules.user-medium')
            @include('modules.user-medium')
            @include('modules.user-medium')
        </div>
      </div>
    </section>
    <!--================ End Trainers Area =================-->

@endsection
