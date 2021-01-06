<?php
namespace app\controladores;
/**
 * 
 */
class Imagen
{
	public function Index(string $nombre = null): void
	{
		if(file_exists('app/vistas/imagenes/'.$nombre))
		{
			$file = 'app/vistas/imagenes/'.$nombre;

			header("Content-type: " . image_type_to_mime_type(exif_imagetype($file)));

			readfile('app/vistas/imagenes/' .$nombre);
		}
		else
		{
			echo 'error';
		}	
	}	
}