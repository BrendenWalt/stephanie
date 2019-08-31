window.onload = function() {

  const hamburger = document.querySelector('.ham-container');
  const navLinks = document.querySelector('.navbar');

  function hamClick(e) {
    e.preventDefault();
    console.log(navLinks.classList)
    if(navLinks.classList.contains('closed')) {
      navLinks.classList.remove('closed');
    } else {
      navLinks.classList.add('closed');
    }
  }

  hamburger.addEventListener('click', hamClick);

} 