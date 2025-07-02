<!-- Guideline Section -->
<section id="guideline" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">出店者募集要項</h2>
            <div class="w-24 h-1 bg-primary mx-auto mb-8"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                出店をご検討いただき、ありがとうございます。以下の要項をご確認の上、お申し込みください。
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Left Column -->
            <div class="space-y-8">
                <!-- Date & Time -->
                <div class="bg-primary text-white p-6 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4">■ 日時</h3>
                    <div class="space-y-3">
                        <p class="text-lg">• <?= h($config['event_dates']) ?></p>
                        <p>時間 <?= h($config['event_time']) ?></p>
                        <p class="text-sm text-gray-200">1日だけの出店も可</p>
                        <p class="text-sm text-gray-200">※：出店日のブースには限りがあります</p>
                    </div>
                </div>

                <!-- Booth Requirements -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold text-primary mb-4">■ 出店に伴う経費（1日のみ出店の方も条件は同じ）</h3>
                    <div class="space-y-4">
                        <div class="bg-white p-4 rounded border-l-4 border-primary">
                            <h4 class="font-semibold mb-2">出店広告費</h4>
                            <p class="text-2xl font-bold text-primary"><?= number_format($config['booth_fees']['advertising']) ?>円</p>
                            <p class="text-sm text-gray-600">フライヤー、案内ハガキ（<?= $config['booth_fees']['flyer_price'] ?>円割引券付）</p>
                        </div>
                        
                        <div class="bg-white p-4 rounded border-l-4 border-secondary">
                            <h4 class="font-semibold mb-2">出店料</h4>
                            <p class="text-2xl font-bold text-secondary"><?= number_format($config['booth_fees']['booth_fee']) ?>円</p>
                            <div class="text-sm text-gray-600 mt-2">
                                <p class="text-red-600 font-semibold">⚠️ 但：前売券の販売額と同額を割引いたします</p>
                                <p>前売券は限定200枚</p>
                                <p>一般 <?= $config['booth_fees']['tickets']['adult'] ?>円　小中 <?= $config['booth_fees']['tickets']['child'] ?>円（未就学児無料）</p>
                                <p>障がい者は入館時に手帳提示で <?= $config['booth_fees']['tickets']['discount'] ?>円返金します</p>
                                <p>払戻しはしません</p>
                                <p>24日以降に入館する場合は、通常料金の差額をいただきます</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- No Sales Fee -->
                <div class="bg-accent text-white p-6 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4">■ 売上手数料</h3>
                    <p class="text-lg">• いっさいいただきません</p>
                </div>
            </div>
            
            <!-- Right Column -->
            <div class="space-y-8">
                <!-- Booth Details -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold text-primary mb-4">■ 募集店舗数</h3>
                    <div class="space-y-3">
                        <p>• クラフト、ワークショップ、農産物、食品等 <span class="font-bold text-lg"><?= $config['booth_count'] ?>店舗</span></p>
                        <p>• 音楽などのパフォーマンスをやりたい方</p>
                        <p>• 喫茶コーナー<?= $config['tea_corner'] ?>店舗</p>
                        <p class="text-sm text-gray-600 pl-4">テイクアウトの販売となります</p>
                    </div>
                </div>

                <!-- Booth Specifications -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold text-primary mb-4">■ ブース</h3>
                    <div class="space-y-3">
                        <p>• 基本、一店舗1ブース、<?= h($config['booth_size']) ?>です</p>
                        <p>• グループで出店の方は相談ください</p>
                        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mt-4">
                            <h4 class="font-semibold text-gray-900 mb-2">重要事項</h4>
                            <ul class="space-y-1 text-sm text-gray-700">
                                <?php foreach ($config['booth_facilities'] as $facility): ?>
                                <li>• <?= h($facility) ?></li>
                                <?php endforeach; ?>
                                <li>• 脚にキズ防止の工夫をお願いします</li>
                                <li>• 渡邉邸にはお貸しできる備品、機材等はございません</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Other Information -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold text-primary mb-4">■ その他</h3>
                    <div class="space-y-3 text-sm">
                        <p>• 出店許可は先着順ですが審査があります</p>
                        <p>• 政治、宗教等などの団体ではないこと</p>
                        <p>• 出店申込み書の提出をお願いいたします</p>
                        <p>• 各店舗のスタッフは2名まで無料です</p>
                        <p>• 搬入、出店準備は前日午後から可能（時間は相談ください）</p>
                        <p>• 食品販売、喫茶コーナーへの出店は食品衛生法をクリアしていること</p>
                        <p>• 出店スペースは主催者の指定いたします</p>
                        <p>• 説明会、場所の確認にできるだけ出席できること</p>
                        <p>• 搬出入、使用の際には建物にキズや汚れをつけないよう、十分な配慮をお願いします</p>
                        <p>• 渡邉邸の使用については職員、実行委員の指示に従ってください</p>
                        <p>• 会場視察とブース割当てを兼ねた説明会を予定していますので、できるだけ出席願います（日時未定）。</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Organizer Information -->
        <div class="mt-12 bg-gray-900 text-white p-8 rounded-lg">
            <h3 class="text-xl font-semibold mb-6 text-center">主催</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-center">
                <div>
                    <h4 class="font-semibold text-lg mb-2"><?= h($config['organizer']) ?></h4>
                </div>
                <div>
                    <h4 class="font-semibold text-lg mb-2"><?= h($config['executive_committee']) ?></h4>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-8">
            <a href="/docs/guideline.pdf" target="_blank" class="inline-flex items-center bg-gray-800 text-white px-6 py-3 rounded-lg hover:bg-gray-700 transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                詳細な出店要項（PDF）をダウンロード
            </a>
        </div>
    </div>
</section>