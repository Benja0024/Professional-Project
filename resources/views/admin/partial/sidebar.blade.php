<!--**********************************
            Sidebar start
        ***********************************-->
<div class="dlabnav">
    <div class="dlabnav-scroll">
        <div class="dropdown header-profile2 ">
            <a class="nav-link " href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                <div class="header-info2 d-flex align-items-center">
                    <img src="{{ asset('admin/images/profile/pic1.jpg') }}" alt="">
                    <div class="d-flex align-items-center sidebar-info">
                        <div>
                            <span class="font-w400 d-block">Franklin Jr</span>
                            <small class="text-end font-w400">Superadmin</small>
                        </div>
                        <i class="fas fa-chevron-down"></i>
                    </div>

                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <a href="{{ asset('admin/jobick-admin/app-profile.html') }}" class="dropdown-item ai-icon ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span class="ms-2">Profile </span>
                </a>
                <a href="{{ asset('admin/jobick-admin/email-inbox.html') }}" class="dropdown-item ai-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                    <span class="ms-2">Inbox </span>
                </a>
                <a href="{{ asset('admin/jobick-admin/page-register.html') }}" class="dropdown-item ai-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" y1="12" x2="9" y2="12"></line>
                    </svg>
                    <span class="ms-2">Logout </span>
                </a>
            </div>
        </div>
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="https://jobick.dexignlab.com/cakephp/demo">Dashboard Light</a></li>
                    <li><a href="{{ asset('admin/jobick-admin/index2.html') }}">Dashboard Dark</a></li>
                    <li><a href="{{ asset('admin/jobick-admin/jobs-page.html') }}">Jobs</a></li>
                    <li><a href="{{ asset('admin/jobick-admin/application-page.html') }}">Application</a></li>
                    <li><a href="{{ asset('admin/jobick-admin/my-profile.html') }}">Profile</a></li>
                    <li><a href="{{ asset('admin/jobick-admin/statistics-page.html') }}">Statistics</a></li>
                    <li><a href="{{ asset('admin/jobick-admin/compaines.html') }}">Companies</a></li>
                </ul>

            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-093-waving"></i>
                    <span class="nav-text">Jobs</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ asset('admin/jobick-admin/job-list.html') }}">Job Lists</a></li>
                    <li><a href="{{ asset('admin/jobick-admin/job-view.html') }}">Job View</a></li>
                    <li><a href="{{ asset('admin/jobick-admin/job-application.html') }}">Job Application</a></li>
                    <li><a href="{{ asset('admin/jobick-admin/apply-job.html') }}">Apply Job</a></li>
                    <li><a href="{{ asset('admin/jobick-admin/new-job.html') }}">New Job</a></li>
                    <li><a href="{{ asset('admin/jobick-admin/user-profile.html') }}">User Profile</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="fa-solid fa-gear"></i>


                    <span class="nav-text">CMS</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ asset('admin/jobick-admin/content.html') }}">Content</a></li>
                    <li><a href="{{ asset('admin/jobick-admin/content-add.html') }}">Add Content</a></li>
                    <li><a href="{{ asset('admin/jobick-admin/menu.html') }}">Menus</a></li>
                    <li><a href="{{ asset('admin/jobick-admin/email-template.html') }}">Email Template</a></li>
                    <li><a href="{{ asset('admin/jobick-admin/add-email.html') }}">Add Email</a></li>
                    <li><a href="{{ asset('admin/jobick-admin/blog.html') }}">Blog</a></li>
                    <li><a href="{{ asset('admin/jobick-admin/add-blog.html') }}">Add Blog</a></li>
                    <li><a href="{{ asset('admin/jobick-admin/blog-category.html') }}">Blog Category</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-050-info"></i>
                    <span class="nav-text">Apps</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ asset('admin/jobick-admin/app-profile.html') }}">Profile</a></li>
                    <li><a href="{{ asset('admin/jobick-admin/edit-profile.html') }}">Edit Profile</a></li>
                    <li><a href="{{ asset('admin/jobick-admin/post-details.html') }}">Post Details</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ asset('admin/jobick-admin/email-compose.html') }}">Compose</a></li>
                            <li><a href="{{ asset('admin/jobick-admin/email-inbox.html') }}">Inbox</a></li>
                            <li><a href="{{ asset('admin/jobick-admin/email-read.html') }}">Read</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ asset('admin/jobick-admin/app-calender.html') }}">Calendar</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                        <ul aria-expanded="false">
                            <li><a href="jobick-admin/ecom-product-grid.html">Product Grid</a></li>
                            <li><a href="jobick-admin/ecom-product-list.html">Product List</a></li>
                            <li><a href="jobick-admin/ecom-product-detail.html">Product Details</a></li>
                            <li><a href="jobick-admin/ecom-product-order.html">Order</a></li>
                            <li><a href="jobick-admin/ecom-checkout.html">Checkout</a></li>
                            <li><a href="jobick-admin/ecom-invoice.html">Invoice</a></li>
                            <li><a href="jobick-admin/ecom-customers.html">Customers</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-041-graph"></i>
                    <span class="nav-text">Charts</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="jobick-admin/chart-flot.html">Flot</a></li>
                    <li><a href="jobick-admin/chart-morris.html">Morris</a></li>
                    <li><a href="jobick-admin/chart-chartjs.html">Chartjs</a></li>
                    <li><a href="jobick-admin/chart-chartist.html">Chartist</a></li>
                    <li><a href="jobick-admin/chart-sparkline.html">Sparkline</a></li>
                    <li><a href="jobick-admin/chart-peity.html">Peity</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-086-star"></i>
                    <span class="nav-text">Bootstrap</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ asset('jobick-admin/ui-accordion.html') }}">Accordion</a></li>
                    <li><a href="{{ asset('jobick-admin/ui-alert.html') }}">Alert</a></li>
                    <li><a href="{{ asset('jobick-admin/ui-badge.html') }}">Badge</a></li>
                    <li><a href="{{ asset('jobick-admin/ui-button.html') }}">Button</a></li>
                    <li><a href="{{ asset('jobick-admin/ui-modal.html') }}">Modal</a></li>
                    <li><a href="{{ asset('jobick-admin/ui-button-group.html') }}">Button Group</a></li>
                    <li><a href="{{ asset('jobick-admin/ui-list-group.html') }}">List Group</a></li>
                    <li><a href="{{ asset('jobick-admin/ui-card.html') }}">Cards</a></li>
                    <li><a href="{{ asset('jobick-admin/ui-carousel.html') }}">Carousel</a></li>
                    <li><a href="{{ asset('jobick-admin/ui-dropdown.html') }}">Dropdown</a></li>
                    <li><a href="{{ asset('jobick-admin/ui-popover.html') }}">Popover</a></li>
                    <li><a href="{{ asset('jobick-admin/ui-progressbar.html') }}">Progressbar</a></li>
                    <li><a href="{{ asset('jobick-admin/ui-tab.html') }}">Tab</a></li>
                    <li><a href="{{ asset('jobick-admin/ui-typography.html') }}">Typography</a></li>
                    <li><a href="{{ asset('jobick-admin/ui-pagination.html') }}">Pagination</a></li>
                    <li><a href="{{ asset('jobick-admin/ui-grid.html') }}">Grid</a></li>

                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-045-heart"></i>
                    <span class="nav-text">Plugins</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ asset('jobick-admin/uc-select2.html') }}">Select 2</a></li>
                    <li><a href="{{ asset('jobick-admin/uc-nestable.html') }}">Nestedable</a></li>
                    <li><a href="{{ asset('jobick-admin/uc-noui-slider.html') }}">Noui Slider</a></li>
                    <li><a href="{{ asset('jobick-admin/uc-sweetalert.html') }}">Sweet Alert</a></li>
                    <li><a href="{{ asset('jobick-admin/uc-toastr.html') }}">Toastr</a></li>
                    <li><a href="{{ asset('jobick-admin/map-jqvmap.html') }}">Jqv Map</a></li>
                    <li><a href="{{ asset('jobick-admin/uc-lightgallery.html') }}">Light Gallery</a></li>
                </ul>
            </li>
            <li><a href="{{ asset('jobick-admin/widget-basic.html') }}" class="" aria-expanded="false">
                    <i class="flaticon-013-checkmark"></i>
                    <span class="nav-text">Widget</span>
                </a>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-072-printer"></i>
                    <span class="nav-text">Forms</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ asset('jobick-admin/form-element.html') }}">Form Elements</a></li>
                    <li><a href="{{ asset('jobick-admin/form-wizard.html') }}">Wizard</a></li>
                    <li><a href="{{ asset('jobick-admin/form-ckeditor.html') }}">CkEditor</a></li>
                    <li><a href="{{ asset('jobick-admin/form-pickers.html') }}">Pickers</a></li>
                    <li><a href="{{ asset('jobick-admin/form-validation.html') }}">Form Validate</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-043-menu"></i>
                    <span class="nav-text">Table</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ asset('jobick-admin/table-bootstrap-basic.html') }}">Bootstrap</a></li>
                    <li><a href="{{ asset('jobick-admin/table-datatable-basic.html') }}">Datatable</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-022-copy"></i>
                    <span class="nav-text">Pages</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ asset('jobick-admin/page-login.html') }}">Login</a></li>
                    <li><a href="{{ asset('jobick-admin/page-register.html') }}">Register</a>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ asset('admin/jobick-admin/page-error-400.html') }}">Error 400</a></li>
                            <li><a href="{{ asset('admin/jobick-admin/page-error-403.html') }}">Error 403</a></li>
                            <li><a href="{{ asset('admin/jobick-admin/page-error-404.html') }}">Error 404</a></li>
                            <li><a href="{{ asset('admin/jobick-admin/page-error-500.html') }}">Error 500</a></li>
                            <li><a href="{{ asset('admin/jobick-admin/page-error-503.html') }}">Error 503</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ asset('jobick-admin/page-lock-screen.html') }}">Lock Screen</a></li>
                    <li><a href="{{ asset('jobick-admin/empty-page.html') }}">Empty Page</a></li>
                </ul>
            </li>
        </ul>
        <div class="plus-box">
            <p class="fs-14 font-w600 mb-2">Let Jobick Managed<br>Your Resume Easily<br></p>
            <p class="plus-box-p">Lorem ipsum dolor sit amet</p>
        </div>
        <div class="copyright">
            <p><strong>Jobick Job Admin</strong> © 2023 All Rights Reserved</p>
            <p class="fs-12">Made with <span class="heart"></span> by DexignLab</p>
        </div>
    </div>
</div> <!--**********************************
            Sidebar end
        ***********************************-->
