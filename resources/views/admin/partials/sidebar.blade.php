<aside class="bg-dark">
    <nav>
        <ul>
            <li><a href="{{ route('admin.home') }}"
                    class="{{ Route::currentRouteName() === 'admin.home' ? 'active' : '' }}">
                    <i class="fa-solid fa-house"></i> Dashboard
                </a>
            </li>
            <li><a href="{{ route('admin.projects.index') }}"
                    class="{{ Route::currentRouteName() === 'admin.projects.index' ? 'active' : '' }}">
                    <i class="fa-solid fa-folder"></i> Projects
                </a>
            </li>
            <li><a href="{{ route('admin.projects.create') }}"
                    class="{{ Route::currentRouteName() === 'admin.projects.create' ? 'active' : '' }}">
                    <i class="fa-solid fa-folder-plus"></i> New Project
                </a>
            </li>
            <li><a href="{{ route('admin.tecnologies.index') }}"
                    class="{{ Route::currentRouteName() === 'admin.tecnologies.index' ? 'active' : '' }}">
                    <i class="fa-solid fa-code"></i> Tecnologies
                </a>
            </li>
        </ul>
    </nav>
</aside>
