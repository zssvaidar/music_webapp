@extends('base')

@section('content')
{{$title}}
@foreach ($services as $service)
    {{$service}}

@endforeach


      <div class="navigation shadow">
        <div class="flex ">
          <div class="navigation-margin">
            <div class="toolbar layout-gt-sm-row d-flex ">
              <div class="inline logo">
                <img src="{{asset('img/mini.png')}}">
              </div>

              <span class="navigation-main-menu flex-gt-sm  ">
                  <a class="btn menu-btn" href="#">About</a>

                  <a class="btn menu-btn" href="#">Tracks</a>

                  <a class="btn menu-btn" href="#">Videos</a>

                  <a class="btn menu-btn" href="#">Contact</a>
              </span>

              <div class="inline card-menu">
                  <i class="material-icons md-dark "></i>
                 $0.00
              </div>

                <div class="inline card-menu primary primary-border">
                  LOG IN
              </div>

            </div>
          </div>
        </div>
      </div>


    <section class="flex">
      <div class="headline " >

        <div  id="main-bg" >
          <img src="{{asset('img/heic1501a.jpg')}}">
        </div>
        <div class="to_feature">

          <div class="inline card-menu primary-border primary">
              <a href="">Music</a>
          </div>
          <div class="inline card-menu primary-border">
            <a class="card-btn" href="">About</a>
          </div>

        </div>
        <div class="hilights" ></div>

        <div class="content-wrapper" >



          <div class="headline-feature">
            <div class="cover-big">
              <img width="170px" src="{{asset('img/mini.png')}}">
            </div>
            <div class="feature-desc">
              <div class="inline  data-content">
                <div class="row-tag">
                  <span class="track-tag track-tag-h"> <a href="">#supert tag</a> </span>
                  <span class="track-tag track-tag-h"><a href="">#supert tag</a> </span>
                  <span class="track-tag track-tag-h"><a href="">#supert tag</a></span>
                </div>
                <div>
                  <h4 class="track-label">Featured Track</h4>
                  <h2>
                    <a href="">Malibu</a>
                  </h2>
                </div>
              </div>

              <div class="inline data-content">
                <span class="inline box-column ">
                  <a href="">
                      <div class=" card-menu">
                        <i class="mr-1 material-icons md-dark "></i>
                        ADD TO CART
                      <i class="mr-2 material-icons text-md"></i>
                    </div>
                  </a>
                </span>

                <span class="inline box-column">
                    <h4>PRICE</h4>
                    <strong>$49.99+</strong>
                </span>
                <span class="inline box-column">
                    <h4>BPM</h4>
                    <strong>0</strong>
                </span>

                  <div class="desc-tab">
                    <h4 class="text-c">Genre</h4>
                    <span class="inline label text-c intense" >  Hip Hop  </span>
                    <span class="inline label text-c intense">Trap </span>
                  </div>
              </div>

            </div>
          </div>

          <div class="table-responsive  table-wrapp table-borderless">
            <table class="table">
              <thead >
                <tr class="d-flex text-secondary" >
                  <th class="pl-4 ml-3" scope="col"></th>
                  <th class="col-4 col-sm-3 ml-1"><strong>TITLE</strong></th>
                  <th class="col-1 col-sm-1"><strong>TIME</strong></th>
                  <th class="col-2 col-sm-1 "><strong>BPM</strong></th>
                  <th class="col-3 col-sm-4 pl-3"><strong>TAGS</strong></th>
                  <th class="col-4 col-sm-4 pl-5"><strong>OPTIONS</strong> </th>
                </tr>
              </thead>
              <tbody>
                <tr class="d-flex border-top">
                  <th  scope="row">
                      <img width="44" height="44" src="https://image.beatstars.com/fit-in/100x100/filters:format(.jpeg):quality(50):fill(000000)/b.user.data/c/chazguapo-195534/gfx/cover-artwork/1549400660.png?_=1549400661" ng-src="https://image.beatstars.com/fit-in/100x100/filters:format(.jpeg):quality(50):fill(000000)/b.user.data/c/chazguapo-195534/gfx/cover-artwork/1549400660.png?_=1549400661" alt="" class="img-full">
                  </th>
                  <td class="col-4 col-sm-3" >Mark</td>
                  <td class="col-1 col-sm-1" >02:48</td>
                  <td class="col-2 col-sm-1" >0</td>
                  <td class="col-2 col-sm-2" >
                      <div class="track-tag track-tag-gh"><a href="">#Otii Rozen</a></div>
                      <div class="track-tag track-tag-gh"><a href="">#Otii Rozen</a></div></td>
                  <td class="col-3 col-sm-4" >
                    <a href="">
                      <i class="mr-2 material-icons text-md"></i>
                    </a>
                    <a href="">
                        <div class=" inline card-menu">
                          <i class="mr-1 material-icons md-dark "></i>
                          <span class="inline">ADD</span>
                        </div>
                    </a>
                  </td>
                </tr>
                <tr class="d-flex border-top">
                  <th  scope="row">
                      <img width="44" height="44" src="https://image.beatstars.com/fit-in/100x100/filters:format(.jpeg):quality(50):fill(000000)/b.user.data/c/chazguapo-195534/gfx/cover-artwork/1549400660.png?_=1549400661" ng-src="https://image.beatstars.com/fit-in/100x100/filters:format(.jpeg):quality(50):fill(000000)/b.user.data/c/chazguapo-195534/gfx/cover-artwork/1549400660.png?_=1549400661" alt="" class="img-full">
                  </th>
                  <td class="col-4 col-sm-3" >Jacob</td>
                  <td class="col-1 col-sm-1" >02:48</td>
                  <td class="col-2 col-sm-1" >0</td>
                  <td class="col-2 col-sm-2" >
                      <div class="track-tag track-tag-gh"><a href="">#Otii Rozen</a></div>
                      <div class="track-tag track-tag-gh"><a href="">#Otii Rozen</a></div></td>
                  </td>
                  <td class="col-3 col-sm-4 " >
                    <a href="">
                      <i class="mr-2 material-icons text-md"></i>
                    </a>
                    <a href="">
                        <div class=" inline card-menu">
                          <i class="mr-1 material-icons md-dark "></i>
                          <span class="inline">ADD</span>
                        </div>
                    </a>
                  </td>
                </tr>
                <tr class="d-flex border-top">
                  <th  scope="row">
                      <img width="44" height="44" src="https://image.beatstars.com/fit-in/100x100/filters:format(.jpeg):quality(50):fill(000000)/b.user.data/c/chazguapo-195534/gfx/cover-artwork/1549400660.png?_=1549400661" ng-src="https://image.beatstars.com/fit-in/100x100/filters:format(.jpeg):quality(50):fill(000000)/b.user.data/c/chazguapo-195534/gfx/cover-artwork/1549400660.png?_=1549400661" alt="" class="img-full">
                  </th>
                  <td class="col-4 col-sm-3 " >Larry</td>
                  <td class="col-1 col-sm-1" >02:48</td>
                  <td class="col-2 col-sm-1" >0</td>
                  <td class="col-2 col-sm-2 " >
                      <div class="track-tag track-tag-gh"><a href="">Otii Rozen</a>  </div>
                      <div class="track-tag track-tag-gh"><a href="">Otii Rozen</a></div></td>
                  </td>
                  <td class="col-3 col-sm-4" >
                    <a href="">
                      <i class="mr-2 material-icons text-md"></i>
                    </a>
                    <a href="">
                        <div class=" inline card-menu">
                          <i class="mr-1 material-icons md-dark "></i>
                          <span class="inline">ADD</span>


                        </div>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>

          </div>

          <div class="inline card-menu primary primary-border t-expand mb-4">
              BROWSE ALL TRACKS
          </div>




        </div>

        <div class="service-fluid bg-d ">
          <div class="content-wrapper ">
            <h2>Licensing Info</h2>

            <div class="d-flex justify-content-center">

              <div class="service-col p-2">
                <div class="top text-white pt-5 pb-4">
                  <span class="service-item-head d-block">WAV Lease</span>
                  <span class="service-item-price d-block"> <strong class=" h1">$49.99</strong></span>
                  <span class="service-item-desc d-block"> <strong>PER UNIT</strong></span>
                </div>

                <div class="bottom">
                    <p>WAV, 1 Tag in the beggining</p>
                    <p>Sell Up To 5000 Units</p>
                    <p>Use for streaming, mixtapes</p>
                    <p>Chaz Guapo maintains full ownership of the instrumental</p>
                    <p>Must Credit (prod. by Chaz Guapo)</p>
                    <p>
                      <button class="card-menu primary-border primary ">Read Full License</button>
                    </p>
                </div>

              </div>

              <div class="service-col p-2">
                <div class="top text-white  pt-5 pb-4">
                  <span class="service-item-head d-block">WAV Lease</span>
                  <span class="service-item-price d-block"> <strong class=" h1">$49.99</strong></span>
                  <span class="service-item-desc d-block"> <strong>PER UNIT</strong></span>
                </div>

                <div class="bottom">
                    <p>WAV, 1 Tag in the beggining</p>
                    <p>Sell Up To 5000 Units</p>
                    <p>Use for streaming, mixtapes</p>
                    <p>Chaz Guapo maintains full ownership of the instrumental</p>
                    <p>Must Credit (prod. by Chaz Guapo)</p>
                    <p>
                      <button class="card-menu primary-border primary ">Read Full License</button>
                    </p>
                </div>

              </div>

              <div class="service-col p-2">
                <div class="top text-white pt-5 pb-4">
                  <span class="service-item-head d-block">WAV Lease</span>
                  <span class="service-item-price d-block"> <strong class=" h1">$49.99</strong></span>
                  <span class="service-item-desc d-block"> <strong>PER UNIT</strong></span>
                </div>

                <div class="bottom">
                    <p>WAV, 1 Tag in the beggining</p>
                    <p>Sell Up To 5000 Units</p>
                    <p>Use for streaming, mixtapes</p>
                    <p>Chaz Guapo maintains full ownership of the instrumental</p>
                    <p>Must Credit (prod. by Chaz Guapo)</p>
                    <p>
                      <button class="card-menu primary-border primary ">Read Full License</button>
                    </p>
                </div>

              </div>

            </div>

          </div>
        </div>

        <div class="service-fluid ">
          <div class="content-wrapper">
            <h2>Services</h2>

            <div class="d-flex justify-content-center">

              <div class="service-col">
                <div class="service-top img-fluid">

                  <img width="300"class="rounded-circle" height="300" src="{{asset('img/sqr26.png')}}">

                </div>

                  <h4>Vocal Mixing</h4>

                  <p> Faq mail</p>
                  <p><button class="card-menu primary-border primary">DETAILS</button></p>
              </div>

              <div class="service-col">
                <div class="service-top img-fluid">
                  <img width="300"class="rounded-circle" height="300" src="{{asset('img/sqr26.png')}}">
                </div>

                  <h4>Vocal Mixing</h4>

                  <p> Faq mail</p>
                  <p><button class="card-menu primary-border primary">DETAILS</button></p>
              </div>

              <div class="service-col">
                <div class="service-top img-fluid">
                  <img width="300"class="rounded-circle" height="300" src="{{asset('img/sqr26.png')}}">
                </div>

                  <h4>Vocal Mixing</h4>

                  <p> Faq mail</p>
                  <p><button class="card-menu primary-border primary">DETAILS</button></p>
              </div>

            </div>


            <div class="inline card-menu primary primary-border t-expand mb-4">
              BROWSE ALL SERVICES
          </div>
          </div>
        </div>

        <div class="media-service">
          <div class="content-wrapper">
            <h2 class="inline mb-3">ChillBoy</h2>
            <div class="d-flex">


              <div class="media-content  d-flex flex-column">
                <span class=" pl-4 pt-3">
                  <span class="d-flex justify-content-start"><strong >999999</strong></span>
                  <span class="d-flex justify-content-start">Views</span>
                </span>
                <span class="pl-4 pt-3">
                  <span class="d-flex justify-content-start"><strong >999999</strong></span>
                  <span class="d-flex justify-content-start">Subscriptions</span>
                </span>
                <span class=" pl-4 pt-3 pb-3">
                  <span class="d-flex justify-content-start"><strong>999</strong></span>
                  <span class="d-flex justify-content-start">Videos</span>
                </span>
                <p >
                  <a class="p-2 pl-3 pr-3 text-white primary-border primary txt-s2 " href="">CONTACT WITH ME</a>
                </p>
              </div>
              <div class="promo-frame w-50 h-50 pl-4">
                <iframe width="520" height="400"  src="https://www.youtube.com/embed/vnLAa6_hB9A" frameborder="0"  allowfullscreen>

                </iframe>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="getittouch-service bg-d">
        <div class="content-wrapper">
          <div class="d-flex ">
            <h2 class="d-inline-block mt-3 mr-5">Contact</h2>
            <form action="" method="post">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input class="form-control"  type="text" required>
                  <span class="highlight"></span>
                  <label>Username</label>
                </div>
                <div class="form-group col-md-6">
                  <input class="form-control"  type="text" required>
                  <span class="highlight"></span>
                  <label>Username</label>
                </div>
              </div>
                <div class="input-group">
                  <input class="form-control"   type="text" required>
                  <span class="highlight"></span>
                  <label>Username</label>
                </div>
             <div class="d-block float-left pt-2">
              <button type="submit" class="text-white primary-border primary txt-s2 pl-3 pr-3">Send Message</button>
            </div>
        </form>

        </div>
      </div>
      </div>

      <div class="footer bg-d ">
        <div class="content-wrapper">
          <div class="d-flex">
            <div>
              <span>
                <span></span>
                <span></span>
              </span>
              <span></span>
            </div>
            <div>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div>
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div class="social">


              <p>
                <a href="" target="_blank" class="icon-link m-l-xs ng-scope" ng-repeat="socialNetwork in pst.socialNetworks" style=""><md-icon class="s36" aria-label="Facebook" md-svg-src="/pages/two-point-o/images/social/facebook.svg" role="img"><svg width="100%" height="100%" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                <!-- Generator: Sketch 41.2 (35397) - http://www.bohemiancoding.com/sketch -->
                <title>Facebook_Color</title>
                <desc>Created with Sketch.</desc>
                <defs></defs>
                <g id="Desktop_cache17" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="beatstars_homepage_cache17" transform="translate(-1115.000000, -4902.000000)">
                        <g id="FOOTER_cache17" transform="translate(0.000000, 4815.000000)">
                            <g id="SOCIAL_cache17" transform="translate(1115.000000, 87.000000)">
                                <g id="Facebook_cache17">
                                    <path d="M0,15 C0,6.71572834 6.71572834,0 15,0 C23.2842717,0 30,6.71572834 30,15 C30,23.2842717 23.2842717,30 15,30 C6.71572834,30 0,23.2842717 0,15 Z" id="back_cache17" fill="#3B5998"></path>
                                    <path d="M16.0634719,23.3196729 L16.0634719,15.158881 L18.3162074,15.158881 L18.6147435,12.3466269 L16.0634719,12.3466269 L16.0672993,10.9390667 C16.0672993,10.2055875 16.1369896,9.81257258 17.1904776,9.81257258 L18.5987961,9.81257258 L18.5987961,7 L16.3457416,7 C13.6394609,7 12.6869203,8.3642458 12.6869203,10.6584782 L12.6869203,12.3469454 L11,12.3469454 L11,15.1591995 L12.6869203,15.1591995 L12.6869203,23.3196729 L16.0634719,23.3196729 Z" id="Shape_cache17" fill="#FFFFFF"></path>
                                </g>
                            </g>
                        </g>
                    </g>
                </g>
            </svg></md-icon></a>
            <a href="" target="_blank" class="icon-link m-l-xs ng-scope" ng-repeat="socialNetwork in pst.socialNetworks"><md-icon class="s36" aria-label="Twitter" md-svg-src="/pages/two-point-o/images/social/twitter.svg" role="img"><svg width="100%" height="100%" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                <!-- Generator: Sketch 41.2 (35397) - http://www.bohemiancoding.com/sketch -->
                <title>Twitter_Color</title>
                <desc>Created with Sketch.</desc>
                <defs></defs>
                <g id="Desktop_cache14" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="beatstars_homepage_cache14" transform="translate(-1155.000000, -4902.000000)">
                        <g id="FOOTER_cache14" transform="translate(0.000000, 4815.000000)">
                            <g id="SOCIAL_cache14" transform="translate(1115.000000, 87.000000)">
                                <g id="Twitter_cache14" transform="translate(40.000000, 0.000000)">
                                    <path d="M0,15 C0,6.71572834 6.71572834,0 15,0 C23.2842717,0 30,6.71572834 30,15 C30,23.2842717 23.2842717,30 15,30 C6.71572834,30 0,23.2842717 0,15 Z" id="back_cache14" fill="#55ACEE"></path>
                                    <path d="M14.5507516,12.1921879 L14.5822282,12.7112217 L14.0576187,12.6476666 C12.1480401,12.4040384 10.4797819,11.5778213 9.0633363,10.1902002 L8.37085177,9.50168594 L8.19248454,10.0101273 C7.8147657,11.1435277 8.05608607,12.3404833 8.84300031,13.1455154 C9.26268791,13.5904015 9.1682582,13.6539567 8.44429709,13.3891435 C8.19248454,13.3044033 7.97214855,13.2408481 7.95116417,13.2726257 C7.87771884,13.3467734 8.1295314,14.3106934 8.32888301,14.6920243 C8.60167994,15.2216507 9.15776601,15.7406846 9.76631303,16.0478679 L10.2804303,16.291496 L9.67188332,16.3020885 C9.08432068,16.3020885 9.0633363,16.312681 9.12628944,16.5351241 C9.33613324,17.2236384 10.1650162,17.9545228 11.088329,18.2722986 L11.7388447,18.4947417 L11.1722665,18.8337025 C10.3328913,19.3209588 9.34662543,19.5963645 8.36035958,19.6175496 C7.88821103,19.6281421 7.5,19.6705122 7.5,19.7022898 C7.5,19.8082151 8.78004717,20.4013966 9.52499266,20.6344322 C11.7598291,21.3229465 14.4143532,21.0263557 16.4078693,19.8505852 C17.8243149,19.0137755 19.2407605,17.3507487 19.9017685,15.7406846 C20.258503,14.8826898 20.6152374,13.3149958 20.6152374,12.5629263 C20.6152374,12.0756701 20.646714,12.0121149 21.2342766,11.4295259 C21.5805189,11.090565 21.9057768,10.7198266 21.9687299,10.6139013 C22.0736518,10.4126433 22.0631596,10.4126433 21.528058,10.5927163 C20.6362218,10.9104921 20.5103155,10.868122 20.9509875,10.3914582 C21.2762454,10.0524974 21.6644564,9.43813078 21.6644564,9.25805781 C21.6644564,9.22628023 21.5070736,9.27924287 21.3287063,9.37457561 C21.1398469,9.48050089 20.7201593,9.6393888 20.4053936,9.73472154 L19.8388154,9.91479451 L19.3246981,9.56524111 C19.0414089,9.37457561 18.6427057,9.16272507 18.4328619,9.0991699 C17.8977602,8.95087452 17.0793694,8.97205957 16.5967287,9.14154001 C15.2852049,9.61820374 14.4563219,10.8469369 14.5507516,12.1921879 Z" id="Shape_cache14" fill="#FFFFFF"></path>
                                </g>
                            </g>
                        </g>
                    </g>
                </g>
            </svg></md-icon></a>
            <a href="" target="_blank" class="icon-link m-l-xs ng-scope" ng-repeat="socialNetwork in pst.socialNetworks"><md-icon class="s36" aria-label="Youtube" md-svg-src="/pages/two-point-o/images/social/youtube.svg" role="img"><svg width="100%" height="100%" viewBox="0 0 31 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">
                <!-- Generator: Sketch 41.2 (35397) - http://www.bohemiancoding.com/sketch -->
                <title>Youtube_Color</title>
                <desc>Created with Sketch.</desc>
                <defs></defs>
                <g id="Desktop_cache15" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="beatstars_homepage_cache15" transform="translate(-1276.000000, -4902.000000)">
                        <g id="FOOTER_cache15" transform="translate(0.000000, 4815.000000)">
                            <g id="SOCIAL_cache15" transform="translate(1115.000000, 87.000000)">
                                <g id="Youtube_cache15" transform="translate(161.000000, 0.000000)">
                                    <path d="M0,15 C0,6.71572834 6.72543315,0 15.0216763,0 C23.3179194,0 30.0433526,6.71572834 30.0433526,15 C30.0433526,23.2842717 23.3179194,30 15.0216763,30 C6.72543315,30 0,23.2842717 0,15 Z" id="back_cache15" fill="#CE1312"></path>
                                    <path d="M22.84,11.9806727 C22.84,11.9806727 22.6835,10.8540232 22.204,10.3578887 C21.5955,9.70642467 20.9135,9.70335895 20.601,9.6655485 C18.362,9.5 15.0035,9.5 15.0035,9.5 L14.9965,9.5 C14.9965,9.5 11.638,9.5 9.399,9.6655485 C9.086,9.70335895 8.4045,9.70642467 7.7955,10.3578887 C7.316,10.8540232 7.16,11.9806727 7.16,11.9806727 C7.16,11.9806727 7,13.3040387 7,14.6268939 L7,15.8674857 C7,17.1908517 7.16,18.5137068 7.16,18.5137068 C7.16,18.5137068 7.316,19.6403563 7.7955,20.1364909 C8.4045,20.7879549 9.204,20.7675168 9.56,20.8354734 C10.84,20.9611676 15,21 15,21 C15,21 18.362,20.9948905 20.601,20.829342 C20.9135,20.7910206 21.5955,20.7879549 22.204,20.1364909 C22.6835,19.6403563 22.84,18.5137068 22.84,18.5137068 C22.84,18.5137068 23,17.1908517 23,15.8674857 L23,14.6268939 C23,13.3040387 22.84,11.9806727 22.84,11.9806727 L22.84,11.9806727 Z" fill="#FFFFFF"></path>
                                    <polygon id="Path_cache15" fill="#CE1312" points="13.348 17.3707069 13.3475 12.7767361 17.6705 15.0816413"></polygon>
                                </g>
                            </g>
                        </g>
                    </g>
                </g>
            </svg></md-icon></a>
            <a href="https://www.instagram.com/chazguapo" target="_blank" class="icon-link m-l-xs ng-scope" ng-repeat="socialNetwork in pst.socialNetworks"><md-icon class="s36" aria-label="Instagram" md-svg-src="/pages/two-point-o/images/social/instagram.svg" role="img"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 466 460" fit="" preserveAspectRatio="xMidYMid meet" focusable="false">

            <image id="Layer_0_cache16" data-name="Layer 0" width="466" height="460" xlink:href="data:img/png;base64,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">
            </image>
            </svg>
          </md-icon>
        </a>

        <a href=" " target="_blank" class="icon-link m-l-xs ng-scope" ng-repeat="socialNetwork in pst.socialNetworks">
          <md-icon class="s36" aria-label="SoundCloud" md-svg-src="/pages/two-point-o/images/social/soundcloud.svg" role="img">
            <svg enable-background="new 0 0 512 512" id="Layer_1_cache18" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fit="" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
              <g>
                <circle cx="256" cy="256" fill="#FF8800" r="256"></circle>
                <g>
                  <path d="M347.6,246c-5.7,0-11.1,1.1-16.2,3.3c-1.1-12.6-5-24.2-11.8-34.7c-6.8-10.5-15.6-18.8-26.6-24.8    c-11-6.1-22.8-9.1-35.5-9.1c-5.5,0-11,0.7-16.6,2c-2.6,0.8-3.9,3.5-3.9,7.8V328c0,0.5,0.2,1.1,0.6,1.8c0.4,0.7,0.9,1.1,1.7,1.4    l108.4,0.1c11.5,0,21.4-4.2,29.7-12.5c8.3-8.3,12.4-18.4,12.4-30.2c0-11.7-4.1-21.7-12.4-30.1C369.2,250.2,359.2,246,347.6,246z" fill="#FFFFFF"></path>
                  <path d="M131.3,258.3c-2.5,0-4.6,0.9-6.4,2.7c-1.8,1.8-2.7,4-2.7,6.6v36.6c0,3.4,1.2,5.9,3.6,7.6    c2.4,1.7,5,2.3,7.7,1.8c2.6-0.5,4.4-1.4,5.4-2.8c1-1.4,1.6-3.6,1.6-6.7v-36.6c0-2.6-0.9-4.8-2.7-6.6    C136,259.2,133.9,258.3,131.3,258.3z" fill="#FFFFFF"></path>
                  <path d="M159.9,225.3c-2.5,0-4.6,0.9-6.4,2.7c-1.8,1.8-2.7,4-2.7,6.5v85.4c0,2.4,0.9,4.3,2.6,5.5    c1.7,1.2,3.9,1.8,6.5,1.8c2.7,0,5-0.6,6.7-1.8c1.7-1.2,2.5-3.1,2.5-5.5v-85.4c0-2.5-0.9-4.7-2.7-6.5    C164.7,226.2,162.5,225.3,159.9,225.3z" fill="#FFFFFF"></path>
                  <path d="M188.7,236.5c-2.6,0-4.8,0.9-6.6,2.8c-1.8,1.8-2.7,4.1-2.7,6.7v77.9l0,0c0,2.4,0.9,4.3,2.6,5.5    s4,1.8,6.7,1.8c2.7,0,4.8-0.6,6.5-1.8c1.7-1.2,2.5-3.1,2.5-5.5V246c0-2.6-0.9-4.8-2.7-6.7C193.3,237.5,191.2,236.5,188.7,236.5z" fill="#FFFFFF"></path>
                  <path d="M220.1,186c-2.7-0.7-5.4,0.1-8.1,2.4c-2.7,2.3-4,5.5-4,9.6v126.3l0,0c0,4.6,3.1,6.9,9.2,6.9    c6.1,0,9.2-2.3,9.2-6.9V198C226.4,191,224.3,187,220.1,186z" fill="#FFFFFF"></path>
                </g>
              </g>
            </svg>
          </md-icon>
        </a>
      </p>

            </div>
          </div>
        </div>
      </div>

    </section>


@endsection
