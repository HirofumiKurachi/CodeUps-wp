<?php get_header(); ?>
<!--サブビュー-->
<section class="sub-page-mv">
  <div class="sub-page-mv__inner">
    <div class="sub-page-mv__title">
      <h1 class="sub-page-mv__title-main page-section-title">Blog</h1>
    </div>
    <picture class="sub-page-mv__picture">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/blog-page-pc-img.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog-page-sp-img.jpg" alt="大量の魚が泳いでいる様子" />
    </picture>
  </div>
</section>
<!--パンくず-->
<div class="breadcrumb breadcrumb-top">
  <div class="breadcrumb__inner inner">
    <span>
      <a href="./"><span>TOP</span></a>
    </span>
    <span>
      <a href="./"><span>ブログ一覧</span></a>
    </span>
    <span>ブログ詳細</span>
  </div>
</div>
<!--ブログ-->
<section class="blog-page blog-page-top">
  <div class="blog-page__inner inner">
    <div class="blog-page__container blog-page-container">
      <div class="blog-page-container__left">
        <div class="blog-page-container__cards blog-cards-detail">
          <?php if (have_posts()):
      while (have_posts()):
       the_post(); ?>

          <div class="blog-cards-detail__title">
            <time class="blog-cards-detail__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m/d'); ?></time>
            <h2 class="blog-cards-detail__text"><?php the_title(); ?></h2>
          </div>
          <figure class="blog-cards-detail__item-box">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog-img2.jpg" alt="海底にカラフルなイソギンチャクが生えている様子" />
          </figure>
          <div class="blog-cards-detail__item-container">
            <p>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            </p>
            <figure>
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog-img2.jpg"
                alt="海底にカラフルなイソギンチャクが生えている様子" />
            </figure>
            <p>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            </p>
            <ul>
              <li>リスト１</li>
              <li>リスト２</li>
              <li>リスト３</li>
            </ul>
            <p>
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            </p>
          </div>
          <?php endwhile; endif; ?>
        </div>
        <div class="blog-page-detail__pagination blog-page-detail-pagination-top pagination-detail">
          <div class="pagination-detail__inner inner">
            <div class="pagination-detail__nav">
              <a class="pagination-detail__prev" href="#"></a>
              <a class="pagination-detail__next" href="#"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="blog-page-detail__container-right">
        <div class="blog-page-detail__heading blog-page-detail-heading-top blog-detail-heading">
          <div class="blog-detail-heading__inner blog-heading">
            <div class="blog-heading__container">
              <div class="blog-heading__title-box">
                <div class="blog-heading__icon">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog-page-logo.svg" alt="クジラのアイコン" />
                </div>
                <h2 class="blog-heading__title">人気記事</h2>
              </div>
              <div class="blog-heading__cards blog-heading-cards">
                <a href="#" class="blog-heading-cards__item-box blog-heading-card">
                  <div class="blog-heading-card__item">
                    <div class="blog-heading-card__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog-img5.jpg"
                        alt="1匹の黄色い魚が泳いでいる様子" />
                    </div>
                    <div class="blog-heading-card__body">
                      <time class="blog-heading-card__date" datetime="2022-11-23">2023.11/17</time>
                      <h3 class="blog-heading-card__text">ライセンス取得</h3>
                    </div>
                  </div>
                </a>
                <a href="#" class="blog-heading-cards__item-box blog-heading-card">
                  <div class="blog-heading-card__item">
                    <div class="blog-heading-card__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog-img3.jpg"
                        alt="ウミガメが海中を優雅に泳いでいる様子" />
                    </div>
                    <div class="blog-heading-card__body">
                      <time class="blog-heading-card__date" datetime="2022-11-23">2023.11/17</time>
                      <h3 class="blog-heading-card__text">ウミガメと泳ぐ</h3>
                    </div>
                  </div>
                </a>
                <a href="#" class="blog-heading-cards__item-box blog-heading-card">
                  <div class="blog-heading-card__item">
                    <div class="blog-heading-card__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog-img4.jpg"
                        alt="イソギンチャクの間にカクレクマノミが隠れている様子" />
                    </div>
                    <div class="blog-heading-card__body">
                      <time class="blog-heading-card__date" datetime="2022-11-23">2023.11/17</time>
                      <h3 class="blog-heading-card__text">カクレクマノミ</h3>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="blog-heading__container">
              <div class="blog-heading__title-box">
                <div class="blog-heading__icon">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog-page-logo.svg" alt="クジラのアイコン" />
                </div>
                <h2 class="blog-heading__title">口コミ</h2>
              </div>
              <div class="blog-heading__cards-review blog-heading-cards-review">
                <div class="blog-heading-cards-review__item-box blog-heading-card-review">
                  <div class="blog-heading-card-review__item">
                    <div class="blog-heading-card-review__container">
                      <div class="blog-heading-card-review__img">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/review.jpg"
                          alt="腕を組んだ30代カップルがソファーに座っている様子" />
                      </div>
                      <div class="blog-heading-card-review__title-box">
                        <div class="blog-heading-card-review__title-box1">
                          <p class="blog-heading-card-review__title-sub">30代(カップル)</p>
                        </div>
                        <div class="blog-heading-card-review__title-box2">
                          <p class="blog-heading-card-review__title-text">ここにタイトルが入ります。ここにタイトル</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="blog-heading__button-layout">
                <a href="voice-page.html" class="button">View&nbsp;more<span class="button-arrow2"></span><span
                    class="button-arrow"></span> </a>
              </div>
            </div>
            <div class="blog-heading__container-campaign">
              <div class="blog-heading__title-box">
                <div class="blog-heading__icon">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog-page-logo.svg" alt="クジラのアイコン" />
                </div>
                <h2 class="blog-heading__title">キャンペーン</h2>
              </div>
              <div class="blog-heading__cards-campaign blog-heading-cards-campaign">
                <a href="#" class="blog-heading__card-campaign blog-heading-card-campaign">
                  <div class="blog-heading-card-campaign__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign-img1.jpg"
                      alt="多種多様のカラフルな魚たちが泳いでいる様子" />
                  </div>
                  <div class="blog-heading-card-campaign__body">
                    <div class="blog-heading-card-campaign__text">
                      <p class="blog-heading-card-campaign__title-sub">ライセンス取得</p>
                    </div>
                    <div class="blog-heading-card-campaign__price">
                      <p class="blog-heading-card-campaign__price-text">全部コミコミ(お一人様)</p>
                      <div class="blog-heading-card-campaign__price-box">
                        <p class="blog-heading-card-campaign__price-old">¥56,000</p>
                        <p class="blog-heading-card-campaign__price-new">¥46,000</p>
                      </div>
                    </div>
                  </div>
                </a>
                <a href="#" class="blog-heading__card-campaign blog-heading-card-campaign">
                  <div class="blog-heading-card-campaign__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign-img2.jpg"
                      alt="綺麗な海に船が3隻停泊している様子" />
                  </div>
                  <div class="blog-heading-card-campaign__body">
                    <div class="blog-heading-card-campaign__text">
                      <p class="blog-heading-card-campaign__title-sub">貸切体験ダイビング</p>
                    </div>
                    <div class="blog-heading-card-campaign__price">
                      <p class="blog-heading-card-campaign__price-text">全部コミコミ(お一人様)</p>
                      <div class="blog-heading-card-campaign__price-box">
                        <p class="blog-heading-card-campaign__price-old">¥24,000</p>
                        <p class="blog-heading-card-campaign__price-new">¥18,000</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="blog-heading__button-layout">
                <a href="campaign-page.html" class="button">View&nbsp;more<span class="button-arrow2"></span><span
                    class="button-arrow"></span> </a>
              </div>
            </div>
            <div class="blog-heading__container-archive">
              <div class="blog-heading__title-box">
                <div class="blog-heading__icon">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog-page-logo.svg" alt="クジラのアイコン" />
                </div>
                <h2 class="blog-heading__title">アーカイブ</h2>
              </div>
            </div>
            <div class="blog-heading__accordion blog-heading-accordion js-blog-heading-accordion">
              <div class="blog-heading-accordion__container">
                <div class="blog-heading-accordion__item js-blog-heading-accordion__item">
                  <h3 class="blog-heading-accordion__title js-blog-heading-accordion__title">2023</h3>
                  <div class="blog-heading-accordion__content js-blog-heading-accordion__content">
                    <p class="blog-heading-accordion__text">3月</p>
                    <p class="blog-heading-accordion__text">2月</p>
                    <p class="blog-heading-accordion__text">1月</p>
                  </div>
                </div>
                <div class="blog-heading-accordion__item js-blog-heading-accordion__item">
                  <h3 class="blog-heading-accordion__title js-blog-heading-accordion__title">2022</h3>
                  <div class="blog-heading-accordion__content js-blog-heading-accordion__content">
                    <p class="blog-heading-accordion__text">3月</p>
                    <p class="blog-heading-accordion__text">2月</p>
                    <p class="blog-heading-accordion__text">1月</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--コンタクト-->
<section class="contact contact-detail-top">
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