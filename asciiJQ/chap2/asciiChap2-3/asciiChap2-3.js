$(document).ready(function(){
  $(".imgChange").click(function(){
    $(".p1 img").attr("src","img/jellyfish.jpg").attr("alt","工房じゃないほうのやつ");
  });

  $(".imgChange2").click(function(){
    $(".p2 img").attr("src","img/jellyfish.jpg").attr("alt","工房じゃないほうのやつ");
  });

  $(".imgChangeX2").click(function(){
    $(".p2X img").attr("src","img/jellyfish.jpg").attr("alt","工房じゃないほうのやつ");
  });

  $(".imgChangeC2").click(function(){
    $(".p2C img").attr("src","img/jellyfish.jpg").attr("alt","工房じゃないほうのやつ");
    return false;
  });

  $(".ul2-1 a:eq(0)").click(function(){
    $(".C2-1Img").attr("src","img/flower.jpg").attr("alt","どっか花");
    return false;
  });

  $(".ul2-1 a:eq(1)").click(function(){
    $(".C2-1Img").attr("src","img/jellyfish.jpg").attr("alt","工房じゃないやつ");
    return false;
  });

  $(".ul2-1 a:eq(2)").click(function(){
    $(".C2-1Img").attr("src","img/building.jpg").attr("alt","しゃれたホテル");
    return false;
  });

  $(".ul2-1 a:eq(3)").click(function(){
    $(".C2-1Img").attr("src","img/sea.jpg").attr("alt","インスタ映えは難しい時間帯のビーチ");
    return false;
  });


  $(".ul2-C1 a").click(function(){
    $(".C2-C1Img").attr("src",$(this).attr("href")).attr("alt",$(this).text());
    return false;
  });

  $(".ul2-2 a").dblclick(function(){
    $(".C2-2Img").attr("src",$(this).attr("href")).attr("alt",$(this).text());
  }).click(function(){
    return false;
  });



  // mouseupとmousedownがよくわからない…。

  $(".ul2-3 a").mousedown(function(){
    $(".C2-3Img").attr("src",$(this).attr("href")).attr("alt",$(this).text());
  }).click(function(){
    return false;
  });

  $(".ul2-4 a").mouseup(function(){
    $(".C2-4Img").attr("src",$(this).attr("href")).attr("alt",$(this).text());
  }).click(function(){
    return false;
  });

  // mouseupとmousedownがよくわからない…。



  $(".C2-5Img").mouseover(function(){
    $(this).attr("src","img/sea.jpg").attr("alt","海");
  }).mouseout(function(){
    $(this).attr("src","img/flower.jpg").attr("alt","どっか花");
  });

  $(".C2-6Img").mousemove(function(e){
    $(".2-6mator1").html("現在のX座標:"+e.clientX);
    $(".2-6mator2").html("現在のY座標:"+e.clientY);
    // 「e.clientX」で「X座標」を、
    // 「e.clientY」で「Y座標」を
    // 検出できる。
  });

  $(".ul2-7 a").one("click",function(){
    // 「one」は「一度だけ実行される処理」
    $(".C2-7Img").attr("src",$(this).attr("href")).attr("alt",$(this).text());
    return false;
  });


  $(".ul2-8").on("click","a",function(){
    $(".C2-8Img").attr("src",$(this).attr("href")).attr("alt",$(this).text());
    return false;
    // $(セレクター).on("イベント発生の条件","イベントが発生する要素",function(){
    //   // イベント発生時に実行する処理
    // });
  });
  $(".ul2-9").on("click","a",function(){
    $(".C2-9Img").attr("src",$(this).attr("href")).attr("alt",$(this).text());
    return false;
    // $(セレクター).on("イベント発生の条件","イベントが発生する要素",function(){
    //   // イベント発生時に実行する処理
    // });
  });

  $(".2-9addImg").on('click',function(){
    $(".ul2-9").prepend('<li><a href="img/flower.jpg">どっか花</li>');
  });


  $(".ul2-10 a").click(function(){
    $(".C2-10Img").attr("src",$(this).attr("href")).attr("alt",$(this).text());
    return false;
    // $(セレクター).on("イベント発生の条件","イベントが発生する要素",function(){
    //   // イベント発生時に実行する処理
    // });
  });
  $(".2-10off").click(function(){
    $(".cont2-10 a").off("click");
  });
  // 「on('click'…)」は効かないんだろうか
  // 一応、こんな式に。
  // $(セレクタ).off("イベント発生の条件");














});
