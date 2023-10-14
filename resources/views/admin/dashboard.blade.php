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
                            
                            <div class="row flex-between-center mb-4 g-3">
                                <div class="col-auto">
                                  <h3>Total sells</h3>
                                  <p class="text-700 lh-sm mb-0"></p>
                               </div>
                                <div class="col-8 col-sm-4"><select class="form-select form-select-sm mt-2" id="select-gross-revenue-month">
                                    <option>Mar 1 - 31, 2023</option>
                                    <option>April 1 - 30, 2023</option>
                                    <option>May 1 - 31, 2023</option>
                                  </select></div>
                              </div>
                              <div class="echart-total-sales-chart" style="min-height:320px;width:100%"></div>
                              <hr>
                           
                            
                        </div>
                    </div>
                </div>
            <div>
                <div class="row gx-6">
                    <div class="">
                      <div class="mb-5 mt-7">
                        <h3>Top Governorate by revenue</h3>
                        <p class="text-700"></p>
                      </div>
                      <div class="table-responsive scrollbar">
                        <table class="table fs--2 mb-0">
                          <thead>
                            <tr>
                              <th class="border-top border-200 ps-0 align-middle" scope="col" style="width:32%">COUNTRY</th>
                              <th class="border-top border-200 align-middle" scope="col" style="width:17%">USERS</th>
                              <th class="border-top border-200 text-end align-middle" scope="col" style="width:16%">TRANSACTIONS</th>
                              <th class="border-top border-200 text-end align-middle" scope="col" style="width:20%">REVENUE</th>
                              <th class="border-top border-200 text-end pe-0 align-middle" scope="col" style="width:17%">CONV. RATE</th>
                            </tr>
                          </thead>
                          <tbody class="list">
                            <tr>
                              <td></td>
                              <td class="align-middle py-4">
                                <h4 class="mb-0 fw-normal">377,620</h4>
                              </td>
                              <td class="align-middle text-end py-4">
                                <h4 class="mb-0 fw-normal">236</h4>
                              </td>
                              <td class="align-middle text-end py-4">
                                <h4 class="mb-0 fw-normal"> 15,758 DNT</h4>
                              </td>
                              <td class="align-middle text-end py-4 pe-0">
                                <h4 class="mb-0 fw-normal">10.32%</h4>
                              </td>
                            </tr>
                            <tr>
                              <td class="white-space-nowrap ps-0" style="width:32%">
                                <div class="d-flex align-items-center">
                                  <h6 class="mb-0 me-3">1.</h6><a href="#!">
                                    <div class="d-flex align-items-center"><img src="assets/img/country/india.png" alt="" width="24">
                                      <p class="mb-0 ps-3 text-primary fw-bold fs--1">Tunis</p>
                                    </div>
                                  </a>
                                </div>
                              </td>
                              <td class="align-middle" style="width:17%">
                                <h6 class="mb-0">92896<span class="text-700 fw-medium ms-2">(41.6%)</span></h6>
                              </td>
                              <td class="align-middle text-end" style="width:17%">
                                <h6 class="mb-0">67<span class="text-700 fw-medium ms-2">(34.3%)</span></h6>
                              </td>
                              <td class="align-middle text-end" style="width:17%">
                                <h6 class="mb-0">7560 DNT<span class="text-700 fw-medium ms-2">(36.9%)</span></h6>
                              </td>
                              <td class="align-middle text-end pe-0" style="width:17%">
                                <h6>14.01%</h6>
                              </td>
                            </tr>
                            <tr>
                              <td class="white-space-nowrap ps-0" style="width:32%">
                                <div class="d-flex align-items-center">
                                  <h6 class="mb-0 me-3">2.</h6><a href="#!">
                                    <div class="d-flex align-items-center"><img src="assets/img/country/china.png" alt="" width="24">
                                      <p class="mb-0 ps-3 text-primary fw-bold fs--1">Mahdia</p>
                                    </div>
                                  </a>
                                </div>
                              </td>
                              <td class="align-middle" style="width:17%">
                                <h6 class="mb-0">50496<span class="text-700 fw-medium ms-2">(32.8%)</span></h6>
                              </td>
                              <td class="align-middle text-end" style="width:17%">
                                <h6 class="mb-0">54<span class="text-700 fw-medium ms-2">(23.8%)</span></h6>
                              </td>
                              <td class="align-middle text-end" style="width:17%">
                                <h6 class="mb-0">6532 DNT<span class="text-700 fw-medium ms-2">(26.5%)</span></h6>
                              </td>
                              <td class="align-middle text-end pe-0" style="width:17%">
                                <h6>23.56%</h6>
                              </td>
                            </tr>
                            <tr>
                              <td class="white-space-nowrap ps-0" style="width:32%">
                                <div class="d-flex align-items-center">
                                  <h6 class="mb-0 me-3">3.</h6><a href="#!">
                                    <div class="d-flex align-items-center"><img src="assets/img/country/usa.png" alt="" width="24">
                                      <p class="mb-0 ps-3 text-primary fw-bold fs--1">SFAX</p>
                                    </div>
                                  </a>
                                </div>
                              </td>
                              <td class="align-middle" style="width:17%">
                                <h6 class="mb-0">45679<span class="text-700 fw-medium ms-2">(24.3%)</span></h6>
                              </td>
                              <td class="align-middle text-end" style="width:17%">
                                <h6 class="mb-0">35<span class="text-700 fw-medium ms-2">(19.7%)</span></h6>
                              </td>
                              <td class="align-middle text-end" style="width:17%">
                                <h6 class="mb-0">5432 DNT<span class="text-700 fw-medium ms-2">(16.9%)</span></h6>
                              </td>
                              <td class="align-middle text-end pe-0" style="width:17%">
                                <h6>10.23%</h6>
                              </td>
                            </tr>
                            <tr>
                              <td class="white-space-nowrap ps-0" style="width:32%">
                                <div class="d-flex align-items-center">
                                  <h6 class="mb-0 me-3">4.</h6><a href="#!">
                                    <div class="d-flex align-items-center"><img src="assets/img/country/south-korea.png" alt="" width="24">
                                      <p class="mb-0 ps-3 text-primary fw-bold fs--1">Nabeul</p>
                                    </div>
                                  </a>
                                </div>
                              </td>
                              <td class="align-middle" style="width:17%">
                                <h6 class="mb-0">36453<span class="text-700 fw-medium ms-2">(19.7%)</span></h6>
                              </td>
                              <td class="align-middle text-end" style="width:17%">
                                <h6 class="mb-0">22<span class="text-700 fw-medium ms-2">(9.54%)</span></h6>
                              </td>
                              <td class="align-middle text-end" style="width:17%">
                                <h6 class="mb-0">4673 DNT<span class="text-700 fw-medium ms-2">(11.6%)</span></h6>
                              </td>
                              <td class="align-middle text-end pe-0" style="width:17%">
                                <h6>8.85%</h6>
                              </td>
                            </tr>
                            <tr>
                              <td class="white-space-nowrap ps-0" style="width:32%">
                                <div class="d-flex align-items-center">
                                  <h6 class="mb-0 me-3">5.</h6><a href="#!">
                                    <div class="d-flex align-items-center"><img src="assets/img/country/vietnam.png" alt="" width="24">
                                      <p class="mb-0 ps-3 text-primary fw-bold fs--1">Monastir</p>
                                    </div>
                                  </a>
                                </div>
                              </td>
                              <td class="align-middle" style="width:17%">
                                <h6 class="mb-0">15007<span class="text-700 fw-medium ms-2">(11.9%)</span></h6>
                              </td>
                              <td class="align-middle text-end" style="width:17%">
                                <h6 class="mb-0">17<span class="text-700 fw-medium ms-2">(6.91%)</span></h6>
                              </td>
                              <td class="align-middle text-end" style="width:17%">
                                <h6 class="mb-0">2456 DNT<span class="text-700 fw-medium ms-2">(10.2%)</span></h6>
                              </td>
                              <td class="align-middle text-end pe-0" style="width:17%">
                                <h6>6.01%</h6>
                              </td>
                            </tr>
                          </tbody>
                        </table>
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
