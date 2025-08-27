
        let currentEmail = '';

        // Handle form submission
        document.getElementById('forgotForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            const alertMessage = document.getElementById('alertMessage');
            const sendBtn = document.getElementById('sendResetBtn');
            const btnText = document.getElementById('btnText');
            const btnSpinner = document.getElementById('btnSpinner');

            // Basic email validation
            if (!isValidEmail(email)) {
                showAlert('Please enter a valid email address', 'error');
                return;
            }

            // Show loading state
            sendBtn.disabled = true;
            btnText.textContent = 'Sending...';
            btnSpinner.classList.remove('hidden');
            hideAlert();

            // Simulate API call
            setTimeout(() => {
                currentEmail = email;
                
                // Hide loading state
                sendBtn.disabled = false;
                btnText.textContent = 'Send Reset Link';
                btnSpinner.classList.add('hidden');
                
                // Show success step
                showStep2();
            }, 2000);
        });

        // Email validation
        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        // Show alert message
        function showAlert(message, type = 'error') {
            const alertMessage = document.getElementById('alertMessage');
            const alertText = document.getElementById('alertText');
            
            alertText.textContent = message;
            alertMessage.className = `alert alert-${type}`;
            alertMessage.classList.remove('hidden');
        }

        // Hide alert message
        function hideAlert() {
            document.getElementById('alertMessage').classList.add('hidden');
        }

        // Show step 1
        function showStep1() {
            document.getElementById('step1').classList.remove('hidden');
            document.getElementById('step2').classList.add('hidden');
            document.getElementById('step1').classList.add('fade-in');
        }

        // Show step 2
        function showStep2() {
            document.getElementById('step1').classList.add('hidden');
            document.getElementById('step2').classList.remove('hidden');
            document.getElementById('step2').classList.add('fade-in');
            document.getElementById('emailSent').textContent = currentEmail;
        }

        // Resend email
        function resendEmail() {
            const resendBtn = document.getElementById('resendBtn');
            const resendText = document.getElementById('resendText');
            const resendSpinner = document.getElementById('resendSpinner');

            resendBtn.disabled = true;
            resendText.textContent = 'Sending...';
            resendSpinner.classList.remove('hidden');

            setTimeout(() => {
                resendBtn.disabled = false;
                resendText.textContent = 'Email Sent!';
                resendSpinner.classList.add('hidden');
                
                setTimeout(() => {
                    resendText.textContent = 'Resend Email';
                }, 2000);
            }, 1500);
        }

        // Open email client
        function openEmailClient() {
            // Try to detect email provider and open appropriate client
            const domain = currentEmail.split('@')[1].toLowerCase();
            let emailUrl = 'mailto:';

            if (domain.includes('gmail')) {
                emailUrl = 'https://mail.google.com';
            } else if (domain.includes('yahoo')) {
                emailUrl = 'https://mail.yahoo.com';
            } else if (domain.includes('outlook') || domain.includes('hotmail')) {
                emailUrl = 'https://outlook.live.com';
            }

            window.open(emailUrl, '_blank');
        }

        // Navigate to login
        function goToLogin() {
            window.location.href = 'login.html';
        }

        // Clear form when page loads
        window.addEventListener('load', function() {
            document.getElementById('email').value = '';
            hideAlert();
        });