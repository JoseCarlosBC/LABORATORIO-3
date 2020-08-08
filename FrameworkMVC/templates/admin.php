{include file="Cabecera/header.tpl"}
</br>
<div align="center" id="ENCABEZADO">
        <h1>BIENVENIDO</h1>
</div>
<div align="right">
	<button type="button" class="btn btn-light">
	  <a href="?controller=Operaciones&action=VerCanciones">CANCIONES</a>
	</button> 
</div>
</br>
        <div align="center" id="ENCABEZADO">

   
        <h2>Anadir cancion</h2>
          </div>
           <div class="col">
        <form method="post" action="?controller=Operaciones&action=Framework" id="COLOR"> 
        <div class="form-group" action="?cancion=""">
        <label for="cancion">Cancion</label>
        <input name="cancion" type="text" class="form-control" id="cancion" aria-describedby="emailHelp">
        </div>
		<div class="form-group" action="?artista=""">
        <label for="artista">Artista</label>
        <input name="artista" type="text" class="form-control" id="artista" aria-describedby="emailHelp">
        </div>
		<div class="form-group" action="?genero=""">
        <label for="genero">Genero</label>
        <input name="genero" type="text" class="form-control" id="genero" aria-describedby="emailHelp">
        </div>
		<div class="form-group" action="?album=""">
        <label for="album">Album</label>
        <input name="album" type="text" class="form-control" id="album" aria-describedby="emailHelp">
        </div>
		<div class="form-group" action="?info=""">
        <label for="info">Descripcion</label>
        <input name="info" type="text" class="form-control" id="info" aria-describedby="emailHelp">
        </div>      
                    </div><br/>
                     
					<div align="center">
                      <button type="submit" class="btn btn-primary" >Guardar Cancion</button>
					</div>
        </form>
           
        </div>
        </div>
    </div>
{include file="Cabecera/footer.tpl"}