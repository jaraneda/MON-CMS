<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li>
            <a href="#"><i class="fa fa-fw fa-dashboard"></i> Inicio</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-fw fa-file-o"></i> Páginas</a>
            <ul>
                <li>
                    <a href="<?php echo site_url('admin/paginas/configuracion');?>"><i class="fa fa-fw fa-cog"></i> Configuración</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="<?php echo site_url('admin/servicios');?>"><i class="fa fa-fw fa-cubes"></i> Servicios</a>
        </li>
        <li>
            <a href="<?php echo site_url('admin/eventos');?>"><i class="fa fa-fw fa-calendar"></i> Eventos</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-fw fa-shopping-cart"></i> Productos</a>
            <ul>
                <li>
                    <a href="<?php echo site_url('admin/producto/gestion_categorias');?>"><i class="fa fa-fw fa-tags"></i> Categorías</a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/producto/gestion_productos');?>"><i class="fa fa-fw fa-barcode"></i> Productos</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-fw fa-bullhorn"></i> Contacto</a>
            <ul>
                <li>
                    <a href="<?php echo site_url('admin/contacto/contactos');?>"><i class="fa fa-fw fa-bell"></i> Mensajes</a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/contacto/configuracion');?>"><i class="fa fa-fw fa-cog"></i> Configuración</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<!-- /.navbar-collapse -->