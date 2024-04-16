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
            <?php echo e(__('Arts')); ?>

        </h2>
     <?php $__env->endSlot(); ?>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex flex-wrap">
                <!-- loop over artist -->
                <?php $__currentLoopData = $arts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $art): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card p-6">
                    <img width="200" class="text-white" src="<?php echo e(asset('storage/'.$art->image)); ?>" alt="<?php echo e($art->name); ?>">
                    <div class="card-body">
                        <h2 class="text-white"><?php echo e($art->name); ?></h2>
                        <p class="text-white"><?php echo e($art->price); ?></p>
                        <form action="/addtocart" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="art_items_id" value="<?php echo e($art->id); ?>">
                            <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
                            <input type="hidden" name="quantity" value="1">
                            <button type="submit" class="block w-full px-6 py-3 mt-6 text-center text-white bg-[#FF2D20] rounded-lg shadow-[0px 4px 34px rgba(0,0,0,0.06)] transition hover:bg-[#FF2D20] dark:bg-[#FF2D20] dark:hover:bg-[#FF2D20]">
                                Add to cart
                            </button>
                        </form>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php endif; ?><?php /**PATH /var/www/html/resources/views/art/all.blade.php ENDPATH**/ ?>