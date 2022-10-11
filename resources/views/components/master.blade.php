<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
  <div class="col-md-12 row d-flex pt-2">
    <div class="d-flex flex-column col-md-4 flex-shrink-0 p-3 text-white bg-dark" style="width: 250px; height: 600px">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
          <use xlink:href="#bootstrap" />
        </svg>
        <span class="fs-4">Sidebar</span>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="{{route('product.index')}}" class="nav-link {{ Route::is('product.*') ?  'active' : ''}} text-white" aria-current="page">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#home" />
            </svg>
            Product
          </a>
        </li>
        <li>
          <a href="{{route('student.index')}}" class="nav-link {{ Route::is('student.*') ?  'active' : ''}} text-white">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#speedometer2" />
            </svg>
            Student
          </a>
        </li>
        <li>
          <a href="{{route('course.index')}}" class="nav-link {{ Route::is('course.*') ?  'active' : ''}} text-white">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#table" />
            </svg>
            Course
          </a>
        </li>
        <li>
          <a href="{{route('patient.index')}}" class="nav-link {{ Route::is('patient.*') ?  'active' : ''}} text-white">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#table" />
            </svg>
            Patient
          </a>
        </li>
        <li>
          <a href="{{route('lab.index')}}" class="nav-link {{ Route::is('lab.*') ?  'active' : ''}} text-white">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#grid" />
            </svg>
            Lab
          </a>
        </li>
        <li>
          <a href="{{url('order/index')}}" class="nav-link {{ Route::is('order.*') ?  'active' : ''}} text-white">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#grid" />
            </svg>
            Order
          </a>
        </li>

      </ul>
      <hr>
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
          <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
          <li><a class="dropdown-item" href="#">New project...</a></li>
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
          <div class="dropdown-item">
        <form method="POST" action="{{ route('logout') }}">
                @csrf
                
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                              this.closest('form').submit();">Log Out </a>
            </form>
        </div>
        </li>
        </ul>
      </div>
    </div>
    {{$slot}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    @if (session('success'))
    <script>
      swal({
        title: "Good job!",
        text: " {{ session('success') }}",
        icon: "success",
      });
    </script>
    @endif

    @if(session('message'))
    <script>
      swal({
        title: "error!",
        text: "   {{ session('message') }}",
        icon: "error",
      });
    </script>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
  </div>
</body>

</html>