/***NAV***/
function toggleMenu() {
    const navLinks = document.querySelector('nav ul');
    navLinks.classList.toggle('show');
}



window.addEventListener("scroll", function () {
    let navbar = document.querySelector("nav")
    navbar.classList.toggle("sticky", window.scrollY > 100)
})
window.addEventListener("scroll", function () {
    let header = document.querySelector("header")
    header.classList.toggle("change", window.scrollY > 100)
})

/***CAROUSEL***/
let next = document.querySelector('.next')
let pre = document.querySelector('.pre')
let autoPlayInterval; // 用來存儲自動輪播的Interval

function startAutoPlay() {
    autoPlayInterval = setInterval(function () {
        let items = document.querySelectorAll('.item');
        document.querySelector('.slide').appendChild(items[0]);
    }, 5000); // 設定自動輪播的時間間隔，這裡是每5秒切換一次
}

function stopAutoPlay() {
    clearInterval(autoPlayInterval);
}
next.addEventListener('click', function () {
    let items = document.querySelectorAll('.item')
    document.querySelector('.slide').appendChild(items[0])
    stopAutoPlay();
})
pre.addEventListener('click', function () {
    let items = document.querySelectorAll('.item')
    document.querySelector('.slide').prepend(items[items.length - 1])
    stopAutoPlay();
})

// 自動啟動輪播
startAutoPlay();

// 在頁面失去焦點時停止自動輪播，回到頁面時重新啟動自動輪播
document.addEventListener('visibilitychange', function () {
    if (document.visibilityState === 'hidden') {
        stopAutoPlay();
    } else {
        startAutoPlay();
    }
});


/***調整SVG的VIEWBOX的RWD***/
function updateViewBox() {
    var svg = document.getElementById('visual');
    var isMobile = window.innerWidth <= 768; // Adjust this threshold based on your design

    if (isMobile) {
        svg.setAttribute('viewBox', '500 500 500 500'); // Adjust the viewBox values for mobile
    } else {
        svg.setAttribute('viewBox', '850 300 500 500'); // Set the original viewBox values
    }
}

window.addEventListener('resize', updateViewBox);
window.addEventListener('load', updateViewBox);

const tween = KUTE.fromTo(
    '#blob1',
    { path: '#blob1' },
    { path: '#blob2' },
    { repeat: 999, duration: 3000, yoyo: true }
)
tween.start();


/***FANCYBOX ***/
Fancybox.bind('[data-fancybox="gallery"]', {
});    


