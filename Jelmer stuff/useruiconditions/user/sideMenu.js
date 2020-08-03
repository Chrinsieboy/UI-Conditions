function navSlide() {
    const burger = document.querySelector(".burger");
    const side = document.querySelector(".sideMenu");
    const navLinks = document.querySelectorAll(".sideMenu li");
    
    burger.addEventListener("click", () => {
        //Toggle Nav
        side.classList.toggle("sideMenu-active");
        
        //Animate Links
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = ""
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
            }
        });
        //Burger Animation
        burger.classList.toggle("toggle");
    });
}

navSlide();