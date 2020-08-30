<?php if (!defined('LOCAL')) exit(); ?>

<?php if ($class->params->getHead() !== ''): ?>
    <div class="container p-0">
        <?php foreach($class->params->getMessage() as $value): ?>
            <div id="message" class="bg-<?= $class->params->getHead() ?> text-light mt-4 py-3 rounded-lg text-center">
                <?= $value ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>