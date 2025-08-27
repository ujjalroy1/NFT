// Toggle password visibility
        function togglePassword(inputId, icon) {
            const input = document.getElementById(inputId);
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }

        // Check password strength
        function checkPasswordStrength(password) {
            const strengthBar = document.getElementById('strengthBar');
            const strengthText = document.getElementById('strengthText');
            
            // Reset the bar completely
            strengthBar.className = 'strength-bar';
            strengthBar.style.width = '0%';
            strengthBar.style.backgroundColor = '';
            
            if (password.length === 0) {
                strengthText.textContent = '';
                strengthText.style.color = '#9ca3af';
                return;
            }
            
            let strength = 0;
            let feedback = [];
            
            // Length check
            if (password.length >= 8) {
                strength++;
            } else {
                feedback.push('At least 8 characters');
            }
            
            // Uppercase check
            if (/[A-Z]/.test(password)) {
                strength++;
            } else {
                feedback.push('One uppercase letter');
            }
            
            // Lowercase check
            if (/[a-z]/.test(password)) {
                strength++;
            } else {
                feedback.push('One lowercase letter');
            }
            
            // Number check
            if (/[0-9]/.test(password)) {
                strength++;
            } else {
                feedback.push('One number');
            }
            
            // Special character check
            if (/[^A-Za-z0-9]/.test(password)) {
                strength++;
            } else {
                feedback.push('One special character');
            }
            
            // Update strength indicator based on score
            if (strength <= 2) {
                strengthBar.style.width = '33%';
                strengthBar.style.backgroundColor = '#ef4444';
                strengthText.textContent = 'Weak - Missing: ' + feedback.slice(0, 2).join(', ');
                strengthText.style.color = '#ef4444';
            } else if (strength <= 3) {
                strengthBar.style.width = '66%';
                strengthBar.style.backgroundColor = '#f59e0b';
                strengthText.textContent = 'Medium - Missing: ' + feedback.join(', ');
                strengthText.style.color = '#f59e0b';
            } else if (strength === 4) {
                strengthBar.style.width = '85%';
                strengthBar.style.backgroundColor = '#3b82f6';
                strengthText.textContent = 'Good - Missing: ' + feedback.join(', ');
                strengthText.style.color = '#3b82f6';
            } else {
                strengthBar.style.width = '100%';
                strengthBar.style.backgroundColor = '#10b981';
                strengthText.textContent = 'Strong password!';
                strengthText.style.color = '#10b981';
            }
        }

        // Form validation
        document.querySelector('form').addEventListener('submit', function(e) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            
            if (password !== confirmPassword) {
                e.preventDefault();
                alert('Passwords do not match!');
                return;
            }
            
            if (!document.getElementById('terms').checked) {
                e.preventDefault();
                alert('Please agree to the Terms of Service and Privacy Policy');
                return;
            }
            
            // If all validations pass, you can submit the form
            e.preventDefault(); // Remove this line when connecting to backend
            alert('Account created successfully!');
        });