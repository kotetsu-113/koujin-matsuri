<?php
declare(strict_types=1);

// Load configuration and helpers
$config = require __DIR__ . '/../src/config.php';
require_once __DIR__ . '/../src/helpers.php';

// Include header template
include __DIR__ . '/../src/templates/header.php';

// Include main sections
include __DIR__ . '/../src/templates/sections/hero.php';
include __DIR__ . '/../src/templates/sections/about.php';
include __DIR__ . '/../src/templates/sections/guideline.php';
include __DIR__ . '/../src/templates/sections/access.php';
include __DIR__ . '/../src/templates/sections/entry.php';

// Include footer template
include __DIR__ . '/../src/templates/footer.php';