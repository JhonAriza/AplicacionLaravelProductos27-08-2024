<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Fonts -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        .glyphicon {
            margin-right: 5px;
        }

        .thumbnail {
            margin-bottom: 20px;
            padding: 0px;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px;
        }

        .item.list-group-item {
            float: none;
            width: 100%;
            background-color: #fff;
            margin-bottom: 10px;
        }

        .item.list-group-item:nth-of-type(odd):hover,
        .item.list-group-item:hover {
            background: #428bca;
        }

        .item.list-group-item .list-group-image {
            margin-right: 10px;
        }

        .item.list-group-item .thumbnail {
            margin-bottom: 0px;
        }

        .item.list-group-item .caption {
            padding: 9px 9px 0px 9px;
        }

        .item.list-group-item:nth-of-type(odd) {
            background: #eeeeee;
        }

        .item.list-group-item:before,
        .item.list-group-item:after {
            display: table;
            content: " ";
        }

        .item.list-group-item img {
            float: left;
        }

        .item.list-group-item:after {
            clear: both;
        }

        .list-group-item-text {
            margin: 0 0 11px;
        }

        nav {
    position: absolute;
    margin-top: -109px;
    background-color: powderblue;
    border-radius: 14px;
    margin-right: 12px;
}
    </style>
</head>

<body>


    <button type="button" class="btn btn-primary" onclick="redirectToPaymentForm()">
        {{ __('Ir a Pagos') }}
    </button>
    <div class="container">

        <div class="well well-sm">
            <strong>Display</strong>  <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <div class="btn-group">
                <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
                    </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                        class="glyphicon glyphicon-th"></span>Grid</a>
            </div>
        </div>
        <h1 x-data="{ message: 'I ❤️ eat' }" x-text="message"></h1>

        <H1>¡Pide ahora, nosotros te lo llevamos!</H1>
        <h1 class="text-center animate__animated animate__bounceInDown ">platos Especiales </h1>
        <div id="products" class="row list-group">
            @foreach ($products as $product)
            <div class="item  col-xs-4 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="{{  $product->image }}  " />
                    <div class="caption text-center">

                         <p class="group inner list-group-item-text">{{ $product->description }}</p>
                        <div class="row">

                            <div class="col-xs-12 col-md-12">
                                <h3> <b>{{ $product->name }} </b> <BR> <SPan> Precio: {{ number_format($product->price,
                                        0) }}</SPan></h3>

                            </div>
                           <div class="col-xs-12 col-md-12">
                                <p class="lead">Cantidad: {{ $product->quantity }}</p>
                            </div>
                            <div class="col-xs-12 col-md-12">
                                <div x-data="{open: false}">
                                    <a href="{{ url('show-product/'.$product->id.'?price='.$product->price) }}" class="btn btn-success">comprar</a>


                                <a class="btn btn-warning" x-on:click="open =!open">
                                    <ion-icon name="eye-sharp"></ion-icon>
                                </a>
                                <nav x-show="open" x-on:click.away="open=false">
                                    <h4 class="group inner list-group-item-text">{{ $product->description }}</h4>

                                </nav>
                            </div>
                            </div>













                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#list').click(function(event) {
                event.preventDefault();
                $('#products .item').addClass('list-group-item');
            });
            $('#grid').click(function(event) {
                event.preventDefault();
                $('#products .item').removeClass('list-group-item');
                $('#products .item').addClass('grid-group-item');
            });
        });
    </script>




    <div class="panel panel-default mt-5 ml-4">
        <div class="panel-body">
            <div class="container">



                <div class="form-check aling-center">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        acepta terminos y condicones
                    </label>

                </div>
            </div>


            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Terminos y condiciones ver
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            <p>Qué debo hacer si tengo un sitio web de comercio electrónico? ¿Se recomienda crear un
                                documento de términos y condiciones?
                                Sí. De hecho, no solo es recomendable, sino que a menudo es obligatorio.

                                Los términos y condiciones no solo son de vital importancia para protegerte de posibles
                                responsabilidades, sino que también contienen información legalmente obligatoria, como
                                los derechos del usuario y las políticas de devolución, desistimiento o cancelación..

                                Por lo general, un sitio web/app debe tener un documento de Condiciones de servicio
                                válido y preciso siempre que estén en juego problemas complejos, como es el caso del
                                comercio electrónico, donde se trata información confidencial como los datos de pago.

                              </p>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
    </div>
</body>

</html>
<script>
    function redirectToPaymentForm() {
        window.location.href = "http://127.0.0.1:8000/payment-form";
    }
</script>
