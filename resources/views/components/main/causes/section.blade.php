@props(['causes' => ''])

<section id="causes" class="bg-silver-light">
    <div class="container">
        <div class="section-title text-center">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h2 class="text-uppercase line-bottom-center mt-0">Our <span class="text-theme-colored font-weight-600">Causes</span></h2>
                    <div class="title-icon">
                        <i class="flaticon-charity-hand-holding-a-heart"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem obcaecati! <br>ipsum dolor sit Rem autem voluptatem obcaecati</p>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    @foreach($causes as $cause)
                        <x-main.causes.cause :cause="$cause" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


{{-- <section id="causes" class="bg-silver-light">
    <div class="container">
      <div class="section-title text-center">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h2 class="text-uppercase line-bottom-center mt-0">Our <span class="text-theme-colored font-weight-600">Causes</span></h2>
            <div class="title-icon">
              <i class="flaticon-charity-hand-holding-a-heart"></i>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem obcaecati! <br>ipsum dolor sit Rem autem voluptatem obcaecati</p>
          </div>
        </div>
      </div>
      <div class="section-content">
        <div class="row">
          <div class="col-sm-6 col-md-6">
            <div class="causes bg-white border-1px border-bottom-theme-color-1px clearfix mb-30">
              <div class="col-md-5 col-lg-5 p-0">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="images/course/1.jpg">
                  <div class="overlay-donate-now">
                    <a href="page-donate.html" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">Donate <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-7 p-0">
                <div class="causes clearfix p-20 pt-15">
                  <h3 class="mt-0"><a class="text-theme-colored" href="#">Education for Childreen</a></h3>
                  <p class="pt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque iste alias!</p>
                  <div class="progress-item mt-0">
                    <div class="progress mb-0">
                      <div data-percent="84" class="progress-bar appeared" style="width: 84%;"><span class="percent">0</span><span class="percent">84%</span></div>
                    </div>
                  </div>
                  <div class="course-details-bottom mt-15">
                    <ul class="list-inline project-conditions mt-30 text-center m-0 p-10">
                      <li class="target-fund text-theme-colored"><strong>$120,000</strong>Target</li>
                      <li class="day text-theme-colored"><i class="flaticon-charity-hand-holding-a-heart font-30"></i></li>
                      <li class="raised text-theme-colored"><strong>$65,000</strong>Raised</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6">
            <div class="causes bg-white border-1px border-bottom-theme-color-1px clearfix mb-30">
              <div class="col-md-5 col-lg-5 p-0">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="images/course/2.jpg">
                  <div class="overlay-donate-now">
                    <a href="page-donate.html" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">Donate <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-7 p-0">
                <div class="causes clearfix p-20 pt-15">
                  <h3 class="mt-0"><a class="text-theme-colored" href="#">Sponsor a child today</a></h3>
                  <p class="pt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque iste alias!</p>
                  <div class="progress-item mt-0">
                    <div class="progress mb-0">
                      <div data-percent="84" class="progress-bar appeared" style="width: 84%;"><span class="percent">0</span><span class="percent">84%</span></div>
                    </div>
                  </div>
                  <div class="course-details-bottom mt-15">
                    <ul class="list-inline project-conditions mt-30 text-center m-0 p-10">
                      <li class="target-fund text-theme-colored"><strong>$120,000</strong>Target</li>
                      <li class="day text-theme-colored"><i class="flaticon-charity-hand-holding-a-heart font-30"></i></li>
                      <li class="raised text-theme-colored"><strong>$65,000</strong>Raised</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6">
            <div class="causes bg-white border-1px border-bottom-theme-color-1px clearfix mb-30">
              <div class="col-md-5 col-lg-5 p-0">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="images/course/3.jpg">
                  <div class="overlay-donate-now">
                    <a href="page-donate.html" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">Donate <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-7 p-0">
                <div class="causes clearfix p-20 pt-15">
                  <h3 class="mt-0"><a class="text-theme-colored" href="#">Happiness for child</a></h3>
                  <p class="pt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque iste alias!</p>
                  <div class="progress-item mt-0">
                    <div class="progress mb-0">
                      <div data-percent="84" class="progress-bar appeared" style="width: 84%;"><span class="percent">0</span><span class="percent">84%</span></div>
                    </div>
                  </div>
                  <div class="course-details-bottom mt-15">
                    <ul class="list-inline project-conditions mt-30 text-center m-0 p-10">
                      <li class="target-fund text-theme-colored"><strong>$120,000</strong>Target</li>
                      <li class="day text-theme-colored"><i class="flaticon-charity-hand-holding-a-heart font-30"></i></li>
                      <li class="raised text-theme-colored"><strong>$65,000</strong>Raised</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6">
            <div class="causes bg-white border-1px border-bottom-theme-color-1px clearfix mb-30">
              <div class="col-md-5 col-lg-5 p-0">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="images/course/4.jpg">
                  <div class="overlay-donate-now">
                    <a href="page-donate.html" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">Donate <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-7 p-0">
                <div class="causes clearfix p-20 pt-15">
                  <h3 class="mt-0"><a class="text-theme-colored" href="#">Donation for helpless</a></h3>
                  <p class="pt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque iste alias!</p>
                  <div class="progress-item mt-0">
                    <div class="progress mb-0">
                      <div data-percent="84" class="progress-bar appeared" style="width: 84%;"><span class="percent">0</span><span class="percent">84%</span></div>
                    </div>
                  </div>
                  <div class="course-details-bottom mt-15">
                    <ul class="list-inline project-conditions mt-30 text-center m-0 p-10">
                      <li class="target-fund text-theme-colored"><strong>$120,000</strong>Target</li>
                      <li class="day text-theme-colored"><i class="flaticon-charity-hand-holding-a-heart font-30"></i></li>
                      <li class="raised text-theme-colored"><strong>$65,000</strong>Raised</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
