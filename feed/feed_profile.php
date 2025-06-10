<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>LinkedIn Style Profile</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f2ee;
        }

        .profile-container {
            max-width: 900px;
            margin: 20px auto;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.08);
        }

        .cover-photo {
            height: 150px;
            background: url('https://via.placeholder.com/900x150?text=Cover+Image') no-repeat center center;
            background-size: cover;
        }

        .profile-section {
            padding: 20px;
            display: flex;
        }

        .profile-photo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 4px solid #fff;
            margin-top: -60px;
        }

        .info-section {
            margin-left: 20px;
            flex: 1;
        }

        .info-section h2 {
            margin: 0;
            font-size: 20px;
        }

        .info-section small {
            color: #666;
            font-size: 13px;
        }

        .info-section p {
            font-size: 14px;
            margin: 5px 0;
            color: #333;
        }

        .buttons {
            margin-top: 10px;
        }

        .buttons button {
            font-size: 13px;
            padding: 6px 12px;
            margin-right: 8px;
            border-radius: 20px;
            border: 1px solid #0a66c2;
            background-color: #fff;
            color: #0a66c2;
            cursor: pointer;
        }

        .buttons button.primary {
            background-color: #0a66c2;
            color: #fff;
        }

        .location {
            font-size: 13px;
            color: #555;
        }

        .connections {
            font-size: 13px;
            color: #0a66c2;
            margin-top: 4px;
        }
        .cover-photo img{
            width: 100%;
            height: 10rem;
            object-fit: cover;
        }

        .open-to-work {
            position: relative;
        }

    </style>
</head>
<body>

<div class="profile-container">
    <div class="cover-photo">
        <img id="banner-image" src="#" alt="banner Photo">
    </div>
    <div class="profile-section">
        <div class="open-to-work">
            <img class="profile-photo" id="profile-image" src="#" alt="Profile Photo">
        </div>
        <div class="info-section">
            <h2 id="profile-name">Sunami Swayamprava Mohanty</h2>
            <p id="bio">Currently pursuing BSc. Computer Science @LIT, BBSR | HTML5 | CSS | JavaScript | Bootstrap | Tailwind CSS | PHP.</p>
            <p class="location" id="location">Khurda, Odisha, India · <a href="#">Contact info</a></p>
            <p class="connections">500+ connections</p>
            <div class="buttons">
                <button class="primary">Open to</button>
                <button>Add profile section</button>
                <button>Enhance profile</button>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    (function () {
        const username = sessionStorage.getItem('username');
        const email = sessionStorage.getItem('email');

        $.ajax({
            url: 'https://wooble.io/api/portfolio/FetchUserData.php',
            method: 'POST',
            dataType: 'json',
            data: {username, email},
            success: function (response) {
                if (response.status === 'success') {
                    document.getElementById('profile-name').innerHTML = response.data.name;
                    document.getElementById('bio').innerHTML = response.data.bio;
                    document.getElementById('location').innerHTML = response.data.location;

                    // profile image and icon
                    let icon_image = response.data.profile_pic;
                    icon_image = atob(icon_image);
                    let modifiedName = icon_image.replace('.webp', '_400.png');
                    console.log('Modified file name:', modifiedName);
                    const reEncoded = btoa(modifiedName);
                    console.log('Re-encoded file name:', reEncoded);

                    document.getElementById('profile-image').src = 'https://wooble.org/dms/' + reEncoded;

                    // banner image
                    let image = response.data.banner_img;
                    console.log('Banner image raw value:', image);
                    document.getElementById('banner-image').src = image;

                }

            },
            error: function (xhr, status, error) {
                console.error('API Error:', xhr.responseText, status, error);

            }
        });

    })();
</script>

</body>
</html>
