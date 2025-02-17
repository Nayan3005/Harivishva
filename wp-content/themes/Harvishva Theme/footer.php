<footer class="footer">
    <div class="container">
        <!-- Logo & Select a Project -->
        <div class="footer-top">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Harivishva Logo" class="footer-logo">
            <br>
            <div class="project-dropdown-wrapper">
                <select class="project-dropdown">
                    <option>Select a Project in Pune</option>
                    <option>Project 1</option>
                    <option>Project 2</option>
                    <option>Project 3</option>
                </select>
            </div>
        </div>

        <!-- Divider -->
        <div class="divider"></div>

        <!-- Footer Widgets -->
        <div class="footer-widgets">
            <?php if (is_active_sidebar('footer-1')) : ?>
                <div class="footer-widget">
                    <?php dynamic_sidebar('footer-1'); ?>
                </div>
            <?php endif; ?>

            <?php if (is_active_sidebar('footer-2')) : ?>
                <div class="footer-widget">
                    <?php dynamic_sidebar('footer-2'); ?>
                </div>
            <?php endif; ?>

            <?php if (is_active_sidebar('footer-3')) : ?>
                <div class="footer-widget">
                    <?php dynamic_sidebar('footer-3'); ?>
                </div>
            <?php endif; ?>

            <?php if (is_active_sidebar('footer-4')) : ?>
                <div class="footer-widget">
                    <?php dynamic_sidebar('footer-4'); ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="footer-bottom">
            <p>© <?php echo date('Y'); ?> HARIVISHVA. All Rights Reserved.</p>
            <p>
                <a href="<?php echo site_url('/privacy-policy'); ?>">Privacy Policy</a> |
                <a href="<?php echo site_url('/terms-and-conditions'); ?>">Terms & Conditions</a>
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
