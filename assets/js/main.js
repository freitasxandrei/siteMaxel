// MODAL
$("#andreiModal").click(function(){
    $("#modalAndrei").modal('show');
});
// CARROSSEL
$('#carouselExampleIndicators').carousel()
$('#carouselExampleIndicators').on('slide.bs.carousel', function () {
})
// TOAST
$(document).ready(function(){
  $('#andreiToast').toast('show');
});
// TOOLTIP
$('[data-toggle="tooltip"]').tooltip(function(){
  $('#andreiTooltip').tooltip('show');
});
  
let x = 0;
let p = -10;
let i = 1;
let doom = document.getElementsByClassName('item');
let confr = (doom.length - 3)*(-350);
let confl = 0;
//left
document.getElementById("l").addEventListener("click", function(){
     x += 350;
     if (x > confl){x = confr - 350}else{
    document.getElementById("move").style.marginLeft = x + "px";}
});
//right
document.getElementById("r").addEventListener("click", function(){
  x += -350;
  p += -10;
  if (x < confr){x = 350}else{
    document.getElementById("move").style.marginLeft = x + "px";}
});