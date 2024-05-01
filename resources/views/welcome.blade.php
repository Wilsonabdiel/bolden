<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bolden Resources</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body class="antialiased font-sans">
<nav class="flex">
    <figure class="logo fixed_flex small">
        <img src="https://i.postimg.cc/wTqQSLmt/icon.png" alt="Logo">
        <figcaption>
            <h3 class="title">Bolden</h3>
            <h5 class="sub_title">Resources</h5>
        </figcaption>
    </figure>

    <div class="hamburger-menu">
        <div class="bart"></div>
        <div class="bart"></div>
        <div class="bart"></div>
    </div>

    <ul class="flex nav-links">
        <li><a href="#" title="Home">Home</a></li>
        <li><a href="#" title="Who we are?">Who we are?</a></li>
        <li><a href="#" title="Contact us">Contact us</a></li>
        <li><a href="#" title="About us">About us</a></li>
    </ul>
</nav>
{{-- Header --}}
<header class="flex padding_2x">
    <article class="first-art">
        <h4 class="sub_title small"><em>Software</em> For <em>Automotive</em> Industry</h4>
        <h1 class="title big">Engineering Digital Excellence!</h1>
        <a href="#" class="btn btn_3">Let's have a Coffee</a>
    </article>
</header>
<!-- MAIN -->
<main>
    <!-- DIVISION_1 -->
    <div class="divisions division_1 flex">
        <article class="flex_content padding_4x">
            <h2 class="title small">Our History</h2>
            <p>The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it's seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum.</p>
            <a href="#" class="link-tag">Some text goes here...</a>
        </article>
        <article class="flex_content padding_4x">
            <h2 class="title small">Our Mission</h2>
            <p>The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it's seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum.</p>
            <a href="#" class="link-tag">Some text goes here...</a>
        </article>
    </div>
    <!-- DIVISION_2 -->
    <div class="divisions division_2 flex padding_2x">
        <section class="flex_content padding_2x">
            <article>
                <h2 class="title medium">How we make things happen!</h2>
                <span class="bar"></span>
                <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.</p>
                <p>The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it's seen all around the web; on templates, websites, and stock designs.</p>
            </article>
        </section>
        <section class="flex_content padding_1x">
            <figure>
                <img src="https://i.postimg.cc/bNg3J3hH/01.png" alt="Image" loading="lazy">
            </figure>
        </section>
    </div>
    <!-- DIVISION_3 -->
    <div class="divisions division_3 flex">
        <section class="flex_content flex padding_1x">
            <article class="padding_1x">
                <h2 class="title medium">We always love to hear from you</h2>
                <p>Reach out to us and let's talk about your business and what we can achieve together.</p>
            </article>
            <aside class="buttons flex padding_1x">
                <a href="javascript:void(0)" class="btn btn_2">Contact Us</a>
                <a href="tel:" class="btn btn_4"><i class="fa fa-phone"></i> (0) 123 456789</a>
            </aside>
        </section>
    </div>
</main>
<!-- FOOTER -->
<footer>
    <section class="fixed_flex padding_2x">
        <a href="#" title="Facebook"><i class="fa fa-facebook small"></i></a>
        <a href="#" title="Instagram"><i class="fa fa-instagram small"></i></a>
        <a href="#" title="Youtube"><i class="fa fa-youtube small"></i></a>
        <a href="#" title="LinkedIn"><i class="fa fa-linkedin small"></i></a>
    </section>
    <section class="flex padding_1x">
        <a href="#">Home</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Cookie Policy</a>
        <a href="#">Contact Us</a>
        <a href="#">About Us</a>
    </section>
    <section class="flex">
        <p>Copyright @ 2023 website name</p>
    </section>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const hamburgerMenu = document.querySelector('.hamburger-menu');
        const navLinks = document.querySelector('.nav-links');

        hamburgerMenu.addEventListener('click', function() {
            navLinks.classList.toggle('active');
        });
    });
</script>
{{--<script src="{{ asset('js/script.js') }}"></script>--}}

</body>
</html>
