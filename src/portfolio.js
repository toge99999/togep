//背景カラー
window.addEventListener("scroll", function() {

  let scroll = window.pageYOffset;

  if (scroll > 8000) {
    document.body.style.backgroundColor = '#fff';
  } else if (scroll > 6500) {
    document.body.style.backgroundColor = '#4c6cb3';
  } else if (scroll > 2900) {
    document.body.style.backgroundColor = '#151f33';
  } else {
    document.body.style.backgroundColor = '#0d1117';
  }

});

//スマホ端末か？
if(navigator.userAgent.match(/(iPhone|iPod|Android.*Mobile)/i)){
  document.getElementById("pSkilbox_sp0").style.fontSize = '15px';
  document.getElementById("pSkilbox_sp1").style.fontSize = '15px';
  document.getElementById("pSkilbox_sp2").style.fontSize = '15px';

  //スマホ端末ならpSkilboxにdisplay:noneを追加
  document.getElementById("pSkilbox1").style.display = "none";
  document.getElementById("pSkilbox2").style.display = "none";
  document.getElementById("pSkilbox3").style.display = "none";
  document.getElementById("pSkilbox4").style.display = "none";
  document.getElementById("pSkilbox5").style.display = "none";
}else{

  //ネコonload
  window.onload = function(){

    let switchimg = function(){
      //document.getElementById("simgCat").setAttribute('class', 'img_cat2');
      document.getElementById("simgCat").style.backgroundImage = 'url(../img/cat.PNG)'
    }
    window.setTimeout(switchimg, 3000);

    //スクロールアニメーション用の基準要素を取得 場所
    //背景ぼやけ
    ucyuFlg = document.getElementById("nami");
    //趣味
    elemHoby = document.getElementById("cHoby_img0");
    //スキル：プログラミング
    elemSkil0 = document.getElementById("sSkil1_0");
    //スキル：小売業
    elemSkil1 = document.getElementById("sSkil1_1");
    //スキル：LINE
    elemSkil2 = document.getElementById("sSkil1_2");

    
  }

//趣味スクロールで出現
let ucyuFlg = false; //背景宇宙 各セクションごとにフラグが必要
let elemHobyFlg = false;//趣味
let elemSkil0Flg = false;//スキル：プログラミング
let elemSkil1Flg = false;//スキル：小売業
let elemSkil2Flg = false;//スキル：LINE

// ターゲットの画面トップからの距離
window.addEventListener("scroll", function (){

/* 宇宙をぼやける */
//filter: blur(5px);をjsでimg要素にaddする
if ((ucyuFlg.getBoundingClientRect().top <= window.innerHeight + -500) 
                                                && (ucyuFlg !== true)) {
    //ぼやける
    document.getElementById("video_title").style.filter = "blur(5px)";
 } else {
    document.getElementById("video_title").style.filter = "blur(0px)";
 }
//やることは下記のアニメーションの処理と同等

// 画面トップからの距離から画面の高さより小さければ実行する
// 趣味----------------------------------------------------------------------------
  if ((elemHoby.getBoundingClientRect().top <= window.innerHeight + 50) 
                                                && (elemHobyFlg !== true)) {
    elemHobyFlg = true;
    //フェードインアニメーション
    document.getElementById("cHoby_img0").className = "aHoby_img";
    document.getElementById("cHoby_img1").className = "aHoby_img marginset";
    document.getElementById("cHoby_img2").className = "aHoby_img big_cat";
  }

  //スキル：プログラミング----------------------------------------------------------------------------
  if ((elemSkil0.getBoundingClientRect().top <= window.innerHeight) 
                                              && (elemSkil0Flg !== true)) {
    elemSkil0Flg = true;
    //フェードインアニメーション
    document.getElementById("sSkil1_0").className = "sSkil1_0a";
  }

  //スキル：小売業----------------------------------------------------------------------------
  if ((elemSkil1.getBoundingClientRect().top <= window.innerHeight) 
                                              && (elemSkil1Flg !== true)) {
    elemSkil1Flg = true;
    //フェードインアニメーション
    document.getElementById("sSkil1_1").className = "sSkil1_1a";
  }

    //スキル：LINE----------------------------------------------------------------------------
    if ((elemSkil2.getBoundingClientRect().top <= window.innerHeight) 
                                              && (elemSkil2Flg !== true)) {
    elemSkil2Flg = true;
    //フェードインアニメーション
    document.getElementById("sSkil1_2").className = "sSkil1_2a";
  }
});

  // 指定位置に自動スクロール
  function autoScroll(ToPoint){

    //スクロールオプション設定
    var scrollToOptions = {
      top : ToPoint +  window.pageYOffset, //スクロール位置にページ最上部を指定
      behavior : 'smooth' //スムーズに移動させる条件を指定
  };

  //自動スクロール
  window.scrollTo(scrollToOptions);
  }
}

const nav = document.getElementById("drawer_input");
//ハンバーガーメニュー
function MenuClose(){

  //ハンバーガーメニューを閉じる
  document.getElementById("drawer_input").checked= false;
}
