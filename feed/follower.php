<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Followers List</title>
    <link rel="stylesheet" href="follower.css"/>
</head>
<body>

<!--left side-->
<aside class="linkedin-sidebar">
    <div class="profile-card">
        <div class="banner_img" >
            <img src="images.jpeg" id="banner_img" class="img-fluid" alt="Img not found"/>
        </div>
        <div class="profile_img" >
            <img src="images.jpeg" id="banner_img" class="img-fluid" alt="Img not found"/>
        </div>
        <div class="profile-info">
            <h2 id="profile-name">Subash </h2>
            <p class="bio" id="bio">Passionate </p>
            <p class="location" id="location" style="">Nandankanan</p>
        </div>
</aside>

<!--main contain-->
<div class="container">

    <div  class="followers-count">
        <span  id="total_followers">768 </span>
        <span>Connections </span>
    </div>

    <div class="follower">
        <div class="follower-info">
            <img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png" class="avatar" alt="Avatar">
            <div class="details">
                <div class="name">Purnitprava Pradhan</div>
                <div class="profession">Student at Gandhi Institute For Technology, Bhubaneswar</div>
                <div class="connected">Connected 2 hours ago</div>
            </div>
        </div>
        <button class="message-btn">Message</button>
    </div>

    <div class="follower">
        <div class="follower-info">
            <img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png" class="avatar" alt="Avatar">
            <div class="details">
                <div class="name">DibyaJyoti Nayak</div>
                <div class="profession">DevOps & AWS Cloud Architect | Kubernetes | Terraform | Jenkins</div>
                <div class="connected">Connected 1 day ago</div>
            </div>
        </div>
        <button class="message-btn">Message</button>
    </div>

    <div class="follower">
        <div class="follower-info">
            <img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png" class="avatar" alt="Avatar">
            <div class="details">
                <div class="name">Lipika Tripathy</div>
                <div class="profession">Office Executive at KCP & ASSOCIATES</div>
                <div class="connected">Connected 1 day ago</div>
            </div>
        </div>
        <button class="message-btn">Message</button>
    </div>


</div>


<!--jquery-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    const username = sessionStorage.getItem('username');
    const email = sessionStorage.getItem('email');
    console.log(username);
    console.log(email);

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
                document.getElementById('total_followers').innerHTML = response.data.total_followers;

                // // profile image and icon
                // let icon_image = response.data.profile_pic;
                // icon_image = atob(icon_image);
                // let modifiedName = icon_image.replace('.webp', '_400.png');
                // console.log('Modified file name:', modifiedName);
                // const reEncoded = btoa(modifiedName);
                // console.log('Re-encoded file name:', reEncoded);
                // userProfilePic = 'https://wooble.org/dms/' + reEncoded;
                //
                // document.getElementById('profile-icon').src = userProfilePic;
                // document.getElementById('profile-image').src = userProfilePic;
                // document.getElementById('profileicon').src = userProfilePic;

                // banner image
                let image = response.data.banner_img;
                console.log('Banner image raw value:', image);
                document.getElementById('banner_img').src = image;

            }

        },
        error: function (xhr, status, error) {
            console.error('API Error:', xhr.responseText, status, error);

        }
    });
</script>


</body>
</html>
