
<link rel="shortcut icon" href="https://www.jose-aguilar.com/blog/wp-content/themes/jaconsulting/favicon.ico" />
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/styles.css">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

    <title>Formulario de Pago Seguro</title>

    {{-- <h1>Payment Form</h1>
<p>Product ID: {{ $id }}</p>
<p>Price: ${{ $price }}</p>
<p>Amount: {{ $amount }}</p>
<p>Total: ${{ $price * $amount }}</p> --}}
<p>	4242424242424242</p>
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div style="color: red;">
            {{ session('error') }}
        </div>
    @endif


    <div class="jumbotron">
        <h3>Formulario de pago</h3>
        <form class="form-amount" id="payment-form" action="{{ route('processPayment') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="amount">Monto:</label>
                <input type="text" id="amount" name="amount" class="form-control"  required>
                <div id="card-element">

                </div>
            </div>
            <input class="btn btn-lg btn-primary btn-block" name="submitPayment" type="submit" value="Pagar">
        </form>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <img class="img-responsive" src="https://www.jose-aguilar.com/scripts/php/redsys-pago-con-tarjeta/images/redsys-caixabank.png" alt="Redsys vs CaixaBank"><br/>
        </div>
    </div>




    <script>
        // Create a Stripe client.
        var stripe = Stripe('{{ env('STRIPE_KEY') }}');

        // Create an instance of Elements.
        var elements = stripe.elements();

        // Create an instance of the card Element.
        var card = elements.create('card');

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        // Handle real-time validation errors from the card Element.
        card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    var hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'stripeToken');
                    hiddenInput.setAttribute('value', result.token.id);
                    form.appendChild(hiddenInput);

                    // Submit the form.
                    form.submit();
                }
            });
        });
    </script>
</body>
</html>
