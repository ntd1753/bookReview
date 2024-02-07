<!-- Template JavaScript -->
<script src="assets/js/theme-change.js"></script>

<script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>

<!-- disable body scroll which navbar is in active -->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- disable body scroll which navbar is in active -->

<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
