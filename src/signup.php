<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="./css/output.css" rel="stylesheet">
</head>

<body>
    <section class="w-max m-auto">
        <section class="max-h-screen w-max bg-stone-200 m-auto mt-16">
            <h3 class="pt-5 text-center text-lg font-medium">
                Register to access the portal
            </h3>

            <main class="content-center w-max items-center m-auto">
                <section class="block w-100 m-8">
                    <form action="../signup_system/signupdata.php" method="post">
                        <label for="name">
                            <i class="fa-solid fa-user pr-3"></i>Enter Your Name</label>
                        <input type="text" class="name w-full h-12 p-1.5 block my-4 rounded-md hover:outline-cyan-700"
                            name="yname" placeholder="Your name" required />
                </section>
                <section class="block w-100 m-8">
                    <label for="email"><i class="fa-solid fa-envelope pr-3"></i>Enter Your
                        Email</label>
                    <input type="text" class="email w-96 h-12 p-1.5 block my-4 rounded-md hover:outline-cyan-700"
                        name="email" placeholder="Your Email Address" required />
                </section>
                <section class="block w-100 m-8">
                    <label for="password"><i class="fa-solid fa-lock pr-3"></i>Enter Your Password</label>
                    <input type="password" class="password w-96 h-12 p-1.5 block my-4 rounded-md hover:outline-cyan-700"
                        placeholder="Choose a Password" required name="pass" />
                </section>
                <button type="submit" name="submit" class="w-40 ml-8 mb-5 h-10 bg-black text-white hover:bg-sky-700 rounded-md hover:outline-cyan-700" > Sign Up</button>
               
                </form>
            </main>

            <button class="w-96 ml-8 mb-5 h-10 text-white bg-sky-700 rounded-md">
                <i class="fa-brands fa-google pr-2"></i> Sign up with Google
            </button>
        </section>
        <p class="pt-5 text-sm font-medium">
            Already have an account?
            <a href="./login.php" class="text-blue-700 hover:cursor-pointer">Sign in</a>
            <?php
                        if (isset($_GET["error"])) {
                            if ($_GET["error"] == "mptyInputSignup") {
                                echo "<p style='color: red; text-align: center;'>Fill in all fields!</p>";
                            } elseif ($_GET["error"] == "invalidEmail") {
                                echo "<p style='color: red; text-align: center;'>Choose a proper email!</p>";
                            } elseif ($_GET["error"] == "passworderror") {
                                echo "<p style='color: red; text-align: center;'>Password must be up to 8 characters!</p>";
                            } elseif ($_GET["error"] == "none") {
                                echo "<p class='text-green-500'>You have signed up!</p>";
                            }
                        }
                        ?>
        </p>
    </section>
    
    <script src="https://kit.fontawesome.com/891c2fc307.js" crossorigin="anonymous"></script>
</body>

</html>