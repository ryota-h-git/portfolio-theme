<?php get_header(); ?>

<div class="fv">
    <h2 class="fv__heading animation__text2 is-target">
        <span>Ryota's</span></br>
        <span>portfolio</span>
    </h2>
    <p class="fv__catchcopy">Committed to delivering</br> quality with every project.</p>
    <div class="scroll__container">

        <div class="scroll__text"></div>
        <div class="fv__scrolldown-arrow"></div>
    </div>
</div>

<div class="inner">
    <section class="section works" id="works">
        <div class="works__inner">
            <h2 class="section__head js-in-view fade-in-up works__heading">
                <span class="section__head-main">Works</span>
                <span class="section__head-sub">実績紹介</span>
            </h2>
            <div class="works__contents">
                <ul class="works__list">
                    <?php
                    $args = array(
                        'post_type' => 'work', // カスタム投稿タイプのスラッグ
                        'posts_per_page' => 6, // 表示件数
                        'post_status' => 'publish', // 公開済みの投稿だけ
                    );

                    $news_query = new WP_Query($args);

                    if ($news_query->have_posts()) :
                        while ($news_query->have_posts()) : $news_query->the_post();
                    ?>
                            <a href="<?php the_permalink() ?>" class="works__item-link">
                                <li class="works__item js-in-view fade-in-up">
                                    <h3 class="works__item-name"><?php the_field('work-title'); ?></h3>
                                    <div class="works__item-img"><?php the_post_thumbnail(); ?></div>

                                    <div class="work-label-wrap">
                                        <p class="work__label"><?php the_field('work-range'); ?></p>
                                        <?php if (get_field('work-range2')) : ?>
                                            <p class="work__label"><?php the_field('work-range2'); ?></p>
                                        <?php endif; ?>
                                        <?php if (get_field('work-range3')) : ?>
                                            <p class="work__label"><?php the_field('work-range3'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="works__item-arrow-text">
                                        Learn more
                                        <div class="works__item-arrow-button">
                                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M4 12H20M20 12L14 6M20 12L14 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="works__item-arrow-button-bg"></div>
                                    </div>

                                </li>
                            </a>
                    <?php
                        endwhile;
                        wp_reset_postdata(); // メインループに戻す
                    endif;
                    ?>
                </ul>
            </div>

            <a href="<?php echo get_post_type_archive_link('work'); ?>" class="section__detail">制作実績一覧へ</a>
        </div>
    </section>

    <!-- service -->
    <section class="section service" id="service">
        <div class="section__inner">
            <h2 class="section__head js-in-view fade-in-up">
                <span class="section__head-main">Service</span>
                <span class="section__head-sub">提供サービス</span>
            </h2>
            <p class="section__lead-text js-in-view fade-in-up">提供可能なサービスです。HP制作や既存のWebサイトの修正などWEBに関する相談は全般的に承っております。
                <br />お気軽にお問い合わせください。
            </p>
            <div class="service__contents">
                <ul class="service__list">
                    <li class="service__item js-in-view fade-in-up">
                        <div class="service__item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/service-pc.jpg" alt=""></div>
                        <h3 class="service__item-name">コーディング</h3>
                        <p class="service__item-text">お客様のご要望に応えられるようヒアリングをしながら柔軟に対応させていただきます。<br />
                            ピクセルパーフェクトを意識した丁寧なコーディングとデザインカンプを忠実に再現します</p>
                    </li>
                    <li class="service__item js-in-view fade-in-up">
                        <div class="service__item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/service-pc2.jpg" alt=""></div>
                        <h3 class="service__item-name">ホームページ修正</h3>
                        <p class="service__item-text">テキストの簡単な変更からスマホ対応する為のレスポンシブ化やHTMLからWordPress化などHPの些細なお困りごとでも対応します。</p>
                    </li>
                    <li class="service__item js-in-view fade-in-up">
                        <div class="service__item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/service-pc3.jpg" alt=""></div>
                        <h3 class="service__item-name">ホームページ相談</h3>
                        <p class="service__item-text">HPに関するご相談を無料にてお受けしております。些細な事でもお気軽にお問い合わせください。</p>
                    </li>
                </ul>
            </div>
        </div>

        <!-- swiper -->

        <h2 class="section__head js-in-view fade-in-up skill">
                <span class="section__head-main">skill</span>
                <span class="section__head-sub">技術・能力</span>
            </h2>
        <div class="work__swiper-container">
            <div class="swiper work__swiper">
                <div class="swiper-wrapper work__swiper-wrapper">
                    <div class="swiper-slide work__swiper-slide">
                        <i class="fa-brands fa-php"></i>
                    </div>
                    <div class="swiper-slide work__swiper-slide">
                        <i class="fa-brands fa-sass"></i>
                    </div>
                    <div class="swiper-slide work__swiper-slide">
                        <i class="fa-brands fa-js"></i>
                    </div>
                    <div class="swiper-slide work__swiper-slide">
                        <i class="fa-brands fa-wordpress"></i>
                    </div>
                    <div class="swiper-slide work__swiper-slide">
                        <i class="fa-brands fa-html5"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- -------- workflow----------- -->
    <section class="workflow" id="workflow">
        <div class="section__inner">
            <h2 class="section__head js-in-view fade-in-up">
                <span class="section__head-main">workflow</span>
                <span class="section__head-sub">業務の流れ</span>
            </h2>

            <div class="workflow__wrapper">
                <div class="workfow__contents">
                    <div class="workflow__num num-1">
                        1
                    </div>
                    <h3 class="workflow__title">ヒアリング</h3>
                    <p class="workfolw__text">お客様のイメージしているホームページに近づける為に丁寧にヒアリングいたします。</br>
                        ▪️テーマカラーを選んで頂き完全お任せでも対応可能</br>
                        ▪️参考サイトから選んで頂き、大まかなイメージでも対応いたします。</br>
                    </p>
                </div>
                <div class="workfow__contents">
                    <div class="workflow__num num-2">
                        2
                    </div>
                    <h3 class="workflow__title">デザイン</h3>
                    <p class="workfolw__text">デザインは外注依頼になりますが、信頼できるデザイナーさんに依頼し円滑なやり取りをいたします</br>
                        </br>また、デザイナーさんからのコーディングの依頼も受け付けております
                </div>
                <div class="workfow__contents">
                    <div class="workflow__num num-3">
                        3
                    </div>
                    <h3 class="workflow__title">コーディング</h3>
                    <p class="workfolw__text">レスポンシブ対応はもちろんの事、デザインカンプを忠実に再現いたします</br>
                        ▪その他アニメーションの追加やホバー時の挙動など変更したい箇所も対応いたします
                    </p>
                </div>
                <div class="workfow__contents">
                    <div class="workflow__num num-4">
                        4
                    </div>
                    <h3 class="workflow__title">WordPress化</h3>
                    <p class="workfolw__text">希望であればWordPress化まで対応いたします</br>
                        ▪️オリジナルテーマを作成し管理画面からの更新可能</br>
                        ▪️コンタクトフォームを設置しお問合せ対応</br>
                    </p>
                </div>
                <div class="workfow__contents num-5">
                    <div class="workflow__num num-5">
                        5
                    </div>
                    <h3 class="workflow__title">納品</h3>
                    <p class="workfolw__text">納品方法はお客様希望の納品方法にて納品いたします</br>
                        ▪️サーバーアップやサーバー契約も対応いたします</br>
                        ▪️最後まで確実に取り組ませていただきます</br>
                    </p>
                </div>
            </div>
        </div>
    </section>




    <!-- about -->
    <section class="section about" id="about">
        <div class="section__inner">
            <h2 class="section__head js-in-view fade-in-up">
                <span class="section__head-main">About</span>
                <span class="section__head-sub">自己紹介</span>
            </h2>
            <div class="about__container js-in-view fade-in-up">
                <div class="about__img"><img src="<?php echo get_template_directory_uri(); ?>/img/profile.jpg" alt=""></div>
                <div class="about__text-container">

                    <p class="about__text">新潟県在住。20年間会社員として働いてきましたが『自分一人で稼ぐ力』を身に付ける為に独学~オンラインスクール「デイトラ」の受講を経て
                        今に至ります。<br />Web上での目に見えない相手に対しても社会人経験で得た【あたり前な報連相】を心掛けております
                    </p>
                    <p class="about__text"> 【集客の出来るHPを作る!】をモットーに案件に取り組んで行きたいと思います。
                    </p>
                    <p class="about__text"> 趣味は釣りと筋トレで釣りと筋トレを題材にしたブログ<a href="https://hirame-blog.com/"
                            target="_blank" class="about__text-link">hirameblog</a>運営も行っています。

                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- message -->
    <section class="section message" id="message">
        <div class="section__inner">
            <div class="message__container">
                <div class="message__text-cotntents">
                    <h2 class="section__head js-in-view fade-in-up">
                        <span class="section__head-main">Message</span>
                        <span class="section__head-sub">ご依頼をお考えの方へ</span>
                    </h2>
                    <p class="section__lead-text">
                        レスポンスを早くする事を心がけ、丁寧な対応でコーディング業務をサポートいたします。<br />デザインカンプからのperfect pixelでコーディングやWordPress対応、細かな修正も即対応します<br />
                        お問い合わせは以下のフォームまたはXのDM、Gmailで受け付けております。
                    </p>
                    <p class="section__lead-text message-contact">
                        ご連絡お待ちしております
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="contact-wrap">
        <h2 class="section__head section__head--center">
            <span class="section__head-main section__head-main-bottom" id="contact">Contact</span>
            <span class="section__head-sub">お問い合わせ</span>
        </h2>
        <div class="contact">
            <?php echo do_shortcode('[contact-form-7 id="540419c" title="お問い合わせ"]'); ?>
        </div>

    </div>

    <?php get_footer(); ?>