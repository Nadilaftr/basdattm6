

<?php $__env->startSection('content'); ?>
    <section>
        <h1>Edit Keterampilan</h1>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('skill.update', $skill->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="skill_name">Nama Keterampilan</label>
                <input type="text" name="skill_name" class="form-control" value="<?php echo e(old('skill_name', $skill->skill_name)); ?>">
            </div>

            <div class="form-group">
                <label for="proficiency">Tingkat Keahlian</label>
                <input type="number" name="proficiency" class="form-control" value="<?php echo e(old('proficiency', $skill->proficiency)); ?>" min="1" max="5">
            </div>

            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea name="description" class="form-control"><?php echo e(old('description', $skill->description)); ?></textarea>
            </div>

            <button type="submit" class="btn btn-success">Perbarui</button>
            <a href="<?php echo e(route('skill.index')); ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\basdat\resources\views/skill/edit.blade.php ENDPATH**/ ?>