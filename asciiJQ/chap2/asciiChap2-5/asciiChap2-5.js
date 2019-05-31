$(document).ready(function(){

  $(".but1").click(function(){
    $(".div1").show("slow");
  });

  $(".but2").click(function(){
    $(".div2").show(1000);
  });

  $(".but3").click(function(){
    $(".div3").show();
  });

  $(".but4").click(function(){
    $(".div4").css("display","block");
  });

  $(".but5").click(function(){
    $(".div5").show("slow",function(){
      $(this).css("background","red");
    });
  });

  $(".but6").click(function(){
    $(".div6").show("slow");
  });
  $(".but6_2").click(function(){
    $(".div6").hide("slow");
  });

  $(".but6_t").click(function(){
    $(".div6_t:not(:animated)").toggle("slow");
    // .toggle(スピード,コールバック関数);

    // .showと.hideの機能がこれ1つに！
    // 一見すれば上記2つの上位互換だ！
  });




});


$(document).ready(function(){

  $(".but7").click(function(){
    $(".div7:not(:animated)").show("slow");
    // .show(スピード,コールバック関数)
  });
  $(".but7_2").click(function(){
    $(".div7:not(:animated)").hide("slow");
    // .hide(スピード,コールバック関数);
  });
  // :animatedは「アニメーションしているもの」
  // を選択する。
  // ようは、↑のコードは「動いていないもの」を選択する
  // コードということだ。

  // →要は、「アニメーションが中断されなくなる」
  // というものらしい。


  $(".dl1 dt").click(function(){
    if($(".dl1 dd").css("display") == "block"){
      $(".dl1 dd:not(:animated)").slideUp("slow");
      // .slideUp(スピード,コールバック関数);
    }else{
      $(".dl1 dd:not(:animated)").slideDown("slow");
      // .slideDown(スピード,コールバック関数);
    }
  });


  $(".dl2 dt").click(function(){
      $(".dl2 dd:not(:animated)").slideToggle("show");
      // .slideToggle(スピード,コールバック関数);
      // .slideUpと.slideDownの機能がこれ1つに！
      // 一見すると後者2つの上位互換だな。
  });

  $("#fadein").click(function(){
    $(".imgwrap1 img:not(:animated)").fadeIn("slow");
  });
  $("#fadeout").click(function(){
    $(".imgwrap1 img:not(:animated)").fadeOut("slow");
  });

  $(".fade100").click(function(){
    $(".imgwrap2 img:not(:animated)").fadeTo("slow",1);
  });
  $(".fade50").click(function(){
    $(".imgwrap2 img:not(:animated)").fadeTo("slow",0.5);
  });
  $(".fade0").click(function(){
    $(".imgwrap2 img:not(:animated)").fadeTo("slow",0);
  });

  // fadeTo(スピード,透明度,コールバック関数)
  // なお、fadeToで非表示にした場合、
  // スペースがそのまま開く

  $("#anm1img1").click(function(){
		$(".anm1 p:not(:animated)").animate({
			"margin-left" : "-400px"
		},"slow","swing");
	});
	$("#anm1img2").click(function(){
		$(".anm1 p:not(:animated)").animate({
			"margin-left" : "0"
		},"slow","swing");
	});


  $("#anm2img1").click(function(){
		$(".anm2inner:not(:animated)").animate({
			"margin-left" : "-400px"
		},"slow","swing");
	});
	$("#anm2img2").click(function(){
		$(".anm2inner:not(:animated)").animate({
			"margin-left" : "0"
		},"slow","swing");
	});

  // .animate({値を変更したいCSS:プロパティ},スピード,動き,)
  // ↑前は何を言ってるのか全然だったが、
  // 今はCSSの書き方を知ってからはちょっとだけわかってきた！


  // 「スピード」の後ろには、終わり際に減速する「swing」
  // 終わり際まで速さが等倍の「linear」の
  // 2つの「動き」を設定できるぞ。










});
