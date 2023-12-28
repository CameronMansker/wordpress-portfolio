      <?php get_header(); ?>

    <div class="container">
      <div class="banner">
        <img id="dummy-code" src="<?php echo get_template_directory_uri(); ?>/img/dummyCode.png" alt="" />
        <img 
          src="<?php echo get_template_directory_uri(); ?>/img/profilePicture.png"
          alt="cameron mansker"
        />
        <div class="banner-text">
            <h1>Cameron Mansker</h1>
            <h2>Front-End Software Engineer</h2>
        </div>
      </div>
    </div>

    <main>
      <div class="container-box" id="container-box">
        <h3>Projects</h3>
        <div class="project-container">
          <div class="slide">
            <div
              class="item"
              style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/film-finder-project.png)"
            >
              <div class="content">
                <div class="name">Film Finder</div>
                <div class="des">
                  Recommend random movies by genre. You are able to choose from
                  several genres, and like or dislike a movie to get another
                  suggestion.
                </div>
                <form
                  action="https://github.com/CameronMansker/film-finder"
                  method="get"
                  target="_blank"
                >
                  <button>See More</button>
                </form>
              </div>
            </div>

            <div
              class="item"
              style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/nobleTouch.png)"
            >
              <div class="content">
                <div class="name">Noble Touch Lawncare</div>
                <div class="des">
                  A website I made starting out using CSS and HTML.
                </div>
                <form
                  action="https://github.com/CameronMansker/Noble-Touch"
                  method="get"
                  target="_blank"
                >
                  <button>See More</button>
                </form>
              </div>
            </div>

            <div class="item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/findMyHat.png)">
              <div class="content">
                <div class="name">Find My Hat</div>
                <div class="des">
                  Javascript terminal maze game to find your hat.
                </div>
                <form
                  action="https://github.com/CameronMansker/Noble-Touch"
                  method="get"
                  target="_blank"
                >
                  <button>See More</button>
                </form>
              </div>
            </div>

            <div class="item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/quotes.png)">
              <div class="content">
                <div class="name">Random Quotes</div>
                <div class="des">Javascript random quote generator.</div>
                <form
                  action="https://github.com/CameronMansker/randomMessages"
                  method="get"
                  target="_blank"
                >
                  <button>See More</button>
                </form>
              </div>
            </div>

            <div
              class="item"
              style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/film-finder-project.png)"
            >
              <div class="content">
                <div class="name">Film Finder</div>
                <div class="des">
                  Recommend random movies by genre. You are able to choose from
                  several genres, and like or dislike a movie to get another
                  suggestion.
                </div>
                <form
                  action="https://github.com/CameronMansker/film-finder"
                  method="get"
                  target="_blank"
                >
                  <button>See More</button>
                </form>
              </div>
            </div>
          

          <div class="item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/nobleTouch.png)">
            <div class="content">
              <div class="name"><span>Noble Touch Lawncare</span></div>
              <div class="des">
                A website I made starting out using CSS and HTML.
              </div>
              <form
                action="https://github.com/CameronMansker/Noble-Touch"
                method="get"
                target="_blank"
              >
                <button>See More</button>
              </form>
            </div>
          </div>

          <div class="item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/findMyHat.png)">
              <div class="content">
                <div class="name">Find My Hat</div>
                <div class="des">
                  Javascript terminal maze game to find your hat.
                </div>
                <form
                  action="https://github.com/CameronMansker/Noble-Touch"
                  method="get"
                  target="_blank"
                >
                  <button>See More</button>
                </form>
              </div>
            </div>

          <div class="item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/quotes.png)">
            <div class="content">
              <div class="name">Random Quotes</div>
              <div class="des">Javascript random quote generator.</div>
              <form
                action="https://github.com/CameronMansker/randomMessages"
                method="get"
                target="_blank"
              >
                <button>See More</button>
              </form>
            </div>
          </div>
          </div>

          <div class="button">
            <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
            <button class="next">
              <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>

      <div class="about-me-container">
        <div id="particle-container">
          <div class="particle"></div>
          <div class="particle"></div>
          <div class="particle"></div>
          <div class="particle"></div>
          <div class="particle"></div>
          <div class="particle"></div>
          <div class="particle"></div>
          <div class="particle"></div>
          <div class="particle"></div>
          <div class="particle"></div>
          <div class="particle"></div>
          <div class="particle"></div>
          <div class="particle"></div>
          <div class="particle"></div>
          <div class="particle"></div>
          <div class="border"></div>
          <div class="border"></div>
        </div>
        <svg>
          <defs>
            <filter id="goo">
              <feGaussianBlur in="SourceGraphic" stdDeviation="10" />
              <feColorMatrix
                in="name"
                mode="matrix"
                values="1 0 0 0 0
                        0 1 0 0 0
                        0 0 1 0 0
                        0 0 0 30 -15"
              />
              <feBlend in="SourceGraphic" />
            </filter>
          </defs>
        </svg>
        <div class="title">
          <h3>About Me</h3>
        </div>
        <div class="card-container">
          <div class="card">
            <div class="contact">
              <p>Contact</p>
              <i class="fa-solid fa-angles-up" style="color: #ffffff"></i>
            </div>
            <div class="imbBx">
              <img src="<?php echo get_template_directory_uri(); ?>/img/about-me-photo.png" alt="" />
            </div>
            <div class="content">
              <div class="contentBx">
                <h4>Cameron Mansker</h4>
              </div>
              <ul class="sci">
                <li style="--i: 1">
                  <a href="https://github.com/CameronMansker" target="_blank"
                    ><i class="fa-brands fa-square-github"></i
                  ></a>
                </li>
                <li style="--i: 2">
                  <a
                    href="https://www.linkedin.com/in/cameron-mansker/"
                    target="_blank"
                    ><i class="fa-brands fa-linkedin"></i
                  ></a>
                </li>
                <li style="--i: 3">
                  <a href="tel:4174148414"
                    ><i class="fa-solid fa-square-phone"></i
                  ></a>
                </li>
                <li style="--i: 4">
                  <a href="mailto:cameronmansker01@gmail.com"
                    ><i class="fa-solid fa-square-envelope"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <p>
          Hi, my name is Cameron and I am a Front-End Engineer. I first started
          coding simple HTML in Junior High and from there I progressed and have
          leared CSS, Javascript, React.js, and PHP. I am always striving to
          better my skills and tackle new projects. In my free time I enjoy
          making new memories with my fiance, going to church, and hanging out
          with friends.
        </p>
        <div id="horizontal-line"></div>
        <div id="vertical-line"></div>
        <div id="vertical-line2"></div>
        <div class="expertise">
          <h3>Expertise</h3>
          <ul>
            <li>
              <i class="fa-brands fa-js"></i>
            </li>
            <li>
              <i class="fa-brands fa-html5"></i>
            </li>
            <li>
              <i class="fa-brands fa-css3-alt"></i>
            </li>
            <li>
              <i class="fa-brands fa-react"></i>
            </li>
            <li>
              <i class="fa-brands fa-php"></i>
            </li>
          </ul>
        </div>
      </div>
    </main>

    <?php get_footer(); ?>