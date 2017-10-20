$(document).ready(function() {
      
      $('#fullpage').fullpage();

      $('[data-toggle="tooltip"]').tooltip();

      /*
        Scroll Top
      */
      $(window).scroll(function () {
        if ($(this).scrollTop() > 40) {
          $('header').addClass('scroll');
        } else {
          $('header').removeClass('scroll');
        }
      });


      /*
        Set focus on search field when open
      */
      $("#op").change(function() {
          console.log('change');
          if($(this).is(":checked")) {
            console.log('focus');
            $('#search_field').focus();
          }
      });

      /*
        Search
      */
      var oldSearch = $('#search_results').html();
      $('#search_field').keyup(function () {
        if($(this).val() == ''){
          $('#search_results').html(oldSearch);
        }else{
          $.getJSON( "/ajax?q=" + $(this).val(), function( data ) {
            $('#search_results').empty();
            $.each(data, function(i, item) {
              $('#search_results').append( $('<li><div>'+item.modified+'</div><a href="'+item.url+'" class="showcase-link"><h3 class="showcase-title">'+item.title+'</h3></a><div>'+item.description+'</div></li>') );
            });
          });
        }
      });
});