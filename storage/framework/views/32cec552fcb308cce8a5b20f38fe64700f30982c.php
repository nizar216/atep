<?php $__env->startSection('content'); ?>

    <!-- Checkout Content -->
    <div class="container-fluid no-padding checkout-content" style="margin-top: 40px">
        <!-- Container -->
        <div class="container">
            <?php if(!Auth::user()->detail->address): ?>
                <div class="alert alert-danger">
                    Please <strong>Complete</strong> Your Profile!
                    <br><a href="/profile/<?php echo e(auth()->user()->id); ?>/edit">Edit Profile</a>
                </div>
            <?php else: ?>
                <div class="row">
                    <form action="<?php echo e(route('pay')); ?>" method="POST" class="col-md-12">
                        <?php echo e(csrf_field()); ?>

                        <div class="section-padding"></div>

                        <!-- Order Summary -->
                        <!-- Payment Mode -->
                        <div class="col-md-12 payment-mode">
                            <div class="section-title">
                                <h3>CONTACT AND INVOICE INFORMATION...</h3>
                            </div>

                            <div class="section-padding"></div>
                            <div class="container">


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                   value="<?php echo e(Auth::user()->name); ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="surname">Surname</label>
                                            <input type="text" class="form-control" name="surname" id="surname"
                                                   value="<?php echo e(Auth::user()->surname); ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control phone" name="phone" id="phone"
                                                   value="<?php echo e($user_detail->phone); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="m_phone">Address</label>
                                            <input type="text" class="form-control m_phone" name="m_phone" id="m_phone"
                                                   value="<?php echo e($user_detail->address); ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control city" name="city" id="city"
                                                   placeholder="<?php echo e($user_detail->city); ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <input type="text" class="form-control country" name="country" id="country"
                                                   placeholder="<?php echo e($user_detail->country); ?>" required disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="city">Location</label>
                                            <input type="text" class="form-control country" name="latlong" id="latlong"
                                                   placeholder="<?php echo e($user_detail->latlong); ?>">
                                            <button onclick="getLocation()" type="button" class="btn btn-success">Get location</button>
                <div id='map' style='width: 400px; height: 300px;'></div>
                <script>
                mapboxgl.accessToken = 'pk.eyJ1Ijoibml6YXIyMTY4IiwiYSI6ImNrM3ZrYXB6NzBmODczcHFlbWo4MGhmdnYifQ.hEIBnpmr7vKeHf6LO_oXVQ';
                var map = new mapboxgl.Map({
                container: 'map',
                center:[10,30],
                style: 'mapbox://styles/mapbox/streets-v11',
                zoom:8,
                });
                </script>
                <script>
                var x = document.getElementById("latlong");
                function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                } else { 
                    x.innerHTML = "Geolocation is not supported by this browser.";
                }
                }

                function showPosition(position) {
                x.value = position.coords.longitude+','+position.coords.latitude;
                var marker = new mapboxgl.Marker()
                .setLngLat([position.coords.longitude,position.coords.latitude])
                .addTo(map);
                map.flyTo({
                center: [
                    position.coords.longitude,position.coords.latitude
                ],
                essential: true // this animation is considered essential with respect to prefers-reduced-motion
                });
                }
                </script>

                                        </div>
                                    </div>
                                </div>


                            </div>
                            <br><br>
                             <!-- Proceed To Checkout -->
                    
                            <div class="section-padding"></div>
                        </div>
                        <div class="col-md-12 col-sm-12 text-right">
                        <button type="submit" class="red_button" title="CHECKOUT">CHECKOUT</button>
                        </div>
                    </form>
                </div>
            <?php endif; ?>
        </div><!-- Container /- -->
    </div><!-- Checkout Content /- -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>