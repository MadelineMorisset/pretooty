$(function () {
    let includes = $('[data-include]');
    $.each(includes, function () {
      let file = 'views/' + $(this).data('include') + '.html'
      $(this).load(file);
    })
})