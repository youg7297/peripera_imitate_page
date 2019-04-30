<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head lang="ko">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>페리페라</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/title-icon.jpg" />
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic|Roboto" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="app.js"></script>
</head>
<body style="overflow-x: hidden;">
    <div class="mask"></div>
    <div class="popup-video">
        <input type="button" class="close">
        <iframe width="900" height="500"
        src="https://www.youtube.com/embed/E-forWX5ZHY" 
        frameborder="0" allow="autoplay; encrypted-media" 
        allowfullscreen></iframe>
    </div>
    <header>
        <section class="util-bar">
            <div class="util-con">
                <div class="brand-menu">
                    <ul>
                        <li><a href="#">KOR</a></li>
                        <li><a href="#">ENG</a></li>
                        <li><a href="#">CHN</a></li>
                    </ul>
                </div>
                <div class="util-menu">
                    <ul>
                        <li>
                        <?php if(!$login): ?>
                        <a href="login.php">로그인</a>
                        <?php else: ?>
                        <a href="logout.php">로그아웃</a>
                        <?php endif;?>
                        </li>
                        <li>
                        <?php if(!$login): ?>
                        <a href="join.php">회원가입</a>
                        <?php else: ?>
                        <a href="#">내 정보</a>
                        <?php endif;?>
                        </li>
                        <li><a href="#">매장안내</a></li>
                        <li><a href="#">채용정보</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="top-area-wrap">
            <div class="top-area">
                <form class="form">
                    <input type="text" placeholder="검색어를 입력해주세요" class="search-input">
                    <button type="button" class="search-btn"><img src="img/mb_srch_btn.png" alt="srch"></button>
                </form>
                <a href="index.php">
                <h2 class="top-area-h2">
                    <div class="main-logo-box"></div>
                </h2>
                </a>
            </div>
        </section>
    </header>

    <section class="gnb-area">
        <div class="gnb-list">
            <ul>
                <li><a href="#">브랜드</a></li>
                <li><a href="#">제품</a></li>
                <li><a href="#">미디어</a></li>
                <li><a href="#">뷰티팁</a></li>
                <li><a href="board.php">커뮤니티</a></li>
                <li><a href="#">이벤트</a></li>
            </ul>
        </div>
        <div class="gnb-sub-area">
            <div class="colum">
                <ul>
                    <li><a href="index.php">페리페라 이야기</a></li>
                    <li><a href="index.php">매장소개</a></li>
                    <li><a href="index.php">(주)클리오 회사소개</a></li>
                </ul>
            </div>
            <div class="colum">
                <ul>
                    <li><a href="index.php">NEW 신제품</a></li>
                    <li><a href="index.php">BEST 인기템</a></li>
                    <li><a href="index.php">유형별</a></li>
                    <li><a href="index.php">라인별</a></li>
                    <li><a href="index.php">리미티드 에디션</a></li>
                </ul>
            </div>
            <div class="colum">
                <ul>
                    <li><a href="index.php">영상</a></li>
                    <li><a href="index.php">잡지</a></li>
                </ul>
            </div>
            <div class="colum">
                <ul>
                    <li><a href="index.php">모델 룩</a></li>
                    <li><a href="index.php">트렌드 페리크업</a></li>
                </ul>
            </div>
            <div class="colum">
                <ul>
                    <li><a href="index.php">페리뉴스</a></li>
                    <li><a href="index.php">포토리뷰</a></li>
                    <li><a href="index.php">서포터즈</a></li>
                    <li><a href="index.php">SNS</a></li>
                </ul>
            </div>
            <div class="colum">
                <ul>
                    <li><a href="index.php">진행중 이벤트</a></li>
                    <li><a href="index.php">당첨자 발표</a></li>
                    <li><a href="index.php">출첵! 내일 또 와요</a></li>
                </ul>
            </div>
        </div>
    </section>