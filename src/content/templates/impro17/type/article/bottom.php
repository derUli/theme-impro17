<?php $meta = get_article_meta(); ?>
<?php if (StringHelper::isNotNullOrEmpty($meta->article_author_name)) { ?>
    <p class="author-info"><?php
        if (StringHelper::isNullOrEmpty($meta->article_author_email)) {
            translate("ARTICLE_WRITTEN_BY_X", array(
                "%author%" => Template::getEscape($meta->article_author_name)
            ));
        } else {
            translate("ARTICLE_WRITTEN_BY_X_WITH_LINK", array(
                "%author%" => Template::getEscape($meta->article_author_name),
                "%email%" => Template::getEscape($meta->article_author_email)
            ));
        }
        ?></p>
<?php } ?>
<?php if (StringHelper::isNotNullOrEmpty(get_meta_keywords())) { ?>
    <p class="tags">
        <strong><?php translate("tags") ?>:</strong> <br />
        <?php Template::escape(get_meta_keywords()); ?>
    </p>
<?php } ?>
<?php
require_once getTemplateDirPath(get_theme()) . "/bottom.php";
