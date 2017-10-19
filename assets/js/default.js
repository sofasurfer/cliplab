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
        Search
      */
      var oldSearch = $('#search_results').html();
      $('#search_field').keyup(function () {
        if($(this).val() == ''){
          $('#search_results').html(oldSearch);
        }else{
          $.getJSON( "/ajax?q=" + $(this).val(), function( data ) {
            $('#search_results').html();
            $.each(data, function(i, item) {
              $('#search_results').append('li').append('a').attr('href',item.url).addClass('showcase-link')
                .append('h3').text(item.title);
            });
          });
        }
      });
});