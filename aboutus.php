<!DOCTYPE html>
<html lang="en">
<?php include("include/head.php"); ?> 
<body>
<?php include("include/header.php"); ?> 
    <main class="site-main">
        
        <section class="boxes_area1">
        <div class="container">
        <div class="row">
        <h2 class="titlediv" align="center">About RX INDIA 550</h2>
        <hr>
        <div class="col-md-12">
        <p class="descrip">
        In a globalized environment where economic reform is a vital importance, RX India is completely dedicated to transform the mindset of the masses in general, and youth in particular by infusing scene of economic independence and self-reliance. Bestowed with a noble mission of bringing social, educational and economic reforms, RX India is committed to create awareness among the masses and driving them towards productivity through innovation and entrepreneurship. In calculating entrepreneur skills among the youth and channelizing youth energy for confronting the national and international challenges, making them realize the national and global needs are some of the prime objectives on which RX India has been constantly focusing upon. By introducing self-earning packages with minimal cost RX India has made an endeavor to create awareness among the masses. With its Associates spread throughout various states in the country RX India has taken the responsibility to create earning at the doorstep of the masses that are otherwise deprived of such opportunities. Considering the future needs, RX India has taken initiative in popularizing the earning by providing easy access and simplifying the process of acquiring. In order to reduce the burden on the users, a philanthropic approach has been adopted to provide the packages in a reasonably minimum cost. For overcoming the language barrier, the packages have also been developed in different regional languages. In a nutshell, RX India has opened a new vista in the direction of technology and economic empowerment of the youth by making them responsible future citizens with a greater sense of responsibility, preparing them to face the formidable national and international challenges and harnessing their potential for achieving the greater goal of economic self-reliance in a sustainable manner.
        </p>
        </div>
        
        </div>
        </div>
              <div id="media-sec">
        <div class="container">

            <div class="row">
                <ul id="flexiselDemo3">
    <li><img src="img/notice/img1.jpg" /></li>
    <li><img src="img/notice/img2.jpg" /></li>
    <li><img src="img/notice/img3.jpg" /></li>
    <li><img src="img/notice/img4.jpg" /></li>                                                 
</ul> 
            </div>

        </div>
         

    </div>
        </section>
        
    </main>
    <?php include("include/footer.php"); ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('.carousel[data-type="multi"] .item').each(function(){
          var next = $(this).next();
          if (!next.length) {
            next = $(this).siblings(':first');
          }
          next.children(':first-child').clone().appendTo($(this));

          for (var i=0;i<4;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
          }
        });        
    </script>
    
<script type="text/javascript" src="js/slider.js"></script> 
<script type="text/javascript">
  $(document).omSlider({
    slider: $('.slider'),
    dots: $('.dots'),
    next:$('.btn-right'),
    pre:$('.btn-left'),
    timer: 5000,
    showtime: 1000
  });
  </script>
  <script>
  $(document).ready(function() {
  //carousel options
  $('#quote-carousel').carousel({
    pause: true, interval: 5000,
  });
});
  </script>
  <script type="text/javascript">
    $(function () {
        $(".demo1").bootstrapNews({
            newsPerPage: 3,
            autoplay: true,
			pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 2500,
            onToDo: function () {
                //console.log(this);
            }
        });
		
		$(".demo2").bootstrapNews({
            newsPerPage: 3,
            autoplay: true,
			pauseOnHover: true,
			navigation: false,
            direction: 'down',
            newsTickerInterval: 2500,
            onToDo: function () {
                //console.log(this);
            }
        });

        $(".demo3").bootstrapNews({
            newsPerPage: 2,
            autoplay: true,
			pauseOnHover: true,
			navigation: false,
            direction: 'down',
            newsTickerInterval: 2500,
            onToDo: function () {
                //console.log(this);
            }
        });
    });
</script>
   <script type="text/javascript">

$(window).load(function() {
    $("#flexiselDemo1").flexisel();

    $("#flexiselDemo2").flexisel({
        visibleItems: 4,
        itemsToScroll: 3,
        animationSpeed: 200,
        infinite: true,
        navigationTargetSelector: null,
        autoPlay: {
            enable: false,
            interval: 5000,
            pauseOnHover: true
        },
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1,
                itemsToScroll: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2,
                itemsToScroll: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3,
                itemsToScroll: 3
            }
        },
        loaded: function(object) {
            console.log('Slider loaded...');
        },
        before: function(object){
            console.log('Before transition...');
        },
        after: function(object) {
            console.log('After transition...');
        },
        resize: function(object){
            console.log('After resize...');
        }
    });
    
    $("#flexiselDemo3").flexisel({
        visibleItems: 3,
        itemsToScroll: 1,         
        autoPlay: {
            enable: true,
            interval: 5000,
            pauseOnHover: true
        }        
    });
    
    $("#flexiselDemo4").flexisel({
        infinite: false     
    });    
    
});
</script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
  <script src="js/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
</body>
</html>