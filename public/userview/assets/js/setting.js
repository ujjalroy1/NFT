
// Tab functionality
const accountTab = document.getElementById('accountTab');
const securityTab = document.getElementById('securityTab');
const accountContent = document.getElementById('accountContent');
const securityContent = document.getElementById('securityContent');

accountTab.addEventListener('click', function() {
    // Remove active from all tabs
    document.querySelectorAll('.tab-btn').forEach(tab => tab.classList.remove('active'));
    document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
    
    // Add active to clicked tab
    accountTab.classList.add('active');
    accountContent.classList.add('active');
});

securityTab.addEventListener('click', function() {
    // Remove active from all tabs
    document.querySelectorAll('.tab-btn').forEach(tab => tab.classList.remove('active'));
    document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
    
    // Add active to clicked tab
    securityTab.classList.add('active');
    securityContent.classList.add('active');
});

// Alert functionality
function showAlert(alertId, type, message) {
    const alert = document.getElementById(alertId);
    alert.className = `alert ${type}`;
    alert.innerHTML = `<i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-triangle'} mr-2"></i>${message}`;
    alert.style.display = 'block';
    
    // Hide alert after 5 seconds
    setTimeout(() => {
        alert.style.display = 'none';
    }, 5000);
}

    // Account form functionality
    const accountForm = document.getElementById('accountForm');
    accountForm.addEventListener('submit', function(e) {
        e.preventDefault();
    
    // Basic form validation
    const firstName = document.getElementById('firstName').value.trim();
    const lastName = document.getElementById('lastName').value.trim();
    const email = document.getElementById('email').value.trim();
    const username = document.getElementById('username').value.trim();
    
    if (!firstName || !lastName || !email || !username) {
        showAlert('accountAlert', 'error', 'Please fill in all required fields!');
        return;
    }
    
    // Email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        showAlert('accountAlert', 'error', 'Please enter a valid email address!');
        return;
    }
    
    // Simulate API call with loading state
    const submitBtn = accountForm.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Saving...';
    submitBtn.disabled = true;
    
    setTimeout(() => {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
        showAlert('accountAlert', 'success', 'Account information updated successfully!');
    }, 1500);
});

function resetAccountForm() {
    document.getElementById('firstName').value = 'John';
    document.getElementById('lastName').value = 'Doe';
    document.getElementById('email').value = 'john@example.com';
    document.getElementById('username').value = 'johndoe';
    document.getElementById('bio').value = 'NFT collector and blockchain enthusiast. Passionate about digital art and decentralized technologies.';
    
    // Hide any existing alerts
    const alert = document.getElementById('accountAlert');
    alert.style.display = 'none';
}

// Password form functionality
const passwordForm = document.getElementById('passwordForm');
passwordForm.addEventListener('submit', function(e) {
    e.preventDefault();
    
    const currentPassword = document.getElementById('currentPassword').value;
    const newPassword = document.getElementById('newPassword').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    
    // Validation
    if (!currentPassword || !newPassword || !confirmPassword) {
        showAlert('securityAlert', 'error', 'Please fill in all password fields!');
        return;
    }
    
    if (newPassword !== confirmPassword) {
        showAlert('securityAlert', 'error', 'New passwords do not match!');
        return;
    }
    
    if (newPassword.length < 8) {
        showAlert('securityAlert', 'error', 'Password must be at least 8 characters long!');
        return;
    }
    
    // Check password strength
    let strength = 0;
    if (/[a-z]/.test(newPassword)) strength++;
    if (/[A-Z]/.test(newPassword)) strength++;
    if (/[0-9]/.test(newPassword)) strength++;
    if (/[^A-Za-z0-9]/.test(newPassword)) strength++;
    
    if (strength < 2) {
        showAlert('securityAlert', 'error', 'Password is too weak. Please include uppercase, lowercase, numbers, and special characters!');
        return;
    }
    
    // Simulate API call
    const submitBtn = passwordForm.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Updating...';
    submitBtn.disabled = true;
    
    setTimeout(() => {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
        showAlert('securityAlert', 'success', 'Password updated successfully!');
        passwordForm.reset();
        document.getElementById('passwordStrength').innerHTML = '';
    }, 2000);
});

// Password strength checker
document.getElementById('newPassword').addEventListener('input', function(e) {
    const password = e.target.value;
    const strengthDiv = document.getElementById('passwordStrength');
    
    if (password.length === 0) {
        strengthDiv.innerHTML = '';
        return;
    }
    
    let strength = 0;
    let feedback = '';
    let requirements = [];
    
    if (password.length >= 8) {
        strength++;
        requirements.push('<span class="text-green-400">✓ 8+ characters</span>');
    } else {
        requirements.push('<span class="text-red-400">✗ 8+ characters</span>');
    }
    
    if (/[a-z]/.test(password)) {
        strength++;
        requirements.push('<span class="text-green-400">✓ Lowercase letter</span>');
    } else {
        requirements.push('<span class="text-red-400">✗ Lowercase letter</span>');
    }
    
    if (/[A-Z]/.test(password)) {
        strength++;
        requirements.push('<span class="text-green-400">✓ Uppercase letter</span>');
    } else {
        requirements.push('<span class="text-red-400">✗ Uppercase letter</span>');
    }
    
    if (/[0-9]/.test(password)) {
        strength++;
        requirements.push('<span class="text-green-400">✓ Number</span>');
    } else {
        requirements.push('<span class="text-red-400">✗ Number</span>');
    }
    
    if (/[^A-Za-z0-9]/.test(password)) {
        strength++;
        requirements.push('<span class="text-green-400">✓ Special character</span>');
    } else {
        requirements.push('<span class="text-red-400">✗ Special character</span>');
    }
    
    let strengthText = '';
    let strengthColor = '';
    
    switch (true) {
        case strength <= 1:
            strengthText = 'Very Weak';
            strengthColor = 'text-red-400';
            break;
        case strength === 2:
            strengthText = 'Weak';
            strengthColor = 'text-orange-400';
            break;
        case strength === 3:
            strengthText = 'Medium';
            strengthColor = 'text-yellow-400';
            break;
        case strength === 4:
            strengthText = 'Strong';
            strengthColor = 'text-blue-400';
            break;
        case strength === 5:
            strengthText = 'Very Strong';
            strengthColor = 'text-green-400';
            break;
    }
    
    feedback = `
        <div class="mb-2">
            <span class="font-medium">Password Strength: </span>
            <span class="${strengthColor}">${strengthText}</span>
        </div>
        <div class="grid grid-cols-2 gap-1 text-xs">
            ${requirements.join('')}
        </div>
    `;
    
    strengthDiv.innerHTML = feedback;
});

// Toggle password visibility
function togglePassword(inputId) {
    const input = document.getElementById(inputId);
    const button = input.nextElementSibling;
    const icon = button.querySelector('i');
    
    if (input.type === 'password') {
        input.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
        button.setAttribute('aria-label', 'Hide password');
    } else {
        input.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
        button.setAttribute('aria-label', 'Show password');
    }
}
