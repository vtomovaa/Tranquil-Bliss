<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Thank you for your order</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
    <script src="https://kit.fontawesome.com/7b55828ab8.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');
    </style>
    <style>
        .logo-text {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo-text img {
            width: 20%;
            border-right: 5px solid #a3d97f;
        }

        .logo-text p {
            font-weight: 800;
            font-size: 20px;
            margin-left: 20px;
        }

        div.image-product {
            margin: auto;
            width: 70%;
        }

        div.image-product img {
            width: 100%;
        }

        div.div-wrapper {
            margin: 5vh;
            display: grid;
            grid-template-columns: 0.7fr 1fr;
            width: 80%;
            margin: auto;
            margin-top: 40px;
        }

        div.header-name {
            font-size: 2vh;
            width: 50%;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="logo-text">
        <img src="../images/logo.png" alt="logo">
        <p>FOOT SOAK <span style="color: #a3d97f;">DETOX SET</span>
            <br>
            <b>All natural formula</b> for feet care</p>
    </div>
    <hr />
    <div class="div-wrapper">

        <div class="image-product">
            <img src="../images/website_tranquil bliss-31.webp" class="product" />
        </div>

        <div class="header-name">
            <p class="name-product-text">Thank you for your order, it has been successfully received!</p>
            <p class="name-product-text-bold">Order details: </p>
            <p class="name-product-text"><i class="far fa-check-circle"></i> Order Number: #524956</p>
            <p class="name-product-text"><i class="far fa-check-circle"></i> Selected payment method: Cash on delivery
            </p>
            <p class="name-product-text"><i class="far fa-check-circle"></i> Delivery ETA 3 to 5 business days</p>
        </div>
    </div>
</body>

</html>