<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.main.index')}}" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{route('admin.category.index')}}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Категории
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.author.index')}}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Авторы
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.book.index')}}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Книги
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.user.index')}}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Пользователи
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.purchase.index')}}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Заказы
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.export.export')}}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        Экспорт
                    </p>
                </a>
            </li>
        </ul>

    </div>
    <!-- /.sidebar -->
</aside>
