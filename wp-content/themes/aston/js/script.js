jQuery(document).ready(function ($) {
    'use strict';

    /**
     * Smooth scroll to anchor links with data-href attribute
     */
    $('a[data-href]').on('click', function (event) {
        event.preventDefault();
        const targetId = $(this).data('href').substring(1);
        const targetElement = document.getElementById(targetId);
        if (targetElement) {
            targetElement.scrollIntoView({ behavior: 'smooth' });
        }
    });

    /**
     * Initialize Brand Swiper Carousel
     */
    if ($('.brand-swiper').length) {
        new Swiper(".brand-swiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                1024: {
                    slidesPerView: 3.5,
                },
                768: {
                    slidesPerView: 3,
                },
                480: {
                    slidesPerView: 2,
                },
            },
        });
    }

    /**
     * Initialize Antique Swiper Carousel
     */
    if ($('.antique-swiper').length) {
        new Swiper(".antique-swiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                1200: { 
                    slidesPerView: 5.2 
                },
                768: { 
                    slidesPerView: 2 
                },
            },
        });
    }

    /**
     * Initialize GLightbox for gallery
     */
    if (typeof GLightbox !== 'undefined') {
        const lightbox = GLightbox({
            selector: '.glightbox',
            touchNavigation: true,
            loop: true,
            autoplayVideos: true,
            closeButton: true,
            skin: 'clean'
        });
    }

    /**
     * Custom Mobile Menu Toggle
     */
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mobileMenuClose = document.querySelector('.mobile-menu__close');
    const mobileMenuOverlay = document.querySelector('.mobile-menu__overlay');
    
    if (mobileMenu && mobileMenuToggle) {
        // Open menu
        mobileMenuToggle.addEventListener('click', function() {
            mobileMenu.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
        
        // Close menu
        function closeMenu() {
            mobileMenu.classList.remove('active');
            document.body.style.overflow = '';
        }
        
        if (mobileMenuClose) {
            mobileMenuClose.addEventListener('click', closeMenu);
        }
        
        if (mobileMenuOverlay) {
            mobileMenuOverlay.addEventListener('click', closeMenu);
        }
        
        // Close on ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
                closeMenu();
            }
        });
    }

    // Thêm vào file JS hoặc <script>
    var heroSection = document.querySelector('.hero.lazyload');
    if (heroSection) {
        var bgUrl = heroSection.getAttribute('data-bg');
        if (bgUrl) {
            // Extract URL từ data-bg
            var urlMatch = bgUrl.match(/url\(([^)]+)\)/);
            if (urlMatch && urlMatch[1]) {
                heroSection.style.backgroundImage = 'url(' + urlMatch[1] + ')';
                heroSection.classList.remove('lazyload');
            }
        }
    }
});
