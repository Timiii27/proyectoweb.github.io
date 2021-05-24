var countDownDate = new Date("May 30, 2021 12:00:00").getTime();


let x;

x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="countdown"
  document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";


  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "Fin de la oferta";
  }
}, );



const nav = document.getElementById('scroll');
window.onscroll = function(){
  var size = window.scrollY;
  if (size > 100) {
    nav.classList.add('navegacion')
  }
  else {
    nav.classList.remove('navegacion')
  }
}