      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left info">
			<!-- <h1>26<sup>O</sup>C</h1> -->
			
			<h1>00:00:00<h1>
			<h5>dd mmmm yyyy</h5>
            
            </div>
          </div>

          <!-- search form (Optional) -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
				<button type='submit' name='search' id='search-btn' class="btn btn-flat" title="Find Me"><i class="fa fa-life-ring"></i></span>
                <button type='submit' name='search' id='search-btn' class="btn btn-flat" title="Look around"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
		  <!--
          <ul class="sidebar-menu">
            <li class="header">Results</li>
            <li><a href="#"> <i class="fa fa-plus-square"></i> <span>RSUD Salatiga</span><br />
					<small>5.0 Km Navigate(infowindow right)</small></a></li>
			<li><a href="#"> <i class="fa fa-stethoscope"></i> <span>Dr. Widodo</span></a></li>
			<li><a href="#"> <i class="fa fa-h-square"></i> <span>Klinik</span></a></li>
			<li><a href="#"> <i class="fa fa-user-md"></i> <span>Bidan</span></a></li>
			<li><a href="#"> <i class="fa fa-glass"></i> <span>Apotik</span></a></li>
            <li><a href="#"><span>Another Link</span></a></li>
            <li class="treeview">
              <a href="#"><span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Link in level 2</a></li>
                <li><a href="#">Link in level 2</a></li>
              </ul>
            </li>
          </ul>
		  -->
		  <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Page Header
            <small>Optional description</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol>
	   
		  
        </section>

        <!-- Main content -->
        <section class="content">
          
          <!-- Your Page Content Here -->
 <!-- Info boxes -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Rumah Sakit</span>
                  <span class="info-box-number">90<small>%</small></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Klinik</span>
                  <span class="info-box-number">41,410</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Dokter Umum</span>
                  <span class="info-box-number">760</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Apotik</span>
                  <span class="info-box-number">2,000</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
		  
		  

		  
			<div class="row">
				<div class="col-md-8">
					<!-- MAP & BOX PANE -->
					  <div class="box box-success">
						<div class="box-header with-border">
						  <h3 class="box-title">Visitors Report</h3>
						  <div class="box-tools pull-right">
							<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
							<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						  </div>
						</div><!-- /.box-header -->
						<div class="box-body no-padding">
						  <div class="row">
							<div class="col-md-9 col-sm-8">
							  <div class="pad">
								<!-- Map will be created here -->
								<div id="world-map-markers" style="height: 325px;"></div>
							  </div>
							</div><!-- /.col -->
						  </div><!-- /.row -->
						</div><!-- /.box-body -->
					  </div><!-- /.box -->
				</div>
				<div class="col-md-4">
              <!-- DIRECT CHAT -->
              <div class="box box-info direct-chat direct-chat-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Lokasi Terdekat</h3>
                  <div class="box-tools pull-right">
					<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages">
					<ul class="products-list product-list-in-box">
					<?php for($i=0;$i<10;$i++){ ?>
                    <li class="item">
                      <div class="product-img">
                        <img alt="Product Image" src="<?php echo base_url(); ?>assets/img/default-50x50.gif">
                      </div>
					  
                      <div class="product-info">
                        <a class="product-title" href="javascript::;"><i class="fa fa-plus-square"></i>RSUD Salatiga <span class="label label-warning pull-right">5.0 Km</span></a>
                        <span class="product-description">
                          Jl. Osamaliki Telp (0298) 313313 
                        </span>
						<button class="btn btn-success small"> Menuju </button>
                      </div>
					  
                    </li><!-- /.item -->
					<?php } ?>
                  </ul>

                 </div><!--/.direct-chat-messages-->


                 
                  
                </div><!-- /.box-body -->
              </div><!--/.direct-chat -->				
				</div>
				
			</div>
			
        
		
		
		 
		</section><!-- /.content -->
		
      </div><!-- /.content-wrapper -->