<footer class="footer-area section_gap text-center " style="padding: 90px">
    <div class="container">
        <div class="row text-center">
            <div class="w-100 single-footer-widget">
                <h4>Menu</h4>
                <ul class="d-flex w-100 justify-content-center text-center">
                    <li><a class="pr-5" href="{{ route('app.index') }}">Acceuil</a></li>
                    <li><a class="pr-5" href="{{ route('app.about-us') }}">A propos</a></li>
                    {{-- <li><a class="pr-5" href="{{ route('blog.index') }}">Blog</a></li> --}}
                    <li><a class="pr-5" href="{{ route('forum.index') }}">Forum</a></li>
                    <li><a class="pr-5" href="{{ route('app.contact') }}">Contact</a></li>
                </ul>
            </div>
            <div class="w-100">
                <div class="footer-bottom m-0 p-0 w-100 d-flex justify-content-center text-center">
                    <div class="footer-social text-center">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter"></i></a>
                        <a href="#"><i class="ti-dribbble"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom w-100 justify-content-center">
                <p class="footer-text m-0 text-white">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="ti-heart"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
</footer>
