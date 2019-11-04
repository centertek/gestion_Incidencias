<div class="card">
    <div class="card-header">Menú</div>
    <div class="card-body">
        <ul class="nav nav-pills nav-tabs-justified">
            @if (auth()->check())
               <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
               <li class="nav-item"><a class="nav-link" href="#">Ver Incidencias</a></li>
               <li class="nav-item"><a class="nav-link" href="#">Reportar Incidencia</a></li>
               <li class="nav-item"><a class="nav-link" href="#">Administración</a></li> 
            @else
                <li class="nav-item"><a class="nav-link" href="#">Bienvenido</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Instrucciones</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Créditos</a></li>
            @endif
        </ul>
    </div>
</div>