  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a  class="brand-link">
      <img src="{{asset('AdminLTE/docs/assets/img/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">DIAPRA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{Route('dashboard')}}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>

              @if(auth()->check() && auth()->user()->role->name == 'admin')
              <li class="nav-item">
                  <a href="{{ route('suratmasuk.index') }}" class="nav-link {{ Request::is('suratmasuk') ? 'active' : '' }}">
                      <i class="nav-icon far fa-envelope-open"></i>
                      <p>
                          Surat Masuk
                      </p>
                  </a>
              </li>
          @endif          

              <li class="nav-item">
                <a href="{{Route('suratkeluar.index')}}" class="nav-link {{ Request::is('suratkeluar') ? 'active' : '' }}">
                  <i class="nav-icon far fa-envelope"></i>
                  <p>
                    Surat Keluar
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link {{ Request::is(['spj','nodin', 'sk', 'mou', 'sppd', 'st']) ? 'active' : '' }}">
                  <i class="fas fa-list nav-icon"></i>
                  <p>
                    Penomoran Surat
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('spj.index')}}" class="nav-link {{ Request::is('spj') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>SPJ UMPEG</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('nodin.index')}}" class="nav-link {{ Request::is('nodin') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Nota Dinas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('sk.index')}}" class="nav-link {{ Request::is('sk') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>SK</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('mou.index')}}" class="nav-link {{ Request::is('mou') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kontrak/MoU</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('sppd.index')}}" class="nav-link {{ Request::is('sppd') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>SPPD</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('st.index')}}" class="nav-link {{ Request::is('st') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Surat Tugas</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="{{Route('sisipan.index')}}" class="nav-link {{ Request::is('sisipan') ? 'active' : '' }}">
                  <i class="nav-icon far fa-envelope"></i>
                  <p>
                    Sisipan Surat Keluar
                  </p>
                </a>
              </li>

              @if(auth()->check() && auth()->user()->role->name == 'admin')
              <li class="nav-item">
                <a href="{{Route('kadis.index')}}" class="nav-link {{ Request::is('kadis') ? 'active' : '' }}">
                  <i class="nav-icon far fa-user"></i>
                  <p>
                    Kepala Dinas
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{Route('user.index')}}" class="nav-link {{ Request::is('user') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Pengguna
                  </p>
                </a>
              </li>
              @endif
               
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>