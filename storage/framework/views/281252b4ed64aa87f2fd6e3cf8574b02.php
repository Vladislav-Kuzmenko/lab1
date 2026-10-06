<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title', 'ФК "Локомотив" — Спортивний Клуб'); ?></title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f8f9fa;">

<!-- Головне меню спортивного клубу -->
<nav style="background-color: #1a252f; padding: 15px 30px; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 2px 5px rgba(0,0,0,0.2);">
    <div style="color: #e74c3c; font-size: 20px; font-weight: bold; letter-spacing: 1px;">
        ⚽ ФК «ЛОКОМОТИВ»
    </div>
    <div>
        <a href="<?php echo e(url('/')); ?>" style="color: white; margin-right: 20px; text-decoration: none; font-weight: bold;">Головна</a>
        <a href="<?php echo e(url('/teams')); ?>" style="color: #ecf0f1; margin-right: 20px; text-decoration: none;">Команди</a>
        <a href="<?php echo e(url('/matches')); ?>" style="color: #ecf0f1; margin-right: 20px; text-decoration: none;">Матчі та Турніри</a>
        <a href="<?php echo e(url('/news')); ?>" style="color: #ecf0f1; margin-right: 20px; text-decoration: none;">Новини</a>
        <a href="<?php echo e(url('/contacts')); ?>" style="color: #ecf0f1; text-decoration: none;">Контакти</a>
    </div>
</nav>

<!-- Основний контент -->
<main style="padding: 40px 20px; min-height: 400px; max-width: 1100px; margin: 0 auto;">
    <?php echo $__env->yieldContent('content'); ?>
</main>

<!-- Підвал (Footer) спортивного клубу -->
<footer style="background-color: #1a252f; border-top: 3px solid #e74c3c; color: #bdc3c7; padding: 25px 20px; text-align: center;">
    <div style="margin-bottom: 10px; font-weight: bold; color: white;">
        Спортивний клуб ФК «Локомотив»
    </div>
    <p style="font-size: 14px; margin: 5px 0;">
        Офіційний портал команди та спортивної секції.
    </p>
    <div style="margin-top: 15px; font-size: 13px; color: #7f8c8d;">
        &copy; <?php echo e(date('Y')); ?> Усі права захищено | Розробив: Кузьменко Владислав (Група РС-42)
    </div>
</footer>

</body>
</html>
<?php /**PATH C:\Users\Vlad\Desktop\Projects1\reference-app\resources\views/layouts/app.blade.php ENDPATH**/ ?>