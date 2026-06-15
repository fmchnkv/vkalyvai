<?php
$currentYear = date('Y');
$minYear = $currentYear - 100;
$maxYear = $currentYear - 18;
?>
<div class="lk__input-wrapper">
    <div class="lk__custom-select">
        <input type="hidden" id="year" name="">
        <div class="lk__custom-select-choise">Год</div>
    </div>
    <div class="lk__custom-select-list">
        <div class="lk__custom-select-list-container">
            <?php for ($year = $maxYear; $year >= $minYear; $year--): ?>
                <div class="lk__custom-select-item">
                    <?= $year ?>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>