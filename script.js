
// let menu = document.querySelector('#menu-btn');
// let navbar = document.querySelector('.navbar');

// menu.onclick = () =>{
//     menu.classList.toggle('fa-times');
//     navbar.classList.toggle('active');
// }


// document.getElementById('login-btn').addEventListener('click', function() {
//   // Hiển thị hoặc ẩn biểu mẫu đăng nhập
//   var loginForm = document.getElementById('login-form');
//   if (loginForm.style.display === 'none') {
//       loginForm.style.display = 'block';
//   } else {
//       loginForm.style.display = 'none';
//   }
// });


navbar = document.querySelector('.header .navbar');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   profile.classList.remove('active');
}

profile = document.querySelector('.header .login-form');

document.querySelector('#login-btn').onclick = () =>{
   profile.classList.toggle('active');
   navbar.classList.remove('active');
}

window.onscroll = () =>{
   navbar.classList.remove('active');
   profile.classList.remove('active');
}

// điều chỉnh icon icon dấu 3 gạch khi thu nhỏ màn hình hiện menu



// let section = document.querySelectorAll('section');
// let navLink = document.querySelectorAll('header .navbar a');

// window.onscroll = () =>{
//     menu.classList.remove('fa-times');
//     navbar.classList.remove('active');

//     section.forEach(sec =>{
//       let top = window.scrollY;
//       let height = sec.offsetHeight;
//       let offset = sec.offsetTop - 150;
//       let id = sec.getAttribute('id');

//       if(top >= offset && top < offset + height){
//         navLink.forEach(links =>{
//           links.classList.remove('active');
//           document.querySelector('header .navbar a[href*='+id+']').classList.add('active');
//         });
//       }
//     });
// }


var swiper = new Swiper(".home-slide", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 7500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop:true,
  });
// chỉnh slide chạy ở phần đầu

//
var swiper = new Swiper(".review-slider", {
  spaceBetween: 20,
  centeredSlides: true,
  autoplay: {
    delay: 7500,
    disableOnInteraction: false,
  },
  loop:true,
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    640: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});
// chỉnh slide chạy ở phần review


//
function loader(){
  document.querySelector('.loader-container').classList.add('fade-out');
}

function fadeOut(){
  setInterval(loader, 3000);
}

window.onload = fadeOut;

// chỉnh phần loader gif


let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
}

// let loginForm = document.querySelector('.login-form');

// document.querySelector('#login-btn').onclick = () =>{
//     loginForm.classList.toggle('active');
// }
