<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>Lihat Peran</title>
  <!-- CSS files -->
  <link href="{{ asset('dist/css/tabler.min.css') }}" rel="stylesheet"/>
</head>

<body>
<script src="{{ asset('dist/js/demo-theme.min.js') }}"></script>
<div class="page">
  <!-- Navbar -->
  <header class="navbar navbar-expand-md d-print-none"
      style="background: linear-gradient(90deg, #4e54c8, #8f94fb); box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
      <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
          aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation"
          style="border: none; background-color: #fff; border-radius: 4px; padding: 8px;">
          <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3"
          style="display: flex; align-items: center;">
          <a href="." style="text-decoration: none; display: flex; align-items: center;">
            <img src="{{ asset('dist/img/ds.gif') }}" alt="Movie Logo"
              style="width: 200px; height: auto; border-radius: 8px; margin-right: 10px;" class="navbar-brand-image">
          </a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
          <div class="nav-item dropdown">
            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
              aria-label="Open user menu" style="align-items: center; display: flex;">
              <span class="avatar avatar-sm"
                style="background-image: url({{ asset('dist/img/me.png') }}); width: 50px; height: 50px; border-radius: 50%; border: 2px solid #fff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);"></span>
              <div class="d-none d-xl-block ps-2">
                <div style="color: #fff; font-weight: bold;">Faisal Triaputra</div>
                <div class="mt-1 small" style="color: #fff;">UI Designer</div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
              style="border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
              <a href="#" class="dropdown-item">Status</a>
              <a href="./profile.html" class="dropdown-item">Profile</a>
              <a href="#" class="dropdown-item">Feedback</a>
              <div class="dropdown-divider"></div>
              <a href="./settings.html" class="dropdown-item">Settings</a>
              <a href="./sign-in.html" class="dropdown-item">Logout</a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <header class="navbar-expand-md" style="background-color: #f8f9fa; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
      <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar">
          <div class="container-xl">
            <ul class="navbar-nav" style="gap: 20px;">
              <li class="nav-item active">
                <a class="nav-link" href="/roles"
                  style="display: flex; align-items: center; gap: 10px; padding: 10px 15px; background-color: #e9ecef; border-radius: 8px; font-weight: bold; color: #495057;">
                  <span class="nav-link-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-check" width="24"
                      height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                      stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <circle cx="9" cy="7" r="4" />
                      <path d="M9 14a6 6 0 0 0 6 6" />
                      <path d="M15 19l2 2l4 -4" />
                    </svg>
                  </span>
                  <span class="nav-link-title" style="font-weight: 500;">Peran</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/users"
                  style="display: flex; align-items: center; gap: 10px; padding: 10px 15px; border-radius: 8px; transition: background-color 0.3s;">
                  <span class="nav-link-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24"
                      height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                      stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <circle cx="12" cy="7" r="4" />
                      <path
                        d="M5.5 21h13a1.5 1.5 0 0 0 1.5 -1.5v-2a5.5 5.5 0 0 0 -5.5 -5.5h-5a5.5 5.5 0 0 0 -5.5 5.5v2a1.5 1.5 0 0 0 1.5 1.5z" />
                    </svg>
                  </span>
                  <span class="nav-link-title" style="font-weight: 500;">Pengguna</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/casts"
                  style="display: flex; align-items: center; gap: 10px; padding: 10px 15px; border-radius: 8px; transition: background-color 0.3s;">
                  <span class="nav-link-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24"
                      height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                      stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <circle cx="9" cy="7" r="4" />
                      <circle cx="15" cy="7" r="4" />
                      <path
                        d="M5.5 21h13a1.5 1.5 0 0 0 1.5 -1.5v-2a5.5 5.5 0 0 0 -5.5 -5.5h-5a5.5 5.5 0 0 0 -5.5 5.5v2a1.5 1.5 0 0 0 1.5 1.5z" />
                    </svg>
                  </span>
                  <span class="nav-link-title" style="font-weight: 500;">Pemeran</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/genres"
                  style="display: flex; align-items: center; gap: 10px; padding: 10px 15px; border-radius: 8px; transition: background-color 0.3s;">
                  <span class="nav-link-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-category" width="24"
                      height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                      stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M4 4h6v6h-6z" />
                      <path d="M14 4h6v6h-6z" />
                      <path d="M4 14h6v6h-6z" />
                      <circle cx="17" cy="17" r="3" />
                    </svg>
                  </span>
                  <span class="nav-link-title" style="font-weight: 500;">Genre</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/movies"
                  style="display: flex; align-items: center; gap: 10px; padding: 10px 15px; border-radius: 8px; transition: background-color 0.3s;">
                  <span class="nav-link-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-film" width="24"
                      height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                      stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <rect x="3" y="3" width="18" height="18" rx="2" />
                      <line x1="7" y1="3" x2="7" y2="21" />
                      <line x1="17" y1="3" x2="17" y2="21" />
                      <line x1="3" y1="7" x2="21" y2="7" />
                      <line x1="3" y1="17" x2="21" y2="17" />
                    </svg>
                  </span>
                  <span class="nav-link-title" style="font-weight: 500;">Film</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/reviews"
                  style="display: flex; align-items: center; gap: 10px; padding: 10px 15px; border-radius: 8px; transition: background-color 0.3s;">
                  <span class="nav-link-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-circle"
                      width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                      stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <circle cx="12" cy="12" r="9" />
                      <path d="M12 17l-3.5 -3.5l-1.5 1.5" />
                      <path d="M15 7h-6" />
                    </svg>
                  </span>
                  <span class="nav-link-title" style="font-weight: 500;">Ulasan</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>
  <div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <h2 class="page-title">Lihat Peran</h2>
          </div>
        </div>
      </div>
    </div>

    <!-- Page body -->
    <div class="page-body">
      <div class="container-xl">
        <div class="card">
          <div class="card-body">
            <div class="mb-3">
              <label for="name" class="form-label">Nama</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ $role->name }}" disabled>
            </div>

            <div class="text-center">
              <a href="/roles" class="btn btn-secondary">Kembali</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer footer-transparent d-print-none">
      <div class="container-xl">
        <div class="row text-center align-items-center flex-row-reverse">
          <div class="col-lg-auto ms-lg-auto">
            <ul class="list-inline list-inline-dots mb-0">
              <li class="list-inline-item"><a href="https://tabler.io/docs" target="_blank"
                                              class="link-secondary" rel="noopener">Documentation</a></li>
              <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a>
              </li>
              <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank"
                                              class="link-secondary" rel="noopener">Source code</a></li>
              <li class="list-inline-item">
                <a href="https://github.com/sponsors/codecalm" target="_blank" class="link-secondary"
                   rel="noopener">
                  <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                  <svg xmlns="http://www.w3.org/2000/svg"
                       class="icon text-pink icon-filled icon-inline" width="24" height="24"
                       viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                       stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path
                      d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"/>
                  </svg>
                  Sponsor
                </a>
              </li>
            </ul>
          </div>
          <div class="col-12 col-lg-auto mt-3 mt-lg-0">
            <ul class="list-inline list-inline-dots mb-0">
              <li class="list-inline-item">
                Copyright &copy; 2023
                <a href="." class="link-secondary">Tabler</a>.
                All rights reserved.
              </li>
              <li class="list-inline-item">
                <a href="./changelog.html" class="link-secondary" rel="noopener">
                  v1.0.0-beta20
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
</div>

<!-- Tabler Core -->
<script src="{{ asset('dist/js/tabler.min.js') }}" defer></script>
<script src="{{ asset('dist/js/demo.min.js') }}" defer></script>
<script>
  // Fungsi untuk preview image saat file dipilih
  function previewImage(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function (e) {
      const imagePreview = document.getElementById('poster-preview');
      imagePreview.innerHTML = `<img src="${e.target.result}" alt="Preview" class="img-fluid" style="max-width: 200px; height: auto;">`;
    };

    if (file) {
      reader.readAsDataURL(file); // Membaca file image dan mengonversinya menjadi URL data
    }
  }
</script>
</body>
</html>