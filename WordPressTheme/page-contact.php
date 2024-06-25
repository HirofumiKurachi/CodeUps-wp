<?php get_header(); ?>
<!--サブビュー-->
<section class="sub-page-mv">
  <div class="sub-page-mv__inner">
    <div class="sub-page-mv__title">
      <h1 class="sub-page-mv__title-main page-section-title">Contact</h1>
    </div>
    <picture class="sub-page-mv__picture">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/contact-page-pc-img.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/contact-page-sp-img.jpg"
        alt="白い砂浜とエメラルドグリーンの海が広がっている様子" />
    </picture>
  </div>
</section>

<!--パンくず-->
<div class="breadcrumb breadcrumb-top">
  <div class="breadcrumb__inner inner">
    <span>
      <a href="./"><span>TOP</span></a>
    </span>
    <span>お問い合わせ</span>
  </div>
</div>
<!--お問い合わせ-->
<section class="contact-page contact-page-top">
  <div class="contact-page__inner inner">
    <form action="" class="contact-page__form contact-form contact-form">
      <div class="contact-form__labels">
        <dl class="contact-form__label">
          <dt>お名前<span>必須</span></dt>
          <dd>
            <input class="contact-form__inputs-text" type="text" id="name" name="name"
              placeholder="沖縄&nbsp;&nbsp;&nbsp;太朗" required />
          </dd>
        </dl>
        <dl class="contact-form__label">
          <dt>メールアドレス<span>必須</span></dt>
          <dd>
            <input class="contact-form__inputs-text" type="email" id="email" name="email"
              placeholder="aaa000@ggmail.com" required />
          </dd>
        </dl>
        <dl class="contact-form__label">
          <dt>電話番号<span>必須</span></dt>
          <dd>
            <input class="contact-form__inputs-text" type="tel" id="tel" name="tel" placeholder="000-0000-0000"
              required />
          </dd>
        </dl>
        <dl class="contact-form__label-contact">
          <dt>お問合せ項目<span>必須</span></dt>
          <dd class="contact-form__container">
            <div class="contact-form__check-box">
              <input type="checkbox" id="check1" name="check1" />
              <label for="check1" class="contact-form__check-label">ダイビング講習について</label>
            </div>
            <div class="contact-form__check-box">
              <input type="checkbox" id="check2" name="check2" />
              <label for="check2" class="contact-form__check-label">ファンデイビングについて</label>
            </div>
            <div class="contact-form__check-box">
              <input type="checkbox" id="check3" name="check3" />
              <label for="check3" class="contact-form__check-label">体験ダイビングについて</label>
            </div>
          </dd>
        </dl>
        <dl class="contact-form__label-campaign">
          <dt>キャンペーン</dt>
          <dd>
            <div class="contact-form__select">
              <select name="sample-select">
                <option value="キャンペーン内容を選択">キャンペーン内容を選択</option>
                <option value="ダイビング講習">ダイビング講習</option>
                <option value="ファンデイビング">ファンデイビング</option>
                <option value="体験ダイビング">体験ダイビング</option>
              </select>
            </div>
          </dd>
        </dl>
        <dl class="contact-form__label-text">
          <dt>お問合せ内容<span>必須</span></dt>
          <dd class="contact-form__text">
            <textarea name="問い合わせ" class="contact-form__textarea"></textarea>
          </dd>
        </dl>
        <div class="contact-form__personal-information personal-information">
          <input type="checkbox" id="check4" name="check4" />
          <label for="check4" class="personal-information__check-label">個人情報の取り扱いについて同意のうえ<br
              class="md-show" />送信します。</label>
        </div>
        <div class="contact-form__button-layout">
          <div class="contact-form__button">
            <input type="submit" value="Send" onclick="location.href='thanks-page.html'" />
            <span class="contact-form__button-arrow2"></span><span class="contact-form__button-arrow"></span>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>
<?php get_footer(); ?>