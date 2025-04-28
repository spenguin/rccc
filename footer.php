            </main>
            <?php // get_sidebar(); ?>
        </div>
        <footer id="footer" role="contentinfo">
            <div id="copyright">
                &copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
            </div>
            <div class="social-media">
                <a href="https://www.instagram.com/raincitycomicon" target="_blank"><i class="fab fa-instagram icon-color"></i></a>
                <a href="https://bsky.app/profile/raincitycomicon.bsky.social" target="_blank"><i class="fa-brands fa-bluesky"></i></a>
                <a href="https://www.threads.com/@raincitycomiccon" target="_blank"><i class="fa-brands fa-threads"></i></a>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>