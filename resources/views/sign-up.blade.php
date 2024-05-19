<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agility Alchemist Sign UP</title>
    <meta name="description" content="">
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
    <link rel="stylesheet" href="../css/sign-up.css">
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
        <!-- Add your main content here -->
        <div class="container">
            <form action="{{route('register')}}" method="POST">
                @csrf
                <h2>Sign Up </h2>
                <h3>to Agility Alchemist</h3>
                <div class="input-group">
                    <InputField type="text" name="Username" />
                </div>
                <div class="input-group">
                    <input type=text id="input" name=username required minlength="4" multiple />
                    <label for=username class="label">UserName</label>
                </div>
                <div class="input-group">
                    <input type=password id="input" name=password required minlength="4" multiple />
                    <label for=password class="label">Password</label>
                </div>
                <div class="input-group">
                    <input type=email id="input" name=email required minlength="4" multiple />
                    <label for=email class="label">Email</label>
                </div>
                <div class="gender-container">
                    <label for="gender" class="label" id="gender">Gender</label>
                    <div class="radio">
                        <input type=radio id="input" name="gender" value="Male" required minlength="4" multiple />
                        <label for=gender class="label">Male</label>
                    </div>
                    <div class="radio">
                        <input type=radio id="input" name="gender" value="Female" required minlength="4" multiple />
                        <label for=gender class="label">female</label>
                    </div>
                </div>
                <div class="check">
                    <label>
                        <input type="checkbox" name="terms"/>
                        <span>I agree to the terms & conditions</span>
                    </label>

                </div>
                <button type="submit">Submit</button>
                <div class="sign-up">
                    <p>Already have an account ? <a href="{{route('signIn')}}">Sign in</a></p>
                </div>
    </main>
    <footer>
        <p>Agility Alchemist was made by <strong>Adel Ashraf,Abdelrahman Ashraf,Abdelrahman Adli, and Ahmed
                Ayman.</strong>
        </p>
        <p>Feel free to use our code at our <a href="https://github.com/Starkk1">Github Repo.</a></p>
    </footer>

    <!-- Include your JavaScript files here -->
    <script src="js/scripts.js"></script>
</body>

</html>