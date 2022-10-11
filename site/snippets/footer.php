<footer>
    <!-- Adress -->

    <ul>
        <li> Wunderblock Foundation</li>
        <li>Trechwitzer Str. 13</li>
        <li>14550 Groß Kreutz</li>
        <li>
            <script type="text/javascript">
            /*<![CDATA[*/

            /***********************************************
             * Encrypt Email script- Please keep notice intact
             * Tool URL: http://www.dynamicdrive.com/emailriddler/
             * **********************************************/
            <!-- Encrypted version of: info [at] *********************.*** //-->

            var emailriddlerarray = [105, 110, 102, 111, 64, 119, 117, 110, 100, 101, 114, 98, 108, 111, 99, 107,
                102, 111, 117, 110, 100, 97, 116, 105, 111, 110, 46, 111, 114, 103
            ]
            var encryptedemail_id96 = '' //variable to contain encrypted email 
            for (var i = 0; i < emailriddlerarray.length; i++)
                encryptedemail_id96 += String.fromCharCode(emailriddlerarray[i])

            document.write('<a href="mailto:' + encryptedemail_id96 + '" class="email">' +
                encryptedemail_id96 +
                '</a>')

            /*]]>*/
            </script>
        </li>
    </ul>
    <ul>
        <li>
            <a href="https://www.katharinagrosse.com/" class="studio-link f-sans">Studio Katahrina Grosse</a>
        </li>
    </ul>

    <div class="footer-social">
        <a href="https://www.facebook.com/StudioKatharinaGrosse"
            target="_blank"><?= svg('assets/icons/facebook.svg') ?></a>
        <a href="https://www.instagram.com/wunderblockfoundation/"
            target="_blank"><?= svg('assets/icons/instagram.svg') ?></a>
        <a href="https://www.paypal.com/donate/?hosted_button_id=CL78MZYR69974" class="link-spenden"
            target="_blank"><?= t('spenden') ?></a>
    </div>





</footer>
<script src="<?= url('assets/js/vendor/jquery-3.4.1.min.js') ?>"></script>
<script src="<?= url('assets/js/vendor/cookieconsent/cookieconsent.min.js') ?>"></script>
<script src="<?= url('assets/js/cookie-settings.js') ?>"></script>
<script src="/assets/js/mouse-move.js"></script>
<script src="/assets/js/script.js"></script>

</body>

</html>