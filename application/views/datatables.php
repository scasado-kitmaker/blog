<!--
La vista datatables.php nos muestra distintias tablas las cuales contienen informacón presente
en la base de datos 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>View Entries</title> 
     <!-- estilos-->
    <style type="text/css" class="init"></style>
    <link href='http://localhost/blog/public/assets/css/style.css' rel='stylesheet' type='text/css' />
    <link href='http://localhost/blog/public/assets/css/styleTables.css' rel='stylesheet' type='text/css' />
    <link rel="shortcut icon" type="image/ico" href="http://localhost/blog/public/assets/images/favicon.ico"/>
    <!--<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">-->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/dataTables.jqueryui.min.css">-->
  
    <!--scripts-->
    <script type="text/javascript" src="/media/js/site.js?_=f612d6bab9a5a365a52445c40dd6b8c1">
    </script>
    <script type="text/javascript" src="/media/js/dynamic.php?comments-page=examples%2Fstyling%2FjqueryUI.html" async>
    </script>
    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.0.min.js">
    </script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js">
    </script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.11/js/dataTables.jqueryui.min.js">
    </script>
    <script type="text/javascript" language="javascript" src="../resources/demo.js">
    </script>
    <!-- Código javascript para mostrar la tabla usuarios-->
    <script type="text/javascript" class="init">

        $(document).ready(function() {
            $('#usuarios').DataTable();
        } );

    </script>
    <!-- Código javascript para mostrar la tabla comentarios-->
    <script type="text/javascript" class="init">

        $(document).ready(function() {
            $('#comentarios').DataTable();
        } );

    </script>
    <!-- Código javascript para mostrar la tabla entradas-->
    <script type="text/javascript" class="init">

        $(document).ready(function() {
            $('#entradas').DataTable();
        } );

    </script>
        <!-- Código javascript para mostrar la tabla de wurfl cloud-->
    <script type="text/javascript" class="init">

        $(document).ready(function() {
            $('#wurfl').DataTable();
        } );

    </script>

    <!-- Código javascript para realizar un fadeToggle a  los div de las  tablas y cambiar la imagen que se mostrara para indicar si
    se muestra o no-->
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $("#div1").fadeToggle();
                $("#div2").fadeToggle();
                $("#div3").fadeToggle();
                $("#div4").fadeToggle();
                $("#div5").fadeToggle();
                $("#div22").fadeToggle();
                $("#div17").fadeToggle();
                if ( $('#usuariosMas').attr("src") == "http://localhost/blog/public/assets/images/add.png") {
                    $('#usuariosMas').attr("src","http://localhost/blog/public/assets/images/remove.png");
                } else {
                    $('#usuariosMas').attr("src","http://localhost/blog/public/assets/images/add.png");
                }
                if ( $('#comentariosMas').attr("src") == "http://localhost/blog/public/assets/images/add.png") {
                    $('#comentariosMas').attr("src","http://localhost/blog/public/assets/images/remove.png");
                } else {
                    $('#comentariosMas').attr("src","http://localhost/blog/public/assets/images/add.png");
                }
                if ( $('#entradasMas').attr("src") == "http://localhost/blog/public/assets/images/add.png") {
                    $('#entradasMas').attr("src","http://localhost/blog/public/assets/images/remove.png");
                } else {
                    $('#entradasMas').attr("src","http://localhost/blog/public/assets/images/add.png");
                }
                if ( $('#wurflMas').attr("src") == "http://localhost/blog/public/assets/images/add.png") {
                    $('#wurflMas').attr("src","http://localhost/blog/public/assets/images/remove.png");
                } else {
                    $('#wurflMas').attr("src","http://localhost/blog/public/assets/images/add.png");
                }
            });
        });
    </script>
     <!-- Código javascript para realizar un fadeToggle al div de la tabla usuarios y cambiar la imagen que se mostrara para indicar si
    se muestra o no-->
    <script>
        $(document).ready(function(){
            $("#div11").click(function(){
                $("#div1").fadeToggle();            
                if ( $('#usuariosMas').attr("src") == "http://localhost/blog/public/assets/images/add.png") {
                    $('#usuariosMas').attr("src","http://localhost/blog/public/assets/images/remove.png");
                } else {
                    $('#usuariosMas').attr("src","http://localhost/blog/public/assets/images/add.png");
                }
            });
        });
    </script>  
     <!-- Código javascript para realizar un fadeToggle al div de de la tabla comentarios y cambiar la imagen que se mostrara para indicar si
    se muestra o no-->
    <script>
        $(document).ready(function(){
            $("#div13").click(function(){             
                $("#div2").fadeToggle();
                if ( $('#comentariosMas').attr("src") == "http://localhost/blog/public/assets/images/add.png") {
                    $('#comentariosMas').attr("src","http://localhost/blog/public/assets/images/remove.png");
                } else {
                    $('#comentariosMas').attr("src","http://localhost/blog/public/assets/images/add.png");
                }

            });
        });
    </script>
     <!-- Código javascript para realizar un fadeToggle a  al de de la tabla comentarios y cambiar la imagen que se mostrara para indicar si
    se muestra o no-->
    <script>
        $(document).ready(function(){
            $("#div15").click(function(){
               if ( $('#entradasMas').attr("src") == "http://localhost/blog/public/assets/images/add.png") {
                $('#entradasMas').attr("src","http://localhost/blog/public/assets/images/remove.png");
            } else {
                $('#entradasMas').attr("src","http://localhost/blog/public/assets/images/add.png");
            }
            $("#div3").fadeToggle();

        });
        });
    </script>
     <!-- Código javascript para realizar un fadeToggle a  al div de de la tabla wurfl datos y cambiar la imagen que se mostrara para indicar si
    se muestra o no-->
    <script>
        $(document).ready(function(){
            $("#div16").click(function(){
               if ( $('#wurflMas').attr("src") == "http://localhost/blog/public/assets/images/add.png") {
                $('#wurflMas').attr("src","http://localhost/blog/public/assets/images/remove.png");
            } else {
                $('#wurflMas').attr("src","http://localhost/blog/public/assets/images/add.png");
            }
            $("#div22").fadeToggle();
        });
        });
    </script>

</head>
<body>
    <div class="show_entries" id="div0">
        <?php include('menu.php');?>
        <div  id="div11" >
            <h1>Usuarios
                <img src="http://localhost/blog/public/assets/images/add.png" id="usuariosMas">
                
            </h1>
        </div>

        <div  id="div1" style="display: none">
            <br/>
            <br/>
            <!--Crea la estructura de la tabla usuarios-->
            <table id="usuarios" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>username</th>
                        <th>password Hash MD5</th>                    
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>username</th>
                        <th>password Hash MD5</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php if (!empty($user_datatables)) : ?>
                        <?php foreach($user_datatables as $userx) : ?>
                            <tr>
                                <td> <?=$userx->id?></td>
                                <td> <?=$userx->name?></td>
                                <td> <?=$userx->username?></td>
                                <td> <?=$userx->password?></td>                
                            </tr>
                        <?php endforeach; ?>

                    <?php else : ?>
                        <h1 class="empty_entries">No existen usuarios,crea uno!</h1>
                    <?php endif; ?>

                </tbody>
            </table>   
            <hr class="style13"/>  
        </div>

        <div  id="div13">
            <h1>Comentarios
                <img src="http://localhost/blog/public/assets/images/add.png" id="comentariosMas">
            </h1>
        </div>
        <!--Crea la estructura de la tabla comentarios-->
        <div  id="div2" style="display: none">
            <table id="comentarios" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>id_blog</th>
                        <th>Autor</th>
                        <th>comentario</th>                    
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>id_blog</th>
                        <th>Autor</th>
                        <th>comentario</th>
                    </tr>
                </tfoot>
                <tbody>
                    <!--Si la variable $comments_datatables contiene datos los inserta en la tabla-->
                    <?php if (!empty($comments_datatables)) : ?>
                        <?php foreach($comments_datatables as $commentX) : ?>
                            <tr>
                                <td> <?=$commentX->id?></td>
                                <td> <?=$commentX->id_blog?></td>
                                <td> <?=$commentX->author?></td>
                                <td> <?=$commentX->comment?></td>                
                            </tr>
                        <?php endforeach; ?>
                    <!--En caso de no contener datos nos muestra el mensaje-->    
                    <?php else : ?>
                        <h1 class="empty_entries">No existen comentarios,escribe uno!</h1>
                    <?php endif; ?>
                </tbody>
            </table>   
            <hr class="style13"/>  
        </div>

        <div  id="div15">
            <h1>Entradas
                <img src="http://localhost/blog/public/assets/images/add.png" id="entradasMas">
            </h1>
        </div>
        <!--Crea la estructura de la tabla entradas-->
        <div  id="div3" style="display: none">
            <table id="entradas" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>permalink</th>
                        <th>Autor</th>
                        <th>título</th>   
                        <th>contenido</th> 
                        <th>fecha</th> 
                        <th>tags</th>                  
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>permalink</th>
                        <th>Autor</th>
                        <th>título</th>   
                        <th>contenido</th> 
                        <th>fecha</th> 
                        <th>tags</th> 
                    </tr>
                </tfoot>
                <tbody>
                <!--Si la variable $entries_datatables contiene datos los inserta en la tabla-->
                    <?php if (!empty($entries_datatables)) : ?>
                        <?php foreach($entries_datatables as $entriesX) : ?>
                            <tr>
                                <td> <?=$entriesX->id?></td>
                                <td> <?=$entriesX->permalink?></td>
                                <td> <?=$entriesX->author?></td>
                                <td> <?=$entriesX->title?></td>    
                                <td> <?=$entriesX->content?></td>
                                <td> <?=$entriesX->date?></td>
                                <td> <?=$entriesX->tags?></td>            
                            </tr>
                        <?php endforeach; ?>
                    <!--En caso de no contener datos nos muestra el mensaje-->  
                    <?php else : ?>
                        <h1 class="empty_entries">No existen comentarios,escribe uno!</h1>
                    <?php endif; ?>

                </tbody>
            </table>   
            <hr class="style13"/>  
        </div>

        <div  id="div16">
            <h1>Wurf Cloud
                <img src="http://localhost/blog/public/assets/images/add.png" id="wurflMas">
            </h1>
        </div>
        
        <div  id="div22" style="display: none">
            <!--Crea la estructura de la tabla entradas-->
            <table id="wurfl" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>id</th>  
                        <th>complete_device_name</th>
                        <th>form_factor</th>
                        <th>is_mobile</th>                         
                        <th>date</th> 
                        <th>user</th>
                        <th>IPV6</th>                   
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>id</th>  
                        <th>complete_device_name</th>
                        <th>form_factor</th>
                        <th>is_mobile</th>                         
                        <th>date</th> 
                        <th>user</th> 
                        <th>IPV6</th>
                    </tr>
                </tfoot>
                <tbody>
                <!--Si la variable $entries_datatables contiene datos los inserta en la tabla-->
                    <?php if (!empty($wurfl_datatables)) : ?>
                        <?php foreach($wurfl_datatables as $wurflX) : ?>
                            <tr>
                                <td> <?=$wurflX->id?></td>
                                <td> <?=$wurflX->complete_device_name?></td>
                                <td> <?=$wurflX->form_factor?></td>
                                <td> <?=$wurflX->is_mobile?></td>
                                <td> <?=$wurflX->date?></td>
                                <td> <?=$wurflX->user?></td>
                                <td> <?=$wurflX->ip_address?></td>                                              
                            </tr>
                        <?php endforeach; ?>
                    <!--En caso de no contener datos nos muestra el mensaje-->  
                    <?php else : ?>
                        <h1 class="empty_entries">No existen datos,identificate con un dispositivo!</h1>
                    <?php endif; ?>

                </tbody>
            </table>   
            <hr class="style13"/>  
        </div>

        <div class="show_entries" >
            <?php 
        // Include the autoloader - edit this path! 
            require_once 'wurfl/src/autoload.php'; 
        // Create a configuration object  
            $config = new ScientiaMobile\WurflCloud\Config();  
        // Set your WURFL Cloud API Key  
            $config->api_key = '397728:S6QuwXZeQhQkXxyeHnWBIRwWHA7HVCxh';   
        // Create the WURFL Cloud Client  
            $client = new ScientiaMobile\WurflCloud\Client($config);  
        // Detect your device  
            $client->detectDevice();  
        // Use the capabilities  

        //Save device data

            $complete_device_name = $client->getDeviceCapability('complete_device_name');
            

            $form_factor = $client->getDeviceCapability('form_factor');


            $is_mobile = $client->getDeviceCapability('is_mobile');
            ?>
        </div>
    </div>
    <!-- Crea un boton que usaremos para mostrar todas las tablas-->
    <div id="div4" class="show_entries">
        <button class="button1Datatables">Mostrar</button>
    </div>
    <!-- Crea un boton que usaremos para ocultar todas las tablas-->
    <div id="div17" class="show_entries" style="display: none">
        <button class="button1Datatables">Ocultar</button>
    </div>   
</body>
</html>