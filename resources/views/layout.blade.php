<style>
    .kh1{
        margin-left:20px;
        margin-bottom:20px;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
</head>
<body>
    <header>
        <div class = "container1">
           <a href="{{ url('/') }}"><img style="margin: 10px 0px; width: 250px; height:150px" src="{{ asset('Images/test.png') }}" alt="logo"></a>
           <div class = "menu">
            <nav>
                <ul>
                    <li><a href="{{ url('/tính_năng') }}">Tính năng</a></li>
                    <li><a href="{{ route('login') }}">Tạo đề</a></li>
                    <li><a href="{{ route('price') }}">Bảng giá</a></li>
                    <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                    <li><a href="http://localhost/StudyOnline/public/login" class="btn">Đăng nhập</a></li>
                </ul>
           </nav>
           </div>
        </div>
    </header>
    
    <main>
        @yield('content')
    </main>

    <footer>
        <div class = "container2">
            <div class = "Kh1">
                <img style="width: 250px; height:150px;"  src="{{ asset('Images/test.png') }}" alt="logo">
                <p>Nền tảng học tập online</p>
                <hr class="purple-line">
                <p>Thanh toán</p>
                <div class ="logo">
                <img src="{{ asset('Images/zalo.png') }}" alt="x">
                <img src="{{ asset('Images/vnpay.png') }}" alt="x">
                <img src="{{ asset('Images/mono.png') }}" alt="x">
                <img src="{{ asset('Images/napas.png') }}" alt="x">
                </div>
            </div>

            <div class = "K2">
                <div class = "column">
                    <h4>Sản phẩm dịch vụ<br></h4>
                    <p>Ôn thi sinh viên</p>
                    <p>Tổ chức thi</p>
                    <p>Luyện thi THPT Quốc Gia</p>
                </div>

                <div class = "column">
                    <h4>Tài nguyên<br></h4>
                    <p>Tin tức</p>
                    <p>Kinh nghiệm ôn thi</p>
                    <p>Cẩm nang ôn thi THPTQG</p>
                    <p>Hoạt động cộng đồng</p>
                </div>

                <div class = "column">
                    <h4>Chính sách</h4>
                    <p>Điều khoản sử dụng</p>
                    <p>Điều khoản bảo mật</p>
                </div>
            </div>
        </div>

        {{-- <hr class="purple-line">

        {{-- <div class = "copyright">
           FinalProject © 2025 NM
        </div> --}}
    </footer>
</body>
</html>