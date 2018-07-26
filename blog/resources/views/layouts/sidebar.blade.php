
<nav>
  <ul>
    <li class="lead text-center">
        <a href="/">
        <i class="material-icons">Jerry Admin</i>
      </a>
    </li>
    <li class="{{Request::is('/') ? 'activated' : '' }}">
      <a href="/">
        <i class="material-icons">Home</i>
      </a>
    </li>
    <li class="{{Request::is('about') ? 'activated' : '' }}">
      <a href="/about">
        <i class="material-icons">About</i>
      </a>
    </li>
    <li class="{{Request::is('contact') ? 'activated' : '' }}">
      <a href="/contact">
        <i class="material-icons">Contact</i>
      </a>
    </li>
    <li class="{{Request::is('messages') ? 'activated' : '' }}">
      <a href="/messages">
        <i class="material-icons">Messages</i>
      </a>
    </li>
  </ul>
</nav>