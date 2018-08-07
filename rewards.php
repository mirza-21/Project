<!DOCTYPE html>
<html lang="en">
<?php include("include/head.php"); ?> 
<link type="text/css" rel="stylesheet" href="css/featherlight.min.css" />
<link type="text/css" rel="stylesheet" href="css/featherlight.gallery.min.css" />
<body>
<?php include("include/header.php"); ?> 
    <main class="site-main">
        
        <section class="boxes_area4">
        <div class="container">
        <div class="pricing-area text-center">
                <div class="row">
                    <div class="col-sm-4 plan price-one">
                        <ul>
                            <li class="heading-one">
                                <img src="img/rewards/bag.png">
                            </li>
                            <li><h3 class="numberCircle" align="center">1</h3></li>
                            <li><b>Gift	:</b>	Executive Bag</li>
                            <li><b>Condition :</b> 15 Direct Members</li>
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-two">
                        <ul>
                            <li class="heading-two">
                                <img src="img/rewards/watch.png">
                            </li>
                            <li><h3 class="numberCircle" align="center">2</h3></li>
                            <li><b>Gift	:</b>	Digital Watch</li>
                            <li><b>Condition :</b> 30 Direct Members</li>
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-two">
                        <ul>
                            <li class="heading-three">
                                <img src="img/rewards/travel.png">
                            </li>
                            <li><h3 class="numberCircle" align="center">3</h3></li>
                            <li><b>Gift	:</b>	Travel Bag</li>
                            <li><b>Condition :</b> 100 Direct Members</li>
                        </ul>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-4 plan price-one">
                        <ul>
                            <li class="heading-one">
                                <img src="img/rewards/phone.png">
                            </li>
                            <li><h3 class="numberCircle" align="center">4</h3></li>
                            <li><b>Gift	:</b>	Smart Phone</li>
                            <li><b>Condition :</b> 200 Direct Members</li>
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-two">
                        <ul>
                            <li class="heading-two">
                                <img src="img/rewards/tablet.png">
                            </li>
                            <li><h3 class="numberCircle" align="center">5</h3></li>
                            <li><b>Gift	:</b>	Tablet</li>
                            <li><b>Condition :</b> 400 Direct Members</li>
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-two">
                        <ul>
                            <li class="heading-three">
                                <img src="img/rewards/tv.png">
                            </li>
                            <li><h3 class="numberCircle" align="center">6</h3></li>
                            <li><b>Gift	:</b>	32 inch LED TV</li>
                            <li><b>Condition :</b> 800 Direct Members</li>
                        </ul>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-4 plan price-one">
                        <ul>
                            <li class="heading-one">
                                <img src="img/rewards/trip.jpg">
                            </li>
                            <li><h3 class="numberCircle" align="center">7</h3></li>
                            <li><b>Gift	:</b>	Foreign Trip</li>
                            <li><b>Condition :</b> 1600 Direct Members</li>
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-two">
                        <ul>
                            <li class="heading-two">
                                <img src="img/rewards/bike.png">
                            </li>
                            <li><h3 class="numberCircle" align="center">8</h3></li>
                            <li><b>Gift	:</b>	Pulsar Bike</li>
                            <li><b>Condition :</b> 4000 Direct Members</li>
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-two">
                        <ul>
                            <li class="heading-three">
                                <img src="img/rewards/car.png">
                            </li>
                            <li><h3 class="numberCircle" align="center">9</h3></li>
                            <li><b>Gift	:</b>	Maruti Car</li>
                            <li><b>Condition :</b> 15000 Direct Members</li>
                        </ul>
                    </div>
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
<script>
$(document).ready(function(){
				$('.gallery').featherlightGallery({
					gallery: {
						fadeIn: 300,
						fadeOut: 300
					},
					openSpeed:    300,
					closeSpeed:   300
				});
				$('.gallery2').featherlightGallery({
					gallery: {
						next: 'next »',
						previous: '« previous'
					},
					variant: 'featherlight-gallery2'
				});
			});

			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//stats.g.doubleclick.net/dc.js','ga');

			ga('create', 'UA-5342062-6', 'noelboss.github.io');
			ga('send', 'pageview');
</script>

<script type="text/javascript" src="js/jquery.flexisel.js"></script>
  <script src="js/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
  <script src="js/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/featherlight.gallery.min.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>