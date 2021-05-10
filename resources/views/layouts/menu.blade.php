<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="{{asset('bt/css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="icon" href="{{asset('img/livre2.png') }}">
    <link href="{{asset('css/style2.css')}}" rel="stylesheet">
    <link href="{{asset('css/style4.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/accordeon.css')}}">
    <title>Accusoft admin</title>
</head>
<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">

        <div class="sidebar-brand">
        <h2><span class="lab la-accusoft"><span>Accusoft</h2>
        </div>
        <div class="sidebar-menu">
        <ul>
            <li>
            <a href="{{route('accueil')}}"class="active" ><span class="las la-igloo" ></span><span>dashboard</span></a>
            </li>
            <li>
            <a href=""><span class="las la-users" ></span><span>dashboaed</span></a>
            </li>
            <li>
            <a href="{{route('emprunt.form')}}"><span class="las la-clipboard-list" ></span><span>enregistrer un emprunt</span></a>
            </li>
            <li>
            <a href="{{route('livre.form')}}"><span class="las la-shopping-bag" ></span><span>Ajouter un livre</span></a>
            </li>
            <li>
                <a href="{{route('liste.livre')}}"><span class="las la-shopping-bag" ></span><span>liste des livres</span></a>
            </li>
            <li>
                <a href="{{route('liste.livre.auteur')}}"><span class="las la-shopping-bag" ></span><span>Nombre  de livres par auteur</span></a>
            </li>
            <li>
                <a href="{{route('accordeon')}}"><span class="las la-receipt" ></span><span>liste des livre par auteurs </span></a>
                </li>
            <li>
            <a href="{{route('genre.form')}}"><span class="las la-receipt" ></span><span>categrories</span></a>
            </li>
            <li>
            <a href="{{route('register') }}"><span class="las la-user-circle" ></span><span>Ajouter admin</span></a>
            </li>
            <li>
                <a href="{{route('inscrit.form')}}"><span class="las la-user-circle" ></span><span>Ajouter membre</span></a>
            </li>
            <li>
                <a href="{{route('liste.inscrit')}}"><span class="las la-user-circle" ></span><span>listes des  membres</span></a>
            </li>
            <li>
                <a href=""><span class="las la-clipboard-list" ></span><span></span></a>
                </li>
            <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><span class="las la-clipboard-list" ></span><span>Deconnexion</span> 
             </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </li>
        </ul>
    </div>
    </div>

    <div class="main-content" >
        <header>
        <h2>
            <label for="nav-toggle">
                <span class="las la-bars">  <span>Accusof</span> </span>
        </label>
        
         
        </h2>
        <div class="search-wrapper">
            <span class="las la-search"></span>
            <input type="search" placeholder="Search here">
        </div>
        <div class="user-wrapper">
            <img src="{{asset('img/livre2.png') }}" width="40px" height="40px" alt="">
            <div>
                <h4>admin</h4>
                <small>Super admin</small>
            </div>
        </div>
        </header>
        
        <main>
            <div>
                @yield('contenu')
            </div>
        </main>
    </div>
</body>
</html>

