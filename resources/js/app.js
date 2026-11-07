
// TO LINK TO FIRESTORE
import './firebase';
import './courses';

// MOBILE NAVIGATION MENU TOGGLE
const menuToggle = document.getElementById('nav-toggle');
const mobileNavigation = document.getElementById('mobile-navigation');

if (menuToggle && mobileNavigation) {

    // OPEN AND CLOSE THE MENU EVENTLISTENERS
    menuToggle.addEventListener('click', function () {

        mobileNavigation.classList.toggle('show');

        const isOpen = mobileNavigation.classList.contains('show');
        menuToggle.setAttribute('aria-expanded', isOpen);
        menuToggle.setAttribute(
            'aria-label',
            isOpen ? 'Close navigation menu' : 'Open navigation menu'
        );

    });


    // CLOSE MENU WHEN A LINK IS CLICKED
    const navigationLinks = mobileNavigation.querySelectorAll('a');

    navigationLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            mobileNavigation.classList.remove('show');
            menuToggle.setAttribute('aria-expanded', false);
            menuToggle.setAttribute(
                'aria-label',
                'Open navigation menu'
            );
        });
    });

    // CLOSE MENU WHEN CLICKING OUTSIDE IT
    document.addEventListener('click', function (event) {
        if (
            !mobileNavigation.contains(event.target) &&
            !menuToggle.contains(event.target)
        ) {
            mobileNavigation.classList.remove('show');
            menuToggle.setAttribute('aria-expanded', false);
            menuToggle.setAttribute(
                'aria-label',
                'Open navigation menu'
            );
        }
    });

    // CLOSE MENU WHEN ESCAPE IS PRESSED
    document.addEventListener('keydown', function (event) {

        if (event.key === 'Escape') {
            mobileNavigation.classList.remove('show');
            menuToggle.setAttribute('aria-expanded', false);
            menuToggle.setAttribute(
                'aria-label',
                'Open navigation menu'
            );
        }
    });

    // CLOSE MENU WHEN RETURNING TO DESKTOP VIEW
    window.addEventListener('resize', function () {

        if (window.innerWidth > 1050) {
            mobileNavigation.classList.remove('show');
            menuToggle.setAttribute('aria-expanded', false);
            menuToggle.setAttribute(
                'aria-label',
                'Open navigation menu'
            );
        }
    });
}
