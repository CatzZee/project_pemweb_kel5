function animateCount(id, target, duration) {
    const element = document.getElementById(id);
    let start = 0;
    const frameRate = 60;
    const totalFrames = Math.round((duration / 1000) * frameRate);
    const increment = target / totalFrames;

    let frame = 0;

    const counter = setInterval(() => {
        frame++;
        const value = Math.round(increment * frame);
        element.innerText = value.toLocaleString();

        if (frame >= totalFrames) {
            clearInterval(counter);
            element.innerText = target.toLocaleString();
        }
    }, 1000 / frameRate);
}
function startCountAnimation() {
    animateCount("count1", 1200, 1500);
    animateCount("count2", 35000, 1500);
    animateCount("count3", 5, 1500);
    animateCount("count4", 30, 1500);
}
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            startCountAnimation();
        }
    });
}, {
    threshold: 0.1 
});
const section = document.querySelector('.bg-light');
if (section) {
    observer.observe(section);
}
AOS.init();
