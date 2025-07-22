<div class="chat-sidebar" id="chat-sidebar">
    <div class="chat-sidebar-content">
        <ul class="chat-list">
            @foreach ($conversations as $conversation)
                <div class="chat-list">
                    <a href="{{ route('chat.show', $conversation->id) }}" class="chat-user-list">
                        <div class="avatar avatar-lg online me-2">
                            <img src="{{ URL::asset('/build/img/profiles/avatar-01.jpg') }}"
                                class="rounded-circle border border-warning border-2" alt="image">
                        </div>
                        <div class="chat-user-info">
                            <div class="chat-user-msg">
                                <h6>{{ $conversation->customer_name }}</h6>
                                <p><span class="animate-typing">{{ $conversation->lastMessage->content ?? '' }}</span>
                                </p>
                            </div>
                            <div class="chat-user-time">
                                <span class="time">02:40 PM</span>
                                <div class="chat-pin">
                                    <i class="ti ti-pin me-2"></i>
                                    <span class="count-message fs-12 fw-semibold">12</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="chat-dropdown">
                        <a class="#" href="#" data-bs-toggle="dropdown">
                            <i class="ti ti-dots-vertical"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end p-3">
                            <li><a class="dropdown-item" href="#"><i
                                        class="ti ti-box-align-right me-2"></i>Archive Chat</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as
                                    Favourite</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as
                                    Unread</a></li>
                            <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin Chats</a>
                            </li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#delete-chat"><i class="ti ti-trash me-2"></i>Delete</a></li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </ul>
    </div>
</div>
