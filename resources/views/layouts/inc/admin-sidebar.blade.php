<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">หน้าหลัก</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseFace" aria-expanded="false" aria-controls="collapseFace">
                    <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                    หน้าหลัก
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseFace" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('admin/dashboards') }}">แดชบอร์ด</a>
                    </nav>
                </div>
                
                
                <div class="sb-sidenav-menu-heading">เมนูใช้งาน</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUser" aria-expanded="false" aria-controls="collapseUser">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    ผู้ใช้
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseUser" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        {{-- <a class="nav-link" href="{{ url('admin/adduser') }}">เพิ่มผู้ใช้</a> --}}
                        <a class="nav-link" href="{{ url('admin/user') }}">รายการผู้ใช้</a>

                    </nav>
                </div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProduct" aria-expanded="false" aria-controls="collapseProduct">
                    <div class="sb-nav-link-icon"><i class="fab fa-product-hunt"></i></i></div>
                    สินค้า
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseProduct" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        {{-- <a class="nav-link" href="{{ url('admin/addproduct') }}">เพิ่มสินค้า</a> --}}
                        <a class="nav-link" href="{{ url('admin/product') }}">รายการสินค้า</a>
                    </nav>
                </div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseMeterial" aria-expanded="false" aria-controls="collapseMeterial">
                    <div class="sb-nav-link-icon"><i class="fas fa-clipboard"></i></div>
                    วัตถุดิบ
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseMeterial" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
{{--                         <a class="nav-link" href="{{ url('admin/addmaterial') }}">เพิ่มวัตถุดิบ</a>
 --}}                        <a class="nav-link" href="{{ url('admin/material') }}">รายการวัตถุดิบ</a>
                        <a class="nav-link" href="{{ url('admin/managematerial') }}">วัตถุดิบที่ต้องสั่งซื้อ</a>
                        <a class="nav-link" href="#">ตัดสต็อก</a>
                        {{-- <a class="nav-link" href="{{ url('admin/material-order') }}">วัตถุดิบที่ต้องสั่งซื้อ</a> --}}
                    </nav>
                </div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseStockinMeterial" aria-expanded="false" aria-controls="collapseStockinMeterial">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-cart-plus"></i></i></div>
                    รับเข้าวัตถุดิบ
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseStockinMeterial" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('admin/addstockin') }}">รับเข้าวัตถุดิบ</a>
                        <a class="nav-link" href="{{ url('admin/stockin') }}">รายการวัตถุดิบที่รับเข้า</a>
                    </nav>
                </div>

                




               
                {{-- <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="charts.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div> --}}
    </nav>
</div>