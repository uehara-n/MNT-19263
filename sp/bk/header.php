<!doctype html>
<html>

<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MSL93PL');</script>
<!-- End Google Tag Manager -->
<title>リフォーム長野,安曇野,松本,塩尻,諏訪｜サンプロリフォームにおまかせ下さい！</title>
<meta charset="UTF-8">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/drawer.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.drawer').drawer();
    });
  </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiuhEyDNhfguJnZ8Vh0fOOPUfMGGCAqxY"></script>
	<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1,maximum-scale=1">
	<meta name="format-detection" content="telephone=no">
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/images/webclip.png" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url'); ?>/css/sandbox.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url'); ?>/css/drawer.min.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url'); ?>/css/bootstrap-3.3.6.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url'); ?>/css/reset.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url'); ?>/css/allpage.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url'); ?>/css/page.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url'); ?>/css/lightbox.css" rel="stylesheet" type="text/css">
	<?php if ( is_home() || is_front_page() ) : ?>
	<link href="<?php sunpro_url(); ?>/wp-content/themes/sp2/css/top.css" rel="stylesheet">
	<?php else:?>
	<link href="<?php sunpro_url(); ?>/wp-content/themes/sp2/css/page.css" rel="stylesheet">
	<?php if(is_page()&&!is_404()): ?>
	<?php
	$root_slug = ps_get_root_page( $post );
	$root_slug = $root_slug->post_name;
	?>
	<link href="<?php sunpro_url(); ?>/wp-content/themes/sp2/css/<?php echo $root_slug; ?>.css" rel="stylesheet" type="text/css"/>
	<!-- /固定ページcss -->
	<?php else: ?>
	<link href="<?php sunpro_url(); ?>/wp-content/themes/sp2/css/<?php echo esc_html(get_post_type_object(get_post_type())->name); ?>.css" rel="stylesheet" type="text/css"/>
	<!-- 各ページcss -->
	<?php endif; ?>
	<?php endif; ?>
	<script src="<?php bloginfo('template_url'); ?>/js/imagesloaded.pkgd.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/smoothScroll.js"></script>
	<!-- -->
	<!-- Global Site Tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-7409040-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push( arguments )
		};
		gtag( 'js', new Date() );

		gtag( 'config', 'UA-7409040-1' );
	</script>

	<!-- -->

	<!-- 郵便番号 -->
	<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
	<script type="text/javascript">
		$( function () {
			$( '#zip' ).keyup( function ( event ) {
				AjaxZip3.zip2addr( this, '', 'ken', 'address' );
			} )
		} )
	</script>
	<!-- /郵便番号 -->
<?php
if ( is_page_template( 'page-company.php' )||is_page(array('30','20424','22345','22428') )   ) : ?>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
$(function() {
 // 祝日を配列で確保
    var holidays = [ '2018-08-10','2018-08-11','2018-08-12','2018-08-13','2018-08-14','2018-08-15','2018-12-29','2018-12-29','2018-12-30','2018-12-31','2019-01-01','2019-01-02','2019-01-03' ];

    $(".kiboday").datepicker({

	    	minDate: '+1d',
	    	dateFormat: 'yy年m月d日 (DD)',
			dayNames: ['日', '月', '火', '水', '木', '金', '土'],
			dayNamesMin: ['日', '月', '火', '水', '木', '金', '土'],
            beforeShowDay: function(date) {
            // 祝日の判定
            for (var i = 0; i < holidays.length; i++) {
                var htime = Date.parse(holidays[i]);    // 祝日を 'YYYY-MM-DD' から time へ変換
                var holiday = new Date();
                holiday.setTime(htime);                 // 上記 time を Date へ設定

                // 祝日
                if (holiday.getYear() == date.getYear() &&
                    holiday.getMonth() == date.getMonth() &&
                    holiday.getDate() == date.getDate()) {
                    return [false, 'holiday'];
                }
            }

            // 火曜日
            if (date.getDay() == 2) {
                return [false, ''];
            }
            // 水曜日
            if (date.getDay() == 3) {
                return [false, ''];
            }
            // 平日
            return [true, ''];
        },
        onSelect: function(dateText, inst) {
            $("#date_val").val(dateText);
        }
    });
});
</script>
<?php endif; ?>

	<?php wp_head(); ?>

<!-- Global site tag (gtag.js) - AdWords: 955943880 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-955943880"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'AW-955943880');
</script>

</head>

<body class="drawer drawer--right">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MSL93PL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header id="head">
	<div class="inner">
		<h1 class="title"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/head/logo.svg" width="388" height="36" class="img-responsive"></a></h1>
	  <div class="btn">
			<a href="tel:050-7576-4405" onClick="ga('send','event','smartphone','phone-number-tap','header');" class="tel head_contel"><img src="<?php echo get_template_directory_uri(); ?>/images/head/h_tel.svg" width="78" height="78" alt="電話をかける" class="img-responsive center-block" ></a>
			<a class="contact head_contel" href="/contact/"><img src="<?php echo get_template_directory_uri(); ?>/images/head/h_mail.svg" width="78" height="78" alt="問合せ" class="img-responsive center-block" ></a>
		</div>
	  <nav id="menu-nav">
			<div id="menu-button">
				<div id="menu-button-inner"> <img src="<?php echo get_template_directory_uri(); ?>/images/head/h_menu.svg" width="57" height="57" alt="メニュー" class="img-responsive drawer-toggle"> </div>
		    </div>
		</nav>
	</div>

  <button type="button" class="drawer-toggle drawer-hamburger">
    <span class="sr-only">toggle navigation</span>
    <span class="drawer-hamburger-icon"></span>
  </button>
<nav class="drawer-nav" role="navigation">
<ul class="drawer-menu">
  <li><a class="drawer-menu-item" href="<?php bloginfo('url'); ?>">トップページ</a></li>
  <li class="drawer-dropdown">
    <a class="drawer-menu-item" data-target="#" href="#" data-toggle="dropdown" role="button" aria-expanded="false">
      サンプロについて <span class="drawer-caret"></span>
    </a>
	    <ul class="drawer-dropdown-menu">
				<li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/company/message">代表あいさつ</a></li>
				<li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/company">会社概要</a></li>
				<li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/company/hon">塩尻ショールーム</a></li>
				<li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/company/matsumoto">松本ショールーム</a></li>
				<li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/company/nagano">長野ショールーム</a></li>
				<li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/company/service">サンプロ20大サービス</a></li>
				<li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/staff">スタッフ紹介</a></li>
				<li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/craftman">職人紹介</a></li>
				<li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/award">表彰実績</a></li>
				<li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/company/specialist">スペシャリスト集団</a></li>
				<li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/event">イベント情報</a></li>
				<li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/voice">お客様の声</a></li>
	    </ul>
  </li>
	<li class="drawer-dropdown">
		<a class="drawer-menu-item" data-target="#" href="#" data-toggle="dropdown" role="button" aria-expanded="false">
			リフォームについて<span class="drawer-caret"></span>
		</a>
		<ul class="drawer-dropdown-menu">
			<li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/reformnagare">リフォームの流れ９つのステップ</a></li>
			<li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/kitchen">キッチン</a></li>
			<li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/ohuro">お風呂</a></li>
			<li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/toilet">トイレ</a></li>
			<li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/kyuto">給湯器</a></li>
			<li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/senmen">洗面</a></li>
			<li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/gaiheki">外壁塗装</a></li>
			<li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/mizumawari">水廻り3点セット</a></li>
			<li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/jyusetsu">住宅設備が安く出来る理由</a></li>
			<li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/taishin">耐震リフォーム</a></li>
			<li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/tenken">無料点検</a></li>
		</ul>
	</li>
  <li class="drawer-dropdown">
    <a class="drawer-menu-item" data-target="#" href="#" data-toggle="dropdown" role="button" aria-expanded="false">
      施工事例<span class="drawer-caret"></span>
    </a>
	    <ul class="drawer-dropdown-menu">
				<li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/special">大規模リフォーム・リノベーション</a></li>
	      <li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/seko_cat/kitchen">キッチン</a></li>
	      <li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/seko_cat/ohuro">お風呂</a></li>
	      <li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/seko_cat/toilet">トイレ</a></li>
	      <li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/seko_cat/senmen">洗面所・脱衣所</a></li>
	      <li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/seko_cat/kyuto">給湯器・ボイラー</a></li>
	      <li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/seko_cat/yanegaiheki">屋根・外壁</a></li>
	      <li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/seko_cat/naiso">内装・インテリア</a></li>
	      <li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/seko_cat/design">増改築・デザインリフォーム</a></li>
	      <li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/seko_cat/shizen">自然素材リフォーム</a></li>
	      <li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/seko_cat/kaigo">バリアフリー・介護リフォーム</a></li>
	      <li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/seko_cat/tenpo">店舗リフォーム</a></li>
	      <li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/seko_cat/exterior">外構・エクステリア・庭</a></li>
        <li><a class="drawer-dropdown-menu-item" href="<?php echo home_url(); ?>/seko_cat/dannetsu">断熱リフォーム</a></li>
	      <li><a class="drawer-dropdown-menu-item" href="<?php bloginfo('url'); ?>/seko_cat/other">その他のリフォーム</a></li>
			</ul>
  </li>
	<li><a class="drawer-menu-item" href="<?php bloginfo('url'); ?>/contact">お問い合わせ</a></li>
	<li><a class="drawer-menu-item" href="<?php bloginfo('url'); ?>/raiten">ご来店予約</a></li>
	<li><a class="drawer-menu-item" href="<?php bloginfo('url'); ?>/book">資料請求</a></li>
	<li><a class="drawer-menu-item" href="https://sunpro36.co.jp/recruit/" target="_blank">採用専門サイト</a></li>
</ul>
</nav>		<!--<button class="menu"><img src="images/head/h_menu.png" width="29" height="31" alt="メニュー"></button>-->
</header>
