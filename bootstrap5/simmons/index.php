<?php
include_once './_common.php';
include_once G5_LIB_PATH . '/latest.lib.php';
?>

<!doctype html>
<html lang="ko">
    <head>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KPZM9BW');</script>
        <!-- End Google Tag Manager -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php if ($config['cf_add_meta']) {
            echo $config['cf_add_meta'] . PHP_EOL;
        } ?>
        <title>박홍민_PWA프론트엔드 6개월과정</title>
        <link rel="shortcut icon" href="/bootstrap5/simmons/images/simmonsimg/favicon.ico">
    
        <!-- CSS FILES -->
        <link rel="preconnect" href="//fonts.googleapis.com">
        <link rel="preconnect" href="//fonts.gstatic.com" crossorigin>
        <link href="/bootstrap5/simmons/css/bootstrap.min.css" rel="stylesheet">
        <link href="/bootstrap5/simmons/css/bootstrap-icons.css" rel="stylesheet">
        <link href="/bootstrap5/simmons/css/aos.css" rel="stylesheet">
        <link href="/bootstrap5/simmons/css/templatemo-nomad-force.css?ver=<?php echo time(); ?>" rel="stylesheet">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@400;600&family=Josefin+Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"> 
        
        <link rel="stylesheet" href="/bootstrap5/simmons/fonts/font.css?ver=<?php echo time(); ?>">
        <link rel="stylesheet" href="/bootstrap5/simmons/css/button.css?ver=<?php echo time(); ?>">
        <link rel="stylesheet" href="/bootstrap5/simmons/css/index.css?ver=<?php echo time(); ?>">
    </head>

    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KPZM9BW"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    <main>
        <style>
            /* .w-btn-black, .w-btn-pink{ margin-right: 0}
            
            #hero{ height: 0;  transition:height 0.5s;}
            #hero.open{ height:100vh; }
            .navbar-expand-lg .navbar-nav .nav-link{
                font-weight: 400;
                font-family: 'Josefin Slab', serif;}
            .navbar-light .navbar-nav .nav-link.active {
                color: red;
            }
            .anibelowtitle{
                font-weight: 400;
    font-family: 'Cormorant', serif;
            }
            
            #about ul{ margin-bottom:0; padding: 0; list-style: none;}
            h2.anibelowtitle{  }
            h2.anibelowtitle li{ font-size:0.5em; 
                letter-spacing: 2em;
padding-left: 2em;
line-height: 2.5; display:inline-block; border-bottom:1px solid #222}
            h3.anibelowtitle li{font-size:0.5em; }
            .collection li { line-height:1}
            .w-btn:hover{ transform: scale(1)}
            .indecate_brand > button.act{ border-bottom:0; position:relative;}
            .indecate_brand > button:after{ 
                content: "";
    position: absolute;
    display: block;
    height: 1px;
    background-color: #222;
    width: 0;
    left: 0;
    transition: width 0.5s;
    margin-top: 8px;
            }
            .indecate_brand > button.act:after{ width:100%;} */
            @media (min-width: 1px) and (max-width: 1089px) {
                .hero{
                    display:none;
                }
            }
        </style>
        <section class="hero timeout open" id="hero">
            <div class="videoWrapper ">                
                <?php echo latest('mainbanner', 'mainbanner', 1, 100); ?>
            </div>
        </section>

        <nav class="navbar navbar-expand-lg  bg-light shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="/bootstrap5/simmons/">
                    <img src="/bootstrap5/simmons/images/simmonsimg/header_logo.png">
                   
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

        <div class="collapse navbar-collapse" id="navbarNav">           
            <ul class="navbar-nav mx-auto bkant navbar-light">
                <?php
                $menu_datas = get_menu_db(0, true);
                $i = 0;
                foreach ($menu_datas as $row) {

                    if (empty($row)) {
                        continue;
                    }
                    $add_class =
                        isset($row['sub']) && $row['sub']
                            ? 'gnb_al_li_plus'
                            : '';
                    ?>
                <li class="nav-item <?php echo $add_class; ?>" style="z-index:<?php echo $gnb_zindex--; ?>">
                        <a href="<?php echo $row[
                            'me_link'
                        ]; ?>" target="_<?php echo $row[
                        'me_target'
                        ]; ?>" class="nav-link"><?php echo $row['me_name']; ?></a>
                            <?php
                            $k = 0;
                            foreach ((array) $row['sub'] as $row2) {

                                if (empty($row2)) {
                                    continue;
                                }
                                if ($k == 0);
                                ?>
                            <?php
                            }
                            ?>
                </li>
                        <?php
                }
                ?>
                    </ul>
                </div>
            </div>
        </nav>           
<!-- //////////////////////////////////////////////////////////////////////////////////////////// -->
        <section class="section-paddingmain pb-0" id="about">
            <div class="container mb-3 pb-lg-1">
                <div class="row text-center bkant">
                    <div class="col-12">
                        <h1 class="anibelowtitle" data-aos="fade-up" data-aos-once='true'> <?php echo latest(
                            'collection',
                            'collection',
                            1,
                            10
                        ); ?>
                        </h1>
                    </div>

                    <div class="col-12">
                        <h2 class="anibelowtitle" data-aos="fade-up"  data-aos-once='true'><?php echo latest(
                            'collection',
                            'collection1',
                            1,
                            10
                        ); ?>
                        </h2>
                        <h3 class="anibelowtitle" data-aos="fade-up" data-aos-delay="500"  data-aos-once='true'><?php echo latest(
                            'collection',
                            'collection2',
                            1,
                            10
                        ); ?>
                        </h3>
                    </div>

                   
                </div>
<!-- ////////////////////////////슬라이드 버튼/////////////////////////////////// -->
                <div class="text-center indecate_brand">
                    <button class="w-btn w-btn-black act" type="button">
                        <img  class="bklogo" src="/bootstrap5/simmons/images/simmonsimg/BK/BK-logo22.svg" alt="" >
                    </button>
                    <button class="w-btn w-btn-pink" type="button">
                        <img class="brlogo" src="/bootstrap5/simmons/images/simmonsimg/BR/BR-logo22.svg" alt="">
                    </button>
                    <button class="w-btn w-btn-indigo" type="button">
                        <img src="/bootstrap5/simmons/images/simmonsimg/N32/logo30.png" alt="">
                    </button>
                    <button class="w-btn w-btn-green" type="button">
                        <img src="/bootstrap5/simmons/images/simmonsimg/KENOSHA/logo50.png" alt="">
                    </button>
                </div>
            </div>
<!-- /////////////////////////////////////1번 슬라이드///////////////////////////////////////////////////// -->
            <div class="viewBrand">    
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-12 p-0">      
                            <img src="/bootstrap5/simmons/images/simmonsimg/BK/blackcollection.jpg" class="img-fluid about-image" alt="">
                        </div>

                        <div class="col-lg-3 col-12 bg-dark">  
                            <div class="d-flex flex-column flex-wrap justify-content-center h-100 py-5 px-4 pt-lg-4 pb-lg-0">
                                <h3 class="text-white mb-3 custom-link bkant text-center" data-aos="fade-up"><img src="/bootstrap5/simmons/images/simmonsimg/BK/BK-logo10.png" alt=""></h3>
                                <p class="text-secondary-white-color nanum " data-aos="fade-up">시몬스의 고집스러운 장인정신과 독보적인 매트리스 설계 노하우의 집약체</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 p-0">  
                            <section id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="/bootstrap5/simmons/images/simmonsimg/BK/BK-Kelly.jpg" class="img-fluid team-image" alt="">
                                        <div class="team-thumb bgback">
                                            <h3 class="text-white mb-0 calnanum">Kelly.</h3>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="/bootstrap5/simmons/images/simmonsimg/BK/BK-Deborah.jpg" class="img-fluid team-image" alt="">
                                        <div class="team-thumb bgback">
                                            <h3 class="text-white mb-0 calnanum">Deborah.</h3>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="/bootstrap5/simmons/images/simmonsimg/BK/BK-Marion.jpg" class="img-fluid team-image" alt="">
                                        <div class="team-thumb bgback">
                                            <h3 class="text-white mb-0 calnanum">Marion.</h3>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="/bootstrap5/simmons/images/simmonsimg/BK/BK-Lucile.jpg" class="img-fluid team-image" alt="">
                                        <div class="team-thumb bgback">
                                            <h3 class="text-white mb-0 calnanum">Lucile.</h3>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="/bootstrap5/simmons/images/simmonsimg/BK/BK-Brigitte.jpg" class="img-fluid team-image" alt="">
                                        <div class="team-thumb bgback">
                                            <h3 class="text-white mb-0 calnanum">Brigitte.</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="smimg">
                                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>

                                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
<!-- /////////////////////////////////////2번 슬라이드////////////////////////////////////////////////////// -->
                <div class="container-fluid d-none">
                    <div class="row">
                        <div class="col-lg-3 col-12 p-0">      
                            <img src="/bootstrap5/simmons//images/simmonsimg/BR/br_collection.jpg" class="img-fluid about-image" alt="">
                        </div>
        
                        <div class="col-lg-3 col-12 bg-dark">  
                            <div class="d-flex flex-column flex-wrap justify-content-center h-100 py-5 px-4 pt-lg-4 pb-lg-0">
                                <h3 class="text-white mb-3 custom-link bkant text-center" data-aos="fade-up"><img src="/bootstrap5/simmons/images/simmonsimg/BR/logo21.png" alt=""></h3>
                                <p class="text-secondary-white-color nanum" data-aos="fade-up">시몬스만의 독자적인 기술로 완성된 포켓스프링 흔들리지 않는 편안함 그아름다운 휴식 BEAUTYREST</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 p-0">  
                            <section id="myCarousel1" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="/bootstrap5/simmons/images/simmonsimg/BR/BR-Zalmon.jpg" class="img-fluid team-image" alt="">
                                        <div class="team-thumb bgback">
                                            <h3 class="text-white mb-0 calnanum">Zalmon.</h3>
                                        </div>
                                    </div>
        
                                    <div class="carousel-item">
                                        <img src="/bootstrap5/simmons/images/simmonsimg/BR/BR-Edison.jpg" class="img-fluid team-image" alt="">
                                        <div class="team-thumb bgback">
                                            <h3 class="text-white mb-0 calnanum">Edison.</h3>
                                        </div>
                                    </div>
        
                                    <div class="carousel-item">
                                        <img src="/bootstrap5/simmons/images/simmonsimg/BR/BR-Helen.jpg" class="img-fluid team-image" alt="">
                                        <div class="team-thumb bgback">
                                            <h3 class="text-white mb-0 calnanum">Helen.</h3>
                                        </div>
                                    </div>
        
                                    <div class="carousel-item">
                                        <img src="/bootstrap5/simmons/images/simmonsimg/BR/BR-William.jpg" class="img-fluid team-image" alt="">
                                        <div class="team-thumb bgback">
                                            <h3 class="text-white mb-0 calnanum">William.</h3>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="/bootstrap5/simmons/images/simmonsimg/BR/BR-Henry.jpg" class="img-fluid team-image" alt="">
                                        <div class="team-thumb bgback">
                                            <h3 class="text-white mb-0 calnanum">Henry.</h3>  
                                        </div>
                                    </div>
                                </div>

                                <div class="smimg">
                                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel1" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
        
                                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel1" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>  
<!--//////////////////////////////////////3번 슬라이드//////////////////////////////////////////////////////// -->
                <div class="container-fluid d-none">
                    <div class="row">
                        <div class="col-lg-3 col-12 p-0">      
                            <img src="/bootstrap5/simmons/images/simmonsimg/N32/N32-collection2.jpg" class="img-fluid about-image" alt="">
                        </div>
                        <div class="col-lg-3 col-12 bg-dark">  
                            <div class="d-flex flex-column flex-wrap justify-content-center h-100 py-5 px-4 pt-lg-4 pb-lg-0">
                                <h3 class="text-white mb-3 custom-link bkant text-center" data-aos="fade-up"><img src="/bootstrap5/simmons/images/simmonsimg/N32/logo31.png" alt=""></h3>        
                                <p class="text-secondary-white-color nanum" data-aos="fade-up">'N32'는 시몬스에서 출시한 컨템포러리 매트리스 컬렉션입니다. 8시간의 숙면이 하루 24시간을 바꾸고, 나아가 긍정적인 에너지까지 선사할 수 있다는 스토리를 담아 일상에 편안함을 선사합니다.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 p-0">  
                            <section id="myCarousel2" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="/bootstrap5/simmons/images/simmonsimg/N32/N32-Topper1.jpg" class="img-fluid team-image" alt="">
                                        <div class="team-thumb bgback">
                                            <h3 class="text-white mb-0 calnanum">Topper Mattress.</h3>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/bootstrap5/simmons/images/simmonsimg/N32/N32-check1.jpg" class="img-fluid team-image" alt="">
                                        <div class="team-thumb bgback">
                                            <h3 class="text-white mb-0 calnanum">Check Sleeve.</h3>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/bootstrap5/simmons/images/simmonsimg/N32/N32-StripeSleeve.jpg" class="img-fluid team-image" alt="">
                                        <div class="team-thumb bgback">
                                            <h3 class="text-white mb-0 calnanum">Stripe Sleeve.</h3>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/bootstrap5/simmons/images/simmonsimg/N32/N32-waterproof1.jpg" class="img-fluid team-image" alt="">
                                        <div class="team-thumb bgback">
                                            <h3 class="text-white mb-0 calnanum">Waterproof Sleeve.</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="smimg">
                                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel2" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
        
                                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel2" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
<!-- /////////////////////////////////////4번 슬라이드///////////////////////////////////////////////////////// -->
                <div class="container-fluid d-none">
                    <div class="row">
                        <div class="col-lg-3 col-12 p-0">      
                            <img src="/bootstrap5/simmons/images/simmonsimg/KENOSHA/KENOSHA_furniture.jpg" class="img-fluid about-image" alt="">
                        </div>
                        <div class="col-lg-3 col-12 bg-dark">  
                            <div class="d-flex flex-column flex-wrap justify-content-center h-100 py-5 px-4 pt-lg-4 pb-lg-0">
                                <h3 class="text-white mb-3 custom-link bkant text-center" data-aos="fade-up"><img  class="kenimg" src="/bootstrap5/simmons/images/simmonsimg/KENOSHA/logo51.png" alt=""></h3>
                                <p class="text-secondary-white-color nanum" data-aos="fade-up">'KENOSHA'는 미국의 도시로 가구가 발달하여 그 지역의 가구는 명품이라고 불려왔다. 그들만의 색감과 디자인 뿐만 아닌 편안함을 잡은 우리들만의 가구 KENOSHA가 선사합니다.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 p-0">  
                            <section id="myCarousel3" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="/bootstrap5/simmons/images/simmonsimg/KENOSHA/KENOSHA-Artney.jpg" class="img-fluid team-image" alt="">
                                        <div class="team-thumb bgback">
                                            <h3 class="text-white mb-0 calnanum">Artney.</h3>
                                        </div>
                                    </div>
        
                                    <div class="carousel-item">
                                        <img src="/bootstrap5/simmons/images/simmonsimg/KENOSHA/KENOSHA-KunsemullerDualZoneGoosePillow4.jpg" class="img-fluid team-image" alt="">
                                        <div class="team-thumb bgback">
                                            <h3 class="text-white mb-0 calnanum">GoosePillow.</h3>
                                        </div>
                                    </div>
        
                                    <div class="carousel-item">
                                        <img src="/bootstrap5/simmons/images/simmonsimg/KENOSHA/KENOSHA-Merte.jpg" class="img-fluid team-image" alt="">
                                        <div class="team-thumb bgback">
                                            <h3 class="text-white mb-0 calnanum">Merte.</h3>
                                        </div>
                                    </div>
        
                                    <div class="carousel-item">
                                        <img src="/bootstrap5/simmons/images/simmonsimg/KENOSHA/KENOSHA-Lustic.jpg" class="img-fluid team-image" alt="">
                                        <div class="team-thumb bgback">
                                            <h3 class="text-white mb-0 calnanum">Lustic.</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="smimg">
                                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel3" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>        
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel3" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- ///////////////////////////////히스토리 부분/////////////////////////////////////// -->
        <section class="page-section" id="history">
            <div class="container">
                <div class="text-center">
                    <p class="antp-medium h2text">The History of SIMMONS Signifies</br>
                        The History of All Beds</p>
                    <p class="nanum h3text">시몬스의 역사가 세계 침대의 역사입니다</p>
                    <div class="con"></div>    
                </div>
                <?php echo latest('aso_pic', 'Introduction', 4, 500); ?>
            </div>
<!-- //////////////////////////////뉴스 페이퍼///////////////////////////////////////// -->
            <div class="container news">
                <ul>
                    <li class="text-center row justify-content-around">
                        <div class="col-md-2 mousein1">
                            <img src="/bootstrap5/simmons/images/simmonsimg/History/history_paper1.jpg" alt="" />
                            <img src="/bootstrap5/simmons/images/simmonsimg/History/history_paper1_on.jpg" class="big" alt="" />
                            <p class="newsnanum">
                                <b>발명가<br /> 토마스 에디슨</b><br>
                                (Thomas A. Edison)
                            </p>
                        </div>
                        <div class="col-md-2 mousein2">
                            <img src="/bootstrap5/simmons/images/simmonsimg/History/history_paper2.jpg" alt="" />
                            <img src="/bootstrap5/simmons/images/simmonsimg/History/history_paper2_on.jpg" class="big" alt="" />
                            <p class="newsnanum">
                                <b>포드 자동차 창업자 <br />헨리 포드</b><br>
                                (Henry Ford)
                            </p>
                        </div>
                        <div class="col-md-2 mousein3">
                            <img src="/bootstrap5/simmons/images/simmonsimg/History/history_paper3.jpg" alt="" />
                            <img src="/bootstrap5/simmons/images/simmonsimg/History/history_paper3_on.jpg" class="big" alt="" />
                            <p class="newsnanum">
                                <b>극작가<br />조지 버나드 쇼</b><br>
                                (George Bernard Shaw)
                            </p>
                        </div>
                        <div class="col-md-2 mousein4">
                            <img src="/bootstrap5/simmons/images/simmonsimg/History/history_paper4.jpg" alt="" />
                            <img src="/bootstrap5/simmons/images/simmonsimg/History/history_paper4_on.jpg" class="big" alt="" />
                            <p class="newsnanum">
                                <b>무선통신 발명가<br />굴리엘모 마르코니</b><br>
                                (Guglielmo Marconi)
                            </p>
                        </div>
                        <div class="col-md-2 mousein5">
                            <img src="/bootstrap5/simmons/images/simmonsimg/History/history_paper5.jpg" alt="" />
                            <img src="/bootstrap5/simmons/images/simmonsimg/History/history_paper5_on.jpg" class="big" alt="" />
                            <p class="newsnanum">
                                <b>퍼스트레이디<br />애나 엘리너 루즈벨트</b><br>
                                (Anna Eleanor Roosevelt)
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
            <section class="section-padding" id="galleryimg">
                <img  class="gallerymain" src="/bootstrap5/simmons/images/simmonsimg/gallery/main.png" alt="">
                <div class="container ">
                    <div class="row">
 <!-- //////////////////////////////////////1///////////////////////////////////////////// -->
                        <div class="col-lg-6 col-12">
                            <div class="portfolio-thumb mb-0 " data-aos="fade-up">
                                <?php echo latest(
                                    'galleryimg',
                                    'galleryimg1',
                                    1,
                                    100
                                ); ?> 
                            </div>
<!-- ////////////////////////////////////////////2///////////////////////////////////////////////////// -->
                            <div class="portfolio-thumb mb-0 " data-aos="fade-up">
                                <?php echo latest(
                                    'galleryimg2',
                                    'galleryimg2',
                                    1,
                                    100
                                ); ?>
                            </div>
<!-- /////////////////////////////////////////////3///////////////////////////////////////////////// -->
                            <div class="portfolio-thumb mb-0 " data-aos="fade-up">
                                <?php echo latest(
                                    'galleryimg',
                                    'galleryimg3',
                                    1,
                                    100
                                ); ?>
                            </div>
                        </div>
<!-- ////////////////////////////////////////4//////////////////////////////////////////// -->
                        <div class="col-lg-6 col-12">
                            <div class="portfolio-thumb mb-0 mli-4" data-aos="fade-up">
                                <?php echo latest(
                                    'galleryimg',
                                    'galleryimg4',
                                    1,
                                    100
                                ); ?>
                            </div>
                        </div>
<!-- ///////////////////////////////////5///////////////////////////////////////////// -->
                        <div class="col-12">
                            <div class="portfolio-thumb mb-0 " data-aos="fade-up">
                                <?php echo latest(
                                    'galleryimg',
                                    'galleryimg5',
                                    1,
                                    100
                                ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<!-- //////////////////////////////////////////이벤트 페이지///////////////////////////////////////////////// -->
            <section class="news section-paddingevent" id="event">
                <div class="container eventimg">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="mb-5 text-center bkant " data-aos="fade-up">EVENT</h1>
                        </div>

                        <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                            <div class="news-thumb" data-aos="fade-up">
                                <a href="news-detail.html" class="news-image-hover news-image-hover-warning">
                                    <?php echo latest(
                                        'galleryimg2',
                                        'event1',
                                        1,
                                        100
                                    ); ?>
                                </a>
                            </div>

                            <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                                <div class="news-top w-100" data-aos="fade-up">
                                    <a href="news-detail.html" class="news-image-hover news-image-hover-success">
                                        <?php echo latest(
                                            'galleryimg2',
                                            'event2',
                                            1,
                                            100
                                        ); ?>
                                    </a>
                                </div>
                            </div> 
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                                <div class="news-top w-100">
                                    <a href="news-detail.html" class="news-image-hover news-image-hover-primary">
                                        <?php echo latest(
                                            'galleryimg2',
                                            'event3',
                                            1,
                                            100
                                        ); ?>
                                    </a>
                                </div>
                            </div> 
                        </div>

                    </div>
                </div>
            </section>
        </main>
<!-- ////////////////////////////////////////footer///////////////////////////////////////////////////////// -->
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h5 class="text-white">
                            <i class=" me-2"></i>
                            Design : 박홍민
                        </h5>

                        <a href="mailto:info@company.com" class="custom-link mt-3 mb-5">
                            h.p : 010-2162-2664<br>
                            Eamil : ghdals2655@naver.com
                        </a>
                    </div>

                    <div class="col-6">
                        <p class="copyright-text mb-0">제작 일자 : 2022.02.13 ~ 2022.02.18 (총제작일:6일)<br>
                        <a href="https://themewagon.com/" target="_blank"><h4>부트스트랩 5를 이용한 페이지 제작</h4></a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-5 ms-auto">
                        <ul class="social-icon">
                            <li><a href="#" class="social-icon-link bi-facebook"></a></li>
                            <li><a href="#" class="social-icon-link bi-twitter"></a></li>
                            <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>
                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>
                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
<!-- //////////////////////////////////////퀵버튼////////////////////////////////////////////////// -->
        <div class='qbutton'>
        <a href="https://www.simmons.co.kr/onlinestore/mattress" class="storebutton" target="_blank">온라인스토어</a>
        <a href="#" class="buttonTop">맨위로</a>
        </div>

        <!-- JAVASCRIPT FILES -->
        <script src="/bootstrap5/simmons/js/jquery2.2.3.min.js"></script>
        <!-- <script src="/bootstrap5/simmons/js/jquery.min.js"></script> -->
        <script src="/bootstrap5/simmons/js/bootstrap.bundle.min.js"></script>
        <script src="/bootstrap5/simmons/js/jquery.sticky.js"></script>
        <script src="/bootstrap5/simmons/js/aos.js"></script>
        <!-- <script src="/bootstrap5/simmons/js/jquery.magnific-popup.min.js"></script> -->
        <!-- <script src="/bootstrap5/simmons/js/magnific-popup-options.js"></script> -->
        <script src="/bootstrap5/simmons/js/scrollspy.min.js"></script>
        <script src="/bootstrap5/simmons/js/custom.js?ver=<?php echo time(); ?>"></script>
        
        

    </body>
</html>