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
    $("#8th").prepend("<strong>最後に挿入完了！</strong>");
  });

  $("#9th").on('click',function(){
    $("#9th").before("<p>最初に挿入完了！</p>");
  });

  $("#10th").on('click',function(){
    $("#10th").after("<p>最後に挿入完了！</p>");
  });



});
