$(function(){
  $("#1st").on('click',function(){
    $("#1st").text("変更後");
  });

  $("#1stSwitch").on('click',function(){
    $("#2nd").text($("#1st").text());
  });

  $("#3rd").on('click',function(){
    $("#3rd").html("<strong>HTML変更完了！</strong>");
  });

  $("#3rdSwitch").on('click',function(){
    $("#4th").html($("#3rd").html());
  });

  $("#5th").on('click',function(){
    $("#5th").prepend("<h2>前に挿入完了！</h2>");
  });

  $("#6th").on('click',function(){
    $("#6th").append("<h6>後ろに挿入完了！</h6>");
  });

  $("#7th").on('click',function(){
    $("#7th").prepend("<strong>最初に挿入完了！</strong>");
  });

  $("#8th").on('click',function(){
    $("#8th").append("<strong>最後に挿入完了！</strong>");
  });

  $("#9th").on('click',function(){
    $("#9th").before("<p>最初に挿入完了！</p>");
  });

  $("#10th").on('click',function(){
    $("#10th").after("<p>最後に挿入完了！</p>");
  });

  $(".h1_3rd-1").on('click',function(){
    $(".strong1").prependTo(".h1_3rd-1");
  });

  $(".h1_3rd-2").on('click',function(){
    $(".strong2").appendTo(".h1_3rd-2");
  });

  $(".p_4th").on('click',function(){
    $(".h1_4th-3").insertBefore(".p_4th");
  });

  $(".p_5th").on('click',function(){
    $(".h6_5th-4").insertAfter(".p_5th");
  });

  $(".h5-1_1").on('click',function(){
    $(".h5-1_1").wrapAll("<h2></h2>");
  });

  $(".h5-1_2").on('click',function(){
    $(".h5-1_2").wrapInner("<strong></strong>");
  });

  $(".h5-1_3").on('click',function(){
    $(".h5-1_3 strong").unwrap();
  });

  $(".lune").on('click',function(){
    $(".lune").replaceWith("<h6>置き換え完了</h6>");
  });

  $(".h5-1_5").on('click',function(){
    $(".h5-1_5 strong").remove();
  });



});
