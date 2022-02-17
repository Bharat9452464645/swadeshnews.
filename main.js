var nav = document.querySelector(".nav");



document.querySelector(".ham").addEventListener('click', function()
{
  if (nav.style.top == '-50vh'){
nav.style.top = '2vh'
document.querySelector('.header').style.height = '36vh'
}
  else{
   document.querySelector('.header').style.height = '5vh'

        nav.style.top = '-50vh'


  }
})
 