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


 function scrollActive(){
     const scrollY = window.pageYOffset
  
     sections.forEach(current =>{
         const sectionHeight = current.offsetHeight 
         const sectionTop = current.offsetTop - 100;
         sectionId = current.getAttribute('id')
         if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.cont a[href*=' + sectionId + ']').classList.add('active')
         }else{
           document.querySelector('.cont a[href*=' + sectionId + ']').classList.remove('active')
       }
     })
 }
 window.addEventListener('scroll', scrollActive)