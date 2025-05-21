<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>

   

    <title>Profile Page</title>
</head>

<style>
    body {
        background-color: rgb(238, 238, 238);
    }


    .card {
        width: 100%;
        height: auto;
        margin: 5rem auto;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .image-class {
        position: relative;
        top: -6rem;
        left: 50%;
        object-fit: cover;
        transform: translateX(-50%);
    }

     .card-group {
        display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
    padding: 5rem;
    margin-top: -5rem;
    } 

    .card-group img {
        height: 150px;
        border-radius: 5px;
    }

    .image-create img {
        height: 100px;
        width: 100px;
    }

    .card-body {
        top: 5rem;
    }

    .icons {
        display: flex;
        gap: 2rem;
        justify-content: center;
    }

    .icons-item {
        height: 30px;
        width: 30px;
        background-color: rgb(156, 10, 156);
        box-shadow: 0px 0px 0px 5px rgb(234, 182, 234);
        color: #fff;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: all 0.3s ease;
    }

    .icons-item:hover {
        cursor: pointer;
        background-color: rgb(234, 182, 234);
        box-shadow: 0px 0px 0px 5px rgb(151, 23, 151);
        color: rgb(156, 10, 156);
    }

    .icons-item svg {
        height: 18px;
        width: 18px;
    }

    .navbar {
        background-color: #ccccc8;
        width: 85%;
        margin: 0 auto;
        /* margin-bottom: 2rem; */
        border-radius: 5px;
    }
    button{
        border-radius: 10px;
    border: 2px solid gray;
    background-color: darkgray;
    color: floralwhite;
    font-size: 14px;
    }
    button:hover{
        background-color: grey;
    }

    .nav-item:hover {
        cursor: pointer;
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .profile-img {
        width: 100px;
        height: 100px;
        position: absolute;
        top: -50px;
        left: 50%;
        transform: translateX(-50%);
    }


    @media (max-width: 768px) {
        .card-group {
            margin-left: 0;
            justify-content: center;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        }

        .card {
            width: 95%;
            margin: 2rem auto;
        }

        .navbar {
            width: 90%;
        }

        .nav-link {
            font-size: 0.9rem;
        }
    }

    @media (max-width: 576px) {
        .card-group {
            grid-template-columns: 1fr;
            margin-left: 0;
            margin-top: 10px;
            padding: 0 1rem;
        }

        .card {
          margin: 1rem auto;
        padding: 2px;
        max-width: 85%;
        } 

        .nav-link {
            font-size: 0.8rem;
        }
        .navbar{
            width: 80%;
        }

        .image-class {
            top: -4rem;
        }

        .image-create img {
            width: 20%;
            height: 60px;
            position: relative;
            top: -9rem;

        }

        .nav-pills {
            flex-direction: column !important;
            align-items: center;
        }

        .nav-pills li:nth-child(3) {
            display: none;

        }

    }
</style>

  
<heade class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Profile Page</a>

        <button class="navbar-toggler fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-top: 10px;">
            <form class="d-flex ms-auto order-lg-last" role="search">
                <input class="form-control me-2" type="search" placeholder="Search here people and pages" aria-label="Search" />
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                            <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                            <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 0-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand nav-link" href="#">Profile Image</a>
                </li>
            </ul>
        </div>
    </div>
</heade>


<!-- First Section -->

<section class="first-section container">
    <div class="card">
        <img src="images.jpeg" class="img-fluid w-100" alt="Img not found">
        <div class="card-body text-center">
            <ul class="nav nav-pills flex-column flex-sm-row justify-content-around gap-2">
                <li class="nav-item">
                    <a class="nav-link text-dark" id="timeline">Timeline</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" id="friends">Friends</a>
                </li>

                <li>
                    <a class="nav-link fs-5 fw-bold text-dark ">John Sina</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" id="photos">Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" id="videos">Videos</a>
                </li>
            </ul>

        </div>
        <div class="image-class">
            <div class="image-create">
                <img src="face.jpg" alt="img not found"
                    class="position-absolute start-50 translate-middle rounded-circle object-fit-cover border border-5 border-white">
            </div>
        </div>


    </div>
</section>



<!-- TimeLine -->
<div id="contentContainer">
    <div id="timelineContent" class="content-section" style="display: none;">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
    </div>
</div>

<!-- Friends -->
 <section class="">
<div class="content-section" id="friendsContent" style="display: none;">
   <!-- search -->
    <div>
        <nav class="navbar navbar-expand-lg p-2">
            <div class="container-fluid">
                <h2 class="navbar-brand">James's friend (86)</h2>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>

    <!-- cards -->
    <div class="card-group">
        <div class="card" style="width: 18rem;">
            <img src="img1.jpeg" class="w-100% object-fit-cover" alt="img not found">
            <span class="image-create">
                <img src="face.jpg" alt="img not found"
                    class="position-absolute start-50 translate-middle rounded-circle object-fit-cover border border-5 border-white">
            </span>
            <div class="card-body text-center position-relative translate-middle-y">
                <h5 class="card-title">Marina Valentine</h5>
                <p class="card-text">About Me</p>
            </div>


            <div class="d-flex justify-content-around card-body">
                <div class="stat-item d-flex flex-column align-items-center">
                    <p class="fs-5 fw-bold">52</p>
                    <small>Friends</small>
                </div>
                <div class="stat-item d-flex flex-column align-items-center">
                    <p class="fs-5 fw-bold">240</p>
                    <small>Photos</small>
                </div>
                <div class="stat-item d-flex flex-column align-items-center">
                    <p class="fs-5 fw-bold">16</p>
                    <small>Videos</small>
                </div>
            </div>


            <div class="card-body ">
                <div class="icons">
                    <div class="icons-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                    </div>
                    <div class="icons-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                            <path
                                d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                            <path
                                d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                        </svg>
                    </div>


                </div>



            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="img2.webp" class="w-100% object-fit-cover" alt="img not found">
            <span class="image-create">
                <img src="face.jpg" alt="img not found"
                    class="position-absolute start-50 translate-middle rounded-circle object-fit-cover border border-5 border-white">
            </span>
            <div class="card-body text-center position-relative translate-middle-y">
                <h5 class="card-title">Marina Valentine</h5>
                <p class="card-text">About Me</p>
            </div>


            <div class="d-flex justify-content-around card-body">
                <div class="stat-item d-flex flex-column align-items-center">
                    <p class="fs-5 fw-bold">52</p>
                    <small>Friends</small>
                </div>
                <div class="stat-item d-flex flex-column align-items-center">
                    <p class="fs-5 fw-bold">240</p>
                    <small>Photos</small>
                </div>
                <div class="stat-item d-flex flex-column align-items-center">
                    <p class="fs-5 fw-bold">16</p>
                    <small>Videos</small>
                </div>
            </div>


            <div class="card-body ">
                <div class="icons">
                    <div class="icons-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                    </div>
                    <div class="icons-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                            <path
                                d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                            <path
                                d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                        </svg>
                    </div>


                </div>



            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="img3.jpeg" class="w-100% object-fit-cover" alt="img not found">
            <span class="image-create">
                <img src="face.jpg" alt="img not found"
                    class="position-absolute start-50 translate-middle rounded-circle object-fit-cover border border-5 border-white">
            </span>
            <div class="card-body text-center position-relative translate-middle-y">
                <h5 class="card-title">Marina Valentine</h5>
                <p class="card-text">About Me</p>
            </div>


            <div class="d-flex justify-content-around card-body">
                <div class="stat-item d-flex flex-column align-items-center">
                    <p class="fs-5 fw-bold">52</p>
                    <small>Friends</small>
                </div>
                <div class="stat-item d-flex flex-column align-items-center">
                    <p class="fs-5 fw-bold">240</p>
                    <small>Photos</small>
                </div>
                <div class="stat-item d-flex flex-column align-items-center">
                    <p class="fs-5 fw-bold">16</p>
                    <small>Videos</small>
                </div>
            </div>


            <div class="card-body ">
                <div class="icons">
                    <div class="icons-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                    </div>
                    <div class="icons-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                            <path
                                d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                            <path
                                d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                        </svg>
                    </div>


                </div>



            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="img4.jpeg" class="w-100% object-fit-cover" alt="img not found">
            <span class="image-create">
                <img src="face.jpg" alt="img not found"
                    class="position-absolute start-50 translate-middle rounded-circle object-fit-cover border border-5 border-white">
            </span>
            <div class="card-body text-center position-relative translate-middle-y">
                <h5 class="card-title">Marina Valentine</h5>
                <p class="card-text">About Me</p>
            </div>


            <div class="d-flex justify-content-around card-body">
                <div class="stat-item d-flex flex-column align-items-center">
                    <p class="fs-5 fw-bold">52</p>
                    <small>Friends</small>
                </div>
                <div class="stat-item d-flex flex-column align-items-center">
                    <p class="fs-5 fw-bold">240</p>
                    <small>Photos</small>
                </div>
                <div class="stat-item d-flex flex-column align-items-center">
                    <p class="fs-5 fw-bold">16</p>
                    <small>Videos</small>
                </div>
            </div>


            <div class="card-body ">
                <div class="icons">
                    <div class="icons-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                    </div>
                    <div class="icons-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                            <path
                                d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                            <path
                                d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                        </svg>
                    </div>


                </div>



            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="img1.jpeg" class="w-100% object-fit-cover" alt="img not found">
            <span class="image-create">
                <img src="face.jpg" alt="img not found"
                    class="position-absolute start-50 translate-middle rounded-circle object-fit-cover border border-5 border-white">
            </span>
            <div class="card-body text-center position-relative translate-middle-y">
                <h5 class="card-title">Marina Valentine</h5>
                <p class="card-text">About Me</p>
            </div>


            <div class="d-flex justify-content-around card-body">
                <div class="stat-item d-flex flex-column align-items-center">
                    <p class="fs-5 fw-bold">52</p>
                    <small>Friends</small>
                </div>
                <div class="stat-item d-flex flex-column align-items-center">
                    <p class="fs-5 fw-bold">240</p>
                    <small>Photos</small>
                </div>
                <div class="stat-item d-flex flex-column align-items-center">
                    <p class="fs-5 fw-bold">16</p>
                    <small>Videos</small>
                </div>
            </div>


            <div class="card-body ">
                <div class="icons">
                    <div class="icons-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                    </div>
                    <div class="icons-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                            <path
                                d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                            <path
                                d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                        </svg>
                    </div>


                </div>



            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="img2.webp" class="w-100% object-fit-cover" alt="img not found">
            <span class="image-create">
                <img src="face.jpg" alt="img not found"
                    class="position-absolute start-50 translate-middle rounded-circle object-fit-cover border border-5 border-white">
            </span>
            <div class="card-body text-center position-relative translate-middle-y">
                <h5 class="card-title">Marina Valentine</h5>
                <p class="card-text">About Me</p>
            </div>


            <div class="d-flex justify-content-around card-body">
                <div class="stat-item d-flex flex-column align-items-center">
                    <p class="fs-5 fw-bold">52</p>
                    <small>Friends</small>
                </div>
                <div class="stat-item d-flex flex-column align-items-center">
                    <p class="fs-5 fw-bold">240</p>
                    <small>Photos</small>
                </div>
                <div class="stat-item d-flex flex-column align-items-center">
                    <p class="fs-5 fw-bold">16</p>
                    <small>Videos</small>
                </div>
            </div>


            <div class="card-body ">
                <div class="icons">
                    <div class="icons-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                    </div>
                    <div class="icons-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                            <path
                                d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                            <path
                                d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                        </svg>
                    </div>


                </div>



            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="img3.jpeg" class="w-100% object-fit-cover" alt="img not found">
            <span class="image-create">
                <img src="face.jpg" alt="img not found"
                    class="position-absolute start-50 translate-middle rounded-circle object-fit-cover border border-5 border-white">
            </span>
            <div class="card-body text-center position-relative translate-middle-y">
                <h5 class="card-title">Marina Valentine</h5>
                <p class="card-text">About Me</p>
            </div>


            <div class="d-flex justify-content-around card-body">
                <div class="stat-item d-flex flex-column align-items-center">
                    <p class="fs-5 fw-bold">52</p>
                    <small>Friends</small>
                </div>
                <div class="stat-item d-flex flex-column align-items-center">
                    <p class="fs-5 fw-bold">240</p>
                    <small>Photos</small>
                </div>
                <div class="stat-item d-flex flex-column align-items-center">
                    <p class="fs-5 fw-bold">16</p>
                    <small>Videos</small>
                </div>
            </div>


            <div class="card-body ">
                <div class="icons">
                    <div class="icons-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                    </div>
                    <div class="icons-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                            <path
                                d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                            <path
                                d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                        </svg>
                    </div>


                </div>



            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="img4.jpeg" class="w-100% object-fit-cover" alt="img not found">
            <span class="image-create">
                <img src="face.jpg" alt="img not found"
                    class="position-absolute start-50 translate-middle rounded-circle object-fit-cover border border-5 border-white">
            </span>
            <div class="card-body text-center position-relative translate-middle-y">
                <h5 class="card-title">Marina Valentine</h5>
                <p class="card-text">About Me</p>
            </div>


            <div class="d-flex justify-content-around card-body">
                <div class="stat-item d-flex flex-column align-items-center">
                    <p class="fs-5 fw-bold">52</p>
                    <small>Friends</small>
                </div>
                <div class="stat-item d-flex flex-column align-items-center">
                    <p class="fs-5 fw-bold">240</p>
                    <small>Photos</small>
                </div>
                <div class="stat-item d-flex flex-column align-items-center">
                    <p class="fs-5 fw-bold">16</p>
                    <small>Videos</small>
                </div>
            </div>


            <div class="card-body ">
                <div class="icons">
                    <div class="icons-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                    </div>
                    <div class="icons-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                            <path
                                d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                            <path
                                d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                        </svg>
                    </div>


                </div>



            </div>
        </div>
    </div>
</div>
</section>


<!-- Photos -->
<div id="photosContent" class="content-section" style="display: none;">
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
    <img src="#" alt="Img not Found">
    <img src="#" alt="Img not Found">
</div>


<!-- Videos -->
<div id="videosContent" class="content-section" style="display: none;">
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, excepturi?</p>
</div>










<!-- javascript -->
<script>
    document.addEventListener('DOMContentLoaded', function () {

        const timeline = document.getElementById('timeline');
        const friends = document.getElementById('friends');
        const photos = document.getElementById('photos');
        const videos = document.getElementById('videos');


        const contentSections = document.querySelectorAll('.content-section');
        const timelineContent = document.getElementById('timelineContent');
        const friendsContent = document.getElementById('friendsContent');
        const photosContent = document.getElementById('photosContent');
        const videosContent = document.getElementById('videosContent');


        function hideAllContent() {
            contentSections.forEach(section => {
                section.style.display = 'none';
            });
        }


        timeline.addEventListener('click', function (event) {
            event.preventDefault();
            hideAllContent();
            timelineContent.style.display = 'block';
        });

        friends.addEventListener('click', function (event) {
            event.preventDefault();
            hideAllContent();
            friendsContent.style.display = 'block';
        });

        photos.addEventListener('click', function (event) {
            event.preventDefault();
            hideAllContent();
            photosContent.style.display = 'block';
        });

        videos.addEventListener('click', function (event) {
            event.preventDefault();
            hideAllContent();
            videosContent.style.display = 'block';
        });

    });
</script>
</body>

</html>