<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
            crossorigin="anonymous"/>
    <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css"/>
    <title>profile</title>
</head>

<body>
<!-- header -->
<header class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <!-- clickble  icon-->
        <div style=" padding: 10px; display: flex; justify-content: flex-end;">
            <div class="profile d-flex align-items-center">
                <img id="userProfileIcon" src="face.jpg" alt="User Profile" class="rounded-circle me-2"
                     style="width: 40px; height: 40px; object-fit: cover; cursor: pointer;">
                <h6 id="icon-name">Gerold lorem</h6>
            </div>
        </div>


        <div id="profileDialogOverlay" class="profile-dialog-overlay hidden">
            <div class="profile-dialog-content">
                <button class="close-btn" id="closeDialogBtn">&times;</button>
                <div class="profile-dialog-header">
                    <img src="face.jpg" id="userprofileicon2" alt="User Profile">
                    <div>
                        <h5 id="name">Gerold lorem</h5>
                        <p id="user_id">User Id: 60040786769</p>
                        <p id="mail">Gerold@wooble.org</p>
                    </div>
                </div>
            </div>
        </div>
        <!--humburger-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <form class="d-flex my-2 my-lg-0 order-lg-last" role="search">
                <input
                        class="form-control me-2"
                        type="search"
                        placeholder="Search here people and pages"
                        aria-label="Search"/>
                <button class="btn btn-outline-success" type="submit">
                    Search
                </button>
            </form>

            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#" aria-label="Profile">
                        <span class="d-inline-block p-2">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    fill="currentColor"
                                    class="bi bi-person-circle"
                                    viewBox="0 0 16 16"
                                    style="margin-top: -4px">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                <path
                                        fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"
                                />
                            </svg>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" aria-label="Chat">
                        <span class="d-inline-block p-2">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    fill="currentColor"
                                    class="bi bi-chat-dots"
                                    viewBox="0 0 16 16"
                                    style="margin-top: -4px"
                            >
                                <path
                                        d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"
                                />
                                <path
                                        d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 0-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2"
                                />
                            </svg>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" aria-label="Notifications">
                        <span class="d-inline-block p-2">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    fill="currentColor"
                                    class="bi bi-bell"
                                    viewBox="0 0 16 16"
                                    style="margin-top: -4px"
                            >
                                <path
                                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/>
                            </svg>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>

<!-- First Section -->

<section class="first-section container">
    <div class="card">
        <img src="images.jpeg" id="banner-image" class="img-fluid w-100" alt="Img not found"/>
        <div class="card-body text-center">
            <h4 id="profile-name" style="margin: -20px;">🐣</h4>
            <p id="bio" style="margin-top: 15px">🐝🪱</p>
            <div class="profession-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                    <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5"/>
                    <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85z"/>
                </svg>
                <p id="profession">hello</p>
            </div>
            <div class="location-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                </svg>
                <p id="location">hello</p>
            </div>
        </div>

        <hr>
        <div class="scrolling-tabs card-body">
            <ul class="nav flex-nowrap">
                <li class="nav-link active text-dark" id="timeline">Timeline</li>
                <li class="nav-link text-dark" id="projects">Projects</li>
                <li class="nav-link text-dark" id="photos">Photos</li>
                <li class="nav-link text-dark" id="videos">Videos</li>
            </ul>
        </div>


        <div class="image-class">
            <div class="image-create">
                <img
                        src="face.jpg"
                        id="profile-image"
                        alt="img not found"
                        class="position-absolute start-50 translate-middle rounded-circle object-fit-cover border border-5 border-white"
                />
            </div>
        </div>
    </div>
</section>

<!-- TimeLine -->

<div id="timelineContent" class="content-section">

    <div class="timeline-section">


        <!-- Update Modal -->
        <div id="updateModal" class="modal-overlay">
            <div class="modal-content">
                <h3>Update Timeline Item</h3>
                <label>Title:</label>
                <input type="text" id="updateTitle"> <br>

                <label>Description:</label>
                <input type="text" id="updateDescription"><br>

                <label>Image File:</label>
                <input type="file" id="updateImageFile" accept="image/*" onchange="previewImageFromFile()"><br>
                <img id="imagePreview" src="" width="100">

                <div class="btn">
                    <button onclick="applyUpdate()">Save Changes</button>
                    <button onclick="closeModal()">Cancel</button>
                </div>

            </div>
        </div>


    </div>

</div>


<!-- Friends -->
<section class="second-section">
    <div id="projectContent" style="display: none" class="content-section">
        <div class="cards-item" id="cardsContainer">


        </div>
    </div>
</section>


<!-- Photos -->
<div id="photosContent" class="content-section container my-4" style="display: none;">
    <div id="galleryRow" class="row g-3"></div>
</div>

<script>
    const images = [
        'img1.jpeg',
        'img2.webp',
        'img3.jpeg',
        'img4.jpeg',
        'img1.jpeg',
        'img2.webp'
    ];

    const galleryRow = document.getElementById('galleryRow');

    images.forEach(src => {
        const colDiv = document.createElement('div');
        colDiv.className = 'col-6 col-sm-4 col-md-3 col-xl-2';

        const wrapperDiv = document.createElement('div');
        wrapperDiv.className = 'image-wrapper';

        const img = document.createElement('img');
        img.src = src;
        img.alt = 'Img not found';
        img.className = 'img-fluid rounded shadow-sm';

        wrapperDiv.appendChild(img);
        colDiv.appendChild(wrapperDiv);
        galleryRow.appendChild(colDiv);
    });
</script>

<!-- Videos -->
<div id="videosContent" class="content-section container my-4" style="display: none;">
    <div class="row g-4">
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/MUvpzZODMyo" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/6I5Uyu67cx4" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/Fw1xcsLVMNs" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/QpoL-lNVLIU" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/oRJhIunA9Ck" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>


<!-- javascript -->

<!--Friend-->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const timeline = document.getElementById("timeline");
        const projects = document.getElementById("projects");
        const photos = document.getElementById("photos");
        const videos = document.getElementById("videos");

        const contentSections = document.querySelectorAll(".content-section");
        const timelineContent = document.getElementById("timelineContent");
        const projectContent = document.getElementById("projectContent");
        const photosContent = document.getElementById("photosContent");
        const videosContent = document.getElementById("videosContent");

        function hideAllContentSections() {
            contentSections.forEach((section) => {
                section.style.display = "none";
            });
        }

        timeline.addEventListener("click", function () {
            hideAllContentSections();
            timelineContent.style.display = "block";
        });

        projects.addEventListener("click", function () {
            hideAllContentSections();
            projectContent.style.display = "block";
        });

        photos.addEventListener("click", function () {
            hideAllContentSections();
            photosContent.style.display = "block";
        });

        videos.addEventListener("click", function () {
            hideAllContentSections();
            videosContent.style.display = "block";
        });

        hideAllContentSections();
        timelineContent.style.display = "block";
    });

    document.querySelectorAll('.scrolling-tabs .nav-link').forEach(tab => {
        tab.addEventListener('click', function () {
            document.querySelectorAll('.scrolling-tabs .nav-link').forEach(t => t.classList.remove('active'));
            this.classList.add('active');

        });
    });

</script>

<!--clickable close btn-->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const userProfileIcon = document.getElementById('userProfileIcon');
        const profileDialogOverlay = document.getElementById('profileDialogOverlay');
        const closeDialogBtn = document.getElementById('closeDialogBtn');

        userProfileIcon.addEventListener('click', function () {
            profileDialogOverlay.classList.remove('hidden');
        });

        closeDialogBtn.addEventListener('click', function () {
            profileDialogOverlay.classList.add('hidden');
        });

        profileDialogOverlay.addEventListener('click', function (event) {
            if (event.target === profileDialogOverlay) {
                profileDialogOverlay.classList.add('hidden');
            }
        });
    });
</script>

<!--Dropdowm btn with js-->
<script>
    function attachDropdownHandlers() {
        const dropdownButtons = document.querySelectorAll('.dropdown-button');

        dropdownButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                e.stopPropagation();
                const container = button.closest('.dropdown-container');
                document.querySelectorAll('.dropdown-container').forEach(c => {
                    if (c !== container) c.classList.remove('active');
                });
                container.classList.toggle('active');
            });
        });

        document.addEventListener('click', () => {
            document.querySelectorAll('.dropdown-container').forEach(c => c.classList.remove('active'));
        });
    }


    function deleteItem(button) {
        const timelineItem = button.closest('.timeline-item');
        if (confirm('Are you sure you want to delete this item?')) {
            timelineItem.remove();
        }
    }

    let currentItem = null;

    function update(button) {
        currentItem = button.closest('.timeline-item');

        const title = currentItem.querySelector('h6').textContent;
        const desc = currentItem.querySelector('p').textContent;
        const imgSrc = currentItem.querySelector('img').getAttribute('src');

        document.getElementById('updateTitle').value = title;
        document.getElementById('updateDescription').value = desc;
        document.getElementById('imagePreview').src = imgSrc;

        document.getElementById('updateModal').classList.add('active');
    }

    function applyUpdate() {
        if (!currentItem) return;

        const newTitle = document.getElementById('updateTitle').value;
        const newDesc = document.getElementById('updateDescription').value;
        const previewImgSrc = document.getElementById('imagePreview').src; // Get the preview image src

        currentItem.querySelector('h6').textContent = newTitle;
        currentItem.querySelector('p').textContent = newDesc;
        currentItem.querySelector('img').setAttribute('src', previewImgSrc);

        console.log("New image path:", previewImgSrc);
        console.log("Updated image element:", currentItem.querySelector('img'));

        closeModal();
    }


    function closeModal() {
        document.getElementById('updateModal').classList.remove('active');
        currentItem = null;
    }

    function previewImageFromFile() {
        const fileInput = document.getElementById('updateImageFile');
        const preview = document.getElementById('imagePreview');
        const file = fileInput.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
            };
            reader.readAsDataURL(file);
        } else {
            preview.src = '';
        }
    }


</script>


<!--jquery-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    (function () {
        const username = sessionStorage.getItem('username');
        const email = sessionStorage.getItem('email');
        console.log(username);
        console.log(email);

        $.ajax({
            url: 'https://wooble.io/api/portfolio/FetchUserData.php',
            method: 'POST',
            dataType: 'json',
            data: {
                username: username,
                email: email,
            },
            beforeSend: function () {
                console.log('Sending user data' + username);
            },
            success: function (response) {
                console.log('API Response:', response);
                if (response.status === 'success') {

                    document.getElementById('icon-name').innerHTML = response.data.name;
                    document.getElementById('profile-name').innerHTML = response.data.name;
                    document.getElementById('bio').innerHTML = response.data.bio;
                    document.getElementById('profession').innerHTML = response.data.profession;
                    document.getElementById('location').innerHTML = response.data.location;
                    document.getElementById('user_id').innerHTML = response.data.user_id;
                    document.getElementById('name').innerHTML = response.data.name;
                    document.getElementById('mail').innerHTML = response.data.email;

                    // banner image
                    let image = response.data.banner_img;
                    console.log('Banner image raw value:', image);
                    document.getElementById('banner-image').src = image;

                    // icon-image
                    let iconimage = response.data.profile_pic;
                    // console.log('https://wooble.org/dms/'+iconimage);
                    document.getElementById('userProfileIcon').src = 'https://wooble.org/dms/' + iconimage;

                    let iconimage2 = response.data.profile_pic;
                    // console.log('https://wooble.org/dms/'+iconimage);
                    document.getElementById('userprofileicon2').src = 'https://wooble.org/dms/' + iconimage2;

                    let profileimage = response.data.profile_pic;
                    console.log('https://wooble.org/dms/' + iconimage);
                    document.getElementById('profile-image').src = 'https://wooble.org/dms/' + profileimage;


                }
            },
            error: function (xhr, status, error) {
                console.error('API Error:', xhr.responseText, status, error);
            }
        });

        // timeline Api
        $.ajax({
            url: 'https://wooble.io/api/timeline/fetch_timeline.php',
            method: 'POST',
            dataType: 'json',
            data: {
                username: username,
                email: email,
            },
            beforeSend: function () {
                console.log('Sending user data' + username);
            },
            success: function (response) {

                if (response.success === true) {

                    timeline_data(response.data);

                    function timeline_data(data) {
                        console.log('API Response timeline:', data);
                        const timelineData = [];

                        data.forEach(function (item) {
                            timelineData.push({
                                date: item.start_date,
                                title: item.title,
                                desc: item.subtitle,
                                img: item.img,
                                button: ['certification', 'education']
                            });
                        });

                        console.log('timelineData:', timelineData);

                        const timelineSection = document.querySelector('.timeline-section');

                        timelineData.forEach((item, index) => {
                            const timelineItem = document.createElement('div');
                            timelineItem.className = 'timeline-item';
                            timelineItem.innerHTML = `

    <div class="timeline-card flex">
      <img src="${item.img}" alt="Image" width="50">
      <div class="item">
        <div class="timeline-date">${item.date}</div>
        <h6 id="title">${item.title}</h6>
        <p id="subtitle">${item.desc}</p>
        ${item.button.map(tag => `<div class='button'> <button class="timeline-tag">${tag}</button>`).join('')}</div>
        <div class="dropdown-container">
          <button class="dropdown-button" aria-label="More options">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
              <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/>
            </svg>
          </button>
          <div class="dropdown-menu">
            <button onclick="update(this)">Update Item</button>
            <button onclick="deleteItem(this)">Delete Item</button>
          </div>
        </div>


      </div>
    </div>
  `;
                            timelineSection.appendChild(timelineItem);

                        });
                        attachDropdownHandlers();
                    }

                }
            },
            error: function (xhr, status, error) {
                console.error('API Error:', xhr.responseText, status, error);
            }
        });

        // project Api
        $.ajax({
            url: 'https://wooble.io/api/project/fetchProject_from_username.php',
            method: 'POST',
            dataType: 'json',
            data: {
                username: username,
            },
            beforeSend: function () {
                console.log('fetching project  data: ' + username);
            },
            success: function (response) {
                console.log('project data is' , response);
                if (response.status === true) {

                    cards_data(response.projects);
                    //function card_data
                }
            },
            error: function (xhr, status, error) {
                console.error('API Error:', xhr.responseText, status, error);
            }
        });


    })();

    function cards_data(data) {
        console.log('API Response project:', data);

        const cardsData = [];

        data.forEach(function (project) {
            cardsData.push({
                title: project.project_title,
                description: project.project_description,
            });
        });
        console.log('cardsData', cardsData);

        const cardsContainer = document.getElementById("cardsContainer");

        cardsData.forEach((project, index) => {
            const cardDiv = document.createElement("div");
            cardDiv.className = "cards";

            cardDiv.innerHTML = `
            <h3>${project.title}</h3>
            <p>${project.description}</p>
        `;

            cardsContainer.appendChild(cardDiv);
        });
    }
</script>


</body>
</html>
