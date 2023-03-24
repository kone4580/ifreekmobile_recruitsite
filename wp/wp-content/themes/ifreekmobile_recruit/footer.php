<div class="bottom_cta">
    <div class="wrap">
        <div class="top_title">
            <p class="jp">働く環境</p>
            <p class="eng">ENVIRONMENT</p>
        </div>
    </div>
    <div class="link_box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/environment_bg.jpg" alt="お問い合わせ">
        <div class="inner">
            <p class="eng">Employee Benefits</p>
            <p class="jp">働く環境・福利厚生・研修制度</p>
            <span class="arrow"><i class="fas fa-angle-right"></i></span>
        </div>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>welfare/" class="float_link"></a>
    </div>

    <div class="bottom_cta_links">
        <div class="item">
            <p class="eng">DATA</p>
            <p class="jp">データで見るアイフリークモバイル</p>
            <span class="arrow"><i class="fas fa-angle-right"></i></span>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>data/" class="float_link"></a>
        </div>

        <div class="item">
            <p class="eng">RECRUITMENT</p>
            <p class="jp">募集要項</p>
            <span class="arrow"><i class="fas fa-angle-right"></i></span>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>recruitment/" class="float_link"></a>
        </div>
    </div>
</div>


<footer id="footer">

    <div class="footer_inner">
        <div class="footer_left">
            I*FREEKMOBILE<br>RECRUIT SITE
        </div>

        <div class="footer_right">
            <ul class="foot_nav">
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>message/">MESSAGE</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>jobs/">JOB</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>data/">DATA&amp;CULTURE</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>interview/">STAFF INTERVIEW</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>welfare/">EMPLOYEE BENEFITS</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>recruitment/">RECRUITMENT</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>entry/">ENTRY</a></li>
            </ul>
        </div>
    </div>

    <div class="footer_bottom">
        <div class="wrap">
            <ul class="footer_bottom_link">
                <li><a href="https://www.i-freek.co.jp/" target="_blank">コーポレートサイト</a></li>
                <li><a href="https://www.i-freek.co.jp/privacy/" target="_blank">個人情報保護方針</a></li>
            </ul>
            <p class="copyright">COPYRIGHT &copy; I-FREEK MOBILE INC. ALL RIGHTS RESERVED.</p>
        </div>
    </div>
</footer>


<div id="pagetop">
    <a class="hash" href="#top">pagetop</a>
</div>

<div id="js-loader" class="loader"></div>


<?php if(is_front_page()) : ?>
<script type="text/javascript">
    //news slider
    var slider1 = new Swiper ('.top_interview_slider', {
        slidesPerView: 2,
        spaceBetween: 16,
        watchSlidesVisibility: !0,
        loop: false,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        breakpoints: {
            768: {
                spaceBetween: 20,
                slidesPerView: 1.5
            },
            1e3: {
                spaceBetween: 24,
                slidesPerView: 4.2
            }
        },
    });
</script>


<script type="text/javascript">
    $(function() {
        var animationFlag = true;
        $(window).scroll(function(){
            $(".count_num").each(function(){
                var position = $(this).offset().top;
                var scroll = $(window).scrollTop();
                var windowHeight = $(window).height();
                if (scroll > position - windowHeight + windowHeight/4){
                if(animationFlag) {
                        animationFlag = false;
                        $('#count1').animateNumber({ number: 20}, 900);
                        $('#count2').animateNumber({ number: 550}, 900);
                    }
                }
            });
        });
    });
</script>
<?php endif; ?>

<?php if(is_page('data')) : ?>
<script type="text/javascript">
    $(function() {
        var animationFlag1 = true;
        var animationFlag3 = true;
        var animationFlag4 = true;
        var animationFlag10 = true;
        var animationFlag12 = true;
        var animationFlag16 = true;
        var animationFlag17 = true;
        var animationFlag18 = true;
        var animationFlag19 = true;
        var animationFlag23 = true;

        $(window).on('load scroll', function(){
            var position1 = $(".box_01").offset().top;
            var scroll1 = $(window).scrollTop();
            var windowHeight1 = $(window).height();
            if (scroll1 > position1 - windowHeight1 + windowHeight1/4){
                if(animationFlag1) {
                    $('#count1').animateNumber({ number: 35}, 900);
                    $('#count2').animateNumber({ number: 65}, 1100);
                    animationFlag1 = false;
                }
            }
            var position2 = $(".box_02").offset().top;
            var scroll2 = $(window).scrollTop();
            var windowHeight2 = $(window).height();
            if (scroll2 > position2 - windowHeight2 + windowHeight2/4){
                if(animationFlag3) {
                    $('#count3').animateNumber({ number: 562}, 1500);
                    animationFlag3 = false;
                }
            }
            var position3 = $(".box_03").offset().top;
            var scroll3 = $(window).scrollTop();
            var windowHeight3 = $(window).height();
            if (scroll3 > position3 - windowHeight3 + windowHeight3/4){
                if(animationFlag4) {
                    $('#count4').animateNumber({ number: 29.1}, 900);
                    $('#count5').animateNumber({ number: 60}, 900);
                    $('#count6').animateNumber({ number: 33}, 900);
                    $('#count7').animateNumber({ number: 4}, 900);
                    $('#count8').animateNumber({ number: 2}, 900);
                    $('#count9').animateNumber({ number: 1}, 900);
                    animationFlag4 = false;
                }
            }
            var position4 = $(".box_04").offset().top;
            var scroll4 = $(window).scrollTop();
            var windowHeight4 = $(window).height();
            if (scroll4 > position4 - windowHeight4 + windowHeight4/4){
                if(animationFlag10) {
                    $('#count10').animateNumber({ number: 1}, 900);
                    $('#count11').animateNumber({ number: 99}, 900);
                    animationFlag10 = false;
                }
            }
            var position5 = $(".box_05").offset().top;
            var scroll5 = $(window).scrollTop();
            var windowHeight5 = $(window).height();
            if (scroll5 > position5 - windowHeight5 + windowHeight5/4){
                if(animationFlag12) {
                    $('#count12').animateNumber({ number: 89}, 1500);
                    $('#count13').animateNumber({ number: 3}, 900);
                    $('#count14').animateNumber({ number: 6}, 900);
                    $('#count15').animateNumber({ number: 2}, 900);
                    animationFlag12 = false;
                }
            }
            var position6 = $(".box_06").offset().top;
            var scroll6 = $(window).scrollTop();
            var windowHeight6 = $(window).height();
            if (scroll6 > position6 - windowHeight6 + windowHeight6/4){
                if(animationFlag16) {
                    $('#count16').animateNumber({ number: 7.8}, 900);
                    animationFlag16 = false;
                }
            }
            var position7 = $(".box_07").offset().top;
            var scroll7 = $(window).scrollTop();
            var windowHeight7 = $(window).height();
            if (scroll7 > position7 - windowHeight7 + windowHeight7/4){
                if(animationFlag17) {
                    $('#count17').animateNumber({ number: 77.8}, 900);
                    animationFlag17 = false;
                }
            }
            var position8 = $(".box_08").offset().top;
            var scroll8 = $(window).scrollTop();
            var windowHeight8 = $(window).height();
            if (scroll8 > position8 - windowHeight8 + windowHeight8/4){
                if(animationFlag18) {
                    $('#count18').animateNumber({ number: 125}, 900);
                    animationFlag18 = false;
                }
            }
            var position9 = $(".box_09").offset().top;
            var scroll9 = $(window).scrollTop();
            var windowHeight9 = $(window).height();
            if (scroll9 > position9 - windowHeight9 + windowHeight9/4){
                if(animationFlag19) {
                    $('#count19').animateNumber({ number: 16}, 900);
                    $('#count20').animateNumber({ number: 38}, 900);
                    $('#count21').animateNumber({ number: 42}, 900);
                    $('#count22').animateNumber({ number: 4}, 900);
                    animationFlag19 = false;
                }
            }
            var position10 = $(".box_10").offset().top;
            var scroll10 = $(window).scrollTop();
            var windowHeight10 = $(window).height();
            if (scroll10 > position10 - windowHeight10 + windowHeight10/4){
                if(animationFlag23) {
                    $('#count23').animateNumber({ number: 25}, 900);
                    $('#count24').animateNumber({ number: 75}, 900);
                    animationFlag23 = false;
                }
            }
        });
    });
</script>
<?php endif; ?>

<?php if(is_page('history')) : ?>
<script type="text/javascript">
    window.addEventListener('DOMContentLoaded', () => {

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                const id = entry.target.getAttribute('id');
                if (entry.intersectionRatio > 0) {
                    document.querySelector(`nav li a[href="#${id}"]`).parentElement.classList.add('active');
            } else {
            document.querySelector(`nav li a[href="#${id}"]`).parentElement.classList.remove('active');
            }
            });
        });

        // Track all sections that have an `id` applied
        document.querySelectorAll('section[id]').forEach((section) => {
        observer.observe(section);
        });
    });
</script>
<?php endif; ?>

<script type="text/javascript">
    $(function(){
        $(".job_list .item .inner").matchHeight();
        $(".match_divisions .item .white_tile").matchHeight();
        $(".wanted_wrap .con_text").matchHeight();
        $(".flow_wrap .con_flow").matchHeight();
        $('.welfares .welf_box').matchHeight();
    });
</script>

<script type="text/javascript">
    $(window).on('load',function(){
        $("#js-loader").fadeOut();
    });
</script>

<?php wp_footer(); ?>


</body>
</html>
