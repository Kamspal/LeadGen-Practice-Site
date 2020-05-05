<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <!-- add image in title bar -->
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" type="text/css">
     <!-- font-awesome icon -->
     <link rel="stylesheet" href="css/font-awesome.css" type="text/css">
     <!-- font-themify icon -->
     <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
     <!-- owl-carousel -->
     <link rel="stylesheet" href="/css/owl.carousel.min.css">
     <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    
    <title>LeadGen</title>
  </head>
  <body>

      @include('parallax')
    

  <footer id="footer-section4" class="bg-white builder-bg padding-60px-tb xs-padding-40px-tb footer-style4">
            <div class="container">
                <div class="row equalize sm-equalize-auto">
                    <!-- logo -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sm-text-center sm-margin-five-bottom xs-margin-nine-bottom display-table">
                        <div class="display-table-cell-vertical-middle">
                            <a href="#" class="scroll-top"><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <!-- end logo -->
                    <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12 sm-margin-three-bottom text-center xs-text-center display-table1">
                        <div class="display-table-cell-vertical-middle">
                            <span class="tz-text">&copy; 2016 LeadGen is Proudly Powered By <a class="text-light-gray2" href="#">ThemeZaa</a>.</span>
                        </div>
                    </div>
                    <!-- social elements -->
                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 text-right sm-text-center display-table1" style="height: 39px;">
                        <div class="social icon-extra-small display-table-cell-vertical-middle">
                            <a href="#" class="margin-sixteen-right">
                                <i class="fa fa-facebook tz-icon-color"></i>
                            </a>
                            <a href="#" class="margin-sixteen-right">
                                <i class="fa fa-twitter tz-icon-color"></i>
                            </a>
                            <a href="#" class="margin-sixteen-right">
                                <i class="fa fa-google-plus tz-icon-color"></i>
                            </a>
                            <a href="#" class="margin-sixteen-right">
                                <i class="fa fa-pinterest tz-icon-color"></i>
                            </a>
                            <a href="#" class="margin-sixteen-right">
                                <i class="fa fa-linkedin tz-icon-color"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-youtube tz-icon-color"></i>
                            </a>
                        </div>
                    </div>                            
                    <!-- end social elements -->
                </div>
            </div>    
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/slideNav.js"></script>
    <!-- Change color on scroll and shrink-->
    <script>
        $(window).scroll(function(){
        $('nav').toggleClass('shrink', $(this).scrollTop() > 50)
        });
       
      
    </script>
    <!-- End change color on scroll and shrink -->
     
    <!-- smooth scrolling while clicking on nav menu -->


    <!-- Onclick nav-border switching -->
    <script>

        $(document).ready(function() {
              $('.scroll-top').click(function(e) {
            e.preventDefault();
            $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
              });

              // Smooth scrolling
              var scrollLink = $('.scroll');
            
              scrollLink.click(function(c) {
                $('nav li a.active').removeClass('active');
                var $parent = $(this).parent();
                $parent.addClass('active');
                c.preventDefault();
                
                $('body,html').animate({
                  scrollTop: $(this.hash).offset().top
                }, 1000 );
              });


              var section = $('.tz-text');
              var section1 = $('.text1');

              section.click(function (a){
                    a.preventDefault();
                    $('html, body').animate({
                        scrollTop: $("#download").offset().top
                    }, 1000);
                });

              section1.click(function (b){
                    b.preventDefault();
                    $('html, body').animate({
                        scrollTop: $("#about").offset().top
                    }, 1000);
                });
              
              // Active link switching
              $(window).scroll(function() {
                var scrollBarLocation = $(this).scrollTop();
                
                scrollLink.each(function() {
                  
                  var sectionOfSet = $(this.hash).offset().top - 10;
                  if ( sectionOfSet <= scrollBarLocation ) {
                    $(this.hash+"-menu").parent().addClass('active');
                    $(this.hash+"-menu").parent().siblings().removeClass('active');
                    
                  }
            });
            
          });

        }); 

      
        
      
     
    </script>
    <!-- end smooth scrolling while clicking on nav menu -->

    <!-- activating nav link on scroll -->
      
    <!-- end activating nav link on scroll -->
   
    <!-- image-slider -->
<script>
  $('.owl-carousel').owlCarousel({
    loop:false,
    rewind:true,
    margin:10,
    nav:true,
    navText:['<i class="fa fa-long-arrow-left"></i>', '<i class="fa fa-long-arrow-right"></i>'],
    smartSpeed:900,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:4
        },
        
    }
 })
        var owl = $('.owl-carousel');
        owl.owlCarousel();
        // Go to the next item
        $('i').click(function() {
            owl.trigger('next.owl.carousel');
        })
        // Go to the previous item
        $('i').click(function() {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owl.trigger('prev.owl.carousel');
        })
</script>
    <!-- end image-slider -->

    <!-- onclick-start your free trail button -->
      <script>
        $('.default-submit').click(function() {
          alert ('The message has been sent');
        })
      
      </script>
    <!-- end onclick-start your free trail button -->

  </body>
</html>