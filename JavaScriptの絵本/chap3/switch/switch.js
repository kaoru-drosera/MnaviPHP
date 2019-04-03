/ switch式を学習する

huku = window.prompt("switch文練習も兼ねて福引テスト。1~10の数字を入力のこと。")
switch(huku){
  case "7":
    document.write("１等");
  break;
  case "2": case "5":
    // 複数条件を指定したい場合は、
    // 「case 条件:」の後にもう一度「case 条件:」を記入する。
    // なお、数値を入力する際も「""」をつけるよう。
    document.write("２等");
  break;
  case "4": case "6": case "9":
    document.write("３等");
  break;
  default:
    document.write("その他");
  break;

}



















;
