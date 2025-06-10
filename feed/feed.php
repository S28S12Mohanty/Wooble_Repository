<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed</title>
    <link rel="stylesheet" href="feed.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@4.6.4/dist/index.min.js"></script>

</head>
<body>
<!-- Top Navigation Bar -->
<header class="top-navbar">
    <div class="navbar-content">
        <div class="navbar-left">
            <!--                        <p href="#" class="linkedin-logo" id="logo">hello</p>-->
            <div class="search-bar">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search">
                    <circle cx="11" cy="11" r="8"/>
                    <path d="m21 21-4.3-4.3"/>
                </svg>
                <input type="text" placeholder="Search">
            </div>
        </div>
        <nav class="navbar-right">
            <a href="#" class="nav-icon-link active">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-home">
                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                    <polyline points="9 22 9 12 15 12 15 22"/>
                </svg>
                <span>Home</span>
            </a>
            <a href="#" class="nav-icon-link">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                    <circle cx="9" cy="7" r="4"/>
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87l-1-.13a4 4 0 0 0-3 3.87v2"/>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                </svg>
                <span>My Network</span>
            </a>
            <a href="#" class="nav-icon-link">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-briefcase">
                    <rect width="20" height="14" x="2" y="7" rx="2" ry="2"/>
                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                </svg>
                <span>Jobs</span>
            </a>
            <a href="#" class="nav-icon-link">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square">
                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V3a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                </svg>
                <span>Messaging</span>
            </a>
            <a href="#" class="nav-icon-link">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell">
                    <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/>
                    <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/>
                </svg>
                <span>Notifications</span>
            </a>
        </nav>
    </div>
</header>

<!-- Main Page Content -->
<div class="page-container">
    <!-- Left Sidebar -->
    <aside class="left-sidebar">
        <a href="feed_profile.php" style="text-decoration: none; color: #0B0D17">
            <div class="profile-card">
                <div class="profile-bg">
                    <!-- Placeholder for background image -->
                    <img src="data:image/png;base64,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"
                         alt="banner-img not found" id="banner_img"
                         style="width: 100%; height: 100%; object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                </div>
                <img src="data:image/jpeg;base64,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"
                     alt="Profile Picture" class="profile-img" id="profile-image">
                <div class="profile-name" id="name">Virat Kohli</div>
                <div class="profile-title" id="bio">
                    Based on the screenshot you provided, while there is an image in a post that appears to show
                    athletes or
                    a sports team, the names of the players themselves are not visible or mentioned in the text of the
                    screenshot.
                </div>
                <div class="location" id="location">
                    khordha , Odisha
                </div>
                <div class="profile-stats">
                    <div>
                        <a href="#">Connections</a>
                        <span>500+</span>
                    </div>
                    <div>
                        <a href="#">Views of post</a>
                        <span>250</span>
                    </div>
                </div>
            </div>
        </a>

        <div class="cards">
            <div class="card-header">
                <p>Profile viewers</p>
                <p>218</p>
            </div>
            <div class="card-header">
                <p>Post impressions</p>
                <p>86</p>
            </div>
        </div>

        <div class="cards">

            <p>Achieve your career goals</p>
            <p>Try Premium for ₹0</p>
        </div>

        <div class="cards-item">
            <ul class="cards-list">
                <li class="card-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                        <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/>
                    </svg>
                    <span>Saved items</span>
                </li>
                <li class="card-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                    </svg>
                    <span>Groups</span>
                </li>
                <li class="card-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-file-text-fill" viewBox="0 0 16 16">
                        <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1m-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5M5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1m0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1"/>
                    </svg>
                    <span>Newsletters</span>
                </li>
                <li class="card-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-calendar2-event-fill" viewBox="0 0 16 16">
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5m9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5M11.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
                    </svg>
                    <span>Events</span>
                </li>
            </ul>
        </div>


    </aside>

    <!-- Main Content Area (Feed) -->
    <main class="main-content-area">
        <!-- Create Post Section (Simplified) -->
        <div class="card">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                <a href="feed_profile.php"> <img
                            src="data:image/jpeg;base64,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"
                            alt="Your Profile Picture" id="profile-icon"
                            class="post-profile-pic"
                            style="width: 45px; height: 45px; border-radius: 50%; object-fit: cover;"></a>
                <input type="text" placeholder="Start a post" id="openModalBtn"
                       style="flex-grow: 1; padding: 12px; border: 1px solid #e0e0e0; border-radius: 24px; outline: none; font-size: 15px;">
            </div>
            <div id="overlay" class="overlay"></div>

            <!-- Modal -->
            <div id="postModal" class="modal">
                <div class="modal-header">
                    <div class="profile-section">
                        <img src="#" class="modal-profile-pic" id="profileicon">
                        <div>
                            <strong id="profile-name">Your Name</strong>
                        </div>
                    </div>
                    <button class="close-btn" id="closeModalBtn">&times;</button>
                </div>
                <textarea class="modal-textarea" placeholder="What do you want to talk about?"></textarea>
                <div class="modal-footer">
                    <div class="modal-actions" style="display: flex;">
                        <!--                        <button class="action-btn">🙂</button>-->
                        <button class="post-action-button">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-image">
                                <rect width="18" height="18" x="3" y="3" rx="2" ry="2"/>
                                <circle cx="9" cy="9" r="2"/>
                                <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/>
                            </svg>

                        </button>
                        <button class="post-action-button">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play-square">
                                <rect width="18" height="18" x="3" y="3" rx="2"/>
                                <path d="m10 8 6 4-6 4Z"/>
                            </svg>
                        </button>

                        <button class="post-action-button" id="toggleExtraBtns">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-plus-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
                            </svg>

                        </button>
                        <div class="extra-buttons" style="display: none; margin-left: 10px;">

                            <button class="post-action-button" id="toggleExtraBtns">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-calendar-event-fill" viewBox="0 0 16 16">
                                    <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2m-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5"/>
                                </svg>

                            </button>
                            <button class="post-action-button" id="toggleExtraBtns">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z"/>
                                </svg>

                            </button>
                            <button class="post-action-button" id="toggleExtraBtns">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
                                    <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1z"/>
                                </svg>

                            </button>
                            <button class="post-action-button" id="toggleExtraBtns">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                                    <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5"/>
                                    <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85z"/>
                                </svg>

                            </button>

                        </div>
                    </div>
                    <button class="post-btn">Post</button>
                </div>
            </div>

            <!-- toggle plus button-->
            <script>
                const plusBtn = document.getElementById("toggleExtraBtns");
                const extraBtns = document.querySelector(".extra-buttons");

                plusBtn.addEventListener("click", () => {
                    if (extraBtns.style.display === "none" || extraBtns.style.display === "") {
                        extraBtns.style.display = "flex";
                        plusBtn.style.display = "none";
                    } else {
                        extraBtns.style.display = "none";
                    }
                });
            </script>


            <div style="display: flex; justify-content: space-around;">
                <button class="post-action-button">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-image">
                        <rect width="18" height="18" x="3" y="3" rx="2" ry="2"/>
                        <circle cx="9" cy="9" r="2"/>
                        <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/>
                    </svg>
                    Photo
                </button>
                <button class="post-action-button">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play-square">
                        <rect width="18" height="18" x="3" y="3" rx="2"/>
                        <path d="m10 8 6 4-6 4Z"/>
                    </svg>
                    Video
                </button>
                <button class="post-action-button">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-edit">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                    </svg>
                    Write article
                </button>
            </div>
        </div>

        <!-- Example Post Card -->
        <div id="posts-container">
            <!--  script-->
        </div>
        <div style="text-align:center; margin-top: 20px;">
            <button id="loadMoreBtn">Load More</button>
        </div>


    </main>

    <!-- Right Sidebar -->
    <aside class="right-sidebar">
        <div class="card news-card">
            <div class="card-header">LinkedIn News</div>
            <ul>
                <li class="news-item">
                    <span class="bullet">•</span>
                    <div class="news-item-content">
                        <h3>TVS Motors names new Chairman</h3>
                        <p>3m ago • 250 readers</p>
                    </div>
                </li>
                <li class="news-item">
                    <span class="bullet">•</span>
                    <div class="news-item-content">
                        <h3>Amul launches in Europe</h3>
                        <p>3m ago • 150 readers</p>
                    </div>
                </li>
                <li class="news-item">
                    <span class="bullet">•</span>
                    <div class="news-item-content">
                        <h3>White House issues travel ban</h3>
                        <p>2h ago • 50 readers</p>
                    </div>
                </li>
                <li class="news-item">
                    <span class="bullet">•</span>
                    <div class="news-item-content">
                        <h3>Banks invest in mutual funds</h3>
                        <p>1h ago • 120 readers</p>
                    </div>
                </li>
                <li class="news-item">
                    <span class="bullet">•</span>
                    <div class="news-item-content">
                        <h3>Starting firms focus on DDCs</h3>
                        <p>4h ago • 80 readers</p>
                    </div>
                </li>
            </ul>
            <a href="#"
               style="text-decoration: none; color: #0a66c2; font-size: 14px; font-weight: 600; display: block; margin-top: 12px;">Show
                more</a>
        </div>

        <div class="card puzzle-card" style="margin-top: 12px;">
            <div class="card-header">Today's puzzle</div>
            <img src="https://placehold.co/260x100/f0f0f0/333333?text=A+quick+brain+teaser" alt="Today's Puzzle">
            <p style="font-size: 12px; color: #666; margin-top: 8px;">A quick brain teaser for you!</p>
        </div>

        <!-- More sections like ads or follow suggestions can go here -->
    </aside>
</div>

<!--toggle input button-->
<script>
    const openModalBtn = document.getElementById('openModalBtn');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const modal = document.getElementById('postModal');
    const overlay = document.getElementById('overlay');

    openModalBtn.onclick = () => {
        modal.style.display = 'block';
        overlay.style.display = 'block';
    };

    closeModalBtn.onclick = () => {
        modal.style.display = 'none';
        overlay.style.display = 'none';
    };

    window.onclick = (e) => {
        if (e.target === overlay) {
            modal.style.display = 'none';
            overlay.style.display = 'none';
        }
    };
</script>

<!--nav-icon-link clickable-->
<script>
    document.querySelectorAll('.nav-icon-link').forEach(link => {
        link.addEventListener('click', function () {
            document.querySelectorAll('.nav-icon-link').forEach(el => el.classList.remove('active'));
            this.classList.add('active');
        });
    });
</script>


<!--jquery-->


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    let userProfilePic = '';

    function encodedProfileImage(fileName){
        if (fileName){
            return 'https://wooble.org/dms/' + btoa(fileName);;
        }else{
            return 'https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png?20150327203541';
        }
    }

    function encodedPostImage(fileName){
        if (fileName){
            return 'https://wooble.org/dms/' + btoa(fileName);
        }
    }

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
                    document.getElementById('name').innerHTML = response.data.name;
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
                    userProfilePic = 'https://wooble.org/dms/' + reEncoded;

                    document.getElementById('profile-icon').src = userProfilePic;
                    document.getElementById('profile-image').src = userProfilePic;
                    document.getElementById('profileicon').src = userProfilePic;

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


        let page = 0;
        const limit = 1005;
        let isLoading = false;

// Main fetch function
        function fetchPosts() {
            if (isLoading) return;

            isLoading = true;
            page++;

            console.log("Fetching page:", page);

            const apiUrl = `https://wooble.io/feed/discussion_api/fetch_personalised_questions.php?limit=${limit}&page=${page}`;

            fetch(apiUrl)
                .then(res => res.json())
                .then(response => {
                    console.log('Feed response:', response);
                    if (response.success) {
                        posts_Container(response.data);
                    }
                })
                .catch(err => console.error('Fetch error:', err))
                .finally(() => {
                    isLoading = false;
                });
        }

// Infinite scroll handler
        window.addEventListener("scroll", () => {
            const nearBottom = window.innerHeight + window.scrollY >= document.body.offsetHeight - 100;
            if (nearBottom) {
                fetchPosts();
            }
        });

// Initial load
        fetchPosts();

    })();

    function posts_Container(data) {
        console.log('API Response posts_Container', data);

        const postsdata = [];

        data.forEach(function (data) {
            postsdata.push({
                author: data.name,
                profilePic: encodedProfileImage(data.profile_pic),
                timestamp: data.timestamp,
                secondaryInfo: data.profession,
                content: data.question_text,
                image: encodedPostImage(data.answerer_profile_pic),
                likes_count: data.likes_count,
                comments_count: data.comments_count,
                question_text: data.question_text,
                question_id: data.question_id,
            });
        });

        console.log('postsdata', postsdata);

        const postsContainer = document.getElementById("posts-container");


        postsdata.forEach((data, index) => {
            const postCard = document.createElement('div');
            postCard.classList.add('card', 'post-card');

            postCard.innerHTML = `
            <div class="post-header">
                <img src="${data.profilePic}" alt="${data.author}" class="post-profile-pic">
                <div class="post-meta">
                    <div class="post-author">${data.author}
                        <a href="#" style="text-decoration: none;"> <span
                                style="color: #0a66c2; cursor: pointer; position: relative; font-weight: 700;">+ Follow</span></a>
                    </div>
                    <div class="post-timestamp">${data.timestamp}</div>
                    <div class="post-timestamp">${data.secondaryInfo}</div>
                </div>
            </div>
            <div class="post-content">
                ${data.content}
      </a></p>
            </div>
        ${data.image ? `<img src="${data.image}" alt="${data.content}" class="post-image">` : ''}
              <!--   <p style="font-size: 10px; color: gray;"> ${data.likes_count} Likes . ${data.comments_count} Comment </p> -->

           <div class="post-actions" data-question-id="${data.question_id}">

                <button class="post-action-button comment-toggle-btn" id="likes_count">
                  Like
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
  <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
</svg>
                </button>
            <button class="post-action-button comment-toggle-btn" data-question-id="${data.question_id}">
  Comment
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
    <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105"/>
  </svg>
</button>
                <button class="post-action-button" id="#">
                    Repost
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-repeat">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                        <path d="m17 9 4-4-4-4"/>
                        <path d="M3 11v-4a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v4"/>
                    </svg>
                </button>
                <button class="post-action-button" id="#">
                    Send
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                        <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z"/>
                    </svg>
                </button>
            </div>


        <!-- Comment box, initially hidden -->

        <div class="comment-box"></div>

        `;
            postsContainer.appendChild(postCard);
        });
    }


    document.addEventListener("click", async function (e) {
        const toggleBtn = e.target.closest(".comment-toggle-btn");
        if (toggleBtn) {
            const postActions = toggleBtn.closest(".post-actions");
            const questionId = toggleBtn.dataset.questionId;

            const commentBox = postActions.nextElementSibling;



            const isVisible = commentBox.style.display === "block";
            commentBox.style.display = isVisible ? "none" : "block";

            // If the commentBox is being hidden, clear its content
            if (isVisible) {
                commentBox.innerHTML = '';
                return;
            }

            commentBox.innerHTML = '<p>Loading comments...</p>';


            $.ajax({
                url: 'https://wooble.io/feed/discussion_api/fetch_questionComments.php',
                method: 'POST',
                dataType: 'json',
                data: {question_id: questionId},
                success: function (response) {
                    console.log(response);
                    if (response.success === true && Array.isArray(response.comments)) {
                        populateCommentBox(response.comments, commentBox);
                                } else {
                        // Handle no comments case
                        commentBox.innerHTML = '<p>No comments found for this question.</p>';
                    }

                },
                error: function (xhr, status, error) {
                    console.error('API Error:', xhr.responseText, status, error);

                }
            });

            // This function will take the array of comments and the target div
            function populateCommentBox(comments, targetCommentBox) {

                targetCommentBox.innerHTML = '';


                const newCommentInputSection = document.createElement('div');
                newCommentInputSection.className = 'new-comment-input-section';
                newCommentInputSection.style.display = 'flex';
                newCommentInputSection.style.alignItems = 'center';
                newCommentInputSection.style.marginBottom = '15px';

                newCommentInputSection.innerHTML = `
        <img
            onerror="this.src ='https://t3.ftcdn.net/jpg/05/16/27/58/360_F_516275801_f3Fsp17x6HQK0xQgDQEELoTuERO4SsWV.jpg'"
            src="${userProfilePic}"
            alt="Your Profile Picture" id="profile-icon"
            class="post-profile-pic"
            style="width: 35px; height: 35px; border-radius: 50%; object-fit: cover; margin-right: 10px; ">

        <input type="text" placeholder="Add a comment..." class="comment-input"
               style="flex-grow: 1; padding: 12px; border: 1px solid #e0e0e0; border-radius: 24px; outline: none; font-size: 15px; margin-top: 10px">
    `;

                targetCommentBox.appendChild(newCommentInputSection);


                comments.forEach(comment => {
                    const commentDiv = document.createElement('div');
                    commentDiv.className = 'single-comment';

                    commentDiv.innerHTML = `
            <div class="comment-header" style="display: flex; align-items: center; margin-bottom: 5px;">

                <img src="${ encodedProfileImage(comment.profile_pic)}" alt="profile"
                     style="width: 30px; height: 30px; border-radius: 50%; margin-right: 10px;">
                <div>
                    <div class="comment-author" style="font-weight: bold;">${comment.username || 'Anonymous'}</div>
                    <div class="comment-profession" style="font-size: 12px; color: #666;">${comment.profession || ''}</div>
                </div>
            </div>
            <div class="comment-text" style="margin-left: 40px; font-size: 14px;">
                ${comment.comment_text}
            </div>
            <hr style="border: none; border-top: 1px solid #eee; margin: 10px 0;">
        `;
                    targetCommentBox.appendChild(commentDiv);
                });
            }
        }
    });
</script>


</body>
</html>
