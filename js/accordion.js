$('.accordion').click(function(e) {
  e.preventDefault();
  var $this = $(this);
  $('.accordion').removeClass("active");

  if ($this.next().hasClass('show')) {
    $this.next().removeClass('show');
    $this.removeClass("active");
    $this.next().slideUp(350);
  } else {
    $this.addClass("active");

    $this.parent().parent().find('.panel').removeClass('show');
    $this.parent().parent().find('.panel').slideUp(350);
    $this.next().toggleClass('show');
    $this.next().slideToggle(350);
  }
});


$('.toggle').click(function(e) {
  e.preventDefault();

  var $this = $(this);

  if ($this.next().hasClass('show')) {
    $this.next().removeClass('show');
    $this.removeClass("active");

    $this.next().slideUp(350);
  } else {
    $this.addClass("active");

    $this.parent().parent().find('li .inner').removeClass('show');
    $this.parent().parent().find('li .inner').slideUp(350);
    $this.next().toggleClass('show');
    $this.next().slideToggle(350);
  }
});