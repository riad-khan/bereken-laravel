<?php $__env->startComponent($view, $params); ?>
    <?php $__env->slot($slotOrSection); ?>
        <?php echo $manager->initialDehydrate()->toInitialResponse()->effects['html']; ?>

    <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\Users\riadk\Documents\mftp_zip_2023_06_04_22_19_54\vendor\livewire\livewire\src/Macros/livewire-view-component.blade.php ENDPATH**/ ?>