<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Nova Atividade
  </h1>
  <ol class="breadcrumb">
    <li><a href="/manager"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/manager/activities">Activities</a></li>
    <li class="active"><a href="/manager/activities/<?php echo htmlspecialchars( $idevent, ENT_COMPAT, 'UTF-8', FALSE ); ?>/new">New</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="box box-success">
        <div class="box-header with-border">
         
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/manager/activities/<?php echo htmlspecialchars( $idevent, ENT_COMPAT, 'UTF-8', FALSE ); ?>/new/" method="post">
          <div class="box-body">
             <?php if( $registerError!='' ){ ?>
                <div class="alert alert-danger">
                    <?php echo htmlspecialchars( $registerError, ENT_COMPAT, 'UTF-8', FALSE ); ?>
                </div>
                <?php } ?>
            
            <div class="form-group">
              <label for="desname">Nome da Atividade</label>
              <input type="text" class="form-control" id="desname" name="activity_name" class="form-control input-lg" type="text" placeholder="" >
            </div>

            <div class="form-group">
              <label>Descrição</label>
                <textarea class="form-control" rows="3" placeholder="" name="description"></textarea>
            </div>

            <div class="form-group">  
                  <select class="form-control" id="sel1" name="activity_type">
                    <option value="" selected disabled>Selecione o tipo da atividade</option>
                    <option value="Palestra">Palestra</option>
                    <option value="Oficina">Oficina</option>
                    <option value="Outros">Outros</option>
                  </select>
                </div>
         

               <div class="form-group">
                  <label>Data</label>

                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="date3" name="data_activity">
                  </div>
                  <!-- /.input group -->
                </div>

          
              <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Horário de inicio</label>

                  <div class="input-group">
                    <input type="text" class="form-control timer" name="initial_hour">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>

              <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Horário de fim</label>

                  <div class="input-group">
                    <input type="text" class="form-control timer" name="end_hour">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>

              <div class="form-group">
              <label for="desname">Limite de vagas</label>
              <input type="text" class="form-control" id="vacancies" name="vacancies" class="form-control input-lg" type="text" placeholder="Deixe vazio para vagas ilimitadas">
            </div>
           
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-success">Cadastrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->