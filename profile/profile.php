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
        <link rel="stylesheet" href="../Portfolio_2/style.css">
        
    <title>Profile Page</title>
</head>

<style>
    body {
        background-color: rgb(241, 213, 241);
    }

    .container-fluid svg {
        height: 20px;
        width: 20px;
        transition: all 0.3s ease;
    }

    .container-fluid svg:hover {
        cursor: pointer;
        height: 23px;
        width: 23px;
    }

    .carousel-item {
        align-items: center;

    }

    .carousel-item img {
        min-width: 92%;
        height: auto;
        margin: 5rem auto;
        object-fit: cover;
        
    }

    .card-group {
        margin-left: 3.5rem;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1rem;

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
    .icons-item svg{
            height: 18px;
            width: 18px;
    }
    nav{
        background-color: rgb(188, 124, 188);
        width: 92%;
        margin: 0 auto;
        margin-bottom: 2rem;
    box-shadow: inset 4px 4px 17px rgb(181, 160, 181);       
        
    }
</style>

<body>
    <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Profile Page</a>
        </div>
        <div class="container-fluid">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search here people and pages"
                    aria-label="Search" />
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots"
                viewBox="0 0 16 16">
                <path
                    d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                <path
                    d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell"
                viewBox="0 0 16 16">
                <path
                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
            </svg>
        </div>
        </div>

        <div class="container-fluid">
            <a class="navbar-brand" href="#">Profile Image</a>
        </div>
    </nav> -->

        <!-- navbar -->
          <?php include '../Portfolio_2/components/nav-bar.php'; ?>
           
        

    <!-- carousel -->
    <section>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images.jpeg" class="d-block" alt="image not found">
                </div>
            </div>
        </div>
    </section>

<!-- navbar  -->
 <nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">James's friend (86)</a>
      
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


    <!-- cards -->
    <section class="card-group align-items-center">

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
                    </svg></div>
                    <div class="icons-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                        <path
                            d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                        <path
                            d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                    </svg></div>
                    
                     
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
                    </svg></div>
                    <div class="icons-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                        <path
                            d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                        <path
                            d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                    </svg></div>
                    
                     
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
                    </svg></div>
                    <div class="icons-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                        <path
                            d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                        <path
                            d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                    </svg></div>
                    
                     
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
                    </svg></div>
                    <div class="icons-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                        <path
                            d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                        <path
                            d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                    </svg></div>
                    
                     
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
                    </svg></div>
                    <div class="icons-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                        <path
                            d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                        <path
                            d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                    </svg></div>
                    
                     
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
                    </svg></div>
                    <div class="icons-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                        <path
                            d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                        <path
                            d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                    </svg></div>
                    
                     
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
                    </svg></div>
                    <div class="icons-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                        <path
                            d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                        <path
                            d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                    </svg></div>
                    
                     
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
                    </svg></div>
                    <div class="icons-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                        <path
                            d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                        <path
                            d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                    </svg></div>
                    
                     
                </div>
                


            </div>
        </div>

    </section>

</body>

</html>