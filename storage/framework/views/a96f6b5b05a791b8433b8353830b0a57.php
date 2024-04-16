<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <?php echo e(__('Cart')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white w-[100%] justify-between flex dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div style="width: 60%;" class="p-6 text-gray-900 dark:text-gray-100 flex flex-col ">
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex justify-between py-6">
                        <div class="flex">
                            <img src="<?php echo e(asset('storage/'. $item->image)); ?>" alt="image" class="w-20 h-20 object-cover rounded-lg">
                            <div class="ml-4">
                                <h2 class="text-lg font-semibold"><?php echo e($item->name); ?></h2>
                                <p class="text-sm text-gray-500"><?php echo e($item->description); ?></p>
                                <div class="flex">
                                    <form action="/cart/increment<?php echo e($item->id); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('UPDATE'); ?>
                                        <button type="submit" class="px-2 text-red-500 hover:text-red-700 dark:text-red-400 dark:hover:text-red-600">
                                            -
                                        </button>
                                    </form>
                                    <p class="text-lg font-semibold"> <?php echo e($item->quantity); ?></p>
                                    <form action="/cart/increment<?php echo e($item->id); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('UPDATE'); ?>
                                        <button type="submit" class="px-2 text-red-500 hover:text-red-700 dark:text-red-400 dark:hover:text-red-600">
                                            +
                                        </button>
                                    </form>
                                </div>
                                <div class="flex pt-4">
                                    <form action="/cart/<?php echo e($item->id); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" role="img" width="24px" height="24px" fill="none">
                                            <path stroke="currentColor" stroke-width="1.5" d="M16.794 3.75c1.324 0 2.568.516 3.504 1.451a4.96 4.96 0 010 7.008L12 20.508l-8.299-8.299a4.96 4.96 0 010-7.007A4.923 4.923 0 017.205 3.75c1.324 0 2.568.516 3.504 1.451l.76.76.531.531.53-.531.76-.76a4.926 4.926 0 013.504-1.451"></path>
                                        </svg>
                                    </form>
                                    <form action="/cart/<?php echo e($item->id); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="ml-4 text-red-500 hover:text-red-700 dark:text-red-400 dark:hover:text-red-600">
                                            <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" role="img" width="24px" height="24px" fill="none">
                                                <path stroke="currentColor" stroke-miterlimit="10" stroke-width="1.5" d="M14.25 7.5v12m-4.5-12v12M5.25 6v13.5c0 1.24 1.01 2.25 2.25 2.25h9c1.24 0 2.25-1.01 2.25-2.25V5.25h2.75m-2.75 0H21m-12-3h5.25c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5H3"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="flex">
                            <p class="text-lg font-semibold">$ <?php echo e($item->price * $item->quantity); ?></p>
                        </div>
                    </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    


                </div>
                <div style="width: 30%;" class="text-white p-4">
                    <h2 class="text-xl">
                        Summary
                    </h2>
                    <div class="flex items-center justify-between py-2">
                        <h2 class="text-lg font-semibold">Subtotal</h2>
                        <p class="text-lg font-semibold"><?php echo e($total); ?></p>
                    </div>

                    <div class="flex items-center justify-between py-2">
                        <h2 class="text-lg font-semibold">Estimated Delivery & Handling</h2>
                        <p class="text-lg font-semibold"><?php echo e($total/20); ?></p>
                    </div>

                    <div class="flex items-center justify-between py-2">
                        <h2 class="text-lg font-semibold">Total</h2>
                        <p class="text-lg font-semibold"><?php echo e($total + $total/20); ?></p>
                    </div>

                    <form action="/checkout" method="POST">
                        <?php echo csrf_field(); ?>
                        <button style="background-color: rgb(17,17,17);" type="submit" class="block w-full px-6 py-3 mt-6 text-center text-white btn rounded-lg">
                            checkout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH /var/www/html/resources/views/cart/all.blade.php ENDPATH**/ ?>