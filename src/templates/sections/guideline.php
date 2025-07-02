<!-- Guideline Section -->
<section id="guideline" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">出店要項</h2>
            <div class="w-24 h-1 bg-primary mx-auto mb-8"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">
                出店をご検討いただき、ありがとうございます。以下の要項をご確認の上、お申し込みください。
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Application Guidelines -->
            <div class="space-y-8">
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold text-primary mb-4">出店対象</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li>• 手作り作品を制作・販売される作家・職人の方</li>
                        <li>• 伝統工芸、現代アート、クラフト作品など</li>
                        <li>• オリジナル作品に限ります（既製品の転売は不可）</li>
                        <li>• 食品・飲料の販売は対象外です</li>
                    </ul>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold text-primary mb-4">出店料金</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center border-b pb-2">
                            <span class="text-gray-700">屋内ブース（3m×2m）</span>
                            <span class="font-semibold">8,000円</span>
                        </div>
                        <div class="flex justify-between items-center border-b pb-2">
                            <span class="text-gray-700">屋外ブース（3m×3m）</span>
                            <span class="font-semibold">6,000円</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700">実演・ワークショップスペース</span>
                            <span class="font-semibold">+2,000円</span>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold text-primary mb-4">提供設備</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li>• テーブル・椅子（基本セット）</li>
                        <li>• 電源（100V、15A まで）</li>
                        <li>• 搬入・搬出用車両駐車場</li>
                        <li>• 出店者用控室・休憩スペース</li>
                    </ul>
                </div>
            </div>
            
            <!-- Application Process -->
            <div class="space-y-8">
                <div class="bg-primary text-white p-6 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4">申込み手順</h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <span class="bg-white text-primary rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold flex-shrink-0 mt-0.5">1</span>
                            <div>
                                <h4 class="font-semibold">申込フォーム送信</h4>
                                <p class="text-sm text-gray-200">下記フォームより必要事項をご記入の上、送信してください</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <span class="bg-white text-primary rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold flex-shrink-0 mt-0.5">2</span>
                            <div>
                                <h4 class="font-semibold">書類審査</h4>
                                <p class="text-sm text-gray-200">作品写真等を審査し、1週間以内に結果をご連絡します</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <span class="bg-white text-primary rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold flex-shrink-0 mt-0.5">3</span>
                            <div>
                                <h4 class="font-semibold">出店料金支払い</h4>
                                <p class="text-sm text-gray-200">採用通知後、指定口座へお振込みください</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <span class="bg-white text-primary rounded-full w-6 h-6 flex items-center justify-center text-sm font-bold flex-shrink-0 mt-0.5">4</span>
                            <div>
                                <h4 class="font-semibold">出店確定</h4>
                                <p class="text-sm text-gray-200">入金確認後、詳細資料をお送りします</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-yellow-50 border-l-4 border-secondary p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">重要事項</h3>
                    <ul class="space-y-2 text-sm text-gray-700">
                        <li>• 申込み締切：<?= h($config['event_year']) ?>年10月15日</li>
                        <li>• 出店者数に限りがあるため、審査により決定いたします</li>
                        <li>• 雨天決行（屋外ブースの場合はテント等をご準備ください）</li>
                        <li>• 搬入：イベント前日 16:00-18:00</li>
                        <li>• 搬出：イベント当日 16:30-18:00</li>
                    </ul>
                </div>
                
                <div class="text-center">
                    <a href="/docs/guideline.pdf" target="_blank" class="inline-flex items-center bg-gray-800 text-white px-6 py-3 rounded-lg hover:bg-gray-700 transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        詳細な出店要項（PDF）をダウンロード
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>