<?php include('header.php')?>
    <section>
        <div class="container py-lg-3 text-center">
            <h1 class="contacth1 my-3">Check-out</h1>
        </div>
        <div class="row mb-4">
            <div class="col-12 col-lg-6 offset-lg-3">
                <article class="card">
                    <div class="card-body p-md-5">
                        <ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
                            <li class="nav-item check-outpills">
                                <a class="nav-link active" data-toggle="pill" href="#nav-tab-card">
                                    <i class="fa fa-credit-card"></i> Kredietkaart</a></li>
                            <li class="nav-item check-outpills">
                                <a class="nav-link" data-toggle="pill" href="#nav-tab-paypal">
                                    <i class="fab fa-paypal"></i> Paypal</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="nav-tab-card">
                                <form role="form">
                                    <div class="form-group">
                                        <label class="mb-1">Volledige naam op kaart</label>
                                        <input type="text" class="form-control" name="username" placeholder="" required="">
                                    </div>

                                    <div class="form-group">
                                        <label class="mb-1">Kaartnummer</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="cardNumber" placeholder="">
                                            <div class="input-group-append">
                                                <span class="input-group-text text-muted">
                                                    <i class="fab fa-cc-visa"></i>  
                                                    <i class="fab fa-cc-amex"></i>  
                                                    <i class="fab fa-cc-mastercard"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label class="mb-1"><span class="hidden-xs ">Vervaldatum</span> </label>
                                                <div class="input-group mb-3">
                                                    <select class="custom-select">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                    <select class="custom-select">
                                                        <option value="1">2019</option>
                                                        <option value="2">2020</option>
                                                        <option value="3">2021</option>
                                                        <option value="4">2022</option>
                                                        <option value="5">2023</option>
                                                        <option value="6">2024</option>
                                                        <option value="7">2025</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label class="mb-1" data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
                                                <input type="number" class="form-control" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-check-out btn-block" type="button">Confirm</button>
                                </form>
                            </div>
                            <div class="tab-pane fade text-center mt-3" id="nav-tab-paypal">
                                <p>
                                    <a href="https://www.paypal.com/be/signin"><button type="button" class="btn btn-check-out btn-block"> <i class="fab fa-paypal"></i> Paypal-login </button></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
<?php include('footer.php')?>