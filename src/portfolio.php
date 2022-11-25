<!DOCTYPE html>
<html>
	<head><!-- 裏設定エリアの開始 -->
		<meta charset="utf-8"><!-- 文字化け防止 -->
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
		<!-- CSS 読み込み	-->
		<link rel="stylesheet" href="portfolio.css" />
	</head><!-- 裏設定エリアの終了 -->

	<body><!-- 画面に表示されるエリアの開始 -->
    <script src="jquery-3.6.1.min.js"></script>
    <script src="portfolio.js"></script>
<!-- 各項目へのリンク -->
        <nav class="item_link">
            <!--<h1 class="li_link"><a href="#sHoby">PROFILE</a></h1>-->
            <h1 class="li_link"><a href="javascript:void(0)" onclick="autoScroll(document.getElementById('prof_img0').getBoundingClientRect().top);">PROFILE</a></h1>
            <h1 class="li_link"><a href="javascript:void(0)" onclick="autoScroll(document.getElementById('sSkil0').getBoundingClientRect().top);">SKILL</a></h1>
            <h1 class="li_link"><a href="javascript:void(0)" onclick="autoScroll(document.getElementById('sActual').getBoundingClientRect().top);">WORKS</a></h1>
            <h1 class="li_link"><a href="javascript:void(0)" onclick="autoScroll(document.getElementById('slast').getBoundingClientRect().top);">LAST</a></h1>
            <h1 class="li_link top_link"><a href="portfolio.php">⇒TOPにもどる</a></h1>
            <!--<h1 class="li_link"><a href="#slast">saigoni</a></h1>-->
        </nav>

<!-- ハンバーガーメニュー -->
    <section class="sp_link" id="sp_link">    
        <div class="sp_nav">
        <input id="drawer_input" class="drawer_hidden" type="checkbox">
        <label for="drawer_input" class="drawer_open"><span id="drawer_span"></span></label>
        <!-- メニュー -->
        <nav class="nav_content">
          <ul class="nav_list">
            <li class="nav_item1"><a href="#prof_img0" onclick="MenuClose();">PROFILE</a></li>
            <li class="nav_item2"><a href="#sSkil" onclick="MenuClose();">SKILL</a></li>
            <li class="nav_item3"><a href="#sActual" onclick="MenuClose();">WORKS</a></li>
            <li class="nav_item4"><a href="#slast" onclick="MenuClose();">LAST</a></li>
            <li class="nav_item5"><a href="portfolio.php" onclick="MenuClose();">⇒TOPにもどる</a></li>
          </ul>
        </nav>
    </section>

     <!-- レスポンシブ対応用背景 -->
    <section class="sphelper_cat" name="sphelper_cat">
        <nav>
             <li><img class="helper_cat" src="../img/cat_topsp.png"></li>
        </nav>
    </section>

     <!-- タイトル静止画 -->
     <section class="cTitle" id="sTitle" name="sTitle">
        <nav>
            
            <li><img class="video_title" id="video_title" src="../img/ucyuu1.png"></li><!-- タイトル背景宇宙 -->
            <li><img class="img_title" src="../img/TOGES_PORTFOLIO.png"></li><!-- タイトルロゴ -->
            <div class="img_cat" id="simgCat" name="simgCat"> </div><!-- タイトルネコ -->
            <li><img class="nami" id="nami" src="../img/nami.png"></li><!-- 波 -->
        </nav>
        
    </section>
   

    <!-- 趣味 -->
    <section class="cHoby" id="sHoby" name="sHoby">
        <nav class="nHoby">
            <li><h1>PROFILE</h1></li>
            <li class="profBox">
                <div class="profCat" id="profCat">
                    <img class="prof_img" id="prof_img0" src="../img/toge.png">
                    <h1 class="wfont">とげ</h1>
                    <h3>家事が1ミリもできない<br class="sp_br">ゲーミングキャット<BR>
                    LINE構築・プログラミング<BR>
                    少しだけイラストも描ける</h3>
                </div>
            <li class="cHobyBox">
                <div class="cHobyCat" id="cHobyCat">
                    <img class="cHoby_img" id="cHoby_img0" src="../img/cat3d.png">
                    <h3 class="wfont" id="cHoby_img3">Blender産まれの3Dネコ</h3>
                </div>
                <div class="cHobyCat">
                    <img class="cHoby_img marginset" id="cHoby_img1" src="../img/catwr.png">
                    <h3 class="wfont" id="cHoby_img4">人生の幸福９割以上ネコにある</h3>
                </div>
                <div class="cHobyCat">
                    <img class="cHoby_img big_cat" id="cHoby_img2" src="../img/catp.png">
                    <h3 class="wfont" id="cHoby_img5">1日8時間以上机に向かっている</h3>
                </div>
            </li>
        </nav>
    </section>
    <!-- スキル丸 -->
    <section class="sSkil0" id="sSkil0" name="sSkil0">
        <nav class="nSkil0">
            <li><h1>SKILL</h1></li>
            <li class="sSkil0Box">
                <div class="sSkil0CatB" id="sSkil0CatB">
                    <div class="sSkil0CatB2">
                    <img class="sSkil0Cir_img" id="sSkil0Cir_img" src="../img/hc.png">
                    <h3>html / CSS<BR>基本操作は可能です</h3>
                    </div>
                </div>
                <div class="sSkil0CatB" id="sSkil0CatB">
                    <div class="sSkil0CatB2">
                    <img class="sSkil0Cir_img" id="sSkil0Cir_img" src="../img/js.png">
                    <h3>JavaScript<BR>🐈</h3>
                    </div>
                </div>
                <div class="sSkil0CatB" id="sSkil0CatB">
                    <div class="sSkil0CatB2">
                    <img class="sSkil0Cir_img" id="sSkil0Cir_img" src="../img/php.png">
                    <h3>PHP(Laravel)<BR>🐘</h3>
                    </div>
                </div>
            </li>
        </nav>
    </section>
    <!-- スキル -->
    <section class="sSkil" id="sSkil" name="sSkil">
        <nav> 
            <ul class="sSkilInline">
                <h3 class="item">◆ プログラミング</h3>
                <li class="sSkil1 sp_bottm">
                <div class="sp_left" style="    display: inline-grid;">
                    <p class="pSkilbox pmaj" id="pSkilbox0">
                        HTML/CSS/JavaScript　:独学3か月<br>
                        PHP(Laravel)　　　　　:独学1か月<br>
                        開発ツール　　　　　　　:VsCode/XAMPP/Git/Docker
                    </p>
                    <p class="pSkilbox" id="pSkilbox1">
                        HTML/CSS/JavaScriptの基礎を学び当ポートフォリオサイトを開発。<br>
                        また、PHP(Laravel)を使用した業務系Webシステムも開発しました。<br>
                        業務系Webシステム詳細は、<a>こちら</a>をご覧ください。
                    </p>
                     <!-- レスポンシブ -->
                     <p class="pSkilbox_sp" id="pSkilbox_sp0">
                        HTML/CSS/JavaScript　:独学3か月<br>
                        PHP(Laravel)　　　　　:独学1か月<br>
                        開発ツール　　　　　　　<br class="sp-br">:VsCode/XAMPP/Git/Docker<br><br>
                        HTML/CSS/JavaScriptの基礎を学び当ポートフォリオサイトを開発。<br>
                        また、PHP(Laravel)を使用した業務系Webシステムも開発しました。<br>
                        業務系Webシステム詳細は、<a>こちら</a>をご覧ください。(準備中)
                    </p>
                </div>
                <div class="SkilCat">
                        <img class="sSkil_img catsc" src="../img/catsc.png">
                    </div>
                </li>
                <h3 class="item">◆ 小売業　接客版売</h3>
                <li class="sSkil1">
                    <div class="sp_left" style="    display: inline-grid;">
                        <p class="pSkilbox rowOne" id="pSkilbox2">
                            登録販売者歴　　　:14年
                        </p>
                        <p class="pSkilbox" id="pSkilbox3">
                            地域のお皆様方のセルフメディケーション支援の為、お悩みや体質に合わせたOTC医薬品のご紹介、日々の健康に役立つ保健薬や健康食品のご提案、ご自宅でできる健康アドバイスなどを専門に行っております。
                        </p>
                        <!-- レスポンシブ -->
                        <p class="pSkilbox_sp" id="pSkilbox_sp1">
                            登録販売者歴　　　:14年<br><br>
                            地域のお皆様方のセルフメディケーション支援の為、お悩みや体質に合わせたOTC医薬品のご紹介、日々の健康に役立つ保健薬や健康食品のご提案、ご自宅でできる健康アドバイスなどを専門に行っております。
                        </p>
                    </div>
                    <div class="SkilCat">
                        <img class="sSkil_img catds" src="../img/catds.png">
                    </div>
                </li>
                <h3 class="item">◆ 公式LINE構築</h3>
                <li class="sSkil1">
                    <div class="sp_left" style="    display: inline-grid;">
                        <p class="pSkilbox rowOne" id="pSkilbox4">
                            Lステップ　　　　:独学3か月
                        </p>
                        <p class="pSkilbox" id="pSkilbox5">
                            複雑な構築、入り組んだ条件分岐が得意です。<br>
                            深みのあるゲームや診断等の構築や、回答フォームの細かいCSS装飾で、オリジナル感あふれるコンテンツを制作します。
                        </p>
                          <!-- レスポンシブ -->
                          <p class="pSkilbox_sp" id="pSkilbox_sp2">
                          Lステップ　　　　:独学3か月<br><br>
                          複雑な構築、入り組んだ条件分岐が得意です。<br>
                          深みのあるゲームや診断等の構築や、回答フォームの細かいCSS装飾で、オリジナル感あふれるコンテンツを制作します。
                          </p>
                    </div>
                    <div class="SkilCat">
                        <img class="sSkil_img catl" src="../img/catl.png">
                    </div>
                </li>
            </ul>
        </nav>
    </section>

    <!-- 実績 -->
    <section class="sActual" id="sActual" name="sActual">
        <nav>
        <li><h1>WORKS</h1></li>
            <li class="sActual1">
                <div class="sActualCat" id="sActualCat">
                    <a href="portfolio.php"></a>
                    <img class="sActual_img" src="../img/screen.png">
                    <img class="sActual_img_sp" src="../img/sp_po.png">
                </div>
                <div class="ActualMsgBox">
                    <h3>◆ ポートフォリオサイト</h3><BR>
                    <p>本サイトです。<BR>
                        初めてのwebサイト作成でしたが、要素の配置に苦戦しつつも1か月程度で作成しました。<br>
                        また、個性が出るようにネコの要素をふんだんに反映させました。<br>
                        
                    </p>
                </div>
            </li>
            <li class="sActual1">
                <div class="sActualCat" id="sActualCat">
                    <a href="https://lin.ee/JZQdWSi"></a>
                    <img class="sActual_img" src="../img/line.png">
                    <img class="sActual_img_sp" src="../img/sp_line.png">
                </div>
                <div  class="ActualMsgBox">
                    <h3>◆ 公式LINE　デモアカウント</h3><BR>
                    <p>ネコのいるカフェ併設型の<BR>
                    架空のコワーキングスペースをベースに、<BR>
                    公式LINEではどのようなことができるかを<BR>
                    紹介しています。</p>
                </div>
            </li>
            <li class="sActual1">
                <div class="sActualCat" id="sActualCat">
                    <a href="portfolio.php"></a>
                    <img class="sActual_img" src="../img/pc_co.png">
                    <img class="sActual_img_sp" src="../img/sp_co.png">
                </div>
                <div>
                    <h3>◆ 業務系Webシステム</h3>
                    <p>🐈🐈🐈🐈🐈🐈🐈🐈🐈🐈</p>
                </div>
            </li>
        </nav>
    </section>
    <!-- 最後に -->
    <section class="slast" id="slast" name="slast">
        <li><h1>LAST</h1></li>
        <nav>
                <div class="slastCat">
                    <img class="catmaru_img" src="../img/catmaru.png">
                </div>
                <li class="slast1">◆好奇心が止まらず、疑問をとことん分析・追求する。<BR>
                    ◆考えたり学び続ける事が好き。<BR>
                    ◆もくもく一人作業をする時間が幸せで、永遠にやっていられる。<BR>
                    こういった性質を満たす為、プログラミングをはじめました🐈🐈<BR><BR>
                　当ポートフォリオ制作の際も、夢中でコーディングに励みました。<BR>
            　悩んだり、困ったりする事も多かったですが、それも含め楽しかったです。<BR>
        　これからも様々な制作に挑戦していきたいです。</li>
        </nav>
    </section>
 <footer>
  <p>フッター</p>
 </footer>
    </body><!-- 画面に表示されるエリアの終了 -->
</html>