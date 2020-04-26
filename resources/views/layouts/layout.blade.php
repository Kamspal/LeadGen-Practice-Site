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
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <!-- Change color on scroll and shrink-->
    <script>
      $(window).scroll(function(){
        $('nav').toggleClass('shrink', $(this).scrollTop() > 50)
      });

      
    </script>
    <!-- End change color on scroll and shrink -->

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