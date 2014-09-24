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
                    <span>User Template</span>
                    <!--<small class="badge pull-right bg-green">new</small>-->
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $this->Html->url('/admin/Users/');?>"><i class="fa fa-angle-double-right"></i> List All</a></li>
                    <li><a href="<?php echo $this->Html->url('/admin/Users/add');?>"><i class="fa fa-angle-double-right"></i> Add New</a></li>
                </ul>
            </li>
            
            
            
            
<!--            <li class="active">
                <a href="<?php echo $this->Html->url('/Manage/globalconfiguration'); ?>">
                    <i class="fa fa-dashboard"></i> <span>Configuration</span>
                </a>
            </li>-->
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
                    <span>Rugpng Templates</span>
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
                    <span>Genrated Rugs Templates</span>
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
                    <i class="fa fa-th"></i> <span>Email Templates</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $this->Html->url('/manage/emailtemplates');?>"><i class="fa fa-angle-double-right"></i> List All</a></li>
                    <li><a href="<?php echo $this->Html->url('/manage/modemail');?>"><i class="fa fa-angle-double-right"></i> Add New</a></li>
                </ul>
            </li>
            
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
