  </main>

  <div class="Wrapper">
    <footer class="Footer">
      <img src="<?php bloginfo("template_url"); ?>/public/assets/images/logotype-minimal.svg" alt='"What Took You So Long?" minimal logotype' class="Footer-logotype">
    </footer>
  </div>

  <?php if (getenv("WP_ENV") === "production"): ?>
    <script>
      var _gaq=[['_setAccount','UA-XXXXXXXX-1'],['_trackPageview']];
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
  <?php endif; ?>

  <script src="<?php bloginfo("template_url"); ?>/public/assets/javascripts/application.js"></script>
  </body>
</html>
