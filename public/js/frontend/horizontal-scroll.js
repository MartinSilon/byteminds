gsap.registerPlugin(ScrollTrigger);

if (document.body.clientWidth > 768) {

    let panels = gsap.utils.toArray(".client-div");
// Horizontálny scroll
    gsap.to(panels, {
        xPercent: -100 * (panels.length - 1),
        ease: "none",
        scrollTrigger: {
            trigger: ".scroll-container",
            pin: true,
            scrub: 1,
            // snap: 1 / (panels.length - 1),
            end: () => "+=" + document.querySelector(".project-container").offsetWidth

        }
    });

    ScrollTrigger.create({
        trigger: ".section__clients",
        start: "top center",
        end: "bottom center",
        onEnter: () => {
            gsap.to(".section__clients", {
                duration: 0.5
            });
            gsap.to(".navbar", {
                opacity: 0,
                pointerEvents: "none",
                duration: 0.5
            });
        },
        onEnterBack: () => {
            gsap.to(".section__clients", {
                duration: 0.5
            });
            gsap.to(".navbar", {
                opacity: 0,
                pointerEvents: "none",
                duration: 0.5
            });
        },
        onLeave: () => {
            gsap.to(".section__clients", {
                duration: 0.5
            });
            gsap.to(".navbar", {
                opacity: 1,
                pointerEvents: "auto",
                duration: 0.5
            });
        },
        onLeaveBack: () => {
            gsap.to(".section__clients", {
                duration: 0.5
            });
            gsap.to(".navbar", {
                opacity: 1,
                pointerEvents: "auto",
                duration: 0.5
            });
        }
    });
}else{

    gsap.utils.toArray(".client-div").forEach((elem, index) => {
        let direction = index % 2 === 0 ? 100 : -100;

        gsap.from(elem, {
            x: direction,
            opacity: 0,
            duration: 1,
            ease: "power2.out",
            scrollTrigger: {
                trigger: elem,
                start: "top 80%",
                toggleActions: "play none none reverse"
            }
        });
    });
}
