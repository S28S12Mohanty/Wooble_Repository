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

        <div class="profile-card profile-pic">
            <div class="profile-bg">
                <!-- Placeholder for background image -->
                <img src="#"
                     alt="banner-img not found" id="banner_img"
                     style="width: 100%; height: 100%; object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px;">
            </div>

            <img src="#"
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

        <div class="profile-cards-item">
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
        </div>

        <!--toggle button-->
        <button class="see-more-btn d-md-none">
            See more
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                 fill="currentColor" class="bi bi-chevron-compact-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                      d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67"/>
            </svg>
        </button>

    </aside>


    <!-- Main Content Area (Feed) -->
    <main class="main-content-area">
        <!-- Create Post Section (Simplified) -->
        <div class="card">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                <img src="#"
                     data-user-id="123"
                     alt="Your Profile Picture"
                     id="profile-icon"
                     class="post-profile-pic  profile-pic"
                     style="width: 45px; height: 45px; border-radius: 50%; object-fit: cover;">
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

<!--seemore seeless toggle button-->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const seeMoreBtn = document.querySelector('.see-more-btn');
        const profilecardsitem = document.querySelector('.profile-cards-item');

        seeMoreBtn.addEventListener('click', function () {
            profilecardsitem.classList.toggle('show');

            const isShown = profilecardsitem.classList.contains('show');
            const label = isShown ? 'See less' : 'See more';
            const icon = isShown
                ? `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                           class="bi bi-chevron-compact-up" viewBox="0 0 16 16">
                       <path fill-rule="evenodd"
                             d="M7.776 5.553a.5.5 0 0 1 .448 0l6 3a.5.5 0 1 1-.448.894L8 6.56 2.224 9.447a.5.5 0 1 1-.448-.894z"/>
                   </svg>`
                : `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                           class="bi bi-chevron-compact-down" viewBox="0 0 16 16">
                       <path fill-rule="evenodd"
                             d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67"/>
                   </svg>`;

            this.innerHTML = `${label} ${icon}`;
        });
    });
</script>


<!--jquery-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    let userProfilePic = '';

    function encodedProfileImage(fileName) {
        if (fileName) {
            return 'https://wooble.org/dms/' + btoa(fileName);
            ;
        } else {
            return 'https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png?20150327203541';
        }
    }

    function encodedPostImage(fileName) {
        if (fileName) {
            return 'https://wooble.org/dms/' + btoa(fileName);
        }
    }

    (function () {
        const username = sessionStorage.getItem('username');
        const email = sessionStorage.getItem('email');
        // fetch API for profile
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

        // visit my profile as a user
        document.addEventListener("DOMContentLoaded", function () {
            const profileCard = document.querySelector('.profile-pic');

            profileCard.addEventListener('click', function () {
                const userId = this.dataset.userId;
                console.log(" to profile for:", userId);
                window.location.href = '../profile/profile.php?username=' + username;
            });

        });


//for infinity scroll
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
                // likes_count: data.likes_count,
                // comments_count: data.comments_count,
                question_text: data.question_text,
                question_id: data.question_id,
                username: data.username,
            });
        });

        console.log('postsdata', postsdata);

        const postsContainer = document.getElementById("posts-container");


        postsdata.forEach((data, index) => {
            const postCard = document.createElement('div');
            postCard.classList.add('card', 'post-card');

            postCard.innerHTML = `
            <!--header-->
            <div class="post-header" data-email="${data.email}" data-username="${data.username}">
                <img src="${data.profilePic}" alt="${data.author}" class="post-profile-pic" data-username="${data.username}" style="cursor:pointer;">
                <div class="post-meta">
                    <div class="post-author" data-username="${data.username}" style="cursor:pointer;">${data.author}
                        <a href="#" style="text-decoration: none;"> <span
                                style="color: #0a66c2; cursor: pointer; position: relative; font-weight: 700;">+ Follow</span></a>
                    </div>
                    <div class="post-timestamp" data-username="${data.username}" style="cursor:pointer;">${data.timestamp}</div>
                    <div class="post-timestamp" data-username="${data.username}" style="cursor:pointer;">${data.secondaryInfo}</div>
                </div>
            </div>

            <!--content-->
            <div class="post-content">
                ${data.content}
      </a></p>
            </div>

            <!--post-image-->
        ${data.image ? `<img src="${data.image}" alt="${data.content}" class="post-image">` : ''}

              <!--   <p style="font-size: 10px; color: gray;"> ${data.likes_count} Likes . ${data.comments_count} Comment </p> -->


        <!--buttons work for like, comments, repost, send-->
           <div class="post-actions">
<!--like button-->
            <button class="post-action-button" id="#">
                  Like
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                    <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                 </svg>
            </button>

<!--comment button-->
            <button class="post-action-button comment-toggle-btn" data-question-id="${data.question_id}">
                Comment
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                    <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105"/>
                </svg>
            </button>

<!--repost button-->
                <button class="post-action-button" id="#">
                    Repost
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-repeat">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                        <path d="m17 9 4-4-4-4"/>
                        <path d="M3 11v-4a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v4"/>
                    </svg>
                </button>

<!--send button-->
                <button class="post-action-button" id="#">
                    Send
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                        <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z"/>
                    </svg>
                </button>

            </div>


        <!-- Comment box,hidden box-->
        <div class="comment-box">
            <!-- script-->
        </div>

        `;
            postsContainer.appendChild(postCard);
        });
    }

    // click Comments_button
    document.addEventListener("click", async function (e) {
        const toggleBtn = e.target.closest(".comment-toggle-btn");
        if (toggleBtn) {
            const postActions = toggleBtn.closest(".post-actions");
            const questionId = toggleBtn.dataset.questionId;

            const commentBox = postActions.nextElementSibling;
            const isVisible = commentBox.style.display === "block";
            commentBox.style.display = isVisible ? "none" : "block";

            commentBox.innerHTML = '<p>Loading...</p>';


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

                // comment-input-section
                const newCommentInputSection = document.createElement('div');
                newCommentInputSection.className = 'comment-input-section';

                newCommentInputSection.innerHTML = `
        <img
            onerror="this.src ='https://t3.ftcdn.net/jpg/05/16/27/58/360_F_516275801_f3Fsp17x6HQK0xQgDQEELoTuERO4SsWV.jpg'"
            src="${userProfilePic}"
            alt="Profile Picture"
            class="post-profile-pic"
            style="width: 35px; height: 35px; border-radius: 50%; object-fit: cover; margin-right: 10px; ">

        <input type="text" placeholder="Add a comment..." class="comment-input"
               style="flex-grow: 1; padding: 12px; border: 1px solid #e0e0e0; border-radius: 24px; outline: none; font-size: 15px; margin-top: 10px">
    `;

                targetCommentBox.appendChild(newCommentInputSection);

                // comments-users
                comments.forEach(comment => {
                    const commentDiv = document.createElement('div');
                    commentDiv.className = 'single-comment';

                    commentDiv.innerHTML = `
            <div class="comment-header" data-username="${comment.username}" style="display: flex; align-items: center; margin-bottom: 5px; cursor: pointer">

                <img src="${encodedProfileImage(comment.profile_pic)}" alt="profile not found"
                     style="width: 30px; height: 30px; border-radius: 50%; margin-right: 10px;">
                <div>
                    <div class="comment-author" style="font-weight: bold;">${comment.username}</div>
                    <div class="comment-profession" style="font-size: 12px; color: #666;">${comment.profession}</div>
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


    // visit another profile as a user
    document.addEventListener("click", function (e) {
        const postHeader = e.target.closest(".post-header");

        if (postHeader) {
            const username = postHeader.dataset.username;

            console.log("Navigating to profile for:", username);
            window.location.href = '../profile/profile.php?username=' + username;
        }
    });

    // visit another profile as a user (comments section)
    document.addEventListener("click", function (e) {
        const commentHeader = e.target.closest(".comment-header");

        if (commentHeader) {
            const username = commentHeader.dataset.username;
            console.log("Navigating to profile for:", username);
            window.location.href = '../profile/profile.php?username=' + username;
        }
    });


</script>


</body>
</html>
