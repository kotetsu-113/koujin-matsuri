<?php
declare(strict_types=1);

/**
 * Format a date string in Japanese format
 */
function formatDateJapanese(string $date): string
{
    try {
        $datetime = new DateTimeImmutable($date);
        return $datetime->format('Y年n月j日（D）');
    } catch (Exception $e) {
        return $date;
    }
}

/**
 * Generate OGP image URL
 */
function getOgImageUrl(array $config): string
{
    return 'https://kotetsu.tech/koujin-matsuri' . $config['hero_img'];
}

/**
 * Get current year
 */
function getCurrentYear(): int
{
    return (int) date('Y');
}

/**
 * Sanitize output for HTML
 */
function h(string $str): string
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

/**
 * Get canonical URL
 */
function getCanonicalUrl(): string
{
    return 'https://kotetsu.tech/koujin-matsuri/';
}