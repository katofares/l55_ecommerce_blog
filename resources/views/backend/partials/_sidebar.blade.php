<div id="sidebar-main" class="sidebar sidebar-default">
    <div class="sidebar-content">
        <ul class="navigation">
            <li class="navigation-header">
                <span>Main</span>
                <i class="icon-menu"></i>
            </li>

            <li>
                <a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a>
            </li>

            <li class="navigation-header">
                <span>Posts</span>
                <i class="icon-menu"></i>
            </li>

            <li>
                <a href="index.html"><i class="fa fa-pencil"></i> <span>Posts</span></a>
                <ul>
                    <li><a href="{{ route('admin.posts.index') }}">All posts</a></li>
                    <li><a href="{{ route('admin.posts.create') }}">Create post</a></li>
                    <li><a href="{{ route('admin.posts.trash') }}">Trashed posts</a></li>
                </ul>
            </li>

            <li class="navigation-header">
                <span>Categories</span>
                <i class="icon-menu"></i>
            </li>

            <li>
                <a href="index.html"><i class="fa fa-pencil"></i> <span>Categories</span></a>
                <ul>
                    <li><a href="{{ route('admin.categories.index') }}">All Categories</a></li>
                    <li><a href="{{ route('admin.categories.create') }}">Create Category</a></li>
                </ul>
            </li>


        </ul>
    </div>
</div>