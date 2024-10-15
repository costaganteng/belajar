<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['name'] }} - {{ $data['title'] }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #212121;
            color: #e0e0e0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #424242;
            color: #ffffff;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }
        nav {
            display: flex;
            justify-content: center;
        }
        nav a {
            margin: 0 15px;
            color: #ffffff;
            text-decoration: none;
            position: relative;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        nav a:hover {
            background-color: #616161;
            color: #ffffff;
        }
        nav a:active {
            background-color: #757575;
            color: #ffffff;
        }
        nav a::after {
            content: '';
            display: block;
            width: 100%;
            height: 2px;
            background: #ffffff;
            position: absolute;
            bottom: 0;
            left: 0;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }
        nav a:hover::after {
            transform: scaleX(1);
        }
        section {
            padding: 20px;
            margin: 20px;
            background: #333333;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            flex: 1;
        }
        h2 {
            border-bottom: 2px solid #607d8b;
            padding-bottom: 10px;
            color: #ffffff;
        }
        footer {
            text-align: center;
            padding: 20px;
            background: #424242;
            color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }
        a {
            color: #ffffff; /* Changed from blue to white */
            text-decoration: none;
        }
        .map-container {
            width: 100%;
            max-width: 800px;
            height: 400px;
            margin: 0 auto;
            border: 2px solid #607d8b;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s;
        }
        .map-container:hover {
            transform: scale(1.02);
        }
        iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }
        .fade-in {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }
        .fade-in.visible {
            opacity: 1;
        }
        .social-icons {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
        }
        .social-icons a {
            margin-right: 15px;
            display: flex;
            align-items: center;
        }
        .social-icons img {
            width: 30px;
            height: 30px;
        }
        .projects-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .project {
            background: #333333;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            padding: 15px;
            flex: 1 1 calc(33.333% - 20px);
            box-sizing: border-box;
        }
        video {
            width: 100%;
            height: auto;
        }
        .email-logo {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }
        .contact-container {
            display: flex;
            justify-content: center;
            flex-direction: column;
            margin-bottom: 10px;
        }
        .skill {
            margin-bottom: 20px;
            transition: transform 0.3s;
        }
        .skill:hover {
            transform: scale(1.02);
        }
        .skill-name {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: bold;
            color: #ffffff; /* Changed to white */
        }
        .skill-bar {
            background-color: #607d8b;
            border-radius: 5px;
            height: 10px;
            margin-top: 5px;
            overflow: hidden;
            transition: background-color 0.3s;
        }
        .skill-level {
            background-color: #90caf9;
            height: 100%;
            transition: width 0.5s ease;
        }
    </style>
</head>
<body>

<header>
    <div>
        <h1>{{ $data['name'] }}</h1>
        <p>{{ $data['title'] }}</p>
    </div>
    <nav>
        <a href="#bio">Biografi</a>
        <a href="#skills">Keterampilan</a>
        <a href="#portfolio">Portofolio</a>
        <a href="#location">Lokasi</a>
        <a href="#contact">Kontak</a>
    </nav>
</header>

<section id="bio">
    <h2>Biografi</h2>
    <p>
        Nama: {{ $data['name'] }}<br>
        Tanggal Lahir: 1 Januari 1990<br>
        Tempat Lahir: Kalimantan Timur, Indonesia<br>
        Pendidikan: Rekayasa Perangkat Lunak SMK BagiMu Negeriku<br>
        Pengalaman Kerja: 
        - <br>
        -  <br>
        Hobi: Futsal, bermain gitar, dan Basket .
    </p>
</section>

<section id="skills">
    <h2>Keterampilan</h2>
    <ul class="skills-list">
        @foreach($data['skills'] as $skill)
            <li class="skill">
                <div class="skill-name">
                    <span>{{ $skill['name'] }}</span>
                    <span>{{ $skill['level'] }}%</span>
                </div>
                <div class="skill-bar">
                    <div class="skill-level" style="width: {{ $skill['level'] }}%;"></div>
                </div>
            </li>
        @endforeach
    </ul>
</section>

<section id="portfolio">
    <h2>Portofolio</h2>
    <p>Berikut adalah beberapa project yang telah saya kerjakan:</p>
    <div class="projects-container">
        @foreach($data['portfolio'] as $project)
            <div class="project">
                <h3>{{ $project['title'] }}</h3>
                <p>{{ $project['description'] }}</p>
                <video controls>
                    <source src="{{ asset($project['video_link']) }}" type="video/mp4">
                    Browser Anda tidak mendukung video.
                </video>
            </div>
        @endforeach
    </div>
</section>

<section id="location" class="fade-in">
    <h2>Lokasi</h2>
    <p>Saya saat ini berada di Kalimantan Timur, Kutai Timur, Sangatta Utara, Swargabara Kabojaya, Jl Pendidikan 3.</p>
    <div class="map-container">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345096196!2d144.95373631531654!3d-37.81720997975192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11b4c9%3A0xf2a6e09cfbd67391!2sYour%20Location%20Name!5e0!3m2!1sen!2sus!4v1616161616161!5m2!1sen!2sus" 
            allowfullscreen="" 
            loading="lazy"></iframe>
    </div>
</section>

<section id="contact">
    <h2>Kontak</h2>
    <div class="contact-container">
    </div>
    <div class="social-icons">
        <a href="mailto:ardianuscaesar@gmail.com">
            <img class="email-logo" src="{{ asset('img/email-logo.png') }}" alt="Email Logo">
        </a>
        <a href="https://www.instagram.com/r_costaajaaaa" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
            <img src="{{ asset('img/ig.png') }}" alt="Instagram">
        </a>
        <a href="https://wa.me/6287718676718" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
            <img src="{{ asset('img/wa.png') }}" alt="WhatsApp">
        </a>
    </div>
</section>

<footer>
    <p>&copy; 2024 {{ $data['name'] }}</p>
</footer>

<script>
    window.addEventListener('scroll', function() {
        const locationSection = document.getElementById('location');
        const rect = locationSection.getBoundingClientRect();
        if (rect.top <= window.innerHeight && rect.bottom >= 0) {
            locationSection.classList.add('visible');
        }
    });
</script>

</body>
</html>
