

<?php $__env->startSection('content'); ?>
<style>
    .container {
        max-width: 800px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    .btn {
        display: inline-block;
        padding: 10px 15px;
        font-size: 16px;
        cursor: pointer;
        border: none;
        border-radius: 4px;
        margin-top: 10px;
    }

    .btn-primary {
        background-color: #007bff;
        color: white;
    }

    .btn-warning {
        background-color: #ffc107;
        color: black;
    }

    .btn-danger {
        background-color: #dc3545;
        color: white;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-warning:hover {
        background-color: #e0a800;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }

    table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }

    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
</style>

<div class="container">
    <h1>Daftar Kontak</h1>

    <a href="<?php echo e(route('contacts.create')); ?>" class="btn btn-primary mb-3">Tambah Kontak</a>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Instansi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($contact->nama); ?></td>
                    <td><?php echo e($contact->email); ?></td>
                    <td><?php echo e($contact->telepon); ?></td>
                    <td><?php echo e($contact->alamat); ?></td>
                    <td><?php echo e($contact->instansi); ?></td>
                    <td>
                        <a href="<?php echo e(route('contacts.edit', $contact->id)); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?php echo e(route('contacts.destroy', $contact->id)); ?>" method="POST" style="display:inline-block;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\basdat\resources\views/contacts/index.blade.php ENDPATH**/ ?>