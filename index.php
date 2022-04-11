<!doctype html>
<html lang="ru">
<head>
    <?php include 'head.php'; ?>
    <title>Portfolio</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="block-background">
        <div class="container">
            <div class="block-background__info">
                <div class="block-background__general">
                    <div class="block-background__leftInfo">
                        <div class="block-background__title">
                            Cherevatyi <br>
                            Maksym
                        </div>
                        <hr class="block-background__underLine">
                        <div class="block-background__profession">
                            Character Animator
                        </div>
                        <div class="block-background__buttonDownload">
                            <a href="/" class="block-background__setting">
                                Download CV
                            </a>
                            <div class="block-background__iconBlank">
                                <img src="/image/icon/pdf.svg" alt="pdf" title="pdf" class="block-background__imgIcon">
                            </div>
                        </div>
                    </div>
                    <div class="block-background__rightInfo">
                        <div class="block-background__mailPortfolio">
                            <p class="block-background__textMail">cherewatyi.maksim@gmail.com
                            </p>
                        </div>
                        <div class="block-background__email">
                            <a href="cherewatyi.maksim@gmail.com">
                            </a>
                            <div class="block-background__iconContact">
                                <a href="cherewatyi.maksim@gmail.com">
                                    <img src="/image/icon/Subtract.png" alt="google" title="google">
                                </a>
                                <a href="cherewatyi.maksim@gmail.com">
                                    <img src="/image/icon/facebook.png" alt="facebook" title="facebook">
                                </a>
                                <a href="cherewatyi.maksim@gmail.com">
                                    <img src="/image/icon/vimeo.png" alt="vimeo" title="vimeo">
                                </a>
                                <a href="cherewatyi.maksim@gmail.com">
                                    <img src="/image/icon/linkedin.png" alt="linkedin" title="linkedin">
                                </a>
                                <a href="cherewatyi.maksim@gmail.com">
                                    <img src="/image/icon/twitter.png" alt="twitter" title="twitter">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-AboutMe">
        <div class="container">
            <div class="block-AboutMe__title">
                about me
            </div>
            <hr class="block-AboutMe__lineText">
            <div class="block-AboutMe__animator">
                <div class="block-AboutMe__leftImage">
                    <img src="image/animator.png" alt="animator" title="animator">
                </div>
                <div class="block-AboutMe__infoAnimator">
                    <div class="block-AboutMe__blockInfo">
                        <div class="block-AboutMe__name">
                            Cherevatyi Maksym
                        </div>
                        <div class="block-AboutMe__character">
                            Character animator
                        </div>
                        <div class="block-AboutMe__hrLine">
                            <hr class="block-AboutMe__line">
                        </div>
                        <div class="block-AboutMe__summary">
                            Summary
                        </div>
                        <div class="block-AboutMe__textBlock">
                            Highly motivated and inspired Animation graduate <br>
                            looking to fill a position as a Character Animator. <br>
                            I am a dedicated and focused team player, seeking <br>
                            an opportunity to work with other animators and directors <br> to produced high quality animation assets
                            <br> according to the company’s style and goals.
                        </div>
                        <div class="block-AboutMe__href">
                            <a href="/" class="block-AboutMe__color">
                                Industry Experience
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-Project">
        <div class="container">
            <div class="block-Project__head">
                Project
            </div>
            <hr class="block-AboutMe__lineText">
            <div class="block-Project__itemSlider">
                <div class="block-Project__selected">
                    Selected Projects
                </div>
                <div class="block-Project__allProject">
                    <a href="/" class="block-Project__item">
                        See all
                    </a>
                    <div class="block-Project__iconSlider">
                        <div class="block-Project__imgArrow">
                            <img class="block-Project__imageOne" src="image/arrow.png" alt="arrow" title="arrow">
                        </div>
                        <div class="block-Project__imgEllipse">
                            <img class="block-Project__image" src="image/Ellipse.png" alt="ellipse" title="ellipse">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-Project__blockImages">
            <div class="block-Project__slider">
                <img class="block-Project__picture" src="/image/gvint.png" alt="gvint">
                <img class="block-Project__picture" src="/image/AngryBirds.png" alt="Angry-Birds-Legends">
                <img class="block-Project__picture" src="/image/hotel_image.jpeg" alt="hotel_image">
            </div>
        </div>
    </div>
    <div class="block-Vimeo">
        <div class="container">
            <div class="block-Vimeo__allParts">
                <div class="block-Vimeo__topItem">
                    <div class="block-Vimeo__textTop">
                        <h2 class="block-Vimeo__bigText">
                            Смотрите больше моих видео
                        </h2>
                    </div>
                    <div class="block-Vimeo__presentation">
                        <a href="https://vimeo.com/cherewatyi" class="block-Vimeo__linkVimeo" target="_blank">
                            Vimeo
                        </a>
                    </div>
                </div>
                <div class="block-Vimeo__bottomText">
                    <span class="block-Vimeo__bigTextSecond">
                        Спасибо что посмотрели мое портфолио
                    </span>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="/js/jquery.js"></script>
    <script src="/slick/slick.min.js"></script>
    <script src="/js/script.js"></script>
</body>
</html>