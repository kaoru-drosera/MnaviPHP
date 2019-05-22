$(function(){
  $('#kyuukyo').css({
    "color":"red",
    "font-size":"24px",
    "font-weight":"bold",
   });
   // ↑CSSメソッドで
   // 複数の値を変えたいときはこう記述するといい。
   // thanks:
   // jQueryでCSSの値を複数設定するときの記述
   // https://qiita.com/nobuko012/items/b1839243db126d6a8ca1

});

$(function(){
  $("li").css({"color":"red"});
  // li要素のみを設定することで、
  // htmlファイル内のli要素すべての
  // スタイルが変更される。
});


$(function(){
  $("li#1st").css({"color":"blue"});
  // ↑「タグ名+#id名」で設定することで、
  // タグ名のうち特定タグのある要素のみ
  // コードが効くようになる。
  // ちなみに、クラス名であっても操作は同じ。

  // 例:li#1st
  // p.kyuukyo
  // li.greet


  $("#3rd , .5th , .7th").css({
    "font-weight":"bold",
    "color":"green",
  });

  // 「#3rd」「.5th」のようにクラスやidのみを設定することで
  // コードを適用することも可能。
  // …というか今までそうして書いてきたよね…？


  // ちなみに、「,」で区切ることで複数クラスの指定も可能。
  // ただし、区切りの「,」も共に一つの「""」で囲うこと。
  // 例としては「"#3rd , .5th"」といった感じ。
  // 「"#3rd",".5th"」のように「,」で分断するのはNG。


  $('li > strong').css({
    "background-color":"yellow",
    "color":"black",
    "font-family":"serif",
  });

  // 「親要素 > 子要素」とすることで、
  // 以上コードなら「liが親のstrong要素」
  // だけに適用をかけることができる。

  // よって、HTMLのように「liが親だがstrongがdiv」
  // のstrongには適用がかからない。


  $(".yabai:first-child").css({
    "font-size":"8px",
    "background-color":"pink",
  });

  $(".yabai:last-child").css({
    "font-size":"8px",
    "background-color":"aqua",
  });

  // 適用させたいタグ,クラス,id名の後ろに
  // 「:firtst-child」をつけることで、
  // 「その要素の一番初めの要素」だけに
  // 設定を適用させることが可能だ。
  // 逆に、「一番最後の要素」だけに
  // 設定を適用させたい場合には
  // 「:last-child」をつけると良さそうだ。

  $(".14th ~ li").css({
    "border":"1px solid orange",
  });

  // 適用させたクラスの後に「~」をつけることで、
  // 「そのクラス以降全ての要素」に
  // 設定を適用させることができるぞ。

  // ↑のコードなら「.14th」以降のクラス全てに
  // borderをつける、ということになるな。

  $(".yabatanienn:not(:first-child)").css({
    "color":"aqua",
    "border":"1px solid green",
  });

  // 指定するクラスに「:not」をつけて、
  // さらにその後ろに「(除外したい条件)」を付ければ
  // 「除外したい条件以外に要素を適用する」
  // ことが可能になるぞ！
  // 上のコードなら「最初以外に枠線をつけ、水色にする」
  // といったことができるな。

});

$(function(){

  $(".yannbaru:empty").css({
    "color":"darkgray",
  });

  // 後ろに「:empty」をつけることで、
  // 「中に何も書かれていない要素」
  // だけに要素が適用されるようになるぞ。


  $("li span:only-child").css({
    "color":"blue",
  });

  // 「:only-child」を後ろにつけることで、
  // 「枠内に、指定した枠が1つだけの場合」に適応が効く
  // ようにできるぞ。

  // 例えば上のコードなら、
  // 「span」で囲まれた要素に設定が効くようになっているが、
  // 「span」が2つ以上ある要素には設定が効かなくなっている。
  // これが、「:only-child」の効果なのだ！

  $(".yahh:nth-of-type(3)").css({
    "font-size":"8px",
  });

  $(".yahh:nth-last-child(3)").css({
    "font-size":"8px",
  });

  $(".yahh:nth-last-of-type(4)").css({
    "font-size":"8px",
  });
  // 「nth-of-type(3)」なら「初めから3番目」、
  // 「nth-last-child(3)」「nth-last-of-type(3)」
  // なら「終わりから3番目」…
  // といった感じで、特定のものだけに
  // スタイルを適用できる。
  // 要素が多い場合に使ってみたい要素の1つだ！


  $(".yahh:first-of-type").css({
    "font-size":"8px",
    "font-weight":"bold",
  });
  // 「first-of-type」は、
  // 「複数の要素のうちの最初の要素」
  // に設定が効くようになる設定だ。
  // 一見「first-child」と同じだけど、
  // これといい「of-type」と「-child」で
  // どこか違いあるでしょ…。

  // あと、違うコードで同じ要素に
  // 設定を適用させようとすると
  // 衝突してしまうようだ。
  // 前に適用されていたコードの設定が
  // 消えてしまった…

  $(".yahh:last-of-type").css({
    "font-size":"8px",
  });
  // 反対に「last-of-type」も、
  // 「複数の要素のうち最後の要素」
  // に設定が効くようになる設定だ。
  // 「of-type」と「-child」との
  // 違いが知りたい…。


  $(".ul5 p:only-of-type").css({
    "color":"pink",
  });
  $(".ul5 li:only-of-type").css({
    "color":"pink",
  });
  // 「:only-of-type」は、
  // 「要素が1つだけの場合」に適用が効くものだ。
  // 「ul5内の p」は1つだけなので適応があるのに対し、
  // 「ul5内の li」は複数あるので適応がないぞ。
  // それと、「クラス名」「id名」では効かず、
  // 「タグ名」でしか効かないようだ。


  $(".langlist li:lang(ja)").css({
    "color":"black",
  });
  $(":lang(en)").css({
    "color":"blue",
  });
  $(":lang(en-es)").css({
    "color":"green",
  });
  // 「:lang(言語設定)」なら、
  // 「言語設定ごとに適用する」
  // ことが可能だ。
  // これに限ってなのか、
  // 要素の後ろにつける必要はないようだ。

  // $(".langlist li:lang(ja)")で適応させようとした結果、
  // 全てに適応が効いてしまったため、
  // 「.langlist内のli」に限定してつけてみたぞ。


});























;
