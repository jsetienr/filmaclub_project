<link rel="stylesheet" type="text/css" href="css/style.css">
<div class="container">
    <div class="row">
        <h1>NOTICIAS DE CINE</h1>
    </div>
    <div class="col-md-12">
        <section class="container-fluid" id="contenido">
            <div class="cabecera-seccion row">
                <h2>Noticias: </h2>
            </div>
            <div class="row">

                <?php
                $results_array = modelNoticias::viewNoticias();

                foreach ($results_array as $noticia) {

                    echo "         <div class='col-md-12'>";
                    echo "         <div class='contenido-reciente independiente container-fluid'>";
                    echo "             <div class='col-md-2'>";
                    echo "                 <img src='" . $noticia['poster'] . "' alt='poster' height='220' width='150'>";
                    echo "             </div>";
                    echo "             <div class='col-md-10'>";
                    echo "                 <h3><strong>" . $noticia['titular'] . "</strong></h3>";
                    echo "                 <h5><i>" . $noticia['nombre'] . "</i></h5>";
                    echo "                 <p>" . $noticia['noticia'] . "</p>";
                    echo "                 <span>" . $noticia['fecha'] . "</span>";
                    echo "             </div>";
                    echo "         </div>";
                    echo "     </div>";
                }
                ?>
            </div>
        </section>
    </div>
</div>