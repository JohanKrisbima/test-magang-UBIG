<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>POLIJE</title>

    <link rel="icon" href="assets/favicon.ico" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
  </head>

  <body>
    <div class="row" style="display: flex; height: 100vh; width: 100vw">
      <div class="col-xl-6 col-md-12 d-flex justify-content-center align-items-center position-relative" style="max-width: 100%; max-height: 100%; padding-bottom: 100vh">
        <img id="gambar" class="cropped1 img-fluid" src="{{ asset('assets/bg.jpg') }}" alt="Contoh Gambar"/>
        <h1 class="text-center position-absolute top-50 start-50 translate-middle " style="color: rgb(97, 166, 255)">Politeknik Negeri Jember</h1>
      </div>

      <div class="col-xl-6 align-self-start p-5 mt-5" id="content">
            @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <span id="maincontent"></span>
            <div class="sr-only"></div>

            <form id="login" action="/login" method="POST">
            @csrf
            <!-- diberikan akan ke mana code ini? -->
            <div class="mb-4">
                <div
                class="d-flex justify-content-center align-items-center gap-1 mb-3"
                >
                <figure class="d-flex align-items-center gap-2">
                    <img id="gambar" width="50" height="50" class="text-light p-1 rounded" src="{{ asset('assets/polije.jpeg') }}" alt="Contoh Gambar"/>
                    <figcaption class="fs-6 fw-semibold text-center text-primary">
                        Politeknik Negeri Jember
                    </figcaption>
                </figure>
                </div>
                <h1 class="fs-2 text-center">Log In</h1>
            </div>
            <div class="form-group mb-2">
                <label for="username" class="sr-only mb-1">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="jo@gmail.com" autocomplete="email" required/>
                <!-- DOM input ini -->
            </div>
            <div class="form-group mb-3 position-relative">
                <label for="password" class="sr-only mb-1">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" autocomplete="current-password" required/>
                <button type="button" class="position-absolute" style="top: 28px; right: 15px; background-color: transparent" id="show-password"></button>
            </div>

            <button type="submit" class="btn btn-log btn-block btn-thm2 adhim mt-3" style="background-color: #003666; color: #fff; width: 100%" id="loginbtn">Log in</button>
            </form>

            <hr class="my-5" />
      </div>
    </div>

    <!--  -->
    <!-- <h1>Saya coba</h1> -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
  </body>
  {{-- <script src="js/backup-sidebar.js"></script> --}}
</html>
