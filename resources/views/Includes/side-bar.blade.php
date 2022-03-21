<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
    <nav class="yamm megamenu-horizontal" role="navigation">

        <ul class="nav">
            <li class="dropdown menu-item">
                @foreach($data as $row)
                <a href="category.php?id={{$row->id}}" class="dropdown-toggle">
                    <i class="icon fa fa-desktop fa-fw"></i>
                        <!-- Sud sidebar -->
                        {{$row->categoryName}}
                </a>
                @endforeach
                <!-- <a href="category.php?cid=" class="dropdown-toggle">
                    <i class="icon fa fa-desktop fa-fw"></i>
                        Sud sidebar
                </a>
                <a href="category.php?cid=" class="dropdown-toggle">
                    <i class="icon fa fa-desktop fa-fw"></i>
                        Sud sidebar
                </a> -->
            </li>
        </ul>
    </nav>
</div>