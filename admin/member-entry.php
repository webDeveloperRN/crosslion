<?php
session_start();
//the isset function to check username is already loged in and stored on the session
if(!isset($_SESSION['user_id'])){
header('location:../index.php');	
}
?>
<!-- Visit codeastro.com for more projects -->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Crossfit System Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../css/fullcalendar.css" />
<link rel="stylesheet" href="../css/matrix-style.css" />
<link rel="stylesheet" href="../css/matrix-media.css" />
<link href="../font-awesome/css/fontawesome.css" rel="stylesheet" />
<link href="../font-awesome/css/all.css" rel="stylesheet" />
<link rel="stylesheet" href="../css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<!--Header-part--><!-- Visit codeastro.com for more projects -->
<div id="header">
  <h1><a href="dashboard.html">Perfect Crossfit Admin</a></h1>
</div>
<!--close-Header-part--> 
<!--top-Header-menu-->
<?php include 'includes/topheader.php'?>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<!-- <div id="search">
  <input type="hidden" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div> -->
<!--close-top-serch-->
<!--sidebar-menu-->
<?php $page='members-entry'; include 'includes/sidebar.php'?>
<!--sidebar-menu-->
<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="fas fa-home"></i> Panel</a> <a href="../admin/edit-member.php" class="tip-bottom">Administración de miembros</a> <a href="#" class="current">Agregar miembro</a> </div>
  <h1>Agregar</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fas fa-align-justify"></i> </span>
          <h5>Información personal</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="add-member-req.php" method="POST" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Nombre completo:</label>
              <div class="controls">
                <input type="text" class="span11" name="fullname" placeholder="Nombre completo" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Usuario :</label>
              <div class="controls">
                <input type="text" class="span11" name="username" placeholder="Usuario" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Contraseña :</label>
              <div class="controls">
                <input type="password"  class="span11" name="password" placeholder="**********"  />
                <span class="help-block">Nota: La información proporcionada creará una cuenta para este miembro en particular.</span>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Genero :</label>
              <div class="controls">
              <select name="gender" required="required" id="select">
                  <option value="Hombre" selected="selected">Hombre</option>
                  <option value="Mujer">Mujer</option>
                  <option value="Otro">Otro</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Fecha de registro :</label>
              <div class="controls">
                <input type="date" name="dor" class="span11" />  
              </div>
            </div>
        </div>
        <div class="widget-content nopadding">
          <div class="form-horizontal">
        </div>
        <div class="widget-content nopadding">
          <div class="form-horizontal">
            <div class="control-group">
              <label for="normal" class="control-label">Planes: </label>
              <div class="controls">
                <select name="plan" required="required" id="select">
                  <option value="1" selected="selected">Un mes</option>
                  <option value="3">Tres meses</option>
                  <option value="6">Seis meses</option>
                  <option value="12">Un año</option>
                </select>
              </div>
            </div>
            <div class="control-group">
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fas fa-align-justify"></i> </span>
          <h5>Detalles de contacto</h5>
        </div>
        <div class="widget-content nopadding">
          <div class="form-horizontal">
            <div class="control-group">
              <label for="normal" class="control-label">Número de contacto</label>
              <div class="controls">
                <input type="number" id="mask-phone" name="contact" placeholder="9876543210" class="span8 mask text">
                <span class="help-block blue span8">(999) 999-9999</span> 
                </div>
            </div>
            <div class="control-group">
              <label class="control-label">Dirección :</label>
              <div class="controls">
                <input type="text" class="span11" name="address" placeholder="Dirección" />
              </div>
            </div>
          </div>
            <div class="widget-title"> <span class="icon"> <i class="fas fa-align-justify"></i> </span>
          <h5>Destalles del servico</h5>
        </div>
        <div class="widget-content nopadding">
          <div class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Servicios</label>
              <div class="controls">
                <label>
                  <input type="radio" value="Fitness" name="services" />
                  Fitness <small>- $55 por  mes</small></label>
                <label>
                  <input type="radio" value="Sauna" name="services" />
                  Sauna <small>- $35 por mes</small></label>
                <label>
                  <input type="radio" value="Cardio" name="services" />
                  Cardio <small>- $40 por mes</small></label>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Monto total</label>
              <div class="controls">
                <div class="input-append">
                  <span class="add-on">$</span> 
                  <input type="number" placeholder="50" name="amount" class="span11">
                  </div>
              </div>
            </div>
            <div class="form-actions text-center">
              <button type="submit" class="btn btn-success">Guardar</button>
            </div>
            </form>
          </div>
        </div>
        </div>
      </div>
	</div>
  </div>
</div></div>
<!--end-main-container-part-->
<!--Footer-part-->
<?php include 'includes/footer.php'; ?>
<!--end-Footer-part-->
<script src="../js/excanvas.min.js"></script> 
<script src="../js/jquery.min.js"></script> 
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.flot.min.js"></script> 
<script src="../js/jquery.flot.resize.min.js"></script> 
<script src="../js/jquery.peity.min.js"></script> 
<script src="../js/fullcalendar.min.js"></script> 
<script src="../js/matrix.js"></script> 
<script src="../js/matrix.dashboard.js"></script> 
<script src="../js/jquery.gritter.min.js"></script> 
<script src="../js/matrix.interface.js"></script> 
<script src="../js/matrix.chat.js"></script> 
<script src="../js/jquery.validate.js"></script> 
<script src="../js/matrix.form_validation.js"></script> 
<script src="../js/jquery.wizard.js"></script> 
<script src="../js/jquery.uniform.js"></script> 
<script src="../js/select2.min.js"></script> 
<script src="../js/matrix.popover.js"></script> 
<script src="../js/jquery.dataTables.min.js"></script> 
<script src="../js/matrix.tables.js"></script> 
<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
