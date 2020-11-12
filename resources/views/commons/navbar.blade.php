<header class="mb-4 navbar-dark bg-dark">
    <nav class="navbar navbar-expand-sm container">
        <a class="navbar-brand" href="https://localhost/message-board/public">MessageBoard</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                <li class="nav-item">{{ link_to_route('messages.create', '新規メッセージの投稿', [], ['class' => 'nav-link']) }}</li>
            </ul>
        </div>
    </nav>
</header>