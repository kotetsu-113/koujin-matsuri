    </main>
    
    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Event Info -->
                <div>
                    <h3 class="text-lg font-semibold mb-4"><?= h($config['event_title']) ?></h3>
                    <div class="text-gray-300 space-y-2">
                        <p><strong>開催日程：</strong><?= h($config['event_dates']) ?></p>
                        <p><strong>開催時間：</strong><?= h($config['event_time']) ?></p>
                        <p><strong>会場：</strong><?= h($config['venue_name']) ?></p>
                        <p class="text-sm"><?= h($config['venue_address']) ?></p>
                    </div>
                </div>
                
                <!-- Contact -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">お問い合わせ</h3>
                    <div class="text-gray-300 space-y-2">
                        <p><?= h($config['organizer']) ?></p>
                        <p><?= h($config['executive_committee']) ?></p>
                        <p>
                            <a href="mailto:<?= h($config['contact_email']) ?>" class="hover:text-white transition-colors">
                                <?= h($config['contact_email']) ?>
                            </a>
                        </p>
                    </div>
                </div>
                
                <!-- Social Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">フォローする</h3>
                    <div class="flex space-x-4">
                        <a href="<?= h($config['facebook_url']) ?>" class="text-gray-300 hover:text-white transition-colors" aria-label="Facebook">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="<?= h($config['instagram_url']) ?>" class="text-gray-300 hover:text-white transition-colors" aria-label="Instagram">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.62 5.367 11.987 11.988 11.987 6.62 0 11.987-5.367 11.987-11.987C24.014 5.367 18.637.001 12.017.001zM8.449 16.988c-1.297 0-2.448-.61-3.197-1.559-.501-.635-.8-1.43-.8-2.295 0-2.08 1.69-3.77 3.77-3.77s3.77 1.69 3.77 3.77c0 2.08-1.69 3.77-3.77 3.77z"/>
                            </svg>
                        </a>
                        <a href="<?= h($config['twitter_url']) ?>" class="text-gray-300 hover:text-white transition-colors" aria-label="Twitter">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="mt-8 pt-8 border-t border-gray-700 text-center text-gray-400">
                <p>&copy; <?= getCurrentYear() ?> <?= h($config['event_title']) ?> / <?= h($config['organizer']) ?> <?= h($config['executive_committee']) ?>. All rights reserved.</p>
            </div>
        </div>
    </footer>
    
    <!-- JavaScript -->
    <script src="/assets/js/main.js"></script>
</body>
</html>