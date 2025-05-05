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
let hasAnimated = false;
window.addEventListener('scroll', () => {
    const section = document.querySelector('.bg-light');
    if (!section) return; // biar gak error kalo belum ada elemennya

    const rect = section.getBoundingClientRect();
    if (!hasAnimated && rect.top < window.innerHeight) {
        animateCount("count1", 1200, 1500);
        animateCount("count2", 30000, 1500);
        animateCount("count3", 5, 1500);
        animateCount("count4", 30, 1500);
        hasAnimated = true;
    }
});
AOS.init();
