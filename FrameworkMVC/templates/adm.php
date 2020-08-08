{include file="Cabecera/header.tpl"}
 <div align="center" id="VENTAS">
	<h1>Artistas de HAMLET</h1>
 </div>
		<div>
		   <div align="right">
			   <button type="button" class="btn btn-light">
				   <a href="?controller=Operaciones&action=VentanaLogin">LOGEAR</a>
			   </button> 
			   </br></br>
		   </div>
		   <div align="right">
	<button type="button" class="btn btn-light">
	  <a href="?controller=Operaciones&action=VerCanciones">ver canciones</a>
	</button> 
</div>
		   <div align="center" id="CONTENIDO">
		     {foreach $datos as $n}
		     <table class="table">
  <thead class="thead-dark">
  <thead>
    <tr>
      <th scope="col">Canción</th>
      <th scope="col">Artista</th>
      <th scope="col">Genero</th>
      <th scope="col">Album</th>
	  <th scope="col">pequeña descripcion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{$n['cancion']}</td>
	  <td>{$n['artista']}</td>
	  <td>{$n['genero']}</td>
	  <td>{$n['album']}</td>
	  <td>{$n['info']}</td>
    </tr> 
  </tbody>
</table>
		   {/foreach}
		   </div>
		</div>      
    
{include file="Cabecera/footer.tpl"}

