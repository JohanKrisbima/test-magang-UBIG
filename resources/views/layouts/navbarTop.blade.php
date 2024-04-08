<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button type="button" id="sidebarCollapse" class="btn btn-light" >
        {{-- <i class="fas fa-align-left bg-primary"></i> --}}
        <span><i class="bi bi-list fs-4 fw-bold"></i></span>
      </button>

      <div class="collapse navbar-collapse" >
        <div
          class="d-flex justify-content-end align-items-center container-fluid"
        >

          <div class="profile">
            {{-- <i class="bi bi-bell-fill"></i> --}}
            <div class="role-wrapper d-flex justify-content-center align-items-center">
              <img id="gambar" width="30" height="30" class="text-light" src="{{ asset('assets/profile.png') }}" alt="Contoh Gambar"/>
              <div class="role-profile">
                <h3 class="">{{ Auth::user()->name }}</h3>
                <span class="">Admin</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>