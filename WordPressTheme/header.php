<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <?php wp_head(); ?>
</head>

<body>
  <header class="header js-header">
    <div class="header__inner">
      <a href="index.html" class="header__name-layout">
        <h1 class="header__name">
          <img class="logo" src="<?php echo get_theme_file_uri(); ?>/assets/images/logo.svg" alt="CodeUps" />
        </h1>
      </a>
      <nav class="header__nav md-none">
        <ul class="header__items">
          <li class="header__item">
            <a class="header__link" href="campaign-page.html"><span>Campaign</span>キャンペーン</a>
          </li>
          <li class="header__item">
            <a class="header__link" href="aboutus-page.html"><span>About us</span>私たちについて</a>
          </li>
          <li class="header__item">
            <a class="header__link" href="information-page.html"><span>Information</span>ダイビング情報</a>
          </li>
          <li class="header__item">
            <a class="header__link" href="blog-page.html"><span>Blog</span>ブログ</a>
          </li>
          <li class="header__item">
            <a class="header__link" href="voice-page.html"><span>Voice</span>お客様の声</a>
          </li>
          <li class="header__item">
            <a class="header__link" href="price-page.html"><span>Price</span>料金一覧</a>
          </li>
          <li class="header__item">
            <a class="header__link" href="faq-page.html"><span>FAQ</span>よくある質問</a>
          </li>
          <li class="header__item">
            <a class="header__link" href="contact-page.html"><span>Contact</span>お問合せ</a>
          </li>
        </ul>
      </nav>
      <div class="header__hamburger-layout  md-show">
        <div class="header__hamburger js-hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="header__drawer-menu drawer-menu js-drawer">
        <div class="drawer-menu__inner">
          <div class="drawer-menu__container">
            <div class="drawer-menu__container-left">
              <ul class="drawer-menu__items-upper">
                <li class="drawer-menu__item">
                  <a href="campaign-page.html" class="drawer-menu__link-main">
                    <p class="drawer__logo-text">キャンペーン</p>
                  </a>
                </li>
                <li class="drawer-menu__item-text"><a href="#">ライセンス取得</a></li>
                <li class="drawer-menu__item-text"><a href="#">貸切体験ダイビング</a></li>
                <li class="drawer-menu__item-text"><a href="#">ナイトダイビング</a></li>
                <li class="drawer-menu__item">
                  <a href="aboutus-page.html" class="drawer-menu__link-sub">
                    <p class="drawer__logo-text">私たちについて</p>
                  </a>
                </li>
              </ul>
              <ul class="drawer-menu__items-bottom">
                <li class="drawer-menu__item">
                  <a href="information-page.html" class="drawer-menu__link-main">
                    <p class="drawer__logo-text">ダイビング情報</p>
                  </a>
                </li>
                <li class="drawer-menu__item-text"><a href="information-page.html?id=tab1">ライセンス講習</a></li>
                <li class="drawer-menu__item-text"><a href="information-page.html?id=tab3">体験ダイビング</a></li>
                <li class="drawer-menu__item-text"><a href="information-page.html?id=tab2">ファンダイビング</a></li>
                <li class="drawer-menu__item">
                  <a href="blog-page.html" class="drawer-menu__link-sub">
                    <p class="drawer__logo-text">ブログ</p>
                  </a>
                </li>
              </ul>
            </div>
            <div class="drawer-menu__container-right">
              <ul class="drawer-menu__items-upper">
                <li class="drawer-menu__item">
                  <a href="voice-page.html" class="drawer-menu__link-main">
                    <p class="drawer__logo-text">お客様の声</p>
                  </a>
                </li>
                <li class="drawer-menu__item">
                  <a href="price-page.html" class="drawer-menu__link-sub">
                    <p class="drawer__logo-text">料金一覧</p>
                  </a>
                </li>
                <li class="drawer-menu__item-text-b"><a href="information-page.html?id=tab1">ライセンス講習</a></li>
                <li class="drawer-menu__item-text-b"><a href="information-page.html?id=tab3">体験ダイビング</a></li>
                <li class="drawer-menu__item-text-b"><a href="information-page.html?id=tab2">ファンダイビング</a></li>
              </ul>
              <ul class="drawer-menu__items-bottom">
                <li class="drawer-menu__item">
                  <a href="faq-page.html" class="drawer-menu__link-main">
                    <p class="drawer__logo-text">よくある質問</p>
                  </a>
                </li>
                <li class="drawer-menu__item">
                  <a href="privacy-page.html" class="drawer-menu__link-sub">
                    <p class="drawer__logo-text">プライバシー<br />ポリシー</p>
                  </a>
                </li>
                <li class="drawer-menu__item">
                  <a href="terms-page.html" class="drawer-menu__link-sub">
                    <p class="drawer__logo-text">利用規約</p>
                  </a>
                </li>
                <li class="drawer-menu__item">
                  <a href="contact-page.html" class="drawer-menu__link-sub">
                    <p class="drawer__logo-text">お問い合わせ</p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="drawer-menu__musk"></div>
      </div>
    </div>
  </header>