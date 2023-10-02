@extends('layouts.app')
@section('pagespecificstyles')
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="d-flex justify-content-center align-items-center" style="margin-bottom: 4rem;">
    <div class="container">
        <div class="row justify-content-center align-items-stretch mt-5 contact-border">
            <!-- Left col -->
            <div class="col-md-6 p-5" style="border-right: 2px solid rgba(200, 200, 200, 0.665);">
                <h2>Πληροφορίες</h2>
                <div class="contact-info-cnt">
                    <ul class="list-group">

                        <!-- Address item -->
                        <li class="list-group-item d-flex align-items-center">
                            <div class="circle-cnt">
                                <img width="40" src="img/svg/geo-alt-fill.svg" alt="gps-svg">
                            </div>
                            <div class="contact-info-txt">
                                <h5>Διεύθυνση</h5>
                                <p class="m-0">Konstantinoupoleos 33, Sérres</p>
                            </div>
                            <!-- <div class="contact-info-cnt-text contact-title">
                            </div> -->
                        </li>



                        <!-- Telephone item -->
                        <li class="list-group-item d-flex align-items-center">
                            <div class="circle-cnt">
                                <img width="40" src="img/svg/telephone-black.svg" alt="phone-svg" style="">
                            </div>
                            <div class="contact-info-txt">
                                <h5>Τηλέφωνο επικοινωνίας</h5>
                                <p class="m-0">2321 023390</p>
                            </div>
                        </li>

                        <!-- Email item -->
                        <li class="list-group-item d-flex align-items-center">
                            <div class="circle-cnt">
                                <img width="40" src="img/svg/envelope-black.svg" alt="mail-svg" style="">
                            </div>
                            <div class="contact-info-txt">
                                <h5>Email</h5>
                                <p class="m-0">les@les.grw</p>
                            </div>
                        </li>

                        <!-- Google Maps widget  -->
                        <li class="list-group-item d-flex align-items-center">
                            <div class="contact-info-txt" style="width: 100%; height; 100%;">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6013.814857755113!2d23.54854039171761!3d41.09286919972315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a9716da9999ae7%3A0x9908421e5a21d0f3!2zzpvPjc66zrXOuc6_IM6VzrvOu863zr3Or860z4nOvSDOo861z4HPgc-Ozr0!5e0!3m2!1sel!2sgr!4v1693038948584!5m2!1sel!2sgr" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </li>

                        <!-- <div class="li list-group-item d-flex align-items-center">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d578283.2970086727!2d22.928496908003982!3d40.90927018275057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a9716da9999ae7%3A0x9908421e5a21d0f3!2zzpvPjc66zrXOuc6_IM6VzrvOu863zr3Or860z4nOvSDOo861z4HPgc-Ozr0!5e0!3m2!1sel!2sgr!4v1693034889527!5m2!1sel!2sgr" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div> -->
                       
                    </ul>
                </div>
            </div>
            <!-- Right col -->
            <div class="col-md-6 p-5" style="">
                <h2>Επικοινωνία</h2>
                <form method="post" action="{{ route('contact.submit') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label for="input1" class="form-label">Email</label>
                            <input type="text" class="form-control" id="input1" placeholder="Εισάγεται το email σας">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="input2" class="form-label">Τηλέφωνο</label>
                            <input type="text" class="form-control" id="input2" placeholder="Εισάγεται το τηλεφωνό σας">
                        </div>
                    </div>

                    <div class="form-group mb-2">
                        <label for="title">Θέμα</label>
                        <input type="text" class="form-control" id="title" placeholder="Θέμα μυνήματος">
                    </div>
                    <div class="form-group">
                        <label for="text">Κείμενο</label>
                        <textarea class="form-control" id="text" rows="4" placeholder="Γράψτε το κείμενο..."></textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Αποστολή</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('pagespecificscripts')
<!-- <script src="{{ asset('js/gallery-script.js') }}"></script> -->
<!-- <script src="{{ asset('js/gallery-archieve-script.js') }}"></script> -->
@endsection