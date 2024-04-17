@extends('layouts.tamplates')
      <!-- Page Content  -->
@section('content')      
      <div id="content">
       
        @include('layouts.navbarTop')
        
      <p style="font-size: 30px">Hello <strong><b>{{ Auth::user()->name }}</b></strong>,, Welcome to Polije Management System</p>

      <div class="line"></div>
        <section>
          
          <div class="gallery">
            <div class="content ps-3 ">
              {{-- <i class="fa-solid fa-cart-shopping" style="color: #612c96"></i> --}}
              <img src="{{ asset('assets/students.png') }}" alt="" width="30" height="30" class="">
              <p>Total Mahasiswa</p>
              <h6>{{ $jmlhMahasiswa }}</h6>
             
            </div>
            <div class="content ps-3">
              {{-- <i class="fa-solid fa-cart-shopping" style="color: #612c96"></i> --}}
              <img src="{{ asset('assets/mahasiswi.png') }}" alt="" width="30" height="30" class="">
              <p>Mahasiswa Perempuan</p>
              <h6>{{ $Mahasiswi }}</h6>
             
            </div>
            <div class="content ps-3">
              {{-- <i class="fa-solid fa-cart-shopping" style="color: #612c96"></i> --}}
              <img src="{{ asset('assets/graduated.png') }}" alt="" width="30" height="30" class="">
              <p>Mahasiswa Laki-Laki</p>
              <h6>{{ $Mahasiswa }}</h6>
             
            </div>

            
            <div class="content-2 d-flex justify-content-center">
              <canvas id="chartJumlahSiswa"></canvas>
            </div>
            <div class="content-2 d-flex justify-content-center">
             <canvas id="chartJumlahSiswaPerkota"></canvas>
            </div>
          </div>
        </section>
        <div class="canvasTaun">
        <canvas id="chartJumlahSiswaPertahun"></canvas>
        </div>
        
        <div class="line"></div>
      
      </div>
     
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script>
        var ctx = document.getElementById('chartJumlahSiswa').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: {!! json_encode($jenisKelaminLabels) !!},
                datasets: [{
                    label: 'Jumlah Mahasiswa Berdasarkan Jenis Kelamin',
                    data: {!! json_encode($jumlahSiswa) !!},
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
      </script>

      <script>
        var ctx = document.getElementById('chartJumlahSiswaPerkota').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: {!! json_encode($kotaLabels) !!},
                datasets: [{
                    label: 'Jumlah Mahasiswa Berdasarkan Kota',
                    data: {!! json_encode($jumlahSiswaPerkota) !!},
                    backgroundColor: [
                      'rgba(255, 206, 86, 0.2)', // Kuning
                          'rgba(75, 192, 192, 0.2)', // Hijau
                          'rgba(255, 0, 255, 0.2)',   // Magenta
                          'rgba(153, 102, 255, 0.2)', // Ungu
                          'rgba(255, 159, 64, 0.2)', // Oranye
                    ],
                    borderColor: [
                      'rgba(255, 206, 86, 1)', // Kuning
                      'rgba(75, 192, 192, 1)', // Hijau
                      'rgba(255, 0, 255, 1)',    // Magenta
                      'rgba(153, 102, 255, 1)', // Ungu
                      'rgba(255, 159, 64, 1)', // Oranye
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
      </script>
     
     <script>
      var ctx = document.getElementById('chartJumlahSiswaPertahun').getContext('2d');
      var chart = new Chart(ctx, {
          type: 'bar',
          data: {
              labels: {!! json_encode($tahunLabels) !!},
              datasets: [{
                  label: 'Jumlah Mahasiswa Berdasarkan Tahun Lahir',
                  data: {!! json_encode($jumlahSiswaPertahun) !!},
                  backgroundColor: [
                    'rgba(238, 130, 238, 0.2)', // Violet
                    'rgba(128, 128, 128, 0.2)', // Abu-abu
                    'rgba(165, 42, 42, 0.2)',   // Coklat
                    'rgba(128, 128, 0, 0.2)',   // Zaitun
                    'rgba(255, 215, 0, 0.2)',   // Emas
                    ],
                  borderColor: [
                    'rgba(238, 130, 238, 1)',  // Violet
                    'rgba(128, 128, 128, 1)',  // Abu-abu
                    'rgba(165, 42, 42, 1)',    // Coklat
                    'rgba(128, 128, 0, 1)',    // Zaitun
                    'rgba(255, 215, 0, 1)',    // Emas
                    ],
                  borderWidth: 1
              }]
          },
          options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero: true
                      }
                  }]
              }
          }
      });
    </script>
@endsection 