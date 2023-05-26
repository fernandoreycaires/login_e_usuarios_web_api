<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <?php
    if (Auth::user()->profile_photo_path != "") {
      $photo = Auth::user()->profile_photo_path;
    }else {
      $photo = Auth::user()->profile_photo_url;
    }
  ?>
    
  <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
      <img src="{{asset('AdminLTE/dist/img/gestao.png')}}"  class="brand-image img-circle elevation-3" style="opacity: 1">
      <span class="brand-text font-weight-light">Empresa</span>
    </a>
    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image" width="10px" height="10px" >
          <!-- <img src="{{asset('AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image"> -->
          <img class="img-circle elevation-2" src="{{ $photo }}" alt="{{ Auth::user()->name }}" >
        </div>
        <div class="info">
          <a href="{{ route('profile.show') }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          @foreach ( $permissoes as $permissao )
            @foreach ( $permissao->perfil_catalogo as $item )
              
              @if ($permissao->id_catalogo == '99307e4c-76b4-42f8-8ae3-e9f919c38c29' || $item->perfil == 'Diretoria')
                <li class="nav-item">
                  <a href="{{route('dashboard')}}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                      Pagina Inicial
                    </p>
                  </a>
                </li>
              @endif

              @if ($permissao->id_catalogo == '99307e4c-76b4-42f8-8ae3-e9f919c38c29' || $item->perfil == 'Diretoria' || $item->perfil == 'Comercial' || $item->perfil == 'Clientes')
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                      Clientes
                    </p>
                  </a>
                </li>
              @endif

              @if ($permissao->id_catalogo == '99307e4c-76b4-42f8-8ae3-e9f919c38c29' || $item->perfil == 'Diretoria' || $item->perfil == 'Recursos Humanos')
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="nav-icon fas fa-user-cog"></i>
                    <p>
                      Recursos Humanos
                    </p>
                  </a>
                </li>
              @endif

              @if ($permissao->id_catalogo == '99307e4c-76b4-42f8-8ae3-e9f919c38c29' || $item->perfil == 'Diretoria' || $item->perfil == 'Operacional' || $item->perfil == 'Veículos')
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="nav-icon fas fa-car"></i>
                    <p>
                      Veículos
                    </p>
                  </a>
                </li>
              @endif
              
              @if ($permissao->id_catalogo == '99307e4c-76b4-42f8-8ae3-e9f919c38c29' || $item->perfil == 'Diretoria' || $item->perfil == 'Operacional' || $item->perfil == 'Motoristas')
                <li class="nav-item">
                  <a href=" " class="nav-link">
                    <i class="nav-icon fas fa-tag"></i>
                    <p>
                      Motoristas
                    </p>
                  </a>
                </li>
              @endif

              @if ($permissao->id_catalogo == '99307e4c-76b4-42f8-8ae3-e9f919c38c29' || $item->perfil == 'Diretoria' || $item->perfil == 'Financeiro' )
                <!--Financeiro-->
                <li class="nav-item">
                  <a href=" " class="nav-link">
                    <i class="nav-icon fas fa-wallet"></i>
                    <p>
                      Financeiro
                    </p>
                  </a>
                </li> 
              @endif
            
              @if ($permissao->id_catalogo == '99307e4c-76b4-42f8-8ae3-e9f919c38c29' || $item->perfil == 'Diretoria' || $item->perfil == 'Contábil' )
                <!--Contabilidade-->
                <li class="nav-item">
                  <a href=" " class="nav-link">
                    <i class="nav-icon fas fa-receipt"></i>
                    <p>
                      Contábil
                    </p>
                  </a>
                </li> 
              @endif

              @if ($permissao->id_catalogo == '99307e4c-76b4-42f8-8ae3-e9f919c38c29' || $item->perfil == 'Diretoria' || $item->perfil == 'Administrador' )
                <!--Administração-->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-address-card"></i>
                    <p>
                      Administração
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Administração </p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{route('usuarios')}} " class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Usuários</p>
                      </a>
                    </li>
                  </ul> 
                </li>
              @endif

            @endforeach
          @endforeach

          <li class="nav-item">
            <a href="#" onclick="event.preventDefault; document.getElementById('logout-form').submit();" class="nav-link">
              <i class="nav-icon fas fa-door-open"></i>
              <p>
                Sair
              </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
              @csrf
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>