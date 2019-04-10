
function myMove() {
  var elem = document.getElementById("hh1");   
  var pos = -400;
  var id = setInterval(frame, 6	);
  function frame() {
    if (pos == 35) {
      clearInterval(id);
    } else {
      pos++; 
      elem.style.left = pos + "px"; 
    }
  }
}
