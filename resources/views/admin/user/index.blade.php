<!doctype html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Phoenix</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('dashassets/css/phoenix.min.css') }}" rel="stylesheet" id="style-default">
    <link href="{{ asset('dashassets/css/user.min.css') }}" rel="stylesheet" id="user-style-default">
    <style>
        body {
            opacity: 0;
        }
    </style>
</head>

<body>
    <main class="main" id="top">
        <div class="container-fluid px-0">

          @include('inc.admin.sidebar')
          @include('inc.admin.nav')
          
            <div class="content">
                <div class="pb-5">
                    <div class="row g-5">
                        <div>
                            Les listes des utilisateur
                            <hr>
                        </div>
                    </div>
                </div>

            <div>
             
                      <div id="tableExample" data-list="{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;age&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">
                        <div class="table-responsive scrollbar">
                          <table class="table table-bordered table-striped fs--1 mb-0">
                            <thead class="bg-200 text-900">
                              <tr>
                                <th class="sort" data-sort="name">Nom</th>
                                <th class="sort" data-sort="email">Email</th>
                                <th class="sort" data-sort="age">Mot De Passe</th>
                              </tr>
                            </thead>
                            <tbody class="list"><tr>
                                <td class="name">Mohamed</td>
                                <td class="email">Mohamed@gmail.com</td>
                                <td class="age">********</td>
                              </tr><tr>
                                <td class="name">Nour</td>
                                <td class="email">Nour@gmail.com</td>
                                <td class="age">********</td>
                              </tr><tr>
                                <td class="name">Ranim</td>
                                <td class="email">Ranim@gmail.com</td>
                                <td class="age">********</td>
                              </tr><tr>
                                <td class="name">Amine</td>
                                <td class="email">Amine@gmail.com</td>
                                <td class="age">********</td>
                              </tr><tr>
                                <td class="name">Amine</td>
                                <td class="email">Amine@gmail.com</td>
                                <td class="age">********</td>
                              </tr>
                              <tr>
                                <td class="name">islem</td>
                                <td class="email">islem@gmail.com</td>
                                <td class="age">********</td>
                              </tr><tr>
                                <td class="name">islem</td>
                                <td class="email">islem@gmail.com</td>
                                <td class="age">********</td>
                              </tr>
                              <tr>
                                <td class="name">ahmed</td>
                                <td class="email">ahmed@gmail.com</td>
                                <td class="age">********</td>
                              </tr><tr>
                                <td class="name">khaled</td>
                                <td class="email">khaled@gmail.com</td>
                                <td class="age">********</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="row align-items-center mt-3">
                          <div class="pagination d-none"><li class="active"><button class="page" type="button" data-i="1" data-page="5">1</button></li><li><button class="page" type="button" data-i="2" data-page="5">2</button></li><li><button class="page" type="button" data-i="3" data-page="5">3</button></li></div>
                          <div class="col">
                            <p class="mb-0 fs--1"><span class="d-none d-sm-inline-block" data-list-info="">1 to 5 <span class="text-600"> Items of </span>15</span> <span class="d-none d-sm-inline-block">— </span><a class="fw-semi-bold" href="#!" data-list-view="*">View all <svg class="svg-inline--fa fa-angle-right fa-w-8 ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="" style="transform-origin: 0.25em 0.5625em;"><g transform="translate(128 256)"><g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" transform="translate(-128 -256)"></path></g></g></svg><!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --> </a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less <svg class="svg-inline--fa fa-angle-right fa-w-8 ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="" style="transform-origin: 0.25em 0.5625em;"><g transform="translate(128 256)"><g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" transform="translate(-128 -256)"></path></g></g></svg><!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a></p>
                          </div>
                          <div class="col-auto d-flex"><button class="btn btn-sm btn-primary disabled" type="button" data-list-pagination="prev" disabled=""><span>Previous</span></button> <button class="btn btn-sm btn-primary px-4 ms-2" type="button" data-list-pagination="next"><span>Next</span></button></div>
                        </div>
                      </div>
                    


                <footer class="footer">
                    <div class="row g-0 justify-content-between align-items-center h-100 mb-3">
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-900">E-TUNISIA<span
                                    class="d-none d-sm-inline-block"></span><span class="mx-1">|</span><br
                                    class="d-sm-none">2023 &copy; <a href="https://themewagon.com"></a></p>
                        </div>
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600">v1.1.0</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </main>
    <script src=" {{ asset('dashassets/js/phoenix.js') }} "></script>
    <script src=" {{ asset('dashassets/js/ecommerce-dashboard.js') }} "></script>

</body>

</html>
