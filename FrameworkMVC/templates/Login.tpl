{include file="Cabecera/header.tpl"}
</br></br></br>
	<div align="center" id="ENCABEZADO">
        <h1>LOGIN</h1>
    </div>
</br>
    <div class="container-fluid" id="CONTENIDO">
        <div class="row justify-content-center" >
            <div class="col-4 " >
                <form method="post" action="?controller=User&action=ValidarUsuario"> 
                    <div class="form-group " >
                        <label for="usuario">nombre</label>
                        <input name="usuario" type="text" class="form-control" id="usuario" aria-describedby="emailHelp">
                        <small id="usuario" class="form-text text-muted">Ingrese su usuario</small>
                    </div>
                    <div class="form-group">
                        <label for="password">contraseña</label>
                        <input name="password" type="password" class="form-control" id="password">
                        <small id="usuario" class="form-text text-muted">Ingrese su password</small>
                    </div>
                    <select class="form-control" id="tipo" name="tipo">
                        <option value="Administrador">Administrador</option>
                    </select>
                    </br></br>
					<div align="center">
                      <button type="submit" class="btn btn-primary" >Ingresar</button>
					</div>
                </form>
            </div>
        </div>
    </div>
{include file="Cabecera/footer.tpl"}
