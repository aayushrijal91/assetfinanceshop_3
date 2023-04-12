<?php $ctas = array(
    "7k" => "Assets Financed &amp; Businesses Helped",
    "$150m" => "Total business funding",
    "80+" => "Lenders to compare",
    "6.5" => "Years of business support",
    "98%" => "Client success rate",
); ?>

<div class="banner_3 banner_wrapper">
    <div class="container">
        <section class="banner">
            <div class="row gy-4 gy-md-0">
                <div class="col-lg-6">
                    <div class="row gy-4 gy-md-0">
                        <div class="col-lg-10">
                            <h1 class="fs-72 fw-700 lh-1 text-capitalize text-white text-center text-lg-start">commercial Asset Finance Made Easy Australia Wide</h1>
                        </div>
                        <div class="col-12">
                            <div class="fs-20 py-4 text-white description">
                                Looking to secure financing for commercial assets in Australia? Whether you’re in the market for new or used trucks, trailers, business vehicles, heavy machinery, construction and earthmoving equipment, our brokers are well-equipped to help you find the right financing solution.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form_wrapper<?= $thankyou_page ? ' thankyou' : '' ?>">
                        <?php if (!$thankyou_page) { ?>
                            <form src="./src/form" method="POST" id="widgetForm">
                                <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
                                <div class="formwidget_wrapper">
                                    <div class="formwidget_tab active" current-tab="1">
                                        <svg width="78" height="78" viewBox="0 0 78 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M60.6 3H7.8C5.14903 3 3 5.14903 3 7.8V70.2C3 72.851 5.14903 75 7.8 75H60.6C63.251 75 65.4 72.851 65.4 70.2V7.8C65.4 5.14903 63.251 3 60.6 3Z" stroke="#44D2FF" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M50.9999 17.4H17.3999V36.6H50.9999V17.4Z" stroke="#44D2FF" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M75 12.6V22.2" stroke="#44D2FF" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M75 31.8V41.4" stroke="#44D2FF" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <h2 class="fs-48 fw-700 text-primary lh-1 pt-4">Get Pre-Approved<br> for Asset Finance!</h2>
                                        <div class="fs-20 fw-500 text-grey pt-4 pb-4">Fill in our short form and get a free no-obligation quote that will have zero impact on your credit score*</div>
                                    </div>
                                    <div class="formwidget_tab" current-tab="2">
                                        <div class="fs-30 fw-700 text-capitalize text-primary lh-1 pb-4">Choose your type of finance</div>
                                        <div class="row gy-1 pb-4">
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="financeType" value="Truck Fianance" id="truckFiananceCheckbox">
                                                    <label class="form-check-label" for="truckFiananceCheckbox">
                                                        Truck Fianance
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="financeType" value="Trailer Fianance" id="truckFiananceCheckbox">
                                                    <label class="form-check-label" for="truckFiananceCheckbox">
                                                        Trailer Fianance
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="financeType" value="Heavy Machinery Fianace" id="heavyMachineryFianaceCheckbox" checked>
                                                    <label class="form-check-label" for="heavyMachineryFianaceCheckbox">
                                                        Heavy Machinery Fianace
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="financeType" value="Construction Equipment Finance" id="truckFiananceCheckbox">
                                                    <label class="form-check-label" for="truckFiananceCheckbox">
                                                        Construction Equipment Finance
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="financeType" value="Earthmoving Equipment Finance" id="truckFiananceCheckbox">
                                                    <label class="form-check-label" for="truckFiananceCheckbox">
                                                        Earthmoving Equipment Finance
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="financeType" value="Farm Equipment Finance" id="truckFiananceCheckbox">
                                                    <label class="form-check-label" for="truckFiananceCheckbox">
                                                        Farm Equipment Finance
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="financeType" value="Business Vehicle Finance" id="truckFiananceCheckbox">
                                                    <label class="form-check-label" for="truckFiananceCheckbox">
                                                        Business Vehicle Finance
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="financeType" value="Business Ute Finance" id="truckFiananceCheckbox">
                                                    <label class="form-check-label" for="truckFiananceCheckbox">
                                                        Business Ute Finance
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="financeType" value="Business Van Finance" id="truckFiananceCheckbox">
                                                    <label class="form-check-label" for="truckFiananceCheckbox">
                                                        Business Van Finance
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="financeType" value="Business Car Finance" id="truckFiananceCheckbox">
                                                    <label class="form-check-label" for="truckFiananceCheckbox">
                                                        Business Car Finance
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="financeType" value="Asset Refinancing" id="truckFiananceCheckbox">
                                                    <label class="form-check-label" for="truckFiananceCheckbox">
                                                        Asset Refinancing
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="financeType" value="Small Business Loan" id="truckFiananceCheckbox">
                                                    <label class="form-check-label" for="truckFiananceCheckbox">
                                                        Small Business Loan
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="financeType" value="Other" id="truckFiananceCheckbox">
                                                    <label class="form-check-label" for="truckFiananceCheckbox">
                                                        Other
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="formwidget_tab" current-tab="3">
                                        <div class="fs-30 fw-700 text-capitalize text-primary lh-1 pb-4">Personal Details</div>
                                        <div class="row gy-2 pb-4">
                                            <div class="col-12">
                                                <input type="text" class="form-control" id="widgetFullNameInput" name="fname" placeholder="Your Full Name*" required />
                                                <span class="small widgetAlert">Please fill full name.</span>
                                            </div>
                                            <div class="col-12">
                                                <input type="text" class="form-control" id="widgetAbnInput" name="abn" placeholder="Business Name or ABN" />
                                                <span class="small widgetAlert">Please fill business name.</span>
                                            </div>
                                            <div class="col-12">
                                                <input type="tel" class="form-control" id="widgetPhoneInput" name="phoneNumber" placeholder="Your Phone Number*" required />
                                                <span class="small widgetAlert">Please fill phone number.</span>
                                            </div>
                                            <div class="col-12">
                                                <input type="email" class="form-control" id="widgetEmailInput" name="email" placeholder="Your Email*" required />
                                                <span class="small widgetAlert">Please fill email address.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="formwidget_tab" current-tab="4">
                                        <div class="fs-30 fw-700 text-capitalize text-primary lh-1 pb-4">Loan Amount & business detail</div>
                                        <div class="row gy-3 pb-4">
                                            <div class="col-12">
                                                <input type="text" class="form-control" id="widgetLoanAmountInput" name="loanAmount" placeholder="Estimated Loan Amount" />
                                                <span class="small widgetAlert">Please fill loan amount.</span>
                                            </div>
                                            <div class="col-12">
                                                <textarea name="comment" rows="4" placeholder="Additional Asset of Business Details (Optional)" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" id="nextWidgetTab" class="btn btn-primary border-primary text-white d-inline-flex rounded-20 px-5 px-xxl-7">Start</button>
                            </form>
                        <?php } else { ?>
                            <svg width="114" height="114" viewBox="0 0 114 114" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M48.7322 62.5768L50.5 64.3445L52.2678 62.5768L73.6723 41.1723C75.2375 39.6071 77.7625 39.6071 79.3277 41.1723C80.8929 42.7375 80.8929 45.2625 79.3277 46.8277L53.3277 72.8277C52.5468 73.6087 51.5265 74 50.5 74C49.4735 74 48.4532 73.6087 47.6723 72.8277L34.6723 59.8277C33.1071 58.2625 33.1071 55.7375 34.6723 54.1723C36.2375 52.6071 38.7625 52.6071 40.3277 54.1723L48.7322 62.5768ZM57 2.5C27.0193 2.5 2.5 27.0193 2.5 57C2.5 86.9807 27.0193 111.5 57 111.5C86.9807 111.5 111.5 86.9807 111.5 57C111.5 27.0193 86.9807 2.5 57 2.5Z" stroke="#44D2FF" stroke-width="5" />
                            </svg>
                            <div class="fs-48 fw-700 lh-1 text-primary">Thank you For<br /> Your Submission</div>
                            <div class="fs-20 fw-500 text-grey">Our team will get back to you as soon as we<br /> can!</div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>

        <div class="cta_wrapper">
            <div class="row gy-2">
                <?php foreach ($ctas as $key => $value) : ?>
                    <div class="col-md-4 col-lg">
                        <div class="banner_card">
                            <div class="row gy-md-2">
                                <div class="col-5 col-md-12">
                                    <div class="fs-64 fw-700 text-center text-primary"><?= $key ?></div>
                                </div>
                                <div class="col col-md-12">
                                    <div class="text-capitalize text-grey fs-24 fw-500"><?= $value ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<section class="solutions">
    <div class="container">
        <div class="row justify-content-center align-items-center pb-5 pb-md-7">
            <div class="col-md">
                <div class="fs-48 text-white fw-300 lh-1 text-center text-md-start">Streamline your finances with our <span class="text-primary fw-500">easy solutions</span></div>
            </div>
            <div class="col-auto d-none d-md-block">
                <a href="#form" class="btn btn-primary rounded-20 text-white fw-700 px-xl-5">Get Started</a>
            </div>
        </div>

        <div class="row justify-content-center gy-md-4 gy-xl-0" id="solutions-slider">
            <div class="col-md-6 col-lg-4 col-xl">
                <div class="solution_card">
                    <?= renderImg("solution-1.jpg", "lib", "bg-img") ?>
                    <div class="inner">
                        <div class="d-flex align-items-center gap-3">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.4179 18.8059L15.125 19.513L15.8321 18.8059L22.0065 12.6315C22.3491 12.2889 22.9009 12.2889 23.2435 12.6315C23.5861 12.9741 23.5861 13.5259 23.2435 13.8685L15.7435 21.3685C15.5725 21.5395 15.35 21.625 15.125 21.625C14.9 21.625 14.6775 21.5395 14.5065 21.3685L10.7565 17.6185C10.4139 17.2759 10.4139 16.7241 10.7565 16.3815C11.0991 16.0389 11.6509 16.0389 11.9935 16.3815L14.4179 18.8059ZM17 1C8.19772 1 1 8.19772 1 17C1 25.8023 8.19772 33 17 33C25.8023 33 33 25.8023 33 17C33 8.19772 25.8023 1 17 1Z" stroke="#44D2FF" stroke-width="2" />
                            </svg>
                            <div>Fill in our short form</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl">
                <div class="solution_card">
                    <?= renderImg("solution-2.jpg", "lib", "bg-img") ?>
                    <div class="inner">
                        <div class="d-flex align-items-center gap-3">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.4179 18.8059L15.125 19.513L15.8321 18.8059L22.0065 12.6315C22.3491 12.2889 22.9009 12.2889 23.2435 12.6315C23.5861 12.9741 23.5861 13.5259 23.2435 13.8685L15.7435 21.3685C15.5725 21.5395 15.35 21.625 15.125 21.625C14.9 21.625 14.6775 21.5395 14.5065 21.3685L10.7565 17.6185C10.4139 17.2759 10.4139 16.7241 10.7565 16.3815C11.0991 16.0389 11.6509 16.0389 11.9935 16.3815L14.4179 18.8059ZM17 1C8.19772 1 1 8.19772 1 17C1 25.8023 8.19772 33 17 33C25.8023 33 33 25.8023 33 17C33 8.19772 25.8023 1 17 1Z" stroke="#44D2FF" stroke-width="2" />
                            </svg>
                            <div>Get a free quote</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl">
                <div class="solution_card">
                    <?= renderImg("solution-3.jpg", "lib", "bg-img") ?>
                    <div class="inner">
                        <div class="d-flex align-items-center gap-3">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.4179 18.8059L15.125 19.513L15.8321 18.8059L22.0065 12.6315C22.3491 12.2889 22.9009 12.2889 23.2435 12.6315C23.5861 12.9741 23.5861 13.5259 23.2435 13.8685L15.7435 21.3685C15.5725 21.5395 15.35 21.625 15.125 21.625C14.9 21.625 14.6775 21.5395 14.5065 21.3685L10.7565 17.6185C10.4139 17.2759 10.4139 16.7241 10.7565 16.3815C11.0991 16.0389 11.6509 16.0389 11.9935 16.3815L14.4179 18.8059ZM17 1C8.19772 1 1 8.19772 1 17C1 25.8023 8.19772 33 17 33C25.8023 33 33 25.8023 33 17C33 8.19772 25.8023 1 17 1Z" stroke="#44D2FF" stroke-width="2" />
                            </svg>
                            <div>Conditional approval</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl">
                <div class="solution_card">
                    <?= renderImg("solution-4.jpg", "lib", "bg-img") ?>
                    <div class="inner">
                        <div class="d-flex align-items-center gap-3">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.4179 18.8059L15.125 19.513L15.8321 18.8059L22.0065 12.6315C22.3491 12.2889 22.9009 12.2889 23.2435 12.6315C23.5861 12.9741 23.5861 13.5259 23.2435 13.8685L15.7435 21.3685C15.5725 21.5395 15.35 21.625 15.125 21.625C14.9 21.625 14.6775 21.5395 14.5065 21.3685L10.7565 17.6185C10.4139 17.2759 10.4139 16.7241 10.7565 16.3815C11.0991 16.0389 11.6509 16.0389 11.9935 16.3815L14.4179 18.8059ZM17 1C8.19772 1 1 8.19772 1 17C1 25.8023 8.19772 33 17 33C25.8023 33 33 25.8023 33 17C33 8.19772 25.8023 1 17 1Z" stroke="#44D2FF" stroke-width="2" />
                            </svg>
                            <div>Sign loan documents</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl">
                <div class="solution_card">
                    <?= renderImg("solution-5.jpg", "lib", "bg-img") ?>
                    <div class="inner">
                        <div class="d-flex align-items-center gap-3">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 0C7.65 0 0 7.65 0 17C0 26.35 7.65 34 17 34C26.35 34 34 26.35 34 17C34 7.65 26.35 0 17 0ZM24.8774 14.2524L16.3774 22.7524C15.963 23.1667 15.419 23.375 14.875 23.375C14.331 23.375 13.787 23.1667 13.3726 22.7524L9.12263 18.5024C8.29175 17.6715 8.29175 16.3285 9.12263 15.4976C9.9535 14.6668 11.2965 14.6668 12.1274 15.4976L14.875 18.2453L21.8726 11.2476C22.7035 10.4168 24.0465 10.4168 24.8774 11.2476C25.7082 12.0785 25.7082 13.4215 24.8774 14.2524Z" fill="#79E2FA" />
                            </svg>
                            <div>Get Funded</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center d-md-none pt-5">
            <a href="#form" class="btn btn-primary rounded-20 text-white fw-700 px-5">Get Started</a>
        </div>
    </div>
</section>

<section class="about">
    <div class="container">
        <div class="row pb-5 pb-md-7 gy-5 gy-lg-0 text-center text-lg-start">
            <div class="col-lg-4 col-xl-3">
                <div class="fs-48 fw-300 text-grey lh-1"><span class="text-primary fw-400">What</span> We Do</div>
            </div>
            <div class="col-lg">
                <div class="fs-20 fw-300 text-grey">
                    We understand that navigating the world of commercial finance can be daunting, which is why we offer a hassle-free approach to securing the funds you need. Our team works with more than 80+ of Australia’s top banks and non-bank lenders, giving you unparalleled access to a wide range of financing options.
                </div>
            </div>
        </div>

        <?php $about_list = array(
            "Instant Over The Phone Pre-Approvals",
            "Fast & Hassle-Free Funding With No Wait Times",
            "Borrow From $10K-$2M",
            "No Doc And Low Doc Loans",
            "No Deposit Options",
            "Little To No Paperwork Required",
            "New And Existing ABNs",
            "Non-Property Owners Accepted",
            "Any New Or Used Assets",
            "Dealer or Private Sales",
            "Sale and Buy Back",
            "Poor Credit History Solutions"
        ); ?>

        <div class="row g-2 g-md-3 d-none d-md-flex">
            <?php foreach ($about_list as $val) : ?>
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <div class="about_card">
                        <?= renderImg("boldtick.png", 'icons') ?>
                        <?= $val ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div id="about-slider" class="d-md-none">
            <?php $init = 3; ?>
            <?php for ($i = 1; $i <= 3; $i++) { ?>
                <div>
                    <?php for ($j = ($init - 3); $j <= $init; $j++) { ?>
                        <div class="about_card">
                            <?= renderImg("boldtick.png", 'icons') ?>
                            <?= $about_list[$j] ?>
                        </div>
                    <?php } ?>
                </div>
                <?php $init += 4; ?>
            <?php } ?>
        </div>
    </div>
</section>

<section class="finance" id="service">
    <div class="container">
        <div class="row align-items-center pb-5 pb-md-7">
            <div class="col-md text-center text-md-start">
                <div class="fs-48 text-white fw-300 lh-1">What We <span class="text-primary fw-500">Finance</span></div>
            </div>
            <div class="col-auto d-none d-md-block">
                <a href="#form" class="btn btn-primary rounded-20 text-white fw-700 px-xl-5">Get Started</a>
            </div>
        </div>

        <div class="row justify-content-center g-2 g-md-3">
            <?php $finance_list = array(
                "Truck Finance",
                "Trailer Finance",
                "Business Vehicle<br /> Finance",
                "Machinery &<br /> Equipment Finance",
                "Forestry<br /> Equipment Finance",
                "Farm Equipment<br /> Finance",
                "Asset Refinance",
                "Business Loans",
            );

            foreach ($finance_list as $key => $val) : ?>
                <div class="col-6 col-lg-4 col-xl-3">
                    <div class="finance_card">
                        <?= renderImg("finance-" . $key + 1 . ".jpg", "lib", "bg-img") ?>
                        <div class="inner">
                            <div class="text-center w-100">
                                <?= renderImg("finance-" . $key + 1 . ".png", "icons") ?>
                                <div class="title"><?= $val ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="d-flex justify-content-center d-md-none pt-5">
            <a href="#form" class="btn btn-primary rounded-20 text-white fw-700 px-5">Get Started</a>
        </div>
    </div>
</section>

<section class="why-us" id="about">
    <div class="container">
        <div class="row pb-5 pb-md-7 gy-5 gy-lg-0 text-center text-lg-start">
            <div class="col-lg-4 col-xl-3">
                <div class="fs-48 fw-300 text-white lh-1"><span class="fw-500">Why</span> Choose Us</div>
            </div>
            <div class="col">
                <div class="fs-20 fw-300 text-white">
                    With our expertise and vast network, you can trust that we’ll find the best possible solution for your unique needs. So if you’re looking for a finance broker who can get the job done right the first time, don’t hesitate to reach out to our team today. We’ll help you secure the financing you need to take your business to the next level
                </div>
            </div>
        </div>

        <div class="row justify-content-center gy-2 gy-md-3 gy-xl-0 gx-3">
            <?php $whyus_list = array(
                "Personalised Service",
                "Assisting Clients Australia Wide",
                "30+ Years Experience",
                "We Work For YOU Not The Banks",
                "Fast Approvals"
            );

            foreach ($whyus_list as $key => $val) : ?>
                <div class="col-md-4 col-xl-2">
                    <div class="whyus_card">
                        <div class="row justify-content-center align-items-center gy-md-3">
                            <div class="col-3 col-md-auto"><?= renderImg("whyus-" . $key + 1 . ".png", 'icons') ?></div>
                            <div class="col col-md-12"><?= $val ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="col-md-4 col-xl-2">
                <div class="whyus_card bg-primary text-white py-4 text-center text-md-start">
                    <div class="row justify-content-center gy-4 text-center">
                        <div class="col-12">
                            We Can Fast Track Your Financial Success
                        </div>
                        <div class="col-8 col-md-12">
                            <a href="#form" class="btn btn-white rounded-20 text-dark fw-700 px-4">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="partners">
    <div class="container">
        <div class="row gx-xl-7 gy-5 px-5 px-md-3">
            <div class="col-md-4">
                <div class="h-100 d-flex justify-content-center align-items-center">
                    <?= renderImg("partner-1.png", "logo") ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="h-100 d-flex justify-content-center align-items-center">
                    <?= renderImg("partner-2.png", "logo") ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="h-100 d-flex justify-content-center align-items-center">
                    <?= renderImg("partner-3.png", "logo") ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="h-100 d-flex justify-content-center align-items-center">
                    <?= renderImg("partner-4.png", "logo") ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="h-100 d-flex justify-content-center align-items-center">
                    <?= renderImg("partner-5.png", "logo") ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="h-100 d-flex justify-content-center align-items-center">
                    <?= renderImg("partner-6.png", "logo") ?>
                </div>
            </div>
        </div>

        <div class="pilot-text fs-48 fw-300 text-grey lh-1 text-center px-4 px-md-0">The Asset Finance Shop is accredited with the following <span class="text-primary fw-500">major finance partners</span> and many more around Australia.</div>

        <div class="row justify-content-center">
            <div class="col-xl-8 col-xxl-7">
                <div id="partners-slider">
                    <?php for ($i = 2; $i <= 28; $i++) : ?>
                        <div><?= renderImg("brand-" . $i . ".png", "logo") ?></div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</section>