

<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <section>
            <h1 class="text-center mb-4">Daftar Keterampilan</h1>
            <div class="text-center mb-3">
                <a href="<?php echo e(route('skill.create')); ?>" class="btn btn-primary">Tambah Keterampilan</a>
            </div>

            <?php if(session('success')): ?>
                <div class="alert alert-success mt-2 text-center">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center mt-3">
                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>Nama Keterampilan</th>
                            <th>Tingkat Keahlian</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $skill; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($skill->skill_name); ?></td>
                                <td><?php echo e($skill->proficiency); ?></td>
                                <td><?php echo e($skill->description); ?></td>
                                <td>
                                    <a href="<?php echo e(route('skill.edit', $skill->id)); ?>" class="btn btn-warning">Edit</a>
                                    <form action="<?php echo e(route('skill.destroy', $skill->id)); ?>" method="POST" style="display:inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah kamu yakin?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\basdat\resources\views/skill/index.blade.php ENDPATH**/ ?>