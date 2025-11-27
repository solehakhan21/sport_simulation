<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Match Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: sans-serif;
        }

        .main-wrapper {
            max-width: 50rem;
            margin: 20px auto;
            background: #fff;
            padding-bottom: 20px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        .header-container {
            position: relative;
            height: 0px;
            width: 100%;
            background-color: transparent;
        }

        .black-strip {
            position: absolute;
            top: 22px;
            left: 0;
            width: 100%;
            height: 35px;
            background: linear-gradient(to bottom, #444, #111);
            border-bottom: 3px solid #6aa84f;
            z-index: 1;
        }

        .logo-circle {
            position: absolute;
            top: 4px;
            left: -4px;
            width: 70px;
            height: 70px;
            background: white;
            border-radius: 50%;
            z-index: 3;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 2px 0 5px rgba(0,0,0,0.3);
        }

        .center-tab {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            background-color: #ff8c00;
            color: white;
            font-weight: bold;
            font-size: 1.2rem;
            padding: 5px 30px;
            height: 45px;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
            z-index: 2;
            border: 2px solid #fff;
            border-top: none;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }

        /* --- RIGHT ICONS (Bootstrap version) --- */
        .right-icons {
            position: absolute;
            right: 20px;
            top: 21px;
            display: flex;
            gap: 12px;
            z-index: 10;
        }

        .icon-circle {
            width: 35px;
            height: 35px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            cursor: pointer;
        }

        .icon-circle i {
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="main-wrapper">
    <div class="header-container">

        <!-- Left Logo -->
        <div class="logo-circle">
            <img src="logo.jpeg" alt="Logo" class="img-fluid rounded-circle">
        </div>

        <div class="center-tab">
            Touchpad Application
        </div>

        <div class="black-strip"></div>
        <!-- Right Icons (Bootstrap only) -->
        <div class="right-icons">
            <div class="icon-circle">
                <i class="fa-solid fa-power-off text-warning"></i>
            </div>

            <div class="icon-circle dropdown">
                <i class="fa-solid fa-globe text-danger" data-bs-toggle="dropdown"></i>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
