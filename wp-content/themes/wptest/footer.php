        </main>
        <footer>
            <hr>
            <h2>I'm footer</h2>
            <div>
                <?php wp_nav_menu([
                    'theme_location' => 'footer',
                    'container' => 'false',
                    'menu_class' => 'nav-menu'
                ]) ?>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
