new ModalVideo('.deternimation-video-trigger');


// Initialize Swiper
const swiperPosts = new Swiper('.swiper-posts-container', {
    // Basic slider configuration
    slidesPerView: 1,
    spaceBetween: 60,

    // Responsive breakpoints
    breakpoints: {
        // Desktop and tablet (2 slides)
        768: {
            slidesPerView: 2,
            spaceBetween: 40
        }
    },

    // Navigation controls
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },

    // Optional parameters
    loop: true,
    grabCursor: true
});

// Custom navigation event listeners
document.querySelector('.custom-prev-button').addEventListener('click', () => {
    swiperPosts.slidePrev();
});

document.querySelector('.custom-next-button').addEventListener('click', () => {
    swiperPosts.slideNext();
});