<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Basic reset and font application -----*/
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f3f4f6; /* Equivalent to bg-gray-100 */
        }

        /* Container for the card */
        .container {
            background-color: #ffffff; /* Equivalent to bg-white */
            padding: 32px; /* Equivalent to p-8 */
            border-radius: 8px; /* Equivalent to rounded-lg */
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); /* Equivalent to shadow-xl */
            text-align: center;
            max-width: 384px; /* Equivalent to max-w-sm */
            width: 100%;
            margin: 16px; /* Equivalent to p-4 for body */
            /* This combination of max-width, width: 100%, and margin makes the container responsive */
        }

        /* Title styling */
        h1 {
            font-size: 30px; /* Equivalent to text-3xl */
            font-weight: 700; /* Equivalent to font-bold */
            color: #1f2937; /* Equivalent to text-gray-800 */
            margin-bottom: 24px; /* Equivalent to mb-6 */
        }

        /* Paragraph styling */
        p {
            color: #4b5563; /* Equivalent to text-gray-600 */
            font-size: 18px; /* Equivalent to text-lg */
            margin-bottom: 32px; /* Equivalent to mb-8 */
        }

        /* Button container styling */
        .button-group {
            display: flex;
            flex-direction: column; /* Stacks buttons vertically on all screen sizes */
            gap: 16px; /* Equivalent to space-y-4 */
        }

        /* Base button styling */
        .button {
            padding: 12px 24px; /* Equivalent to py-3 px-6 */
            border: none;
            border-radius: 8px; /* Equivalent to rounded-lg */
            font-weight: 600; /* Equivalent to font-semibold */
            color: white;
            cursor: pointer;
            transition: all 0.3s ease-in-out; /* Equivalent to transition duration-300 ease-in-out */
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); /* Equivalent to shadow-md */
            transform: scale(1); /* Initial scale for hover effect */
            width: 100%; /* Ensure buttons take full width of their container */
        }

        /* Button hover effect */
        .button:hover {
            transform: scale(1.05); /* Equivalent to hover:scale-105 */
        }

        /* Focus outline for accessibility */
        .button:focus {
            outline: none;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.5); /* Equivalent to focus:ring-2 focus:ring-blue-500 focus:ring-opacity-75 (for blue) */
        }

        /* Login button specific styling */
        .button.login {
            background-color: #2563eb; /* Equivalent to bg-blue-600 */
        }

        .button.login:hover {
            background-color: #1d4ed8; /* Equivalent to hover:bg-blue-700 */
        }

        .button.login:focus {
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.5); /* Blue focus ring */
        }

        /* Register button specific styling */
        .button.register {
            background-color: #16a34a; /* Equivalent to bg-green-600 */
        }

        .button.register:hover {
            background-color: #15803d; /* Equivalent to hover:bg-green-700 */
        }

        .button.register:focus {
            box-shadow: 0 0 0 4px rgba(34, 197, 94, 0.5); /* Green focus ring */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 id="mainTitle">Welcome</h1>
        <p id="mainParagraph">Please log in or register to continue.</p>
        <div class="button-group" id="mainButtons">
            <!-- Login button now redirects to login.php -->
            <button class="button login" onclick="window.location.href = 'login.php';">Login</button>
            <!-- Register button now redirects to register.php -->
            <button class="button register" onclick="window.location.href = 'register.php';">Register</button>
        </div>
    </div>
</body>
</html>
