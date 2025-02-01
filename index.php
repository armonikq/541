<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/web-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <title>541n75</title>
</head>

<body>

    <div class="modals">
        <?php
        $firstCards = [
            ['type' => 'core', 'title' => 'CORE', 'description' => '541N75 is a new media collective where talented artists, creators and professionals come together around certain values and goals, jointly produce projects with high quality standards.'],
        ];

        foreach ($firstCards as $card) {  // $cards yerine $firstCards kullanılıyor
            $type =  $card['type'];
            $title = $card['title'];
            $description = $card['description'];
            $svgIcon = 'assets/core-iconcoreGlow.png';
            include "./components/modals/ModalOne.php";
        }
        ?>


        <?php
        $secondCards = [
            [
                'type' => 'management',
                'title' => 'MANAGEMENT',
                'description' => 'One of the most important steps of an artist or project is accurate and strategic career planning, effective management and ensuring continuity. 541N75 manages the career and project management of its members. It also provides management services to those in need within the industry.
            <br> <br> <br>
             Career Planning <br>
             Artist Branding <br> 
             Strategic Consultant'
            ],
        ];

        foreach ($secondCards as $card) {
            $type =  $card['type'];
            $title = $card['title'];
            $description = $card['description'];
            $image = '/assets/Group 1583iconPop.svg';
            include "./components/modals/ModalTwo.php";
        }
        ?>


        <?php

        $thirdCards = [
            [
                'type' => 'fair',
                'title' => 'Fair Sharing',
                'description' => 'One of the most essential issues for a sustainable system is the fair distribution of gain mechanisms among the stakeholders of this system. 541N75 aims first for its own union and then for a fair sharing mechanism for all sector stakeholders. That\'s exactly why our motto with which we describe ourselves is; “Take your rights.',
                'image' => '/assets/61.svg',
            ],
        ];

        $length = count($thirdCards);

        foreach ($thirdCards as $index => $card) {
            $type =  $card['type'];
            $title = $card['title'];
            $description = $card['description'];
            $image = $card['image'];

            $prevIndex = ($index - 1 + $length) % $length;
            $prevType = $thirdCards[$prevIndex]['type'];

            $nextIndex = ($index + 1) % $length;
            $nextType = $thirdCards[$nextIndex]['type'];
            $nextTitle = $thirdCards[$nextIndex]['title'];

            include "./components/modals/ModalThree.php";
        }
        ?>


        <?php
  
        $fourthCards = [
            [
                'type' => 'project-cart-1',
                'title' => 'EASTERN ROADS',
                'description' => 'Eastern Roads, Hicaz makamı ve armonik gam içeren, akor ve enstrüman çeşitliliği bakımından nadir; darbuka, düdük gibi enstrümanlarla Doğu ruhunu yakalarken, trap ve afro davullarla da Batı hissiyatını içeren komplike bir albüm. 17dk’lık kısa dinleme süresiyle, merkeziyetsiz yeni medya kolektifi 541N75’in ilk profesyonel projesi olan Eastern Roads’un Zeki Arkun imzalı Intro’sunda, Sezen Aksu, Tarkan, Ajda Pekkan gibi isimlerle yaptıkları işlerden tanıdığımız İstanbul Strings grubu yaylılarıyla eşlik ediyor. Ayrıca DEH parçasında Hakko ve KURKDJIAN parçasındaysa Aliyah, albümdeki diğer konuk isimler. Albüm, her sanatçının kendi hayatından gerçek anektodlar üstüne kurulu bir hikaye örgüsüne sahip. Zeki’nin Batı sanatına kafa tutan Doğu rüyası, KAAN’ın göndermeleri, Efe’nin aşkı, EGOM’un mükemmeliyetçiliği ve Berika’nın özlemi. Size 1 yıllık hikayelerini 17 dakikalık zengin bir duyumla anlatıyorlar. Eastern Roads’un kapak tasarımını, yakın zamanda Türkiye’nin en büyük yatırımlı müzik videosuyla karşımıza çıkacak olan 541N75 paydaşlarından Melik Arıcı üstlenirken, DEH müzik videosunda ise Emrah Tarım imzası bulunuyo',
                'images' => [
                    ['url' => 'assets/Projeler/EASTERN ROADS/ALBUM_COVER-min 2.jpg', 'banner' => true],
                    ['url' => 'assets/Projeler/EASTERN ROADS/01-min 2.jpg', 'banner' => false],
                    ['url' => 'assets/Projeler/EASTERN ROADS/14-min.jpg', 'banner' => false],
                    ['url' => 'assets/Projeler/EASTERN ROADS/Zone_EASTERNROADS_004-min.jpg', 'banner' => false],
                    ['url' => 'assets/Projeler/EASTERN ROADS/09-min.jpg', 'banner' => false],
                ],
                'badges' => [
                    ['id' => 'kaan', 'image' => 'assets/berk-yaman-tam.png', 'name' => 'KAAN', 'isArtist' => true],
                    ['id' => 'şems-efe', 'image' => 'assets/berk-yaman-tam.png', 'name' => 'Şems Efe', 'isArtist' => true],
                    ['id' => 'berika', 'image' => 'assets/berk-yaman-tam.png', 'name' => 'Berika', 'isArtist' => true],
                    ['id' => 'zeki-arkun', 'image' => NULL, 'name' => 'Zeki Arkun', 'isArtist' => true],
                    ['id' => 'egom', 'image' => NULL, 'name' => 'EGOM', 'isArtist' => false],
                    ['id' => 'aliyah', 'image' => NULL, 'name' => 'Aliyah', 'isArtist' => false],
                    ['id' => 'hakko', 'image' => NULL, 'name' => 'Hakko', 'isArtist' => false],
                    ['id' => 'istanbul-stringz', 'image' => NULL, 'name' => 'İstanbul Stringz', 'isArtist' => false],
                ],
                'socialLinks' => [
                    ['url' => 'https://open.spotify.com/intl-tr/album/1KfEXcfFkRyZ0OirKynrZj?si=UzssB0M_Q-q17-GDZ-OEUQ', 'icon' => 'assets/spotify.svg', 'alt' => 'Spotify'],
                    ['url' => 'https://music.apple.com/tr/album/eastern-roads/1644919312', 'icon' => 'assets/applemusic.svg', 'alt' => 'Apple Music'],
                    ['url' => 'https://www.youtube.com/watch?v=wQmYaErVzo0&amp;pp=ygUDREVI', 'icon' => 'assets/youtubemusic.svg', 'alt' => 'YouTube Music'],
                    ['url' => 'https://music.youtube.com/playlist?list=OLAK5uy_kTNJTyu569nfv0KaeJm59I3LBM94CWDTo&amp;feature=shared', 'icon' => 'assets/youtube.svg', 'alt' => 'YouTube'],
                ]
            ],
        ];

        $length = count($fourthCards);

        foreach ($fourthCards as $index => $card) {
            $type =  $card['type'];
            $title = $card['title'];
            $description = $card['description'];
            $images = $card['images'];
            $badges = $card['badges'];
            $socialLinks = $card['socialLinks'];

            $prevIndex = ($index - 1 + $length) % $length;
            $prevType = $fourthCards[$prevIndex]['type'];

            $nextIndex = ($index + 1) % $length;
            $nextType = $fourthCards[$nextIndex]['type'];

            include "./components/modals/ModalFour.php";
        }
        ?>

        <?php

        $fifthCards = [
            [
                'type' => 'kaan',
                'title' => 'BERK YAMAN',
                'description' => 'Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet consectetur adipisicing ebbbbbbb bbbbbbbbbbbbbbbbbbbbbbbb bbbbbbbbbbbbblit. Quia amet animi quo cumque? Quae totam deserunt repudiandae, ipsam exercitationem possimus fuga esse repellendus placeat temporibus commodi facere, doloribus quidem. Ipsam. Itaque consequatur iste earum soluta suscipit, reprehenderit cupiditate? Esse, ipsa quis. Ab animi laborum, natus velit optio ea quam suscipit, mollitia incidunt accusamus cum illo, modi dicta? Non, labore enim!',
                'tags' => ['Co-Founder', 'Head-of-Strategy', 'Spokesperson'],
                'image' => 'assets/berk-yaman-tam.png',
                'socialLinks' => [
                    ['type' => 'linkedin', 'url' => 'https://open.spotify.com/intl-tr/album/1KfEXcfFkRyZ0OirKynrZj?si=UzssB0M_Q-q17-GDZ-OEUQ'],
                    ['type' => 'instagram', 'url' => 'https://music.apple.com/tr/album/eastern-roads/1644919312'],
                    ['type' => 'twitter', 'url' => 'https://www.youtube.com/watch?v=wQmYaErVzo0&amp;pp=ygUDREVI'],
                    ['type' => 'spotify', 'url' => 'https://music.youtube.com/playlist?list=OLAK5uy_kTNJTyu569nfv0KaeJm59I3LBM94CWDTo&amp;feature=shared'],
                ],
            ],
        ];

        $length = count($fifthCards);

        foreach ($fifthCards as $index => $card) {
            $type =  $card['type'];
            $title = $card['title'];
            $description = $card['description'];
            $image = $card['image'];
            $socialLinks = $card['socialLinks'];
            $tags = $card['tags'];

            $prevIndex = ($index - 1 + $length) % $length;
            $prevType = $fifthCards[$prevIndex]['type'];

            $nextIndex = ($index + 1) % $length;
            $nextType = $fifthCards[$nextIndex]['type'];

            include "./components/modals/ModalFifth.php";
        }
        ?>
    </div>
    <div class="page-wrapper">
        <?php include "./components/Header.php" ?>
        <?php include "./components/Slider.php" ?>
        <?php include "./components/sections/Sections.php" ?>
        <?php include "./components/Footer.php" ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="./script/index.js"></script>
</body>

</html>