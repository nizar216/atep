<?php $__env->startSection('content'); ?>
        <!-- Checkout Content -->
        <div class="container-fluid no-padding checkout-content" style="margin-top: 50px;">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <!-- Order Summary -->
                    <div class="col-sm-12 locations text-left">
                        <div class="section-padding"></div>
                        <a href="<?php echo e(route('orders')); ?>" class="btn btn-xs btn-primary">
                            <i class="glyphicon glyphicon-arrow-left"></i> Return to orders
                        </a>
                        <br><br>
                        <h2>ORDER (PN-<?php echo e($order->id); ?>) <br><br></h2>
                        <table class="table table-bordererd table-hover">
                            <tr>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                               
                            </tr>
                            <?php $__currentLoopData = $order->baskets->basket_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $basket_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <a href="<?php echo e(route('product', $basket_product->product->slug)); ?>">
                                            <?php $__currentLoopData = $basket_product->product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <img class="img-responsive" style="width: 50px;"
                                                     src="/uploads/<?php echo e($image->name); ?>">
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('product', $basket_product->product->slug)); ?>">
                                            <?php echo e($basket_product->product->product_name); ?>

                                        </a>
                                    </td>
                                    <td><?php echo e($basket_product->quantity); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <div id='map' style='width: 400px; height: 300px;'></div>
                            <script>
                            mapboxgl.accessToken = 'pk.eyJ1Ijoibml6YXIyMTY4IiwiYSI6ImNrM3ZrYXB6NzBmODczcHFlbWo4MGhmdnYifQ.hEIBnpmr7vKeHf6LO_oXVQ';
                            var map = new mapboxgl.Map({
                            container: 'map',
                            center:[<?php echo e($order->latlong); ?>],
                            style: 'mapbox://styles/mapbox/streets-v11',
                            zoom:8,
                            });
                            </script>
                            <tr>
                                <th colspan="4" class="text-right">Status</th>
                                <td colspan="2"><?php echo e($order->status); ?></td>
                            </tr>
                        </table>
                    </div>


                </div>

            </div><!-- Container /- -->
            <div class="section-padding"></div>
        </div><!-- Checkout Content /- -->

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>