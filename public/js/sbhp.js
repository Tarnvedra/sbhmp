/* $(function() {
//var selectedClass = "";
//$(".filter").click(function(){
//selectedClass = $(this).attr("data-rel");
//$("#gallery").fadeTo(100, 0.1);
$("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
setTimeout(function() {
$("."+selectedClass).fadeIn().addClass('animation');
$("#gallery").fadeTo(300, 1);
}, 300);
});
});*/


function getQuote() {

    var amount = 0;
    var frameSize = 0;
    var frameType = 0;
    var runningTotal = 0;
    var finalTotal = 0;
    amount = document.getElementById('amount').value;
    frameSize = document.getElementById('size').value;
    frameType = document.getElementById('frame').value;

    alert(amount);
}
