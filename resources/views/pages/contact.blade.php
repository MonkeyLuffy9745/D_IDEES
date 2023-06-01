@extends("layouts.base")
<div style="display: none">
    {{ $_contact = true }}
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
                <h2>Contactez-Nous</h2>
                <div class="page_link">
                  <a href="index.html">Home</a>
                  <a href="contact.html">Contact</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
      <div class="container">
        <div
          id="mapBox"
          class="mapBox"
          data-lat="6.231421542577746"
          data-lon="1.1017763618372123"
          data-zoom="13"
          data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
          data-mlat="6.231421542577746"
          data-mlon="1.1017763618372123"
        ></div>
        <div class="row">
          <div class="col-lg-3">
            <div class="contact_info">
              <div class="info_item">
                <i class="ti-home"></i>
                <h6>Sanguera, TOGO</h6>
                <br>
              </div>
              <div class="info_item">
                <i class="ti-headphone"></i>
                <h6><a href="#">+228 91727717</a></h6>
                <br>
              </div>
              <div class="info_item">
                <i class="ti-email"></i>
                <h6><a href="#">ucaouut@gmail.com</a></h6>
                <br>
              </div>
            </div>
          </div>
          <div class="col-lg-9">
            <form
              class="row contact_form"
              action="contact_process.php"
              method="post"
              id="contactForm"
              novalidate="novalidate"
            >
              <div class="col-md-6">
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="votre nom"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'votre nom'"
                    required=""
                  />
                </div>
                <div class="form-group">
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Entrer votre mail"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Entrer votre mail'"
                    required=""
                  />
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="subject"
                    name="subject"
                    placeholder="Suejt"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'sujet'"
                    required=""
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea
                    class="form-control"
                    name="message"
                    id="message"
                    rows="1"
                    placeholder="Entrer un Message"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Entrer un Message'"
                    required=""
                  ></textarea>
                </div>
              </div>
              <div class="col-md-12 text-right">
                <button type="submit" value="submit" class="btn primary-btn">
                  envoyer
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--================Contact Area =================-->
@endsection
