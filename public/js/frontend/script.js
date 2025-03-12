document.addEventListener("DOMContentLoaded", () => {
    const progressBars = document.querySelectorAll('.progress-bar');

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const progressBar = entry.target;
                    const targetWidth = progressBar.getAttribute('data-target');
                    progressBar.style.width = `${targetWidth}%`;
                    observer.unobserve(progressBar); // Stop observing once animation is triggered
                }
            });
        },
        { threshold: 0.1 } // Trigger when 10% of the element is visible
    );

    progressBars.forEach(bar => observer.observe(bar));
});
