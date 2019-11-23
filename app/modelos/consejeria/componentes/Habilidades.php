<?php 
namespace app\modelos\consejeria\componentes;
/**
 * 
 */
class Habilidades
{
	public function obtener($habilidad)
	{
		return $this->{$habilidad);
	}

/*******************************************
PENSAMIENTO
*******************************************/	
	public function TomadeDecisiones()
	{
		return 'Aprender a identificar las posibles opciones y analizar las consecuencias hacia sí mismo y hacia otros';
	}

	public function SoluciondeProblemas()
	{
		return 'Aprender a desarrollar la actitud de sentirse capaz de resolver problemas y facilitar el control para la solución';
	}

	public function PensamientoCreativo()
	{
		return 'Aprender a encontrar alternativas diferentes con el fin de resolver problemas siendo flexible, priginal, lúdico e innovador';
	}

	public function PensamientoCritico()
	{
		return 'Aprender a contemplar, analizar y cuestionar los eventos detenidamente, así como a hablar de estos';
	}

/*******************************************
SOCIALES
*******************************************/	
	public function ComunicacionAsetiva()
	{
		return 'Aprender a decir lo que se siente y piensa haciendo valer los propios derechos de forma clara, directa y en el momento oportuno';
	}

	public function RelacionesAsertivas()
	{
		return 'Aprender a tener una comunicación afectiva, aprendiendo a compartir lo que es importante para sí mismo depositando confianza en otros';
	}

	public function Autoconocimiento()
	{
		return 'Aprender a conocer los propios pensamientos, reacciones, sentimientos, gustos o disgustos, límites, capacidades, potencialidades';
	}

	public function Empatia()
	{
		return 'Aprender a reconocer, comprender y apreciar los sentimientos y las emociones de los demás, aceptar las diferencias y fomentar comportamientos solidarios';
	}

/*******************************************
MANEJO DE EMOCIONES
*******************************************/	
	public function EmocionesSentimientos()
	{
		return 'Aprender a identificar y reconocer los diferentes estados de ánimo a partir de los cambios que éstos ocasionan en las propias sensaciones corporales, y saber cómo influyen en el comportamiento para tener un mejor manejo de éstas';
	}

	public function ManejoEstres()
	{
		return 'Aprender a evitar que por estrés se presenten reacciones en un tiempo prolongado, ya que afecta el funcionamiento del organismo y su comportamiento';
	}

}