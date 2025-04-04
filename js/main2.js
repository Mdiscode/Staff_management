const navmenu=document.getElementById('nav-menu'),
navToggle =document.getElementById('nav-toggle'),
navClose = document.getElementById('nav-close');

navToggle.addEventListener('click',()=>{
    navmenu.classList.add('show-menu');
});

navClose.addEventListener('click',()=>{
    navmenu.classList.remove('show-menu');
});

// ---logn----
const login = document.getElementById('login'),
loginbtn =document.getElementById('emplogin'),
loginClose = document.getElementById('login-close');

// login-show 
loginbtn.addEventListener('click',()=>{
    login.classList.add('show-login');
});

if(loginClose){
    loginClose.addEventListener('click',()=>{
        login.classList.remove('show-login');
    });
}

// Admin-login ---
const login1 = document.getElementById('login'),
loginbtn1 =document.getElementById('Admin'),
loginClose1 = document.getElementById('login-close');

// login-show 
loginbtn1.addEventListener('click',()=>{
    login1.classList.add('show-login');
});

if(loginClose1){
    loginClose1.addEventListener('click',()=>{
        login1.classList.remove('show-login');
    });
}

///active nav link
const links=document.querySelectorAll("nav li");
console.log(links);

links.forEach(li =>{
    li.addEventListener("click",()=>{
        resetlinks();
        li.classList.add('active');
    })
})
function resetlinks(){
    links.forEach(li=>{
        li.classList.remove('active');
    })
}



///img slider

const slideimgs = document.getElementById("slideimg");

let img = new Array(
    "image/img/img1.avif",
    "image/img/img2.webp",
    "image/img/img3.avif",
    "image/img/img4.avif",
    "image/img/img5.avif",
    "image/img/img8.avif",
    "image/img/img9.avif",
    "image/img/img10.avif",
    "image/img/img6.webp"
    
);
let len=img.length;

let i=0;
function slider(){
    if(i>len-1){
        i=0;
    }

    slideimgs.src = img[i];
    i++;
    setTimeout('slider()', 3000);
}

// change the text ()
const text =document.getElementById("wordch");

const textload = ()=>{
    setTimeout(() => {
        text.textContent ="STAFF"
    }, 0);

    setTimeout(() => {
        text.textContent ="Management"
    },3000);

    setTimeout(() => {
        text.textContent ="System"
    }, 6000);
}

textload();
setInterval(textload,12000)