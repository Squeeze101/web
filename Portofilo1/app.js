// project cards open and close functions

let projects = document.querySelectorAll('.project-card');

projects.forEach((card, index) => {

    let closeBtn = card.querySelector('.close-btn');
    closeBtn.addEventListener('click', () => {
        projects.forEach((item, i) => {
            item.classList.remove('blur')
        })
        card.classList.remove('active');
    })

    card.addEventListener('click', (e) => {
        if(e.path[0] != closeBtn){
            projects.forEach((item, i) => {
                if(i != index){
                    item.classList.add('blur')
                }
            })
            card.classList.add('active')
        }
    })

})

// project filter function

const tags = document.querySelectorAll('.filter-btn');

tags.forEach(btn => {
    btn.addEventListener('click', () => {
        projects.forEach(card => {
            if(btn.innerHTML.toLowerCase() == 'all'){
                card.style.display = 'block';
            } else{
                if(card.getAttribute('data-tags').includes(btn.innerHTML.toLowerCase())){
                    card.style.display = 'block';
                } else{
                    card.style.display = 'none';
                }
            }
        })

        tags.forEach(item => item.classList.remove('active'));
        btn.classList.add('active')
    })
})

const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-links-container");
const navLink = document.querySelectorAll(".nav-link");

hamburger.addEventListener("click", mobileMenu);
navLink.forEach(n => n.addEventListener("click", closeMenu));

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}

