<div class="chats">
    <div class="chat-avatar">
        <img src="{{ URL::asset('/build/img/profiles/avatar-02.jpg') }}" class="rounded-circle dreams_chat" alt="image">
    </div>
    <div class="chat-content">
        <div class="chat-profile-name">
            <h6>{{ $message->sender_name ?? 'Cliente' }}
                <i class="ti ti-circle-filled fs-7 mx-2"></i>
                <span class="chat-time">{{ $message->sent_at->format('H:i') }}</span>
                <span class="msg-read success"><i class="ti ti-checks"></i></span>
            </h6>
        </div>
        <div class="chat-info">
            <div class="message-content">
                {!! nl2br(e($message->content)) !!}
                <div class="emoj-group">
                    <ul>
                        <li class="emoj-action"><a href="javascript:void(0);"><i class="ti ti-mood-smile"></i></a>
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
                                    <li class="add-emoj"><a href="javascript:void(0);"><i class="ti ti-plus"></i></a>
                                    </li>
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
                    <li><a class="dropdown-item" href="#"><i class="ti ti-file-export me-2"></i>Copy</a></li>
                    <li><a class="dropdown-item" href="#"><i class="ti ti-heart me-2"></i>Mark as
                            Favourite</a></li>
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                            data-bs-target="#message-delete"><i class="ti ti-trash me-2"></i>Delete</a></li>
                    <li><a class="dropdown-item" href="#"><i class="ti ti-check me-2"></i>Mark as
                            Unread</a></li>
                    <li><a class="dropdown-item" href="#"><i class="ti ti-box-align-right me-2"></i>Archeive
                            Chat</a></li>
                    <li><a class="dropdown-item" href="#"><i class="ti ti-pinned me-2"></i>Pin Chat</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
