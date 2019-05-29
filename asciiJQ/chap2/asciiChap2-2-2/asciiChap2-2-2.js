$(function(){
  $("[id]").css({
    "color":"red",
  });

  // 「[]」にhtml属性(id,src?)などを書き込むことで
  // html属性での指定もできる。



  $("[title='7_3rd']").css({
    "color":"blue",
  });

  $(".ul7 [title!='7_3rd']").css({
    "color":"purple",
  });

  // 「[html属性='属性の値']」のように書くことで、
  // 特定の値を持ったものに設定を効かせることができる。
  // そして、html属性の前に「!」を置くことで
  // 「特定の値以外」を指定できる。
  // 属性の値に「""」や「''」を使うときは、外側のものと
  // 同じにならないように。
  //
  // …って、ひょっとしたら
  // ↓こんな使い方ができるんじゃないか！？

  $("[type=submit]").css({
    "font-size":"24px",
    "color":"white",
    "border":"none",
    "padding":"10px 40px",
    "background-color":"darkgray",
    "cursor":"pointer"
  });

  // やべぇな。
  // submit送信ボタンのスタイルの設定が
  // jQで出来ちゃったよ！すっごーい！



  $(".ul8 [title^=f]").css({
    "background-color":"mediumspringgreen"
  });

  // html属性の前に「^(ハット)」をつけると、
  // 上のコードなら「titleの値で最初の文字が『f』」
  // の物を抜き出せるぞ。
  // …で、なぜだか「全角入力で入力して変換したもの」
  // しか効かないんだな。
  // 「ˆ」は「 option + shift + I 」で打てるんだがな。



  $(".ul9 [title$=d]").css({
    "background-color":"darkorange"
  });

  // html属性の前に「$」をつけると、
  // 上のコードなら「titleの値で最初の文字が『d』」
  // の物を抜き出せるぞ。



  $(".ul10 [title*=ir]").css({
    "background-color":"darkorchid",
    "color":"white"
  });

  // html属性の前に「*」をつけると、
  // 上のコードなら
  // 「最初最後関係なく『ir』が含まれているもの」
  // の物を抜き出せるぞ。



  $(".ul11 [title*=th][title^=f]").css({
    "background-color":"peru",
    "color":"white"
  });

  // 複数の条件を指定することも可能だ。
  // []を隣接させる場合は「,」は不要だぞ。
  // ちなみに、「AND検索」のように
  // 「全ての条件を満たしたもの」に適応が効くので
  // だいぶ絞られてくるな。



  // $(".ul11 [title$=th] , .ul12[title^=f]").css({
  //   "background-color":"peru",
  //   "color":"white"
  // });

  // クラスをまたいだ指定はなぜかできない。



  $(function(){
    $(".ul13 li:first").css({
      "background-color":"deeppink",
      "color":"white"
    });
    $(".ul13 li:last").css({
      "background-color":"deeppink",
      "color":"white"
    });

    // 「:first」、「:last」。
    // 「:first-child」や「:last-child」とも似ているが、
    // 「指定したセレクタの範囲内での
    // 最後になる」という違いがあるぞ。
    // …よくわかんねぇなぁ。

    // $("li:first").css({
    //   "background-color":"deeppink",
    //   "color":"white"
    // });
    // $("li:last").css({
    //   "background-color":"deeppink",
    //   "color":"white"
    // });
    //
    // 「指定したセレクタの範囲内で…」
    // と思って試したのが上のコード。
    // 指定したものの次の設定に最後のだけ効いただけで
    // 特に意味はなかった。

  });

  $(function(){
    $(".ul15 li:even").css({
      "background-color":"red",
      "color":"white"
    });
    $(".ul15 li:odd").css({
      "background-color":"blue",
      "color":"white"
    });

    // 指定した要素の後ろに「:even」「:odd」をつけることで、
    // それぞれ「奇数」「偶数」のものを選択できる。
    // 上のコードならul15が赤と青のシマシマに。



    $(".ul16 li:lt(5)").css({
      "color":"darkgray"
    });
    $(".ul16 li:eq(5)").css({
      "background-color":"yellow",
      "color":"black"
    });
    $(".ul16 li:gt(5)").css({
      "background-color":"red",
      "color":"white"
    });

    // 指定した要素の後ろに
    // 「:lt(数値)」「:eq(数値)」「:gt(数値)」
    // をつけることで、それぞれ
    // 「指定した数値+1よりも後のもの」
    // 「指定した数値+1」
    // 「指定した数値+1よりも先のもの」
    // を指定できるようになるぞ。

    // 上のコードなら
    // 「5番目までのliの文字色を灰色」
    // 「6番目(5+1)の背景色を黄色」
    // 「6番目(5+1)以降の背景色を赤、文字色を白」
    // といった感じに。



    $(".ul16 :header").css({
      "color":"darkorange"
    });

    // 「:header」は、「h1~h6」の「見出し」
    // を全て選択できるものだ。
    // ただし、「クラス内の見出し」
    // を設定するときは
    // スペースを空けること。
    // 「:」がつくからといって
    // 隣接させると効かなくなるぞ。



    $(".ul17 li:contains('サンプル')").css({
      "font-size":"24px"
    });
    $(".ul17 li:has(strong)").css({
      "background-color":"black",
      "color":"white"
    });

    // 「:contains('含まれている文字')」
    // で、「タグの内側に何が含まれているか」
    // で指定をかけることができる。
    // 例えば、「サンプル」が含まれたものに
    // 設定が効くのだ！
    // はい次。「has(タグ名)」で、
    // 「子タグのタグ名」で指定することが可能になる！
    // 例えば、liの中の「strong」のみに
    // 設定をかけられるのだ！



    $(function(){
      $(".ul18 li:parent").css({
        "background-color":"red",
        "color":"yellow",
      });
    });

    // 「:parent」は、「タグ内に要素があるもの」
    // だけに設定が効くようになるものだ。
    // 要は、「:empty」逆だな。


  });












































});
