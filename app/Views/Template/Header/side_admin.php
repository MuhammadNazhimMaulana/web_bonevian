<input type="checkbox" id="nav-toggle">
<div class="sidebar">
    <div class="sidebar-brand">
        <h2><span class="lab la-accusoft"></span><span>Bonevian</span></h2>
    </div>

    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="#" class="<?= $title == 'Dashboard Admin' ? 'active' : ''?>"><span class="las la-igloo"></span>
                <span>Dashboard</span></a>
            </li>
            <li>
                <a href="<?= site_url('Admin/Admin_C/profile'); ?>" class="<?= $title == 'Profil Admin' ? 'active' : ''?>"><span class="las la-users"></span>
                <span>Profile</span></a>
            </li>
            <li>
                <a href="<?= site_url('Admin/Posts_C/read'); ?>" class="<?= $title == 'Postingan' ? 'active' : ''?>"><span class="las la-clipboard-list"></span>
                <span>Projects</span></a>
            </li>
            <li>
                <a href="<?= site_url('Auth/Authorisasi/logout'); ?>"><span class="las la-clipboard-list"></span>
                <span>Logout</span></a>
            </li>
        </ul>
    </div>
</div>