<!-- Access Section -->
<section id="access" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">アクセス</h2>
            <div class="w-24 h-1 bg-primary mx-auto mb-8"></div>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Venue Information -->
            <div class="space-y-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-primary mb-4"><?= h($config['venue_name']) ?></h3>
                    <div class="space-y-3 text-gray-700">
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-primary mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <div>
                                <p class="font-semibold">住所</p>
                                <p><?= h($config['venue_address']) ?></p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-primary mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <div>
                                <p class="font-semibold">TEL</p>
                                <p>0254-64-1002</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Transportation -->
                <div class="space-y-6">
                    <h3 class="text-xl font-semibold text-gray-900">交通アクセス</h3>
                    
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h4 class="font-semibold text-primary mb-3 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-1.447-.894L15 4m0 13V4m-6 3l6-3"></path>
                            </svg>
                            お車でお越しの場合
                        </h4>
                        <ul class="space-y-2 text-gray-700 text-sm">
                            <li>• 日本海東北自動車道「荒川胎内IC」より約20分</li>
                            <li>• JR羽越本線「坂町駅」より約15分</li>
                            <li>• 無料駐車場完備（約100台）</li>
                        </ul>
                    </div>
                    
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h4 class="font-semibold text-primary mb-3 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                            </svg>
                            公共交通機関をご利用の場合
                        </h4>
                        <ul class="space-y-2 text-gray-700 text-sm">
                            <li>• JR羽越本線「坂町駅」下車、タクシーで約15分</li>
                            <li>• 新潟駅から坂町駅まで約1時間30分</li>
                            <li>• ※駅からの直通バスはございません</li>
                        </ul>
                    </div>
                    
                    <div class="bg-accent text-white p-6 rounded-lg">
                        <h4 class="font-semibold mb-3">出店者の皆様へ</h4>
                        <ul class="space-y-2 text-sm">
                            <li>• 搬入用車両は会場近くまで乗り入れ可能です</li>
                            <li>• 重要文化財のため、建物への搬入時は十分ご注意ください</li>
                            <li>• 搬入時間：前日16:00-18:00、当日7:00-8:30</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Map -->
            <div class="space-y-6">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden h-96">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3127.8234567890123!2d139.414285!3d38.129999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s3HR7%2B3X!2s3HR7%2B3X+%E9%96%A2%E5%B7%9D%E6%9D%91%2C+%E6%97%A5%E6%9C%AC%E3%80%81%E6%96%B0%E6%BD%9F%E7%9C%8C!5e0!3m2!1sja!2sjp!4v1720000000000"
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        title="渡邉邸の地図">
                    </iframe>
                </div>
                
                <div class="bg-yellow-50 border-l-4 border-secondary p-6 rounded-r-lg">
                    <h4 class="font-semibold text-gray-900 mb-3">ご来場の皆様へ</h4>
                    <ul class="space-y-2 text-sm text-gray-700">
                        <li>• 会場周辺は道幅が狭い箇所があります</li>
                        <li>• カーナビ設定時は「渡邉邸」で検索してください</li>
                        <li>• 混雑時は臨時駐車場をご案内する場合があります</li>
                    </ul>
                </div>
                
                <div class="grid grid-cols-2 gap-4 text-center">
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h5 class="font-semibold text-gray-900 mb-2">最寄りIC</h5>
                        <p class="text-sm text-gray-600">荒川胎内IC<br>約20分</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h5 class="font-semibold text-gray-900 mb-2">最寄り駅</h5>
                        <p class="text-sm text-gray-600">JR坂町駅<br>約15分</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>