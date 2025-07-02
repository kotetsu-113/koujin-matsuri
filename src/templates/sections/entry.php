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
                        <li>• 出店申込み書の提出が必要です</li>
                        <li>• 審査があります（先着順・政治宗教団体不可）</li>
                        <li>• 食品販売は食品衛生法をクリアしていること</li>
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
                    <h4 class="font-semibold text-gray-900 mb-3">📋 申込み必要事項</h4>
                    <ul class="space-y-2 text-sm text-gray-700">
                        <li>• お名前・連絡先（電話・メール・住所）</li>
                        <li>• 出店内容・ジャンル詳細</li>
                        <li>• 出店希望日（両日・1日のみ）</li>
                        <li>• ワークショップ・パフォーマンス実施希望</li>
                        <li>• 食品販売の場合は許可証等の詳細</li>
                        <li>• スタッフ人数（2名まで無料）</li>
                        <li>• 搬入時間の希望（前日午後から相談可）</li>
                    </ul>
                </div>
            </div>
            
            <!-- Contact & FAQ -->
            <div class="space-y-8">
                <div class="bg-accent text-white p-8 rounded-lg">
                    <h3 class="text-xl font-semibold mb-6">お問い合わせ</h3>
                    <div class="space-y-4">
                        <div>
                            <h4 class="font-semibold mb-2"><?= h($config['organizer']) ?></h4>
                            <p class="text-sm text-gray-200"><?= h($config['executive_committee']) ?></p>
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
                            <div class="text-sm text-gray-200">
                                <p>説明会・会場視察を予定しています（日時未定）</p>
                                <p>できるだけご出席をお願いします</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white border-2 border-gray-200 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">よくある質問</h3>
                    <div class="space-y-4">
                        <div>
                            <h4 class="font-medium text-gray-900 mb-1">Q. 1日だけの参加は可能ですか？</h4>
                            <p class="text-sm text-gray-600">A. はい、1日だけの出店も可能です。ただし出店日のブースには限りがあります。</p>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-900 mb-1">Q. 出店料金はどのくらいかかりますか？</h4>
                            <p class="text-sm text-gray-600">A. 出店広告費<?= number_format($config['booth_fees']['advertising']) ?>円+出店料<?= number_format($config['booth_fees']['booth_fee']) ?>円です。ただし前売券販売額と同額を割引いたします。</p>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-900 mb-1">Q. 搬入・準備はいつからできますか？</h4>
                            <p class="text-sm text-gray-600">A. 前日午後から可能です。時間は相談の上決定いたします。</p>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-900 mb-1">Q. 備品の貸し出しはありますか？</h4>
                            <p class="text-sm text-gray-600">A. 申し訳ございませんが、渡邉邸にはお貸しできる備品・機材等はございません。</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-yellow-50 border-l-4 border-secondary p-6 rounded-r-lg">
                    <h4 class="font-semibold text-gray-900 mb-3">⚠️ 重要なお知らせ</h4>
                    <ul class="text-sm text-gray-700 space-y-2">
                        <li>• 出店許可は先着順ですが審査があります</li>
                        <li>• 政治、宗教等の団体での出店はできません</li>
                        <li>• 建物にキズや汚れをつけないよう十分配慮してください</li>
                        <li>• 説明会・会場視察への参加をお願いします</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>