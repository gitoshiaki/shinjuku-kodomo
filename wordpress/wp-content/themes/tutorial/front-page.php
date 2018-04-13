<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title> <!-- 管理画面から設定するサイトタイトルが表示される -->
        <!-- css読み込み -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css" type="text/css" media="screen" /> <!-- 先程作成したスタイルシートをインクルード -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/top.css" type="text/css" media="screen" /> 
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/menubar.css" type="text/css" media="screen" /> 
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick.css" type="text/css" media="screen" /> 
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick-theme.css" type="text/css" media="screen" /> 
        <!-- ビューポートの設定 -->
        <meta name="viewport" content="width=device-width,initial-scale=1"> 
        <!-- jqueryの設定  -->
        <?php wp_deregister_script('jquery'); ?>
	<?php wp_deregister_script('jquery-ui-core'); ?>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>

    <!-- jsファイル読み込み -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/top.js"></script>

        <?php wp_head(); ?> <!-- 各種Wordpressスクリプトをインクルード -->
    </head>
  <body>
  <div id="wrapper">

        <div id="top_wrapper">

        <!-- menubar -->
            <div class = "menubar">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top-pic2.png" class = "toppic2">
            <div class = "menu-navi">
            <div class = "navi-left">
            <a href = "http://localhost:8888/wordpress/%E9%81%8E%E5%8E%BB%E3%81%AE%E6%B4%BB%E5%8B%95"><div class = "nl-content1 nlc">
            <img src="<?php echo get_template_directory_uri(); ?>/img/m-icon1.png" class = "m-icon">
            <p class = "m-title">過去の活動</p>
            <p class = "m-sub">LAST ACTIVITY</p>
            </div></a>
            <a href = "http://localhost:8888/wordpress/%E3%83%95%E3%83%AD%E3%83%B3%E3%83%88%E3%83%9A%E3%83%BC%E3%82%B8/event/"><div class = "nl-content2 nlc">
            <img src="<?php echo get_template_directory_uri(); ?>/img/m-icon2.png" class = "m-icon">
            <p class = "m-title">今後の活動</p>
            <p class = "m-sub">NEXT ACTIVITY</p>
            </div></a>
            </div>

            <div class = "navi-right">
            <a href = "#"><div class = "nl-content3 nlcr">
            <img src="<?php echo get_template_directory_uri(); ?>/img/m-icon3.png" class = "m-icon">
            <p class = "m-title m-bam">入会について</p>
            <p class = "m-sub m-bam">BECOME A MEMBER</p>
            </div></a>

            <a href = "http://localhost:8888/wordpress/qna/"><div class = "nl-content4 nlcr">
            <img src="<?php echo get_template_directory_uri(); ?>/img/m-icon4.png" class = "m-icon">
            <p class = "m-title m-bam">よくある質問</p>
            <p class = "m-sub m-bam">QUESTION</p>
            </div></a>

            <a href = "#"><div class = "nl-content5 nlcr">
            <img src="<?php echo get_template_directory_uri(); ?>/img/m-icon5.png" class = "m-icon">
            <p class = "m-title m-bam">お問い合わせ</p>
            <p class = "m-sub m-bam">ACCESS</p>
            </div></a>
            </div>
            
            </div>
       </div>    <!-- end of menubar -->
              <!-- スライドショー -->
<div class="slider slideshow">
    <div><img src="<?php echo get_template_directory_uri(); ?>/img/top_photo1.png" class = "SlidePhoto"></div>
    <div><img src="<?php echo get_template_directory_uri(); ?>/img/top_photo2.jpg" class = "SlidePhoto"></div>
    <div><img src="<?php echo get_template_directory_uri(); ?>/img/top_photo4.jpg" class = "SlidePhoto"></div>
</div>
       <img src="<?php echo get_template_directory_uri(); ?>/img/top-img.png" class = "toppic1">
       <div class = "main-copy">
       <p>子どもたちに、<br>とびきりの笑顔を。</p>
</div>
       
            <!--メニュバー-->
    <!--   <ul id="header">
                <li><a href=""><img src="img/navi_item_next.png" alt=""></a></li>
                <li><a href=""><img src="img/navi_item_previous.png" alt=""></a></li>
                <li><a href=""><img src="img/navi_item_entry.png" alt=""></a></li>
                <li><a href=""><img src="img/navi_item_q&a.png" alt=""></a></li>
                <li><a href=""><img src="img/navi_item_contact.png" alt=""></a></li>
            </ul>
    -->
    <div class = "top-btn limg">
    <img src="<?php echo get_template_directory_uri(); ?>/img/cloud-btn.png" class = "cbtn">
    <h2 class = "lfont">活動の予約はこちら</h2>
    </div>
    <div class = "top-btn rimg">
    <img src="<?php echo get_template_directory_uri(); ?>/img/cloud-btn.png" class = "cbtn">
    <h2 class = "rfont">入会申し込みはこちら</h2>
    </div>
        </div>
        <section id = "news-wrapper">
            <div class = "n-container">
         <div class = "n-container1">
         <div class = "kng-container">
         <img src="<?php echo get_template_directory_uri(); ?>/img/kng_icon.png" class = "kng_icon">
         <div class = "kng-container1">
         <img src="<?php echo get_template_directory_uri(); ?>/img/kng_icon1.png" class = "kng_icon1">
         <a href="http://localhost:8888/wordpress/%E3%83%95%E3%83%AD%E3%83%B3%E3%83%88%E3%83%9A%E3%83%BC%E3%82%B8/event/" class="btn1 detail-entry1">
        <div class = "d-btn">
        その他今後の活動はこちら<img src="<?php echo get_template_directory_uri(); ?>/images/d-icon.png" class = "d-icon1">
        </div>
        </a>
         </div>
         </div>
         </div>
         <div class = "n-container2">
             <div class = "fb-contents">
              <div class="fb-container">
              <img src="<?php echo get_template_directory_uri(); ?>/img/fb-icon1.png" class = "fb-icon1">
              <div class="fb-page" data-href="https://www.facebook.com/Shinjuku-Kodomogekijo-229631807082262/" data-tabs="timeline" data-width="480" data-height="550" data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Shinjuku-Kodomogekijo-229631807082262/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Shinjuku-Kodomogekijo-229631807082262/">Shinjuku Kodomogekijo</a></blockquote></div>
              </div>
             </div>
         </div>
</div>
        </section>


        <section id="about-wrapper">
            <div id="about" class="container">
                <div class="about-content">
                    <h1>新宿子ども劇場とは</h1>
                
                    <h2>すべての子どもたちに文化体験を</h2>
                    <p>新宿子ども劇場は1975年に新宿の地に誕生し、<br>
                    2005年にはNPO法人になり活動の幅も広がりました。<br>
                    私たちは、文化ゆたかな環境で育まれる感性が、<br>
                    子どもたちの生きる力につながると考えています。<br>
                    </p>
                </div>

            </div>
        </section>

        <section id="activity-wrapper">
            <div class="container" id="activity-wrapper-inner">
                <h1 class="heading">活動について</h1>
            
            
            <div id="activities">
            <img src="<?php echo get_template_directory_uri(); ?>/img/rocket.png" class ="acrkt">
                <div class="activity">
                    <div class="activity-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/activity-icon1.png" alt="">
                        <p class="activity-icon-txt1">みる<br>あらわす</p>
                    </div>
                    <h2>ライブの体験を定期的に</h2>
                    <p class="activity-txt">演劇をみたり<br>
                       コンサートをきいたり、<br>
                       自分のことばやからだで<br>
                       表現する力を育みます。
                    </p>
                </div>
                <div class="activity">
                    <div class="activity-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/activity-icon2.png" alt="">
                        <p class="activity-icon-txt1">あそぶ<br>つどう</p>
                    </div>
                    <h2>ライブの体験を定期的に</h2>
                    <p class="activity-txt">演劇をみたり<br>
                       コンサートをきいたり、<br>
                       自分のことばやからだで<br>
                       表現する力を育みます。
                    </p>
                </div>
                <div class="activity">
                    <div class="activity-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/activity-icon3.png" alt="">
                        <p class="activity-icon-txt2">まなぶ</p>
                    </div>
                    <h2>ライブの体験を定期的に</h2>
                    <p class="activity-txt">演劇をみたり<br>
                       コンサートをきいたり、<br>
                       自分のことばやからだで<br>
                       表現する力を育みます。
                    </p>
                </div>

            </div>
                <a href="http://localhost:8888/wordpress/%E9%81%8E%E5%8E%BB%E3%81%AE%E6%B4%BB%E5%8B%95" class="previous-activity btn"style="text-decoration:none;">過去の活動記録はこちら</a>

        </div> 
        <!--container閉じ-->
        </section>


        <div id="at-wrapper-above">
            <h1>入会の魅力</h1>
            <img src="<?php echo get_template_directory_uri(); ?>/img/title-star-right.png" class="stright">
        </div>
        <section id="attraction-wrapper">
            <div id="attraction" class="container">

                <div class="attraction-contents ac-upper">
                    <div class="attraction-content">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/windows.png" alt="窓の画像" class="window">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/item-together.png" alt="" class="item-attraction"></a>
                    </div>
                    <div class="attraction-content">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/windows.png" alt="窓の画像" class="window">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/item-meeting.png" alt="" class="item-attraction"></a>
                    </div>
                </div>
                <div class="attraction-contents ac-under">
                    <div class="attraction-content">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/windows.png" alt="窓の画像" class="window">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/item-show.png" alt="" class="item-attraction"></a>
                    </div>
                    <div class="attraction-content">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/windows.png" alt="窓の画像" class="window">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/item-news.png" alt="" class="item-attraction"></a>
                    </div>
                    <div class="attraction-content">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/windows.png" alt="窓の画像" class="window">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/item-thought.png" alt="" class="item-attraction"></a>
                    </div>

                </div>
                <a href="#" class="btn detail-entry">入会について詳しくはこちら</a>
                <a href="#" class="btn form-entry">入会フォームはこちら</a>

            </div>

        </section>

        <section id="comment-wrapper">
            <div id="comment" class="container">
                <h1 class = "sizuru-intro">コメント</h1>
                <div class="sizuru-about">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/sizuru-back.png" id="szrbk">

                    <div class="comment-inner">
                        <h2>おおたか静流<span>さん</span></h2>
                        <h3>東京都出身。７歳よりクラシックの声楽家に師事。<br>
                            現在、ジャンルや国境を越えた音楽活動を展開している。<br>
                            NHK Eテレのテレビ番組「にほんごであそぼ」にレギュラー出演中。</h3>
                        <p>表現の世界には魔物が住んでいるといいます。<br>
                            とてつもない謎のパワーを発揮するという・・・<br>
                            残念ながら出没予測は無理。<br>
                            でもヒントは有るんです！</p>
                        <p></p>
                        <p>―魔物は優れたステージに現れる―</p>
                        <p></p>
                        <p>この真実を、どうやら<br>
                            「こども劇場」は知ってしまったらしい・・・・</p>
                        <p></p>
                        <p>みなさん、摩訶不思議な魔物に出逢う旅で<br>
                            お逢いしましょう！</p>
                    </div>

                </div>
            </div>
            <div class="clear"></div>
        </section>

        <div class = "map-container">
             <!-- SLアイコン -->
             <img src="<?php echo get_template_directory_uri(); ?>/img/SL-icon.png" id="SLicon">
                    <!-- 地図 -->
        <div class = "ggmap" id = "access">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.0543967975414!2d139.72771331542043!3d35.70027898018983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cf849032557%3A0x710218364dbf4d72!2z44CSMTYyLTA4NTMg5p2x5Lqs6YO95paw5a6_5Yy65YyX5bGx5LyP55S677yS4oiS77yR77yX!5e0!3m2!1sja!2sjp!4v1512442785062" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!-- 地図詳細 -->
        <div class = "mapdet">
            <p>新宿子ども劇場・事務所<br>
            東京都新宿区北山伏町2-17<br>
            TEL/FAX: 03-5261-8696　(火・水・金・土 10:00-17:00 )</p>
        </div>
       </div>
    <footer>

        <div id="btn_top" class="btn_top" style="display: block; opacity: 1; bottom: 51px; right: 30px;">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/to-top.png" alt="トップ画面へ飛ぶボタン" style="width:160px;"></a>
        </div>


        <div class="footer-block sta">
            <div class="footer-home">
                <h1>ホーム</h1>
                <ul>
                    <li><a href="#">新宿子ども劇場とは</a></li>
                    <li><a href="#">アクセス</a></li>
                </ul>
            </div>
            <div class="footer-entry">
                <h1>入会について</h1>
                <ul>
                    <li><a href="#">入会の魅力</a></li>
                    <li><a href="#">入会方法</a></li>
                    <li><a href="#">入会フォーム</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-block">
            <div class="activity">
                <h1>活動について</h1>
                <ul>
                    <li><a href="#">活動について</a></li>
                    <li><a href="#">みる・あらわす</a></li>
                    <li><a href="#">あそぶ・つどう</a></li>
                    <li><a href="#">まなぶ</a></li>
                    <li><a href="#">スケジュール</a></li>
                    <li><a href="#">参加のお申込み</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-block stb">
            <div class="others">
                <h1>その他</h1>
                <ul>
                    <li><a href="http://localhost:8888/wordpress/qna/">Q & A</a></li>
                    <li><a href="#">お問い合わせ</a></li>
                    <li><a href="#">新宿子ども劇場のうた</a></li>
                    <li><a href="#">NPO活動報告</a></li>
                    <li><a href="#">プライバシーポリシー</a></li>
                    <li><a href="#">サイトマップ</a></li>
                </ul>
            </div>
        </div>

    </footer>
        </div>
<!-- facebook timeline generate -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


    <?php wp_footer(); ?> <!-- 各種Wordpressスクリプトをインクルード -->
  </body>
</html>