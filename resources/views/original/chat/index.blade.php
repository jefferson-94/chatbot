<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta property="og:title" content="Template Titlte">
    <meta property="og:description" content="Template Content">
    <meta property="og:image" content="">
    <meta property="og:image:secure_url" content="">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    <title>DreamsChat</title>
    <!-- Favicon -->
    <link rel="icon" href="http://localhost:8000/assets/img/favicon.png">
    <!-- Theme Script Js -->
    <script src="http://localhost:8000/assets/js/theme-script.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://localhost:8000/assets/css/bootstrap.min.css">
    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="http://localhost:8000/assets/css/feather.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="http://localhost:8000/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="http://localhost:8000/assets/plugins/fontawesome/css/all.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="http://localhost:8000/assets/plugins/swiper/swiper.min.css">
    <!-- FancyBox CSS -->
    <link rel="stylesheet" href="http://localhost:8000/assets/plugins/fancybox/jquery.fancybox.min.css">
    <!-- TablerIcon CSS -->
    <link rel="stylesheet" href="http://localhost:8000/assets/plugins/tabler-icons/tabler-icons.min.css">
    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="http://localhost:8000/assets/css/bootstrap-datetimepicker.min.css">
    <!-- Select CSS -->
    <link rel="stylesheet" href="http://localhost:8000/assets/plugins/select2/css/select2.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="http://localhost:8000/assets/css/style.css">
</head>
<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- content -->
        <div class="content main_content">
            <!-- Left Sidebar Menu -->
            <div class="sidebar-menu">
                <div class="logo">
                    <a href="http://localhost:8000/index.html" class="logo-normal"><img
                            src="http://localhost:8000/assets/img/logo.svg" alt="Logo"></a>
                </div>
                <div class="menu-wrap">
                    <div class="main-menu">
                        <ul class="nav">
                            <li data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Chats"
                                data-bs-custom-class="tooltip-primary">
                                <a href="http://localhost:8000/index.html" class="active" data-bs-toggle="tab"
                                    data-bs-target="#chat-menu">
                                    <i class="ti ti-message-2-heart"></i>
                                </a>
                            </li>
                            <li data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Contacts"
                                data-bs-custom-class="tooltip-primary">
                                    <a href="http://localhost:8000/#" data-bs-toggle="tab" data-bs-target="#contact-menu">
                                    <i class="ti ti-user-shield"></i>
                                </a>
                            </li>
                            <li data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Groups"
                                data-bs-custom-class="tooltip-primary">
                                <a href="http://localhost:8000/#" class="" data-bs-toggle="tab"
                                    data-bs-target="#group-menu">
                                    <i class="ti ti-users-group"></i>
                                </a>
                            </li>
                            <li data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Status"
                                data-bs-custom-class="tooltip-primary">
                                <a href="http://localhost:8000/status.html" class="">
                                    <i class="ti ti-circle-dot"></i>
                                </a>
                            </li>
                            <li data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Calls"
                                data-bs-custom-class="tooltip-primary">
                                <a href="http://localhost:8000/#" data-bs-toggle="tab" data-bs-target="#call-menu">
                                    <i class="ti ti-phone-call"></i>
                                </a>
                            </li>
                            <li data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Profile"
                                data-bs-custom-class="tooltip-primary">
                                <a href="http://localhost:8000/#" data-bs-toggle="tab"
                                    data-bs-target="#profile-menu">
                                    <i class="ti ti-user-circle"></i>
                                </a>
                            </li>
                            <li data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Settings"
                                data-bs-custom-class="tooltip-primary">
                                <a href="http://localhost:8000/#" data-bs-toggle="tab"
                                    data-bs-target="#setting-menu">
                                    <i class="ti ti-settings"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="profile-menu">
                        <ul>
                            <li>
                                <a href="http://localhost:8000/#" id="dark-mode-toggle"
                                    class="dark-mode-toggle active">
                                    <i class="ti ti-moon"></i>
                                </a>
                                <a href="http://localhost:8000/#" id="light-mode-toggle" class="dark-mode-toggle">
                                    <i class="ti ti-sun"></i>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <a href="http://localhost:8000/#" class="avatar avatar-md"
                                        data-bs-toggle="dropdown">
                                        <img src="http://localhost:8000/assets/img/profiles/avatar-16.jpg"
                                            alt="img" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end p-3">
                                        <a href="http://localhost:8000/signin.html" class="dropdown-item"><i
                                                class="ti ti-logout-2 me-2"></i>Logout </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Left Sidebar Menu -->
            <!-- sidebar group -->
            <div class="sidebar-group">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="chat-menu">
                        <!-- Chats sidebar -->
                        <div id="chats" class="sidebar-content active slimscroll">
                            <div class="slimscroll">
                                <div class="chat-search-header">
                                    <div class="header-title d-flex align-items-center justify-content-between">
                                        <h4 class="mb-3">Chats</h4>
                                        <div class="d-flex align-items-center mb-3">
                                            <a href="http://localhost:8000/javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#new-chat"
                                                class="add-icon btn btn-primary p-0 d-flex align-items-center justify-content-center fs-16 me-2"><i
                                                    class="ti ti-plus"></i></a>
                                            <div class="dropdown">
                                                <a href="http://localhost:8000/javascript:void(0);"
                                                    data-bs-toggle="dropdown" class="fs-16 text-default">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </a>
                                                <ul class="dropdown-menu p-3">
                                                    <li><a class="dropdown-item"
                                                            href="http://localhost:8000/javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#invite"><i
                                                                class="ti ti-send me-2"></i>Invite Others</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-body chat-body" id="chatsidebar">
                                    <!-- Left Chat Title -->
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="chat-title">All Chats</h5>
                                        <div class="dropdown">
                                            <a href="http://localhost:8000/#" class="text-default fs-16"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="ti ti-filter"></i></a>
                                            <ul class=" dropdown-menu dropdown-menu-end p-3" id="innerTab"
                                                role="tablist">
                                                <li role="presentation">
                                                    <a class="dropdown-item active" id="all-chats-tab"
                                                        data-bs-toggle="tab" href="http://localhost:8000/#all-chats"
                                                        role="tab" aria-controls="all-chats" aria-selected="true"
                                                        onclick="changeChat('All Chats')">All Chats</a>
                                                </li>
                                                <li role="presentation">
                                                    <a class="dropdown-item" id="favourites-chat-tab"
                                                        data-bs-toggle="tab"
                                                        href="http://localhost:8000/#favourites-chat" role="tab"
                                                        aria-controls="favourites-chat" aria-selected="false"
                                                        onclick="changeChat('Favourite Chats')">Favourite Chats</a>
                                                </li>
                                                <li role="presentation">
                                                    <a class="dropdown-item" id="pinned-chats-tab"
                                                        data-bs-toggle="tab"
                                                        href="http://localhost:8000/#pinned-chats" role="tab"
                                                        aria-controls="pinned-chats" aria-selected="false"
                                                        onclick="changeChat('Pinned Chats')">Pinned Chats</a>
                                                </li>
                                                <li role="presentation">
                                                    <a class="dropdown-item" id="archive-chats-tab"
                                                        data-bs-toggle="tab"
                                                        href="http://localhost:8000/#archive-chats" role="tab"
                                                        aria-controls="archive-chats" aria-selected="false"
                                                        onclick="changeChat('Archive Chats')">Archive Chats</a>
                                                </li>
                                                <li role="presentation">
                                                    <a class="dropdown-item" id="trash-chats-tab"
                                                        data-bs-toggle="tab" href="http://localhost:8000/#trash-chats"
                                                        role="tab" aria-controls="trash-chats"
                                                        aria-selected="false" onclick="changeChat('Trash')">Trash</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /Left Chat Title -->
                                    <div class="tab-content" id="innerTabContent">
                                        <div class="tab-pane fade show active" id="all-chats" role="tabpanel"
                                            aria-labelledby="all-chats-tab">
                                            <div class="chat-users-wrap">
                                                <div class="chat-list">
                                                    <a href="http://localhost:8000/chat.html" class="chat-user-list">
                                                        <div class="avatar avatar-lg online me-2">
                                                            <img src="http://localhost:8000/assets/img/profiles/avatar-01.jpg"
                                                                class="rounded-circle border border-warning border-2"
                                                                alt="image">
                                                        </div>
                                                        <div class="chat-user-info">
                                                            <div class="chat-user-msg">
                                                                <h6>Mark Villiams</h6>
                                                                <p><span class="animate-typing">is typing
                                                                        <span class="dot"></span>
                                                                        <span class="dot"></span>
                                                                        <span class="dot"></span>
                                                                    </span>
                                                                </p>
                                                            </div>
                                                            <div class="chat-user-time">
                                                                <span class="time">02:40 PM</span>
                                                                <div class="chat-pin">
                                                                    <i class="ti ti-pin me-2"></i>
                                                                    <span
                                                                        class="count-message fs-12 fw-semibold">12</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="chat-dropdown">
                                                        <a class="#" href="http://localhost:8000/#"
                                                            data-bs-toggle="dropdown">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                                            <li><a class="dropdown-item"
                                                                    href="http://localhost:8000/#"><i
                                                                        class="ti ti-box-align-right me-2"></i>Archive
                                                                    Chat</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="http://localhost:8000/#"><i
                                                                        class="ti ti-heart me-2"></i>Mark as
                                                                    Favourite</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="http://localhost:8000/#"><i
                                                                        class="ti ti-check me-2"></i>Mark as Unread</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="http://localhost:8000/#"><i
                                                                        class="ti ti-pinned me-2"></i>Pin Chats</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="http://localhost:8000/#"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#delete-chat"><i
                                                                        class="ti ti-trash me-2"></i>Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / Chats sidebar -->
                    </div>
                    <!-- Profile -->
                    <div class="tab-pane fade" id="profile-menu">
                        <!-- Profile sidebar -->
                        <div class="sidebar-content active slimscroll">
                            <div class="slimscroll">
                                <div class="chat-search-header">
                                    <div class="header-title d-flex align-items-center justify-content-between">
                                        <h4 class="mb-3">Profile</h4>
                                    </div>
                                </div>
                                <!-- Profile -->
                                <div class="profile mx-3">
                                    <div class="border-bottom text-center pb-3 mx-1">
                                        <div class="d-flex justify-content-center ">
                                            <span class="avatar avatar-xxxl online mb-4">
                                                <img src="http://localhost:8000/assets/img/profiles/avatar-16.jpg"
                                                    class="rounded-circle" alt="user">
                                            </span>
                                        </div>
                                        <div>
                                            <h6 class="fs-16">Salom Katherine</h6>
                                            <div class="d-flex justify-content-center">
                                                <span class="fs-14 text-center">Web Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Profile -->
                                <div class="sidebar-body chat-body">
                                    <!-- Profile Info -->
                                    <h5 class="mb-2">Profile Info</h5>
                                    <div class="card">
                                        <div class="card-body">
                                            <div
                                                class="d-flex profile-list justify-content-between align-items-center border-bottom mb-3 pb-3">
                                                <div>
                                                    <h6 class="fs-14">Name</h6>
                                                    <p class="fs-16 ">Salom Katherine</p>
                                                </div>
                                                <span><i class="ti ti-user-circle fs-16"></i></span>
                                            </div>
                                            <div
                                                class="d-flex profile-list justify-content-between align-items-center border-bottom mb-3 pb-3">
                                                <div>
                                                    <h6 class="fs-14">Phone</h6>
                                                    <p class="fs-16">514-245-98315</p>
                                                </div>
                                                <span><i class="ti ti-phone-check fs-16"></i></span>
                                            </div>
                                            <div
                                                class="d-flex profile-list profile-list justify-content-between align-items-center border-bottom mb-3 pb-3">
                                                <div>
                                                    <h6 class="fs-14">Gender</h6>
                                                    <p class="fs-16">Female</p>
                                                </div>
                                                <span><i class="ti ti-user-star fs-16"></i></span>
                                            </div>
                                            <div
                                                class="d-flex profile-list justify-content-between align-items-center border-bottom mb-3 pb-3">
                                                <div>
                                                    <h6 class="fs-14">Email Address</h6>
                                                    <p class="fs-16">info@example.com</p>
                                                </div>
                                                <span><i class="ti ti-mail-heart fs-16"></i></span>
                                            </div>
                                            <div
                                                class="d-flex profile-list profile-list justify-content-between align-items-center border-bottom mb-3 pb-3">
                                                <div>
                                                    <h6 class="fs-14">Bio</h6>
                                                    <p class="fs-16">Web Designer</p>
                                                </div>
                                                <span><i class="ti ti-user-check fs-16"></i></span>
                                            </div>
                                            <div
                                                class="d-flex profile-list justify-content-between align-items-center border-bottom mb-3 pb-3">
                                                <div>
                                                    <h6 class="fs-14">Location</h6>
                                                    <p class="fs-16">Portland, USA</p>
                                                </div>
                                                <span><i class="ti ti-map-2 fs-16"></i></span>
                                            </div>
                                            <div
                                                class="d-flex profile-list justify-content-between align-items-center">
                                                <div>
                                                    <h6 class="fs-14">Join Date</h6>
                                                    <p class="fs-16">01 July 2024</p>
                                                </div>
                                                <span><i class="ti ti-calendar-event fs-16"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Profile Info -->
                                    <!-- Status -->
                                    <h5 class="mb-2">Status</h5>
                                    <div class="card">
                                        <div class="card-body">
                                            <div
                                                class="d-flex profile-list justify-content-between align-items-center border-bottom mb-3 pb-3">
                                                <div>
                                                    <h6 class="fs-14">Active Status</h6>
                                                    <p class="fs-16 ">Show when you’re active</p>
                                                </div>
                                                <div
                                                    class="form-check form-switch d-flex justify-content-end align-items-center">
                                                    <input class="form-check-input" type="checkbox" role="switch"
                                                        checked>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex profile-list justify-content-between align-items-center">
                                                <div>
                                                    <h6 class="fs-14">Friends Status</h6>
                                                    <p class="fs-16 ">Show friends status in chat</p>
                                                </div>
                                                <div
                                                    class="form-check form-switch d-flex justify-content-end align-items-center">
                                                    <input class="form-check-input" type="checkbox" role="switch"
                                                        checked>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Status -->
                                    <!-- Social Media -->
                                    <h5 class="mb-2">Social Media</h5>
                                    <div class="card">
                                        <div class="card-body">
                                            <div
                                                class="d-flex profile-list justify-content-between align-items-center border-bottom mb-3 pb-3">
                                                <div>
                                                    <h6 class="fs-14">Facebook</h6>
                                                    <p class="fs-16 ">@SalomKatherine</p>
                                                </div>
                                                <span><i class="ti ti-brand-facebook fs-16"></i></span>
                                            </div>
                                            <div
                                                class="d-flex profile-list justify-content-between align-items-center border-bottom mb-3 pb-3">
                                                <div>
                                                    <h6 class="fs-14">Instagram Linkedin</h6>
                                                    <p class="fs-16 ">@SalomKatherine</p>
                                                </div>
                                                <span><i class="ti ti-brand-instagram fs-16"></i></span>
                                            </div>
                                            <div
                                                class="d-flex profile-list justify-content-between align-items-center">
                                                <div>
                                                    <h6 class="fs-14">Linkedin</h6>
                                                    <p class="fs-16 ">@SalomKatherine</p>
                                                </div>
                                                <span><i class="ti ti-brand-linkedin fs-16"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Social Media -->
                                    <!-- Deactivate -->
                                    <h5 class="mb-2">Deactivate </h5>
                                    <div class="card">
                                        <div class="card-body">
                                            <div
                                                class="d-flex profile-list justify-content-between align-items-center">
                                                <div>
                                                    <h6 class="fs-14">Deactivate Account</h6>
                                                    <p class="fs-16 ">Deactivate your Account</p>
                                                </div>
                                                <div
                                                    class="form-check form-switch d-flex justify-content-end align-items-center">
                                                    <input class="form-check-input" type="checkbox" role="switch">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Deactivate -->
                                    <!-- Logout -->
                                    <h5 class="mb-2">Logout</h5>
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div
                                                class="d-flex profile-list justify-content-between align-items-center">
                                                <div>
                                                    <h6 class="fs-14">Logout</h6>
                                                    <p class="fs-16 ">Sign out from this Device</p>
                                                </div>
                                                <a href="http://localhost:8000/login.html" class="link-icon"><i
                                                        class="ti ti-logout fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Logout -->
                                </div>
                            </div>
                        </div>
                        <!-- / Profile sidebar -->
                    </div>
                    <!-- /Profile -->
                </div>
            </div>
            <!-- /Sidebar group -->
            <!-- Chat -->
            <div class="chat chat-messages show" id="middle">
                <div>
                    <div class="chat-header">
                        <div class="user-details">
                            <div class="d-xl-none">
                                <a class="text-muted chat-close me-2" href="http://localhost:8000/#">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                            </div>
                            <div class="avatar avatar-lg online flex-shrink-0">
                                <img src="http://localhost:8000/assets/img/profiles/avatar-06.jpg"
                                    class="rounded-circle" alt="image">
                            </div>
                            <div class="ms-2 overflow-hidden">
                                <h6>Edward Lietz</h6>
                                <span class="last-seen">Online</span>
                            </div>
                        </div>
                        <div class="chat-options">
                            <ul>
                                <li>
                                    <a href="http://localhost:8000/javascript:void(0)" class="btn chat-search-btn"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Search">
                                        <i class="ti ti-search"></i>
                                    </a>
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="bottom" title="Video Call">
                                    <a href="http://localhost:8000/javascript:void(0)" class="btn"
                                        data-bs-toggle="modal" data-bs-target="#video-call">
                                        <i class="ti ti-video"></i>
                                    </a>
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="bottom" title="Voice Call">
                                    <a href="http://localhost:8000/javascript:void(0)" class="btn"
                                        data-bs-toggle="modal" data-bs-target="#voice_call">
                                        <i class="ti ti-phone"></i>
                                    </a>
                                </li>
                                <li title="Contact Info" data-bs-toggle="tooltip" data-bs-placement="bottom">
                                    <a href="http://localhost:8000/javascript:void(0)" class="btn"
                                        data-bs-toggle="offcanvas" data-bs-target="#contact-profile">
                                        <i class="ti ti-info-circle"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn no-bg" href="http://localhost:8000/#" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                        <li><a href="http://localhost:8000/index.html" class="dropdown-item"><i
                                                    class="ti ti-x me-2"></i>Close Chat</a></li>
                                        <li><a href="http://localhost:8000/#" class="dropdown-item"
                                                data-bs-toggle="modal" data-bs-target="#mute-notification"><i
                                                    class="ti ti-volume-off me-2"></i>Mute Notification</a></li>
                                        <li><a href="http://localhost:8000/#" class="dropdown-item"
                                                data-bs-toggle="modal" data-bs-target="#disappearing-messages"><i
                                                    class="ti ti-clock-hour-4 me-2"></i>Disappearing Message</a></li>
                                        <li><a href="http://localhost:8000/#" class="dropdown-item"
                                                data-bs-toggle="modal" data-bs-target="#clear-chat"><i
                                                    class="ti ti-clear-all me-2"></i>Clear Message</a></li>
                                        <li><a href="http://localhost:8000/#" class="dropdown-item"
                                                data-bs-toggle="modal" data-bs-target="#delete-chat"><i
                                                    class="ti ti-trash me-2"></i>Delete Chat</a></li>
                                        <li><a href="http://localhost:8000/#" class="dropdown-item"
                                                data-bs-toggle="modal" data-bs-target="#report-user"><i
                                                    class="ti ti-thumb-down me-2"></i>Report</a></li>
                                        <li><a href="http://localhost:8000/#" class="dropdown-item"
                                                data-bs-toggle="modal" data-bs-target="#block-user"><i
                                                    class="ti ti-ban me-2"></i>Block</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- Chat Search -->
                        <div class="chat-search search-wrap contact-search">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Contacts">
                                    <span class="input-group-text"><i class="ti ti-search"></i></span>
                                </div>
                            </form>
                        </div>
                        <!-- /Chat Search -->
                    </div>
                    <div class="chat-body chat-page-group slimscroll">
                        <div class="messages">
                            <div class="chats">
                                <div class="chat-avatar">
                                    <img src="http://localhost:8000/assets/img/profiles/avatar-06.jpg"
                                        class="rounded-circle" alt="image">
                                </div>
                                <div class="chat-content">
                                    <div class="chat-profile-name">
                                        <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span
                                                class="chat-time">02:39 PM</span><span class="msg-read success"><i
                                                    class="ti ti-checks"></i></span></h6>
                                    </div>
                                    <div class="chat-info">
                                        <div class="message-content">
                                            Hi there! I'm interested in your services.
                                            <div class="emoj-group">
                                                <ul>
                                                    <li class="emoj-action"><a
                                                            href="http://localhost:8000/javascript:void(0);"><i
                                                                class="ti ti-mood-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-02.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-05.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-06.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-07.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-08.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-03.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-10.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-09.svg"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a
                                                                        href="http://localhost:8000/javascript:void(0);"><i
                                                                            class="ti ti-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="http://localhost:8000/#" data-bs-toggle="modal"
                                                            data-bs-target="#forward-message"><i
                                                                class="ti ti-arrow-forward-up"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="chat-actions">
                                            <a class="#" href="http://localhost:8000/#"
                                                data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li><a class="dropdown-item reply-btn"
                                                        href="http://localhost:8000/#"><i
                                                            class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-pinned me-2"></i>Forward</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-file-export me-2"></i>Copy</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"
                                                        data-bs-toggle="modal" data-bs-target="#message-delete"><i
                                                            class="ti ti-trash me-2"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-box-align-right me-2"></i>Archeive Chat</a>
                                                </li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="chat-profile-name">
                                        <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span
                                                class="chat-time">02:39 PM</span><span class="msg-read success"><i
                                                    class="ti ti-checks"></i></span></h6>
                                    </div>
                                    <div class="chat-info">
                                        <div class="message-content">
                                            Can you tell me more about what you offer?, Can you explain it breifly...
                                            <div class="emoj-group">
                                                <ul>
                                                    <li class="emoj-action"><a
                                                            href="http://localhost:8000/javascript:void(0);"><i
                                                                class="ti ti-mood-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-02.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-05.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-06.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-07.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-08.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-03.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-10.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-09.svg"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a
                                                                        href="http://localhost:8000/javascript:void(0);"><i
                                                                            class="ti ti-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="http://localhost:8000/#" data-bs-toggle="modal"
                                                            data-bs-target="#forward-message"><i
                                                                class="ti ti-arrow-forward-up"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="chat-actions">
                                            <a class="#" href="http://localhost:8000/#"
                                                data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li><a class="dropdown-item reply-btn"
                                                        href="http://localhost:8000/#"><i
                                                            class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-pinned me-2"></i>Forward</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-file-export me-2"></i>Copy</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"
                                                        data-bs-toggle="modal" data-bs-target="#message-delete"><i
                                                            class="ti ti-trash me-2"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-box-align-right me-2"></i>Archeive Chat</a>
                                                </li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chats chats-right">
                                <div class="chat-content">
                                    <div class="chat-profile-name text-end">
                                        <h6>You<i class="ti ti-circle-filled fs-7 mx-2"></i><span
                                                class="chat-time">02:39 PM</span><span class="msg-read success"><i
                                                    class="ti ti-checks"></i></span></h6>
                                    </div>
                                    <div class="chat-info">
                                        <div class="chat-actions">
                                            <a class="#" href="http://localhost:8000/#"
                                                data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li><a class="dropdown-item reply-btn"
                                                        href="http://localhost:8000/#"><i
                                                            class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-pinned me-2"></i>Forward</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-file-export me-2"></i>Copy</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"
                                                        data-bs-toggle="modal" data-bs-target="#message-delete"><i
                                                            class="ti ti-trash me-2"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-box-align-right me-2"></i>Archeive Chat</a>
                                                </li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                            </ul>
                                        </div>
                                        <div class="message-content">
                                            Hello! Absolutely, we provide a range of services tailored to meet various
                                            business needs. Could you specify what you're looking for?
                                            <div class="emoj-group">
                                                <ul>
                                                    <li class="emoj-action"><a
                                                            href="http://localhost:8000/javascript:void(0);"><i
                                                                class="ti ti-mood-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-02.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-05.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-06.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-07.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-08.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-03.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-10.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-09.svg"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a
                                                                        href="http://localhost:8000/javascript:void(0);"><i
                                                                            class="ti ti-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="http://localhost:8000/#" data-bs-toggle="modal"
                                                            data-bs-target="#forward-message"><i
                                                                class="ti ti-arrow-forward-up"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="emonji-wrap">
                                        <a href="http://localhost:8000/javascript:void(0);"><img
                                                src="http://localhost:8000/assets/img/icons/emonji-02.svg"
                                                class="me-2" alt="icon">24</a>
                                        <a href="http://localhost:8000/javascript:void(0);"><img
                                                src="http://localhost:8000/assets/img/icons/emonji-03.svg"
                                                class="me-2" alt="icon">15</a>
                                        <a href="http://localhost:8000/javascript:void(0);"><img
                                                src="http://localhost:8000/assets/img/icons/emonji-04.svg"
                                                class="me-2" alt="icon">15</a>
                                    </div>
                                </div>
                                <div class="chat-avatar">
                                    <img src="http://localhost:8000/assets/img/profiles/avatar-17.jpg"
                                        class="rounded-circle dreams_chat" alt="image">
                                </div>
                            </div>
                            <div class="chat-line">
                                <span class="chat-date">Today, July 24</span>
                            </div>
                            <div class="chats">
                                <div class="chat-avatar">
                                    <img src="http://localhost:8000/assets/img/profiles/avatar-02.jpg"
                                        class="rounded-circle dreams_chat" alt="image">
                                </div>
                                <div class="chat-content">
                                    <div class="chat-profile-name">
                                        <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span
                                                class="chat-time">02:39 PM</span><span class="msg-read success"><i
                                                    class="ti ti-checks"></i></span></h6>
                                    </div>
                                    <div class="message-content bg-transparent p-0">
                                        <div class="message-audio">
                                            <audio controls>
                                                <source src="http://localhost:8000/assets/img/audio/audio.mp3"
                                                    type="audio/mpeg">
                                                Your browser does not support the audio element.
                                            </audio>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chats chats-right">
                                <div class="chat-content">
                                    <div class="chat-profile-name justify-content-end">
                                        <h6>You<i class="ti ti-circle-filled fs-7 mx-2"></i><span
                                                class="chat-time">02:39 PM</span><span class="msg-read success"><i
                                                    class="ti ti-checks"></i></span></h6>
                                    </div>
                                    <div class="message-content">
                                        <div class="file-attach">
                                            <span class="file-icon">
                                                <i class="ti ti-files"></i>
                                            </span>
                                            <div class="ms-2 overflow-hidden">
                                                <h6 class="mb-1">Ecommerce.zip</h6>
                                                <p>14.23 KB</p>
                                            </div>
                                            <a href="http://localhost:8000/javascript:void(0);" class="download-icon">
                                                <i class="ti ti-download"></i>
                                            </a>
                                        </div>
                                        <div class="emoj-group wrap-emoji-group ">
                                            <ul>
                                                <li class="emoj-action"><a
                                                        href="http://localhost:8000/javascript:void(0);"><i
                                                            class="ti ti-mood-smile"></i></a>
                                                    <div class="emoj-group-list">
                                                        <ul>
                                                            <li><a href="http://localhost:8000/javascript:void(0);"><img
                                                                        src="http://localhost:8000/assets/img/icons/emonji-02.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="http://localhost:8000/javascript:void(0);"><img
                                                                        src="http://localhost:8000/assets/img/icons/emonji-05.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="http://localhost:8000/javascript:void(0);"><img
                                                                        src="http://localhost:8000/assets/img/icons/emonji-06.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="http://localhost:8000/javascript:void(0);"><img
                                                                        src="http://localhost:8000/assets/img/icons/emonji-07.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="http://localhost:8000/javascript:void(0);"><img
                                                                        src="http://localhost:8000/assets/img/icons/emonji-08.svg"
                                                                        alt="Icon"></a></li>
                                                            <li class="add-emoj"><a
                                                                    href="http://localhost:8000/javascript:void(0);"><i
                                                                        class="ti ti-plus"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="http://localhost:8000/javascript:void(0);"
                                                        data-bs-toggle="modal" data-bs-target="#forward-message"><i
                                                            class="ti ti-arrow-forward-up"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-avatar">
                                    <img src="http://localhost:8000/assets/img/profiles/avatar-17.jpg"
                                        class="rounded-circle dreams_chat" alt="image">
                                </div>
                            </div>
                            <div class="chats">
                                <div class="chat-avatar">
                                    <img src="http://localhost:8000/assets/img/profiles/avatar-06.jpg"
                                        class="rounded-circle" alt="image">
                                </div>
                                <div class="chat-content">
                                    <div class="chat-profile-name">
                                        <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span
                                                class="chat-time">02:39 PM</span><span class="msg-read success"><i
                                                    class="ti ti-checks"></i></span></h6>
                                    </div>
                                    <div class="chat-info">
                                        <div class="message-content">
                                            Hi there! I'm interested in learning more
                                            <div class="emoj-group">
                                                <ul>
                                                    <li class="emoj-action"><a
                                                            href="http://localhost:8000/javascript:void(0);"><i
                                                                class="ti ti-mood-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-02.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-05.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-06.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-07.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-08.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-03.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-10.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-09.svg"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a
                                                                        href="http://localhost:8000/javascript:void(0);"><i
                                                                            class="ti ti-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="http://localhost:8000/#" data-bs-toggle="modal"
                                                            data-bs-target="#forward-message"><i
                                                                class="ti ti-arrow-forward-up"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="chat-actions">
                                            <a class="#" href="http://localhost:8000/#"
                                                data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li><a class="dropdown-item reply-btn"
                                                        href="http://localhost:8000/#"><i
                                                            class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-pinned me-2"></i>Forward</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-file-export me-2"></i>Copy</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"
                                                        data-bs-toggle="modal" data-bs-target="#message-delete"><i
                                                            class="ti ti-trash me-2"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-box-align-right me-2"></i>Archeive Chat</a>
                                                </li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="emonji-wrap">
                                        <a href="http://localhost:8000/javascript:void(0);"><img
                                                src="http://localhost:8000/assets/img/icons/emonji-02.svg"
                                                class="me-2" alt="icon">24</a>
                                        <a href="http://localhost:8000/javascript:void(0);"><img
                                                src="http://localhost:8000/assets/img/icons/emonji-03.svg"
                                                class="me-2" alt="icon">15</a>
                                        <a href="http://localhost:8000/javascript:void(0);"><img
                                                src="http://localhost:8000/assets/img/icons/emonji-04.svg"
                                                class="me-2" alt="icon">15</a>
                                    </div>
                                </div>
                            </div>
                            <div class="chats">
                                <div class="chat-avatar">
                                    <img src="http://localhost:8000/assets/img/profiles/avatar-06.jpg"
                                        class="rounded-circle" alt="image">
                                </div>
                                <div class="chat-content">
                                    <div class="chat-profile-name">
                                        <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span
                                                class="chat-time">02:39 PM</span><span class="msg-read success"><i
                                                    class="ti ti-checks"></i></span></h6>
                                    </div>
                                    <div class="chat-info">
                                        <div class="message-content">
                                            <div class="chat-img">
                                                <div class="img-wrap">
                                                    <img src="http://localhost:8000/assets/img/gallery/gallery-01.jpg"
                                                        alt="img">
                                                    <div class="img-overlay">
                                                        <a class="gallery-img" data-fancybox="gallery-img"
                                                            href="http://localhost:8000/assets/imggallery/gallery-01.jpg"
                                                            title="Demo 01"><i class="ti ti-eye"></i></a>
                                                        <a href="http://localhost:8000/#"><i
                                                                class="ti ti-download"></i></a>
                                                    </div>
                                                </div>
                                                <div class="img-wrap">
                                                    <img src="http://localhost:8000/assets/img/gallery/gallery-02.jpg"
                                                        alt="img">
                                                    <div class="img-overlay">
                                                        <a class="gallery-img" data-fancybox="gallery-img"
                                                            href="http://localhost:8000/assets/img/gallery/gallery-02.jpg"
                                                            title="Demo 02"><i class="ti ti-eye"></i></a>
                                                        <a href="http://localhost:8000/#"><i
                                                                class="ti ti-download"></i></a>
                                                    </div>
                                                </div>
                                                <div class="img-wrap">
                                                    <img src="http://localhost:8000/assets/img/gallery/gallery-03.jpg"
                                                        alt="img">
                                                    <div class="img-overlay">
                                                        <a class="gallery-img" data-fancybox="gallery-img"
                                                            href="http://localhost:8000/assets/img/gallery/gallery-03.jpg"
                                                            title="Demo 03"><i class="ti ti-eye"></i></a>
                                                        <a href="http://localhost:8000/#"><i
                                                                class="ti ti-download"></i></a>
                                                    </div>
                                                </div>
                                                <div class="img-wrap">
                                                    <img src="http://localhost:8000/assets/img/gallery/gallery-04.jpg"
                                                        alt="img">
                                                    <div class="img-overlay">
                                                        <a class="gallery-img" data-fancybox="gallery-img"
                                                            href="http://localhost:8000/assets/img/gallery/gallery-04.jpg"
                                                            title="Demo 04"><i class="ti ti-eye"></i></a>
                                                        <a href="http://localhost:8000/#"><i
                                                                class="ti ti-download"></i></a>
                                                    </div>
                                                </div>
                                                <div class="img-wrap">
                                                    <img src="http://localhost:8000/assets/img/gallery/gallery-05.jpg"
                                                        alt="img">
                                                    <div class="img-overlay">
                                                        <a class="gallery-img" data-fancybox="gallery-img"
                                                            href="http://localhost:8000/assets/img/gallery/gallery-05.jpg"
                                                            title="Demo 04"><i class="ti ti-eye"></i></a>
                                                        <a href="http://localhost:8000/#"><i
                                                                class="ti ti-download"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="gallery-img view-all d-flex align-items-center justify-content-center mt-3"
                                                href="http://localhost:8000/assets/img/gallery/gallery-05.jpg"
                                                data-fancybox="gallery-img">
                                                View All Images<i class="ti ti-arrow-right ms-2"></i>
                                            </a>
                                            <div class="emoj-group">
                                                <ul>
                                                    <li class="emoj-action"><a
                                                            href="http://localhost:8000/javascript:void(0);"><i
                                                                class="ti ti-mood-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-02.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-05.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-06.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-07.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-08.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-03.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-10.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-09.svg"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a
                                                                        href="http://localhost:8000/javascript:void(0);"><i
                                                                            class="ti ti-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="http://localhost:8000/#" data-bs-toggle="modal"
                                                            data-bs-target="#forward-message"><i
                                                                class="ti ti-arrow-forward-up"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="chat-actions">
                                            <a class="#" href="http://localhost:8000/#"
                                                data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li><a class="dropdown-item reply-btn"
                                                        href="http://localhost:8000/#"><i
                                                            class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-pinned me-2"></i>Forward</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-file-export me-2"></i>Copy</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"
                                                        data-bs-toggle="modal" data-bs-target="#message-delete"><i
                                                            class="ti ti-trash me-2"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-box-align-right me-2"></i>Archeive Chat</a>
                                                </li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chats chats-right">
                                <div class="chat-content">
                                    <div class="chat-profile-name text-end">
                                        <h6>You<i class="ti ti-circle-filled fs-7 mx-2"></i><span
                                                class="chat-time">02:39 PM</span><span class="msg-read success"><i
                                                    class="ti ti-checks"></i></span></h6>
                                    </div>
                                    <div class="chat-info">
                                        <div class="chat-actions">
                                            <a class="#" href="http://localhost:8000/#"
                                                data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li><a class="dropdown-item reply-btn"
                                                        href="http://localhost:8000/#"><i
                                                            class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-pinned me-2"></i>Forward</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-file-export me-2"></i>Copy</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"
                                                        data-bs-toggle="modal" data-bs-target="#message-delete"><i
                                                            class="ti ti-trash me-2"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-box-align-right me-2"></i>Archeive Chat</a>
                                                </li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                            </ul>
                                        </div>
                                        <div class="message-content">
                                            Send me your Profile Video if Any??
                                            <div class="emoj-group">
                                                <ul>
                                                    <li class="emoj-action"><a
                                                            href="http://localhost:8000/javascript:void(0);"><i
                                                                class="ti ti-mood-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-02.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-05.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-06.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-07.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-08.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-03.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-10.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-09.svg"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a
                                                                        href="http://localhost:8000/javascript:void(0);"><i
                                                                            class="ti ti-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="http://localhost:8000/#" data-bs-toggle="modal"
                                                            data-bs-target="#forward-message"><i
                                                                class="ti ti-arrow-forward-up"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-avatar">
                                    <img src="http://localhost:8000/assets/img/profiles/avatar-17.jpg"
                                        class="rounded-circle dreams_chat" alt="image">
                                </div>
                            </div>
                            <div class="chats">
                                <div class="chat-avatar">
                                    <img src="http://localhost:8000/assets/img/profiles/avatar-06.jpg"
                                        class="rounded-circle" alt="image">
                                </div>
                                <div class="chat-content">
                                    <div class="chat-profile-name">
                                        <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span
                                                class="chat-time">02:39 PM</span><span class="msg-read success"><i
                                                    class="ti ti-checks"></i></span></h6>
                                    </div>
                                    <div class="chat-info">
                                        <div class="message-content">
                                            <div class="message-link">
                                                <div class="link-img">
                                                    <img src="http://localhost:8000/assets/img/icons/github.svg"
                                                        alt="Icon">
                                                </div>
                                                <a href="http://localhost:8000/javascript:void(0);"
                                                    class="link-primary mt-2">https://segmentfault.com/u/guanguans/articles</a>
                                            </div>
                                            <div class="emoj-group">
                                                <ul>
                                                    <li class="emoj-action"><a
                                                            href="http://localhost:8000/javascript:void(0);"><i
                                                                class="ti ti-mood-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-02.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-05.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-06.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-07.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-08.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-03.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-10.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-09.svg"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a
                                                                        href="http://localhost:8000/javascript:void(0);"><i
                                                                            class="ti ti-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="http://localhost:8000/#" data-bs-toggle="modal"
                                                            data-bs-target="#forward-message"><i
                                                                class="ti ti-arrow-forward-up"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="chat-actions">
                                            <a class="#" href="http://localhost:8000/#"
                                                data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li><a class="dropdown-item reply-btn"
                                                        href="http://localhost:8000/#"><i
                                                            class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-pinned me-2"></i>Forward</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-file-export me-2"></i>Copy</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"
                                                        data-bs-toggle="modal" data-bs-target="#message-delete"><i
                                                            class="ti ti-trash me-2"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-box-align-right me-2"></i>Archeive Chat</a>
                                                </li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chats">
                                <div class="chat-avatar">
                                    <img src="http://localhost:8000/assets/img/profiles/avatar-06.jpg"
                                        class="rounded-circle" alt="image">
                                </div>
                                <div class="chat-content">
                                    <div class="chat-profile-name">
                                        <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span
                                                class="chat-time">02:39 PM</span><span class="msg-read success"><i
                                                    class="ti ti-checks"></i></span></h6>
                                    </div>
                                    <div class="chat-info">
                                        <div class="message-content">
                                            <div class="chat-forward">
                                                <div class="forward-text text-primary"><i
                                                        class="ti ti-arrow-forward me-2"></i>Forward</div>
                                            </div>
                                            <div class="file-attach">
                                                <span class="file-icon">
                                                    <i class="ti ti-files"></i>
                                                </span>
                                                <div class="ms-2 overflow-hidden">
                                                    <h6 class="mb-1">Ecommerce.zip</h6>
                                                    <p>14.23 KB</p>
                                                </div>
                                                <a href="http://localhost:8000/javascript:void(0);"
                                                    class="download-icon">
                                                    <i class="ti ti-download"></i>
                                                </a>
                                            </div>
                                            <div class="emoj-group">
                                                <ul>
                                                    <li class="emoj-action"><a
                                                            href="http://localhost:8000/javascript:void(0);"><i
                                                                class="ti ti-mood-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-02.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-05.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-06.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-07.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-08.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-03.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-10.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-09.svg"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a
                                                                        href="http://localhost:8000/javascript:void(0);"><i
                                                                            class="ti ti-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="http://localhost:8000/#" data-bs-toggle="modal"
                                                            data-bs-target="#forward-message"><i
                                                                class="ti ti-arrow-forward-up"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="chat-actions">
                                            <a class="#" href="http://localhost:8000/#"
                                                data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li><a class="dropdown-item reply-btn"
                                                        href="http://localhost:8000/#"><i
                                                            class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-pinned me-2"></i>Forward</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-file-export me-2"></i>Copy</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"
                                                        data-bs-toggle="modal" data-bs-target="#message-delete"><i
                                                            class="ti ti-trash me-2"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-box-align-right me-2"></i>Archeive Chat</a>
                                                </li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chats chats-right">
                                <div class="chat-content">
                                    <div class="chat-profile-name text-end">
                                        <h6>You<i class="ti ti-circle-filled fs-7 mx-2"></i><span
                                                class="chat-time">02:39 PM</span><span class="msg-read success"><i
                                                    class="ti ti-checks"></i></span></h6>
                                    </div>
                                    <div class="chat-info">
                                        <div class="chat-actions">
                                            <a class="#" href="http://localhost:8000/#"
                                                data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li><a class="dropdown-item reply-btn"
                                                        href="http://localhost:8000/#"><i
                                                            class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-pinned me-2"></i>Forward</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-file-export me-2"></i>Copy</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"
                                                        data-bs-toggle="modal" data-bs-target="#message-delete"><i
                                                            class="ti ti-trash me-2"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-box-align-right me-2"></i>Archeive Chat</a>
                                                </li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                            </ul>
                                        </div>
                                        <div class="message-content">
                                            Send me your Profile Video if Any??
                                            <div class="emoj-group">
                                                <ul>
                                                    <li class="emoj-action"><a
                                                            href="http://localhost:8000/javascript:void(0);"><i
                                                                class="ti ti-mood-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-02.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-05.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-06.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-07.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-08.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-03.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-10.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-09.svg"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a
                                                                        href="http://localhost:8000/javascript:void(0);"><i
                                                                            class="ti ti-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="http://localhost:8000/#" data-bs-toggle="modal"
                                                            data-bs-target="#forward-message"><i
                                                                class="ti ti-arrow-forward-up"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-avatar">
                                    <img src="http://localhost:8000/assets/img/profiles/avatar-17.jpg"
                                        class="rounded-circle dreams_chat" alt="image">
                                </div>
                            </div>
                            <div class="chats">
                                <div class="chat-avatar">
                                    <img src="http://localhost:8000/assets/img/profiles/avatar-06.jpg"
                                        class="rounded-circle" alt="image">
                                </div>
                                <div class="chat-content">
                                    <div class="chat-profile-name">
                                        <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span
                                                class="chat-time">02:39 PM</span><span class="msg-read success"><i
                                                    class="ti ti-checks"></i></span></h6>
                                    </div>
                                    <div class="chat-info">
                                        <div class="message-content">
                                            <div class="message-video">
                                                <video width="400" controls>
                                                    <source src="http://localhost:8000/assets/img/video/video.mp4"
                                                        type="video/mp4">
                                                    Your browser does not support HTML5 video.
                                                </video>
                                            </div>
                                            <div class="emoj-group">
                                                <ul>
                                                    <li class="emoj-action"><a
                                                            href="http://localhost:8000/javascript:void(0);"><i
                                                                class="ti ti-mood-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-02.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-05.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-06.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-07.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-08.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-03.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-10.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-09.svg"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a
                                                                        href="http://localhost:8000/javascript:void(0);"><i
                                                                            class="ti ti-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="http://localhost:8000/#" data-bs-toggle="modal"
                                                            data-bs-target="#forward-message"><i
                                                                class="ti ti-arrow-forward-up"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="chat-actions">
                                            <a class="#" href="http://localhost:8000/#"
                                                data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li><a class="dropdown-item reply-btn"
                                                        href="http://localhost:8000/#"><i
                                                            class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-pinned me-2"></i>Forward</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-file-export me-2"></i>Copy</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"
                                                        data-bs-toggle="modal" data-bs-target="#message-delete"><i
                                                            class="ti ti-trash me-2"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-box-align-right me-2"></i>Archeive Chat</a>
                                                </li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chats chats-right">
                                <div class="chat-content">
                                    <div class="chat-profile-name text-end">
                                        <h6>You<i class="ti ti-circle-filled fs-7 mx-2"></i><span
                                                class="chat-time">02:39 PM</span><span class="msg-read success"><i
                                                    class="ti ti-checks"></i></span></h6>
                                    </div>
                                    <div class="chat-info">
                                        <div class="chat-actions">
                                            <a class="#" href="http://localhost:8000/#"
                                                data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li><a class="dropdown-item reply-btn"
                                                        href="http://localhost:8000/#"><i
                                                            class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-pinned me-2"></i>Forward</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-file-export me-2"></i>Copy</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"
                                                        data-bs-toggle="modal" data-bs-target="#message-delete"><i
                                                            class="ti ti-trash me-2"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-box-align-right me-2"></i>Archeive Chat</a>
                                                </li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                            </ul>
                                        </div>
                                        <div class="message-content">
                                            Thanks for Sharing!!! Can we have a call
                                            <div class="emoj-group">
                                                <ul>
                                                    <li class="emoj-action"><a
                                                            href="http://localhost:8000/javascript:void(0);"><i
                                                                class="ti ti-mood-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-02.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-05.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-06.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-07.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-08.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-03.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-10.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-09.svg"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a
                                                                        href="http://localhost:8000/javascript:void(0);"><i
                                                                            class="ti ti-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="http://localhost:8000/#" data-bs-toggle="modal"
                                                            data-bs-target="#forward-message"><i
                                                                class="ti ti-arrow-forward-up"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-avatar">
                                    <img src="http://localhost:8000/assets/img/profiles/avatar-17.jpg"
                                        class="rounded-circle dreams_chat" alt="image">
                                </div>
                            </div>
                            <div class="chats">
                                <div class="chat-avatar">
                                    <img src="http://localhost:8000/assets/img/profiles/avatar-06.jpg"
                                        class="rounded-circle" alt="image">
                                </div>
                                <div class="chat-content">
                                    <div class="chat-profile-name">
                                        <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span
                                                class="chat-time">02:39 PM</span><span class="msg-read success"><i
                                                    class="ti ti-checks"></i></span></h6>
                                    </div>
                                    <div class="chat-info">
                                        <div class="message-content">
                                            <div class="chat-profile-name">
                                                <h6>You</h6>
                                            </div>
                                            <div class="message-reply">
                                                Thanks for Sharing!!! Can we have a call??
                                            </div>
                                            Yes Please
                                            <div class="emoj-group">
                                                <ul>
                                                    <li class="emoj-action"><a
                                                            href="http://localhost:8000/javascript:void(0);"><i
                                                                class="ti ti-mood-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-02.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-05.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-06.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-07.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-08.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-03.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-10.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-09.svg"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a
                                                                        href="http://localhost:8000/javascript:void(0);"><i
                                                                            class="ti ti-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="http://localhost:8000/#" data-bs-toggle="modal"
                                                            data-bs-target="#forward-message"><i
                                                                class="ti ti-arrow-forward-up"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="chat-actions">
                                            <a class="#" href="http://localhost:8000/#"
                                                data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li><a class="dropdown-item reply-btn"
                                                        href="http://localhost:8000/#"><i
                                                            class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-pinned me-2"></i>Forward</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-file-export me-2"></i>Copy</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"
                                                        data-bs-toggle="modal" data-bs-target="#message-delete"><i
                                                            class="ti ti-trash me-2"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-box-align-right me-2"></i>Archeive Chat</a>
                                                </li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chats">
                                <div class="chat-avatar">
                                    <img src="http://localhost:8000/assets/img/profiles/avatar-06.jpg"
                                        class="rounded-circle" alt="image">
                                </div>
                                <div class="chat-content">
                                    <div class="chat-profile-name">
                                        <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span
                                                class="chat-time">02:39 PM</span><span class="msg-read success"><i
                                                    class="ti ti-checks"></i></span></h6>
                                    </div>
                                    <div class="chat-info">
                                        <div class="message-content">
                                            <div class="file-attach">
                                                <div class="d-flex align-items-center">
                                                    <span class="file-icon bg-danger text-white">
                                                        <i class="ti ti-phone-call"></i>
                                                    </span>
                                                    <div class="ms-2 overflow-hidden">
                                                        <h6 class="mb-1 text-truncate">Missed Audio Call</h6>
                                                        <p>10 Min 23 Sec</p>
                                                    </div>
                                                </div>
                                                <a href="http://localhost:8000/javascript:void(0);"
                                                    class="download-icon">
                                                    <i class="ti ti-download"></i>
                                                </a>
                                            </div>
                                            <div class="emoj-group">
                                                <ul>
                                                    <li class="emoj-action"><a
                                                            href="http://localhost:8000/javascript:void(0);"><i
                                                                class="ti ti-mood-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-02.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-05.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-06.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-07.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-08.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-03.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-10.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-09.svg"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a
                                                                        href="http://localhost:8000/javascript:void(0);"><i
                                                                            class="ti ti-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="http://localhost:8000/#" data-bs-toggle="modal"
                                                            data-bs-target="#forward-message"><i
                                                                class="ti ti-arrow-forward-up"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="chat-actions">
                                            <a class="#" href="http://localhost:8000/#"
                                                data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li><a class="dropdown-item reply-btn"
                                                        href="http://localhost:8000/#"><i
                                                            class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-pinned me-2"></i>Forward</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-file-export me-2"></i>Copy</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"
                                                        data-bs-toggle="modal" data-bs-target="#message-delete"><i
                                                            class="ti ti-trash me-2"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-box-align-right me-2"></i>Archeive Chat</a>
                                                </li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chats chats-right">
                                <div class="chat-content">
                                    <div class="chat-profile-name text-end">
                                        <h6>You<i class="ti ti-circle-filled fs-7 mx-2"></i><span
                                                class="chat-time">02:39 PM</span><span class="msg-read success"><i
                                                    class="ti ti-checks"></i></span></h6>
                                    </div>
                                    <div class="chat-info">
                                        <div class="chat-actions">
                                            <a class="#" href="http://localhost:8000/#"
                                                data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li><a class="dropdown-item reply-btn"
                                                        href="http://localhost:8000/#"><i
                                                            class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-pinned me-2"></i>Forward</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-file-export me-2"></i>Copy</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-heart me-2"></i>Mark as Favourite</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"
                                                        data-bs-toggle="modal" data-bs-target="#message-delete"><i
                                                            class="ti ti-trash me-2"></i>Delete</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-check me-2"></i>Mark as Unread</a></li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-box-align-right me-2"></i>Archeive Chat</a>
                                                </li>
                                                <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                            class="ti ti-pinned me-2"></i>Pin Chat</a></li>
                                            </ul>
                                        </div>
                                        <div class="message-content">
                                            <div class="file-attach">
                                                <span class="file-icon bg-success text-white">
                                                    <i class="ti ti-phone-incoming"></i>
                                                </span>
                                                <div class="ms-2 overflow-hidden">
                                                    <h6 class="mb-1">Audio Call Ended</h6>
                                                    <p>07 Min 34 Sec</p>
                                                </div>
                                                <a href="http://localhost:8000/javascript:void(0);"
                                                    class="download-icon">
                                                    <i class="ti ti-download"></i>
                                                </a>
                                            </div>
                                            <div class="emoj-group">
                                                <ul>
                                                    <li class="emoj-action"><a
                                                            href="http://localhost:8000/javascript:void(0);"><i
                                                                class="ti ti-mood-smile"></i></a>
                                                        <div class="emoj-group-list">
                                                            <ul>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-02.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-05.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-06.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-07.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-08.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-03.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-10.svg"
                                                                            alt="Icon"></a></li>
                                                                <li><a
                                                                        href="http://localhost:8000/javascript:void(0);"><img
                                                                            src="http://localhost:8000/assets/img/icons/emonji-09.svg"
                                                                            alt="Icon"></a></li>
                                                                <li class="add-emoj"><a
                                                                        href="http://localhost:8000/javascript:void(0);"><i
                                                                            class="ti ti-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="http://localhost:8000/#" data-bs-toggle="modal"
                                                            data-bs-target="#forward-message"><i
                                                                class="ti ti-arrow-forward-up"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-avatar">
                                    <img src="http://localhost:8000/assets/img/profiles/avatar-17.jpg"
                                        class="rounded-circle dreams_chat" alt="image">
                                </div>
                            </div>
                            <div class="chats">
                                <div class="chat-avatar">
                                    <img src="http://localhost:8000/assets/img/profiles/avatar-06.jpg"
                                        class="rounded-circle" alt="image">
                                </div>
                                <div class="chat-content">
                                    <div class="chat-profile-name">
                                        <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span
                                                class="chat-time">02:39 PM</span><span class="msg-read success"><i
                                                    class="ti ti-checks"></i></span></h6>
                                    </div>
                                    <div class="message-content">
                                        <span class="animate-typing">is typing
                                            <span class="dot"></span>
                                            <span class="dot"></span>
                                            <span class="dot"></span>
                                        </span>
                                        <div class="emoj-group">
                                            <ul>
                                                <li class="emoj-action"><a
                                                        href="http://localhost:8000/javascript:void(0);"><i
                                                            class="ti ti-mood-smile"></i></a>
                                                    <div class="emoj-group-list">
                                                        <ul>
                                                            <li><a href="http://localhost:8000/javascript:void(0);"><img
                                                                        src="http://localhost:8000/assets/img/icons/emonji-02.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="http://localhost:8000/javascript:void(0);"><img
                                                                        src="http://localhost:8000/assets/img/icons/emonji-05.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="http://localhost:8000/javascript:void(0);"><img
                                                                        src="http://localhost:8000/assets/img/icons/emonji-06.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="http://localhost:8000/javascript:void(0);"><img
                                                                        src="http://localhost:8000/assets/img/icons/emonji-07.svg"
                                                                        alt="Icon"></a></li>
                                                            <li><a href="http://localhost:8000/javascript:void(0);"><img
                                                                        src="http://localhost:8000/assets/img/icons/emonji-08.svg"
                                                                        alt="Icon"></a></li>
                                                            <li class="add-emoj"><a
                                                                    href="http://localhost:8000/javascript:void(0);"><i
                                                                        class="ti ti-plus"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="http://localhost:8000/#" data-bs-toggle="modal"
                                                        data-bs-target="#forward-message"><i
                                                            class="ti ti-arrow-forward-up"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chat-footer">
                    <form class="footer-form">
                        <div class="chats reply-chat reply-div" id="reply-div">
                            <div class="chat-avatar">
                                <img src="http://localhost:8000/assets/img/profiles/avatar-06.jpg"
                                    class="rounded-circle" alt="image">
                            </div>
                            <div class="chat-content">
                                <div class="chat-profile-name">
                                    <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span
                                            class="chat-time">02:39 PM</span><span class="msg-read success"><i
                                                class="ti ti-checks"></i></span></h6>
                                </div>
                                <div class="chat-info">
                                    <div class="message-content">
                                        <div class="message-reply reply-content">
                                            Thank you for your support
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="http://localhost:8000/#" class="close-replay">
                                <i class="ti ti-x"></i>
                            </a>
                        </div>
                        <div class="chat-footer-wrap">
                            <div class="form-item">
                                <a href="http://localhost:8000/#" class="action-circle"><i
                                        class="ti ti-microphone"></i></a>
                            </div>
                            <div class="form-wrap">
                                <input type="text" class="form-control" placeholder="Type Your Message">
                            </div>
                            <div class="form-item emoj-action-foot">
                                <a href="http://localhost:8000/#" class="action-circle"><i
                                        class="ti ti-mood-smile"></i></a>
                                <div class="emoj-group-list-foot down-emoji-circle">
                                    <ul>
                                        <li><a href="http://localhost:8000/javascript:void(0);"><img
                                                    src="http://localhost:8000/assets/img/icons/emonji-02.svg"
                                                    alt="Icon"></a></li>
                                        <li><a href="http://localhost:8000/javascript:void(0);"><img
                                                    src="http://localhost:8000/assets/img/icons/emonji-05.svg"
                                                    alt="Icon"></a></li>
                                        <li><a href="http://localhost:8000/javascript:void(0);"><img
                                                    src="http://localhost:8000/assets/img/icons/emonji-06.svg"
                                                    alt="Icon"></a></li>
                                        <li><a href="http://localhost:8000/javascript:void(0);"><img
                                                    src="http://localhost:8000/assets/img/icons/emonji-07.svg"
                                                    alt="Icon"></a></li>
                                        <li><a href="http://localhost:8000/javascript:void(0);"><img
                                                    src="http://localhost:8000/assets/img/icons/emonji-08.svg"
                                                    alt="Icon"></a></li>
                                        <li class="add-emoj"><a href="http://localhost:8000/javascript:void(0);"><i
                                                    class="ti ti-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div
                                class="form-item position-relative d-flex align-items-center justify-content-center ">
                                <a href="http://localhost:8000/#"
                                    class="action-circle file-action position-absolute">
                                    <i class="ti ti-folder"></i>
                                </a>
                                <input type="file" class="open-file position-relative" name="files"
                                    id="files">
                            </div>
                            <div class="form-item">
                                <a href="http://localhost:8000/#" data-bs-toggle="dropdown">
                                    <i class="ti ti-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end p-3">
                                    <a href="http://localhost:8000/#" class="dropdown-item"><i
                                            class="ti ti-camera-selfie me-2"></i>Camera</a>
                                    <a href="http://localhost:8000/#" class="dropdown-item"><i
                                            class="ti ti-photo-up me-2"></i>Gallery</a>
                                    <a href="http://localhost:8000/#" class="dropdown-item"><i
                                            class="ti ti-music me-2"></i>Audio</a>
                                    <a href="http://localhost:8000/#" class="dropdown-item"><i
                                            class="ti ti-map-pin-share me-2"></i>Location</a>
                                    <a href="http://localhost:8000/#" class="dropdown-item"><i
                                            class="ti ti-user-check me-2"></i>Contact</a>
                                </div>
                            </div>
                            <div class="form-btn">
                                <button class="btn btn-primary" type="submit">
                                    <i class="ti ti-send"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Chat -->
            <!-- Contact Info -->
            <div class="chat-offcanvas offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false"
                tabindex="-1" id="contact-profile" aria-labelledby="chatUserMoreLabel">
                <div class="offcanvas-header">
                    <h4 class="offcanvas-title" id="chatUserMoreLabel">Contact Info</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                            class="ti ti-x"></i></button>
                </div>
                <div class="offcanvas-body">
                    <div class="chat-contact-info">
                        <div class="profile-content">
                            <div class="contact-profile-info">
                                <div class="avatar avatar-xxl online mb-2">
                                    <img src="http://localhost:8000/assets/img/profiles/avatar-06.jpg"
                                        class="rounded-circle" alt="img">
                                </div>
                                <h6>Edward Lietz</h6>
                                <p>Last seen at 07:15 PM</p>
                            </div>
                            <div class="row gx-3">
                                <div class="col">
                                    <a class="action-wrap">
                                        <i class="ti ti-phone"></i>
                                        <p>Audio</p>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="action-wrap">
                                        <i class="ti ti-video"></i>
                                        <p>Video</p>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="action-wrap">
                                        <i class="ti ti-brand-hipchat"></i>
                                        <p>Chat</p>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="action-wrap">
                                        <i class="ti ti-search"></i>
                                        <p>Search</p>
                                    </a>
                                </div>
                            </div>
                            <div class="content-wrapper">
                                <h5 class="sub-title">Profile Info</h5>
                                <div class="card">
                                    <div class="card-body">
                                        <ul class="list-group profile-item">
                                            <li class="list-group-item">
                                                <div class="profile-info">
                                                    <h6>Name</h6>
                                                    <p>Edward Lietz</p>
                                                </div>
                                                <div class="profile-icon">
                                                    <i class="ti ti-user-circle"></i>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="info">
                                                    <h6>Email Address</h6>
                                                    <p>info@example.com</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="ti ti-mail-heart"></i>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="info">
                                                    <h6>Phone</h6>
                                                    <p>555-555-21541</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="ti ti-phone-check"></i>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="info">
                                                    <h6>Bio</h6>
                                                    <p>Hello, I am using DreamsChat</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="ti ti-user-check"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="content-wrapper">
                                <h5 class="sub-title">Social Profiles</h5>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="social-icon">
                                            <a href="http://localhost:8000/javascript:void(0);"><i
                                                    class="ti ti-brand-facebook"></i></a>
                                            <a href="http://localhost:8000/javascript:void(0);"><i
                                                    class="ti ti-brand-twitter"></i></a>
                                            <a href="http://localhost:8000/javascript:void(0);"><i
                                                    class="ti ti-brand-instagram"></i></a>
                                            <a href="http://localhost:8000/javascript:void(0);"><i
                                                    class="ti ti-brand-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-wrapper">
                                <h5 class="sub-title">Media Details</h5>
                                <div class="chat-file">
                                    <div class="file-item action-wrap">
                                        <div class="accordion accordion-flush chat-accordion" id="mediafile">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <a href="http://localhost:8000/#"
                                                        class="accordion-button collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#chatuser-collapse1" aria-expanded="false"
                                                        aria-controls="chatuser-collapse1">
                                                        <i class="ti ti-photo-shield me-2"></i>Photos
                                                    </a>
                                                </h2>
                                                <div id="chatuser-collapse1" class="accordion-collapse collapse"
                                                    data-bs-parent="#mediafile">
                                                    <div class="accordion-body">
                                                        <div class="chat-user-photo">
                                                            <div class="chat-img contact-gallery">
                                                                <div class="img-wrap">
                                                                    <img src="http://localhost:8000/assets/img/gallery/gallery-01.jpg"
                                                                        alt="img">
                                                                    <div class="img-overlay">
                                                                        <a class="gallery-img"
                                                                            data-fancybox="gallery-img"
                                                                            href="http://localhost:8000/assets/imggallery/gallery-01.jpg"
                                                                            title="Demo 01"><i
                                                                                class="ti ti-eye"></i></a>
                                                                        <a href="http://localhost:8000/#"><i
                                                                                class="ti ti-download"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="img-wrap">
                                                                    <img src="http://localhost:8000/assets/img/gallery/gallery-02.jpg"
                                                                        alt="img">
                                                                    <div class="img-overlay">
                                                                        <a class="gallery-img"
                                                                            data-fancybox="gallery-img"
                                                                            href="http://localhost:8000/assets/img/gallery/gallery-02.jpg"
                                                                            title="Demo 02"><i
                                                                                class="ti ti-eye"></i></a>
                                                                        <a href="http://localhost:8000/#"><i
                                                                                class="ti ti-download"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="img-wrap">
                                                                    <img src="http://localhost:8000/assets/img/gallery/gallery-03.jpg"
                                                                        alt="img">
                                                                    <div class="img-overlay">
                                                                        <a class="gallery-img"
                                                                            data-fancybox="gallery-img"
                                                                            href="http://localhost:8000/assets/img/gallery/gallery-03.jpg"
                                                                            title="Demo 03"><i
                                                                                class="ti ti-eye"></i></a>
                                                                        <a href="http://localhost:8000/#"><i
                                                                                class="ti ti-download"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="img-wrap">
                                                                    <img src="http://localhost:8000/assets/img/gallery/gallery-04.jpg"
                                                                        alt="img">
                                                                    <div class="img-overlay">
                                                                        <a class="gallery-img"
                                                                            data-fancybox="gallery-img"
                                                                            href="http://localhost:8000/assets/img/gallery/gallery-04.jpg"
                                                                            title="Demo 04"><i
                                                                                class="ti ti-eye"></i></a>
                                                                        <a href="http://localhost:8000/#"><i
                                                                                class="ti ti-download"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="img-wrap">
                                                                    <img src="http://localhost:8000/assets/img/gallery/gallery-05.jpg"
                                                                        alt="img">
                                                                    <div class="img-overlay">
                                                                        <a class="gallery-img"
                                                                            data-fancybox="gallery-img"
                                                                            href="http://localhost:8000/assets/img/gallery/gallery-05.jpg"
                                                                            title="Demo 04"><i
                                                                                class="ti ti-eye"></i></a>
                                                                        <a href="http://localhost:8000/#"><i
                                                                                class="ti ti-download"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text-center">
                                                                <a class="gallery-img view-all link-primary d-inline-flex align-items-center justify-content-center mt-3"
                                                                    href="http://localhost:8000/assets/img/gallery/gallery-05.jpg"
                                                                    data-fancybox="gallery-img">
                                                                    All Images<i class="ti ti-arrow-right ms-2"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <a href="http://localhost:8000/#"
                                                        class="accordion-button collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#media-video" aria-expanded="false"
                                                        aria-controls="media-video">
                                                        <i class="ti ti-video me-2"></i>Videos
                                                    </a>
                                                </h2>
                                                <div id="media-video" class="accordion-collapse collapse"
                                                    data-bs-parent="#mediafile">
                                                    <div class="accordion-body">
                                                        <div class="chat-video">
                                                            <a href="http://localhost:8000/https://www.youtube.com/embed/Mj9WJJNp5wA"
                                                                data-fancybox="" class="fancybox video-img">
                                                                <img src="http://localhost:8000/assets/img/video/video.jpg"
                                                                    alt="img">
                                                                <span><i class="ti ti-player-play-filled"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <a href="http://localhost:8000/#"
                                                        class="accordion-button collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#media-links" aria-expanded="false"
                                                        aria-controls="media-links">
                                                        <i class="ti ti-unlink me-2"></i>Links
                                                    </a>
                                                </h2>
                                                <div id="media-links" class="accordion-collapse collapse"
                                                    data-bs-parent="#mediafile">
                                                    <div class="accordion-body">
                                                        <div class="link-item">
                                                            <span class="link-icon">
                                                                <img src="http://localhost:8000/assets/img/icons/github-icon.svg"
                                                                    alt="icon">
                                                            </span>
                                                            <div class="ms-2">
                                                                <p>https://segmentfault.com/u/ans</p>
                                                            </div>
                                                        </div>
                                                        <div class="link-item">
                                                            <span class="link-icon">
                                                                <img src="http://localhost:8000/assets/img/icons/info-icon.svg"
                                                                    alt="icon">
                                                            </span>
                                                            <div class="ms-2">
                                                                <p>https://segmentfault.com/u/ans</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <a href="http://localhost:8000/#"
                                                        class="accordion-button collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#media-document" aria-expanded="false"
                                                        aria-controls="media-document">
                                                        <i class="ti ti-unlink me-2"></i>Documents
                                                    </a>
                                                </h2>
                                                <div id="media-document" class="accordion-collapse collapse"
                                                    data-bs-parent="#mediafile">
                                                    <div class="accordion-body">
                                                        <div class="document-item">
                                                            <div class="d-flex align-items-center">
                                                                <span class="document-icon">
                                                                    <i class="ti ti-file-zip"></i>
                                                                </span>
                                                                <div class="ms-2">
                                                                    <h6>Ecommerce.zip</h6>
                                                                    <p>10.25 MB zip file</p>
                                                                </div>
                                                            </div>
                                                            <a href="http://localhost:8000/javascript:void(0);"
                                                                class="download-icon">
                                                                <i class="ti ti-download"></i>
                                                            </a>
                                                        </div>
                                                        <div class="document-item">
                                                            <div class="d-flex align-items-center">
                                                                <span class="document-icon">
                                                                    <i class="ti ti-video"></i>
                                                                </span>
                                                                <div class="ms-2">
                                                                    <h6>video-1.mp4</h6>
                                                                    <p>20.50 MB video file</p>
                                                                </div>
                                                            </div>
                                                            <a href="http://localhost:8000/javascript:void(0);"
                                                                class="download-icon">
                                                                <i class="ti ti-download"></i>
                                                            </a>
                                                        </div>
                                                        <div class="document-item">
                                                            <div class="d-flex align-items-center">
                                                                <span class="document-icon">
                                                                    <i class="ti ti-music"></i>
                                                                </span>
                                                                <div class="ms-2">
                                                                    <h6>Ecommerce.zip</h6>
                                                                    <p>6.25 MB audio file</p>
                                                                </div>
                                                            </div>
                                                            <a href="http://localhost:8000/javascript:void(0);"
                                                                class="download-icon">
                                                                <i class="ti ti-download"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-wrapper other-info">
                                <h5 class="sub-title">Common in 4 Groups</h5>
                                <div class="card">
                                    <div class="card-body list-group profile-item">
                                        <a href="http://localhost:8000/javascript:void(0);" class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-lg bg-skyblue rounded-circle me-2">
                                                    GU
                                                </div>
                                                <div class="chat-user-info">
                                                    <h6>Gustov _family</h6>
                                                    <p>Mark, Elizabeth, Aaron, <span
                                                            class="text-primary">More...</span></p>
                                                </div>
                                            </div>
                                            <span class="link-icon"><i class="ti ti-chevron-right"></i></span>
                                        </a>
                                        <a href="http://localhost:8000/javascript:void(0);"
                                            class="list-group-item border-0">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-lg bg-info rounded-circle me-2">
                                                    AM
                                                </div>
                                                <div class="chat-user-info">
                                                    <h6>AM Technology</h6>
                                                    <p>Roper, Deborah, David, <span class="text-primary">More..
                                                            .</span></p>
                                                </div>
                                            </div>
                                            <span class="link-icon"><i class="ti ti-chevron-right"></i></span>
                                        </a>
                                        <div class="text-center">
                                            <a href="http://localhost:8000/javascript:void(0);"
                                                class="view-all link-primary d-inline-flex align-items-center justify-content-center">
                                                More Groups<i class="ti ti-arrow-right ms-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-wrapper other-info mb-0">
                                <h5 class="sub-title">Others</h5>
                                <div class="card mb-0">
                                    <div class="card-body list-group profile-item">
                                        <a href="http://localhost:8000/javascript:void(0);" class="list-group-item"
                                            data-bs-toggle="offcanvas" data-bs-target="#contact-favourite">
                                            <div class="profile-info">
                                                <h6><i class="ti ti-graph me-2 text-default"></i>Favorites</h6>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="badge badge-danger count-message me-1">12</span>
                                                <span class="link-icon"><i class="ti ti-chevron-right"></i></span>
                                            </div>
                                        </a>
                                        <a href="http://localhost:8000/javascript:void(0);" class="list-group-item">
                                            <div class="profile-info">
                                                <h6><i class="ti ti-volume-off me-2 text-warning"></i>Mute
                                                    Notifications</h6>
                                            </div>
                                            <div>
                                                <span class="link-icon"><i class="ti ti-chevron-right"></i></span>
                                            </div>
                                        </a>
                                        <a href="http://localhost:8000/javascript:void(0);" class="list-group-item">
                                            <div class="profile-info">
                                                <h6><i class="ti ti-user-off me-2 text-info"></i>Block Users</h6>
                                            </div>
                                            <div>
                                                <span class="link-icon"><i class="ti ti-chevron-right"></i></span>
                                            </div>
                                        </a>
                                        <a href="http://localhost:8000/javascript:void(0);" class="list-group-item">
                                            <div class="profile-info">
                                                <h6><i class="ti ti-user-x me-2 text-purple"></i>Report Users</h6>
                                            </div>
                                            <div>
                                                <span class="link-icon"><i class="ti ti-chevron-right"></i></span>
                                            </div>
                                        </a>
                                        <a href="http://localhost:8000/javascript:void(0);" data-bs-toggle="modal"
                                            data-bs-target="#delete-chat" class="list-group-item">
                                            <div class="profile-info">
                                                <h6><i class="ti ti-trash me-2 text-danger"></i>Delete Chat</h6>
                                            </div>
                                            <div>
                                                <span class="link-icon"><i class="ti ti-chevron-right"></i></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Contact Info -->
            <!-- New Chat -->
            <div class="modal fade" id="new-chat">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">New Chat</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="ti ti-x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="chat.html">
                                <div class="search-wrap contact-search mb-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <a href="http://localhost:8000/javascript:void(0);"
                                            class="input-group-text"><i class="ti ti-search"></i></a>
                                    </div>
                                </div>
                                <h6 class="mb-3 fw-medium fs-16">Contacts</h6>
                                <div class="contact-scroll contact-select mb-3">
                                    <div class="contact-user d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-lg">
                                                <img src="http://localhost:8000/assets/img/profiles/avatar-01.jpg"
                                                    class="rounded-circle" alt="image">
                                            </div>
                                            <div class="ms-2">
                                                <h6>Aaryian Jose</h6>
                                                <p>App Developer</p>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="contact">
                                        </div>
                                    </div>
                                    <div class="contact-user d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-lg">
                                                <img src="http://localhost:8000/assets/img/profiles/avatar-02.jpg"
                                                    class="rounded-circle" alt="image">
                                            </div>
                                            <div class="ms-2">
                                                <h6>Sarika Jain</h6>
                                                <p>UI/UX Designer</p>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="contact">
                                        </div>
                                    </div>
                                    <div class="contact-user d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-lg">
                                                <img src="http://localhost:8000/assets/img/profiles/avatar-03.jpg"
                                                    class="rounded-circle" alt="image">
                                            </div>
                                            <div class="ms-2">
                                                <h6>Clyde Smith</h6>
                                                <p>Web Developer</p>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="contact">
                                        </div>
                                    </div>
                                    <div class="contact-user d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-lg">
                                                <img src="http://localhost:8000/assets/img/profiles/avatar-04.jpg"
                                                    class="rounded-circle" alt="image">
                                            </div>
                                            <div class="ms-2">
                                                <h6>Carla Jenkins</h6>
                                                <p>Business Analyst</p>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="contact">
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-6">
                                        <a href="http://localhost:8000/#" class="btn btn-outline-primary w-100"
                                            data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                                    </div>
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary w-100">Start Chat</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /New Chat -->
            <!-- Add Contact -->
            <div class="modal fade" id="add-contact">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add Contact</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="ti ti-x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="chat.html">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">First Name</label>
                                            <div class="input-icon position-relative">
                                                <input type="text" class="form-control">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-user"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Last Name</label>
                                            <div class="input-icon position-relative">
                                                <input type="text" class="form-control">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-user"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <div class="input-icon position-relative">
                                                <input type="text" class="form-control">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-mail"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Phone</label>
                                            <div class="input-icon position-relative">
                                                <input type="text" class="form-control">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-phone"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Date of Birth</label>
                                            <div class="input-icon position-relative">
                                                <input type="text" class="form-control">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-calendar-event"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Website Address</label>
                                            <div class="input-icon position-relative">
                                                <input type="text" class="form-control">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-globe"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="card border">
                                            <div class="card-header border-bottom">
                                                <h6>Social Information</h6>
                                            </div>
                                            <div class="card-body pb-1">
                                                <div class="row align-items-center">
                                                    <div class="col-md-4">
                                                        <label
                                                            class="form-label text-default fw-normal mb-3">Facebook</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="input-icon position-relative mb-3">
                                                            <input type="text" class="form-control">
                                                            <span class="input-icon-addon">
                                                                <i class="ti ti-brand-facebook"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label
                                                            class="form-label text-default fw-normal mb-3">Twitter</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="input-icon position-relative mb-3">
                                                            <input type="text" class="form-control">
                                                            <span class="input-icon-addon">
                                                                <i class="ti ti-brand-twitter"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label
                                                            class="form-labe text-default fw-normall mb-3">Instagram</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="input-icon position-relative mb-3">
                                                            <input type="text" class="form-control">
                                                            <span class="input-icon-addon">
                                                                <i class="ti ti-brand-instagram"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label text-default fw-normal mb-3">Linked
                                                            in</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="input-icon position-relative mb-3">
                                                            <input type="text" class="form-control">
                                                            <span class="input-icon-addon">
                                                                <i class="ti ti-brand-linkedin"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label
                                                            class="form-label text-default fw-normal mb-3">YouTube</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="input-icon position-relative mb-3">
                                                            <input type="text" class="form-control">
                                                            <span class="input-icon-addon">
                                                                <i class="ti ti-brand-youtube"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-6">
                                        <a href="http://localhost:8000/#" class="btn btn-outline-primary w-100"
                                            data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                                    </div>
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary w-100">Add Contact</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Add Contact -->
            <!-- Contact Detail -->
            <div class="modal fade" id="contact-details">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Contact Detail</h4>
                            <div class="d-flex align-items-center">
                                <div class="dropdown me-2">
                                    <a class="d-block" href="http://localhost:8000/#" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                        <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                    class="ti ti-share-3 me-2"></i>Share</a></li>
                                        <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                    class="ti ti-edit me-2"></i>Edit</a></li>
                                        <li><a class="dropdown-item" href="http://localhost:8000/#"
                                                data-bs-toggle="modal" data-bs-target="#block-user"><i
                                                    class="ti ti-ban me-2"></i>Block</a></li>
                                        <li><a class="dropdown-item" href="http://localhost:8000/#"><i
                                                    class="ti ti-trash me-2"></i>Delete</a></li>
                                    </ul>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <i class="ti ti-x"></i>
                                </button>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="card bg-light shadow-none">
                                <div class="card-body pb-1">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center mb-3">
                                            <span class="avatar avatar-lg">
                                                <img src="http://localhost:8000/assets/img/profiles/avatar-01.jpg"
                                                    class="rounded-circle" alt="img">
                                            </span>
                                            <div class="ms-2">
                                                <h6>Aaryian Jose</h6>
                                                <p>App Developer</p>
                                            </div>
                                        </div>
                                        <div class="contact-actions d-flex align-items-center mb-3">
                                            <a href="http://localhost:8000/chat.html" class="me-2"><i
                                                    class="ti ti-message"></i></a>
                                            <a href="http://localhost:8000/javascript:void(0);" class="me-2"
                                                data-bs-toggle="modal" data-bs-target="#voice_call"><i
                                                    class="ti ti-phone"></i></a>
                                            <a href="http://localhost:8000/javascript:void(0);" class="me-2"><i
                                                    class="ti ti-video"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border mb-3">
                                <div class="card-header border-bottom">
                                    <h6>Personal Information</h6>
                                </div>
                                <div class="card-body pb-1">
                                    <div class="mb-2">
                                        <div class="row align-items-center">
                                            <div class="col-sm-6">
                                                <p class="mb-2 d-flex align-items-center"><i
                                                        class="ti ti-clock-hour-4 me-1"></i>Local Time</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="fw-medium fs-14 mb-2">10:00 AM</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="mb-2 d-flex align-items-center"><i
                                                        class="ti ti-calendar-event me-1"></i>Date of Birth</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="fw-medium fs-14 mb-2">22 July 2024</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="mb-2 d-flex align-items-center"><i
                                                        class="ti ti-phone me-1"></i>Phone Number</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="fw-medium fs-14 mb-2">+20-482-038-29</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="mb-2 d-flex align-items-center"><i
                                                        class="ti ti-mail me-1"></i>Email</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="fw-medium fs-14 mb-2">aariyan@example.com</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="mb-2 d-flex align-items-center"><i
                                                        class="ti ti-globe me-1"></i>Website Address</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="fw-medium fs-14 mb-2">www.examplewebsite.com</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border mb-0">
                                <div class="card-header border-bottom">
                                    <h6>Social Information</h6>
                                </div>
                                <div class="card-body pb-1">
                                    <div class="mb-2">
                                        <div class="row align-items-center">
                                            <div class="col-sm-6">
                                                <p class="mb-2 d-flex align-items-center"><i
                                                        class="ti ti-brand-facebook me-1"></i>Facebook</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="fw-medium fs-14 mb-2">www.facebook.com</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="mb-2 d-flex align-items-center"><i
                                                        class="ti ti-brand-twitter me-1"></i>Twitter</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="fw-medium fs-14 mb-2">www.twitter.com</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="mb-2 d-flex align-items-center"><i
                                                        class="ti ti-brand-instagram me-1"></i>Instagram</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="fw-medium fs-14 mb-2">www.instagram.com</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="mb-2 d-flex align-items-center"><i
                                                        class="ti ti-brand-linkedin me-1"></i>Linkedin</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="fw-medium fs-14 mb-2">www.linkedin.com</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="mb-2 d-flex align-items-center"><i
                                                        class="ti ti-brand-youtube me-1"></i>YouTube</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="fw-medium fs-14 mb-2">www.youtube.com</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Contact Detail -->
            <div class="modal video-call-popup fade" id="start-video-call" data-bs-backdrop="static"
                data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header d-flex border-0 pb-0">
                            <div class="card bg-transparent-dark flex-fill border">
                                <div class="card-body d-flex justify-content-between flex-wrap gap-2">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-lg online me-2">
                                            <img src="http://localhost:8000/assets/img/profiles/avatar-05.jpg"
                                                class="rounded-circle" alt="user">
                                        </span>
                                        <div>
                                            <h6>Federico Wells</h6>
                                            <span>+22-555-345-11</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="badge border border-primary text-primary badge-sm me-2">
                                            <i class="ti ti-point-filled"></i>
                                            01:15:25
                                        </span>
                                        <a href="http://localhost:8000/javascript:void(0);"
                                            class="user-add bg-primary rounded d-flex justify-content-center align-items-center text-white"
                                            data-bs-toggle="modal" data-bs-target="#video_group">
                                            <i class="ti ti-user-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body border-0 pt-0">
                            <div class="video-call-view br-8 overflow-hidden position-relative">
                                <img src="http://localhost:8000/assets/img/video/video-member-01.jpg"
                                    alt="user-image">
                                <div class="mini-video-view active br-8 overflow-hidden position-absolute">
                                    <img src="http://localhost:8000/assets/img/video/user-image.jpg" alt="">
                                    <div
                                        class="bg-soft-primary mx-auto default-profile rounded-circle align-items-center justify-content-center">
                                        <span class="avatar avatar-lg rounded-circle bg-primary ">RG</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-center border-0 pt-0">
                            <div
                                class="call-controll-block d-flex align-items-center justify-content-center rounded-pill">
                                <a href="http://localhost:8000/javascript:void(0);"
                                    class="call-controll mute-bt d-flex align-items-center justify-content-center">
                                    <i class="ti ti-microphone"></i>
                                </a>
                                <a href="http://localhost:8000/javascript:void(0);"
                                    class="call-controll d-flex align-items-center justify-content-center">
                                    <i class="ti ti-volume"></i>
                                </a>
                                <a href="http://localhost:8000/javascript:void(0);"
                                    class="call-controll mute-video d-flex align-items-center justify-content-center">
                                    <i class="ti ti-video"></i>
                                </a>
                                <a href="http://localhost:8000/javascript:void(0);" data-bs-dismiss="modal"
                                    class="call-controll call-decline d-flex align-items-center justify-content-center">
                                    <i class="ti ti-phone"></i>
                                </a>
                                <a href="http://localhost:8000/javascript:void(0);"
                                    class="call-controll d-flex align-items-center justify-content-center">
                                    <i class="ti ti-mood-smile"></i>
                                </a>
                                <a href="http://localhost:8000/javascript:void(0);"
                                    class="call-controll d-flex align-items-center justify-content-center">
                                    <i class="ti ti-maximize"></i>
                                </a>
                                <a href="http://localhost:8000/javascript:void(0);"
                                    class="call-controll d-flex align-items-center justify-content-center">
                                    <i class="ti ti-dots"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Invite -->
            <div class="modal fade" id="invite">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Invite Others</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="ti ti-x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label class="form-label">Email Address or Phone Number</label>
                                        <div class="input-icon mb-3 position-relative">
                                            <input type="text" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="form-label">Invitation Message</label>
                                        <textarea class="form-control mb-3"></textarea>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-6">
                                        <a href="http://localhost:8000/#" class="btn btn-outline-primary w-100"
                                            data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn btn-primary w-100" data-bs-toggle="modal"
                                            data-bs-target="#new-chat">Send Invitation</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Invite -->
            <!-- Logout -->
            <div class="modal fade" id="acc-logout">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Logout</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="ti ti-x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="index.html">
                                <div class="block-wrap text-center mb-3">
                                    <span class="user-icon mb-3 mx-auto bg-transparent-danger">
                                        <i class="ti ti-logout text-danger"></i>
                                    </span>
                                    <p class="text-grya-9">Are you sure you want to logout? </p>
                                </div>
                                <div class="row g-3">
                                    <div class="col-6">
                                        <a href="http://localhost:8000/#" class="btn btn-outline-primary w-100"
                                            data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                                    </div>
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary w-100">Logout</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Logout -->
        </div>
        <!-- /Content -->
    </div>
    <!-- /Main Wrapper -->
    <!-- jQuery -->
    <script src="http://localhost:8000/assets/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap Core JS -->
    <script src="http://localhost:8000/assets/js/bootstrap.bundle.min.js"></script>
    <!-- Slimscroll JS -->
    <script src="http://localhost:8000/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- Swiper JS -->
    <script src="http://localhost:8000/assets/plugins/swiper/swiper.min.js"></script>
    <!-- FancyBox JS -->
    <script src="http://localhost:8000/assets/plugins/fancybox/jquery.fancybox.min.js"></script>
    <!-- Select JS -->
    <script src="http://localhost:8000/assets/plugins/select2/js/select2.min.js"></script>
    <!-- Datetimepicker JS -->
    <script src="http://localhost:8000/assets/js/moment.min.js"></script>
    <script src="http://localhost:8000/assets/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Custom JS -->
    <script src="http://localhost:8000/assets/js/script.js"></script>
</body>
</html>
