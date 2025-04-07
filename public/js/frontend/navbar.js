


document.addEventListener("DOMContentLoaded", function() {
    const lastItem = document.getElementById("lastItem");
    const otherItems = document.querySelectorAll(".navbar-nav li:not(#lastItem)");
    const logo = document.querySelectorAll(".navbar-brand .md-logo");
    const navbar = document.querySelector(".navbar");
    const navbarLinks = document.querySelectorAll(".navbar-nav li:not(#lastItem) a");

    function checkScroll() {
        const width = lastItem.offsetWidth;
        if (window.scrollY > 100) {
            gsap.to(lastItem, { opacity: 1, y: 0, duration: 0.5, ease: "power1.out" });
            gsap.to(otherItems, { x: -10, duration: 0.5, ease: "power1.out" });
            gsap.to(logo, { duration: 0, rotation: "10", ease: "power1.in" });

            navbarLinks.forEach(item => item.style.color = ""); // tu opravene
            navbar.style.backgroundColor = "";
        } else {
            gsap.to(lastItem, { opacity: 0, y: -20, duration: 0.5, ease: "power3.out" });
            gsap.to(otherItems, { x: width / 2, duration: 0.5, ease: "power1.out" });
            gsap.to(logo, { duration: 0, rotation: "-10", ease: "power1.out" });

            navbarLinks.forEach(item => item.style.color = "black"); // tu tiež
            navbar.style.backgroundColor = "rgba(200, 200, 200, 0.3)";
        }
    }

    window.addEventListener("scroll", checkScroll);
    checkScroll();
});
