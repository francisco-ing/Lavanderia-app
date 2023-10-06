<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
   <link rel="stylesheet" href="{{ asset('css/login.css') }}">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="https://static.vecteezy.com/system/resources/thumbnails/021/809/795/small/doctors-day-illustration-png.png"
                    style="width: 150px;" alt="logo">
                </div>

                <form action="{{route('register')}}" method="post">
                @csrf

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Nombre</label>
                    <input type="text" name="name" id="form2Example11" class="form-control"
                      placeholder="Ingresar Nombre" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Correo Electronico</label>
                    <input type="email" name="email" id="form2Example11" class="form-control"
                      placeholder="Ingresar correo" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Contrasena</label>
                    <input type="password" name="password" id="form2Example22" class="form-control"
                    placeholder="**********" />
                    <div id="passwordHelpBlock" class="form-text">
                      Tu contrasena debe contener: mayuscula, minuscula, numero y caracter especial!.
                    </div>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Confirmar contrasena</label>
                    <input type="password" name="password_confirmation" id="form2Example22" class="form-control"
                    placeholder="**********" />
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Crear cuenta</button>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Ya tienes cuenta?</p>
                    <a href="{{route('login')}}" class="btn btn-primary">Ingresar Cuenta</a>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Servicio de Lavanderia</h4>
                <p class="small mb-0">Software de servicio de lavanderia realizado por alumnos de DuocUC sede Melipilla
                    para el Hospital San Jose de Melipilla.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
