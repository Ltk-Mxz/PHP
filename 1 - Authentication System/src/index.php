<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register & Login</title>
</head>
<body class="h-screen flex flex-col items-center justify-evenly bg-gray-100">
    <div id="sign-up" class="hidden shadow-2xl rounded-2xl p-8 bg-white">
        <h1 class="text-center text-4xl p-8">Register</h1>
        <form method="post" action="register.php">
            <div class="flex items-center gap-x-2 mb-4">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName" required placeholder="First Name" class="flex-1 border-0 border-b-2 focus:border-white focus:outline-none">
            </div>

            <div class="flex items-center gap-x-2 mb-4">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lName" required placeholder="Last Name" class="flex-1 border-0 border-b-2 focus:border-white focus:outline-none">
            </div>

            <div class="flex items-center gap-x-2 mb-4">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email-signup" required placeholder="Email" class="flex-1 border-0 border-b-2 focus:border-white focus:outline-none">
            </div>

            <div class="flex items-center gap-x-2 mb-4">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password-signup" required placeholder="Password" class="flex-1 border-0 border-b-2 focus:border-white focus:outline-none">
            </div>

            <div>
                <input name="sign-up" type="submit" value="Sign Up" class="bg-slate-500 p-2 rounded-md text-white w-full text-xl my-8 cursor-pointer">
            </div>
        </form>
        <p class="inline">Already have an account?</p>
        <button id="sign-in-btn" class="underline text-blue-500">Sign In</button>
    </div>

    <div id="sign-in" class="shadow-2xl rounded-2xl p-8 bg-white">
        <h1 class="text-center text-4xl p-8">Sign In</h1>
        <form method="post" action="register.php">
            <div class="flex items-center gap-x-2 mb-4">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email-signin" required placeholder="Email" class="flex-1 border-0 border-b-2 focus:border-white focus:outline-none">
            </div>

            <div class="flex items-center gap-x-2 mb-4">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password-signin" required placeholder="Password" class="flex-1 border-0 border-b-2 focus:border-white focus:outline-none">
            </div>

            <div>
                <input name="sign-in" type="submit" value="Sign In" class="bg-slate-500 rounded-md p-2 text-white w-full text-xl my-8 cursor-pointer">
            </div>
        </form>

        <p class="text-right text-blue-500 underline cursor-pointer">Recover Password</p>

        <p class="inline">Don't have an account yet?</p>
        <button class="underline text-blue-500" id="sign-up-btn">Sign Up</button>

    </div>
    <script src="script.js"></script>
</body>
</html>