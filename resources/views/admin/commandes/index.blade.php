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
                            Les listes des Commandes
                            <hr>
                        </div>
                    </div>
                </div>

            <div>
                <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white pt-7 border-y border-300">
                    <div data-list='{"valueNames":["product","customer","rating","review","time"],"page":6}'>
                      <div class="row align-items-end justify-content-between pb-5 g-3">
                        <div class="col-auto">
                          <h3>Dernières Demandes</h3>
                          <p class="text-700 lh-sm mb-0"></p>
                        </div>
                        <div class="col-12 col-md-auto">
                          <div class="row g-2">
                            <div class="col-auto flex-1">
                              <div class="search-box">
                                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control form-control-sm search-input search" type="search" placeholder="Search" aria-label="Search"> <span class="fas fa-search search-box-icon"></span></form>
                              </div>
                            </div>
                            <div class="col-auto"><button class="btn btn-sm btn-phoenix-secondary bg-white hover-bg-100" type="button">All products</button><button class="btn btn-sm btn-phoenix-secondary ms-2 bg-white hover-bg-100" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="table-responsive mx-n1 px-1 scrollbar">
                        <table class="table fs--1 mb-0">
                          <thead>
                            <tr>
                              <th class="white-space-nowrap fs--1 border-top ps-0 align-middle">
                                <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"></div>
                              </th>
                              <th class="sort border-top white-space-nowrap align-middle" scope="col"></th>
                              <th class="sort border-top white-space-nowrap align-middle" scope="col" style="min-width:360px;" data-sort="product">PRODUCT</th>
                              <th class="sort border-top align-middle" scope="col" data-sort="customer" style="min-width:200px;">CLient</th>
                              <th class="sort border-top align-middle" scope="col" data-sort="rating" style="min-width:110px;">RATING</th>
                              <th class="sort border-top align-middle" scope="col" style="max-width:350px;" data-sort="review">REVIEW</th>
                              <th class="sort border-top text-start ps-5 align-middle" scope="col" data-sort="status">STATUS</th>
                              <th class="sort border-top text-end align-middle" scope="col" data-sort="time">TIME</th>
                              <th class="sort border-top text-end pe-0 align-middle" scope="col">ACTION</th>
                            </tr>
                          </thead>
                          <tbody class="list" id="table-latest-review-body">
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="fs--1 align-middle ps-0">
                                <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"></div>
                              </td>
                              <td class="align-middle product white-space-nowrap py-0"><img src="{{asset('mainassets\img\lenevo.jpg')}}" alt="" width="53"></td>
                              <td class="align-middle product white-space-nowrap">
                                <h6 class="fw-semi-bold mb-0">Lenevo</h6>
                              </td>
                              <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                                  <div class="avatar avatar-l">
                                    <div class="avatar-name rounded-circle"><span>M</span></div>
                                  </div>
                                  <h6 class="mb-0 ms-3 text-900">Mohamed Ali</h6>
                                </a></td>
                              <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                              <td class="align-middle review" style="min-width:350px;">
                                <p class="fs--1 fw-semi-bold text-1000 mb-0">Ecran 15.6" LED HD - Processeur AMD 3020e, up to 2.6 GHz, 4 Mo de cache - Mémoire 4 Go - Disque 1 To</p>
                              </td>
                              <td class="align-middle text-start ps-5 status"><span class="badge fs--1 badge-light-success">paye<span class="ms-2 fas fa-check"></span></span></td>
                              <td class="align-middle text-end time white-space-nowrap">
                                <div class="hover-hide">
                                  <h6 class="text-1000 mb-0">Just now</h6>
                                </div>
                              </td>
                              <td class="align-middle white-space-nowrap text-end pe-0">
                                <div class="position-relative">
                                  <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                                </div>
                                <div class="font-sans-serif btn-reveal-trigger"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="fs--1 align-middle ps-0">
                                <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"></div>
                              </td>
                              <td class="align-middle product white-space-nowrap py-0"><img src="{{asset('mainassets\img\iphone.jpg')}}" alt="" width="53"></td>
                              <td class="align-middle product white-space-nowrap">
                                <h6 class="fw-semi-bold mb-0">iPhone 13 </h6>
                              </td>
                              <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                                  <div class="avatar avatar-l"><img class="rounded-circle" src="{{asset('mainassets\img\avatar.png')}}" alt=""></div>
                                  <h6 class="mb-0 ms-3 text-900">Ranim</h6>
                                </a></td>
                              <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-300"></span><span class="fa fa-star text-300"></span></td>
                              <td class="align-middle review" style="min-width:350px;">
                                <p class="fs--1 fw-semi-bold text-1000 mb-0">Ecran Super Retina XDR OLED 6.1" - Résolution 1170 x 2532 px - Processeur Apple A15 Bionic Hexa-Core - Stockage 128 Go</p>
                              </td>
                              <td class="align-middle text-start ps-5 status"><span class="badge fs--1 badge-light-success">paye<span class="ms-2 fas fa-check"></span></span></td>
                              <td class="align-middle text-end time white-space-nowrap">
                                <div class="hover-hide">
                                  <h6 class="text-1000 mb-0">Just now</h6>
                                </div>
                              </td>
                              <td class="align-middle white-space-nowrap text-end pe-0">
                                <div class="position-relative">
                                  <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                                </div>
                                <div class="font-sans-serif btn-reveal-trigger"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="fs--1 align-middle ps-0">
                                <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"></div>
                              </td>
                              <td class="align-middle product white-space-nowrap py-0"><img src="{{asset('mainassets\img\mac.jpg')}}" alt="" width="53"></td>
                              <td class="align-middle product white-space-nowrap">
                                <h6 class="fw-semi-bold mb-0">MacBook pro M2</h6>
                              </td>
                              <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                                  <div class="avatar avatar-l"><img class="rounded-circle" src="{{asset('mainassets\img\user.png')}}" alt=""></div>
                                  <h6 class="mb-0 ms-3 text-900">Nour</h6>
                                </a></td>
                              <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span></td>
                              <td class="align-middle review" style="min-width:350px;">
                                <p class="fs--1 fw-semi-bold text-1000 mb-0">Ecran 13" LED Retina IPS - Résolution (2560 x 1600) pixels True Tone - Processeur Apple M<a href="#!">See more</a></p>
                              </td>
                              <td class="align-middle text-start ps-5 status"><span class="badge fs--1 badge-light-warning">En cours<span class="ms-2 fas fa-stopwatch"></span></span></td>
                              <td class="align-middle text-end time white-space-nowrap">
                                <div class="hover-hide">
                                  <h6 class="text-1000 mb-0">Just now</h6>
                                </div>
                              </td>
                              <td class="align-middle white-space-nowrap text-end pe-0">
                                <div class="position-relative">
                                  <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                                </div>
                                <div class="font-sans-serif btn-reveal-trigger"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="fs--1 align-middle ps-0">
                                <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"></div>
                              </td>
                              <td class="align-middle product white-space-nowrap py-0"><img src="{{asset('mainassets\img\dell.jpg')}}" alt="" width="53"></td>
                              <td class="align-middle product white-space-nowrap">
                                <h6 class="fw-semi-bold mb-0">DEll</h6>
                              </td>
                              <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                                  <div class="avatar avatar-l"><img class="rounded-circle" src="{{asset('mainassets\img\user.jpg')}}" alt=""></div>
                                  <h6 class="mb-0 ms-3 text-900">Amine</h6>
                                </a></td>
                              <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-300"></span><span class="fa fa-star text-300"></span></td>
                              <td class="align-middle review" style="min-width:350px;">
                                <p class="fs--1 fw-semi-bold text-1000 mb-0">Ecran 13.3" LED Full HD - Processeur Intel Core i7-1185G7, up to 4.8 GHz, 12 Mo de mémoire cache - Mémoire 16 Go<a href="#!">See more</a></p>
                              </td>
                              <td class="align-middle text-start ps-5 status"><span class="badge fs--1 badge-light-warning">En cours<span class="ms-2 fas fa-stopwatch"></span></span></td>
                              <td class="align-middle text-end time white-space-nowrap">
                                <div class="hover-hide">
                                  <h6 class="text-1000 mb-0">Nov 09, 3:23 AM</h6>
                                </div>
                              </td>
                              <td class="align-middle white-space-nowrap text-end pe-0">
                                <div class="position-relative">
                                  <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                                </div>
                                <div class="font-sans-serif btn-reveal-trigger"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            
                          </tbody>
                        </table>
                      </div>
                      <div class="row align-items-center py-1">
                        <div class="pagination d-none"></div>
                        <div class="col d-flex fs--1">
                          <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info></p><a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less</a>
                        </div>
                        <div class="col-auto d-flex"><button class="btn btn-link px-1 me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left me-2"></span>Previous</button><button class="btn btn-link px-1 ms-1" type="button" title="Next" data-list-pagination="next">Next<span class="fas fa-chevron-right ms-2"></span></button></div>
                      </div>
                    </div>
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
