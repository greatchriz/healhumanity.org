@aware(['cause'])
<div class="causes bg-white border-1px border-bottom-theme-color-1px clearfix mb-30">
    <div class="col-md-5 col-lg-5 p-0">
        <div class="thumb">
            <img class="img-fullwidth" alt="" src="{{ $cause['image'] }}">
            <div class="overlay-donate-now">
                <a href="page-donate.html" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">Donate <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-7 col-lg-7 p-0">
        <div class="causes clearfix p-20 pt-15">
            <h3 class="mt-0"><a class="text-theme-colored" href="#">{{ $cause['title'] }}</a></h3>
            <p class="pt-0">{{ $cause['description'] }}</p>
            <div class="progress-item mt-0">
                <div class="progress mb-0">
                    <div data-percent="{{ $cause['progress'] }}" class="progress-bar appeared" style="width: {{ $cause['progress'] }}%;"><span class="percent">0</span><span class="percent">{{ $cause['progress'] }}%</span></div>
                </div>
            </div>
            <div class="course-details-bottom mt-15">
                <ul class="list-inline project-conditions mt-30 text-center m-0 p-10">
                    <li class="target-fund text-theme-colored"><strong>{{ $cause['target_fund'] }}</strong>Target</li>
                    <li class="day text-theme-colored"><i class="flaticon-charity-hand-holding-a-heart font-30"></i></li>
                    <li class="raised text-theme-colored"><strong>{{ $cause['raised'] }}</strong>Raised</li>
                </ul>
            </div>
        </div>
    </div>
</div>
