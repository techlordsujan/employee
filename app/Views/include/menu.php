         <!-- Left side column. contains the logo and sidebar -->
		 <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
              
              <ul class="sidebar-menu">
                <li class="header"><!-- MAIN NAVIGATION --></li>  
				
				<?php $uri = current_url(true); ?>				
				<li class="<?php echo($uri->getSegment(1)==="home")?"active":"not-active"?>">
					<a href="<?php echo base_url("/"); ?>"><i class="fa fa-home"></i> 
						<span>Dashboard</span>
					</a>
				</li>

				<li class="<?php echo($uri->getSegment(1)==="personalfact")?"active":"not-active"?>"> 
					<a href="<?php echo base_url('/').'personalfact';?>"> <i class="fa  fa-info-circle"></i> 
						<span>Personal Fact</span>
					</a>	
				</li>
				<li class="<?php echo($uri->getSegment(1)==="address")?"active":"not-active"?>"> 
				<a href="<?php echo base_url('/').'address';?>"> <i class="fa fa-map-marker"></i> 
					<span>Address</span>
				</a>
				</li>
				<li class="<?php echo($uri->getSegment(1)==="language")?"active":"not-active"?>"> 
				<a href="<?php echo base_url('/').'language';?>"> <i class="fa fa-comment"></i> 
					<span>Languages</span>
				</a>
				</li>
				<li class="<?php echo($uri->getSegment(1)==="education")?"active":"not-active"?>"> 
					<a href="<?php echo base_url('/').'education';?>"> <i class="fa fa-graduation-cap"></i> 
						<span>Education</span>
					</a>
				</li>
				<!--li class="<?php echo($uri->getSegment(1)==="welcome")?"active":"not-active"?>"> 
				<a href="<?php echo base_url('/').'';?>"> <i class="fa fa-history"></i> 
					<span>Training</span>
				</a>
				</li>
				<li class="<?php echo($uri->getSegment(1)==="welcome")?"active":"not-active"?>"> 
				<a href="<?php echo base_url('/').'';?>"> <i class="fa fa-history"></i> 
					<span>Experience</span>
				</a>
				</li>	
				<li class="<?php echo($uri->getSegment(1)==="welcome")?"active":"not-active"?>"> 
				<a href="<?php echo base_url('/').'';?>"> <i class="fa fa-history"></i> 
					<span>Extra Info</span>
				</a>
				</li-->			
				<li class="<?php echo($uri->getSegment(1)==="family")?"active":"not-active"?>"> 
				<a href="<?php echo base_url('/').'family';?>"> <i class="fa fa-users"></i> 
					<span>Family Details</span>
				</a>
				</li>
				<!--li class="<?php echo($uri->getSegment(1)==="declaration")?"active":"not-active"?>"> 
				<a href="<?php echo base_url('/').'';?>"> <i class="fa fa-sticky-note"></i> 
					<span>Declaration</span>
				</a>
				</li-->                
               
               <?php if(true){ ?>
                    <!--li class="<?php echo(false)?"active":"not-active"?>"> 
                        <a href="<?php echo base_url().'index.php/';?>user/userTable"> <i class="fa fa-user"></i> <span>Users</span></a>
                    </li-->    
                <?php }  if(true){ ?>    
                   <!--  <li class="<?php echo(true)?"active":"not-active"?>">
                        <a href="<?php echo base_url("setting"); ?>"><i class="fa fa-cogs"></i> <span>Settings</span></a>
                    </li>   -->       
                    <!-- <li class="<?php //echo ($this->router->class==="Templates")?"active":"not-active"?>">
                        <a href="<?php //echo base_url("Templates"); ?>"><i class="fa fa-cubes"></i> <span>Templates</span></a>
                    </li> -->
                  <?php }  /*if(CheckPermission("invoice", "own_read")){ ?>   
                    <li class="<?php echo($this->router->class==="invoice")?"active":"not-active"?>">
                        <a href="<?php echo base_url("invoice/view"); ?>"><i class="fa fa-list-alt"></i> <span>Invoice</span></a>
                    </li>

               <?php  }*/ ?>
                  
              </ul>
            </section>
            <!-- /.sidebar -->
          </aside>          

<style>
.progress-main-div1 {
    padding-top: 10px;
    background-color: rgb(232, 82, 15);
    position: fixed;
    bottom: 21px;
    z-index: 50;
    width: 50%;
    padding-bottom: 10px;
    color: white;
    text-align: center;
    margin-left: 34%;
    margin-bottom: 19px;
}
.progress-main-div1 a{
    color:#04046e;;
}
</style>