const btm = document.querySelector('.menu-btn')
const nav = document.querySelector('.header__navbar')
console.log(nav);
btm.addEventListener('click', (e) =>{
    e.preventDefault();
    if(nav.classList.contains('active')){
        nav.classList.remove('active')
        btm.classList.remove('menu-btn_active')
    } else{
        nav.classList.add('active')
        btm.classList.add('menu-btn_active')
    }
})


const mySlader = new Splide('.splide',{
    perPage: 2,
    gap: '20px',
    breakpoints:{
        1152:{
            perPage: 1,
        }
    }
})
mySlader.mount();

const btnUp = {
    el: document.querySelector('.btn-up'),
    show() {
      this.el.classList.remove('btn-up_hide');
    },
    hide() {
      this.el.classList.add('btn-up_hide');
    },
    addEventListener() {
      window.addEventListener('scroll', () => {
        const scrollY = window.scrollY || document.documentElement.scrollTop;
        scrollY > 400 ? this.show() : this.hide();
      });
      document.querySelector('.btn-up').onclick = () => {
        window.scrollTo({
          top: 0,
          left: 0,
          behavior: 'smooth'
        });
      }
    }
  }
  
  btnUp.addEventListener();