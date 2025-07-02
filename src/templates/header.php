<?php
$config = require __DIR__ . '/../config.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= h($config['event_title']) ?> | 出店者募集</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?= h($config['og_description']) ?>">
    <meta name="keywords" content="工人まつり,渡邉邸,新潟,関川村,出店者募集,伝統工芸,手作り,職人,作家">
    <meta name="author" content="渡邉邸 工人まつり実行委員会">
    
    <!-- OGP Meta Tags -->
    <meta property="og:title" content="<?= h($config['event_title']) ?> | 出店者募集">
    <meta property="og:description" content="<?= h($config['og_description']) ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= getCanonicalUrl() ?>">
    <meta property="og:image" content="<?= getOgImageUrl($config) ?>">
    <meta property="og:site_name" content="<?= h($config['event_title']) ?>">
    <meta property="og:locale" content="ja_JP">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= h($config['event_title']) ?> | 出店者募集">
    <meta name="twitter:description" content="<?= h($config['og_description']) ?>">
    <meta name="twitter:image" content="<?= getOgImageUrl($config) ?>">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?= getCanonicalUrl() ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#8B0000',
                        secondary: '#DAA520',
                        accent: '#2D4A22'
                    },
                    fontFamily: {
                        'japanese': ['Noto Sans JP', 'Hiragino Sans', 'Hiragino Kaku Gothic ProN', 'Meiryo', 'sans-serif']
                    }
                }
            }
        }
    </script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/custom.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body class="font-japanese bg-white text-gray-800">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <h1 class="text-xl font-bold text-primary"><?= h($config['event_title']) ?></h1>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="#hero" class="nav-link text-gray-700 hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition-colors">トップ</a>
                        <a href="#about" class="nav-link text-gray-700 hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition-colors">イベントについて</a>
                        <a href="#guideline" class="nav-link text-gray-700 hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition-colors">出店要項</a>
                        <a href="#access" class="nav-link text-gray-700 hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition-colors">アクセス</a>
                        <a href="#entry" class="bg-primary text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-red-800 transition-colors">出店申込</a>
                    </div>
                </div>
                <div class="md:hidden">
                    <button type="button" class="mobile-menu-button bg-gray-100 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div class="mobile-menu hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white shadow-lg">
                <a href="#hero" class="nav-link block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50">トップ</a>
                <a href="#about" class="nav-link block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50">イベントについて</a>
                <a href="#guideline" class="nav-link block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50">出店要項</a>
                <a href="#access" class="nav-link block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50">アクセス</a>
                <a href="#entry" class="block px-3 py-2 rounded-md text-base font-medium bg-primary text-white hover:bg-red-800">出店申込</a>
            </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <main class="pt-16">