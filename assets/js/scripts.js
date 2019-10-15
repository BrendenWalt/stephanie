  const hamburger = document.querySelector('.ham-container');
  const menuWrap = document.querySelector('.menu-wrap');
  const menu = document.querySelector('.menu-container');
  const navLinks = document.querySelector('.navbar');
  const navLink = navLinks.querySelectorAll('li');
  const scrollTop = document.querySelector('#scroll-to-top');
  const social = document.querySelector('#social-menu');
  const pageContainer = document.querySelector('body');
  const pageHTML = document.querySelector('html');

  function closeMenu(e) {
    menu.classList.remove('open');
    menuWrap.classList.remove('open');
    navLinks.classList.add('closed');
    hamburger.classList.remove('open');
    social.classList.remove('open');
    pageContainer.classList.remove('no-scroll');
    pageHTML.classList.remove('no-scroll');
  }

  function keyCheck (e) {
    if(e.key === "Escape") {
      closeMenu();
    }
  }

  function menuToggler() {
    // Menu is being opened
    if(navLinks.classList.contains('closed')) {
      menu.classList.add('open');
      menuWrap.classList.add('open');
      hamburger.classList.add('open');
      navLinks.classList.remove('closed');
      social.classList.add('open');
      pageContainer.classList.add('no-scroll');
      pageHTML.classList.add('no-scroll');

    } else { //Menu is being closed
      closeMenu();
    }
  }

  function onHamClick(e) {
    e.preventDefault();
    menuToggler();
    
  }

  function onMenuClick(e) {
    e.stopPropagation();
  }

  function onNavLinkClick(e) {
    const link = e.path[0].hash;
    if(link) {
      e.preventDefault();
      document.querySelector(link).scrollIntoView({
        behavior: 'smooth',
        block: 'center'
      });
      if(window.innerWidth < 1300) {
        closeMenu();
      }
      
    }
  }

  function onTopClick(e) {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  }

  function onWindowScroll() {
    if(window.pageYOffset > 600) {
      scrollTop.classList.add('active');
      menu.classList.add('overlay');
    } else {
      scrollTop.classList.remove('active');
     menu.classList.remove('overlay');
    }
  }

  hamburger.addEventListener('click', onHamClick);
  menuWrap.addEventListener('click', onMenuClick)
  scrollTop.addEventListener('click', onTopClick);
  window.addEventListener('click', closeMenu);
  window.addEventListener('scroll', onWindowScroll);
  document.addEventListener('keyup', keyCheck);
  
  for( var i = 0; i < navLink.length; i++) {
    navLink[i].addEventListener('click', onNavLinkClick);
  }