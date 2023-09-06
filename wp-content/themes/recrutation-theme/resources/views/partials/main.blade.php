<main class="main">

    <section class="main__services py-5">
        
        <h3 class="main__services--heading"><?php {!! the_field('service_heading') !!} ?><span class="service-head">Ciebie</span> zrobić?</h3>
    
        <div class="container">

            <div class="main__services__content">
                <div class="main__services__content__box">

                    <div class="row m-0 p-0 d-flex justify-content-lg-center justify-content-evenly">

                      <?php 

                      $serviceSection = new WP_Query(array(
                        'posts_per_page' => 5,
                        'post_type' => 'service'
                        ));
                        
                        while($serviceSection->have_posts()) {
                          $serviceSection->the_post();?>

                            <div class="main__services__content__box__single-box col-md-5 col-lg-3">
                                <div class="main__services__content__box__single-box--icon">
                                  <img class="mt-3" src="<?php $pageBannerImage = get_field('service_img'); echo $pageBannerImage['url'] ?>" class="card-img-top" alt="foreign transport website open on laptop">

                                </div>

                                <p class="main__services__content__box__single-box--text"><?php the_field('service_header') ?></p>

                                <p class="main__services__content__box__single-box--sub-text"><?php the_field('service_text') ?></p>
                                  
                            </div>

                      <?php }
                      ?>



                      



                    </div>
                    
                </div>
            </div>

        </div>
    </section>

    <section class="main__about py-5">
      <div class="container-fluid">
        <div class="main__about__content">

            <div class="main__about__content__imgs-left col-md-10 col-lg-5 m-0">

              <div class="img-box">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 942.png" />

              <div class="main__about__content__imgs-left__icon-box-one">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="66.567" height="66.567" viewBox="0 0 66.567 66.567">
                  <defs>
                    <clipPath id="clip-path">
                      <rect id="Rectangle_240" data-name="Rectangle 240" width="66.567" height="66.567" fill="none"/>
                    </clipPath>
                  </defs>
                  <g id="Group_243" data-name="Group 243" transform="translate(66.567) rotate(90)">
                    <g id="Group_242" data-name="Group 242" transform="translate(0 0)" clip-path="url(#clip-path)">
                      <path id="Path_305" data-name="Path 305" d="M33.419,0,0,.042A33.419,33.419,0,0,0,33.419,33.42,33.387,33.387,0,0,0,61.551,18.03Z" transform="translate(-0.135 33.284)" fill="#0cce6b"/>
                      <path id="Path_306" data-name="Path 306" d="M0,0C0,.031,0,.061,0,.093,0,.061,0,.031,0,0" transform="translate(-0.137 33.19)" fill="#0795ff"/>
                      <path id="Path_307" data-name="Path 307" d="M0,27.116l0,4.363L28.839,2.644Q28.039,1.28,27.116,0Z" transform="translate(33.29 13.871)" fill="#118a4c"/>
                      <path id="Path_308" data-name="Path 308" d="M33.391,1.789c0-.6-.018-1.2-.05-1.789L0,33.341v1.869c.88,0,1.749-.047,2.612-.116L33.275,4.432c.07-.873.116-1.753.116-2.643" transform="translate(33.313 31.494)" fill="#118a4c"/>
                      <path id="Path_309" data-name="Path 309" d="M30.827,2.953Q30.19,1.439,29.414,0L0,29.415l0,4.361Z" transform="translate(33.296 17.534)" fill="#118a4c"/>
                      <path id="Path_310" data-name="Path 310" d="M32.334,3.31A32.937,32.937,0,0,0,31.277,0L0,31.277,0,35.64Z" transform="translate(33.302 21.634)" fill="#118a4c"/>
                      <path id="Path_311" data-name="Path 311" d="M33.232,3.767A32.9,32.9,0,0,0,32.633,0L0,32.632l0,4.363Z" transform="translate(33.307 26.24)" fill="#118a4c"/>
                      <path id="Path_312" data-name="Path 312" d="M0,18.324A33.858,33.858,0,0,0,18.324,0Z" transform="translate(45.88 45.879)" fill="#118a4c"/>
                      <path id="Path_313" data-name="Path 313" d="M0,20.329l.006,6.1L26.439,0" transform="translate(33.283 12.954)" fill="#118a4c"/>
                      <path id="Path_314" data-name="Path 314" d="M0,0C0,.077,0,.152,0,.228" transform="translate(-0.137 33.284)" fill="#156cdd"/>
                      <path id="Path_315" data-name="Path 315" d="M27.411,5.633A33.08,33.08,0,0,0,28.677,0L0,28.677a32.8,32.8,0,0,0,5.631-1.264Z" transform="translate(37.719 37.719)" fill="#118a4c"/>
                      <path id="Path_316" data-name="Path 316" d="M33.42,33.42,0,33.462V33.42A33.42,33.42,0,1,1,61.557,51.453Z" transform="translate(-0.137 -0.136)" fill="#ccd8e5"/>
                      <path id="Path_317" data-name="Path 317" d="M33.42,0A33.579,33.579,0,0,0,0,33.327l33.42.093H66.84A33.58,33.58,0,0,0,33.42,0" transform="translate(-0.137 -0.136)" fill="#dfe8f4"/>
                    </g>
                  </g>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="55.09" height="47.045" viewBox="0 0 55.09 47.045">
                  <defs>
                    <clipPath id="clip-path">
                      <rect id="Rectangle_241" data-name="Rectangle 241" width="55.09" height="47.045" transform="translate(0 0)" fill="none"/>
                    </clipPath>
                  </defs>
                  <g id="Group_245" data-name="Group 245" transform="translate(0 0)">
                    <g id="Group_244" data-name="Group 244" transform="translate(0 0)" clip-path="url(#clip-path)">
                      <path id="Path_318" data-name="Path 318" d="M0,22.3V41.131c0,1.447,3.829,2.62,8.553,2.62s8.554-1.173,8.554-2.62V22.3Z" transform="translate(0 3.293)" fill="#0cce6b"/>
                      <path id="Path_319" data-name="Path 319" d="M8.553,22.3v2.621C3.829,24.917,0,23.743,0,22.3V26.87a15.855,15.855,0,0,0,4.651,1.253,4.479,4.479,0,0,1,3.9,4.432v8.27a2.779,2.779,0,0,0,3.126,2.745c3.177-.382,5.426-1.331,5.426-2.44V22.3Z" transform="translate(0 3.293)" fill="#118a4c"/>
                      <path id="Path_320" data-name="Path 320" d="M17.107,22.633c0,1.447-3.83,2.621-8.553,2.621S0,24.081,0,22.633s3.83-2.621,8.554-2.621,8.553,1.174,8.553,2.621" transform="translate(0 2.956)" fill="#ccd8e5"/>
                      <path id="Path_321" data-name="Path 321" d="M16.548,12.29V42.609c0,1.447,3.83,2.62,8.553,2.62s8.554-1.173,8.554-2.62V12.29Z" transform="translate(1.501 1.815)" fill="#0cce6b"/>
                      <path id="Path_322" data-name="Path 322" d="M25.1,12.29v2.621c-4.724,0-8.553-1.174-8.553-2.621v4.574A15.857,15.857,0,0,0,21.2,18.117a4.479,4.479,0,0,1,3.9,4.432V42.3a2.779,2.779,0,0,0,3.126,2.745c3.177-.382,5.426-1.331,5.426-2.44V12.29Z" transform="translate(2.444 1.815)" fill="#118a4c"/>
                      <path id="Path_323" data-name="Path 323" d="M33.654,12.627c0,1.447-3.83,2.621-8.553,2.621s-8.554-1.174-8.554-2.621,3.83-2.621,8.554-2.621,8.553,1.174,8.553,2.621" transform="translate(2.444 1.478)" fill="#ccd8e5"/>
                      <path id="Path_324" data-name="Path 324" d="M33.1,2.284v41.8c0,1.447,3.829,2.62,8.553,2.62s8.554-1.173,8.554-2.62V2.284Z" transform="translate(3.945 0.337)" fill="#0cce6b"/>
                      <path id="Path_325" data-name="Path 325" d="M39.662,4.586A19.306,19.306,0,0,1,35.77,3.94L33.1,6.613a14.536,14.536,0,0,0,3.476,1.063Z" transform="translate(4.889 0.582)" fill="#118a4c"/>
                      <path id="Path_326" data-name="Path 326" d="M40.548,2.284v.56l.56-.56Z" transform="translate(5.989 0.337)" fill="#156cdd"/>
                      <path id="Path_327" data-name="Path 327" d="M34.828,3.86C33.746,3.42,33.1,2.876,33.1,2.283V5.592Z" transform="translate(4.889 0.337)" fill="#118a4c"/>
                      <path id="Path_328" data-name="Path 328" d="M40.617,14.453,49.17,5.9V2.284h-.922l-8.169,8.169a4.411,4.411,0,0,1,.538,2.091Z" transform="translate(5.92 0.337)" fill="#118a4c"/>
                      <path id="Path_329" data-name="Path 329" d="M49.083,31.825l-8.414,8.414a2.769,2.769,0,0,0,2.609,1.929l5.805-5.805Z" transform="translate(6.007 4.701)" fill="#118a4c"/>
                      <path id="Path_330" data-name="Path 330" d="M42.887,2.284,41.06,4.111v.794c-.264,0-.523-.006-.782-.013l-3.2,3.2c.029,0,.054.01.084.014a4.481,4.481,0,0,1,2.859,1.582l7.408-7.408Z" transform="translate(5.476 0.337)" fill="#118a4c"/>
                      <path id="Path_331" data-name="Path 331" d="M49.1,31.305V26.767L40.548,35.32v4.538Z" transform="translate(5.989 3.954)" fill="#118a4c"/>
                      <path id="Path_332" data-name="Path 332" d="M49.1,26.248V21.71l-8.553,8.553V34.8Z" transform="translate(5.989 3.207)" fill="#118a4c"/>
                      <path id="Path_333" data-name="Path 333" d="M49.1,11.076V6.538L40.548,15.09v4.538Z" transform="translate(5.989 0.966)" fill="#118a4c"/>
                      <path id="Path_334" data-name="Path 334" d="M48.564,38.975V36.882l-4.379,4.38c2.61-.449,4.379-1.3,4.379-2.286" transform="translate(6.527 5.448)" fill="#118a4c"/>
                      <path id="Path_335" data-name="Path 335" d="M49.1,21.191V16.653l-8.553,8.553v4.538Z" transform="translate(5.989 2.46)" fill="#118a4c"/>
                      <path id="Path_336" data-name="Path 336" d="M49.1,16.133V11.6l-8.553,8.553v4.538Z" transform="translate(5.989 1.713)" fill="#118a4c"/>
                      <path id="Path_337" data-name="Path 337" d="M50.2,2.621c0,1.447-3.83,2.621-8.553,2.621S33.1,4.069,33.1,2.621,36.925,0,41.649,0,50.2,1.174,50.2,2.621" transform="translate(4.888 0)" fill="#ccd8e5"/>
                    </g>
                  </g>
                </svg>
              </div>

              <div class="main__about__content__imgs-left__icon-box-two">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70" height="63" viewBox="0 0 70 63">
                  <defs>
                    <clipPath id="clip-path">
                      <rect id="Rectangle_239" data-name="Rectangle 239" width="70" height="63" transform="translate(0.394 0.354)" fill="none"/>
                    </clipPath>
                  </defs>
                  <g id="Group_241" data-name="Group 241" transform="translate(-0.394 -0.354)">
                    <rect id="Rectangle_233" data-name="Rectangle 233" width="8" height="20" transform="translate(8.394 41.354)" fill="#118a4c"/>
                    <rect id="Rectangle_234" data-name="Rectangle 234" width="8" height="31" transform="translate(24.394 30.354)" fill="#0cce6b"/>
                    <rect id="Rectangle_235" data-name="Rectangle 235" width="8" height="25" transform="translate(39.394 36.354)" fill="#0cce6b"/>
                    <rect id="Rectangle_236" data-name="Rectangle 236" width="8" height="37" transform="translate(54.394 24.354)" fill="#0cce6b"/>
                    <g id="Group_240" data-name="Group 240" transform="translate(0 0)">
                      <g id="Group_239" data-name="Group 239" transform="translate(0 0)" clip-path="url(#clip-path)">
                        <path id="Path_296" data-name="Path 296" d="M69.127,60.684l-2-1c-.4-.364-1-.516-1,0v1h-63v-58h1c.56,0,.4-.636,0-1l-1-2a.822.822,0,0,0-1,0l-2,2c-.4.364.44,1,1,1h0v60h65c0,.514.6,1.364,1,1l2-2a.769.769,0,0,0,0-1" transform="translate(0.267 0.67)" fill="#dfe8f4"/>
                        <path id="Path_303" data-name="Path 303" d="M0,0,.689.029.748,1.413.059,1.384Z" transform="matrix(0.691, -0.723, 0.723, 0.691, 8.474, 35.752)" fill="#0cce6b"/>
                        <path id="Path_297" data-name="Path 297" d="M8.176,30.3l-1-1,1-1,1,1Zm2-2-2-1,1-1,1,1Zm1-2-1-1,1-1,1,1Zm2-2-1-1h2Zm2-1-1-1,1-1,1,1Zm2-2-1-1,1-1,1,1Zm2-2-1-1,1-1,1,1Zm2-2-1-1,1-1,1,1Zm2-2-1-1,1-1,1,1Z" transform="translate(3.219 5.051)" fill="#0cce6b"/>
                        <path id="Path_298" data-name="Path 298" d="M19.893,13.744l-1-1,1-1,1,1-1,1Z" transform="translate(8.501 4.61)" fill="#0cce6b"/>
                        <path id="Path_299" data-name="Path 299" d="M31.148,21.387l-1-1,1-1,1,1Zm-2-2h-1v-1h2Zm-3-1-1-1,1-1,1,1Zm-2-2h-1l1-2,1,1Zm-2-1-2-1,1-1,1,1Z" transform="translate(9.246 4.967)" fill="#0cce6b"/>
                        <path id="Path_300" data-name="Path 300" d="M30.382,20.505h-1v-1h1l1,1Z" transform="translate(13.012 6.849)" fill="#0cce6b"/>
                        <path id="Path_301" data-name="Path 301" d="M31.779,22.555l-1-1,1-1,1,1Zm2-2-1-1,1-1,1,1Zm1-2-1-1,1-1,1,1Zm2-2-1-1h2Zm2-1-1-1,1-1,1,1Zm2-2-1-1,1-1,1,1Zm2-2-1-1,1-1,1,1Z" transform="translate(13.615 3.799)" fill="#0cce6b"/>
                        <path id="Path_304" data-name="Path 304" d="M0,0,.691.029.75,1.411.059,1.381Z" transform="matrix(0.707, -0.707, 0.707, 0.707, 57.598, 12.612)" fill="#0795ff"/>
                        <path id="Path_302" data-name="Path 302" d="M43.646,13.095h-3v-2h-3v-3h6Z" transform="translate(16.748 3.259)" fill="#109055"/>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>

              </div>
              
              

            </div>

            <div class="main__about__content__text col-md-11 col-lg-7">

              <h3 class="main__about__content__text--heading col-md-12 col-lg-6 p-0">{!! the_field('about_heading'); !!}</h3>
              <p class="main__about__content__text--text col-md-12 col-lg-9 p-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut</p>

              <div class="main__about__content__text__boxes">

                <?php 

                      $serviceSection = new WP_Query(array(
                        'posts_per_page' => 3,
                        'post_type' => 'realization'
                        ));
                        
                        while($serviceSection->have_posts()) {
                          $serviceSection->the_post();?>

                          <div class="main__about__content__text__boxes__single-box col-sm-12 col-md-12">

                            <div class="svg-box">
                                <img class="mt-3" src="<?php $aboutImage = get_field('realization_img'); echo $aboutImage['url'] ?>" class="card-img-top" alt="man in shirt hatching lead over notebook">
                            </div>
                          
                            <div class="text-box">
                              <p class="text-box-text"><strong><?php the_field('realization_head'); ?> </strong> <?php the_field('realization_text'); ?></p>
                            </div>
                            
                          </div>

                      <?php }
                      ?>

                


              </div>
          </div>
        </div>
      </div>
    </section>


    <div class="popup-shadow"></div>

</main>