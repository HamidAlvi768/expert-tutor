<?php
function renderSubjectCard($icon, $title, $description) {
    ?>
    <div class="subject-card">
        <div class="subject-icon"><?php echo $icon; ?></div>
        <h3><?php echo $title; ?></h3>
        <p><?php echo $description; ?></p>
    </div>
    <?php
} 