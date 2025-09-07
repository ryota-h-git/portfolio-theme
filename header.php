<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>r-webworks.com/</title>
    <meta name="description" content="webコーダーのryotaのポートフォリオサイトです。HPの新規制作から既存
       のWEBサイトを修正したい場合などにお気軽にご相談ください。" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&
        family=Sawarabi+Mincho&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <div class="header-drawer" id="js-drawer">
        <div class="header__contents-sp" id="js-drawer">
            <nav class="header__nav">
                <ul class="header__nav-list">
                    <li class="header__nav-item">
                        <a href="#works" class="header__nav-link header-button">
                            <span class="button__text">Works</span>
                        </a>
                    </li>
                    <li class="header__nav-item">
                        <a href="#service" class="header__nav-link header-button">
                            <span class="button__text">Service</span>
                        </a>
                    </li>
                    <li class="header__nav-item">
                        <a href="#workflow" class="header__nav-link header-button">
                            <span class="button__text">Workflow</span>
                        </a>
                    </li>
                    <li class="header__nav-item">
                        <a href="#about" class="header__nav-link header-button">
                            <span class="button__text">About</span>
                        </a>
                    </li>

                    <li class="header__nav-item">
                        <a href="#message" class="header__nav-link header-button">
                            <span class="button__text">Message</span>
                        </a>
                    </li>
                    <li class="header__nav-item">
                        <a href="https://x.com/Ryota___web" class="header__nav-link header-button border">
                            <span class="button__icon">
                                <svg class="sns-icon" width="20" height="16" viewBox="0 0 1200 1227" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M714.163 519.284L1160.89 0H1055.03L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.866L515.491 750.218L842.672 1226.37H1200L714.137 519.284H714.163ZM569.165 687.828L521.697 619.934L144.011 79.6944H306.615L611.412 515.685L658.88 583.579L1055.08 1150.3H892.476L569.165 687.854V687.828Z"
                                        class="button__icon-path" />
                                </svg>
                            </span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <button class="header__button" data-contact="#contact">
            お問い合わせ
        </button>
    </div>
    <button type="button" id="js-button-drawer" class="header__menu-button">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <header class="header  <?php if (is_archive() || is_singular('work')) echo 'is-archive'; ?>" id="header-pc">
        <div class="header__contents" id="js-drawer">
            <h2 class="header__title ">
                Ryota's</br>portfolio
            </h2>
            <nav class="header__nav">
                <ul class="header__nav-list">
                    <li class="header__nav-item">
                        <a href="#works" class="header__nav-link header-button">
                            <span class="button__text ">Works</span>
                        </a>
                    </li>
                    <li class="header__nav-item">
                        <a href="#service" class="header__nav-link header-button">
                            <span class="button__text ">Service</span>
                        </a>
                    </li>
                    <li class="header__nav-item">
                        <a href="#workflow" class="header__nav-link header-button">
                            <span class="button__text">Workflow</span>
                        </a>
                    </li>
                    <li class="header__nav-item">
                        <a href="#about" class="header__nav-link header-button">
                            <span class="button__text ">About</span>
                        </a>
                    </li>

                    <li class="header__nav-item">
                        <a href="#message" class="header__nav-link header-button">
                            <span class="button__text ">Message</span>
                        </a>
                    </li>
                    <li class="header__nav-item">
                        <a href="https://x.com/Ryota___web" class="header__nav-link header-button border">
                            <span class="button__icon">
                                <svg class="sns-icon" width="20" height="16" viewBox="0 0 1200 1227" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M714.163 519.284L1160.89 0H1055.03L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.866L515.491 750.218L842.672 1226.37H1200L714.137 519.284H714.163ZM569.165 687.828L521.697 619.934L144.011 79.6944H306.615L611.412 515.685L658.88 583.579L1055.08 1150.3H892.476L569.165 687.854V687.828Z"
                                        class="button__icon-path" />
                                </svg>
                            </span>
                        </a>
                    </li>
                </ul>
            </nav>
            <button class="header__button" data-contact="#contact">
                お問い合わせ
            </button>
        </div>
    </header>