<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="/res/admin/dist/img/avatar5.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo htmlspecialchars( $participant["pname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="/res/admin/dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  
                  <small>Membro desde <?php echo htmlspecialchars( $participant["dtregister"], ENT_COMPAT, 'UTF-8', FALSE ); ?></small>
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">

                <div class="pull-left">
                  <a href="/event/<?php echo htmlspecialchars( $event["site"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/panel/<?php echo htmlspecialchars( $participant["idparticipant"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-default btn-flat">Editar dados</a>
                </div>
                
                <div class="pull-right">
                  <a href="/event/<?php echo htmlspecialchars( $event["site"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      

      

      <!-- Sidebar Menu -->
       <ul class="sidebar-menu">
      
        <!-- Optionally, you can add icons to the links -->
        <li><a href="/event/<?php echo htmlspecialchars( $event["site"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/panel"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li><a href="/event/<?php echo htmlspecialchars( $event["site"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/payment"><i class="fa fa-bookmark"></i> <span>Pagamento</span></a></li>
        <li><a href="/event/<?php echo htmlspecialchars( $event["site"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/panel/subactivities/"><i class="fa fa-bookmark"></i> <span>Atividades</span></a></li>
        <li><a href="/event/<?php echo htmlspecialchars( $event["site"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/panel/submit/"><i class="fa fa-briefcase"></i> <span>Submeter</span></a></li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   Submeter trabalho
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">

        <div class="box-body">
                 <?php if( $msgError!='' ){ ?>
                    <div class="alert alert-danger">
                        <?php echo htmlspecialchars( $msgError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                    </div>
                    <?php } ?>
        
        <!-- /.box-header -->
        <!-- form start -->
          <form role="form" action="/event/<?php echo htmlspecialchars( $event["site"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/panel/submit/" method="post" enctype="multipart/form-data">


          <div class="box-body">
            <div class="form-group">
              <label for="desname">Digite seu nome</label>
              <input type="text" class="form-control" id="name" name="name" class="form-control input-lg" >
            </div>

            <div class="box-body">
            <div class="form-group">
              <label for="desname">Digite seu e-mail</label>
              <input type="text" class="form-control" id="email" name="email" class="form-control input-lg" >
            </div>
            
            <div class="form-group">
              <label for="file">Anexar trabalho aqui</label>
              <input type="file" class="form-control" id="file" name="archive">
              
            </div>
           
           
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" name="submit" class="btn btn-success">Enviar trabalho</button>
          </div>
        </form>


      </div>
    </div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->



 