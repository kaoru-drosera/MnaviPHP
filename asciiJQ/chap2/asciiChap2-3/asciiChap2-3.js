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

});
