<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mogo
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main>
	<main>
      <section class="hero">
        <div
          id="hero__carousel-indicators"
          class="carousel slide hero__carousel"
          data-ride="carousel"
          data-touch="true"
        >
          <ul class="carousel-indicators">
            <li
              data-target="#hero__carousel-indicators"
              data-slide-to="0"
              class="hero__carousel-indicators active col-3"
            >
              <div class="hero__carousel-indicators-line"></div>
              <p class="hero__carousel-indicators-text"><b>01</b> <span>Intro</span></p>
            </li>
            <li
              data-target="#hero__carousel-indicators"
              data-slide-to="1"
              class="hero__carousel-indicators col-3"
            >
              <div class="hero__carousel-indicators-line"></div>
              <p class="hero__carousel-indicators-text"><b>02</b> <span>Intro</span></p>
            </li>
            <li
              data-target="#hero__carousel-indicators"
              data-slide-to="2"
              class="hero__carousel-indicators col-3"
            >
              <div class="hero__carousel-indicators-line"></div>
              <p class="hero__carousel-indicators-text"><b>03</b> <span>Intro</span></p>
            </li>
            <li
              data-target="#hero__carousel-indicators"
              data-slide-to="3"
              class="hero__carousel-indicators col-3"
            >
              <div class="hero__carousel-indicators-line"></div>
              <p class="hero__carousel-indicators-text"><b>04</b> <span>Intro</span></p>
            </li>
          </ul>
          <div class="carousel-inner hero__carousel-inner">
            <div
              class="carousel-item hero__carousel-item active"
              data-interval="3000"
            >
              <div class="hero__carousel-wrapper">
                <div
                  class="hero__carousel-info d-flex flex-column align-items-center"
                >
                  <h3 class="hero__carousel-sub-title">Creative Template</h3>
                  <h2 class="hero__carousel-title">Welcome to MoGo</h2>
                  <div
                    class="hero__carousel-separate separate separate_white"
                  ></div>
                  <a class="hero__carousel-button" href="#">Learn more</a>
                </div>
                <div class="hero__carousel-gradient">
                  <img src="images/slider-img.png" alt="" />
                </div>
              </div>
            </div>
            <div class="carousel-item hero__carousel-item" data-interval="3000">
              <div class="hero__carousel-wrapper">
                <div
                  class="hero__carousel-info d-flex flex-column align-items-center"
                >
                  <h3 class="hero__carousel-sub-title">Creative Template</h3>
                  <h2 class="hero__carousel-title">Welcome to MoGo</h2>
                  <div
                    class="hero__carousel-separate separate separate_white"
                  ></div>
                  <a class="hero__carousel-button" href="#">Learn more</a>
                </div>
                <div class="hero__carousel-gradient">
                  <img src="images/slider-img.png" alt="" />
                </div>
              </div>
            </div>
            <div class="carousel-item hero__carousel-item" data-interval="3000">
              <div class="hero__carousel-wrapper">
                <div
                  class="hero__carousel-info d-flex flex-column align-items-center"
                >
                  <h3 class="hero__carousel-sub-title">Creative Template</h3>
                  <h2 class="hero__carousel-title">Welcome to MoGo</h2>
                  <div
                    class="hero__carousel-separate separate separate_white"
                  ></div>
                  <a class="hero__carousel-button" href="#">Learn more</a>
                </div>
                <div class="hero__carousel-gradient">
                  <img src="images/slider-img.png" alt="" />
                </div>
              </div>
            </div>
            <div class="carousel-item hero__carousel-item" data-interval="3000">
              <div class="hero__carousel-wrapper">
                <div
                  class="hero__carousel-info d-flex flex-column align-items-center"
                >
                  <h3 class="hero__carousel-sub-title">Creative Template</h3>
                  <h2 class="hero__carousel-title">Welcome to MoGo</h2>
                  <div
                    class="hero__carousel-separate separate separate_white"
                  ></div>
                  <a class="hero__carousel-button" href="#">Learn more</a>
                </div>
                <div class="hero__carousel-gradient">
                  <img src="images/slider-img.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section">
        <div class="container">
          <div class="section__header">
            <h3 class="section__suptitle">Service</h3>
            <h2 class="section__title">what we do</h2>
            <div class="section__text">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>
          <div class="wedo">
            <div class="wedo__item col-12 col-md-6">
              <img class="wedo__img" src="images/wedo.jpg" alt="" />
            </div>
            <div class="wedo__item col-12 col-md-6">
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <button
                      class="btn btn-link"
                      type="button"
                      data-toggle="collapse"
                      data-target="#collapseOne"
                      aria-expanded="true"
                      aria-controls="collapseOne"
                    >
                      <img
                        class="accordion__icon"
                        src="images/services/photography.png"
                        alt=""
                      />
                      <div class="accordion__title">Photography</div>
                    </button>
                  </div>
                  <div
                    id="collapseOne"
                    class="collapse show"
                    aria-labelledby="headingOne"
                    data-parent="#accordionExample"
                  >
                    <div class="card-body accordion__content">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit
                        anim id est laborum.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <button
                      class="btn btn-link collapsed"
                      type="button"
                      data-toggle="collapse"
                      data-target="#collapseTwo"
                      aria-expanded="true"
                      aria-controls="collapseOne"
                    >
                      <img
                        class="accordion__icon"
                        src="images/services/photography.png"
                        alt=""
                      />
                      <div class="accordion__title">Creativity</div>
                    </button>
                  </div>
                  <div
                    id="collapseTwo"
                    class="collapse"
                    aria-labelledby="headingTwo"
                    data-parent="#accordionExample"
                  >
                    <div class="card-body accordion__content">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit
                        anim id est laborum.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <button
                      class="btn btn-link collapsed"
                      type="button"
                      data-toggle="collapse"
                      data-target="#collapseThree"
                      aria-expanded="true"
                      aria-controls="collapseOne"
                    >
                      <img
                        class="accordion__icon"
                        src="images/services/photography.png"
                        alt=""
                      />
                      <div class="accordion__title">Web Design</div>
                    </button>
                  </div>
                  <div
                    id="collapseThree"
                    class="collapse"
                    aria-labelledby="headingThree"
                    data-parent="#accordionExample"
                  >
                    <div class="card-body accordion__content">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit
                        anim id est laborum.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </section>
      <section class="team section">
        <div class="container">
          <div class="section__header">
            <h3 class="section__suptitle">Who we are</h3>
            <h2 class="section__title">Meet our team</h2>
            <div class="section__text">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>

          <div class="team__wrapper">
            <div class="team__item col-12 col-md-4">
              <div class="team__inner">
                <div class="team__img">
                  <img src="images/team/1.jpg" alt="" />
                </div>
                <div class="team__text">
                  <div class="social">
                    <a class="social__item" href="#" target="_blank">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="social__item" href="#" target="_blank">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a class="social__item" href="#" target="_blank">
                      <i class="fab fa-pinterest-p"></i>
                    </a>
                    <a class="social__item" href="#" target="_blank">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="team__info">
                <div class="team__name">Matthew Dix</div>
                <div class="team__prof">Graphic Design</div>
              </div>
            </div>
         

            <div class="team__item col-12 col-md-4">
              <div class="team__inner">
                <div class="team__img">
                  <img src="images/team/2.jpg" alt="" />
                </div>
                <div class="team__text">
                  <div class="social">
                    <a class="social__item" href="#" target="_blank">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="social__item" href="#" target="_blank">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a class="social__item" href="#" target="_blank">
                      <i class="fab fa-pinterest-p"></i>
                    </a>
                    <a class="social__item" href="#" target="_blank">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="team__info">
                <div class="team__name">Christopher Campbell</div>
                <div class="team__prof">Branding/UX design</div>
              </div>
            </div>
            <div class="team__item col-12 col-md-4">
              <div class="team__inner">
                <div class="team__img">
                  <img src="images/team/3.jpg" alt="" />
                </div>
                <div class="team__text">
                  <div class="social">
                    <a class="social__item" href="#" target="_blank">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="social__item" href="#" target="_blank">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a class="social__item" href="#" target="_blank">
                      <i class="fab fa-pinterest-p"></i>
                    </a>
                    <a class="social__item" href="#" target="_blank">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="team__info">
                <div class="team__name">Michael Fertig</div>
                <div class="team_prof">Developer</div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section">
        <div class="container">
          <div class="section__header">
            <h3 class="section__suptitle">Our stories</h3>
            <h2 class="section__title">Latest blog</h2>
          </div>
          <div class="blog">
            <div class="blog__item col-12 col-md-4">
              <div class="blog__header">
                <a href="#">
                  <img class="blog__photo" src="images/blog/1.jpg" alt="" />
                </a>
                <div class="blog__date">
                  <div class="blog__date-day">15</div>
                  Jan
                </div>
              </div>
              <div class="blog__content">
                <div class="blog__title">
                  <a href="#">Lorem ipsum dolor sit amet</a>
                </div>
                <div class="blog__text">
                  Consectetur adipiscing elit, sed do eiusmod tempor incididunt
                  ut labore et dolore magna aliqua.
                </div>
              </div>
              <div class="blog__footer">
                <div class="blog-stat">
                  <span class="blog-stat__item">
                    <i class="far fa-eye"></i> 542
                  </span>
                  <span class="blog-stat__item">
                    <i class="far fa-comment-dots"></i> 17
                  </span>
                </div>
              </div>
            </div>

            <div class="blog__item col-12 col-md-4">
              <div class="blog__header">
                <a href="#">
                  <img class="blog__photo" src="images/blog/2.jpg" alt="" />
                </a>
                <div class="blog__date">
                  <div class="blog__date-day">15</div>
                  Jan
                </div>
              </div>
              <div class="blog__content">
                <div class="blog__title">
                  <a href="#">Lorem ipsum dolor sit amet</a>
                </div>
                <div class="blog__text">
                  Consectetur adipiscing elit, sed do eiusmod tempor incididunt
                  ut labore et dolore magna aliqua.
                </div>
              </div>
              <div class="blog__footer">
                <div class="blog-stat">
                  <span class="blog-stat__item">
                    <i class="far fa-eye"></i> 542
                  </span>
                  <span class="blog-stat__item">
                    <i class="far fa-comment-dots"></i> 17
                  </span>
                </div>
              </div>
            </div>

            <div class="blog__item col-12 col-md-4">
              <div class="blog__header">
                <a href="#">
                  <img class="blog__photo" src="images/blog/3.jpg" alt="" />
                </a>
                <div class="blog__date">
                  <div class="blog__date-day">15</div>
                  Jan
                </div>
              </div>
              <div class="blog__content">
                <div class="blog__title">
                  <a href="#">Lorem ipsum dolor sit amet</a>
                </div>
                <div class="blog__text">
                  Consectetur adipiscing elit, sed do eiusmod tempor incididunt
                  ut labore et dolore magna aliqua.
                </div>
              </div>
              <div class="blog__footer">
                <div class="blog-stat">
                  <span class="blog-stat__item">
                    <i class="far fa-eye"></i> 542
                  </span>
                  <span class="blog-stat__item">
                    <i class="far fa-comment-dots"></i> 17
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_sidebar();
get_footer();
