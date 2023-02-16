  <footer id="footer">
    <div class="footer_inner">
      <div class="side">
        <div class="foot_nav">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/">お問い合わせ</a>
        </div>
        <p class="copyright">&copy; Akihiro Nakamura All Rights Reserved.</p>
      </div>
    </div>
  </footer>

  <div id="pagetop">
    <a class="hash" href="#top" style="">pagetop</a>
  </div>
</div>

<p class="touch_pointer"></p>

<?php if(is_front_page()) : ?>
  <div class="loading">
    <div class="loading-animation">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/loading_logo.png" class="loading_logo" alt="loading_logo">
    </div>
  </div>
<?php endif; ?>


<script type="text/javascript">
  $(function () {
    var sp = 480;

    function masonry_execute() {
      var $galler_grid = $('.galler_grid');

      if ($(window).width() < sp) {
        $galler_grid.masonry('destroy');
      } else {
        $galler_grid.imagesLoaded(function(){
          $galler_grid.masonry({
            itemSelector: '.item',
            columnWidth: 245,
            fitWidth: true,
          });
        });
      }
    }
    masonry_execute();
    $(window).on('resize', function() {
      masonry_execute();
    });
  });
</script>

<script type="text/javascript">
  wow = new WOW(
    {
    boxClass: 'wow', // default
    animateClass: 'animated', // default
    offset:0// アニメーションをスタートさせる距離
    }
  );
  wow.init();
</script>

<?php wp_footer(); ?>


</body>
</html>
