<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Center</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: white;
            margin: 0;
            padding: 0;
            background-color: black
        }
        h1, h2, h3 {
            margin-top: 30px;
            margin-bottom: 10px;
        }
        ul {
            list-style-type: none;
            padding-left: 0;
        }
        li {
            margin-bottom: 10px;
        }
        strong {
            font-weight: bold;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        p {
            margin-bottom: 20px;
        }
        /* Responsive styles */
        @media (max-width: 768px) {
            h1 {
                font-size: 28px;
            }
            h2 {
                font-size: 24px;
            }
            h3 {
                font-size: 20px;
            }
            p {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

    

   
        <div class="container">
          
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <div class="d-flex justify-content-end"> <!-- Align items to the end (right) -->
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __(' Back To Dashboard') }}
                </x-nav-link>
        </div>
    </nav>


<h1>Support Center</h1>

<h2>Welcome to Our Support Center</h2>
<p>Our support team is here to help you with any questions, issues, or concerns you may have. Please feel free to reach out to us for assistance.</p>

<h2>Contact Information</h2>
<ul>
    <li><strong>Email:</strong> weathersupport@gmail.com</li>
    <li><strong>Phone:</strong> +123-456-7890</li>
    <li><strong>Hours:</strong> Monday - Friday, 9:00 AM - 5:00 PM (EST)</li>
</ul>

<h2>Frequently Asked Questions (FAQs)</h2>
<h3>General Questions</h3>
<ul>
    <li><strong>Q:</strong> How do I create an account?</li>
    <li><strong>A:</strong> To create an account, click on the "Register" link in the top right corner of the page and follow the prompts to fill out the registration form.</li>
    
    <li><strong>Q:</strong> Can I change my password?</li>
    <li><strong>A:</strong> Yes, you can change your password by going to the "Settings" section of your account dashboard and selecting the "Change Password" option.</li>
</ul>

<h3>Account Management</h3>
<ul>
    <li><strong>Q:</strong> How do I update my profile information?</li>
    <li><strong>A:</strong> To update your profile information, navigate to the "Profile" section of your account dashboard and click on the "Edit Profile" button. Make your desired changes and save them.</li>
</ul>

<h3>Technical Support</h3>
<ul>
    <li><strong>Q:</strong> I'm experiencing issues with logging in. What should I do?</li>
    <li><strong>A:</strong> If you're having trouble logging in, please try resetting your password by clicking on the "Forgot Password" link on the login page. If the issue persists, contact our support team for further assistance.</li>
    
    <li><strong>Q:</strong> How do I report a bug or technical issue?</li>
    <li><strong>A:</strong> To report a bug or technical issue, please provide detailed information about the problem you're experiencing, including any error messages or screenshots. You can contact our support team via email at <a href="mailto:support@example.com">weathersupport@gmail.com</a>.</li>
</ul>

<h2>Submit a Support Ticket</h2>
<p>If you couldn't find the answer to your question in our FAQs or if you need further assistance, you can submit a support ticket using the form below. Our support team will respond to your inquiry as soon as possible.</p>


<p>Thank you for choosing our product/service. We're committed to providing you with the best possible support experience.</p>
</body>
</html>
