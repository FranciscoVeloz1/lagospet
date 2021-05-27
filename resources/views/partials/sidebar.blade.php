<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Principal</div>
                <a class="nav-link" href="/animals">
                    <div class="sb-nav-link-icon"><i class="fas fa-procedures"></i></div>
                    Animales
                </a>

                <div class="sb-sidenav-menu-heading">Usuarios</div>
                <a class="nav-link" href="/users">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Usuarios
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Usuario:</div>
            {{$users->name}}
        </div>
    </nav>
</div>
