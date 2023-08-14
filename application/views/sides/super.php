<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar nav-compact flex-column nav-flats" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item" >
            <a href="<?=site_url('Dashboard')?>" class="nav-link <?=$this->uri->segment(1) == 'Dashboard' || $this->uri->segment(1) == '' ? "active" : '' ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    <?=translate('The Main Page')?>
                </p>
            </a>
        </li>

     
        <!--<li class="nav-item has-treeview  <?/*=$this->uri->segment(1) == 'Banners'  ?
            "menu-open " : '' */?> ">
            <a href="#" class="nav-link <?/*=$this->uri->segment(1) == 'Banners'  ?
            "active " : '' */?> ">
                <i class="nav-icon fas fa-list-ol text-maroon"></i>

                <p>إدارة Banners <i class="fas fa-angle-left right"></i>
                    <span class="badge badge-warning right "></span>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?/*=site_url('Banners')*/?>"
                       class="nav-link <?/*=$this->uri->segment(1) == 'Banners' && $this->uri->segment(2) == '' ?  "active" : '' */?> ">
                        <i class="fas fa-exclamation-circle nav-icon  text-maroon"></i>
                        <p>Banners</p>
                    </a>
                </li>

            </ul>
        </li>-->
        <li class="nav-item has-treeview  <?=$this->uri->segment(1) == 'User'   ?
            "menu-open " : '' ?> ">
            <a href="#" class="nav-link <?=$this->uri->segment(1) == 'User'  ?
                "active " : '' ?> ">

                <i class="nav-icon fas fa-users text-warning"></i>
                <p> <?=translate('The Users')?> <i class="fas fa-angle-left right "></i>
                    <span class="badge badge-warning right"></span>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?=site_url('User')?>" class="nav-link  <?=$this->uri->segment(1) == 'User' && $this->uri->segment(2) == '' ?  "active" : '' ?> ">
                        <i class="fas fa-users nav-icon text-info  "></i>
                        <p>
                            <?=translate('Application Users')?>  <span class="badge badge-warning right"><?=$this->fungsi->count_users(); ?></span>
                        </p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-treeview  <?=$this->uri->segment(1) == 'Config_company'   ?
            "menu-open " : '' ?> ">
            <a href="#" class="nav-link <?=$this->uri->segment(1) == 'Config_company'  ?
                "active " : '' ?> ">

                <i class="nav-icon fas fa-cogs text-warning"></i>
                <p> <?=translate('Settings')?> <i class="fas fa-angle-left right "></i>
                    <span class="badge badge-warning right"></span>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?=site_url('Config_company')?>" class="nav-link  <?=$this->uri->segment(1) == 'Config_company' && $this->uri->segment(2) == '' ?  "active" : '' ?> ">
                        <i class="fas fa-cogs nav-icon text-info  "></i>
                        <p class="text-success_">
                          <?=translate('Company Main Data')?>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?=site_url('About_us_c')?>" class="nav-link  <?=$this->uri->segment(1) == 'About_us_c' && $this->uri->segment(2) == '' ?  "active" : '' ?> ">
                        <i class="fas fa-cogs nav-icon text-info  "></i>
                        <p class="text-success_">
                          <?=translate('About Us')?>
                        </p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-treeview  <?=$this->uri->segment(1) == 'Translations'   ?
            "menu-open " : '' ?> ">
            <a href="#" class="nav-link <?=$this->uri->segment(1) == 'Translations'  ?
                "active " : '' ?> ">

                <i class="nav-icon fas fa-cogs text-warning"></i>
                <p> <?=translate('Translations')?> <i class="fas fa-angle-left right "></i>
                    <span class="badge badge-warning right"></span>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?=site_url('Translations/arabic')?>" class="nav-link  <?=$this->uri->segment(1) == 'Translations' && $this->uri->segment(2) == 'arabic' ?  "active" : '' ?> ">
                        <i class="fas fa-cogs nav-icon text-info  "></i>
                        <p class="text-success_">
                          <?=translate('Translations_arabic')?>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?=site_url('Translations/english')?>" class="nav-link  <?=$this->uri->segment(1) == 'Translations' && $this->uri->segment(2) == 'english' ?  "active" : '' ?> ">
                        <i class="fas fa-cogs nav-icon text-info  "></i>
                        <p class="text-success_">
                          <?=translate('Translations_english')?>
                        </p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="<?=site_url('Video_c')?>"
               class="nav-link <?=$this->uri->segment(1) == 'Video_c' ?  "active" : '' ?> ">
                <i class="nav-icon fas fa-video text-maroon"></i>
                <p><?=translate('Video Banner')?></p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?=site_url('Jobs_c')?>"
               class="nav-link <?=$this->uri->segment(1) == 'Jobs_c' ?  "active" : '' ?> ">
                <i class="nav-icon fas fa-list-ol text-maroon"></i>
                <p><?=translate('Employment Management')?></p>
            </a>
        </li>
       <!-- <li class="nav-item">
            <a href="<?/*=site_url('Client')*/?>"
               class="nav-link <?/*=$this->uri->segment(1) == 'Client' ?  "active" : '' */?> ">
                <i class="nav-icon fas fa-users text-success"></i>
                <p>عملاء الشركة</p>
            </a>
        </li>-->
        <li class="nav-item">
            <a href="<?=site_url('Team')?>"
               class="nav-link <?=$this->uri->segment(1) == 'Team' ?  "active" : '' ?> ">
                <i class="nav-icon fas fa-users text-success"></i>
                <p><?=translate('Our Team')?> </p>
            </a>
        </li>


        <li class="nav-item">
            <a href="<?=site_url('News')?>"
               class="nav-link <?=$this->uri->segment(1) == 'News' ?  "active" : '' ?> ">
                <i class="nav-icon fas fa-users text-success"></i>
                <p><?=translate('News')?> </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?=site_url('Project')?>"
               class="nav-link <?=$this->uri->segment(1) == 'Project' ?  "active" : '' ?> ">
                <i class="nav-icon fas fa-users text-success"></i>
                <p><?=translate('Project')?> </p>
            </a>
        </li>

      <!--  <li class="nav-item">
            <a href="<?/*=site_url('Services')*/?>"
               class="nav-link <?/*=$this->uri->segment(1) == 'Services' ?  "active" : '' */?> ">
                <i class="nav-icon fas fa-list-ol text-maroon"></i>
                <p>الخدمات</p>
            </a>
        </li>-->
       <!-- <li class="nav-item">
            <a href="<?/*=site_url('Company_stats_c')*/?>"
               class="nav-link <?/*=$this->uri->segment(1) == 'Company_stats_c' ?  "active" : '' */?> ">
                <i class="nav-icon fas fa-list-ol text-maroon"></i>
                <p> احصائيات الشركة
                </p>
            </a>
        </li>-->
       <!-- <li class="nav-item has-treeview  <?/*=($this->uri->segment(1) == 'jobs' || $this->uri->segment(1) == 'jobs_tasnif'|| $this->uri->segment(1) == 'Products'|| $this->uri->segment(1) == 'Job_sub_c')  ?
            "menu-open " : '' */?> ">
            <a href="#" class="nav-link <?/*=($this->uri->segment(1) == 'jobs' || $this->uri->segment(1) == 'jobs_tasnif' || $this->uri->segment(1) == 'Products'|| $this->uri->segment(1) == 'Job_sub_c')  ?
            "active " : '' */?> ">
                <i class="nav-icon fas fa-list-ol text-maroon"></i>

                <p>إدارة الأعمال <i class="fas fa-angle-left right"></i>
                    <span class="badge badge-warning right "></span>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?/*=site_url('jobs_tasnif')*/?>"
                       class="nav-link <?/*=$this->uri->segment(1) == 'jobs_tasnif' && $this->uri->segment(2) == '' ?  "active" : '' */?> ">
                        <i class="fas fa-exclamation-circle nav-icon  text-maroon"></i>
                        <p>تصنيف الأعمال</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?/*=site_url('Job_sub_c')*/?>"
                       class="nav-link <?/*=$this->uri->segment(1) == 'Job_sub_c' && $this->uri->segment(2) == '' ?  "active" : '' */?> ">
                        <i class="fas fa-exclamation-circle nav-icon  text-maroon"></i>
                        <p>الاعمال</p>
                    </a>
                </li>

            </ul>
        </li>-->
      <!--  <li class="nav-item has-treeview  <?/*=($this->uri->segment(1) == 'Product_sub_c' || $this->uri->segment(1) == 'Products_tasnif'|| $this->uri->segment(1) == 'Products')  ?
            "menu-open " : '' */?> ">
            <a href="#" class="nav-link <?/*=($this->uri->segment(1) == 'Product_sub_c' || $this->uri->segment(1) == 'Products_tasnif' || $this->uri->segment(1) == 'Products')  ?
            "active " : '' */?> ">
                <i class="nav-icon fas fa-list-ol text-maroon"></i>

                <p>إدارة المنتجات <i class="fas fa-angle-left right"></i>
                    <span class="badge badge-warning right "></span>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?/*=site_url('Products_tasnif')*/?>"
                       class="nav-link <?/*=$this->uri->segment(1) == 'Products_tasnif' && $this->uri->segment(2) == '' ?  "active" : '' */?> ">
                        <i class="fas fa-exclamation-circle nav-icon  text-maroon"></i>
                        <p>تصنيف المنتجات</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?/*=site_url('Product_sub_c')*/?>"
                       class="nav-link <?/*=$this->uri->segment(1) == 'Product_sub_c' && $this->uri->segment(2) == '' ?  "active" : '' */?> ">
                        <i class="fas fa-exclamation-circle nav-icon  text-maroon"></i>
                        <p>المنتجات</p>
                    </a>
                </li>

            </ul>
        </li>
   -->
        <li class="nav-item has-treeview  <?=$this->uri->segment(1) == 'Msg'   ?
            "menu-open " : '' ?> ">
            <a href="#" class="nav-link <?=($this->uri->segment(1) == 'Msg' || $this->uri->segment(2) == 'msgs_read'|| $this->uri->segment(2) == 'msgs') ?
                "active " : '' ?> ">

                <i class="nav-icon fas fa-envelope text-warning"></i>
                <p> <?=translate('Messages and Complaints')?> <i class="fas fa-angle-left right "></i>
                    <span class="badge badge-warning right"></span>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?=site_url('Msg/msgs')?>" class="nav-link  <?=$this->uri->segment(1) == 'Msg' && $this->uri->segment(2) == 'msgs' ?  "active" : '' ?> ">
                        <i class="far fa-envelope  nav-icon  text-warning"></i>
                        <p><?=translate('Unread Messages')?></p>  <span class="badge badge-warning right"><?=$this->fungsi->count_new_msg('reading'); ?></span>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?=site_url('Msg/msgs_read')?>" class="nav-link  <?=$this->uri->segment(1) == 'Msg' && $this->uri->segment(2) == 'msgs_read' ?  "active" : '' ?> ">
                        <i class="far fa-envelope  nav-icon  text-warning"></i>
                        <p><?=translate('Read Messages')?></p>
                    </a>
                </li>
            </ul>
        </li>

       <!-- <li class="nav-item has-treeview  <?/*=$this->uri->segment(1) == 'Price_list/price_lists'   ?
            "menu-open " : '' */?> ">
            <a href="#" class="nav-link <?/*=($this->uri->segment(1) == 'Price_list' || $this->uri->segment(2) == 'price_lists'|| $this->uri->segment(2) == 'price_lists_read') ?
                "active " : '' */?> ">

                <i class="nav-icon fas fa-money-bill text-warning"></i>
                <p> عروض الأسعار <i class="fas fa-angle-left right "></i>
                    <span class="badge badge-warning right"></span>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?/*=site_url('Price_list/price_lists')*/?>" class="nav-link  <?/*=$this->uri->segment(1) == 'Price_list' && $this->uri->segment(2) == 'price_lists' ?  "active" : '' */?> ">
                        <i class="fas fa-money-bill nav-icon  text-warning"></i>
                        <p>عروض الأسعار الغير مقروءة  </p>  <span class="badge badge-warning right"><?/*=$this->fungsi->count_new_price_list('reading'); */?></span> </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?/*=site_url('Price_list/price_lists_read')*/?>" class="nav-link  <?/*=$this->uri->segment(1) == 'Price_list' && $this->uri->segment(2) == 'price_lists_read' ?  "active" : '' */?> ">
                        <i class="fas fa-money-bill nav-icon text-success"></i>
                        <p>عروض الأسعار المقروءة</p>
                    </a>
                </li>
            </ul>
        </li>
-->
    </ul>
</nav>