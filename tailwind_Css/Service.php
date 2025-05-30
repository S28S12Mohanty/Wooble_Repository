<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Service Page</title>
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

        .card-wrapper {
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 2rem;
            justify-content: center;
            perspective: 1000px;
            z-index: 2;
            perspective: 1000px;
        }

        .card {
            width: 200px;
            height: 300px;
            background: linear-gradient(135deg, #ffffff, #f9f9f9);
            border-radius: 16px;
            box-shadow:
                    0 10px 15px rgba(0, 0, 0, 0.1),
                    0 5px 5px rgba(0, 0, 0, 0.05),
                    inset 0 1px 2px rgba(255, 255, 255, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            font-weight: bold;
            transform-style: preserve-3d;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }


        .card:hover {
            transform: rotateY(15deg) rotateX(5deg) scale(1.05);
            box-shadow:
                    0 20px 25px rgba(0, 0, 0, 0.15),
                    0 10px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="hero-container">
    <!-- Image Section -->
        <div class="image-wrapper">
            <h1>OUR SERVICES</h1>
            <img src="services_img.avif" alt="Service Image">
        </div>

    <!-- Cards Floating on Image -->
    <div class="card-wrapper">
        <div class="card">services 1</div>
        <div class="card">services 2</div>
        <div class="card">services 3</div>
        <div class="card">services 4</div>
        <div class="card">services 5</div>
    </div>
</div>

</body>
</html>
