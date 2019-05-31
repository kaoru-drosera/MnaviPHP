$(document).ready(function(){
  
  $("#form1").submit(function(){
    if($("#form1 input[name='name']").val() == ""){
      $("#form1 input[name='name']").css("border","1px solid red").after("<span>お名前を入力してください</span>");
      $("#form1 span").css({
        "color":"red",
        "font-weight":"bold"
      });
      return false;
    }
  });

    $(".form2 label, .form2 input[type='checkbox']").click(function(){
      $(".form2 label").css("background","");
      $(":checked").each(function(){
        $("label[for='" + $(this).attr("id") + "']").css("background","#0ff");
      });
      // .each()は、$(this)と併用することで、
      // 「現在処理している要素の中身を入れ替える」
      // という意味になる。
    });

    $("#form3 select").change(function(){
  		if($("#form3 :selected").attr("value")=="10代"){
  			$("#form3 input").attr("disabled", "disabled");
  		}else{
  			$("#form3 input").removeAttr("disabled");
  		}
  	});
    // セレクトボックスで設定されているものを
    // 選択できるはずが、どうしてもうまくいかなかった。

    // だが、サンプルではうまくいっているのだ。何故…。

    // formで囲ったらうまくいった。やったァァァァァァァ!!!!

});
