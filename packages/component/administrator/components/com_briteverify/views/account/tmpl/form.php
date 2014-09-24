<?php
/**
 * ComCloudinary
 *
 * @author      Jasper van Rijbroek <jasper@moyoweb.nl>
 * @category    Nooku
 * @package     Moyo Components
 * @subpackage  Cloudinary
 */

defined('KOOWA') or die('Restricted Access'); ?>

<?= @helper('behavior.mootools'); ?>
<script src="media://lib_koowa/js/koowa.js" />

<form method="post" action="<?= @route('view=account&id='.$account->id) ?>"  id="article-form" class="-koowa-form">
    <div class="row-fluid">
        <div class="span12">
            <fieldset>
                <div class="control-group">
                    <label class="control-label"><?= @text('Title'); ?></label>
                    <div class="controls">
                        <input class="span12 required" type="text" name="title" value="<?= @escape($account->title); ?>" placeholder="<?= @text('Title'); ?>" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?= @text('API Key'); ?></label>
                    <div class="controls">
                        <input class="span8 required" type="text" name="api_key" value="<?= @escape($account->api_key); ?>" placeholder="<?= @text('API Key'); ?>" />
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</form>