<header>
    <h1>
        Luismi Laravel Developer
    </h1>
    <nav>
        <ul>
            <li><a href="{{route('home')}}" class="{{request()->RouteIs('home') ?'active':''}}">Home</a></li>

            <li><a href="{{route('cursos.index')}}" class="{{request()->RouteIs('cursos.*') ?'active':''}}">Cursos</a></li>
       

            <li><a href="{{route('nosotros')}}" class="{{request()->RouteIs('nosotros') ?'active':''}}">Nosotros</a></li>

            <li><a href="{{route('contactanos.index')}}" class="{{request()->RouteIs('contactanos.*') ?'active':''}}">Contáctanos</a></li>
           

        </ul>
        
    </nav>

</header>