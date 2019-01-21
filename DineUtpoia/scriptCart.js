
function sub(){
    var value = parseInt(document.getElementById("quan").value,10);
    if (value > 1) {
        value = value - 1;
    } else {
        value = 1;
    }
 
  document.getElementById("quan").value = value;
 
}
 
function add() {
    var value = parseInt(document.getElementById("quan").value,10);
    if (value < 100) {
        value = value + 1;
    } else {
        value = 100;
    }
 
  document.getElementById("quan").value = value;
}
