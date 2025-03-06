<?php
function renderStatItem($icon, $iconColor, $number, $suffix, $label) {
    ?>
    <div class="col-md-3 col-sm-6">
        <div class="stat-item">
            <div class="stat-icon">
                <i class="<?php echo $icon; ?>" style="color: <?php echo $iconColor; ?>;"></i>
            </div>
            <div class="stat-content">
                <h3><span class="stat-number" data-value="<?php echo $number; ?>" data-suffix="<?php echo $suffix; ?>"><?php echo $number . $suffix; ?></span></h3>
                <p><?php echo $label; ?></p>
            </div>
        </div>
    </div>
    <?php
}

function renderStatsSection($stats) {
    ?>
    <section class="stats-section">
        <div class="container">
            <div class="row g-4 justify-content-center align-items-stretch">
                <?php
                foreach ($stats as $stat) {
                    renderStatItem($stat[0], $stat[1], $stat[2], $stat[3], $stat[4]);
                }
                ?>
            </div>
        </div>
    </section>
    <?php
} 