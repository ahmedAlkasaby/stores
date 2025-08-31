@extends('admin.layouts.app')
@section('title', __('site.chats'))
@section('styles')
    <link rel="stylesheet" href={{ asset('admin/assets/vendor/css/pages/app-chat.css') }} />
@endsection

@section('content')


    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="app-chat card overflow-hidden">
            <div class="row g-0">


                <!-- Chat & Contacts -->
                <div class="col app-chat-contacts app-sidebar flex-grow-0 overflow-hidden border-end" id="app-chat-contacts">
                    <div class="sidebar-header">
                        <div class="d-flex align-items-center me-3 me-lg-0">
                            <div class="flex-shrink-0 avatar avatar-online me-3" data-bs-toggle="sidebar"
                                data-overlay="app-overlay-ex" data-target="#app-chat-sidebar-left">
                                <img src="{{ asset(auth()->user()->image ?: 'uploads/defaults/default-avatar.png') }}"
                                    alt="Avatar" class="rounded-circle" />
                            </div>

                        </div>
                        <i class="ti ti-x cursor-pointer d-lg-none d-block position-absolute mt-2 me-1 top-0 end-0"
                            data-overlay data-bs-toggle="sidebar" data-target="#app-chat-contacts"></i>
                    </div>
                    <hr class="container-m-nx m-0" />
                    <div class="sidebar-body">
                        <div class="chat-contact-list-item-title">
                            <h5 class="text-primary mb-0 px-4 pt-3 pb-2">@lang('site.conversations')</h5>
                        </div>
                        <!-- Chats -->
                        <ul class="list-unstyled chat-contact-list" id="chat-list">

                            @if ($conversations->count() > 0)

                                @foreach ($conversations as $conversation)
                                    <li class="chat-contact-list-item {{ isset($conversationId) && $conversationId == $conversation->getId() ? 'active' : '' }}">
                                        <a href="/dashboard/chats/{{ $conversation->getId() }}" class="d-flex align-items-center">
                                            <div
                                                class="flex-shrink-0 avatar {{ $conversation->isOnline() ? 'avatar-online' : 'avatar-offline' }}">
                                                <img src="{{ $conversation->getAvatar() }}" alt="Avatar"
                                                    class="rounded-circle" />
                                            </div>
                                            <div class="chat-contact-info flex-grow-1 ms-2">
                                                <h6 class="chat-contact-name text-truncate m-0">
                                                    {{ $conversation->getName() }}
                                                </h6>
                                                <p class="chat-contact-status text-muted text-truncate mb-0">
                                                    {{ $conversation->last_message_at ?? 'No messages yet' }}
                                                </p>
                                            </div>

                                            <small class="text-muted mb-auto">{{ $conversation->getLastMessageTime() }}</small>
                                        </a>
                                    </li>
                                @endforeach
                            @else
                                <li class="chat-contact-list-item chat-list-item-0">
                                    <h6 class="text-muted mb-0">@lang('site.no_conversations')</h6>
                                </li>
                            @endif
                        </ul>
                        <!-- Contacts -->
                        <ul class="list-unstyled chat-contact-list mb-0" id="contact-list">
                            <li class="chat-contact-list-item chat-contact-list-item-title">
                                <h5 class="text-primary mb-0">@lang('site.contacts')</h5>
                            </li>

                            @if ($contacts->count() > 0)
                                @foreach ($contacts as $contact)
                                    <li class="chat-contact-list-item">
                                        <a href="/dashboard/chats/{{ $contact->id }}" class="d-flex align-items-center">
                                            <div class="flex-shrink-0 avatar avatar-offline">
                                                <img src="{{ $contact->image ? asset($contact->image) : asset('uploads/defaults/default-avatar.png') }}"
                                                    alt="Avatar" class="rounded-circle" />
                                            </div>
                                            <div class="chat-contact-info flex-grow-1 ms-2">
                                                <h6 class="chat-contact-name text-truncate m-0">{{ $contact->name }}</h6>
                                                <p class="chat-contact-status text-muted text-truncate mb-0">
                                                    {{ $contact->email }}</p>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            @else
                                <li class="chat-contact-list-item contact-list-item-0 ">
                                    <h6 class="text-muted mb-0">@lang('site.no_contacts')</h6>
                                </li>
                            @endif



                        </ul>
                    </div>
                </div>
                <!-- /Chat contacts -->

                <!-- Chat History -->
                <div class="col app-chat-history bg-body">
                    <div class="chat-history-wrapper">
                        <div class="chat-history-body bg-body">
                            <ul class="list-unstyled chat-history">
                                @if (isset($conversationId))
                                    @if ($messages->count() > 0)
                                        @foreach ($messages as $message)
                                            <li
                                                class="chat-message {{ $message->sender_id == auth()->id() ? 'chat-message-right' : '' }}">
                                                <div class="d-flex overflow-hidden">
                                                    <div class="chat-message-wrapper flex-grow-1">
                                                        <div class="chat-message-text">
                                                            <p class="mb-0">{{ $message->content }}</p>
                                                        </div>
                                                        <div class="text-end text-muted mt-1">
                                                            <i class="ti ti-checks ti-xs me-1 text-success"></i>
                                                            <small>{{ $message->created_at->format('h:i A') }}</small>
                                                        </div>
                                                    </div>
                                                    <div class="user-avatar flex-shrink-0 ms-3">
                                                        <div class="avatar avatar-sm">
                                                            <img src="{{ $contact->image ? asset($contact->image) : asset('uploads/defaults/default-avatar.png') }}"
                                                                alt="Avatar" class="rounded-circle" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    @else
                                        <li class="chat-contact-list-item chat-list-item-0">
                                            <h6 class="text-muted mb-0">@lang('site.no_messages')</h6>
                                        </li>
                                    @endif
                                    <!-- Chat message form -->
                                    <div class="chat-history-footer shadow-sm">
                                        <form class="form-send-message d-flex justify-content-between align-items-center">
                                            <input class="form-control message-input border-0 me-3 shadow-none"
                                                placeholder="Type your message here" />
                                            <div class="message-actions d-flex align-items-center">
                                                <i class="speech-to-text ti ti-microphone ti-sm cursor-pointer"></i>
                                                <label for="attach-doc" class="form-label mb-0">
                                                    <i class="ti ti-photo ti-sm cursor-pointer mx-3"></i>
                                                    <input type="file" id="attach-doc" hidden />
                                                </label>
                                                <button class="btn btn-primary d-flex send-msg-btn">
                                                    <i class="ti ti-send me-md-1 me-0"></i>
                                                    <span class="align-middle d-md-inline-block d-none">Send</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                @else
                                    <div class="col app-chat-conversation d-flex align-items-center justify-content-center flex-column"
                                        id="app-chat-conversation">
                                        <div class="bg-label-primary p-8 rounded-circle">
                                            <i class="icon-base ti tabler-message-2 icon-50px"></i>
                                        </div>
                                        <p class="my-4">@lang('site.select_contact')</p>
                                      
                                    </div>

                                @endif
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- /Chat History -->



            </div>
        </div>
    </div>

@endsection
@section('jsFiles')
    <script src={{ asset('admin/assets/js/app-chat.js') }}></script>


@endsection
