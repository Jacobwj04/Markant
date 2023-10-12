<?php

require_once './private/path.php';
include './private/db/connect.php';

$result = $db->query('SELECT * FROM `config`');
//Create array to keep all results
$data = array();

// Fetch Associated Array (1 for SQLITE3_ASSOC)
while ($res = $result->fetchArray(1)) {
    //insert row into array
    array_push($data, $res);
}

?>


<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8f8681d983.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js" defer></script>
    <title>Markant</title>
</head>

<body>
    <nav class="nav">
        <div class="nav__normal">
            <img class="nav__normal--img" src="img/logo-markant-header.png" alt="">
            <li class="nav__normal--listItem"><a href="#" class="nav__normal--links">Home</a></li>
            <li class="nav__normal--listItem"><a href="#info" class="nav__normal--links">Info</a></li>
            <li class="nav__normal--listItem"><a href="#agenda" class="nav__normal--links">Agenda</a></li>
            <li class="nav__normal--listItem"><a href="#contact" class="nav__normal--links">Contact</a></li>
            <li class="nav__normal--listItem"><a href="cms.php" class="nav__normal--links">CMS</a></li>
            <li class="nav__normal--listItem"><button class="nav__normal--button">Inloggen</button></li>
            <li class="nav__normal--listItem"><button class="nav__normal--button">Aanmelden</button></li>
        </div>
        <div class="nav__phone">
            <img class="nav__phone--img active" src="img/logo-markant-header.png" alt="">
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars nav__phone--bars"></i>
            </a>
        </div>
        <div id="myLinks" class="nav__phone--dropdown">
            <a class="nav__phone--links" href="#">Home</a>
            <a class="nav__phone--links" href="#info">Info</a>
            <a class="nav__phone--links" href="#agenda">Agenda</a>
            <a class="nav__phone--links" href="#contact">Contact</a>
        </div>
    </nav>
    <header class="header">
        <section class="banner">
            <img class="banner__img" src="" alt="">
            <article class="banner__text">
                <h1 class="banner__h1">Voor Mantelzorgers</h1>
                <h2 class="banner__h2">
                    Zorg je voor een naaste en
                    zoek je ondersteuning, informatie
                    of advies? Markant helpt je graag!
                </h2>
                <button class="banner__button">Aanmelden als vrijwilliger</button>
            </article>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1" d="M0,192L80,202.7C160,213,320,235,480,229.3C640,224,800,192,960,181.3C1120,171,1280,181,1360,186.7L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
            </svg>
        </section>
    </header>
    <section id="info" class="info">
        <article class="info__header">
            <h2 class="info__h2">
                Markant
            </h2>
        </article>
        <article class="info__text">
            <p class="info__p">
                Markant is het centrum voor
                mantelzorg in Amsterdam, Diemen en Duivendrecht.
                Markant helpt mantelzorgers balans te vinden tussen zorgen voor
                een ander en zorgen voor zichzelf.
                Mantelzorgers kunnen bij ons terecht
                voor informatie, advies, cursussen, begeleiding en
                praktische ondersteuning, onder andere door de inzet van vrijwilligers.
            </p>
        </article>
        <article class="info__header">
            <h2 class="info__h2">
                Informatie
            </h2>
        </article>
        <article class="info__icon">
            <div class="info__container">
                <i class="fa-solid fa-graduation-cap info__icons"></i>
                <button class="info__button" onclick="showModal(student)">Meer info</button>
                <!-- The Modal -->
                <div class="modal" id="student">
                    <header class="modal__header">
                        <h2 class="modal__h2">Student</h2>
                        <span onclick=closeModal(student) class="modal__close">&times;</span>
                    </header>
                    <section class="modal__main">
                        <p class="modal__paragraph">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit quidem modi debitis animi incidunt! Explicabo, delectus, nam rerum odio inventore quidem dolores tempore accusantium omnis quos autem fuga adipisci iste.
                        </p>
                    </section>
                    <footer class="modal__footer"></footer>
                </div>
            </div>
            <div class="info__container">
                <i class="fa-solid fa-user-tie info__icons"></i>
                <button class="info__button" onclick="showModal(professionals)">Meer info</button>
                <!-- The Modal -->
                <div class="modal" id="professionals">
                    <header class="modal__header">
                        <h2 class="modal__h2">Professionals</h2>
                        <span onclick=closeModal(professionals) class="modal__close">&times;</span>
                    </header>
                    <section class="modal__main">
                        <p class="modal__paragraph">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit quidem modi debitis animi incidunt! Explicabo, delectus, nam rerum odio inventore quidem dolores tempore accusantium omnis quos autem fuga adipisci iste.
                        </p>
                    </section>
                    <footer class="modal__footer"></footer>
                </div>
            </div>
            <div class="info__container">
                <i class="fa-solid fa-users info__icons"></i>
                <button class="info__button" onclick="showModal(vrijwilligers)">Meer info</button>
                <!-- The Modal -->
                <div class="modal" id="vrijwilligers">
                    <header class="modal__header">
                        <h2 class="modal__h2">Vrijwilligers</h2>
                        <span onclick=closeModal(vrijwilligers) class="modal__close">&times;</span>
                    </header>
                    <section class="modal__main">
                        <p class="modal__paragraph">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit quidem modi debitis animi incidunt! Explicabo, delectus, nam rerum odio inventore quidem dolores tempore accusantium omnis quos autem fuga adipisci iste.
                        </p>
                    </section>
                    <footer class="modal__footer"></footer>
                </div>
            </div>
            <div class="info__container">
                <i class="fa-solid fa-hand-holding-hand info__icons"></i>
                <button class="info__button" onclick="showModal(mantelzorgers)">Meer info</button>
                <!-- The Modal -->
                <div class="modal" id="mantelzorgers">
                    <header class="modal__header">
                        <h2 class="modal__h2">Mantelzorgers</h2>
                        <span onclick=closeModal(mantelzorgers) class="modal__close">&times;</span>
                    </header>
                    <section class="modal__main">
                        <p class="modal__paragraph">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit quidem modi debitis animi incidunt! Explicabo, delectus, nam rerum odio inventore quidem dolores tempore accusantium omnis quos autem fuga adipisci iste.
                        </p>
                    </section>
                    <footer class="modal__footer"></footer>
                </div>
            </div>
        </article>
    </section>
    <section id="agenda" class="agenda">
        <article class="agenda__header">
        </article>
        <section class="agenda__nav">
            <article class="agenda__title">
                <h2 class="agenda__h2">
                    Agenda
                </h2>
                <i class="fa-regular fa-calendar-check agenda__icon"></i>
            </article>
            <article class="agenda__slider">
                <button class="agenda__slider--next">&lt</button>
                <button class="agenda__slider--button">September</button>
                <button class="agenda__slider--button">Oktober</button>
                <button class="agenda__slider--button">November</button>
                <button class="agenda__slider--next">></button>
            </article>
        </section>
        <ul class="agenda__list">
            <?php foreach ($data as $row) : ?>
                <li class="agenda__listItem">
                    <div class="agenda__wrapper">
                        <img class="agenda__img" src="img/header.webp" alt="">
                    </div>
                    <section class="agenda__container">
                        <h3 class="agenda__h3"><?php echo $row['subject']; ?></h3>
                        <h3 class="agenda__date"><?php echo $row['date']; ?></h3>
                        <p class="agenda__p"><?php echo $row['paragraph']; ?></p>
                        <div class="agenda__hidden" id="text1">
                            <p class="hidden__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, quis doloribus minus repellendus dignissimos error eligendi optio atque aut placeat esse. Ipsam quae cupiditate accusamus harum quo amet, quisquam sequi.</p>
                        </div>
                    </section>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <section id="contact" class="contact">
        <article class="contact__header">
            <h2 class="contact__h2">
                Contact
            </h2>
        </article>
        <section class="contact__wrapper">
            <section class="contact__widget">
                <form action="" class="widget__form">
                    <input type="text" class="widget__form--input " placeholder="naam">
                    <input type="text" class="widget__form--input" placeholder="achternaam">
                    <input type="email" class="widget__form--input" placeholder="email">
                    <textarea name="" id="" cols="30" rows="10" class="widget__form--text" placeholder="Bijvoegingen"></textarea>
                    <input class="contact__SubmitBtn" type="submit" value="submit" name="submitBtn">
                </form>
            </section>
            <section class="contact__widget">
                <div class="contact__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.1103761290824!2d4.896573915801813!3d52.36841857978568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609be4e5dbbab%3A0xfc010bc27c89024d!2sZwanenburgwal%20206%2C%201011%20JH%20Amsterdam!5e0!3m2!1sen!2snl!4v1667904616684!5m2!1sen!2snl" width="100%" height="400px" border-radius= "15px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>
            <section class="contact__widget contact__widget--info">
                <div class="contact__widget--wrapper">
                <h3 class="contact__h3">Bezoekadres: </h3>
                <p class="contact__p">Zwanenburgwal 206 (3e etage), 1011 JH in Amsterdam</p>
                </div>
                <div class="contact__widget--wrapper">
                <h3 class="contact__h3">Bereikbaarheid: </h3>
                <p class="contact__p">Wij zijn bereikbaar op werkdagen van 8.30 tot 17.00 uur.</p>
                </div>
                <div class="contact__widget--wrapper">
                <h3 class="contact__h3">Telefoon: </h3>
                <p class="contact__p">020 886 88 00</p>
                </div>
                <div class="contact__widget--wrapper">
                <h3 class="contact__h3">E-mail: </h3>
                <p class="contact__p">info@markant.org</p>
                </div>
            </section>
        </section>
    </section>
</body>

</html>