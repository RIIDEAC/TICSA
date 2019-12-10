<?php
namespace app\nucleo;

class Config
{
	protected	
        $_data = 
        array(
    		'app' => 
                array(
                    'name' => 'RIIDE - TICSA-NOM-028-SSA2-2009',
                    'author' => 'RIIDE AC',
                    'webauthor' => 'http://riide.org.mx/',
                    'descripcion' => 'TICSA-NOM-028-SSA2-2009',
                    'webbase' => 'http://localhost/TICSA-NOM-028-SSA2-2009/',
                    'since' => '2015' 
                    ),
            'sesion' => 
                array(
                    'correo' => 'ADg6CaSS',
                    'regular' => '3600',
                    'tiempo' => 'tiempo',
                    'token' => 'LOGILOGI',
                    'rol' => 'rol',
                    'realizado' => 'realizado',
                    'error' => 'error',
                    'db' => 'DBData',
                    ),
            'dir' => 
                array(
                    'principal' => 'Inicio',
                    'login' => 'login',
                    'salir' => 'CerrarSesion',
                    'realizado' => 'RegistroRealizado',
                    'error' => 'Error',
                    'password' => 'RecuperarPassword',
                    'sinpermiso' => 'SinPermisos',
                    'controladores' => 'app/controladores/',
                    'vistas' => 'app/vistas/'
                    ),
            'controladores' => 
                array(
                    'noLogin' => // ESTAS PAGINAS NO NECESITAN USUARIO LOGEADO
                        array(
                        'Login', 
                        'RevisarCredenciales',
                        'Salir',
                        'RecuperarPassword',
                        ),
                    'permisos' =>
                        array(
                            '1' =>
                            array(
                            ''
                            )
                        )
                    ),
            'permisos' => array(
                    '1' => array(
                        'Bitacoras',
                        'Pacientes',
                        'Consejeria',
                        'Psicologia',
                        'Clinico',
                        'Ticket',
                        'Cobranza',
                        'Administrativo',
                        'General',
                        'Final',
                    )
            ),
            'dbnombres' => array(
                    'usuarios' => 'DAT_USUARIO_USU',
                    'pacientes' => 'DAT_PACIENTE_PAC',
                    'familiar' => 'DAT_FAMILIAR_FAM',
                    'notaingreso' => 'DAT_NINGRESO_NING',
                    'notaegreso' => 'DAT_NEGRESO_NEGR',
                    'ticket' => 'DAT_TICKET_TIC',
                    'assist' => 'DAT_ASSIST_ASS',
                    'scl90' => 'DAT_SCL90_SCL',
                    'ansiedad' => 'DAT_BAIBECK_BAI',
                    'depresion' => 'DAT_BDIBECK_BDI',
                    'entrevistainicial1' => 'DAT_EINICIALI_EINI',
                    'entrevistainicial2' => 'DAT_EINICIALII_EINII',
                    'entrevistainicial3' => 'DAT_EINICIALIII_EINIII',
                    'entrevistainicial4' => 'DAT_EINICIALIV_EINIV',
                    'entrevistainicial5' => 'DAT_EINICIALV_EINV',
                    'entrevistainicial6' => 'DAT_EINICIALVI_EINVI',
                    'entrevistainicial7' => 'DAT_EINICIALVII_EINVII',
                    'entrevistainicial8' => 'DAT_EINICIALVIII_EINVIII',
                    'entrevistainicial9' => 'DAT_EINICIALIX_EINIX',
                    'satisfaccionvida' => 'DAT_SATISFACCIONVIDA_SAT',
                    'reportevaloracion' => 'DAT_REPORTEVALORACION_RVA',
                    'planconsejeriaind' => 'DAT_PLANCONSIND_PCI',
                    'notaconsejeriaind' => 'DAT_NOTACONIND_NCI',
                    'notaconsejeriagru' => 'DAT_NOTACONGRU_NCG',
                    'consejerigrupaldat' => 'DAT_CONSEJERIAGRUPALPAC_CGP',
                    'centro' => 'DAT_CENTRO_CEN',
                    'entpsicologica1' => 'DAT_ENTPSIINI_EPI',
                    'entpsicologica2' => 'DAT_ENTPSIINII_EPII',
                    'notapsicologiaind' => 'DAT_NOTAPSIIND_NPI',
                    'aportacionpaciente' => 'DAT_APORTACION_APO',
                    'convenioperiodico' => 'DAT_CONVENIOPERIODICO_CPE',
                    'convenioingreso' => 'DAT_CONVENIOINGRESO_CIN',
                    'diagnosticomedico' => 'DAT_DIAGNOSTICOMEDICO_DXM',
                    'diagnosticopsiquiatrico' => 'DAT_DIAGNOSTICOPSIQUIATRICO_DXP',
                    'recetamedicamentos' => 'DAT_MEDICAMENTORECETA_REC',
            ),
            'dbcatalogos' => array(
                    'sexo' => 'CAT_SEXO_SEX',
                    'entidades' => 'CAT_ENTIDADFEDERATIVA_ENF',
                    'nacionalidad' => 'CAT_NACIONALIDAD_NAC',
                    'parentesco' => 'CAT_PARENTESCO_PAE',
                    'tipoingreso' => 'CAT_TIPOINGRESO_TII',
                    'tipoegreso' => 'CAT_TIPOEGRESO_TIE',
                    'estadocivil' => 'CAT_ESTADOCIVIL_ESC',
                    'codigopostal' => 'CAT_CODIGOPOSTAL_COP',
                    'escolaridad' => 'CAT_ESCOLARIDAD_ESO',
                    'ocupacion' => 'CAT_OCUPACION_OCU',
                    'tipoaportacion' => 'CAT_TIPOAPORTACION_TIA',
                    'tipomoneda' => 'CAT_TIPOMONEDA_TIM',
                    'tipoperiodo' => 'CAT_PERIODOAPORTACION_PER',
                    'beca' => 'CAT_BECA_BECA',
            ),
    	);

	public function obtener($path = null, $datos = array())
	{
		if($path)
        {
            $path = explode('/', $path);
            
            if(!empty($datos))
            {
                $this->_data = $datos;
            }

            $config = $this->_data;
            
            foreach($path as $bit)
            {
                if(isset($config[$bit]))
                {
                    $config = $config[$bit];
                }
            }
            
            return $config;
        }
        
        return false;
       	
	}
}