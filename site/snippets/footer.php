  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6">          
          <a class="pull-left" href="/about/">About / Contact</a>
        </div>
        <div class="col-md-6">
            <p class="pull-right social">
              <a title="YouTube" data-toggle="tooltip" href="https://www.youtube.com/channel/UCGWC_LUH-sFwKwhfwEClbHA" target="_blank">Y</a> 
              <a title="Facebook" data-toggle="tooltip" href="https://www.facebook.com/cliplab.ch/" target="_blank">F</a> 
              <a title="Twitter" data-toggle="tooltip" href="https://twitter.com/ClipLabCH" target="_blank">T</a> 
              <a title="Instagram" data-toggle="tooltip" href="https://www.instagram.com/cliplab.ch/" target="_blank">I</a>
            </p>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <?php echo js('assets/js/jquery.fullpage.min.js') ?>
  <?php echo js('assets/js/default.js?v1.0') ?>

  <!-- Piwik -->
  <script type="text/javascript">
    var _paq = _paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
      var u="//piwik.sofasurfer.org/";
      _paq.push(['setTrackerUrl', u+'piwik.php']);
      _paq.push(['setSiteId', '31']);
      var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
      g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
    })();
  </script>
  <!-- End Piwik Code -->  
</body>
</html>