  <nav id="sidebar">
        <div class="sidebar-header">
          <div class="d-flex justify-content-center align-items-center gap-1">
            <figure class="d-flex align-items-center gap-2">
              <img
                id="gambar"
                width="60"
                height="60"
                class="p-0 rounded"
                src="{{ asset('assets/logopolije.png') }}"
                alt="Contoh Gambar"
              />
              <figcaption class="fs-6 fw-semibold text-center">
                Politeknik Negeri Jember
              </figcaption>
            </figure>
          </div>
        </div>

        <ul class="list-unstyled components">
          {{-- <li class="active"> --}}
          {{-- </li class="{{ ($) }}">   --}}
          @if ($title === 'Dashboard')
             <li class="active">
                <a href="/dashboard">Dashboard</a>
            </li>
          @else
            <li>
                 <a href="/dashboard">Dashboard</a>
            </li>
          @endif
          
          @if ($title === 'Data Mahasiswa')
          <li class="active">
            <a href="/mahasiswa">Mahasiswa</a>
          </li> 
          @else
          <li>
            <a href="/mahasiswa">Mahasiswa</a>
          </li>
          @endif
          
          @if ($title === 'Data Kota')
          <li class="active">
            <a href="/kota">Kota</a>
          </li>
          @else
          <li>
            <a href="/kota">Kota</a>
          </li>
          @endif
          
          <li>
            <a href="/logout">Logout</a>
          </li>
        </ul>
    </nav>