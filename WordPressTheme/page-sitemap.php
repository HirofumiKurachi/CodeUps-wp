<?php get_header(); ?>
<!--サブビュー-->
<section class="sub-page-mv">
  <div class="sub-page-mv__inner">
    <div class="sub-page-mv__title">
      <h1 class="sub-page-mv__title-main page-section-title">Site MAP</h1>
    </div>
    <picture class="sub-page-mv__picture">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/site-map-page-pc-img.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/site-map-page-sp-img.jpg" alt="珊瑚礁に様々な魚が集まっている様子" />
    </picture>
  </div>
</section>
<!--パンくず-->
<div class="breadcrumb breadcrumb-top">
  <div class="breadcrumb__inner inner">
    <span>
      <a href="./"><span>TOP</span></a>
    </span>
    <span>サイトマップ</span>
  </div>
</div>
<!--サイトマップ-->
<section class="site-map-page site-map-page-top">
  <div class="site-map-page__inner inner">
    <div class="site-map__container site-map-menu">
      <div class="site-map-menu__left">
        <ul class="site-map-menu__left-items-upper">
          <li class="site-map-menu__item">
            <a href="#" class="site-map-menu__link-main">
              <p class="site-map-menu__logo-text">キャンペーン</p>
            </a>
          </li>
          <li class="site-map-menu__item-text"><a href="#">ライセンス取得</a></li>
          <li class="site-map-menu__item-text"><a href="#">貸切体験ダイビング</a></li>
          <li class="site-map-menu__item-text"><a href="#">ナイトダイビング</a></li>
          <li class="site-map-menu__item">
            <a href="#" class="site-map-menu__link-sub">
              <p class="site-map-menu__logo-text">私たちについて</p>
            </a>
          </li>
        </ul>
        <ul class="site-map-menu__left-items-bottom">
          <li class="site-map-menu__item">
            <a href="#" class="site-map-menu__link-main">
              <p class="site-map-menu__logo-text">ダイビング情報</p>
            </a>
          </li>
          <li class="site-map-menu__item-text"><a href="information-page.html?id=tab1">ライセンス講習</a></li>
          <li class="site-map-menu__item-text"><a href="information-page.html?id=tab3">体験ダイビング</a></li>
          <li class="site-map-menu__item-text"><a href="information-page.html?id=tab2">ファンダイビング</a></li>
          <li class="site-map-menu__item">
            <a href="blog-page.html" class="site-map-menu__link-sub">
              <p class="site-map-menu__logo-text">ブログ</p>
            </a>
          </li>
        </ul>
      </div>
      <div class="site-map-menu__right">
        <ul class="site-map-menu__right-items-upper">
          <li class="site-map-menu__item">
            <a href="voice-page.html" class="site-map-menu__link-main">
              <p class="site-map-menu__logo-text">お客様の声</p>
            </a>
          </li>
          <li class="site-map-menu__item">
            <a href="price-page.html" class="site-map-menu__link-sub">
              <p class="site-map-menu__logo-text">料金一覧</p>
            </a>
          </li>
          <li class="site-map-menu__item-text-b"><a href="information-page.html?id=tab1">ライセンス講習</a></li>
          <li class="site-map-menu__item-text-b"><a href="information-page.html?id=tab3">体験ダイビング</a></li>
          <li class="site-map-menu__item-text-b"><a href="information-page.html?id=tab2">ファンダイビング</a></li>
        </ul>
        <ul class="site-map-menu__right-items-bottom">
          <li class="site-map-menu__item">
            <a href="faq-page.html" class="site-map-menu__link-main">
              <p class="site-map-menu__logo-text">よくある質問</p>
            </a>
          </li>
          <li class="site-map-menu__item">
            <a href="privacy-page.html" class="site-map-menu__link-sub">
              <p class="site-map-menu__logo-text">プライバシー<br class="md-show" />ポリシー</p>
            </a>
          </li>
          <li class="site-map-menu__item">
            <a href="terms-page.html" class="site-map-menu__link-sub">
              <p class="site-map-menu__logo-text">利用規約</p>
            </a>
          </li>
          <li class="site-map-menu__item">
            <a href="contact-page.html" class="site-map-menu__link-sub">
              <p class="site-map-menu__logo-text">お問い合わせ</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!--コンタクト-->
<section class="contact contact-site-map-page-top">
  <div class="contact__inner inner">
    <div class="contact__container">
      <div class="contact__box contact-box">
        <a href="index.html" class="contact-box__logo-layout">
          <h3 class="contact-box__logo">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/contact-logo.svg" alt="CodeUps" />
          </h3>
        </a>
        <div class="contact-box__information">
          <ul class="contact-box__items">
            <li class="contact-box__items-item contact-item">
              <address class="contact-item__private">
                <p class="contact-item__text">沖縄県那覇市1-1</p>
              </address>
            </li>
            <li class="contact-box__items-item contact-item">
              <a href="TEL:0120-000-0000">
                <p class="contact-item__text">TEL:0120-000-0000</p>
              </a>
            </li>
            <li class="contact-box__items-item contact-item">
              <p class="contact-item__text">営業時間:8:30-19:00</p>
            </li>
            <li class="contact-box__items-item contact-item">
              <p class="contact-item__text">定休日:毎週火曜日</p>
            </li>
          </ul>
          <div class="contact-box__map">
            <iframe class="contact-box__img"
              src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2467.513625872067!2d127.69482336933658!3d26.222972059058005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z6YKj6KaH5biCMS0x!5e0!3m2!1sja!2sjp!4v1708751870509!5m2!1sja!2sjp"
              width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
      <div class="contact__title-layout">
        <div class="contact__title section-title">
          <p class="section-title__sub--large">Contact</p>
          <h2 class="section-title__main">お問い合わせ</h2>
          <p class="contact__title-text">ご予約・お問い合わせはコチラ</p>
          <div class="contact__button-layout">
            <a href="contact-page.html" class="button">Contact&nbsp;us<span class="button-arrow2"></span><span
                class="button-arrow"></span> </a>
          </div>
        </div>
        <div class="contact__top-button js-top-button">
          <a href="">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/contact-top-button.svg" alt="トップボタン" />
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>