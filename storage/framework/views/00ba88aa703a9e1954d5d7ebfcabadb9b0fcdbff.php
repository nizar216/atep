<?php $__env->startSection('content'); ?>

<div class="container" style="margin-top: 40px;">

    <div class="row">
        <div class="col-sm-12 locations text-center">
            <h2>ORDERS</h2><br><br>
            <?php if(count($orders) == 0): ?>
                <p>You do not have an order yet</p>
            <?php else: ?>
                <table class="table table-bordererd table-hover">
                    <tr>
                        <th>Orders ID</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="text-$order">
                            <td>PN-<?php echo e($order->id); ?></td>
                            <td><?php echo e($order->status); ?></td>
                            <td><a href="/orders/<?php echo e($order->id); ?>" class="btn-sm btn-success">Detail</a></td>
                            <?php if($order->status=="Your order has been received"): ?>
                            <td>
                            <form action="<?php echo e(route('order.update',$order->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn-sm btn-primary">Delivrer</button>
                            </form>
                            </td>
                            <?php endif; ?>
                            </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            <?php endif; ?>
        </div>
    </div>
</div><!-- Container /- -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>