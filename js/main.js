(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();


    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.nav-bar').addClass('sticky-top');
        } else {
            $('.nav-bar').removeClass('sticky-top');
        }
    });


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });


    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        items: 1,
        dots: true,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 24,
        dots: false,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            992: {
                items: 2
            }
        }
    });

})(jQuery);



//Nav item active in-active
$(document).ready(function () {
    $('.nav-item').on('click', function () {
        $('.nav-item').removeClass('active');
        $(this).addClass('active');
    });
});


//EMI Calculator

  const loanAmount = document.getElementById('loanAmount');
  const interestRate = document.getElementById('interestRate');
  const loanTenure = document.getElementById('loanTenure');
  const loanAmountDisplay = document.getElementById('loanAmountDisplay');
  const interestRateDisplay = document.getElementById('interestRateDisplay');
  const loanTenureDisplay = document.getElementById('loanTenureDisplay');
  const emiDisplay = document.getElementById('emiDisplay');
  const emiChartCanvas = document.getElementById('emiChart');
  let emiChart;


  loanAmount.addEventListener('input', () => {
    loanAmountDisplay.textContent = `₹${parseInt(loanAmount.value).toLocaleString()}`;
  });

  interestRate.addEventListener('input', () => {
    interestRateDisplay.textContent = `${interestRate.value}%`;
  });

  loanTenure.addEventListener('input', () => {
    loanTenureDisplay.textContent = `${loanTenure.value} years`;
  });


  function calculateEMIValue(principal, rate, years) {
    const monthlyRate = rate / (12 * 100);
    const months = years * 12;
    const emi = (principal * monthlyRate * Math.pow(1 + monthlyRate, months)) /
                (Math.pow(1 + monthlyRate, months) - 1);
    return emi;
  }


  function updateChart(principal, totalInterest) {
    const totalPayment = principal + totalInterest;
    if (emiChart) emiChart.destroy();

    emiChart = new Chart(emiChartCanvas, {
      type: 'pie',
      data: {
        labels: ['Principal Amount', 'Total Interest'],
        datasets: [{
          data: [principal, totalInterest],
          backgroundColor: ['#007bff', '#ffc107'],
        }],
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'bottom',
          },
        },
      },
    });
  }


  function calculateAndDisplayEMI() {
    const principal = parseInt(loanAmount.value);
    const rate = parseFloat(interestRate.value);
    const years = parseInt(loanTenure.value);

    const emi = calculateEMIValue(principal, rate, years);
    const totalPayment = emi * years * 12;
    const totalInterest = totalPayment - principal;

    emiDisplay.textContent = `₹${emi.toFixed(2)}`;
    updateChart(principal, totalInterest);
  }

  window.onload = () => {
    calculateAndDisplayEMI();
  };

  document.getElementById('calculateEMI').addEventListener('click', calculateAndDisplayEMI);


  // side form on scroll

  document.addEventListener("DOMContentLoaded", () => {
    const sideForm = document.getElementById("side-form");
    const contactSection = document.getElementById("contact");
    const closeFormButton = document.getElementById("close-form");

    let formOpened = false;
    let formClosedPermanently = false;  

    const openForm = () => {
        if (!formOpened && !formClosedPermanently) { 
            sideForm.classList.remove("hidden");
            formOpened = true;
        }
    };

    const closeForm = () => {
        if (formOpened) {
            sideForm.classList.add("hidden");
            formOpened = false;
        }
    };

    const permanentlyCloseForm = () => {
        formClosedPermanently = true;
        closeForm();  
    };

    const isInView = (element) => {
        const rect = element.getBoundingClientRect();
        return (
            rect.top < window.innerHeight &&
            rect.bottom > 0
        ); 
    };

    window.addEventListener("scroll", () => {
        if (!formClosedPermanently) {  
            if (isInView(contactSection)) {
                closeForm();
            } else {
                openForm();
            }
        }
    });
    closeFormButton.addEventListener("click", () => {
        permanentlyCloseForm();
    });
});


//menu mobile close on click

const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

navLinks.forEach(link => {
    link.addEventListener('click', () => {
   
        const navbarCollapse = document.getElementById('navbarCollapse');
        const bootstrapCollapse = new bootstrap.Collapse(navbarCollapse, {
            toggle: true
        });
    });
});