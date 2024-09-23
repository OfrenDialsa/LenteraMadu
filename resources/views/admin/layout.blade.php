<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lentera Madu</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");

    :root {
        --header-height: 4rem;
        --nav-width: 190px;
        --first-color: #FFFFFF;
        --first-color-light: #000000;
        --white-color: #4880FF;
        --body-font: 'Nunito', sans-serif;
        --normal-font-size: 1rem;
        --z-fixed: 100
    }

    body {
        position: relative;
        margin: var(--header-height) 0 0 0;
        padding: 0 1rem;
        font-family: var(--body-font);
        font-size: var(--normal-font-size);
        transition: .5s;
    }

    hr {
        margin-left: -60px;
        margin-right: -16px;
    }

    a {
        text-decoration: none
    }

    .container {
        margin-top: 6rem;
        background-color: #F5F6FA;
        padding-bottom: 17rem;
        padding-top: 1rem;
    }

    .header {
        width: 100%;
        height: var(--header-height);
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 1rem;
        background-color: var(--first-color);
        z-index: var(--z-fixed);
        transition: .5s;
    }

    .header_toggle {
        margin-top: 1rem;
        padding: 0 1rem;
        color: #cc5803;
        font-size: 1.5rem;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    .header_img {
        width: 100px;
        height: 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .signIn {
        color: var(--first-color-light);
        cursor: pointer;
    }

    .signIn:hover {
        color: var(--white-color);
    }

    .header_img i {
        width: 20px
    }

    .header_img p {
        font-size: 10px;
    }


    .l-navbar {
        position: fixed;
        top: 0;
        left: -30%;
        display: flex;
        width: var(--nav-width);
        height: 100vh;
        background-color: var(--first-color);
        padding: .5rem 1rem 0 0;
        transition: .5s;
        z-index: var(--z-fixed)
    }

    .nav {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        overflow: hidden
    }

    .nav_logo,
    .nav_link {
        display: grid;
        grid-template-columns: max-content max-content;
        align-items: center;
        column-gap: 1rem;
        padding: .5rem 0 .5rem 1.5rem
    }

    .nav_logo {
        display: flex;
        margin-left: 25px;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 1.25rem;

    }

    .nav_logo-icon {
        font-size: 1.25rem;
        color: var(--first-color);
        font-weight: 700;
    }

    .nav_logo-name {
        color: var(--first-color-light);
        font-weight: 700
    }

    .nav_link {

        position: relative;
        color: var(--first-color-light);
        margin-bottom: 1.5rem;
        transition: .3s
    }

    .nav_link:hover {
        color: var(--white-color)
    }

    .nav_icon {
        font-size: 1.25rem
    }

    .nav_list {
        margin-top: 1rem;
    }

    .show {
        left: 0
    }

    .body-pd {
        padding-left: calc(var(--nav-width) + 1rem)
    }

    .active {
        color: var(--white-color)
    }

    .active::before {
        content: '';
        position: absolute;
        left: 0;
        width: 2px;
        height: 32px;
        background-color: var(--white-color)
    }

    .height-100 {
        height: 100vh
    }

    .table-responsive {
        text-align: center;
    }

    .tambah-btn {
        text-align: end;
        padding: 1rem;
    }

    .media-body {
        text-align: center;
    }

    .list-unstyled {
        padding-left: 2rem;
        padding-right: 2rem;
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    .card {
        margin-bottom: 1rem;
    }

    .media-body {
        padding-left: 3rem;
    }

    .list-unstyled{
        display: flex;
        flex-direction: column-reverse;
    }
    .judul{
        font-weight: 700;
        font-size: large;
        margin-bottom: 0%;
        padding-bottom: 0%;
    }
    .aduan{
        margin-top: 1rem;
        font-weight: 300;
    }
    .user{
        font-size: small;
    }


    @media screen and (min-width: 768px) {
        body {
            margin: calc(var(--header-height) + 1rem) 0 0 0;
            padding-left: calc(var(--nav-width) + 2rem)
        }

        .header {
            height: calc(var(--header-height) + 1rem);
            padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
        }

        .header_img {
            width: 40px;
            height: 40px
        }

        .header_img img {
            width: 45px
        }

        .l-navbar {
            left: 0;
            padding: 1rem 1rem 0 0
        }

        .show {
            width: calc(var(--nav-width) + 156px)
        }

        .body-pd {
            padding-left: calc(var(--nav-width) + 188px)
        }
    }
</style>

<body id="body-pd">
    <main>
        <header class="header" id="header">
            <div class="header_toggle">
                <h4>Layanan Elektronik Terpadu RT 52</h4>
            </div>
            <div class="signIn">
                Login Sebagai Admin
            </div>
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav_logo">
                        <span class="nav_logo-icon">
                            <img src="{{URL::asset('/image/logo.png')}}" alt="Logo" width="100x" height="90px">
                        </span>
                        <span class="nav_logo-name">
                            <h5>Lentera Madu</h5>
                        </span>

                    </a>
                    <div class="nav_list">
                        <a href="#" href="{{url('/dashboard')}}" class="nav_link"><i class="bi bi-pie-chart-fill"></i></i>Dashboard</a>
                        <a id="stu" href="{{url('/krisan')}}" class="nav_link"> <i class="bi bi-chat-left-text-fill"></i> <span class="nav_name">Diskusi</span> </a>
                        <a id='tea' href="{{url('/dokumen')}}" class="nav_link"> <i class="bi bi-file-earmark-fill"></i> <span class="nav_name">Dokumen</span></a>
                        <a id='crs' href="{{url('/pengurus')}}" class="nav_link"> <i class="bi bi-people-fill"></i> <span class="nav_name">Organisasi</span> </a>
                        <a href="#" class="nav_link"> <i class='bi bi-person-add nav_icon'></i> <span class="nav_name">-</span> </a>
                        <a href="#" class="nav_link"> <i class='bi bi-credit-card-2-front-fill nav_icon'></i> <span class="nav_name">-</span> </a>
                    </div>
            </nav>
        </div>
        <!--Container Main start-->
        <div class="container">
            @yield('content')
        </div>
        <!--Container Main end-->
        </div>
        </div>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

            const showNavbar = (toggleId, navId, bodyId, headerId) => {
                const toggle = document.getElementById(toggleId),
                    nav = document.getElementById(navId),
                    bodypd = document.getElementById(bodyId),
                    headerpd = document.getElementById(headerId)

                // Validate that all variables exist
                if (toggle && nav && bodypd && headerpd) {
                    toggle.addEventListener('click', () => {
                        // show navbar
                        nav.classList.toggle('show')
                        // change icon
                        toggle.classList.toggle('bx-x')
                        // add padding to body
                        bodypd.classList.toggle('body-pd')
                        // add padding to header
                        headerpd.classList.toggle('body-pd')
                    })
                }
            }

            showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

            /*===== LINK ACTIVE =====*/
            const linkColor = document.querySelectorAll('.nav_link')
            const stu = document.getElementById('stu')

            function colorLink() {
                stu.classList.add('active')
                stu.classList.remove('active')
            }
            linkColor.forEach(l => l.addEventListener('click', colorLink))
        });
    </script>
</body>

</html>