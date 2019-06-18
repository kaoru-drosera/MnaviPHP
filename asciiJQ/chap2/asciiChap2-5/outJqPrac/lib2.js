function dispItem(mode, id){
    var elm = document.getElementById(id);
    if( mode == "over" ){
      element.animate([
        {
         color: '#000',
         backgroundColor: '#fff',
         border: '1px #000 solid'
         },
         {
           color: '#fff',
           backgroundColor: '#000',
           border: '1px #000 solid'
         }
     ],2000, id);
    }else{
      element.animate([
        {
         color: '#fff',
         backgroundColor: '#000',
         border: '1px #000 solid'
         },
         {
         color: '#000',
         backgroundColor: '#fff',
         border: '1px #000 solid'
         }
     ],2000, id);

    }
    // 脱jQueryはfunctionが肝心、ということだろう。
}
