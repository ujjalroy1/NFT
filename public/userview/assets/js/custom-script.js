// Mobile menu functionality
const mobileMenuBtn = document.getElementById('mobileMenuBtn');
const closeMobile = document.getElementById('closeMobile');
const sidebar = document.getElementById('sidebar');
const mobileOverlay = document.getElementById('mobileOverlay');

function openMobileMenu() {
    sidebar.classList.add('open');
    mobileOverlay.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeMobileMenu() {
    sidebar.classList.remove('open');
    mobileOverlay.classList.add('hidden');
    document.body.style.overflow = 'auto';
}

mobileMenuBtn.addEventListener('click', openMobileMenu);
closeMobile.addEventListener('click', closeMobileMenu);
mobileOverlay.addEventListener('click', closeMobileMenu);

// Profile dropdown functionality
const profileBtn = document.getElementById('profileBtn');
const profileDropdown = document.getElementById('profileDropdown');

profileBtn.addEventListener('click', function() {
    profileDropdown.classList.toggle('show');
    profileBtn.setAttribute('aria-expanded', profileDropdown.classList.contains('show'));
});

// Close dropdown when clicking outside
document.addEventListener('click', function(event) {
    if (!profileBtn.contains(event.target) && !profileDropdown.contains(event.target)) {
        profileDropdown.classList.remove('show');
        profileBtn.setAttribute('aria-expanded', 'false');
    }
});

// Handle window resize
window.addEventListener('resize', function() {
    if (window.innerWidth >= 1024) {
        closeMobileMenu();
    }
});

// Logout functionality
function handleLogout() {
    if (confirm('Are you sure you want to logout?')) {
        // Simulate logout process
        const body = document.body;
        // body.style.opacity = '0.5';
        body.style.pointerEvents = 'none';
        
        setTimeout(() => {
            // In a real application, this would redirect to login page
            window.location.href = '/login.html';
            alert('Logout successful! (In a real app, you would be redirected to login page)');
            // body.style.opacity = '1';
            // body.style.pointerEvents = 'auto';
        }, 1000);
    }
}
