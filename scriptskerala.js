document.getElementById('scrollButton').addEventListener('click', function() {
    smoothScrollTo('.timeline', 1000); 
});

function smoothScrollTo(target, duration) {
    const targetElement = document.querySelector(target);
    const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY;
    const startPosition = window.scrollY;
    const startTime = performance.now();
    
    function animate(currentTime) {
        const elapsedTime = currentTime - startTime;
        const progress = Math.min(elapsedTime / duration, 1);
        const easeInOutProgress = 0.5 - Math.cos(progress * Math.PI) / 2;
        
        window.scrollTo(0, startPosition + (targetPosition - startPosition) * easeInOutProgress);
        
        if (progress < 1) {
            requestAnimationFrame(animate);
        }
    }
    
    requestAnimationFrame(animate);
}

