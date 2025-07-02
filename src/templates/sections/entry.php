<!-- Entry Section -->
<section id="entry" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">出店申込</h2>
            <div class="w-24 h-1 bg-primary mx-auto mb-8"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                <?= h($config['event_title']) ?>への出店をご希望の方は、以下のフォームよりお申し込みください。
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Application Form -->
            <div class="bg-gray-50 p-8 rounded-lg">
                <h3 class="text-xl font-semibold text-gray-900 mb-6">出店申込フォーム</h3>
                
                <div class="bg-primary text-white p-6 rounded-lg mb-6">
                    <h4 class="font-semibold mb-3">📝 申込み前にご確認ください</h4>
                    <ul class="space-y-2 text-sm">
                        <li>• 出店要項をよくお読みください</li>
                        <li>• 作品写真（3点以上）をご準備ください</li>
                        <li>• 申込み締切：<?= h($config['event_year']) ?>年10月15日</li>
                    </ul>
                </div>
                
                <div class="text-center">
                    <a href="<?= h($config['form_url']) ?>" target="_blank" rel="noopener" class="inline-block bg-secondary hover:bg-yellow-600 text-white font-bold py-4 px-8 rounded-lg text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                        Google フォームで申し込む
                    </a>
                    <p class="text-sm text-gray-600 mt-4">
                        ※ 新しいタブで Google フォームが開きます
                    </p>
                </div>
                
                <div class="mt-8 p-6 bg-white rounded-lg border-2 border-gray-200">
                    <h4 class="font-semibold text-gray-900 mb-3">📋 必要な情報</h4>
                    <ul class="space-y-2 text-sm text-gray-700">
                        <li>• お名前・作家名・団体名</li>
                        <li>• ご連絡先（電話・メール・住所）</li>
                        <li>• 作品ジャンル・制作歴</li>
                        <li>• 作品写真（3点以上）</li>
                        <li>• 出店希望ブース（屋内・屋外）</li>
                        <li>• 実演・ワークショップ実施希望</li>
                        <li>• 過去の出店・展示経験</li>
                    </ul>
                </div>
            </div>
            
            <!-- Contact & FAQ -->
            <div class="space-y-8">
                <div class="bg-accent text-white p-8 rounded-lg">
                    <h3 class="text-xl font-semibold mb-6">お問い合わせ</h3>
                    <div class="space-y-4">
                        <div>
                            <h4 class="font-semibold mb-2">渡邉邸 工人まつり実行委員会</h4>
                            <p class="text-sm text-gray-200">出店に関するご質問・ご相談はお気軽にどうぞ</p>
                        </div>
                        <div class="space-y-3">
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <a href="mailto:<?= h($config['contact_email']) ?>" class="hover:text-gray-200 transition-colors">
                                    <?= h($config['contact_email']) ?>
                                </a>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>平日 9:00-17:00</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white border-2 border-gray-200 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">よくある質問</h3>
                    <div class="space-y-4">
                        <div>
                            <h4 class="font-medium text-gray-900 mb-1">Q. 初回参加でも申し込みできますか？</h4>
                            <p class="text-sm text-gray-600">A. はい、初回参加の方も大歓迎です。作品審査を経て出店いただけます。</p>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-900 mb-1">Q. 雨天時の開催はどうなりますか？</h4>
                            <p class="text-sm text-gray-600">A. 雨天決行です。屋外ブースの方はテント等をご準備ください。</p>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-900 mb-1">Q. 搬入・搬出の時間は？</h4>
                            <p class="text-sm text-gray-600">A. 搬入：前日16:00-18:00、当日7:00-8:30 / 搬出：当日16:30-18:00</p>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-900 mb-1">Q. 出店料金の支払い方法は？</h4>
                            <p class="text-sm text-gray-600">A. 採用通知後、指定口座へのお振込みとなります。</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-yellow-50 border-l-4 border-secondary p-6 rounded-r-lg">
                    <h4 class="font-semibold text-gray-900 mb-3">🌟 出店者の声</h4>
                    <blockquote class="text-sm text-gray-700 italic">
                        「歴史ある建物での出店は特別な体験でした。お客様との距離も近く、作品について直接お話しできるのが嬉しいです。」
                        <footer class="text-xs text-gray-500 mt-2">- 陶芸作家 A様</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</section>