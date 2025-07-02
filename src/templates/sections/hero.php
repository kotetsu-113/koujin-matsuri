<!-- Hero Section -->
<section id="hero" class="relative min-h-screen flex items-center justify-center bg-gradient-to-br from-primary to-red-900">
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('<?= h($config['hero_img']) ?>')"></div>
    
    <div class="relative z-10 text-center text-white px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto">
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold mb-6 text-shadow">
            <?= h($config['event_title']) ?>
        </h1>
        
        <div class="text-xl sm:text-2xl md:text-3xl mb-8 text-shadow">
            <p class="mb-2">出店者募集</p>
            <p class="text-lg sm:text-xl text-gray-200"><?= h($config['event_dates']) ?> <?= h($config['event_time']) ?></p>
        </div>
        
        <div class="bg-white bg-opacity-90 text-gray-800 rounded-lg p-6 mb-8 inline-block">
            <h2 class="text-lg sm:text-xl font-semibold mb-2"><?= h($config['venue_name']) ?></h2>
            <p class="text-sm sm:text-base"><?= h($config['venue_address']) ?></p>
        </div>
        
        <div class="space-y-4 sm:space-y-0 sm:space-x-4 sm:flex sm:justify-center">
            <a href="#entry" class="inline-block bg-secondary hover:bg-yellow-600 text-white font-bold py-3 px-8 rounded-lg text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                出店申込はこちら
            </a>
            <a href="#guideline" class="inline-block bg-transparent border-2 border-white text-white hover:bg-white hover:text-gray-800 font-bold py-3 px-8 rounded-lg text-lg transition-all duration-300">
                出店要項を見る
            </a>
        </div>
        
        <div class="mt-12">
            <a href="#about" class="nav-link text-white hover:text-gray-200 transition-colors">
                <svg class="w-8 h-8 mx-auto animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>