  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6">          
          <a class="pull-left" href="mailto:rogerkeller.xyz">info@rogerkeller.xyz</a>
        </div>
        <div class="col-md-6">
            <p class="pull-right social">
              <a target="_blank" href="https://www.rogerkeller.xyz/">actual work</a>

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