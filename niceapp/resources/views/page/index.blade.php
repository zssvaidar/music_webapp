@extends('base')

@section('content')
{{-- {{$title}}
@foreach ($services as $service)
    {{$service}}

@endforeach --}}


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


    </section>


@endsection
