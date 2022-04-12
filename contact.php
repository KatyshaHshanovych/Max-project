<!doctype html>
<html lang="ru">
<head>
    <?php include 'head.php'; ?>
    <title>Portfolio</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="contact-block">
        <div class="aboutMe__titleBlock">
            <h2 class="aboutMe__word projectText">
                Project
            </h2>
        </div>
        <hr class="block-AboutMe__lineText padding">
        <div class="container">
            <div class="contact-block__mainItems">
                <img src="image/girl.png" alt="girl">
                <div class="contact-block__form">
                    <div class="contact-block__nameLastName">
                        <input type="text" class="contact-block__formName contactFormInput" placeholder="Name">
                        <input type="text" class="contact-block__formLastName contactFormInput" placeholder="Last Name">
                    </div>
                    <div class="contact-block__nameEmailSub">
                        <input type="text" class="contact-block__formEmail contactFormInput" placeholder="Email">
                        <input type="text" class="contact-block__formSubject contactFormInput" placeholder="Subject">
                    </div>
                    <div class="contact-block__textArea">
                        <textarea name="Message" id="" cols="30" rows="10" class="contact-block__formMessage" placeholder="Message" data-lt-tmp-id="lt-953408" spellcheck="false" data-gramm="false">
                        </textarea>
                    </div>
                    <div class="contact-block__button">
                        <a class="contact-block__redButton" href="/">
                            Submit
                        </a>
                    </div>
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
