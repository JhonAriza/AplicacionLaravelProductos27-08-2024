
   @extends('layouts.app')

@section('content') <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

<!-- Scripts -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Registrar  Datos  para continuar') }}</div>

                <div class="card-body">
                <form action="{{ url('storeProduct') }}" method="POST">
                        @csrf

                            <input type="hidden" name="id" value="{{ $id }}">

                            <input type="hidden" name="price" value="{{ $price }}">
            </div>



                          {{-- contraseña por defecto --}}
                            <input type="hidden" name="password" value="123456789">


                            <input type="hidden" name="id" value="{{ $id }}">
                            <!-- <input type="hidden" name="password" value="123456789"> -->



                            <div class="row mb-3">
                                <label for="user" class="col-md-4 col-form-label text-md-end">{{ __('Select User') }}</label>

                                <div class="col-md-6">
                                    <select id="user" class="form-control @error('user_id') is-invalid @enderror" name="user_id" required>
                                        <option value="" disabled selected>Select a User</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user['id'] }}"
                                                    data-firstname="{{ $user['first_name'] }}"
                                                    data-lastname="{{ $user['last_name'] }}"
                                                    data-email="{{ $user['email'] }}">
                                                {{ $user['first_name'] }} {{ $user['last_name'] }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @error('user_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="lastname" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="quantity" class="col-md-4 col-form-label text-md-end">{{ __('quantity') }}</label>



                            <div class="col-md-6">
                                <input id="quantity" type="number" class="form-control" name="quantity" required autocomplete="quantity">
                            </div>

                        </div>
                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="address" class="form-control" name="address" required autocomplete="address">
                            </div>
                        </div>




                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" id="bytn">
                                    {{ __('comprar') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

//  window.onload = function(){
//     document.getElementById("bytn").onclick=sumar;s
//   }
//   function sumar() {
//     Swal.fire({
//   icon: 'success',
//   title: 'se ha guardado',

// })
//   }

</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const userSelect = document.getElementById('user');
        const nameInput = document.getElementById('name');
        const lastNameInput = document.getElementById('lastname');
        const emailInput = document.getElementById('email');

        userSelect.addEventListener('change', function() {
            // Obtén la opción seleccionada
            const selectedOption = userSelect.options[userSelect.selectedIndex];

            // Extrae los valores de data attributes
            const firstName = selectedOption.getAttribute('data-firstname');
            const lastName = selectedOption.getAttribute('data-lastname');
            const email = selectedOption.getAttribute('data-email');

            // Actualiza los campos de entrada
            nameInput.value = firstName;
            lastNameInput.value = lastName;
            emailInput.value = email;
        });
    });
    </script>









<!--
pruebas  -->
@endsection
