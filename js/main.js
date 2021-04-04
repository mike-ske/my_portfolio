/* 
Code for active menu
*/

let nav__link = document.getElementsByClassName("list");
// let active = document.getElementsByClassName("active")[0];
let main_menu = document.getElementsByClassName("nav__list")[0];

for (let i = 0; i < nav__link.length; i++) {
    const list__item = nav__link[i];

    list__item.addEventListener("click", function () {
        document.getElementsByClassName("active")[0].classList.remove("active");
        nav__link[i].classList.add("active");
    })
    
    // ==== CODE TO HIDE THE MENU WHEN TABS ARE CLICKED
    list__item.addEventListener("click", function () {
        main_menu.classList.remove("show");
    })
}

/* 
============== CODE TO HIDE AND SHOW MENU ========
*/

let main__nav = document.getElementsByClassName("nav__list")[0];
let nav__icon = document.getElementsByClassName("box")[0];

nav__icon.addEventListener('click', function () {
    main__nav.classList.toggle("show");
})

// ============ CODE TO SET ACTIVE MENU FOOTER SECTION

let foot_menu = document.getElementsByClassName("ul__list")[0].getElementsByClassName("ft__list")[0].getElementsByClassName("ft_list_item")[0];

for (let i = 0; i < foot_menu.length; i++) {
    let ft__link = foot_menu[i];

    ft__link.addEventListener("click", function () {
        document.getElementsByClassName("active_2")[0].classList.remove("active_2");
        foot_menu.classList.add("active_2");
    })

}


// ========= set scroll nav =====

window.addEventListener("scroll", function () {
    document.getElementById("nav").classList.add("sticky");
    const currentScroll = window.pageYOffset;
    if (currentScroll <= 0) {
    document.getElementById("nav").classList.remove("sticky");
      return;
    }
});


// SMOOTH SCROLL ANNIMATION WITH SCROLL REVEAL


const scroll_item = ScrollReveal(
    {
        origin: 'bottom',
        distance: '80px',
        duration: 2000,
        reset: true
    }
)
// start assigning the scroll animation to all div containers


// =========== INDEX PAGE ANNIMATION ====
scroll_item.reveal('.hero__main', {delay: 100})
// scroll_item.reveal('.left_icon', {interval: 200})
scroll_item.reveal('.about__main', {delay: 100})
scroll_item.reveal('.skills__main', {delay: 100})
scroll_item.reveal('.outer__bx', {interval: 300})
scroll_item.reveal('.works__main', {delay: 100})
scroll_item.reveal('.grid__box', {interval: 200})
scroll_item.reveal('.expert__main', {delay: 100})
scroll_item.reveal('.box1', {interval: 200})

scroll_item.reveal('.contact__main', {delay: 100})
scroll_item.reveal('.animate__scroll', {interval: 200})




//  ========= CONTACT PAGE ANIMATION =====



