<div class="container">
  <div class="feedback-block">
    <h6 class="pre-headline"><?php the_field('mainpage_footer_pre_headline'); ?></h6>
    <h2 class="page-headline ta-c"><?php the_field('mainpage_footer_page_headline'); ?></h2>
    <p><?php the_field('mainpage_footer_page_p'); ?></p><a class="custom-btn" href="javascript:void(0);" id="feedbackModalTrigger"><span>Задать вопрос</span>
      <svg id="button" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.1 25.8" enable-background="new 0 0 36.1 25.8" xml:space="preserve">
        <g>
          <polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="22.2,1.1 34,12.9 22.2,24.7"></polyline>
        </g>
      </svg></a>
  </div>
</div>
</div>
<footer class="top-footer">
<div class="container">
  <div class="row footer-menu">
    <div class="col-lg-2 footer-menu-col footer-menu-col-1"><a href="/"><img src="<?php bloginfo ('template_directory')?>/assets/images/logo.png" alt="logo" style="width: 40px; height: 40px;"></a></div>
    <div class="col-lg-3 col-sm-6 footer-menu-col footer-menu-col-2">
      <p class="footer-menu-title">Меню</p>
      <ul class="footer-menu-list">
        <li><a href="/">Главная страница</a></li>
        <li><a href="company.html">О VerumTrade</a></li>
        <li><a href="faq.html">Часто задаваемые вопросы</a></li>
        <li><a href="contacts.html">Контакты</a></li>
      </ul>
    </div>
    <div class="col-lg-2 col-sm-6 footer-menu-col footer-menu-col-3">
      <p class="footer-menu-title">Инфоцентр</p>
      <ul class="footer-menu-list">
        <li><a href="event.html">События</a></li>
        <li><a href="javascript:void(0);">Новости</a></li>
        <li><a href="javascript:void(0);">Отзывы</a></li>
        <li><a href="gallery.html">Галерея</a></li>
      </ul>
    </div>
    <div class="col-lg-3 col-sm-6 footer-menu-col footer-menu-col-4">
      <p class="footer-menu-title">Контакты</p>
      <ul class="footer-menu-list">
        <li>
          <p>Dublin, Ireland</p>
        </li>
        <li>
          <p>110, Upper Tulse Hill</p>
        </li>
        <li>
          <p>
            Тел. <a href="tel:+12248175906">+1 (224) 817-59-06</a></p>
        </li>
        <li><a href="mailto:support@verumtrade.com">support@verumtrade.com</a></li>
      </ul>
    </div>
    <div class="col-lg-2 col-sm-6 footer-menu-col footer-menu-col-5">
      <p class="footer-menu-title">Соцсети</p>
      <ul class="footer-menu-list">
        <li><a class="facebook-icon" href="https://www.facebook.com/profile.php?id=100018532218598" target="_blank">
            <div class="icon-wrapper"><i class="zmdi zmdi-facebook"></i></div><span>Facebook</span></a></li>
        <li><a class="twitter-icon" href="https://twitter.com/Verumtrade" target="_blank">
            <div class="icon-wrapper"><i class="zmdi zmdi-twitter"></i></div><span>Twitter</span></a></li>
        <li><a class="youtube-icon" href="http://www.youtube.com/channel/UCueR6-HaSgC2Ee1h4r61cKQ" target="blank">
            <div class="icon-wrapper"><i class="zmdi zmdi-youtube"></i></div><span>Youtube</span></a></li>
        <li><a class="instagram-icon" href="http://www.instagram.com/verum_trade/" target="_blank">
            <div class="icon-wrapper"><i class="zmdi zmdi-instagram"></i></div><span>Instagram</span></a></li>
      </ul>
    </div>
  </div>
</div>
</footer>
<footer class="bottom-footer">
<div class="container">
  <div class="row">
    <div class="col-lg-5 col-md-4">
      <p><?php the_field('mainpage_footer_page_p2'); ?></p>
    </div>
    <div class="col-lg-2 col-md-4 text-center" id="scroll-top-wrapper"><a href="javascript:void(0);" id="scrollTop"><?php the_field('mainpage_footer_page_scroll_up'); ?> <i class="zmdi zmdi-chevron-up scroll-top-icon"></i></a></div>
    <div class="col-lg-5 col-md-4 text-right"><a href="javascript:void(0);"><?php the_field('mainpage_footer_page_politica'); ?></a></div>
  </div>
  <div class="row">
    <div class="col text-center footer-lang-switcher"><a href="javascript:void(0);">RUS</a><a href="javascript:void(0);">ENG</a></div>
  </div>
</div>
</footer>
<div class="modal feedback-modal" id="feedbackModal">
<div class="modal-content">
  <div class="modal-header">
    <h3 class="modal-title"><?php the_field('mainpage_footer_modal_title'); ?></h3>
    <p><?php the_field('mainpage_footer_page_p1'); ?></p><span class="close" id="closefeedbackModal">&times;</span>
  </div>
  <div class="modal-body">
    <form class="form">
      <div class="row">
        <div class="col">
          <div class="form-row default-row">
            <input class="textbox" type="text" name="name" placeholder="<?php the_field('mainpage_footer_input'); ?>" required>
          </div>
          <div class="form-row default-row">
            <input class="textbox" type="email" name="email" placeholder="<?php the_field('mainpage_footer_input1'); ?>" required>
          </div>
          <div class="form-row floating-row">
            <textarea class="textbox" name="answer" placeholder="<?php the_field('mainpage_footer_textarea'); ?>"></textarea>
          </div>
          <div class="form-row default-row">
            <button class="custom-btn" type="submit" role="button"><span><?php the_field('mainpage_footer_button'); ?></span>
              <svg id="submit" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.1 25.8" enable-background="new 0 0 36.1 25.8" xml:space="preserve">
                <g>
                  <polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="22.2,1.1 34,12.9 22.2,24.7"></polyline>
                </g>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
<div class="modal investor-modal" id="investorModal">
<div class="modal-content">
  <div class="modal-header">
    <h3 class="modal-title">Хотите стать инвестором Verum Trade?</h3>
    <p>Оставьте заявку в форме ниже<br>и получите доступ на почту</p><span class="close" id="closeinvestorModal">&times;</span>
  </div>
  <div class="modal-body">
    <div class="form-wrapper">
      <form class="form">
        <div class="form-group">
          <input type="text" name="name" placeholder="Введите ваше имя" required>
        </div>
        <div class="form-group">
          <input type="email" name="email" placeholder="Введите ваш email" required>
        </div>
        <div class="form-group">
          <input type="text" name="phone" placeholder="Введите ваш телефон">
        </div>
        <button class="custom-btn" type="submit" role="button"><span>Стать инвестором</span>
          <svg id="submit" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.1 25.8" enable-background="new 0 0 36.1 25.8" xml:space="preserve">
            <g>
              <polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="22.2,1.1 34,12.9 22.2,24.7"></polyline>
            </g>
          </svg>
        </button>
      </form>
    </div>
  </div>
</div>
</div>
<div class="mobile-menu" id="mobile-menu">
<button class="hamburger hamburger--spin closebtn is-active" type="button" onclick="closeMobileMenu()"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
<div class="overlay-content"><a href="/">Главная</a><a href="company.html">О компании</a><a href="faq.html">FAQ</a><a href="contacts.html">Контакты</a><a href="https://backoffice.verumtrade.com/sign_in">Войти</a><a href="https://backoffice.verumtrade.com/sign_up">Регистрация</a></div>
</div>
<link rel="stylesheet" href="<?php bloginfo ('template_directory')?>/assets/css/main.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://tympanus.net/Development/ProximityFeedback/js/TweenMax.min.js"></script>
<script src="https://tympanus.net/Development/ProximityFeedback/js/nearby.js"></script>
<script src="https://tympanus.net/Development/ProximityFeedback/js/charming.min.js"></script>
<script src="<?php bloginfo ('template_directory')?>/assets/js/feedback-modal.js"></script>
<script src="<?php bloginfo ('template_directory')?>/assets/js/investor-modal.js"></script>
<script src="<?php bloginfo ('template_directory')?>/assets/js/infinite-decoration.js"></script>
<script src="<?php bloginfo ('template_directory')?>/assets/js/common.js"></script>
</body>
</html>
