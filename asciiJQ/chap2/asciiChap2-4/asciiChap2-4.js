$(function(){
  $(".cont4-1 button").click(function(){
    $(".cont4-1").text("【"+$(".cont4-1 input").val()+"】にメールを送信します")
    // 「val()」で、フォーム上の値を受け取れる。
    // 「select」要素、「textarea」要素の値もこれで受け取れるぞ。
    // $("select").val();
    // $("textarea").val();
  });


  $(".cont4-2 button").click(function(){
    $(".cont4-2 input").val("");
  });


  $(".cont4-3 input").val("入力してください").css({
    "color":"red",
    "background-color":"pink",
  }).focus(function(){
    $(this).val("").css({
      "color":"black",
      "background-color":"white",
    });
  });


  $(".cont4-4 input").val("入力してください").css({
    "color":"red",
    "background-color":"pink",
  }).one('focus',function(){
    $(this).val("").css({
      "color":"black",
      "background-color":"white",
    });
  });


  $(".cont4-5 input").val("入力してください").css({
    "color":"red",
  }).one('focus',function(){
    $(this).val("").css({"color":"black"}).blur(function(){
      if($(this).val() == ""){
        $(this).val("入力してください").css({"color":"red"}).one('focus',function(){
          $(this).val("").css({"color":"darkgray"});
        });
      }
    });
  });


  $(".cont4-5_2 input").val("入力してください").css({
    "color":"darkgray",
    "background-color":"white",
  }).one('focus',function(){
    $(this).val("").css({
      "color":"black",
      "background-color":"white",
    }).blur(function(){
      if($(this).val() == ""){
        $(this).val("入力してください").css({
          "color":"red",
          "background-color":"pink",
        }).one('focus',function(){
          $(this).val("").css({
            "color":"black",
            "background-color":"white",
          });
        });
      }
    });
  });

 // oneのfunctionからうまくいかなくてよくわからなくて

 $(".cont-5 select").change(function(){
   $(".c5ipwrap span").text($(this).val());
 });







































});
