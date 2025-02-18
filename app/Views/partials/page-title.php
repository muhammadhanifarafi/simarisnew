<?php if (!empty($title)): ?>
<div class="page-title-head d-flex align-items-center gap-2">
    <div class="flex-grow-1">
        <h4 class="fs-16 text-uppercase fw-bold mb-0"><?= ($title) ? $title : '' ?></h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0 fs-13">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Adminto</a></li>
            <?php if (!empty($subtitle)): ?>
            <li class="breadcrumb-item"><a href="javascript: void(0);"><?= ($subTitle) ? $subTitle : '' ?></a></li>
            <?php endif; ?>
            <li class="breadcrumb-item active"><?= ($title) ? $title : '' ?></li>
        </ol>
    </div>
</div>
<?php else: ?>
<div class="page-title-head d-flex align-items-center">
    <h4 class="fs-16 text-uppercase fw-bold mb-0">Welcome</h4>
</div>
<?php endif; ?>