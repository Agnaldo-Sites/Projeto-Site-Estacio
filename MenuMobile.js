
let btnMenu = document.getElementById('btn-abir-menu')
let MenuMobile = document.getElementById('Menu-Mobile')
let Overlay = document.getElementById('overlay-menu')

btnMenu.addEventListener('click',()=>{
    MenuMobile.classList.add('abrir-menu')
})

MenuMobile.addEventListener('click',()=>{
    MenuMobile.classList.remove('abrir-menu')
})  
Overlay.addEventListener('click',()=>{
    MenuMobile.classList.remove('abrir-menu')
})  

