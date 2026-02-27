<?php
declare(strict_types=1);

$brandCoverImages = [
    '/assets/img/brand/covers/kulhad-biryani.jpeg',
    '/assets/img/brand/covers/matka-biryani.jpeg',
    '/assets/img/brand/covers/biryaniwalas.jpeg',
    '/assets/img/brand/covers/biryani-king.jpeg',
    '/assets/img/brand/covers/handi-biryani.jpeg',
    '/assets/img/brand/covers/biryani-junction.jpeg',
    '/assets/img/brand/covers/biryani-farm.jpeg',
    '/assets/img/brand/covers/house-of-biryani.jpeg',
    '/assets/img/brand/covers/the-earthen-pot-biryani.jpeg',
];
?>
<section class="section page-hero">
    <div class="container">
        <h1>Brands</h1>
        <p class="muted">Brand-wise ordering hub with platform links.</p>
    </div>
</section>

<section class="section">
    <div class="container card-grid brands-page-grid">
        <?php foreach ($brands as $index => $brand): ?>
            <?php $cover = $brandCoverImages[$index] ?? '/assets/img/brand/covers/house-of-biryani.jpeg'; ?>
            <article class="card reveal">
                <img class="brand-page-cover" src="<?= htmlspecialchars($cover) ?>" alt="<?= htmlspecialchars($brand['name']) ?>" loading="lazy" width="1080" height="1080">
                <h2><?= htmlspecialchars($brand['name']) ?></h2>
                <p class="muted">FSSAI NO: <?= htmlspecialchars($brand['fssaiNo']) ?></p>
                <div class="cta-row">
                    <a class="btn btn-primary btn-small" href="<?= htmlspecialchars($brand['platforms']['zomato'] ?? '#') ?>" target="_blank" rel="noopener">ZOMATO</a>
                    <?php if (!empty($brand['platforms']['swiggy'])): ?>
                        <a class="btn btn-ghost btn-small" href="<?= htmlspecialchars($brand['platforms']['swiggy']) ?>" target="_blank" rel="noopener">SWIGGY</a>
                    <?php else: ?>
                        <span class="btn btn-ghost btn-small btn-disabled" aria-disabled="true">SWIGGY</span>
                    <?php endif; ?>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>
