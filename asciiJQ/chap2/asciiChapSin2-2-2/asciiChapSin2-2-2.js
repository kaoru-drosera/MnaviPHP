$(function(){
  $(".p1").click(function(){
    $(".p1").text($(".a1").attr("href"));
  });

  $(".p2").click(function(){
    $(".p2").text($(".a2").attr("href"));
    $(".p2_1").text($(".a2").attr("target"));
  });

  $(".p2_p").click(function(){
    $(".a2").removeAttr("target");
  });

  $(".p3").click(function(){
    $(".p3").addClass("aqua");
  });

  $(".p4").click(function(){
    $(".p4").removeClass("blue").addClass("aqua");
  });

  $(".p5").click(function(){
    $(".p5").text($(".p4").css("background-color"));
  });



});
