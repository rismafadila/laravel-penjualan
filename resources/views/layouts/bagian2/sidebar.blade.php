<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{ route('barang.index') }}"><i class="fa fa-edit fa-fw"></i>Atasan</a>
            </li>
            <li>
                <a href="{{ route('suplier.index') }}"><i class="fa fa-edit fa-fw"></i>Bawahan</a>
            </li>
            <li>
                <a href="{{ route('transaksi.index') }}"><i class="fa fa-edit fa-fw"></i>Aksesoris</a>
            </li>
        </ul>
    </div>
</div>
