<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carrinho de Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="css/styleGeral.css" rel="stylesheet">
</head>
<body style="background-color: #343a40">
<form class="formLogin">
    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="email" id="form2Example1" class="form-control" placeholder="Email address"/>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <input type="password" id="form2Example2" class="form-control" placeholder="Password"/>
    </div>

    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
        <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                <label class="form-check-label" for="form2Example31"> Remember me </label>
            </div>
        </div>
    </div>

    <!-- Submit button -->
    <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>

    <!-- Register buttons -->
    <div class="text-center">
        <p>Not a member? <a href="#!">Register</a></p>
    </div>
</form>
</body>