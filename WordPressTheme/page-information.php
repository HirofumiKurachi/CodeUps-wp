<?php get_header(); ?>
<!--サブビュー-->
<section class="sub-page-mv">
  <div class="sub-page-mv__inner">
    <div class="sub-page-mv__title">
      <h1 class="sub-page-mv__title-main page-section-title">Information</h1>
    </div>
    <picture class="sub-page-mv__picture">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/info-page-pc-img.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/info-page-sp-img.jpg" alt="黄色い魚の群れの中をダイバーが泳いでいる様子" />
    </picture>
  </div>
</section>
<!--パンくず-->
<div class="breadcrumb breadcrumb-top">
  <div class="breadcrumb__innner inner">
    <span>
      <a href="./"><span>TOP</span></a>
    </span>
    <span>ダイビング情報</span>
  </div>
</div>
<!--タブ-->
<div class="information-page information-page-top">
  <div class="information-page__inner inner">
    <div class="information-page__tab information-tab">
      <ul class="information-tab__list">
        <li id="tab1" class="information-tab__button js-tab-button is-active">
          <div class="information-tab__button-img md-none">
            <img class="color-change" src="<?php echo get_theme_file_uri(); ?>/assets/images/tab-logo1.svg"
              alt="クジラのアイコン" />
          </div>
          <h2 class="information-tab__title">ライセンス<br class="md-show" />講習</h2>
        </li>
        <li id="tab2" class="information-tab__button js-tab-button">
          <div class="information-tab__button-img md-none">
            <img class="color-change" src="<?php echo get_theme_file_uri(); ?>/assets/images/tab-logo2.svg"
              alt="サメのアイコン" />
          </div>
          <h2 class="information-tab__title">ファン<br class="md-show" />ダイビング</h2>
        </li>
        <li id="tab3" class="information-tab__button js-tab-button">
          <div class="information-tab__button-img md-none">
            <img class="color-change" src="<?php echo get_theme_file_uri(); ?>/assets/images/tab-logo3.svg"
              alt="魚のアイコン" />
          </div>
          <h2 class="information-tab__title">体験<br class="md-show" />ダイビング</h2>
        </li>
      </ul>
      <div class="information-tab__contents">
        <div class="information-tab__content js-tab-content is-active">
          <ul class="information-tab__cards information-cards">
            <li id="tab1" class="information-cards__card information-card">
              <div class="information-card__body">
                <h3 class="information-card__title">ライセンス講習</h3>
                <p class="information-card__text">
                  泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！ス<br
                    class="md-none" />キューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
                </p>
              </div>
              <div class="information-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/info-page-tab-img1.jpg"
                  alt="4人のダイバーが潜る前にプロの指導を受けている様子" />
              </div>
            </li>
          </ul>
        </div>
        <div class="information-tab__content js-tab-content">
          <ul class="information-tab__cards information-cards">
            <li id="tab2" class="information-cards__card information-card">
              <div class="information-card__body">
                <h3 class="information-card__title">ファンダイビング</h3>
                <p class="information-card__text">
                  ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
              </div>
              <div class="information-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/info-page-tab-img2.jpg"
                  alt="たくさんの魚が海中を泳いでいる様子" />
              </div>
            </li>
          </ul>
        </div>
        <div class="information-tab__content js-tab-content">
          <ul class="information-tab__cards information-cards">
            <li id="tab3" class="information-cards__card information-card">
              <div class="information-card__body">
                <h3 class="information-card__title">体験ダイビング</h3>
                <p class="information-card__text">
                  ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
              </div>
              <div class="information-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/info-page-tab-img3.jpg"
                  alt="2匹の黄色い魚が海中を泳いでいる様子" />
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--コンタクト-->
<section class="contact contact-about-top">
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
        <?php get_footer(); ?>