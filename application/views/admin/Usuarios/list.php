<!-- START Main section-->
<section>
   <!-- START Page content-->
   <section class="main-content">
      <a href="<?php echo base_url();?>Administrador/Usuarios/add" class="btn btn-primary btn-labeled pull-right" data-toggle="modal" data-target="#myModal">
        <span class="btn-label"><i class="fa fa-plus-circle"></i></span>Agregar Usuario
      </a>
      <h3>Usuarios
         <br>
         <small>Lista</small>
      </h3>

      <!-- START DATATABLE 3-->
      <div class="row">
         <div class="col-lg-12">
            <div class="panel panel-default">
               <div class="panel-heading">Lista de usuarios |
                  <small>Detalles</small>
               </div>
               <div class="panel-body">
                  <table id="datatable3" class="table table-striped table-hover">
                     <thead>
                        <tr>
                          <th>#</th>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>E-mail</th>
                          <th class="sort-numeric">Nombre de Usuario</th>
                          <th class="sort-alpha">Acciones</th>
                        </tr>
                     </thead>
                     <tbody>
                       <?php  if(!empty($usuarios)):?>
                         <?php $cont = 1; ?>
                         <?php foreach ($usuarios as $usuario): ?>
                               <tr class="gradeX">
                                  <td><?php echo $cont; ?></td>
                                  <td><?php echo $usuario->nombres; ?></td>
                                  <td><?php echo $usuario->apellidos; ?></td>
                                  <td><?php echo $usuario->email; ?></td>
                                  <td><?php echo $usuario->username; ?></td>

                                  <td>
                                    <div class="btn-group">
                                      <a href="<?php echo base_url();?>administrador/usuarios/view/<?php echo $usuario->idUsuario;?>"
                                         class="btn btn-oval btn-primary" data-toggle="modal" data-target="#myModal"> <span class="fa fa-search"></span> </a>
                                      <a href="<?php echo base_url()?>administrador/usuarios/edit/<?php echo $usuario->idUsuario;?>"
                                         class="btn btn-warning" data-toggle="modal" data-target="#myModal"><span class="fa fa-pencil"></span> </a>
                                      <button data-toggle="modal" data-target="#myModal1" class="btn btn-oval btn-danger "> <span class="fa fa-trash-o"></span> </button>
                                    </div>
                                  </td>
                              </tr>
                              <?php $cont++; ?>
                        <?php endforeach; ?>
                      <?php endif; ?>
                        <tfoot>
                           <tr>
                             <th>#</th>
                             <th>Nombre</th>
                             <th>Apellido</th>
                             <th>E-mail</th>
                             <th>nombre de Usuario</th>
                           </tr>
                        </tfoot>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <!-- END DATATABLE 3-->

   </section>
   <!-- END Page content-->
</section>
<!-- END Main section-->


</section>
<!-- END Main wrapper-->


 <!-- START modal-->
 <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
       <div class="modal-content">
          <div class="modal-header">

          </div>
          <div class="modal-body">
          </div>
          <div class="modal-footer">

          </div>
       </div>
    </div>
 </div>

 <div id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
       <div class="modal-content">
          <div class="modal-header">
             <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
             <h4 id="myModalLabel" class="modal-title">Eliminar Registro</h4>
          </div>
          <div class="modal-body alert alert-danger alert-dismissable ">
            Esta seguro de quere eliminar este registro?
          </div>
          <div class="modal-footer">
             <a href="<?php echo base_url()?>administrador/usuarios/delete/<?php echo $usuario->idUsuario;?>"
                  class="btn btn-danger btn-labeled">
                  <span class="btn-label"> <i class="fa fa-trash-o"></i></span>Eliminar</a>
             <button type="button" data-dismiss="modal" class="btn btn-primary">Cancelar</button>

          </div>
       </div>
    </div>
 </div>
  <!-- END modal-->
