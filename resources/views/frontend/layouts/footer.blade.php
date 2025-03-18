
</main>

<!-- footer-area -->
<footer>
    <div class="footer-menu">
        <ul>
            <li><a href="{{route('about-us')}}">About Us</a></li>
            <li><a href="{{route('privacy-policy')}}">Privacy Policy</a></li>
            <li><a href="{{route('disclaimer')}}">Disclaimer</a></li>
        </ul>
    </div>
    <div class="footer-area footer-area-two p-0 mt-0">

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="copyright-text">
                            <p class="text-center">© Copyright {{date('Y')}} - 24sevenupdates. All Rights Reserved. | Designed and Developed by Shivam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area-end -->


<!-- JS here -->
<script src="{{asset('frontend/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
{{-- <script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script> --}}
{{-- <script src="{{asset('frontend/assets/js/slick.min.js')}}"></script> --}}
{{-- <script src="{{asset('frontend/assets/js/swiper-bundle.js')}}"></script> --}}
{{-- <script src="{{asset('frontend/assets/js/ajax-form.js')}}"></script> --}}
<script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>

</html>
