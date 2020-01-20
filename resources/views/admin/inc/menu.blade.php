<?php 
    $page = '';
    $url = Request::url();
    if($url != '' && count(explode('/', $url)) > 0 ) {
        $exp_url = explode('/', $url);
        $nbre_exp = count($exp_url)-1;
        $page_index = $nbre_exp ;
        // dans le cas des page "edit"
        if( $exp_url[$page_index] == 'create' || is_numeric($exp_url[$page_index]) ) 
            $page_index = $nbre_exp - 1 ;
        if( $exp_url[$page_index] == 'edit' ) 
            $page_index = $nbre_exp - 2 ;
        
        //
        $page = $exp_url[$page_index];
        //echo $exp_url[$page_index];
    }
?>
<ul class="nav-main">
    <li class="nav-main-item">
        <a class="nav-main-link {{ Request::url() == url('/admin') ? 'active' : '' }}" href="{{url('/admin')}}">
            <i class="nav-main-link-icon si si-speedometer"></i>
            <span class="nav-main-link-name">Accueil</span>
        </a>
    </li>
    <li class="nav-main-item">
        <a class="nav-main-link {{ $page == 'event' ? 'active' : '' }}" href="{{url('admin/event')}}">
            <i class="nav-main-link-icon si si-energy"></i>
            <span class="nav-main-link-name">Évènements</span>
        </a>
    </li>
    <li class="nav-main-item">
        <a class="nav-main-link {{ $page == 'user' ? 'active' : '' }}" href="{{url('admin/user')}}">
            <i class="nav-main-link-icon si si-users"></i>
            <span class="nav-main-link-name">Comptes Utilisateur</span>
        </a>
    </li>

    <li class="nav-main-heading"></li>     

    <li class="nav-main-item">
        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
            <i class="nav-main-link-icon si si-wrench"></i>
            <span class="nav-main-link-name">Paramètres</span>
        </a>
        <ul class="nav-main-submenu">
            <li class="nav-main-item">
                <a class="nav-main-link {{ $page == 'city' ? 'active' : '' }}" href="{{url('admin/city')}}">
                    <span class="nav-main-link-name">États</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link {{ $page == 'town' ? 'active' : '' }}" href="{{url('admin/town')}}">
                    <span class="nav-main-link-name">Villes</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link {{ $page == 'district' ? 'active' : '' }}" href="{{url('admin/district')}}">
                    <span class="nav-main-link-name">Districts</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link {{ $page == 'eventstype' ? 'active' : '' }}" href="{{url('admin/eventstype')}}">
                    <span class="nav-main-link-name">Types d'évènement</span>
                </a>
            </li>
        </ul>
    </li>

</ul>