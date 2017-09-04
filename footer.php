        </div><!-- layout-content -->

        <footer class="footer">
            <div class="layout-wide cf">
                <ul class="footer-social cf">
                    <li><a class="twitter" href="https://twitter.com/JackBarham" target="_blank" title="Jack Barham on Twitter"><i class="icon-twitter"></i></a></li>
                    <li><a class="github" href="https://github.com/jackbarham" target="_blank" title="Jack Barham on GitHub"><i class="icon-github"></i></a></li>
                    <li><a class="linkedin" href="http://www.linkedin.com/pub/jack-barham/13/265/ba5" target="_blank" title="Jack Barham on LinkedIn"><i class="icon-linkedin"></i></a></li>
                    <li><a class="instagram" href="http://instagram.com/jackbarham" target="_blank" title="Jack Barham on Instagram"><i class="icon-instagram"></i></a></li>
                    <li><a class="medium" href="https://medium.com/@jackbarham" target="_blank" title="Jack Barham on Medium"><i class="icon-medium"></i></a></li>
                </ul>
                <ul class="footer-legal">
                    <li class="footer-twitter">
                        <a href="https://twitter.com/JackBarham" class="twitter-follow-button" data-show-count="true">Follow @JackBarham</a>
                    </li>
                    <li class="footer-copyright"><?php the_field('legal_line_1', 'option'); ?></li>
                    <li class="footer-copyright"><?php the_field('legal_line_2', 'option'); ?></li>
                </ul>
            </div>
        </footer>

    </div><!-- layout-wrapper -->

    <?php the_field('google_analytics_code', 'option'); ?>
    <script>
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
    </script>

</body>
</html>