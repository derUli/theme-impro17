<?php

defined('ULICMS_ROOT') || exit('No direct script access allowed');

use App\Translations\JSTranslation;

Template::comments();

?>
</main>
</div>
<footer class="footer">
    <?php Template::footerText(); ?>
</footer>
<?php Template::footer(); ?>
</div>
<?php
$translation = new JSTranslation();
$translation->addKey('menu');
$translation->renderJS();

enqueueScriptFile(getTemplateDirPath(get_theme()) . 'main.js');
combinedScriptHtml();
?>
</body>
</html>
