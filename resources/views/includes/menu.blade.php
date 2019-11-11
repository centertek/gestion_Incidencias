<div class="card">
    <div class="card-header">Menú</div>
    <div class="card-body">
        <ul class="nav nav-pills nav-stacked nav-tabs-justified">
            @if (auth()->check())
               <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
               <li class="nav-item"><a class="nav-link" href="#">Ver Incidencias</a></li>
               <li class="nav-item"><a class="nav-link" href="#">Reportar Incidencia</a></li>

               <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>

                </li>
            @else
                <li class="nav-item"><a class="nav-link" href="#">Bienvenido</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Instrucciones</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Créditos</a></li>
            @endif
        </ul>
    </div>
</div>
