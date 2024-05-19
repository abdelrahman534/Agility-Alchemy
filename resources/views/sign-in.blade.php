<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agiltiy Alchemy sign in</title>
    <meta name="description" content="Welcome to Agility Alchemy, your one-stop destination for online training.">
    <meta name="author" content="Adel Ashraf,Abdelrahman Ashraf">

    <!-- Open Graph Protocol -->
    <!--
  <meta property="og:title" content="A brief description">
  <meta property="og:type"  content="website">
  <meta property="og:url"   content="https://www.mysite">
  <meta property="og:description" content="A brief description">
  <meta property="og:image" content="image.png">
  -->

    <!--
  <link rel="icon" href="/favicon.ico">
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  -->

    <!-- Include your CSS files here -->
    <link rel="stylesheet" href="css/sign-in.css">
</head>

<body>

    @if ($errors->any())
    <div class="alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <main>
        <div class="container">
            <form action="{{route('login')}}" method="POST">
                @csrf
                <h2>Sign In </h2>
                <h3>to Agility Alchemist</h3>
                <div class="input-group">
                    <input type=email id="input" name=email required minlength="4" multiple />
                    <label for=email class="label">Email</label>

                </div>
                <div class="input-group">
                    <input type=password id="input" name=password required minlength="4" multiple />
                    <label for=password class="label">Password</label>
                </div>
                <button type="submit">Submit</button>
                <div class="sign-up">
                    <p>Don't have an account <a href="{{route('user-create')}}">Sign Up</a></p>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <p>Agility Alchemist was made by <strong>Adel Ashraf,Abdelrahman Ashraf,Abdelrahman Adli, and Ahmed
                Ayman.</strong>
        </p>
        <p>Feel free to use our code at our <a href="https://github.com/Starkk1">Github Repo.</a></p>
    </footer>

    <!-- Include your JavaScript files here -->
    <script src="{{asset('js/scripts.js')}}"></script>
</body>

</html>
