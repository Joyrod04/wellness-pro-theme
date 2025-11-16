<?php
/**
 * Template Name: Contact Page
 */
get_header(); ?>

<div class="contact-form-container">
    <h2>Contact Us</h2>
    <form id="advanced-contact-form" action="/submit-contact-form" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="service_type">Service Type:</label>
        <select id="service_type" name="service_type" required>
            <option value="">Select a service</option>
            <option value="consultation">Consultation</option>
            <option value="massage">Massage</option>
            <option value="yoga">Yoga</option>
            <option value="nutrition">Nutrition</option>
        </select>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <label for="preferred_service_date">Preferred Service Date:</label>
        <input type="date" id="preferred_service_date" name="preferred_service_date" required>

        <label for="preferred_service_time">Preferred Service Time:</label>
        <select id="preferred_service_time" name="preferred_service_time" required>
            <?php for ($hour = 8; $hour <= 17; $hour++): ?>
                <option value="<?= sprintf('%02d:00', $hour) ?>"><?= sprintf('%02d:00', $hour) ?> AM</option>
                <option value="<?= sprintf('%02d:00', $hour + 12) ?>"><?= sprintf('%02d:00', $hour) ?> PM</option>
            <?php endfor; ?>
        </select>

        <button type="submit">Send Message</button>
    </form>
</div>

<?php get_footer(); ?>