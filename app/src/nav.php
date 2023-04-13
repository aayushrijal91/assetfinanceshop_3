<header>
    <div class="slide-nav d-flex flex-column justify-content-between">
        <div class="d-flex justify-content-between align-items-center">
            <a href="./" class=""><?= renderImg("logo-white.png", "logo") ?></a>
            <a href="javascript:void(0)" id="close-slidenav">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 16L16 2M2 2L16 16" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
        </div>
        <div>
            <ul class="navigation-list">
                <li><a href="#service">Truck Finance</a></li>
                <li><a href="#service">Trailer Finance</a></li>
                <li><a href="#service">Machinery &amp; Equipment Finance</a></li>
                <li><a href="#service">Business Vehicle Finance</a></li>
                <li><a href="#service">Business Loans</a></li>
                <li><a href="#about">About Us</a></li>
                <li>
                    <button type="button" id="mobileReferralProgramBtn" data-bs-toggle="modal" data-bs-target="#referralProgramForm">
                        Referral Program
                    </button>
                </li>
            </ul>
        </div>
        <div class="row align-items-center nav-btns">
            <div class="col-12">
                <a href="<?= $phone_number ?>" class="btn btn-primary rounded-20 text-white px-4 fw-600 fs-24">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.023 14.8229L14.067 17.2642C11.0383 15.4846 8.51379 12.9616 6.73245 9.93391L9.17758 7.97791C9.46405 7.74846 9.66651 7.43062 9.75334 7.07401C9.84018 6.71739 9.8065 6.34206 9.65758 6.0066L7.42887 0.987701C7.26905 0.627727 6.98659 0.336201 6.63184 0.165081C6.2771 -0.00603877 5.87311 -0.0456326 5.49189 0.0533565L1.24882 1.15405C0.853009 1.25755 0.508891 1.5026 0.281636 1.84279C0.0543801 2.18298 -0.0402356 2.5947 0.0157064 2.99998C0.760286 8.30199 3.21075 13.2175 6.99666 17.0034C10.7826 20.7892 15.6981 23.2397 21.0002 23.9842C21.4054 24.0403 21.8172 23.9457 22.1574 23.7184C22.4977 23.4912 22.7427 23.147 22.8461 22.7511L23.9468 18.5085C24.0456 18.1273 24.0059 17.7234 23.8349 17.3687C23.6639 17.0139 23.3726 16.7313 23.0129 16.5711L17.9948 14.3425C17.6592 14.1933 17.2837 14.1596 16.927 14.2465C16.5702 14.3334 16.2523 14.5361 16.023 14.8229Z" fill="white" />
                    </svg>
                    <span class="ps-2"><?= $phone_number ?></span>
                </a>
            </div>
            <div class="col-12">
                <a href="mailto:<?= $admin_email ?>" class="btn rounded-2 text-white px-0 fs-18 fw-300">
                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 0H2C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2V2.4L8 6.9L16 2.5V2C16 1.46957 15.7893 0.960859 15.4142 0.585786C15.0391 0.210714 14.5304 0 14 0Z" fill="#44D2FF" />
                        <path d="M7.5 8.9L0 4.7V12C0 12.5304 0.210714 13.0391 0.585786 13.4142C0.960859 13.7893 1.46957 14 2 14H14C14.5304 14 15.0391 13.7893 15.4142 13.4142C15.7893 13.0391 16 12.5304 16 12V4.7L8.5 8.9C8.3424 8.96924 8.17214 9.005 8 9.005C7.82786 9.005 7.6576 8.96924 7.5 8.9Z" fill="#44D2FF" />
                    </svg>
                    <span class="ps-2"><?= $admin_email ?></span>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header-top-bar">
            <div class="row justify-content-between align-items-center">
                <div class="col-4 col-md-auto">
                    <a href="./">
                        <?= renderImg("logo.png", "logo") ?>
                    </a>
                </div>
                <div class="col-auto d-md-none">
                    <a href="javascript:void(0)" id="triggerSlideNav">
                        <svg width="24" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 16H22M2 2H22M2 9H22" stroke="#5F5F70" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
                <div class="col-auto d-none d-md-block">
                    <div class="row justify-content-center justify-content-lg-end align-items-center">
                        <div class="col-12 col-md-auto d-none d-lg-block">
                            <a href="mailto:<?= $admin_email ?>" class="btn rounded-0 text-grey fs-18 gap-2">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14 0H2C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2V2.4L8 6.9L16 2.5V2C16 1.46957 15.7893 0.960859 15.4142 0.585786C15.0391 0.210714 14.5304 0 14 0Z" fill="#44D2FF" />
                                    <path d="M7.5 8.9L0 4.7V12C0 12.5304 0.210714 13.0391 0.585786 13.4142C0.960859 13.7893 1.46957 14 2 14H14C14.5304 14 15.0391 13.7893 15.4142 13.4142C15.7893 13.0391 16 12.5304 16 12V4.7L8.5 8.9C8.3424 8.96924 8.17214 9.005 8 9.005C7.82786 9.005 7.6576 8.96924 7.5 8.9Z" fill="#44D2FF" />
                                </svg>
                                <?= $admin_email ?>
                            </a>
                        </div>
                        <div class="col-12 col-md-auto">
                            <a href="tel:<?= $phone_number ?>" class="btn btn-secondary rounded-20 fw-700 text-white gap-2">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.682 9.88191L9.378 11.5095C7.35885 10.3231 5.67586 8.64106 4.4883 6.6226L6.11838 5.3186C6.30937 5.16564 6.44434 4.95375 6.50223 4.716C6.56012 4.47826 6.53767 4.22804 6.43839 4.0044L4.95258 0.658467C4.84603 0.418485 4.65773 0.224134 4.42123 0.110054C4.18473 -0.00402584 3.91541 -0.0304217 3.66126 0.035571L0.832547 0.769364C0.568672 0.838364 0.339261 1.00173 0.187757 1.22853C0.0362534 1.45532 -0.0268237 1.7298 0.0104709 1.99998C0.506858 5.53466 2.1405 8.81165 4.66444 11.3356C7.18838 13.8595 10.4654 15.4931 14.0001 15.9895C14.2703 16.0269 14.5448 15.9638 14.7716 15.8123C14.9984 15.6608 15.1618 15.4313 15.2307 15.1674L15.9645 12.339C16.0304 12.0849 16.004 11.8156 15.89 11.5791C15.776 11.3426 15.5818 11.1542 15.3419 11.0474L11.9965 9.56164C11.7728 9.46222 11.5225 9.43973 11.2847 9.49768C11.0468 9.55562 10.8349 9.69075 10.682 9.88191Z" fill="white" />
                                </svg>
                                <?= $phone_number ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pe-0 px-lg-3">
        <ul class="navigation-bar" id="navigation-bar">
            <li><a href="#service" class="btn rounded-pill btn-light text-grey px-4 fs-14">Truck Finance</a></li>
            <li><a href="#service" class="btn rounded-pill btn-light text-grey px-4 fs-14">Trailer Finance</a></li>
            <li><a href="#service" class="btn rounded-pill btn-light text-grey px-4 fs-14">Machinery &amp; Equipment Finance</a></li>
            <li><a href="#service" class="btn rounded-pill btn-light text-grey px-4 fs-14">Business Vehicle Finance</a></li>
            <li><a href="#service" class="btn rounded-pill btn-light text-grey px-4 fs-14">Business Loans</a></li>
            <li><a href="#about" class="btn rounded-pill btn-light text-grey px-4 fs-14">About Us</a></li>
            <li>
                <button type="button" class="btn rounded-pill btn-light text-grey px-4 fs-14" data-bs-toggle="modal" data-bs-target="#referralProgramForm">
                    Referral Program
                </button>
            </li>
        </ul>
    </div>
</header>