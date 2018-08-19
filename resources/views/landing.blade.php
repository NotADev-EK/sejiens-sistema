@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#sejiens">Par Sējienu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#pieteikties">Pieteikties</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#seko">Seko</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="masthead text-center text-white d-flex">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <img src="images/oga.png" class="rounded mx-auto d-block" style="height: 400px;">
            </div>

            <div class="col-lg-8 mx-auto">
                <h1>Sējiens 2018</h1>
                <h3>31. augusts - 2. septembris</h3>
                <a class="btn btn-apply js-scroll-trigger mt-2" href="#pieteikties">PIETEIKTIES</a>
            </div>
        </div>
    </div>
</header>
<section class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading text-white">Hey, pirmkursniek!</h2>
                <hr class="light my-4">
                <p class="text-faded mb-4">Vasara šogad mūs ir patiesi lutinājusi. Brīžiem karstā saule un lietainais periods ir nesis daudz sulīgas un baudāmas ogas. Arī Tu, pirmkursniek, esi īpaša oga Latvijas Universitātes groziņā!
                </p>
                <p class="text-faded mb-4">
                    Tu esi godam izturējis centralizēto eksāmenu kārtošanu, pinķerīgo pieteikuma veidošanu un ilgu neziņas un satraukuma brīdi! Nu Tev sācies jauns un piedzīvojumiem pilns dzīves posms un beidzot vari saukt sevi par Latvijas Universitātes Datorikas fakultātes studentu!
                </p>
                <p class="text-faded mb-4">
                    <b>Tevi iespējams māc šaubas, vai viss būs labi, vai orientēsies universitātē, vai iepazīsies un iedraudzēsies ar jaunajiem kursabiedriem?</b>
                </p>

            </div>
        </div>
    </div>
</section>

<section id="sejiens">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Sējiens</h2>
                <hr class="my-4">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-3 text-center">
                <div class="mt-5 mx-auto">
                    <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="images/album/1.jpg" alt="1 slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/album/2.jpg" alt="2 slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/album/3.jpg" alt="3 slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/album/4.jpg" alt="4 slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/album/5.jpg" alt="5 slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/album/6.jpg" alt="6 slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/album/7.jpg" alt="7 slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/album/8.jpg" alt="8 slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/album/9.jpg" alt="9 slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/album/9a.jpg" alt="9a slide">
                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <p class="text-dark mt-1">Pagājušā gada bildes</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 text-center">
                <div class="mt-5 mx-auto">
                    <p>Lai pirmajā studiju dienā universitātē Tu jau justos kā mājās, būtu iepazinies ar daudziem kursabiedriem, mēs aicinām piedalīties vienā no spilgtākajiem mūsu fakultātes notikumiem – <span class="text-primary font-weight-bold">pirmsaristotelī “Sējiens 2018”, kas notiks no 31. augusta līdz 2. septembrim.</span> </p>
                    <p>
                        Lai Tu vienmēr saglabātu savu svaigumu un saldumu, mēs Tev piedāvājam doties aizraujošā pirmsstudiju piedzīvojumā, kurā iegūtās prasmes varēsi izmantot arī turpmāk, lai nekļūtu skābs un negaršīgs, sastopoties ar negulētām naktīm, kontroldarbiem un sesiju.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-8 text-center">
                <div class="mt-5 mx-auto">
                    <p><span class="text-primary font-weight-bold">Piektdienā, 31. augustā, tiksimies Latvijas Universitātes galvenajā ēkā (Raiņa bulvāris 19)</span>, lai iepazītu gan universitātes telpas, gan arī savus jaunos kursabiedrus, iesaistoties dažādos interesantos piedzīvojumos. </p>
                    <p>Vēlāk kopīgi dosimies ārpus Rīgas, kur uzturēsimies līdz pat pasākuma beigām un trenēsim gan prātu, gan ķermeni un pat dosimies nakts trasē, lai kļūtu par īstiem studentiem. </p>
                    <p> 2. septembrī brauksim atpakaļ uz Rīgu, lai <span class="text-primary font-weight-bold"> sagatavotos Latvijas Universitātes studentu svētkiem “Aristotelis”</span> un parādītu pārējām fakultātēm, cik DF ir saliedēta un “skaļa” fakultāte!</p>
                    </p>

                </div>
            </div>
            <div class="col-lg-6 col-md-3 text-center">
                <div class="mt-5 mx-auto">
                    <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="images/album/10.jpg" alt="10 slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/album/11.jpg" alt="11 slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/album/12.jpg" alt="12 slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/album/13.jpg" alt="13 slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/album/14.jpg" alt="14 slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/album/15.jpg" alt="15 slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/album/16.jpg" alt="16 slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/album/17.jpg" alt="17 slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/album/18.jpg" alt="18 slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <p class="text-dark mt-1">Pagājušā gada bildes</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 text-center">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/B_Eweo4d3Ck" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-12 text-center">
                <p class="video-text mt-3">Sējiens ir viens no nozīmīgākajiem Latvijas Universitātes Datorikas fakultātes pasākumiem, un  Datorikas fakultātes Studentu pašpārvalde parūpēsies, lai Tu un Tavi topošie kursa biedri iepazītos un sadraudzētos neformālā gaisotnē, pakustētos un padomātu dažādās interesnatās aktivitātēs, uzzinātu svarīgāko, kas sagaida universitātes dzīvē, un, protams, neaizmirstami pavadītu pēdejo vasaras nogali!</p>
            </div>
        </div>
    </div>
</section>
<div class="bg-primary section-min">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 text-white pr-2 text-center mt-2 mb-2"><i class="fas fa-camera fa-6x"></i></div>
            <div class="col-lg-8 mx-auto text-center">
                <h5 class="text-white">Informējam, ka pasākuma laikā tiks fotografēts un filmēts. Apmeklējot pasākumu, Jūs piekrītat pasākuma laikā veiktajai fotografēšanai un filmēšanai, kā arī fotoattēlu un videomateriālu publiskai izmantošanai sabiedrisko attiecību vai reklāmas nolūkos LU Datorikas fakultātes un Datorikas fakultātes Studentu pašpārvaldes sociālajos medijos, tīmekļa vietnē internetā un citviet.
                </h5>
            </div>
            <div class="col-lg-2 text-white text-center mt-2 mb-2"><i class="fas fa-video fa-6x"></i></div>
        </div>
    </div>
</div>
<section class="bg-secondary text-white" id="pieteikties">
    <div class="container text-center">
        <h2 class="mb-4">Piesakies</h2>
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdP6RvrkfzgAHUr3n4Wcc6ew96lI3C8zOi6EWq57vzMZzcAuA/viewform?embedded=true" width="100%" height="1900" frameborder="0" marginheight="0" marginwidth="0">Notiek ielāde...</iframe>
        <h4 class="text-white pt-2">Mēs, Datorikas fakultātes Studentu pašpārvalde, apstrādāsim Tavus datus, lai informētu Tevi par pasākumu un jaunumiem, kas saistīti ar studiju uzsākšanu. Tavus datus mēs nenodosim trešajām personām. Ja Tev ir jautājumi, sazinies ar mums info@datoriki.lv.
        </h4>
    </div>
</section>
<section id="seko">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading">Seko Sējiena jaunumiem!</h2>
                <hr class="my-4">
                <p class="mb-5">Sējiena jaunumus un citu interesantu informāciju vari atrast mūsu sociālajos tīklos! Turpmāk noderīgu informāciju saņemsi e-pastā.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 ml-auto text-center">
                <a href = "https://www.facebook.com/ludfsp"><img src="images/facebook.svg" alt="facebook"></a>
                <a href = "https://www.facebook.com/ludfsp"><h5 class="mt-2">ludfsp</h5></a>
                <a href = "https://www.facebook.com/LUDatorikasfakultate"><h5 class="mt-2">LUDatorikasfakultate</h5></a>
            </div>
            <div class="col-lg-2 ml-auto text-center">
                <a href = "http://datoriki.lv/"><img src="images/home.svg" alt="datoriki"></a>
                <a href = "http://datoriki.lv/"><h5 class="mt-2">datoriki.lv</h5></a>
                <a href = "https://www.df.lu.lv/"><h5 class="mt-2">df.lu.lv</h5></a>
            </div>
            <div class="col-lg-2 ml-auto text-center">
                <a href = "https://www.instagram.com/datoriki/"><img src="images/instagram.svg" alt="event"></a>
                <a href = "https://www.instagram.com/datoriki/"><h5 class="mt-2">datoriki</h5></a>
            </div>
            <div class="col-lg-2 ml-auto text-center">
                <a href = "https://twitter.com/LU_Datorika"><img src="images/twitter.svg" alt="twitter"></a>
                <a href = "https://twitter.com/LU_Datorika"><h5 class="mt-2">@LU_Datorika</h5></a>
            </div>
            <div class="col-lg-2 ml-auto text-center">
                <a href = "https://www.facebook.com/events/1042669569229494/"><img src="images/event.svg" alt="event"></a>
                <a href = "https://www.facebook.com/events/1042669569229494/"><h5 class="mt-2">Sējiens 2018</h5></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mt-5">Jautājumi par Sējienu? <span class="text-primary text-weight-bold">Raksti uz sejiens@datoriki.lv</span></h2>
            </div>
        </div>
    </div>
</section>
<div id="footer" class="section-min bg-primary">
    <div class="container">
        <div id="sponsors" class="text-center">
            <div class="row">
                <div class="col-lg-2 mr-auto text-center">
                    <a href="https://www.accenture.com/lv-en/">
                        <img src="images/accenture_logo.svg" alt="Accenture">
                    </a>
                </div>
                <div class="col-lg-2 mr-auto text-center">
                    <a href="http://datoriki.lv/">
                        <img src="images/dfsp_logo.svg" alt="DF SP Logo">
                    </a>
                </div>
                <div class="col-lg-2 mr-auto text-center">
                    <a href="http://www.lu.lv/">
                        <img src="images/lu_logo.svg" alt="LU Logo">
                    </a>
                </div>
                <div class="col-lg-2 mr-auto text-center">
                    <a href="http://www.df.lu.lv/">
                        <img src="images/df_logo.svg" alt="DF Logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection