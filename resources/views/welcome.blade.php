<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="img/1.png">
        <title>phone_book</title>
        <link href="{{ asset('/css/bootstrap.rtl.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('/css/all.css') }}" type="text/css" rel="stylesheet">




        <style>
            @font-face {
                font-family: Vazir;
                src: url("font/Vazir-Regular.eot");
                src: url("font/Vazir-Regular.woff") format("woff"),
                url("font/Vazir-Regular.ttf") format("ttf"),
                url("font/Vazir-Regular.woff2") format("woff2");
            }
            body{
                direction: rtl;
                font-family: Vazir;
            }

        </style>
    </head>
    <body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">

                    <img src="img/1.png" alt="" height="39" class="d-inline-block align-text-top">

                        <span class="navbar-brand mb-0 h1">دفترچه تلفن
</span>

            </div>
        </nav>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">مخاطبین</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">نام</th>
            <th scope="col">موبایل</th>
            <th scope="col">ایمیل</th>
            <th scope="col"> ویرایش کردن</th>
            <th scope="col">پاک کردن</th>



        </tr>
        </thead>
        <tbody>
        @foreach($messages as $message)
        <tr>
            <th scope="row">{{$message->id}}</th>
            <td>{{$message->name}}</td>
            <td>{{$message->Mobile}}</td>
            <td>{{$message->Email}}</td>
            <td><button type="button" class="btn btn-outline-primary"><img src="img/3.png" alt="" height="21" class="d-inline-block align-text-top">
                </button>
            <td>
{{--                <button type="button" class="btn btn-outline-danger"><img src="img/2.png" alt="" height="21" class="d-inline-block align-text-top">--}}
{{--                </button>--}}
                <form action="{{ route('message.destroy',  $message->id) }}" method="POST" title="حذف">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-outline-danger"><i class="fa fa-times-circle text-danger"></i>حذف</button>
                </form>
            </td>


        </tr>

        @endforeach


        </tbody>
        <!-- Button trigger modal -->
        <button type="button" style="position:fixed; bottom: 8px; left: 100px; width: 50px; height: 50px; border-radius: 100%;" id="btn-new-message" class="btn-outline-primary btn-new-message" data-bs-toggle="modal" data-bs-target="#exampleModal">
            +
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">                    <img src="img/1.png" alt="" height="39" class="d-inline-block align-text-top">
                            دفترچه تلفن
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form method="post" action="\send-form">
                            <div class="col">

                                <input name="id" type="text" class="form-control" placeholder="ایدی" aria-label="First name">
                            </div>
                            <div class="mb-3">
                                <input type="text" name="name" class="form-control mt-3" id="exampleInputEmail1" placeholder="نام و نام خانوادکی" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <input type="number" name="mobile" class="form-control" id="exampleInputEmail1"  placeholder="شماره تلفن"aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1"  placeholder="ایمیل"aria-describedby="emailHelp">
                            </div>

                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <button type="submit" class="btn btn-primary">ثبت پیام</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        </div>



                                </div>
                         </div>
                    </div>
                </div>
            </div>

    </table>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    </body>
</html>
