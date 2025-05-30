<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio Page</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #f4f4f4;
            font-family: sans-serif;
        }

        .hero-container {
            position: relative;
            width: 100%;
            height: 50vh;
        }

        .image-wrapper {
            width: 100%;
            height: 100%;
            position: relative;
        }

        .image-wrapper img {
            width: 100%;
            height: 35vh;
            object-fit: cover;
            display: block;
        }

        .image-wrapper h1 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 4rem;
            font-weight: bold;
            background-clip: text;
            color: transparent;
            text-shadow: 2px 2px 2px rgba(221, 215, 215, 0.25),
            4px 4px 8px rgba(131, 124, 124, 0.2),
            1px 1px 0px #f9f9f9;
            z-index: 1;
            white-space: nowrap;
            letter-spacing: 12px;
        }

        .image-icon {
            width: 140px;
            height: 140px;
            margin: 20px auto;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            position: absolute;
            border: 10px solid #fff;
            top: 65%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .image-icon img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }


    </style>
</head>
<body>

<div class="hero-container">
    <!-- Image Section -->
    <div class="image-wrapper">
        <h1>MY PORTFOLIO</h1>
        <img src="services_img.avif" alt="Service Image">
    </div>

    <!-- Image icon-->
    <div class="image-icon">
        <img src="face1.jpg" alt="image not found" id="image">
    </div>
</div>

</body>
</html>
