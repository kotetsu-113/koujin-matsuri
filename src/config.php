<?php
declare(strict_types=1);

return [
    'event_title'   => '重文）渡邉邸 工人まつり',
    'event_dates'   => '11月22日（土）・23日（日）',
    'event_time'    => '9:00-16:00',
    'event_year'    => 2024,
    'venue_name'    => '重要文化財 渡邉邸',
    'venue_address' => '新潟県岩船郡関川村下関912',
    'form_url'      => 'https://docs.google.com/forms/d/e/xxxxxxxxxx/viewform',
    'hero_img'      => '/assets/img/hero.jpg',
    'flyer_img'     => '/assets/img/flyer.png',
    'ogp_img'       => '/assets/img/ogp.jpg',
    'og_description' => '新潟県関川村の重要文化財 渡邉邸で開催される工人まつりの出店者を募集しています。クラフト、ワークショップ、農産物、食品など約20店舗が出店予定。',
    
    // 出店料金
    'booth_fees' => [
        'advertising' => 1000,  // 出店広告費
        'booth_fee' => 3000,    // 出店料
        'flyer_price' => 100,   // フライヤー・案内ハガキ単価
        'tickets' => [
            'adult' => 600,
            'child' => 300,     // 小中（未就学児無料）
            'discount' => 50,   // 障がい者手帳提示割引
        ]
    ],
    
    // 募集店舗数
    'booth_count' => 20,        // クラフト、ワークショップ、農産物、食品等
    'performance_spots' => true, // 音楽などのパフォーマンス
    'tea_corner' => 1,          // 喫茶コーナー1店舗（テイクアウト販売）
    
    // ブース情報
    'booth_size' => '間口180度', // 基本1ブース
    'booth_facilities' => [
        '電源なし',
        'テーブル・椅子使用不可',
        'キズ防止工夫必要',
        '備品・機材等なし'
    ],
    
    // 主催者情報
    'organizer' => '渡邉邸（担当：平田）',
    'executive_committee' => '実行委員会（代表：Toi陶房フジタコウコ）',
    
    'contact_email'   => 'info@kotetsu.tech',
    'facebook_url'    => '#',
    'instagram_url'   => '#',
    'twitter_url'     => '#',
];