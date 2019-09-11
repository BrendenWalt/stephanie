window.onload = function() {
  
  const hamburger = document.querySelector('.ham-container');
  const menu = document.querySelector('.menu-container');
  const navLinks = document.querySelector('.navbar');
  const navLink = navLinks.querySelectorAll('li');
  const scrollTop = document.querySelector('#scroll-to-top');


  function onHamClick(e) {
    e.preventDefault();
    $(this).toggleClass('open');
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

  function onTopClick(e) {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  }

  function onWindowScroll() {
    console.log(window.pageYOffset);
    if(window.pageYOffset > 600) {
      scrollTop.classList.add('active');
      menu.classList.add('overlay');
    } else {
      scrollTop.classList.remove('active');
     menu.classList.remove('overlay');
    }
  }

  hamburger.addEventListener('click', onHamClick);
  scrollTop.addEventListener('click', onTopClick);
  window.addEventListener('scroll', onWindowScroll)
  
  for( var i = 0; i < navLink.length; i++) {
    navLink[i].addEventListener('click', onNavLinkClick);
  }

} 