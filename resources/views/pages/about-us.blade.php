@extends("layouts.base")
<div style="display: none">
    {{ $_about = true }}
</div>
@section('base.content')

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>About Us</h2>
                <div class="page_link">
                  <a href="index.html">Accueil</a>
                  <a href="about-us.html">A Propos</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================ Start About Area =================-->
    <section class="about_area section_gap">
      <div class="container">
        <div class="row h_blog_item">
          <div class="col-lg-6">
            <div class="h_blog_img">
              <img class="img-fluid" src="img/about.png" alt="" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="h_blog_text">
              <div class="h_blog_text_inner left right">
                <h4>Bienvenue à UCAO-UUT</h4>
                <p>
                    L’université Catholique de l’Afrique de l’Ouest est un établissement d’enseignement
                    supérieur et de recherche. Elle assure la formation à la recherche et à l’excellence
                    dans l’acquisition et la promotion du savoir , contribue à l’intégration des peuples par
                    la diffusion et la libre circulation du savoir, par son caractère inter ecclésial et
                    transnational, et par son ouverture aux apports du multilinguisme.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End About Area =================-->

    <!--================ Start Feature Area =================-->
    <section class="feature_area section_gap_top title-bg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3 text-white">Nos Prestations</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-student"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Diplôme</h4>
                <p>
                    Nous offrons des Diplômes qui sont reconnus dans tout le pays.
                     Nous avons des partenariats à travers le monde
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-book"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Cours en Ligne</h4>
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
                <h4 class="mt-3 mb-2">Certification</h4>
                <p>
                  Nos premettons a nos Etudiant de passer et d'avoir des certifications comme CCNA
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Feature Area =================-->

    <section class="about_area section_gap">
        <div class="container">
          <div class="row h_blog_item">
            <div class="col-lg-6">

            </div>
            <div class="col-lg-6">
              <div class="h_blog_text">
                <div class="h_blog_text_inner left right">
                  <h4>Mot du Président</h4>
                  <p>
                    Seule Université Privée du Togo, l’UCAO-UUT est une école d’excellence
                    qui s’inscrit dans une triple trajectoire. Ancrée dans une histoire d’érudition,
                    de culture et de vertueuse émulation, elle a toujours compté ses étudiants parmi
                    les meilleurs dans les concours d’excellence. Pour ceux qui croiraient que l’enseignement
                    catholique devrait se cloisonner aux questions purement théologiques, l’UCAO-UUT,
                    prenant en compte la formation de tout homme et de tout l’homme,
                    témoigne par son existence même qu’il n’y a pas de séparation entre l’enseignement profane
                    et les sciences sacrées. Fidèle à la vocation millénaire de l’Eglise catholique
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection
