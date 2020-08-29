<?php if (!defined('LOCAL')) exit(); ?>

<?php if ($class->getHead() !== ''): ?>
    <div class="container p-0">
        <?php foreach($class->getMessage() as $value): ?>
            <div class="bg-<?= $class->getHead() ?> text-light mt-4 py-3 rounded-lg text-center">
                <?= $value ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>