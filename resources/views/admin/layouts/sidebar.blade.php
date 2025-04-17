  <!-- Start::app-sidebar -->
  <aside class="app-sidebar" id="sidebar">

      <!-- Start::main-sidebar-header -->
      <div class="main-sidebar-header">
          <a href="index.html" class="header-logo">
              <img src="{{ asset('backend/assets/images/brand-logos/desktop-logo.png') }}" alt="logo"
                  class="desktop-logo">
              <img src="{{ asset('backend/assets/images/brand-logos/toggle-logo.png') }}" alt="logo"
                  class="toggle-logo">
              <img src="{{ asset('backend/assets/images/brand-logos/desktop-dark.png') }}" alt="logo"
                  class="desktop-dark">
              <img src="{{ asset('backend/assets/images/brand-logos/toggle-dark.png') }}" alt="logo"
                  class="toggle-dark">
              <img src="{{ asset('backend/assets/images/brand-logos/462572296_951473869744022_6283213353903227896_n.png') }}"
                  alt="logo" class="desktop-white">
          </a>
      </div>
      <!-- End::main-sidebar-header -->

      <!-- Start::main-sidebar -->
      <div class="main-sidebar" id="sidebar-scroll">

          <!-- Start::nav -->
          <nav class="main-menu-container nav nav-pills flex-column sub-open">
              <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                      width="24" height="24" viewBox="0 0 24 24">
                      <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                  </svg></div>
              <ul class="main-menu">
                  <!-- Start::slide__category -->
                  <li class="slide__category"><span class="category-name">MENU</span></li>
                  <!-- End::slide__category -->

                  <!-- Start::slide -->
                  <li class="slide">
                      <a href="{{ route('admin.dashboard') }}" class="side-menu__item">
                          <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                              <path d="M0 0h24v24H0V0z" fill="none" />

                              <circle cx="15.5" cy="9.5" r="1.5" />
                              <circle cx="8.5" cy="9.5" r="1.5" />

                              <path
                                  d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                          </svg>
                          <span class="side-menu__label">Dashboard</span>
                      </a>
                  </li>
                  <!-- End::slide -->

                  <!-- Start::slide -->
                  <li class="slide">
                      <a href="{{ route('admin.reservation.index') }}" class="side-menu__item">
                          <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                              <path d="M0 0h24v24H0V0z" fill="none" />

                              <circle cx="15.5" cy="9.5" r="1.5" />
                              <circle cx="8.5" cy="9.5" r="1.5" />

                              <path
                                  d="M13 15V19H16V21H8V19H11V15H4C3.44772 1 5 3 14.5523 3 14V4C3 3.44772 3.44772 3 4 3H20C20.5523 3 21 3.44772 21 4V14C21 14.5523 20.5523 15 20 15H13ZM5 13H19V5H5V13ZM8 8H16V10H8V8Z">
                              </path>
                          </svg>
                          <span class="side-menu__label">Reservations</span>
                      </a>
                  </li>
                  <!-- End::slide -->



                  <!-- Start::slide -->
                  <li class="slide">
                      <a href="{{ route('admin.room.index') }}" class="side-menu__item">
                          <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                              <path d="M0 0h24v24H0V0z" fill="none" />

                              <circle cx="15.5" cy="9.5" r="1.5" />
                              <circle cx="8.5" cy="9.5" r="1.5" />
                              <path
                                  d="M18.205 7H12v8H4V6H2v14h2v-3h16v3h2v-4c0-.009-.005-.016-.005-.024H22V11c0-2.096-1.698-4-3.795-4z">
                              </path>
                          </svg>
                          <span class="side-menu__label">Rooms</span>
                      </a>
                  </li>
                  <!-- End::slide -->

                  <!-- Start::slide -->
                  <li class="slide">
                      <a href="{{ route('admin.amenities.index') }}" class="side-menu__item">
                          <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                              <path d="M0 0h24v24H0V0z" fill="none" />

                              <circle cx="15.5" cy="9.5" r="1.5" />
                              <circle cx="8.5" cy="9.5" r="1.5" />
                              <path d="M10.1113,2C9.9989,2,9.6758,2.1465,9.6758,2.1465L6.3535,3.8262
                                C5.9111,4.0024,5.7358,4.7081,6.002,5.0605l0.9707,1.4082L3.002,8.498L5,9.998l2.502-1.5l2.5,1.5l1.002-1.002l-3-4l2.5566-1.5293
                                c0.5286-0.2662,0.4434-0.7045,0.4434-0.9707C10.9999,2.2861,10.6437,2,10.1113,2z M12.252,5C11.2847,5,10.5,5.7827,10.5,6.75
                                s0.7847,1.752,1.752,1.752s1.75-0.7847,1.75-1.752S13.2192,5,12.252,5z M2.5,10L0,11.5V13l2.5-1.5L5,13l2.502-1.5l2.5,1.5L12,11.5
                                l3,1.5v-1.5L12,10l-1.998,1.5l-2.5-1.5L5,11.5L2.5,10z"></path>
                          </svg>
                          <span class="side-menu__label">Amenities</span>
                      </a>
                  </li>
                  <!-- End::slide -->

                  <!-- Start::slide -->
                  <li class="slide">
                      <a href="{{ route('admin.packages.index') }}" class="side-menu__item">
                          <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                              <path d="M0 0h24v24H0V0z" fill="none" />

                              <circle cx="15.5" cy="9.5" r="1.5" />
                              <circle cx="8.5" cy="9.5" r="1.5" />
                              <path
                                  d="M7 5V2C7 1.44772 7.44772 1 8 1H16C16.5523 1 17 1.44772 17 2V5H21C21.5523 5 22 5.44772 22 6V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V6C2 5.44772 2.44772 5 3 5H7ZM17 13V10H15V13H9V10H7V13H4V19H20V13H17ZM9 3V5H15V3H9Z">
                              </path>
                          </svg>
                          <span class="side-menu__label">Packages</span>
                      </a>
                  </li>
                  <!-- End::slide -->

                  <!-- Start::slide -->
                  <li class="slide">
                      <a href="{{ route('admin.help.index') }}" class="side-menu__item">
                          <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                              <path d="M0 0h24v24H0V0z" fill="none" />

                              <circle cx="15.5" cy="9.5" r="1.5" />
                              <circle cx="8.5" cy="9.5" r="1.5" />
                              <path
                                  d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM11 15H13V17H11V15ZM13 13.3551V14H11V12.5C11 11.9477 11.4477 11.5 12 11.5C12.8284 11.5 13.5 10.8284 13.5 10C13.5 9.17157 12.8284 8.5 12 8.5C11.2723 8.5 10.6656 9.01823 10.5288 9.70577L8.56731 9.31346C8.88637 7.70919 10.302 6.5 12 6.5C13.933 6.5 15.5 8.067 15.5 10C15.5 11.5855 14.4457 12.9248 13 13.3551Z">
                              </path>
                          </svg>
                          <span class="side-menu__label">Help & Support</span>
                      </a>
                  </li>
                  <!-- End::slide -->

                  <!-- Start::slide__category -->
                  <li class="slide__category"><span class="category-name">Configuration</span></li>
                  <!-- End::slide__category -->


                  <li class="slide has-sub">
                      <a href="javascript:void(0);" class="side-menu__item">
                          <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                              <path d="M0 0h24v24H0V0z" fill="none" />

                              <path
                                  d="M3.33946 17.0002C2.90721 16.2515 2.58277 15.4702 2.36133 14.6741C3.3338 14.1779 3.99972 13.1668 3.99972 12.0002C3.99972 10.8345 3.3348 9.824 2.36353 9.32741C2.81025 7.71651 3.65857 6.21627 4.86474 4.99001C5.7807 5.58416 6.98935 5.65534 7.99972 5.072C9.01009 4.48866 9.55277 3.40635 9.4962 2.31604C11.1613 1.8846 12.8847 1.90004 14.5031 2.31862C14.4475 3.40806 14.9901 4.48912 15.9997 5.072C17.0101 5.65532 18.2187 5.58416 19.1346 4.99007C19.7133 5.57986 20.2277 6.25151 20.66 7.00021C21.0922 7.7489 21.4167 8.53025 21.6381 9.32628C20.6656 9.82247 19.9997 10.8336 19.9997 12.0002C19.9997 13.166 20.6646 14.1764 21.6359 14.673C21.1892 16.2839 20.3409 17.7841 19.1347 19.0104C18.2187 18.4163 17.0101 18.3451 15.9997 18.9284C14.9893 19.5117 14.4467 20.5941 14.5032 21.6844C12.8382 22.1158 11.1148 22.1004 9.49633 21.6818C9.55191 20.5923 9.00929 19.5113 7.99972 18.9284C6.98938 18.3451 5.78079 18.4162 4.86484 19.0103C4.28617 18.4205 3.77172 17.7489 3.33946 17.0002ZM8.99972 17.1964C10.0911 17.8265 10.8749 18.8227 11.2503 19.9659C11.7486 20.0133 12.2502 20.014 12.7486 19.9675C13.1238 18.8237 13.9078 17.8268 14.9997 17.1964C16.0916 16.5659 17.347 16.3855 18.5252 16.6324C18.8146 16.224 19.0648 15.7892 19.2729 15.334C18.4706 14.4373 17.9997 13.2604 17.9997 12.0002C17.9997 10.74 18.4706 9.5632 19.2729 8.6665C19.1688 8.4405 19.0538 8.21822 18.9279 8.00021C18.802 7.78219 18.667 7.57148 18.5233 7.36842C17.3457 7.61476 16.0911 7.43414 14.9997 6.80405C13.9083 6.17395 13.1246 5.17768 12.7491 4.03455C12.2509 3.98714 11.7492 3.98646 11.2509 4.03292C10.8756 5.17671 10.0916 6.17364 8.99972 6.80405C7.9078 7.43447 6.65245 7.61494 5.47428 7.36803C5.18485 7.77641 4.93463 8.21117 4.72656 8.66637C5.52881 9.56311 5.99972 10.74 5.99972 12.0002C5.99972 13.2604 5.52883 14.4372 4.72656 15.3339C4.83067 15.5599 4.94564 15.7822 5.07152 16.0002C5.19739 16.2182 5.3324 16.4289 5.47612 16.632C6.65377 16.3857 7.90838 16.5663 8.99972 17.1964ZM11.9997 15.0002C10.3429 15.0002 8.99972 13.6571 8.99972 12.0002C8.99972 10.3434 10.3429 9.00021 11.9997 9.00021C13.6566 9.00021 14.9997 10.3434 14.9997 12.0002C14.9997 13.6571 13.6566 15.0002 11.9997 15.0002ZM11.9997 13.0002C12.552 13.0002 12.9997 12.5525 12.9997 12.0002C12.9997 11.4479 12.552 11.0002 11.9997 11.0002C11.4474 11.0002 10.9997 11.4479 10.9997 12.0002C10.9997 12.5525 11.4474 13.0002 11.9997 13.0002Z" />
                          </svg>
                          <span class="side-menu__label">Settings</span>
                          <i class="fe fe-chevron-right side-menu__angle"></i>
                      </a>
                      <ul class="slide-menu child1">
                          <li class="slide side-menu__label1">
                              <a href="javascript:void(0);">Settings</a>
                          </li>
                          <li class="slide">
                              <a href="{{ route('admin.users.index') }}" class="side-menu__item">User Management</a>
                          </li>
                          <li class="slide">
                              <a href="index1.html" class="side-menu__item">Site Settings</a>
                          </li>
                      </ul>
                  </li>



              </ul>
              <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                      width="24" height="24" viewBox="0 0 24 24">
                      <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                  </svg></div>
          </nav>
          <!-- End::nav -->

      </div>
      <!-- End::main-sidebar -->

  </aside>
  <!-- End::app-sidebar -->
