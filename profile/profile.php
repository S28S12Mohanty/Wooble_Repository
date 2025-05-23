<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>profile</title>
  </head>

  <body>
    <!-- header -->
    <header class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Profile Image</a>

        <button
          class="navbar-toggler fs-6"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon" style="background-size: 68%"></span>
        </button>

        <div
          class="collapse navbar-collapse"
          id="navbarSupportedContent"
          style="margin-top: 10px"
        >
          <form class="d-flex ms-auto order-lg-last" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search here people and pages"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>

          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-person-circle"
                  viewBox="0 0 16 16"
                >
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                  <path
                    fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"
                  />
                </svg>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-chat-dots"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"
                  />
                  <path
                    d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 0-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2"
                  />
                </svg>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-bell"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"
                  />
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </header>

    <!-- First Section -->

    <section class="first-section container">
      <div class="card">
        <img src="images.jpeg" class="img-fluid w-100" alt="Img not found" />
        <div class="card-body text-center">
            <div class="scrolling-tabs">
                <ul class="nav flex-nowrap">
                    <li class="nav-link text-dark" id="timeline">Timeline</li>
                    <li class="nav-link text-dark" id="friends">Friends</li>
                    <li class="nav-link text-dark" id="photos">Photos</li>
                    <li class="nav-link text-dark" id="videos">Videos</li>
                    <li class="nav-link text-dark">Timeline</li>
                    <li class="nav-link text-dark">Friends</li>
                    <li class="nav-link text-dark">Photos</li>
                    <li class="nav-link text-dark">Videos</li>
                    <li class="nav-link text-dark">Photos</li>
                    <li class="nav-link text-dark">Videos</li>
                    <li class="nav-link text-dark">Timeline</li>
                    <li class="nav-link text-dark">Friends</li>
                    <li class="nav-link text-dark">Photos</li>
                    <li class="nav-link text-dark">Videos</li>
                    <li class="nav-link text-dark">Photos</li>
                    <li class="nav-link text-dark">Videos</li>
                </ul>
            </div>
        </div>
        <div class="image-class">
          <div class="image-create">
            <img
              src="face.jpg"
              alt="img not found"
              class="position-absolute start-50 translate-middle rounded-circle object-fit-cover border border-5 border-white"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- TimeLine -->
    <div id="content-section">
      <div id="timelineContent" class="content-section" style="display: none">
        <div class="timeline-section">
            <div class="timeline-item">
                <div class="timeline-date">8</div>
                <div class="timeline-card">
                    <h6>Laravel</h6>
                    <p>CTTC</p>
                    <span class="timeline-tag tag-certification">certification</span>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-date">7</div>
                <div class="timeline-card">
                    <h6>Laravel 2</h6>
                    <p>CTTC</p>
                    <span class="timeline-tag tag-certification">certification</span>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-date">6</div>
                <div class="timeline-card">
                    <h6>Gandhi Institute x</h6>
                    <p>B-tech</p>
                    <span class="timeline-tag tag-education">education</span>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-date">5</div>
                <div class="timeline-card">
                    <h6>te inst</h6>
                    <p>te deg</p>
                    <span class="timeline-tag tag-education">education</span>
                </div>
            </div>

            </div>
        
      </div>
    </div>

    <!-- Friends -->
    <section class="second-section">
      <div
        id="friendsContent"
        style="display: none"
        class="content-section"
        id="friendsContent"
      >
        <!-- search -->
        <div>
          <header class="navbar navbar-expand-lg bg-light p-2">
            <div class="container-fluid">
              <span class="navbar-brand mb-0 h1">James's Friends (86)</span>

              <form class="d-flex ms-auto" role="search">
                <input
                  class="form-control me-2"
                  type="search"
                  placeholder="Search..."
                  aria-label="Search"
                />
                <button class="btn btn-outline-primary" type="submit">
                  Search
                </button>
              </form>
            </div>
          </header>
        </div>

        <div class="card-group">
          <!-- card-1 -->
          <div class="card" style="width: 18rem">
            <img
              src="img1.jpeg"
              class="w-100% object-fit-cover"
              alt="img not found"
            />
            <span class="image-create">
              <img
                src="face.jpg"
                alt="img not found"
                class="position-absolute start-50 translate-middle rounded-circle object-fit-cover border border-5 border-white"
              />
            </span>
            <div
              class="card-body text-center position-relative translate-middle-y"
            >
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

            <div class="card-body">
              <div class="icons">
                <div class="icons-item">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-person-circle"
                    viewBox="0 0 16 16"
                  >
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path
                      fill-rule="evenodd"
                      d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"
                    />
                  </svg>
                </div>
                <div class="icons-item">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-chat-left-dots"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"
                    />
                    <path
                      d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <!-- card-2 -->
          <div class="card" style="width: 18rem">
            <img
              src="img2.webp"
              class="w-100% object-fit-cover"
              alt="img not found"
            />
            <span class="image-create">
              <img
                src="face.jpg"
                alt="img not found"
                class="position-absolute start-50 translate-middle rounded-circle object-fit-cover border border-5 border-white"
              />
            </span>
            <div
              class="card-body text-center position-relative translate-middle-y"
            >
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

            <div class="card-body">
              <div class="icons">
                <div class="icons-item">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-person-circle"
                    viewBox="0 0 16 16"
                  >
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path
                      fill-rule="evenodd"
                      d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"
                    />
                  </svg>
                </div>
                <div class="icons-item">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-chat-left-dots"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"
                    />
                    <path
                      d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <!-- card-3 -->
          <div class="card" style="width: 18rem">
            <img
              src="img3.jpeg"
              class="w-100% object-fit-cover"
              alt="img not found"
            />
            <span class="image-create">
              <img
                src="face.jpg"
                alt="img not found"
                class="position-absolute start-50 translate-middle rounded-circle object-fit-cover border border-5 border-white"
              />
            </span>
            <div
              class="card-body text-center position-relative translate-middle-y"
            >
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

            <div class="card-body">
              <div class="icons">
                <div class="icons-item">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-person-circle"
                    viewBox="0 0 16 16"
                  >
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path
                      fill-rule="evenodd"
                      d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"
                    />
                  </svg>
                </div>
                <div class="icons-item">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-chat-left-dots"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"
                    />
                    <path
                      d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <!-- card-4 -->
          <div class="card" style="width: 18rem">
            <img
              src="img4.jpeg"
              class="w-100% object-fit-cover"
              alt="img not found"
            />
            <span class="image-create">
              <img
                src="face.jpg"
                alt="img not found"
                class="position-absolute start-50 translate-middle rounded-circle object-fit-cover border border-5 border-white"
              />
            </span>
            <div
              class="card-body text-center position-relative translate-middle-y"
            >
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

            <div class="card-body">
              <div class="icons">
                <div class="icons-item">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-person-circle"
                    viewBox="0 0 16 16"
                  >
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path
                      fill-rule="evenodd"
                      d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"
                    />
                  </svg>
                </div>
                <div class="icons-item">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-chat-left-dots"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"
                    />
                    <path
                      d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <!-- card-5 -->
          <div class="card" style="width: 18rem">
            <img
              src="img1.jpeg"
              class="w-100% object-fit-cover"
              alt="img not found"
            />
            <span class="image-create">
              <img
                src="face.jpg"
                alt="img not found"
                class="position-absolute start-50 translate-middle rounded-circle object-fit-cover border border-5 border-white"
              />
            </span>
            <div
              class="card-body text-center position-relative translate-middle-y"
            >
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

            <div class="card-body">
              <div class="icons">
                <div class="icons-item">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-person-circle"
                    viewBox="0 0 16 16"
                  >
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path
                      fill-rule="evenodd"
                      d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"
                    />
                  </svg>
                </div>
                <div class="icons-item">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-chat-left-dots"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"
                    />
                    <path
                      d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <!-- card-6 -->
          <div class="card" style="width: 18rem">
            <img
              src="img2.webp"
              class="w-100% object-fit-cover"
              alt="img not found"
            />
            <span class="image-create">
              <img
                src="face.jpg"
                alt="img not found"
                class="position-absolute start-50 translate-middle rounded-circle object-fit-cover border border-5 border-white"
              />
            </span>
            <div
              class="card-body text-center position-relative translate-middle-y"
            >
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

            <div class="card-body">
              <div class="icons">
                <div class="icons-item">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-person-circle"
                    viewBox="0 0 16 16"
                  >
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path
                      fill-rule="evenodd"
                      d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"
                    />
                  </svg>
                </div>
                <div class="icons-item">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-chat-left-dots"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"
                    />
                    <path
                      d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <!-- card-7 -->
          <div class="card" style="width: 18rem">
            <img
              src="img3.jpeg"
              class="w-100% object-fit-cover"
              alt="img not found"
            />
            <span class="image-create">
              <img
                src="face.jpg"
                alt="img not found"
                class="position-absolute start-50 translate-middle rounded-circle object-fit-cover border border-5 border-white"
              />
            </span>
            <div
              class="card-body text-center position-relative translate-middle-y"
            >
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

            <div class="card-body">
              <div class="icons">
                <div class="icons-item">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-person-circle"
                    viewBox="0 0 16 16"
                  >
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path
                      fill-rule="evenodd"
                      d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"
                    />
                  </svg>
                </div>
                <div class="icons-item">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-chat-left-dots"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"
                    />
                    <path
                      d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <!-- card-8 -->
          <div class="card" style="width: 18rem">
            <img
              src="img4.jpeg"
              class="w-100% object-fit-cover"
              alt="img not found"
            />
            <span class="image-create">
              <img
                src="face.jpg"
                alt="img not found"
                class="position-absolute start-50 translate-middle rounded-circle object-fit-cover border border-5 border-white"
              />
            </span>
            <div
              class="card-body text-center position-relative translate-middle-y"
            >
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

            <div class="card-body">
              <div class="icons">
                <div class="icons-item">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-person-circle"
                    viewBox="0 0 16 16"
                  >
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path
                      fill-rule="evenodd"
                      d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"
                    />
                  </svg>
                </div>
                <div class="icons-item">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-chat-left-dots"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"
                    />
                    <path
                      d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Photos -->
    <div id="photosContent" class="content-section container my-4" style="display: none;">
  <div class="row g-3">
    <div class="col-6 col-sm-4 col-md-3 col-xl-2">
      <div class="image-wrapper">
        <img src="img1.jpeg" alt="Img not found" class="img-fluid rounded shadow-sm" />
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-3 col-xl-2">
      <div class="image-wrapper">
        <img src="img2.webp" alt="Img not found" class="img-fluid rounded shadow-sm" />
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-3 col-xl-2">
      <div class="image-wrapper">
        <img src="img3.jpeg" alt="Img not found" class="img-fluid rounded shadow-sm" />
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-3 col-xl-2">
      <div class="image-wrapper">
        <img src="img4.jpeg" alt="Img not found" class="img-fluid rounded shadow-sm" />
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-3 col-xl-2">
      <div class="image-wrapper">
        <img src="img1.jpeg" alt="Img not found" class="img-fluid rounded shadow-sm" />
      </div>
    </div>
    <div class="col-6 col-sm-4 col-md-3 col-xl-2">
      <div class="image-wrapper">
        <img src="img2.webp" alt="Img not found" class="img-fluid rounded shadow-sm" />
      </div>
    </div>
  </div>
</div>


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
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const timeline = document.getElementById("timeline");
        const friends = document.getElementById("friends");
        const photos = document.getElementById("photos");
        const videos = document.getElementById("videos");

        const contentSections = document.querySelectorAll(".content-section");
        const timelineContent = document.getElementById("timelineContent");
        const friendsContent = document.getElementById("friendsContent");
        const photosContent = document.getElementById("photosContent");
        const videosContent = document.getElementById("videosContent");

        // Function to hide all content sections
        function hideAllContentSections() {
          contentSections.forEach((section) => {
            section.style.display = "none";
          });
        }

        // Event listener for Timeline
        timeline.addEventListener("click", function () {
          hideAllContentSections();
          timelineContent.style.display = "block";
        });

        // Event listener for Friends
        friends.addEventListener("click", function () {
          hideAllContentSections();
          friendsContent.style.display = "block";
        });

        // Event listener for Photos
        photos.addEventListener("click", function () {
          hideAllContentSections();
          photosContent.style.display = "block";
        });

        // Event listener for Videos
        videos.addEventListener("click", function () {
          hideAllContentSections();
          videosContent.style.display = "block";
        });

        // Initially show the Timeline content (or any default section you prefer)
        hideAllContentSections();
        timelineContent.style.display = "block";
      });
      document.querySelectorAll('.scrolling-tabs .nav-link').forEach(tab => {
          tab.addEventListener('click', function () {
              // Remove active from all tabs
              document.querySelectorAll('.scrolling-tabs .nav-link').forEach(t => t.classList.remove('active'));
              // Add active to clicked tab
              this.classList.add('active');

          });
      });
    </script>

  </body>
</html>
