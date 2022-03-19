@extends('layouts.frontend')

@section('content')
    <section class="main_banner">
        <img src="{{asset('frontend/images/banner_1.jpg')}}" class="w-100" alt="">
        {{-- <div id="carouselBannerMain" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselBannerMain" data-slide-to="0" class="active"></li>
              <li data-target="#carouselBannerMain" data-slide-to="1"></li>
              <li data-target="#carouselBannerMain" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('frontend/images/banner_1.jpg')}}" class="w-100" alt="">
              </div>
              <div class="carousel-item">
                <img src="{{asset('frontend/images/banner_1.jpg')}}" class="w-100" alt="">
              </div>
              <div class="carousel-item">
                <img src="{{asset('frontend/images/banner_1.jpg')}}" class="w-100" alt="">
              </div>
            </div>
          </div> --}}
    </section>
    <section class="about_us py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{asset('frontend/images/about_us.png')}}" class="w-100" alt="">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-8 mt-md-4">
                    <h3  class="text-info">เกี่ยวกับเรา</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt at ea odit illo, sed, voluptas expedita nulla magnam minus id minima. Magnam, reprehenderit totam? Voluptates suscipit laboriosam possimus voluptas nobis!
                        Magnam, reprehenderit totam? Voluptates suscipit laboriosam possimus voluptas nobis! Magnam, reprehenderit totam? Voluptates suscipit laboriosam possimus voluptas nobis!
                    </p>
                </div>
            </div>
            
            <div class="row  mt-4">
                <div class="col-md-8 mt-md-4">
                    <h3 class="text-info">บริการของเรา</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt at ea odit illo, sed, voluptas expedita nulla magnam minus id minima. Magnam, reprehenderit totam? Voluptates suscipit laboriosam possimus voluptas nobis!
                        Magnam, reprehenderit totam? Voluptates suscipit laboriosam possimus voluptas nobis! Magnam, reprehenderit totam? Voluptates suscipit laboriosam possimus voluptas nobis!
                    </p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <img src="{{asset('frontend/images/about_us_2.png')}}" class="w-100" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="our_tour bg-white py-5">
        <h1 class="text-center text-danger-logo">เลือกทริปที่ถูกใจคุณ</h1>
        <div class="container container-xl">
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="trip_group">
                        <img src="{{asset('frontend/images/1_trip.jpg')}}" class="w-100" alt="">
                        <h6 class="trip_name">Join Trip</h6>
                    </div>
                    <div class="trip_detail">
                        <h5 class="trip_location">เก่าเต่านางนวล</h5>
                        <h5 class="trip_price ml-auto">2,100 THB</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="trip_group">
                        <img src="{{asset('frontend/images/2_trip.jpg')}}" class="w-100" alt="">
                        <h6 class="trip_name">Join Trip</h6>
                    </div>
                    <div class="trip_detail">
                        <h5 class="trip_location">หมู่เก่าอ่างทอง</h5>
                        <h5 class="trip_price ml-auto">2,100 THB</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="trip_group">
                        <div class="recommended">
                            <span><i class="fas fa-badge-check"></i> แนะนำ</span>
                        </div>
                        <img src="{{asset('frontend/images/fullmoon.jpg')}}" class="w-100" alt="">
                        <h6 class="trip_name">Fullmoon Trip</h6>
                    </div>
                    <div class="trip_detail">
                        <h5 class="trip_location">เก่าผงัน</h5>
                        <h5 class="trip_price ml-auto">1,200 THB</h5>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-3">
                    <div class="trip_group">
                        <div class="recommended">
                            <span><i class="fas fa-badge-check"></i> แนะนำ</span>
                        </div>
                        <img src="{{asset('frontend/images/7_trip.jpg')}}" class="w-100" alt="">
                        <h6 class="trip_name">Private</h6>
                    </div>
                    <div class="trip_detail">
                        <h6 class="trip_location">เก่าเต่านางนวล</h6>
                        <h6 class="trip_price ml-auto">32,000 THB</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="trip_group">
                        <img src="{{asset('frontend/images/4_trip.jpg')}}" class="w-100" alt="">
                        <h6 class="trip_name">Private</h6>
                    </div>
                    <div class="trip_detail">
                        <h6 class="trip_location">หมู่เก่าอ่างทอง</h6>
                        <h6 class="trip_price ml-auto">30,000 THB</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="trip_group">
                        <div class="recommended">
                            <span><i class="fas fa-badge-check"></i> แนะนำ</span>
                        </div>
                        <img src="{{asset('frontend/images/5_trip.jpg')}}" class="w-100" alt="">
                        <h6 class="trip_name">Private</h6>
                    </div>
                    <div class="trip_detail">
                        <h6 class="trip_location">เก่าผงัน</h6>
                        <h6 class="trip_price ml-auto">22,000 THB</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="trip_group">
                        <img src="{{asset('frontend/images/6_trip.jpg')}}" class="w-100" alt="">
                        <h6 class="trip_name">Private</h6>
                    </div>
                    <div class="trip_detail">
                        <h6 class="trip_location">เกาะแตร เกาะมัสสัม เกาะลาด</h6>
                        <h6 class="trip_price ml-auto">22,000 THB</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact_us py-5">
        <h1 class="text-center text-white">ติดต่อเรา</h1>
        <div class="container mt-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <h5 class="text-muted">แบบฟอร์มติดต่อเรา</h5>
                            <form id="contactFrom" class="mt-4">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" name="" placeholder="From" id="" class="form-control">
                                    </div>
                                    <div class="col-md-6  mb-3">
                                        <input type="text" name="" placeholder="To" id="" class="form-control">
                                    </div>
                                    <div class="col-md-6  mb-3">
                                        <input type="text" name="" placeholder="Hotel Time" id="" class="form-control">
                                    </div>
                                    <div class="col-md-6  mb-3">
                                        <input type="text" name="" placeholder="Hotel" id="" class="form-control">
                                    </div>
                                    <div class="col-md-6  mb-3">
                                        <input type="text" name="" placeholder="Name" id="" class="form-control">
                                    </div>
                                    <div class="col-md-6  mb-3">
                                        <input type="text" name="" placeholder="Park" id="" class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <select class="form-control">
                                            <option value="" selected>Join Trip เก่าเต่านางนวล</option>
                                            <option value="">Join Trip หมู่เก่าอ่างทอง</option>
                                            <option value="">Fullmoon Trip เก่าผงัน</option>
                                            <option value="">Private เก่าเต่านางนวล</option>
                                            <option value="">Private หมู่เก่าอ่างทอง</option>
                                            <option value="">Private เก่าผงัน</option>
                                            <option value="">Private เกาะแตร เกาะมัสสัม เกาะลาด</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn-submit-contact"><i class="fas fa-paper-plane"></i> ส่ง</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-1 form-inline">
                            <div class="line_center m-auto"></div>
                        </div>
                        <div class="col-md-4 ml--4">
                            <h5 class="text-muted">ข้อมูลในการติดต่อ</h5>
                            <h5 class="mt-3  text-danger-logo">Golden Mood Travel Co., Ltd.</h5>
                            <h6 class="text-dark">
                                <i class="fas fa-map-marker-alt"></i> Ko Samui, Surat Thani 84320
                            </h6>
                            <h6 class="text-dark">
                                <i class="fas fa-phone-square"></i> 01-234-567 (8-9)
                            </h6>
                            <h6 class="text-dark">
                                <i class="fas fa-envelope"></i> goldentravel@admin.com
                            </h6>
                            <div class="d-flex mt-3">
                                <h4>Follow Us: </h4>
                                <a class="footer-icon facebook" href="javascript:void(0)">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="footer-icon line"  href="javascript:void(0)">
                                    <i class="fab fa-line"></i>
                                </a>
                                <a class="footer-icon instagram"  href="javascript:void(0)">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    
@endsection