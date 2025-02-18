<!-- Sidenav Menu Start -->
<div class="sidenav-menu">
    <!-- Brand Logo -->
    <a href="<?= base_url(); ?>" class="logo">
        <span class="logo-lg" style="font-weight: bold;">SIMARIS</span>
        <!-- <span class="logo-sm" style="font-weight: bold;">S</span> -->
        <!-- <span class="logo-light">
            <span class="logo-lg"><img src="/images/logo.png" alt="logo"></span>
            <span class="logo-sm"><img src="/images/logo-sm.png" alt="small logo"></span>
        </span>

        <span class="logo-dark">
            <span class="logo-lg"><img src="/images/logo-dark.png" alt="dark logo"></span>
            <span class="logo-sm"><img src="/images/logo-sm.png" alt="small logo"></span>
        </span> -->
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <button class="button-sm-hover">
        <i class="ri-circle-line align-middle"></i>
    </button>

    <!-- Sidebar Menu Toggle Button -->
    <button class="sidenav-toggle-button">
        <i class="ri-menu-5-line fs-20"></i>
    </button>

    <!-- Full Sidebar Menu Close Button -->
    <button class="button-close-fullsidebar">
        <i class="ti ti-x align-middle"></i>
    </button>

    <div data-simplebar>
        <!-- User -->
        <div class="sidenav-user">
            <div class="dropdown-center text-center">
                <a class="topbar-link dropdown-toggle text-reset drop-arrow-none px-2" data-bs-toggle="dropdown"
                    type="button" aria-haspopup="false" aria-expanded="false">
                    <img src="/images/users/avatar-1.jpg" width="46" class="rounded-circle" alt="user-image">
                    <span class="d-flex gap-1 sidenav-user-name my-2">
                        <span>
                            <span class="mb-0 fw-semibold lh-base fs-15"><?= $user['fullname']; ?></span>
                            <p class="my-0 fs-13 text-muted"><?= $user['role_name']; ?></p>
                        </span>
                    </span>
                </a>
            </div>
        </div>

        <!-- Sidenav Menu -->
        <ul class="side-nav">
            <?php foreach ($MenuCategory as $mCategory) : ?>
                <li class="side-nav-title mt-2">
                    <?= $mCategory['menu_category']; ?>
                </li>
                
                <?php
                $Menu = getMenu($mCategory['menuCategoryID'], $user['role']);
                foreach ($Menu as $menu) :
                    if ($menu['parent'] == 0) :
                ?>
                        <li class="side-nav-item <?= ($segment == $menu['url']) ? 'active' : ''; ?>">
                            <a class="side-nav-link" href="<?= base_url($menu['url']); ?>">
                                <span class="menu-icon"><i class="ti <?= $menu['icon']; ?>"></i></span>
                                <span class="menu-text"><?= $menu['title']; ?></span>
                                <?php if (!empty($menu['badge'])) : ?>
                                    <span class="badge bg-danger rounded-pill"><?= $menu['badge']; ?></span>
                                <?php endif; ?>
                            </a>
                        </li>
                    <?php
                    else :
                        $SubMenu = getSubMenu($menu['menu_id'], $user['role']);
                    ?>
                        <li class="side-nav-item <?= ($segment == $menu['url']) ? 'active' : ''; ?>">
                            <a data-bs-target="#<?= $menu['url']; ?>" data-bs-toggle="collapse" class="side-nav-link collapsed" aria-expanded="<?= ($segment == $menu['url']) ? 'true' : 'false'; ?>">
                                <span class="menu-icon"><i class="ti <?= $menu['icon']; ?>"></i></span>
                                <span class="menu-text"><?= $menu['title']; ?></span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div id="<?= $menu['url']; ?>" class="collapse <?= ($segment == $menu['url']) ? 'show' : ''; ?>">
                                <ul class="sub-menu">
                                    <?php foreach ($SubMenu as $subMenu) : ?>
                                        <li class="side-nav-item <?= ($subsegment == $subMenu['url']) ? 'active' : ''; ?>">
                                            <a class="side-nav-link" href="<?= base_url($menu['url'] . '/' . $subMenu['url']); ?>">
                                                <?= $subMenu['title']; ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </li>
                <?php
                    endif;
                endforeach;
                ?>
            <?php endforeach; ?>
        </ul>

        <div class="clearfix"></div>
    </div>
</div>
<!-- Sidenav Menu End -->