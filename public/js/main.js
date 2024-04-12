// show list of ul
let up = document.querySelector("nav .group")
let list = document.querySelector("nav .container")

// navbar in phone
let menu = document.querySelector("nav .menu")
let ul = document.querySelector("nav .ul")

const navbar = document.querySelector('nav');

// active a 
let a =[... document.querySelectorAll('nav a')]


up.addEventListener("click" , function(){
    list.classList.toggle("show-list")
})




menu.addEventListener("click" , function(){
    
    ul.classList.toggle("show-ul")
    menu.classList.toggle("bx-x")
})

a.forEach(e=> {
    localStorage.setItem("path" , '/') 

    if(`/en/${ e.getAttribute('href')}` == window.location.pathname)  e.classList.add("active")
    e.addEventListener("click" , function(){
        a.forEach(ele => ele.classList.remove("active"))
        e.classList.add("active")
        
    })
})




let lang = document.querySelector('.language .main span')
let select = [...document.querySelectorAll(".language .select span")]
select.forEach(span => {
    span.addEventListener('click' , e => {
        lang.innerHTML = e.target.innerHTML
        lang.innerHTML == 'العربية' ? lang.classList.add("ar") : lang.classList.remove("ar") 
    })
})


setTimeout(() => {
    if(document.querySelector('.preloading')) document.querySelector('.preloading').style.clipPath = ' circle(0% at 50% 50%)';
    
    setTimeout(() => {
        if(document.querySelector('.preloading'))  document.querySelector('.preloading').style.display = 'none';
        
    }, 3000);

}, 2000 );


// get all h2 




let iamgesall = [...document.querySelectorAll("img")]

            iamgesall.forEach(ele => {
                ele.addEventListener("click" , e=>{
                    let DIV = document.createElement('div') ;
                    let IMG = document.createElement('img') ;
                    let I = document.createElement('i') ;
                    
                    DIV.classList.toggle("preview_img")
                    IMG.setAttribute("src" , e.target.attributes.src.value)
                    I.classList.add('fa-solid', 'fa-xmark', 'CLOSE')

                    I.addEventListener("click" , e=>{DIV.classList.add('appear') })
                    
                    DIV.append(I)
                    DIV.append(IMG)
                    document.body.appendChild(DIV)
                })
            })





function delet (){
    document.querySelector(".overlay-modal").classList.add("show")
}
function closeModel (){
    document.querySelector(".overlay-modal").classList.remove("show")
}