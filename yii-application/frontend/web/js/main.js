// Pre load
$(window).on('load', function () {
	($preloader = $('.preloader')), ($loader = $preloader.find('.prePreloader'));
	$loader.fadeOut();
	$preloader.delay(200).fadeOut('slow');
});

// Анимация текста
new WOW().init();

// Бургер
$(document).ready(function () {
	$('.header__burger').click(function (event) {
		$('.header__burger,.header__container__body-menu').toggleClass('active');
		$('body').toggleClass('lock');
	});
});

// Таб
$('.tabs__block').not(':first').hide();
$('.vigoda__tabs .tabs__item')
	.click(function () {
		$('.vigoda__tabs .tabs__item').removeClass('active').eq($(this).index()).addClass('active');
		$('.tabs__block').hide().eq($(this).index()).fadeIn();
	})
	.eq(0)
	.addClass('active');

// Фильтр и корзина
$(function () {
	'use strict';
	$('.title__box').click(function () {
		$(this).toggleClass('open');
		$(this).next('.list__link').toggleClass('open');
	});

	$('#buttonFilterMini, .title__box-mini').click(function () {
		$('.filter__box-mini').toggleClass('open');
		$('body').toggleClass('lock');
	});
});

// Цвет кнопок в фильтре РАЗМЕРЫ
$('.button-size').click(function () {
	$(this).toggleClass('active');
});

// singup
$(document).ready(function () {
	$('#signup-checkbox').click(function () {
		$('#signup-button').prop('disabled', !$('#signup-checkbox').prop('checked'));
	});

	const checkbox = document.getElementById('signup-checkbox');
	const button = document.getElementById('signup-button');

	checkbox.onclick = () => {
		button.classList.toggle('yes-neon');
		button.classList.toggle('no-neon');
	};
});

// svg
(function () {
	function init(one) {
		var speed = 330,
			easing = mina.backout;

		[].slice.call(document.querySelectorAll('#grid > a')).forEach(function (el) {
			var s = Snap(el.querySelector('svg')),
				path = s.select('path'),
				pathConfig = {
					from: path.attr('d'),
					to: el.getAttribute('data-path-hover'),
				};

			el.addEventListener('mouseenter', function () {
				path.animate({ path: pathConfig.to }, speed, easing);
			});

			el.addEventListener('mouseleave', function () {
				path.animate({ path: pathConfig.from }, speed, easing);
			});
		});
	}

	init();
})();

// что то
(function () {
	function init() {
		var speed = 330,
			easing = mina.backout;

		[].slice.call(document.querySelectorAll('#grid > a')).forEach(function (el) {
			var s = Snap(el.querySelector('svg')),
				path = s.select('path'),
				pathConfig = {
					from: path.attr('d'),
					to: el.getAttribute('data-path-hover'),
				};

			el.addEventListener('mouseenter', function () {
				path.animate({ path: pathConfig.to }, speed, easing);
			});

			el.addEventListener('mouseleave', function () {
				path.animate({ path: pathConfig.from }, speed, easing);
			});
		});
	}

	init();
})();

// Еще что то
$('.open_fast').click(function () {
	$('.popup_fast')
		.fadeIn()
		.css({ top: $(window).scrollTop() + 100 })
		.addClass('active');
	$('.bg_popup').fadeIn();

	$('.bg_popup, .js-close-button').click(function () {
		$('.popup_fast').fadeOut().removeClass('active');
		$('.bg_popup').fadeOut();
	});
});

$(window)
	.scroll(function () {
		$('.popup_fast').css({ top: $(window).scrollTop() + 100 });
	})
	.scroll();

$(document).ready(function () {
	$('#signup-checkbox').click(function () {
		$('#signup-botton').prop('disabled', !$('#signup-checkbox').prop('checked'));
	});
});

$('#myCheckbox').click(function () {
	$('#myButton').prop('disabled', !$('#myCheckbox').prop('checked'));
});

// Кнопка купить при нажатии

var buttons = document.getElementsByClassName('st__button'),
	forEach = Array.prototype.forEach;

forEach.call(buttons, function (b) {
	b.addEventListener('click', addElement);
});

function addElement(e) {
	var addDiv = document.createElement('div'),
		mValue = Math.max(this.clientWidth, this.clientHeight),
		rect = this.getBoundingClientRect();
	(sDiv = addDiv.style), (px = 'px');

	sDiv.width = sDiv.height = mValue + px;
	sDiv.left = e.clientX - rect.left - mValue / 2 + px;
	sDiv.top = e.clientY - rect.top - mValue / 2 + px;

	addDiv.classList.add('pulse');
	this.appendChild(addDiv);
}

// Кнопка up

var btn = $('.button__up');

$(window).scroll(function () {
	if ($(window).scrollTop() > 500) {
		btn.addClass('show');
	} else {
		btn.removeClass('show');
	}
});

btn.on('click', function (e) {
	e.preventDefault();
	$('html, body').animate({ scrollTop: 0 }, '500');
});

// Zoom photo catalog
$(function () {
	$('.minimized').click(function (event) {
		var i_path = $(this).attr('src');
		$('body').append(
			'<div id="overlay"></div><div id="magnify"><img src="' +
				i_path +
				'"><div id="close-popup"><i></i></div></div>'
		);
		$('#magnify').css({
			left: ($(document).width() - $('#magnify').outerWidth()) / 2,
			top: ($(window).height() - $('#magnify').outerHeight()) / 2,
		});
		$('#overlay, #magnify').fadeIn('fast');
	});

	$('body').on('click', '#close-popup, #overlay', function (event) {
		event.preventDefault();

		$('#overlay, #magnify').fadeOut('fast', function () {
			$('#close-popup, #magnify, #overlay').remove();
		});
	});
});

// AJAX для Abonement
$(document).ready(function () {
	$('.add-to-cart').click(function () {
		var id = $(this).attr('data-id');
		$.post('/cart/add/' + id, {}, function (data) {
			$('#cart-count').html(data);
		});
		return false;
	});
});
