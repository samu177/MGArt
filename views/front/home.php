<header id="first" style="background-image: url(<?=$data_to_view[5]?>)">
    <div class="header-content">
        <div class="inner">
            <h1 class="cursive"><?=$data_to_view[6]?></h1>
            <h4><?=$data_to_view[7]?></h4>
            <hr>
            
        </div>
    </div>
</header>

<section id="two">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="margin-top-0 text-primary">Biografía</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-xs-8">
        <h3><?=$data_to_view[3]?></h3>
        </div>
     
        <img class="col-xs-4" src="<?=$data_to_view[4]?>">

    </div>
</section>

<section id="three" class="no-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="margin-top-0 text-primary">Galerías</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                <h3 id="titulos_galerias">galeria1</h3>
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="img/deer.jpg">
                        <img src="img/deer.jpg" class="img-responsive" alt="Image 1">
                    </a>
                </div>
                
                <div class="col-lg-4 col-sm-6">
                <h3 id="titulos_galerias">galeria2</h3>
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="img/beach.jpg">
                        <img src="img/beach.jpg" class="img-responsive" alt="Image 2">
                    </a>
                </div>
				<div class="clearfix hidden-lg"> </div>
                
                <div class="col-lg-4 col-sm-6">
                <h3 id="titulos_galerias">galeria3</h3>
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="img/lake.jpg">
                        <img src="img/lake.jpg" class="img-responsive" alt="Image 3">
                    </a>
                </div>
                
                <div class="col-lg-4 col-sm-6">
                <h3 id="titulos_galerias">galeria4</h3>
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="img/bike.jpg">
                        <img src="img/bike.jpg" class="img-responsive" alt="Image 4">
                    </a>
                </div>
				<div class="clearfix hidden-lg"> </div>
               
                <div class="col-lg-4 col-sm-6">
                 <h3 id="titulos_galerias">galeria5</h3>
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="img/city.jpg">
                        <img src="img/city.jpg" class="img-responsive" alt="Image 5">
                    </a>
                </div>
                
                <div class="col-lg-4 col-sm-6">
                <h3 id="titulos_galerias">galeria6</h3>
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="img/colors.jpg">
                        <img src="img/colors.jpg" class="img-responsive" alt="Image 6">
                    </a>
                </div>
            </div>
    </div>
</section>


<section id="last">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                 <h2 class="margin-top-0 text-primary">Contacto</h2>
                <hr class="primary">
                <p>Puedes contactar conmigo rellenando este formulario</p>
            </div>
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <form class="contact-form row">
                    <div class="col-md-4">
                        <label></label>
                        <input type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="col-md-4">
                        <label></label>
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-md-4">
                        <label></label>
                        <input type="text" class="form-control" placeholder="Teléfono">
                    </div>
                    <div class="col-md-12">
                        <label></label>
                        <textarea class="form-control" rows="9" placeholder="Tu mensaje aqui..."></textarea>
                    </div>
                    <div class="col-md-4 col-md-offset-4">
                        <label></label>
                        <button type="button" data-toggle="modal" data-target="#alertModal" class="btn btn-primary btn-block btn-lg">Enviar </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>