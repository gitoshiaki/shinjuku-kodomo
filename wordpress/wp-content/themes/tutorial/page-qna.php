<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title> <!-- 管理画面から設定するサイトタイトルが表示される -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/qa.css"  type="text/css" media="screen" /> <!-- 先程作成したスタイルシートをインクルード -->
        <link href="https://fonts.googleapis.com/earlyaccess/roundedmplus1c.css" rel="stylesheet" />
        <!-- ビューポートの設定 -->
	<meta name="viewport" content="width=device-width,initial-scale=1">
        <?php wp_head(); ?> <!-- 各種Wordpressスクリプトをインクルード -->
    </head>
  <body>
  <div class = "header-content">
  <img src = "<?php echo get_template_directory_uri(); ?>/images/background.png" class = "background">
  <img src = "<?php echo get_template_directory_uri(); ?>/images/background-smh.png" class = "background-smh">
  <h1 class = "htitle">Q&A</h1>
        </div>
        <!-- ここで一区切り -->

         <div class = "header-content1">
  <img src = "<?php echo get_template_directory_uri(); ?>/images/q1.png" class = "q1icon">
  <img src = "<?php echo get_template_directory_uri(); ?>/images/smh-q1.png" class = "smh-q1">
  <h1 class = "htitle1">新宿子ども劇場について</h1>
        </div>
        <!-- 1st question -->
<div class = "content">
<div class = "q-content">
<div class = "q-picture">
<img src="<?php echo get_template_directory_uri(); ?>/images/q-icon.png">
</div>

<div class = "q-text">
<h3>新宿子ども劇場は劇団ですか？</h3>
</div>
</div>
<!-- 回答ボックス -->
<div class = "a-content">
<div class = "a-picture">
<img src="<?php echo get_template_directory_uri(); ?>/images/a-icon.png">
</div>

<div class = "a-text">
<p>劇団ではありません。自分たちが見たい作品や、子どもに出会ってほしい作品を選んで</p>
                     <p>鑑賞するほか、キャンプや遊びの会、講演会企画など様々な活動をしています。</p>
</div>
</div>


<a href="#" class="btn detail-entry">
        <div class = "d-btn">
        詳しくはこちら<img src="<?php echo get_template_directory_uri(); ?>/images/d-icon.png" class = "d-icon">
</div>
</a>
</div>

 <div class = "header-content1 add1">
  <img src = "<?php echo get_template_directory_uri(); ?>/images/q2.png" class = "q1icon">
  <img src = "<?php echo get_template_directory_uri(); ?>/images/smh-q2.png" class = "smh-q1">
  <h1 class = "htitle1">活動について</h1>
        </div>
        <!-- 2nd question -->
<div class = "content">
<div class = "q-content">
<div class = "q-picture">
<img src="<?php echo get_template_directory_uri(); ?>/images/q-icon.png">
</div>

<div class = "q-text">
<h3>入会しないとイベントに参加できませんか？</h3>
</div>
</div>
<!-- 回答ボックス -->
<div class = "a-content">
<div class = "a-picture">
<img src="<?php echo get_template_directory_uri(); ?>/images/a-icon.png">
</div>

<div class = "a-text">
<p>対象年齢など条件が合えば参加できます。</p>
<p>ピンときたら、どんどんアクセスしてください。</p>
</div>
</div>


<a href="#" class="btn detail-entry b-add">
        <div class = "d-btn">
        詳しくはこちら<img src="<?php echo get_template_directory_uri(); ?>/images/d-icon.png" class = "d-icon">
</div>
</a>
<!-- 3rd question -->
<div class = "q-content">
<div class = "q-picture">
<img src="<?php echo get_template_directory_uri(); ?>/images/q-icon.png">
</div>

<div class = "q-text">
<h3>対象年齢じゃないと観られませんか？</h3>
</div>
</div>
<!-- 回答ボックス -->
<div class = "a-content">
<div class = "a-picture">
<img src="<?php echo get_template_directory_uri(); ?>/images/a-icon.png">
</div>

<div class = "a-text">
<p>作品を十分に楽しめるよう、おおよその目安として設定しています。お子さんの状況にも

よりますので、迷われたらご相談ください。なお、定期演奏会は年間10本ほどあり、どの

年齢もおよそ半数には参加していただけるよう作品選びをしています。</p>
</div>
</div>

<!-- 4th question -->
<div class = "q-content">
<div class = "q-picture">
<img src="<?php echo get_template_directory_uri(); ?>/images/q-icon.png">
</div>

<div class = "q-text">
<h3>定期鑑賞会はどういうものですか？</h3>
</div>
</div>
<!-- 回答ボックス -->
<div class = "a-content">
<div class = "a-picture">
<img src="<?php echo get_template_directory_uri(); ?>/images/a-icon.png">
</div>

<div class = "a-text">
<p>人形劇、お芝居、朗読、音楽、ダンス、狂言など様々なジャンルの作品を鑑賞します。

作品は会員のアンケートをもとに投票で決めています。

また定期鑑賞会は、地域のグループで担当を決め、搬入、会場準備、撤収などの裏方仕事

にも取り組みます。観るだけではない関りも面白いと好評です。</p>
</div>
</div>

<!-- 5th question -->
<div class = "q-content">
<div class = "q-picture">
<img src="<?php echo get_template_directory_uri(); ?>/images/q-icon.png">
</div>

<div class = "q-text">
<h3>鑑賞会ごとにお金はかかりますか？</h3>
</div>
</div>
<!-- 回答ボックス -->
<div class = "a-content">
<div class = "a-picture">
<img src="<?php echo get_template_directory_uri(); ?>/images/a-icon.png">
</div>

<div class = "a-text">
<p>会員は月会費のみで定期鑑賞会に参加できます。</p>
</div>
</div>

<!-- 6th question -->
<div class = "q-content">
<div class = "q-picture">
<img src="<?php echo get_template_directory_uri(); ?>/images/q-icon.png">
</div>

<div class = "q-text">
<h3>定期鑑賞以外の活動はどんなものがありますか？</h3>
</div>
</div>
<!-- 回答ボックス -->
<div class = "a-content">
<div class = "a-picture">
<img src="<?php echo get_template_directory_uri(); ?>/images/a-icon.png">
</div>

<div class = "a-text">
<p>イベントは以下のようなものがあり、会員になると優先的に参加することができます。<br>

★親子キャンプ<br>

キャンプ初心者でも心配無用。大型バスで楽々アクセスなので、赤ちゃん連れでも参加

できる毎年大人気のキャンプです。<br>

★子どもキャンプ<br>

場所選びから始まる、小学４年生～中学生と高校生以上の青年が一緒に考え作り出す

キャンプ子どもたちの「やってみたい」を大切にしています。<br>

★遊びの会<br>

イメージ遊びや野外でのダイナミックな遊び、伝承遊びなど、テーマはさまざま。

異年齢のつながりを大切に作っていきます。</p>
</div>
</div>

<a href="#" class="btn detail-entry">
        <div class = "d-btn">
        詳しくはこちら<img src="<?php echo get_template_directory_uri(); ?>/images/d-icon.png" class = "d-icon">
</div>
</a> 
</div>

 <div class = "header-content1 add1">
  <img src = "<?php echo get_template_directory_uri(); ?>/images/q3.png" class = "q1icon">
  <img src = "<?php echo get_template_directory_uri(); ?>/images/smh-q3.png" class = "smh-q1">
  <h1 class = "htitle1">入会について</h1>
        </div>
        <!-- 7th question -->
<div class = "content">
<div class = "q-content">
<div class = "q-picture">
<img src="<?php echo get_template_directory_uri(); ?>/images/q-icon.png">
</div>

<div class = "q-text">
<h3>働いていても入会出来ますか？</h3>
</div>
</div>
<!-- 回答ボックス -->
<div class = "a-content">
<div class = "a-picture">
<img src="<?php echo get_template_directory_uri(); ?>/images/a-icon.png">
</div>

<div class = "a-text">
<p>会員の多くがお仕事を持っている方です。定期鑑賞会やその他の活動も、

できる限り日程、時間帯を設定するようにしています。

子ども劇場の活動は多岐にわたっていますので、ご自身のペースにあった形で参加することができます。

</p>
</div>
</div>


<!-- 8th question -->
<div class = "q-content">
<div class = "q-picture">
<img src="<?php echo get_template_directory_uri(); ?>/images/q-icon.png">
</div>

<div class = "q-text">
<h3>家族全員で入会しないとダメですか？</h3>
</div>
</div>
<!-- 回答ボックス -->
<div class = "a-content">
<div class = "a-picture">
<img src="<?php echo get_template_directory_uri(); ?>/images/a-icon.png">
</div>

<div class = "a-text">
<p>そんなことはありません。<br>

各種イベントや、一般料金になりますが定期鑑賞会にも参加いただけます。
</p>
</div>
</div>

<!-- 9th question -->
<div class = "q-content">
<div class = "q-picture">
<img src="<?php echo get_template_directory_uri(); ?>/images/q-icon.png">
</div>

<div class = "q-text">
<h3>なぜ会員になった方がいいのですか？</h3>
</div>
</div>
<!-- 回答ボックス -->
<div class = "a-content">
<div class = "a-picture">
<img src="<?php echo get_template_directory_uri(); ?>/images/a-icon.png">
</div>

<div class = "a-text">
<p>継続した活動を通じて繋がりができ、安心して自分を出せる環境がうまれます。自主性や創造性が育まれ、

生きる力に繋がる“ワクワク・ドキドキの体験”を、みんなで作っていくことができます。

親子で一緒に動ける時は、割と短いものです。一緒の舞台を観て、同じ体験をする場が増えます。
</p>
</div>
</div>

<!-- 10th question -->
<div class = "q-content">
<div class = "q-picture">
<img src="<?php echo get_template_directory_uri(); ?>/images/q-icon.png">
</div>

<div class = "q-text">
<h3>何才から入会できますか？</h3>
</div>
</div>
<!-- 回答ボックス -->
<div class = "a-content">
<div class = "a-picture">
<img src="<?php echo get_template_directory_uri(); ?>/images/a-icon.png">
</div>

<div class = "a-text">
<p>０才から入会できます。（会費は3才以上要）
</p>
</div>
</div>

<!-- 11th question -->
<div class = "q-content">
<div class = "q-picture">
<img src="<?php echo get_template_directory_uri(); ?>/images/q-icon.png">
</div>

<div class = "q-text">
<h3>会員の年齢構成は？</h3>
</div>
</div>
<!-- 回答ボックス -->
<div class = "a-content">
<div class = "a-picture">
<img src="<?php echo get_template_directory_uri(); ?>/images/a-icon.png">
</div>

<div class = "a-text">
<p>乳幼児、小学生・中学生・高校生、大学生、社会人、孫のいる方まで、様々な年代で構成されています。
</p>
</div>
</div>

<!-- this is the last question -->
<div class = "q-content">
<div class = "q-picture">
<img src="<?php echo get_template_directory_uri(); ?>/images/q-icon.png">
</div>

<div class = "q-text">
<h3>会費はどのように納めますか？</h3>
</div>
</div>
<!-- 回答ボックス -->
<div class = "a-content">
<div class = "a-picture">
<img src="<?php echo get_template_directory_uri(); ?>/images/a-icon.png">
</div>

<div class = "a-text">
<p>お住まいの地域の会員で構成されるサークルで集め、まとめて事務所へ前納します。
</p>
</div>
</div>

<a href="#" class="btn detail-entry">
        <div class = "d-btn">
        詳しくはこちら<img src="<?php echo get_template_directory_uri(); ?>/images/d-icon.png" class = "d-icon">
</div>
</a>
</div>

<img src="<?php echo get_template_directory_uri(); ?>/images/chair.png" class = "chair">

    <?php wp_footer(); ?> <!-- 各種Wordpressスクリプトをインクルード -->
  </body>
</html>