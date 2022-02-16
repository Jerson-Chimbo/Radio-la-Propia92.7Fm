<?php
namespace controllers;

use models\Login;

class Admin{
    private $loginTable;

    public function  __construct(
        Login $loginTable
    )
    {
     $this->loginTable= $loginTable;   
    }

    public function login(){
        $contra = password_hash('123456',PASSWORD_DEFAULT);
        $datos = [
            'cedula' => '0997810792',
            'clave' => $contra
        ];
        //$this->loginTable->insert($datos);
        return [
            'title' => 'Inicie Session',
            'template' => 'admin/login_admin.html.php',
            'administrador' => true
        ];
    }

    public function addNoticias(){
        return [
            'title' => 'Agregue una Noticia',
            'template' => 'admin/addNoticias.html.php',
            'administrador' => true
        ];
    }

    public function saveNoticias(){
        if(count($_FILES) != 0){
        $noticias = file_get_contents('./models/noticias/noticias.json');
        $array = json_decode($noticias,true);
        if(!empty($_FILES['imagen']['name'])){
            $patch = './public/asset/img/';
            $nombreArchivo= $_FILES['imagen']['name'];
            $nombreGuardar = $patch.$nombreArchivo;
            $archivoTemporal = $_FILES['imagen']['tmp_name'];
            $array['noticias'][] = [
                'title' => $_POST['titulo'],
                'img' => ltrim($nombreGuardar,'./'),
                'descripcion' => $_POST['descripcion']
            ];
        }else{
            $nombreArchivo= $_FILES['video']['name'];
            $patchVideos = './public/asset/video/';
            $nombreGuardar = $patchVideos.$nombreArchivo;
            $archivoTemporal = $_FILES['video']['tmp_name'];
            $array['noticias'][] = [
                'title' => $_POST['titulo'],
                'video' => ltrim($nombreGuardar,'./'),
                'descripcion' => $_POST['descripcion']
            ];
        }
        
        move_uploaded_file($archivoTemporal,$nombreGuardar);
        file_put_contents('./models/noticias/noticias.json',json_encode($array));
        return [
            'title' => 'Agregue una Noticia',
            'template' => 'admin/addNoticias.html.php',
            'administrador' => true,
            'variables' => [
                'correcto' => 'Se ingreso correctamente la noticia'
            ]
        ];
    }
    else{
        return [
            'title' => 'Agregue una Noticia',
            'template' => 'admin/addNoticias.html.php',
            'administrador' => true,
            'variables' => [
                'correcto' => 'El video ingresado es muy grande para guardarse, intentelo nuevamente'
            ]
        ];
    }
    }

    public function listNoticias(){
        $noticias = file_get_contents('./models/noticias/noticias.json');
        $array = json_decode($noticias,true)['noticias'];
        return [
            'title' => 'Lista de Noticias',
            'template' => 'admin/listNoticias.html.php',
            'administrador' => true,
            'variables' => [
                'noticias' => $array
            ]
        ];
    }
    public function editNoticias(){
        
        if(isset($_GET['title'])){
            $noticias = file_get_contents('./models/noticias/noticias.json');
            $array = json_decode($noticias,true);
            $res =[];
            foreach($array['noticias'] as  $value){

               foreach($value as $key => $noticia){
                  if($key == 'title' && $_GET['title'] == $noticia){
                     $res = $value;
                  }
               }

            }

            return [
                    'title' => 'Editar Noticias',
                    'template' => 'admin/editNoticias.html.php',
                    'administrador' => true,
                    'variables' => [
                        'noticia' => $res
                    ]
                ];
        }
    }

    public function saveEditNoticias(){
        $noticias = file_get_contents('./models/noticias/noticias.json');
        $array = json_decode($noticias,true);
        foreach($array['noticias'] as $index => $value){
           foreach($value as $key => $noticia){
              if($key == 'title' && $_POST['idT'] == $noticia){
                 $array['noticias'][$index]['title'] = $_POST['titulo'];
                 $array['noticias'][$index]['descripcion'] = $_POST['descripcion'];
              }
           }

        }
        file_put_contents('./models/noticias/noticias.json',json_encode($array));

        header('location:/admin/list/noticias');
    }
    
    public function deleteNoticias(){
        $noticias = file_get_contents('./models/noticias/noticias.json');
        $array = json_decode($noticias,true);
        foreach($array['noticias'] as $index => $value){
           foreach($value as $key => $noticia){
              if($key == 'title' && $_POST['title'] == $noticia){
                unset($array['noticias'][$index]);
                
              }
           }

        }
        file_put_contents('./models/noticias/noticias.json',json_encode($array));
        header('location:/admin/list/noticias');
    }

    public function addServicios(){
        return [
            'title' => 'Ingresar Servicios',
            'template' => 'admin/addServicios.html.php',
            'administrador' => true
        ];
    }

    public function saveServicios(){
        $noticias = file_get_contents('./models/servicios/servicios.json');
        $array = json_decode($noticias,true);
        $patch = './public/asset/img/servicios/';
        $archivo1 = $patch.$_FILES['imagen1']['name'];
        $archivo2 = $patch.$_FILES['imagen2']['name'];
        $archivo1Tem = $_FILES['imagen1']['tmp_name'];
        $archivo2Tem = $_FILES['imagen2']['tmp_name'];

        move_uploaded_file($archivo1Tem,$archivo1);
        move_uploaded_file($archivo2Tem,$archivo2);
        
        $array['servicios'][] =[
            'nombre' => $_POST['nombre'],
            'precio' => $_POST['precio'],
            'horas' => $_POST['horas'],
            'requisitos' => $_POST['requisitos'],
            'descripcion' => $_POST['descripcion'],
            'imagen1' => ltrim($archivo1,'./'),
            'imagen2' => ltrim($archivo2,'./')
        ];

        file_put_contents('./models/servicios/servicios.json',json_encode($array));
        return [
            'title' => 'Ingresar Servicios',
            'template' => 'admin/addServicios.html.php',
            'administrador' => true,
            'variables' => [
                "correcto" => "Se agrego correctamente el servicio"
            ]
        ];


        
    }

    public function listServicios(){
        $noticias = file_get_contents('./models/servicios/servicios.json');
        $array = json_decode($noticias,true)['servicios'];
        return [
            'title' => 'Lista de Servicios',
            'template' => 'admin/listServicios.html.php',
            'administrador' => true,
            'variables' => [
                'servicios' => $array
            ]
        ];
    }

    public function editServicios(){
        if(isset($_GET['nombre'])){
            $servicios = file_get_contents('./models/servicios/servicios.json');
            $array = json_decode($servicios,true);
            $res =[];
            foreach($array['servicios'] as  $value){
               foreach($value as $key => $servicio){
                  if($key == 'nombre' && $_GET['nombre'] == $servicio){
                     $res = $value;
                  }
               }

            }
            return [
                    'title' => 'Editar Servicio',
                    'template' => 'admin/editServicio.html.php',
                    'administrador' => true,
                    'variables' => [
                        'servicio' => $res
                    ]
                ];
        }
    }

    public function saveEditServicios(){
        $servicios = file_get_contents('./models/servicios/servicios.json');
        $array = json_decode($servicios,true);
        foreach($array['servicios'] as $index => $value){
           foreach($value as $key => $servicio){
              if($key == 'nombre' && $_POST['idT'] == $servicio){
                 $array['servicios'][$index]['nombre'] = $_POST['nombre'];
                 $array['servicios'][$index]['horas'] = $_POST['horas'];
                 $array['servicios'][$index]['precio'] = $_POST['precio'];
                 $array['servicios'][$index]['requisitos'] = $_POST['requisitos'];
                 $array['servicios'][$index]['descripcion'] = $_POST['descripcion'];
              }
           }

        }
        file_put_contents('./models/servicios/servicios.json',json_encode($array));

        header('location:/admin/lista/servicios');
    }

    public function deleteServicios(){
        $servicios = file_get_contents('./models/servicios/servicios.json');
        $array = json_decode($servicios,true);
        foreach($array['servicios'] as $index => $value){
           foreach($value as $key => $noticia){
              if($key == 'nombre' && $_POST['nombre'] == $noticia){
                unset($array['servicios'][$index]);
                
              }
           }

        }
        file_put_contents('./models/servicios/servicios.json',json_encode($array));
        header('location:/admin/lista/servicios');
    }

    public function addGaleria(){
        return [
            'title' => 'Ingresar Imagenes',
            'template' => 'admin/addGaleria.html.php',
            'administrador' => true
        ];
    }

    public function saveGaleria(){
        $datos = file_get_contents('./models/servicios/direccion_imgs.json');
        $array = json_decode($datos,true);
        $patch = './public/asset/img/galery/';
        $nombreArchivo = $patch.$_FILES['foto']['name'];
        $archivoTem = $_FILES['foto']['tmp_name'];
        array_push($array['imgs'],ltrim($nombreArchivo,'./'));
        move_uploaded_file($archivoTem,$nombreArchivo);
        file_put_contents('./models/servicios/direccion_imgs.json',json_encode($array));
        return [
            'title' => 'Ingresar Imagenes',
            'template' => 'admin/addGaleria.html.php',
            'administrador' => true, 
            'variables' => [
                'correcto'=> "se Agregado la imagen a la Galeria"
            ]
        ];

    }
    public function deleteViewImagen(){
        $datos = file_get_contents('./models/servicios/direccion_imgs.json');
        $array = json_decode($datos,true)['imgs'];
        return [
            'title' => 'Ingresar Imagenes',
            'template' => 'admin/viewDeleteImagen.html.php',
            'administrador' => true, 
            'variables' => [
                'imagenes'=> $array
            ]
            
        ];

    }
    public function saveDeleteImagen(){
        $datos = file_get_contents('./models/servicios/direccion_imgs.json');
        $array = json_decode($datos,true);
        $direccionimagen = "./";

        foreach($array['imgs'] as $key => $imagen ){
            if($imagen == $_POST['foto']){
                $direccionimagen .= $imagen;
                unset($array['imgs'][$key]);
            }
        }
        file_put_contents('./models/servicios/direccion_imgs.json', json_encode($array));
        unlink($direccionimagen);

        header('location:/admin/delete/imagen');

        

    }




    public function viewVideo(){
        return [
            'title' => 'Ingresar Videos',
            'template' => 'admin/addVideo.html.php',
            'administrador' => true, 
            
        ];
    }

    public function saveVideo(){
        if(count($_FILES) != 0){

        
        $datos = file_get_contents('./models/servicios/direccion_videos.json');
        $array = json_decode($datos,true);
        $patch = './public/asset/video/';
        $nombreArchivo = $patch.$_FILES['video']['name'];
        $archivoTem = $_FILES['video']['tmp_name'];
        $titleVideo = $_POST['title'];
        array_push($array['videos'],[
            'title' => $titleVideo,
          'direccion' =>  ltrim($nombreArchivo,'./'),
          ]
        );
        move_uploaded_file($archivoTem,$nombreArchivo);
        file_put_contents('./models/servicios/direccion_videos.json',json_encode($array));
        return [
            'title' => 'Ingresar Videos',
            'template' => 'admin/addVideo.html.php',
            'administrador' => true, 
            'variables' => [
                'correcto'=> "Se agregado el video a rendición de cuentas"
            ]
        ];

    }else{
        return [
            'title' => 'Ingresar Videos',
            'template' => 'admin/addVideo.html.php',
            'administrador' => true, 
            'variables' => [
                'correcto'=> "El video es muy grande para subirse"
            ]
        ];
    }
    }

    public function deleteViewVideo(){
        $data = file_get_contents('./models/servicios/direccion_videos.json');
        $videos = json_decode($data,true)['videos'];
        return [
            'title' => 'Ingresar Imagenes',
            'template' => 'admin/viewDeleteVideo.html.php',
            'administrador' => true, 
            'variables' => [
                'videos'=> $videos
            ]
        ];

    }

    public function saveDeleteVideo(){
        $datos = file_get_contents('./models/servicios/direccion_videos.json');
        $array = json_decode($datos,true);
        $direccionVideo = './';
        foreach($array['videos'] as $key => $video){
           foreach($video as $index => $componentes){
            if($index == 'title' && $componentes == $_POST['title']){
                echo "si";
                $direccionVideo .= $array['videos'][$key]['direccion'];
                unset($array['videos'][$key]);
        }
           }    
            
        }


        file_put_contents('./models/servicios/direccion_videos.json',json_encode($array));
       
         unlink($direccionVideo);
        header('location:/admin/delete/video');
    }
}
