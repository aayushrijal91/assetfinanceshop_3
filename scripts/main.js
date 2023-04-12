document.querySelectorAll('a[href="#form"],a[href="#service"],a[href="#about"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

function initNavigationSlick() {
    if ($(document).width() <= 1200) {
        $("#navigation-bar").slick({
            slidesToShow: 1,
            variableWidth: true,
            slidesToScroll: 1,
            arrows: false,
            touchThreshold: 500
        })
    }

    if ($(document).width() <= 540) {

        $("#solutions-slider").slick({
            slidesToShow: 1,
            centerMode: true,
            arrows: false,
        })
    }
}

initNavigationSlick();

$(window).on('resize', function () { initNavigationSlick() });

$("#partners-slider").slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    variableWidth: true,
    prevArrow: "<img class='a-left control-c prev slick-prev' src='assets/images/icons/slick-prev.png'>",
    nextArrow: "<img class='a-right control-c next slick-next' src='assets/images/icons/slick-next.png'>",
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                arrows: false
            }
        },
        {
            breakpoint: 540,
            settings: {
                slidesToShow: 1,
                variableWidth: false,
                arrows: false
            }
        }
    ]
});

$("#about-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true
});

$('#close-slidenav').on('click', function () {
    $('.slide-nav').removeClass('nav-open');
});

$('.navigation-list li').on('click', function () {
    $('.slide-nav').removeClass('nav-open');
});

$('#triggerSlideNav').on('click', function () {
    $('.slide-nav').addClass('nav-open');
});

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});

// widget form

$('.formwidget_tab').hide();
$('.formwidget_tab.active').fadeIn();

$("#nextWidgetTab").on('click', function () {
    let currentTab = $('.formwidget_tab.active').attr('current-tab');
    let emailRegex = /\S+@\S+\.\S+/;

    if (currentTab == 3) {
        let fullNameInput = $(`.formwidget_tab[current-tab=${currentTab}] #widgetFullNameInput`);
        let abnInput = $(`.formwidget_tab[current-tab=${currentTab}] #widgetAbnInput`);
        let phoneInput = $(`.formwidget_tab[current-tab=${currentTab}] #widgetPhoneInput`);
        let emailInput = $(`.formwidget_tab[current-tab=${currentTab}] #widgetEmailInput`);

        if (fullNameInput.val().trim() == "") {
            fullNameInput.next('.widgetAlert').show();
            return;
        } else {
            fullNameInput.next('.widgetAlert').hide();
        }

        if (abnInput.val().trim() == "") {
            abnInput.next('.widgetAlert').show();
            return;
        } else {
            abnInput.next('.widgetAlert').hide();
        }

        if (phoneInput.val().trim() == "") {
            phoneInput.next('.widgetAlert').show();
            return;
        } else {
            phoneInput.next('.widgetAlert').hide();
        }

        if (emailInput.val().trim() == "") {
            emailInput.next('.widgetAlert').show();
            return;
        } else if (!emailRegex.test(emailInput.val().trim())) {
            emailInput.next('.widgetAlert').show().text('Please provide correct email address');
            return;
        }
        else {
            emailInput.next('.widgetAlert').hide();
        }
    }

    if (currentTab == 4) {
        let loanAmountInput = $(`.formwidget_tab[current-tab=${currentTab}] #widgetLoanAmountInput`);

        if (loanAmountInput.val().trim() == "") {
            loanAmountInput.next('.widgetAlert').show();
            return;
        } else {
            loanAmountInput.next('.widgetAlert').hide();
        }
    }

    if (currentTab == 1 || currentTab == 2) {
        $(this).text('Next')
            .removeClass('btn-primary')
            .removeClass('text-white')
            .addClass('btn-white')
            .addClass('text-primary');
    } else if (currentTab > 2) {
        $(this).text('Submit')
            .removeClass('btn-white')
            .removeClass('text-primary')
            .addClass('btn-primary')
            .addClass('text-white');
    }

    if (currentTab > 3) {
        $("#widgetForm").submit();
    }

    $(`.formwidget_tab[current-tab=${currentTab}]`).hide().removeClass('active');
    $(`.formwidget_tab[current-tab=${(parseInt(currentTab) + 1).toString()}]`).fadeIn().addClass('active');
})

