@extends('cruise.layouts.cruise')
@section('title', 'Asia School Tours')
@section('description', 'We specialise in customising School Tours and pride ourselves in offering fully personalised service for each school we work with, ensuring that we meet each school learning objectives')
@section('metatitle', 'We specialise in customising School Tours and pride ourselves in offering fully personalised service for each school we work with, ensuring that we meet each school learning objectives')
@section('customcss')
    <link rel="stylesheet" href="/assets/flipbook/css/lightbox.css">
    <link rel="stylesheet" href="/assets/flipbook/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/flipbook/css/customflipbook.css">
        <style type="text/css">
  .fb3d-modal.visible {
    z-index: 1200;
}
</style>
@endsection
@section('content')

<div class="login-form-margin ">
	<section class="content-brochures">
			<div class="container bg-white shadow rounded">
				<h3 class="pt-3 pb-2" align="center"><strong>Brochures Collection</strong></h3>

<!--            <div class="col-md-9 mx-auto pb-4 custom-book">
              <div class="row custom-book">
                <div class="col-4">
                  <div class="book" data-book-id="book1">
                    <img src='https://tweetworldtravel.com.au/wp-content/uploads/brochures/2020/Yoga-Wellness-Brochure-2020-cover.jpg' />
                  </div>
                </div>
   
                <div class="col-4">
                  <div class="book" data-book-id="book2">
                    <img src='https://tweetworldtravel.com.au/wp-content/uploads/brochures/2020/Luxury-Tour-Cruise-Brochure-cover.jpg' />
                  </div>
                </div>
                
                                    <div class="col-4">
                  <div class="book" data-book-id="book3">
                    <img src='https://tweetworldtravel.com.au/wp-content/uploads/brochures/2020/Golf-Tour-Brochure-2020-cover.jpg' />
                  </div>
                </div>
                </div>
                  <div class="shelf">
                    <div class="bookend_left"></div>
                      <div class="bookend_right"></div>
                      <div class="reflection"></div>
                  </div>
            </div> -->
			<div class="col-md-9 mx-auto pb-4 custom-book">
                <div class="row custom-book" style ="margin-top:10px;">
                    <div class="col-4"></div>
                <!--    <div class="col-4">
                        <div class="book" data-book-id="book4">
                            <img src='https://tweetworldtravel.com.au/wp-content/uploads/brochures/2020/Asia-Brochure-2020-cover.jpg' />
                  </div> 
                </div> -->
                <div class="col-4">
                  <div class="book" data-book-id="book5">
                    <img src='https://tweetworldtravel.com.au/wp-content/uploads/brochures/2020/Asia-School-Tour-Brochure-2020-cover.jpg' />
                  </div>
                </div>
             <!--   <div class="col-4">
                  <div class="book" data-book-id="book6">
                    <img src='https://tweetworldtravel.com.au/wp-content/uploads/brochures/2020/Cycling-Brochure-2020-2021-cover.jpg' />
                  </div>
                </div> -->
                </div>
                  <img style="z-index:0; height: auto; max-width: 100%; vertical-align: top; margin-top:-12px; " class="shelf_img" alt="Wooden Shelf" src="https://tweetworldtravel.com.au/wp-content/uploads/brochures/2020/shelf_wood_1.png">
                  </div>
       <!--     <div class="col-md-9 mx-auto pb-4 custom-book">
                <div class="row custom-book">
                    <div class="col-4">
                        <div class="book" data-book-id="book7">
                            <img src='https://tweetworldtravel.com.au/wp-content/uploads/brochures/2020/croisi-wwc-2020-cover.jpg' />
                  </div>
                </div>
                <div class="col-4">
                  <div class="book" data-book-id="book8">
                    <img src='https://tweetworldtravel.com.au/wp-content/uploads/brochures/2020/worldwide-rivercruises-brochure-cover.jpg' />
                  </div>
                </div>
              <div class="col-4">
                 <div class="book" data-book-id="book9">
                    <img src='https://tweetworldtravel.com.au/wp-content/uploads/brochures/2020/mekong-rivercruises-brochure-cover.jpg' />
                  </div>
                </div>  
                </div>
                <img style="z-index:0; height: auto; max-width: 100%; vertical-align: top; margin-top:-12px; " class="shelf_img" alt="Glass Shelf" src="https://tweetworldtravel.com.au/wp-content/uploads/brochures/2020/shelf_glass_1.png">
                -->
            
	</section>
                        </div> 

@endsection

@section('jscustom')
<script src="{{ asset('/assets/flipbook/js/lightbox.js') }}"></script> 
<script src="{{ asset('/assets/flipbook/js/html2canvas.min.js') }}"></script>
<script src="{{ asset('/assets/flipbook/js/three.min.js') }}"></script>
<script src="{{ asset('/assets/flipbook/js/pdf.min.js') }}"></script>
<script src="{{ asset('/assets/flipbook/js/3dflipbook.min.js') }}"></script>
<script type="text/javascript">
      window.jQuery(function() {
        var $ = window.jQuery;
        var styleClb = function() {
          $('.fb3d-modal').removeClass('light').addClass('dark');
        }, booksOptions = {
          book1: {
            pdf: '/uploads/brochures/2020/Yoga-Wellness-Brochure-2020.pdf',
            template: {
              html: '/assets/flipbook/templates/default-book-view.html',
              styles: [
                '/assets/flipbook/css/short-white-book-view.css'
              ],
              links: [{
                rel: 'stylesheet',
                href: '/assets/flipbook/css/font-awesome.min.css'
              }],
              script: '/assets/flipbook/js/default-book-view.js',
              sounds: {
                startFlip: '/assets/flipbook/sounds/start-flip.mp3',
                endFlip: '/assets/flipbook/sounds/end-flip.mp3'
              }
            },
            styleClb: styleClb
          },
          book2: {
            pdf: '/uploads/brochures/2020/Luxury-Holiday-Brochure-2020.pdf',
            template: {
              html: '/assets/flipbook/templates/default-book-view.html',
              styles: [
                '/assets/flipbook/css/black-book-view.css'
              ],
              links: [{
                rel: 'stylesheet',
                href: '/assets/flipbook/css/font-awesome.min.css'
              }],
              script: '/assets/flipbook/js/default-book-view.js',
              sounds: {
                startFlip: '/assets/flipbook/sounds/start-flip.mp3',
                endFlip: '/assets/flipbook/sounds/end-flip.mp3'
              }
            },
            styleClb: styleClb
          },
          book3: {
            pdf: '/uploads/brochures/2020/Golf-Holiday-Tours-Cruises-Brochure-2020.pdf',
            template: {
              html: '/assets/flipbook/templates/default-book-view.html',
              styles: [
                '/assets/flipbook/css/black-book-view.css'
              ],
              links: [{
                rel: 'stylesheet',
                href: '/assets/flipbook/css/font-awesome.min.css'
              }],
              script: '/assets/flipbook/js/default-book-view.js',
              sounds: {
                startFlip: '/assets/flipbook/sounds/start-flip.mp3',
                endFlip: '/assets/flipbook/sounds/end-flip.mp3'
              }
            },
            styleClb: styleClb
          },
          book4: {
            pdf: '/uploads/brochures/2020/Asia-Brochure-2021-2022.pdf',
            template: {
              html: '/assets/flipbook/templates/default-book-view.html',
              styles: [
                '/assets/flipbook/css/black-book-view.css'
              ],
              links: [{
                rel: 'stylesheet',
                href: '/assets/flipbook/css/font-awesome.min.css'
              }],
              script: '/assets/flipbook/js/default-book-view.js',
              sounds: {
                startFlip: '/assets/flipbook/sounds/start-flip.mp3',
                endFlip: '/assets/flipbook/sounds/end-flip.mp3'
              }
            },
            styleClb: styleClb
          },
          book5: {
            pdf: '/uploads/brochures/2020/Asia-School-Tour-Brochure-2020.pdf',
            template: {
              html: '/assets/flipbook/templates/default-book-view.html',
              styles: [
                '/assets/flipbook/css/black-book-view.css'
              ],
              links: [{
                rel: 'stylesheet',
                href: '/assets/flipbook/css/font-awesome.min.css'
              }],
              script: '/assets/flipbook/js/default-book-view.js',
              sounds: {
                startFlip: '/assets/flipbook/sounds/start-flip.mp3',
                endFlip: '/assets/flipbook/sounds/end-flip.mp3'
              }
            },
            styleClb: styleClb
          },
          book6: {
            pdf: '/uploads/brochures/2020/Cycling-Brochure-2020-2021.pdf',
            template: {
              html: '/assets/flipbook/templates/default-book-view.html',
              styles: [
                '/assets/flipbook/css/black-book-view.css'
              ],
              links: [{
                rel: 'stylesheet',
                href: '/assets/flipbook/css/font-awesome.min.css'
              }],
              script: '/assets/flipbook/js/default-book-view.js',
              sounds: {
                startFlip: '/assets/flipbook/sounds/start-flip.mp3',
                endFlip: '/assets/flipbook/sounds/end-flip.mp3'
              }
            },
            styleClb: styleClb
          },
            
          book7: {
            pdf: '/uploads/brochures/2020/Brochure_Travel_EN_croisieurope_2020.pdf',
            template: {
              html: '/assets/flipbook/templates/default-book-view.html',
              styles: [
                '/assets/flipbook/css/black-book-view.css'
              ],
              links: [{
                rel: 'stylesheet',
                href: '/assets/flipbook/css/font-awesome.min.css'
              }],
              script: '/assets/flipbook/js/default-book-view.js',
              sounds: {
                startFlip: '/assets/flipbook/sounds/start-flip.mp3',
                endFlip: '/assets/flipbook/sounds/end-flip.mp3'
              }
            },
            styleClb: styleClb
          },
          book8: {
            pdf: '/uploads/brochures/2020/Worldwide-Rivercruises-Brochure-2020.pdf',
            template: {
              html: '/assets/flipbook/templates/default-book-view.html',
              styles: [
                '/assets/flipbook/css/black-book-view.css'
              ],
              links: [{
                rel: 'stylesheet',
                href: '/assets/flipbook/css/font-awesome.min.css'
              }],
              script: '/assets/flipbook/js/default-book-view.js',
              sounds: {
                startFlip: '/assets/flipbook/sounds/start-flip.mp3',
                endFlip: '/assets/flipbook/sounds/end-flip.mp3'
              }
            },
            styleClb: styleClb
          },
          book9: {
            pdf: '/uploads/brochures/2020/Mekong-Rivercruises-Brochure-2020.pdf',
            template: {
              html: '/assets/flipbook/templates/default-book-view.html',
              styles: [
                '/assets/flipbook/css/black-book-view.css'
              ],
              links: [{
                rel: 'stylesheet',
                href: '/assets/flipbook/css/font-awesome.min.css'
              }],
              script: '/assets/flipbook/js/default-book-view.js',
              sounds: {
                startFlip: '/assets/flipbook/sounds/start-flip.mp3',
                endFlip: '/assets/flipbook/sounds/end-flip.mp3'
              }
            },
            styleClb: styleClb
          }
        };

        var instance = {
          scene: undefined,
          options: undefined,
          node: $('.fb3d-modal .mount-container')
        };

        var modal = $('.fb3d-modal');
        modal.on('fb3d.modal.hide', function() {
          instance.scene.dispose();
        });
        modal.on('fb3d.modal.show', function() {
          instance.scene = instance.node.FlipBook(instance.options);
          instance.options.styleClb();
        });
        $('.custom-book').find('.book').click(function(e) {
          var target = $(e.target);
          while(target[0] && !target.attr('data-book-id')) {
            target = $(target[0].parentNode);
          }
          if(target[0]) {
            instance.options = booksOptions[target.attr('data-book-id')];
            $('.fb3d-modal').fb3dModal('show');
          }
        });
      });
    </script>
@endsection