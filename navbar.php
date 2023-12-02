<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PDO</title>

    <style>
        .navbar {
            background-color: #f8f9fa;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* Add box shadow for a subtle effect */
            padding: 10px 0;
            /* Add padding to the navbar */
        }

        /* Customize the navbar brand text color */
        .navbar-brand {
            font-size: 1.5rem;
            /* Set your preferred font size */
            color: black;
            /* Set the text color to black */
        }

        /* Customize the navbar links text color */
        .navbar-nav .nav-link {
            font-size: 1rem;
            /* Set your preferred font size */
            color: black;
            /* Set the text color to black */
            margin-right: 15px;
            /* Set the right margin between navbar links */
        }

        /* Add some padding to the navbar links */
        .navbar-nav {
            padding-right: 10px;
        }

        /* Make the navbar full-width */
        .container {
            width: 100%;
            padding-left: 15px;
            padding-right: 15px;
        }

        /* Adjust spacing and alignment for smaller screens */
        @media (max-width: 767px) {
            .navbar-nav {
                margin-top: 10px;
            }

            .navbar-toggler {
                margin-top: 5px;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#" style="color: black;">PHP PDO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


</body>

</html>