<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <!--<img src="../img/avatar3.png" class="img-circle" alt="User Image" />-->
                <!--<img src="<?php //echo $this->Html->url('img/avatar3.png',array('class'=>"img-circle"));?>" />-->
                <?php echo $this->Html->image('avatar3.png',array('class'=>"img-circle"));?>
            </div>
            <div class="pull-left info">
                <p>Hello, Administrator</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
<!--        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>-->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i>
                    <span>Users</span>
                    <!--<small class="badge pull-right bg-green">new</small>-->
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $this->Html->url('/admin/Users/');?>"><i class="fa fa-angle-double-right"></i> List All</a></li>
                    <li><a href="<?php echo $this->Html->url('/admin/Users/add');?>"><i class="fa fa-angle-double-right"></i> Add New</a></li>
                </ul>
            </li>
            
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-circle"></i>
                    <span>Banners</span>
                    <!--<small class="badge pull-right bg-green">new</small>-->
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $this->Html->url('/admin/Banners/');?>"><i class="fa fa-angle-double-right"></i> List All</a></li>
                    <li><a href="<?php echo $this->Html->url('/admin/Banners/add');?>"><i class="fa fa-angle-double-right"></i> Add New</a></li>
                </ul>
            </li>
            
            
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Rugs Templates</span>
                    <!--<small class="badge pull-right bg-green">new</small>-->
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $this->Html->url('/admin/Rugs/');?>"><i class="fa fa-angle-double-right"></i> List All</a></li>
                    <li><a href="<?php echo $this->Html->url('/admin/Rugs/add');?>"><i class="fa fa-angle-double-right"></i> Add New</a></li>
                    <li><a href="<?php echo $this->Html->url('/admin/Rugs/bulk');?>"><i class="fa fa-angle-double-right"></i> Bulk Upload</a></li>
                </ul>
            </li>
            
            
            
            
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i>
                    <span>Rug Layers</span>
                    <!--<small class="badge pull-right bg-green">new</small>-->
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $this->Html->url('/admin/Rugpngs/');?>"><i class="fa fa-angle-double-right"></i> List All</a></li>
                    <li><a href="<?php echo $this->Html->url('/admin/Rugpngs/add');?>"><i class="fa fa-angle-double-right"></i> Add New</a></li>
                </ul>
            </li>
            
            
            
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Generated Rugs</span>
                    <!--<small class="badge pull-right bg-green">new</small>-->
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $this->Html->url('/admin/Genrugs/');?>"><i class="fa fa-angle-double-right"></i> List All</a></li>
                    <li><a href="<?php echo $this->Html->url('/admin/Genrugs/add');?>"><i class="fa fa-angle-double-right"></i> Add New</a></li>
                </ul>
            </li>
            <li  class="treeview">
                <a href="">
                    <i class="fa fa-dashboard"></i> <span>Seo-List</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="treeview">
                        <a href="<?php //echo $this->Html->url('/admin/seo/seo_a_b_tests');?>"><i class="fa fa-angle-double-right"></i> AB Tests</a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo $this->Html->url('/admin/seo/seo_a_b_tests');?>">List</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Html->url('/admin/seo/seo_a_b_tests/add');?>">add-new</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="<?php //echo $this->Html->url('/admin/seo/seo_blacklists');?>"><i class="fa fa-angle-double-right"></i> BlackLists</a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo $this->Html->url('/admin/seo/seo_blacklists');?>">List</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Html->url('/admin/seo/seo_blacklists/add');?>">add-new</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="<?php //echo $this->Html->url('/admin/seo/seo_canonicals');?>"><i class="fa fa-angle-double-right"></i>Canonicals</a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo $this->Html->url('/admin/seo/seo_canonicals');?>">List</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Html->url('/admin/seo/seo_canonicals/add');?>">add-new</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="<?php //echo $this->Html->url('/admin/seo/seo_meta_tags');?>"><i class="fa fa-angle-double-right"></i> Meta-Tags</a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo $this->Html->url('/admin/seo/seo_meta_tags');?>">List</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Html->url('/admin/seo/seo_meta_tags/add');?>">add-new</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="<?php //echo $this->Html->url('/admin/seo/seo_redirects');?>"><i class="fa fa-angle-double-right"></i>Redirects</a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo $this->Html->url('/admin/seo/seo_redirects');?>">List</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Html->url('/admin/seo/seo_redirects/add');?>">add-new</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="<?php //echo $this->Html->url('/admin/seo/seo_status_codes');?>"><i class="fa fa-angle-double-right"></i>Status Codes</a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo $this->Html->url('/admin/seo/seo_status_codes');?>">List</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Html->url('/admin/seo/seo_status_codes/add');?>">add-new</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="<?php //echo $this->Html->url('/admin/seo/seo_titles');?>"><i class="fa fa-angle-double-right"></i>Title</a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo $this->Html->url('/admin/seo/seo_titles');?>">List</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Html->url('/admin/seo/seo_titles/add');?>">add-new</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="<?php //echo $this->Html->url('/admin/seo/seo_uris');?>"><i class="fa fa-angle-double-right"></i>Uris</a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo $this->Html->url('/admin/seo/seo_uris');?>">List</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Html->url('/admin/seo/seo_uris/add');?>">add-new</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $this->Html->url('/admin/sentdesigns');?>">
                    <i class="fa fa-th"></i> <span>Receive-Design</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo $this->Html->url('/admin/orders');?>">
                    <i class="fa fa-th"></i> <span>Order-Templates</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
            
            <li  class="treeview">
                <a href="">
                    <i class="fa fa-th"></i> <span>Coupons Management</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $this->Html->url('/admin/coupons');?>"><i class="fa fa-angle-double-right"></i> List All</a></li>
                    <li><a href="<?php echo $this->Html->url('/admin/coupons/add');?>"><i class="fa fa-angle-double-right"></i> Add New</a></li>
                </ul>
            </li>
            <li  class="treeview">
                <a href="">
                    <i class="fa fa-th"></i> <span>Mail-Templates</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $this->Html->url('/admin/mailtemplates');?>"><i class="fa fa-angle-double-right"></i> List All</a></li>
                    <li><a href="<?php echo $this->Html->url('/admin/mailtemplates/add');?>"><i class="fa fa-angle-double-right"></i> Add New</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
