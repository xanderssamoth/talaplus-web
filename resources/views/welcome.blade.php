<!DOCTYPE html>
<html data-bs-theme="light" lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicon/site.webmanifest') }}">

    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{{ asset('vendors/swiper/swiper-bundle.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&amp;family=Rubik:ital,wght@0,300..900;1,300..900&amp;display=swap" rel="stylesheet">

    <link href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet" id="style-default">
    <link href="{{ asset('assets/css/user-rtl.min.css') }}" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset('assets/css/user.min.css') }}" rel="stylesheet" id="user-style-default">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Bienvenue sur TALA+</title>
  </head>

  <body>
    <main class="main" id="top">
      <div class="content">
        <nav class="navbar navbar-expand-md fixed-top" id="navbar" data-navbar-soft-on-scroll="data-navbar-soft-on-scroll">
          <div class="container-fluid px-0">
            <a class="navbar-brand d-flex align-items-center" href="/">
              <img class="img-fluid d-none d-md-block" src="{{ asset('assets/img/logos/brand-1.png') }}" alt="TALA+" width="200" />
              <img class="img-fluid d-md-none" src="{{ asset('assets/img/logos/logo-0.png') }}" alt="TALA+" width="50" />
            </a>
            <a class="btn btn-primary btn-sm ms-md-x1 mt-lg-0 order-md-1 ms-auto" href="#contact">Rejoindre l'aventure</a>
            <button class="navbar-toggler border-0 pe-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Ouvrir le menu">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-end" id="navbar-content" data-navbar-collapse="data-navbar-collapse">
              <ul class="navbar-nav gap-md-2 gap-lg-3 pt-x1 pb-1 pt-md-0 pb-md-0" data-navbar-nav="data-navbar-nav">
                <li class="nav-item"><a class="nav-link lh-xl" href="#home">Accueil</a></li>
                <li class="nav-item"><a class="nav-link lh-xl" href="#about">Vision</a></li>
                <li class="nav-item"><a class="nav-link lh-xl" href="#service">Fonctionnalites</a></li>
                <li class="nav-item"><a class="nav-link lh-xl" href="#pricing">Offres</a></li>
                <li class="nav-item"><a class="nav-link lh-xl" href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <div data-bs-target="#navbar" data-bs-spy="scroll" tabindex="0">
          <section class="hero-section overflow-hidden position-relative z-0 mb-4 mb-lg-0" id="home">
            <div class="hero-background">
              <div class="container">
                <div class="row gy-4 gy-md-8 pt-9 pt-lg-0">
                  <div class="col-lg-6 text-center text-lg-start">
                    <p class="mb-0 mt-2 d-sm-none"><img src="{{ asset('assets/img/logos/brand-0.png') }}" alt="Tala+" width="200"></p>
                    <h1 class="fs-2 fs-lg-1 text-white fw-bold mb-2 mb-lg-x1 lh-base mt-3 mt-lg-0">Le bouquet numérique qui connecte <span class="d-lg-block">le monde créatif</span></h1>
                    <p class="fs-8 text-white mb-3 mb-lg-4 lh-lg">TALA+ réunit divertissement, éducation, entrepreneuriat, culture et communication dans une seule expérience accessible sur mobile, web et télévision.</p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                      <a class="btn btn-primary btn-lg lh-xl mb-4 mb-md-5 mb-lg-7" href="#about">Découvrir TALA+</a>
                    </div>
                    <p class="mb-x1 fs-10 button-text text-uppercase fw-bold lh-base text-300">Application bientôt disponible</p>
                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-2 position-relative z-2">
                      <a class="border-0 p-0 bg-transparent cursor-pointer rounded-1" href="#!"><img class="img-fluid" src="{{ asset('assets/img/logos/App_Store.webp') }}" alt="App Store" /></a>
                      <a class="border-0 p-0 bg-transparent cursor-pointer rounded-1" href="#!"><img class="img-fluid" src="{{ asset('assets/img/logos/Play_Store.webp') }}" alt="Play Store" /></a>
                    </div>
                  </div>
                  <div class="col-lg-6 position-lg-relative">
                    <div class="position-lg-absolute z-1 text-center">
                      <img class="img-fluid chat-image" src="{{ asset('assets/img/Hero/Frame.jpeg') }}" alt="Aperçu de l'application TALA+" />
                      <div class="position-absolute dots d-none d-md-block"><img class="img-fluid w-50 w-lg-75" src="{{ asset('assets/img/illustrations/Dots.webp') }}" alt="" /></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="position-absolute bottom-0 start-0 end-0 z-1">
              <img class="wave mb-md-n2" src="{{ asset('assets/img/illustrations/Wave.svg') }}" alt="" />
              <div class="bg-white py-2 py-md-5"></div>
            </div>
          </section>

          <section class="container border-bottom mb-8 mb-lg-10">
            <div class="row pb-6 pb-lg-8 g-3 g-lg-8 px-3">
              <div class="col-12 col-md-4">
                <h2 class="fs-3 fw-bold lh-sm mb-2 text-center" data-countup='{"endValue":5,"prefix":"0"}'>0</h2>
                <h6 class="fs-8 fw-normal lh-lg mb-0 opacity-70 text-center">univers réunis : culture, éducation, divertissement, business et communication.</h6>
              </div>
              <div class="col-12 col-md-4">
                <h2 class="fs-3 fw-bold lh-sm mb-2 text-center" data-countup='{"endValue":3}'>0</h2>
                <h6 class="opacity-70 fs-8 fw-normal lh-lg mb-0 text-center">écrans ciblés pour toucher les publics sur mobile, web et télévision.</h6>
              </div>
              <div class="col-12 col-md-4">
                <h2 class="fs-3 fw-bold lh-sm mb-2 text-center" data-countup='{"endValue":24,"suffix":"/7"}'>0</h2>
                <h5 class="opacity-70 fs-8 fw-normal lh-lg mb-0 text-center">une plateforme pensée pour apprendre, créer, partager et se divertir à tout moment.</h5>
              </div>
            </div>
          </section>

          <section class="container mb-8 mb-lg-13" id="about">
            <div class="row align-items-center">
              <div class="col-12 col-lg-6 col-xl-7"><img class="img-fluid" src="{{ asset('assets/img/Hero/Team.webp') }}" alt="Equipe TALA+" /></div>
              <div class="col-12 col-lg-6 col-xl-5">
                <div class="row justify-content-center justify-content-lg-start">
                  <div class="col-sm-10 col-md-8 col-lg-12">
                    <h2 class="fs-4 fs-lg-3 fw-bold mb-2 text-center text-lg-start">Valoriser la culture mondiale par le numérique.</h2>
                    <p class="fs-8 mb-4 mb-lg-5 lh-lg text-center text-lg-start fw-normal">TALA+ crée un espace où les créateurs, les apprenants, les entrepreneurs et les communautés peuvent se rencontrer autour de contenus utiles et inspirants.</p>
                  </div>
                  <div class="col-12">
                    <div class="mb-x1 mb-lg-3">
                      <h5 class="fs-8 fw-bold lh-lg mb-1">Contenus éducatifs accessibles</h5>
                      <p class="mb-0 lh-xl">Des programmes pour enfants, adolescents et adultes, avec des formats pensés pour apprendre simplement.</p>
                    </div>
                    <div>
                      <h5 class="fs-8 fw-bold lh-lg mb-1">Vitrine des talents du monde</h5>
                      <p class="lh-xl mb-0">Une plateforme pour mettre en avant artistes, entrepreneurs, formateurs et initiatives venues de tous les horizons.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="container mb-8 mb-lg-13">
            <div class="row align-items-center">
              <div class="col-12 col-lg-6 col-xl-5 order-lg-1"><img class="img-fluid" src="{{ asset('assets/img/Hero/Collaborator.jpeg') }}" alt="Collaboration autour de TALA+" /></div>
              <div class="col-12 col-lg-6 col-xl-7">
                <div class="row justify-content-center justify-content-lg-start">
                  <div class="col-sm-10 col-md-8 col-lg-11">
                    <h2 class="fs-4 fs-lg-3 fw-bold mb-2 text-center text-lg-start">Une expérience unique, plusieurs usages.</h2>
                    <p class="fs-8 mb-4 mb-lg-5 lh-lg text-center text-lg-start fw-normal">Regarder, apprendre, discuter, promouvoir un projet, participer à un événement ou découvrir de nouveaux talents : tout part du même espace.</p>
                  </div>
                  <div class="col-12">
                    <div class="mb-x1 mb-lg-3">
                      <h5 class="fs-8 fw-bold lh-lg mb-1">Communautés et communication</h5>
                      <p class="b-0 lh-xl">Des espaces pour interagir, partager des expériences et construire des liens autour de centres d'intérêt.</p>
                    </div>
                    <div>
                      <h5 class="fs-8 fw-bold lh-lg mb-1">IA et personnalisation</h5>
                      <p class="lh-xl mb-0">Des recommandations intelligentes pour guider chaque utilisateur vers les contenus qui lui correspondent.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="container mb-8 mb-lg-11">
            <div class="row justify-content-center">
              <div class="col-md-8 col-lg-7">
                <h3 class="fs-4 fs-lg-3 fw-bold text-center mb-2 mb-lg-x1">Comment ça <span class="text-nowrap">fonctionne ?</span></h3>
                <p class="fs-8 mb-7 mb-lg-8 text-center lh-lg">TALA+ simplifie l'accès aux contenus et aux services numériques en trois étapes.</p>
              </div>
              <div class="col-12">
                <div class="row g-sm-2 g-lg-3 align-items-center timeline">
                  <div class="col-12 col-lg-4 d-flex flex-row flex-lg-column justify-content-center gap-2 gap-sm-x1 gap-md-4 gap-lg-0">
                    <div class="timeline-step-1 w-25 w-lg-100 mb-4 mb-lg-5 mb-xl-6">
                      <div class="timeline-item d-flex justify-content-center">
                        <div class="timeline-icon bg-primary rounded-circle d-flex justify-content-center align-items-center"><span class="fs-6 fs-lg-5 fs-xl-4 text-white">1</span></div>
                      </div>
                    </div>
                    <div class="py-1 py-lg-0 px-lg-5 w-75 w-sm-50 w-lg-100 timeline-content">
                      <h6 class="fs-8 fw-bold text-lg-center lh-lg mb-2">Créer son accès</h6>
                      <p class="text-lg-center lh-xl mb-0">L'utilisateur rejoint TALA+ depuis son écran préféré.</p>
                    </div>
                  </div>
                  <div class="col-12 col-lg-4 d-flex flex-row flex-lg-column justify-content-center gap-2 gap-sm-x1 gap-md-4 gap-lg-0">
                    <div class="timeline-step-2 w-25 w-lg-100 mb-4 mb-lg-5 mb-xl-6">
                      <div class="timeline-item d-flex justify-content-center">
                        <div class="timeline-icon bg-success rounded-circle d-flex justify-content-center align-items-center"><span class="fs-6 fs-lg-5 fs-xl-4 text-white">2</span></div>
                      </div>
                    </div>
                    <div class="py-1 py-lg-0 px-lg-5 w-75 w-sm-50 w-lg-100 timeline-content">
                      <h6 class="fs-8 fw-bold text-lg-center lh-lg mb-2">Explorer les univers</h6>
                      <p class="text-lg-center lh-xl mb-0">Culture, formation, business, événements et divertissement se découvrent au même endroit.</p>
                    </div>
                  </div>
                  <div class="col-12 col-lg-4 d-flex flex-row flex-lg-column justify-content-center gap-2 gap-sm-x1 gap-md-4 gap-lg-0">
                    <div class="timeline-step-3 position-relative z-1 overflow-hidden w-25 w-lg-100 mb-4 mb-lg-5 mb-xl-6">
                      <div class="timeline-item d-flex justify-content-center">
                        <div class="timeline-icon bg-info rounded-circle d-flex justify-content-center align-items-center"><span class="fs-6 fs-lg-5 fs-xl-4 text-white">3</span></div>
                      </div>
                    </div>
                    <div class="py-1 py-lg-0 px-lg-5 w-75 w-sm-50 w-lg-100 timeline-content">
                      <h6 class="fs-8 fw-bold text-lg-center lh-lg mb-2">Participer et grandir</h6>
                      <p class="text-lg-center lh-xl mb-0">Chaque membre peut apprendre, partager, recommander et soutenir les talents du monde.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="experience position-relative overflow-hidden" id="service">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12">
                  <div class="position-relative z-1 text-center mb-8 mb-lg-9 video-player-paused" data-video-player-container="data-video-player-container">
                    <video class="w-100 h-100 rounded-4" src="{{ asset('assets/video/Tech_video.mp4') }}" poster="{{ asset('assets/img/Hero/experiences.webp') }}" type="video/mp4" data-video-player="data-video-player"></video>
                    <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 rounded-4 bg-1100 object-cover" data-overlay="data-overlay"></div>
                    <button class="btn play-button position-absolute justify-content-center align-items-center bg-white rounded-circle cursor-pointer" data-play-button="data-play-button">
                      <img class="play-icon w-25" src="{{ asset('assets/img/illustrations/play-solid.svg') }}" alt="Lire" data-play-icon="data-play-icon" />
                      <img class="pause-icon w-25" src="{{ asset('assets/img/illustrations/pause-solid.svg') }}" alt="Pause" data-pause-icon="data-pause-icon" />
                    </button>
                    <div class="position-absolute dots d-none d-sm-block"><img class="img-fluid w-100" src="{{ asset('assets/img/illustrations/Dots.webp') }}" alt="" /></div>
                  </div>
                </div>
                <div class="col-md-8 col-lg-7">
                  <h2 class="fs-4 fs-lg-3 fw-bold text-center text-white mb-5 mb-lg-9 lh-sm">Une plateforme conçue pour répondre aux besoins numériques d'un public mondial.</h2>
                </div>
                <div class="col-12">
                  <div class="row gy-4 g-md-3 pb-8 pb-lg-11 px-1">
                    <div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-2"><img src="{{ asset('assets/img/icons/roadmap.svg') }}" alt="" />
                      <div><h5 class="fs-8 text-white lh-lg fw-bold">Bouquet de contenus</h5><p class="text-white text-opacity-50 lh-xl mb-0">Des vidéos, formations, émissions, événements et formats courts pour des usages variés.</p></div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-2"><img src="{{ asset('assets/img/icons/users-wm.svg') }}" alt="" />
                      <div><h5 class="fs-8 text-white lh-lg fw-bold">Communautés actives</h5><p class="text-white text-opacity-50 lh-xl mb-0">Des espaces d'échange pour rassembler utilisateurs, créateurs et partenaires.</p></div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-2"><img src="{{ asset('assets/img/icons/share-91.svg') }}" alt="" />
                      <div><h5 class="fs-8 text-white lh-lg fw-bold">Partage et parrainage</h5><p class="text-white text-opacity-50 lh-xl mb-0">Des mécanismes de recommandation pour faciliter l'invitation et la croissance organique.</p></div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-2"><img src="{{ asset('assets/img/icons/video_meeting.svg') }}" alt="" />
                      <div><h5 class="fs-8 text-white lh-lg fw-bold">Evénements en ligne</h5><p class="text-white text-opacity-50 lh-xl mb-0">Lives, concours, mini-événements et rendez-vous communautaires depuis la plateforme.</p></div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-2"><img src="{{ asset('assets/img/icons/opening-times.svg') }}" alt="" />
                      <div><h5 class="fs-8 text-white lh-lg fw-bold">Accès permanent</h5><p class="text-white text-opacity-50 lh-xl mb-0">Une expérience disponible à tout moment, adaptée aux habitudes numériques modernes.</p></div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-2"><img src="{{ asset('assets/img/icons/card-favorite.svg') }}" alt="" />
                      <div><h5 class="fs-8 text-white lh-lg fw-bold">Monétisation</h5><p class="text-white text-opacity-50 lh-xl mb-0">Des opportunités pour promouvoir des offres, soutenir des créateurs et développer des services.</p></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="position-absolute top-0 start-0 end-0">
              <div class="bg-white py-3 py-md-9 py-xl-10"></div>
              <img class="wave" src="{{ asset('assets/img/illustrations/Wave_2.svg') }}" alt="" />
            </div>
          </section>

          <section class="bg-1100 mt-n1">
            <div class="mx-auto text-center"><hr class="horizontal-rule m-0 d-inline-block" /></div>
            <div class="container pb-8 pb-lg-10">
              <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                  <h2 class="fs-6 fs-lg-5 fw-bold text-white text-center pt-7 pb-4 pt-lg-9 pb-lg-6 lh-lg"><span class="underline">Des publics, créateurs et partenaires</span> réunis autour d'une même ambition numérique.</h2>
                </div>
                <div class="col-12 mb-4 mb-lg-6">
                  <div class="row g-2">
                    <div class="swiper-theme-container">
                      <div class="swiper position-relative" data-swiper='{"spaceBetween":20,"mousewheel":{"forceToAxis":true,"sensitiviye":20,"releaseOnEdges":true},"autoplay":{"delay":3000,"disableOnInteraction":false},"breakpoints":{"0":{"slidesPerView":1,"direction":"horizontal","centeredSlide":true,"loop":true},"768":{"direction":"horizontal","centeredSlide":true,"slidesPerView":2,"loop":true},"992":{"slidesPerView":3,"direction":"vertical","loop":false}}}'>
                        <div class="swiper-wrapper">
                          <div class="col-12 swiper-slide"><div class="d-flex justify-content-center gap-2"><div class="d-flex flex-column flex-lg-row gap-2 px-4 py-x1 review-card-1"><div class="text-center text-lg-start"><img class="card-image rounded-circle object-fit-cover" src="{{ asset('assets/img/feedback/reviewer_1.webp') }}" alt="Utilisateur TALA+" /></div><div class="text-center text-lg-start"><p class="fs-8 mb-2 lh-lg line-clamp-3 text-1100">"TALA+ peut devenir l'espace où nos histoires, nos talents et nos idées trouvent enfin leur public."</p><p class="text-800 lh-xl mb-0">Aline M.</p></div></div></div></div>
                          <div class="col-12 swiper-slide"><div class="d-flex justify-content-center gap-2"><div class="d-flex flex-column flex-lg-row gap-2 px-4 py-x1 review-card-2"><div class="text-center text-lg-start"><img class="card-image rounded-circle object-fit-cover" src="{{ asset('assets/img/feedback/reviewer_2.webp') }}" alt="Créateur TALA+" /></div><div class="text-center text-lg-start"><p class="fs-8 mb-2 lh-lg line-clamp-3 text-1100">"Une seule application pour apprendre, promouvoir un projet et suivre les événements qui comptent."</p><p class="text-800 lh-xl mb-0">David K.</p></div></div></div></div>
                          <div class="col-12 swiper-slide"><div class="d-flex justify-content-center gap-2"><div class="d-flex flex-column flex-lg-row gap-2 px-4 py-x1 review-card-3"><div class="text-center text-lg-start"><img class="card-image rounded-circle object-fit-cover" src="{{ asset('assets/img/feedback/reviewer_3.webp') }}" alt="Partenaire TALA+" /></div><div class="text-center text-lg-start"><p class="fs-8 mb-2 lh-lg line-clamp-3 text-1100">"Le mélange éducation, culture et entrepreneuriat répond à un vrai besoin global."</p><p class="text-800 lh-xl mb-0">Esther N.</p></div></div></div></div>
                          <div class="col-12 swiper-slide"><div class="d-flex justify-content-center gap-2"><div class="d-flex flex-column flex-lg-row gap-2 px-4 py-x1 review-card-4"><div class="text-center text-lg-start"><img class="card-image rounded-circle object-fit-cover" src="{{ asset('assets/img/feedback/kakashi.webp') }}" alt="Ambassadeur TALA+" /></div><div class="text-center text-lg-start"><p class="fs-8 mb-2 lh-lg line-clamp-3 text-1100">"L'IA et les recommandations peuvent rendre la découverte de contenus beaucoup plus naturelle."</p><p class="text-800 lh-xl mb-0">Patrick L.</p></div></div></div></div>
                          <div class="col-12 swiper-slide"><div class="d-flex justify-content-center gap-2"><div class="d-flex flex-column flex-lg-row gap-2 px-4 py-x1 review-card-5"><div class="text-center text-lg-start"><img class="card-image rounded-circle object-fit-cover" src="{{ asset('assets/img/feedback/obito.webp') }}" alt="Membre TALA+" /></div><div class="text-center text-lg-start"><p class="fs-8 mb-2 lh-lg line-clamp-3 text-1100">"J'aime l'idée d'une plateforme mondiale pensée aussi pour les créateurs et les entrepreneurs."</p><p class="text-800 lh-xl mb-0">Grace F.</p></div></div></div></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-center"><a class="py-1 link-success" href="#contact"><span>Devenir partenaire </span><span class="fa-solid fa-angle-right icon align-middle"></span></a></div>
              </div>
            </div>
          </section>

          <section class="bg-300" id="pricing">
            <div class="container py-8 py-lg-10">
              <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                  <h3 class="fs-4 fs-lg-3 fw-bold text-center mb-2 mb-lg-x1 lh-sm">Des offres simples pour démarrer</h3>
                  <p class="fs-8 mb-7 mb-lg-8 text-center lh-lg fw-normal">TALA+ pourra accompagner les utilisateurs, les créateurs et les organisations selon leurs besoins.</p>
                </div>
                <div class="col-12">
                  <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3">
                    <div class="p-x1 text-center price-card-1 bg-transparent border mb-3 mb-md-0 rounded-2 pricing-card">
                      <p class="fs-10 text-uppercase mb-3 fw-bold text-primary ls-2">Découverte</p>
                      <h2 class="mb-3"><span class="fs-2 fs-md-1 fw-bold">Free</span></h2>
                      <ul class="list-unstyled fs-8 lh-xl fw-light text-1100 ls-1">
                        <li class="py-x1 px-1 border-top">Accès aux contenus ouverts</li>
                        <li class="py-x1 px-1 border-top">Profil utilisateur</li>
                        <li class="py-x1 px-1 border-top">Evénements publics</li>
                        <li class="py-x1 px-1 border-top">Communauté TALA+</li>
                        <li class="mt-1 d-grid"><a class="btn btn-secondary btn-lg lh-xl" href="#contact">Me préinscrire</a></li>
                      </ul>
                    </div>
                    <div class="p-x1 text-center bg-white border shadow-sm rounded-2 pricing-card">
                      <p class="fs-10 text-uppercase mb-3 fw-bold text-primary ls-2">Créateur</p>
                      <h2 class="mb-3"><span class="fs-2 fs-md-1 fw-bold">Pro</span></h2>
                      <ul class="list-unstyled fs-8 lh-xl fw-light text-1100 ls-1">
                        <li class="py-x1 px-1 border-top">Espace de publication</li>
                        <li class="py-x1 px-1 border-top">Statistiques de visibilité</li>
                        <li class="py-x1 px-1 border-top">Campagnes et parrainage</li>
                        <li class="py-x1 px-1 border-top">Accompagnement partenaire</li>
                        <li class="mt-1 d-grid"><a class="btn btn-primary btn-lg lh-xl" href="#contact">Nous contacter</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="bg-1100">
            <div class="container">
              <div class="row py-8 py-md-10 py-lg-11">
                <div class="col-lg-6">
                  <div class="row justify-content-center justify-content-lg-start">
                    <div class="col-md-8 col-lg-12 col-xl-11">
                      <h2 class="text-white fs-4 fs-lg-3 lh-sm mb-2 text-center text-lg-start fw-bold">Un projet pensé pour évoluer avec ses communautés.</h2>
                      <p class="fs-8 text-white text-opacity-65 mb-4 mb-md-6 mb-lg-7 lh-lg text-center text-lg-start">La feuille de route TALA+ mise sur l'innovation, les partenariats, les événements et l'amélioration continue de l'expérience utilisateur.</p>
                    </div>
                    <div class="col-lg-10">
                      <div class="d-flex gap-2 gap-lg-x1 mb-4 mb-lg-5">
                        <div><div class="check-icon bg-success mb-1 rounded-circle d-flex align-items-center justify-content-center"><span class="fa-solid fa-check text-white"></span></div></div>
                        <div><h5 class="fs-8 fw-bold lh-lg mb-1 text-white">Innovation continue</h5><p class="lh-xl text-white text-opacity-70 mb-0">Des modules d'intelligence artificielle et de personnalisation pour enrichir la découverte.</p></div>
                      </div>
                      <div class="d-flex gap-2 gap-lg-x1 mb-4 mb-lg-5">
                        <div><div class="check-icon bg-success mb-1 rounded-circle d-flex align-items-center justify-content-center"><span class="fa-solid fa-check text-white"></span></div></div>
                        <div><h5 class="fs-8 fw-bold lh-lg mb-1 text-white">Partenariats mondiaux</h5><p class="lh-xl text-white text-opacity-70 mb-0">Un réseau ouvert aux créateurs, médias, formateurs, marques et institutions.</p></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="accordion mt-lg-4 ps-3 pe-x1 bg-white" id="accordion">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="heading1"><button class="accordion-button fs-8 lh-lg fw-bold pt-x1 pb-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expand="true" aria-controls="collapse1" data-accordion-button="data-accordion-button">Qu'est-ce que TALA+ ?</button></h2>
                      <div class="accordion-collapse collapse show" id="collapse1" data-bs-parent="#accordion"><div class="accordion-body lh-xl pt-0 pb-x1">TALA+ est un bouquet numérique qui rassemble contenus, services, communautés et opportunités autour d'une plateforme mondiale.</div></div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="heading2"><button class="accordion-button fs-8 lh-lg fw-bold pt-x1 pb-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expand="false" aria-controls="collapse2" data-accordion-button="data-accordion-button">Sur quels appareils l'utiliser ?</button></h2>
                      <div class="accordion-collapse collapse" id="collapse2" data-bs-parent="#accordion"><div class="accordion-body lh-xl pt-0 pb-x1">L'expérience est imaginée pour le mobile, le web et la télévision afin de rejoindre les publics dans leurs usages quotidiens.</div></div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="heading3"><button class="accordion-button fs-8 lh-lg fw-bold pt-x1 pb-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expand="false" aria-controls="collapse3" data-accordion-button="data-accordion-button">Les créateurs peuvent-ils publier ?</button></h2>
                      <div class="accordion-collapse collapse" id="collapse3" data-bs-parent="#accordion"><div class="accordion-body lh-xl pt-0 pb-x1">Oui. Le projet prévoit des espaces de mise en avant, de promotion et de monétisation pour les créateurs et entrepreneurs.</div></div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="heading4"><button class="accordion-button fs-8 lh-lg fw-bold pt-x1 pb-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expand="false" aria-controls="collapse4" data-accordion-button="data-accordion-button">Quel est le rôle de l'IA ?</button></h2>
                      <div class="accordion-collapse collapse" id="collapse4" data-bs-parent="#accordion"><div class="accordion-body lh-xl pt-0 pb-x1">L'IA servira à recommander des contenus, organiser certaines expériences et faciliter la découverte selon les préférences des utilisateurs.</div></div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="heading5"><button class="accordion-button fs-8 lh-lg fw-bold pt-x1 pb-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expand="false" aria-controls="collapse5" data-accordion-button="data-accordion-button">Comment devenir partenaire ?</button></h2>
                      <div class="accordion-collapse collapse" id="collapse5" data-bs-parent="#accordion"><div class="accordion-body lh-xl pt-0 pb-x1">Laissez vos coordonnées via le formulaire. L'équipe TALA+ pourra vous recontacter pour une collaboration, un contenu ou un projet pilote.</div></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="bg-300 position-relative z-0" id="contact">
            <div class="container py-8 py-lg-9">
              <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8">
                  <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                      <h2 class="fs-4 fs-lg-3 fw-bold text-center mb-2 lh-sm">Recevoir les nouvelles de TALA+</h2>
                      <p class="fs-8 mb-5 mb-lg-6 text-center lh-lg fw-normal">Inscrivez-vous pour suivre le lancement, les premiers contenus et les opportunités de partenariat.</p>
                    </div>
                    <div class="col-10 col-lg-7">
                      <form method="POST" onsubmit="return false;">
                        <div class="mb-2 w-100"><input class="form-control email-input" id="email" type="email" placeholder="Votre adresse email" required="required" /></div>
                        <div class="d-grid"><button class="btn btn-lg btn-primary lh-xl mb-x1" type="submit">S'inscrire</button></div>
                      </form>
                    </div>
                    <div class="col-10 col-lg-7">
                      <p class="text-center lh-lg mb-0">Vos informations serviront uniquement à vous informer sur TALA+ et ses prochaines étapes.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="position-absolute bottom-0 end-0 z-n1 d-none d-lg-block"><img src="{{ asset('assets/img/illustrations/Green_dots.svg') }}" alt="" /></div>
            <div class="position-relative bottom-0 start-0 z-1"><img class="img-fluid w-100" src="{{ asset('assets/img/illustrations/Wave_3.svg') }}" alt="" /></div>
          </section>
        </div>

        <button class="btn scroll-to-top text-white rounded-circle d-flex justify-content-center align-items-center bg-primary" data-scroll-top="data-scroll-top" aria-label="Retour en haut"><span class="scroll-to-top-icon" aria-hidden="true"></span></button>

        <footer class="pt-7 pt-lg-8">
          <div class="container">
            <div class="row gy-4 g-md-3 border-bottom pb-8 pb-lg-9 justify-content-center">
              <div class="col-6 col-md-3">
                <p class="mb-2 lh-lg ls-1">TALA+</p>
                <ul class="list-unstyled text-1100">
                  <li class="mb-1"><a class="ls-1 lh-xl" href="#about">Vision</a></li>
                  <li class="mb-1"><a class="ls-1 lh-xl" href="#service">Fonctionnalites</a></li>
                  <li class="mb-1"><a class="ls-1 lh-xl" href="#pricing">Offres</a></li>
                  <li class="mb-1"><a class="ls-1 lh-xl" href="#contact">Contact</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-3">
                <p class="mb-2 lh-lg">Univers</p>
                <ul class="list-unstyled text-1100">
                  <li class="mb-1"><a class="ls-1 lh-xl" href="#!">Divertissement</a></li>
                  <li class="mb-1"><a class="ls-1 lh-xl" href="#!">Education</a></li>
                  <li class="mb-1"><a class="ls-1 lh-xl" href="#!">Entrepreneuriat</a></li>
                  <li class="mb-1"><a class="ls-1 lh-xl" href="#!">Culture</a></li>
                  <li class="mb-1"><a class="ls-1 lh-xl" href="#!">Communication</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-3">
                <p class="mb-2 lh-lg">Partenaires</p>
                <ul class="list-unstyled text-1100">
                  <li class="mb-1"><a class="ls-1 lh-xl" href="#!">Créateurs</a></li>
                  <li class="mb-1"><a class="ls-1 lh-xl" href="#!">Formateurs</a></li>
                  <li class="mb-1"><a class="ls-1 lh-xl" href="#!">Marques</a></li>
                  <li class="mb-1"><a class="ls-1 lh-xl" href="#!">Institutions</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-3 d-md-flex flex-column align-items-md-end pe-md-0">
                <div>
                  <p class="mb-2 lh-lg">Télécharger bientôt</p>
                  <div class="mb-1 mb-lg-2"><a class="border-0 p-0 bg-transparent cursor-pointer rounded-1" href="#!"><img class="img-fluid" src="{{ asset('assets/img/logos/App_Store.webp') }}" alt="App Store" /></a></div>
                  <a class="border-0 p-0 bg-transparent cursor-pointer rounded-1" href="#!"><img class="img-fluid" src="{{ asset('assets/img/logos/Play_Store.webp') }}" alt="Play Store" /></a>
                </div>
              </div>
            </div>
            <div class="row gy-2 py-3 justify-content-center justify-content-md-between">
              <div class="col-auto ps-0">
                <p class="text-center text-md-start lh-xl text-1100">© {{ date('Y') }} TALA+. Tous droits réservés.</p>
              </div>
              <div class="col-auto pe-0">
                <a class="icons fs-8 me-3 me-md-0 ms-md-3 cursor-pointer" href="https://web.facebook.com/talaplus" target="_blank"><span class="fa-brands fa-facebook"></span></a>
                <a class="icons fs-8 me-3 me-md-0 ms-md-3 cursor-pointer" href="https://x.com/talaplus" target="_blank"><span class="fa-brands fa-x-twitter"></span></a>
                <a class="icons fs-8 me-3 me-md-0 ms-md-3 cursor-pointer" href="https://www.instagram.com/talaplus" target="_blank"><span class="fa-brands fa-instagram"></span></a>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </main>

    <script src="{{ asset('vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('vendors/countup/countUp.umd.js') }}"></script>
    <script src="{{ asset('vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
  </body>
</html>
