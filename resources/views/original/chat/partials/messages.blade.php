<div class="chat-header">
    <h5>{{ $conversation->customer_name }}</h5>
</div>

<div class="chat-body" id="message-list">
    @foreach ($messages as $message)

    @if ($message->sender_type === 'client')
        @include('chat.partials.chat.client', ['message' => $message])

    @else
        @include('chat.partials.chat.agent', ['message' => $message])
        
    @endif

        {{-- <div class="chats">
            <div class="chat-avatar">
                <img src="{{ URL::asset('/build/img/profiles/avatar-06.jpg') }}" class="rounded-circle" alt="image">
            </div>
            <div class="chat-content">
                <div class="chat-profile-name">
                    <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:39
                            PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span></h6>
                </div>
                <div class="chat-info">
                    <div class="message-content">
                        Hi there! I'm interested in your services.
                        <div class="emoj-group">
                            <ul>
                                <li class="emoj-action"><a href="javascript:void(0);"><i
                                            class="ti ti-mood-smile"></i></a>
                                    <div class="emoj-group-list">
                                        <ul>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-02.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-05.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-06.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-07.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-08.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-03.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-10.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-09.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li class="add-emoj"><a href="javascript:void(0);"><i
                                                        class="ti ti-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i
                                            class="ti ti-arrow-forward-up"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="chat-actions">
                        <a class="#" href="#" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-3">
                            <li><a class="dropdown-item reply-btn" href="#"><i
                                        class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Forward</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-file-export me-2"></i>Copy</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as
                                    Favourite</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as
                                    Unread</a></li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin Chat</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="chat-profile-name">
                    <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:39
                            PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span></h6>
                </div>
                <div class="chat-info">
                    <div class="message-content">
                        Can you tell me more about what you offer?, Can you explain it breifly...
                        <div class="emoj-group">
                            <ul>
                                <li class="emoj-action"><a href="javascript:void(0);"><i
                                            class="ti ti-mood-smile"></i></a>
                                    <div class="emoj-group-list">
                                        <ul>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-02.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-05.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-06.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-07.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-08.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-03.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-10.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-09.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li class="add-emoj"><a href="javascript:void(0);"><i
                                                        class="ti ti-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i
                                            class="ti ti-arrow-forward-up"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="chat-actions">
                        <a class="#" href="#" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-3">
                            <li><a class="dropdown-item reply-btn" href="#"><i
                                        class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Forward</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-file-export me-2"></i>Copy</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as
                                    Favourite</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as
                                    Unread</a></li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin Chat</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="chats chats-right">
            <div class="chat-content">
                <div class="chat-profile-name text-end">
                    <h6>You<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:39
                            PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span>
                    </h6>
                </div>
                <div class="chat-info">
                    <div class="chat-actions">
                        <a class="#" href="#" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-3">
                            <li><a class="dropdown-item reply-btn" href="#"><i
                                        class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Forward</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-file-export me-2"></i>Copy</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as
                                    Favourite</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as
                                    Unread</a></li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin Chat</a>
                            </li>
                        </ul>
                    </div>
                    <div class="message-content">
                        Hello! Absolutely, we provide a range of services tailored to meet various business
                        needs. Could you specify what you're looking for?
                        <div class="emoj-group">
                            <ul>
                                <li class="emoj-action"><a href="javascript:void(0);"><i
                                            class="ti ti-mood-smile"></i></a>
                                    <div class="emoj-group-list">
                                        <ul>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-02.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-05.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-06.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-07.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-08.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-03.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-10.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-09.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li class="add-emoj"><a href="javascript:void(0);"><i
                                                        class="ti ti-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i
                                            class="ti ti-arrow-forward-up"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="emonji-wrap">
                    <a href="javascript:void(0);"><img src="{{ URL::asset('/build/img/icons/emonji-02.svg') }}"
                            class="me-2" alt="icon">24</a>
                    <a href="javascript:void(0);"><img src="{{ URL::asset('/build/img/icons/emonji-03.svg') }}"
                            class="me-2" alt="icon">15</a>
                    <a href="javascript:void(0);"><img src="{{ URL::asset('/build/img/icons/emonji-04.svg') }}"
                            class="me-2" alt="icon">15</a>
                </div>
            </div>
            <div class="chat-avatar">
                <img src="{{ URL::asset('/build/img/profiles/avatar-17.jpg') }}" class="rounded-circle dreams_chat"
                    alt="image">
            </div>
        </div>
        <div class="chat-line">
            <span class="chat-date">Today, July 24</span>
        </div>
        <div class="chats">
            <div class="chat-avatar">
                <img src="{{ URL::asset('/build/img/profiles/avatar-02.jpg') }}" class="rounded-circle dreams_chat"
                    alt="image">
            </div>
            <div class="chat-content">
                <div class="chat-profile-name">
                    <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:39
                            PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span></h6>
                </div>
                <div class="message-content bg-transparent p-0">
                    <div class="message-audio">
                        <audio controls>
                            <source src="build/img/audio/audio.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                </div>
            </div>
        </div>
        <div class="chats chats-right">
            <div class="chat-content">
                <div class="chat-profile-name justify-content-end">
                    <h6>You<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:39
                            PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span>
                    </h6>
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
                        <a href="javascript:void(0);" class="download-icon">
                            <i class="ti ti-download"></i>
                        </a>
                    </div>
                    <div class="emoj-group wrap-emoji-group ">
                        <ul>
                            <li class="emoj-action"><a href="javascript:void(0);"><i
                                        class="ti ti-mood-smile"></i></a>
                                <div class="emoj-group-list">
                                    <ul>
                                        <li><a href="javascript:void(0);"><img
                                                    src="{{ URL::asset('/build/img/icons/emonji-02.svg') }}"
                                                    alt="Icon"></a></li>
                                        <li><a href="javascript:void(0);"><img
                                                    src="{{ URL::asset('/build/img/icons/emonji-05.svg') }}"
                                                    alt="Icon"></a></li>
                                        <li><a href="javascript:void(0);"><img
                                                    src="{{ URL::asset('/build/img/icons/emonji-06.svg') }}"
                                                    alt="Icon"></a></li>
                                        <li><a href="javascript:void(0);"><img
                                                    src="{{ URL::asset('/build/img/icons/emonji-07.svg') }}"
                                                    alt="Icon"></a></li>
                                        <li><a href="javascript:void(0);"><img
                                                    src="{{ URL::asset('/build/img/icons/emonji-08.svg') }}"
                                                    alt="Icon"></a></li>
                                        <li class="add-emoj"><a href="javascript:void(0);"><i
                                                    class="ti ti-plus"></i></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#forward-message"><i class="ti ti-arrow-forward-up"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="chat-avatar">
                <img src="{{ URL::asset('/build/img/profiles/avatar-17.jpg') }}" class="rounded-circle dreams_chat"
                    alt="image">
            </div>
        </div>
        <div class="chats">
            <div class="chat-avatar">
                <img src="{{ URL::asset('/build/img/profiles/avatar-06.jpg') }}" class="rounded-circle"
                    alt="image">
            </div>
            <div class="chat-content">
                <div class="chat-profile-name">
                    <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:39
                            PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span></h6>
                </div>
                <div class="chat-info">
                    <div class="message-content">
                        Hi there! I'm interested in learning more
                        <div class="emoj-group">
                            <ul>
                                <li class="emoj-action"><a href="javascript:void(0);"><i
                                            class="ti ti-mood-smile"></i></a>
                                    <div class="emoj-group-list">
                                        <ul>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-02.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-05.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-06.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-07.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-08.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-03.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-10.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-09.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li class="add-emoj"><a href="javascript:void(0);"><i
                                                        class="ti ti-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i
                                            class="ti ti-arrow-forward-up"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="chat-actions">
                        <a class="#" href="#" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-3">
                            <li><a class="dropdown-item reply-btn" href="#"><i
                                        class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Forward</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-file-export me-2"></i>Copy</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as
                                    Favourite</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as
                                    Unread</a></li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin Chat</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="emonji-wrap">
                    <a href="javascript:void(0);"><img src="{{ URL::asset('/build/img/icons/emonji-02.svg') }}"
                            class="me-2" alt="icon">24</a>
                    <a href="javascript:void(0);"><img src="{{ URL::asset('/build/img/icons/emonji-03.svg') }}"
                            class="me-2" alt="icon">15</a>
                    <a href="javascript:void(0);"><img src="{{ URL::asset('/build/img/icons/emonji-04.svg') }}"
                            class="me-2" alt="icon">15</a>
                </div>
            </div>
        </div>
        <div class="chats">
            <div class="chat-avatar">
                <img src="{{ URL::asset('/build/img/profiles/avatar-06.jpg') }}" class="rounded-circle"
                    alt="image">
            </div>
            <div class="chat-content">
                <div class="chat-profile-name">
                    <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:39
                            PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span></h6>
                </div>
                <div class="chat-info">
                    <div class="message-content">
                        <div class="chat-img">
                            <div class="img-wrap">
                                <img src="{{ URL::asset('/build/img/gallery/gallery-01.jpg') }}" alt="img">
                                <div class="img-overlay">
                                    <a class="gallery-img" data-fancybox="gallery-img"
                                        href="{{ URL::asset('/build/imggallery/gallery-01.jpg') }}"
                                        title="Demo 01"><i class="ti ti-eye"></i></a>
                                    <a href="#"><i class="ti ti-download"></i></a>
                                </div>
                            </div>
                            <div class="img-wrap">
                                <img src="{{ URL::asset('/build/img/gallery/gallery-02.jpg') }}" alt="img">
                                <div class="img-overlay">
                                    <a class="gallery-img" data-fancybox="gallery-img"
                                        href="{{ URL::asset('/build/img/gallery/gallery-02.jpg') }}"
                                        title="Demo 02"><i class="ti ti-eye"></i></a>
                                    <a href="#"><i class="ti ti-download"></i></a>
                                </div>
                            </div>
                            <div class="img-wrap">
                                <img src="{{ URL::asset('/build/img/gallery/gallery-03.jpg') }}" alt="img">
                                <div class="img-overlay">
                                    <a class="gallery-img" data-fancybox="gallery-img"
                                        href="{{ URL::asset('/build/img/gallery/gallery-03.jpg') }}"
                                        title="Demo 03"><i class="ti ti-eye"></i></a>
                                    <a href="#"><i class="ti ti-download"></i></a>
                                </div>
                            </div>
                            <div class="img-wrap">
                                <img src="{{ URL::asset('/build/img/gallery/gallery-04.jpg') }}" alt="img">
                                <div class="img-overlay">
                                    <a class="gallery-img" data-fancybox="gallery-img"
                                        href="{{ URL::asset('/build/img/gallery/gallery-04.jpg') }}"
                                        title="Demo 04"><i class="ti ti-eye"></i></a>
                                    <a href="#"><i class="ti ti-download"></i></a>
                                </div>
                            </div>
                            <div class="img-wrap">
                                <img src="{{ URL::asset('/build/img/gallery/gallery-05.jpg') }}" alt="img">
                                <div class="img-overlay">
                                    <a class="gallery-img" data-fancybox="gallery-img"
                                        href="{{ URL::asset('/build/img/gallery/gallery-05.jpg') }}"
                                        title="Demo 04"><i class="ti ti-eye"></i></a>
                                    <a href="#"><i class="ti ti-download"></i></a>
                                </div>
                            </div>
                        </div>
                        <a class="gallery-img view-all d-flex align-items-center justify-content-center mt-3"
                            href="{{ URL::asset('/build/img/gallery/gallery-05.jpg') }}" data-fancybox="gallery-img">
                            View All Images<i class="ti ti-arrow-right ms-2"></i>
                        </a>
                        <div class="emoj-group">
                            <ul>
                                <li class="emoj-action"><a href="javascript:void(0);"><i
                                            class="ti ti-mood-smile"></i></a>
                                    <div class="emoj-group-list">
                                        <ul>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-02.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-05.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-06.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-07.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-08.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-03.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-10.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-09.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li class="add-emoj"><a href="javascript:void(0);"><i
                                                        class="ti ti-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i
                                            class="ti ti-arrow-forward-up"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="chat-actions">
                        <a class="#" href="#" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-3">
                            <li><a class="dropdown-item reply-btn" href="#"><i
                                        class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Forward</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-file-export me-2"></i>Copy</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as
                                    Favourite</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as
                                    Unread</a></li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin Chat</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="chats chats-right">
            <div class="chat-content">
                <div class="chat-profile-name text-end">
                    <h6>You<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:39
                            PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span>
                    </h6>
                </div>
                <div class="chat-info">
                    <div class="chat-actions">
                        <a class="#" href="#" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-3">
                            <li><a class="dropdown-item reply-btn" href="#"><i
                                        class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Forward</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-file-export me-2"></i>Copy</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as
                                    Favourite</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as
                                    Unread</a></li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin Chat</a>
                            </li>
                        </ul>
                    </div>
                    <div class="message-content">
                        Send me your Profile Video if Any??
                        <div class="emoj-group">
                            <ul>
                                <li class="emoj-action"><a href="javascript:void(0);"><i
                                            class="ti ti-mood-smile"></i></a>
                                    <div class="emoj-group-list">
                                        <ul>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-02.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-05.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-06.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-07.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-08.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-03.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-10.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-09.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li class="add-emoj"><a href="javascript:void(0);"><i
                                                        class="ti ti-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i
                                            class="ti ti-arrow-forward-up"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chat-avatar">
                <img src="{{ URL::asset('/build/img/profiles/avatar-17.jpg') }}" class="rounded-circle dreams_chat"
                    alt="image">
            </div>
        </div>
        <div class="chats">
            <div class="chat-avatar">
                <img src="{{ URL::asset('/build/img/profiles/avatar-06.jpg') }}" class="rounded-circle"
                    alt="image">
            </div>
            <div class="chat-content">
                <div class="chat-profile-name">
                    <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:39
                            PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span></h6>
                </div>
                <div class="chat-info">
                    <div class="message-content">
                        <div class="message-link">
                            <div class="link-img">
                                <img src="{{ URL::asset('/build/img/icons/github.svg') }}" alt="Icon">
                            </div>
                            <a href="javascript:void(0);"
                                class="link-primary mt-2">https://segmentfault.com/u/guanguans/articles</a>
                        </div>
                        <div class="emoj-group">
                            <ul>
                                <li class="emoj-action"><a href="javascript:void(0);"><i
                                            class="ti ti-mood-smile"></i></a>
                                    <div class="emoj-group-list">
                                        <ul>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-02.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-05.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-06.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-07.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-08.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-03.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-10.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-09.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li class="add-emoj"><a href="javascript:void(0);"><i
                                                        class="ti ti-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i
                                            class="ti ti-arrow-forward-up"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="chat-actions">
                        <a class="#" href="#" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-3">
                            <li><a class="dropdown-item reply-btn" href="#"><i
                                        class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Forward</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-file-export me-2"></i>Copy</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as
                                    Favourite</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as
                                    Unread</a></li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin Chat</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="chats">
            <div class="chat-avatar">
                <img src="{{ URL::asset('/build/img/profiles/avatar-06.jpg') }}" class="rounded-circle"
                    alt="image">
            </div>
            <div class="chat-content">
                <div class="chat-profile-name">
                    <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:39
                            PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span></h6>
                </div>
                <div class="chat-info">
                    <div class="message-content">
                        <div class="chat-forward">
                            <div class="forward-text text-primary"><i class="ti ti-arrow-forward me-2"></i>Forward
                            </div>
                        </div>
                        <div class="file-attach">
                            <span class="file-icon">
                                <i class="ti ti-files"></i>
                            </span>
                            <div class="ms-2 overflow-hidden">
                                <h6 class="mb-1">Ecommerce.zip</h6>
                                <p>14.23 KB</p>
                            </div>
                            <a href="javascript:void(0);" class="download-icon">
                                <i class="ti ti-download"></i>
                            </a>
                        </div>
                        <div class="emoj-group">
                            <ul>
                                <li class="emoj-action"><a href="javascript:void(0);"><i
                                            class="ti ti-mood-smile"></i></a>
                                    <div class="emoj-group-list">
                                        <ul>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-02.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-05.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-06.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-07.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-08.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-03.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-10.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-09.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li class="add-emoj"><a href="javascript:void(0);"><i
                                                        class="ti ti-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i
                                            class="ti ti-arrow-forward-up"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="chat-actions">
                        <a class="#" href="#" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-3">
                            <li><a class="dropdown-item reply-btn" href="#"><i
                                        class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Forward</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-file-export me-2"></i>Copy</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as
                                    Favourite</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as
                                    Unread</a></li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin Chat</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="chats chats-right">
            <div class="chat-content">
                <div class="chat-profile-name text-end">
                    <h6>You<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:39
                            PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span>
                    </h6>
                </div>
                <div class="chat-info">
                    <div class="chat-actions">
                        <a class="#" href="#" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-3">
                            <li><a class="dropdown-item reply-btn" href="#"><i
                                        class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Forward</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-file-export me-2"></i>Copy</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as
                                    Favourite</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as
                                    Unread</a></li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin Chat</a>
                            </li>
                        </ul>
                    </div>
                    <div class="message-content">
                        Send me your Profile Video if Any??
                        <div class="emoj-group">
                            <ul>
                                <li class="emoj-action"><a href="javascript:void(0);"><i
                                            class="ti ti-mood-smile"></i></a>
                                    <div class="emoj-group-list">
                                        <ul>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-02.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-05.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-06.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-07.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-08.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-03.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-10.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-09.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li class="add-emoj"><a href="javascript:void(0);"><i
                                                        class="ti ti-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i
                                            class="ti ti-arrow-forward-up"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chat-avatar">
                <img src="{{ URL::asset('/build/img/profiles/avatar-17.jpg') }}" class="rounded-circle dreams_chat"
                    alt="image">
            </div>
        </div>
        <div class="chats">
            <div class="chat-avatar">
                <img src="{{ URL::asset('/build/img/profiles/avatar-06.jpg') }}" class="rounded-circle"
                    alt="image">
            </div>
            <div class="chat-content">
                <div class="chat-profile-name">
                    <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:39
                            PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span></h6>
                </div>
                <div class="chat-info">
                    <div class="message-content">
                        <div class="message-video">
                            <video width="400" controls>
                                <source src="build/img/video/video.mp4" type="video/mp4">
                                Your browser does not support HTML5 video.
                            </video>
                        </div>
                        <div class="emoj-group">
                            <ul>
                                <li class="emoj-action"><a href="javascript:void(0);"><i
                                            class="ti ti-mood-smile"></i></a>
                                    <div class="emoj-group-list">
                                        <ul>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-02.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-05.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-06.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-07.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-08.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-03.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-10.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-09.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li class="add-emoj"><a href="javascript:void(0);"><i
                                                        class="ti ti-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i
                                            class="ti ti-arrow-forward-up"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="chat-actions">
                        <a class="#" href="#" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-3">
                            <li><a class="dropdown-item reply-btn" href="#"><i
                                        class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Forward</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-file-export me-2"></i>Copy</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as
                                    Favourite</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as
                                    Unread</a></li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin Chat</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="chats chats-right">
            <div class="chat-content">
                <div class="chat-profile-name text-end">
                    <h6>You<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:39
                            PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span>
                    </h6>
                </div>
                <div class="chat-info">
                    <div class="chat-actions">
                        <a class="#" href="#" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-3">
                            <li><a class="dropdown-item reply-btn" href="#"><i
                                        class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Forward</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-file-export me-2"></i>Copy</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as
                                    Favourite</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as
                                    Unread</a></li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin
                                    Chat</a></li>
                        </ul>
                    </div>
                    <div class="message-content">
                        Thanks for Sharing!!! Can we have a call
                        <div class="emoj-group">
                            <ul>
                                <li class="emoj-action"><a href="javascript:void(0);"><i
                                            class="ti ti-mood-smile"></i></a>
                                    <div class="emoj-group-list">
                                        <ul>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-02.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-05.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-06.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-07.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-08.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-03.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-10.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-09.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li class="add-emoj"><a href="javascript:void(0);"><i
                                                        class="ti ti-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i
                                            class="ti ti-arrow-forward-up"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chat-avatar">
                <img src="{{ URL::asset('/build/img/profiles/avatar-17.jpg') }}"
                    class="rounded-circle dreams_chat" alt="image">
            </div>
        </div>
        <div class="chats">
            <div class="chat-avatar">
                <img src="{{ URL::asset('/build/img/profiles/avatar-06.jpg') }}" class="rounded-circle"
                    alt="image">
            </div>
            <div class="chat-content">
                <div class="chat-profile-name">
                    <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:39
                            PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span></h6>
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
                                <li class="emoj-action"><a href="javascript:void(0);"><i
                                            class="ti ti-mood-smile"></i></a>
                                    <div class="emoj-group-list">
                                        <ul>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-02.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-05.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-06.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-07.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-08.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-03.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-10.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-09.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li class="add-emoj"><a href="javascript:void(0);"><i
                                                        class="ti ti-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i
                                            class="ti ti-arrow-forward-up"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="chat-actions">
                        <a class="#" href="#" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-3">
                            <li><a class="dropdown-item reply-btn" href="#"><i
                                        class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-pinned me-2"></i>Forward</a></li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-file-export me-2"></i>Copy</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as
                                    Favourite</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as
                                    Unread</a></li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin
                                    Chat</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="chats">
            <div class="chat-avatar">
                <img src="{{ URL::asset('/build/img/profiles/avatar-06.jpg') }}" class="rounded-circle"
                    alt="image">
            </div>
            <div class="chat-content">
                <div class="chat-profile-name">
                    <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:39
                            PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span></h6>
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
                            <a href="javascript:void(0);" class="download-icon">
                                <i class="ti ti-download"></i>
                            </a>
                        </div>
                        <div class="emoj-group">
                            <ul>
                                <li class="emoj-action"><a href="javascript:void(0);"><i
                                            class="ti ti-mood-smile"></i></a>
                                    <div class="emoj-group-list">
                                        <ul>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-02.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-05.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-06.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-07.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-08.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-03.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-10.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-09.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li class="add-emoj"><a href="javascript:void(0);"><i
                                                        class="ti ti-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i
                                            class="ti ti-arrow-forward-up"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="chat-actions">
                        <a class="#" href="#" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-3">
                            <li><a class="dropdown-item reply-btn" href="#"><i
                                        class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-pinned me-2"></i>Forward</a></li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-file-export me-2"></i>Copy</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as
                                    Favourite</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as
                                    Unread</a></li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin
                                    Chat</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="chats chats-right">
            <div class="chat-content">
                <div class="chat-profile-name text-end">
                    <h6>You<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:39
                            PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span>
                    </h6>
                </div>
                <div class="chat-info">
                    <div class="chat-actions">
                        <a class="#" href="#" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-3">
                            <li><a class="dropdown-item reply-btn" href="#"><i
                                        class="ti ti-corner-up-left me-2"></i>Reply</a></li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-pinned me-2"></i>Forward</a></li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-file-export me-2"></i>Copy</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as
                                    Favourite</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as
                                    Unread</a></li>
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-box-align-right me-2"></i>Archeive Chat</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin
                                    Chat</a></li>
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
                            <a href="javascript:void(0);" class="download-icon">
                                <i class="ti ti-download"></i>
                            </a>
                        </div>
                        <div class="emoj-group">
                            <ul>
                                <li class="emoj-action"><a href="javascript:void(0);"><i
                                            class="ti ti-mood-smile"></i></a>
                                    <div class="emoj-group-list">
                                        <ul>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-02.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-05.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-06.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-07.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-08.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-03.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-10.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li><a href="javascript:void(0);"><img
                                                        src="{{ URL::asset('/build/img/icons/emonji-09.svg') }}"
                                                        alt="Icon"></a></li>
                                            <li class="add-emoj"><a href="javascript:void(0);"><i
                                                        class="ti ti-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i
                                            class="ti ti-arrow-forward-up"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chat-avatar">
                <img src="{{ URL::asset('/build/img/profiles/avatar-17.jpg') }}"
                    class="rounded-circle dreams_chat" alt="image">
            </div>
        </div>
        <div class="chats">
            <div class="chat-avatar">
                <img src="{{ URL::asset('/build/img/profiles/avatar-06.jpg') }}" class="rounded-circle"
                    alt="image">
            </div>
            <div class="chat-content">
                <div class="chat-profile-name">
                    <h6>Edward Lietz<i class="ti ti-circle-filled fs-7 mx-2"></i><span class="chat-time">02:39
                            PM</span><span class="msg-read success"><i class="ti ti-checks"></i></span></h6>
                </div>
                <div class="message-content">
                    <span class="animate-typing">is typing
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </span>
                    <div class="emoj-group">
                        <ul>
                            <li class="emoj-action"><a href="javascript:void(0);"><i
                                        class="ti ti-mood-smile"></i></a>
                                <div class="emoj-group-list">
                                    <ul>
                                        <li><a href="javascript:void(0);"><img
                                                    src="{{ URL::asset('/build/img/icons/emonji-02.svg') }}"
                                                    alt="Icon"></a></li>
                                        <li><a href="javascript:void(0);"><img
                                                    src="{{ URL::asset('/build/img/icons/emonji-05.svg') }}"
                                                    alt="Icon"></a></li>
                                        <li><a href="javascript:void(0);"><img
                                                    src="{{ URL::asset('/build/img/icons/emonji-06.svg') }}"
                                                    alt="Icon"></a></li>
                                        <li><a href="javascript:void(0);"><img
                                                    src="{{ URL::asset('/build/img/icons/emonji-07.svg') }}"
                                                    alt="Icon"></a></li>
                                        <li><a href="javascript:void(0);"><img
                                                    src="{{ URL::asset('/build/img/icons/emonji-08.svg') }}"
                                                    alt="Icon"></a></li>
                                        <li class="add-emoj"><a href="javascript:void(0);"><i
                                                    class="ti ti-plus"></i></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#forward-message"><i
                                        class="ti ti-arrow-forward-up"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
    @endforeach
</div>
