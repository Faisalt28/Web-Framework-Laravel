@php use Illuminate\Support\Str; @endphp
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Daftar Film</title>
  <!-- CSS files -->
  <link href="{{ asset('dist/css/tabler.min.css') }}" rel="stylesheet" />
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
              <li class="nav-item">
                <a class="nav-link" href="/roles"
                  style="display: flex; align-items: center; gap: 10px; padding: 10px 15px; border-radius: 8px; transition: background-color 0.3s;">
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
              <li class="nav-item active">
                <a class="nav-link" href="/movies"
                  style="display: flex; align-items: center; gap: 10px; padding: 10px 15px; background-color: #e9ecef; border-radius: 8px; font-weight: bold; color: #495057;">
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
                  <span class="nav-link-title">Film</span>
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
      @if(session('success'))
      <div class="alert alert-success">
      {{ session('success') }}
      </div>
    @endif

      @if(session('error'))
      <div class="alert alert-danger">
      {{ session('error') }}
      </div>
    @endif

      <!-- Page header -->
      <div class="page-header d-print-none"
        style="background: linear-gradient(90deg, #4e54c8, #8f94fb); padding: 20px 0; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <div class="container-xl">
          <div class="row g-2 align-items-center">
            <div class="col">
              <h2 class="page-title" style="color: #fff; font-weight: bold; margin: 0;">
                Daftar Film
              </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
              <div class="btn-list">
                <a href="{{ route('movies.create') }}" class="btn btn-primary d-none d-sm-inline-block"
                  style="display: flex; align-items: center; gap: 8px; padding: 10px 20px; background: #ff5f6d; border: none; border-radius: 4px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                  <!-- Icon SVG -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 5l0 14" />
                    <path d="M5 12l14 0" />
                  </svg>
                  <span style="color: #fff; font-weight: bold;">Tambah Film</span>
                </a>
                <a href="{{ route('movies.create') }}" class="btn btn-primary d-sm-none btn-icon"
                  aria-label="Create new user"
                  style="display: flex; justify-content: center; align-items: center; padding: 10px; background: #ff5f6d; border: none; border-radius: 50%; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                  <!-- Icon SVG -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 5l0 14" />
                    <path d="M5 12l14 0" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Page body -->
      <div class="page-body">
        <div class="container-xl">
          <div class="row g-4">
            @forelse ($movies as $movie)
        <div class="col-md-4 col-sm-6">
          <div class="card shadow-sm border-0 h-100">
          <!-- Poster -->
          <div class="card-header p-0">
            @if ($movie->poster)
        <img src="{{ asset('storage/' . $movie->poster) }}" alt="Poster">
      @else
    <img src="https://picsum.photos/300/200" alt="No Poster">
  @endif
          </div>
          <!-- Card Body -->
          <div class="card-body d-flex flex-column">
            <h5 class="card-title text-truncate">{{ $movie->title }}</h5>
            <p class="card-text text-muted" style="max-height: 60px; overflow: hidden; text-overflow: ellipsis;">
            {{ Str::limit($movie->synopsis, 100) }}
            </p>
            <p class="card-text mb-1"><strong>Genre:</strong> {{ $movie->genre->name }}</p>
            <p class="card-text mb-1"><strong>Tahun:</strong> {{ $movie->year }}</p>
            <p class="card-text mb-3">
            <strong>Pemeran:</strong>
            @foreach ($movie->casts as $castMovie)
        {{ $castMovie->name }}{{ !$loop->last ? ', ' : '' }}
      @endforeach
            </p>
            <!-- Action Buttons -->
            <div class="mt-auto">
            <div class="d-flex justify-content-between gap-2">
              <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-sm btn-info flex-fill">
              <i class="fas fa-eye"></i> Lihat
              </a>
              <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-sm btn-warning flex-fill">
              <i class="fas fa-edit"></i> Ubah
              </a>
              <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" style="flex-fill;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger w-100"
                onclick="return confirm('Apakah Anda yakin ingin menghapus film ini?')">
                <i class="fas fa-trash-alt"></i> Hapus
              </button>
              </form>
            </div>
            </div>
          </div>
          </div>
        </div>
      @empty
    <div class="col-12 text-center">
      <p class="text-muted">Tidak ada data film yang ditemukan.</p>
    </div>
  @endforelse
          </div>
        </div>
      </div>


      <footer class="footer footer-transparent d-print-none">
        <div class="container-xl">
          <div class="row text-center align-items-center flex-row-reverse">
            <div class="col-lg-auto ms-lg-auto">
              <ul class="list-inline list-inline-dots mb-0">
                <li class="list-inline-item"><a href="https://tabler.io/docs" target="_blank" class="link-secondary"
                    rel="noopener">Documentation</a></li>
                <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a>
                </li>
                <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank"
                    class="link-secondary" rel="noopener">Source code</a></li>
                <li class="list-inline-item">
                  <a href="https://github.com/sponsors/codecalm" target="_blank" class="link-secondary" rel="noopener">
                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline" width="24"
                      height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                      stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
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
  <!-- JavaScript for Sorting -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const table = document.querySelector('.table');
      const headers = table.querySelectorAll('.table-sort');
      const tbody = table.querySelector('.table-tbody');

      headers.forEach(header => {
        header.addEventListener('click', () => {
          const sortKey = header.dataset.sort;
          const rows = Array.from(tbody.querySelectorAll('tr'));

          const isNumericColumn = header.dataset.numeric === "true";

          rows.sort((a, b) => {
            const cellA = a.querySelector(`.${sortKey}`).textContent.trim();
            const cellB = b.querySelector(`.${sortKey}`).textContent.trim();

            if (isNumericColumn) {
              return parseFloat(cellA) - parseFloat(cellB);
            } else {
              return cellA.localeCompare(cellB);
            }
          });

          // Reverse order if already sorted in ascending order
          const isAscending = header.classList.contains('asc');
          if (isAscending) {
            rows.reverse();
            header.classList.remove('asc');
            header.classList.add('desc');
          } else {
            header.classList.remove('desc');
            header.classList.add('asc');
          }

          // Clear other header sort indicators
          headers.forEach(h => {
            if (h !== header) {
              h.classList.remove('asc', 'desc');
            }
          });

          // Append sorted rows to the tbody
          rows.forEach(row => tbody.appendChild(row));
        });
      });
    });
  </script>
</body>

</html>