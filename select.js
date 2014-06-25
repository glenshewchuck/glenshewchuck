$ = jQuery.noConflict();
jQuery.fn.selectText = function(){
    var doc = document
        , element = this[0]
        , range, selection
    ;
    if (doc.body.createTextRange) {
        range = document.body.createTextRange();
        range.moveToElementText(element);
        range.select();
    } else if (window.getSelection) {
        selection = window.getSelection();        
        range = document.createRange();
        range.selectNodeContents(element);
        selection.removeAllRanges();
        selection.addRange(range);
    }
};

$(document).ready(function(){
  $('.show-report-card-link-text').css('color', 'red');
  $('.show-report-card-link-text').css('cursor', 'pointer');
  $('.show-report-card-link-text').click(function() {
    $('#report-card-link-div').dialog({modal: true, title: 'Copy this HTML to use on your site', width: 550});
    var linkit = $(this).attr('linkit');
    var link = '<div id="selectlink"><a href="www.google.com">This is a test for nid ' + linkit + '</a></div>';
    $("#selectlink" ).replaceWith(link);
    $('#report-card-link-div').dialog({modal: true, title: 'Copy this HTML to use on your site', width: 550}, { position: { my: "center", at: "top", of: window } });
    $('#selectlink').selectText();
  });
});
