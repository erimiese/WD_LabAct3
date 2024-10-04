@extends('Components.Layout')

@section('title', 'Contact Us')

@section('content')
    <section class="contact-us">
        <h1>Contact Us</h1>
        <p>If you have any questions, feel free to reach out using the form below or connect with us through our social media platforms!</p>

        <!-- Contact Form -->
        <form action="/send-message" method="POST" class="contact-form">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Your Name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Your Email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" placeholder="Write your message here..." required></textarea>

            <button type="submit" class="btn-submit">Send Message</button>
        </form>

        <!-- Contact Information -->
        <div class="contact-info">
            <h2>Email Us:</h2>
            <p><a href="mailto:support@foodcompany.com">support@foodcompany.com</a></p>

            <!-- Social Media Icons -->
            <h2>Follow Us:</h2>
            <ul class="social-media">
                <li><a href="https://twitter.com/foodcompany" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://facebook.com/foodcompany" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://instagram.com/foodcompany" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </section>
@endsection
