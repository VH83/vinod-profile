<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <div id="home" class="relative" style="background-image: url('<?php echo e(asset('images/bgimage.jpg')); ?>'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black/40"></div> 
        <div class="relative z-10 flex items-center justify-center h-96 md:min-h-screen">
            <div class="bg-gray-300 p-6 rounded-lg text-center text-black">
                <img src="<?php echo e(asset('images/profile.JPG')); ?>" alt="profile" class="w-28 h-28 rounded-full object-cover mx-auto mb-4" oncontextmenu="return false;">
                <h3 class="text-2xl font-semibold mb-4">Hi, I am Vinod Bodke</h3>
                <!-- Skills Section -->
                <p class=" text-lg mb-4">Software Developer</p>
            </div>
        </div>
    </div>

    
    <div class="bg-white">
        <div class="max-w-6xl mx-auto py-4 md:py-16 px-2 md:px-6" id="about">
            <div class="bg-blue-50 p-8 rounded-lg shadow-lg">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 ">
                    <!-- About Text Section -->
                    <div class="col-span-2 flex flex-col justify-center">
                        <h1 class="text-3xl font-semibold text-gray-800 mb-6 md:text-justify text-center">About Me</h1>
                        <p class="text-lg text-gray-700 leading-relaxed mb-6 text-justify">
                            I am a Software Developer skilled in Laravel and PHP for dynamic web applications. I am experienced with MySQL, Tailwind CSS, and API integrations, including Razorpay.  I also use Filament for creating admin panels and follow best practices for code quality with Git.
                        </p>
                        <p class="text-lg text-gray-700 leading-relaxed mb-6 text-justify">
                            I am passionate about writing clean, efficient code and continuously improving my skills to build high-quality, scalable web applications that make everyday life easier and solve real-world problems.
                        </p>
                    </div>
            
                    <!-- Profile Picture -->
                    <div class="flex justify-center mb-8 md:mb-0 my-auto">
                        <img src="<?php echo e(asset('images/profile.JPG')); ?>" alt="Profile Picture" class="w-40 h-40 md:w-56 md:h-56 rounded-full object-cover shadow-xl border-4 border-blue-500" oncontextmenu="return false;">
                    </div>
                </div>
                    <!-- Resume Download Section -->
                <div class="border-2 border-blue-200 hover:border-blue-900 flex p-4 bg-gradient-to-r from-blue-500 to-indigo-600 text-white gap-4 rounded-lg hover:bg-gradient-to-l transition duration-300 ease-in-out w-fit">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ri-download-cloud-line'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-6 my-auto']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                    <a href="<?php echo e(asset('images/vinod-resume-3.pdf')); ?>" class=" text-base md:text-xl font-semibold hover:text-gray-200">Download My Resume</a>
                </div>  
            </div>
        </div>
    </div>
   
 
    
    <div class="bg-gray-100">
        <div class="max-w-6xl mx-auto py-16 px-6" id="skills">
            <h2 class="text-3xl font-semibold text-gray-800 text-center mb-8">My Skills</h2>
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <div class="flex flex-col items-center bg-gradient-to-r from-blue-500 to-blue-700 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out transform hover:scale-105">
                    <img src="<?php echo e(asset('logos/laravel.svg')); ?>" alt="laravel" class="w-20 h-20 mb-4">
                    <h3 class="text-xl font-semibold text-white">Laravel</h3>
                </div>
    
                <div class="flex flex-col items-center bg-gradient-to-r from-blue-500 to-blue-700 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out transform hover:scale-105">
                    <img src="<?php echo e(asset('logos/MySQL-Logo.png')); ?>" alt="mysql" class="w-20 h-20 mb-4">
                    <h3 class="text-xl font-semibold text-white">MySQL</h3>
                </div>
    
                <div class="flex flex-col items-center bg-gradient-to-r from-orange-500 to-orange-700 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out transform hover:scale-105">
                    <img src="<?php echo e(asset('logos/html-5.png')); ?>" alt="html" class="w-20 h-20 mb-4">
                    <h3 class="text-xl font-semibold text-white">HTML</h3>
                </div>
    
                <div class="flex flex-col items-center bg-gradient-to-r from-teal-500 to-teal-700 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out transform hover:scale-105">
                    <img src="<?php echo e(asset('logos/Tailwind_CSS_Logo.svg.png')); ?>" alt="tailwind css" class="w-20 h-20 mb-4">
                    <h3 class="text-xl font-semibold text-white">Tailwind CSS</h3>
                </div>
    
                <div class="flex flex-col items-center bg-gradient-to-r from-yellow-400 to-yellow-600 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out transform hover:scale-105">
                    <img src="<?php echo e(asset('logos/js.png')); ?>" alt="js" class="w-20 h-20 mb-4">
                    <h3 class="text-xl font-semibold text-white">JavaScript</h3>
                </div>
    
                <div class="flex flex-col items-center bg-gradient-to-r from-gray-800 to-gray-600 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out transform hover:scale-105">
                    <img src="<?php echo e(asset('logos/php.png')); ?>" alt="php" class="w-20 h-20 mb-4">
                    <h3 class="text-xl font-semibold text-white">PHP</h3>
                </div>
    
                <div class="flex flex-col items-center bg-gradient-to-r from-green-500 to-green-700 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out transform hover:scale-105">
                    <img src="<?php echo e(asset('logos/rest-api-icon.webp')); ?>" alt="rest api" class="w-20 h-20 mb-4">
                    <h3 class="text-xl font-semibold text-white">RESTful API</h3>
                </div>
    
                <div class="flex flex-col items-center bg-gradient-to-r from-indigo-500 to-indigo-700 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out transform hover:scale-105">
                    <img src="<?php echo e(asset('logos/filament.png')); ?>" alt="filament" class="w-20 h-20 mb-4">
                    <h3 class="text-xl font-semibold text-white">Filament</h3>
                </div>
    
                <div class="flex flex-col items-center bg-gradient-to-r from-gray-700 to-gray-900 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out transform hover:scale-105">
                    <img src="<?php echo e(asset('logos/linux.jpeg')); ?>" alt="linux" class="w-20 h-20 mb-4">
                    <h3 class="text-xl font-semibold text-white">Linux</h3>
                </div>
            </div>
        </div>
    </div>
   
    
    
    <div class="bg-white py-12">
        <div id="contact" class="max-w-5xl md:px-6 my-4 bg-gray-100 rounded-lg shadow-xl p-10 mx-auto w-full transition-all duration-300 ease-in-out hover:scale-105" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1200">
            <div class="text-center mb-10 text-gray-800">
                <h3 class="text-3xl font-semibold text-blue-900">Get in Touch</h3>
                <p class="py-4 text-gray-600 text-lg">I’d love to hear from you! Please drop your message or inquiry below, and I’ll get back to you as soon as possible.</p>
            </div>     
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 gap-6">
                <form id="demo-form" action="<?php echo e(route('store-contact')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                            <input type="text" name="name" id="name" required class="w-full px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input type="email" name="email" id="email" required class="w-full px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200">
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                        <input type="tel" name="phone" id="phone" required class="w-full px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200">
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Your Message</label>
                        <textarea name="message" id="message" rows="4" class="w-full px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="border-2 border-blue-500 hover:border-blue-700 px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-medium text-lg rounded-lg hover:bg-gradient-to-l transition duration-300 ease-in-out transform hover:scale-105 w-fit mx-auto">
                            Submit
                        </button>
                    </div>
                </form>
                <div class="ml-8 flex flex-col j gap-6">
                    <div class="flex gap-3 items-center">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ri-user-line'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-14 text-blue-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                        <div>
                            <h2 class="font-semibold text-xl text-blue-700">Name:</h2>
                            <span class=" text-blue-600">Vinod Bodke</span>
                        </div>
                    </div>
                    <div class="flex gap-3 items-center">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ri-map-pin-2-line'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-14 text-blue-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                        <div>
                            <h2 class="font-semibold text-xl text-blue-700">Address:</h2>
                            <a href="https://maps.app.goo.gl/A14E6VtADB8pmMTj8" target="_blank" class="text-blue-600 hover:underline">At Post Pune, Maharashtra</a>
                        </div>
                    </div>
                    <div class="flex gap-3 items-center">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ri-mail-line'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-14 text-blue-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                        <div>
                            <h2 class="font-semibold text-xl text-blue-700">Email:</h2>
                            <a href="mailto:developer.vinod83@gmail.com" class="text-blue-600 hover:underline">developer.vinod83@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/restec/vinod/vinod-profile/resources/views/welcome.blade.php ENDPATH**/ ?>