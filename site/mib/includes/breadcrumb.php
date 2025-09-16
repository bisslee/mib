<?php
/**
 * Breadcrumb Component - MIB Site
 * Incluído quando necessário para navegação
 */

// Gerar BreadcrumbList Schema
if (isset($breadcrumbs) && !empty($breadcrumbs)) {
    $breadcrumb_schema = [
        "@context" => "https://schema.org",
        "@type" => "BreadcrumbList",
        "itemListElement" => []
    ];
    
    $position = 1;
    foreach ($breadcrumbs as $breadcrumb) {
        $item = [
            "@type" => "ListItem",
            "position" => $position,
            "name" => $breadcrumb['text']
        ];
        
        if (!isset($breadcrumb['active']) || !$breadcrumb['active']) {
            $item["item"] = $site_config['base_url'] . $breadcrumb['url'];
        }
        
        $breadcrumb_schema["itemListElement"][] = $item;
        $position++;
    }
    
    // Adicionar schema ao head
    echo '<script type="application/ld+json">' . json_encode($breadcrumb_schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>';
}
?>

<?php if (isset($breadcrumbs) && !empty($breadcrumbs)): ?>
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <?php foreach ($breadcrumbs as $breadcrumb): ?>
                    <?php if (isset($breadcrumb['active']) && $breadcrumb['active']): ?>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo htmlspecialchars($breadcrumb['text']); ?></li>
                    <?php else: ?>
                        <li class="breadcrumb-item"><a href="<?php echo htmlspecialchars($breadcrumb['url']); ?>"><?php echo htmlspecialchars($breadcrumb['text']); ?></a></li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ol>
        </div>
    </nav>
<?php endif; ?>
