<?php
/**
 * Breadcrumb Component - MIB Site
 * Incluído quando necessário para navegação
 */
if (isset($breadcrumbs) && !empty($breadcrumbs)): ?>
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
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
