const menuBtn = document.querySelector('.menu-bar');
const hamburger = document.querySelector('.hamburger');
const sideBar = document.querySelector('.nav_bar')

let showMenu = false;

menuBtn.addEventListener('click', toggleMenu);

function toggleMenu() {
    if (!showMenu) {
        hamburger.classList.add('open');
        sideBar.classList.add('open');
        showMenu = true;
    } else {
        hamburger.classList.remove('open');
        sideBar.classList.remove('open');
        showMenu = false;
    }

}
 /* smooth scroll */

const sections = document.querySelectorAll('.sect')
sections.forEach(sect => {
    console.log(sect.offsetTop)
    console.log(sect.offsetHeight)
    window.pageXOffset=1000;
});
 function scrollActive(){
     const scrollY = window.pageYOffset
  
     sections.forEach(current =>{
         const sectionHeight = current.offsetHeight
         const sectionTop = current.offsetTop;
         sectionId = current.getAttribute('id')
         if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav-links a[href*=' + sectionId + ']').classList.add('active')
         }else{
           document.querySelector('.nav-links a[href*=' + sectionId + ']').classList.remove('active')
       }
     })
 }
 window.addEventListener('scroll', scrollActive)