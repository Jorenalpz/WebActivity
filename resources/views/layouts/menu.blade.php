

<li class="nav-item">
    <a href="{{ route('earthQuakes.index') }}"
       class="nav-link {{ Request::is('earthQuakes*') ? 'active' : '' }}">
        <p>Earth Quakes</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>


