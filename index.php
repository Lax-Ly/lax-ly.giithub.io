<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gontrel</title>
    <style>
        /* Add your custom styles here */
        body {
            margin: 0;
            padding: 0;
            background-color: #E2F5FF;
            color: #005889;
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-image: url('phone.png');
            background-repeat: no-repeat;
            background-size: contain;
            /* or 'cover' if you want it to cover the entire viewport */
            background-position: center center;
            background-attachment: fixed;
            /* optional, to make the background fixed */
            margin: 0;
            /* remove default body margin */
            height: 100vh;
            /* make sure the body takes up the full viewport height */
            display: flex;
            align-items: center;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0) 20%, rgba(255, 255, 255, 0.6) 60%);
            pointer-events: none;
            /* allows clicking through the pseudo-element */
        }


        .well {
            background-color: rgba(200, 200, 200, 0.7);
            /* Adjust the last value for transparency (0 to 1) */
            color: white;
            padding: 20px;
            padding-bottom: 40px;
            width: 50%;
            margin: 100px auto;
            /* Adjust the margin as needed */
            border-radius: 10px;
            text-align: center;
        }

        h1 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        p {
            color: #FF6F00;
            max-width: 600px;
            text-align: center;
            line-height: 1.5;
            margin-bottom: 40px;
        }

        form {
            display: flex;
            align-items: center;
            max-width: 400px;
            width: 100%;
        }

        input {
            flex: 1;
            border: none;
            border-bottom: 2px solid #005889;
            padding: 10px;
            margin-right: 10px;
            background-color: transparent;
            color: #005889;
        }

        button {
            background-color: #D95C69;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="well">
        <h1>Gontrel</h1>

        <p style="margin: auto; padding-bottom: 20px">Level up your life with Gontrel's game-changing experience! Explore epic events, discover thrilling activities,
            and savor unforgettable meals at top-notch restaurants. Ready to upgrade? Register your interest now!</p>

        <form style="margin: auto;">
            <input type="email" placeholder="Enter your email" required>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>