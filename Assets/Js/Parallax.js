let parallax = document.querySelector('.parallax');
let bg = document.querySelector('.bg');
function ScrollParallax(){
    let scrollTop = document.documentElement.scrollTop;
    parallax.style.transform = 'translateY(' + scrollTop * -0.1 + 'px)';
    bg.style.transform = 'translateY(' + scrollTop * 0.1 + 'px)';
    
 
}

window.addEventListener('scroll', ScrollParallax);
moviendo