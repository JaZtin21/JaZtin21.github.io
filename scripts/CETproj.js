

$(document).ready(function () {

  $('.owlhero').owlCarousel({

    margin: 5,
    nav: false,
    loop: true,
    animateOut: 'fadeOut',
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,


    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  });

  $('.owlnew').owlCarousel({

    nav: false,
    loop: true,
    animateOut: 'fadeOut',
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,

    responsive: {
      0: {
        items: 2
      },
      600: {
        items: 3
      },
      1000: {
        items: 4
      }
    }
  });
  const signUpButton = document.getElementById('signUp');
  const signInButton = document.getElementById('signIn');
  const container = document.getElementById('container');

  signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
  });

  signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
  });

});

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('.bookimg')
        .attr('src', e.target.result)

        .height(250);
    };

    reader.readAsDataURL(input.files[0]);
  }
}