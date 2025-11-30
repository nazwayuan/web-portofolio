@extends('layouts.app')

@section('title', 'Contact - Portofolio')

@section('content')
<div class="page-header">
    <h1>Contact <span>Me</span></h1>
    <p>Let's work together on your next project</p>
</div>

<div class="contact-container">
    <div class="contact-info">
        <div class="contact-item">
            <div class="contact-icon">📧</div>
            <h3>Email</h3>
            <p>your@email.com</p>
        </div>
        
        <div class="contact-item">
            <div class="contact-icon">📱</div>
            <h3>Phone</h3>
            <p>+62 812 3456 7890</p>
        </div>
        
        <div class="contact-item">
            <div class="contact-icon">📍</div>
            <h3>Location</h3>
            <p>Yogyakarta, Indonesia</p>
        </div>
        
        <div class="contact-item">
            <div class="contact-icon">🌐</div>
            <h3>Social Media</h3>
            <div class="social-links">
                <a href="#" target="_blank">Instagram</a>
                <a href="#" target="_blank">LinkedIn</a>
                <a href="#" target="_blank">GitHub</a>
            </div>
        </div>
    </div>
    
    <div class="contact-form">
        <h2>Send Message</h2>
        <form>
            <div class="form-group">
                <label>Name</label>
                <input type="text" placeholder="Your name" required>
            </div>
            
            <div class="form-group">
                <label>Email</label>
                <input type="email" placeholder="Your email" required>
            </div>
            
            <div class="form-group">
                <label>Subject</label>
                <input type="text" placeholder="Subject" required>
            </div>
            
            <div class="form-group">
                <label>Message</label>
                <textarea rows="5" placeholder="Your message" required></textarea>
            </div>
            
            <button type="submit" class="btn-primary">Send Message</button>
        </form>
    </div>
</div>
@endsection