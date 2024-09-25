

<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <section>
            <h1 class="text-center mb-4">Tambah Keterampilan Baru</h1>

            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form action="<?php echo e(route('skill.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group mb-3">
                    <label for="skill_name" class="form-label">Nama Keterampilan</label>
                    <input type="text" name="skill_name" class="form-control" value="<?php echo e(old('skill_name')); ?>" placeholder="Masukkan nama keterampilan" required>
                </div>

                <div class="form-group mb-3">
                    <label for="proficiency" class="form-label">Tingkat Keahlian (1-5)</label>
                    <input type="number" name="proficiency" class="form-control" value="<?php echo e(old('proficiency')); ?>" min="1" max="5" placeholder="1-5" required>
                </div>

                <div class="form-group mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea name="description" class="form-control" rows="4" placeholder="Deskripsikan keterampilan" required><?php echo e(old('description')); ?></textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?php echo e(route('skill.index')); ?>" class="btn btn-secondary">Kembali</a>
                </div>
            </form>

        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\basdat\resources\views/skill/create.blade.php ENDPATH**/ ?>