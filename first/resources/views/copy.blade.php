<!DOCTYPE html>
<html lang="en">

<head>
<link href="{{ asset('css/copy.css') }} " rel="stylesheet">
<!-- <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" /> -->
<script type="text/javascript" src="{{ asset('js/copy.js') }}"></script>
  
   
</head>

<body>
    <div class="cover">
        <div class="cover-inside">

            <h3>بلاگفا یک ابزار قدرتمند برای ساخت و مدیریت وبلاگ است. بلاگفا به شما کمک می‌کند تا با سرعت و سهولت
                اطلاعات، خاطرات، مطالب و مقالات خود را در اینترنت منتشر کنید.
            </h3>
            <input type="button" class="btn" value="ثبت وبلاگ جدید" onclick="window.location = '/new-blog/?'">
            <input type="button" class="btn" value="ورود به بخش مدیریت" onclick="gotologin()">
        </div>
    </div>
    <div class="footer">
        <ul>
            <li><a href="/desktop/login.aspx?">ورود به بخش مدیریت</a></li>
            <li><a href="/updated">وبلاگهای بروز شده</a></li>
            <li><a href="/members">فهرست وبلاگها</a></li>
            <li><a href="/new-blog">ساخت وبلاگ جدید</a></li>
            <li><a href="/help">راهنما</a></li>
            <li><a href="/ads">تبلیغات در وبلاگها</a></li>
            <li><a href="/report-abuse">گزارش تخلف</a></li>
            <li class="lilast"><a href="/contact">تماس با ما</a></li>
        </ul>
    </div>

</body>

</html>