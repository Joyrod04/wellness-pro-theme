<?php
/* Template Name: Front Page */

get_header(); ?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Welcome to Wellness Pro Services & Solutions</h1>
        <p>Your journey to wellness begins here.</p>
        <a href="#services" class="btn">Explore Our Services</a>
    </div>
</section>

<!-- Services Grid -->
<section id="services" class="services-grid">
    <h2>Our Services</h2>
    <div class="grid">
        <div class="service-item">
            <h3>Service 1</h3>
            <p>Description of service 1.</p>
        </div>
        <div class="service-item">
            <h3>Service 2</h3>
            <p>Description of service 2.</p>
        </div>
        <div class="service-item">
            <h3>Service 3</h3>
            <p>Description of service 3.</p>
        </div>
        <div class="service-item">
            <h3>Service 4</h3>
            <p>Description of service 4.</p>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="gallery">
    <h2>Our Gallery</h2>
    <div class="gallery-images">
        <img src="gallery-image1.jpg" alt="Gallery Image 1">
        <img src="gallery-image2.jpg" alt="Gallery Image 2">
        <img src="gallery-image3.jpg" alt="Gallery Image 3">
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials">
    <h2>What Our Clients Say</h2>
    <blockquote>
        <p>"This is the best wellness service I've ever experienced!"</p>
        <cite>- Happy Client</cite>
    </blockquote>
    <blockquote>
        <p>"Transformative journey towards health and well-being."</p>
        <cite>- Satisfied Client</cite>
    </blockquote>
</section>

<?php get_footer(); ?>
