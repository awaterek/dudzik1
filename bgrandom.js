function randombg(){
  var random= Math.floor(Math.random() * 3) + 0;
  var bigSize = [
                 "url('bg3.jpg')",
                 "url('bg2.jpg')",
                 "url('bg1.jpg')"
               ];
  document.getElementById("body").style.backgroundImage=bigSize[random];
}
