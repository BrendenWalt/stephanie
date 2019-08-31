window.onload = function() {
  
  const hamburger = document.querySelector('.ham-container');
  const navLinks = document.querySelector('.navbar');
  const navLink = navLinks.querySelectorAll('li');


  function onHamClick(e) {
    e.preventDefault();
    if(navLinks.classList.contains('closed')) {
      navLinks.classList.remove('closed');
    } else {
      navLinks.classList.add('closed');
    }
  }

  function onNavLinkClick(e) {
    e.preventDefault();
    const link = e.path[0].hash;
    document.querySelector(link).scrollIntoView({
      behavior: 'smooth'
    });
  }

  hamburger.addEventListener('click', onHamClick);
  for( var i = 0; i < navLink.length; i++) {
    console.log(navLink[i]);
    navLink[i].addEventListener('click', onNavLinkClick);
  }
} 