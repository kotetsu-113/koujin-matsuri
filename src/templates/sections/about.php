<!-- About Section -->
<section id="about" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">イベントについて</h2>
            <div class="w-24 h-1 bg-primary mx-auto mb-8"></div>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <h3 class="text-2xl font-semibold text-gray-900">重要文化財 渡邉邸で開催する特別なイベント</h3>
                <p class="text-gray-700 leading-relaxed">
                    渡邉邸 工人まつりは、新潟県関川村の重要文化財である渡邉邸を舞台に開催される、職人と作家による手作り作品の祭典です。
                    歴史ある建物の美しい空間で、伝統工芸から現代アートまで、様々なジャンルの作品が一堂に会します。
                </p>
                <p class="text-gray-700 leading-relaxed">
                    来場者の皆様には、作品の購入だけでなく、職人や作家の技術を間近で見学できる実演やワークショップもお楽しみいただけます。
                    日本の美しい伝統文化と現代の創造性が融合した、特別な時間をお過ごしください。
                </p>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-8">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h4 class="font-semibold text-primary mb-2">開催規模</h4>
                        <p class="text-gray-600">約50組の出店者<br>年間来場者数 約3,000名</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h4 class="font-semibold text-primary mb-2">出店ジャンル</h4>
                        <p class="text-gray-600">陶芸・木工・金工・染織<br>革細工・ガラス工芸など</p>
                    </div>
                </div>
            </div>
            
            <div class="space-y-6">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="<?= h($config['flyer_img']) ?>" alt="イベントフライヤー" class="w-full h-auto cursor-pointer modal-trigger" data-modal="flyer-modal">
                    <div class="p-6">
                        <h4 class="font-semibold text-gray-900 mb-2">イベントフライヤー</h4>
                        <p class="text-gray-600 text-sm">クリックで拡大表示</p>
                    </div>
                </div>
                
                <div class="bg-accent text-white p-6 rounded-lg">
                    <h4 class="font-semibold mb-3">出店者特典</h4>
                    <ul class="space-y-2 text-sm">
                        <li>✓ 歴史ある重要文化財での出店機会</li>
                        <li>✓ 実演・ワークショップスペースの提供</li>
                        <li>✓ SNS・ウェブサイトでの作家紹介</li>
                        <li>✓ 駐車場・搬入サポート完備</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal for Flyer -->
<div id="flyer-modal" class="modal fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 hidden">
    <div class="modal-content bg-white rounded-lg max-w-4xl max-h-full overflow-auto m-4">
        <div class="relative">
            <button class="modal-close absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-2xl font-bold z-10">×</button>
            <img src="<?= h($config['flyer_img']) ?>" alt="イベントフライヤー" class="w-full h-auto">
        </div>
    </div>
</div>