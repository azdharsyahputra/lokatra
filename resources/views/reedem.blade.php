<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home -  Peserta Lokatara</title>
    <link rel="stylesheet" href="css/style.css">
    <style>

        .navbar {
            background: linear-gradient(to right, #ddff00, #ffff00);
            width: 100%;
            height: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .navbar .logo {
            color: white;
            font-size: 20px;
            font-weight: bold;
        }
        .content {
            margin-left: 260px;
            padding: 20px;
            margin-top: 80px;
            width: calc(100% - 260px);
        }

        .sidebar-container .active {
            background-color: #ffff00;
        }

        .container-home {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 80px;
        }

        .content-home {
            margin-top: 20px;
            display: flex;
            gap: 15px;
            flex-direction: column;
        }
        
        .btn-redeem {
            background-color: #ffff00;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn-redeem:hover {
            background-color: #ddff00;
        }
        @media only screen and (max-width: 600px) {
            .navbar {
                flex-direction: column;
                height: auto;
                padding: 10px 0;
            }

            .navbar .menu {
                flex-direction: column;
                gap: 10px;
                align-items: center;
            }

            .sidebar-container {
                width: 200px;
            }

            .content {
                margin-left: 210px;
                width: calc(100% - 210px);
            }
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="logo">Peserta Lokatara</div>
    </div>
    <div class="container-home">
        <div class="content-home" style="align-items: center;">
            <input type="text" placeholder="Masukkan Kode Redeem" class="input-redeem">
            <button class="btn-redeem">Redeem</button>
        </div>
    </div>
</body>

</html>